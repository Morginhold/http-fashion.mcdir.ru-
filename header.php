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
