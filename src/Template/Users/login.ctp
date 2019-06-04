　<?php echo $this->Html->css('style') ?>   
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
  array('div'=>'btn-group ',
  'class'=>'button center-block ',
  )); ?>
<?= $this->Form->end() ?>
  </div>
 </div>
 </div>
</body>


