<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Spot Entity
 *
 * @property int $id
 * @property string $name
 * @property string $URL
 * @property string $infomation
 * @property string $text
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Spot extends Entity
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
        'name' => true,
        'URL' => true,
        'infomation' => true,
        'text' => true,
        'created' => true,
        'modified' => true
    ];
}
