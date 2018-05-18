<?php
namespace App\Controller;

use App\Controller\AppController;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{   
    
public function login()
{
	if($this->request->is('post')){
		$user = $this->Auth->identify();
		
		//print_r($this->request);
		if($user){
			$this->Auth->setUser($user);
			return $this->redirect($this->Auth->redirectUrl('http://cake-php-code-masa55.c9users.io/ranking'));
		}
		$this->Flash->error('ユーザー名かパスワードが間違ってます');
	}
  }
 
  public function beforeFilter(\Cake\Event\Event $event) {
	parent::beforeFilter($event);
	$this->Auth->allow(['add']);
  }
    public function logout()
  {
	$this->Flash->success('ログアウトしました');
	return $this->redirect($this->Auth->logout('http://cake-php-code-masa55.c9users.io/my_app_name/login'));
 }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        
        
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {  
        $user = $this->Users->newEntity();
        
        if ($this->request->is('post')) {
            //postデータをuserモデルに入れる
            $user = $this->Users->patchEntity($user,$this->request->getData());
            $post_password = $this->request->getData('password');
            $post_password_confirm = $this->request->getData('password_confirm');
            
            //ここにパスワードの認証チェックコード書く
             if( $post_password === $post_password_confirm)
             {
               //ここで、確認画面か登録の分岐をさせる
               $mode = $this->request->getData('mode');
               
               if($mode == "confirm"){
                   // 確認画面を表示する
                   $this->set(compact('user'));
                   $this->render('confirm');
               }else{
                    //新規の場合ユーザーデータ登録
                 if ($this->Users->save($user)) {
                    $this->Flash->success(__('登録しました。'));
                    return $this->redirect(['controller' => 'ranking','action' => 'index']);
                  };
               }
               
             }else{
                //echo"パスワードが一致してないよ";
                //$this->return->Flash->error->message(__('パスワードが一致しません再度入力してください'));
                $this->Flash->error(__('パスワードが一致しません再度入力してください'));
             }
             
            //$this->Flash->error(__('ユーザー登録に失敗しました　再度入力してください'));
        }
        
         $this->set(compact('user'));
    }
        
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
     public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('すでに編集されています'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('ユーザー登録し失敗しました'));
        }
        $this->set(compact('user'));
    }
    

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('すでに削除してあります。'));
        } else {
            $this->Flash->error(__('削除できません'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout','add']);
    }
    
}

