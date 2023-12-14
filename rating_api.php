<?php

if (isset($_POST['save'])) {
    require_once 'dbinfo.php';

    $conn = new mysqli($host, $user, $pass, $database);

    if ($conn->connect_error) {
        die('Fail Connection' . $conn->connect_error);
    }

    $uid = $_POST['uid'];
    $recipeId = $_POST['recipe_id'];
    $ratedIndex = $_POST['ratedIndex'];
    // $ratedIndex++;


    $checkQuery = "SELECT * FROM recipe_ratings WHERE id = '$uid' AND recipe_id = '$recipeId'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
       
        $updateQuery = "UPDATE recipe_ratings SET rating = $ratedIndex WHERE id = '$uid' AND recipe_id = '$recipeId'";

        if ($conn->query($updateQuery) === TRUE) {
            echo 'Update success';
        } else {
            echo 'Update error: ' . $conn->error;
        }
    } else {
  
        $insertQuery = "INSERT INTO recipe_ratings (id, recipe_id, rating) VALUES ($uid, $recipeId, $ratedIndex)";

        if ($conn->query($insertQuery) === TRUE) {
            echo 'Success';
        } else {
            echo 'Insert error: ' . $conn->error;
        }
    }



    if (isset($conn)) {
        $conn->close();
    }
}
?>
