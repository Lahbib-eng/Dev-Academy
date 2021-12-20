<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Elsie+Swash+Caps" rel="stylesheet">
<style> 


body {
    background-image: url("certificate.jpg");  
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
    background-position: center top; 
    
}
#name{
  margin-left:34%;
  font-size:450%;
  color:black;
  font-family: 'Elsie Swash Caps', cursive;
}
</style>
</head>
<body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<span id="name"><?php echo $_SESSION["nom"] ?></span>
</body>
</html>