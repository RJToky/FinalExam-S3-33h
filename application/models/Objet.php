<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model {
    private $idObjet;
    private $idPers;
    private $idCat;
    private $nomObj;
    private $description;
    private $prixObj;

    public function __construct() {
        
    }

    public function getListObject() {
        $sql = "SELECT * FROM objet";
        $query = $this->db->query($sql);

        $data = array();
        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function updateCategory($idObjet, $idCat) {
        $sql = "UPDATE objet SET idCat = %s WHERE idObjet = %s";
        $sql = sprintf($sql, $this->db->escape($idCat), $this->db->escape($idObjet));

        $this->db->query($sql);
    }
    
    public function addObject($idPers, $nomObj, $description, $prixObj, $nomPhoto) {
        $sql = "INSERT INTO objet VALUES (DEFAULT, %s, 1, %s, %s, %s)";
        $sql = sprintf($sql, $this->db->escape($idPers), $this->db->escape($nomObj), $this->db->escape($description), $prixObj);
        $this->db->query($sql);

        $sql = "INSERT INTO photoObj VALUES (DEFAULT, %s, %s)";
        $sql = sprintf($sql, $this->db->escape($this->getLastId()), $this->db->escape($nomPhoto));
        $this->db->query($sql);
    }

    public function getLastId() {
        $sql = "SELECT MAX(idobjet) AS lastId FROM objet";
        $query = $this->db->query($sql);

        $row = $query->row_array();
        return $row["lastId"];
    }

    /**
     * @return mixed
     */
    public function getIdObjet()
    {
        return $this->idObjet;
    }

    /**
     * @param mixed $idObjet
     */
    public function setIdObjet($idObjet)
    {
        $this->idObjet = $idObjet;
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
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * @param mixed $idCat
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;
    }

    /**
     * @return mixed
     */
    public function getNomObj()
    {
        return $this->nomObj;
    }

    /**
     * @param mixed $nomObj
     */
    public function setNomObj($nomObj)
    {
        $this->nomObj = $nomObj;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrixObj()
    {
        return $this->prixObj;
    }

    /**
     * @param mixed $prixObj
     */
    public function setPrixObj($prixObj)
    {
        $this->prixObj = $prixObj;
    }


    
}