<?php

/**
 * Subcategoria filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSubcategoriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcategoria'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'add_empty' => true)),
      'nombresubcategoria' => new sfWidgetFormFilterInput(),
      'paginicio'          => new sfWidgetFormFilterInput(),
      'pagfin'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idcategoria'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categorias'), 'column' => 'idcategoria')),
      'nombresubcategoria' => new sfValidatorPass(array('required' => false)),
      'paginicio'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pagfin'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('subcategoria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subcategoria';
  }

  public function getFields()
  {
    return array(
      'idsubcategoria'     => 'Number',
      'idcategoria'        => 'ForeignKey',
      'nombresubcategoria' => 'Text',
      'paginicio'          => 'Number',
      'pagfin'             => 'Number',
    );
  }
}
