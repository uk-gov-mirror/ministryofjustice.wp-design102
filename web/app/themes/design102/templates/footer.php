<?php

use Roots\Sage\Extras;

?>

<footer class="site-footer">
  <div class="l-page-container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            &copy; <?= date('Y') ?> design102
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="https://www.google.co.uk/maps/search/?api=1&query=DESIGN102&query_place_id=ChIJK_1a_dsEdkgR0s543WeZqoI">
              102 Petty France<br/>
              London SW1H 9AJ, UK
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="mailto:info@design102.gov.uk">info@design102.gov.uk</a><br/>
            <a href="tel:+4402033346222">+44 (0)20 3334 6222</a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            Follow us on:
            <a href="<?= get_field('social_profile_vimeo', 'options') ?>" target="_blank"><svg class="social-icon"><use xlink:href="<?= Extras\asset_url('images/social-icons.svg#vimeo') ?>" /></svg></a>
            <a href="<?= get_field('social_profile_twitter', 'options') ?>" target="_blank"><svg class="social-icon"><use xlink:href="<?= Extras\asset_url('images/social-icons.svg#twitter') ?>" /></svg></a>
            <a href="<?= get_field('social_profile_instagram', 'options') ?>" target="_blank"><svg class="social-icon"><use xlink:href="<?= Extras\asset_url('images/social-icons.svg#instagram') ?>" /></svg></a>
        </div>
    </div>
  </div>
</footer>
