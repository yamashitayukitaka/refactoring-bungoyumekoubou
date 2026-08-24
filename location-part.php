<?php
$stores = get_field('store_informations', 410);
$hasStore = false;
if ($stores) {
  foreach ($stores as $row) {
    if (!empty($row['main_img']) || !empty($row['address']) || !empty($row['postal_code']) || !empty($row['building']) || !empty($row['phone']) || !empty($row['map']) || !empty($row['detail_img_one']) || !empty($row['detail_img_two']) || !empty($row['detail_img_three'])) {
      $hasStore = true;
      break;
    }
  }
}
?>
<?php if ($hasStore) : ?>
<section class="location">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        LOCATION
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          店舗情報
        </p>
      </div>
    </div>
    <div class="location__content">
      <?php
      for ($i = 0; $i < count($stores); $i++) {
        $store = $stores[$i];
        if (empty($store['main_img']) && empty($store['address']) && empty($store['postal_code']) && empty($store['building']) && empty($store['phone']) && empty($store['map']) && empty($store['detail_img_one']) && empty($store['detail_img_two']) && empty($store['detail_img_three'])) {
          continue;
        }
      ?>
      <div class="location_item u-mb30">
        <div class="location_item_first">
          <?php if (!empty($store['main_img'])) : ?>
          <figure class="location_item_first_img">
            <img src="<?php echo esc_url($store['main_img']); ?>">
          </figure>
          <?php endif; ?>
          <div class="location_item_first_info">
            <div class="location_item_first_info_txt">
              <?php if (!empty($store['address'])) : ?><span class="location_detail_info"><?php echo esc_html($store['address']); ?></span><?php endif; ?>
              <?php if (!empty($store['postal_code'])) : ?><span class="location_detail_info"><?php echo esc_html($store['postal_code']); ?></span><?php endif; ?>
              <?php if (!empty($store['building'])) : ?><span class="location_detail_info"><?php echo esc_html($store['building']); ?></span><?php endif; ?>
              <?php if (!empty($store['phone'])) : ?><span class="location_detail_info"><?php echo esc_html($store['phone']); ?></span><?php endif; ?>
            </div>
            <?php if (!empty($store['map'])) : ?>
            <div class="location_item_first_map">
              <iframe src="<?php echo esc_url($store['map']); ?>" style="border:0;" allowfullscreen="" loading="lazy" width="100%"
                height="230px" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php endif; ?>
            <div class="go_wrapper">
              <a class="form__btn" href="<?php echo esc_url(home_url('/')); ?>">お問い合わせ</a>
            </div>
          </div>
        </div>
        <div class="location_item_second">
          <?php if (!empty($store['detail_img_one'])) : ?><img src="<?php echo esc_url($store['detail_img_one']); ?>"><?php endif; ?>
          <?php if (!empty($store['detail_img_two'])) : ?><img src="<?php echo esc_url($store['detail_img_two']); ?>"><?php endif; ?>
          <?php if (!empty($store['detail_img_three'])) : ?><img src="<?php echo esc_url($store['detail_img_three']); ?>"><?php endif; ?>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </section>
<?php endif; ?>
