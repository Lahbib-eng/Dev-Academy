<?php function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>
<?php
session_start();
var_dump($_POST);
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
//modifaction de nom
if (empty($_POST["newname"])) {
    echo "hhhhhhh";
    //alert de non vide;
  } else {
    $name = test_input($_POST["newname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "hhh";
      //alert = "Il doit contenir que des lettres des espaces."; 
    }
    else{
    $nameex = $_POST["newname"]; 
    $e=$_POST["id"]; 
    $_SESSION["nom"] =$_POST["newname"];
    $req = "UPDATE `etudiant` SET `nom_prenom` = '$nameex' WHERE `etudiant`.`num` = '$e'";
    $bdd->query($req);
    }
  }
//modification de email
if (empty($_POST["newemail"])) {
    echo "hhhhhhhhhh";
    //alert vide
  } else {
    $email = test_input($_POST["newemail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "hhh";
       //alert "C'est n'est pas un email taper un autre"; 
    }
    else{
        $newemail = $_POST["newemail"]; 
        $e=$_POST["id"]; 
        $_SESSION["email"] =$_POST["newemail"];
        $req = "UPDATE `etudiant` SET `email` = '$newemail' WHERE `etudiant`.`num` = '$e'";
        $bdd->query($req);
    
}
}
//modification de login
if (empty($_POST["newlogin"])) {
    echo "hhhhhhhhhh";
    //alert vide
  } else {
    $email = test_input($_POST["newlogin"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "hhh";
       //alert "C'est n'est pas un email taper un autre"; 
    }
    else{
        $newlogin = $_POST["newlogin"]; 
        $e=$_POST["id"]; 
        $_SESSION["login"] =$_POST["newlogin"];
        $req = "UPDATE `etudiant` SET `logi` = '$newlogin' WHERE `etudiant`.`num` = '$e'";
        $bdd->query($req);
    
}
}
var_dump($_POST["passw"]);
$id=$_POST["id"]; 
$donnees = $bdd->query("SELECT mdp FROM etudiant WHERE `etudiant`.`num` = '$id'")->fetch();
var_dump($donnees["mdp"]);
var_dump(md5($_POST["passw"]));
//modification d'un mot de passe
if ($donnees["mdp"]!=md5($_POST["passw"])) {
    echo "hhhhhhhhhh mot Vrai";
    //alert Mot de passe faux
  }else if (empty($_POST["newpass"])) {
    echo "hhhhhhhhhh mot ";
    //alert vide de new mot de passe
  }else{
    $mot = test_input($_POST["newpass"]);
    if (strlen($mot) < 7) {
        //Alert "Mot de passe non conforme";
        echo "nnn";
      }
    else if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mot)) {
    $cry=md5($_POST["newpass"]);
    $newlogin = $_POST["newlogin"]; 
    $e=$_POST["id"]; 
    $_SESSION["login"] =$_POST["newlogin"];
    $req = "UPDATE `etudiant` SET `mdp` = '$cry' WHERE `etudiant`.`num` = '$e'";
    $bdd->query($req);
  echo "Mot de passe conforme";
}

}
header("Location: index.php"); 
?>