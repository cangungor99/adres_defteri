<?php

include('../db.php');

function sil($isim, $soyisim, $email) {
    global $conn;

    
    $sql = "SELECT id FROM person_data WHERE ad = ? OR soyad = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $isim, $soyisim, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        
        // Kişiyi sil
        $silme_sql = "DELETE FROM person_data WHERE id = ?";
        $sil_stmt = $conn->prepare($silme_sql);
        $sil_stmt->bind_param("i", $id);
        $sil_stmt->execute();
        
        echo "Kişi başarıyla silindi.";
    } else {
        echo "Kişi bulunamadı.";
    }

    
    $stmt->close();
    $sil_stmt->close();
}

// Form işleme
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $isim = $_POST['ad'];
    $soyisim = $_POST['soyad'];
    $email = $_POST['email'];

    
    sil($isim, $soyisim, $email);
}
?>
