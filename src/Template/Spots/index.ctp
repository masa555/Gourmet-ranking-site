<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spot[]|\Cake\Collection\CollectionInterface $spots
 */
?>
<div class="container-fluid">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    </ul>
</nav>
          <p><?=$this->Html->link(__('戻る'),['controller'=>'','action'=>'index'])?></li></p>     
<div class="container-fluid">
    <h1><span class="label label-warning"><?= __('観光スポット一覧表') ?></span></h1>
 </div>
<div class="form-group form-group-lg">
  <section class="col-md-3 col-sm-6">
       <div class="row">
           </div>
      </section>
       <div class="col-sm-9">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
             <?php foreach ($spots as $spot): ?>
            <tr>
                 <h2><?= $this->Html->link($spot['name'], ['controller'=>'Spots','action' => 'view', $spot->id]) ?></h2>
            </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
    <div class="container-fluid">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('最初')) ?>
            <?= $this->Paginator->prev('< ' . __('前に')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('最後') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
      </div>
     </div>
    </div>
 </div>
