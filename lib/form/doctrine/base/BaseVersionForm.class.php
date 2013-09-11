<?php

/**
 * Version form base class.
 *
 * @method Version getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idversion'   => new sfWidgetFormInputHidden(),
      'descversion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idversion'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idversion')), 'empty_value' => $this->getObject()->get('idversion'), 'required' => false)),
      'descversion' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Version';
  }

}
