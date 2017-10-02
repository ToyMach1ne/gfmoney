<?php /* Template Name: Lainahakemus Page */ get_header(); ?>

<main class="main inner-template">
    <section class="content">
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" class="content-img-big" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                    <span class="content-title"><?php the_title(); ?></span>
                    <div class="content-text editor">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-lg-offset-5 col-md-offset-5">
                    <div class="content-form">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/inner-fig.png" alt="" class="content-form-fig">
                        <p>
                        </p>
                        <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                            <?php echo do_shortcode('[contact-form-7 id="99" title="Lainahakemus form"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
