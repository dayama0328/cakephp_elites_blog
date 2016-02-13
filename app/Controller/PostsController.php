<?php

class PostsController extends AppController {

  public $uses = array('User', 'Post');//users postsテーブルの呼び出し

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
    $this->set('user', $this->Auth->user()); //$this->setでcontroller側にある変数をviewに渡すことが可能。$this->Auth->user()はログインユーザー情報の取得を指す
  }

  public function index () { //ログイン処理
      if ($this->request->is('post')) { // postでデータが渡されたら
          if ($this->Auth->login()) { //認証に成功したら
              return $this->redirect($this->Auth->redirect());  //postlistに遷移させる Authcomponentsに対応している
          } else {
              $this->Session->setFlash('メールアドレスかパスワードが間違っています', 'default', array(), 'auth'); //認証に失敗したらエラーを表示する
          }
      }
  }

  public function postlist() {
    $this->set('list', $this->Post->find('all')); // postsテーブルから全データ(レコード)を取得する
    $user = $this->Auth->user();
  }

  public function detail($id = null) {
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
    if ($this->request->is('post')) { // postでデータが渡されたら
      $request = $this->request->data['Post']; // $requestにそのデータを格納
      $user = $this->Auth->user();

      $data = array( //データベースに保存するカラムと値を格納
        'user_id' => $user['id'],
        'name' => $user['name'],
        'title' => $request['title'],
        'content' => $request['content']
      );

        $this->Post->save($data); //データベースにデータを保存

        if ($this->Post->save($data)) { // エラーが出ていなければ、保存してリダイレクト
            $this->redirect('postlist');
        }
    }
  }

  public function edit ($id = null) {
      if ($this->request->is('post')) { // postでデータが渡されたら
          $request = $this->request->data['Post']; // $requestにそのデータを格納
          $data = array( //データベースに保存するカラムと値を格納
            'id' => $request['id'],
            'title' => $request['title'],
            'content' => $request['content']
          );

          $this->Post->save($data); //データベースにデータを保存

          if ($this->Post->save($data)) { // エラーが出ていなければ、保存してリダイレクト
            $this->redirect('postlist');
          }

      } else {
          $data = $this->Post->findById($id); //選択されたidと合致するカラムを取得
      }
      $this->set('data', $data['Post']);
  }

  public function delete($id = null) {
    if ($this->request->is('post')) {
          $request = $this->request->data['Post'];
          $data = array(
              'id' => $request['id'],
              'title' => $request['title'],
              'content' => $request['content']
          );
          $this->Post->delete($request['id']); // idと合致するもののデータを削除する
          $this->redirect('postlist'); // postlistにリダイレクトさせる
    } else {
        $data = $this->Post->findById($id);
    }
    $this->set('data', $data['Post']);
}

  public function logout() {
    $this->Auth->logout(); // Authcomponentsに対応している
    $this->redirect(array('action' => 'index'));
  }
}