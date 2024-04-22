<?php
session_start();

// Memeriksa apakah kunci item dan aksi tersedia di URL
if(isset($_GET['key']) && isset($_GET['action'])) {
    $key = $_GET['key'];
    $action = $_GET['action'];

    // Memastikan tindakan yang valid (plus atau minus)
    if($action == 'plus' || $action == 'minus') {
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        // Mencari item dalam keranjang sesuai dengan kunci
        if(array_key_exists($key, $cart)) {
            // Jika tindakan adalah plus, tambahkan satu ke jumlah item
            if($action == 'plus') {
                array_push($_SESSION['cart'], $cart[$key]);
            }
            // Jika tindakan adalah minus, kurangi satu dari jumlah item
            elseif($action == 'minus') {
                // Pastikan jumlah item tidak kurang dari 1
                // Hapus item dengan kunci yang sesuai dari session keranjang belanja
                if (isset($_SESSION['cart'][$key])) {
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
    }
}

// Mengarahkan kembali pengguna ke halaman keranjang setelah mengupdate jumlah item
header('Location: cart.php');
?>
//   if (isset($_SESSION['cart'])) {
  //     $_SESSION['cart'] = [];
  // }