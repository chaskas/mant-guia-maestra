<div class="panel panel-default">
  <div class="panel-heading">Categorías
    <a href="<?php echo url_for('categoria/new') ?>" class="btn btn-success btn-xs pull-right" alt="Nuevo" title="Nuevo">
      <span class="glyphicon glyphicon-plus"></span> Nuevo
    </a>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($categorias as $categoria): ?>
      <tr>
        <td>
          <a href="<?php echo url_for('categoria/edit?idcategoria='.$categoria->getIdcategoria()) ?>">
            <?php echo $categoria->getIdcategoria() ?>
          </a>
        </td>
        <td>
          <?php echo $categoria->getNombrecategoria() ?>
        </td>
        <td>
          <div class="btn-group">
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-edit"></span>',
                        'categoria/edit?idcategoria='.$categoria->getIdcategoria(),
                        array('class'=>'btn btn-default btn-xs', 'alt'=>'Editar', 'title'=>'Editar')); ?>
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-remove"></span>',
                        'categoria/delete?idcategoria='.$categoria->getIdcategoria(),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-xs', 'alt'=>'Eliminar', 'title'=>'Eliminar')); ?>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>