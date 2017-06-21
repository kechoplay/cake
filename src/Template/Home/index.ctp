<style>
    .menu1 ul {
        position: absolute;
        z-index: 999;
    }
</style>
<div class="col-md-9">
    <div class="col-md-12">
        <form action="" method="" role="form" id="form-search">
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
                <button type="button" id="submit" class="btn btn-default">Search</button>
            </div>
        </form>
    </div>
    <br>
    <div class="col-md-12" style="margin-top: 20px;display: none" id="search">
        <div class="panel panel-default">

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#submit').click(function () {
            $.ajax({
                type: 'post',
                url: 'home/search',
                data: $('#form-search').serialize(),
                success: function (data) {
                    $('#search').css('display','block');
                    var result = JSON.parse(data);
                    console.log(result);
                    $('.panel').html(function () {
                        var html = "<div class='panel-heading' style='background-color:#337AB7; color:white;'><h4><b>Tin tức</b></h4></div>";
                        $.each(result, function (key, value) {
                            html += "<div class='row-item row'>";
                            html += "<div class='col-md-3'>";
                            html += "</div>";
                            html += "<div class='col-md-9'>";
                            html += "<h3>" + value.name + "</h3>";
                            html += "<a class='btn btn-primary' href='articles/view/"+value.id+"'>";
                            html += "View Project <span class='glyphicon glyphicon-chevron-right'></span></a>";
                            html += "</div>";
                            html += "<div class='break'></div>";
                            html += "</div>";
                        });

                        return html;
                    });
                }
            });
        });
    });
</script>