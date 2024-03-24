<?php

    include "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email= $_POST['email'];
        $password = $_POST['password'];

        $check_email = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($check_email);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signUp.php?error=email_exists");
            exit();
        } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";

        if (mysqli_query($conn, $insert_query)) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
        }   
    }

    $conn->close();
    
?>