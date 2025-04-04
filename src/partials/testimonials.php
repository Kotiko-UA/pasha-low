<?php
$testimonials_cards_arr = get_field('testimonials_cards_arr');
?>
<section class="section testi-section">
  <div class="container testi-container">
    <div class="testi-title-top-wrap">
      <div class="testi-title-wrap">
        <h3 id="testimonials" class="section-name">Testimonials</h3>
        <h2 class="section-title"><?php echo get_field('testimonials_title'); ?></h2>
        <p class="testimonials-test"><?php echo get_field('testimonials_text'); ?></p>
      </div>

      <div class="testi-swiper-button-wrapper top-button">
        <div class="testi-swiper-button-prev t-btn-prev"> <?php get_template_part('img/icons/arrow-l') ?></div>
        <div class="testi-swiper-button-next t-btn-next"> <?php get_template_part('img/icons/arrow-l') ?></div>
      </div>
    </div>
    <div class="testi-swiper-wrapper">
      <div class="swiper testimonials-swiper">
        <ul class="swiper-wrapper">
          <?php foreach ($testimonials_cards_arr as $card): ?>
            <?php
            $testimonials_cards_img = $card['image'];
            $testimonials_cards_title = $card['title'];
            $testimonials_cards_text = $card['text'];
            ?>
            <li class="swiper-slide">
              <div class="testi-swiper-card">
                <div class="testi-item-img-wrap">
                  <?php echo wp_get_attachment_image($testimonials_cards_img, 'full'); ?>
                </div>
                <div class="testi-item-text-wrap">
                  <p class="testi-swiper-card-text"><?php echo $testimonials_cards_text; ?></p>
                  <div class="testi-swiper-title-wrap">
                    <h4 class="testi-swiper-card-title"><?php echo $testimonials_cards_title; ?></h4>
                  </div>
                </div>


              </div>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>
    <div class="testi-swiper-button-wrapper bot-button">
      <div class="testi-swiper-button-prev t-btn-prev"> <?php get_template_part('img/icons/arrow-l') ?></div>
      <div class="testi-swiper-button-next t-btn-next"> <?php get_template_part('img/icons/arrow-l') ?></div>
    </div>
  </div>
</section>