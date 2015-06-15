<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        if ($this->session->userdata('loginData')) {
            $data['result'] = $this->imagemodel->getHomeImages();
            $this->load->view('admin_upload_img', $data);
        } else {
            $this->load->view('admin_login');
        }
    }

    public function manage_images() {

        $data['result'] = $this->imagemodel->getHomeImages();
        $this->load->view('admin_upload_img', $data);
    }

    function upload() {

        $config['upload_path'] = 'C:/wamp/www/duwa/vitesse/resoures/img/';
        $config['allowed_types'] = 'png|jpg|gif';
        $config['max_size'] = '7000';
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
                $data['success_msg'] = '<div class="alert alert-success text-center">Your Image <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
                $data['result'] = $this->imagemodel->getHomeImages();
                $this->load->view('admin_upload_img', $data);
            }
        }
    }

    public function delete($id) {
        $this->imagemodel->deleteImg($id);
        $data['result'] = $this->imagemodel->getHomeImages();
        $this->load->view('admin_upload_img', $data);
    }

}
