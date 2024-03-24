<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login dan registrasi</title>
    <link rel="stylesheet" href="css/signUp.css">
    <link rel="icon" type="image/x-icon" href="gambar/favicon.png">
</head>
<body>   
<div class="ContentWraper">
<?php 

include "navbar.php";
             
?>
<?php

    if (isset($_GET['error']) && $_GET['error'] == 'email_exists') {
        echo "<p style='color: red;'>Email address already exists. Please use a different email address.</p>";
    }

?>
    <div class="container">
        <input type="checkbox"  id="check">             
        <div class="Register form">
            <h1>REGISTER</h1>
            <h4>NEW CUSTOMERS</h4>
            <p>By creating an account with our store, you will be able to move through the checkout process faster, 
            store multiple shipping addresses, view and track your orders in your account, and more.</p>
                <form action="registerProcess.php" method="post">
                    <input type="text" name="firstname" placeholder="FIRST NAME" required>
                    <input type="text" name="lastname" placeholder="LAST NAME" required>
                    <input type="email" name="email" placeholder="EMAIL ADDRESS" required>
                    <input type="password"  name="password"placeholder="PASSWORD" required>
                    <button class="submit" type="submit">SIGN UP</button>
                </form>
        </div>       

        <div class="login form">
            <h1>LOGIN</h1>
            <h4>HAVE AN ACCOUNT?</h4>
            <p>Please provide the email address and password associated with the account. 
            If you're having trouble, please use the prompt below to reset your password.</p>
            <a href= "Login.php"  class="button" >PROCEED TO LOGIN</a>
        </div>
    </div>
<?php 

    include "footer.php";

?>
</div>
</body>
</html>