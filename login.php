<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    body {
    background-image: url('./images/cover5.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    object-fit: cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.form-control {
  display: flex;
  float: right;
  align-items: center;
  box-shadow: none;
  border: 1px solid #000;
  background-color: #080808;
}
.form-control:focus {
  border-color: #f18969 !important;
}

.modal-title{
  color:wheat;
}
.login-form {
  width: 450px;
  margin: 0 auto;
  padding: 30px 0;
}
.login-form form {
  color: #dadada;
  margin-bottom: 15px;
  background: #151515;
  padding: 50px;
  border-radius: 30px;
}
.login-form h4 {
  text-align: center;
  font-size: 22px;
  margin-bottom: 20px;
}

.login-form .form-group {
  margin-bottom: 20px;
}

.login-form .form-control, .login-form .btn {
    min-height: 40px;
    border-radius: 2px;
    transition: all 0.5s;
    border-color: #559aff !important;
}

.login-form .close {
  position: absolute;
  top: 15px;
  right: 15px;
}
.login-form .btn {
  background: #f18969 !important;
  border: none;
  line-height: normal;
}
.login-form .btn:hover,
.login-form .btn:focus {
  background: #f18969 !important;
}
.login-form .checkbox-inline {
  float: left;
}
.login-form input[type="checkbox"] {
  margin-top: 2px;
}
.login-form .forgot-link {
  float: right;
}
.login-form .small {
  font-size: 13px;
}
.login-form a {
  color: #f18969 !important;
}

@media (min-width: 768px) {
    .login-form {
        margin-right: 10%; 
    }
}


</style> 
</head>
<body >
<div class="login-form">    
        <form action="login_api.php" method="post" id="loginForm">
            <h4 class="modal-title">Login to Your Account</h4>
            <div class="form-group">
                <input type="text" name="email" style="color:wheat;" class="form-control mt-5" placeholder="email" required="required">
                <div id="email-error" class="error-message"></div>
            </div>
            <div class="form-group">
                <input type="password" name="password" style="color:wheat;" class="form-control mt-5" placeholder="Password" required="required">
                <div id="password-error" class="error-message"></div>
            </div>
            <div class="form-group small clearfix">
                <label class="checkbox-inline mt-5">
                <input type="checkbox"> Remember me</label>
                <a href="#" class="forgot-link mt-5">Forgot Password?</a>
            </div> 
            <input type="submit" id="login-btn" name="login" class="btn btn-primary btn-block btn-lg" value="Login">  
            <div class="text-center mt-4 small">Don't have an account? <a href="signup.php">Sign up</a></div>            
        </form>
    </div>



    <script>


$(document).ready(function(){
            $('#login-btn').click(function(e){
                e.preventDefault();
                var email = $('input[name="email"]').val();
                var password = $('input[name="password"]').val();

              
               $('.error-message').text('');

              if (email.trim() === '') {
                  $('#email-error').text('Please enter a valid email.').css('color', '#d81b1b');
                  return;
              }

              if (password.trim() === '') {
                  $('#password-error').text('Please enter a password.').css('color', '#d81b1b');
                  return;
              }

                $.ajax({
                    method: "POST",
                    url: "login_process.php",
                    data: {email: email, password: password}
                })
                .done(function(msg){    
                    if(msg.trim() == 'Success'){
                      window.location.href = "profile.php";
                    } else {
                        $('#result').html(msg);
                        alert('Invalid Email or Password');
                    }
                });
            });
        });

</script>

</body>
</html>
