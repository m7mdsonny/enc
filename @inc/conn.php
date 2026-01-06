<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$servername = "localhost";
$username = "root01012462686";
$password = "01012462686@Asde";
$dbname = "admin_enc_new_EngAhmed";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");

function enc_fetch_assoc($result)
{
    return $result ? enc_fetch_assoc($result) : null;
}
?>
