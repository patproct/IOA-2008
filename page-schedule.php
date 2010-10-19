<?
/*
 * Template Name: Schedule
*/
?>
<?php get_header(); ?>
<td id="middleCol">
	<?
	$schedule_query = new WP_Query('category_name=Schedule&posts_per_page=4');
	
	if ( $schedule_query->have_posts() ) : while ( $schedule_query->have_posts() ) : $schedule_query->the_post(); ?>
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<div class="post">
	<?php $myEvent = get_group('Event'); // use the Custom Group name
	foreach($myEvent as $event){ ?>
	<p>
		<?php echo $event['date'][1];?>, <b><?php echo $event['location'][1]; ?></b>&nbsp;
		<?php if ($event['status'][1]) {
			$statusOutput = $event['status'][1];
			if ($event['sanction'][1]) {
				$statusOutput = '<a href="'.$event['sanction'][1].'" target="_blank">'.$statusOutput.'</a>';
			}
			$statusOutput = '('.$statusOutput.')';
		}
		echo $statusOutput; ?><br />
		<?php echo $event['note'][1]; ?>
		<?php $statusOutput = ''; ?>
	</p>
	<?php } ?>
	</div>
	<hr />
	<?php
	endwhile;
	endif;
	
	wp_reset_query();
	?>
</td><!-- end middleCol td -->
<td id="rightCol">
	<div id="search">
		<h3>PDF Reader</h3>
		<p>Can't see the results? Try downloading and installing <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">Adobe Acrobat Reader</a> for free!</p>
		<!-- <p><img alt="race boat" style="width: 187px; height: 122px;" src="<?php bloginfo('template_directory'); ?>/photos/beegle-1_225.jpg"></p> <p>Join us for the 2008 racing season!</p> -->

&nbsp;<br>

&nbsp;<br> </div> </td><!-- end rightCol td -->
<?php get_footer(); ?>