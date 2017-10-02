<?php /* Template Name: Yhteystiedot Page */ get_header(); ?>

<main class="main contacts-template">
        <section class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" class="content-img-big" alt="">
            <!--            <img src="-->
            <!--/img/inner-bg-2.png" class="content-img-small desktop" alt="">-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                        <span class="content-title">Yhteystiedot</span>
                        <div class="content-text editor">
                            <p>GF Money Oy</p>
                            <p>Mikonkatu 2 D, 2. krs., 00100 Helsinki</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-lg-offset-5 col-md-offset-5">
                        <div class="content-form">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/contacts-fig.png" alt="" class="content-form-fig">
                            <p>
                            </p>
                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_3">
                                <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_3" id="gform_3" action="http://gfmoney.fi/yhteystiedot/">
                                    <div class="gform_heading">
                                        <h3 class="gform_title">Jätä yhteystietosi, niin olemme yhteydessä</h3>
                                    </div>
                                    <div class="gform_body">
                                        <ul id="gform_fields_3" class="gform_fields top_label form_sublabel_below description_below">
                                            <li id="field_3_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                                <label class="gfield_label" for="input_3_1">Nimi*<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_text">
                                                    <input name="input_1" id="input_3_1" type="text" value="" class="medium" tabindex="1" placeholder="Nimi *" aria-required="true" aria-invalid="false">
                                                </div>
                                            </li>
                                            <li id="field_3_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                                <label class="gfield_label" for="input_3_2">Puhelinnumero*<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_text">
                                                    <input name="input_2" id="input_3_2" type="text" value="" class="medium" tabindex="2" placeholder="Puhelinnumero *" aria-required="true" aria-invalid="false">
                                                </div>
                                            </li>
                                            <li id="field_3_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                                <label class="gfield_label" for="input_3_3">Sähköposti*<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_email">
                                                    <input name="input_3" id="input_3_3" type="text" value="" class="medium" tabindex="3" placeholder="Sähköposti *" aria-required="true" aria-invalid="false">
                                                </div>
                                            </li>
                                            <li id="field_3_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                                <label class="gfield_label" for="input_3_4">Yritys*</label>
                                                <div class="ginput_container ginput_container_text">
                                                    <input name="input_4" id="input_3_4" type="text" value="" class="medium" tabindex="4" placeholder="Yritys" aria-invalid="false">
                                                </div>
                                            </li>
                                            <li id="field_3_5" class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_">
                                                <label class="gfield_label" for="input_3_5">Email</label>
                                                <div class="ginput_container">
                                                    <input name="input_5" id="input_3_5" type="text" value="">
                                                </div>
                                                <div class="gfield_description">This field is for validation purposes and should be left unchanged.</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gform_footer top_label">
                                        <input type="submit" id="gform_submit_button_3" class="gform_button button" value="Lähetä »" tabindex="5" onclick="if(window[&quot;gf_submitting_3&quot;]){return false;}  window[&quot;gf_submitting_3&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_3&quot;]){return false;} window[&quot;gf_submitting_3&quot;]=true;  jQuery(&quot;#gform_3&quot;).trigger(&quot;submit&quot;,[true]); }">
                                        <input type="hidden" name="gform_ajax" value="form_id=3&amp;title=1&amp;description=&amp;tabindex=1">
                                        <input type="hidden" class="gform_hidden" name="is_submit_3" value="1">
                                        <input type="hidden" class="gform_hidden" name="gform_submit" value="3">
                                        <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                        <input type="hidden" class="gform_hidden" name="state_3" value="WyJbXSIsIjM4ZTIxOWE1MGQyOWFhNDE2ODNhMjNhMDBhMDU0ZjQwIl0=">
                                        <input type="hidden" class="gform_hidden" name="gform_target_page_number_3" id="gform_target_page_number_3" value="0">
                                        <input type="hidden" class="gform_hidden" name="gform_source_page_number_3" id="gform_source_page_number_3" value="1">
                                        <input type="hidden" name="gform_field_values" value="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
