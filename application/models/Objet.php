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