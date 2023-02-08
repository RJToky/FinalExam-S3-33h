<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class ResultController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("objectUser");
    }

    public function index() {
        $objUser = new ObjectUser();
        $categ = new Categories();
        $cle = $this->input->post("cle");
        $idCat = $this->input->post("idCat");

        $data["result"] = $objUser->searchObjet($cle, $idCat, $this->session->idPers);
        $data["listCateg"] = $categ->getListCategories();

        $this->load->view("front_office/header", $data);
        $this->load->view("front_office/result_query", $data);
        $this->load->view("footer");
    }
    
}