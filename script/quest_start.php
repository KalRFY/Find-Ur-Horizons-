<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "find_ur_horizons"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Pastikan session telah dimulai dan user_id tersedia
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "User tidak terdeteksi.";
    exit();
}

$user_id = $_SESSION['user_id']; // Ambil user_id dari session

// Reset semua parameter menjadi 0
$sql_reset = "UPDATE jawaban SET 
    aksi = 0, 
    plan = 0, 
    kreatif = 0, 
    idealisme = 0, 
    fleksibilitas = 0, 
    simpati = 0, 
    sosial = 0 
    WHERE user_id = ?";

// Persiapkan dan eksekusi statement
$stmt_reset = $conn->prepare($sql_reset);
if ($stmt_reset) {
    $stmt_reset->bind_param("i", $user_id);
    if ($stmt_reset->execute()) {
        header("Location: quest1.php");
    } else {
        echo "Terjadi kesalahan saat mereset parameter: " . $stmt_reset->error;
    }
    $stmt_reset->close();
} else {
    echo "Terjadi kesalahan dalam persiapan statement reset: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
