<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from themelooks.us/demo/popforms/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 18:01:39 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<meta name="description" content="">
	<!-- <meta name="author" conhttp://localhost/projetTT/Login/tent=""> -->

	<title>Dev Academy Tn</title>
	<link href="https://fonts.googleapis.com/css?family=Karla|Unlock" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<style>
body{
	background-image:url("img/bg.jpg");

    background-color: #cccccc;

}
.loginFormModal{
	box-shadow: 0 0 30px 10px rgba(black, .3);
  border-radius: 40px;
}

</style>
<script src="test_jqury.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<!-- ====Google Font CSS==== -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,500,700,900' rel='stylesheet' type='text/css'>
	<!-- ====Font Awesome CSS==== -->
	<link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<!-- ====Favicons==== -->
	<link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="img/favicon.png" rel="icon" type="image/x-icon">

	<!-- ====Bootstrap Core CSS==== -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>

	<!-- ====Material Design Lite Core CSS==== -->
	<link href="css/material.min.css" rel="stylesheet" type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">

	<!-- ====Core CSS==== -->
	<link href="style.css" rel="stylesheet" type='text/css'>

	<!-- ====Main Color Scheme CSS==== -->
	<link href="css/main-color-1.css" rel="stylesheet" type='text/css' id="mainColorScheme">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>

</style>
</head>
<body>
	<!-- Top Navigation Bar Start -->
	<nav id="topNav2" class="navbar">
	<br><br><br><br> <br><br><br><br>
		<div class="container">
            <!-- Logo Start -->
            <!-- Logo End -->
		</div>
	</nav>
	<!-- Top Navigation Bar End -->


	
		<div class="vc-parent">
	
			<div class="vc-child">
			
				<div class="banner-content">
				
				    
					<center>
					<div class="container">
						
						<img src="img/logo.png" alt="" width="500px" style="opacity:1; margin-top:10px;" height="150px">
					</div>
					</center>
					    <div class="row">

			                <div class="col-md-12">
							
							    <div class="slider-2-content text-center">
								
			                    
								    <h2 class="mdl-typography--display-2 mdl-typography--text-capitalize" style="font-family: 'Kaushan Script', cursive; opacity:4;">Welcome To our Website</h2>
			                        <h5 style="font-family: 'Marck Script', cursive;">New to our Website ? Just dont hesitate to join us ^^</h5>
			                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised " style="font-family: 'Righteous', cursive; color:white;" data-toggle="modal" data-target="#loginFormModal" ><i><img src="img/login.png" alt=""></i> Login</a>
			                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised " style="font-family: 'Righteous', cursive; color:white;"data-toggle="modal" data-target="#signupFormModal"><i><img src="img/enter.png" alt=""></i> Signup</a>
			                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised"  style="font-family: 'Righteous', cursive; color:white;"data-toggle="modal" data-target="#forgotFormModal"><i><img src="img/enter.png" alt=""></i> Signup enseignant</a>
			                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised " style="font-family: 'Righteous', cursive; color:white;"data-toggle="modal" data-target="#contactFormModal"><i><img src="img/contact.png" alt=""></i> Contact</a>
			                    
								</div>
								</div>
			            
						       </div>
			            </div>
			        </div>
		        </div>
			</div>
		</div>
	</div>
	</div>
	<!-- Banner Area End -->
	
	<!-- Login Form Start -->
	<div class="modal fade" id="loginFormModal" tabindex="-1" role="dialog" aria-labelledby="loginForm">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="loginForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="" width="70px" height="60px">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
							<form action="login.php" method="post" id="loginForm">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="loginUsername" id="loginUsername">
									<label class="mdl-textfield__label" for="loginUsername">Login</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="password" name="loginPassword" id="loginPassword">
									<label class="mdl-textfield__label" for="loginPassword">Password</label>
								</div>
								
								<button type="submit" class="login-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Login</button>
							</form>
						</div>
						<div class="mdl-card__actions mdl-card--border clearfix">
							<a href="#" class="pull-left mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#forgotFormModal" data-dismiss="modal">
								Forgot Password?
							</a>
							<a href="#" class="pull-right mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#signupFormModal" data-dismiss="modal">
								Create An Account
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Login Form End -->

	<!-- Signup Form Start -->
	<div class="modal fade" id="signupFormModal" tabindex="-1" role="dialog" aria-labelledby="signupFormModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="signupForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="" width="70px" height="60px">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
