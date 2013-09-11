<?php

/**
 * Zonas form base class.
 *
 * @method Zonas getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseZonasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idzona'     => new sfWidgetFormInputHidden(),
      'nombrezona' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idzona'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idzona')), 'empty_value' => $this->getObject()->get('idzona'), 'required' => false)),
      'nombrezona' => new sfValidatorString(array('max_length' => 150)),
    ));

    $this->widgetSchema->setNameFormat('zonas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zonas';
  }

}
