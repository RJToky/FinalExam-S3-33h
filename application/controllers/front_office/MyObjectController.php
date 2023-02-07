<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyObjectController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("objectUser");
    }
    
    public function index() {

        $objUser = new ObjectUser();

        $data["listMyObject"] = $objUser->getListMyObject($this->session->idPers);

        $this->load->view("front_office/header");
        $this->load->view("front_office/my_object", $data);
        $this->load->view("footer");
    }
    
}