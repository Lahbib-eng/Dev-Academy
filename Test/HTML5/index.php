<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.brunogarcia.net/templates/3dify/creativeagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:06:56 GMT -->
<head>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEST HTML </title>
	<link href="css/lato.css" rel="stylesheet">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel='stylesheet' href='css/perfect-scrollbar.min.css' />
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/buttons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/tooltip.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/style1.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	<link href="../../Principale_admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style>
	label{

		font-family: 'Poppins', sans-serif;
  font-size:160%;
	}
	h2{
		font-family: 'Poppins', sans-serif;
		font-size:400%;
	}



td-container{
	overflow:hidden;
	position:absolute;
	width:100%;
	height:100%;

	background-size:cover;
	perspective:5000px;
}
.ane{
z-index:-10;

}
.wrapper-class input[type="radio"] {
  width: 15px;
}

.wrapper-class label {
  display: inline;
  margin-left: 5px;
  }
fieldset {
  overflow: hidden
}</style>
</head>
<body>

	<div class="td-preloading">
		<span class="fa fa-spinner fa-spin"></span>
	</div>
	<div class="td-container">
		<div class="td-menu">
		</div>
		<h1 style="margin-bottom:-4%;color: white;font-weight: bold;" id="time"></h1>

<script>
var countDownDate = new Date().getTime()+3600*1000;;

var x = setInterval(function() {
  var now = new Date().getTime();

  var distance =countDownDate-now;

  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("time").innerHTML ="TIME :"+ hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "TIME : EXPIRED";
  }
},1000);
</script>
		<div class="td-sheets-container td-hide td-sheet-active-1">
			<div id="scrollbar-container" class="td-sheet active">
				<div class="td-sheet-icon">
					<i class="ti-microsoft"></i>
				</div>
				<div class="td-sheet-title">DEV ACADAMY HTML5</div>
				
				<div class="container">
					<div class="row site-title">
						<div class="col-md-12 text-center">
							<img src="../img/logo.png" alt="Logo" data-animation="fadeInDown" data-animation-delay="100" width="50%" height="40%"/>
							<h1><span style="font-family: 'Lobster', cursive;
" data-animation="lightSpeedIn">TEST HTML5</span></h1>
						</div>
						
						<div class="col-md-3 text-center" data-animation="fadeInUp" data-animation-delay="600">
							<div class="button-row text-center" style="margin-left:150%">
								<div><a title="COMMENCER LE TEST" onclick="tdNextPage();"></a></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="td-social ti-facebook" data-animation="fadeIn" data-animation-delay="800"></span>
							<span class="td-social ti-linkedin" data-animation="fadeIn" data-animation-delay="1000"></span>
							<span class="td-social ti-google" data-animation="fadeIn" data-animation-delay="1200"></span>
							<span class="td-social ti-twitter" data-animation="fadeIn" data-animation-delay="1400"></span>
						</div>
					</div>
				</div>
				
			</div>
			
			
				

<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
 } catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
 }
 $i=1;
 $corr = $bdd->query('SELECT *FROM reponses');
 $quest = array(array('Question' => '','rep1' => '','rep2' => '','rep3' => '','numQues' => ''));
 
 while($data=$corr->fetch()) {
  $quest[$i]["Question"]=$data["Question"];
  $quest[$i]["rep1"]=$data["rep1"];
  $quest[$i]["rep2"]=$data["rep2"];
  $quest[$i]["rep3"]=$data["rep3"];
  $quest[$i]["numQues"]=$data["numQues"];
  $i++;
 }
?>
<?php
 foreach ($quest as $key => $value) {
	 $count=$key;
 }
 $alea = array();
