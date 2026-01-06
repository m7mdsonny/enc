<?php

$servername = "localhost";
$username = "root01012462686";
$password = "01012462686@Asde";
$dbname = "admin_enc_new_EngAhmed";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
mysqli_query($conn,"SET NAMES 'cp1256' COLLATE 'cp1256_general_ci' ");

mysqli_query($conn,"SET character_set_server='cp1256'; ");

mysqli_query($conn,"SET character_set_client='cp1256'; ");

mysqli_query($conn,"SET character_set_results='cp1256'; ");

mysqli_query($conn,"SET character_set_connection='cp1256'; ");

mysqli_query($conn,"SET character_set_database='cp1256'; ");

mysqli_query($conn,"SET collation_connection='cp1256_general_ci'; ");

mysqli_query($conn,"SET collation_database='cp1256_general_ci'; ");

mysqli_query($conn,"SET collation_server='cp1256_general_ci'; ");
mysqli_query($conn,"SET NAMES utf8");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>