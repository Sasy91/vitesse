<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Base
 *
 * @author Sameera
 */
class Room extends CI_Controller {

    public function roomlist() {
        $data["title"] = "room";
        $this->load->view('room_list', $data);
    }

    public function roomdetail() {
        $data["title"] = "room";
        $this->load->view('room_detail', $data);
    }

}
