<?php 

$server = "localhost";
$user = "root";
$pass = "qmKARITI$1997";
$database = "glory";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>