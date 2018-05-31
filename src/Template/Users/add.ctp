<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
　<?php echo $this->Html->css('style') ?>    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbarEexample8">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
		    <img alt="北関東グルメランキング" src="/webroot/img/北関東.jpg">
			</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbarEexample8">
			<ul class="nav navbar-nav navbar-right">
			 <li role="presentation" class="active"><?= $this->Html->link(__('ホーム'), ['controller'=>'Ranking', 'action'=>'index']) ?></li>
            <li role="presentation"><?= $this->Html->link(__('北関東グルメとは'), ['controller' => 'information', 'action' =>'index']) ?></li>
           <li role="presentation"><?= $this->Html->link(__('観光一覧'), ['controller' => 'spots', 'action' => 'index'])?></li>
           <li role="presentation"><?= $this->Html->link(__('コメント投稿'), ['controller' => 'comments', 'action' => 'add']) ?></li>
          <li role="presentation"><?= $this->Html->link(__('ログアウト'), ['controller'=>'users','action' =>'logout']) ?></li>	
			</ul>
		</div>
	</div>
	</nav>
	<br>
	<br>
	<br>
    <ul class="side-nav">
    </ul>
</nav>
 <div class="container-fluid">
    <div class="form-group form-group-lg">
    <?= $this->Form->create($user) ?>
    <input type="hidden" name="mode" value="confirm">
    <fieldset>
        <legend><h2><?= ('登録手続き画面') ?></h2></legend>
        <small><p>⚠︎メールアドレスは大文字、小文字、数字混じりで、正しく入力して下さい。</p></small>
        <small><p>⚠︎パスワードは半角英数字のみで、正しく入力して下さい。</p></small>
        <?php
            echo $this->Form->label('email','※メールアドレス:');
            echo $this->Form->text('email');
            echo $this->Form->error('email');
            echo $this->Form->label('Password','※パスワード:'); 
            echo $this->Form->password('password');
            echo ("<small><p>パスワードはメールアドレスと異なる文字列にしてください。<br>
            同一文字列・生年月日・車のナンバー・電話番号・住所番地またはそれらを並び変えたもの<br>など、第三者に推測されやすいパスワードはお避けください。</p></small>");
            echo $this->Form->error('password');
            echo$this->Form->label('password_confirm','パスワード（確認）:');
            echo $this->Form->password('password_confirm'); 
            echo ("<small><p>確認のためもう一度入力してください。</p></small>");
            echo $this->Form->error('password_confirm'); 
        ?>
        </div>
    </fieldset>
   <div class="form-group">
		<?php echo $this->Form->submit('登録する', array(
			'div' => 'col col-md-9 col-md-offset-3',
			'class' => 'center-block btn-success btn-lg active'
		)); ?>
	</div>
	
<?php echo $this->Form->end(); ?>
    <br>
    </div>
  <footer>
    <div class="text-center">
    <div class="container">
     <div class="footer-menu">
         <nav>
             <ul>
                  <li><?= $this->Html->link(__('利用規約'), ['controller' => 'userpolicy', 'action' =>'index']) ?></li>
                  <li><?= $this->Html->link(__('プライバシーポリシー'), ['controller' => 'privacypolicy', 'action' =>'index']) ?></li>
             </ul>
         </nav>
         <hr>
        <div class="copyright">
             <small>copyrights.@北関東グルメAll rights reserved.</small>
        </div> 
      </div>
      </div>
    </footer>    
    </body>
    