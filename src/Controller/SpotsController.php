<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Spots Controller
 *
 * @property \App\Model\Table\SpotsTable $Spots
 *
 * @method \App\Model\Entity\Spot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $spots = $this->paginate($this->Spots);

        $this->set(compact('spots'));
    }

    /**
     * View method
     *
     * @param string|null $id Spot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $spot = $this->Spots->get($id, [
            'contain' => []
        ]);

        $this->set('spot', $spot);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $spot = $this->Spots->newEntity();
        if ($this->request->is('post')) {
            $spot = $this->Spots->patchEntity($spot, $this->request->getData());
            if ($this->Spots->save($spot)) {
                $this->Flash->success(__('The spot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('保存できませんでした。再度入力してください。'));
        }
        $this->set(compact('spot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Spot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $spot = $this->Spots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $spot = $this->Spots->patchEntity($spot, $this->request->getData());
            if ($this->Spots->save($spot)) {
                $this->Flash->success(__('保存しました'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('保存できませんでした。再度入力してください。。'));
        }
        $this->set(compact('spot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Spot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $spot = $this->Spots->get($id);
        if ($this->Spots->delete($spot)) {
            $this->Flash->success(__('削除しました。'));
        } else {
            $this->Flash->error(__('削除できませんでした、再度入力してください。'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['spots','index']);
        $this->Auth->allow(['spots','view']);
    }
}
