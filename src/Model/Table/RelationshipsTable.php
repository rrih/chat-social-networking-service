<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Relationships Model
 *
 * @property \App\Model\Table\FollowersTable&\Cake\ORM\Association\BelongsTo $Followers
 * @property \App\Model\Table\FollowingsTable&\Cake\ORM\Association\BelongsTo $Followings
 *
 * @method \App\Model\Entity\Relationship newEmptyEntity()
 * @method \App\Model\Entity\Relationship newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Relationship[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Relationship get($primaryKey, $options = [])
 * @method \App\Model\Entity\Relationship findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Relationship patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Relationship[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Relationship|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relationship saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relationship[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Relationship[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Relationship[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Relationship[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RelationshipsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('relationships');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'follower_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'following_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        // $rules->add($rules->existsIn(['follower_id'], 'Followers'), ['errorField' => 'follower_id']);
        // $rules->add($rules->existsIn(['following_id'], 'Followings'), ['errorField' => 'following_id']);

        return $rules;
    }
}
