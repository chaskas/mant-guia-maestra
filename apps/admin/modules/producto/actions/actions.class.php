<?php

/**
 * producto actions.
 *
 * @package    mant-guia-maestra
 * @subpackage producto
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->productopaginas = array();

    if($request->isMethod(sfRequest::POST))
    {

      $this->buscador = $request->getParameter("buscador");

      $this->productopaginas = Doctrine_Core::getTable('Productopagina')
      ->createQuery('a')
      ->where("pagina = ?", $this->buscador['pagina'])
      ->execute();

      $this->pagina = Doctrine_Core::getTable('Paginas')->find($this->buscador['pagina']);

    }


    $this->form = new BuscaProductoForm();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductopaginaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductopaginaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($productopagina = Doctrine_Core::getTable('Productopagina')->find(array($request->getParameter('pagina'),
               $request->getParameter('sku'),
               $request->getParameter('tamanofuente'))), sprintf('Object productopagina does not exist (%s).', $request->getParameter('pagina'),
               $request->getParameter('sku'),
               $request->getParameter('tamanofuente')));
    $this->form = new ProductopaginaForm($productopagina);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($productopagina = Doctrine_Core::getTable('Productopagina')->find(array($request->getParameter('pagina'),
               $request->getParameter('sku'),
               $request->getParameter('tamanofuente'))), sprintf('Object productopagina does not exist (%s).', $request->getParameter('pagina'),
               $request->getParameter('sku'),
               $request->getParameter('tamanofuente')));
    $this->form = new ProductopaginaForm($productopagina);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($productopagina = Doctrine_Core::getTable('Productopagina')->find(array($request->getParameter('pagina'),
               $request->getParameter('sku'),
               $request->getParameter('tamanofuente'))), sprintf('Object productopagina does not exist (%s).', $request->getParameter('pagina'),
               $request->getParameter('sku'),
               $request->getParameter('tamanofuente')));
    $productopagina->delete();

    $this->redirect('producto/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $productopagina = $form->save();

      $this->redirect('producto/edit?pagina='.$productopagina->getPagina().'&sku='.$productopagina->getSku().'&tamanofuente='.$productopagina->getTamanofuente());
    }
  }
  public function executeGetSubcategoriasByCategoria(sfWebRequest $request)
  {
    $this->getResponse()->setContentType('application/json');
    $this->subcategorias = Doctrine_Core::getTable('Subcategoria')->findByIdCategoria($request->getParameter('id'));
  }

  public function executeGetPaginasBySubcategoria(sfWebRequest $request)
  {
    $this->getResponse()->setContentType('application/json');
    $subcategoria = Doctrine_Core::getTable('Subcategoria')->find($request->getParameter('id'));

    $pagInicio = $subcategoria->getPaginicio();
    $pagFin = $subcategoria->getPagfin();

    $this->paginas = Doctrine_Core::getTable('Paginas')
                    ->createQuery('a')
                    ->where('IdSubCategoria = ?',$subcategoria->getIdSubcategoria())
                    ->execute();

  }
}
