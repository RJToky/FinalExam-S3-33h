<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropositionController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view("front_office/header");
        $this->load->view("front_office/proposition");
        $this->load->view("footer");
    }
    
}