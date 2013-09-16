[
<?php $nb = count($subcategorias); $i = 0; ?>
<?php foreach ($subcategorias as $subcategoria): ++$i ?>
  {
    "idsubcategoria": "<?php echo $subcategoria->getIdsubcategoria(); ?>",
    "idcategoria": "<?php echo $subcategoria->getIdcategoria(); ?>",
    "nombresubcategoria": "<?php echo $subcategoria->getNombresubcategoria(); ?>",
    "paginicio": "<?php echo $subcategoria->getPaginicio(); ?>",
    "pagfin": "<?php echo $subcategoria->getPagfin(); ?>"
  }
  <?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]