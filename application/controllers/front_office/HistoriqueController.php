<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class HistoriqueController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("historique");
    }
    
    public function index() {
        $categ = new Categories();
        $histo = new Historique();

        $idObjet = $this->input->get("idObjet");

        $data["listCateg"] = $categ->getListCategories();
        $data["listHisto"] = $histo->getHistoObject($idObjet);

        $data["active"] = "";

        $this->load->view("front_office/header", $data);
        $this->load->view("front_office/historique", $data);
        $this->load->view("footer");
    }
    
}