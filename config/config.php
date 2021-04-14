<?php
		$host = 'localhost'; 
		$user = 'root'; 
		$password = ''; 
		$db_name = 'module27_db'; 
 
		$link = mysqli_connect($host, $user, $password, $db_name);         
        mysqli_query($link, "SET NAMES 'utf8'");  

        define('UPLOAD_MAX_SIZE', 1000000); // 1mb
        define('ALLOWED_TYPES', ['image/jpeg', 'image/png', 'image/gif']);
        define('UPLOAD_DIR', '../data/images');
?>