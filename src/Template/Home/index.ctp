<style>
    .menu1 ul {
        position: absolute;
        z-index: 999;
    }
</style>
<div class="col-md-9">
    <div class="col-md-12">
        <form action="" method="" role="form">
            <div class="col-md-4">
                <select name="cate_id" id="input" class="form-control" required="required">
                    <option value="0">Hãy chọn danh mục</option>
                    <?php
                    foreach ($category as $value) {
                        echo "<option value='" . $value->cate_id . "'>$value->cate_name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" name="arc_name" id="input" class="form-control" value="">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-default">Search</button>
            </div>
        </form>
    </div>
    <br>
    <div class="col-md-12" style="margin-top: 20px">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#337AB7; color:white;">
                <h4><b>Tin tức</b></h4>
            </div>
            <?php
            if (isset($search)) {
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
            }
            ?>
        </div>
    </div>
</div>