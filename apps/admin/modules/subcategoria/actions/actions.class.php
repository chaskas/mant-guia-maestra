<?php

/**
 * subcategoria actions.
 *
 * @package    mant-guia-maestra
 * @subpackage subcategoria
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class subcategoriaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->subcategorias = Doctrine_Core::getTable('Subcategoria')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $lastSubcategoria = Doctrine_Core::getTable('Subcategoria')
                          ->createQuery('a')
                          ->orderBy('idsubcategoria DESC')
                          ->limit(1)
                          ->execute();

    $this->form = new SubcategoriaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SubcategoriaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($subcategoria = Doctrine_Core::getTable('Subcategoria')->find(array($request->getParameter('idsubcategoria'))), sprintf('Object subcategoria does not exist (%s).', $request->getParameter('idsubcategoria')));
    $this->form = new SubcategoriaForm($subcategoria);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($subcategoria = Doctrine_Core::getTable('Subcategoria')->find(array($request->getParameter('idsubcategoria'))), sprintf('Object subcategoria does not exist (%s).', $request->getParameter('idsubcategoria')));
    $this->form = new SubcategoriaForm($subcategoria);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($subcategoria = Doctrine_Core::getTable('Subcategoria')->find(array($request->getParameter('idsubcategoria'))), sprintf('Object subcategoria does not exist (%s).', $request->getParameter('idsubcategoria')));
    $subcategoria->delete();

    $this->redirect('subcategoria/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $subcategoria = $form->save();

      // $this->redirect('subcategoria/edit?idsubcategoria='.$subcategoria->getIdsubcategoria());
      $this->redirect('subcategoria/new');
    }
  }
}
