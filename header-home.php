<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">
</head>
<?php wp_head() ?>
<body>


    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="href=<?= home_url('/') ?>">
                    <?php $custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo')); if($custom_logo) : ?>
                        <img class="logo" src="<?php echo $custom_logo[0] ?>" alt="<?php bloginfo('name') ?>">
                    <?php endif; ?>
                </a>
            </div>
            <nav class="collapse navbar-collapse navbar-ex1-collapse">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header_menu',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav navbar-right'
                        ));
                    ?>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </div>
    <!-- Hero Header -->
    <header class="hero-header" <?php echo elsa_get_background('fon_shapki') ?>>
        <div class="container">
            <div class="intro-text">
                <?php if(get_field('zagolovok-1')): ?>
                    <div class="intro-lead-in"><?php the_field('zagolovok-1') ?></div>
                <?php endif; ?>
                <?php if(get_field('zagolovok_2')): ?>
                    <div class="intro-heading"><?php the_field('zagolovok_2') ?></div>
                <?php endif; ?>
                <?php if( get_field('header-btn') ): $link = get_field('header-btn');?>
                    <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-primary btn-lg"><?php echo esc_html($link['title']); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </header>