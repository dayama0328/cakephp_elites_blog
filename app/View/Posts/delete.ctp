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
<h3>本当に下記の日記を削除しますか？</h3>
  <?php echo $this->Form->create('Post', array('action' => 'delete')); ?>
  <?php echo $this->Form->input('title', array('label' => 'タイトル', 'value' => $data['title'])); ?>
  <?php echo $this->Form->input('content', array('label' => '内容', 'value' => $data['content'])); ?>
  <?php echo $this->Form->hidden('id' , array('value' => $data['id'])); ?>
  <?php echo $this->Form->end('削除する'); ?>

<footer>
  <p><a href="http://nowall.co.jp">株式会社 NOWALL</a></p>
  <small>2015 NOWALL,Inc. All Right Reserved.</small>
</footer>
