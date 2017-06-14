<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Categories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cates
 * @property \Cake\ORM\Association\BelongsTo $ParentCategories
 * @property \Cake\ORM\Association\HasMany $ChildCategories
 *
 * @method \App\Model\Entity\Category get($primaryKey, $options = [])
 * @method \App\Model\Entity\Category newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Category[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Category|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Category patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Category[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Category findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriesTable extends Table
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

        $this->addBehavior('Tree');

//        $categories->recover();
//        $list = $categories->find('treeList');
        $this->table('categories');
        $this->displayField('cate_name');
        $this->primaryKey('cate_id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'cate_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('lft')
            ->allowEmpty('lft');

        $validator
            ->integer('rght')
            ->allowEmpty('rght');

        $validator
            ->allowEmpty('cate_name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['cate_id'], 'Categories'));


        return $rules;
    }

    public function getParent()
    {
        return $this->find('all')
            ->where(['parent_id'=>0])
            ->toArray();
    }



    public function getAll()
    {
        return $this->find('all')->toArray();
    }

    public function getChild($child=null)
    {
        return $this->find('all')
            ->where(['parent_id'=>$child])
            ->toArray();
    }

    public function treeListCategory()
    {
        $list = $this->find('children', ['for' => 1]);
        return $list;

    }
}
