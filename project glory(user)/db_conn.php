<?php  

$sname = "localhost";
$uname = "root";
$password = "qmKARITI$1997";
$db_name = "file_upload";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(isset($conn)){
    echo "yes";
    }
    else{
        echo "ynono";  
    
    }