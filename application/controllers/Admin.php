<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

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

    public function manage_images() {
        $this->load->model('imagemodel');
        $data['result'] = $this->imagemodel->getHomeImages();
        $this->load->view('admin_upload_img', $data);
    }
    
    public function room_images() {
        $this->load->model('imagemodel');
        $room['images'] = $this->imagemodel->getAllRoomImages();
        $room['details'] = $this->imagemodel->getAllRoomDetails();
        //$data['result'] = $this->imagemodel->getHomeImages();
        $this->load->view('admin_room_img', $room);
    }

    public function logoutuser() {
        $this->session->sess_destroy();
        $this->load->view('admin_login');
    }

    function upload() {

        $config['upload_path'] = 'C:/wamp/www/duwa/resoures/img/';
        $config['allowed_types'] = 'png|jpg|gif';
        $config['max_size'] = '500';
        $config['max_width'] = '6000'; /* max width of the image file */
        $config['max_height'] = '4000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('admin_upload_img', $upload_error);
        } else {
            $upload_data = $this->upload->data();
            $imag_data = array(
                'url' => "/resoures/img/" . $upload_data['file_name'],
                'uploaded_by' => $this->session->userdata['loginData']['name'],
                'date' => $this->loginmodel->currentDateTime()
            );
            $saved = $this->imagemodel->saveImage($imag_data);
            if ($saved) {
                $this->load->model('imagemodel');
                $data['success_msg'] = '<div class="alert alert-success text-center">Your Image <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
                $data['result'] = $this->imagemodel->getHomeImages();
                $this->load->view('admin_upload_img', $data);
            }
        }
    }

}
