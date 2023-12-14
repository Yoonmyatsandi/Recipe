<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('./images/cover2details.jpg');
            object-fit: cover;
            background-size: cover;
            font: 13px 'Open Sans', sans-serif;
            color: wheat;
        }

        .recipe-card {
            background-color: black;
            -webkit-box-shadow: 0px 0px 20px 1px rgba(240, 241, 243, 1);
            -moz-box-shadow: 0px 0px 20px 1px rgba(240, 241, 243, 1);
            box-shadow: 0px 0px 20px 1px rgb(88, 88, 88);
            border: 3px solid #eb9376;
            width: 300px;
            margin: 50px auto;
        }

        .recipe-card__body {
            padding: 20px;
        }

        .recipe-card__heading {
            padding: 0;
            margin: 0 0 0;
            color: wheat;
        }

        .recipe-card__subhead {
            font-size: 13px;
            color: #f18969 ;
            margin-bottom: 30px;
        }

        .recipe-card__ingredients {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-left: 10px;
            column-count: 1;
        }

        .recipe-card__ingredients li {
            margin-bottom: 5px;
        }

        .recipe-card__ingredients li:before {
            content: '\2022';
            color: #eb9376;
            margin-right: 5px;
        }

        .recipe-card__nav {
            margin: 0 0 20px;
            padding: 0;
            border-bottom: 1px solid #eb9376;
        }

        .recipe-card__nav li {
            display: inline-block;
            margin-right: 30px;
        }

        .recipe-card__nav h3 {
            margin: 0;
            padding: 0;
        }

        .recipe-card__nav h3:after {
            content: '';
            display: block;
            width: 0%;
            padding-top: 10px;
            margin: 0 auto;
            border-bottom: 5px solid #eb9376;
            transition: width 250ms ease-in-out 0s;
        }

        .recipe-card__nav h3:hover {
            cursor: pointer;
        }

        .recipe-card__nav h3:hover:after, .recipe-card__nav h3.active:after {
            width: 100%;
        }

        .favorite, .rating {
            display: inline-block;
            float: right; 
            cursor: pointer;
}

        .favorite i, .rating{
            font-size: 18px;
            color: #f18969;
            padding-right: 15px;
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

        .cook-time{
            margin-bottom: 20px;
        }

        @media (min-width: 599px) {
            .recipe-card {
                width: 600px;
            }

            .recipe-card__ingredients {
                column-count: 2;
            }
        }
    </style>
</head>
<body>
        <div class='recipe-card' data-recipe-id="11" id='recipe_id' key='11'>
        <div style="background:url('./images/food1.jpg') no-repeat 50% 50%; background-size:cover; height: 300px"></div>
        <div class="recipe-card__body">
            <h1 class="recipe-card__heading">Vegan Chocolate Avocado Mousse</h1>
            <h2 class="recipe-card__subhead">Indulgent and creamy vegan chocolate mousse made with avocado. </h2>
            <div class="favorite">
                <i class="bi bi-heart"></i>
            </div>
            <div class="rating" id="rating-container">

            <i class="bi bi-star-fill" data-index="1"></i>
            <i class="bi bi-star-fill" data-index="2"></i>
            <i class="bi bi-star-fill" data-index="3"></i>
            <i class="bi bi-star-fill" data-index="4"></i>
            <i class="bi bi-star-fill" data-index="5"></i>
            </div>

            <div class="cook-time">
                <i class="bi bi-clock"></i> Cooking Time: 20 mins
            </div>
           
          
            <ul class="recipe-card__nav">
                <li>
                    <h3 class="active">Ingredients</h3>
                </li>
                <li>
                    <h3>Method</h3>
                </li>
            </ul>

            <ul class="recipe-card__ingredients">
                <li>&frac14; cup unsalted butter</li>
                <li>&frac14; cup vegetable shortening</li>
                <li>&frac12; cup light brown sugar</li>
                <li>&frac14; cup granulated sugar</li>
                <li>1 teaspoon vanilla extract</li>
                <li>1 &frac14; teaspoons ground cinnamon</li>
                <li>&#8539; teaspoon ground nutmeg</li>
                <li>1/2 teaspoon salt</li>
                <li>1 teaspoon cider or white vinegar*</li>
                <li>1 large egg</li>
                <li>&frac12; teaspoon baking soda</li>
                <li>&frac34; cup All-Purpose Flour</li>
                <li>1 &frac12; cups rolled oats</li>
                <li>1 cup golden raisins, optional</li>
            </ul>
            <ul class="recipe-card__method" style="display:none; line-height:22px;">
                <li> In a large pot, heat coconut milk over medium heat.</li>
                <li> Add chicken and bring to a simmer.</li>
                <li> Stir in lemongrass, galangal, and kaffir lime leaves.</li>
                <li> Season with fish sauce and sugar. Simmer for 15 minutes.</li>
                <li> Add mushrooms and tomatoes. Cook for an additional 5 minutes.</li>
                <li> Remove from heat and discard lemongrass, galangal, and kaffir lime leaves.</li>
                <li> Garnish with cilantro and serve hot.</li>
            </ul>
        </div>
    </div>


    <script>
        
$(document).ready(function() {

$('.recipe-card__nav h3').click(function() {

    $('.recipe-card__nav h3').removeClass('active');


    $(this).addClass('active');


    if ($(this).text() === 'Ingredients') {
        $('.recipe-card__ingredients').show();
        $('.recipe-card__method').hide();
    } else if ($(this).text() === 'Method') {
        $('.recipe-card__ingredients').hide();
        $('.recipe-card__method').show();
    }
});

});


$(document).ready(function() {
            var recipeId = $('#recipe_id').attr('key');
            var uid = <?php echo isset($_SESSION['id']) ? $_SESSION['id'] : 'null'; ?>;
            var ratedIndex = -1;
 
            <?php if (isset($_SESSION['email'])) { ?>
                resetStarColors();
 
       
                var ratings = JSON.parse(localStorage.getItem('ratings')) || {};
 
      
                var userRatingsKey = 'uid_' + uid + '_recipe_' + recipeId;
 
                if (ratings[userRatingsKey] != null) {
                    setStars(ratings[userRatingsKey]);
                    ratedIndex = ratings[userRatingsKey];
                }
 
                $('.bi-star-fill').on('click', function() {
                    if (uid == null) {
                        alert('Please login to rate.');
                        return;
                    }
                    ratedIndex = parseInt($(this).data('index')); 
                    saveToLocalStorage();
                    saveToTheDB();
                });
 
                $('.bi-star-fill').mouseover(function() {
                    resetStarColors();
                    var currentIndex = parseInt($(this).data('index'));
                    setStars(currentIndex);
                });
 
                $('.bi-star-fill').mouseleave(function() {
                    resetStarColors();
                    if (ratedIndex != -1) {
                        setStars(ratedIndex);
                    }
                });
 
                function saveToLocalStorage() {
        
                    ratings[userRatingsKey] = ratedIndex;
                    localStorage.setItem('ratings', JSON.stringify(ratings));
                }
 
                function saveToTheDB() {
                    $.ajax({
                        url: 'rating_api.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            save: 1,
                            uid: uid,
                            recipe_id: recipeId,
                            ratedIndex: ratedIndex
                        },
                        success: function(r) {
                            alert("Already rated");
                        }
                    });
                }
 
                function setStars(max) {
        for (var i = 0; i < max; i++) {
            $('.bi-star-fill:eq(' + i + ')').css('color', '#f18969');
              }
              }
 
    
            function resetStarColors() {
                $('.bi-star-fill').css('color', 'white');
            }
        
            <?php } else { ?>
 
                $('.bi-star-fill').on('click', function() {
                    alert('Please login to rate.');
                }).css('color', 'white');
        <?php } ?>
        });
 
