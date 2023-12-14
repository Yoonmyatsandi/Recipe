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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
    color: #f18969 !important;
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


#success-message {
  opacity: 0;
}

.col-xs-12.col-sm-12.col-md-12.col-lg-12 {
  padding: 0 20% 0 20%;
}

.margin-top-25 {
  margin-top: 25px;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 500;
    color: red;
}

.form-title {
  padding: 25px;
  font-size: 30px;
  font-weight: 300;
  color:wheat;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.form-group .form-control2 {
    -webkit-box-shadow: none;
    border-bottom: 1px;
    border-style: none none solid none;
    border-radius: 0;
    border-color: #d5d5d5;
    color:wheat;
    margin-top: 25px;
    padding: 13px;
}

.form-control2 {
    width: 100% !important;
    background-color: #000000 !important;
}

.form-group .form-control2:focus {
    box-shadow: none;
    border-width: 0 0 2px 0;
    border-color: #000;
    color: white;
    border-color: #d5d5d5;
}

textarea {
  resize: none;
}

.btn-mod.btn-large {
    height: auto;
    padding: 13px 52px;
    font-size: 15px;
}

.btn-mod.btn-border {
    color: #000000;
    border: 1px solid #000000;
    background: #cacaca;
    margin-top: 25px;
}


.btn-mod.btn-border:hover{
    color: #fff;
    border: 1px solid #000000;
    background: yellowgreen;
}

.btn-mod, a.btn-mod {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 4px 13px;
    color: #fff;
    background: rgba(34,34,34, .9);
    border: 1px solid transparent;
    font-size: 11px;
    font-weight: 400;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -moz-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -o-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    -ms-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
    transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
}

.btn-mod.btn-border:hover, .btn-mod.btn-border:active, .btn-mod.btn-border:focus, .btn-mod.btn-border:active:focus {
    color: #fff;
    border-color: #000;
    background: #000;
    outline: none;
}

@media only screen and (max-width: 500px) {
    .btn-mod.btn-large {
       padding: 6px 16px;
       font-size: 11px;
    }
  
    .form-title {
        font-size: 20px;
  }
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
  
.contact-cover {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: url("./images/chef1.jpg");
  background-size: cover;
  background-attachment: fixed;
  overflow-y: hidden !important;
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


<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
      <h2 class="form-title text-light fw-bolder">Get in Touch</h2>
    </div>
</div>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <form id="contact-form" name="myForm" class="form" action="#" onsubmit="return validateForm()" method="POST" role="form">

            <div class="form-group">
                <label class="form-label" id="nameLabel" for="name"></label>
                <input type="text" class="form-control2" id="name" name="name" placeholder="Your name" tabindex="1">
            </div>

            <div class="form-group">
                <label class="form-label" id="emailLabel" for="email"></label>
                <input type="email" class="form-control2" id="email" name="email" placeholder="Your Email" tabindex="2">
            </div>

            <div class="form-group">
                <label class="form-label" id="subjectLabel" for="sublect"></label>
                <input type="text" class="form-control2" id="subject" name="subject" placeholder="Subject" tabindex="3">
            </div>

            <div class="form-group">
                <label class="form-label" id="messageLabel" for="message"></label>
                <textarea rows="6" cols="60" name="message" class="form-control2" id="message" placeholder="Your message" tabindex="4"></textarea>                                 
            </div>

            <div class="text-center margin-top-25">
                <button type="submit" class="btn btn-mod btn-border btn-large">Send Message</button>
            </div>

        </form><!-- End form -->
      
    </div><!-- End col -->

</div><!-- End row -->

</div><!-- End container -->





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
        $(document).ready(function () {
            $('.nav li').on('click', function () {
                $('.nav li').removeClass('active');
                $(this).addClass('active');
            });

            $('#name').on('blur', function () {
                validateInput(this, 'nameLabel', /^[a-zA-Z\s]*$/, 'Please enter your name');
            });

            $('#email').on('blur', function () {
                validateInput(this, 'emailLabel', /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, 'Please enter your email', 'Please enter a valid email address');
            });

            $('#subject').on('blur', function () {
                validateInput(this, 'subjectLabel', /^[a-zA-Z\s]*$/, 'Please enter your subject');
            });

            $('#message').on('blur', function () {
                validateInput(this, 'messageLabel', null, 'Please enter your message');
            });

            $('#contact-form').on('submit', function () {
                return validateForm();
            });

            function validateInput(input, labelId, pattern, errorMessage, invalidPatternMessage) {
                var value = $(input).val();
                var label = $('#' + labelId);

                if (value == "" || value == null) {
                    label.html(errorMessage);
                    $(input).css('borderColor', 'red');
                    return false;
                }

                if (pattern != null && !value.match(pattern)) {
                    label.html(invalidPatternMessage || errorMessage);
                    $(input).css('borderColor', 'red');
                    return false;
                }

                label.html('');
                $(input).css('borderColor', '');
                return true;
            }

            function validateForm() {
                var isValid = true;

                // Validate each input individually
                isValid = validateInput('#name', 'nameLabel', /^[a-zA-Z\s]*$/, 'Please enter your name') && isValid;
                isValid = validateInput('#email', 'emailLabel', /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, 'Please enter your email', 'Please enter a valid email address') && isValid;
                isValid = validateInput('#subject', 'subjectLabel', /^[a-zA-Z\s]*$/, 'Please enter your subject') && isValid;
                isValid = validateInput('#message', 'messageLabel', null, 'Please enter your message') && isValid;

                return isValid;
            }
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
