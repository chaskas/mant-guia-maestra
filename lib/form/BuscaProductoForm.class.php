<?php

/**
 * BuscaProducto form.
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BuscaProductoForm extends sfForm
{

  public function configure()
  {
    $this->widgetSchema['categoria'] = new sfWidgetFormDoctrineChoice(array(
        'model'=>'Categorias',
        'expanded'=>false,
        'multiple'=>false,
        'add_empty' => 'Seleccione...'
    ));

    $this->widgetSchema['categoria']->setLabel('Categoría');

    $this->validatorSchema['categoria'] = new sfValidatorDoctrineChoice(array(
        'model'  => 'Categorias',
        'column' => 'id_categoria'
    ));


    $this->widgetSchema['subcategoria'] = new sfWidgetFormDoctrineChoice(array(
        'model'=>'Subcategoria',
        'expanded' => false, 
        'multiple' => false,
        'add_empty' => 'Seleccione...'
    ));

    $this->widgetSchema['subcategoria']->setLabel('Subcategoría');

    $this->validatorSchema['subcategoria'] = new sfValidatorDoctrineChoice(array(
        'model'  => 'Subcategoria',
        'column' => 'id_subcategoria'
    ));

    $this->widgetSchema['pagina'] = new sfWidgetFormChoice(array(
        'choices'   =>  array(10=>10,20=>20,30=>30),
        'expanded'  =>  false,
        'multiple'  =>  false
    ));
    
    $this->widgetSchema['pagina']->setLabel('Página');
    
    $this->widgetSchema->setNameFormat('buscador[%s]');


  }
}