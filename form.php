<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['tempat_lahir'] = $_POST['tempat_lahir'];
    $_SESSION['tanggal_lahir'] = $_POST['tanggal_lahir'];
    $_SESSION['pendidikan_sd'] = $_POST['pendidikan_sd'];
    $_SESSION['pendidikan_smp'] = $_POST['pendidikan_smp'];
    $_SESSION['pendidikan_sma'] = $_POST['pendidikan_sma'];
    $_SESSION['skill_1'] = $_POST['skill_1'];
    $_SESSION['skill_2'] = $_POST['skill_2'];
    $_SESSION['whatsapp'] = $_POST['whatsapp'];
    $_SESSION['instagram'] = $_POST['instagram'];
    $_SESSION['email'] = $_POST['email'];
    
    header("Location: cv.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Data CV</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: hsl(0, 0.00%, 100.00%); display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 400px; }
        h2 { text-align: center; color: #1e3a8a; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #1e3a8a; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; width: 100%; margin-top: 15px; }
        button:hover { background: #162d5e; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Isi Data Pribadi</h2>
        <form method="POST">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>

            <label>Pendidikan SD:</label>
            <input type="text" name="pendidikan_sd" required>

            <label>Pendidikan SMP:</label>
            <input type="text" name="pendidikan_smp" required>

            <label>Pendidikan SMA:</label>
            <input type="text" name="pendidikan_sma" required>

            <label>Skill 1:</label>
            <input type="text" name="skill_1" required>

            <label>Skill 2:</label>
            <input type="text" name="skill_2" required>

            <label>WhatsApp:</label>
            <input type="text" name="whatsapp" required>

            <label>Instagram:</label>
            <input type="text" name="instagram" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Simpan & Lihat CV</button>
        </form>
    </div>
</body>
</html>
