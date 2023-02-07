<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Model {
    private $idCat;
    private $nomCat;

    public function __construct() {
        
    }

    public function getListCategories() {
        $sql = "SELECT * FROM categories";
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
    public function getNomCat()
    {
        return $this->nomCat;
    }

    /**
     * @param mixed $nomCat
     */
    public function setNomCat($nomCat)
    {
        $this->nomCat = $nomCat;
    }


    
}