<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('pagina/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idpagina='.$form->getObject()->getIdpagina() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('pagina/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'pagina/delete?idpagina='.$form->getObject()->getIdpagina(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['idsubcategoria']->renderLabel() ?></th>
        <td>
          <?php echo $form['idsubcategoria']->renderError() ?>
          <?php echo $form['idsubcategoria'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nropagina']->renderLabel() ?></th>
        <td>
          <?php echo $form['nropagina']->renderError() ?>
          <?php echo $form['nropagina'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['imagenprincipal']->renderLabel() ?></th>
        <td>
          <?php echo $form['imagenprincipal']->renderError() ?>
          <?php echo $form['imagenprincipal'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['imagenmini']->renderLabel() ?></th>
        <td>
          <?php echo $form['imagenmini']->renderError() ?>
          <?php echo $form['imagenmini'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipopagina']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipopagina']->renderError() ?>
          <?php echo $form['tipopagina'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
