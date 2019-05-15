<?php
session_start();
require '../helper/config.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $product_name      = $_POST['product_name'];
    $product_price     = $_POST['product_price'];
    $product_quantity  = $_POST['product_quantity'];

    $sql = "UPDATE products SET product_name = '$product_name', product_price = '$product_price', product_quantity = '$product_quantity' WHERE id = '$id'";

    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Product updated successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong in updating Product';
    }
} else {
    $_SESSION['error'] = 'Select Product to edit first';
}

header('location: admin-product.php');
