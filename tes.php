<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="tes.css">
</head>
<body>
<div class="ContentWraper">
<div class="itemCon">
 <div class="itemsWarp">
    <?php
    include "connect.php";

    // Fungsi untuk mendapatkan data produk berdasarkan ID
    $sql = "SELECT * FROM product1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Tampilkan informasi akun pengguna
        $row = mysqli_fetch_assoc($result);
        echo '<div class="item1">';
        echo '<a href="/"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
        echo '<div class="textItems">';
        echo '<a href="/" class="T1">' . $row['name'] . '</a>';
        echo '<a href="/" class="T2">Rp.' . $row['price'] . '</a>';
        echo '</div>';
        echo '</div>';
    }

    $sql = "SELECT * FROM product2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Tampilkan informasi akun pengguna
        $row = mysqli_fetch_assoc($result);
        echo '<div class="item2">';
        echo '<a href="/"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
        echo '<div class="textItems">';
        echo '<a href="/" class="T1">' . $row['name'] . '</a>';
        echo '<a href="/" class="T2">Rp.' . $row['price'] . '</a>';
        echo '</div>';
        echo '</div>';
    }
    $sql = "SELECT * FROM product1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Tampilkan informasi akun pengguna
        $row = mysqli_fetch_assoc($result);
        echo '<div class="item3">';
        echo '<a href="/"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
        echo '<div class="textItems">';
        echo '<a href="/" class="T1">' . $row['name'] . '</a>';
        echo '<a href="/" class="T2">Rp.' . $row['price'] . '</a>';
        echo '</div>';
        echo '</div>';
    }

    $sql = "SELECT * FROM product2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Tampilkan informasi akun pengguna
        $row = mysqli_fetch_assoc($result);
        echo '<div class="item4">';
        echo '<a href="/"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
        echo '<div class="textItems">';
        echo '<a href="/" class="T1">' . $row['name'] . '</a>';
        echo '<a href="/" class="T2">Rp.' . $row['price'] . '</a>';
        echo '</div>';
        echo '</div>';
    }

    // Tutup koneksi
    mysqli_close($conn);
    ?>
</div>
</div>
</div>
</body>
    </html>
