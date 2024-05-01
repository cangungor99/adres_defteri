<?php

include('../db.php');

function search($ad, $soyad, $email, $tel, $adres) {
    global $conn;
    $query = "SELECT * FROM person_data WHERE ad LIKE ? OR soyad LIKE ? OR email LIKE ? OR telefon LIKE ? OR adres LIKE ?";
    $stmt = $conn->prepare($query);
    $likeAd = "%".$ad."%";
    $likeSoyad = "%".$soyad."%";
    $likeEmail = "%".$email."%";
    $likeTel = "%".$tel."%";
    $likeAdres = "%".$adres."%";
    $stmt->bind_param("sssss", $likeAd, $likeSoyad, $likeEmail, $likeTel, $likeAdres);
    $stmt->execute();
    $result = $stmt->get_result();

    // display table
    echo "<table>";
    echo "<tr><th>Ad</th><th>Soyad</th><th>Email</th><th>Telefon</th><th>Adres</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['ad']) . "</td>";
        echo "<td>" . htmlspecialchars($row['soyad']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['telefon']) . "</td>";
        echo "<td>" . htmlspecialchars($row['adres']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $stmt->close();
}

//form verileri
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST['ad'] ?? '';
    $soyad = $_POST['soyad'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $adres = $_POST['adres'] ?? '';

    search($ad, $soyad, $email, $tel, $adres);
}
?>
