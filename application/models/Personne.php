<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personne extends CI_Model {
    private $idPers;
    private $nomPers;
    private $email;
    private $pwd;
    private $isAdmin;

    public function check($email, $pwd) {
        $sql = "SELECT * FROM personne WHERE (email = %s OR nomPers = %s) AND pwd = %s";
        $sql = sprintf($sql, $this->db->escape($email), $this->db->escape($email), $this->db->escape($pwd));

        $query = $this->db->query($sql);

        foreach ($query->result_array() as $row) {
            $this->setIdPers($row["idPers"]);
            $this->setNomPers($row["nomPers"]);
            $this->setEmail($row["email"]);
            $this->setPwd($row["pwd"]);
            $this->setIsAdmin($row["isAdmin"]);

            return true;
        }
        return false;
    }

    public function inscrire($nom, $email, $pwd) {
        $sql = "INSERT INTO Personne VALUES (DEFAULT, %s, %s, %s, 0)";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($email), $this->db->escape($pwd));

        $this->db->query($sql);
    }

    /**
     * @return mixed
     */
    public function getIdPers()
    {
        return $this->idPers;
    }

    /**
     * @param mixed $idPers
     */
    public function setIdPers($idPers)
    {
        $this->idPers = $idPers;
    }

    /**
     * @return mixed
     */
    public function getNomPers()
    {
        return $this->nomPers;
    }

    /**
     * @param mixed $nomPers
     */
    public function setNomPers($nomPers)
    {
        $this->nomPers = $nomPers;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }



}