<?php

    include "connect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: account.php");
        exit();
    } else {
        header("Location: login.php?error=Incorrect_password.");
        exit();
    }
}

mysqli_close($conn);

?>