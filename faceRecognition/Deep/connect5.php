<style>
        <?php include 'css\style.css' ; include 'resources\css2\styles.css' ; include 'resources\resource.js';



    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'])) {
        $conn= mysqli_connect('localhost', 'root','','500levelproject') or die('Connection Failed:' . mysqli_connect_error());
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['matricnumber']) && isset($_POST['username'])&& isset($_POST['password'])) 
        {
        
            $firstname= $_POST['firstname'];
            $lastname= $_POST['lastname'];
            $matricnumber= $_POST['matricnumber'];
            $username= $_POST['username'];
            $password= $_POST['password'];

            $sql = "INSERT INTO `students` (`firstname`, `lastname`, `matricnumber`, `username`, `password`) VALUES ('$firstname', '$lastname', '$matricnumber', '$username', '$password')";

            $query = mysqli_query($conn,$sql);
            if($query) {
                echo "Registration Successful";
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
                    <a href="connect3.php" class="nav-link active-link">Home</a>
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
                <p>Register your courses as soon as possible.
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
