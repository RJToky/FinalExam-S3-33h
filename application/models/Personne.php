<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personne extends CI_Model {
    private $idPersonne;
    private $nom;
    private $email;
    private $pwd;
    private $isAdmin;

    public function check($email, $pwd) {
        $sql = "SELECT * FROM Personne WHERE email = %s AND $pwd = %s";
        $sql = sprintf($sql, $this->db->escape($email), $this->db->escape($pwd));

        $query = $this->db->query($sql);
        $row = $query->row_array();

        if(count($row) == 1) {
            $this->setIdPersonne($row["idPersonne"]);
            $this->setNom($row["nom"]);
            $this->setEmail($row["email"]);
            $this->setPwd($row["pwd"]);
            $this->setIsAdmin($row["isAdmin"]);

            return true;
        }
        return false;
    }

    public function inscrire($nom, $email, $pwd) {
        $sql = "INSERT INTO Personne VALUES (DEFAULT, %s, %s, %s, FALSE)";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($email), $this->db->escape($pwd));

        $this->db->query($sql);
    }

    /**
     * @return mixed
     */
    public function getIdPersonne() {
        return $this->idPersonne;
    }

    /**
     * @param mixed $idPersonne
     */
    public function setIdPersonne($idPersonne) {
        $this->idPersonne = $idPersonne;
    }

    /**
     * @return mixed
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom) {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPwd() {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin() {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin) {
        $this->isAdmin = $isAdmin;
    }

}