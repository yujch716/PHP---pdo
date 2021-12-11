<?php           
    $id = $_GET['id'];

    include 'conn.php';

    $sql_board = $conn->prepare("SELECT * FROM text WHERE id = :id");
    
    $sql_board->bindValue(':id', $id);
    $sql_board->execute();

    $board = $sql_board->fetchAll(PDO::FETCH_ASSOC);
        
    foreach($board as $row){
?>

<h1><?php echo $row["id"]; ?>번 글</h1>

<table>
<form action="./update.php?id=<?php echo $id; ?>" method="POST">
    <tr>
        <td>제목</td>
        <td><input type="text" name="title" value="<?php echo $row["title"]; ?>"></td>
    </tr>
    <tr>
        <td>내용</td>
        <td><textarea name="sub" cols="30" rows="10"><?php echo $row["sub"]; ?></textarea></td>                     
    </tr>
    <tr>
        <td><input type="submit" value="수정"></td>
        <td></td>
    </tr>
</form>               
</tr>
</table>

<button onclick="location.href='./delete.php?id=<?php echo $id; ?>';">삭제</button> 

<?php
    }
?> 
