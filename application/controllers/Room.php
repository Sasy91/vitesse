<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

    //private static $room_one = 1;

    public function index() {
        //$this->load->model('imagemodel');
        //$room['details'] = $this->imagemodel->getRoomParameters();
        $this->load->view('rooms');
    }

    public function room_id($id) {
        $this->load->model('imagemodel');
        $room['images'] = $this->imagemodel->getRoomImages($id);
        $room['details'] = $this->imagemodel->getRoomDetails($id);
        $this->load->view('room_one', $room);
    }
    

    public function check_availablilty() {
        $booking_data = array(
            'check_in' => date("Y-m-d", strtotime($this->input->post("arrive"))),
            'check_out' => date("Y-m-d", strtotime($this->input->post("depart"))),
            'adult' => $this->input->post("adult"),
            'child' => $this->input->post("child"));
        $room = $this->roommodel->availableRooms();

        // $this->load->view('available_rooms', $room);
        $output = "";
        if (!empty($room)) {
            foreach ($room as $rooms) {
                $output .= "<div class='media'><a class='pull-left' href='#' data-toggle='modal' data-target='#sigiriya'><img class='media-object' src='" . base_url() . $rooms->rm_cover_img . "' alt='Media Object'>";
                $output .= "</a><div class='media-body'><h4 class='media-heading'><span style='font-size: 24px;'>" . $rooms->rm_name . "</span></h4><span style='font-size: 28px;'><i class='fa fa-dollar'></i>&nbsp;&nbsp;" . $rooms->rm_amount . "/<span style='font-size: 20px;'>Night</span></span><br>";
                $output .= $rooms->rm_detail . "<br><button type='button' class='btn btn-success'><i class='fa fa-key'></i>&nbsp;&nbsp;Order Now</button>&nbsp;&nbsp;<button type='button' class='btn btn-success'><i class='fa fa-list-alt'></i>&nbsp;&nbsp;View Details</button></div></div></br>";
            }
        } else {
            $output = "<div class='alert alert-danger' role='alert'>We apologize. There is no online availability for what you've requested. Please contact the hotel at 0777777717 for other possible options.</div>";
        }
        echo $output;
    }

    public function availabe_rooms() {
        $booking_data = array(
            'check_in' => $this->input->post("arrive"),
            'check_out' => $this->input->post("depart"),
            'adult' => $this->input->post("adult"),
            'child' => $this->input->post("child"));
        $room['avi_details'] = $this->roommodel->availableRooms();

        $this->load->view('available_rooms', $room);
    }

}
