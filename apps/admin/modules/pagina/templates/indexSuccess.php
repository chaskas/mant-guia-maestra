<script type="text/javascript">
  $(document).ready(function(){
    $('#buscador_subcategoria').prop('disabled', 'disabled');

    $('#buscador_tipo').change(function(){
      console.log('Cambio!');
      if($(this).val()=='NOR'){
        $('#div_buscador_categoria').show();
        $('#div_buscador_subcategoria').show();
      } else if($(this).val()=='PUB'){
        $('#div_buscador_categoria').hide();
        $('#div_buscador_subcategoria').hide();
      }
    });

    $('#buscador_categoria').change(function(){
      var idCategoria = $(this).val();
      if(idCategoria != '')
      {
        var subcategorias = new Array();
        $('#buscador_subcategoria').prop('disabled', 'disabled');
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
              $('#buscador_subcategoria').empty();
              $('#buscador_subcategoria').append(new Option('Seleccione...',''));

              if(subcategorias.length > 0)$("#buscador_subcategoria").removeAttr("disabled");
              $.each(subcategorias,function(key,val){
                $('#buscador_subcategoria').append(new Option($('<div/>').html(val[1]).text(),val[0]));
              });
            },
            error: function (xhr, textStatus, errorThrown) {
              console.log(errorThrown);
            }
        });
      } else {
        $('#buscador_subcategoria').empty();
        $('#buscador_subcategoria').prop('disabled', 'disabled');
      }
    });

  });
</script>

<div class="panel panel-default">
  <div class="panel-heading">Buscador
    <?php if($sf_user->hasCredential(array('admin', 'super-admin'), false)) : ?>
    <a href="<?php echo url_for('pagina/new') ?>" class="btn btn-success btn-xs pull-right" alt="Nuevo" title="Nuevo">
      <span class="glyphicon glyphicon-plus"></span> Nuevo
    </a>
    <?php endif; ?>
  </div>
  <div class="panel panel-body">
    <form class="form-inline" role="form" method="POST" action="<?php echo url_for('pagina/index') ?>">
      <div class="row">
        <div class="form-group col-md-3">
          <label for="<?php echo $form['tipo']->getWidget()->getAttribute('id') ?>">
            <?php echo $form['tipo']->renderLabel() ?>
          </label>
          <?php echo $form['tipo']->renderError() ?>
          <?php echo $form['tipo']->render(array('class'=>"form-control input-sm")) ?>
        </div>
        <div class="form-group col-md-4" id="div_buscador_categoria">
          <label for="<?php echo $form['categoria']->getWidget()->getAttribute('id') ?>">
            <?php echo $form['categoria']->renderLabel() ?>
          </label>
          <?php echo $form['categoria']->renderError() ?>
          <?php echo $form['categoria']->render(array('class'=>"form-control input-sm")) ?>
        </div>
        <div class="form-group col-md-4" id="div_buscador_subcategoria">
          <label for="<?php echo $form['subcategoria']->getWidget()->getAttribute('id') ?>">
            <?php echo $form['subcategoria']->renderLabel() ?>
          </label>
          <?php echo $form['subcategoria']->renderError() ?>
          <?php echo $form['subcategoria']->render(array('class'=>"form-control input-sm")) ?>
        </div>
        <button type="submit" class="btn btn-default input-sm" style="margin-top:30px">Buscar</button>
      </div>
    </form>
  </div>
</div>

<?php if(count($paginas) > 0) : ?>

<div class="panel panel-default">
  <div class="panel-heading">

    <?php if(isset($subcategoria)) : ?>
    Páginas Subcategoría <?php echo $subcategoria->getNombresubcategoria(); ?>
    <?php else : ?>
    Páginas publicitarias
    <?php endif; ?>
  </div>

  <div class="panel panel-body">
    <?php $i = 0; ?>
    <?php foreach ($paginas as $pagina): ?>
    <?php if($i%3==0) : ?>
    <div class="row pagina-row">
    <?php endif; ?>
    <div class="col-md-4">
      <?php echo image_tag(url_for('pagina/getImagenPrincipal?id='.$pagina->getIdpagina()),'size=200x246'); ?>
      <?php echo image_tag(url_for('pagina/getImagenMini?id='.$pagina->getIdpagina())); ?>
      <!-- <img src="http://placehold.it/200x246">
      <img src="http://placehold.it/73x90"> -->
      <div class="btn-group">
        <?php echo link_to(
                    '<span class="glyphicon glyphicon-edit"></span>',
                    'pagina/edit?idpagina='.$pagina->getIdpagina(),
                    array('class'=>'btn btn-default btn-xs', 'alt'=>'Editar', 'title'=>'Editar')); ?>
        <?php echo link_to(
                    '<span class="glyphicon glyphicon-remove"></span>',
                    'pagina/delete?idpagina='.$pagina->getIdpagina(),
                    array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-xs', 'alt'=>'Eliminar', 'title'=>'Eliminar')); ?>
      </div>
    </div>
    <?php $i++; ?>
    <?php if($i%3==0) : ?>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
  
</div>

<?php endif; ?>