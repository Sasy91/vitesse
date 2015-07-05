<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payments
 *
 * @author Sameera
 */
class Payments extends CI_Controller{

    public function __construct() {
        parent::__construct();
        //$this->load->helper('string');
    }

    public function de_purchase() {
        $config['business'] = 'sameera.vitesse@gmail.com';
        $config['cpp_header_image'] = ''; //Image header url [750 pixels wide by 90 pixels high]
        $config['return'] = 'http://localhost/duwa/vitesse/index.php/room/availabe_rooms';
        $config['cancel_return'] = 'http://localhost/duwa/vitesse/index.php/contact';
        $config['notify_url'] = 'process_payment.php'; //IPN Post
        $config['production'] = FALSE; //Its false by default and will use sandbox
        $config["invoice"] = uniqid(); //The invoice id

        $this->load->library('paypal', $config);

        #$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);

        $this->paypal->add('T-shirt', 2.99, 6); //First item
        $this->paypal->add('Pants', 40);    //Second item
        $this->paypal->add('Blowse', 10, 10, 'B-199-26'); //Third item with code

        $this->paypal->pay(); //Proccess the payment
    }
    
    public function notify_payment(){
        $recived_data = print_r($this->input->post(),TRUE);
        echo '<pre>'.$recived_data.'</pre>';
    }

}
