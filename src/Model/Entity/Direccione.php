<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Direccione Entity
 *
 * @property int $id
 * @property string $calle
 * @property string $ciudad
 * @property string $codigo_postal
 * @property string|null $telefono
 * @property string|null $referencia
 * @property string|null $pais
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 */
class Direccione extends Entity
{
    protected array $_accessible = [
        'calle' => true,
        'ciudad' => true,
        'codigo_postal' => true,

        // 🔥 NUEVOS CAMPOS
        'telefono' => true,
        'referencia' => true,
        'pais' => true,

        'created' => true,
        'modified' => true,
    ];
}