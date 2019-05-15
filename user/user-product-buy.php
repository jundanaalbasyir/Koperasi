<?php
session_start();
require '../helper/config.php';

if (isset($_POST['add_cart'])) {
    $unique_code_transaction = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $code_transaction     = "SMKYasiha-" .(substr(str_shuffle($unique_code_transaction), 0,10)); 
    $user_name            = $_POST['user_name'];
    $product_id             = $_POST['product_id'];
    $product_price          = $_POST['product_price'];
    $product_quantity       = $_POST['product_quantity'];
    $product_cost_total     = $_POST['product_price'] * $_POST['product_quantity'];

    $product_after_buy      = $_POST['prdct_quantity'] - $_POST['product_quantity'];

    $sql    = "INSERT INTO transactions (code_transaction, user_id, product_id, quantity, cost_total) VALUES ('$code_transaction', '$user_name', '$product_id', '$product_quantity', '$product_cost_total')";
    $sql1   = "UPDATE products SET product_quantity = '$product_after_buy' WHERE id = '$product_id'";

    if ($conn->query($sql)) {
        $conn->query($sql1);
        $_SESSION['success'] = 'Transaction added successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong while adding';
    }

} else {
    $_SESSION['error'] = 'Fill up form first';
}
header('location: user-transaction.php');
