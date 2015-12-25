<?php
echo $this->Html->css( 'reset.css');
echo $this->Html->css( 'postlist.css');
?>

<nav>
<ul>
  <li><?php echo $this->Html->link('ホーム', array('action' => 'postlist')); ?></li>
  <li><?php echo $this->Html->link('日記一覧', array('action' => 'postlist')); ?></li>
  <li><?php echo $this->Html->link('日記追加', array('action' => 'add')); ?></li>
  <li><?php echo $this->Html->link('ログアウト', array('action' => 'logout')); ?></li>
</ul>
</nav>

<h1>ELITES BLOG</h1>
<h2>ELITES 公式開発ブログ</h2>

<?php echo $this->Form->create('User', array('action' => 'add')); ?>
<?php echo $this->Form->input('User.name', array('label' => 'ユーザー名')); ?>
<?php echo $this->Form->input('User.email', array('label' => 'メールアドレス')); ?>
<?php echo $this->Form->input('User.password', array('label' => 'パスワード')); ?>
<?php echo $this->Form->end('登録する'); ?>
<?php echo $this->Html->link(
    'ログイン画面へ',
    array(
      'controller' => 'posts',
      'action' => 'index'
    )
  );
?>
<footer>
  <p><a href="http://nowall.co.jp">株式会社 NOWALL</a></p>
  <small>2015 NOWALL,Inc. All Right Reserved.</small>
</footer>

