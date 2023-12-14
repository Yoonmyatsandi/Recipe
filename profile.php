<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">

    <style>

        
a {
  transition: background 0.2s, color 0.2s;
}

a:hover,
a:focus {
  text-decoration: none;
}

#wrapper {
  padding-left: 0;
  transition: all 0.5s ease;
  position: relative;
}

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  overflow-x: hidden;
  background: #222;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

.sidebar-brand {
  position: absolute;
  top: 0;
  width: 250px;
  text-align: center;
  padding: 20px 0;
}
.sidebar-brand h2 {
  margin: 0;
  font-weight: 600;
  font-size: 24px;
  color: #f18969;
}

.sidebar-nav {
  position: absolute;
  top: 95px;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}
.sidebar-nav > li {
  text-indent: 10px;
  line-height: 42px;
}
.sidebar-nav > li a {
  display: block;
  text-decoration: none;
  color: wheat;
  font-weight: 600;
  font-size: 18px;
  margin-bottom: 25px;
}
.sidebar-nav > li > a:hover,
.sidebar-nav > li.active > a {
  text-decoration: none;
  color: #fff;
  background: #f18969;
}
.sidebar-nav > li > a i.fa {
  font-size: 24px;
  width: 60px;
}

#navbar-wrapper {
    width: 100%;
    position: absolute;
    z-index: 2;
}
#wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
}
#navbar-wrapper .navbar {
  border-width: 0 0 0 0;
  background-color: #eee;
  font-size: 24px;
  margin-bottom: 0;
  border-radius: 0;
}
#navbar-wrapper .navbar a {
  color: wheat;
}
#navbar-wrapper .navbar a:hover {
  color: #f18969;
}

#content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
  top: 100px;
}
#wrapper.toggled #content-wrapper {
  position: absolute;
  margin-right: -250px;
}

@media (min-width: 992px) {
  #wrapper {
    padding-left: 250px;
  }
  
  #wrapper.toggled {
    padding-left: 60px;
  }

  #sidebar-wrapper {
    width: 250px;
  }
  
  #wrapper.toggled #sidebar-wrapper {
    width: 60px;
  }
  
  #wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -190px;
}
  
  #wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -190px;
  }

  #navbar-wrapper {
    position: relative;
  }

  #wrapper.toggled {
    padding-left: 60px;
  }

  #content-wrapper {
    position: relative;
    top: 0;
  }

  #wrapper.toggled #navbar-wrapper,
  #wrapper.toggled #content-wrapper {
    position: relative;
    margin-right: 60px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  #wrapper {
    padding-left: 60px;
  }

  #sidebar-wrapper {
    width: 60px;
  }
  
#wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
}
  
  #wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  #navbar-wrapper {
    position: relative;
  }

  #wrapper.toggled {
    padding-left: 250px;
  }

  #content-wrapper {
    position: relative;
    top: 0;
  }

  #wrapper.toggled #navbar-wrapper,
  #wrapper.toggled #content-wrapper {
    position: relative;
    margin-right: 250px;
  }
}

@media (max-width: 767px) {
  #wrapper {
    padding-left: 0;
  }

  #sidebar-wrapper {
    width: 0;
  }

  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  #wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  #navbar-wrapper {
    position: relative;
  }

  #wrapper.toggled {
    padding-left: 250px;
  }

  #content-wrapper {
    position: relative;
    top: 0;
  }

  #wrapper.toggled #navbar-wrapper,
  #wrapper.toggled #content-wrapper {
    position: relative;
    margin-right: 250px;
  }
}

.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    background: #0c0c0c !important;
}



/***************Card Design For Recipes ***********/



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

