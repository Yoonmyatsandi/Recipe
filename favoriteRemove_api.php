<?php
session_start();
require_once 'dbinfo.php';
 
$conn = new mysqli($host, $user, $pass, $database);
 
if ($conn->connect_error) {
    die($conn->connect_error);
}
 
try {
    $dsn = 'mysql:host=localhost;dbname=recipe_1;charset=utf8';
    $pdo = new PDO($dsn, '', '');
} catch (PDOException $e) {

    die('Database connection failed: ' . $e->getMessage());
}
error_log("favoriteRemove_api.php accessed");
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id'];
        $recipeId = $_POST['recipe_id'];
 
        try {
          
            $removeQuery = "DELETE FROM user_favorites WHERE user_id = ? AND recipe_id = ?";
            $stmtRemove = $pdo->prepare($removeQuery);
            $stmtRemove->execute([$userId, $recipeId]);
 
        
            echo json_encode(['success' => true, 'message' => 'Recipe removed from favorites.']);
        } catch (PDOException $e) {
    
            echo json_encode(['success' => false, 'message' => 'Error removing recipe from favorites. ' . $e->getMessage()]);
        }
    } else {
        // Send an error response if the user is not logged in
        echo json_encode(['success' => false, 'message' => 'User not logged in.']);
    }
} else {
    // Send an error response for unsupported request method
    echo json_encode(['success' => false, 'message' => 'Unsupported request method.']);
}
?>
