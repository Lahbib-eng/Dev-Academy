<?php
var_dump($_POST);
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (!empty($_POST['num'])) {
    $num=$_POST['num'];
}
if (!empty($_POST['ques'])) {
    $ques=$_POST['ques'];
    $req = "UPDATE `reponses` SET `Question` = '$ques' WHERE `reponses`.`num` = '$num'";
    $bdd->query($req);
}
if (!empty($_POST['rep1'])) {
    $rep1=$_POST['rep1'];
    $req = "UPDATE `reponses` SET `rep1` = '$rep1' WHERE `reponses`.`num` = '$num'";
    $bdd->query($req);
}
if (!empty($_POST['rep2'])) {
    $rep2=$_POST['rep2'];
    $req = "UPDATE `reponses` SET `rep2` = '$rep2' WHERE `reponses`.`num` = '$num'";
    $bdd->query($req);
}
if (!empty($_POST['rep3'])) {
    $rep3=$_POST['rep3'];
    $req = "UPDATE `reponses` SET `rep3` = '$rep2' WHERE `reponses`.`num` = '$num'";
    $bdd->query($req);
}
if (!empty($_POST['corr'])) {
    $corr=$_POST['corr'];
    $req = "UPDATE `reponses` SET `reponse` = '$corr' WHERE `reponses`.`num` = '$num'";
    $bdd->query($req);
}
header("Location: apps-filemanager.php"); 


