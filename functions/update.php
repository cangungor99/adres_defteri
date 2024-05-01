<?php
include('../db.php'); // Veritabanı bağlantı dosyasını dahil edin

function kaydiGuncelle($ad, $soyad, $yeniAd, $yeniSoyad, $yeniEmail, $yeniTel) {
    global $conn;
    // Önce mevcut kaydın ID'sini bul
    $sorgu = "SELECT id FROM person_data WHERE ad = ? AND soyad = ?";
    $stmt = $conn->prepare($sorgu);
    $stmt->bind_param("ss", $ad, $soyad);
    $stmt->execute();
    $sonuc = $stmt->get_result();
    $kayit = $sonuc->fetch_assoc();

    // Eğer kayıt bulunursa, güncelleme işlemine devam et
    if ($kayit) {
        $id = $kayit['id'];
        $guncellemeSorgusu = "UPDATE person_data SET ad=?, soyad=?, email=?, telefon=? WHERE id=?";
        $guncellemeStmt = $conn->prepare($guncellemeSorgusu);
        $guncellemeStmt->bind_param("ssssi", $yeniAd, $yeniSoyad, $yeniEmail, $yeniTel, $id);
        $guncellemeStmt->execute();
        if ($guncellemeStmt->affected_rows > 0) {
            echo "Kayıt başarıyla güncellendi!";
        } else {
            echo "Güncelleme yapılamadı veya kayıt zaten güncel.";
        }
        $guncellemeStmt->close();
    } else {
        echo "Güncellenecek kayıt bulunamadı.";
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $yeniAd = $_POST['yeni_ad']; // Formdaki yeni ad değeri
    $yeniSoyad = $_POST['yeni_soyad']; // Formdaki yeni soyad değeri
    $yeniEmail = $_POST['yeni_email']; // Formdaki yeni email değeri
    $yeniTel = $_POST['yeni_tel']; // Formdaki yeni telefon değeri

    kaydiGuncelle($ad, $soyad, $yeniAd, $yeniSoyad, $yeniEmail, $yeniTel);
}
?>
