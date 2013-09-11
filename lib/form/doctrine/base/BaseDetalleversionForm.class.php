<?php

/**
 * Detalleversion form base class.
 *
 * @method Detalleversion getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleversionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddetalleversion' => new sfWidgetFormInputHidden(),
      'idversion'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Version'), 'add_empty' => true)),
      'nropagina'        => new sfWidgetFormInputText(),
      'accion'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'iddetalleversion' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddetalleversion')), 'empty_value' => $this->getObject()->get('iddetalleversion'), 'required' => false)),
      'idversion'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Version'), 'required' => false)),
      'nropagina'        => new sfValidatorNumber(array('required' => false)),
      'accion'           => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('detalleversion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Detalleversion';
  }

}
