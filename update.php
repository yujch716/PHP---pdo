<?php
    $title = $_POST["title"];
    $sub = $_POST["sub"];
    $id = $_GET["id"];

    include 'conn.php';

    $sql_update = $conn->prepare("UPDATE text SET 
    title = :title, 
    sub = :sub,
    date = now()
    WHERE id = :id");

    $sql_update->bindValue(':title', $title);
    $sql_update->bindValue(':sub', $sub);
    $sql_update->bindValue(':id',$id);

    $sql_update->execute();     

    echo '<script> alert("수정되었습니다."); history.back(); </script>';
?>