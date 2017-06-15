<?php
/**
  * @var \App\View\AppView $this
  */

?>

<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#337AB7; color:white;" >
            <h2 style="margin-top:0px; margin-bottom:0px;"> <?=$category->cate_name?></h2>
        </div>

        <div class="panel-body">
            <!-- item -->
            <?php
                foreach ($category->child_categories as $child) {
                    ?>
                    <div class="row-item row">
                        <h3>
                            <a href="#"><?= $child->cate_name ?></a> |

                        </h3>
                        <div class="col-md-12 border-right">


                            <div class="col-md-9">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima,
                                    inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="chitiet.html">View Project <span
                                            class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>

                        <div class="break"></div>
                    </div>
                    <?php
                }
            ?>

        </div>
    </div>
</div>