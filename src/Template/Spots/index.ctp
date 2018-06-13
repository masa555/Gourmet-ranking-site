<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spot[]|\Cake\Collection\CollectionInterface $spots
 */
?>
<div class="container-fluid">
　<?php echo $this->Html->css('style') ?>    
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
<nav class="col-md-5" id="actions-sidebar">
    <ul class="side-nav">
    </ul>
</nav>
 <br>
 <br>
 <br>
<div class="container-filud">
    <h1><span class="label label-warning"><?= __('観光スポット一覧表') ?></span></h1>
<div class="form-group form-group-lg">
  <section class=" col-md-4">
       <div class="row">
           </div>
      </section>
       <div class="col-md-4">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
             <?php foreach ($spots as $spot): ?>
            <tr>
                 <h2><?= $this->Html->link($spot['name'], ['controller'=>'Spots','action' => 'view', $spot->id]) ?></h2>
            </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
    <div class="container-fluid">
    <div class="paginator">
         <nav>
        <ul class="pagination pagination-sm">
            <?= $this->Paginator->first('<< ' . __('最初')) ?>
            <?= $this->Paginator->prev('< ' . __('前に')) ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('最後') . ' >>') ?>
        </ul>
        </nav>
        </div>
      </div>
     </div>
    </div>
 </div>
 </div>
 