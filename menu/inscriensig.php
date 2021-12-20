<?php
var_dump($_POST);
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root',
    '');
     } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    // On récupère les données du formulaire
    $cin=$_POST['CIN'];
    $prenom=$_POST['signame'];
    $nom = $_POST['signame'] ;
    $tel=$_POST['sigtel'];
    $mdp=$_POST['mot'];
    $email = $_POST['sigemail'];
    $crypter=md5($mdp);
    echo $crypter;
    var_dump($email);
    // On ajoute une entrée dans la table personne
    $bdd->exec("INSERT INTO `enseignant` (`id`, `nom`, `cin`, `tel`, `email`, `logi`, `mdp`, `etat`, `group`) VALUES (NULL, '$prenom', '$cin', '$tel', '$email', '$email', '$crypter', '0', ' ')");
    //echo "<script>alert(\"Votre demander a eté effectuer .\");</script>" ;
    header("Location: index.php"); 