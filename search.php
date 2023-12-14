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

.snip1336 a.follow:hover {
    background-color: #ff6a3c;
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


.hidden {
            display: none;
        }


#result{
    margin-top: 100px;
}

.search-div {
    margin: 0 auto; 
    text-align: center; 
  }


  .dropdown-time{
    margin: 0 auto; 
    text-align: center; 
  }

  #searchForm input[type="text"] {
    width: 40%;
    padding: 15px;
    border-radius: 10px;
    border: 1px solid wheat;
    background: #272525bd;
    margin-top: 45px;
}

.search-text{
    width: 45px;
    height: auto;
    padding: 15px;
    border-radius: 10px;
    background: #f189694f;
    border: 1px solid #f18969;
    color: wheat;
}


.search-text:hover{
    width: 45px;
    height: auto;
    padding: 15px;
    border-radius: 10px;
    background: #f18969;
    border: 1px solid #f18969;
    color: white;
}

.buttons {
  padding: 20px 0 40px;
}

.button {
  transition: all .2s ease-in-out;
  -webkit-appearance: none;
  border-radius: 100px;
  font-family: inherit;
  appearance: none;
  background: none;
  font-weight: 700;
  font-size: 18px;
  cursor: pointer;
  padding: 20px;
  outline: none;
  opacity: 1;
  border: none;
  color: wheat;
}

.button:hover,
.button.active {
    color: #f18969;;
}

