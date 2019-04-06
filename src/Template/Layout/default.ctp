<?php
$cakeDescription = '北関東グルメランキング';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
     
       <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon'); ?>

    <?php echo $this->Html->css('style') ?>   
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <!-- jquery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   
    <!-- bootstrap framework -->
     <?= $this->Html->script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'); ?>
     <?= $this->Html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') ?>
     <?= $this->Html->script('//maps.google.com/maps/api/js?key=AIzaSyBqNxM_b001SSoPqo0765iu4LRpdIZhyyc'); ?>
 

</head>
<!--メニュー -->
<body>
     <nav class="navbar navbar-default navbar-fixed-top">
       <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbarEexample8">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">
		    <img src="/img/北関東.jpg"alt="北関東グルメランキング">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbarEexample8">
			<ul class="nav navbar-nav navbar-right">
			<li role="presentation" class="active"><?= $this->Html->link(__('ホーム'), ['controller'=>'Ranking', 'action'=>'index']) ?></li>
            <li role="presentation"><?= $this->Html->link(__('北関東グルメとは'), ['controller' => 'information', 'action' =>'index']) ?></li>
           <li role="presentation"><?= $this->Html->link(__('観光一覧'), ['controller' => 'spots', 'action' => 'index'])?></li>
           <li role="presentation"><?= $this->Html->link(__('コメント投稿'), ['controller' => 'comments', 'action' => 'add']) ?></li>
           	<li role="presentation"><?php if($this->request->getsession()->read('Auth.User.id')):
           	?>
			<a href="/users/logout">ログアウト</a></li>
			
          　<?php endif;?>
          
			</ul>

		</div>
	</div>
	</nav>
	<?= $this->Flash->render() ?>
    
     <div class="container" style="margin-top:60px;">
         
    <div class="container clearfix">
        
    </div>
        <?= $this->fetch('content') ?>
    </div>
    </div>
    <!--footer-->
    <footer>
      <div class="center-filud"> 
      <div class="text-center">
      <div class="footer-menu">
         <nav>
                  <li><?= $this->Html->link(__('利用規約'), ['controller' => 'userpolicy', 'action' =>'index']) ?></li>
                  <li><?= $this->Html->link(__('プライバシーポリシー'), ['controller' => 'privacypolicy', 'action' =>'index']) ?></li>
                  <li><?=$this->Html->link(__('お問い合わせ'),['controller'=>'contact','action'=>'index'])?></li>
         </nav>
           </div> 
         </div>
          
        <div class="copyright">
             <small>@2018北関東グルメAll Rights reserved.</small>
        </div> 
    </footer>
</body>
</html>
