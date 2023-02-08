<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyObjectController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("objectUser");
        $this->load->model("objet");
        $this->load->helper("my");
    }
    
    public function index() {

        $objUser = new ObjectUser();

        $data["listMyObject"] = $objUser->getListMyObject($this->session->idPers);

        $this->load->view("front_office/header");
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