<?php
$cakeDescription = __('TopMenu');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
   <?php echo $this->Html->charset('utf-8'); ?>

   <title>   <?php echo $title_for_layout; ?>   </title>

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

               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta name="description" content="">
               <meta name="author" content="">

	       <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	       <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	       <!--script src="js/less-1.3.3.min.js"></script-->
	       <!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	

               <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	
</head>

		<?php echo $content_for_layout; ?>

</body>
</html>
