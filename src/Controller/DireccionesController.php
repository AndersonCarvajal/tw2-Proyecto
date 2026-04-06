<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Direcciones Controller
 *
 * @property \App\Model\Table\DireccionesTable $Direcciones
 */
class DireccionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Direcciones->find();
        $direcciones = $this->paginate($query);

        $this->set(compact('direcciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $direccione = $this->Direcciones->get($id, contain: []);
        $this->set(compact('direccione'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $direccione = $this->Direcciones->newEmptyEntity();
        if ($this->request->is('post')) {
            $direccione = $this->Direcciones->patchEntity($direccione, $this->request->getData());
            if ($this->Direcciones->save($direccione)) {
                $this->Flash->success(__('The direccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccione could not be saved. Please, try again.'));
        }
        $this->set(compact('direccione'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $direccione = $this->Direcciones->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $direccione = $this->Direcciones->patchEntity($direccione, $this->request->getData());
            if ($this->Direcciones->save($direccione)) {
                $this->Flash->success(__('The direccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccione could not be saved. Please, try again.'));
        }
        $this->set(compact('direccione'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $direccione = $this->Direcciones->get($id);
        if ($this->Direcciones->delete($direccione)) {
            $this->Flash->success(__('The direccione has been deleted.'));
        } else {
            $this->Flash->error(__('The direccione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
