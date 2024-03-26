<article class=<?= $post['name'] ?>>
    <div <?= $post['tag'] ?>>
        <?= $post['tag_text'] ?>
    </div>
    <h2 class="preview-heading"><?= $post['title'] ?></h2>
    <h3 class="preview-subtitle"><?= $post['subtitle'] ?></h3>
    <div class="preview__info">
        <div class="preview__info__author">
            <img class="author-photo" <?= $post['img_modifier'] ?>>
            <span class="author-name"><?= $post['author'] ?></span>
        </div>
        <span class="preview__info-date"><?= $post['date'] ?></span>
    </div>
    </article>