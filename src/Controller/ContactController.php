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
class ContactController extends AppController
{  
    public function index()
    {
        $this->set(compact('Contact'));
    }
     public function initialize()
{
    parent::initialize();
    // 許可アクションリストに 'add' アクションを追加
    $this->Auth->allow(['contact', 'index']);
}
}
