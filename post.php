<?php
$post = [];

$postId = $_GET['id'];

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

function getAndPrintPostsFromDB(mysqli $conn, &$posts, $postId): void
{
    $sql = "SELECT * FROM post WHERE id = $postId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $posts = $row;
        }
    }
}

$conn = createDBConnection();
getAndPrintPostsFromDB($conn, $post, $postId);
closeDBConnection($conn);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/post_style.css">
</head>

<body>

    <header class="header__navigation">
        <div class="navigation">
            <img class="navigation__logo" src="images/logo1.svg" alt="Logo">
            <nav class="navigation__list">
                <a class="header__navigation-item" href="home.php">Home</a>
                <a class="header__navigation-item" href="#">Categories</a>
                <a class="header__navigation-item" href="#">About</a>
                <a class="header__navigation-item" href="#">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="heading">
            <h1 class="title">
                <?= $post['title'] ?>
            </h1>
            <h2 class="subtitle">
                <?= $post['subtitle'] ?>
            </h2>
        </div>

        <div class="image">
            <img <?= $post['post_photo'] ?>>
        </div>

        <div class="maintext">
            <p>
                <?= $post['post_text'] ?>
            </p>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__navigation">
            <div class="navigation">
                <img class="navigation__logo" src="images/logo2.svg" alt="Logo">
                <nav class="navigation__list">
                    <a class="footer__navigation-item" href="home.php">Home</a>
                    <a class="footer__navigation-item" href="#">Categories</a>
                    <a class="footer__navigation-item" href="#">About</a>
                    <a class="footer__navigation-item" href="#">Contact</a>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>