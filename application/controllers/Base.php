<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    public function index() {
        $this->load->view('index');
    }
      public function rooms() {
        $this->load->view('rooms');
    }
      public function hotel() {
        $this->load->view('hotel');
    }
        public function camp_poe() {
        $this->load->view('camp_poe');
    }

}
