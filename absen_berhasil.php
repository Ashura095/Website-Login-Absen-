<?php
// Simulasi database dengan array asosiatif
$siswaDatabase = [
    'Zamzami' => ['username' => 'Zamzami', 'email' => 'siswa1@example.com', 'password' => password_hash('Ganteng', PASSWORD_DEFAULT), 'kehadiran' => 0, 'tanggal_lahir' => '2000-01-01', 'tanggal_kehadiran' => ''],
    'siswa2' => ['username' => 'siswa2', 'email' => 'siswa2@example.com', 'password' => password_hash('password2', PASSWORD_DEFAULT), 'kehadiran' => 0, 'tanggal_lahir' => '2001-02-02', 'tanggal_kehadiran' => ''],
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
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Simulasikan progress kehadiran siswa
    
    if (isset($_GET['absen'])) {
        $siswa['kehadiran']++;
        $siswa['tanggal_kehadiran'] = gmdate('Y-m-d H:i:s'); // Tambahkan tanggal dan waktu kehadiran
        echo "<p id = 'kehadiran'>*Kehadiran berhasil direkam pada " . $siswa['tanggal_kehadiran'] . ".</p>";
    } elseif (isset($_GET['reset_kehadiran'])) {
        // Reset kehadiran ke 0
        $siswa['kehadiran'] = 0;
        $siswa['tanggal_kehadiran'] = ''; // Reset tanggal dan waktu kehadiran
        echo "Reset kehadiran berhasil dilakukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen Berhasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display:grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(sekolah.png);
            background-repeat: no-repeat;
            background-size:100% 100% ;
        }

        .absen-berhasil-container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .kembali {
            text-align: center;
        }
        #kehadiran{
            text-align: center;
        }
        .kembali{
            font-style: none;
        }
    </style>
</head>
<body>
    <div class="absen-berhasil-container">
        <h2>Absen Berhasil</h2>
        <?php if (!empty($siswa['tanggal_kehadiran'])): ?>
            <p>Selamat <?php echo $siswa['username']; ?>, kamu telah absen! Total kehadiran: <?php echo $siswa['kehadiran']; ?> kali.</p>
        <?php endif; ?>
        <div class="kembali">
           <button> <a href="absensi_siswa.php?username=<?php echo $username; ?>">Kembali</a>
        </div>
    </div>
</body>
</html>
