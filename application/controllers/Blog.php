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
class Blog extends CI_Controller {

    public function blogmain() {
        $data["title"] = "blog";
        $this->load->view('blog', $data);
    }

    public function blogpost() {
        $data["title"] = "blog";
        $this->load->view('blog_post', $data);
    }

}
