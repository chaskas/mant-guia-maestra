<?php

/**
 * Productopagina form base class.
 *
 * @method Productopagina getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductopaginaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pagina'       => new sfWidgetFormInputHidden(),
      'sku'          => new sfWidgetFormInputHidden(),
      'tamanofuente' => new sfWidgetFormInputHidden(),
      'coorx'        => new sfWidgetFormInputText(),
      'coory'        => new sfWidgetFormInputText(),
      'unidad'       => new sfWidgetFormInputText(),
      'comprar'      => new sfWidgetFormInputText(),
      'skupadre'     => new sfWidgetFormInputText(),
      'padre'        => new sfWidgetFormInputText(),
      'visible'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'pagina'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('pagina')), 'empty_value' => $this->getObject()->get('pagina'), 'required' => false)),
      'sku'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sku')), 'empty_value' => $this->getObject()->get('sku'), 'required' => false)),
      'tamanofuente' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tamanofuente')), 'empty_value' => $this->getObject()->get('tamanofuente'), 'required' => false)),
      'coorx'        => new sfValidatorInteger(array('required' => false)),
      'coory'        => new sfValidatorInteger(array('required' => false)),
      'unidad'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'comprar'      => new sfValidatorInteger(array('required' => false)),
      'skupadre'     => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      'padre'        => new sfValidatorInteger(array('required' => false)),
      'visible'      => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('productopagina[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Productopagina';
  }

}
