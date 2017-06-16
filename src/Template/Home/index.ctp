<style>
    .menu1 ul{
        position: absolute;
        z-index: 999;
    }
</style>
<div class="col-md-9">
    <form action="" method="GET" role="form">
    <div class="col-md-4">
        <select name="cate_id" id="input" class="form-control" required="required">
            <option value="0">Hãy chọn danh mục</option>
            <?php
            foreach ($category as $value){
                echo "<option value='".$value->cate_id."'>$value->cate_name</option>";
            }
            ?>
        </select>
    </div>
    <div class="col-md-4">
        <input type="text" name="arc_name" id="input" class="form-control" value="" required="required" title="">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-default">Search</button>
    </div>
    </form>
    <?= $this->Flash->render('auth') ?>
    <?php
    if ($this->request->is('get')){
        foreach ($search as $value) {
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
<!--        <div class="row text-center">-->
<!--            <div class="col-lg-12 paginator">-->
<!--                <ul class="pagination">-->
<!--                    <li>-->
<!--                        --><?//= $this->Paginator->first('<< ' . __('first')) ?>
<!--                    </li>-->
<!--                    <li>-->
<!--                        --><?//= $this->Paginator->prev('< ' . __('previous')) ?>
<!--                    </li>-->
<!--                    <li class="active">-->
<!--                        --><?//= $this->Paginator->numbers() ?>
<!--                    </li>-->
<!--                    <li>-->
<!--                        --><?//= $this->Paginator->next(__('next') . ' >') ?>
<!--                    </li>-->
<!--                    <li>-->
<!--                        --><?//= $this->Paginator->last(__('last') . ' >>') ?>
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
    <?php
    }
    ?>
</div>