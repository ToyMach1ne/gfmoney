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
                                      <?php $image = get_field('img_one'); if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                      <?php endif; ?>
                                    </a>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                      <?php $image2 = get_field('img_two'); if( !empty($image2) ): ?>
                                        <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                                      <?php endif; ?>
                                    </a>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                      <?php $image3 = get_field('img_three'); if( !empty($image3) ): ?>
                                        <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
                                      <?php endif; ?>
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
