<!DOCTYPE html>
<html>
  <head>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    
    <div class="container">

      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo url_for('@homepage') ?>">
            <?php echo image_tag('sodimac-logo.png') ?>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if(in_array($sf_context->getModuleName(),array('producto'))) echo "class='active'" ?>>
              <a href="<?php echo url_for('producto/index') ?>">Productos</a></li>
            <li <?php if(in_array($sf_context->getModuleName(),array('pagina'))) echo "class='active'" ?>>
              <a href="<?php echo url_for('pagina/index') ?>">Páginas</a>
            </li>
            <?php if($sf_user->hasCredential('super-admin')) : ?>
            <li <?php if(in_array($sf_context->getModuleName(),array('user'))) echo "class='active'" ?>>
              <a href="<?php echo url_for('user/index') ?>">Usuarios</a>
            </li>
            <?php endif; ?>
          </ul>
          <?php if ($sf_user->isAuthenticated()): ?>
          <p class="navbar-text pull-right">
            Bienvenido 
            <a href="#" class="navbar-link"><?php echo $sf_user->getGuardUser()->getFirstName(); ?></a> 
            <a href="<?php echo url_for('@sf_guard_signout'); ?>" class="btn btn-default btn-xs">
              <span class="glyphicon glyphicon-off"></span>
            </a>
          </p>
          <?php endif; ?>
        </div>
      </div>

      <?php if ($sf_user->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Éxito,</strong> <?php echo $sf_user->getFlash('success') ?>
        </div>
      <?php endif ?>
      <?php if ($sf_user->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Error,</strong> <?php echo $sf_user->getFlash('error') ?>
        </div>
      <?php endif ?>

      <?php echo $sf_content ?>

    </div>

    
  </body>
</html>
