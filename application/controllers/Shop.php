<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function index() {
        $data['items'] = $this->itemmodel->getAllItems();
        $data['images'] = $this->itemmodel->getAllItemImages();
        $this->load->view('cart', $data);
    }

    public function item_details($id) {
        $data['images'] = $this->itemmodel->getAllItemImages();
        $data['item_detail'] = $this->itemmodel->getItemDetail($id);
        $data['item_img'] = $this->itemmodel->getOneItemImages($id);
        $this->load->view('view_item', $data);
    }

}
