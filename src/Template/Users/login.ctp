<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    </ul>
</nav>
<div class="container-fluid">
<div class="text-center">
    <div><h1><span class="label label-warning">北関東ランキングへようこそ！</span></h1></div>
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

