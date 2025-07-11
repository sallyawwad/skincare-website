<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phasethree";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>UI Monk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Glo SkinCare</title>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="shortcut icon" type="x-icon" href="glologo.png" />
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="glo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cormorant+Garamond&family=Dancing+Script&family=Edu+NSW+ACT+Foundation&family=Montserrat:wght@300&family=Raleway:wght@200&display=swap"
        rel="stylesheet">


    <style>
        img {
            width: 100px !important;
            height: 100px !important;

        }


        p {
            text-align: center;
            white-space: nowrap
        }

        h6 {
            text-align: center
        }

        .btn-danger {
            color: #fff !important;
            background-color: #7f2546 !important;
            border-color: #7f2546 !important;
        }

        .image {
            border-radius: 200px;


        }

        .con {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fdf8f8;
            margin-bottom: 50px;

        }
    </style>
</head>

<body>
    <nav>
        <img src="gloFinal.png" alt="Logo">
        <ul>
            <li><a href="glo.php">Home</a></li>
            <li><a href="quiz.php">Quiz</a></li>
            <li><a href="skin-concerns.php">Skin Concerns</a></li>
            <li><a href="Shop.php">Shop</a></li>
            <li><a href="cartt.php"><lord-icon class="bag-icon"
                        src="https://cdn.lordicon.com/medpcfcy.json" trigger="hover" colors="primary:#7f2549"
                        state="hover-2" style="width:32px;height:32px"></lord-icon>
                </a></li>
        </ul>
    </nav>

    <div>
        <div class="con">
            <!-- Removed user profile image and name since no session -->
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">

                    <?php
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-3 text-center mt-5">
                        <img src="image/<?php echo $row['image'] ?>" alt="">
                        <p><?php echo $row['name'] ?></p>
                        <h6>Price: <?php echo $row['price'] ?></h6>
                        <div class="form-group">
                            <label>Select list:</label>
                            <select class="form-control" id="quantity<?php echo $row['id'] ?>">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <input type="hidden" id="name<?php echo $row['id'] ?>" value='<?php echo $row['name'] ?>'>
                            <input type="hidden" id="price<?php echo $row['id'] ?>" value='<?php echo $row['price'] ?>'>

                            <button class='btn btn-danger add' data-id="<?php echo $row['id'] ?>">Add to Cart</button>

                        </div>

                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
                <h3 class='text-center'> Checkout</h3>
                <div id="displayCheckout">
                    <?php
                    /*
                    if (!empty($_SESSION['cart'])) {
                        $outputTable = '';
                        $total = 0;
                        $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td> </tr></thead>";
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $outputTable .= "<tr><td>" . $value['p_name'] . "</td><td>" . ($value['p_price'] * $value['p_quantity']) . "</td><td>" . $value['p_quantity'] . "</td><td><button id=" . $value['p_id'] . " class='btn btn-danger delete'>Delete</button></td></tr>";
                            $total = $total + ($value['p_price'] * $value['p_quantity']);
                        }
                        $outputTable .= "</table>";
                        $outputTable .= "<div class='text-center'><b>Total: " . $total . "</b></div>";
                        echo $outputTable;
                    }
                    */
                    ?>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function () {
            alldeleteBtn = document.querySelectorAll('.delete')
            alldeleteBtn.forEach(onebyone => {
                onebyone.addEventListener('click', deleteINsession)
            })

            function deleteINsession() {
                removable_id = this.id;
                $.ajax({
                    url: 'cart.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        id_to_remove: removable_id,
                        action: 'remove'
                    },
                    success: function (data) {
                        $('#displayCheckout').html(data);
                        alldeleteBtn = document.querySelectorAll('.delete')
                        alldeleteBtn.forEach(onebyone => {
                            onebyone.addEventListener('click', deleteINsession)
                        })
                    }
                }).fail(function (xhr, textStatus, errorThrown) {
                    alert(xhr.responseText);
                });

            }


            $('.add').click(function () {
                id = $(this).data('id');
                name = $('#name' + id).val();
                price = $('#price' + id).val();
                quantity = $('#quantity' + id).val();
                $.ajax({
                    url: 'cart.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        cart_id: id,
                        cart_name: name,
                        cart_price: price,
                        cart_quantity: quantity,
                        action: 'add'
                    },
                    success: function (data) {
                        $('#displayCheckout').html(data);
                        alldeleteBtn = document.querySelectorAll('.delete')
                        alldeleteBtn.forEach(onebyone => {
                            onebyone.addEventListener('click', deleteINsession)
                        })
                    }
                }).fail(function (xhr, textStatus, errorThrown) {
                    alert(xhr.responseText);
                });

            })
        })
    </script>

</body>

<footer>
    <div class="footerContainer">
        <div class="newsletter">
            <p class="pfooter1">SIGN UP FOR EMAIL TEXTS FOR THE LATEST UPDATES, SPECIAL OFFERS, AND MORE.</p>
            <p class="pfooter2">By entering your email address and clicking "Join Us" you agree to receive marketing email messages from Rare Beauty at
                the email address provided. Unsubscribe at any time.</p>

            <form action="subscribe.php" method="POST" id="subscribeForm">
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <button type="submit" class="JoinUs">Join Us &#8594;</button>
            </form>


            <script>
                document.getElementById("subscribeForm").addEventListener("submit", function (event) {
                    event.preventDefault(); // Prevent the default form submission

                    var emailInput = document.getElementById("email").value;
                    // Perform additional validation if needed

                    // Display the alert
                    alert("Thank you for subscribing to our newsletter!");


                });
            </script>
            <hr>

            <p class="connect">Connect with us</0>
                <ul class="footer-ul">
                    <li><a href="#"><i class="fa-brands fa-instagram fa-2xl" style="color: #7f2546;"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook fa-2xl" style="color: #7f2546;"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter fa-2xl" style="color: #7f2546;"></i></a></li>
                </ul>

                <br>
                <hr>

                <p class="connect">Company</0>
                    <ul class="footer-ul-2">
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
        </div>

        <div class="maps">
            <p class="ourlocation">Our Location</p>
            <div class="map_canvas">
                <iframe width="100%" height="200" id="gmap_canvas"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.293468430222!2d35.5005655151662!3d33.856326980659695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1760d7c6f333%3A0xf7c29c0898692ff9!2sUSAL%20-%20University%20Of%20Sciences%20And%20Arts%20In%20Lebanon!5e0!3m2!1sen!2sus!4v1679926001813!5m2!1sen!2sus"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
            </div>
        </div>
    </div>
</footer>
</html>

<?php
mysqli_close($conn); 
?>
