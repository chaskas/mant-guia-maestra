<?php

class UserPasswordForm extends sfGuardUserForm {

  public function configure() {
    
    // Remove all widgets we don't want to show
    unset(
      $this['is_active'],
      $this['is_super_admin'],
      $this['updated_at'],
      $this['groups_list'],
      $this['permissions_list'],
      $this['last_login'],
      $this['created_at'],
      $this['salt'],
      $this['first_name'],
      $this['last_name'],
      $this['email_address'],
      $this['username'],
      $this['algorithm']
    );
    
    // Setup proper password validation with confirmation
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password']->setOption('required', true);
    $this->validatorSchema['password']->setOption('min_length', 6);
    $this->widgetSchema['password_confirmation'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_confirmation'] = clone $this->validatorSchema['password'];

    $this->widgetSchema->moveField('password_confirmation', 'after', 'password');

    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_confirmation', array(), array('invalid' => 'Deben ser iguales.')));
    
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->widgetSchema['password']->setLabel('Password');
    $this->widgetSchema['password_confirmation']->setLabel('Repita Password');
    
  }

}