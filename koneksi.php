<?php
$hostName = "localhost";  
$userName = "root";       
$password = "";           
$dbName   = "eduwork_perpus";
$conn = new mysqli($hostName, $userName, $password,$dbName);    
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}


?>