<!DOCTYPE html>
<html>
  <head>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_stylesheets() ?>
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
            <li><a href="#">Productos</a></li>
            <li><a href="#">Páginas</a></li>
            <li <?php if(in_array($sf_context->getModuleName(),array('user'))) echo "class='active'" ?>>
              <a href="<?php echo url_for('user/index') ?>">Usuarios</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Páginas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Páginas</a></li>
                <li><a href="<?php //echo url_for('categoria/index') ?>">Categorías</a></li>
                <li><a href="<?php //echo url_for('subcategoria/index') ?>">Subcategorías</a></li>
              </ul>
            </li> -->
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

      <?php echo $sf_content ?>

    </div>

    <?php include_javascripts() ?>
  </body>
</html>
