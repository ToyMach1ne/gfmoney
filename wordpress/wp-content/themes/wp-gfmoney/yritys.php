<?php /* Template Name: Yritys Page */ get_header(); ?>

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
                            <div class="content-images">
                                <p>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                      <img class="alignnone wp-image-38 size-medium" src="<?php echo get_template_directory_uri(); ?>/img/lainasto_logo-300x238.png" alt="" width="300" height="238">
                                    </a>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                      <img class="alignnone wp-image-42 size-medium" src="<?php echo get_template_directory_uri(); ?>/img/korkeatuottoinen-logo-300x64.png" alt="" width="300" height="64">
                                    </a>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                      <img class="alignnone wp-image-39 size-full" src="<?php echo get_template_directory_uri(); ?>/img/westhouse_logo.png" alt="" width="221" height="30">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
