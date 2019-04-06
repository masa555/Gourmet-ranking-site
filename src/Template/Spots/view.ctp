
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    　<?php echo $this->Html->css('style') ?>    
    </ul>
</nav>
<!--container-->
<div class="container-fluid">

      <?=$this->Html->image($spot->imgURL,
                     array('width'=>'500','height'=>'266', ['alt' => '北関東']))?></td>
        
      <div class="row">
        <h1><span class="label label-info"><?=('おすすめ!!スポット') ?></span></h1>
        <!--画像-->
         <h1><span><?= h($spot->name) ?></span></h1>
       <?= $this->HTML->image(h($spot->URL),array('width'=>'1400','height'=>'200',"class"=>"img-responsive",["alt"=>"画像",
    "url"])); ?>
    <!--説明文-->
     <div class="container-fluid">
    <div class="row">
        <h2><span class="label label-info"><?= ('ここがおすすめ!!') ?></span></h2>
        <h4><?= $this->Text->autoParagraph(h($spot->infomation));?></h4>
    </div>
       <div class="row">
        <h2><span class="label label-warning"><?= __('店舗情報!!') ?></span></h2>
        <h4><?= $this->Text->autoParagraph(h($spot->text)); ?></h4>
           </div>
            </div>
           </div>
          </div>
          
     <p>住所や駅名、目印などで検索できます。</p>
  <form onsubmit="return false;">
  <input type="text" value="例:群馬県" id="address">
  <button type="button" value="検索" id="map_button">検索</button>
</form>
<!-- 地図を表示させる要素 -->
<div class="map_box01"><div id="map-canvas" style="width: 500px;height: 350px;"></div></div>
　　<?php  echo $this->Html->script('googlemap'); ?>
  <p>地図上をクリックするとマーカーを移動できます。</p>
 
 