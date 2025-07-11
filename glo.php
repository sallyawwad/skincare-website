<?php 
session_start();

/* Temporarily disable login check to allow direct access for screenshots
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Glo SkinCare</title>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="shortcut icon" type="x-icon" href="glologo.png"/>
    <link rel="stylesheet" href="aboutus.css" >
    <link rel="stylesheet" href="glo.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cormorant+Garamond&family=Dancing+Script&family=Edu+NSW+ACT+Foundation&family=Montserrat:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <?php require 'header.php'; ?>
        <div class="hello"> <p>say hello to glo</p></div>
        
        <div class="background">
            <div id="quote"></div>
            <img class="quotepic" src="quotepic.png">
        </div>
        
        <div class="color"></div>

        <section>
            <p class="best">Best Sellers</p>
            <div class="circle"></div>
            <div class="content">
                <div class="textBox">
                    <h2>It is not just skin care<br>It's <span>GloSkinCare</span></h2>
                    <p style="width:300px; font-size: 20px">If you are always on the hunt for the next big thing when it comes to skincare, we’re here to help.<br><br>
                    Shop our BestSellers now!
                    </p>
                <a href="shop.php">Shop Now</a>
                </div>
                <div class="imgBox">
                    <img src="img1.png" class="skincare">
                </div>

            <ul class="thumb">
                <li><img src="thumb1.png" onclick="imgSlider('img1.png')"></li>
                <li><img src="thumb2.png" onclick="imgSlider('img2.png')"></li>
                <li><img src="thumb3.png" onclick="imgSlider('img3.png')"></li>
            </ul>
        </section>
    </div>

        <div class="featured">
            <div class="befeatured">
                <p class="FeaturesTitle">@GloSkinCare</p>
                <p class="featuredText">Share with us your Skin Care Routine Using products bought from Glo SkinCare for a chance to be featured on our website. Tag us in the caption!</p>
            </div>
            <div><img class="gif"src="gif1.gif"></div>
        </div>

        <div class="container">
            <div><img class="ourStory"src="selenaduck.webp"></div>
            <div class="container2"><p  class="ourStoryTitle">With Us You Glow</p>
            <p class="ourStoryText">Together we’re building a safe, welcoming space in beauty and beyond. This is Skin Care made to feel good in, without hiding what makes you unique. And it’s all vegan and cruelty free.</p>
            <p class="linkourstory"><a href="aboutus.html">Our Story</a></p>
            </div>
        </div>

    <?php require 'footer.php'; ?>

    <script>
        window.onload = function() {
          // JavaScript code
          function getRandomElement(array) {
            let randomIndex = Math.floor(Math.random() * array.length);
            return array[randomIndex];
          }
      
          let myArray = [
            "Last minute skincare is better than no skincare.",
            "Filters are great, but great skin is better",
            "Eat, sleep, skincare, repeat.",
            "Stop wishing you had great skin and get it.",
            "But first...skincare!",
            "Your skin is your best accessory. Take good care of it.",
            "Glowing skin is always in",
            "Beauty is being comfortable in your own skin",
            "Your skincare routine is a bank account. Invest wisely."
          ];
          let quote_div = document.getElementById("quote");
      
          let randomElement = getRandomElement(myArray);
          quote_div.innerHTML = randomElement;
        }
    </script>

    <script>
        function imgSlider(anything){
            document.querySelector('.skincare').src = anything;
        }
    </script>

</body>
</html>

<?php
/* 
} else {
    header("Location: login.php");
    exit();
} 
*/
?>
