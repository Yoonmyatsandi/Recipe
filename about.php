<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <style>

.input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #0e0e0e !important;
        border: 1px solid #000 !important;
        border-radius: 4px;
    }

    .cover::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-image: url("./images/cover2.jpg"); */
        background-size: cover;
        background-position: center;
        opacity: 0.5;
        z-index: -1;
}

.cover {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
}


.intro {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  z-index: 1;
}

.navbar {
  padding: 10px 10px;
  z-index: 9999;
}

.navbar-inverse {
    background-color: #222 !important;
    border-color: #080808;
}

.navbar-inverse .navbar-nav>li>a {
    color: #dad9d9 !important;
}

.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
    color: #f18969  !important;
    background-color: transparent;
}


.navbar-toggle {
  z-index: 10000;
}

.nav .nav-link {
  font-size: 14px;
}

.para{
   margin-top: 25px;
  letter-spacing: 3px;
}

/* Larger font size for larger screens (e.g., desktop) */
@media (min-width: 768px) {
  .nav .nav-link {
    font-size: 17px;
  }
}

/* Font size for screens larger than 968px */
@media (min-width: 968px) {
  .nav-item {
    font-size: 18px;
  }
}

h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #6f6f6f;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
        section {
            padding: 60px 0;
           /* min-height: 100vh;*/
        }

.sec-title{
  position:relative;
  z-index: 1;
  margin-bottom:60px;
}

.sec-title .title {
    position: relative;
    display: block;
    font-size: 3rem;
    line-height: 24px;
    color: #f18969;
    font-weight: bolder;
    margin-bottom: 15px;
}

.sec-title h2 {
    position: relative;
    display: block;
    font-size: 40px;
    line-height: 1.28em;
    color: wheat;
    font-weight: 600;
    padding-bottom: 18px;
    margin-top: 55px;
}

.sec-title h2:before{
  position:absolute;
  content:'';
  left:0px;
  bottom:0px;
  width:50px;
  height:3px;
  background-color:#d1d2d6;
}

.sec-title .text{
  position: relative;
  font-size: 16px;
  line-height: 26px;
  color: #848484;
  font-weight: 400;
  margin-top: 35px;
}

.sec-title.light h2{
  color: #ffffff;
}

.sec-title.text-center h2:before{
  left:50%;
  margin-left: -25px;
}

.list-style-one{
  position:relative;
}

.list-style-one li{
  position:relative;
  font-size:16px;
  line-height:26px;
  color: #222222;
  font-weight:400;
  padding-left:35px;
  margin-bottom: 12px;
}

.list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #ff2222;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover{
  color: #44bce2;
}

.btn-style-one {
    position: relative;
    display: inline-block;
    font-size: 17px;
    line-height: 30px;
    color: #ffffff;
    padding: 10px 30px;
    font-weight: 600;
    overflow: hidden;
    letter-spacing: 0.02em;
    background-color: #f18969;
    margin-bottom: 50px;
}

.btn-style-one:hover{
  background-color: #ee6135;
  color: #ffffff;
}
.about-section{
  position: relative;
  padding: 120px 0 70px;
}

.about-section .sec-title {
    margin-bottom: 45px;
    margin-top: 150px;
}
.about-section .content-column{
  position: relative;
  margin-bottom: 50px;
  margin-top: -100px;
}

.about-section .content-column .inner-column{
  position: relative;
  padding-left: 30px;
}

.about-section .text{
  margin-bottom: 20px;
  font-size: 16px;
  line-height: 26px;
  color: wheat;
  font-weight: 400;
}

.about-section .list-style-one{
  margin-bottom: 45px;
}

.about-section .btn-box{
  position: relative;
}

.about-section .btn-box a{
  padding: 15px 50px;
}

.about-section .image-column{
  position: relative;
}

