<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "SecureController.php";
class MyObjectController extends SecureController {

    public function __construct() {
        parent::__construct();
        $this->load->model("objectUser");
        $this->load->model("objet");
        $this->load->helper("my");
    }
    
    public function index() {
        $objUser = new ObjectUser();
        $categ = new Categories();

        $data["listMyObject"] = $objUser->getListMyObject($this->session->idPers);
        $data["listCateg"] = $categ->getListCategories();

        $this->load->view("front_office/header", $data);
        $this->load->view("front_office/my_object", $data);
        $this->load->view("footer");
    }

    public function uploadObject() {
        $idPers = $this->session->idPers;
        $nomObj = $this->input->post("nomObj");
        $description = $this->input->post("description");
        $prixObj = $this->input->post("prixObj");

        $nomPhoto = uploadImage($_FILES["nomPhoto"]);

        if($nomPhoto != "non") {
            $obj = new Objet();
            $obj->addObject($idPers, $nomObj, $description, $prixObj, $nomPhoto);
        }
        redirect(base_url("front_office/myObjectController/"));

    }
    
}