[
<?php $nb = count($paginas); $i = 0; ?>
<?php foreach ($paginas as $pagina): ++$i ?>
  {
    "nroPagina": "<?php echo $pagina->getPagina(); ?>"
  }
  <?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]