<?php function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>
<?php
$nameErr = $emailErr  = $telErr =$psoErr= $motErr = "";
$name = $email = $pso =$mot = ""; 
$i=$j=$k=$l=-1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["signame"])) {
    $nameErr = "Ajouter un nom slvp";
  } else {
    $name = test_input($_POST["signame"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Il doit contenir que des lettres des espaces."; 
    }
    else{
    $nameErr = "Le nom est Validé.";  
    $i=1;}
  }
  
  if (empty($_POST["sigemail"])) {
    $emailErr = "Taper votre email slvp slvp !";
  } else {
    $email = test_input($_POST["sigemail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "C'est n'est pas un email taper un autre"; 
    }
    else{
    $emailErr = "email est Validé";
    $j=1;
}

  }
  if (empty($_POST["sigpso"])) {
    $psoErr = "Taper un pseudo nom slvp !";
  } else {
    $pso = test_input($_POST["sigpso"]);
    if (!preg_match("/^[a-zA-Z]*$/",$pso)) {
      $psoErr = "Il doit contenir que des lettres des espaces."; 
    }
    else{
    $psoErr = "Le nom est Validé.";  
    $k=1;
}
  }

  $mot = test_input($_POST["mot"]);
  if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mot)) {
    $motErr ="Mot de passe conforme";
    $l=1;
}
else if (strlen($mot) < 8) {
    $motErr = "Mot de passe non conforme";
}
else {
    $motErr = "Mot de passe non conforme";
}
}
/*if ($i==1 && $k==1 && $j==1){
    header('Location:envoyez.php'); 
}*/
?>
<form method="post" action="inscri.php">  

<label for="uname1">Nom & Prénom </label><input class="mdl-textfield__input"  type="text" name="signame" placeholder="Votre Nom & Prénom" value="<?php echo $name;?>">
  <?php 
  if($i==1) 
  echo "<span class=\"error\" style=\"color:green\">*$nameErr</span>";
  else
  echo "<span class=\"error\" style=\"color:red\">*$nameErr</span>";
  ?>
  <br>
  <label>Email </label> <input class="mdl-textfield__input"  type="text" name="sigemail" placeholder="persone@exemple" value="<?php echo $email;?>" required>
  <?php 
  if($j==1) 
  echo "<span class=\"error\" style=\"color:green\">*$emailErr</span>";
  else
  echo "<span class=\"error\" style=\"color:red\">*$emailErr</span>";
  ?>
  <br>
  <label>Télephone </label>
  <input type="Number" class="mdl-textfield__input" name="sigtel" id="" placeholder="(+216)" required>
  <span class="error" style="color:green"><?php echo $telErr;?></span>
  <br>
  <label>Numéro Carte etudiant </label>
  <input type="number" class="mdl-textfield__input" name="numcarte" id=""placeholder="Num Carte etudiant" required>
  <br>
  <label>Numéro CIN </label>
  <input type="number" class="mdl-textfield__input" name="CIN" id=""placeholder="CIN" required>
  <br>
  <div class="form-group">
    <label>Mot de passe </label>
        <input type="password" class="mdl-textfield__input" name="mot" id="pas"placeholder="Votre Mot de passe" required>
        <input type="checkbox" name="" id="cc"><label for="">Afficher le mot de passe</label><br>
        <?php if($l==1) 
  echo "<span class=\"error\" style=\"color:green\">*$motErr</span>";
  else
  echo "<span class=\"error\" style=\"color:red\">*$motErr</span>";
  ?>
    </div>
	<button type="submit" class="singup-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Signup</button>
						</div>
						</form>
						<div class="mdl-card__actions mdl-card--border clearfix">
							<p class="pull-left">Already Have An Account?</p>
							<a href="#" class="pull-right mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#loginFormModal" data-dismiss="modal">
								Login
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Signup Form End -->

	
	<!-- Forgot Form Start -->
	<div class="modal fade" id="forgotFormModal" tabindex="-1" role="dialog" aria-labelledby="signupFormModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="forgotForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="" width="70px" height="60px">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
						<?php
