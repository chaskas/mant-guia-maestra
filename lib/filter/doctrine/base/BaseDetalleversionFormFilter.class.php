<?php

/**
 * Detalleversion filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDetalleversionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idversion'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Version'), 'add_empty' => true)),
      'nropagina'        => new sfWidgetFormFilterInput(),
      'accion'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idversion'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Version'), 'column' => 'idversion')),
      'nropagina'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'accion'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('detalleversion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Detalleversion';
  }

  public function getFields()
  {
    return array(
      'iddetalleversion' => 'Number',
      'idversion'        => 'ForeignKey',
      'nropagina'        => 'Number',
      'accion'           => 'Text',
    );
  }
}
