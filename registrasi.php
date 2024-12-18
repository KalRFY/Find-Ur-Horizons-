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

// Proses registrasi jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string(trim($_POST['username']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = trim($_POST['password']); // Password tidak di-hash dalam contoh ini

    // Query untuk memeriksa apakah username atau email sudah terdaftar
    $check_query = "SELECT user_id FROM users WHERE username = ? OR email = ?";
    $stmt_check = $conn->prepare($check_query);
    $stmt_check->bind_param("ss", $username, $email);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        echo "Username atau email sudah terdaftar. Silakan gunakan username atau email lain.";
        $stmt_check->close();
    } else {
        $stmt_check->close();

        // Query untuk menyimpan pengguna baru
        $insert_query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt_insert = $conn->prepare($insert_query);
        $stmt_insert->bind_param("sss", $username, $email, $password); // Password tidak di-hash dalam contoh ini

        if ($stmt_insert->execute()) {
            // Ambil user_id yang baru saja dimasukkan
            $user_id = $conn->insert_id;

            // Masukkan data ke dalam tabel jawaban
            $aksi = 0;
            $plan = 0;
            $kreatif = 0;
            $fleksibilitas = 0;
            $idealisme = 0;
            $simpati = 0;
            $sosial = 0;

            $insert_params_query = "INSERT INTO jawaban (user_id, aksi, plan, kreatif, fleksibilitas, idealisme, simpati, sosial) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt_insert_params = $conn->prepare($insert_params_query);
            $stmt_insert_params->bind_param("iiiiiiii", $user_id, $aksi, $plan, $kreatif, $fleksibilitas, $idealisme, $simpati, $sosial);

            if ($stmt_insert_params->execute()) {
                echo "Registrasi berhasil!";
                header("Location: login.php"); // Redirect ke halaman login setelah registrasi berhasil
                exit();
            } else {
                echo "Terjadi kesalahan saat memasukkan parameter pengguna: " . $stmt_insert_params->error;
            }

            $stmt_insert_params->close();
        } else {
            echo "Terjadi kesalahan saat melakukan registrasi: " . $stmt_insert->error;
        }

        $stmt_insert->close();
    }
}

// Tutup koneksi
$conn->close();
?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/registrasi.css">
  <title>Document</title>
</head>
<body>
    <header class="d-flex col-12 text-white align-items-center justify-content-between">
        <logo class="text col-3">
            <a href="" class="text-decoration-none">FIND UR <br>HORIZON</a>
        </logo>
        <nav class="col-6 text-end">
            <a href="quiz.html">Quiz</a>
            <a href="character/knight.php">Character</a>
            <a href="subscription.html">Subscription</a>
        </nav>
        <div class="right-box d-flex gap-5">
            <a href="login.php" class="text-decoration-none text-white fw-bolder col-3 text-end">Login</a>
            <a href="registrasi.php" class="text-decoration-none text-white fw-bolder col-3 text-end">Signup</a>
        </div>
    </header>
    <section>
        <div class="container-fluid d-flex flex-column align-items-center text-white">
            <h1 class="fw-bolder mb-5">Sign Up</h1>
            <form action="registrasi.php" method="post" class="fw-bold">
                <div class="input d-flex flex-column mb-3">
                    <label for="username" class="mb-1">Username</label>
                    <i class="fa fa-user text-dark"></i>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input d-flex flex-column mb-3">
                    <label for="email" class="mb-1">Email</label>
                    <i class="fa fa-envelope text-dark"></i>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input d-flex flex-column">
                    <label for="password" class="mb-1">Password</label>
                    <i class="fa fa-lock text-dark"></i>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="separator-container">
                    <div class="separator-line"></div>
                    <div class="separator-text">or</div>
                    <div class="separator-line"></div>
                </div>
                <div class="social-btn">
                    <img src="img/google-logo.png" alt="">
                    <img src="img/fb-logo.png" alt="">
                </div>
                <div class="login-btn d-flex justify-content-between align-items-center">
                    <p style="font-family: 'Poppins';" class="fw-light p-0 m-0">Already have an Account? <a href="login.php" style="font-family: 'Poppins'; color: #D3B581;">Login</a></p>
                    <button type="submit" style="font-family: 'Poppins';">Login</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
    <div class="container-fluid">
        <div class="d-flex justify-content-center footer-container">
            <div class="col-1 footer-col d-flex flex-column">
                <h3>Download</h3>
                <a href="">Latest Find Ur Horizons!</a>
                <a href="">Find Ur Horizons!</a>
                <a href="">Release Dates</a>
                <a href="">New Updates</a>
                <a href="">Requirements</a>
                <a href="">New Version</a>
                <a href="">Previous Version</a>
            </div>
            <div class="col-1 footer-col d-flex flex-column">
                <h3>Social Media</h3>
                <a href="">Instagram</a>
                <a href="">Twitter</a>
                <a href="">Youtube</a>
                <a href="">Tiktok</a>
                <a href="">Facebook</a>
            </div>
            <div class="col-1 footer-col d-flex flex-column">
                <h3>About Us</h3>
                <a href="">Process Making</a>
                <a href="">Find Ur Horizon</a>
                <a href="">New Article</a>
                <a href="">Learn Psychology</a>
                <a href="">Foundation</a>
                <a href="">Find Ur Horizons!</a>
                <a href="">Institute</a>
                <a href="">Our License</a>
                <a href="">Logo & Trademark</a>
            </div>
            <div class="col-1 footer-col d-flex flex-column justify-content-between">
                <div class="row">
                    <h3>Organization</h3>
                    <a href="">People</a>
                    <a href="">Jobs</a>
                </div>
                <div class="row">
                    <h3>Developers</h3>
                    <a href="">Blog</a>
                    <a href="">Forum</a>
                    <a href="">Wiki</a>
                    <a href="">Developers Portal</a>
                </div>
            </div>
            <div class="col-1 footer-col d-flex flex-column">
                <h3>Privacy Terms of Service</h3>
            </div>
            <div class="col-1 footer-col d-flex flex-column">
                <h3>Support</h3>
                <a href="">Community</a>
                <a href="">Manual</a>
                <a href="">FAQ</a>
                <a href="">Tutorials</a>
            </div>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>
</html>
