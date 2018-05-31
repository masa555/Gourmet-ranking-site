<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <nav class="navbar navbar-default navbar-fixed-top">
    	　<?php echo $this->Html->css('style') ?>    
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
 <?= $this->Form->create($user) ?>
    <input type="hidden" name="mode" value="">
    <fieldset>
        <legend><h2><?= __('入力内容確定画面') ?></h2></legend>
        <div class="text-center">
        <?php
            echo $this->request->data['email'];
            echo "<br>";
            echo "<p>パスワードは表示されません。</p>";

        echo $this->Form->hidden('email');
        echo $this->Form->hidden('password');
        echo $this->Form->hidden('password_confirm');
        ?>
    </fieldset>
    <button class="btn btn-link btn-sm">
     </button>
    <div class="form-group">
		<?php echo $this->Form->submit('送信する', array(
			'div' => 'col col-md-9 col-md-offset-3',
			'class' => 'center-block btn-success btn-lg active'
		)); ?>
	</div>
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
    