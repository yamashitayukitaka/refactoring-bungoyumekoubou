<section class=" l_content_middle_t u-mb100 BUNGO_YUME_STUDIO">
  <figure class="BUNGO_YUME_STUDIO__topImg">
    <img src="<?php echo esc_url(IMG_URL . '/common/support-right.webp'); ?>" alt="安心の保証制度">
  </figure>
  <div class="c-title__head">
    <h3 class="c-title--sectionLine c_title__wrap_sectionLine_t">
      BUNGO_YUME_STUDIO
    </h3>
    <div>
      <p class="c-title--orangeLine u-mb50"><span class="marker">
          豊後夢工房について</span>
      </p>
    </div>
  </div>
  <div class="concept__bungo_four_items noto-sans-jp">
    <div class="concept__bungo_item">
      <div class="concept__bungo_item_topcontent">
        <span class="font_orange">創業</span>から<br>
        変わらない<br>
        <span class="font_orange">私たち</span>の思い<br>
      </div>
      <div class="concept_bungo_item_img">
        <img src="<?php echo esc_url(IMG_URL . '/top/bungo_ladder.webp'); ?>">
      </div>
      <div class=" concept_bungo_small_groups">

        <a href="<?php echo esc_url(home_url('/concept')); ?>">
          <small>豊後夢工房の思い</small>
        </a>
        <br>
        <div class="concept_br"></div>
        <a href="<?php echo esc_url(home_url('/staff')); ?>">
          <small>ゆめ空間づくりスタッフ</small>
        </a>
        <div class="concept_br"></div>
        <a href="<?php echo esc_url(home_url('/about')); ?>">
          <small>会社概要</small>
        </a>
        <div class="concept_br"></div>
      </div>
      <div class="concept__bungo_item_manner montserrat">
        PHILOSOPHY
      </div>
      <div class="concept__bungo_item_number noto-sans-jp">
        01
      </div>
    </div>
    <div class="concept__bungo_item mt-6">
      <div class="concept__bungo_item_topcontent">
        <span class="font_orange">快適ゆめ空間</span><br>
        をつくる<span class="font_orange">3</span>つの<br>
        こだわり
      </div>
      <div class="concept_bungo_item_img">
        <img src="<?php echo esc_url(IMG_URL . '/top/bungo_sp.webp'); ?>">
      </div>
      <div class="concept_bungo_small_groups">

        <a href="<?php echo esc_url(home_url('/quality')); ?>">
          <small>品質へのこだわり</small>
        </a>
        <br>
        <div class="concept_br"></div>
        <a href="<?php echo esc_url(home_url('/cost')); ?>">
          <small>コストへのこだわり</small>
        </a>
        <br>
        <div class="concept_br"></div>
        <a href="<?php echo esc_url(home_url('/design')); ?>">
          <small>デザインへのこだわり</small>
        </a>
        <br>
        <div class="concept_br"></div>
      </div>
      <div class="concept__bungo_item_manner montserrat">
        SERVICE
      </div>
      <div class="concept__bungo_item_number noto-sans-jp">
        02
      </div>
    </div>
    <div class="concept__bungo_item">
      <div class="concept__bungo_item_topcontent">

        <span class="font_orange">豊後夢工房</span><br>
        家づくり<br>
        <span class="font_orange">サポート</span>
      </div>
      <div class="concept_bungo_item_img">
        <img src="<?php echo esc_url(IMG_URL . '/top/bungo_pen.webp'); ?>">
      </div>
      <div class="concept_bungo_small_groups">

        <a href="<?php echo esc_url(home_url('/after-support')); ?>">
          <small>安心の保証制度</small>
        </a>
        <br>
        <div class="concept_br"></div>
        <a href="<?php echo esc_url(home_url('/flow')); ?>">
          <small>いえづくりのステップ</small>
        </a>
        <br>
        <div class="concept_br"></div>
        <a href="<?php echo esc_url(home_url('/faq')); ?>">
          <small>よくあるご質問</small>
        </a>
        <br>
        <div class="concept_br"></div>
      </div>
      <div class="concept__bungo_item_manner montserrat">
        SUPPORT
      </div>
      <div class="concept__bungo_item_number noto-sans-jp">
        03
      </div>
    </div>
    <div class="concept__bungo_item mt-6">
      <div class="concept__bungo_item_topcontent">
        <span class="font_orange">住まいの</span><br>
        メンテナンス
      </div>
      <div class="concept_bungo_item_img">
        <img src="<?php echo esc_url(IMG_URL . '/top/bungo_drill.webp'); ?>">
      </div>
      <div class="concept_bungo_small_groups">

        <a href="<?php echo esc_url(home_url('/maintenance')); ?>">
          <small>アフターメンテナンス</small>
        </a>
        <br>
        <div class="concept_br"></div>
        <a href="<?php echo esc_url(home_url('/renovation')); ?>">
          <small>ゆめ再生リフォーム</small>
        </a>
        <br>

      </div>
      <div class="concept__bungo_item_drill_manner montserrat">
        maintenance
      </div>
      <div class="concept__bungo_item_number noto-sans-jp">
        04
      </div>
    </div>
  </div>
  <figure class="BUNGO_YUME_STUDIO__bottomImg">
    <img src="<?php echo esc_url(IMG_URL . '/common/support-left.webp'); ?>" alt="安心の保証制度">
  </figure>
