<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "stainless";

    //buat koneksi
     $conn = mysqli_connect($serverName, $userName, $password, $database);

    // //cek koneksi
    //  if (!$conn) {
    //      die("Connection Failed".mysqli_connect_error());
    // }
    //  else{
    //      echo "Connection Success";
    // }
?>