<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form login dan registrasi</title>
        <link rel="stylesheet" href="signUp.css">
        <link rel="icon" type="image/x-icon" href="gambar/favicon.png">
    </head>
    <body>   
        <div class="ContentWraper">
            <?php 
              include "navbar.php";
             ?>
            <div class="container">
            <input type="checkbox"  id="check">
             
            <div class="Register form">
                <h1>REGISTER</h1>
                <h4>NEW CUSTOMERS</h4>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, 
                     store multiple shipping addresses, view and track your orders in your account, and more.</p>
                    <form action="#">
                         <input type="text" placeholder="FIRST NAME">
                         <input type="text" placeholder="LAST NAME">
                         <input type="text" placeholder="EMAIL ADDRESS">
                         <input type="text" placeholder="PASSWORD">
                         <a href="index.php" class="button">SIGN UP</a>
                        </form>
                    </div>            
                    <div class="login form">
                        <h1>LOGIN</h1>
                        <h4>HAVE AN ACCOUNT?</h4>
                        <p>Please provide the email address and password associated with the account. 
                            If you're having trouble, please use the prompt below to reset your password.</p>
                            <a href= "Login.php"  class="button">
                      PROCEED TO LOGIN
                    </a>
                   </div>
                    </div>
                <?php 
              include "footer.php";
             ?>
        </div>
    </body>