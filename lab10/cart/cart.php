<?php

session_start();

// เพิ่มสินค้า
if ($_GET["action"] == "add") {

    $pid = $_GET['pid'];

    $cart_item = array(
        'pid' => $pid,
        'pname' => $_GET['pname'],
        'price' => $_GET['price'],
        'qty' => $_POST['qty']
    );

    // ถ้ายังไม่มีสินค้าใดๆในรถเข็น
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // ถ้ามีสินค้านั้นอยู่แล้วให้บวกเพิ่ม
    if (array_key_exists($pid, $_SESSION['cart'])) {
        $_SESSION['cart'][$pid]['qty'] += $_POST['qty'];
    } else {
        // หากยังไม่เคยเลือกสินค้นนั้นจะ
        $_SESSION['cart'][$pid] = $cart_item;
    }

    // ปรับปรุงจำนวนสินค้า
} elseif ($_GET["action"] == "update") {
    $pid = $_GET["pid"];
    $qty = $_GET["qty"];
    $_SESSION['cart'][$pid]['qty'] = $qty;

    // ลบสินค้า
} elseif ($_GET["action"] == "delete") {

    $pid = $_GET['pid'];
    unset($_SESSION['cart'][$pid]);
}
?>

<html>

<head>
    <script>
        // ใช้สำหรับปรับปรุงจำนวนสินค้า
        function update(pid) {
            var qty = document.getElementById(pid).value;
            // ส่งรหัสสินค้า และจำนวนไปปรับปรุงใน session
            document.location = "cart.php?action=update&pid=" + pid + "&qty=" + qty;
            return false; // เพิ่มบรรทัดนี้
        }

        // ใช้สำหรับยืนยันการลบสินค้า
        function confirmDelete(pid) {
            if (confirm('คุณต้องการลบสินค้านี้ใช่หรือไม่?')) {
                document.location = "cart.php?action=delete&pid=" + pid;
            }
            return false;
        }
    </script>
</head>

<body>
    <form method="post">
        <table border="1">
            <?php
            $sum = 0;
            if (!empty($_SESSION["cart"])) {
                foreach ($_SESSION["cart"] as $item) {
                    $sum += $item["price"] * $item["qty"];
            ?>
                    <tr>
                        <td><?= $item["pname"] ?></td>
                        <td><?= $item["price"] ?></td>
                        <td>
                            <input type="number" id="<?= $item["pid"] ?>" value="<?= $item["qty"] ?>" min="1" max="9">
                            <a href="#" onclick="return update(<?= $item["pid"] ?>)">แก้ไข</a>
                            <a href="#" onclick="return confirmDelete(<?= $item["pid"] ?>)">ลบ</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
            <tr>
                <td colspan="3" align="right">รวม <?= $sum ?> บาท</td>
            </tr>
        </table>
    </form>

    <a href="index.php">< เลือกสินค้าต่อ</a>
</body>

</html>
