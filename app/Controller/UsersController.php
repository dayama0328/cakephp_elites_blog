<?php


class UsersController extends AppController {

  public $components = array('Auth');

  public function beforeFilter() {
    $this->Auth->allow('index', 'add');//addページにログインせずともアクセスできるようにする
  }

  public function index() {
    $this->autoLayout = false;
  }

  public function add() { //新規会員登録処理
    $this->autoLayout = false;
    $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);

      $this->User->save($this->request->data);

      return $this->redirect(
        array(
            'controller' => 'posts',
            'action' => 'index'
        )
      );
  }
}