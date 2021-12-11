<?php
    $id = $_GET["id"];

    include 'conn.php';
    
    $sql_delete = $conn->prepare("DELETE FROM text WHERE id = :id");
            
    $sql_delete->bindValue(':id', $id);

    $sql_delete->execute();

    echo '<script>alert("삭제되었습니다."); location.href="./result.php";</script>';
?>