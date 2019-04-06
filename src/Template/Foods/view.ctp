<!--contents-->　 
<?php echo $this->Html->css('style') ?>
<br>
<br>
<br>
<!--title-->
<h1>
  <span class="label label-warning"><?= h($food->name) ?></span>
</h1><?=  $this->Html->image($food->imgURL,
                     array('width'=>'1400','height'=>'200',"class"=>"img-responsive", ['alt' => '北関東']))?>
</td>
<div class="row">
<h1>
  <span class="label label-warning"><?= __('ここがおすすめ!!') ?> </span>
</h1>
<h4><?= $this->Text->autoParagraph(h($food->slug)); ?></h4>
</div>
<div class="row">
<h2>
  <span class="label label-info"><?= __('店舗情報!!') ?> </span>
</h2>
<h4><?= $this->Text->autoParagraph(h($food->text)); ?></h4>
<p>住所や駅名、目印などで検索できます。</p>　　
<form onsubmit="return false;">　　 
  <input type="text" value="みやこ食堂" id="address">　 
  <button type="button" value="検索" id="map_button">検索</button>　　
</form>
<!-- 地図を表示させる要素 -->
<div class="map_box01">
<div id="map-canvas" style="width: 500px;height: 350px;">
</div>
</div>　　 
<?php  echo $this->Html->script('googlemap'); ?>
<p>地図上をクリックするとマーカーを移動できます。</p>
</div>
<div class="related">
<!--coments-->　 
<div class="row">
<h2>
  <span class="label label-info"><?= __('コメント一覧') ?> </span>
</h2>
<p><?= h($food->body) ?></p>
</div>
<!--coment-->
<div class="row">
<table class="table table-bordered">
  <div class="table-responsive">
  <tr class="warning">
    <th>名前</th>
    <th>タイトル</th>
    <th>作成日時</th>
    <th>本文</th>
  </tr>
  </div>
  <div class="row">
  <?php foreach ($comments->comments as $comment): ?>
  <tbody>
    <tr class="info">
      <td>
      <p><?= $this->text->autoParagraph($comment->commenter, ['action' => 'view', $comment->commenter]) ?></p>
      <small><?= $this->Html->link(__('変更'), ['controller' => 'Comments','action' => 'edit', $comment->id]) ?></small>
      <small><?= $this->Form->postlink(__('削除'), ['controller'=>'Comments','action'=>'delete',$comment->id], ['confirm' => __('本当に削除していいですか？', $comment->id)]) ?></small>
      </td>
      <td>
      <p><?= $this->text->autoParagraph($comment->title, ['action' => 'view', $comment->slug]) ?></p>
      </td>
      <td>
      <p><?= $comment->created->format(DATE_RFC850) ?></p>
      </td>
      <td>
      <strong><?= h($comment->body) ?></strong>
      </td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
</div>
</div>
</div>
</div>
</div>