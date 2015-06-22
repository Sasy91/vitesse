<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of roommodel
 *
 * @author Sameera
 */
class roommodel extends CI_Model {

    function availableRooms($booking_data) {
        $query = $this->db->query('SELECT rooms.* FROM booking,rooms WHERE DATE(booking.b_check_in) < DATE_SUB('.$booking_data['check_in'].') AND DATE(booking.b_check_out) > DATE_SUB('.$booking_data['check_out'].')');
        $query = $this->db->get('SELECT rooms.* FROM booking,rooms where booking.b_id = 1');
        return $query->result();
    }
    
//    function availableRooms() {
//        $query = $this->db->get('rooms');
//        return $query->result();
//    }

    //put your code here
}
