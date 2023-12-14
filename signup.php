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
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
body {
    background-image: url('./images/cover5.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    object-fit: cover;
    margin: 0;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff; 
}


/* .inputs {
    padding-left: 50px;
} */

.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: calc(var(--bs-border-width) * -1);
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    color: wheat;
}

.input-lg {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 0px !important;
}

#role{

    color: gray;
    margin-bottom: 40px;

}

.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #d93f3f !important;
}
      
    </style> 
</head>
<body >
<div id="contentContainer" class="center-container container mt-5">
  <div class="row">
    <div id="realContent" class="col-xs-12">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-offset-0">
        
        </div>
      </div>
      <div class="row">
        <section class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-offset-0">
          <div class="well well-lg">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <div class="row">
                <h1 class=" mb-3">Sign Up</h1>
                  <div class="col-xs-12">
                  
                    <h3 class=" mt-3">Welcome</h3>
                </div>
                    
                </div>
                <div class="row">
                  <!-- Instructions -->
                  <div class="col-xs-12">
                    <p class="lead">Register now for <span class="text-success">FREE</span></p>
                    <ul class="list-unstyled" style="line-height: 3; font-size: 1.4em; font-weight: 500;">
                      <li><span class=" text-success"></span> Discover diverse recipes</li>
                      <li><span class=" text-success"></span> Find top-rated dishes</li>
                      <li><span class=" text-success"></span> Share cooking tips</li>
                      <li><span class=" text-success"></span> Connect with food enthusiasts</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Registration Form -->
              <div class="col-sm-6 col-xs-12 inputs">
    <div class="row">
        <div class="col-xs-12">
            <form id="signupForm" method="post" accept-charset="UTF-8" validate>
                <div class="input-group">
                    <span class=""></span>
                    <input id="name" class="form-control input-lg" placeholder="Full Name" maxlength="100" type="text" name="fullname">
                </div>
                <div class="input-group">
                    <span class=""></span>
                    <input id="username" class="form-control input-lg" placeholder="Username" maxlength="100" type="text" name="username">
                </div>
                <div class="input-group">
                    <span class=""></span>
                    <input id="email" class="form-control input-lg" placeholder="Email" maxlength="100" type="email" name="email">
                </div>
                <div class="input-group">
                    <span class=""></span>
                    <input id="password" class="form-control input-lg" placeholder="Password" maxlength="60" type="password" name="password">
                </div>
                <div class="input-group">
                    <span class=""></span>
                    <input id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" maxlength="60" type="password" name="password_confirmation">
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LdJRxETAAAAABZT0MUNO1r5at_-JuSGeAPTqIM6"></div>
                </div>
                <label class="labels">Role</label><br>
                <select class="form-control" name="gender" id="role">
                <option value="">Choose a role....</option>
                <option value="chef" style="color:wheat;">Chef</option>
                <option value="user" style="color:wheat;">User</option>
                </select>
                <div class="form-group">
                    <input id="register_btn" type="submit" id="btn-signup" style="background-color:#f18969;" class="btn btn-block btn-primary btn-lg" value="Sign Up">
                </div>
            </form>
            <div class="form-group">
                <div class="topCushion">Already a member? <a style="color:#f18969;" href="login.php">Login</a></div>
            </div>
        </div>

                  <!-- /.col-xs-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.col-sm-6 col-xs-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.well well-lg -->
        </section>
        <!-- /.col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-offset-0 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /#realContent -->
  </div>
  <!-- /.row -->
</div>
<div id="result"></div>
<!-- /#contentContainer -->
</body>

<script>
   $(document).ready(function(){
            $('form').validate({
                rules: {
                    name: {
                        minlength: 3,
                        maxlength: 50,
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 15
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: '#password'
                    }
                },
                highlight: function(element) {
                    $(element).closest('.input-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.input-group').removeClass('has-error');
                },
                errorElement: 'span',
                errorClass: 'help-block',
                errorPlacement: function(error, element) {
                    if(element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                }
            });

            $('#register_btn').click(function(e){
                e.preventDefault();

                if($('form').valid()) {
                    // Form is valid, proceed to capture values
                    var fullname = $('#name').val();
                    var username = $('#username').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var confirmpassword = $('#password_confirmation').val();
                    var role = $('#role').val();

           
                    console.log('Full Name:', fullname);
                    console.log('Username:', username);
                    console.log('Email:', email);
                    console.log('Password:', password);
                    console.log('Confirm Password:', confirmpassword);
                    console.log('Role:', role);

                    // AJAX call should be here
                    $.ajax({
                        method: "POST",
                        url: "signup_api.php",
                        data: {
                            fullname: fullname,
                            username: username,
                            email: email,
                            password: password,
                            role : role
                        }
                    }).done(function (msg) {
                        console.log('Server response:', msg);
                        if (msg.trim().toLowerCase() === 'success') {
                            console.log('Redirecting to profile.php');
                            window.location.href = "login.php";
                        } else if (msg.trim().toLowerCase() === 'already registered') {
                            $('#result').html('This email is already registered');
                        } else {
                            alert("Unable to register!");
                        }
                    });
                } else {
                    console.log('Form validation failed');
                }
            });
        });

</script>
</html>
