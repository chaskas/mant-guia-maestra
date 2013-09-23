<?php

/**
 * Paginas form.
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewPaginaPUBForm extends BasePaginasForm
{
  public function configure()
  {
    unset(
      $this['tipopagina']
    );

    $this->widgetSchema['categoria'] = new sfWidgetFormDoctrineChoice(array(
        'model'=>'Categorias',
        'expanded'=>false,
        'multiple'=>false,
        'add_empty' => 'Seleccione...'
    ));

    $this->widgetSchema['categoria']->setLabel('Categoría');

    $this->validatorSchema['categoria'] = new sfValidatorDoctrineChoice(array(
        'model'  => 'Categorias',
        'column' => 'idcategoria'
    ));

    if(!$this->getObject()->isNew())
    {
      $categoria = Doctrine_Core::getTable('Subcategoria')->find($this->getObject()->getIdsubcategoria());
      $this->setDefault('categoria',$categoria->getIdcategoria());
    }

    $this->widgetSchema['imagenprincipal'] = new sfWidgetFormInputFile();

    $this->validatorSchema['imagenprincipal'] = new sfValidatorImgToDB(array(
        'resolution'=>array(800, 983),
        'mime_types'=>array(
            'image/jpeg', 
            'image/jpg', 
            'image/pjpeg'), 
        'required'=>false
    ));

    $this->widgetSchema['imagenmini'] = new sfWidgetFormInputFile();

    $this->validatorSchema['imagenmini'] = new sfValidatorImgToDB(array(
        'resolution'=>array(73, 90),
        'mime_types'=>array(
            'image/jpeg', 
            'image/jpg', 
            'image/pjpeg'), 
        'required'=>false
    ));


    $this->widgetSchema['idsubcategoria']->setLabel('Subcategoría');
    $this->widgetSchema['nropagina']->setLabel('Número de página');

    $this->widgetSchema['imagenprincipal']->setLabel('Imagen Principal');
    $this->widgetSchema['imagenmini']->setLabel('Imagen Mini');
  }
}
