<div class="panel panel-default">
  <div class="panel-heading">Editar Producto
    <a href="<?php echo url_for('producto/index') ?>" class="btn btn-primary btn-xs pull-right" alt="Atrás" title="Atrás">
      <span class="glyphicon glyphicon-arrow-left"></span> Atrás
    </a>
  </div>
  <div class="panel-body">
    <?php include_partial('form', array('form' => $form)) ?>    
  </div>
</div>