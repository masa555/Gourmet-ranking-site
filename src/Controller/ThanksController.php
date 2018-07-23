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
class ThanksController extends AppController
{
   
    public function index()
       {   
        $this->set(compact('thanks'));
        $this->Flash->success(__('ご登録ありがとうございます。'));
         
      }
    
    public function initialize()
     {  
      parent::initialize();
      $this->Auth->allow(['thanks','index']);
    }  
}
