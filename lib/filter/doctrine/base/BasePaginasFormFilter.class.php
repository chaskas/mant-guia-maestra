<?php

/**
 * Paginas filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePaginasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idsubcategoria'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subcategoria'), 'add_empty' => true)),
      'nropagina'       => new sfWidgetFormFilterInput(),
      'imagenprincipal' => new sfWidgetFormFilterInput(),
      'imagenmini'      => new sfWidgetFormFilterInput(),
      'tipopagina'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idsubcategoria'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Subcategoria'), 'column' => 'idsubcategoria')),
      'nropagina'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imagenprincipal' => new sfValidatorPass(array('required' => false)),
      'imagenmini'      => new sfValidatorPass(array('required' => false)),
      'tipopagina'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('paginas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Paginas';
  }

  public function getFields()
  {
    return array(
      'idpagina'        => 'Number',
      'idsubcategoria'  => 'ForeignKey',
      'nropagina'       => 'Number',
      'imagenprincipal' => 'Text',
      'imagenmini'      => 'Text',
      'tipopagina'      => 'Text',
    );
  }
}
