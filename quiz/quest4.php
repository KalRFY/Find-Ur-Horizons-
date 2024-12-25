<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/quest2.css">
    <title>Document</title>
</head>
<body>
    <section class="upper-section d-flex align-items-center flex-column">
    <header class="d-flex col-12 text-white align-items-center">
            <logo class="text col-3">
                <a href="" class="text-decoration-none">FIND UR <br>HORIZON</a>
            </logo>
            <nav class="col-6 text-end">
                <a href="../quiz.html">Quiz</a>
                <a href="../character/knight.php">Character</a>
                <a href="../subscription.html">Subscription</a>
            </nav>
            <a href="../profile.php" class="text-decoration-none text-white fw-bolder col-3 text-end">Profile</a>
        </header>
        <div class="quest-header w-100">
            <h1>Quiz</h1>
        </div>
        <div class="quest-body">
            <p class="text-center">Penduduk desa itu berterima kasih kepada Anda, karena telah berhasil mengusir binatang-binatang tersebut. Sehingga ia memberikan sedikit perbekalan makanan dan informasi mengenai arah jalan ke gunung yang aman. Lalu setelah itu, Anda melanjutkan perjalanan menuju gunung. Di tengah jalan, Anda melihat Kelompok Misterius yang sedang menuju gunung juga. Apa yang akan Anda lakukan?</p>
        </div>
        <form action="../script/quest4.php" method="POST" class="d-flex flex-column align-items-end p-5">
            <div class="form-body d-flex gap-3 mb-5">
                <input type="radio" class="btn-check" name="choice" id="choice_a" autocomplete="off" value="a">
                <label class="btn" for="choice_a">Menghampiri kelompok itu lalu mengajak berjalan bersama</label>
                
                <input type="radio" class="btn-check" name="choice" id="choice_b" autocomplete="off" value="b">
                <label class="btn" for="choice_b">Mengamati dan mengikuti kelompok tersebut dari kejauhan untuk mengetahui apa tujuan Kelompok Misterius itu menuju gunung</label>
            </div>
            <div class="submit-btn">
                <input type="submit" value="Submit" class="submit-btn">
            </div>
        </form>
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