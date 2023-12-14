<?php
require_once 'dbinfo.php';

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die('Fail Connection' . $conn->connect_error);
}


$cookingTime = mysqli_real_escape_string($conn, $_POST['cookingTime']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$foodType = mysqli_real_escape_string($conn, $_POST['foodType']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$sorting = mysqli_real_escape_string($conn, $_POST['sorting']);


$query = "SELECT * FROM recipes WHERE category = '$category' OR cooking_time = '$cookingTime' OR food_type = '$foodType' OR country = '$country'";
if($sorting !='') 
{
    $query.="ORDER BY ". $sorting . " ASC;";
}

$result=$conn -> query($query);


$rows = $result->num_rows;

if ($rows != 0) {
    $all_rows = $result->fetch_all(MYSQLI_ASSOC);
    $json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
    echo $json_string;
} else {
    echo 'Nothing found!';
}


$conn->close();
?>
