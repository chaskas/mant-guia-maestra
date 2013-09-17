<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('producto/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?pagina='.$form->getObject()->getPagina().'&sku='.$form->getObject()->getSku().'&tamanofuente='.$form->getObject()->getTamanofuente() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> role="form">
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php echo $form->renderGlobalErrors() ?>

  <div class="form-group">
    <label for="<?php echo $form['coorx']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['coorx']->renderLabel() ?>
    </label>
    <?php echo $form['coorx']->renderError() ?>
    <?php echo $form['coorx']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['coory']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['coory']->renderLabel() ?>
    </label>
    <?php echo $form['coory']->renderError() ?>
    <?php echo $form['coory']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['unidad']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['unidad']->renderLabel() ?>
    </label>
    <?php echo $form['unidad']->renderError() ?>
    <?php echo $form['unidad']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['comprar']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['comprar']->renderLabel() ?>
    </label>
    <?php echo $form['comprar']->renderError() ?>
    <?php echo $form['comprar']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['skupadre']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['skupadre']->renderLabel() ?>
    </label>
    <?php echo $form['skupadre']->renderError() ?>
    <?php echo $form['skupadre']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['padre']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['padre']->renderLabel() ?>
    </label>
    <?php echo $form['padre']->renderError() ?>
    <?php echo $form['padre']->render(array('class'=>"form-control")) ?>
  </div>

  <?php echo $form->renderHiddenFields(false) ?>
  
  <a class="btn btn-default btn-sm" href="<?php echo url_for('producto/index') ?>">Volver</a>
  <button type="submit" class="btn btn-success btn-sm">Guardar</button>
  <?php if (!$form->getObject()->isNew()): ?>
    <?php echo link_to('Eliminar', 'producto/delete?pagina='.$form->getObject()->getPagina().'&sku='.$form->getObject()->getSku().'&tamanofuente='.$form->getObject()->getTamanofuente(), array('method' => 'delete', 'confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-sm')) ?>
  <?php endif; ?>
</form>
