<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bookmark'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookmarks index large-9 medium-8 columns content">
    <h3><?= __('Bookmarks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('book_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cate_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookmarks as $bookmark): ?>
            <tr>
                <td><?= $this->Number->format($bookmark->book_id) ?></td>
                <td><?= $bookmark->has('category') ? $this->Html->link($bookmark->category->cate_name, ['controller' => 'Categories', 'action' => 'view', $bookmark->category->cate_id]) : '' ?></td>
                <td><?= h($bookmark->book_title) ?></td>
                <td><?= h($bookmark->book_created) ?></td>
                <td><?= h($bookmark->book_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bookmark->book_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookmark->book_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookmark->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->book_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
