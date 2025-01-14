<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login dan registrasi</title>
    <link rel="icon" type="image/x-icon" href="gambar/favicon.png">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>             
    <!--Header--> 
<div class="ContentWraper">
<?php 

    include "navbar.php";

    if (isset($_GET['error']) && $_GET['error'] == 'Incorrect_password.') {
        echo "<p style='color: red;'>Incorrect username or password, User not found.</p>";
    }
?>
    <div class="container">
        <input type="checkbox"  id="check">
            <div class="Login form">
                <h1>LOGIN</h1>
                <h4>REGISTERED CUSTOMERS</h4>
                <p>Please provide the email address and password associated with the account. 
                If you're having trouble, please use the prompt below to reset your password.</p>
                <form action="processLogin.php" method="post">
                    <input type="email" name="email" placeholder="EMAIL ADDRESS" required>
                    <input type="password"  name="password"placeholder="PASSWORD" required>
                    <button class="submit" type="submit">SIGN IN</button>
                </form>
            </div>
            <div class="register form">
                <h1>REGISTER</h1>
                <h4>NEED AN ACCOUNT?</h4>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, 
                store multiple shipping addresses, view and track your orders in your account, and more.</p>                   
                <a href= "signUp.php"  class="button">PROCEED TO REGISTER</a>
            </div>
        </div>
<?php 
    include "footer.php";
?>
</div>
</body>