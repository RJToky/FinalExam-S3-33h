<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecureController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata("idPers")) {
            redirect("loginController/");
        }
    }
    
    public function index() {
        
    }
    
}