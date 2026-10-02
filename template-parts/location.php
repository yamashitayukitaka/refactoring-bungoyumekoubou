<div class="p-location">
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
        <div class="p-location__inner">
          <ul class="js-commonSlick p-location__list">
            <?php if (!empty($store['detail'])) : ?>
              <?php foreach ($store['detail'] as $item) : ?>
                <?php if (!empty($item['detail_img'])) : ?>
                <li class="p-location__list__item">
                  <img src="<?php echo esc_url($item['detail_img']); ?>" class="p-location__list__img" alt="">
                </li>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>

          <div class="p-location__info">
            <ul class="p-location__info__list">
              <?php if (!empty($store['address'])) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br(esc_html($store['address'])); ?></li>
              <?php endif; ?>
              <?php if (!empty($store['postal_code'])) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br(esc_html($store['postal_code'])); ?></li>
              <?php endif; ?>
              <?php if (!empty($store['building'])) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br(esc_html($store['building'])); ?></li>
              <?php endif; ?>
              <?php if (!empty($store['phone'])) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br(esc_html($store['phone'])); ?></li>
              <?php endif; ?>
            </ul>
            <?php if (!empty($store['map'])) : ?>
            <div class="p-location__info__map">
              <iframe class="p-location__info__mapEmbed" src="<?php echo esc_url($store['map']); ?>" style="border:0;" allowfullscreen="" loading="lazy" width="100%" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php endif; ?>
            <div class="p-location__info__contact u-none__mobile--sp">
              <a class="p-location__info__contactLink" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </div>
          </div>
        </div>

        <ul class="p-location__thumb__list">
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

        <div class="p-location__info__contact u-none__pc--sp">
          <a class="p-location__info__contactLink" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
        </div>


      </div>

    <?php endforeach; ?>
  <?php endif; ?>
</div>
