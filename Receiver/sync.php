<?php

$data = file_get_contents('php://input');
$productsArray = json_decode($data, true);

var_dump($productsArray);

$pdo = new PDO('sqlite:' . __DIR__ . '/products');

$sql = "INSERT INTO PRODUCTS (sender_id, name) VALUES (?, ?)";
$st = $pdo->prepare($sql);

foreach ($productsArray as $productArray) {
    $st->execute([$productArray['id'], $productArray['name']]);
}