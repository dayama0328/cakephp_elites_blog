<div>
<table border="1" cellspacing="0" cellpadding="0">
  <?php echo $this->Form->create('Post', array('action' => 'add'));?>
  <tr>
  <th>タイトル</th>
  <td><?php echo $this->Form->input('title', array('label' => 'タイトル', 'label' => false, 'div' => false));?></td>
  </tr>
  <tr>
  <th>内容</th>
  <td><?php echo $this->Form->input('content', array('label' => '内容', 'label' => false, 'div' => false));?></td>
  </tr>
</table>
<p><?php echo $this->Form->end('投稿する'); ?></p>
</div>
