<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/archer.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    
    <section class="hero-section">
        <div class="container-fluid">
            <header class="d-flex col-12 text-white align-items-center">
                <logo class="text col-3">
                    <a href="" class="text-decoration-none">FIND UR <br>HORIZON</a>
                </logo>
                <nav class="col-6 text-end">
                    <a href="../quiz.html">Quiz</a>
                    <a href="knight.php">Character</a>
                    <a href="../subscription.html">Subscription</a>
                </nav>
                <a href="../profile.php" class="text-decoration-none text-white fw-bolder col-3 text-end">Profile</a>
            </header>
            <div class="character-container row">
                <div class="row text-white text-center" style="font-weight: 900; font-size: 8rem;">
                    <p>CHARACTER</p>
                </div>
                <div class="row justify-content-center text-white mt-5">
                    <div class="container-fluid row justify-content-center">
                        <div class="col-1 character-box">
                            <img src="../img/knight.png" alt="">
                        </div>
                        <div class="col-1 character-box">
                            <img src="../img/archer.png" alt="">
                        </div>
                        <div class="col-1 character-box">
                            <img src="../img/sorcerer.png" alt="">
                        </div>
                        <div class="col-1 character-box">
                            <img src="../img/general.png" alt="">
                        </div>
                        <div class="col-1 character-box">
                            <img src="../img/healer.png" alt="">
                        </div>
                        <div class="col-1 character-box">
                            <img src="../img/thieft.png" alt="">
                        </div>
                        <div class="col-1 character-box">
                            <img src="../img/alchemist.png" alt="">
                        </div>
                    </div>
                    <div class="container-fluid row justify-content-center">
                        <div class="col-1 character-name d-flex align-items-center justify-content-center fs-3 fw-bolder">
                            <a href="knight.php" class="text-decoration-none text-white">KNIGHT</a>
                        </div>
                        <div class="col-1 character-name d-flex align-items-center justify-content-center fs-3 fw-bolder  bg-warning">
                            <a href="archer.php" class="text-decoration-none text-white">ARCHER</a>
                        </div>
                        <div class="col-1 character-name d-flex align-items-center justify-content-center fs-3 fw-bolder">
                            <a href="sorcerer.php" class="text-decoration-none text-white">SORCERER</a>
                        </div>
                        <div class="col-1 character-name d-flex align-items-center justify-content-center fs-3 fw-bolder">
                            <a href="general.php" class="text-decoration-none text-white">GENERAL</a>
                        </div>
                        <div class="col-1 character-name d-flex align-items-center justify-content-center fs-3 fw-bolder">
                            <a href="healer.php" class="text-decoration-none text-white">HEALER</a>
                        </div>
                        <div class="col-1 character-name d-flex align-items-center justify-content-center fs-3 fw-bolder">
                            <a href="thieft.php" class="text-decoration-none text-white">THIEFT</a>
                        </div>
                        <div class="col-1 character-name d-flex align-items-center justify-content-center fs-3 fw-bolderg">
                            <a href="alchemist.php" class="text-decoration-none text-white">ALCHEMIST</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="character-section">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div class="col-5 text-white">
                    <h1 class="c-name">ARCHER</h1>
                    <p class="c-desc">Seorang penembak jitu yang fokus dan teliti (#Fokus, #SiPalingTeliti), mampu merencanakan tindakan dengan baik . Namun, dia cenderung kurang kreatif dalam menghadapi tantangan dan kurang fleksibel dalam mengubah strategi. Meskipun kurang dalam aspek sosial, archer memiliki nilai simpati dan idealisme yang tinggi.</p>
                </div>
                <div class="col-4 text-white d-flex flex-column align-items-center justify-content-center">
                    <h1 class="c-name">DESKRIPSI</h1>
                    <p class="c-desc">Seseorang yang ahli dalam menyelesaikan tugas-tugas yang membutuhkan konsentrasi tinggi, seperti seorang profesional yang dengan pemikiran yang terstuktur</p>
                </div>
            </div>
            <div class="row d-flex justify-content-between mt-5">
                <div class="col-5 text-white" style="padding-left: 2rem;">
                    <h1 class="c-plus">Kelebihan</h1>
                    <p class="c-desc">
                        <ul class="fs-3 fw-bold">
                            <li>Fokus dan teliti dalam tindakan</li>
                            <li>Mampu merencanakan tindakan dengan baik</li>
                            <li>Memiliki simpati dan idealisme yang tinggi</li>
                        </ul>
                    </p>
                </div>
                <div class="col-4 text-white d-flex flex-column align-items-start">
                    <h1 class="c-suggest">Carrer Suggestion</h1>
                    <p class="c-desc">Profesi yang membutuhkan konsentrasi tinggi dan ketelitian, seperti ahli matematika, analis data, atau insinyur</p>
                </div>
            </div>
            <div class="row d-flex justify-content-between mt-5">
                <div class="col-5 text-white" style="padding-left: 2rem;">
                    <button class="unlock-premium">Unlock Premium</button>
                </div>
                <div class="col-4 text-white d-flex flex-column align-items-start">
                    <h1 class="c-suggest">Best Teammate</h1>
                    <p class="c-desc">Sorcerer : Seseorang yang dapat menganalisa masa depan sangat cocok untuk di satukan dengan orang yang dapat mengeksekusi rencana yang sudah di plan dengan baik</p>
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