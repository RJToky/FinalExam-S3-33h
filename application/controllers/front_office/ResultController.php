<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class ResultController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("objectUser");
    }

    public function index($cle = "", $idCat = "0") {
        $objUser = new ObjectUser();

        $data["result"] = $objUser->searchObjet($cle, $idCat, $this->session->idPers);

        $this->load->view("front_office/header");
        $this->load->view("front_office/result_query", $data);
        $this->load->view("footer");
    }
    
}