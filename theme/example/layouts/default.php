<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title . ' - ' . $config['sitewide_title']?></title>
		<meta name="description" content="<?php echo $description?>">

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		
		<link href="theme/<?php echo $config['theme']?>/assets/bootstrap.css" rel="stylesheet">
		<link href="theme/<?php echo $config['theme']?>/assets/style.css" rel="stylesheet">
		
	</head>
	
	<body>
	
		<div class="container">
		
			<div class="header home_header">
				<h1><a href="<?php echo $config['path'];?>"><?php echo $config['sitewide_title']?></a></h1>
				<?php include('theme/'.$config['theme'].'/partials/main_nav.php');?>
			</div>

			<div class="row main-area">

				<div class="column span12">
	
					<?php echo $content; ?>

				</div>
				
				<div class="column span4">
	
					<?php include('blocks/contact_form.php');?>

				</div>
				
			</div>
			
			<div class="footer">
				&copy; <?php echo date('Y');?> Subooa Studios
			</div>
		
		</div>

		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script type="text/javascript" src="theme/<?php echo $config['theme']?>/assets/sitewide.js"></script>
		
	</body>
</html>
