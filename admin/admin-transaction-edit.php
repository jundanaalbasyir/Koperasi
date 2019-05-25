<?php
session_start();
require '../helper/config.php';

if (isset($_POST['edit'])) {
    $user_name              = $_POST['user_id'];
    $id                     = $_POST['id'];
    $product_id             = $_POST['product_id'];
    $status                 = $_POST['status'];
    $product_other_cancel   = $_POST['product_quantity'] - $_POST['quantity'];
    $product_after_cancel   = $_POST['product_quantity'] + $_POST['quantity'];
    $add_poin               = $_POST['poin'] + $_POST['quantity'];

    $sql    = "UPDATE transactions SET status = '$status' WHERE id = '$id'";
    $sql1   = "UPDATE products SET product_quantity = '$product_after_cancel' WHERE id = '$product_id'";
    $sql2   = "UPDATE savings SET poin = '$add_poin' WHERE user_id = '$user_name'";

    if ($_POST['status'] == 2) {
        $conn->query($sql);
        $conn->query($sql1);
        $_SESSION['success'] = 'Transaction updated successfully';
    } else if ($_POST['status'] == 0)  {
        $conn->query($sql);
        $_SESSION['success'] = 'Transaction updated successfully';
    } else if ($_POST['status'] == 1){
        $conn->query($sql);
        $conn->query($sql2);
        $_SESSION['success'] = 'Transaction updated successfully';
    }
    else {
        $_SESSION['error'] = 'Something went wrong in updating transaction';
    }
} else {
    $_SESSION['error'] = 'Select transaction to edit';
}

header('location: admin-transaction.php');
