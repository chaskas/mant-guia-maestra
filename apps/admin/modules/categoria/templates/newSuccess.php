<div class="panel panel-default">
  <div class="panel-heading">Nueva Categoría
    <a href="<?php echo url_for('categoria/index') ?>" class="btn btn-primary btn-xs pull-right" alt="Nuevo" title="Nuevo">
      <span class="glyphicon glyphicon-arrow-left"></span> Atrás
    </a>
  </div>
  <div class="panel-body">
    <?php include_partial('form', array('form' => $form)) ?>    
  </div>
</div>