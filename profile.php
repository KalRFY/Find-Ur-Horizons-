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

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data profil pengguna
$sql = "SELECT username, email FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Ambil data
        $user_data = $result->fetch_assoc();
    } else {
        echo "Data pengguna tidak ditemukan.";
        exit();
    }
    $stmt->close();
} else {
    echo "Terjadi kesalahan dalam persiapan statement: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css?v=<?php echo time(); ?>">
</head>
<body class="bg-dark">
    <header class="d-flex col-12 text-white align-items-center">
        <logo class="text col-3">
            <a href="home.html" class="text-decoration-none">FIND UR <br>HORIZON</a>
        </logo>
        <nav class="col-6 text-end">
            <a href="quiz.html">Quiz</a>
            <a href="character/knight.php">Character</a>
            <a href="subscription.html">Subscription</a>
        </nav>
        <a href="" class="text-decoration-none text-white fw-bolder col-3 text-end">Profile</a>
    </header>
    <section>
        <div class="container">
            <div class="header row text-white fs-1 fw-bolder mb-4">
                <p class="text-center">Profile</p>
            </div>
            <div class="col d-flex gap-5">
                <div class="col-3 d-flex flex-column gap-5">
                    <div class="row profile-img d-flex align-items-center justify-content-center">
                        <img src="" alt="">
                    </div>
                    <div class="row">
                        <div class="subs-box text-white d-flex flex-column align-items-start">
                            <div class="subs-box-header">
                                <p>Subscriptions</p>
                            </div>
                            <div class="subs-box-body">
                                <p>Subscribed Since: DD/MM/YY</p>
                                <p>Code: AAABBBCCCDDD</p>
                            </div>
                            <div class="subs-box-footer">
                                <a href="#" class="text-decoration-none text-white">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9 form-box text-white">
                    <div class="container p-5">
                        <form action="script/update_profile.php">
                            <div class="col d-flex w-100 flex-column justify-content-between">
                                    <div class="col d-flex flex-column gap-4">
                                        <div class="row">
                                            <div class="col-6 d-flex flex-column">
                                                <label for="firstname">First Name</label>
                                                <input type="text" id="firstname" name="firstname" >
                                            </div>
                                            <div class="col-6 d-flex flex-column">
                                                <label for="firstname">Last Name</label>
                                                <input type="text" id="firstname" name="lastname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 d-flex flex-column">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user_data['username']); ?>" disabled>
                                            </div>
                                            <div class="col-6 d-flex flex-column">
                                                <label for="firstname">Email</label>
                                                <input type="email" id="firstname" name="email" value="<?php echo htmlspecialchars($user_data['email']); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 d-flex flex-column">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col w-100 d-flex align-items-center justify-content-start" style="margin-top: 10rem;">
                                        <button type="submit">Save Profile</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
</body>
</html>
