<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'hrishi');
   define('DB_PASSWORD', 'hrishi@123');
   define('DB_DATABASE', 'lab6');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if (!$db) {
   die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>