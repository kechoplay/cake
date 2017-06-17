<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookmarks Tag'), ['action' => 'edit', $bookmarksTag->book_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookmarks Tag'), ['action' => 'delete', $bookmarksTag->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarksTag->book_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmarks Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookmarksTags view large-9 medium-8 columns content">
    <h3><?= h($bookmarksTag->book_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bookmark') ?></th>
            <td><?= $bookmarksTag->has('bookmark') ? $this->Html->link($bookmarksTag->bookmark->book_id, ['controller' => 'Bookmarks', 'action' => 'view', $bookmarksTag->bookmark->book_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $bookmarksTag->has('tag') ? $this->Html->link($bookmarksTag->tag->tag_id, ['controller' => 'Tags', 'action' => 'view', $bookmarksTag->tag->tag_id]) : '' ?></td>
        </tr>
    </table>
</div>
