<?php

/**
 * Productopagina form.
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductopaginaForm extends BaseProductopaginaForm
{
  public function configure()
  {
    $this->widgetSchema['visible'] = new sfWidgetFormChoice(array(
        'choices'   =>  array(0 =>'Invisible',1 =>'Visible'),
        'expanded'  =>  false,
        'multiple'  =>  false
    ));

    $this->widgetSchema['visible']->setLabel('Visibilidad');
  }
}
