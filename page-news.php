<?
/*
 * Template Name: News
*/
?>
<?php get_header(); ?>
<td id="middleCol">
	<?
	$news_query = new WP_Query('category_name=News&posts_per_page=10');
	
	if ( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>"> <!-- <?php the_time('F jS, Y')?> -->
	<h2><?php the_title(); ?></h2>
	<?php the_content();
		if (in_category('Schedule')) {
			$myEvent = get_group('Event'); // use the Custom Group name
			foreach($myEvent as $event){ ?>
			<p>
				<?php echo $event['date'][1];?>, <b><?php echo $event['location'][1]; ?></b>&nbsp;
				<?php if ($event['status'][1]) {
					echo '('.$event['status'][1].')';
				} ?><br />
				<?php echo $event['note'][1]; ?>
			</p>
			<?php }
		} ?>
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
		<p>
			<img style="width: 187px; height: 138px;" src="<?php bloginfo('template_directory'); ?>/photos/bob_behind_strobe.png" alt="man behind strobe light">
		</p>
		<p>The high points and class results from last year are available here in Adobe PDF format.</p>
		<p><a href="http://www.indianaoutboard.org/results/finalresults09.pdf">2009 IOA Results</a>, (PDF, 12 KB)</p> <p>If you do not have it, you may download the <a href="http://www.adobe.com/products/acrobat/" target="_blank">Adobe Acrobat Reader</a> for free!</p>
	</div>
</td><!-- end rightCol td -->
<?php get_footer(); ?>