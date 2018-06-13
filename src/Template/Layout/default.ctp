<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
       <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('cake.css') ?> -->
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
     
    <!-- jquery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- bootstrap framework -->
     <?= $this->Html->script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'); ?>
     <?= $this->Html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') ?>
     
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
			<a class="navbar-brand" href="/.">
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
	
    
    <!--<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <a href=""><?=$this->fetch('title') ?></a>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/"></a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/"></a></li>
            </ul>
        </div>
    </nav>
    -->
     <div class="container">
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
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
         </nav>
         </div>
        <div class="copyright">
             <small>copyrights.@北関東グルメAll rights reserved.</small>
        </div> 
    </footer>
     </div> 
</body>
</html>
