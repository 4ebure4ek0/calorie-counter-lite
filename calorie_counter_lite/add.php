<?php
$product = $_POST['product'];
$call = $_POST['call'];
if($product == '' || $call == ''){
    echo 'Enter all information';
    exit();
}
require 'configDB.php';

$sql = 'INSERT INTO products(product, calories) VALUES(:product, :calories)';
$query = $pdo->prepare($sql);
$query->execute(['product' => $product, 'calories' => $call]);

header('Location:/calorie_counter_lite/')
?>