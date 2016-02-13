<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css( 'reset.css');
		echo $this->Html->css( 'postlist.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<?php if(!isset($user)) : ?>
			<nav>
			<ul>
			  <li><?php echo $this->Html->link('ホーム', array('action' => 'postlist')); ?></li>
			  <li><?php echo $this->Html->link('日記一覧', array('action' => 'postlist')); ?></li>
			  <li><?php echo $this->Html->link('ログアウト', array('action' => 'logout')); ?></li>
			</ul>
			</nav>
		<?php else: ?>
			<nav>
			<ul>
			  <li><?php echo $this->Html->link('ホーム', array('action' => 'postlist')); ?></li>
			  <li><?php echo $this->Html->link('日記一覧', array('action' => 'postlist')); ?></li>
			  <li><?php echo $this->Html->link('日記追加', array('action' => 'add')); ?></li>
			  <li><?php echo $this->Html->link('ログアウト', array('action' => 'logout')); ?></li>
			</ul>
			</nav>
  	<?php endif; ?>

    <h1>ELITES BLOG</h1>
    <h2>ELITES 公式開発ブログ</h2>

		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
<footer>
  <p><a href="http://nowall.co.jp">株式会社 NOWALL</a></p>
  <small>2015 NOWALL,Inc. All Right Reserved.</small>
</footer>
</div>
</body>
</html>
