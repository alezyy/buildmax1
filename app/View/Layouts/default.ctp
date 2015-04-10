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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php // echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	 

              	<?php 
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
                //echo $meta_description;
                //echo $meta_keywords;
                //echo $meta_city;
                //echo $meta_state;
		//echo $this->Html->css('topmenu2.css?v=1.0');
		// echo $this->Html->css('home');
		//echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('style');
		echo $this->fetch('css');
                //echo $this->element('canonicals'); 


		echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('bootstrap-theme.min');
		echo $this->Html->script('scripts');	
		echo $this->Html->script('less-1.3.3.min');
		echo $this->Html->script('html5shiv');
		echo $this->fetch('script');

        ?>

 
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php // echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
			</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
