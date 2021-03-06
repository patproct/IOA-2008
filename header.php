<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
		if (is_home()) {
			$title_tag = "We race boats! ";
		} else {
			$title_tag = wp_title('',0,'')." :: ";
		}
		if (is_page('schedule') || is_page('results')) {
			$title_tag = '2010 '.$title_tag;
		}
		?>
		<title><?php echo $title_tag; bloginfo('name');?></title>
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		<meta content="Indiana Outboard Association, Modified Racing Hydroplanes, Modified Racing Runabouts, DIY, racing, midwest, Indiana, Ohio, Michigan, Illinois, Oklahoma, Kentucky, APBA" name="keywords" />
		<meta content="We race modified outboard hydroplanes and runabouts throughout the midwest!" name="description" />
		
		<!-- begin javascript & stylesheets -->
		<script src="http://indianaoutboard.org/script-openme.js" type="text/javascript" language="JavaScript"> </script>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/maillink.js"></script>
		
		<?php if (wt_get_depth() == 1) { ?>
			<!-- Level 1 menu styling -->
			<style type="text/css" media="screen">
			li.current_page_item a {
				color: #333 !important;
				font-weight: bold;
			}
			ul.children {
				display: block;
			}
			</style>
		<?php } ?>
		<?php if (wt_get_depth() == 0) { ?>
			<!-- Level 0 menu styling -->
			<style type="text/css" media="screen">
			li.current_page_item a {
				color: #333 !important;
				font-weight: bold;
			}
			ul.children {
				display: block;
			}
			ul.children li a {
				color: #930 !important;
				font-weight: normal;
			}
			</style>
		<?php } ?>
		<?php if ((wt_get_depth() == 0)) { ?>
			<!-- If the current level 0 page has children show them and hide all other children -->
			<style type="text/css" media="screen">
			ul.children {
				display: none;
			}
			.current_page_item ul {
				display: block !important;
			}
			</style>
		<?php } ?>
		<?php if ((wt_get_depth() > 0)) { ?>
			<!-- Hides the level 1+ page links if those pages' parent is not the current page -->
			<style type="text/css" media="screen">
			ul.children {
				display: none;
			}
			li.current_page_ancestor ul, li.current_page_parent ul {
				display: block !important;
			}
			</style>
		<?php } ?>
		
		<!-- begin Google Analytics -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-15855433-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<!-- end Google Analytics -->
		<!-- end javascript & stylesheets -->
	</head>
	<body style="background-color: rgb(255, 255, 255);">
		<table id="container" summary="" border="0" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td id="header" colspan="3">
						<div id="headerlogo">
							<?php if (!is_home()) { ?>
								<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="" height="115" width="144" /></a>
							<?php } else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="" height="115" width="144">
							<?php } ?>
						</div> <!-- end headerlogo div -->
					</td>
				</tr><!-- end header row -->
				<tr>
					<td id="tag" colspan="3">
						<h1><?php if (is_home()) { echo "Home"; } else { wp_title('',1,''); } ?>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Indiana Outboard Association&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Season 2011</h1>
					</td>
				</tr><!-- end tag row -->
				<tr id="center" valign="top"><!-- begin center content row -->
					<td id="leftCol">
						<?php
							include 'scripts/menu.php';
							include 'menu.php';
						?>
					</td><!-- end leftCol td -->
