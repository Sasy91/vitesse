<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bookingmodel
 *
 * @author Sameera
 */
class bookingmodel extends CI_Model {

    function temp_booking($temp_data) {

        if ($this->db->insert('temp_booking_data', $temp_data)) {
            $current_txn_id = $this->db->insert_id();
            if (!empty($current_txn_id)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function get_temp_data($session_id) {
        $query = $this->db->get_where('temp_booking_data', array('unique_id' => $session_id));
        return $query->result();
    }

    function delete_temp_booking($room_id, $session_id) {
        $this->db->delete('temp_booking_data', array('unique_id' => $session_id, 'room_id' => $room_id));
    }
    
    function insert_package($pro_data){
        if ($this->db->insert('temp_package_data', $pro_data)) {
            $current_txn_id = $this->db->insert_id();
            if (!empty($current_txn_id)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

}
