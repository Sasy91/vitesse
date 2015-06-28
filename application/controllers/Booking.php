<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Booking
 *
 * @author Sameera
 */
class Booking extends CI_Controller {
    
    function place_booking(){
        $booking_data = array(
            'check_in' => $this->input->post("arrive"),
            'check_out' => $this->input->post("depart"),
            'adult' => $this->input->post("adult"),
            'child' => $this->input->post("child"));
        $room['avi_details'] = $this->roommodel->availableRooms();
        
    }
    //put your code here
}
