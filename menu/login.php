<?php
// Start the session
session_start();
?>
<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
   $i=0;
   $msg= 'Non';
   $_SESSION["err"]=$msg;
   $crypter=md5($_POST["loginPassword"]);
   $corr = $bdd->query('SELECT *FROM etudiant');
   while($data=$corr->fetch()) {
    if (($data["logi"]==$_POST["loginUsername"])&&($data["mdp"]==$crypter)&&($data["etat"]=='1')) {
      $_SESSION["nom"] =$data["nom_prenom"];
      $_SESSION["num_cart"] =$data["num_carte"];
      $_SESSION["cin"] =$data["cin"];
      $_SESSION["cin"] =$data["cin"];
      $_SESSION["email"] =$data["email"];
      $_SESSION["tel"] =$data["tel"];
      $_SESSION["login"] =$data["logi"];
      $_SESSION["id"]=$data["num"];
      //else if($data["tel"]==0)echo vous n'est pas encore inscrit
      $i=1;
      header("Location: ../Principale_etudiant/index.php"); 
    }
   else if (($data["logi"]==$_POST["loginUsername"])&&($data["mdp"]==$crypter)&&($data["etat"]=='0')){
      $msg=" L'adminstrateur n'a pas encore acepté";
          $Ereur = "Ereur";
          $_SESSION["err"]=$msg;
 setcookie($Ereur, $msg, time() + (8600 * 10), "/");
 header("Location: index.php"); 
    }
    else if (($data["logi"]==$_POST["loginUsername"])&&($data["mdp"]!=$crypter)&&($data["etat"]=='1')){
      $msg=" Mot de passe est faux";
          $Ereur = "Ereur";
          $_SESSION["err"]=$msg;
 setcookie($Ereur, $msg, time() + (8600*10), "/");
 header("Location: index.php"); 
    }
   }

//logi ens
$co = $bdd->query('SELECT *FROM enseignant');
   while($data=$co->fetch()) {
    if (($data["logi"]==$_POST["loginUsername"])&&($data["mdp"]==$crypter)&&($data["etat"]=='1')) {
      $_SESSION["nom"] =$data["nom"];
      $_SESSION["cin"] =$data["cin"];
      $_SESSION["email"] =$data["email"];
      $_SESSION["tel"] =$data["tel"];
      $_SESSION["login"] =$data["logi"];
      $_SESSION["id"]=$data["id"];
      //else if($data["tel"]==0)echo vous n'est pas encore inscrit
      $i=1;
      header("Location: ../Principale_ensig/index.php"); 
    }
   else if (($data["logi"]==$_POST["loginUsername"])&&($data["mdp"]==$crypter)&&($data["etat"]=='0')){
      $msg=" L'adminstrateur n'a pas encore acepté";
          $Ereur = "Ereur";
          $_SESSION["err"]=$msg;
 setcookie($Ereur, $msg, time() + (8600 * 10), "/");
 header("Location: index.php"); 
    }
    else if (($data["logi"]==$_POST["loginUsername"])&&($data["mdp"]!=$crypter)&&($data["etat"]=='1')){
      $msg=" Mot de passe est faux";
          $Ereur = "Ereur";
          $_SESSION["err"]=$msg;
 setcookie($Ereur, $msg, time() + (8600*10), "/");
 header("Location: index.php"); 
    }
   }


   if ($i==0) {
    header("Location: index.php"); 
   }
