<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class TransactionController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("takalo");
    }
    
    public function index() {
        $this->load->view("front_office/header");
        $this->load->view("front_office/transaction");
        $this->load->view("footer");
    }

    public function operation() {
        $idHisObject = $this->input->post("idHisObject");
        $idPers = $this->input->post("idPers");

        $idMyObject = $this->input->post("idMyPost");
        $idUserConnected = $this->session->idPers;

        $response = $this->input->post("respone");
        $takalo = new Takalo();

        if($response == 1) {
            $takalo->accepteTakalo($idHisObject, $idPers, $idMyObject, $idUserConnected);
        } else if($response == 0) {
            $takalo->refuseTakalo($idHisObject, $idMyObject);
        }
        redirect(base_url("front_office/homeController/"));
    }
    
}