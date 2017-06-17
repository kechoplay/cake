<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->tag_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->tag_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->tag_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->tag_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $tag->has('tag') ? $this->Html->link($tag->tag->tag_id, ['controller' => 'Tags', 'action' => 'view', $tag->tag->tag_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Title') ?></th>
            <td><?= h($tag->tag_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Created') ?></th>
            <td><?= h($tag->tag_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Modified') ?></th>
            <td><?= h($tag->tag_modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bookmarks') ?></h4>
        <?php if (!empty($tag->bookmarks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('Cate Id') ?></th>
                <th scope="col"><?= __('Book Title') ?></th>
                <th scope="col"><?= __('Book Description') ?></th>
                <th scope="col"><?= __('Book Url') ?></th>
                <th scope="col"><?= __('Book Created') ?></th>
                <th scope="col"><?= __('Book Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->bookmarks as $bookmarks): ?>
            <tr>
                <td><?= h($bookmarks->book_id) ?></td>
                <td><?= h($bookmarks->cate_id) ?></td>
                <td><?= h($bookmarks->book_title) ?></td>
                <td><?= h($bookmarks->book_description) ?></td>
                <td><?= h($bookmarks->book_url) ?></td>
                <td><?= h($bookmarks->book_created) ?></td>
                <td><?= h($bookmarks->book_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bookmarks', 'action' => 'view', $bookmarks->book_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bookmarks', 'action' => 'edit', $bookmarks->book_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bookmarks', 'action' => 'delete', $bookmarks->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarks->book_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
