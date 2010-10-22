<?php get_header(); ?>
<td id="middleCol">
	<?php
	$home_query = new WP_Query('category_name=Front Page&posts_per_page=10');
	
	if ( $home_query->have_posts() ) : while ( $home_query->have_posts() ) : $home_query->the_post();
	?>
	<div class="post" id="post-<?php the_ID(); ?>"> <!-- <?php the_time('F jS, Y') ?> -->
		<h2><?php the_title(); ?></h2>
		<?php
		the_content();
		if (in_category('Schedule')) {
			$myEvent = get_group('Event'); // use the Custom Group name
			foreach($myEvent as $event){ ?>
			<p>
				<?php echo $event['date'][1];?>, <b><?php echo $event['location'][1]; ?></b>&nbsp;
				<?php if ($event['status'][1]) {
					echo '('.$event['status'][1].')';
				} ?><br />
				<?php echo $event['note'][1]; ?><br />
				Sanction  |  Results  | Photos
			</p>
			<?php }
		}
		?>
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
	<h3>IOA Legacy</h3>
	<p>Looking for IOA stuff from before 2008? Head on over the the IOA's <a href="http://www.indianaoutboard.org/legacy/">legacy</a> site.</p>
	<p>The <a href="javascript:openme('http://indianaoutboard.org/legacy/results/sallee.html')">Sallee Award</a> winners since 1963 have been added. Enjoy!</p>
	<!-- <br><hr>
	<h3>2009 Membership</h3> <p><span style="font-weight: bold;">Join us for this year!</span>
	The IOA Membership Application is now available here.</p>
	<p><a href="http://www.indianaoutboard.org/about/IOA-memberAppl-2009.pdf">2009 Membership Application</a>, (PDF, 1.54 MB)</p>
	<p>If you do not have it, you may download the <a href="http://www.adobe.com/products/acrobat/" target="_blank">Adobe Acrobat Reader</a> for free!</p> -->
	<!-- <br><hr>
	<h3>Got links?</h3>
	<p>Want information about what other clubs are doing or about the	sanctioning bodies? Visit our <a href="links.html">links</a> page!</p> -->
</div>
</td><!-- end rightCol td -->
</tr><!-- end center content row -->
<?php get_footer(); ?>
