<?php
session_start();
require '../helper/config.php';

if (isset($_GET['id'])) {
    $sql = "DELETE FROM users WHERE id = '" . $_GET['id'] . "'";

    if ($conn->query($sql)) {
        $_SESSION['success'] = 'User deleted successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong in deleting user';
    }
} else {
    $_SESSION['error'] = 'Select user to delete first';
}

header('location: admin-user.php');
