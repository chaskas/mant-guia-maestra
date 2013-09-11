<?php

/**
 * Subcategoria form base class.
 *
 * @method Subcategoria getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSubcategoriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idsubcategoria'     => new sfWidgetFormInputHidden(),
      'idcategoria'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'add_empty' => true)),
      'nombresubcategoria' => new sfWidgetFormInputText(),
      'paginicio'          => new sfWidgetFormInputText(),
      'pagfin'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idsubcategoria'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idsubcategoria')), 'empty_value' => $this->getObject()->get('idsubcategoria'), 'required' => false)),
      'idcategoria'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'required' => false)),
      'nombresubcategoria' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'paginicio'          => new sfValidatorInteger(array('required' => false)),
      'pagfin'             => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subcategoria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subcategoria';
  }

}
