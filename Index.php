<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LandingPage.css" />
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
    <img src="gambar/image1.jpg">
    <img src="gambar/image2.webp">
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
     <h1> BEST SELLING </h1>
    </div>
   </div>
   <div class="itemsWarp">
    <div class="item1">
     <a href="/"><img src="gambar/Mens2Front.webp" onmouseover="this.src='gambar/Mens2Back.webp';" onmouseout="this.src='gambar/Mens2Front.webp';"/></a>
     <p1 class="T1">PRODUCT NAME 35"</p1>
     <p2 class="T2">Rp.150.000</p2>
    </div> 
    <div class="item2">
     <a href="/"><img src="gambar/Womens1Front.webp" onmouseover="this.src='gambar/Womens1Back.webp';" onmouseout="this.src='gambar/Womens1Front.webp';"/></a>
     <p1 class="T1">PRODUCT NAME 35"</p1>
     <p2 class="T2">Rp.150.000</p2>
    </div> 
    <div class="item3">
     <a href="/"><img src="gambar/Mens1Front.webp" onmouseover="this.src='gambar/Mens1Back.webp';" onmouseout="this.src='gambar/Mens1Front.webp';"/></a>
     <p1 class="T1">PRODUCT NAME 35"</p1>
     <p2 class="T2">Rp.150.000</p2>
    </div> 
    <div class="item4">
     <a href="/"><img src="gambar/Womens2Front.webp" onmouseover="this.src='gambar/Womens2Back.webp';" onmouseout="this.src='gambar/Womens2Front.webp';"/></a>
     <p1 class="T1">PRODUCT NAME 35"</p1>
     <p2 class="T2">Rp.150.000</p2>
   </div> 
  </div>
  <?php 
 include "footer.php";
 ?>
 </div> 
</body>
</html>