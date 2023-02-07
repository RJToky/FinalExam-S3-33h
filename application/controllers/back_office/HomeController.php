<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("SecureController.php");
class HomeController extends SecureController {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->model("categories");
        $this->load->model("objet");
        $categ = new Categories();
        $obj = new Objet();

        $data["listCateg"] = $categ->getListCategories();
        $data["listObj"] = $obj->getListObject();

        $this->load->view("back_office/header");
        $this->load->view("back_office/gestion_categ", $data);
        $this->load->view("footer");
    }
    
}