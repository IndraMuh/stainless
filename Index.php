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

  $sql = "SELECT * FROM container";
  $result = mysqli_query($conn, $sql);
    
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<img src="gambar/' . $row['Container1'] . '">';
      echo '<img src="gambar/' . $row['Container2'] . '">';
  }

  mysqli_close($conn);
  
?>
    </div>
  </div>

  <div class="altCol">
    <a href="/">
      <div class="altContainer">
        <img src="gambar/altWomens.jpg" alt="img" class="alter" >
        <button class="altButton">All Women's</button>
      </div>
    </a> 
    <a href="/">
      <div class="altContainer">
        <img src="gambar/altAcc.jpg" alt="img" class="alter" >
        <button class="altButton">All Women's</button>
      </div>
    </a>
    <a href="/">
      <div class="altContainer">
        <img src="gambar/altMens.jpg" alt="img" class="alter" >
        <button class="altButton">All Women's</button>
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

  $sql = "SELECT * FROM product1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
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
    $row = mysqli_fetch_assoc($result);
      echo '<div class="item2">';
      echo '<a href="/"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="/" class="T1">' . $row['name'] . '</a>';
      echo '<a href="/" class="T2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
  }

  $sql = "SELECT * FROM product3";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<div class="item3">';
      echo '<a href="/"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="/" class="T1">' . $row['name'] . '</a>';
      echo '<a href="/" class="T2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
  }

  $sql = "SELECT * FROM product4";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      echo '<div class="item4">';
      echo '<a href="/"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="/" class="T1">' . $row['name'] . '</a>';
      echo '<a href="/" class="T2">Rp.' . $row['price'] . '</a>';
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