$nameErr = $emailErr  = $telErr =$psoErr= $motErr = "";
$name = $email = $pso =$mot = ""; 
$i=$j=$k=$l=-1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["signame"])) {
    $nameErr = "Ajouter un nom slvp";
  } else {
    $name = test_input($_POST["signame"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Il doit contenir que des lettres des espaces."; 
    }
    else{
    $nameErr = "Le nom est Validé.";  
    $i=1;}
  }
  
  if (empty($_POST["sigemail"])) {
    $emailErr = "Taper votre email slvp slvp !";
  } else {
    $email = test_input($_POST["sigemail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "C'est n'est pas un email taper un autre"; 
    }
    else{
    $emailErr = "email est Validé";
    $j=1;
}

  }
  if (empty($_POST["sigpso"])) {
    $psoErr = "Taper un pseudo nom slvp !";
  } else {
    $pso = test_input($_POST["sigpso"]);
    if (!preg_match("/^[a-zA-Z]*$/",$pso)) {
      $psoErr = "Il doit contenir que des lettres des espaces."; 
    }
    else{
    $psoErr = "Le nom est Validé.";  
    $k=1;
}
  }

  $mot = test_input($_POST["mot"]);
  if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mot)) {
    $motErr ="Mot de passe conforme";
    $l=1;
}
else if (strlen($mot) < 8) {
    $motErr = "Mot de passe non conforme";
}
else {
    $motErr = "Mot de passe non conforme";
}
}
if ($i==1 && $k==1 && $j==1){
	echo "<script type='text/javascript'>swal(\"votre demande est bien enregistrée!\", \"Merci de clicer sur le boutton!\", \"success\");</script>"; 
}
?>
<form method="post" action="inscriensig.php">  

