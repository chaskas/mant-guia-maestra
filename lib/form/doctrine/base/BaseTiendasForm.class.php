<?php

/**
 * Tiendas form base class.
 *
 * @method Tiendas getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTiendasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtienda'     => new sfWidgetFormInputHidden(),
      'idzona'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zonas'), 'add_empty' => false)),
      'nombretienda' => new sfWidgetFormInputText(),
      'latitud'      => new sfWidgetFormInputText(),
      'longitud'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtienda'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtienda')), 'empty_value' => $this->getObject()->get('idtienda'), 'required' => false)),
      'idzona'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zonas'), 'required' => false)),
      'nombretienda' => new sfValidatorString(array('max_length' => 150)),
      'latitud'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'longitud'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tiendas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tiendas';
  }

}
