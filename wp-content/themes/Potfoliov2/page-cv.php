<?php get_header(); ?>
<div class="main" itemscope itemtype="http://schema.org/Person">
<h2 itemprop="name">Thomas Lissens</h2>
<? $loop = new WP_Query( array( 'post_type' => 'cvPT', 'posts_per_page' => 1 ) ); 
		while ( $loop->have_posts() ) : $loop->the_post(); ?>				
<? the_post_thumbnail('cv'); ?>
<div class="half">
	<h3>Formations</h3>
		<? the_field('formation'); ?>
	<h3>Langues</h3>
		<? the_field('langues'); ?>
			<h3>Centres d'intérêts</h3>
		<? the_field('centre_dinteret'); ?>
</div>
<div class="half">
	<h3>Expériences</h3>
		<? the_field('experience'); ?>
	<h3>Compétences</h3>
		<? the_field('competences'); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>