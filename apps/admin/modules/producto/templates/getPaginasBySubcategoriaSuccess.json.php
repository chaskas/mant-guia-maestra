[
<?php $nb = count($paginas); $i = 0; ?>
<?php foreach ($paginas as $pagina): ++$i ?>
  {
    "IdPagina": "<?php echo $pagina->getIdpagina(); ?>",
    "NroPagina": "<?php echo $pagina->getNropagina(); ?>"
  }
  <?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]