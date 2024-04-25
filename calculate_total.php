<?php

$total = 0;

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

foreach ($cart as $item) {
    $price = isset($item['price']) ? floatval(str_replace(',', '', $item['price'])) : 0;
    $total += $price ;
}

echo number_format($total);
?>