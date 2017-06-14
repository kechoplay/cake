<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->cate_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->cate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->cate_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->cate_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $this->Html->link($category->cate_id, ['controller' => 'Categories', 'action' => 'view', $category->cate_id])?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Category') ?></th>
            <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->cate_name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->cate_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cate Name') ?></th>
            <td><?= h($category->cate_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cate Lft') ?></th>
            <td><?= $this->Number->format($category->cate_lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cate Rght') ?></th>
            <td><?= $this->Number->format($category->cate_rght) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($category->child_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Cate Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Cate Lft') ?></th>
                <th scope="col"><?= __('Cate Rght') ?></th>
                <th scope="col"><?= __('Cate Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->child_categories as $childCategories): ?>
            <tr>
                <td><?= h($childCategories->cate_id) ?></td>
                <td><?= h($childCategories->parent_id) ?></td>
                <td><?= h($childCategories->cate_lft) ?></td>
                <td><?= h($childCategories->cate_rght) ?></td>
                <td><?= h($childCategories->cate_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->cate_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->cate_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->cate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->cate_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
