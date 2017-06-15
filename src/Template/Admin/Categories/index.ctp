<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories index large-9 medium-8 columns content">
    <h3><?= __('Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cate_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cate_lft') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cate_rght') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cate_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Html->link($category->cate_id, ['controller' => 'Categories', 'action' => 'view', $category->cate_id]) ?></td>
                <td><?= $this->Html->link($category->parent_id, ['controller' => 'Categories', 'action' => 'view', $category->cate_id]) ?></td>
                <td><?= $this->Number->format($category->lft) ?></td>
                <td><?= $this->Number->format($category->rght) ?></td>
                <td><?= h($category->cate_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $category->cate_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->cate_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->cate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->cate_id)]) ?>
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
