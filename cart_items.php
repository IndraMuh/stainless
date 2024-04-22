<?php

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Menghitung jumlah barang dengan nama dan ukuran gambar yang sama
$jumlah_barang_per_nama_dan_gambar = [];
foreach ($cart as $item) {
    $key = $item['name'] . $item['i1'] . $item['size']; 
    if (isset($jumlah_barang_per_nama_dan_gambar[$key])) {
        $jumlah_barang_per_nama_dan_gambar[$key]++;
    } else {
        $jumlah_barang_per_nama_dan_gambar[$key] = 1;
    }
}

echo '<div class="items">';
echo count($cart) . " ITEM(S) IN YOUR CART";
echo '</div>';

foreach ($cart as $key => $item) {
    $key_check = $item['name'] . $item['i1'] . $item['size']; 
    if (!isset($nama_barang_ditampilkan[$key_check])) {
        echo "<div class='content'>";
        echo "<div class='in'>";
        echo "<div class='img'><img src='gambar/{$item['i1']}'></div>";
        echo "<div class='ins'>";
        echo "<div><p1>{$item['name']}</p1></div>";
        echo "<div class='size'>";
        echo "<p>SIZE: {$item['size']}</p>";
        echo "</div>";
        echo "<div class='insd'>";
        echo "<p><a href='update_quantity.php?key=$key&action=minus'>-</a></p>";
        echo "<p>{$jumlah_barang_per_nama_dan_gambar[$key_check]}</td>";
        echo "<p><a href='update_quantity.php?key=$key&action=plus'>+</a></p>";
        echo "<p><a href='remove_item.php?key=$key'>REMOVE</a></p>";
        echo "<p>Rp {$item['price']}</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
        // Tandai nama, gambar, dan ukuran yang sudah ditampilkan
        $nama_barang_ditampilkan[$key_check] = true;
    }
}
?>