<div class="panel panel-default">
  <div class="panel-heading">Editar Usuario
    <a href="<?php echo url_for('user/index') ?>" class="btn btn-primary btn-xs pull-right" alt="Atrás" title="Atrás">
      <span class="glyphicon glyphicon-arrow-left"></span> Atrás
    </a>
    <?php echo link_to(
                    '<span class="glyphicon glyphicon-asterisk"></span> Cambiar Password',
                    'user/editPassword?id='.$form->getObject()->getId(),
                    array('class'=>'btn btn-warning btn-xs', 'alt'=>'Modificar Password', 'title'=>'Modificar Password')); ?>
  </div>
  <div class="panel-body">
    <?php include_partial('editForm', array('form' => $form)) ?>    
  </div>
</div>