<?php

/**
 * Productopagina filter form base class.
 *
 * @package    mant-guia-maestra
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductopaginaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'coorx'        => new sfWidgetFormFilterInput(),
      'coory'        => new sfWidgetFormFilterInput(),
      'unidad'       => new sfWidgetFormFilterInput(),
      'comprar'      => new sfWidgetFormFilterInput(),
      'skupadre'     => new sfWidgetFormFilterInput(),
      'padre'        => new sfWidgetFormFilterInput(),
      'visible'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'coorx'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'coory'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unidad'       => new sfValidatorPass(array('required' => false)),
      'comprar'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'skupadre'     => new sfValidatorPass(array('required' => false)),
      'padre'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'visible'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('productopagina_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Productopagina';
  }

  public function getFields()
  {
    return array(
      'pagina'       => 'Number',
      'sku'          => 'Text',
      'tamanofuente' => 'Number',
      'coorx'        => 'Number',
      'coory'        => 'Number',
      'unidad'       => 'Text',
      'comprar'      => 'Number',
      'skupadre'     => 'Text',
      'padre'        => 'Number',
      'visible'      => 'Number',
    );
  }
}
