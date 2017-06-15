<?php
use Cake\Datasource\ConnectionManager;

function getCategory($data,$parent=0)
{
    $cate_chil=array();
    foreach ($data as $key => $value)
    {
        if($value['parent_id']==$parent){
            $cate_chil[]=$value;
        }
    }
//    echo "<pre>";
//    print_r($data);
    if ($cate_chil)
    {
        foreach ($cate_chil as $keys => $values)
        {
            echo "<li class='list-group-item menu1'>";
            echo "<a href='categories/view/".$values['cate_id']."' >";
            echo $values['cate_name'];
            echo "</a>";
            echo "</li>";
            echo "<ul>";
            getCategory($data,$values['cate_id']);
            echo "</ul>";
        }
    }
}

function lstCategory($data=array(),$parent=0,$str="--")
{
    foreach ($data as $key => $value)
    {
        $id=$value['cate_id'];
        $name=$value['cate_name'];
        if ($value['parent_id']==$parent)
        {
            echo "<option value='$id'>$str $name</option>";
            lstCategory($data,$id,$str."--");
        }
    }
}

function cateParent($data,$parent=0,$str="--",$select=0)
{
    foreach ($data as $key => $value) {
        $id=$value[0];
        $name=$value[1];
        if($value[2]==$parent){
            if($select !=0 && $id==$select){
                echo "<option value='$id' selected='selected'>$str $name</option>";
            }else{
                echo "<option value='$id'>$str $name</option>";
            }
            cateParent($data,$id,$str."--");
        }
    }
}

?>