<h1>
    Bookmarks tagged with
    <?= $this->Text->toList(h($tags)) ?>
</h1>

<section>
    <?php foreach ($bookmarks as $bookmark): ?>
        <article>
            <!-- Use the HtmlHelper to create a link -->
            <h4><?= $this->Html->link($bookmark->book_title, $bookmark->book_url) ?></h4>
            <small><?= h($bookmark->book_url) ?></small>

            <!-- Use the TextHelper to format text -->
            <?= $this->Text->autoParagraph(h($bookmark->book_description)) ?>
        </article>
    <?php endforeach; ?>
</section>