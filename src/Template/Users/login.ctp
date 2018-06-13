<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
　<?php echo $this->Html->css('style') ?>        
    </ul>
</nav>
<div class="container-fluid">
<ul class="side-nav">
        <!--home画面-->
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
          <li role="presentation"><?= $this->Html->link(__('ログイン'), ['controller'=>'users','action' =>'login']) ?></li>	
			</ul>
		</div>
	</div>
	</nav>
	<br>
	<br>
	<br>
	 <div class="text-center">
	     
	     <p>ようこそ！お越しくださいました！</p>
	 </div>
     <div class="text-right">
<?=$this->Html->link(__('新規登録はこちらから'),['controller'=>'users','action'=>'add'])?>
</div>
  <?php
  
    $myTemplates = [
    'legend' => '',
  ];
  $this->Form->templates($myTemplates);
  
  echo $this->Form->create('BoostCake', array(
)); ?>
  <div class="form-group form-group-lg">
<?=$this->Form->inputs(array(
    'email'=> array('label'=>'メールアドレス'), 
    'password'=> array('label'=>'パスワード')
    ))?>
     <?= $this->Form->button('ログイン',
  array('div'=>'form-group',
  'class'=>'center-block btn-success btn-lg  active',
  )); ?>
<?= $this->Form->end() ?>
  </div>
 </div>
 </div>
</body>


