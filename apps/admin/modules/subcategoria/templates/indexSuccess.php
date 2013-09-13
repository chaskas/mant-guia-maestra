<div class="panel panel-default">
  <div class="panel-heading">Subategorías
    <a href="<?php echo url_for('subcategoria/new') ?>" class="btn btn-success btn-xs pull-right" alt="Nuevo" title="Nuevo">
      <span class="glyphicon glyphicon-plus"></span> Nuevo
    </a>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Categoría</th>
        <th>Nombre</th>
        <th>Inicio</th>
        <th>Fin</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($subcategorias as $subcategoria): ?>
      <tr>
        <td><a href="<?php echo url_for('subcategoria/edit?idsubcategoria='.$subcategoria->getIdsubcategoria()) ?>"><?php echo $subcategoria->getIdsubcategoria() ?></a></td>
        <td><?php echo $subcategoria->getIdcategoria() ?></td>
        <td><?php echo $subcategoria->getNombresubcategoria() ?></td>
        <td><?php echo $subcategoria->getPaginicio() ?></td>
        <td><?php echo $subcategoria->getPagfin() ?></td>
        <td>
          <div class="btn-group">
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-edit"></span>',
                        'subcategoria/edit?idsubcategoria='.$subcategoria->getIdsubcategoria(),
                        array('class'=>'btn btn-default btn-xs', 'alt'=>'Editar', 'title'=>'Editar')); ?>
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-remove"></span>',
                        'subcategoria/delete?idsubcategoria='.$subcategoria->getIdsubcategoria(),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-xs', 'alt'=>'Eliminar', 'title'=>'Eliminar')); ?>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>