<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once 'dbinfo.php';


$userId = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();

    if (isset($_POST['checkFavorite'])) {
        $recipeId = $_POST['recipeId'];
        $isFavorite = checkFavoriteStatus($userId, $recipeId);
        $response['isFavorite'] = $isFavorite;
    } elseif (isset($_POST['toggleFavorite'])) {
        $recipeId = $_POST['recipeId'];
        $isFavorite = toggleFavoriteStatus($userId, $recipeId);
        $response['isFavorite'] = $isFavorite;
    }


    header('Content-Type: application/json');
    echo json_encode($response);
} else {

    echo "Invalid request method";
}

function checkFavoriteStatus($userId, $recipeId) {
    global $pdo;
    $query = "SELECT * FROM user_favorites WHERE user_id = ? AND recipe_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$userId, $recipeId]);
    return $stmt->rowCount() > 0;
}

function toggleFavoriteStatus($userId, $recipeId) {
    global $pdo;
    if (checkFavoriteStatus($userId, $recipeId)) {
        // If already a favorite, remove from favorites
        $query = "DELETE FROM user_favorites WHERE user_id = ? AND recipe_id = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$userId, $recipeId]);
        return false;
    } else {
        // If not a favorite, add to favorites
        $query = "INSERT INTO user_favorites (user_id, recipe_id) VALUES (?, ?)";
        $stmt = $pdo->prepare($query);
        if (!$stmt) {
            die('Error in preparing statement: ' . $pdo->errorInfo()[2]);
        }
        $stmt->execute([$userId, $recipeId]);
        return true;
    }
}
?>