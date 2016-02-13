<?php


class UsersController extends AppController {

  public $components = array('Auth');

  public function beforeFilter() {
    $this->Auth->allow('index', 'add');//addページにログインせずともアクセスできるようにする
  }

  public function index() {
  }

  public function add() { //新規会員登録処理
    $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
    // $this->request->data['User']['password']にフォームからの入力値が入っている。これをパスワード化する処理。

      $this->User->save($this->request->data); //データベースにデータを保存

      return $this->redirect( array ('controller' => 'posts', 'action' => 'index')); //posts/indexにリダイレクトさせる
  }
}