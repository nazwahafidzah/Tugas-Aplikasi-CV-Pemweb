<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(62, 73, 127);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            text-align: left;
        }
        h2, h3 {
            color:rgb(0, 0, 0);
            border-bottom: 2px solid #1e3a8a;
            padding-bottom: 5px;
        }
        .section {
            margin-bottom: 20px;
        }
        .box {
            background: #ddd;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .content p {
            margin: 5px 0;
            font-size: 16px;
        }
        .contact p {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Curriculum Vitae</h2>
        
        <div id="biografi" class="section">
            <h3>About Me</h3>
            <div class="content">
                <p><strong>Nama Lengkap:</strong> <?php echo htmlspecialchars($_SESSION['nama'] ?? 'Data tidak tersedia'); ?></p>
                <p><strong>Tempat, tanggal lahir:</strong> <?php echo htmlspecialchars($_SESSION['tempat_lahir'] ?? 'Data tidak tersedia'); ?>, <?php echo htmlspecialchars($_SESSION['tanggal_lahir'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>

        <div id="pendidikan" class="section">
            <h3>Education</h3>
            <div class="content">
                <p><strong>SD:</strong> <?php echo htmlspecialchars($_SESSION['pendidikan_sd'] ?? 'Data tidak tersedia'); ?></p>
                <p><strong>SMP:</strong> <?php echo htmlspecialchars($_SESSION['pendidikan_smp'] ?? 'Data tidak tersedia'); ?></p>
                <p><strong>SMA:</strong> <?php echo htmlspecialchars($_SESSION['pendidikan_sma'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>

        <div id="skills" class="section">
            <h3>Skills</h3>
            <div class="content">
                <p><?php echo htmlspecialchars($_SESSION['skill_1'] ?? 'Data tidak tersedia'); ?></p>
                <p><?php echo htmlspecialchars($_SESSION['skill_2'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>

        <div id="kontak" class="section contact">
            <h3>Contact</h3>
            <div class="content">
                <p>WhatsApp: <?php echo htmlspecialchars($_SESSION['whatsapp'] ?? 'Data tidak tersedia'); ?></p>
                <p>Instagram: <?php echo htmlspecialchars($_SESSION['instagram'] ?? 'Data tidak tersedia'); ?></p>
                <p>Email: <?php echo htmlspecialchars($_SESSION['email'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>
    </div>
</body>
</html>