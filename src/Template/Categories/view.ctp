<style>
    .break {
        clear: both;
        height: 10px;
        width: 90%;
        margin: auto;
        border-bottom: 1px solid #EEEEEE;
    }
</style>

<div class="col-md-9 ">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#337AB7; color:white;">
            <h4><b><?=$category->cate_name?></b></h4>
        </div>
        <?php
        if (!empty($article)) {
            foreach ($article as $value) {
                ?>
                <div class="row-item row">
                    <div class="col-md-3">

                        <a href="detail.html">
                            <br>
                            <img width="200px" height="200px" class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>

                    <div class="col-md-9">
                        <h3><?= $value->arc_name ?></h3>
                        <p></p>
                        <a class="btn btn-primary"
                           href="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'view', $value->arc_id]) ?>">View
                            Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="break"></div>
                </div>
                <?php
            }
            ?>

            <!-- Pagination -->
            <div class="row text-center">
                <div class="col-lg-12 paginator">
                    <ul class="pagination">
                        <li>
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                        </li>
                        <li>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        </li>
                        <li class="active">
                            <?= $this->Paginator->numbers() ?>
                        </li>
                        <li>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                        </li>
                        <li>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
            <?php
        }else {
            echo "Không có dữ liệu";
        }
        ?>

    </div>
</div>