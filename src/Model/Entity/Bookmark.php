<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bookmark Entity
 *
 * @property int $book_id
 * @property int $cate_id
 * @property string $book_title
 * @property string $book_description
 * @property string $book_url
 * @property \Cake\I18n\Time $book_created
 * @property \Cake\I18n\Time $book_modified
 *
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Tag[] $tags
 */class Bookmark extends Entity
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
        'book_id' => false
    ];
}
