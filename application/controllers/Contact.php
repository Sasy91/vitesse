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
class Contact extends CI_Controller {

    public function contact_one() {
        $data["title"] = "contact";
        $this->load->view('contact_page_one',$data);
    }

    public function contact_two() {
        $data["title"] = "contact";
        $this->load->view('contact_page_two',$data);
    }

}
