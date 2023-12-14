<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Website</title>
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="./index1.css">
    <style>

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

.h2, h2 {
font-size: 36px;
font-weight: bolder;
}

a {
font-style: normal;
text-decoration: none;
transition: all 500ms ease;
-moz-transition: all 500ms ease;
-webkit-transition: all 500ms ease;
-ms-transition: all 500ms ease;
-o-transition: all 500ms ease;
}
a,
a:active,
a:focus {
    color: #333;
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

.chooseus-section{
position: relative;
background: rgb(0, 0, 0);
color:wheat;
padding: 50px 0px;
min-height: 100vh;

}

.chooseus-section .sec-title{
margin-bottom: 60px;
}

#video_block_01 .video-inner{
position: relative;
width: 100%;
padding: 175px 0px 130px 0px;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
border-radius: 10px;
box-shadow: 0 0px 30px rgba(0, 0, 0, 0.1);
}

#video_block_01 .video-inner .pattern-layer{
left: 0px;
top: 0px;
width: 100%;
height: 100%;
background-repeat: no-repeat;
}

#video_block_01 .video-inner .video-btn{
position: relative;
display: inline-block;
width: 116px;
height: 115px;
line-height: 115px;
text-align: center;
margin-left: 40px;
border-radius: 50%;
}

#video_block_01 .video-inner .video-btn .btn-bg{
position: absolute;
left: 0px;
top: 0px;
width: 116px;
height: 115px;
background-repeat: no-repeat;
}

#video_block_01 .video-inner .video-btn a{
position: relative;
display: inline-block;
width: 116px;
height: 115px;
border-radius: 50%;
font-size: 24px;
z-index: 1;
}
#video_block_01 .video-inner .video-btn a i {
background: -webkit-linear-gradient(-45deg, #00bb6e, #0156d5 100%);
}
#video_block_01 .video-inner .video-btn a i{
position: relative;
color: transparent;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}

#content_block_04 .content-box .single-item{
position: relative;
}

#content_block_04 .content-box .single-item:first-child{
padding-left: 190px;
margin-bottom: 67px;
}

#content_block_04 .content-box .single-item:last-child{
padding-right: 190px;
margin-bottom: 100px;
margin-right: 50px;
}

#content_block_04 .content-box .single-item .icon-box{
position: absolute;
top: 14px;
width: 158px;
height: 158px;
line-height: 158px;
text-align: center;
font-size: 70px;
border: 1px solid #e5e5e5;
border-radius: 10px;
}

#content_block_04 .content-box .single-item .icon-box:before{
position: absolute;
content: '';
width: 138px;
height: 100%;
left: 10px;
border-radius: 10px;
}

#content_block_04 .content-box .single-item:first-child .icon-box:before{
top: 10px;
}

#content_block_04 .content-box .single-item:last-child .icon-box:before{
top: -10px;
}

#content_block_04 .content-box .single-item .icon-box i {
background: -webkit-linear-gradient(95deg, #ffffff, #f18969 100%);
position: relative;
color: transparent;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}

#content_block_04 .content-box .single-item .icon-box .bg-layer{
position: absolute;
left: 0px;
top: 0px;
width: 158px;
height: 158px;
background-repeat: no-repeat;
}

#content_block_04 .content-box .single-item:first-child .icon-box{
left: 0px;
}

#content_block_04 .content-box .single-item:last-child .icon-box{
right: 0px;
}

#content_block_04 .content-box .single-item .box h4{
position: relative;
padding-bottom: 12px;
margin-bottom: 27px;
font-weight: bolder;
color: #f18969;
}

#content_block_04 .content-box .single-item .box h4:before{
position: absolute;
content: '';
width: 55px;
height: 2px;
bottom: 0px;
}

#content_block_04 .content-box .single-item:first-child .box h4:before{
left: 0px;
}

#content_block_04 .content-box .single-item:last-child .box h4:before{
right: 0px;
}

#content_block_04 .content-box .single-item .box p{
margin-bottom: 20px;
line-height: 28px;
text-align: justify;
}

#content_block_04 .content-box .single-item .box a{
position: relative;
display: inline-block;
font-size: 16px;
line-height: 26px;
font-family: 'Josefin Sans', Sans-serif;
font-weight: 600;
color:#f18969 ;
}

#content_block_04 .content-box .single-item .box a:hover{
color: #ff7348;
}

#content_block_04 .content-box .single-item:first-child .box a i{
margin-right: 10px;
}

