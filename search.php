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
                    <h1>Search result</h1>
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
                        <article>
							<?php if(has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('full', array('class' => 'img-thumbnail')) ?>
							<?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                            <hr class="title-underline">
                            <p>
                               <?php the_excerpt(''); ?>
                            </p>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> <?php the_time('d.m.Y') ?></span>
                                <span><i class="fa fa-user"></i> By <a href="#"><?php the_author(); ?></a> </span>
                                <span><i class="fa fa-tag"></i> <?php the_category(', ') ?> </span>
                                <span><i class="fa fa-comments"></i> <a href="<?php the_permalink() ?>"><?php comments_number( 'No comments', '1 Comments', '% Comments' ); ?></a></span>
                                <a href="<?php the_permalink() ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </article>
						<?php endwhile; ?>

							<?php the_posts_pagination( array(
								'end_size' => 1,
								'mid_size' => 1,
								'type' => 'list',
								'prev_text'    => __('«'),
								'next_text'    => __('»'),
							) ) ?>

						<?php else: ?>

							<h2>No result</h2>

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
