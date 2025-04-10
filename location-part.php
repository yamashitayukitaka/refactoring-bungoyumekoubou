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
      <?php $stores = get_field('store_informations', 410);
      for ($i = 0; $i < count($stores); $i++) {
        $store = $stores[$i];
        $main_img = $store['main_img'];
        $address = $store['address'];
        $postal_code = $store['postal_code'];
        $building = $store['building'];
        $phone = $store['phone'];
        $map = $store['map'];
        $detail_img_one = $store['detail_img_one'];
        $detail_img_two = $store['detail_img_two'];
        $detail_img_three = $store['detail_img_three'];
      ?>
      <div class="location_item u-mb30">
        <div class="location_item_first">
          <figure class="location_item_first_img">
            <img src="<?php echo esc_url($main_img); ?>">
          </figure>
          <div class="location_item_first_info">
            <div class="location_item_first_info_txt">
              <span class="location_detail_info"><?php echo $address; ?></span>
              <span class="location_detail_info"><?php echo $postal_code; ?></span>
              <span class="location_detail_info"><?php echo $building; ?></span>
              <span class="location_detail_info"><?php echo $phone; ?></span>
            </div>
            <div class="location_item_first_map">
              <iframe src="<?php echo $map; ?>" style="border:0;" allowfullscreen="" loading="lazy" width="100%"
                height="230px" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="go_wrapper">
              <a class="form__btn" href="<?php echo esc_url(home_url('/')); ?>">お問い合わせ</a>
            </div>
          </div>
        </div>
        <div class="location_item_second">
          <img src="<?php echo esc_url($detail_img_one); ?>">
          <img src="<?php echo esc_url($detail_img_two); ?>">
          <img src="<?php echo esc_url($detail_img_three); ?>">
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </section>
