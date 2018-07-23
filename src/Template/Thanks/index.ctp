<html>
    
    <body>
        <?php echo $this->Html->css('style') ?>
         <div class="thanks"><h1>ご登録ありがとうございました。こちらからログインしてください。</h1></div>
        <h3><?= $this->Html->link(__('ログイン画面に戻る'), ['controller'=>'Users', 'action'=>'login']) ?></h3>
    <!--footer-->
    </body>
</html>
