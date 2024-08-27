<?php


session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', '500levelproject') or die('Connection Failed: ' . mysqli_connect_error());

    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    $sql = "SELECT * FROM `students` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // If a match is found, set session variables and redirect to another page
        $_SESSION['username'] = $username;
        header('Location: connect5.php'); // Redirect to a secure page
        exit();
    } else {
        header('Location: connect6.php');
    }

    // Close the database connection
    mysqli_close($conn);
}
?>


