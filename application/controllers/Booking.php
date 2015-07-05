<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Booking
 *
 * @author Sameera
 */
class Booking extends CI_Controller {

    function place_booking() {
        $booking_data = array(
            'check_in' => $this->input->post("arrive"),
            'check_out' => $this->input->post("depart"),
            'adult' => $this->input->post("adult"),
            'child' => $this->input->post("child"));
        $room['avi_details'] = $this->roommodel->availableRooms();
    }

    function create_booking() {
        $status = TRUE;
        $room_amount = "";
        $room_price = "";
        $room_name = "";
        $unique_id = "";
        $output = "";
        $this->load->model('imagemodel');
        $roomDetails = $this->imagemodel->getRoomDetails($this->input->post("room_id"));
        if (!empty($roomDetails)) {
            foreach ($roomDetails as $rm_details) {
                $room_price = $rm_details->rm_amount;
                $room_name = $rm_details->rm_name;
            }
        }

        $no_of_weeks = $this->NoOfWeeks(date("m/d/Y", strtotime($this->input->post("check_in"))), date("m/d/Y", strtotime($this->input->post("check_out"))));
        //First Time
        if (empty($this->session->userdata('room_id'))) {
            $unique_id = uniqid();
            $this->session->set_userdata('uniqueId', $unique_id);
        }
        if (!empty($this->input->post("room_id"))) {
            if ($this->input->post("room_id") <= 6) {
                if (($this->input->post("adult") == 2) || ($this->input->post("adult") == 1 && $this->input->post("child") == 1)) {
                    $room_amount = $rm_details->rm_discount_amount;
                    $status = FALSE;
                }
            }
            if ($this->input->post("child") > 0) {
                $room_amount += ($rm_details->rm_discount_amount / 2) * $this->input->post("child");
            }
            if ($status) {
                $room_amount += $room_price * $this->input->post("adult");
            }
            $temp_booking_data = array(
                'unique_id' => $this->session->userdata('uniqueId'),
                'room_id' => $this->input->post("room_id"),
                'tot_guest' => $this->input->post("guests"),
                'adult' => $this->input->post("adult"),
                'child' => $this->input->post("child"),
                'price' => ($room_amount * $no_of_weeks),
                'room_name' => $room_name,
                'room_price' => $room_price,
                'check_in' => date("Y-m-d", strtotime($this->input->post("check_in"))),
                'check_out' => date("Y-m-d", strtotime($this->input->post("check_out"))),
                'audit' => $_SERVER['REMOTE_ADDR']
            );

            $this->session->set_userdata('room_id', $this->input->post("room_id"));
            $confirmation = $this->bookingmodel->temp_booking($temp_booking_data);
            if ($confirmation) {
                $results = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
                $html_output = $this->create_html($results);
                if (!empty($html_output)) {
                    echo $html_output;
                }
            }
        }
    }

    private function create_html($results) {
        $output = "";
        $i = 1;
        foreach ($results as $booking_data) {
            $output .= "<form id='checkinform' style='margin-top: 10px; font-family: sans-serif;' method='POST' action=''><span class='label label-success pull-left'>Reservation " . $i . "</span><a href='#'><span class='label label-danger pull-right del' id='" . $booking_data->room_id . "'>Delete</span></a><br>";
            $output .= "<div class='form-group' ><label style=' color: white; font-size: 14px;'>Arrival</label><input type='text'  id='arriavle' value='" . $booking_data->check_in . "' class='form-control' disabled /></div>";
            $output .= "<div class='form-group'><label style=' color: white; font-size: 14px;'>Departure</label><input type='text' id='departure' value='" . $booking_data->check_out . "' class='form-control' disabled/></div>";
            $output .= "<div class='form-group'><label style=' color: white; font-size: 14px;'>Guests&nbsp;<i style='font-size: 14px;' class='fa fa-user-plus'></i></label><br><label style='font-family: cursive; color: white; font-size: 12px;'> " . $booking_data->adult . "  Adults and " . $booking_data->child . " Children</label></div>";
            $output .= "<div class='form-group'><label style=' color: white; font-size: 14px;'>Room Type&nbsp;<i style='font-size: 14px;' class='fa fa-glass'></i></label><br><label style='font-family: cursive; color: white; font-size: 12px;'>" . $booking_data->room_name . "</label></div>";
            $output .= "<div class='form-group'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'></div>";
            $output .= "<div class='form-group'><label class='pull-left' style=' color: #e4e4e4; font-size: 16px;' >Total Rate</label><span style=' color: #e4e4e4; font-size: 16px;' class='pull-right'>USD " . $booking_data->price . "<br></div>";
            $output .= "<br><div class='form-group'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'></div></form>";
            $i++;
        }
        $output .="<div class='form-group'><button type='button' class='btn btn-warning' onclick='book_another_room();'>Book Another Room</button></div>";
        return $output;
    }

