<?php
session_start();

// Cek apakah user_id ada di session
if (!isset($_SESSION['user_id'])) {
    echo "User tidak terdeteksi.";
    exit();
}

$user_id = $_SESSION['user_id']; // Ambil user_id dari session

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "find_ur_horizons"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mengupdate data
$sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE user_id = ?";
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("sssi", $username, $email, $password, $user_id);
    if ($stmt->execute()) {
        echo "Profil berhasil diperbarui.";
        header("Location: ../profile.php");
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Terjadi kesalahan dalam persiapan statement: " . $conn->error;
}

$conn->close();
?>
