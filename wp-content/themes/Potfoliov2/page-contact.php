<?php get_header(); ?>
<div class="main contact">
	<h2>Contact</h2>
	<div class="half rounded">
		<p>Tu désire me contacter&nbsp;? C'est une bonne idée&nbsp;! Si le formulaire ne suffit pas, voici mes coordonées complètes.</p>
		<div itemscope itemtype="http://schema.org/Person">
		<h3 itemprop="name">Thomas Lissens</h3>
		<p itemscope itemtype="http://schema.org/PostalAddress">
			<span itemprop="streetAddress">5, rue Basses-Trixhes</span><br/>
			<span itemprop="postalCode">4218</span> <span itemprop="addressLocality">Couthuin</span><br/>
			<span itemprop="addressCountry">Belgique</span>
		</p>
		<p>
			GSM: 0472 41 55 89<br/>
			E-mail: th.lissens@gmail.com
		</p>
		</div>
		<h3>Sur les réseaux sociaux</h3>
	<ul class="socialProfile" itemscope itemtype="http://schema.org/Person">
        <li><a itemprop="url" class="facebook" href="https://www.facebook.com/ThomasLissensGraphicWebDesigner">Facebook</a></li>
        <li><a itemprop="url" class="twitter" href="https://twitter.com/ThLissens">Twitter</a></li>
        <li><a itemprop="url" class="pinterest" href="http://www.pinterest.com/thlissens/">Pinterest</a></li>
        <li><a itemprop="url" class="linkedin" href="http://be.linkedin.com/in/thomaslissens">Linkedin</a></li>
    </ul>
	</div>
	<div class="half">
		<?php echo do_shortcode( '[contact-form-7 id="49" title="Contact form 1"]' ); ?>
	</div>
<?php get_footer(); ?>