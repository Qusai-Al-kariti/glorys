<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = "qmKARITI$1997"; 
$dbName     = "file_upload"; 
 
// Create database connection 
$mysqli= new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($mysqli->connect_error) { 
    die("Connection failed: " .$mysqli->connect_error); 
}