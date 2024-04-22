<?php
include "connect.php";
if (isset($_POST['query'])) {
    $query = $_POST['query'];
    
    // Query pencarian ke database (gantikan dengan tabel dan kolom Anda)
    $stmt = $pdo->prepare("SELECT * FROM product WHERE idProduct LIKE :query");
    $stmt->execute(['query' => "%$query%"]);
    
    $results = $stmt->fetchAll();

    if ($results) {
        foreach ($results as $result) {
            echo '<li>' . htmlspecialchars($result['column_name']) . '</li>';
        }
    } else {
        echo '<li>No results found</li>';
    }
}
?>