<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/allAcc.css" />
  <title>stainless.com</title>
  <link rel="icon" type="image/x-icon" href="gambar/favicon.png">
</head>
<body>
  <!--Header--> 
<div class="ContentWraper">

<?php 
  include "navbar.php";
?>
<div class="tagCon">
  <div class="tag">
    <h6 class="tag1">-ALL ACCESSORIES</h6>
    <h1 class="tag2">ALL ACCESSORIES</h1>
  </div>
  </div>
<div class="itemCon">
    <div class="itemsWarp">
<?php

  include "connect.php";

  $sql = "SELECT * FROM product WHERE jenis='acc'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="item">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"class="T1">' . $row['name'] . '</a>';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"class="T2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
    }
    ;
  }

  mysqli_close($conn);

?>
    </div>
  </div>
<?php 
  include "footer.php";
?>
</div>