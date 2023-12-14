<?php
session_start();
require_once 'dbinfo.php';

$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    die('Fail Connection' . $conn->connect_error);
}


$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : "";
$username = $_POST['username'] ?? "";
$newPassword = $_POST['newPassword'] ?? "";
$email = $_SESSION['email'];


$query = "UPDATE userinfo SET username='$username', fullname='$fullname'";

if (!empty($newPassword)) {

    $query .= ", password='$newPassword'";
}
$query .= " WHERE email='$email'";

$result = $conn->query($query);

$response = array();

if ($result === TRUE) {
    $_SESSION['fullname'] = $fullname;
    $_SESSION['username'] = $username;
    $response['success'] = true;
    $response['updatedUsername'] = $username;
    $response['updatedPassword'] = $newPassword;
    $response['updatedFullname'] = $fullname; 
    
} else {
    $response['success'] = false;
    $response['message'] = "Fail to update";
}

echo json_encode($response);
?>
