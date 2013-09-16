<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('producto/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?pagina='.$form->getObject()->getPagina().'&sku='.$form->getObject()->getSku().'&tamanofuente='.$form->getObject()->getTamanofuente() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('producto/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'producto/delete?pagina='.$form->getObject()->getPagina().'&sku='.$form->getObject()->getSku().'&tamanofuente='.$form->getObject()->getTamanofuente(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['coorx']->renderLabel() ?></th>
        <td>
          <?php echo $form['coorx']->renderError() ?>
          <?php echo $form['coorx'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['coory']->renderLabel() ?></th>
        <td>
          <?php echo $form['coory']->renderError() ?>
          <?php echo $form['coory'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['unidad']->renderLabel() ?></th>
        <td>
          <?php echo $form['unidad']->renderError() ?>
          <?php echo $form['unidad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['comprar']->renderLabel() ?></th>
        <td>
          <?php echo $form['comprar']->renderError() ?>
          <?php echo $form['comprar'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['skupadre']->renderLabel() ?></th>
        <td>
          <?php echo $form['skupadre']->renderError() ?>
          <?php echo $form['skupadre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['padre']->renderLabel() ?></th>
        <td>
          <?php echo $form['padre']->renderError() ?>
          <?php echo $form['padre'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
