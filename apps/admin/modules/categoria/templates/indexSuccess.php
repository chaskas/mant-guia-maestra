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
          <a href="<?php echo url_for('categoria/edit?idcategoria='.$categoria->getIdcategoria()) ?>"><?php echo $categoria->getIdcategoria() ?></a>
        </td>
        <td>
          <?php echo $categoria->getNombrecategoria() ?>
        </td>
        <td>
          <div class="btn-group">
            <a class="btn btn-default btn-xs" alt="Editar" title="Editar" href="<?php echo url_for('categoria/edit?idcategoria='.$categoria->getIdcategoria()) ?>">
              <span class="glyphicon glyphicon-edit"></span> 
            </a>
            <a class="btn btn-danger btn-xs" alt="Eliminar" title="Eliminar">
              <span class="glyphicon glyphicon-remove"></span> 
            </a>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>