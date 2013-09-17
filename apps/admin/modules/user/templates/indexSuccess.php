<div class="panel panel-default">
  <div class="panel-heading">Usuarios
    <a href="<?php echo url_for('user/new') ?>" class="btn btn-success btn-xs pull-right" alt="Nuevo" title="Nuevo">
      <span class="glyphicon glyphicon-plus"></span> Nuevo
    </a>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Username</th>
        <th>Email</th>
        <th class="center">Activo</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($sf_guard_users as $sf_guard_user): ?>
      <tr>
        <td>
          <a href="<?php echo url_for('user/edit?id='.$sf_guard_user->getId()) ?>"><?php echo $sf_guard_user->getId() ?></a>
        </td>
        <td><?php echo $sf_guard_user->getFirstName() ?></td>
        <td><?php echo $sf_guard_user->getLastName() ?></td>
        <td><?php echo $sf_guard_user->getUsername() ?></td>
        <td><?php echo $sf_guard_user->getEmailAddress() ?></td>
        <td class="center"><?php echo $sf_guard_user->getIsActive() == '1' ? '<span class="glyphicon glyphicon-ok"></span>' : '' ?></td>
        <td>
          <div class="btn-group">
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-edit"></span>',
                        'user/edit?id='.$sf_guard_user->getId(),
                        array('class'=>'btn btn-default btn-xs', 'alt'=>'Editar', 'title'=>'Editar')); ?>
            <?php echo link_to(
                        '<span class="glyphicon glyphicon-remove"></span>',
                        'user/delete?id='.$sf_guard_user->getId(),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-xs', 'alt'=>'Eliminar', 'title'=>'Eliminar')); ?>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>