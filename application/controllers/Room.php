<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

    private static $room_one = 1;

    public function index() {
        $this->load->view('rooms');
    }

    public function room_one() {

        $room['images'] = $this->imagemodel->getRoomImages("1");
        $room['details'] = $this->imagemodel->getRoomDetails("1");
        $this->load->view('room_one', $room);
    }
    
    public function checkAvailablilty(){
        $this->input->post("arrive");
        $this->input->post("depart");
        $this->input->post("adult");
        $this->input->post("child");
        $this->load->view('available_rooms');
    } 

}