<label for="uname1">Nom & Prénom </label><input class="mdl-textfield__input"  type="text" name="signame" placeholder="Votre Nom & Prénom" value="<?php echo $name;?>">
  <?php 
  if($i==1) 
  echo "<span class=\"error\" style=\"color:green\">*$nameErr</span>";
  else
  echo "<span class=\"error\" style=\"color:red\">*$nameErr</span>";
  ?>
  <br>
  <label>Email </label> <input class="mdl-textfield__input"  type="text" name="sigemail" placeholder="persone@exemple" value="<?php echo $email;?>" required>
  <?php 
  if($j==1) 
  echo "<span class=\"error\" style=\"color:green\">*$emailErr</span>";
  else
  echo "<span class=\"error\" style=\"color:red\">*$emailErr</span>";
  ?>
  <br>
  <label>Télephone </label>
  <input type="Number" class="mdl-textfield__input" name="sigtel" id="" placeholder="(+216)" required>
  <span class="error" style="color:green"><?php echo $telErr;?></span>
  <br>
  <label>Numéro CIN </label>
  <input type="number" class="mdl-textfield__input" name="CIN" id=""placeholder="CIN" required>
  <br>
  <div class="form-group">
    <label>Mot de passe </label>
        <input type="password" class="mdl-textfield__input" name="mot" id="pas"placeholder="Votre Mot de passe" required>
        <input type="checkbox" name="" id="c"><label for="">Afficher le mot de passe</label><br>
        <?php if($l==1) 
  echo "<span class=\"error\" style=\"color:green\">*$motErr</span>";
  else
  echo "<span class=\"error\" style=\"color:red\">*$motErr</span>";
  ?>
    </div>
	<button type="submit" class="singup-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Signup</button>
						</div>
						</form>
						</div>
						<div class="mdl-card__actions mdl-card--border clearfix">
							<p class="pull-left">No Account?</p>
							<a href="#" class="pull-right mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#signupFormModal" data-dismiss="modal">
								Create An Account
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Forgot Form End -->
	
	<!-- Subscribe Form Start -->
	<div class="modal fade" id="subscribeFormModal" tabindex="-1" role="dialog" aria-labelledby="subscribeFormModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="subscribeForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="" width="70px" height="60px">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
							<form action="#" method="post" id="subscribeForm">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="subscribeEmail" id="subscribeEmail">
									<label class="mdl-textfield__label" for="subscribeEmail">E-mail Address</label>
								</div>
								
								<button type="submit" class="subscribe-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Subscribe Form End -->
	
	<!-- Contact Form Start -->
	<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="contactForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="" width="70px" height="60px">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
							<form action="http://themelooks.us/demo/popforms/preview/sendmail.php" method="post" id="contactForm">
								<div class="row">
									<div class="col-md-6">
										<div class="mdl-textfield mdl-js-textfield">
											<input class="mdl-textfield__input" type="text" name="contactName" id="contactName">
											<label class="mdl-textfield__label" for="contactName">Full Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mdl-textfield mdl-js-textfield">
											<input class="mdl-textfield__input" type="text" name="contactEmail" id="contactEmail">
											<label class="mdl-textfield__label" for="contactEmail">E-mail Address</label>
										</div>
									</div>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="contactSubject" id="contactSubject">
									<label class="mdl-textfield__label" for="contactSubject">Subject</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<textarea class="mdl-textfield__input" name="contactMessage" id="contactMessage"></textarea>
									<label class="mdl-textfield__label" for="contactMessage">Message</label>
								</div>
								
								<button type="submit" class="contact-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Contact Form End -->
		
    <!-- Color Switcher Start -->
    <div id="open-switcher">
        <i class="fa fa-paint-brush"></i>
    </div>
    <div id="close-switcher">
        <i class="fa fa-times"></i>
    </div>
    <div id="demo-colors" class="mdl-card mdl-shadow--24dp">
        <div id="demo-wrapper">

            <h2>MAIN COLOR:</h2>

            <ul id="mainColors">
                <li class="color-2 active" data-path="css/main-color-1.css"></li>
                <li class="color-4" data-path="css/main-color-2.css"></li>
                <li class="color-3" data-path="css/main-color-3.css"></li>
                <li class="color-1" data-path="css/main-color-4.css"></li>
                <li class="color-5" data-path="css/main-color-5.css"></li>
            </ul>

        </div>
    </div>
    <!-- Color Switcher End -->

	<!-- ====jQuery Core JavaScript==== -->
	<script src="js/jquery-2.2.2.min.js"></script>

	<!-- ====Bootstrap Core JavaScript==== -->
	<script src="js/bootstrap.min.js"></script>

	<!-- ====Material Design Lite Core JavaScript==== -->
	<script src="js/material.min.js"></script>
	
    <!-- ====jQuery Validation JavaScript==== -->
    <script src="js/jquery.validate.min.js"></script>

	<!-- ====Core JavaScript==== -->
	<script src="js/main.js"></script>

	<!-- ====Color Switcher JavaScript==== -->
	<script src="js/color-switcher.js"></script>
	<?php 
	if (!empty($_COOKIE["Ereur"])) {
		$sk=$_SESSION['err'];
		//var_dump($_COOKIE["err"]);
		if ($sk!='Non') {
			echo "<script type='text/javascript'>swal(\"$sk !\", \"Essai noveau !\", \"error\");</script>";
			$_SESSION["err"]='Non';
		}
	}
	?>
	<script>
$(document).ready(function(){
$("#cc").click(function () {
var type = $("#pas").attr("type");
if( type === 'password' ){
$("#pas").attr("type", "text");
}else{
$("#pas").attr("type", "password");
} });});
</script>
	<script>
$(document).ready(function(){
$("#c").click(function () {
var type = $("#pas").attr("type");
if( type === 'password' ){
$("#pas").attr("type", "text");
}else{
$("#pas").attr("type", "password");
} });});
</script>

<script>
if (<? echo $_COOKIE["Ereur"];?>==' Mot de passe est faux') {
	console.log('m');
	
}
</script>



</body>

<!-- Mirrored from themelooks.us/demo/popforms/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 18:01:47 GMT -->
</html>