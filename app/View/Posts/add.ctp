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


<div>
  <?php echo $this->Form->create('Post', array('action' => 'add'));?>
  <?php echo $this->Form->input('title', array('label' => 'タイトル'));?>
  <?php echo $this->Form->input('content', array('label' => '内容'));?>
  <?php echo $this->Form->end('投稿する'); ?>
</div>
<footer>
  <p><a href="http://nowall.co.jp">株式会社 NOWALL</a></p>
  <small>2015 NOWALL,Inc. All Right Reserved.</small>
</footer>