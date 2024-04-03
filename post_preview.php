<article class=<?= $post['name'] ?>>
    <div <?= $post['tag'] ?>>
        <?= $post['tag_text'] ?>
    </div>
    <h3><a class="preview-heading" href='/post.php?id=<?= $post['id'] ?>'><?= $post['title'] ?></a></h3>
    <h4 class="preview-subtitle"><?= $post['subtitle'] ?></h4>
    <div class="preview__info">
        <div class="preview__info__author">
            <img class="author-photo" <?= $post['img_modifier'] ?>>
            <span class="author-name"><?= $post['author'] ?></span>
        </div>
        <span class="preview__info-date"><?= date('d.m.Y', $post['date']) ?></span>
    </div>
    </article>