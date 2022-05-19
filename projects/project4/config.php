<?php

$server = "localhost";
$username = "root";
$password = "npunjani3";
$database = "metaplot";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn) {
    die("<script>alert('Connection Failed.');</script>");
}

?>