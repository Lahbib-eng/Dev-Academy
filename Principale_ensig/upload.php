<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
   if(!empty($_FILES)){
     
       $file_name=$_FILES['fileToUpload']['name'];
     $file_extension=strchr($file_name, ".");
     $file_tmp_name=$_FILES['fileToUpload']['tmp_name'];
     $files_dest=$file_name;
   
       $extensions_autorisees=array('.pdf','.PDF','.ppt','.PPT','.docx','.DOCX');
   
     if(in_array($file_extension,$extensions_autorisees)){
   if(move_uploaded_file($file_tmp_name,$files_dest)){
       $req=$bdd->prepare('INSERT INTO files (name,file) VALUES(?,?)');
       $req->execute(array($file_name,$files_dest));
             echo'Fichier envoyer avec succes';
 header("location:apps-filemanager.php");
         }
         else{
             echo"une erreur est survenue lors de l'envoi du fichier";
         }
     }
       else{
           echo'seuls les fichier sont autorise';
     
       }
    }
?>