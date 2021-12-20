<?php
require_once '../classes/dbconnect.class.php';
require_once '../classes/etudiant.class.php';

$etudiant = new Etudiant();
// $_REQUEST['mode'] = 'loadOne';
// $_REQUEST['id'] = 1;

if ($_REQUEST['mode'] == 'load') {
    $ListClt = $etudiant->readAllEtudiant();
    $row = $ListClt->fetchAll();
    echo json_encode($row);
} else if ($_REQUEST['mode'] == 'loadOne') {
    $etudiant = $etudiant->readSpecificEtudiant($_REQUEST['num']);
    $row = $etudiant->fetch();
    echo json_encode($row);
} else if ($_REQUEST['mode'] == 'insert') {
    $etudiant->createEtudiant($_REQUEST['nom_prenom'], $_REQUEST['prenom'], $_REQUEST['dataN'], $_REQUEST['adresse'], $_REQUEST['tel']);
} else if ($_REQUEST['mode'] == 'update') {
    $etudiant->createEtudiant($_REQUEST['num'], $_REQUEST['nom_prenom'], $_REQUEST['prenom'], $_REQUEST['dataN'], $_REQUEST['adresse'], $_REQUEST['tel']);
} else if ($_REQUEST['mode'] == 'delete') {
    $etudiant->createEtudiant($_REQUEST['num']);
}