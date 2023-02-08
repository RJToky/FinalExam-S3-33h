<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectUser extends CI_Model {
    private $idObjet;
    private $nomObj;
    private $nomPhoto;
    private $prixObj;
    private $idPers;
    private $nomPers;

    public function __construct() {
        
    }
    
    public function getListObjectUser($idUserConnected) {
        $sql = "SELECT * FROM objectUser WHERE idPers != %s";
        $sql = sprintf($sql, $this->db->escape($idUserConnected));
        $query = $this->db->query($sql);

        $data = array();
        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function getListMyObject($idUserConnected) {
        $sql = "SELECT * FROM objectUser WHERE idPers = %s";
        $sql = sprintf($sql, $this->db->escape($idUserConnected));
        $query = $this->db->query($sql);

        $data = array();
        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function getListProposition($idUserConnected) {
        $sql = "SELECT * FROM objectUser
                WHERE idObjet   
                IN (SELECT idAlefa FROM takalo 
                WHERE idAlaina 
                IN (SELECT idObjet FROM objectUser WHERE idPers = %s))";

        $sql = sprintf($sql, $this->db->escape($idUserConnected));
        $query = $this->db->query($sql);

        $data = array();
        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function searchObjet($cle, $idCat, $idUserConnected) {
        if($idCat == 0) {
            $sql = "SELECT * FROM objectUser
            WHERE idObjet
            IN (SELECT idObjet FROM objet
            WHERE description LIKE '%$cle%')
            AND idPers != $idUserConnected";

        } else {
            $sql = "SELECT * FROM objectUser
            WHERE idObjet
            IN (SELECT idObjet FROM objet
            WHERE description LIKE '%$cle%' AND idCat = $idCat)
            AND idPers != $idUserConnected";
        }

        $query = $this->db->query($sql);

        $data = array();
        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function getOneObjectUser($idObjet, $idPers) {
        $sql = "SELECT * FROM objectUser WHERE idObjet = %s AND idPers = %s";
        $sql = sprintf($sql, $this->db->escape($idObjet), $this->db->escape($idPers));
        $query = $this->db->query($sql);

        $row = $query->row_array();
        return $row;
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
    public function getNomPhoto()
    {
        return $this->nomPhoto;
    }

    /**
     * @param mixed $nomPhoto
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->nomPhoto = $nomPhoto;
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


}