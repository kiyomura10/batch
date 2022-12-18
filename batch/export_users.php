<?php
$user = "udemy_user";
$pass = "udemy_pass";


$pdo = new PDO('mysql:host=db;dbname=udemy_db;charset=utf8', $user, $pass);

$sql = "SELECT * FROM users ORDER BY id";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    var_dump($row);
}
?>