    function delete_booking() {
        $this->bookingmodel->delete_temp_booking($this->input->post("room_id"), $this->session->userdata('uniqueId'));
        $results = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
        $html_output = $this->create_html($results);
        $results_booking = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
        if (empty($results_booking)) {
            $this->session->unset_userdata('room_id');
            echo "FALSE";
        } else if (!empty($html_output)) {
            echo $html_output;
        }
    }

    function NoOfWeeks($date1, $date2) {
        $first = DateTime::createFromFormat('m/d/Y', $date1);
        $second = DateTime::createFromFormat('m/d/Y', $date2);
        return floor($first->diff($second)->days / 7) + 1;
    }

    function add_package() {
        $this->load->model('packagemodel');
        $total = "";
        $invoice = "";
        $room_total = "";
        $package_amount = "";
        if ($this->input->post("action") == "add_packge") {
            $packUList = json_decode($this->input->post("packagers"));
            $guestTList = json_decode($this->input->post("guest"));

            for ($i = 0; $i < count($packUList); $i++) {
                $pro_data = array(
                    'unique_id' => $this->session->userdata('uniqueId'),
                    'package_name' => $this->Packagemodel->getPackagersName($packUList[$i]),
                    'package_amount' => $this->Packagemodel->getPackagers($packUList[$i]),
                    'package' => $packUList[$i],
                    'no_of_guests' => $guestTList[$i],
                    'amount' => ($this->Packagemodel->getPackagers($packUList[$i]) * $guestTList[$i])
                );
                $lastAutoid = $this->bookingmodel->insert_package($pro_data);
            }
            $results = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            foreach ($results as $room_data) {
                $room_total += $room_data->price;
            }
            $results_pack = $this->packagemodel->getTempPackagers($this->session->userdata('uniqueId'));
            foreach ($results_pack as $room_data) {
                $package_amount += $room_data->amount;
            }
            $total = ($room_total + $package_amount);
            $invoice = $this->create_html_invoice($results, $results_pack, $total);
            $this->session->set_userdata('total_booking_amount', $total);
        } else if ($this->input->post("action") == "do_not_add_packge") {
            $results = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            foreach ($results as $room_data) {
                $total += $room_data->price;
            }
            $invoice = $this->create_html_invoice($results, $results_pack, $total);
            $this->session->set_userdata('total_booking_amount', $total);
        }
        if ($this->session->userdata('user_logged')) {
            echo $invoice;
        } else {
            echo FALSE;
        }
    }

