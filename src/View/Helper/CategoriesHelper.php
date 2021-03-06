<?php

namespace App\View\Helper;

use Cake\Routing\Router;
use Cake\View\Helper;
use Cake\View\View;


class CategoriesHelper extends Helper
{

    function getCategory($data, $parent = 0)
    {
        $cate_chil = array();
        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $parent) {
                $cate_chil[] = $value;
            }
        }
        if ($cate_chil) {
            foreach ($cate_chil as $keys => $values) {
                echo "<li class='list-group-item menu1'>";
                if ($values['parent_id'] != 0) {
                    echo "<a href='" . Router::url(['controller' => 'Categories', 'action' => 'view', $values['cate_id']]) . "' id='menuchild" . $values['cate_id'] . "'>";
                } else {
                    echo "<a>";
                }
                echo $values['cate_name'];
                echo "</a>";
                echo "</li>";
                echo "<ul>";
                $this->getCategory($data, $values['cate_id']);
                echo "</ul>";
            }
        }
    }

    function lstCategory($data = array(), $parent = 0, $str = "--", $select = 0)
    {
        foreach ($data as $key => $value) {
            $id = $value['cate_id'];
            $name = $value['cate_name'];
            if ($value['parent_id'] == $parent) {
                if ($select != 0 && $id == $select) {
                    echo "<option value='$id' selected='selected'>$str $name</option>";
                } else {
                    echo "<option value='$id'>$str $name</option>";
                }
                lstCategory($data, $id, $str . "--");
            }
        }
    }

}