.about-section .image-column .text-layer{
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column{
  position: relative;
  padding-left: 80px;
  padding-bottom: 0px;
}
.about-section .image-column .inner-column .author-desc{
    position: absolute;
    bottom: 16px;
    z-index: 1;
    background: #f18969;
    padding: 10px 15px;
    left: 96px;
    width: calc(100% - 152px);
    border-radius: 50px;
}
.about-section .image-column .inner-column .author-desc h2{
    font-size: 21px;
    letter-spacing: 1px;
    text-align: center;
    color: #fff;
  margin: 0;
}
.about-section .image-column .inner-column .author-desc span{
    font-size: 16px;
    letter-spacing: 6px;
    text-align: center;
    color: #fff;
  display: block;
  font-weight: 400;
}
.about-section .image-column .inner-column:before{
    content: '';
    position: absolute;
    width: calc(50% + 80px);
    height: calc(100% + 160px);
    top: -80px;
    left: -3px;
    background: transparent;
    z-index: 0;
    border: 44px solid #222222;
}

.about-section .image-column .image-1{
  position: relative;
}
.about-section .image-column .image-2{
  position: absolute;
  left: 0;
  bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img{
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
      border-radius: 46px;
}

.about-section .image-column .video-link{
  position: absolute;
  left: 70px;
  top: 170px;
}

.about-section .image-column .video-link .link{
  position: relative;
  display: block;
  font-size: 22px;
  color: #191e34;
  font-weight: 400;
  text-align: center;
  height: 100px;
  width: 100px;
  line-height: 100px;
  background-color: #ffffff;
  border-radius: 50%;
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover{
  background-color: #191e34;
  color: #fff;
}
    
.contact-cover {
    object-fit: cover;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: url("./images/chef5.jpg");
  background-size: cover;
  background-attachment: fixed;
  overflow-y: hidden !important;
}

.footer-bottom .copyright a:hover,
.footer-bottom .footer-nav li a:hover{
  color: #f18969 !important;
}

.footer-content .service-widget .list li a:hover{
  color: #f18969 !important;
}

.footer-content .logo-widget .footer-social li a:hover{
  color: #ffffff;
  background: #f18969;
}

</style> 
</head>
<body >


<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse">
                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand" style=" color:#f18969 ;">Yummy Yummy</a>
                   
                    </div>
                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="search.php">Recipes</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                      
                        <ul class="nav navbar-nav navbar-right">
                        <?php
                                if (!isset($_SESSION['email'])) {
                                    echo '
                                        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                                <span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="login.php" class="dropdown-item">Login</a></li>
                                                <li><a href="signup.php" class="dropdown-item">Sign Up</a></li>
                                            </ul>
                                        </li>';
                                } else {
                                    $username = $_SESSION['username'];
                                    echo '<li><a href="profile.php" class="text-white text-decoration-none"><i class="bi bi-person-fill"  style="margin-right:10px; font-size:20px;"></i></span>' .$username.'</a></li>';
                                    echo '<li><a href="./logout.php" ><i class="bi bi-box-arrow-right" style="margin-right:10px; font-size:20px;"></i>Log Out</a></li>';
                                }
                          ?>
                  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" contact-cover">
    
    </div>  
    </div>



    <section class="about-section">
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            
                            <span class="title">About Us</span>
                            <h2>We are Food Lovers</h2>
                        </div>
                        <div class="text">   Explore a world of culinary delights with our curated collection of mouthwatering recipes. From quick and easy meals to gourmet dishes, we bring you a diverse range of recipes that cater to every taste and occasion.
                             Discover the joy of cooking and elevate your culinary skills with our step-by-step guides and expert tips.</div>
                      <div class="text">
                      Welcome to a world of delectable delights! Yummy Yummy is your go-to destination for discovering and mastering the art of cooking. Immerse yourself in a culinary adventure with our extensive collection of recipes, ranging from quick and easy everyday meals to exquisite gourmet creations. Whether you're a novice or an experienced chef, our step-by-step guides and pro tips will enhance your cooking skills and bring joy to your kitchen.
                      </div>
                        <div class="btn-box">
                            <a href="contact.php" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                      <div class="author-desc">
                      <h2>Delicious Creations</h2>
                      <span>Recipe Maestro</span>
                      </div>
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img title="Rahul Kumar Yadav" src="./images/img1.jpg" alt=""></a></figure>
                     
                    </div>
                </div>
              
            </div>
           <div class="sec-title">
                            <span class="title">Discover Culinary Wonders</span>
                            <h2>Explore a World of Flavorful Creations</h2>
                        </div>
          <div class="text">
                 Crafting delightful recipes with a perfect blend of flavors, our focus on presentation and simplicity ensures each dish not only tastes exceptional but looks stunning too.
              </div>
               <div class="text">
                 Using a concise toolkit, we carefully curate recipes to ensure they not only perform flawlessly but also captivate with their visual appeal.
              </div>
               <div class="text">                
                Delivering a diverse range of delectable recipes, we ensure each one is crafted with precision and offered freely for your culinary delight.
              </div>
               <div class="text">
               Share your unique recipes with us, and if our culinary enthusiasts love it, your creation might be featured on our blog!
              </div>
               <div class="text">
               Discover delightful recipes on our website and savor the essence of culinary excellence!
              </div>
        </div>
    </section>
    
    

<!-- Footer -->

<footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                        <figure class="logo-box"><a href="#" style="color:#f18969; font-size:35px; font-weight:bolder;">Yummy Yummy</a></figure>
                            <div class="text">
                                <p>Lorem ipsum dolor amet consectetur adi pisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis.nostrud exercita.laboris nisi ut aliquip ea commodo conse quatuis aute irure.</p>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="#"><i class="bi bi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Services</div>
                            <ul class="list">
                            <li><a href="#">Appetizers</a></li>
                            <li><a href="#">Main Courses</a></li>
                            <li><a href="#">Desserts</a></li>
                            <li><a href="#">Healthy Eats</a></li>
                            <li><a href="#">International Flavors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">Contacts</div>
                            <div class="text">
                                <p>Lorem Ipsum, simply dummy text, printing, Chandigarh</p>
                                <p>+2(784) 1223323</p>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="copyright"><a href="#">Anup</a> &copy; 2019 All Right Reserved</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <ul class="footer-nav">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>


<script>


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
