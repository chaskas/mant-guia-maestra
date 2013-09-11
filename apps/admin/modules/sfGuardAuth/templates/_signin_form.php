<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" accept-charset="utf-8" class="form-signin">

  <div class="form-signin-heading center"><?php echo image_tag('sodimac-logo-vertical.png'); ?></div>
  
  <?php echo $form['username']->renderError(); ?>

  <?php echo $form['username']->render(array('class'=>'form-control','placeholder'=>'Username or Email','autofocus'=>'')); ?>

  <?php echo $form['password']->render(array('class'=>'form-control','placeholder'=>'Password')); ?>

  <label class="checkbox">
    <?php echo $form['remember']->render(array('value'=>'remember-me')); ?>
    <?php echo $form['remember']->renderLabel("No cerrar sesión"); ?>
  </label>

  <input type="submit" id="submit" value="<?php echo __('Entrar', null, 'sf_guard') ?>" class="btn btn-lg btn-primary btn-block"/>

  <?php echo $form->renderHiddenFields() ?>

  <?php $routes = $sf_context->getRouting()->getRoutes() ?>
  <?php if (isset($routes['sf_guard_forgot_password'])): ?>
  <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
  <?php endif; ?>

  <?php if (isset($routes['sf_guard_register'])): ?>
  &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
  <?php endif; ?>

</form>