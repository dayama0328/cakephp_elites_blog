<div>
  <?php echo $this->Session->Flash('auth'); ?> <!-- //エラーメッセージが一度だけ表示される -->
  <?php echo $this->Form->create('Post', array('action' => 'index')); ?>
<table border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th>メールアドレス　</th>
    <td><?php echo $this->Form->input('User.email', array('label' => 'メールアドレス', 'label' => false, 'div' => false)); ?></td>
  </tr>
  <tr>
    <th>パスワード　</th>
    <td><?php echo $this->Form->input('User.password', array('label' => 'パスワード', 'label' => false, 'div' => false)); ?></td>
  </tr>
</table>
<p><?php echo $this->Form->end('ログイン'); ?></p>
</div>
<?php echo $this->Html->link('新規登録はこちら!', array('controller' => 'users', 'action' => 'index')); ?>
