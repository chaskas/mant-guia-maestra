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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Páginas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Páginas</a></li>
                <li><a href="#">Categorías</a></li>
                <li><a href="#">Subcategorías</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tiendas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tiendas</a></li>
                <li><a href="#">Grupos</a></li>
                <li><a href="#">Zonas</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Productos</a></li>
                <li><a href="#">Grupos</a></li>
              </ul>
            </li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Versiones</a></li>
          </ul>
        </div>
      </div>

      <?php echo $sf_content ?>

    </div>

    <?php include_javascripts() ?>
  </body>
</html>
