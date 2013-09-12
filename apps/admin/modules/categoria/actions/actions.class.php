<?php

/**
 * categoria actions.
 *
 * @package    mant-guia-maestra
 * @subpackage categoria
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->categorias = Doctrine_Core::getTable('Categorias')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CategoriasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CategoriasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($categorias = Doctrine_Core::getTable('Categorias')->find(array($request->getParameter('idcategoria'))), sprintf('Object categorias does not exist (%s).', $request->getParameter('idcategoria')));
    $this->form = new CategoriasForm($categorias);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($categorias = Doctrine_Core::getTable('Categorias')->find(array($request->getParameter('idcategoria'))), sprintf('Object categorias does not exist (%s).', $request->getParameter('idcategoria')));
    $this->form = new CategoriasForm($categorias);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($categorias = Doctrine_Core::getTable('Categorias')->find(array($request->getParameter('idcategoria'))), sprintf('Object categorias does not exist (%s).', $request->getParameter('idcategoria')));
    $categorias->delete();

    $this->redirect('categoria/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $categorias = $form->save();

      $this->redirect('categoria/edit?idcategoria='.$categorias->getIdcategoria());
    }
  }
}
