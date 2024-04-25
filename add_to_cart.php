<?php
session_start();

$name = $_GET['name'];
$price = $_GET['price'];
$id = $_GET['id'];
$size = $_GET['size']; 
$i1 = $_GET['i1'];
$jenis = $_GET['jenis'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product = [
    'name' => $name,
    'price' => $price,
    'id' => $id,
    'i1' => $i1,
    'jenis' => $jenis,
    'size' => $size

];

array_push($_SESSION['cart'], $product);

echo "success";
?>