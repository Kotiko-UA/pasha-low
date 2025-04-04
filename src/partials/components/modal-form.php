<?php
$team_arr = get_field('team_arr');
$count = 1;
?>
<?php foreach ($team_arr as $card): ?>
    <?php
    $cards_name = $card['name'];
    $cards_position = $card['position'];
    $cards_img = $card['img'];
    $cards_hometown = $card['hometown'];
    $cards_political = $card['political'];
    $cards_law_degree = $card['law_degree'];
    $cards_about = $card['about'];
    $fact_title_1 = $card['1_fact_title'];
    $fact_text_1 = $card['1_fact_text'];
    $fact_title_2 = $card['2_fact_title'];
    $fact_text_2 = $card['2_fact_text'];
    $fact_title_3 = $card['3_fact_title'];
    $fact_text_3 = $card['3_fact_text'];
    $fact_title_4 = $card['4_fact_title'];
    $fact_text_4 = $card['4_fact_text'];
    $fact_title_5 = $card['5_fact_title'];
    $fact_text_5 = $card['5_fact_text'];
    $fact_title_6 = $card['6_fact_title'];
    $fact_text_6 = $card['6_fact_text'];

    ?>
    <div class="modal micromodal-slide" id="modal-<?php echo $count; ?>" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal-container-wrap">
                <div class="modal__container modal-form-container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                    <div class="modal-form-close modal-close " aria-label="Close modal" data-micromodal-close> <?php get_template_part("img/icons/cross") ?></div>
                    <div class="modal-card-hero-wrap">
                        <div>
                            <div class="modal-img-wrap">
                                <?php echo wp_get_attachment_image($cards_img, 'full'); ?>
                            </div>
                            <?php if ($cards_hometown) : ?>
                                <p class="modal-hometown">Hometown: </br><span><?php echo $cards_hometown; ?></span></p>
                            <?php endif; ?>
                            <?php if ($cards_political) : ?>
                                <p class="modal-politican">Political Science and Government - </br><span><?php echo $cards_political; ?></span></p>
                            <?php endif; ?>
                            <?php if ($cards_law_degree) : ?>
                                <p class="modal-law_degree">law degree - </br><span><?php echo $cards_law_degree; ?></span></p>
                            <?php endif; ?>
                        </div>
                        <div class="modal-text-wrap">
                            <h3 class="section-name"><?php echo $cards_position; ?></h3>
                            <h2 class="section-title"><?php echo $cards_name; ?></h2>
                            <p class="modal-about"><?php echo $cards_about; ?></p>
                        </div>
                    </div>
                    <div class="modal-card-footer-wrap">
                        <div class="modal-footer-card-wrap">
                            <div class="modal-footer-img"><?php get_template_part('img/icons/modal-icon-1') ?></div>
                            <div class="modal-footer-text-wrap">
                                <p class="modal-footer-card-title"><?php echo $fact_title_1; ?></p>
                                <p class="modal-footer-card-text"><?php echo $fact_text_1; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer-card-wrap">
                            <div class="modal-footer-img"><?php get_template_part('img/icons/modal-icon-2') ?></div>
                            <div>
                                <p class="modal-footer-card-title"><?php echo $fact_title_2; ?></p>
                                <p class="modal-footer-card-text"><?php echo $fact_text_2; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer-card-wrap">
                            <div class="modal-footer-img"><?php get_template_part('img/icons/modal-icon-3') ?></div>
                            <div>
                                <p class="modal-footer-card-title"><?php echo $fact_title_3; ?></p>
                                <p class="modal-footer-card-text"><?php echo $fact_text_3; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer-card-wrap">
                            <div class="modal-footer-img"><?php get_template_part('img/icons/modal-icon-4') ?></div>
                            <div>
                                <p class="modal-footer-card-title"><?php echo $fact_title_4; ?></p>
                                <p class="modal-footer-card-text"><?php echo $fact_text_4; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer-card-wrap">
                            <div class="modal-footer-img"><?php get_template_part('img/icons/modal-icon-5') ?></div>
                            <div>
                                <p class="modal-footer-card-title"><?php echo $fact_title_5; ?></p>
                                <p class="modal-footer-card-text"><?php echo $fact_text_5; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer-card-wrap">
                            <div class="modal-footer-img"><?php get_template_part('img/icons/modal-icon-6') ?></div>
                            <div>
                                <p class="modal-footer-card-title"><?php echo $fact_title_6; ?></p>
                                <p class="modal-footer-card-text"><?php echo $fact_text_6; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php $count++; ?>
<?php endforeach; ?>