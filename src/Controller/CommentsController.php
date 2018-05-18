<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comments Controller
 *
 * @property \App\Model\Table\CommentsTable $Comments
 *
 * @method \App\Model\Entity\Comment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Foods']
        ];
        $comments = $this->paginate($this->Comments);

        $this->set(compact('comments'));
    }

    /**
     * View method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => ['Foods']
        ]);

        $this->set('comment', $comment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comment = $this->Comments->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());

            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('保存しました'));
                
                //追加されたフードの一覧画面に移動
                return $this->redirect(['controller'=>'foods','action'=>'view', $comment['food_id']]);
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('追加できません、もう一度お願いします'));
        }
        $foods = $this->Comments->Foods->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'foods'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('保存しました'));
                /*こちらのリダイレクト先編集や削除などしたらfood viewの食べ物内容ページに戻したい*/
                return $this->redirect(['controller'=>'foods','action'=>'view', $comment['food_id']]);
            }
            $this->Flash->error(__('すいません　コメントを編集できません、もう一度お願いします'));
        }
        $foods = $this->Comments->Foods->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'foods'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comments->get($id);
        if ($this->Comments->delete($comment)) {
            $this->Flash->success(__('削除しました。'));
        } else {
            $this->Flash->error(__('削除できません。再度試してください'));
        }

        return $this->redirect(['controller'=>'foods','action'=>'view', $comment['food_id']]);
    }
}
