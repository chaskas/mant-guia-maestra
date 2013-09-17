<?php
class UserEditForm extends sfGuardUserForm
{
  public function configure()
  {
    // Remove all widgets we don't want to show
    unset(
      $this['updated_at'],
      $this['groups_list'],
      $this['is_super_admin'],
      $this['last_login'],
      $this['created_at'],
      $this['salt'],
      $this['algorithm'],
      $this['password']
    );
 
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    
    $this->validatorSchema['first_name'] = new sfValidatorString(array('required'=>true));
    $this->validatorSchema['last_name'] = new sfValidatorString(array('required'=>true));
    $this->validatorSchema['email_address'] = new sfValidatorEmail(array('required'=>true));

    $this->widgetSchema['first_name']->setLabel('Nombre');
    $this->widgetSchema['last_name']->setLabel('Apellido');
    $this->widgetSchema['email_address']->setLabel('Email');
    $this->widgetSchema['username']->setLabel('Usuario');
    $this->widgetSchema['is_active']->setLabel('Activo');
    $this->widgetSchema['permissions_list']->setLabel('Permisos');
    
  }
}