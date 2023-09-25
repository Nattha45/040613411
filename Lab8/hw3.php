<?php include "conect.php" ?>
<html>
<head><meta charset="utf-8"></head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
            
            $i = 1 ;

            while ($row = $stmt->fetch()) {
            ?>
            ชื่อสมาชิก : <?=$row ["name"]?><br>
            ที่อยู่ : <?=$row ["address"]?><br>
            อีเมล : <?=$row ["email"]?><br>
            
            <a href="ws5-detail.php?username=<?=$row["username"]?>">
                <img src='member_photo/<?=$i?>.jpg' width='100'>
            </a>
            <br>
            
            <?php 
                $i++;
            ?>
        <?php } 
        ?>
    </body>
</html>