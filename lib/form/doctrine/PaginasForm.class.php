<?php

/**
 * Paginas form.
 *
 * @package    mant-guia-maestra
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PaginasForm extends BasePaginasForm
{
  public function configure()
  {
    $this->widgetSchema['tipopagina'] = new sfWidgetFormChoice(array(
        'choices'   =>  array('Seleccione','NOR'=>'Normal','PUB'=>'Publicidad'),
        'expanded'  =>  false,
        'multiple'  =>  false
    ));
  }
}
