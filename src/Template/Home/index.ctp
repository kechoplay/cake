<?php

use App\Model\Table\CategoriesTable;
?>

<style>
    .menu1 ul{
        position: absolute;
        z-index: 999;
    }
</style>

<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Menu
        </li>


    </ul>
    <?php
    foreach ($lstCategory as $categoryName) {
        echo $categoryName . "\n";
    }
    ?>
</div>