$k=rand(1,$count);
$alea[1] =$k;
for ($i=1; $i < $count+1; $i++) {
  do {
    $k=rand(1,$count);
    $b=1;
    for ($j=1; $j < count($alea)+1; $j++) {
   if ($k==$alea[$j]) {
        $b=0;
      }
    }
  } while ($b==0);
  $alea[$i] =$k;
}
?>
<?php
$i=1;
foreach ($quest as $key => $value) {
	if($i==1){
		$q=$alea["$i"];	
		$a=$quest["$q"]["rep1"];
		$b=$quest["$q"]["rep2"];
		$c=$quest["$q"]["rep3"];
		$nq="Q".$quest["$q"]["numQues"];
		$q=$quest["$q"]["Question"];
	echo "	<div class=\"td-sheet\">
		<div class=\"td-sheet-icon\">
			<i class=\"ti-marker-alt\"></i>
		</div>
		<div class=\"td-sheet-title\">Question $i</div>
		<form action=\"test.php\" method=\"post\">
		<div class=\"container\">
			<div class=\"row site-title\">
					<div class=\"col-md-12 text-center\">
					<h2>$q</h2>
					
					<h3>
					<div class=\"wrapper-class\">
					<!-- Group of default radios - option 1 -->
					<div class=\"custom-control custom-radio\">
					 <input type=\"radio\" style=\"height:35px; width:35px; vertical-align: middle;\" class=\"custom-control-input\" id=\"$nq\" name=\"$nq\"value=\"A\">
					 <label class=\"custom-control-label\" for=\"$nq\">$a</label>
					</div>
	
					<!-- Group of default radios - option 2 -->
					<div class=\"custom-control custom-radio\">
					 <input type=\"radio\" style=\"height:35px; width:35px; vertical-align: middle;\" class=\"custom-control-input\" id=\"$key\" name=\"$nq\" value=\"B\">
					 <label class=\"custom-control-label\" for=\"$key\">$b</label>
				   </div>
	
					<!-- Group of default radios - option 3 -->
				   <div class=\"custom-control custom-radio\">
					 <input type=\"radio\" style=\"height:35px; width:35px; vertical-align: middle;\" class=\"custom-control-input\" id=\"$key+101\" name=\"$nq\" value=\"C\">
					 <label class=\"custom-control-label\" for=\"$key+101\">$c</label>
					</div>
					</div>
					  </h3>
				
				</div>
				<div class=\"col-md-3 col-md-offset-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"400\">
					<div class=\"button-row text-left\">
						<div><a title=\"PREV\" onclick=\"tdPrevPage();\"></a></div>
					</div>
				</div>
				<div class=\"col-md-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"600\">
					<div class=\"button-row text-left\">
						<div><a title=\"NEXT\" onclick=\"tdNextPage();\"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>";
	}
	$m=$count+1;
if($i==$m) {
	$l=$i-1;
	$q=$alea["$l"];	
	$a=$quest["$q"]["rep1"];
	$b=$quest["$q"]["rep2"];
	$c=$quest["$q"]["rep3"];
	$nq="Q".$quest["$q"]["numQues"];
	$q=$quest["$q"]["Question"];
echo "	<div class=\"td-sheet\">
	<div class=\"td-sheet-icon\">
		<i class=\"ti-marker-alt\"></i>
	</div>
	<div class=\"td-sheet-title\">Question $key</div>
	
	<div class=\"container\">
		<div class=\"row site-title\">
				<div class=\"col-md-12 text-center\">
				<h2>$q</h2>
				<h3>
				
				<!-- Group of default radios - option 1 -->
				<div class=\"custom-control custom-radio\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$nq\" name=\"$nq\"value=\"A\">
				 <label class=\"custom-control-label\" for=\"$nq\">$a</label>
				</div>

				<!-- Group of default radios - option 2 -->
				<div class=\"custom-control custom-radio\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key\" name=\"$nq\" value=\"B\">
				 <label class=\"custom-control-label\" for=\"$key\">$b</label>
			   </div>

				<!-- Group of default radios - option 3 -->
			   <div class=\"custom-control custom-radio\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key+101\" name=\"$nq\" value=\"C\">
				 <label class=\"custom-control-label\" for=\"$key+101\">$c</label>
				</div>
				  </h3>
			</div>
			<div class=\"col-md-3 col-md-offset-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"400\">
				<div class=\"button-row text-left\">
					<div><a title=\"PREV\" onclick=\"tdPrevPage();\"></a></div>
				</div>
			</div>
			<div class=\"col-md-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"600\">
				<div class=\"button-row text-left\">
					<div><a title=\"NEXT\" onclick=\"tdNextPage();\"></a></div>
				</div>
			</div>
		</div>
		
		<center>   <input style=\"width:20%;heigth:120%;\" type=\"submit\" name=\"submit\" value=\"Envoyez\" class=\"btn btn-danger btn-lg \">  </center>
	    </form>
	</div>
</div>";
	}
	if($i!=1 && $i!=$m){
	$q=$alea["$i"];	
	$a=$quest["$q"]["rep1"];
	$b=$quest["$q"]["rep2"];
	$c=$quest["$q"]["rep3"];
	$nq="Q".$quest["$q"]["numQues"];
	$q=$quest["$q"]["Question"];
echo "	<div class=\"td-sheet\">
	<div class=\"td-sheet-icon\">
		<i class=\"ti-marker-alt\"></i>
	</div>
	<div class=\"td-sheet-title\">Question $key</div>
	
	<div class=\"container\">
		<div class=\"row site-title\">
				<div class=\"col-md-12 text-center\">
				<h2>$q</h2>
				<h3>
				
				<!-- Group of default radios - option 1 -->
				<div class=\"custom-control custom-radio\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$nq\" name=\"$nq\"value=\"A\">
				 <label class=\"custom-control-label\" for=\"$nq\">$a</label>
				</div>

				<!-- Group of default radios - option 2 -->
				<div class=\"custom-control custom-radio\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key\" name=\"$nq\" value=\"B\">
				 <label class=\"custom-control-label\" for=\"$key\">$b</label>
			   </div>

				<!-- Group of default radios - option 3 -->
			   <div class=\"custom-control custom-radio\">
				 <input type=\"radio\" class=\"custom-control-input\" id=\"$key+101\" name=\"$nq\" value=\"C\">
				 <label class=\"custom-control-label\" for=\"$key+101\">$c</label>
				</div>
				  </h3>
			</div>
			<div class=\"col-md-3 col-md-offset-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"400\">
				<div class=\"button-row text-left\">
					<div><a title=\"PREV\" onclick=\"tdPrevPage();\"></a></div>
				</div>
			</div>
			<div class=\"col-md-3 text-center\" data-animation=\"fadeInUp\" data-animation-delay=\"600\">
				<div class=\"button-row text-left\">
					<div><a title=\"NEXT\" onclick=\"tdNextPage();\"></a></div>
				</div>
			</div>
		</div>
	</div>
</div>";
}
$i++;
}
?>
										
											
					
    <script src="js/jquery.min.js"></script>
	<script src="js/responsive.js"></script>
	<script src="js/perfect-scrollbar.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.visible.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/detectanimation.js"></script>
	<script src="js/modernizr.custom.js"></script>
</body>

<!-- Mirrored from www.brunogarcia.net/templates/3dify/creativeagency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Nov 2018 10:07:10 GMT -->
</html>