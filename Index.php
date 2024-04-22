<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/LandingPage.css" />
  <title>stainless.com</title>
  <link rel="icon" type="image/x-icon" href="gambar/favicon.png">
  <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
</head>
<body>
  <!--Header--> 
<div class="ContentWraper">

<?php 
  include "navbar.php";
?>

  <!--end header-->
  <div class="container">
    <div class="slideshow">
<?php

   include "connect.php";

  $sql = "SELECT * FROM container WHERE idContainer=3";
  $result = mysqli_query($conn, $sql);
    
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<img src="gambar/' . $row['Container'] . '">';
  }


  $sql = "SELECT * FROM container WHERE idContainer=2";
  $result = mysqli_query($conn, $sql);
    
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<img src="gambar/' . $row['Container'] . '">';
  }

  mysqli_close($conn);
  
?>
    </div>
  </div>

  <div class="altCol">
    <a href="allWomens.php">
      <div class="altContainer">
        <img src="gambar/altWomens.jpg" alt="img" class="alter" >
        <button class="altButton">All Women's</button>
      </div>
    </a> 
    <a href="allAcc.php">
      <div class="altContainer">
        <img src="gambar/altAcc.jpg" alt="img" class="alter" >
        <button class="altButton">All Accesories</button>
      </div>
    </a>
    <a href="allMens.php">
      <div class="altContainer">
        <img src="gambar/altMens.jpg" alt="img" class="alter" >
        <button class="altButton">All Men's</button>
      </div> 
    </a>
  </div> 

  <div class="sellWarp">
    <div class="bestSell">
      <h1>==NEW PRODUCT==</h1>
    </div>
  </div>
  <div class="itemCon">
    <div class="itemsWarp">
<?php

  include "connect.php";
  $sql = "SELECT * FROM product WHERE idProduct=1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<div class="item">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T1">' . $row['name'] . '</a>';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
  }

  $sql = "SELECT * FROM product WHERE idProduct=5";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<div class="item">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T1">' . $row['name'] . '</a>';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
  }

  $sql = "SELECT * FROM product WHERE idProduct=2";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<div class="item">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T1">' . $row['name'] . '</a>';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
  }

  $sql = "SELECT * FROM product WHERE idProduct=6";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<div class="item">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T1">' . $row['name'] . '</a>';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="T2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
  }

  mysqli_close($conn);

?>
    </div>
  </div>
<?php 
  include "footer.php";
?>
</div>
</body>
</html>