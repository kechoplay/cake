<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bookmark->book_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->book_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookmarks form large-9 medium-8 columns content">
    <?= $this->Form->create($bookmark) ?>
    <fieldset>
        <legend><?= __('Edit Bookmark') ?></legend>
        <?php
            echo $this->Form->input('cate_id', ['options' => $categories]);
            echo $this->Form->input('book_title');
            echo $this->Form->input('book_description');
            echo $this->Form->input('book_url');
            echo $this->Form->input('book_created', ['empty' => true]);
            echo $this->Form->input('book_modified', ['empty' => true]);
            echo $this->Form->input('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
