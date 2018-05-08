<?php

$host = 'localhost';
$dbname = 'blog';
$user = 'admin';
$password = 'samuel01';

$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

$pdo = new PDO($dsn, $user, $password, $attr);

$sql = 'SELECT p.ID, p.Slug, p.Headline, u.Username AS Name, p.Creation_time, p.Text FROM Post AS p JOIN Users AS u ON u.ID = p.User_ID';

if($pdo) {
  $model = array();

  foreach($pdo->query($sql) as $row) {
    $model += array(
      $row['ID'] => array(
        'slug' => $row['Slug'],
        'title' => $row['Headline'],
        'author' => $row['Name'],
        'date' => $row['Creation_time'],
        'text' => $row['Text']
      )
    );
  }
}
?>
