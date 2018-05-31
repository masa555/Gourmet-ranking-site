    <div class="container-fluid">
        　<?php echo $this->Html->css('style') ?>
        <ul class="side-nav">
    </ul>
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
          <li role="presentation"><?= $this->Html->link(__('ログアウト'), ['controller'=>'users','action' =>'logout']) ?></li>	
			</ul>
		</div>
	</div>
	</nav>
	<br>
	<br>
	<br>
<div class="comments form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <h1><?= __('コメント編集') ?></h1>
         <div class="form-group">
        <?php
            echo $this->Form->control('food_id', ['options' => $foods,'label'=>'ご当地グルメ']);
            echo"※上の一覧から食べ物を選んでください";
            echo $this->Form->control('commenter',['label'=>'投稿者']);
            echo"※コメント入力者の名前を入力してください。（匿名可能です。）";
            echo $this->Form->control('title',['label'=>'タイトル']);
            echo"※ タイトルを入力してください。";
            echo $this->Form->control('body',['label'=>'コメント']);
            echo"内容を書き込んでください(誹謗中傷はご遠慮ください。)";
            echo $this->Form->control('score',['label'=>'評価']);
            echo"点数を1～5までを入力してください。（合計5点まで）";
        ?>
        </div>
    </fieldset>
     <?= $this->Form->button('保存',
  array('div'=>'form-group',
  'class'=>'center-block btn-success btn-lg  active',
  )); ?>
    <?= $this->Form->end() ?>
</div>
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