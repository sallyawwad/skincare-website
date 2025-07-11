<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="shortcut icon" type="x-icon" href="glologo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>What's Your Skin Type?</title>
    <link rel="stylesheet" type="text/css" href="quiz.css" />
    <!-- jQuery -->
    <script src="jquery-3.6.4.min.js"></script>
</head>
<body>
<?php require 'header.php'; ?>

<div class="title">
    <lord-icon
        class="icon"
        src="https://cdn.lordicon.com/hvuelaml.json"
        trigger="hover"
        style="width:50px;height:50px">
    </lord-icon>
    <h1>Quiz: What's Your Skin Type?</h1>
</div>

<div class="text">
    <p class="description">
        Determining your skin type sometimes can feel like finding the missing puzzle piece or cracking the code to your skin-care routine — once you know it, everything makes a lot more sense. Knowing your skin type can help determine which products are right for you, the way your skin may respond to certain ingredients, why you could be experiencing certain skin-care related concerns and so much more. In order to help determine what your skin needs to look its best, you first need to know its type.<br> There are four main skin types: normal, dry, oily, and combination.
        <br>
        If you’re not sure what your skin type is, let us help.
        Take our quiz to help crack the code to what your skin type is and get to the bottom of this important skin-care quest, once and for all.
    </p>
</div>

<div id="quiz-form">
    <p class="que">Q1. How would you typically describe your skin?</p><br>
    <input id="dry" class="radio" type="radio" name="q1" value="a">
    <label for="dry" class="label">Dry and rough to the touch</label> &nbsp;&nbsp;
    <input id="comb" class="radio" type="radio" name="q1" value="b">
    <label for="comb" class="label">Constantly changing</label> &nbsp;&nbsp;
    <input id="oily" class="radio" type="radio" name="q1" value="c">
    <label for="oily" class="label">Shiny. I’m constantly blotting away excess oil</label>&nbsp;&nbsp;
    <input id="normal" class="radio" type="radio" name="q1" value="d">
    <label for="normal" class="label">It’s fairly normal, I have no complaints</label><br><br>

    <p class="que">Q2. Would you describe your skin as sensitive?</p><br>
    <input id="q4" class="radio" type="radio" name="q4" value="a">
    <label for="q4" class="label">Yes, I have to be careful which products I use</label>&nbsp;&nbsp;
    <input id="q41" class="radio" type="radio" name="q4" value="b">
    <label for="q41" class="label">It depends on the day and the area of skin on my face</label>&nbsp;&nbsp;
    <input id="q42" class="radio" type="radio" name="q4" value="c">
    <label for="q42" class="label">Rarely, only to specific components</label>&nbsp;&nbsp;
    <input id="q43" class="radio" type="radio" name="q4" value="d">
    <label for="q43" class="label">No, my skin doesn't aggravate easily</label><br><br>

    <p class="que">Q3. Do you frequently break out?</p><br>
    <input id="q2" class="radio" type="radio" name="q2" value="a">
    <label for="q2" class="label">It is temporary or seasonal, most likely in Winter</label>&nbsp;&nbsp;
    <input id="q21" class="radio" type="radio" name="q2" value="b">
    <label for="q21" class="label">Only on my t-zone</label>&nbsp;&nbsp;
    <input id="q22" class="radio" type="radio" name="q2" value="c">
    <label for="q22" class="label">Yes, all over my face</label>&nbsp;&nbsp;
    <input id="q23" class="radio" type="radio" name="q2" value="d">
    <label for="q23" class="label">No, I have mostly clear skin</label><br><br>

    <p class="que">Q4. What's your biggest skin-care concern?</p><br>
    <input id="q3" class="radio" type="radio" name="q3" value="a">
    <label for="q3" class="label">Dry patches and flakiness</label>&nbsp;&nbsp;
    <input id="q31" class="radio" type="radio" name="q3" value="b">
    <label for="q31" class="label">It depends on the day</label>&nbsp;&nbsp;
    <input id="q32" class="radio" type="radio" name="q3" value="c">
    <label for="q32" class="label">Acne</label>&nbsp;&nbsp;
    <input id="q33" class="radio" type="radio" name="q3" value="d">
    <label for="q33" class="label">None</label><br><br><br><br><br>

    <div class="button">
        <div class="sub"><button type="button" class="submitbtn">Submit</button></div>
        <div class="res"><button type="button" class="tryagain" onclick="refreshPage()">Try Again</button></div>
        <br><br><br><br><br>
    </div>

    <div class="parent">
        <div class="answer"><p id="answer"></p></div>
        <div class="answer1"><p id="answer1"></p></div>
    </div>
