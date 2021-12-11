<h1>전체 글</h1>
<table border=1>
    <tr>
        <td>no.</td>
        <td>제목</td>
        <td>작성 날짜</td>
    </tr>

    <?php
        include 'conn.php';
        
        $sql_list_all = $conn->prepare("SELECT * FROM text");
        
        $sql_list_all->execute();
        
        $list = $sql_list_all->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($list as $row){
    ?>
    <tr>
        <td><?php  echo htmlspecialchars($row['id']); ?></td>
        <td><a href="./info.php?id=<?php echo($row['id']); ?>"><?php  echo htmlspecialchars($row['title']); ?></a></td>
        <td><?php  echo htmlspecialchars($row['date']); ?></td>
    </tr>
    <?php
        }
    ?>
</table>