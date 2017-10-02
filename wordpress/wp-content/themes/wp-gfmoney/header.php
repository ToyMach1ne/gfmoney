<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Rahaa menestykseen | GF Money">
    <meta property="og:description" content="Alkuperäinen varjopankki on ollut suomalaisten menestyksen takana jo vuodesta 2012">
    <meta property="og:site_name" content="gfmoney">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Alkuperäinen varjopankki on ollut suomalaisten menestyksen takana jo vuodesta 2012">
    <meta name="twitter:title" content="Rahaa menestykseen | GF Money">
    <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/gfmoney.fi\/","name":"gfmoney","potentialAction":{"@type":"SearchAction","target":"http:\/\/gfmoney.fi\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="logo-wrap">
                <?php if ( !is_front_page() && !is_home() ){ ?>
                  <a href="<?php echo home_url(); ?>">
                <?php } ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <?php if ( !is_front_page() && !is_home() ){ ?>
                  </a>
                <?php } ?>
                </div>
            </div>
            <div class="col-xs-6 pull-right">
                <button type="button" class="drop-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-lg-9 col-md-9 col-xs-12">
                <nav class="main-menu nav">
                    <?php wpeHeadNav(); ?>
                </nav><!-- main-menu -->
            </div>
        </div>
    </div><!-- container -->
</header><!-- header -->
