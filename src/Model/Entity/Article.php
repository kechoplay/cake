<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $arc_id
 * @property string $arc_name
 * @property string $arc_descript
 * @property int $cate_id
 *
 * @property \App\Model\Entity\Article $article
 * @property \App\Model\Entity\Category $category
 */
class Article extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'arc_id' => false
    ];
}
