<?php

$servarname = "localhost";
$username = "root";
$pass = "";
$db_name = "uni**";

try {
  $conn = new PDO("mysql:host=$servarname;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}
 catch(PDOException $e)
 {
  echo "Connection failed: " . $e->getMessage();
  exit;
}
