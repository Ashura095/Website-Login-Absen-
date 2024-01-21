<?php
// Simulasi database dengan array asosiatif
$siswaDatabase = [
    'Zamzami' => ['username' => 'Zamzami', 'email' => 'Zamzami@example.com', 'password' => password_hash('Ganteng', PASSWORD_DEFAULT), 'kehadiran' => 0,  'tanggal_kehadiran' => ''],
    'siswa2' => ['username' => 'siswa2', 'email' => 'siswa2@example.com', 'password' => password_hash('password2', PASSWORD_DEFAULT), 'kehadiran' => 0, 'tanggal_kehadiran' => ''],
    // Tambahkan data siswa lainnya sesuai kebutuhan
];

// Ambil data username dari URL
$username = isset($_GET['username']) ? $_GET['username'] : '';

// Periksa apakah username valid
if (!isset($siswaDatabase[$username])) {
    echo "Username tidak valid.";
    exit();
}

// Ambil data siswa dari simulasi database
$siswa = $siswaDatabase[$username];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Siswa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display:grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(sekolah.png);
            background-repeat: no-repeat;
            background-size:100% 100% ;
        }

        .absensi-container {
            max-width: 400px;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-family: 'Gochi Hand', cursive;
            font-size: 45px;
        }

        p {
            margin-bottom: 10px;
            text-align: center;
        }

        .absensi-container button, .absensi-container a {
            display: block;
            width: 400px;
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        

        .absensi-container a {
            background-color: #28a745;
        }

        .absensi-container button:hover, .absensi-container a:hover {
            opacity: 0.8;
        }

        .kluar {
            list-style: none;
            text-align: center;
        }
        #amanat{
             font-family: 'Gochi Hand', cursive;
            font-size: 20px;
        }
        #selamat{
            font-family: 'Gochi Hand', cursive;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="absensi-container">
        <h2>Absensi Siswa</h2>
        <p id="selamat">Selamat datang, <?php echo $siswa['username']; ?>!</p>
        <p id="amanat">"Pendidikan adalah kunci keberhasilan masa depanmu. Setiap hari di sekolah adalah langkah kecil menuju impianmu. Jangan lewatkan satu pun"🎓</p>
        <br>
        <?php if (!empty($siswa['tanggal_kehadiran'])): ?>
            <p>Tanggal Kehadiran Terakhir: <?php echo $siswa['tanggal_kehadiran']; ?></p>
        <?php endif; ?>
        <a href="absen_berhasil.php?username=<?php echo $username; ?>&absen">Absen</a>
        <!-- Form reset kehadiran -->
        <a onclick="Mapel()">Mapel</a>
        <a id="kluar" href="login.php">Keluar</a>
    </div>
    <script>
        function Mapel(){
            alert("Fitur ini Belum tersedia 😁🙏");
        }
    </script>
</body>
</html>
