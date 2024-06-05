<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['eyePhoto']) && $_FILES['eyePhoto']['error'] == 0) {
        $uploadDir = '../uploads/';
        $uploadFile = $uploadDir . basename($_FILES['eyePhoto']['name']);
        
        if (move_uploaded_file($_FILES['eyePhoto']['tmp_name'], $uploadFile)) {
            echo "Fotoğraf başarıyla yüklendi.";
        } else {
            echo "Fotoğraf yüklenirken bir hata oluştu.";
        }
    } else {
        echo "Geçersiz dosya ya da yükleme hatası.";
    }
}
?>
