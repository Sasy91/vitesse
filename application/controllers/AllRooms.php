<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AllRooms extends CI_Controller {

    public function index() {
        $this->load->view('room_one');
    }

}
