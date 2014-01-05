<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>	
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
		
			<div id="inner-header" class="clearfix">
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid nav-container">
							<div id="search-2" class="widget widget_search span3 hidden-tablet hidden-phone">
								<form role="search" method="get" id="searchform" action="http://localhost:8888/wordpresstest/">
				 					<input type="text" value="" name="s" id="s" placeholder="Search..." class="placeholder">
				 					<input type="submit" id="searchsubmit" value="">
			  					</form>
  							</div>
							<nav role="navigation">
								<div class="glr_logo span5 pagination-centered">
									<a    title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
										<img src="<?php bloginfo('url');?>/wp-content/themes/bootstrap-master/images/blue_logo.png">
									</a>
								</div>
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								
								<div class="nav-collapse">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>

							</nav>
							
							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>
							
						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->
				
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		<div class="glr-pages">
			<div class="container-fluid">
				<ul class="breadcrumb">
				  <li><a href="http://localhost:8888/wordpresstest/?cat=5">TRAVEL & FEATURES</a> <div class="caret"></div><span class="seperator">&nbsp</span></li>
				  <li><a href="http://localhost:8888/wordpresstest/?cat=6">DINING & DRINKS</a> <div class="caret"></div><span class="seperator">&nbsp</span></li>
				  <li class="active"><a href="http://localhost:8888/wordpresstest/?cat=8">TECH & GADGETS</a><div class="caret"></div><span class="seperator">&nbsp</span></li>
				  <li><a href="http://localhost:8888/wordpresstest/?cat=9">STYLE</a> <div class="caret"></div><span class="seperator">&nbsp</span></li>
				  <li><a href="http://localhost:8888/wordpresstest/?cat=10">GREEN</a><div class="caret"></div> <span class="seperator">&nbsp</span></li>
				  <li><a href="#">EVENTS</a> <div class="caret"></div><span class="seperator">&nbsp</span></li>
				  <li><a href="#">NEWSLETTERS</a> <div class="caret"></div><span class="seperator">&nbsp</span></li>
				</ul>
			</div>
		</div>
		<div class="glr-social">
			<div class="container-fluid">
				<ul class="social pull-right">
				  <h3>connect with <b class="glr-blue">goodlife</b><b>report</b></h3>
				  <li><a href="https://www.facebook.com/pages/Good-Life-Report-Discover-the-GoodLife/311272415593907" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/themes/bootstrap-master/images/facebook.png"></a></li>
				  <li><a href="https://twitter.com/GoodLifeReport" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/themes/bootstrap-master/images/twitter.png"></a></li>
				  <li><a href="http://pinterest.com/goodlifereport" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/themes/bootstrap-master/images/pinterest.png"></a></li>
				  <li><a href="http://tumblr.com/goodlifereport" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/themes/bootstrap-master/images/tumblr.png"></a></li>
				</ul>
			</div>
		</div>

		<div class="container-fluid">
		
