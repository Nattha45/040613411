<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style for the shopping cart table */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        /* Style for the update and delete links */
        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h2>Your Shopping Cart</h2>
    <form>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php
                $sum = 0;
                foreach ($_SESSION["cart"] as $item) {
                    $subtotal = $item["price"] * $item["qty"];
                    $sum += $subtotal;
            ?>
            <tr>
                <td><?= $item["pname"] ?></td>
                <td><?= $item["price"] ?></td>
                <td>
                    <input type="number" id="<?= $item["pid"] ?>" value="<?= $item["qty"] ?>" min="1" max="9">
                </td>
                <td><?= $subtotal ?></td>
                <td>
                    <a href="#" onclick="update(<?= $item["pid"] ?>)">Update</a>
                    <a href="?action=delete&pid=<?= $item["pid"] ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="5" align="right"><strong>Total: <?= $sum ?> บาท</strong></td>
            </tr>
        </table>
    </form>
    <a href="index.php">&lt; Continue Shopping</a>
</body>
</html>
