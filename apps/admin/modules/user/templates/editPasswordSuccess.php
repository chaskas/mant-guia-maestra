<div class="panel panel-default">
  <div class="panel-heading">Editar Password
    <a href="<?php echo url_for('user/index') ?>" class="btn btn-primary btn-xs pull-right" alt="Atrás" title="Atrás">
      <span class="glyphicon glyphicon-arrow-left"></span> Atrás
    </a>
  </div>
  <div class="panel-body">
    <?php include_partial('passwordForm', array('form' => $form)) ?>    
  </div>
</div>