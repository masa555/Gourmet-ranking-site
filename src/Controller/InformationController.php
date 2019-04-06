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
class InformationController extends AppController
{  
    public function index()
    {
       
    }
      public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['information','index']);
    }
    
}
