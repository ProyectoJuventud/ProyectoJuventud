<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <?php
        echo $this->Html->css(array('bootstrap.min','bootstrap-theme.min'));

        echo $this->Html->script(array('jquery.min-1.11','bootstrap.min'));

		echo $this->Html->meta('icon',$this->Html->url('/img/favicon.png'));
        echo $scripts_for_layout;
    ?>
</head>

<body>
	<?php echo $this->Session->flash(); ?>
	<div id="container">
		<div id="content">
				<?php echo $content_for_layout ?>
		</div>
	</div>
</body>
</html>
