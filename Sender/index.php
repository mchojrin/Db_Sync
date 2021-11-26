<?php

$pdo = new PDO('sqlite:' . __DIR__ . '/products');
$sql = "SELECT * FROM products";

$st = $pdo->prepare($sql);
$st->execute();
?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($st->fetchAll() as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>$ <?php echo number_format($row['price'], 2); ?></td>
            <td><?php echo $row['stock']; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>