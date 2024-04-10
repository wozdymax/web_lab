<article class="article__preview">
    <img class="article-photo" <?= $article['post_photo'] ?>>
    <div class="article__text">
    <h3><a class="article-heading" href='/post.php?id=<?= $article['id'] ?>'><?= $article['title'] ?></a></h3>
    <h4 class="article-subtitle"><?= $article['subtitle'] ?></h4>
    </div>
    <div class="article-border"></div>
    <div class="article__info">
        <div class="article__info__author">
            <img class="author-photo" <?= $article['img_modifier'] ?>>
            <span class="article__author-name"><?= $article['author'] ?></span>
        </div>
        <span class="article__info-date"><?= $post['publish_date'] ?></span>
    </div>
</article>