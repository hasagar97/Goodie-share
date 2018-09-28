<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'user');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if (!$db) {
   die("Connection failed: " . mysqli_connect_error());
}
else
	// echo "Connected successfully";
?>
