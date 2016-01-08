<?php

class Post extends AppModel {

  public $validate = array(
        'title' => array(
            'maxLength' => array(
                'rule' => array('maxLength', '20'),
                'required' => true,
                'message' => 'タイトルは20文字以内で入力してください',
                'style' => 'color:red;'
            ),
        ),
        'content' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => '記事の内容を入力してください！'
        )
  );
}

?>