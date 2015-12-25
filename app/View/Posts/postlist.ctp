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
<h3>投稿されたブログ一覧</h3>

<div>
  <?php if($list) : ?>
    <table>
    <?php foreach($list as $data) : ?>
      <tr>
      <td><?php echo $this->Html->link($data['Post']['title'], array('action' => 'detail', $data['Post']['id'])); ?>(作成日：<?=$data['Post']['created']?>)</td>
      <?php if($user['id'] == $data['Post']['user_id']) : ?>
        <td><?php echo $this->Html->link('｜[編集]', array('action' => 'edit', $data['Post']['id'])); ?></td>
        <td><?php echo $this->Html->link('｜[削除]', array('action' => 'delete', $data['Post']['id'])); ?></td>
      <?php endif; ?>
      </tr>
    <?php endforeach; ?>
    </table>
  <?php else: ?>
  投稿されたメッセージはありません
<?php endif; ?>
</div>
<footer>
  <p><a href="http://nowall.co.jp">株式会社 NOWALL</a></p>
  <small>2015 NOWALL,Inc. All Right Reserved.</small>
</footer>