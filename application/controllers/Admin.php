<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        if ($this->session->userdata('loginData')) {
            $this->load->view('admin_index');
        } else {
            $this->load->view('admin_login');
        }
    }

    public function login() {
        if ($this->session->userdata('loginData')) {
            $this->load->view('admin_index');
        } else {
            $this->load->view('admin_login');
        }
    }

    public function check_login() {
        if ($this->session->userdata('loginData')) {
            $this->load->view('admin_index');
        } else {
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            if ((isset($email)) && (isset($password))) {
                $result = $this->loginmodel->check($email, $password);
                if ($result) {
                    $this->load->view('admin_index');
                } else {
                    $msg["wrong_login"] = "Invalid Login!";
                    $this->load->view('admin_login', $msg);
                }
            } else {
                $this->load->view('admin_login');
            }
        }
    }

    public function logoutuser() {
        $this->session->sess_destroy();
        $this->load->view('admin_login');
        
        
        
    }
    

}
