<?php

$DB_HOST        = 'localhost';
$DB_USERNAME    = 'root';
$DB_PASSWORD    = '';
$DB_DATABASE    = 'koperasimple';

$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

if ($conn->error) {
    die('koneksi gagal' . $conn->error);
}
