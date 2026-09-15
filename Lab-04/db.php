<?php


$server_name = "localhost";
$user_name = "root";
$passord = "";
$db_name = "admission_db";

$conn = new mysqli($server_name, $user_name, $passord, $db_name);

if ($conn->connect_error) {
    die("Conection failed" . $conn->connect_error);
}



?>
