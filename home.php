<?php
$posts = [
    [
        'name' => '"the-road-ahead"', 
        'tag' => '', 
        'tag_text' => '',
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => 'src="images/mat_volges.jpg" alt="Mat Wolges photo"',
        'author' => 'Mat Wogels',
        'date' => 'September 25, 2015',
    ],
    [
        'name' => '"from-top-down"',
        'tag' => 'class="preview-tag"', 
        'tag_text' => '<p>Adventure</p>',
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you`ve never been before.',
        'img_modifier' => 'src="images/william_wong.jpg" alt="William Wong photo"',
        'author' => 'William Wong',
        'date' => 'September 25, 2015',
    ],
];
$articles = [
    [
        'photo' => 'src="images/still_standing.jpg" alt="Balloon parade"',
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => 'src="images/william_wong.jpg" alt="William Wong photo"',
        'author' => 'William Wong',
        'date' => 'September 25, 2015',    
    ],
    [
        'photo' => 'src="images/sunny_side_up.jpg" alt="Bridge"',
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it`s going to be.',
        'img_modifier' => 'src="images/mat_volges.jpg" alt="Mat Wolges photo"',
        'author' => 'Mat Wogels',
        'date' => 'September 25, 2015',    
    ],
    [
        'photo' => 'src="images/water_falls.jpg" alt="Lake at sunset"',
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_modifier' => 'src="images/mat_volges.jpg" alt="Mat Wolges photo"',
        'author' => 'Mat Wogels',
        'date' => 'September 25, 2015',    
    ],
    [
        'photo' => 'src="images/through_the_mist.jpg" alt="Sea Surface"',
        'title' => 'Through The Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_modifier' => 'src="images/william_wong.jpg" alt="William Wong photo"',
        'author' => 'William Wong',
        'date' => 'September 25, 2015',    
    ],
    [
        'photo' => 'src="images/awaken_early.jpg" alt="Funicular in the fog"',
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => 'src="images/mat_volges.jpg" alt="Mat Wolges photo"',
        'author' => 'Mat Wogels',
        'date' => 'September 25, 2015',    
    ],
    [
        'photo' => 'src="images/try_it_always.jpg" alt="Man at the waterfall"',
        'title' => 'Try It Always',
        'subtitle' => 'he world is a book, and those who do not travel read only one page.',
        'img_modifier' => 'src="images/mat_volges.jpg" alt="Mat Wolges photo"',
        'author' => 'Mat Wogels',
        'date' => 'September 25, 2015',    
    ],
]
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
                    <a class="header__navigation-item" href="#">Home</a>
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

                    <!--<article class="article__preview">
                        <img class="article-photo" src="images/still_standing.jpg" alt="Balloon parade">
                        <div class="article__text">
                            <h3 class="article-heading">Still Standing Tall</h3>
                            <span class="article-subtitle">Life begins at the end of your comfort zone.</span>
                        </div>
                        <div class="article-border"></div>
                        <div class="article__info">
                            <div class="article__info__author">
                                <img class="author-photo" src="images/william_wong.jpg"
                                    alt="William Wongs photo">
                                <span class="article__author-name">William Wong</span>
                            </div>
                            <span class="article__info-date">9/25/2015</span>
                        </div>
                    </article>

                    <article class="article__preview">
                        <img class="article-photo" src="images/sunny_side_up.jpg" alt="Bridge">
                        <div class="article__text">
                            <h3 class="article-heading">Sunny Side Up</h3>
                            <span class="article-subtitle">No place is ever as bad as they tell you it's going to be.</span>
                        </div>
                        <div class="article-border"></div>
                        <div class="article__info">
                            <div class="article__info__author">
                                <img class="author-photo" src="images/mat_volges.jpg"
                                    alt="William Wongs photo">
                                <span class="article__author-name">Mat Vogels</span>
                            </div>
                            <span class="article__info-date">9/25/2015</span>
                        </div>
                    </article>

                    <article class="article__preview">
                        <img class="article-photo" src="images/water_falls.jpg" alt="Lake at sunset">
                        <div class="article__text">
                            <h3 class="article-heading">Water Falls</h3>
                            <span class="article-subtitle">We travel not to escape life, but for life not to escape us.</span>
                        </div>
                        <div class="article-border"></div>
                        <div class="article__info">
                            <div class="article__info__author">
                                <img class="author-photo" src="images/mat_volges.jpg"
                                    alt="William Wongs photo">
                                <span class="article__author-name">Mat Vogels</span>
                            </div>
                            <span class="article__info-date">9/25/2015</span>
                        </div>
                    </article>

                    <article class="article__preview">
                        <img class="article-photo" src="images/through_the_mist.jpg" alt="Sea Surface">
                        <div class="article__text">
                            <h3 class="article-heading">Through the Mist</h3>
                            <span class="article-subtitle">Travel makes you see what a tiny place you occupy in the world.</span>
                        </div>
                        <div class="article-border"></div>
                        <div class="article__info">
                            <div class="article__info__author">
                                <img class="author-photo" src="images/william_wong.jpg"
                                    alt="William Wongs photo">
                                <span class="article__author-name">William Wong</span>
                            </div>
                            <span class="article__info-date">9/25/2015</span>
                        </div>
                    </article>

                    <article class="article__preview">
                        <img class="article-photo" src="images/awaken_early.jpg" alt="Funicular in the fog">
                        <div class="article__text">
                            <h3 class="article-heading">Awaken Early</h3>
                            <span class="article-subtitle">Not all those who wander are lost.</span>
                        </div>
                        <div class="article-border"></div>
                        <div class="article__info">
                            <div class="article__info__author">
                                <img class="author-photo" src="images/mat_volges.jpg"
                                    alt="William Wongs photo">
                                <span class="article__author-name">Mat Vogels</span>
                            </div>
                            <span class="article__info-date">9/25/2015</span>
                        </div>
                    </article>

                    <article class="article__preview">
                        <img class="article-photo" src="images/try_it_always.jpg" alt="Man at the waterfall">
                        <div class="article__text">
                            <h3 class="article-heading">Try it Always</h3>
                            <span class="article-subtitle">The world is a book, and those who do not travel read only one page.</span>
                        </div>
                        <div class="article-border"></div>
                        <div class="article__info">
                            <div class="article__info__author">
                                <img class="author-photo" src="images/mat_volges.jpg"
                                    alt="William Wongs photo">
                                <span class="article__author-name">Mat Vogels</span>
                            </div>
                            <span class="article__info-date">9/25/2015</span>
                        </div>
                    </article> -->


                </div>


            </div>
        </div>

    </main>


    <footer class="footer">
        <div class="footer__navigation">
            <div class="navigation">
                <img class="navigation__logo" src="images/logo2.svg" alt="Logo">
                <nav class="navigation__list">
                    <a class="footer__navigation__item" href="#">Home</a>
                    <a class="footer__navigation__item" href="#">Categories</a>
                    <a class="footer__navigation__item" href="#">About</a>
                    <a class="footer__navigation__item" href="#">Contact</a>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>