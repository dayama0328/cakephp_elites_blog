<?php echo $this->Form->create('User', array('action' => 'add')); ?> <!-- // addアクションに遷移させる -->
<table border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th>ユーザー名　</th>
      <td><?php echo $this->Form->input('User.name', array('label' => 'ユーザー名', 'label' => false, 'div' => false)); ?></td>
    </tr>
    <tr>
      <th>メールアドレス　</th>
      <td><?php echo $this->Form->input('User.email', array('label' => 'メールアドレス',  'label' => false, 'div' => false)); ?></td>
    </tr>
    <tr>
    <th>パスワード　</th>
      <td><?php echo $this->Form->input('User.password', array('label' => 'パスワード', 'label' => false, 'div' => false)); ?></td>
    </tr>
</table>
<?php echo $this->Form->end('登録する'); ?>
<?php echo $this->Html->link('ログイン画面へ', array('controller' => 'posts', 'action' => 'index')); ?>


