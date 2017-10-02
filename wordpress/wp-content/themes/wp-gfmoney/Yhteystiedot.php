<?php /* Template Name: Yhteystiedot Page */ get_header(); ?>

<main class="main contacts-template">
        <section class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" class="content-img-big" alt="">
            <!--            <img src="-->
            <!--/img/inner-bg-2.png" class="content-img-small desktop" alt="">-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                        <span class="content-title"><?php the_title(); ?></span>
                        <div class="content-text editor">
                            <p><?php the_field('company_name'); ?></p>
                            <p><?php the_field('company_adress'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-lg-offset-5 col-md-offset-5">
                        <div class="content-form">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/contacts-fig.png" alt="" class="content-form-fig">
                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_3">
                                <?php echo do_shortcode('[contact-form-7 id="104" title="Yhteystiedot form"]'); ?>
                            </div>
                        </div>
                    </div><!-- col-md-4 -->
                    <div class="col-lg-9 col-md-9 col-xs-12 pull-right staff">
                        <span class="staff-title"><?php the_field('second_row_title'); ?></span>
                        <div class="staff-wrap">
                          <?php if( have_rows('person_repeat') ): while ( have_rows('person_repeat') ) : the_row();
                          // vars
                          $image = get_sub_field('person_thumb');?>
                            <div class="person">
                                <div class="person-img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                </div>
                                <span class="person-title"><?php the_sub_field('person_name'); ?></span>
                                <span class="person-desc"><?php the_sub_field('person_desc'); ?></span>
                                <span class="person-info editor">
                                  <p style="text-align: center;"><?php the_sub_field('person_phone'); ?></p>
                                  <p style="text-align: center;"><?php the_sub_field('person_email'); ?></p>
                                </span>
                            </div>
                          <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
