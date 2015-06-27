<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registrationmodel
 *
 * @author Sameera
 */
class registrationmodel extends CI_Model {

    private $table = "registerd_users";

    function registerUser($userData) {
        if ($this->db->insert($this->table, $userData)) {
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

    function validateUser($email) {
        // $query = $this->db->get($this->table);
        //$query = $this->db->get_where('registerd_users', array('email' => $email));
//        if ($query->num_rows > 0) {
//            return "1";
//        } else {
//            return "0";
//        }
        $query = $this->db->query('SELECT * FROM registerd_users WHERE email = ' . $email);
        $result = $this->db->get($query);
        return $email;
    }

}
