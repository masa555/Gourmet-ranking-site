<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Spots Model
 *
 * @method \App\Model\Entity\Spot get($primaryKey, $options = [])
 * @method \App\Model\Entity\Spot newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Spot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Spot|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Spot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Spot[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Spot findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SpotsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('spots');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('URL')
            ->requirePresence('URL', 'create')
            ->notEmpty('URL');

        $validator
            ->scalar('infomation')
            ->requirePresence('infomation', 'create')
            ->notEmpty('infomation');

        $validator
            ->scalar('text')
            ->requirePresence('text', 'create')
            ->notEmpty('text');

        return $validator;
    }
}