#content_block_04 .content-box .single-item:last-child .box a i{
margin-left: 10px;
}
.rotate-me {
animation-name: rotateme;
animation-duration: 30s;
animation-iteration-count: infinite;
animation-timing-function: linear;
-webkit-animation-name: rotateme;
-webkit-animation-duration: 30s;
-webkit-animation-iteration-count: infinite;
-webkit-animation-timing-function: linear;
-moz-animation-name: rotateme;
-moz-animation-duration: 30s;
-moz-animation-iteration-count: infinite;
-moz-animation-timing-function: linear;
-ms-animation-name: rotateme;
-ms-animation-duration: 30s;
-ms-animation-iteration-count: infinite;
-ms-animation-timing-function: linear;
-o-animation-name: rotateme;
-o-animation-duration: 30s;
-o-animation-iteration-count: infinite;
-o-animation-timing-function: linear;
}


@keyframes rotateme {
from {
transform: rotate(0deg);
}
to { 
transform: rotate(-360deg);
}
}
@-webkit-keyframes rotateme {
from {
-webkit-transform: rotate(0deg);
}
to { 
-webkit-transform: rotate(-360deg);
}
}
@-moz-keyframes rotateme {
from {
-moz-transform: rotate(0deg);
}
to { 
-moz-transform: rotate(-360deg);
}
}
@-o-keyframes rotateme {
from {
-o-transform: rotate(0deg);
}
to { 
-o-transform: rotate(-360deg);
}
}
.modal-body {
padding-bottom: 56.25%;
position: relative;
height: 0;
padding-top: 0;
overflow: hidden;
}

.modal-body iframe, .modal-body object, .modal-body embed, .modal-body video {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

button.close {
position: absolute;
right: -20px;
top: -30px;
border-radius: 50px;
background: white;
line-height: 1 !important;
padding: 0px 6px 5px !important;
opacity: 1;
}

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
color:#f18969  !important;
background-color: transparent;
}

.navbar-toggle {
z-index: 10000;
}

.nav .nav-link {
font-size: 14px;
}

.para{
margin-top: 30px !important;
letter-spacing: 3px;
}


/* .main-cover {
position: relative;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
background: url("./images/cover8.png");
background-size: cover;
background-attachment: fixed;
overflow-y: hidden !important;
} */

.cover{
color:wheat;
}


@media (min-width: 768px) {
.nav .nav-link {
font-size: 17px;
}
}

@media (min-width: 968px) {
.nav-item {
font-size: 18px;
}
}


/* Cards */

.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    margin: 20px;
}

.snip1336 h4 {
    margin-bottom: 3px;
    font-weight: bold;
    height: 40px; 
    overflow: hidden;
}

@media (min-width: 768px) {
  .snip1336 {
    width: 33%;
  }
}


@media (min-width: 1024px) {
  .snip1336 {
    width: 33%;
  }
}
.snip1336 {
    font-family: 'Roboto', Arial, sans-serif;
    position: relative;
    overflow: hidden;
    margin-bottom: 20px;
    min-width: 230px;
    max-width: 315px;
    margin: 25px ;
    width: calc(33.33% - 20px) !important;
    color: #ffffff;
    text-align: left;
    line-height: 1.4em;
    background-color: #141414;
}

.snip1336 * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
}

  .snip1336 img {
    max-width: 100%;
    vertical-align: top;
    opacity: 0.85;
    border-bottom-left-radius: 70px !important;
    border-bottom-right-radius: 70px !important;
  }
  .snip1336 figcaption {
    width: 100%;
    background-color: #141414;
    padding: 25px;
    position: relative;
  }

  .snip1336 figcaption a {
    padding: 5px;
    border: 1px solid #ffffff;
    color: #ffffff;
    font-size: 0.7em;
    text-transform: uppercase;
    margin: 10px 0;
    display: inline-block;
    opacity: 0.65;
    width: 47%;
    text-align: center;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 1px;
  }
  .snip1336 figcaption a:hover {
    opacity: 1;
  }

  .snip1336 .follow {
    margin-right: 4%;
    border-color: #f18969;
    color: #ffffff;
    opacity: 1;
    font-size: 1.3rem;
  }
  .snip1336 h2 {
    margin: 0 0 5px;
    font-weight: 300;
  }
  .snip1336 h2 span {
    display: block;
    font-size: 0.5em;
    color: #2980b9;
  }
  .snip1336 p {
    margin: 0 0 10px;
    font-size: 0.8em;
    letter-spacing: 1px;
    opacity: 0.8;
  }
  
  .snip1336 a.follow:hover {
    background-color: #ff6a3c;
}


  .recipe-details {
    margin-top: 10px;
}

