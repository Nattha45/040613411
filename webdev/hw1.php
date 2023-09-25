<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT * FROM product");

    $stmt->execute();
    echo "<table>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>รหัสสินค้า</th>";
                echo "<th>ขื่อสินค้า</th>";
                echo "<th>รายละเอียด</th>";
                echo "<th>ราคา</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $stmt->fetch()) {
            echo "<tr>";
                echo "<td>" . $row["pid"] . "</td>";
                echo "<td>" . $row["pname"] . "</td>";
                echo "<td>" . $row["pdetail"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>