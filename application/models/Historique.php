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