<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('user/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> role="form">
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php echo $form->renderGlobalErrors() ?>

  <div class="form-inline">

    <div class="form-group">
      <label for="<?php echo $form['first_name']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['first_name']->renderLabel() ?>
      </label>
      <?php echo $form['first_name']->renderError() ?>
      <?php echo $form['first_name']->render(array('class'=>"form-control")) ?>
    </div>

    <div class="form-group">
      <label for="<?php echo $form['last_name']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['last_name']->renderLabel() ?>
      </label>
      <?php echo $form['last_name']->renderError() ?>
      <?php echo $form['last_name']->render(array('class'=>"form-control")) ?>
    </div>

  </div>

  <br/>

  <div class="form-group">
    <label for="<?php echo $form['email_address']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['email_address']->renderLabel() ?>
    </label>
    <?php echo $form['email_address']->renderError() ?>
    <?php echo $form['email_address']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['username']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['username']->renderLabel() ?>
    </label>
    <?php echo $form['username']->renderError() ?>
    <?php echo $form['username']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['is_active']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['is_active']->renderLabel() ?>
    </label>
    <?php echo $form['is_active']->renderError() ?>
    <?php echo $form['is_active']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['permissions_list']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['permissions_list']->renderLabel() ?>
    </label>
    <?php echo $form['permissions_list']->renderError() ?>
    <?php echo $form['permissions_list']->render(array('class'=>"form-control")) ?>
  </div>


  <?php echo $form->renderHiddenFields(false) ?>
  
  <a class="btn btn-default btn-sm" href="<?php echo url_for('user/index') ?>">Volver</a>
  <button type="submit" class="btn btn-success btn-sm">Guardar</button>
  <?php if (!$form->getObject()->isNew()): ?>
    <?php echo link_to('Eliminar', 'user/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-sm')) ?>
  <?php endif; ?>
</form>
