<section class=" l_content_middle_t u-mb100 BUNGO_YUME_STUDIO">
  <figure class="BUNGO_YUME_STUDIO__topImg">
    <img src="<?php echo esc_url(IMG_URL . '/support-right.webp'); ?>" alt="安心の保証制度">
  </figure>
  <div class="c-title__wrap--sectionLine ">
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
    <img src="<?php echo esc_url(IMG_URL . '/support-left.webp'); ?>" alt="安心の保証制度">
  </figure>
</section>


<div class="single-swiper location__content ">
  <div class="c-title__wrap--sectionLine">
    <h3 class="c-title--sectionLine">
      LOCATION
    </h3>
    <div>
      <p class="c-title--orangeLine u-mb50"><span class="marker">
          店舗情報</span>
      </p>
    </div>
  </div>

  <?php $stores = get_field('store_informations', 410); ?>
  <!--410はメインクエリ以外で特定の投稿やページからカスタムフィールドを取得するための投稿ID（ポストID）です。
  get_field関数はAdvanced Custom Fields (ACF) プラグインの一部で、特定の投稿やページに関連するカスタム
  フィールドの値を取得するために使用されます。ここでの410は、そのカスタムフィールドが関連付けられている
  投稿のIDを示しています。-->

  <?php if ($stores) : ?>
    <?php foreach ($stores as $store) :
      $address = $store['address'];
      $postal_code = $store['postal_code'];
      $building = $store['building'];
      $phone = $store['phone'];
      $map = $store['map'];
      $detail = $store['detail'];
    ?>
      <div class="p-location__content">
        <div class="p-location__inner l_content_large_t">
          <ul class="js-commonSlick p-location__list pc_tab">
            <!--isset は、変数が存在し、かつ null でないことを確認します。
            これにより、未定義の変数や配列要素にアクセスしようとした場合のエラーを防ぎます。
            empty は、変数が空（空文字列、0、null、false など）であるかどうかを確認します。
            ただし、変数が未定義の場合も true を返します。-->
            <?php foreach ($detail as $item) : ?>
              <?php if (isset($item['detail_img']) && !empty($item['detail_img'])) : ?>
                <li class="p_location__list__item_t ">
                  <img src="<?php echo esc_url($item['detail_img']); ?>" class="p-location__list__img">
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>

          <div class="location_item_first_info">
            <div class="location_item_first_info_txt">
              <span class="location_detail_info"><?php echo $address; ?></span>
              <span class="location_detail_info"><?php echo $postal_code; ?></span>
              <span class="location_detail_info"><?php echo $building; ?></span>
              <span class="location_detail_info"><?php echo $phone; ?></span>
            </div>
            <div class="location_item_first_map">
              <iframe class="location-map" src="<?php echo $map; ?>" style="border:0;" allowfullscreen="" loading="lazy" width="100%" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="go_wrapper pc_tab">
              <a class="form__btn" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </div>
          </div>

          <ul class="js-commonSlick p-location__list sp">
            <?php foreach ($detail as $item) : ?>
              <?php if (isset($item['detail_img']) && !empty($item['detail_img'])) : ?>
                <li class="p_location__list__item_t ">
                  <img src="<?php echo esc_url($item['detail_img']); ?>" class="p-location__list__img">
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>


        </div>

        <ul class="p-location__thumb__list l-content--large">
          <?php $count = 0; ?>
          <?php foreach ($detail as $item) : ?>
            <?php if (isset($item['detail_img']) && !empty($item['detail_img'])) : ?>
              <li class="p-location__thumb__item" data-slide="<?php echo esc_html($count++); ?>">
                <img src="<?php echo esc_url($item['detail_img']); ?>" class="p-location__thumb__img">
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>

        <div class="go_wrapper sp">
          <a class="form__btn" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
        </div>


      </div>

    <?php endforeach; ?>
  <?php endif; ?>
</div>