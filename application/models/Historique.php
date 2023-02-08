<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historique extends CI_Model {
    private $idHisto;
    private $idPers;
    private $idObjet;
    private $dateHeureHisto;

    public function __construct() {
        
    }
    
    public function getHistoObject($idObjet) {
        $sql = "SELECT objet.idObjet, objet.nomObj, personne.nomPers, DATE(historique.dateHeureHisto) AS daty, TIME(historique.dateHeureHisto) AS lera
                FROM historique
                JOIN personne ON personne.idPers = historique.idPers
                JOIN objet ON objet.idObjet = historique.idObjet
                WHERE historique.idObjet = %s";

        $sql = sprintf($sql, $this->db->escape($idObjet));
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
    public function getIdHisto()
    {
        return $this->idHisto;
    }

    /**
     * @param mixed $idHisto
     */
    public function setIdHisto($idHisto)
    {
        $this->idHisto = $idHisto;
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
    public function getDateHeureHisto()
    {
        return $this->dateHeureHisto;
    }

    /**
     * @param mixed $dateHeureHisto
     */
    public function setDateHeureHisto($dateHeureHisto)
    {
        $this->dateHeureHisto = $dateHeureHisto;
    }


    
}