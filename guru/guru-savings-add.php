<?php
session_start();
require '../helper/config.php';

if (isset($_POST['add'])) {
    $unique_code_savings = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $code_savings           = "TabunganYasiha-" .(substr(str_shuffle($unique_code_savings), 0,10)); 
    $user_name              = $_POST['user_name'];
    $coin                   = $_POST['savings_coin'];

    $sql    = "INSERT INTO savings_record (code_savings, user_id, savings_coin) VALUES ('$code_savings', '$user_name', '$coin')";

    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Data added successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong while adding';
    }

} else {
    $_SESSION['error'] = 'Fill up form first';
}
header('location: guru-savings.php');
