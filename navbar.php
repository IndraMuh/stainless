<?php

    session_start();
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { 
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>  
<nav class="navWrapper">
    <div class="navText">
        <li><a href="/">MENS</a></li>   
        <li><a href="/">WOMENS</a></li>   
        <li><a href="/">ACCESSORIES</a></li>    
    </div>
    <div class="logo">        
        <p><a href="Index.php"><img src="gambar/logo.png" alt="logo"/></a></p>
    </div>
    <div class="navIcon">
        <li><a href="/"><i class="fa-solid fa-magnifying-glass" style="color: #fff;"></i></a></li>
        <li><a href="account.php"><i class="fa-regular fa-user" style="color: #fff;"></i></a></li>
        <li><a href="/"><i class="fa-solid fa-bag-shopping" style="color: #fff;"></i></a></li>
    </div> 
</nav>
</body>
</html> ';

} else {
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>        
<nav class="navWrapper">
    <div class="navText">
        <li><a href="/">MENS</a></li>   
        <li><a href="/">WOMENS</a></li>   
        <li><a href="/">ACCESSORIES</a></li>    
    </div>
    <div class="logo">        
        <p><a href="Index.php"><img src="gambar/logo.png" alt="logo"/></a></p>
    </div>
    <div class="navIcon">
        <li><a href="/"><i class="fa-solid fa-magnifying-glass" style="color: #fff;"></i></a></li>
        <li><a href="login.php"><i class="fa-regular fa-user" style="color: #fff;"></i></a></li>
        <li><a href="/"><i class="fa-solid fa-bag-shopping" style="color: #fff;"></i></a></li>
    </div> 
</nav>   
</body>
</html> ';
}
?>