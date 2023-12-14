<?php

session_start();

$fullname = htmlspecialchars($_POST['fullname']);
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$role = htmlspecialchars($_POST['role']);

require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die($conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO userinfo (fullname, username, email, password, role) VALUES (?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Error in preparing the statement: " . $conn->error);
}

$stmt->bind_param("sssss", $fullname, $username, $email, $password, $role);

if($stmt->execute()){
    $query = "SELECT * FROM userinfo WHERE email = '$email'";
    $result = $conn->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION['userID'] = $row['id'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['role'] = $row['role'];
    echo "Success";
}

else{
    echo "Unable to register";
}
$stmt->close();
$conn->close();
?>