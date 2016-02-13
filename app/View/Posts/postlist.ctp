<h3>投稿されたブログ一覧</h3>

<div>
  <?php if($list) : ?>
    <table>
    <?php foreach($list as $data) : ?>
      <tr>
      <td class="titlelink"><?php echo $this->Html->link($data['Post']['title']."(作成日：".$data['Post']['created'].")", array('action' => 'detail', $data['Post']['id'])); ?></td>
      <?php if($user['id'] == $data['Post']['user_id']) : ?>
        <td class="editlink"><?php echo $this->Html->link('｜[編集]', array('action' => 'edit', $data['Post']['id'])); ?></td>
        <td class="deletelink"><?php echo $this->Html->link('｜[削除]', array('action' => 'delete', $data['Post']['id'])); ?></td>
      <?php endif; ?>
      </tr>
    <?php endforeach; ?>
    </table>
    <?php else: ?>
    投稿されたメッセージはありません
  <?php endif; ?>
</div>
