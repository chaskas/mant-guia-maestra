<?php

/**
 * Paginas form base class.
 *
 * @method Paginas getObject() Returns the current form's model object
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePaginasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idpagina'        => new sfWidgetFormInputHidden(),
      'idsubcategoria'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subcategoria'), 'add_empty' => true)),
      'nropagina'       => new sfWidgetFormInputText(),
      'imagenprincipal' => new sfWidgetFormTextarea(),
      'imagenmini'      => new sfWidgetFormTextarea(),
      'tipopagina'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idpagina'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idpagina')), 'empty_value' => $this->getObject()->get('idpagina'), 'required' => false)),
      'idsubcategoria'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Subcategoria'), 'required' => false)),
      'nropagina'       => new sfValidatorNumber(array('required' => false)),
      'imagenprincipal' => new sfValidatorString(array('required' => false)),
      'imagenmini'      => new sfValidatorString(array('required' => false)),
      'tipopagina'      => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('paginas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Paginas';
  }

}
