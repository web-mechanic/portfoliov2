<?php get_header(); ?>
<div class="main">
<section itemscope itemtype="http://schema.org/CreativeWork" class="singlePortfolio">
	<h2 itemprop="name"><? the_title(); ?></h2>
		<? $image = get_field('showcase'); ?>
		<img itemprop="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<h3>A propos</h3>
		<? the_field('a_propos'); ?>
		<h3>Url du site</h3>
		<a href="<? the_field('url'); ?>" target="_blank">  <? the_field('url'); ?></a>
		<h3>Outils et techniques utilisées</h3>
		<? the_field('outils'); ?>
		<h3>Voir d'autres travaux</h3>
<span> <?php next_post('% &raquo; ', '', 'yes'); ?></span>
<span><?php previous_post('&laquo; %', '', 'yes'); ?></span> 
</section>
<?php get_footer(); ?>