</section>


<div class="single-swiper location__content ">
  <div class="c-title__head">
    <h3 class="c-title--sectionLine">
      LOCATION
    </h3>
    <div>
      <p class="c-title--orangeLine u-mb50"><span class="marker">
          店舗情報</span>
      </p>
    </div>
  </div>

  <?php $stores = get_field('store_informations', 'option'); ?>

  <?php
  $hasStore = false;
  if ($stores) {
    foreach ($stores as $row) {
      if (!empty($row['address']) || !empty($row['postal_code']) || !empty($row['building']) || !empty($row['phone']) || !empty($row['map']) || !empty($row['detail'])) {
        $hasStore = true;
        break;
      }
    }
  }
  ?>
  <?php if ($hasStore) : ?>
    <?php foreach ($stores as $store) :
      if (empty($store['address']) && empty($store['postal_code']) && empty($store['building']) && empty($store['phone']) && empty($store['map']) && empty($store['detail'])) {
        continue;
      }
    ?>
      <div class="p-location__content">
        <div class="p-location__inner l_content_large_t">
          <ul class="js-commonSlick p-location__list pc_tab">
            <?php if (!empty($store['detail'])) : ?>
            <?php foreach ($store['detail'] as $item) : ?>
              <?php if (!empty($item['detail_img'])) : ?>
                <li class="p_location__list__item_t ">
                  <img src="<?php echo esc_url($item['detail_img']); ?>" class="p-location__list__img">
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
          </ul>

          <div class="location_item_first_info">
            <div class="location_item_first_info_txt">
              <?php if (!empty($store['address'])) : ?><span class="location_detail_info"><?php echo esc_html($store['address']); ?></span><?php endif; ?>
              <?php if (!empty($store['postal_code'])) : ?><span class="location_detail_info"><?php echo esc_html($store['postal_code']); ?></span><?php endif; ?>
              <?php if (!empty($store['building'])) : ?><span class="location_detail_info"><?php echo esc_html($store['building']); ?></span><?php endif; ?>
              <?php if (!empty($store['phone'])) : ?><span class="location_detail_info"><?php echo esc_html($store['phone']); ?></span><?php endif; ?>
            </div>
            <?php if (!empty($store['map'])) : ?>
            <div class="location_item_first_map">
              <iframe class="location-map" src="<?php echo esc_url($store['map']); ?>" style="border:0;" allowfullscreen="" loading="lazy" width="100%" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php endif; ?>
            <div class="go_wrapper pc_tab">
              <a class="form__btn" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </div>
          </div>

          <ul class="js-commonSlick p-location__list sp">
            <?php if (!empty($store['detail'])) : ?>
            <?php foreach ($store['detail'] as $item) : ?>
              <?php if (!empty($item['detail_img'])) : ?>
                <li class="p_location__list__item_t ">
                  <img src="<?php echo esc_url($item['detail_img']); ?>" class="p-location__list__img">
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
          </ul>


        </div>

        <ul class="p-location__thumb__list l-content--large">
          <?php $count = 0; ?>
          <?php if (!empty($store['detail'])) : ?>
          <?php foreach ($store['detail'] as $item) : ?>
            <?php if (!empty($item['detail_img'])) : ?>
              <li class="p-location__thumb__item" data-slide="<?php echo esc_html($count++); ?>">
                <img src="<?php echo esc_url($item['detail_img']); ?>" class="p-location__thumb__img">
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
          <?php endif; ?>
        </ul>

        <div class="go_wrapper sp">
          <a class="form__btn" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
        </div>


      </div>

    <?php endforeach; ?>
  <?php endif; ?>
</div>