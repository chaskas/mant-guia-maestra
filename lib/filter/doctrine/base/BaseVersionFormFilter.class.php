<?php

/**
 * Version filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVersionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descversion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descversion' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('version_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Version';
  }

  public function getFields()
  {
    return array(
      'idversion'   => 'Number',
      'descversion' => 'Number',
    );
  }
}
