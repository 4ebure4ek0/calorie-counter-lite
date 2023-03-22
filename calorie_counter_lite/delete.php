<?php
require 'configDB.php';

$id = $_GET['id'];

$sql = 'DELETE FROM `products` WHERE `id` =?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location:/calorie_counter_lite/');
?>