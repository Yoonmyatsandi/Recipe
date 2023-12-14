<?php
require_once 'dbinfo.php'; 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $userId = $_SESSION['id'];
    $recipeNumber = 1;

    
    $favoriteRecipesHTML = fetchFavoriteRecipes($userId);


    echo $favoriteRecipesHTML;
} else {

    echo "Invalid request method";
}

function fetchFavoriteRecipes($userId)
{
    global $pdo;


    $query = "SELECT r.id, r.title, r.description, r.rating, r.cooking_time, r.favorite, r.category, r.country, r.food_type
              FROM recipes r
              INNER JOIN user_favorites uf ON r.id = uf.recipe_id
              WHERE uf.user_id = ?";

    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute([$userId]);


        $html = '';
        $recipeNumber = 1;
        $totalImages = 9; 

        $html .= '<div class="card-container">'; 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recipePageNumber = ($recipeNumber % 3) + 1;
            $imageNumber = ($recipeNumber % $totalImages) + 1; 
            $recipeNumber++;
            $html .= '<figure class="snip1336" style="width: 33%;" data-category="' . $row['category'] . '" data-recipe-id="' . $row['id'] . '" id="recipeCard-' . $row['id'] . '">';
            $html .= '<img src="./images/food' . $imageNumber . '.jpg" alt="sample87" />';
            $html .= '<figcaption>';
            $html .= '<div class="recipe-details">';
            $html .= '<div class="favorite" id="favoriteBtn-' . $row['id'] . '" onclick="toggleLike(this, ' . $row['id'] . ')"><i class="bi ' . ($row['favorite'] ? 'bi-heart-fill' : 'bi-heart') . '"></i></div>';
            $html .= '<h4 style="margin-bottom: 25px; font-weight: bold;" class="recipe-title">' . $row['title'] . '</h4>';
            $html .= '<div class="cook-time"><i class="bi bi-clock"></i> Cooking Time: ' . $row['cooking_time'] . ' mins</div>';
            $html .= '<h5><i class="bi bi-geo-alt-fill"></i>' . $row['country'] . '</h5>';
            $html .= '<h5><i class="bi bi-circle-fill"></i>' . $row['food_type'] . '</h5>';
            $html .= '<h5><i class="bi bi-circle-fill"></i>' . $row['category'] . '</h5>';
            $html .= '<p>Description: ' . $row['description'] . '</p>';
            $html .= '</div>';
            $html .= '<a href="recipe' . $recipePageNumber . 'details.php?id=' . $row['id'] . '" style="width:100%" class="follow view-recipe">View Recipe</a>';
            $html .= '<button class="btn btn-danger btn-remove remove-button" data-recipe-id="' . $row['id'] . '">Remove</button>';
            $html .= '</figcaption>';
            $html .= '</figure>';
        }
        
        $html .= '</div>';

        return $html;
    } catch (PDOException $e) {

        return 'Error fetching recipes: ' . $e->getMessage();
        echo 'Error fetching recipes: ' . $e->getMessage();
    }
}
?>
