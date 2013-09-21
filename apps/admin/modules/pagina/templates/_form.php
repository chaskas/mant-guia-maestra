<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('#paginas_idsubcategoria').prop('disabled', 'disabled');
    if($('#paginas_idsubcategoria').val() != '')$("#paginas_idsubcategoria").removeAttr("disabled");

    $('#paginas_categoria').change(function(){
      var idCategoria = $(this).val();
      if(idCategoria != '')
      {
        var subcategorias = new Array();
        $('#paginas_idsubcategoria').prop('disabled', 'disabled');
        $.ajax({
            type: "GET",
            url: 'http://<?php echo $_SERVER['SERVER_NAME']; ?>/api/get/categoria/'+idCategoria+'/subcategoria/json',
            contentType: "application/json; charset=UTF-8",
            dataType: "json",
            success: function(json) {
              $.each(json,function(key,val){
                var subcategoria = new Array();
                $.each(val,function(key,val){
                  if(key=='idsubcategoria')
                  {
                    id = val;
                    subcategoria[0] = val;
                  }
                  if(key=='nombresubcategoria')
                  {
                    subcategoria[1] = val;
                  }
                });
                subcategorias.push(subcategoria);
              });
              $('#paginas_idsubcategoria').empty();
              $('#paginas_idsubcategoria').append(new Option('Seleccione...',''));

              if(subcategorias.length > 0)$("#paginas_idsubcategoria").removeAttr("disabled");
              $.each(subcategorias,function(key,val){
                $('#paginas_idsubcategoria').append(new Option($('<div/>').html(val[1]).text(),val[0]));
              });
            },
            error: function (xhr, textStatus, errorThrown) {
              console.log(errorThrown);
            }
        });
      } else {
        $('#paginas_idsubcategoria').empty();
        $('#paginas_idsubcategoria').prop('disabled', 'disabled');
      }
    });

  });
</script>

<form action="<?php echo url_for('pagina/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idpagina='.$form->getObject()->getIdpagina() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> role="form">
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php echo $form->renderGlobalErrors() ?>

  <div class="form-inline">
    <div class="form-group">
      <label for="<?php echo $form['categoria']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['categoria']->renderLabel() ?>
      </label>
      <?php echo $form['categoria']->renderError() ?>
      <?php echo $form['categoria']->render(array('class'=>"form-control")) ?>
    </div>

    <div class="form-group">
      <label for="<?php echo $form['idsubcategoria']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['idsubcategoria']->renderLabel() ?>
      </label>
      <?php echo $form['idsubcategoria']->renderError() ?>
      <?php echo $form['idsubcategoria']->render(array('class'=>"form-control")) ?>
    </div>
  </div>

  <br/>

  <div class="form-inline">
    <div class="form-group">
      <label for="<?php echo $form['nropagina']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['nropagina']->renderLabel() ?>
      </label>
      <?php echo $form['nropagina']->renderError() ?>
      <?php echo $form['nropagina']->render(array('class'=>"form-control")) ?>
    </div>

    <div class="form-group">
      <label for="<?php echo $form['tipopagina']->getWidget()->getAttribute('id') ?>">
        <?php echo $form['tipopagina']->renderLabel() ?>
      </label>
      <?php echo $form['tipopagina']->renderError() ?>
      <?php echo $form['tipopagina']->render(array('class'=>"form-control")) ?>
    </div>
  </div>

  <br/>

  <div class="form-group">
    <label for="<?php echo $form['imagenprincipal']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['imagenprincipal']->renderLabel() ?>
    </label>
    <?php echo $form['imagenprincipal']->renderError() ?>
    <?php echo $form['imagenprincipal']->render(array('class'=>"form-control")) ?>
  </div>

  <div class="form-group">
    <label for="<?php echo $form['imagenmini']->getWidget()->getAttribute('id') ?>">
      <?php echo $form['imagenmini']->renderLabel() ?>
    </label>
    <?php echo $form['imagenmini']->renderError() ?>
    <?php echo $form['imagenmini']->render(array('class'=>"form-control")) ?>
  </div>

  <?php echo $form->renderHiddenFields(false) ?>
  
  <a class="btn btn-default btn-sm" href="<?php echo url_for('pagina/index') ?>">Volver</a>
  <button type="submit" class="btn btn-success btn-sm">Guardar</button>
  <?php if (!$form->getObject()->isNew()): ?>
    <?php echo link_to('Eliminar', 'pagina/delete?idpagina='.$form->getObject()->getIdpagina(), array('method' => 'delete', 'confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-sm')) ?>
  <?php endif; ?>
</form>

<?php if (!$form->getObject()->isNew()): ?>
  <div class="row">
    <div class="col-md-8 center">
      <h5>Imagen Principal</h5>
      <?php echo image_tag(url_for('pagina/getImagenPrincipal?id='.$form->getObject()->getIdpagina())); ?>
    </div>
    <div class="col-md-4 center">
      <h5>Imagen Mini</h5>
      <?php echo image_tag(url_for('pagina/getImagenMini?id='.$form->getObject()->getIdpagina())); ?>
    </div>
  </div>
<?php endif; ?>
