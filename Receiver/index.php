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
        <th>External ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($st->fetchAll() as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['sender_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>