<?php
session_start();
require '../helper/config.php';

if (isset($_POST['add'])) {
    $username           = $_POST['username'];
    $password           = md5($_POST['password'] );
    $role               = $_POST['role'];
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    $sql1 = "INSERT INTO savings (user_id) VALUES ('$username')";

    if ($conn->query($sql)) {
        $conn->query($sql1);
        $_SESSION['success'] = 'User added successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong while adding';
    }
} else {
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: admin-user.php');
