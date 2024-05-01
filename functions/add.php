<?php
include('../db.php');
function ekle($ad, $soyad, $telefon, $email, $adres) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO person_data (ad, soyad, telefon, email, adres) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $ad, $soyad, $telefon, $email, $adres);
    $stmt->execute();
    $stmt->close();
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //form
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['tel'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];
    ekle($ad, $soyad, $telefon, $email, $adres);
    
    
    echo "Yeni kişi başarıyla eklendi!";}
?>
