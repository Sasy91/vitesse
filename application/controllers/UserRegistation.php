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
            'title' => $this->input->post("title"),
            'f_name' => $this->input->post("f_name"),
            'l_name' => $this->input->post("l_name"),
            'id_type' => $this->input->post("id_type"),
            'id_number' => $this->input->post("id_number"),
            'email' => $this->input->post("email"),
            'country' => $this->input->post("country"),
            'tel' => $this->input->post("tel"),
            'user_name' => $this->input->post("username"),
            'password' => MD5($this->input->post("password")),
            'registerd_date' => $this->currentDateTime());

        $registraion_completed = $this->registrationmodel->registerUser($user_data);
        if ($registraion_completed) {
            $data['confirmation'] = "TRUE";
        } else {
            $data['confirmation'] = "FALSE";
        }
        $this->load->view('user_registation', $data);
    }

    function validate_user() {
        $this->load->model('registrationmodel');
        $user_exist = $this->registrationmodel->validateUser($this->input->post("email"));
        echo $user_exist;
    }

    function check_member_login() {
        $email = $this->input->post("username");
        $password = $this->input->post("password");
        if ((isset($email)) && (isset($password))) {
            $result = $this->registrationmodel->check_login($email, $password);
            if ($result) {
                $output = "<i class='fa fa-user'></i>&nbsp;" . $this->session->userdata['loginData']['username'] . " | <a href='#' id='logout' onclick='logout();' style= color: white;'><i class='fa fa-sign-out'></i></a>";
            } else {
                $output = "Invalid";
            }
        } else {
            $this->load->view('user_registation');
        }
        echo $output;
    }

    public function logoutuser() {
        if (!empty($this->input->post("action")) && ($this->input->post("action") == "logout")) {
            $this->session->sess_destroy();
            echo "<a href='#' data-toggle='modal' data-target='#login_form' style='color: white;'>Login</a>";
        } else {
            echo "0";
        }
    }

    private function currentDateTime() {
        date_default_timezone_set("Asia/Colombo");
        $date = date_create();
        $current_time = date_format($date, 'Y-m-d H:i:s');
        return $current_time;
    }

}
