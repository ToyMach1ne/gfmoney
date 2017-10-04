<?php get_header(); ?>
  <main class="main not-found-template">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ladder.png" alt="" class="ladder-img desktop">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-lg-offset-3 col-md-offset-3">
                    <section class="wrap">
                        <div class="logo-wrap">
                            <a href="<?php echo home_url(); ?>" class="logo">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                            </a>
                        </div>
                        <span class="title"><?php the_title(); ?></span>
                        <div class="content">
                            <span class="desc">Valitettavasti etsimääsi sivua ei löytynyt</span>
                            <a href="<?php echo home_url(); ?>" class="button">Etusivu »</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>
