<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "find_ur_horizons";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil parameter dari database
session_start();

// Ambil user_id dari session
if (!isset($_SESSION['user_id'])) {
    die("User ID tidak ditemukan dalam session.");
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT aksi, plan, kreatif, idealisme, fleksibilitas, simpati, sosial FROM jawaban WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ambil baris
    $row = $result->fetch_assoc();
    
    // Tetapkan parameter ke variabel
    $parameters = [
        'aksi' => $row['aksi'],
        'plan' => $row['plan'],
        'kreatif' => $row['kreatif'],
        'idealisme' => $row['idealisme'],
        'fleksibilitas' => $row['fleksibilitas'],
        'simpati' => $row['simpati'],
        'sosial' => $row['sosial']
    ];
    
    // Tentukan profil kepribadian
    $personalities = [
        'Knight' => ['aksi' => 1, 'plan' => 0, 'kreatif' => 0, 'idealisme' => 1, 'fleksibilitas' => 1, 'simpati' => 0, 'sosial' => 1],
        'Archer' => ['aksi' => 1, 'plan' => 1, 'kreatif' => 0, 'idealisme' => 1, 'fleksibilitas' => 0, 'simpati' => 1, 'sosial' => 0],
        'Sorcerer' => ['aksi' => 0, 'plan' => 1, 'kreatif' => 1, 'idealisme' => 1, 'fleksibilitas' => 1, 'simpati' => 0, 'sosial' => 0],
        'General' => ['aksi' => 1, 'plan' => 0, 'kreatif' => 0, 'idealisme' => 1, 'fleksibilitas' => 1, 'simpati' => 1, 'sosial' => 1],
        'Thief' => ['aksi' => 1, 'plan' => 1, 'kreatif' => 1, 'idealisme' => 0, 'fleksibilitas' => 1, 'simpati' => 0, 'sosial' => 0],
        'Healer' => ['aksi' => 0, 'plan' => 1, 'kreatif' => 1, 'idealisme' => 1, 'fleksibilitas' => 0, 'simpati' => 1, 'sosial' => 1],
        'Alchemist' => ['aksi' => 1, 'plan' => 1, 'kreatif' => 1, 'idealisme' => 1, 'fleksibilitas' => 0, 'simpati' => 0, 'sosial' => 1]
    ];

    // Variabel untuk mencari skor tertinggi
    $max_score = -1;
    $personality = null;

    // Hitung skor untuk setiap kepribadian
    foreach ($personalities as $p => $scores) {
        $score = 0;
        foreach ($parameters as $param => $value) {
            // Meningkatkan skor jika nilai parameter >= 25
            $score += $scores[$param] * ($value >= 25 ? 1 : 0);
        }
        // Output diagnostik
        echo "Personality: $p, Score: $score\n";
        
        // Cek apakah kepribadian saat ini memiliki skor tertinggi
        if ($score > $max_score) {
            $max_score = $score;
            $personality = $p;
        }
    }

    // Output diagnostik
    echo "Selected Personality: $personality\n";

    // Redirect berdasarkan kepribadian
    switch ($personality) {
        case 'Knight':
            header("Location: ../result/knight.php");
            break;
        case 'Archer':
            header("Location: ../result/archer.php");
            break;
        case 'Sorcerer':
            header("Location: ../result/sorcerer.php");
            break;
        case 'General':
            header("Location: ../result/general.php");
            break;
        case 'Thief':
            header("Location: ../result/thief.php");
            break;
        case 'Healer':
            header("Location: ../result/healer.php");
            break;
        case 'Alchemist':
            header("Location: ../result/alchemist.php");
            break;
        default:
            header("Location: ../result/knight.php");
            break;
    }

} else {
    echo "No parameters found for the user.";
}

// Tutup koneksi
$conn->close();
?>
