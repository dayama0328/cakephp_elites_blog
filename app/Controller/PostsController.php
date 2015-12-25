<?php

class PostsController extends AppController {

  public $uses = array('User', 'Post');//ユーザーテーブルの呼び出し

  public $components = array(
    'Session',
    'Auth' => array(
      'authenticate' => array(
        'Form' => array(
          'fields' =>
            array('username' => 'email', 'password' => 'password') //フォームの値 => fields
          )
        ),
    'loginRedirect' => array('action' => 'postlist'),//ログイン後のリダイレクト先
    'logoutRedirect' => array('action' => 'index'),//ログアウト後のリダイレクト先
    'loginAction' => array('action' => 'index'),//ログイン処理をどこで行うか
    )
  );

  public function beforeFilter() {
    $this->Auth->allow('index');//トップページはログインせずともアクセスできるようにする
    $this->set('user', $this->Auth->user());
  }

  public function index () {
      $this->autoLayout = false;
      if ($this->request->is('post')) {
          if ($this->Auth->login()) {
              return $this->redirect($this->Auth->redirect());
          } else {
              $this->Session->setFlash('メールアドレスかパスワードが間違っています', 'default', array(), 'auth');
          }
      }
  }

  public function postlist() {
    $this->autoLayout = false;
    $this->set('list', $this->Post->find('all'));
    $user = $this->Auth->user();
  }

  public function detail($id = null) {
    $this->autoLayout = false;
    if ($this->request->is('post'))
      {
          $request = $this->request->data['Post'];
          $data = array(
            'id' => $request['id'],
            'name' => $request['name'],
            'title' => $request['title'],
            'content' => $request['content']
          );
          $this->Post->save($data);
          $this->redirect('postlist');
      }
       else
      {
          $data = $this->Post->findById($id);
      }
      $this->set('data', $data['Post']);
  }

  public function add() {
    $this->autoLayout = false;
    if ($this->request->is('post')) {
      $request = $this->request->data['Post'];
      $user = $this->Auth->user();

      $data = array(
        'user_id' => $user['id'],
        'name' => $user['name'],
        'title' => $request['title'],
        'content' => $request['content']
        );
      $this->Post->save($data);
      $this->redirect('postlist');
    }
  }

  public function edit ($id = null) {
      $this->autoLayout = false;
      if ($this->request->is('post')) {
          $request = $this->request->data['Post'];
          $data = array(
            'id' => $request['id'],
            'title' => $request['title'],
            'content' => $request['content']
          );
          $this->Post->save($data);
          $this->redirect('postlist');
      } else {
          $data = $this->Post->findById($id);
      }
      $this->set('data', $data['Post']);
  }

  public function delete($id = null) {
    $this->autoLayout = false;
    if ($this->request->is('post')) {
          $request = $this->request->data['Post'];
          $data = array(
              'id' => $request['id'],
              'title' => $request['title'],
              'content' => $request['content']
          );
          $this->Post->delete($request['id']);
          $this->redirect('postlist');
    } else {
        $data = $this->Post->findById($id);
    }
    $this->set('data', $data['Post']);
}

  public function logout() {
    $this->Auth->logout();
    $this->redirect(array('action' => 'index'));
  }
}