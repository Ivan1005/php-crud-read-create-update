<?php
include __DIR__ . '/../database.php';


if(empty($_POST['roomNumber'])){
  die();
}

if(empty($_POST['floor'])){
  die();
}

if(empty($_POST['beds'])){
  die();
}

$sql = "INSERT INTO stanze( room_number,floor,beds,created_at,update_at) VALUES(?,?,?,NOW(),NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii",$roomNumber,$floor,$beds);

$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$stmt-> execute();
if($stmt && $stmt->affected_rows > 0){
  header("Location: $basepath/show-php.php?id=$stmt->insert_id");
}
