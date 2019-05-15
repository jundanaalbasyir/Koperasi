<?php
session_start();
require '../helper/config.php';

if (isset($_GET['id'])) {
    $sql = "DELETE FROM products WHERE id = '" . $_GET['id'] . "'";

    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Product deleted successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong in deleting product';
    }
} else {
    $_SESSION['error'] = 'Select product to delete first';
}

header('location: admin-product.php');
