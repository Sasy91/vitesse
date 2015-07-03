<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Packagemodel
 *
 * @author Sameera
 */
class Packagemodel extends CI_Model {
    
    function getAvailabePackagers(){
        $query = $this->db->get('packagers');
        return $query->result();
    }
    
}
