<section class="section know-section">
  <div class="container know-container">
    <div class="know-text-content-wrap">
      <h3 id="services" class="section-name">Get to know us</h3>
      <h2 class="section-title"><?php echo get_field('know_us_title'); ?></h2>
      <div class="know-img-wrap">
        <?php echo wp_get_attachment_image(get_field('get_know_img'), 'full'); ?>
      </div>
      <h4 class="know-subtitle">oh, and we <span>love it</span>!</h4>
      <div class="know-text-wrap">
        <p class="know-text"><?php echo get_field('know_us_text'); ?></p>
        <button class="know-more-button" type="button">Read more<span><?php get_template_part('img/icons/shevron-down') ?></span></button>
        <button class="know-less-button" type="button">Read less<span><?php get_template_part('img/icons/shevron-down') ?></span></button>
      </div>
    </div>
    <div class="know-img-wrap-desc">
      <?php echo wp_get_attachment_image(get_field('get_know_img'), 'full'); ?>
      <h4 class="know-subtitle-desk">oh, and we <span>love it</span>!</h4>
    </div>
  </div>
</section>