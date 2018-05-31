<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


class RankingController extends AppController
{  
    public function initialize()
    { 
      $this->Food= TableRegistry::get('foods');
      $this->Comment= TableRegistry::get('comments');
      $this->loadComponent('Paginator');
    }
    
   public function index()
   {
       //ユーザーが評価した数字を、フードID毎に合計 GROUP BY food id || 合計
       //合計データを大きい順に表示させる
       // food_id=1  score 5 || food_id=2 score 10
       //SELECT food_id, SUM(score) FROM  comments GROUP BY food_id DESC;
      
       $query = $this->Comment->find()->contain('Foods');
       $scores = $query->select(['id','food_id','avg'=> $query->func()->avg('score'),'Foods.name','Foods.imgURL','Foods.title'])
       ->order(['avg' => 'DESC'])
       ->limit(10)
       ->group(['food_id'])
       ->all();
       $this->set(compact('scores',$scores));
       
       //件数み取得
       $foods=$this->Food->find()->limit(20)->all();
       $this->log($foods,"debug");
       $this->set(compact('foods',$foods));
    }
}