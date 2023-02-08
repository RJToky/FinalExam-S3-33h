<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function uploadImage($file) {
    $dossier = $_SERVER['DOCUMENT_ROOT'] . "e-fanakalo/assets/img/";

    $newNamer = randomName().".jpg";

    if(move_uploaded_file($file['tmp_name'], $dossier . $newNamer)) {
        return $newNamer;
    }
    return "non";
}

function randomName() {
    $lettreMaj = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $lettreMin = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

    $ret = "";
    $i = 0;
    while($i < 5) {
        $ret = $ret.$lettreMaj[rand(0, 25)];
        $ret = $ret.$lettreMin[rand(0, 25)];
        $i++;
    }

    return $ret;
}