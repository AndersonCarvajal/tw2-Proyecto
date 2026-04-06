<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\I18n\I18n;

class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        // 🔥 1. LEER IDIOMA DESDE URL (?lang=es o en)
        $lang = $this->request->getQuery('lang');

        if ($lang) {
            // Guardar en sesión
            $this->request->getSession()->write('Config.language', $lang);
        } else {
            // Si no viene en URL, usar sesión
            $lang = $this->request->getSession()->read('Config.language');
        }

        // 🔥 2. DEFAULT
        if (!$lang) {
            $lang = 'es';
        }

        // 🔥 3. APLICAR IDIOMA
        I18n::setLocale($lang);
    }
}