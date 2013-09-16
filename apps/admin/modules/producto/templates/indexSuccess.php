<script type="text/javascript">
  $(document).ready(function(){
    $('#buscador_subcategoria').prop('disabled', 'disabled');
    $('#buscador_pagina').prop('disabled', 'disabled');

    

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
              $('#buscador_pagina').empty();
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

    $('#buscador_subcategoria').change(function(){
      var idSubcategoria = $(this).val();
      if(idSubcategoria != '')
      {
        var paginas = new Array();
        $('#buscador_pagina').prop('disabled', 'disabled');
        $.ajax({
            type: "GET",
            url: 'http://<?php echo $_SERVER['SERVER_NAME']; ?>/api/get/subcategoria/'+idSubcategoria+'/pagina/json',
            contentType: "application/json; charset=UTF-8",
            dataType: "json",
            success: function(json) {
              $.each(json,function(key,val){
                var pagina = new Array();
                $.each(val,function(key,val){
                  if(key=='nroPagina')
                  {
                    id = val;
                    pagina[0] = val;
                  }
                });
                paginas.push(pagina);
              });
              $('#buscador_pagina').empty();
              $('#buscador_pagina').empty();
              if(paginas.length > 0)$("#buscador_pagina").removeAttr("disabled");
              $.each(paginas,function(key,val){
                $('#buscador_pagina').append(new Option($('<div/>').html(val[0]).text(),val[0]));
              });
            },
            error: function (xhr, textStatus, errorThrown) {
              console.log(errorThrown);
            }
        });
      } else {
        $('#buscador_pagina').empty();
        $('#buscador_pagina').prop('disabled', 'disabled');
      }
    });


  });
</script>

<div class="panel panel-default">
  <div class="panel-heading">Buscador
    
  </div>
  <div class="panel panel-body">
    <form class="form-inline" role="form" method="POST" action="<?php echo url_for('producto/index') ?>">
      <div class="form-group">
        <label for="<?php echo $form['categoria']->getWidget()->getAttribute('id') ?>">
          <?php echo $form['categoria']->renderLabel() ?>
        </label>
        <?php echo $form['categoria']->renderError() ?>
        <?php echo $form['categoria']->render(array('class'=>"form-control input-sm")) ?>
      </div>
      <div class="form-group">
        <label for="<?php echo $form['subcategoria']->getWidget()->getAttribute('id') ?>">
          <?php echo $form['subcategoria']->renderLabel() ?>
        </label>
        <?php echo $form['subcategoria']->renderError() ?>
        <?php echo $form['subcategoria']->render(array('class'=>"form-control input-sm")) ?>
      </div>
      <div class="form-group">
        <label for="<?php echo $form['pagina']->getWidget()->getAttribute('id') ?>">
          <?php echo $form['pagina']->renderLabel() ?>
        </label>
        <?php echo $form['pagina']->renderError() ?>
        <?php echo $form['pagina']->render(array('class'=>"form-control input-sm")) ?>
      </div>
      <button type="submit" class="btn btn-default input-sm" style="margin-top:30px">Buscar</button>
    </form>
  </div>
</div>

<?php if(count($productopaginas) > 0) : ?>

<div class="panel panel-default">
  <div class="panel-heading">Productos Página <?php echo $buscador['pagina'] ?>
    <a href="<?php echo url_for('producto/new') ?>" class="btn btn-success btn-xs pull-right" alt="Nuevo" title="Nuevo">
      <span class="glyphicon glyphicon-plus"></span> Nuevo
    </a>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sku</th>
        <th>X</th>
        <th>Y</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($productopaginas as $productopagina): ?>
      <tr>
        <td>
          <a href="<?php echo url_for('producto/edit?pagina='.$productopagina->getPagina().'&sku='.$productopagina->getSku().'&tamanofuente='.$productopagina->getTamanofuente()) ?>">
            <?php echo $productopagina->getSku() ?>
          </a>
        </td>
        <td><?php echo $productopagina->getCoorx() ?></td>
        <td><?php echo $productopagina->getCoory() ?></td>
        <td>
          <div class="btn-group">
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-edit"></span>',
                        'producto/edit?pagina='.$productopagina->getPagina().'&sku='.$productopagina->getSku().'&tamanofuente='.$productopagina->getTamanofuente(),
                        array('class'=>'btn btn-default btn-xs', 'alt'=>'Editar', 'title'=>'Editar')); ?>
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-remove"></span>',
                        'producto/delete?pagina='.$productopagina->getPagina().'&sku='.$productopagina->getSku().'&tamanofuente='.$productopagina->getTamanofuente(),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-xs', 'alt'=>'Eliminar', 'title'=>'Eliminar')); ?>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php endif; ?>