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
                            <p>GF Money Oy</p>
                            <p>Mikonkatu 2 D, 2. krs., 00100 Helsinki</p>
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
                        <span class="staff-title">Henkilöstö</span>
                        <div class="staff-wrap">
                          <div class="person">
                            <div class="person-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" height="272" width="224">
                            </div>
                            <span class="person-title">Mikko Mali</span>
                            <span class="person-desc">Toimitusjohtaja</span>
                            <span class="person-info editor">
                              <p style="text-align: center;">Puhelin: 0500 544 449</p>
                              <p style="text-align: center;">mikko.mali@gfmoney.fi</p>
                            </span>
                          </div>
                           <div class="person">
                             <div class="person-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" height="272" width="224">
                             </div>
                            <span class="person-title">Riku Nisula</span>
                            <span class="person-desc">Laina- ja sijoitusasiat</span>
                            <span class="person-info editor">
                              <p style="text-align: center;">Puhelin: 040 826 2193</p>
                              <p style="text-align: center;">riku.nisula@gfmoney.fi</p>
                            </span>
                          </div>
                          <div class="person">
                           <div class="person-img">
                             <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" height="272" width="224">
                            </div>
                            <span class="person-title">Anna Wiedebaum</span>
                            <span class="person-desc">Hallintopäällikkö</span>
                            <span class="person-info editor">
                              <p style="text-align: center;">Puhelin: 040 169 4454</p>
                              <p style="text-align: center;">anna.wiedebaum@gfmoney.fi</p>
                            </span>
                          </div>
                          <div class="person">
                            <div class="person-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" height="272" width="224">
                            </div>
                              <span class="person-title">Mia Lehtonen</span>
                              <span class="person-desc">Taloushallinnon asiantuntija</span>
                              <span class="person-info editor">
                                <p style="text-align: center;">Puhelin: 044 509 1828</p>
                                <p style="text-align: center;">mia.lehtonen@gfmoney.fi</p>
                              </span>
                          </div>
                          <div class="person">
                            <div class="person-img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" height="272" width="224">
                            </div>
                             <span class="person-title">Kari Keskitalo</span>
                             <span class="person-desc">Perustaja ja pääosakas</span>
                            <span class="person-info editor">
                              <p style="text-align: center;">Puhelin: 040 826 2193</p>
                              <p style="text-align: center;">kari.keskitalo@gfmoney.fi</p>
                            </span>
                          </div>
                          <div class="person">
                            <div class="person-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" height="272" width="224">
                            </div>
                              <span class="person-title">Salla Heikkonen</span>
                              <span class="person-desc">Taloushallinnon asiantuntija</span>
                              <span class="person-info editor">
                                <p>Puhelin: 040 827 1050<br>salla.heikkonen@gfmoney.fi</p>
                              </span>
                          </div>
                        </div><!-- staff-wrap -->
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
