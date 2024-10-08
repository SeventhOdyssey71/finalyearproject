<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="C:\xampp\htdocs\trial2\resources\css2\styles.css">

    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Final Year Project | Homepage</title>
</head>
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
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
            <div class="featured-text-card">
                <span>MTE501 Project</span>
            </div>
            <div class="featured-name">
                <p>Know the <span class="typedText"></span><p>Behind the Answers</p></p>
            </div>
            <div class="featured-text-info">
                <p>Facial Recognition Exam-Check In Interface built by
                   Odigie Eromonsele & Wetan Ivan
                </p>
            </div>
            <div class="featured-text-btn">
                <a href="C:\xampp\htdocs\trial2\index.html" class="btn blue-btn">Login/Sign Up</a>
            </div>
          </div>
          <div class="featured-image">
            <div class="image">
                <img src="C:\xampp\htdocs\trial2\resources\face.webp" alt="avatar">
            </div>
          </div>


       </section>

    </main>

    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

       <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="C:\xampp\htdocs\trial2\resources\resource.js"></script>
</body>
</html>