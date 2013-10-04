<?php get_header(); ?>
<div class="main">
	<section class="hello">
		<h2>Qui suis-je&nbsp;?</h2>
		<p>Salut&nbsp; ! je m'appelle Thomas Lissens et je suis webdesigner. Créer des designs et les intégrer tout en réfléchissant à l'ergonomie et aux objectifs d'un site est à la fois mon métier et ma passion.</p>
		<p>J'ai créé cet espace dans le but d'interagir avec toi. Tu vas pouvoir <a href="http://www.thomas-lissens.be/portfolio/" title="Accéder au porfolio">jeter un oeil à mes créations</a> ou <a href="http://www.thomas-lissens.be/contact/" title="Accéder à la page de contact">me contacter</a> si tu souhaites entammer un projet&nbsp;!</p>
	</section>
	<section class="sixLastJob">
		<h2>Quelques travaux au hasard.</h2>
		<ul>
		<? $loop = new WP_Query( array( 'post_type' => 'ptfPT', 'posts_per_page' => 3 ) ); 
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