/* For screens wider than 1024px */
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
    border-bottom-left-radius: 70px;
    border-bottom-right-radius: 70px;
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
  .snip1336 .profile {
    border-radius: 50%;
    position: absolute;
    bottom: 100%;
    left: 25px;
    z-index: 1;
    max-width: 90px;
    opacity: 1;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
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
  

  /* New styles for recipe details */
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

/* New styles for favorite and save icons */
.favorite,
.save {
    display: inline-block;
    float: right; 
    cursor: pointer;
}

.favorite i,
.save i {
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


.remove-button{
    font-family: 'Roboto', Arial, sans-serif ;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 12px;
    letter-spacing: 1.5px;
    background-color:#515151;
    color:white; 
    padding:10px 15px; 
    border:none; 
    border-radius:7px; 
    width:100%;
}


/**********My Account Profile **********/
.wrapper {
  max-width: 800px;
  margin: 50px auto;
  background-color: #1b1a1a;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1#account-heading {
  margin-top: 10px;
  text-align: center;
  color: #333;
}

.form-container {
  margin-top: 20px;
}

.flex {
  display: flex;
  justify-content: space-between;
}

.flex-item {
  width: 48%; 
}

.field-container {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: wheat;
}

input {
  width: 100%;
  padding: 10px;
  box-sizing: border-box;
  border: 1px solid #444141;
  border-radius: 4px;
  background: #00000078;
  color: wheat;
}

.error-messg {
  color: #f00;
}

.passkey-box {
  position: relative;
}

.passkey {
  width: calc(100% - 30px);
  padding: 10px;
  box-sizing: border-box;
  border: 1px solid #444141;
  border-radius: 4px;
}

.passkey-box::after {
  content: "\1F511";
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  cursor: pointer;
  color: #777;
}

.right {
  text-align: right;
  margin-top: 20px;
}

.updateButton {
  padding: 10px 20px;
  background-color: #f18969;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.updateButton:hover {
  background-color: #ff7044;
  color : wheat;
}

    </style>

</head>
<body>
            <div id="wrapper">

            <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <h2 style="margin-top:15px;">Yummy Yummy</h2>
            </div>
            <ul class="sidebar-nav">
                <li class="active">
                <a href="#account"><i class="bi bi-person-bounding-box" style="padding-right: 10px;"></i>My Account</a>
                </li>
                <li>
                <a href="#favorites"><i class="bi bi-heart-fill" style="padding-right: 10px;"></i>Favorites</a>
                </li>
                <li>
                <a href="index.php"><i class="bi bi-house-fill" style="padding-right: 10px;"></i>Home</a>
                </li>
                <li>
                <a href="login.php"><i class="bi bi-box-arrow-right" style="padding-right: 10px;"></i>Logout</a>
                </li>

            </ul>
            </aside>

            <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="bi bi-list"></i></a>
                </div>
                </div>
            </nav>
            </div>

           
    <div class="wrapper user-account" id="dashboard">
    <h1 id="account-heading" style="margin-top: 10px;"></h1>

    <div class="form-container">
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                  
                    <div class="field-container">
                        <label for="full-name">Full Name: </label>
                        <input type="text" name="full-name" id="full-name" value="<?php echo $_SESSION['fullname'] ?>" pattern="^([a-zA-Z]{2,} ?)+$" placeholder="Your full name" required="required" />
                        <span class="error-messg"></span>
                    </div>

                    <div class="field-container">
                        <label for="username">Username: </label>
                        <input type="text" name="username" value="<?php echo$_SESSION['username'] ?>" pattern="^([a-zA-Z]{2,} ?)+$" id="username" placeholder="Username" required="required" />
                        <span class="error-messg"></span>
                    </div>

                    <div class="field-container">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="<?php echo$_SESSION['email'] ?>" placeholder="Your email" required="required" />
                        <span class="error-messg"></span>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="field-container">
                        <label for="passkey">Password: </label>
                        <div class="passkey-box">
                            <input type="password" name="passkey" id="passkey" value="<?php echo $_SESSION['password'] ?>" class="passkey" placeholder="Password" required="required" />
                        </div>
                        <span class="error-messg"></span>
                    </div>

                    <div class="field-container">
                        <label for="newPassword">New password: </label>
                        <div class="passkey-box">
                            <input type="password" name="newPassword" id="newPassword" class="passkey" placeholder="Enter new password" required="required" />
                        </div>
                        <span class="error-messg"></span>
                    </div>
                </div>
            </div>

            <div class="right" style="margin-top: 20px;">
                <button type="button" class="updateButton">Update</button>
            </div>
        </form>
    </div>
</div>


    
    <div id="favorites" class="favorite-wrapper" style="display: none;">
    
    </div>

    </div>
    </div>
    </div>
    </div>

    <script>
      const $button  = document.querySelector('#sidebar-toggle');
      const $wrapper = document.querySelector('#wrapper');

      $button.addEventListener('click', (e) => {
         e.preventDefault();
           $wrapper.classList.toggle('toggled');
       });

       
       $('ul.sidebar-nav li a').on('click', function (e) {
        e.preventDefault();

        $('ul.sidebar-nav li').removeClass('active');

     
        $(this).closest('li').addClass('active');

      
        var view = $(this).attr('href').substring(1); 
        toggleView(view);
    });

    ///////////////



    const dashboard = $('#dashboard');
    const accountSection = $('#account');
    const favoritesSection = $('#favorites');



    $('a[href="index.php"]').on('click', function (e) {
        window.location.href = 'index.php';
    });

 
    $('a[href="login.php"]').on('click', function (e) {
        window.location.href = 'login.php';
    });


    function toggleView(view) {


    if (view === 'dashboard') {
        dashboard.show();
        accountSection.hide();
        favoritesSection.hide();
    } else if (view === 'account') {
        dashboard.hide();
        accountSection.show();
        favoritesSection.hide();
    } else if (view === 'favorites') {
        dashboard.hide();
        accountSection.hide();
        favoritesSection.show();
    }
}

        $(document).ready(function () {
          
            $('a[href="#account"]').on('click', function (e) {
                e.preventDefault();
                toggleView('account');
            });

          
            $('a[href="#favorites"]').on('click', function (e) {
                e.preventDefault();
                toggleView('favorites');
                fetchFavoriteRecipes();
            });

       
            $('a:not([href="#"])').on('click', function (e) {
                toggleView('dashboard');
            });
        });


        $(document).ready(function () {
            const body = $('body');
            const toggled = $('#toggle');
            const media = window.matchMedia("(min-width:700px)");
        });


        $(document).ready(function () {
            $(".updateButton").click(function (event) {
            event.preventDefault();

            var fullname = $("#full-name").val();
            var username = $("#username").val();
            var newPassword = $("#newPassword").val(); 
            var email = $("#email").val();

            $.ajax({
                type: "POST",
                url: "account_api.php?timestamp=" + new Date().getTime(),
                cache: false,
                data: {
                    fullname: fullname,
                    username: username,
                    newPassword: newPassword
                },
                success: function (msg) {
                    try {
                        var data = JSON.parse(msg);
                        console.log('successful', data);

                        if (data.success) {
                            var updatedFullname = data.updatedFullname;
                            $("#full-name").val(updatedFullname);

                            var updatedUsername = data.updatedUsername;
                            $("#username").val(updatedUsername);

                            var updatedPassword = data.updatedPassword; 
                            $("#newPassword").val(updatedPassword);
                        } else {
                            console.log('Error: ' + data.message);
                        }
                    } catch (error) {
                        console.error('Error parsing JSON', error);
                    }
                },
                error: function (xhr, status, error) {
                    console.log('failed', xhr, status, error);
                }
            });
        });


        });




        //////////////////


        $(document).ready(function() {

            fetchFavoriteRecipes();
 

            function fetchFavoriteRecipes() {
                $.ajax({
                        method: 'POST',
                        url: 'FavoriteToProfile_api.php', 
                        dataType: 'html', 
                    })
                    .done(function(response) {
                        console.log("AJAX Response:", response);
                        $('#favorites').html(response);
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log("AJAX Request Failed: " + textStatus, errorThrown);
                        console.log("Error Response:", jqXHR.responseText);
                    });
            }
        });





              $(document).on('click', '.btn-remove', function () {
   
            console.log("Remove button clicked");
            var recipeId = $(this).data('recipe-id');
            console.log("Recipe ID:", recipeId);
            $.ajax({
                method: 'POST',
                url: 'favoriteRemove_api.php',
                data: { recipe_id: recipeId },
                dataType: 'json'
            })
            .done(function (response) {
                if (response.success) {
                   
                    alert(response.message);
                   
                    location.reload();
                } else {
                    
                    alert(response.message);
                }
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log("AJAX Request Failed: " + textStatus, errorThrown);
            });
            });

            </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>