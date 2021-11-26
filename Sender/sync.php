<?php

define('ENDPOINT', 'http://localhost:8001/sync.php');

$ch = curl_init(ENDPOINT);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HEADER, [
    'Content-Type: application/json',
]);
$pdo = new PDO('sqlite:' . __DIR__ . '/products');
$sql = "SELECT * FROM products";

$st = $pdo->prepare($sql);
$st->execute();
$payload = json_encode($st->fetchAll());
echo "Sending <pre>$payload</pre><br/>";
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo "Got <pre>$response</pre> back<br/>";
