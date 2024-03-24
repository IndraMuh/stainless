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
    <h2>Account Details</h2>
<?php

    include "connect.php";

    if(isset($_SESSION['email'])) {
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_SESSION['email'];
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "email: " . $row['email'] . "<br>";
            echo "Name: " . $row['firstname'] . " ". $row['lastname'] . "<br>";
            echo "<h3>Change Password</h3>";
            echo "<p><a href='logout.php'>Logout</a></p>";
            echo "</form>";
        } else {
            echo "User not found.";
    }

    mysqli_close($conn);

    } else {
            echo "You are not logged in.";
    }

?>
<?php

    include "footer.php";

?>  
</div>
</body>
</html>