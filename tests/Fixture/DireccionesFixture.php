<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DireccionesFixture
 */
class DireccionesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'calle' => 'Lorem ipsum dolor sit amet',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'codigo_postal' => 'Lorem ipsum dolor ',
                'created' => '2026-04-02 13:29:45',
                'modified' => '2026-04-02 13:29:45',
            ],
        ];
        parent::init();
    }
}
