<?php get_header('home'); ?>
    <?php 
	$block2_cat = get_category(3);
	if($block2_cat):
		$posts = get_posts(array(
			'numberposts' => 4,
			'category' => 3
		));
    ?>
    <section class="page-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-md-push-4">
                    <div class="col-md-12">
                        <h2 class="title-section"><span class="title-regular"><?= get_field('verhnij_tekst', $block2_cat ) ?></span><br><?= get_field('nizhnij_tekst', $block2_cat) ?></h2>
                        <hr class="title-underline" />
                    </div>
                    <div class="row">
                    <?php 
							foreach($posts as $post):
								setup_postdata($post);
						?>
                        <div class="col-md-6 ">
                            <div class="col-xs-2 box-icon">
                            <?php if(get_field('ikonka_sleva')): ?>
                                <i class="<?= get_field('ikonka_sleva') ?>"></i>
                            <?php endif; ?>
                            </div>
                            <div class="col-xs-10">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="col-md-10 col-xs-offset-2">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                        <?php $i++; endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-8 ">
                <?php if(get_field('izobrazhenie_sleva', $block2_cat )): ?>
                    <img class="img-responsive" src="<?= get_field('izobrazhenie_sleva', $block2_cat ) ?>" alt="" />
                <?php endif; ?>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata(); unset($data, $posts); ?>
    </section>
    <?php endif; ?>

    <?php 
	$block3_cat = get_category(4);
	if($block2_cat):
		$posts = get_posts(array(
			'numberposts' => 8,
			'category' => 4
		));
    ?>
    <section class="page-section section-grey">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-section"><span class="title-regular"><?= get_field('verhnij_tekst', $block3_cat ) ?></span><br/><?= get_field('nizhnij_tekst', $block3_cat) ?></h2>
                    <hr class="title-underline " />
                    <div class="row">
                        <?php 
							foreach($posts as $post):
								setup_postdata($post);
						?>
                        <div class="col-sm-3">
                            <div class="feature-box">
                                <div class="feature-box-icon">
                                    <?php if(get_field('ikonka_sleva3')): ?>
                                        <i class="<?= get_field('ikonka_sleva3') ?>"></i>
                                    <?php endif; ?>
                                </div>
                                <div class="feature-box-info">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div> 
                        <?php $i++; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php 
	$block4_left = get_category(5);
	if($block4_left):
		$posts = get_posts(array(
			'numberposts' => 1,
			'category' => 5
		));
    ?>
    <?php 
        foreach($posts as $post):
            setup_postdata($post);
    ?>
    <section class="page-section-no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="container col-md-6">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-4 spotlight-container">
                            <h2 class="title-section"><span class="title-regular"><?= get_field('tekst_sverhu') ?></span><br/><?= get_field('tekst_snizu') ?></h2>
                            <hr class="title-underline" />
                            <p>
                                <?php the_content('') ?>
                            </p>
                            <?php if( get_field('knopka-block4') ): $link = get_field('knopka-block4');?>
                                <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-primary"><?php echo esc_html($link['title']); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 spotlight-img-cont">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php $i++; endforeach; ?>
    <?php endif; ?>

    <?php 
	$block4_right = get_category(6);
	if($block4_right):
		$posts = get_posts(array(
			'numberposts' => 1,
			'category' => 6
		));
    ?>
    <?php 
        foreach($posts as $post):
            setup_postdata($post);
    ?>
    <section class="page-section-no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="container col-md-6 col-md-push-6">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-1 spotlight-container">
                            <h2 class="title-section"><span class="title-regular"><?= get_field('tekst_sverhu') ?></span><br/><?= get_field('tekst_snizu') ?></h2>
                            <hr class="title-underline" />
                            <p>
                                <?php the_content('') ?>
                            </p>
                            <?php if( get_field('knopka-block4') ): $link = get_field('knopka-block4');?>
                                <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-primary"><?php echo esc_html($link['title']); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6 spotlight-img-cont"> 
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php $i++; endforeach; ?>
    <?php endif; ?>

    <?php 
	$block5_cat = get_category(7);
	if($block5_cat):
		$posts = get_posts(array(
			'numberposts' => 5,
			'category' => 7
		));
    ?>
    <section class="page-section ">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="title-section"><span class="title-regular"><?= get_field('verhnij_tekst', $block5_cat ) ?></span><br/><?= get_field('nizhnij_tekst', $block5_cat ) ?></h2>
                    <hr class="title-underline" />
                </div>
                <?php 
                foreach($posts as $post):
                    setup_postdata($post);
                ?>
                <div class="col-md-4 ">
                    <div class="col-xs-2 box-icon">
                        <div class="<?= get_field('ikonka_zapisi') ?>"></div>
                    </div>
                    <div class="col-xs-10">
                        <h4><?php the_title() ?></h4>
                        <h5><?= get_field('dop_zagolovok') ?></h5>
                    </div>
                    <div class="col-md-12">
                        <p>
                            <?php the_content() ?>
                        </p>
                    </div>
                </div>
                <?php $i++; endforeach; ?>
            </div>    
        </div>
    </section>
    <?php endif; ?>

    <?php 
	$block6_cat = get_category(8);
	if($block6_cat):
		$posts = get_posts(array(
			'numberposts' => 6,
			'category' => 8
		));
    ?>
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <h2 class="title-section"><span class="title-regular"><?= get_field('verhnij_tekst', $block6_cat ) ?></span><br/><?= get_field('nizhnij_tekst', $block6_cat ) ?></h2>
                    <hr class="title-underline" />
                    <p>
                        <?php echo $block6_cat->description ?>
                    </p>
                </div>
                <?php dynamic_sidebar('clients-gallery') ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php 
	$block7_cat = get_category(9);
	if($block7_cat):
		$posts = get_posts(array(
			'numberposts' => 1,
			'category' => 9
		));
    ?>
    <section class="page-section-no-padding">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-6 col-md-push-6">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 contact-container">
                                <h2 class="title-section"><span class="title-regular"><?= get_field('verhnij_tekst', $block7_cat ) ?></span><br/><?= get_field('nizhnij_tekst', $block7_cat ) ?></h2>
                                <hr class="title-underline" />
                                <p>Maecenas luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena. </p>
                                <?php echo do_shortcode('[contact-form-7 id="174" title="Контактная форма 1"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6 padding-0 ">
                    <div id="map" class="img-responsive map-style"></div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
<?php get_footer(); ?>