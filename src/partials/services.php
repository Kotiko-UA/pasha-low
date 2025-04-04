<?php
$services_cards_arr = get_field('services_cards_arr');
?>

<section class="section services-section">
  <div class="container">

    <div class="service-swiper-wrapper">
      <div class="service-title-wrap-1">
        <div class="service-title-wrap">
          <h3 class="section-name">Services</h3>
          <h2 class="section-title">Industries and Services</h2>
          <div class="services-swiper-button-wrapper top-button">
            <div class="services-swiper-button-prev s-btn-prev"> <?php get_template_part('img/icons/arrow-l') ?></div>
            <div class="services-swiper-button-next s-btn-next"> <?php get_template_part('img/icons/arrow-l') ?></div>
          </div>
        </div>
      </div>

      <div class="swiper services-swiper">
        <ul class="swiper-wrapper">
          <?php foreach ($services_cards_arr as $card): ?>
            <?php
            $services_cards_img = $card['card_image'];
            $services_cards_title = $card['card_title'];
            $services_cards_text = $card['card_text'];
            ?>
            <li class="swiper-slide">
              <div class="service-swiper-card">
                <div class="service-swiper-title-wrap">
                  <div class="services-card-img-wrap">
                    <div class="services-card-img">
                      <?php echo file_get_contents(get_attached_file($services_cards_img)); ?>
                    </div>
                  </div>
                  <div class="service-sw-top-title-wrap">
                    <h4 class=" service-swiper-card-title"><?php echo $services_cards_title; ?></h4>
                  </div>
                </div>
                <p class="service-swiper-card-text"><?php echo $services_cards_text; ?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="services-swiper-button-wrapper bot-button">
          <div class="services-swiper-button-prev s-btn-prev"> <?php get_template_part('img/icons/arrow-l') ?></div>
          <div class="services-swiper-button-next s-btn-next"> <?php get_template_part('img/icons/arrow-l') ?></div>
        </div>
      </div>

    </div>
  </div>
</section>