<?php
   define('DB_SERVER', 'localhost:3036');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'php_vuln');
$servername = "localhost";
$database = "php_vuln";
$username = "root";
$password = "";

// Create connection

$db = mysqli_connect($servername, $username, $password, $database);
   
?>