<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php echo $this->Html->css('style') ?>     
	<br>
	<br>
	<br>
    <ul class="side-nav">
    </ul>
</nav>
 <div class="container-fluid">
    <div class="form-group form-group-lg">
    <?= $this->Form->create($user) ?>
    <input type="hidden" name="mode" value="confirm">
    <fieldset>
        <legend><h2><?= ('登録手続き画面') ?></h2></legend>
        <small><p>⚠︎メールアドレスは大文字、小文字、数字混じりで、正しく入力して下さい。</p></small>
        <small><p>⚠︎パスワードは半角英数字のみで、正しく入力して下さい。</p></small>
        <?php
            echo $this->Form->label('email','※メールアドレス:');
            echo $this->Form->text('email');
            echo $this->Form->error('email');
            echo $this->Form->label('Password','※パスワード:'); 
            echo $this->Form->password('password');
            echo ("<small><p>パスワードはメールアドレスと異なる文字列にしてください。<br>
            同一文字列・生年月日・車のナンバー・電話番号・住所番地またはそれらを並び変えたもの<br>など、第三者に推測されやすいパスワードはお避けください。</p></small>");
            echo $this->Form->error('password');
            echo$this->Form->label('password_confirm','パスワード（確認）:');
            echo $this->Form->password('password_confirm'); 
            echo ("<small><p>確認のためもう一度入力してください。</p></small>");
            echo $this->Form->error('password_confirm'); 
        ?>
        </div>
    </fieldset>
   <div class="form-group">
		<?php echo $this->Form->button('登録する', array(
			'div' => 'btn-group',
		    'class'=>'button center-block ',
		)); ?>
	</div>
	
<?php echo $this->Form->end(); ?>
    <br>
    </div>
 
    </body>
    