<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookmark'), ['action' => 'edit', $bookmark->book_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookmark'), ['action' => 'delete', $bookmark->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->book_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmark'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookmarks view large-9 medium-8 columns content">
    <h3><?= h($bookmark->book_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $bookmark->has('category') ? $this->Html->link($bookmark->category->cate_name, ['controller' => 'Categories', 'action' => 'view', $bookmark->category->cate_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book Title') ?></th>
            <td><?= h($bookmark->book_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book Id') ?></th>
            <td><?= $this->Number->format($bookmark->book_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book Created') ?></th>
            <td><?= h($bookmark->book_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book Modified') ?></th>
            <td><?= h($bookmark->book_modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Book Description') ?></h4>
        <?= $this->Text->autoParagraph(h($bookmark->book_description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Book Url') ?></h4>
        <?= $this->Text->autoParagraph(h($bookmark->book_url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($bookmark->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Tag Id') ?></th>
                <th scope="col"><?= __('Tag Title') ?></th>
                <th scope="col"><?= __('Tag Created') ?></th>
                <th scope="col"><?= __('Tag Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bookmark->tags as $tags): ?>
            <tr>
                <td><?= h($tags->tag_id) ?></td>
                <td><?= h($tags->tag_title) ?></td>
                <td><?= h($tags->tag_created) ?></td>
                <td><?= h($tags->tag_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->tag_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->tag_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->tag_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->tag_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
