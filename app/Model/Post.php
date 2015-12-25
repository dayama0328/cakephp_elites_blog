<?php

class Post extends AppModel {

  public $validate = array(
        'title' => array(
            'rule' => array('maxLength', '20'),
            'required' => true,
            'message' => 'タイトルは20文字以内で入力してください'
            ),

         'content' => array(
            'rule' => array('maxLength', '20'),
            'required' => true,
            'message' => 'タイトルは20文字以内で入力してください'
            )
        );
}

?>