<?php
// Menyambungkan ke database
include 'db.php'; // Pastikan Anda memiliki file db.php untuk menghubungkan ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Memeriksa apakah email sudah terdaftar
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Jika email sudah ada
        echo "<script>alert('Email sudah terdaftar!'); window.location.href='regis.php';</script>";
    } else {
        // Memeriksa apakah password dan konfirmasi password cocok
        if ($password === $confirm_password) {
            // Hash password sebelum disimpan untuk keamanan
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Menyimpan data pengguna baru ke database
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                // Pendaftaran berhasil
                echo "<script>alert('Pendaftaran berhasil!'); window.location.href='login.php';</script>";
            } else {
                // Terjadi kesalahan saat menyimpan data
                echo "<script>alert('Terjadi kesalahan saat pendaftaran. Silakan coba lagi.'); window.location.href='regis.php';</script>";
            }
        } else {
            // Jika password dan konfirmasi password tidak cocok
            echo "<script>alert('Password dan Konfirmasi Password tidak cocok!'); window.location.href='regis.php';</script>";
        }
    }
}
?>
