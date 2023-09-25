<?php include "conect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT member.name,member.address,member.email FROM member");
    $stmt->execute();

    while($row = $stmt->fetch()):
    ?>
    
        ชื่อสมาชิก: <?=$row["name"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมลล์: <?=$row["email"]?><br><hr>
        <?php endwhile;?>
</body>
</html>