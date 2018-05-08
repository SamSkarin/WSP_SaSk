<?php
$server = "localhost";
$user = "admin";
$pass = "SzxYgugfEK2mRYuu";
$db = "blog";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}

else {
  echo "Connection success";
}

?>
