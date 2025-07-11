<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

  session_destroy();
}



else {
  
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank you!</title>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="shortcut icon" type="x-icon" href="glologo.png"/>
	<link rel="stylesheet" href="aboutus.css" >
    <link rel="stylesheet" href="glo.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
	<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cormorant+Garamond&family=Dancing+Script&family=Edu+NSW+ACT+Foundation&family=Montserrat:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>
<body>
	<?php require 'header.php'; ?>
			<div class="hello"> <p>Thank You For Shopping!</p></div>
			
				

                <?php require 'footer.php'; ?>
    
</body>
</html>

