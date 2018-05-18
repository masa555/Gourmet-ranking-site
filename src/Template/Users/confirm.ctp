<nav class="large-3 medium-4 columns" id="actions-sidebar">
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
     <p><?=$this->Html->link(__('戻る'),['controller'=>'users','action'=>'add'])?></li></p>
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
    </body>
    