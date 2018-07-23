
    	　<?php echo $this->Html->css('style') ?>    
	<br>
	<br>
	<br>
	
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
            echo "<p>**********</p>";

        echo $this->Form->hidden('email');
        echo $this->Form->hidden('password');
        echo $this->Form->hidden('password_confirm');
        ?>
    </fieldset>
    <button class="btn btn-link btn-sm">
     </button>
    <div class="form-group">
		<?php echo $this->Form->button('送信する', array(
			'div' => 'btn-group',
		    'class'=>'button center-block ',
		)); ?>
	</div>
	</div>
<?php echo $this->Form->end(); ?>
    <br>
    </div>
 
    </body>
    