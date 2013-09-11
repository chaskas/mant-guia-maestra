<?php

/**
 * Categorias filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoriasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombrecategoria' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombrecategoria' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('categorias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categorias';
  }

  public function getFields()
  {
    return array(
      'idcategoria'     => 'Number',
      'nombrecategoria' => 'Text',
    );
  }
}
