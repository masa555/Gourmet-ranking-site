<div class="comments form large-9 medium-8 columns content">
    <ul class="side-nav">
    </ul>
    <?= $this->Form->create($comment) ?>
    <fieldset>
          <p><?=$this->Html->link(__('戻る'),['controller'=>'','action'=>'index'])?></li></p>     
        <h1><?= __('コメント投稿') ?></h1>
         <div class="form-group">
        <?php
            echo $this->Form->control('food_id',['options' => $foods,'label'=>'ご当地グルメ']);
            echo"※上の一覧から食べ物を選んでください";
            echo $this->Form->control('commenter',['label'=>'投稿者']);
            echo"※コメント入力者の名前を入力してください。（匿名可能です。）";
            echo $this->Form->control('title',['label'=>'タイトル']);
            echo"※ タイトルを入力してください。";
            echo $this->Form->control('body',['label'=>'コメント']);
            echo"内容を書き込んでください(誹謗中傷はご遠慮ください。)";
            echo $this->Form->control('score',['label'=>'評価']);
            echo"点数を1～5までを入力してください。（合計5点まで）";
        ?>
        </div>
    </fieldset>
  <?= $this->Form->button('投稿',
  array('div'=>'form-group',
  'class'=>'center-block btn-success btn-lg  active',
  )); ?>
    <?= $this->Form->end() ?>
</div>
</div>
