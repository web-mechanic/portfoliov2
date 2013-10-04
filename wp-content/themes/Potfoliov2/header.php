<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>Thomas Lissens - Webdesigner | <?php if (is_home () ) { bloginfo(‘name’); }
elseif ( is_category() ) { single_cat_title(); echo ‘ - ‘ ; bloginfo(‘name’); }
elseif (is_single() ) { single_post_title();}
elseif (is_page() ) { single_post_title();}
else { wp_title(‘’,true); } ?> </title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/main.css" /> 
        <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body>
    <header>
        <h1 itemscope itemtype="http://schema.org/Person" ><a href="<?php echo home_url(); ?>" title="Vers la page d'accueil"><span itemprop="name" class="nameTitle">Thomas Lissens </span><br/><span itemprop="jobTitle" class="speciality">Graphic & Webdesigner</span></a></h1>
    <ul class="socialProfile">
        <li><a class="facebook" href="https://www.facebook.com/ThomasLissensGraphicWebDesigner">Facebook</a></li>
        <li><a class="twitter" href="https://twitter.com/ThLissens">Twitter</a></li>
        <li><a class="pinterest" href="http://www.pinterest.com/thlissens/">Pinterest</a></li>
        <li><a class="linkedin" href="http://be.linkedin.com/in/thomaslissens">Linkedin</a></li>
    </ul>
    <nav class="first" role="navigation" id="nav">
            <?php wp_nav_menu(array('menu' => 'main',
                                    'depth' => '1' )); ?>
    </nav> 
</header>