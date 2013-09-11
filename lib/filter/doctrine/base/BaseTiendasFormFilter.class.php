<?php

/**
 * Tiendas filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTiendasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idzona'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zonas'), 'add_empty' => true)),
      'nombretienda' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitud'      => new sfWidgetFormFilterInput(),
      'longitud'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idzona'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Zonas'), 'column' => 'idzona')),
      'nombretienda' => new sfValidatorPass(array('required' => false)),
      'latitud'      => new sfValidatorPass(array('required' => false)),
      'longitud'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tiendas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tiendas';
  }

  public function getFields()
  {
    return array(
      'idtienda'     => 'Number',
      'idzona'       => 'ForeignKey',
      'nombretienda' => 'Text',
      'latitud'      => 'Text',
      'longitud'     => 'Text',
    );
  }
}
