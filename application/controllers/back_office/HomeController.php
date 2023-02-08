<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("SecureController.php");
class HomeController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("objet");
        $this->load->model("personne");
        $this->load->model("takalo");
    }
    
    public function index() {
        $categ = new Categories();
        $obj = new Objet();
        $personne = new Personne();
        $takalo = new Takalo();

        $data["listCateg"] = $categ->getListCategories();
        $data["listObj"] = $obj->getListObject();
        $data["nbrUser"] = $personne->getNbrUserRegistred();
        $data["nbrExchangeClose"] = $takalo->getNbrExchangeClose();

        $this->load->view("back_office/header");
        $this->load->view("back_office/gestion_categ", $data);
        $this->load->view("footer");
    }

    public function treatmentCategory() {
        $idCat = $this->input->post("idCat");
        $idObjet = $this->input->post("idObjet");

        $obj = new Objet();
        $obj->updateCategory($idObjet, $idCat);
        redirect(base_url("back_office/homeController/"));
    }
    
}