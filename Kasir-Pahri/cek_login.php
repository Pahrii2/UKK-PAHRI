<?php
// Mulai sesi
session_start();

// Hubungkan ke database
require_once 'koneksi.php';

// Cek apakah data dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap input dari form login
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Enkripsi password menggunakan md5
    $hashedPassword = md5($password);

    // Gunakan prepared statement untuk keamanan
    $stmt = $koneksi->prepare("SELECT * FROM petugas WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $hashedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    // Periksa apakah pengguna ditemukan
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Simpan data user ke session
        $_SESSION['username'] = $user['username'];
        $_SESSION['level'] = $user['level'];

        // Arahkan pengguna ke halaman sesuai levelnya
        switch ($user['level']) {
            case '1':
                header("Location: administrator/index.php");
                break;
            case '2':
                header("Location: petugas/index.php");
                break;
            default:
                header("Location: index.php?pesan=gagal");
                break;
        }
    } else {
        // Login gagal
        header("Location: index.php?pesan=gagal");
    }

    // Tutup statement
    $stmt->close();
} else {
    // Akses langsung ke file tanpa post
    header("Location: index.php");
}
?>