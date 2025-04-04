<?php
$team_arr = get_field('team_arr');
$count = 1
?>
<section id="our-team" class="section ourteam-section">
  <div class="container ourteam-container">
    <div class="ourteam-title-wrap">
      <h3 id="testimonials" class="section-name">Our Expert Team</h3>
      <h2 class="section-title"><?php echo get_field('team_title'); ?></h2>
      <p class="ourteam-test"><?php echo get_field('team_text'); ?></p>
      <div class="ourteam-swiper-button-wrapper top-button">
        <div class="ourteam-swiper-button-prev o-btn-prev"> <?php get_template_part('img/icons/arrow-l') ?></div>
        <div class="ourteam-swiper-button-next o-btn-next"> <?php get_template_part('img/icons/arrow-l') ?></div>
      </div>
    </div>
    <div class="ourteam-swiper-wrapper">
      <div class="swiper our-team-swiper">
        <ul class="swiper-wrapper">
          <?php foreach ($team_arr as $card): ?>
            <?php
            $ourteam_cards_img = $card['img'];
            $ourteam_cards_name = $card['name'];
            $ourteam_cards_position = $card['position'];
            ?>
            <li class="swiper-slide" data-micromodal-trigger="modal-<?php echo $count; ?>">
              <div class="ourteaam-swiper-card">
                <?php echo wp_get_attachment_image($ourteam_cards_img, 'full'); ?>
                <h4 class="ourteam-swiper-card-title"><?php echo $ourteam_cards_name; ?></h4>
                <p class="ourteam-swiper-card-text"><?php echo $ourteam_cards_position; ?></p>
              </div>
            </li>
            <?php $count++; ?>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>
    <div class="ourteam-swiper-button-wrapper bot-button">
      <div class="ourteam-swiper-button-prev o-btn-prev"> <?php get_template_part('img/icons/arrow-l') ?></div>
      <div class="ourteam-swiper-button-next o-btn-next"> <?php get_template_part('img/icons/arrow-l') ?></div>
    </div>
  </div>
</section>