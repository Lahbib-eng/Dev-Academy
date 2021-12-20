<?php

require '../classes/etudiant.class.php';
// On récupère les données du formulaire
$num_carte=$_POST['numcarte'];
$cin=$_POST['CIN'];
$prenom=$_POST['signame'];
$nom = $_POST['signame'] ;
$tel=$_POST['sigtel'];
$mdp=$_POST['mot'];
$email = $_POST['sigemail'] ;
$crypter=md5($mdp);

// On ajoute une entrée dans la table personne
$etudiant = new Etudiant();
$etudiant->createEtudiant($nom,$prenom,$num_carte,$cin,$prenom,$nom,$tel,$crypter,$email);
echo "<script>alert(\"Votre demander a eté effectuer .\");</script>" ;
var_dump($etudiant);
header("Location: index.php"); 
?>