
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    　<?php echo $this->Html->css('style') ?>    
    </ul>
</nav>
<!--container-->
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
          <li role="presentation"><?= $this->Html->link(__('ログアウト'), ['controller'=>'users','action' =>'logout']) ?></li>	
			</ul>
		</div>
	</div>
	</nav>
	<br>
	<br>
	<br>
      <?=  $this->Html->image($spot->imgURL,
                     array('width'=>'500','height'=>'266', ['alt' => '北関東']))?></td>
      <div class="row">
        <h1><span class="label label-info"><?=('おすすめ!!スポット') ?></span></h1>
        <!--画像-->
         <h1><span><?= h($spot->name) ?></span></h1>
       <?= $this->HTML->image(h($spot->URL),array('width'=>'1400','height'=>'200',"class"=>"img-responsive",["alt"=>"画像",
    "url"])); ?>
    <!--説明文-->
     <div class="container-fluid">
    <div class="row">
        <h2><span class="label label-info"><?= ('ここがおすすめ!!') ?></span></h2>
        <h4><?= $this->Text->autoParagraph(h($spot->infomation));?></h4>
    </div>
       <div class="row">
        <h2><span class="label label-warning"><?= __('店舗情報!!') ?></span></h2>
        <h4><?= $this->Text->autoParagraph(h($spot->text)); ?></h4>
           </div>
            </div>
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