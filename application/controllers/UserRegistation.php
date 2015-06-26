<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRegistation
 *
 * @author Sameera
 */
class UserRegistation extends CI_Controller {

    function index() {
        $this->load->view('user_registation');
    }

    function register_user() {

        $user_data = array(
            'f_name' => mysql_real_escape_string($this->input->post("fname")),
            'l_name' => mysql_real_escape_string($this->input->post("lname")),
            'id_type' => mysql_real_escape_string($this->input->post("id_type")),
            'id_number' => mysql_real_escape_string($this->input->post("id_number")),
            'email' => date("Y-m-d", strtotime($this->input->post("email"))),
            'country' => $this->input->post("country"),
            'tel' => mysql_real_escape_string($this->input->post("tel")),
            'user_name' => mysql_real_escape_string($this->input->post("user_name")),
            'password' => $this->input->post("password"),
            'registerd_date' => $this->currentDateTime());

        $registraion_completed = $this->registrationmodel->registerUser($user_data);
        if ($registraion_completed) {
            $data['confirmation'] = "TRUE";
        } else {
            $data['confirmation'] = "FALSE";
        }
        $this->load->view('admin_upload_img', $data);
    }

    function validate_user() {
        $user_exist = $this->registrationmodel->validateUser($email);
        if ($user_exist) {
            $data['confirmation'] = "TRUE";
        } else {
            $data['confirmation'] = "FALSE";
        }
        $this->load->view('admin_upload_img', $data);
    }

    function check_member_login() {
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        if ((isset($email)) && (isset($password))) {
            $result = $this->registrationmodel->check_login($email, $password);
            if ($result) {
                $msg["wrong_login"] = "Registration Complete. We sent an email to you please follow the instuctions in the email!";
                $this->load->view('user_registation', $msg);
            } else {
                $msg["wrong_login"] = "Invalid Login!";
                $this->load->view('user_registation', $msg);
            }
        } else {
            $this->load->view('user_registation');
        }
    }

    public function logoutuser() {
        $this->session->sess_destroy();
        $this->load->view('index');
    }

    private function currentDateTime() {
        date_default_timezone_set("America/Los_Angeles");
        $date = date_create();
        $current_time = date_format($date, 'Y-m-d H:i:s');
        return $current_time;
    }

}
