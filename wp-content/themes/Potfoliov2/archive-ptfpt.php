<?php get_header(); ?>

<div class="main">
<h2>Portfolio</h2>
<p>Je vois que tu es curieux de voir ce que je sais faire ! Si tu veux découvrir mes compétences, n'hésite pas à consulter mon CV !</p>

<section class="sixLastJob">

	<ul>
	<? $loop = new WP_Query( array( 'post_type' => 'ptfPT', 'posts_per_page' => 12 ) ); 
	while ( $loop->have_posts() ) : $loop->the_post(); ?>				
		<li>	
		<a href="<?php echo get_permalink(); ?>" class="work">
				<? the_post_thumbnail('ptfAccueil'); ?>
			<p><? the_excerpt();?></p>
			
		</a>
		</li>
	<?php endwhile; ?>
	</ul>
</section>

	
<?php get_footer(); ?>