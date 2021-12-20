<?php
// Start the session
session_start();
?>
<?php
//var_dump($_POST['Q2']);
$score=0;
$reponse=array();
if(!empty($_POST['Q1']))
        $reponse[1]=$_POST['Q1'];
else
$reponse[1]='AA';
if(!empty($_POST['Q2']))
        $reponse[2]=$_POST['Q2'];
else
        $reponse[2]=0;
if(!empty($_POST['Q3']))
        $reponse[3]=$_POST['Q3'];
else
$reponse[3]='AA';
if(!empty($_POST['Q4']))
        $reponse[4]=$_POST['Q4'];
else
$reponse[4]='AA';
if(!empty($_POST['Q5']))
        $reponse[5]=$_POST['Q5'];
else
$reponse[5]='AA';
if(!empty($_POST['Q6']))
        $reponse[6]=$_POST['Q6'];
else
$reponse[6]='AA';
if(!empty($_POST['Q7']))
        $reponse[7]=$_POST['Q7'];
else
$reponse[7]='AA';
if(!empty($_POST['Q8']))
        $reponse[8]=$_POST['Q8'];
else
$reponse[8]='AA';
if(!empty($_POST['Q9']))
        $reponse[9]=$_POST['Q9'];
else
$reponse[9]='AA';
if(!empty($_POST['Q10']))
        $reponse[10]=$_POST['Q10'];
else
$reponse[10]='AA';
if(!empty($_POST['Q11']))
        $reponse[11]=$_POST['Q11'];
else
$reponse[11]='AA';        
if(!empty($_POST['Q12']))        
        $reponse[12]=$_POST['Q12'];
else
        $reponse[12]='AA';
        //var_dump($reponse);
       $correction = array();
       try {
        $bdd = new PDO('mysql:host=localhost;dbname=pootest;charset=utf8', 'root', '');
       } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
       }

       $corr = $bdd->query('SELECT *FROM reponses');
       $i=1;
       while($data=$corr->fetch()) {
        $correction[$i]=$data["reponse"];
        $i++;
       }
      
       // var_dump($correction);       
      foreach ($correction as $key => $value) {
           if($value==$reponse[$key])
           $score++;
       }
  $score=$score*100/12;
  $_SESSION["score"]=$score;
 // var_dump( $_SESSION["score"]);
 // var_dump($score);    
/*class testhtml5{
    public $reponse=array();
    public $correction = array();
    function remplir(){
        if(!empty($_POST['Q1']))
        $this->reponse[1]=$_POST['Q1'];
        $this->reponse[2]=$_POST['Q2'];
        $this->reponse[3]=$_POST['Q3'];
        $this->reponse[4]=$_POST['Q4'];
        $this->reponse[5]=$_POST['Q5'];
        $this->reponse[6]=$_POST['Q6'];
        $this->reponse[7]=$_POST['Q7'];
        $this->reponse[8]=$_POST['Q8'];
        $this->reponse[9]=$_POST['Q9'];
        $this->reponse[10]=$_POST['Q10'];
        $this->reponse[11]=$_POST['Q11'];
        $this->reponse[12]=$_POST['Q12'];
    }
    function reponsequest(){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=pootest;charset=utf8', 'root', '');
           } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
           }

           $corr = $bdd->query('SELECT *FROM reponses');
           $i=1;
           while($data=$corr->fetch()) {
            $this->$correction[$i]=$data["reponse"];
            $i++;
           }
    }
    
  }
 
  */
  header("Location: result.php"); 
  ?>