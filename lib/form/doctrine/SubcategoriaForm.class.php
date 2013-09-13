<?php

/**
 * Subcategoria form.
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SubcategoriaForm extends BaseSubcategoriaForm
{
  public function configure()
  {
    $this->widgetSchema['idcategoria']->setLabel('Categoría');
    $this->widgetSchema['nombresubcategoria']->setLabel('Nombre');
    $this->widgetSchema['paginicio']->setLabel('Inicio');
    $this->widgetSchema['pagfin']->setLabel('Fin');
  }
}
