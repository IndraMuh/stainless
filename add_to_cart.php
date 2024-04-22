<?php
session_start();

// Ambil data produk yang dikirim dari JavaScript
$name = $_GET['name'];
$price = $_GET['price'];
$id = $_GET['id'];
$size = $_GET['size']; 
$i1 = $_GET['i1'];
$jenis = $_GET['jenis'];

// Tambahkan produk ke dalam session keranjang belanja
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Buat array untuk merepresentasikan produk
$product = [
    'name' => $name,
    'price' => $price,
    'id' => $id,
    'i1' => $i1,
    'jenis' => $jenis,
    'size' => $size

];

// Tambahkan produk ke dalam session keranjang belanja
array_push($_SESSION['cart'], $product);

// Beri respons (Anda dapat memberikan respons JSON jika ingin)
echo "success";
?>