</div>

<?php require 'footer.php'; ?>

<script>
$(document).ready(function () {
    $(".submitbtn").click(function () {
        const skinTypeDescriptions = {
            a: {
                description:
                    "You Have Dry Skin. Dry skin typically produces less sebum and lacks the lipids and natural oils the skin needs to stay moisturized. Those with dry skin will find their texture is rough to the touch and flakes or cracks easily. This skin type needs deep hydration to balance it and restore moisture. To moisturize your complexion, we recommend trying Vichy Aqualia Thermal Rich Cream to deeply soothe your skin.",
                img: "<img src='dry2.jpg' alt='skin-type-dry' style='width:300px;height:300px;'>",
            },
            b: {
                description:
                    "You Have Combination Skin. Combination skin is just what it sounds like: Skin that is a mix of two different skin types, oily and dry. Those with combination skin typically experience dryness on their cheeks and oily skin on their T-zone. This can make dealing with combination skin tricky, as the skin-care products you use are not universally effective on your entire face. When treating combination skin, it’s important to customize the skin-care products you use depending on the area. To moisturize your complexion, we recommend trying CeraVe AM Facial Moisturizing Lotion to hydrate skin without clogging pores.",
                img: "<img src='combn.jpg' alt='skin-type-combinational' style='width:300px;height:300px;'>",
            },
            c: {
                description:
                    "You Have Oily Skin. Oily skin generally produces excess sebum all over the face, but especially on the T-zone. Because of this, oily skin types and acne usually go hand in hand. This skin type can benefit from using products specifically formulated to fight high oil production and acne. To moisturize your complexion, we recommend trying Effaclar Matt Mattifying Moisturizer to reduce shine and excess oil.",
                img: "<img src='oily.jpg' alt='skin-type-oily' style='width:300px;height:300px;'>",
            },
            d: {
                description:
                    "You Have Normal Skin. Normal skin is typically described as well-balanced. It is neither too dry nor too oily. Those with normal skin don’t suffer from acne or dry patches on a regular basis. To moisturize your complexion, we recommend trying SkinCeuticals Daily Moisture to give the skin just the right amount of hydration.",
                img: "<img src='normal2.jpg' alt='skin-type-normal' style='width:300px;height:300px;'>",
            },
        };

        let answers = [
            $("input[name='q1']:checked").val(),
            $("input[name='q2']:checked").val(),
            $("input[name='q3']:checked").val(),
            $("input[name='q4']:checked").val(),
        ];

        if (answers.includes(undefined)) {
            $("#answer").text("Please answer all questions before submitting.");
            $("#answer1").html("");
            return;
        }

        let counts = {};
        answers.forEach((ans) => {
            counts[ans] = (counts[ans] || 0) + 1;
        });

        let maxCount = 0;
        let probableSkinType = null;
        for (const [type, count] of Object.entries(counts)) {
            if (count > maxCount) {
                maxCount = count;
                probableSkinType = type;
            }
        }

        if (probableSkinType && skinTypeDescriptions[probableSkinType]) {
            $("#answer").text(skinTypeDescriptions[probableSkinType].description);
            $("#answer1").html(skinTypeDescriptions[probableSkinType].img);
        } else {
            $("#answer").text("We could not determine your skin type. Please try again.");
            $("#answer1").html("");
        }
    });
});

function refreshPage() {
    location.reload();
}
</script>

</body>
</html>
<?php

} else {
    header("Location: login.php");
    exit;
}

?>


        