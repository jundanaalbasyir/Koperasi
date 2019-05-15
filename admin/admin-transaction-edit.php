<?php
session_start();
require '../helper/config.php';

if (isset($_POST['edit'])) {
    $id                     = $_POST['id'];
    $status                 = $_POST['status'];
    $product_other_cancel   = $_POST['product_quantity'] - $_POST['quantity'];
    $product_after_cancel   = $_POST['product_quantity'] + $_POST['quantity'];

    $sql    = "UPDATE transactions SET status = '$status' WHERE product_id = '$id'";
    $sql1   = "UPDATE products SET product_quantity = '$product_other_cancel' WHERE id = '$id'";
    $sql2   = "UPDATE products SET product_quantity = '$product_after_cancel' WHERE id = '$id'";

    // use for MySQLi OOP
    if ($conn->query($sql)) {
        if  ($_POST['status'] != 2){
            $conn->query($sql);
        } else {
            $conn->query($sql2);                
        }
        $_SESSION['success'] = 'Transaction updated successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong in updating transaction';
    }
} else {
    $_SESSION['error'] = 'Select transaction to edit';
}

header('location: admin-transaction.php');