//////////////For favorite part////////////////////

    

$(document).ready(function () {
    var userId = <?php echo isset($_SESSION['id']) ? $_SESSION['id'] : 'null'; ?>;
    var recipeId = $('#recipe_id').attr('key');

    checkFavoriteStatus();

    $(document).on('click', '.favorite i', function () {
        console.log('Heart icon clicked');
        if (userId !== null) {
            toggleFavoriteStatus();
        } else {
            alert('Please login to save as favorite.');
        }
    });

    function checkFavoriteStatus() {
        if (userId !== null) {
            $.ajax({
                url: 'favorite_handler.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    checkFavorite: 1,
                    userId: userId,
                    recipeId: recipeId
                },
                success: function (response) {
                    if (response.isFavorite) {
                        $('.favorite i').removeClass('bi-heart').addClass('bi-heart-fill');
                    }
                }
            });
        }
    }

    function toggleFavoriteStatus() {
        if (userId !== null) {
            $.ajax({
                url: 'favorite_handler.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    toggleFavorite: 1,
                    userId: userId,
                    recipeId: recipeId
                },
                success: function (response) {
                    console.log('AJAX Response:', response);
                    if (response && response.isFavorite !== undefined) {
                        if (response.isFavorite) {
                            console.log('Recipe is now a favorite.');
                            $('.favorite i').removeClass('bi-heart').addClass('bi-heart-fill');
                        } else {
                            console.log('Recipe is not a favorite.');
                            $('.favorite i').removeClass('bi-heart-fill').addClass('bi-heart');
                        }
                    } else {
                        console.error('Invalid response from the server.');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    console.log(jqXHR.responseText);
                    console.log('Recipe is not a favorite (error case).');
                    $('.favorite i').removeClass('bi-heart-fill').addClass('bi-heart');
                }
            });
        }
    }
});


        
    </script>


</body>
</html>
