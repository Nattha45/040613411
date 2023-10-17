<?php
include "connect.php";

if (isset($_GET['keyword'])) {
    $keyword = '%' . $_GET['keyword'] . '%';

    $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");
    $stmt->bindParam(1, $keyword);
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo "<div style='padding: 15px; text-align: center'>";
        echo "<img src='member_photo/{$row['username']}.jpg' width='100'><br>";
        echo "ชื่อ : {$row['name']}<br>";
        echo "ที่อยู่ : {$row['address']}<br>";
        echo "เบอร์ : {$row['mobile']}<br>";
        echo "อีเมล : {$row['email']}<br>";
        echo "</div>";
    }
}
?>