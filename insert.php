<?php

include 'conn.php';

$title = $_POST["title"];
$sub = $_POST["sub"];

$sql_write = $conn->prepare("INSERT INTO text (title,sub,date) VALUES (:title, :sub, now())");

$sql_write->bindParam(':title',$title);
$sql_write->bindParam(':sub',$sub);

$sql_write->execute();

echo '<script>alert("작성되었습니다."); history.back();</script>';
?>