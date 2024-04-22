<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="gambar/favicon.png">
    <link rel="stylesheet" href="css/account.css" />
    <title>Account Page</title>
</head>
<body>
<div class="ContentWraper">
<?php

    include "navbar.php";

?>
<?php

    include "connect.php";

    if(isset($_SESSION['email'])) {
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_SESSION['email'];
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        echo '<nav class="anWrapper">';
        echo '<div class="an">';
        echo '<li><p>ACCOUNT DETAILS</p></li>';   
        echo '<li><a href="addreses.php">ADDRESSES</a></li>';  
        echo '</div>';
        echo '<div class="anSignout">';
        $row = mysqli_fetch_assoc($result);
        echo '<p class="T1">' . $row['email'] . '</p>';
        echo '<p><a href="logout.php">SIGN OUT</a></p>';
        echo '</div>';
        echo '</nav>';
        echo '<div class="content">';
        echo '<div class="tag">';
        echo '<h2>ACCCOUNT DETAILS</h2>';
        echo '</div>';
        echo '<div class="nm">'; 

        if (mysqli_num_rows($result) > 0) {
            echo '<p>' . $row['firstname'] . ' ' . $row['lastname'] . '</p>';
            echo $row['email'] . "<br>";
        } else {
            echo "User not found.";
    }

    mysqli_close($conn);

    } else {
            echo '<div class="not">';
            echo "You are not logged in.";
            echo '</div>';
    }
?>
</div>
</div>
<?php

    include "footer.php";

?>  
</div>
</body>
</html>