<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=LXGW+WenKai+TC:wght@400;700&family=Londrina+Solid:wght@100;300;400;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+TC&display=swap" rel="stylesheet">
    <title>It's Me Man 魏迪</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png" />
</head>

<body>

    <!-- <section class="loader">
        <p>Welcome to My Portfolio</p>

        <div class="loading"></div>
    </section> -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#home">
                    <img src="./img/icon.png" alt="" class="w-10">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto londrina-solid-regular">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#achievements">achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#setup">setup</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="Home" class="py-5 background-home">
        <br><br>
        <div class="container">
            <div class="col-sm-6">
                <h3 class="light-pink chinnese">欢迎来到我的网站</h3>
                <h1 class="pink  fw-bold display-1 londrina-solid-regular">HELLO !</h1>
                <p class="lead josefin-sans-ligth peach">
                    I am Vidi Joshubzky Saviola, a passionate gamer striving to become a professional
                    player in CS2 (Counter-Strike 2). My journey is fueled by a relentless drive to improve my skills,
                    outsmart opponents, and rise through the competitive ranks. Dedication, strategy, and teamwork are
                    at the
                    core of everything I do, as I aim to make my mark in the world of esports.
                </p>
            </div>
            <div>
                <h2 class="text-center text-warning ">"智者胜，勇者行，心静者成。"</h2>
                <p class="text-center bg-light fw-bold">-- 孫子 -- </p>
            </div>
            <div class="text-center">
                <img src="./img/me.jpg" alt="me" class="img-fluid mx-auto d-block w-25">
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <h1 class="text-center londrina-solid-regular pink">ABOUT ME !!!</h1>
            <div class="josefin-sans-ligth lead">
                <p>
                    I’ve been immersed in the world of Counter-Strike since 2018, and my passion for the game has grown
                    exponentially over the years. What started as a casual interest has transformed into a dedicated
                    pursuit
                    of excellence, both as a player and a strategist.
                </p>

                <p>
                    Mastering the intricate mechanics of precise aim and developing an intuitive game sense has become
                    my
                    daily routine. I spend countless hours analyzing gameplay, practicing my skills, and honing my
                    strategies to stay ahead of the competition. Counter-Strike is no longer just a game for me; it's a
                    lifestyle that fuels my ambition and drives me to improve every single day.
                </p>

                <p>
                    My ultimate goal is to compete at the highest level, representing top-tier teams and making my mark
                    in
                    the esports world. I aspire to participate in prestigious tournaments, where I can showcase my
                    skills,
                    teamwork, and dedication. I believe in the power of perseverance, and I’m committed to overcoming
                    any
                    challenges that come my way. With each match, I aim not only to win but to learn, grow, and inspire
                    others who share the same passion for gaming.
                </p>
            </div>
        </div>
    </section>

    <section id="achievements" class="py-5">
        <div class="container londrina-solid-regular">
            <h2 class="text-center">My Achievements</h2>
            <div class="border border-dark mt-5 rounded-pill">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div id="kd" class="circle-stat">
                                <div class="circle-stat-value">0</div>
                            </div>
                            <p class="text-center mt-2">K/D</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div id="hltv" class="circle-stat">
                                <div class="circle-stat-value">0</div>
                            </div>
                            <p class="text-center mt-2">HLTV RATING</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div id="winrate" class="circle-stat">
                                <div class="circle-stat-value">0%</div>
                            </div>
                            <p class="text-center mt-2">WIN RATE</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section id="setup" class="py-5">
        <div class="container">
            <h2 class="text-center londrina-solid-regular">My Gaming Setup</h2>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Component</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">CPU</th>
                        <td>AMD Ryzen 7 5700X</td>
                    </tr>
                    <tr>
                        <th scope="row">Mobo</th>
                        <td>MSI MPG B550 GAMING PLUS - AM4</td>
                    </tr>
                    <tr>
                        <th scope="row">RAM</th>
                        <td>TEAM T-Create Classic (2x8) 16GB DDR4 kit 3200MHz</td>
                    </tr>
                    <tr>
                        <th scope="row">GPU</th>
                        <td>MSI GeForce RTX 3060 VENTUS 2X 12GB</td>
                    </tr>
                    <tr>
                        <th scope="row">Monitor</th>
                        <td>GigaByte G24F2 24</td>
                    </tr>
                    <tr>
                        <th scope="row">Headset</th>
                        <td>Logitech G Pro X</td>
                    </tr>
                    <tr>
                        <th scope="row">Mouse</th>
                        <td>Fantech Helios II</td>
                    </tr>
                    <tr>
                        <th scope="row">Keyboard</th>
                        <td>Noir N1X</td>
                    </tr>
            </table>
            </tbody>
            </table>
        </div>
    </section>

    <section id="another-games" class="py-5">
        <h2 class="text-center londrina-solid-regular">Another Games I Play</h2>
        <div class="logos">
            <div class="logos-slide">
                <a href="https://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/" target="_blank">
                    <img src="./img/logo1.png">
                </a>
                <a href="https://bluearchive.nexon.com/home" target="_blank">
                    <img src="./img/logo2.png">
                </a>
                <a href="https://www.fortnite.com/?lang=en-US" target="_blank">
                    <img src="./img/logo3.png">
                </a>
                <a href="https://www.dota2.com/home" target="_blank">
                    <img src="./img/logo4.png">
                </a>
                <a href="https://www.ea.com/games/apex-legends" target="_blank">
                    <img src="./img/logo5.png">
                </a>
                <a href="https://www.pubg.com/en" target="_blank">
                    <img src="./img/logo6.png">
                </a>
            </div>
            <div class="logos-slide">
                <a href="https://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/" target="_blank">
                    <img src="./img/logo1.png">
                </a>
                <a href="https://bluearchive.nexon.com/home" target="_blank">
                    <img src="./img/logo2.png">
                </a>
                <a href="https://www.fortnite.com/?lang=en-US" target="_blank">
                    <img src="./img/logo3.png">
                </a>
                <a href="https://www.dota2.com/home" target="_blank">
                    <img src="./img/logo4.png">
                </a>
                <a href="https://www.ea.com/games/apex-legends" target="_blank">
                    <img src="./img/logo5.png">
                </a>
                <a href="https://www.pubg.com/en" target="_blank">
                    <img src="./img/logo6.png">
                </a>
            </div>
        </div>
    </section>

    <section id="comments" class="py-5">
        <div class="container">
            <h2 class="text-center">Leave a Comment</h2>
            <form action="comments.php" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                        required>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Your Comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"
                        placeholder="Your comment here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </form>

            <div class="mt-5">
                <h2 class="text-center">Comments</h2>
                <div class="comments-list">
                    <?php
                    // Retrieve the comments from the array
                    if (isset($_POST['comments'])) {
                        $comments = json_decode($_POST['comments'], true);
                        foreach ($comments as $comment) {
                            echo "<div class='comment-box mb-4 p-3 bg-light border'>";
                            echo "<h5>{$comment['name']}</h5>";
                            echo "<p>{$comment['comment']}</p>";
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-circle-progress@1.2.2/dist/circle-progress.min.js"></script>
    <script src="script.js"></script>
</body>

</html>