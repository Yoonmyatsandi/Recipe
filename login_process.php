<?php

session_start();

require_once 'dbinfo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli($host, $user, $pass, $database);

    if ($conn->connect_error) {
        die('Fail connection'.$conn->connect_error);
    }

    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    $query = "SELECT * FROM userinfo WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($query);
    $rows = $result->num_rows;

    if ($rows != 0) {
        $query = "SELECT * FROM userinfo WHERE email = '$email'";
        $result = $conn->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $_SESSION['id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['role'] = $row['role'];
        echo "Success";
    } else {
        echo 'Invalid Username and Password';
    }

    $conn->close();
}
?>
