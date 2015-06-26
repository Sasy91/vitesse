<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function index() {
        $this->load->view('cart');
    }
    
      public function view_item() {
        $this->load->view('view_item');
    }

}
