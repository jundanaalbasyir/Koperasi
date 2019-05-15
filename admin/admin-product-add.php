<?php
session_start();
require '../helper/config.php';

if (isset($_POST['add'])) {
    $product_name      = $_POST['product_name'];
    $product_price     = $_POST['product_price'];
    $product_quantity  = $_POST['product_quantity'];
    $sql = "INSERT INTO products (product_name, product_price, product_quantity) VALUES ('$product_name', '$product_price', '$product_quantity')";

    //use for MySQLi OOP
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Product added successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong while adding';
    }
} else {
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: admin-product.php');
