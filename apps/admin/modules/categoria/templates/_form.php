<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('categoria/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idcategoria='.$form->getObject()->getIdcategoria() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> role="form">
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php echo $form->renderGlobalErrors() ?>
  <div class="form-group">
    <label for="<?php echo $form['nombrecategoria']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['nombrecategoria']->renderLabel() ?>
    </label>
    <?php echo $form['nombrecategoria']->renderError() ?>
    <?php echo $form['nombrecategoria']->render(array('class'=>"form-control")) ?>
  </div>
  <?php echo $form->renderHiddenFields(false) ?>
  
  <a class="btn btn-default btn-sm" href="<?php echo url_for('categoria/index') ?>">Volver</a>
  <button type="submit" class="btn btn-success btn-sm">Guardar</button>
  <?php if (!$form->getObject()->isNew()): ?>
    <?php echo link_to('Eliminar', 'categoria/delete?idcategoria='.$form->getObject()->getIdcategoria(), array('method' => 'delete', 'confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-sm')) ?>
  <?php endif; ?>
</form>