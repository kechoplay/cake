<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articles index large-9 medium-8 columns content">
    <h3><?= __('Articles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('arc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arc_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arc_descript') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cate_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Html->link($article->arc_id, ['controller' => 'Articles', 'action' => 'view', $article->arc_id])?></td>
                <td><?= h($article->arc_name) ?></td>
                <td><?= h($article->arc_descript) ?></td>
                <td><?= $article->has('category') ? $this->Html->link($article->category->cate_name, ['controller' => 'Categories', 'action' => 'view', $article->category->cate_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->arc_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->arc_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->arc_id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->arc_id)]) ?>
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
