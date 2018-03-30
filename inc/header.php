<!doctype html>      <!-- www/inc/header  -->
<html lang="fr">
	<head>
	
		
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<meta name="viewport" content="width=device-width"/>
		<meta http-equiv="Content-Type" Content="text/html; charset=UTF-8">
		
		<title><?=WEBSITE_NAME . ' ' . $file['title'];?></title>
		
		<!-- If a css file exsits for this page -->
		<?=$file['css']; // Displays the css link here ?>

		<!-- Awesome font -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/v4-shims.js"></script>
		
		<!-- Bootstrap (look at the bootom too) -->
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		
		<style type="text/css">
			 body {background: url('img/background.jpg') top no-repeat fixed; background-size: cover; padding-bottom:50px;}
			 header a {color:white;}
		</style>
			
	</head>
	<body>
			<header class="row bg-dark">
				<h1 class="h3 col-md-8">
					<a href="<?=WEBSITE_URL;?>">
						<img
							class="rounded-circle float-left m-1" 
							src="img/lion.jpg" 
							alt="lion"
							height="30"
							>
					</a>
					<a class="ml-1" href="<?=WEBSITE_URL;?>"><?=WEBSITE_NAME;?></a>
				</h1>
				<h2 class="col-md-3 h6 pt-3 text-muted text-right"><a href="http://marcharnist.fr" target="_blank">
				
				
				Marc L. Harnist</a> - <a href="<?=PAGE_URL;?>truncate">Quitter</a></h2>
				<!--
				<h1 class="offset-col-md-1 col-md-8 pt-3"><a href="<?=WEBSITE_URL;?>"><?=WEBSITE_NAME;?></a></h1>
				<h2 class="col-md-3 h4 pt-3 text-muted text-right">Marc L. Harnist</h2>
				-->
				
				<nav class="nav col-md-12 justify-content-end"><!-- New html5 element - by Marc L. Harnist -->
					<?php
						if(isset($_SESSION['member'])){
							?>
							<li class="nav-item">
								<a class="nav-link text-danger"  title = "Se déconnecter" href="<?=PAGE_URL;?>__member-deconnection"><i class="fa fa-power-off fa-2x text-danger" aria-hidden="true"></i>
								 </a>
							</li>
							<?php
						}
						?>
				</nav>
			</header>
		<div class="container p-5">
