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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css\style.css">
    <title>Final Year Project | Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>PROJECT .</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="connect3.php" class="link active">Home</a></li>
                <li><a href="#" class="link">Contact</a></li>
                <li><a href="#" class="link">About</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <form action="connect1.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-field" name="username" id="username"  placeholder="username" required />
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" id="password"  placeholder="password" required />
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="submit" id="submit" value="Sign In" />
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check" name="remember" >
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="three-col">
                        <p style="color: red">Invalid Username or Password!</p>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </form>
        </div>

        <!------------------- registration form -------------------------->

        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <form action="connect2.php" method="POST">
                <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="firstname" id="firstname" placeholder="firstname" />
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="lastname" id="lastname" placeholder="lastname" />
                    <i class="bx bx-user"></i>
                </div>
                
                <div class="input-box">
                    <input type="text" class="input-field" name="matricnumber" id="matricnumber" placeholder="mat Number" />
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="username" id="username" placeholder="username" />
                <i class="bx bx-user"></i>

            <div class="input-box">
                <input type="password" class="input-field" name="password" id="password" placeholder="password" />
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="submit" id="submit" value="Register" />
            </div>
            <div class="two-col">

            </div>
        </div>
            </form>
        </div>
    </div>
</div>   

<script>
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }

   var a = document.getElementById("loginBtn");
   var b = document.getElementById("registerBtn");
   var x = document.getElementById("login");
   var y = document.getElementById("register");

   function login() {
       x.style.left = "4px";
       y.style.right = "-520px";
       a.className += " white-btn";
       b.className = "btn";
       x.style.opacity = 1;
       y.style.opacity = 0;
   }

   function register() {
       x.style.left = "-510px";
       y.style.right = "5px";
       a.className = "btn";
       b.className += " white-btn";
       x.style.opacity = 0;
       y.style.opacity = 1;
   }
</script>

</body>
</html>