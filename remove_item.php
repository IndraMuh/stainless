<?php
session_start();

// Periksa apakah key produk yang akan dihapus telah disertakan dalam URL
if (isset($_GET['key'])) {
    $key = $_GET['key'];

    // Hapus item dengan kunci yang sesuai dari session keranjang belanja
    if (isset($_SESSION['cart'][$key])) {
        unset($_SESSION['cart'][$key]);
    }

    // Redirect kembali ke halaman keranjang belanja
    header("Location: cart.php");
    exit;
}
?>
