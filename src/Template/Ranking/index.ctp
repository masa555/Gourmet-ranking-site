<!--container-->
<div class="container-fluid">
<span class="text-warning">
    <h1 class="text-center">北関東グルメ</h1></span>
<hr>
<!--nabvbaer-->
<ul class="side-nav">
        <!--home画面-->
        <nav class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><?= $this->Html->link(__('ホーム'), ['controller'=>'Ranking', 'action'=>'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('北関東グルメとは'), ['controller' => 'information', 'action' =>'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('観光一覧'), ['controller' => 'spots', 'action' => 'index'])?></li>
        <li role="presentation"><?= $this->Html->link(__('コメント投稿'), ['controller' => 'comments', 'action' => 'add']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('ログアウト'), ['controller'=>'users','action' =>'logout']) ?></li>
    </ul>
    </nav>
    <!--contents-->
    <div class="container-fluid">
    <div class="text-left">
    <h1>おすすめご当地北関東グルメランキング</h1>
    <div class="text-right">
        <p>おすすめ宿泊宿情報</p>
    </div>
    
    <!-- ここに最終のループ文章 -->
    <?php //ランク用変数 
    $rank=1;?>
    <?php foreach ($foods as $food): ?>
    
    <div class="row">
        <div class="col-md-3">
            <h1> 
            <?php
            //上位3位までは王冠をつける
            if($rank==1){
             echo $this->Html->image('/webroot/img/crown 1.png', array('alt' => 'one'));
            
            }else if($rank==2){
             echo $this->Html->image('/webroot/img/crown2.png', array('alt' => 'two'));
          
            }else if($rank==3){
              echo $this->Html->image('/webroot/img/crown3.png', array('alt' => 'three'));
            } else {}?>
            <?php echo $rank; ?>位</h1>
            <h2><?= $this->Html->link($food['name'], ['controller'=>'Foods','action' => 'view', $food->id]) ?></h2>
            <h4>埼玉北部で食べられている赤飯が入っているスイーツです！</h4>
            
            <h3>評価：★★★★★</h3>
        </div>
        <div class="col-md-4">
            <?=($this->Html->image($food->imgURL,
            array('width'=>'450','height'=>'250',"class"=>"img-responsive", ['alt' => '北関東'])));?>
        </div>
    </div>
    <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
     <?php //ランクを１つあげる
     $rank++; ?>
   <?php endforeach; ?>
    
    <!-- ループ終了 -->
 
    <!--ここから追加情報 -->
    <div class="row">
        <div class="col-md-3">
            <?php echo $this->Html->image('/webroot/img/crown 1.png', array('alt' => 'one')); ?>
            <h1>１位</h1>
            <h2><a href="http://cake-php-code-masa55.c9users.io/foods/view/7">いがまんじゅう</a></h2>
            <h4>埼玉北部で食べられている赤飯が入っているスイーツです！</h4>
            <h3>評価 : ★★★★★</h3>
        </div>
        <div class="col-md-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Iga_Manju1%28Saitama%29.JPG/1024px-Iga_Manju1%28Saitama%29.JPG" class="img-thumbnail"/>
        </div>
    </div>
    <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <!-- end -->
    
    <div class="row">
        <div class="col-md-3">
            <?php echo $this->Html->image('/webroot/img/crown2.png',array('alt'=>'two'));?>
            <h1>２位</h1>
            <h2>もつ煮定食</h2>
             <h4>クセもなく味がしっかりと染みこんでおり、こりっとしたこんにゃくがアクセントです。</h4>
             <h3>評価:★★★★</h3>
        </div>
        <div class="col-md-4">
            <img src="https://tblg.k-img.com/restaurant/images/Rvw/73736/640x640_rect_73736424.jpg" class="img-thumbnail"/>
        </div>
    </div>
     <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <!--end-->
     
    <div class="row">
        <div class="col-md-3">
            <?php echo $this->Html->image('/webroot/img/crown3.png',array('alt'=>'three'));?>
            <h1>３位</h1>
            <h2>上州太田焼きそば</h2>
            <h4>特徴的な太麺に吟味されたソースが最高！</h4>
            <div class="wrap">
            <span class="rate rate3">★★★</span>
            </div>
        </div>
        <div class="col-md-4">
            <img src="http://buster2.up.n.seesaa.net/buster2/image/BEE5BDA3C2C0C5C4A4E4A4ADA4BDA4D020011.jpg?d=a0" class="img-thumbnail"/>
        </div>
    </div>
     <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    
     <div class="row">
          <div class="col-md-8">
    <?php $rank=1;?>
    <?php foreach ($scores as $score):?>
        <?php
        if($rank==1){
           echo $this->Html->image('/webroot/img/crown 1.png', array('alt' => 'one'));
            
        }else if($rank==2){
           echo $this->Html->image('/webroot/img/crown2.png', array('alt' => 'two'));
          
        }else if($rank==3){
          echo $this->Html->image('/webroot/img/crown3.png', array('alt' => 'three'));
        }?>

         <h1><?php echo $rank;
         $rank=$rank+1;
        ?>位</h1>
        <tr>
            <h1><td><?= h($score['food']['name'])?></td></h1>
            <h2>評価:<?= h($score['avg'])?></h2>
       </tr>
  　　<?php endforeach; ?>
  　　　</div>
  　　　</div>
     </div>
    </div>
    <hr>
    <h1>各県のグルメ案内</h1>
    <!--ranking画面-->
<?php foreach ($foods as $food): ?>
        <tr>
            <h1><td><?= h($food['prefecture']) ?></td></h1>
        　　<h2><?= $this->Html->link($food['name'], ['controller'=>'Foods','action' => 'view', $food->id]) ?></h2>
        <tr>
            <?=($this->Html->image($food->imgURL,
            array('width'=>'450','height'=>'250',"class"=>"img-responsive", ['alt' => '北関東'])));?>
            <h4><td><?= h($food['title']) ?></td></h4>
            <h4><td><?=h($food['price'])?></td></h4>
        </tr>
   <?php endforeach; ?>
   <!--footer-->
   <div class="text-center">
    <footer>copyrights.@北関東グルメAll rights reserved.</footer>
    </div>
    </div>
    
   
   
   