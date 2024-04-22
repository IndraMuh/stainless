<?php
include "connect.php";

$id = $_GET['id'];
$size = $_GET['size'];

// Membuat query berdasarkan ukuran yang dipilih
if ($size == 'M') {
    $stockColumn = 'stockM';
} elseif ($size == 'L') {
    $stockColumn = 'stockL';
} elseif ($size == 'XL') {
    $stockColumn = 'stockXL';
} else {
    echo json_encode(['success' => false, 'message' => 'Ukuran tidak valid']);
    exit;
}

// Query untuk memeriksa stok
$sql = "SELECT $stockColumn FROM product WHERE idProduct = '$id'";
$result = mysqli_query($conn, $sql);

$response = ['success' => false];

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row[$stockColumn] > 0) {
        $response['success'] = true;
    } else {
        $response['message'] = 'Stok ' . $size . ' habis';
    }
} else {
    $response['message'] = 'Produk tidak ditemukan';
}

echo json_encode($response);

mysqli_close($conn);
?>