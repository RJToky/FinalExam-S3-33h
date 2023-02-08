<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Takalo extends CI_Model {
    private $idTakalo;
    private $idAlefa;
    private $idAlaina;
    private $isTakalo;

    public function __construct() {
        
    }
    
    public function proposeTakalo($idAlefa, $idAlaina) {
        $sql = "INSERT INTO takalo VALUES (DEFAULT, %s, %s, 0)";
        $sql = sprintf($sql, $this->db->escape($idAlefa), $this->db->escape($idAlaina));

        $this->db->query($sql);
    }

    public function accepteTakalo($idHisObject, $idPers, $idMyObject, $idUserConnected) {
        $sql1 = "UPDATE takalo SET isTakalo = 1 WHERE idAlefa = %s AND idAlaina = %s";
        $sql1 = sprintf($sql1, $this->db->escape($idHisObject), $this->db->escape($idMyObject));

        $sql2 = "UPDATE objet SET idPers = %s WHERE idObjet = %s";
        $sql2 = sprintf($sql2, $this->db->escape($idUserConnected), $this->db->escape($idHisObject));

        $sql3 = "UPDATE objet SET idPers = %s WHERE idObjet = %s";
        $sql3 = sprintf($sql3, $this->db->escape($idPers), $this->db->escape($idMyObject));

        $sql4 = "INSERT INTO historique VALUES (DEFAULT, %s, %s, now())";
        $sql4 = sprintf($sql4, $this->db->escape($idUserConnected), $this->db->escape($idHisObject));

        $sql5 = "INSERT INTO historique VALUES (DEFAULT, %s, %s, now())";
        $sql5 = sprintf($sql5, $this->db->escape($idPers), $this->db->escape($idMyObject));

        $this->db->query($sql1);
        $this->db->query($sql2);
        $this->db->query($sql3);
        $this->db->query($sql4);
        $this->db->query($sql5);
    }
    
    public function refuseTakalo($idHisObject, $idMyObject) {
        $sql = "DELETE FROM takalo WHERE idAlefa = %s AND idAlaina = %s";
        $sql = sprintf($sql, $this->db->escape($idHisObject), $this->db->escape($idMyObject));

        $this->db->query($sql);
    }
    
    public function getNbrExchangeClose() {
        $sql = "SELECT COUNT(idTakalo) AS nbr FROM takalo WHERE isTakalo = 1";
        $query = $this->db->query($sql);

        $row = $query->row_array();
        return $row["nbr"];
    }

    /**
     * @return mixed
     */
    public function getIdTakalo()
    {
        return $this->idTakalo;
    }

    /**
     * @param mixed $idTakalo
     */
    public function setIdTakalo($idTakalo)
    {
        $this->idTakalo = $idTakalo;
    }

    /**
     * @return mixed
     */
    public function getIdAlefa()
    {
        return $this->idAlefa;
    }

    /**
     * @param mixed $idAlefa
     */
    public function setIdAlefa($idAlefa)
    {
        $this->idAlefa = $idAlefa;
    }

    /**
     * @return mixed
     */
    public function getIdAlaina()
    {
        return $this->idAlaina;
    }

    /**
     * @param mixed $idAlaina
     */
    public function setIdAlaina($idAlaina)
    {
        $this->idAlaina = $idAlaina;
    }

    /**
     * @return mixed
     */
    public function getIsTakalo()
    {
        return $this->isTakalo;
    }

    /**
     * @param mixed $isTakalo
     */
    public function setIsTakalo($isTakalo)
    {
        $this->isTakalo = $isTakalo;
    }
    
    
    
}