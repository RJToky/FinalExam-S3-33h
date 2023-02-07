<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class HomeController extends SecureController {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
    }
    
}