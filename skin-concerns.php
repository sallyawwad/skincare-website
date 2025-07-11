<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Skin Concerns</title>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="shortcut icon" type="x-icon" href="glologo.png"/>
	<link rel="stylesheet" href="aboutus.css" >
    <link rel="stylesheet" href="glo.css" >
    <link rel="stylesheet" href="skin-concerns.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
	<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cormorant+Garamond&family=Dancing+Script&family=Edu+NSW+ACT+Foundation&family=Montserrat:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>
<body>
<?php require 'header.php'; ?>

    <div class="contains">
        <img class="articleimg" src="AIMG/firstarticle.jpg">
        <a href="article1.html" class="articletitle">Derm DMs: Why Does Redness Linger After a Pimple Is Gone?</a>
        <p class="date">27-3-2022</p>
    </div>

    <div class="contains">
        <img class="articleimg" src="AIMG/secondarticle.jpg">
        <a href="article2.html" class="articletitle">How Often Should You Change Your Skincare Routine?</a>
        <p class="date">21-8-2020</p>
    </div>

    <div class="contains">
        <img class="articleimg" src="AIMG/thirdarticle.jpg">
        <a href="article3.html" class="articletitle">What Is Vitamin C and How Does It Work? We Asked a Dermatologist</a>
        <p class="date">4-4-2022</p>
    </div>

    <div class="contains">
        <img class="articleimg" src="AIMG/fourtharticle.jpg">
        <a href="article4.html" class="articletitle">Dry, Cracked Hands? Try This Nourishing Hand-Care Routine</a>
        <p class="date">31-10-2021</p>
    </div>

    <div class="contains">
        <img class="articleimg" src="AIMG/fiftharticle.jpg">
        <a href="article5.html" class="articletitle">Adult Acne: What Causes It and How Can You Address It?</a>
        <p class="date">6-6-2021</p>
    </div>

    <div class="contains">
        <img class="articleimg" src="AIMG/sixtharticle.jpg">
        <a href="article6.html" class="articletitle">What Micellar Water Does and Why You Should Be Using It</a>
        <p class="date">18-3-2023</p>
    </div>


    <?php require 'footer.php'; ?>
</body>
</html>
<?php 
}else {
	header("Location: login.php");
	exit;
}    
?>