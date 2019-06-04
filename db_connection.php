<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=easngroup", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

 // ----------------Fetching data from html objects
 

 ?>