<h1>Paginass List</h1>

<table>
  <thead>
    <tr>
      <th>Idpagina</th>
      <th>Idsubcategoria</th>
      <th>Nropagina</th>
      <th>Imagenprincipal</th>
      <th>Imagenmini</th>
      <th>Tipopagina</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($paginass as $paginas): ?>
    <tr>
      <td><a href="<?php echo url_for('pagina/edit?idpagina='.$paginas->getIdpagina()) ?>"><?php echo $paginas->getIdpagina() ?></a></td>
      <td><?php echo $paginas->getIdsubcategoria() ?></td>
      <td><?php echo $paginas->getNropagina() ?></td>
      <td><?php echo $paginas->getImagenprincipal() ?></td>
      <td><?php echo "<img src='data:image/jpeg;base64," . base64_encode( $paginas->getImagenmini() ) . "' />'"; ?></td>
      <td><?php echo $paginas->getTipopagina() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pagina/new') ?>">New</a>
