<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

class UsersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        // 🔓 SOLO login es público
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    // 🔐 LOGIN CON IDIOMA GLOBAL
    public function login()
    {
        $this->request->allowMethod(['get', 'post']);

        $result = $this->Authentication->getResult();

        // ✅ SI YA ESTÁ LOGUEADO
        if ($result->isValid()) {

            // 🌐 GUARDAR IDIOMA EN SESIÓN (si viene del form)
            $lang = $this->request->getData('lang') ?? 'es';
            $this->request->getSession()->write('Config.language', $lang);

            return $this->redirect([
                'controller' => 'Direcciones',
                'action' => 'index'
            ]);
        }

        // ❌ LOGIN FALLIDO
        if ($this->request->is('post')) {
            if (!$result->isValid()) {
                $this->Flash->error(__('Correo o contraseña incorrectos'));
            }
        }
    }

    // 🚪 LOGOUT
    public function logout()
    {
        $this->Authentication->logout();

        // 🔥 OPCIONAL: limpiar idioma
        $this->request->getSession()->delete('Config.language');

        return $this->redirect('/');
    }

    // 📊 CRUD USERS

    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario guardado correctamente'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Error al guardar el usuario'));
        }

        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario actualizado'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Error al actualizar'));
        }

        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);

        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuario eliminado'));
        } else {
            $this->Flash->error(__('Error al eliminar'));
        }

        return $this->redirect(['action' => 'index']);
    }
}