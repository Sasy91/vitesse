<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

    public function index() {
        $this->load->view('rooms');
    }
    
    public function room_one() {
        $this->load->view('room_one');
    }

}
