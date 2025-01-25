<?php
$msg = "";
if(isset($_GET['msg'])) {
    extract($_GET);
    echo "<h3 style='color: white'>$msg</h3>";
} else {
    extract($_GET);
    echo "<h3 style='color: red'>$msg</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>यात्रा.COM tour and travel agency website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>T</span>ravel</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>

<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form name="loginForm" action="#" onsubmit="return WriteCookie();">
        Enter email:
        <input type="email" name="email" />
        <br>
        Enter password:
        <input type="password" name="password" />
        <br>
        <input type="submit" value="Login" />
    </form>

    <script type="text/javascript">
        function WriteCookie() {
            var emailValue = document.loginForm.email.value;
            var passwordValue = document.loginForm.password.value;

            if (emailValue == "" || passwordValue == "") {
                alert("Please enter both email and password");
                return false;
            }

            var emailCookie = "email=" + escape(emailValue) + ";";
            var passwordCookie = "password=" + escape(passwordValue) + ";";

            document.cookie = emailCookie;
            document.cookie = passwordCookie;

            document.write("Setting Cookies : " + emailCookie + passwordCookie);

            // You can redirect the user to another page or perform further actions here
            return false;
        }
    </script>
</div>

<?php include 'home_section.php'; ?>
<?php include 'book_section.php'; ?>
<?php include 'packages_section.php'; ?>
<?php include 'services_section.php'; ?>
<?php include 'gallery_section.php'; ?>
<?php include 'review_section.php'; ?>
<?php include 'contact_section.php'; ?>

<section class="brand-container">
    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>
</section>

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>We are passionate about travel and committed to helping you discover the world's most incredible destinations. Our mission is to make your travel dreams a reality by providing you with the information and resources you need to plan unforgettable trips.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">bangladesh</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">Turkey</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a >facebook</a>
            <a >twitter</a>
            <a >linkedin</a>
            <a >youtube</a>
        </div>
    </div>
    <h1 class="credit"> created by..... Neha || Janvhavi || Shravani  </h1>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
