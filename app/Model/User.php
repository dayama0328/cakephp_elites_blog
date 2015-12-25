<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

  public $validate = array(
    'name' => array(
      'rule' => 'notBlank'
    ),
    'email' => array(
      'rule' => 'notBlank'
    ),
    'password' => array(
      'rule' => array('notBlank', 'password')
    )
  );

  public function beforeSave($options = array()) {

        if (!$this->id) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data['Post']['password'] = $passwordHasher->hash($this->data['Post']['password']);
        }
        return true;
  }
}
