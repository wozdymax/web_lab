<article class="article__preview">
    <img class="article-photo" <?= $article['photo'] ?>>
    <div class="article__text">
        <h3 class="article-heading"><?= $article['title'] ?></h3>
        <h4 class="article-subtitle"><?= $article['subtitle'] ?></h4>
    </div>
    <div class="article-border"></div>
    <div class="article__info">
        <div class="article__info__author">
            <img class="author-photo" <?= $article['img_modifier'] ?>>
            <span class="article__author-name"><?= $article['author'] ?></span>
        </div>
        <span class="article__info-date"><?= $article['date'] ?></span>
    </div>
</article>