<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('subcategoria/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idsubcategoria='.$form->getObject()->getIdsubcategoria() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> role="form">
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php echo $form->renderGlobalErrors() ?>

  <div class="form-group">
    <label for="<?php echo $form['idcategoria']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['idcategoria']->renderLabel() ?>
    </label>
    <?php echo $form['idcategoria']->renderError() ?>
    <?php echo $form['idcategoria']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['nombresubcategoria']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['nombresubcategoria']->renderLabel() ?>
    </label>
    <?php echo $form['nombresubcategoria']->renderError() ?>
    <?php echo $form['nombresubcategoria']->render(array('class'=>"form-control")) ?>
  </div>

  <hr>

  <h4>Páginas</h4>

  <div class="form-inline">
    <div class="form-group">
      <label for="<?php echo $form['paginicio']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['paginicio']->renderLabel() ?>
      </label>
      <?php echo $form['paginicio']->renderError() ?>
      <?php echo $form['paginicio']->render(array('class'=>"form-control")) ?>
    </div>

    <div class="form-group">
      <label for="<?php echo $form['pagfin']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['pagfin']->renderLabel() ?>
      </label>
      <?php echo $form['pagfin']->renderError() ?>
      <?php echo $form['pagfin']->render(array('class'=>"form-control")) ?>
    </div>
  </div>

  <br>

  <?php echo $form->renderHiddenFields(false) ?>
  
  <a class="btn btn-default btn-sm" href="<?php echo url_for('subcategoria/index') ?>">Volver</a>
  <button type="submit" class="btn btn-success btn-sm">Guardar</button>
  <?php if (!$form->getObject()->isNew()): ?>
    <?php echo link_to('Eliminar', 'subcategoria/delete?idsubcategoria='.$form->getObject()->getIdsubcategoria(), array('method' => 'delete', 'confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-sm')) ?>
  <?php endif; ?>
</form>