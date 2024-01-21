<?php
// Simulasi database dengan array asosiatif
$siswaDatabase = [
    'Zamzami' => ['username' => 'Zamzami', 'email' => 'Zamzami@example.com', 'password' => password_hash('Ganteng', PASSWORD_DEFAULT), 'kehadiran' => 0],
    'siswa2' => ['username' => 'siswa2', 'email' => 'siswa2@example.com', 'password' => password_hash('password2', PASSWORD_DEFAULT), 'kehadiran' => 0],
    // Tambahkan data siswa lainnya sesuai kebutuhan
];

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameOrEmail = isset($_POST['username_or_email']) ? htmlspecialchars($_POST['username_or_email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    

    // Validasi berdasarkan username atau email
    $isLoginSuccessful = false;
    foreach ($siswaDatabase as $siswa) {
        if (($siswa['username'] === $usernameOrEmail || $siswa['email'] === $usernameOrEmail) && password_verify($password, $siswa['password'])) {
            $isLoginSuccessful = true;
            // Login berhasil, arahkan ke program absensi
            header("Location: absensi_siswa.php?username=" . $siswa['username']);
            exit();
        }
    }

    // Login gagal, tampilkan pesan error
    if (!$isLoginSuccessful) {
    $errorMessage = "Login gagal. Username atau password salah.";
    echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8');
}
}

?>