.grid {
  grid-template-columns: 1fr 1fr 1fr;
  margin: 0 auto 80px;
  max-width: 90%;
  grid-gap: 20px;
  display: grid;
  width: 600px;
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
  
    </div>



    <div id="main" class="search-div">
    <form id="searchForm" method="POST" style="text-align: center;">
        <h2 for="searchTerm" style="color:wheat; text-align:center; margin-top:55px; font-weight:bold;">Search for recipes: </h2>
        <div style="display: flex; justify-content: center; align-items: center;">
            <input type="text" style="color:wheat;" name="searchTerm" id="searchTerm" placeholder="Search the recipe ..." required>
            <button type="submit" style="margin-left: 10px; margin-top: 45px;" class="search-text">
            <i class="bi bi-search"></i>
            </button>

        </div>
        
        <!-- Inside the form -->
        <div style=" text-align:left; margin-left:25px;">
        <div class="dropdown-time" style="display: inline-block; margin-right: 10px;">
            <select name="cookingTime" id="cookingTime" style="color:wheat; padding: 15px; border-radius: 10px; background: #272525bd; margin-top: 45px;">
                <option value="" selected disabled style="color:white; background-color:#f18969;">Select Cooking Time</option>
                <option value="10-20">10-20 mins</option>
                <option value="15">15 mins</option>
                <option value="20">20 mins</option>
                <option value="25">25 mins</option>
                <option value="30">30 mins</option>
                <option value="35">35 mins</option>
                <option value="40">40 mins</option>
                <option value="45">45 mins</option>
                <option value="50">50 mins</option>
            </select>
        </div>

        <div class="dropdown-country" style="display: inline-block; margin-right: 10px;">
            <select name="country" id="country" style="color:wheat; padding: 15px; border-radius: 10px; background: #272525bd; margin-top: 45px;">
                <option value="" selected disabled style="color:white; background-color:#f18969;">Select Country</option>
                <option value="Italy">Italy</option>
                <option value="United States">United States</option>
                <option value="International">International</option>
                <option value="Thailand">Thailand</option>
                <option value="Mexico">Mexico</option>
                <option value="Japan">Japan</option>
                <option value="India">India</option>
            </select>
        </div>

        <div class="dropdown-food-type" style="display: inline-block; margin-right: 10px;">
            <select name="foodType" id="foodType" style="color:wheat; padding: 15px; border-radius: 10px; background: #272525bd; margin-top: 45px;">
                <option value="" selected disabled style="color:white; background-color:#f18969;">Select Food Type</option>
                <option value="Appetizer">Appetizer</option>
                <option value="Main Course">Main Course</option>
                <option value="Dessert">Dessert</option>
                <option value="Side Dish">Side Dish</option>
                <option value="Soup">Soup</option>
                <option value="Snack">Snack</option>
            </select>
        </div>

        <div class="dropdown-category" style="display: inline-block;">
            <select name="category" id="category" style="color:wheat; padding: 15px; border-radius: 10px; background: #272525bd; margin-top: 45px;">
                <option value="" selected disabled style="color:white; background-color:#f18969;">Select Category</option>
                <option value="Seafood">Seafood</option>
                <option value="Vegetarian">Vegetarian</option>
                <option value="Vegan">Vegan</option>
                <option value="Meat">Meat</option>
                <option value="Beverage">Beverage</option>

            </select>
        </div>


        <div class="dropdown-sorting" style="display: inline-block;">
        <select name="sorting" id="sorting" style="color:wheat; padding: 15px; border-radius: 10px; background: #272525bd; margin-top: 45px;">
            <option value="" selected disabled style="color:white; background-color:#f18969;">--Sorting--</option>
            <option value="title">Name</option>
            <option value="cooking_time">Cooking Time</option>
            <option value="country">Country</option>
        </select>
        </div>
        
        </div>

        <div id="result" class="card-container"></div>

        </form>
</div>





    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
       $(document).ready(function () {
    $("#searchForm").submit(function (e) {
        e.preventDefault();
        var searchTerm = $("#searchTerm").val();

        if (searchTerm !== "") {
            $.ajax({
                method: "POST",
                url: "search_api.php",
                data: {
                    searchTerm: searchTerm,
                }
            })
            .done(function(msg) {
       try {
        var data = JSON.parse(msg);
        console.log(data); 

        var recipe_card = '<div class="card-container">';

        for (var i = 0; i < data.length; i++) {
            var imageIndex = i % 9 + 1;
            var recipeIndex = (i % 3) + 1;

            recipe_card += 
                '<figure class="snip1336">' +
                '<img src="./images/food' + imageIndex + '.jpg" alt="Recipe ' + (i + 1) + '" />' +
                '<figcaption>' +
                '<div class="recipe-details">' +
                '<div class="favorite"><i class="bi bi-heart-fill"></i></div>' +
                '<h4 style="margin-bottom:25px; font-weight:bold;">' + data[i].title + '</h4>' +
                '<div class="cook-time"><i class="bi bi-clock"></i> Cooking Time: ' + data[i].cooking_time + ' mins</div>' +
                '<h5><i class="bi bi-geo-alt-fill"></i>' + data[i].country + '</h5>' +
                '<h5><i class="bi bi-circle-fill"></i>' + data[i].food_type + '</h5>' +
                '<h5><i class="bi bi-circle-fill"></i>' + data[i].category + '</h5>' +
                '<p>Description: ' + data[i].description + '</p>' +
                '</div>' +
                '<a href="./recipe' + recipeIndex + 'details.php" style="width:100%" class="follow">View Recipe</a>' +
                '</figcaption>' +
                '</figure>';
        }

        recipe_card += '</div>';

        $('#result').html(recipe_card);
        $('#result').css("display", "flex")
            } catch (error) {
                console.error("Error parsing JSON response:", error);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            console.error("AJAX request failed:", textStatus, errorThrown);
        });
        } else {
            $("#result");
            $("#searchForm").html("");
        }
    });


        
            $(".dropdown-time, .dropdown-country, .dropdown-food-type, .dropdown-category, .dropdown-sorting").change(function() {
            // Get the selected values from dropdowns
            var cookingTime = $("#cookingTime").val();
            var country = $("#country").val();
            var foodType = $("#foodType").val();
            var category = $("#category").val();
            var sorting = $("#sorting").val();

            $.ajax({
                method: "POST",
                url: "filterCard_api.php",
                data: {
                    cookingTime: cookingTime,
                    country: country,
                    foodType: foodType,
                    category: category,
                    sorting:sorting
                }
            })
            .done(function(msg) {
                try {
                    var data = JSON.parse(msg);
                    console.log(data); 

                    var recipe_card = '<div class="card-container">';

                    for (var i = 0; i < data.length; i++) {
                        var imageIndex = i % 9 + 1;
                        var recipeIndex = (i % 3) + 1;

                        recipe_card += 
                            '<figure class="snip1336">' +
                            '<img src="./images/food' + imageIndex + '.jpg" alt="Recipe ' + (i + 1) + '" />' +
                            '<figcaption>' +
                            '<div class="recipe-details">' +
                            '<div class="favorite"><i class="bi bi-heart-fill"></i></div>' +
                            '<h4 style="margin-bottom:25px; font-weight:bold;">' + data[i].title + '</h4>' +
                            '<div class="cook-time"><i class="bi bi-clock"></i> Cooking Time: ' + data[i].cooking_time + ' mins</div>' +
                            '<h5><i class="bi bi-geo-alt-fill"></i>' + data[i].country + '</h5>' +
                            '<h5><i class="bi bi-circle-fill"></i>' + data[i].food_type + '</h5>' +
                            '<h5><i class="bi bi-circle-fill"></i>' + data[i].category + '</h5>' +
                            '<p>Description: ' + data[i].description + '</p>' +
                            '</div>' +
                            '<a href="./recipe' + recipeIndex + 'details.php" style="width:100%" class="follow">View Recipe</a>' +
                            '</figcaption>' +
                            '</figure>';
                    }

                    recipe_card += '</div>';

                    $('#result').html(recipe_card);
                    $('#result').css("display", "flex");
                } catch (error) {
                    console.error("Error parsing JSON response:", error);
                }
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX request failed:", textStatus, errorThrown);
            });
        });
 
        })

      
    </script>


    </body>
    </html>
