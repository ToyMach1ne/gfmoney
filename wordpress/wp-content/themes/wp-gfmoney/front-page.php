<?php /* Template Name: Home Page */ get_header(); ?>

<main class="main home-template">
        <section class="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" class="banner-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="banner-wrap">
                        <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                            <span class="banner-title"><?php the_field('fp_title'); ?></span>
                            <span class="banner-desc"><p><?php the_field('fp_undertitle'); ?></p></span>
                        </div>
                        <div class="banner-links">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="figure yellow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/yellow-fig.png" alt="" class="figure-img desktop">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/yellow-fig-mobile.png" alt="" class="figure-img mobile">
                                    <span class="figure-title editor"><p><?php the_field('yellow_block_title'); ?></p></span>
                                    <span class="figure-desc"><p><?php the_field('yellow_block_undertitle'); ?></p></span>
                                    <a href="<?php echo home_url(); ?>/lainahakemus" class="figure-link"><?php the_field('yellow_block_link'); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="figure white">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/white-fig.png" alt="" class="figure-img desktop">
                                    <span class="figure-title editor"><p><?php the_field('grey_block_title'); ?></p></span>
                                    <span class="figure-desc"><p><?php the_field('grey_block_undertitle'); ?></p></span>
                                    <a href="#" target="_blank" class="figure-link"><?php the_field('grey_block_link'); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="figure grey">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/grey-fig.png" alt="" class="figure-img desktop">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/grey-fig-mobile.png" alt="" class="figure-img mobile">
                                    <span class="figure-title editor"><p><?php the_field('black_block_title'); ?></p></span>
                                    <span class="figure-desc"><p><?php the_field('black_block_undertitle'); ?></p></span>
                                    <a href="#" target="_blank" class="figure-link"><?php the_field('black_block_link'); ?></a>
                                </div>
                            </div>
                        </div><!-- banner-links -->
                    </div><!-- banner-wrap -->
                </div>
            </div>
        </section><!-- banner -->

 <section class="redirect">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <a href="#" target="_blank" class="redirect-link"><p><?php the_field('grey_bg_text'); ?></p></a>
                </div>
            </div>
        </div>
    </section>
    <section class="steps animation-element">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <span class="steps-title"><?php the_field('big_title_second_row'); ?></span>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-12">
                        <div class="steps-wrap">
                            <div class="step-wrap">
                                <div class="step four">
                                    <span class="step-title">Menesty</span>
                                    <span class="step-desc"><p>Kunnollinen ja reilu rahoitus takaa menestyksesi!</p></span>
                                </div>
                            </div>
                            <div class="step-wrap">
                                <div class="step three">
                                    <span class="step-title">Rahat tilille</span>
                                    <span class="step-desc"><p>Oletko kyllästynyt odotteluun? Meillä ei tarvitse odotella.</p></span>
                                </div>
                            </div>
                            <div class="step-wrap">
                                <div class="step two">
                                    <span class="step-title">Täytä lainahakemus</span>
                                    <span class="step-desc"><p>Yksinkertainen lainahakemus tekee elämän vaivattomaksi!</p></span>
                                </div>
                            </div>
                            <div class="step-wrap">
                                <div class="step one">
                                    <span class="step-title">Suunnittele</span>
                                    <span class="step-desc"><p>Mikä on sinun rahoitustarpeesi? Me autamme unelmissa ja tarpeissa.</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="steps-table">
                            <span class="steps-table-title">100 M €+</span>
                            <span class="steps-table-desc">ANNETTUJA LAINOJA</span>
                            <span class="steps-table-separator"><span class="line"></span></span>
                            <span class="steps-table-title">1000+</span>
                            <span class="steps-table-desc">SIJOITTAJAA</span>
                            <span class="steps-table-separator"><span class="line"></span></span>
                            <span class="steps-table-title">50 000+</span>
                            <span class="steps-table-desc">ASIAKASTA</span>
                        </div>
                    </div>
                    <div class="arrow-man desktop">
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1200px" height="1200px" viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
                        <defs>
                          <clippath id="clipPolygon">
                            <polygon id="mask" x="0" y="10" points="0 1000,490 1000,490 840,0 560">
                            </polygon>
                          </clippath>
                        </defs>
                        <g id="ladder"></g>
                        <g id="_x30_1"></g>
                        <g id="_x30_2"></g>
                        <g id="_x30_3"></g>
                            <g clip-path="url(&quot;#clipPolygon&quot;)" id="_x30_4">
                              <g>
                                <g>
                                  <g>
                                    <polygon style="fill:#FFED00;" points="784.665,507.951 650.493,429.979 796.346,345.771 930.517,423.743        "></polygon>
                                  </g>
                                </g>
                                <g>
                                  <polygon style="fill:#E3CA2F;" points="784.823,563.83 650.651,485.858 650.493,429.979 784.665,507.951       "></polygon>
                                </g>
                                <g>
                                  <g>
                                    <polygon style="fill:#FFED00;" points="638.971,648.037 504.8,570.066 650.651,485.858 784.823,563.83         "></polygon>
                                  </g>
                                </g>
                                <g>
                                  <polygon style="fill:#E3CA2F;" points="639.129,703.889 504.958,625.917 504.8,570.066 638.971,648.037      "></polygon>
                                </g>
                                <g>
                                  <polygon style="fill:#E3CA2F;" points="493.435,843.962 359.265,765.99 359.105,710.125 493.276,788.096       "></polygon>
                                </g>
                                <g>
                                  <g>
                                    <polygon style="fill:#FFED00;" points="493.276,788.096 359.105,710.125 504.958,625.917 639.129,703.889        "></polygon>
                                  </g>
                                </g>
                                <g>
                                  <polygon style="fill:#E3CA2F;" points="347.748,986.353 213.577,908.382 213.412,850.198 347.583,928.169      "></polygon>
                                </g>
                                <g>
                                  <polygon style="fill:#C1A417;" points="943.912,377.944 944.064,431.463 798.212,515.671 798.37,571.55 652.519,655.758
                                    652.677,711.609 506.824,795.816 506.982,851.682 361.13,935.89 361.251,978.558 347.748,986.353 347.583,928.169
                                    493.435,843.962 493.276,788.096 639.129,703.889 638.971,648.037 784.823,563.83 784.665,507.951 930.517,423.743
                                    930.408,385.74      "></polygon>
                                </g>
                                <g>
                                  <g>
                                    <polygon style="fill:#FFED00;" points="347.583,928.169 213.412,850.198 359.265,765.99 493.435,843.962         "></polygon>
                                  </g>
                                </g>
                                <polygon style="fill:#C1A417;" points="876.517,213.647 864.098,220.865 974.235,411.609 986.588,404.431    "></polygon>
                                <polygon style="fill:#E3CA2F;" points="974.235,411.609 864.098,220.865 753.238,284.017 796.242,308.844 796.346,345.771
                                  930.517,423.743 930.411,386.307     "></polygon>
                                <g>
                                  <path d="M336.688,861.637c-2.443-0.971-4.811-2.118-7.104-3.441c-2.291-1.324-4.271-2.687-5.94-4.09
                                    c-1.67-1.402-2.997-2.867-3.986-4.395c-0.988-1.526-1.533-3.021-1.638-4.487c-0.104-1.465,0.359-2.938,1.393-4.421
                                    s2.639-2.854,4.818-4.111c2.197-1.27,4.58-2.201,7.147-2.798c2.567-0.596,5.124-0.866,7.671-0.812
                                    c2.546,0.056,5.141,0.368,7.785,0.939c2.646,0.57,5.182,1.337,7.611,2.301s4.79,2.107,7.082,3.43
                                    c2.293,1.324,4.279,2.691,5.962,4.102s3.024,2.883,4.023,4.416c1,1.533,1.557,3.04,1.671,4.521
                                    c0.113,1.48-0.343,2.963-1.37,4.448c-1.03,1.484-2.642,2.861-4.839,4.13c-2.18,1.259-4.557,2.185-7.127,2.778
                                    c-2.572,0.594-5.138,0.854-7.693,0.784s-5.162-0.395-7.818-0.973C341.682,863.383,339.132,862.608,336.688,861.637z
                                     M340.825,851.5c6.759,3.902,11.647,4.982,14.666,3.238c3.053-1.762,1.201-4.595-5.558-8.496
                                    c-6.679-3.856-11.546-4.903-14.599-3.141C332.316,844.845,334.146,847.645,340.825,851.5z"></path>
                                  <path d="M354.608,830.249l-8.994-5.192l17.303-9.99l41.396,23.9l-11.315,6.533l-32.402-18.708L354.608,830.249z"></path>
                                </g>
                                <g>
                                  <path d="M474.732,724.27c-2.443-0.972-4.81-2.119-7.103-3.442c-2.292-1.323-4.272-2.686-5.941-4.089
                                    c-1.67-1.402-2.997-2.867-3.986-4.395c-0.988-1.527-1.533-3.022-1.638-4.488c-0.104-1.465,0.36-2.938,1.393-4.421
                                    c1.033-1.481,2.639-2.853,4.819-4.111c2.196-1.269,4.58-2.2,7.147-2.797c2.566-0.597,5.123-0.866,7.67-0.812
                                    c2.547,0.056,5.141,0.367,7.785,0.938c2.646,0.571,5.182,1.338,7.611,2.301c2.431,0.964,4.791,2.107,7.082,3.431
                                    c2.293,1.324,4.28,2.69,5.963,4.101c1.683,1.411,3.023,2.883,4.022,4.416c1,1.534,1.558,3.041,1.671,4.521
                                    s-0.343,2.964-1.369,4.448c-1.03,1.484-2.643,2.861-4.839,4.131c-2.181,1.258-4.558,2.184-7.128,2.778
                                    c-2.572,0.593-5.138,0.854-7.693,0.784c-2.556-0.071-5.162-0.395-7.818-0.973C479.726,726.015,477.176,725.24,474.732,724.27z
                                     M478.869,714.133c6.759,3.902,11.647,4.981,14.667,3.238c3.053-1.763,1.2-4.596-5.559-8.497
                                    c-6.679-3.856-11.545-4.903-14.598-3.14C470.36,707.477,472.19,710.277,478.869,714.133z"></path>
                                  <path d="M487.599,691.281c-0.021-0.168-0.022-0.402-0.005-0.705c0.017-0.303,0.165-0.91,0.442-1.824
                                    c0.278-0.914,0.676-1.813,1.193-2.695c0.517-0.884,1.382-1.912,2.597-3.086s2.668-2.248,4.359-3.225
                                    c4.454-2.572,9.05-3.926,13.784-4.06c4.733-0.134,8.942,0.862,12.625,2.988c1.331,0.769,2.449,1.601,3.358,2.5
                                    c0.907,0.898,1.58,1.667,2.02,2.306c0.441,0.639,0.757,1.506,0.95,2.602c0.192,1.098,0.291,1.854,0.294,2.27
                                    c0.004,0.416-0.023,1.228-0.082,2.436c0.008,0.064,0.009,0.113,0.004,0.15c-0.005,0.036-0.007,0.084-0.01,0.141
                                    c-0.001,0.059,0,0.107,0.005,0.15l-0.311,6.412l15.036-8.682l10.195,5.887l-28.314,16.348l-9.703-4.107l0.262-13.326
                                    c0.062-2.249-0.135-3.886-0.59-4.91c-0.454-1.024-1.308-1.898-2.56-2.621c-1.192-0.688-2.456-0.998-3.789-0.928
                                    c-1.334,0.07-2.661,0.485-3.98,1.247c-1.354,0.781-2.421,1.85-3.203,3.204c-0.782,1.355-1.076,2.802-0.884,4.338L487.599,691.281
                                    z"></path>
                                </g>
                                <g>
                                  <path d="M619.035,586.414c-2.443-0.972-4.811-2.119-7.104-3.442c-2.291-1.323-4.271-2.686-5.941-4.089
                                    c-1.67-1.403-2.996-2.867-3.986-4.395c-0.988-1.527-1.533-3.022-1.637-4.488c-0.105-1.465,0.359-2.939,1.393-4.421
                                    c1.033-1.482,2.639-2.853,4.818-4.111c2.197-1.269,4.58-2.201,7.148-2.797c2.566-0.597,5.123-0.867,7.67-0.812
                                    c2.547,0.056,5.141,0.368,7.785,0.938s5.182,1.338,7.611,2.301c2.43,0.964,4.791,2.107,7.082,3.431
                                    c2.293,1.324,4.279,2.69,5.963,4.101c1.682,1.411,3.023,2.883,4.021,4.416c1,1.534,1.559,3.041,1.672,4.521
                                    s-0.344,2.964-1.369,4.448c-1.031,1.485-2.643,2.862-4.84,4.13c-2.18,1.259-4.557,2.185-7.127,2.779
                                    c-2.572,0.593-5.139,0.854-7.693,0.784c-2.557-0.071-5.162-0.395-7.818-0.972C624.027,588.159,621.479,587.385,619.035,586.414z
                                     M623.172,576.277c6.758,3.902,11.646,4.981,14.666,3.238c3.053-1.763,1.201-4.595-5.559-8.497
                                    c-6.678-3.856-11.545-4.903-14.598-3.14C614.662,569.622,616.492,572.421,623.172,576.277z"></path>
                                  <path d="M662.268,570.958l-3.162-7.538c2.588,0.264,5.111,0.119,7.57-0.434s4.391-1.234,5.795-2.045
                                    c1.219-0.703,1.91-1.524,2.074-2.464c0.166-0.94-0.334-1.746-1.5-2.419c-1.186-0.685-2.457-0.994-3.814-0.928
                                    c-1.359,0.065-2.639,0.445-3.84,1.138l-3.629,2.095l-8.994-5.193l3.629-2.095c0.963-0.557,1.48-1.138,1.547-1.744
                                    c0.068-0.605-0.408-1.203-1.43-1.792c-1.02-0.589-2.109-0.837-3.27-0.746c-1.16,0.092-2.291,0.456-3.391,1.09
                                    c-2.961,1.709-4.709,4-5.25,6.872l-12.607-2.768c0.313-1.754,1.072-3.453,2.285-5.097c1.213-1.644,3.406-3.384,6.588-5.22
                                    c1.809-1.045,3.82-1.902,6.033-2.573c2.215-0.67,4.441-1.106,6.686-1.311c2.244-0.203,4.48-0.11,6.711,0.278
                                    c2.232,0.39,4.225,1.09,5.979,2.103c2.252,1.3,3.656,2.576,4.209,3.827c0.555,1.251,0.508,2.54-0.143,3.866
                                    c2.266-0.606,4.762-0.715,7.488-0.327s5.207,1.229,7.447,2.521c2.16,1.247,3.674,2.613,4.543,4.099
                                    c0.871,1.486,1.111,2.947,0.729,4.381c-0.385,1.435-1.182,2.821-2.391,4.16c-1.211,1.338-2.779,2.564-4.707,3.678
                                    c-3.502,2.021-7.164,3.393-10.99,4.114C668.639,571.209,665.24,571.366,662.268,570.958z"></path>
                                </g>
                                <g>
                                  <path d="M766.313,443.599c-2.443-0.971-4.811-2.118-7.104-3.442c-2.291-1.323-4.271-2.686-5.941-4.089
                                    c-1.67-1.402-2.996-2.867-3.986-4.394c-0.988-1.527-1.533-3.022-1.637-4.488c-0.105-1.465,0.359-2.939,1.393-4.421
                                    c1.033-1.482,2.639-2.853,4.818-4.112c2.197-1.269,4.58-2.201,7.148-2.797c2.566-0.596,5.123-0.866,7.67-0.811
                                    s5.141,0.368,7.785,0.938s5.182,1.337,7.611,2.301s4.791,2.107,7.082,3.43c2.293,1.324,4.279,2.69,5.963,4.101
                                    c1.682,1.41,3.023,2.882,4.021,4.416c1,1.534,1.559,3.041,1.672,4.521c0.113,1.48-0.344,2.963-1.369,4.449
                                    c-1.031,1.484-2.643,2.861-4.84,4.13c-2.18,1.259-4.557,2.185-7.127,2.778c-2.572,0.594-5.139,0.854-7.693,0.784
                                    c-2.557-0.071-5.162-0.395-7.818-0.972C771.305,445.345,768.756,444.57,766.313,443.599z M770.449,433.462
                                    c6.758,3.902,11.646,4.981,14.666,3.238c3.053-1.763,1.201-4.595-5.559-8.497c-6.678-3.856-11.545-4.903-14.598-3.14
                                    C761.939,426.807,763.77,429.606,770.449,433.462z"></path>
                                  <path d="M806.924,427.831l-9.873-5.7l-9.178-22.408l13.346-7.705l23.701,13.684l4.059-2.344l10.166,5.869l-4.059,2.344
                                    l7.529,4.347l-11.52,6.65l-7.529-4.347L806.924,427.831z M807.199,416.271l6.748-3.896l-11.104-6.411L807.199,416.271z"></path>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                         <div class="man desktop">
                         <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.4128 249.37334" height="249.37334" width="116.4128" xml:space="preserve" id="svg2" version="1.1">
                             <metadata id="metadata8">
                                 <rdf:rdf>
                                     <cc:work rdf:about="">
                                        <dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                                     </cc:work>
                                 </rdf:rdf>
                             </metadata>
                             <defs id="defs6">
                                 <clippath id="clipPath18" clipPathUnits="userSpaceOnUse">
                                    <path id="path16" d="M 0,187.03 H 87.31 V 0 H 0 Z"></path>
                                 </clippath>
                             </defs>
                             <g transform="matrix(1.3333333,0,0,-1.3333333,0,249.37333)" id="g10">
                                 <g id="g12">
                                     <g clip-path="url(#clipPath18)" id="g14">
                                         <g transform="translate(37.7969,170.376)" id="g20">
                                            <path id="path22" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,-1.081 0.736,-1.954 1.646,-1.954 0.911,0 1.648,0.873 1.648,1.954 0,1.078 -0.737,1.952 -1.648,1.952 C 0.736,1.952 0,1.078 0,0"></path>
                                         </g>
                                         <g transform="translate(32.959,161.0234)" id="g24">
                                         <path id="path26" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 0.494,-7.119 -6.867,-4.542 l 1.635,-4.011 8.616,1.647 0.507,5.33"></path>
                                         </g>
                                            <path id="path28" style="fill:#ffed00;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 31.79,42.199 H 87.31 V 78.895 H 31.79 Z"></path>
                                         <g transform="translate(65.9072,78.8955)" id="g30">
                                            <path id="path32" style="fill:none;stroke:#c1a417;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" d="M 0,0 V 0 C 0,2.729 -2.341,4.943 -5.229,4.943 H -5.726 C -8.612,4.943 -10.954,2.729 -10.954,0"></path>
                                         </g>
                                         <g transform="translate(43.8428,67.2842)" id="g34">
                                            <path id="path36" style="fill:none;stroke:#c1a417;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" d="M 0,0 H 43.467"></path>
                                         </g>
                                         <g transform="translate(58.4277,63.8145)" id="g38">
                                            <path id="path40" style="fill:#c1a417;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 -2.004,3.47 0,6.939 H 4.006 L 6.01,3.47 4.006,0 Z"></path>
                                         </g>
                                         <g transform="translate(49.5664,14.3389)" id="g42">
                                            <path id="path44" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 -4.424,19.179 -5.41,27.81 -1.219,10.655 0.168,39.682 0.572,47.45 0.065,1.236 0,4.835 0,4.835 l -16.006,-2.902 c 0,0 1.784,-42.718 2.748,-50.799 0.977,-8.179 4.883,-26.38 4.883,-26.38 -9.18,-2.119 -7.392,-7.287 -7.392,-7.287 l 20.607,0.128 z"></path>
                                         </g>
                                         <g transform="translate(28.1523,64.5996)" id="g46">
                                            <path id="path48" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 12.938,26.933 -29.07,1.723 c 0,0 -0.595,-32.99 -1.906,-48.283 -0.522,-6.079 2.437,-30.698 3.161,-36.573 -10.368,-0.118 -13.275,-8.4 -13.275,-8.4 h 24.041 l 0.15,7.129 c 0,0 -1.398,17.828 -0.471,38.078 C -4.215,-14.648 0,0 0,0"></path>
                                         </g>
                                         <g transform="translate(32.9893,158.3818)" id="g50">
                                            <path id="path52" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.546,-1.224 -2.009,-2.344 -2.216,-2.364 -1.501,-0.152 -2.445,-0.296 -3.396,-0.071 -3.915,2.222 -17.525,15.861 -17.643,16.924 -0.094,0.843 16.262,4.518 16.262,4.518 l -0.118,1.539 c 0.128,-0.044 0.368,-0.126 0.835,-0.286 1.001,-0.343 3.046,-0.759 4.813,-0.725 -0.326,-0.53 -0.677,-1.109 -1.037,-1.714 l -3.307,-1.685 1.095,-2.19 0.095,0.154 C -6.141,11.264 -7.314,8.608 -6.897,7.773 -5.884,5.747 -0.03,2.642 -0.03,2.642 -0.03,2.642 0.269,0.606 0,0 m 30.49,-71.721 h 1.458 c 0,0 -0.785,26.795 -1.742,34.554 -1.857,15.056 -4.792,24.92 -5.98,26.948 -1.284,2.185 -13.422,7.23 -13.422,7.23 v 1.52 h 0.017 V 1.065 L 7.245,2.472 c 0,0 -0.623,15.735 -1.551,17.043 -3.088,4.342 -5.237,3.06 -5.237,3.06 L 0.454,22.57 c -1.507,0.934 -3.993,1.734 -4.934,2.097 -2.316,0.894 -3.025,0.992 -3.025,0.992 l -16.637,-4.581 c 0,0 -7.318,-2.28 -7.593,-5.124 -0.637,-6.558 14.598,-22.719 19.879,-28.104 -0.175,-0.576 -0.353,-1.168 -0.538,-1.79 -1.572,-5.304 -3.511,-12.321 -5.692,-21.198 -3.015,-12.281 -6.952,-31.712 -6.952,-31.712 h 41.801 c 0,0 0.601,18.886 3.056,34.914 0.602,-2.306 1.143,-4.864 1.561,-7.765 1.032,-7.153 1.882,-32.02 1.882,-32.02 h 1.056 c -0.074,-0.396 -0.111,-0.809 -0.077,-1.24 l 0.031,-0.387 c 0.174,-2.161 1.741,-3.8 3.5,-3.658 1.757,0.14 3.043,2.007 2.87,4.17 l -0.033,0.388 c -0.02,0.251 -0.063,0.493 -0.119,0.727"></path>
                                         </g>
                                         <g transform="translate(33.0859,180.1221)" id="g54">
                                            <path id="path56" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0,0 -1.627,7.611 0,6.855 4.711,4.667 6.944,5.657 9.581,5.294 12.305,4.919 13.038,5.184 15.225,3.919 20.558,0.834 20.556,-1.53 20.558,-6.5 c 0.004,-9.425 -4.81,-9.771 -9.451,-14.089 l -2.803,-3.16"></path>
                                         </g>
                                     </g>
                                 </g>
                             </g>
                          </svg>
                         </div><!-- man desktop -->
                        </div>
                      </div>
                     </section><!-- steps animation-element -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xs-12">
                        <span class="content-title">GF Money Oy — Rahoitamme ennakkoluulottomasti</span>
                        <div class="content-text editor">
                            <p>GF Money Oy on suomalainen varjopankki, joka tarjoaa vaivattomia sijoitusmuotoja sekä rahaa menestykseen!</p>
                            <p>Toiminta-ajatuksenamme on tuoda luotettavat ja vaivattomat rahoitusratkaisut kaikkien ulottuville – oli kyseessä sitten yksityishenkilö tai yritys.</p>
                            <p>Varjopankkina GF Money pystyy toimimaan ketterästi, mukautuen aina muuttuvan maailman vaatimuksiin. &nbsp;Tämän ansiosta päätöksenteko on vauhdikasta ja rahat siirtyvät mutkattoman nopeasti.</p>
                            <p>Alkuperäinen varjopankki, GF Money Oy on toiminut jo vuodesta 2012 lähtien. GF Moneyn perusti Kari Keskitalo, joka uskoo suomalaiseen yrittämiseen ja haluaa käyttää osaamistaan sekä varojaan sen tukemiseksi.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 pull-right">
                        <div class="content-form">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content-fig.png" alt="" class="content-form-fig desktop">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/content-fig-mobile.png" alt="" class="content-form-fig mobile">
                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
                                <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1" action="http://gfmoney.fi/">
                                    <div class="gform_heading">
                                        <h3 class="gform_title">Tilaa uutiskirje</h3>
                                        <span class="gform_description">ja kuulet aina ajantasaiset varjopankkikuulumiset!</span>
                                    </div>
                                    <div class="gform_body">
                                        <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
                                            <li id="field_1_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                                <label class="gfield_label" for="input_1_1">Sähköpostiosoite<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_email">
                                                    <input name="input_1" id="input_1_1" type="text" value="" class="medium" tabindex="1" placeholder="Sähköpostiosoite *" aria-required="true" aria-invalid="false">
                                                </div>
                                            </li>
                                            <li id="field_1_2" class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_">
                                                <label class="gfield_label" for="input_1_2">Phone</label>
                                                <div class="ginput_container"><input name="input_2" id="input_1_2" type="text" value=""></div>
                                                <div class="gfield_description">This field is for validation purposes and should be left unchanged.</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gform_footer top_label">
                                        <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Tilaa uutiskirje »" tabindex="2" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }">
                                        <input type="hidden" name="gform_ajax" value="form_id=1&amp;title=1&amp;description=1&amp;tabindex=1">
                                        <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                                        <input type="hidden" class="gform_hidden" name="gform_submit" value="1">
                                        <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                        <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjM4ZTIxOWE1MGQyOWFhNDE2ODNhMjNhMDBhMDU0ZjQwIl0=">
                                        <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
                                        <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
                                        <input type="hidden" name="gform_field_values" value="">
                                    </div>
                                </form>
                            </div><!-- gf_browser_chrome gform_wrapper -->
                </div><!-- content-form -->
            </div><!-- pull-right -->
         </div>
      </div>
    </section><!-- content -->
</main>

<?php get_footer(); ?>
