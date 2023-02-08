<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropositionController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("objectUser");
    }
    
    public function index() {
        $objUser = new ObjectUser();

        $data["listProposition"] = $objUser->getListProposition($this->session->idPers);

        $this->load->view("front_office/header");
        $this->load->view("front_office/proposition", $data);
        $this->load->view("footer");
    }
    
}