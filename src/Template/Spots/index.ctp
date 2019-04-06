<?php echo $this->Html->css('style') ?>
<nav class="col-md-5" id="actions-sidebar">
    <ul class="side-nav">
    </ul>
</nav>
<div class="container-filud">
    <h1><span class="label label-warning"><?= __('観光スポット一覧表') ?></span></h1>
<div class="form-group form-group-lg">
  <section class=" col-md-4">
       <div class="row">
           </div>
      </section>
       <div class="col-md-4">
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
    <div class="paginator">
          <nav>
        <ul class="pagination pagination-sm">
            <?= $this->Paginator->first('<< ' . __('最初')) ?>
            <?= $this->Paginator->prev('< ' . __('前に')) ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('最後') . ' >>') ?>
        </ul>
        </nav>
        </div>
      </div>
     </div>
    </div>
 