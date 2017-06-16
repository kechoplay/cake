<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->arc_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->arc_id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->arc_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($article->arc_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $this->Html->link($article->arc_id, ['controller' => 'Articles', 'action' => 'view', $article->arc_id]) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arc Name') ?></th>
            <td><?= h($article->arc_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arc Descript') ?></th>
            <td><?= h($article->arc_descript) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $article->has('category') ? $this->Html->link($article->category->cate_name, ['controller' => 'Categories', 'action' => 'view', $article->category->cate_id]) : '' ?></td>
        </tr>
    </table>
</div>
