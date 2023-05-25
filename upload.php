<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = 'pics/'; // Kaydetmek istediğiniz klasörün yolu
    $targetFile = $targetDir . basename($_FILES['picture']['name']); // Kaydetmek istediğiniz dosyanın tam yolu
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Dosya uzantısını alın

    // Sadece JPG ve PNG dosyalarını kabul edin
    if ($imageFileType == 'jpg' || $imageFileType == 'jpeg' || $imageFileType == 'png') {
        // Dosyayı belirtilen klasöre taşıyın
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $targetFile)) {
            echo 'Dosya başarıyla yüklendi.';
        } else {
            echo 'Dosya yüklenirken bir hata oluştu.';
        }
    } else {
        echo 'Sadece JPG ve PNG dosyaları kabul edilir.';
    }
}
?> 