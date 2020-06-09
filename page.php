<?php get_header(); ?>
	
<?php if(have_posts() ) : while (have_posts() ) : the_post(); ?>
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
                    <h1><?php wp_title('') ?></h1>
                </div>
            </div>
        </div>
	</div>
	
    <section class="page-section padding-30">
        <div class="container page-con">
            <div class="row">
                <!-- Content -->
                <div class="col-md-9 margin-bottom-15">
                    <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('class' => 'img-thumbnail')) ?>
                    <?php endif; ?>
                    <?php
                        global $more;
                        $more = 0;
                    ?>
					<?php the_content('More information'); ?><?php wp_link_pages() ?>
				</div>
				<?php endwhile; ?>

				<?php else: ?>

				<?php endif; ?>
                <!-- Sidebar -->
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
	</section>
	
<?php get_footer(); ?>

   