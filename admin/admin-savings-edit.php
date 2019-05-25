<?php
session_start();
require '../helper/config.php';

if (isset($_POST['edit'])) {
    $username               = $_POST['username'];
    $id                     = $_POST['id'];
    $status                 = $_POST['status'];
    $product_after_paid     = $_POST['savings_coin'] + $_POST['coin'];

    $sql    = "UPDATE savings_record  SET status = '$status' WHERE id = '$id'";
    $sql1   = "UPDATE savings SET coin = '$product_after_paid' WHERE user_id = '$username'";

    // use for MySQLi OOP
    if ($_POST['status'] == 1) {
        $conn->query($sql);
        $conn->query($sql1);
        $_SESSION['success'] = 'Data updated successfully';
    } else if ($_POST['status'] == 2) {
        $conn->query($sql);
        $_SESSION['success'] = 'Data updated successfully';
    }
    else {
        $_SESSION['error'] = 'Something went wrong in updating transaction';
    }
} else {
    $_SESSION['error'] = 'Select transaction to edit';
}

header('location: admin-savings.php');
