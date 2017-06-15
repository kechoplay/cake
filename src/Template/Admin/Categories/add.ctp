<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
//            echo "<pre>";
//            print_r($category1);
        ?>
        <select>
            <option selected>chọn 1 dnah mục</option>
            <?php $lstCategory($category1) ?>
        </select>
        <?php
            echo $this->Form->input('parent_id', ['options' => $parentCategories, 'empty' => true]);
            echo $this->Form->input('cate_lft');
            echo $this->Form->input('cate_rght');
            echo $this->Form->input('cate_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
