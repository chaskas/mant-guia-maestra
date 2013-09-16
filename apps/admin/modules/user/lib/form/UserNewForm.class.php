<?php
class UserNewForm extends sfGuardUserForm
{
  public function configure()
  {
    // Remove all widgets we don't want to show
    unset(
      $this['updated_at'],
      $this['groups_list'],
      $this['permissions_list'],
      $this['last_login'],
      $this['created_at'],
      $this['salt'],
      $this['algorithm']
    );
 
    // Setup proper password validation with confirmation
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password']->setOption('required', true);
    $this->widgetSchema['password_confirmation'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_confirmation'] = clone $this->validatorSchema['password'];
 
    $this->widgetSchema->moveField('password_confirmation', 'after', 'password');
 
    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_confirmation', array(), array('invalid' => 'The two passwords must be the same.')));
    
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    
    $this->validatorSchema['first_name'] = new sfValidatorString(array('required'=>true));
    $this->validatorSchema['last_name'] = new sfValidatorString(array('required'=>true));
    $this->validatorSchema['email_address'] = new sfValidatorEmail(array('required'=>true));

    $this->widgetSchema['first_name']->setLabel('Nombre');
    $this->widgetSchema['last_name']->setLabel('Apellido');
    $this->widgetSchema['email_address']->setLabel('Email');
    $this->widgetSchema['password']->setLabel('Password');
    $this->widgetSchema['password_confirmation']->setLabel('Repita Password');
    $this->widgetSchema['username']->setLabel('Usuario');
    $this->widgetSchema['is_active']->setLabel('Activo');
    $this->widgetSchema['is_super_admin']->setLabel('Super Administrador');
    
  }
}