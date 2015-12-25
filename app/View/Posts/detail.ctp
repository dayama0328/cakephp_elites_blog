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
<h3>日記詳細ページ</h3>
<p>タイトル：<?=$data['title']?></p>
<p>作成日：<?=$data['created']?><span>｜作成者：<?=$data['name']?></span></p>
<p>本文：<br><?=$data['content']?></p>



