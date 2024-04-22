<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/detail.css" />
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

<div class="tagCon">
<div class="tag">
<?php
  include "connect.php";
  $id= $_GET['id'];

  $sql = "SELECT * FROM product WHERE idProduct = '$id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    echo '<h6 class="tag1">-' . $row['name'] . '</h6>';

    echo '</div>';
    echo '</div>';

    echo '<div class="con">';
    echo '<div class="detail">';
    echo '<div class="slides">';
 
    echo '<div class="slide">';
    echo '<img src="gambar/' . $_GET['i1'] . '">';
    echo '</div>';
    echo '<div class="slide">';
    echo    '<img src="gambar/' . $_GET['i2'] . '" alt="">';
    echo '</div>';
    echo '<div class="slide">';
    echo    '<img src="gambar/' . $_GET['i3'] . '" alt="">';
    echo '</div>';
    echo '<div class="slide">';
    echo    '<img src="gambar/' . $_GET['i4'] . '" alt="">';
    echo '</div>';

    echo '<div class="navigation">';
    echo '    <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>';
    echo '    <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="tail">';

 echo '<div class="tittle">';
 echo '<h1 class="T1">' . $row['name'] . '</h1>';
 echo '<h4 class="T2">Rp' . $row['price'] . '</h4>';
 
 echo '<div class="conDesc">';
 echo '<div class="backDesc">';
 echo '<p>' . $row['backDesc'] . '</p>';
 echo '</div>';
 echo '<div class="compDesc">';
 echo '<p>' . $row['compDesc'] . '</p>';
 echo '</div>';
 echo '<div class="sizeDesc">';
 echo '<p>' . $row['sizeDesc'] . '</p>';
 echo '</div>';
 echo '</div>';
 echo '<div class="sizeSelector" id="sizeSelector">';
 echo '<button class="sizeButton" title="Stock: ' . $row['stockM'] . '" value="M">M</button>';
 echo '<button class="sizeButton" title="Stock: ' . $row['stockL'] . '" value="L">L</button>';
 echo '<button class="sizeButton" title="Stock: ' . $row['stockXL'] . '" value="XL">XL</button>';
 echo '</div>';

 echo '<div class="btnCon">';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { 
 echo '<button id="addToCartBtn" class="add" onclick="addToCart()" >ADD TO CART</button>';
   
    }else{
 echo '<a href="login.php"><button class="add" onclick="">ADD TO CART</button></a>';  
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}
    ?>

<div class="reCon">
  <div class="re">
    <h1 class="recom">Recommended Products</h1>
  </div>
  </div>

    <div class="itemsWarp">
<?php

  include "connect.php";
  $id= $_GET['id'];

  $sql = "SELECT * FROM product WHERE idProduct != '$id' AND idProduct > '$id' ORDER BY idProduct ASC LIMIT 2";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="item">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="t1">' . $row['name'] . '</a>';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="t2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
    }
    ;
  }

  $sql = "SELECT * FROM product WHERE idProduct != '$id' AND idProduct < '$id' ORDER BY idProduct DESC LIMIT 2";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="item">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '"><img src="gambar/' . $row['imageFront'] . '" onmouseover="this.src=\'gambar/' . $row['imageBack'] . '\';" onmouseout="this.src=\'gambar/' . $row['imageFront'] . '\';"/></a>';
      echo '<div class="textItems">';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="t1">' . $row['name'] . '</a>';
      echo '<a href="detail.php?jenis=' . $row['jenis'] . '&id=' . $row['idProduct'] . '&name=' . $row['name'] . '&price=' . $row['price'] . '&i1=' . $row['imageFront'] . '&i2=' . $row['imageBack'] . '&i3=' . $row['imageLeft'] . '&i4=' . $row['imageRight'] . '" class="t2">Rp.' . $row['price'] . '</a>';
      echo '</div>';
      echo '</div>';
    }
    ;
  }

  mysqli_close($conn);

?>
  </div>

<script>
 var slideIndex = 1;
 showSlides(slideIndex);
 
 function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
 var i;
 var slides = document.getElementsByClassName("slide");
 if (n > slides.length)
{
  slideIndex = 1;
}
if (n < 1)
{
 slideIndex = slides.length
}
for (i = 0; i < slides.length; i++)
{
 slides[i].style.display = "none";
}
 slides[slideIndex-1].style.display = "block";
}

function addToCart() {
    var productName = '<?php echo $_GET['name']; ?>';
    var productPrice = '<?php echo $_GET['price']; ?>';
    var productI1 = '<?php echo $_GET['i1']; ?>';
    var selectedSize = document.querySelector(".sizeButton.selected") ? document.querySelector(".sizeButton.selected").value : null;

    if (!selectedSize) {
        alert('Silakan pilih ukuran terlebih dahulu.');
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if (response.success) {
 
                var xhrAddToCart = new XMLHttpRequest();
                xhrAddToCart.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert('Produk berhasil ditambahkan ke keranjang belanja!');
                    }
                };
                xhrAddToCart.open("GET", "add_to_cart.php?name=" + encodeURIComponent(productName) + "&price=" + encodeURIComponent(productPrice) + "&i1=" + encodeURIComponent(productI1) + "&size=" + encodeURIComponent(selectedSize), true);
                xhrAddToCart.send();
            } else {
                alert('Ukuran ' + selectedSize + ' tidak tersedia atau stok sudah habis.');
            }
        }
    };
    xhr.open("GET", "check_stock.php?id=<?php echo $_GET['id']; ?>&size=" + encodeURIComponent(selectedSize), true);
    xhr.send();
}


var sizeButtons = document.getElementsByClassName("sizeButton");

for (var i = 0; i < sizeButtons.length; i++) {
  sizeButtons[i].addEventListener("click", function() {

    for (var j = 0; j < sizeButtons.length; j++) {
      sizeButtons[j].classList.remove("selected");
    }
    this.classList.add("selected");
    
  });
}

</script>

<?php 
  include "footer.php";
?>
</div>
</body>
</html>