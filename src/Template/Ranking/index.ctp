
     <div class="center-filud">
     <!--ここまで-->
  　<!--CSSを記述-->
  　<br>
  　<br>
  　<br>
  　<br>
  　<?php echo $this->Html->css('style') ?>
  　<?php echo $this->Html->css('half-slider') ?>
  　<h3>おすすめグルメランキング！</h3>
    <?php $rank=1;?>
    <?php foreach ($scores as $score):
    ?>      
 <div class="row">
  <div class="col-sm-6 col-md-3">
    <h2>
      <?php
        if($rank==1){
           echo  $this->Html->image('/webroot/img/crown 1.png', array('alt' => 'one'));
            
        }else if($rank==2){
           echo $this->Html->image('/webroot/img/crown2.png', array('alt' => 'two'));
          
        }else if($rank==3){
          echo $this->Html->image('/webroot/img/crown3.png', array('alt' => 'three'));
        }?>
    </h2>
    <h1>
      第<?php echo $rank;
         $rank=$rank+1;
        ?>位 
    </h1>
    <?php
           /*ここで.を-に変換してます*/
           $avg = str_replace(".", "-", $score['avg']);
           ?>
    <!--URL-->
    <h3><?=$this->Html->link ($score["food"]["name"],["controller"=>'Foods','action'=>'view',$score['food_id']]);?></h3>
    <!--文章-->
     一押し！
    <h4><?=h($score["food"]["title"]);?></h4>
    <h3>おすすめ度</h3>
    <span class="rate rate<?= h($avg) ?>"></span>
  </div>
  <div class="col-md-6">
    <!--画像-->
    <div class="img-responsive "><?=$this->html->image($score["food"]["imgURL"],array("width"=>'350',"height"=>"200","class"=>"img-responsive",
          ["alt"=>"北関東"]))?>
      <br>
    </div>
  </div>
  <!--ループ文終了-->
  </div>
  <hr>
 　　<?php endforeach; ?>
 　　
 　<!--フッター-->　
     </div>
    　 </div>　  