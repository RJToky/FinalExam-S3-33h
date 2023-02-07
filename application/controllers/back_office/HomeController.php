<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("SecureController.php");
class HomeController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("categories");
        $this->load->model("objet");
    }
    
    public function index() {
        $categ = new Categories();
        $obj = new Objet();

        $data["listCateg"] = $categ->getListCategories();
        $data["listObj"] = $obj->getListObject();

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