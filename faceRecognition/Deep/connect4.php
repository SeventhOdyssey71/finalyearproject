<?php
// Include necessary files and establish a database connection
include 'css/style.css';  // Note: Stylesheets should be included in the HTML head, not PHP
include 'css2/styles.css'; // Note: Stylesheets should be included in the HTML head, not PHP
include 'resources/resource.js'; // Note: JavaScript should be included in the HTML head, not PHP

// Start a session to track user login status
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', '500levelproject') or die('Connection Failed: ' . mysqli_connect_error());

    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check if the username and password match
    $sql = "SELECT * FROM `students2` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // If a match is found, set session variables and redirect to another page
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirect to a secure page
        exit();
    } else {
        echo "Invalid username or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>










<style>
   <?php include 'css\style.css' ; include 'css2\styles.css' ; include 'resources\resource.js'; 
   
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root','','500levelproject') or die('Connection Failed:' . mysqli_connect_error());
    if(isset($_POST['username']) && isset($_POST['password'])) {
    
        $username= $_POST['username'];
        $password= $_POST['password'];


        $sql = "INSERT INTO `students2` (`username`, `password`) VALUES ('$username', '$password')";

        $query = mysqli_query($conn,$sql);
        if($query) {
            echo "Entry Successful";
        }
        else {
            echo "Error Occured";
        }
    }
}   

?>
</style>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="css2\styles.css">

    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Final Year Project | Homepage</title>
</head>
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-menu">
            <p class="nav-name">Project</p>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="#home" class="nav-link active-link">Home</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#about" class="nav-link">About</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#contact" class="nav-link">Contact</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>

        <div class="nav-menu-btn">
            <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>


    <!-- -------------- MAIN ---------------- -->
    <main class="wrapper">
       <!-- -------------- FEATURED BOX ---------------- -->
       <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="featured-name">
                <p>Successfully Logged In!</p>
            </div>
            <div class="featured-text-info">
                <p>Welcome to the Facial Recognition Interface
                    Please register your courses before 23rd October, 2024..
                </p>
            </div>
       </section>

    </main>

    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

       <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="trial2\resources\resource.js"></script>
</body>
</html>