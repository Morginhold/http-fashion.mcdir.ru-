<?php get_header(); ?>

<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
					</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1><?php wp_title(''); ?></h1>
                </div>
            </div>
        </div>
	</div>

<!-- Right Sidebar Container  -->
<section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-9">
                    <div class="blog-listing">
						<?php if(have_posts() ) : while (have_posts() ) : the_post(); ?>
						<div class="glass-post"><?php if(function_exists('mayakPostViews')) { echo mayakPostViews(get_the_ID()); }?></div>
                        <article>
							<?php if(has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('full', array('class' => 'img-thumbnail')) ?>
							<?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                            <hr class="title-underline">
							<div class="post-meta">
                                <span><i class="fa fa-calendar"></i> <?php the_time('d.m.Y') ?></span>
                                <span><i class="fa fa-user"></i> By <a href="#"><?php the_author(); ?></a> </span>
                                <span><i class="fa fa-tag"></i> <?php the_category(', ') ?> </span>
                                <span><i class="fa fa-comments"></i> <a href="#"><?php comments_number( 'No comments', '1 Comments', '% Comments' ); ?></a></span>
                            </div>
                            <p>
                               <?php the_content(); ?><?php wp_link_pages() ?>
							</p>
							<div class="post-block post-author clearfix">
                                <?php $post_id_7 = get_post( 278 ); $title = $post_id_7->post_title;?>
                                <h3 class="heading-primary"><i class="fa fa-user"></i><?php echo $title; ?></h3>
                                <div class="author-details">
                                    <?php echo get_the_post_thumbnail( 278, array(150, 150), array('class' => 'img-thumbnail pull-left')); ?>
                                    <p><strong class="name"><a href="http://elsa.loc/author/">John Doe</a></strong></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                                </div>
                            </div>
                                <?php comments_template(); ?>
                        </article>
						<?php endwhile; ?>

						<?php else: ?>

						<?php endif; ?>
                    </div>
                </div>

                <div class="col-md-3">
					<?php get_sidebar('blog'); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
