<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class HomeController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("objectUser");
    }
    
    public function index() {
        $objUser = new ObjectUser();

        $data["listObjUser"] = $objUser->getListObjectUser($this->session->idPers);

        $this->load->view("front_office/header");
        $this->load->view("front_office/list_object", $data);
        $this->load->view("footer");
    }
    
}