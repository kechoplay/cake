<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <?php echo $this->element('head') ?>
</head>
<body>
<?php
//echo "<pre>";
//print_r($categoryId);
//echo "</pre>";
//die;
if (isset($categoryId)) {
    echo "<script type='text/javascript'>
        $(document).ready(function() {
            $('#menuchild" . $categoryId . "').css('color','black');
            $('#menuchild" . $categoryId . "').parent().parent().css('display','block');
        });
        </script>";
}
?>
<?php echo $this->element('layout/header') ?>

<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Menu
        </li>
        <?php
        $this->Categories->getCategory($listCategory);
        ?>

    </ul>
</div>
<?php echo $this->fetch('content') ?>
<?php echo $this->element('layout/footer') ?>
<script>
    $(".menu1").next('ul').toggle();

    $(".menu1").click(function (event) {
        $(this).next("ul").toggle(500);
    });
</script>
</body>
</html>