    private function create_html_invoice($suite_results, $package_results, $total) {
        $output = "";
        foreach ($suite_results as $suite) {
            $output .="<tr><td>" . $suite->room_name . "</td><td>" . $suite->check_in . "</td><td>" . $suite->check_out . "</td><td class='text-right'><span style='font-weight: bold'>USD&nbsp;" . $suite->room_price . "</span></td>";
            $output .= "<td class='text-right'>" . $suite->tot_guest . "</td><td class='text-right'><span style='font-weight: bold'>USD&nbsp;" . $suite->price . "</span></td></tr>";
        }
        if (!empty($package_results)) {
            $output .= "<tr><td><span style='font-weight: bold'>Orderd Packagers</span></td><td></td><td></td><td></td><td></td><td></td></tr>";
            foreach ($package_results as $package) {
                $output .="<tr><td>" . $package->package_name . "</td><td>-</td><td>-</td><td class='text-right'><span style='font-weight: bold'>USD&nbsp;" . $package->package_amount . "</span></td>";
                $output .= "<td class='text-right'>" . $package->no_of_guests . "</td><td class='text-right'><span style='font-weight: bold'>USD&nbsp;" . $package->amount . "</span></td></tr>";
            }
        }
        $output .= "<tr><td class='highrow'></td><td class='highrow'></td><td class='highrow'></td><td class='highrow'></td><td class='highrow text-center'><strong>Total</strong></td>";
        $output .= "<td class='highrow text-right'><span style='font-weight: bold'>USD&nbsp;" . $total . "</span></td>";
        $output .= "</tr>";

        return $output;
    }

//    function create_booking() {
//        $this->load->library('cart');
//        $room_amount = "";
//        $room_name = "";
//        $this->load->model('imagemodel');
//        $roomDetails = $this->imagemodel->getRoomDetails($this->input->post("room_id"));
//        if (!empty($roomDetails)) {
//            foreach ($roomDetails as $rm_details) {
//                $room_amount = $rm_details->rm_amount * $this->input->post("guests");
//                $room_name = $rm_details->rm_name;
//                $output = $room_name . "*" . $room_amount;
//            }
//        }
//        if (!empty($this->input->post("room_id"))) {
//            $data = array(
//                'id' => $this->input->post("room_id"),
//                'qty' => $this->input->post("guests"),
//                'price' => $room_amount,
//                'name' => $room_name,
//                'options' => array('check_in' => $this->input->post("check_in"), 'check_out' => $this->input->post("check_out"))
//            );
//            $this->cart->insert($data);
//        }
//        //print_r($this->cart->contents());
//        if ($this->cart->total_items() > 0) {
//            $i = 1;
//            foreach ($this->cart->contents() as $items) {
//                $output = "<form id='checkinform' style='margin-top: 10px;' method='POST' action=''>";
//                $output .= "<div class='form-group' ><label style='font-family: sans-serif; color: white; font-size: 14px;'>Arrival</label><input type='text'  id='arriavle' value='" . array('name' => $i [qty], 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5') . "' class='form-control' disabled /></div>";
//                $output .= "<div class='form-group'><label style='font-family: sans-serif; color: white; font-size: 14px;'>Departure</label><input type='text' id='departure' value='" . $items['price'] . "' class='form-control' disabled/></div>";
//
//                $output .= "<div class='form-group'><label style='font-family: sans-serif; color: white; font-size: 14px;'>Guests&nbsp;<i style='font-size: 14px;' class='fa fa-user-plus'></i></label><br><label style='font-family: cursive; color: white; font-size: 12px;'><span id='no_adult'></span>  Adults and <span id='no_child'></span> Children</label></div>";
//                $output .= "<div class='form-group'><label style='font-family: sans-serif; color: white; font-size: 14px;'>Room Type&nbsp;<i style='font-size: 14px;' class='fa fa-glass'></i></label><br><label style='font-family: cursive; color: white; font-size: 12px;'><span id='suite_name'></span></label></div>";
//
//
//                $output .= "<div class='form-group'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'></div>";
//                $output .= "<div class='form-group'><label class='pull-left' style='font-family: sans-serif; color: #e4e4e4; font-size: 16px;' >Total Rate</label><span style='font-family: sans-serif; color: #e4e4e4; font-size: 16px;' class='pull-right'>USD <samp id='amount'></samp></span><br></div>";
//                $output .= "<div class='form-group'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'></div></form>";
//                $i++;
//            }
//        }
//        //$this->session->set_userdata('bookingData', $booking_data);
//        //echo $output;
//    }
    public function expire_session() {
        $this->session->sess_destroy();
        //$this->load->view('admin_login');
    }

    //put your code here
}
