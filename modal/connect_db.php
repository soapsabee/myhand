<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "secondhand";







$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

mysqli_query($conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

?>