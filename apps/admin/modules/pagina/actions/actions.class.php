<?php

/**
 * pagina actions.
 *
 * @package    mant-guia-maestra
 * @subpackage pagina
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class paginaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {

    $this->paginas = array();

    if($request->isMethod(sfRequest::POST))
    {

      $this->buscador = $request->getParameter("buscador");

      $this->paginas = Doctrine_Core::getTable('Paginas')
      ->createQuery('a')
      ->where("IdSubCategoria = ?", $this->buscador['subcategoria'])
      ->andWhere("TipoPagina = ?", $this->buscador['tipo'])
      ->execute();

      $this->subcategoria = Doctrine_Core::getTable('Subcategoria')->find($this->buscador['subcategoria']);

    }

    $this->form = new BuscaPaginaForm();

  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PaginasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PaginasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($paginas = Doctrine_Core::getTable('Paginas')->find(array($request->getParameter('idpagina'))), sprintf('Object paginas does not exist (%s).', $request->getParameter('idpagina')));
    $this->form = new PaginasForm($paginas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($paginas = Doctrine_Core::getTable('Paginas')->find(array($request->getParameter('idpagina'))), sprintf('Object paginas does not exist (%s).', $request->getParameter('idpagina')));
    $this->form = new PaginasForm($paginas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($paginas = Doctrine_Core::getTable('Paginas')->find(array($request->getParameter('idpagina'))), sprintf('Object paginas does not exist (%s).', $request->getParameter('idpagina')));
    $paginas->delete();

    $this->redirect('pagina/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $paginas = $form->save();

      $this->redirect('pagina/edit?idpagina='.$paginas->getIdpagina());
    }
  }

  public function executeGetImagenMini(sfWebRequest $request)
  {
    $response = $this->getResponse();
    $response->clearHttpHeaders();
    $response->setContentType('image/jpeg');
    $response->sendHttpHeaders();
    $pagina = Doctrine_Core::getTable('Paginas')->findOneByIdpagina(array($request->getParameter('id')))->getData();
    echo ($pagina['imagenmini']);
    return sfView::NONE;
  }
  public function executeGetImagenPrincipal(sfWebRequest $request)
  {
    $response = $this->getResponse();
    $response->clearHttpHeaders();
    $response->setContentType('image/jpeg');
    $response->sendHttpHeaders();
    $pagina = Doctrine_Core::getTable('Paginas')->findOneByIdpagina(array($request->getParameter('id')))->getData();
    echo ($pagina['imagenprincipal']);
    return sfView::NONE;
  }
  public function executeGetSubcategoriasByCategoria(sfWebRequest $request)
  {
    $this->getResponse()->setContentType('application/json');
    $this->subcategorias = Doctrine_Core::getTable('Subcategoria')->findByIdCategoria($request->getParameter('id'));
  }
}
