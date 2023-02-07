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
            if($personne->getIsAdmin()) {
                $this->session->set_userdata("idPersonne", $personne->getIdPersonne());
                redirect(site_url(""));
            }
            redirect(site_url("loginController/index"));
        }
    }

    public function inscrire() {
        $nom = $this->input->post("nom");
        $email = $this->input->post("email");
        $pwd = $this->input->post("pwd");

        $this->load->model("personne");
        $personne = new Personne();

        $personne->inscrire($nom, $email, $pwd);
        redirect(site_url("loginController/index"));
    }
    
}