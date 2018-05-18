
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    </ul>
</nav>
<!--container-->
<div class="container-fluid">
<p><?=$this->Html->link(__('戻る'),['controller'=>'spots','action'=>'index'])?></li></p>  
      <?=  $this->Html->image($spot->imgURL,
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