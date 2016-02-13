<h3>本当に下記の日記を削除しますか？</h3>
  <?php echo $this->Form->create('Post', array('action' => 'delete')); ?>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
  <th>タイトル</th>
  <td><?php echo $this->Form->input('title', array('label' => 'タイトル', 'value' => $data['title'], 'label' => false, 'div' => false)); ?></td>
  </tr>
  <tr>
  <th>内容</th>
  <td><?php echo $this->Form->input('content', array('label' => '内容', 'value' => $data['content'], 'label' => false, 'div' => false)); ?></td>
  </tr>
  <?php echo $this->Form->hidden('id' , array('value' => $data['id'])); ?>
</table>
  <?php echo $this->Form->end('削除する'); ?>

