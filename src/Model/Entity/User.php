<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
// 🔥 ESTE ES EL CORRECTO EN CAKEPHP 5
use Authentication\PasswordHasher\DefaultPasswordHasher;

class User extends Entity
{
    // 🔐 HASH AUTOMÁTICO
    protected function _setPassword($value)
    {
        if (!empty($value)) {
            return (new DefaultPasswordHasher())->hash($value);
        }
    }

    protected array $_accessible = [
        'nombre' => true,
        'apellido' => true,
        'correo' => true,
        'created' => true,
        'modified' => true,
        'password' => true,
        'language' => true,
    ];

    protected array $_hidden = [
        'password',
    ];
}