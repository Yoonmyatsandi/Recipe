<?php
session_start();

require_once 'dbinfo.php';

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die('Fail Connection' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $conn->real_escape_string($_POST['searchTerm']);

    $query = "SELECT * FROM recipes WHERE title LIKE '%$input%' ORDER BY title,country ASC";

    $result = $conn->query($query);
    $rows = $result->num_rows;

    if ($rows != 0) {
        $all_rows = $result->fetch_all(MYSQLI_ASSOC);
        $json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
        echo $json_string;
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}

$conn->close();
?>
