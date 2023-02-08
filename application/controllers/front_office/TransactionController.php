<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class TransactionController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("takalo");
        $this->load->model("objectUser");
    }
    
    public function index() {
        $categ = new Categories();
        $objUser = new ObjectUser();

        $idHisObject = $this->input->get("idHisObject");
        $idPers = $this->input->get("idPers");

        $data["listCateg"] = $categ->getListCategories();
        $data["objUser"] = $objUser->getOneObjectUser($idHisObject, $idPers);
        $data["listMyObject"] = $objUser->getListMyObject($this->session->idPers);
        $data["active"] = "list_object";

        $this->load->view("front_office/header", $data);
        $this->load->view("front_office/transaction", $data);
        $this->load->view("footer");
    }

    public function sendProposition() {
        $idHisObject = $this->input->post("idHisObject");
        $idMyObject = $this->input->post("idMyObject");

        $takalo = new Takalo();
        $takalo->proposeTakalo($idMyObject, $idHisObject);

        redirect(base_url("front_office/homeController/"));
    }

    public function treatProposition() {
        $idHisObject = $this->input->get("idHisObject");
        $idPers = $this->input->get("idPers");

        $idMyObject = $this->input->get("idMyObject");
        $idUserConnected = $this->session->idPers;

        $response = $this->input->get("response");
        $takalo = new Takalo();

        if($response == 1) {
            $takalo->accepteTakalo($idHisObject, $idPers, $idMyObject, $idUserConnected);
        } else {
            $takalo->refuseTakalo($idHisObject, $idMyObject);
        }
        redirect(base_url("front_office/homeController/"));
    }
    
    public function selectOnChange() {
        $objUser = new ObjectUser();

        $idObjet = $this->input->get("idObjet");

        echo json_encode($objUser->getOneObjectUser($idObjet, $this->session->idPers));
    }
}