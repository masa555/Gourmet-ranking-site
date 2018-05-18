<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Food Entity
 *
 * @property int $id
 * @property string $prefecture
 * @property int $rank
 * @property string $name
 * @property string $title
 * @property string $imgURL
 * @property string $slug
 * @property string $price
 * @property string $text
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Comment[] $comments
 */
class Food extends Entity
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
        'prefecture' => true,
        'rank' => true,
        'name' => true,
        'title' => true,
        'imgURL' => true,
        'slug' => true,
        'price' => true,
        'text' => true,
        'created' => true,
        'modified' => true,
        'comments' => true
    ];
}
