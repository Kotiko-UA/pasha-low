<section id="contact-us" class="section subscribe-section">
  <div class="container subscribe-container">
    <div class="subscribe-logo"> <?php get_template_part('img/icons/logo-hearts') ?></div>
    <h2 class="section-title"><?php echo get_field('subscribe_title'); ?></h2>
    <p class="subscribe-test"><?php echo get_field('subscribe_text'); ?></p>
    <form id="sub-form" class="sub-form">
      <div class="sub-input-wrap">
        <input class="sub-form-input" type="email" name="email" placeholder="Enter your E-mail">
        </input>
        <?php get_template_part('img/icons/letter') ?>
      </div>
      <button type="submit" class="sub-button">Subscribe Now<span><?php get_template_part('img/icons/shevron-down') ?></span></button>
    </form>
  </div>
</section>