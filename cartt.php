<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "7412369mariamusalbaydoun@!@";
$dbname = "phasethree";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $full_name = $_POST['full_name'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];

        // Sanitize the phone number (remove non-numeric characters)
        $phone_number = preg_replace('/[^0-9]/', '', $phone_number);

        // SQL insert query
        $insert_query = "INSERT INTO user_details (full_name, address, phone_number) VALUES ('$full_name', '$address', '$phone_number')";

        // Execute the insert query
        if (mysqli_query($conn, $insert_query)) {
            echo "Record inserted successfully!";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <style>

        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fdfdf8;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        .form-container input[type="submit"] {
            background-color: #7f2546;
            color: #fdfdf8;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        .btn-primary {
            color: #fff;
            background-color: #7f2546 !important;
            border-color: #7f2546 !important;
            margin-left:650px;
            
        }
        
    </style>
</head>
<body>
	<?php require 'header.php'; ?>
    <div class="form-container">
        <h2>Delivery Form</h2>
        <form action="cartt.php" method="POST">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name" required>
            
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
            
            <label for="phone_number">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone_number" required>
            
            <input type="submit" value="Submit">
        </form>
    </div>
    <form action="bye.php" method="post">
        <button class="btn btn-primary" type="submit">Logout</button>
    </form>
    <?php require 'footer.php'; ?>
</body>

</html>
<?php 
} else {
    header("Location: login.php");
    exit;
}
mysqli_close($conn);
?>