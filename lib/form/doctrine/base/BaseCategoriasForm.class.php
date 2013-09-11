<?php

/**
 * Categorias form base class.
 *
 * @method Categorias getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoriasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcategoria'     => new sfWidgetFormInputHidden(),
      'nombrecategoria' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idcategoria'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcategoria')), 'empty_value' => $this->getObject()->get('idcategoria'), 'required' => false)),
      'nombrecategoria' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('categorias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categorias';
  }

}
