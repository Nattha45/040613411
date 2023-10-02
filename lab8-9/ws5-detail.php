<?php include "conect.php" ?>
<html>
    <head><meta charset="utf-8"></head>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
            $stmt->bindParam(1, $_GET["username"]); 
            $stmt->execute();
            $row = $stmt->fetch();
        ?>
        <div style="display:flex">
            <div>
                <img src='member_photo/<?=$row["username"]?>.jpg' width='200'>
            </div>
            <div style="padding: 15px">
                <h2><?=$row["name"]?></h2>
                ชื่อ : <?=$row ["name"]?><br> 
                ที่อยู่ : <?=$row ["address"]?><br>
                เบอร์ : <?=$row ["mobile"]?><br> 
                อีเมล : <?=$row ["email"]?><br> 
            </div>
        </div>
        </body>
</html>