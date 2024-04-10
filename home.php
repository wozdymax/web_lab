<?php
$posts = [];
$articles = [];

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function getAndPrintPostsFromDB(mysqli $conn, &$posts): void
{
    $sql = "SELECT * FROM post WHERE featured = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    }
}

function getAndPrintArticlesFromDB(mysqli $conn, &$articles): void
{
    $sql = "SELECT * FROM post WHERE featured = 0";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $articles[] = $row;
        }
    }
}

$conn = createDBConnection();
getAndPrintPostsFromDB($conn, $posts);
getAndPrintArticlesFromDB($conn, $articles);
closeDBConnection($conn);



?>


<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/home_style.css">
</head>

<body>
    <header class="header">

        <div class="header__navigation">
            <div class="navigation">
                <img class="navigation__logo" src="images/logo2.svg" alt="Logo">
                <nav class="navigation__list">
                    <a class="header__navigation-item" href="home.php">Home</a>
                    <a class="header__navigation-item" href="#">Categories</a>
                    <a class="header__navigation-item" href="#">About</a>
                    <a class="header__navigation-item" href="#">Contact</a>
                </nav>
            </div>
        </div>

        <div class="header_greeting">
            <div class="greeting">
                <h1 class="greeting__heading">Let's do it together.</h1>
                <h2 class="greeting__subtitle">We travel the world in search of stories. Come along for the ride.</h2>
                <div class="greeting__button">
                    <span class="greeting__button-text">View Latest Posts</span>
                </div>
            </div>
        </div>

    </header>

    <div class="section">
        <div class="section__menu">
            <span class="sections-item">Nature</span>
            <span class="sections-item">Potography</span>
            <span class="sections-item">Relaxation</span>
            <span class="sections-item">Vacation</span>
            <span class="sections-item">Travel</span>
            <span class="sections-item">Adventure</span>
        </div>
    </div>

    <main>

        <div class="posts">

            <div class="posts__popular">

                <div class="posts__subtitle">
                    <h2 class="posts__subtitle-text">Featured Posts</h2>
                    <div class="posts__subtitle-underline"></div>
                </div>

                <div class='posts__popular__preview'>
                    <?php

                    foreach ($posts as $post) {
                        include 'post_preview.php';
                    }
                    ?>
                </div>

            </div>

            <div class="most-recent__post">

                <div class="posts__subtitle">
                    <h2 class="posts__subtitle-text">Most Recent</h2>
                    <div class="posts__subtitle-underline"></div>
                </div>

                <div class="articles">

                    <?php

                    foreach ($articles as $article) {
                        include 'article_preview.php';
                    }
                    ?>

                </div>

            </div>

        </div>

    </main>


    <footer class="footer">
        <div class="footer__navigation">
            <div class="navigation">
                <img class="navigation__logo" src="images/logo2.svg" alt="Logo">
                <nav class="navigation__list">
                    <a class="footer__navigation__item" href="home.php">Home</a>
                    <a class="footer__navigation__item" href="#">Categories</a>
                    <a class="footer__navigation__item" href="#">About</a>
                    <a class="footer__navigation__item" href="#">Contact</a>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>