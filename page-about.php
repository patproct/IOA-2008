<?
/*
 * Template Name: About
*/
?>
<?php get_header(); ?>
<td id="middleCol">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	
	<?php
	endwhile;
	endif;
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