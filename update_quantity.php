<?php
session_start();


if(isset($_GET['key']) && isset($_GET['action'])) {
    $key = $_GET['key'];
    $action = $_GET['action'];


    if($action == 'plus' || $action == 'minus') {
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];


        if(array_key_exists($key, $cart)) {

            if($action == 'plus') {
                array_push($_SESSION['cart'], $cart[$key]);
            }

            elseif($action == 'minus') {

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