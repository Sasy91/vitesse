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
class Gallery extends CI_Controller {

    public function index() {
        $data["title"] = "gallery";
        $this->load->view('gallery', $data);
    }

}
