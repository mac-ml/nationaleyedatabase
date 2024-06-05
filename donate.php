<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Göz Fotoğrafı Bağışla - Ulusal Göz Veritabanı</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h1>Göz Fotoğrafı Bağışla</h1>
    </header>
    <main>
        <section id="upload">
            <h2>Göz Fotoğrafınızı Yükleyin</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="eyePhoto">Göz Fotoğrafı:</label>
                <input type="file" name="eyePhoto" id="eyePhoto" accept="image/*" required>
                <button type="submit">Fotoğrafı Yükle</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Ulusal Göz Veritabanı. Tüm hakları saklıdır.</p>
    </footer>
</body>
</html>
