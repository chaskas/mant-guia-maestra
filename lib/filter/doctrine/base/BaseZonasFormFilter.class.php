<?php

/**
 * Zonas filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseZonasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombrezona' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombrezona' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('zonas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zonas';
  }

  public function getFields()
  {
    return array(
      'idzona'     => 'Number',
      'nombrezona' => 'Text',
    );
  }
}
