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

// Tentukan nilai berdasarkan pilihan
$parameter_changes = [
    'aksi' => 0,
    'plan' => 0,
    'kreatif' => 0,
    'idealisme' => 0,
    'fleksibilitas' => 0,
    'simpati' => 0,
    'sosial' => 0
];

if (isset($_POST['choice'])) {
    switch ($_POST['choice']) {
        case 'a':
            $parameter_changes = [
                'aksi' => 10,
                'plan' => -5,
                'kreatif' => 0,
                'idealisme' => 0,
                'fleksibilitas' => 0,
                'simpati' => 0,
                'sosial' => 0
            ];
            header("Location: ../quiz/quest17.php");
            break;
        case 'b':
            $parameter_changes = [
                'aksi' => 0,
                'plan' => 5,
                'kreatif' => 0,
                'idealisme' => 5,
                'fleksibilitas' => 0,
                'simpati' => 0,
                'sosial' => 0
            ];
            header("Location: ../quiz/quest17.php");
            break;
        default:
            echo "Pilihan tidak valid.";
            exit();
    }
} else {
    echo "Tidak ada pilihan yang dipilih.";
    exit();
}

// Buat query untuk mengupdate parameter berdasarkan user_id
$sql = "UPDATE jawaban SET 
    aksi = aksi + ?, 
    plan = plan + ?, 
    kreatif = kreatif + ?, 
    idealisme = idealisme + ?, 
    fleksibilitas = fleksibilitas + ?, 
    simpati = simpati + ?, 
    sosial = sosial + ?
    WHERE user_id = ?";

// Persiapkan dan eksekusi statement
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param(
        "iiiiiiii", 
        $parameter_changes['aksi'],
        $parameter_changes['plan'],
        $parameter_changes['kreatif'],
        $parameter_changes['idealisme'],
        $parameter_changes['fleksibilitas'],
        $parameter_changes['simpati'],
        $parameter_changes['sosial'],
        $user_id
    );

    if ($stmt->execute()) {
        echo "Data berhasil disimpan";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Terjadi kesalahan dalam persiapan statement: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
