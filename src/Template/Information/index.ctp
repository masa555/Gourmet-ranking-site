<div class="container">
　<?php echo $this->Html->css('style') ?>    
<ul class="side-nav">
        <!--home画面-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbarEexample10">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
		    <img alt="北関東グルメランキング" src="/webroot/img/北関東.jpg">
			</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbarEexample10">
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
    <br>
    <div class="jumbotron">
<div class="container-fluid">
    <div class="center-block">
     <?=$this->Html->image("北関東グルメ1.jpg",array('width'=>'1000','height'=>'400','class'=>'img-responsive',"alt"=>"画像"));?>
     <div class="row">
     <h2><?=('絶品北関東B級グルメ10選ランキングでご紹介!') ?></h2>
<h3><?=$this->Html->para(null,'北関東のどこへ行こう、どこの観光へ行こう出会う先へ新たな発見、出会いがある。
<br>1～10位まで厳選してご紹介します！');?></h3>
</div>
　<div class="row">
     <h2><?=('他群馬、栃木、埼玉各県でとくにおすすめの観光スポットを厳選してご紹介!') ?></h2>
     <h3><?=$this->Html->para(null,'群馬県や栃木県、埼玉県、茨城県の観光スポットがすぐに見つかる<br>
     是非旅行に行く際は参考にしてみてください！');?></h3>
        </div>
       </div>
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
 
 
 

