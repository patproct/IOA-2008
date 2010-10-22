<?
/*
 * Template Name: Results
*/
?>
<?php get_header(); ?>
<td id="middleCol">
	<?
	$schedule_query = new WP_Query('category_name=Schedule&posts_per_page=4');
	
	if ( $schedule_query->have_posts() ) : while ( $schedule_query->have_posts() ) : $schedule_query->the_post(); ?>
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
	<?php $myEvent = get_group('Event'); // use the Custom Group name
	foreach($myEvent as $event){ ?>
	<p>
		<?php echo $event['date'][1];?>, <b><?php echo $event['location'][1]; ?></b>&nbsp;<br />
		<?php if ($event['results'][1]) { ?>
			<!-- <a href="<?php echo $event['results'][1]; ?>" target="_blank" title="Results for race at <?php echo $event['location'][1]; ?> on <?php echo $event['date'][1];?>">Results</a> -->
			Results are <a href="<?php echo $event['results'][1]; ?>" target="_blank" title="Results for race at <?php echo $event['location'][1]; ?> on <?php echo $event['date'][1];?>">available</a>.
		<?php } else { ?>
			No results available yet.
		<?php } ?>
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
</div>
</td><!-- end rightCol td -->
</tr><!-- end center content row -->

<?php get_footer(); ?>