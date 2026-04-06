<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Direcciones Model
 *
 * @method \App\Model\Entity\Direccione newEmptyEntity()
 * @method \App\Model\Entity\Direccione newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Direccione> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direccione get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Direccione findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Direccione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Direccione> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direccione|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Direccione saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Direccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Direccione>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Direccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Direccione> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Direccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Direccione>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Direccione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Direccione> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DireccionesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('direcciones');
        $this->setDisplayField('calle');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('calle')
            ->maxLength('calle', 255)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->scalar('ciudad')
            ->maxLength('ciudad', 100)
            ->requirePresence('ciudad', 'create')
            ->notEmptyString('ciudad');

        $validator
            ->scalar('codigo_postal')
            ->maxLength('codigo_postal', 20)
            ->requirePresence('codigo_postal', 'create')
            ->notEmptyString('codigo_postal');

        return $validator;
    }
}
