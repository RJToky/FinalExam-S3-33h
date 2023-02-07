<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view("login");
    }

    public function checkUser() {
        $email = $this->input->post("email");
        $pwd = $this->input->post("pwd");

        $this->load->model("personne");
        $personne = new Personne();

        if($personne->check($email, $pwd)) {
            if($personne->getIsAdmin() == 1) {
                $this->session->set_userdata("idPers", $personne->getIdPers());
                redirect(base_url("back_office/homeController/"));
            }
            redirect(base_url("front_office/homeController/"));
        }
        redirect(base_url("loginController/"));
    }

    public function inscription() {
        $this->load->view("inscription");
    }

    public function inscrire() {
        $nom = $this->input->post("nom");
        $email = $this->input->post("email");
        $pwd = $this->input->post("pwd");

        $this->load->model("personne");
        $personne = new Personne();

        $personne->inscrire($nom, $email, $pwd);
        redirect(base_url("loginController/"));
    }

    public function logout() {
        $this->session->unset_userdata("idPers");
        redirect(base_url("loginController/"));
    }
    
}