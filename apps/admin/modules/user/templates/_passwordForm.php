<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('user/UpdatePassword?id='.$form->getObject()->getId()) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> role="form">
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php echo $form->renderGlobalErrors() ?>

  <div class="form-inline">

    <div class="form-group">
      <label for="<?php echo $form['password']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['password']->renderLabel() ?>
      </label>
      <?php echo $form['password']->renderError() ?>
      <?php echo $form['password']->render(array('class'=>"form-control")) ?>
    </div>

    <div class="form-group">
      <label for="<?php echo $form['password_confirmation']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['password_confirmation']->renderLabel() ?>
      </label>
      <?php echo $form['password_confirmation']->renderError() ?>
      <?php echo $form['password_confirmation']->render(array('class'=>"form-control")) ?>
    </div>

  </div>
  <br/>

  <?php echo $form->renderHiddenFields(false) ?>
  
  <a class="btn btn-default btn-sm" href="<?php echo url_for('user/index') ?>">Volver</a>
  <button type="submit" class="btn btn-success btn-sm">Guardar</button>
</form>