.recipe-details div {
    margin-bottom: 5px;
}

.recipe-details i {
    margin-right: 5px;
    color: #f18969;
}

.favorite {
    display: inline-block;
    float: right; 
    cursor: pointer;
}

.favorite i{
    font-size: 24px;
    color: #f18969;
}

.favorite i{
    padding-right: 10px;
}

.follow,
.info {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    background-color: #f18969;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.follow:hover,
.info:hover {
    background-color: #f18969;
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

.main-cover {
position: relative;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
background: url("./images/bg.png");
background-size: cover;
background-attachment: fixed;
overflow-y: hidden !important;
}
    </style>
</head>

<body>


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
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
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
        <div class=" main-cover"></div>
    </div>  
    </div>
    

    <section class="chooseus-section d-flex align-items-center">
        <div class="container">
            <div class="sec-title text-center style-two">
                <h2>Why Choose Us</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_04">
                        <div class="content-box">
                            <div class="single-item">
                                <div class="icon-box">
                                    <div class="bg-layer"></div>
                                    <i class="bi bi-lightbulb-fill"></i>
                                  
                                </div>
                                <div class="box">
                                <h4>Our Culinary Commitment</h4>
                                <p>Embark on a flavorful journey with our handcrafted recipes and innovative features.
                                     At Yummy Yummy, we're passionate about bringing you a delightful culinary experience.
                                      Our commitment goes beyond the ordinary, as we explore the art of cooking with creativity 
                                      and user-centric functionality.
                                </p>

                                    <a href="#"><i class="bi bi-arrow-right"></i>More Details</a>
                                </div>
                            </div>
                            <div class="single-item text-right">
                                <div class="icon-box">
                                    <div class="bg-layer"></div>
                                    <i class="bi-emoji-laughing-fill"></i>
                                  
                                </div>
                                <div class="box">
                                <h4>Delighting Taste Buds</h4>
                                <p>At Yummy Yummy, our dedication to your satisfaction is evident in every dish. Whether you're a seasoned chef or a kitchen novice, 
                                    our carefully crafted recipes are designed to delight your taste buds and make each dining experience memorable.
                                    Join us for a flavorful adventure where customer satisfaction is our utmost priority.
                                </p>

                                <a href="#">More Details<i class="bi bi-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div id="video_block_01">
                        <div class="video-inner wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url('./images/chef8.jpg');">
                            <div class="pattern-layer" style="background-image: url('./images/cover.png');"></div>
                            <div class="video-btn">
                                <div class="btn-bg rotate-me" style="background-image: url(https://i.ibb.co/kKmvKRY/btn-icon-bg.png);"></div>
                                <a href="" class="lightbox-image" data-toggle="modal" data-target="#myModal"><i class="bi bi-play-btn-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
      <div class="modal fade" id="myModal">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      
        
  
        <div class="modal-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/NTBRThwL-2c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        
        
      </div>
    </div>
  </div>




  <div>
  <h1 style=" text-align:center; font-weight:bolder; color:wheat; margin-bottom:100px;">Our Popular Recipes</h1>
  <div class="card-container ">
  <figure class="snip1336" style="width: 33%;">
    <img src="./images/food1.jpg" alt="sample87" />
    <figcaption>
     
        <div class="recipe-details">
     
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>
          
            <h4 style="margin-bottom:25px; font-weight:bold;">Vegetarian Chili</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 25 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>International</h5>
             <h5><i class="bi bi-circle-fill"></i>Main Course</h5>
             <h5><i class="bi bi-circle-fill"></i>Vegan</h5>
            <p>Description: Hearty and flavorful vegetarian chili with beans and vegetables.</p>
        </div>
         <a href="./recipe1details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>
<figure class="snip1336"  style="width: 33%;">
    <img src="./images/food2.jpg" alt="sample87" />
    <figcaption>
       
        <div class="recipe-details">
     
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>
          
            <h4 style="margin-bottom:25px; font-weight:bold;">BBQ Pulled Pork Sandwich</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 30 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>Thailand</h5>
             <h5><i class="bi bi-circle-fill"></i>Appetizer</h5>
             <h5><i class="bi bi-circle-fill"></i>Meat</h5>
            <p>Description: Tender and smoky pulled pork sandwich with barbecue sauce.</p>
        </div>
        <a href="./recipe2details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>
<figure class="snip1336"  style="width: 33%;">
    <img src="./images/food3.jpg" alt="sample87" />
    <figcaption>
        <div class="recipe-details">
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>

            <h4 style="margin-bottom:25px; font-weight:bold;">Lemon Herb Grilled Chicken</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 40 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>Mexico</h5>
             <h5><i class="bi bi-circle-fill"></i>Dessert</h5>
             <h5><i class="bi bi-circle-fill"></i>Vegetarian</h5>
            <p>Description: Juicy grilled chicken marinated in lemon and herbs.</p>
        </div>
         <a href="./recipe3details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>
<figure class="snip1336"  style="width: 33%;">
    <img src="./images/food4.jpg" alt="sample87" />
    <figcaption>
  
        <div class="recipe-details">
     
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>
          
            <h4 style="margin-bottom:25px; font-weight:bold;">Sweet Potato and Black Bean Burritos</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 50 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>India</h5>
             <h5><i class="bi bi-circle-fill"></i>Side Dish</h5>
             <h5><i class="bi bi-circle-fill"></i>Beverage</h5>
            <p>Description: LSavory and satisfying burritos with sweet potatoes and black beans.</p>
        </div>
         <a href="./recipe1details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>
<figure class="snip1336"  style="width: 33%;">
    <img src="./images/food5.jpg" alt="sample87" />
    <figcaption>
   
        <div class="recipe-details">
     
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>
          
            <h4 style="margin-bottom:25px; font-weight:bold;">Caprese Salad</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 20 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>Italy</h5>
             <h5><i class="bi bi-circle-fill"></i>Main Course</h5>
             <h5><i class="bi bi-circle-fill"></i>Vegan</h5>
            <p>Description: Fresh and vibrant Caprese salad with tomatoes, mozzarella, and basil.</p>
        </div>
         <a href="./recipe2details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>
<figure class="snip1336"  style="width: 33%;">
    <img src="./images/food7.jpg" alt="sample87" />
    <figcaption>
     
        <div class="recipe-details">
     
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>
          
            <h4 style="margin-bottom:25px; font-weight:bold;">Pumpkin Spice Latte</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 45 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>Japan</h5>
             <h5><i class="bi bi-circle-fill"></i>Appetizer</h5>
             <h5><i class="bi bi-circle-fill"></i>Seafood</h5>
            <p>Description: Warm and comforting pumpkin spice latte, perfect for fall.</p>
        </div>
         <a href="./recipe3details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>
<figure class="snip1336"  style="width: 33%;">
    <img src="./images/food8.jpg" alt="sample87" />
    <figcaption>

        <div class="recipe-details">
     
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>
          
            <h4 style="margin-bottom:25px; font-weight:bold;">Mushroom Risotto</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 35 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>International</h5>
             <h5><i class="bi bi-circle-fill"></i>Appetizer</h5>
             <h5><i class="bi bi-circle-fill"></i>Meat</h5>
            <p>Description: Creamy and flavorful mushroom risotto, a classic main course.</p>
        </div>
         <a href="./recipe1details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>
<figure class="snip1336"  style="width: 33%;">
    <img src="./images/food9.jpg" alt="sample87" />
    <figcaption>
    
        <div class="recipe-details">
     
        <div class="favorite">
        <i class="bi bi-heart-fill"></i>
            </div>
          
            <h4 style="margin-bottom:25px; font-weight:bold;">Creamy Pesto Pasta with Cherry Tomatoes</h4>
            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 15 mins
            </div>
            <h5><i class="bi bi-geo-alt-fill"></i>Thailand Recipe</h5>
             <h5><i class="bi bi-circle-fill"></i>Main Course</h5>
             <h5><i class="bi bi-circle-fill"></i>Vegetarian</h5>
            <p>Description: Creamy pasta tossed in pesto sauce with burst cherry tomatoes.</p>
        </div>
         <a href="./recipe2details.php" style="width:100%" class="follow">View Recipe</a>

    </figcaption>
</figure>

    </div>

    </div>



    

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

  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.nav li').on('click', function() {
                $('.nav li').removeClass('active');
                $(this).addClass('active');
            });
        });

        $(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

    </script>
</body>
</html>
