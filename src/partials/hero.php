<?php
$heroText = get_field('hero_text');
$heroCTALink = get_field('hero_cta_link');
?>

<section id="hero" class="section hero-section">
  <div class="container hero-container">
    <div data-mobile-menu class="nav-wrapper">
      <div class="logo">
        <?php get_template_part('img/icons/logo') ?>
      </div>
      <nav class="nav-list">
        <div data-cross-btn class="mobile-menu-close">
          <?php get_template_part('img/icons/cross') ?>
        </div>
        <a href="#hero" class="nav-link">Home</a>
        <a href="#our-team" class="nav-link">About Us</a>
        <a href="#testimonials" class="nav-link">Testimonials</a>
        <a href="tel:1-800-991-6504" class="nav-link nav-link-phone">
          <div class="nav-link-icon-phone"><?php get_template_part('img/icons/phone') ?></div>
          <div>1-800-991-6504</div>
        </a>
      </nav>
      <div data-burger-btn class="mobile-menu-button">
        <?php get_template_part('img/icons/burger') ?>
      </div>
    </div>
    <div class="hero-text-wrap">
      <div class="hero-trust-text-wrap">
        <div class="hero-trust-svg"><?php get_template_part('img/icons/check') ?></div>
        <h2 class="hero-trust-text">Trusted Legal Counsel Since 2008</h2>
      </div>
      <h1 class="hero-title">Partners in the Business of
        <span>Healthcare</span>
        <span>Real Estate</span>
        <span>Technology</span>
      </h1>
      <p class="hero-title-text"><?php echo $heroText; ?></p>
    </div>
    <a id="services" class="hero-button" href="<?php echo $heroCTALink; ?>">Learn More<span><?php get_template_part('img/icons/shevron-down') ?></span></a>
  </div>
</section>