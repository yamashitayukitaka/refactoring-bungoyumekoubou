<?php
// Template Name: single-xo_event
if (!defined('ABSPATH')) exit;
get_header();
?>
<main class = "js-searchEnd">

  <h2 class="c-title--section u-mb50">
    イベント情報
  </h2>

  <section class="l-content u-mb50">
    <h3 class="p-event__ttl u-mb50">
      <?php the_title(); ?>
    </h3>

    <?php if (get_field('event-type')) : ?>
      <?php $eventTypes = get_the_terms(
        get_the_ID(),
        'event-type',
        //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
        //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
        [
          'hide_empty' => false,
          'parent' => 0,
          'orderby' => 'id',
          'order' => 'ASC',
        ]
      ); ?>
      <?php foreach ($eventTypes as $eventType) : ?>
        <div class="c-id__wrap--top">
          <span class="c-id"><?php echo esc_html($eventType->name); ?></span>
          <span class = "c-id--end">終了</span>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    <dl class="u-flex">
      <dt>開催日</dt>
      <?php
      // カスタムフィールドの値を取得
      $always = get_field('always');
      // カスタムフィールドが存在する場合の処理
      if ($always) :
        // 投稿のIDを取得
        $post_id = get_the_ID();
        // カスタムフィールドの値を取得
        $always_value = get_post_meta($post_id, 'always', true);
        // 真偽値として出力
        if ($always_value === '1') : ?>
          <dd class="p-event__always">&nbsp;&nbsp;<?php echo esc_html('常時開催中'); ?></dd>
        <?php endif; ?>
      <?php else : ?>
        <dd>
          &nbsp;&nbsp;
          <time class="js-DateOfPicture">
            <?php echo do_shortcode('[xo_event_field field="start_date"]'); ?>
          </time>
          ～
          <time class="js-DateOfPicture js-end">
            <?php echo do_shortcode('[xo_event_field field="end_date"]'); ?>
          </time>
        </dd>
      <?php endif; ?>
    </dl>

    <?php if (get_field('event-start-time') || get_field('event-end-time')) : ?>
      <dl class="u-flex">
        <dt>開催時間&nbsp;&nbsp;</dt>
        <dd><?php the_field('event-start-time'); ?>～<?php the_field('event-end-time'); ?></dd>
      </dl>
    <?php endif; ?>
    <?php if (get_field('event-place')) : ?>
      <dl class="u-flex">
        <dt>開催場所&nbsp;&nbsp;</dt>
        <dd><?php the_field('event-place'); ?></dd>
      </dl>
    <?php endif; ?>
  </section>
  <section class="l-content--middle">
    <?php if (has_post_thumbnail()) : ?>
      <figure class="p-flex__one__imgWrap u-mb50">
        <?php the_post_thumbnail(); ?>
      </figure>
    <?php endif; ?>

    <div class = "u-center u-mb100">
      <a href = "#booking" class = "c-button--orange">予約する</a>
    </div>
    
    <p class="c-title--middle u-mb50">
      <?php the_field('event-main-txt'); ?>
    </p>
    <p class="c-txt--middleBold u-mb50">
      <?php the_field('event-txt'); ?>
    </p>
    <?php if (have_rows('flex')) : // 柔軟なコンテンツフィールドの名前 
    ?>
      <?php while (have_rows('flex')) : the_row(); ?>
        <?php if (get_row_layout() == 'two-column') : ?>
          <div class="p-flex__two u-mb50">
            <?php if (have_rows('contents-1')) : ?>
              <?php while (have_rows('contents-1')) : the_row(); ?>
                <div class="p-flex__two__content">
                  <figure class="p-flex__two__imgWrap u-mb10">
                    <img src="<?php the_sub_field('img'); ?>" alt="イベント">
                  </figure>
                  <p class="c-title--middle"><?php the_sub_field('ttl'); ?></p>
                  <p class="c-txt--middleBold"><?php the_sub_field('txt'); ?></p>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('contents-2')) : ?>
              <?php while (have_rows('contents-2')) : the_row(); ?>
                <div class="p-flex__two__content">
                  <figure class="p-flex__two__imgWrap u-mb10">
                    <img src="<?php the_sub_field('img'); ?>" alt="イベント">
                  </figure>
                  <p class="c-title--middle"><?php the_sub_field('ttl'); ?></p>
                  <p class="c-txt--middleBold"><?php the_sub_field('txt'); ?></p>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <?php elseif (get_row_layout() == 'one-column') : ?>
          <div class="p-flex__one u-mb50">
            <?php if (have_rows('contents')) : ?>
              <?php while (have_rows('contents')) : the_row(); ?>
                <div>
                  <figure class="p-flex__one__imgWrap u-mb10">
                    <img src="<?php the_sub_field('img'); ?>" alt="イベント">
                  </figure>
                  <p class="c-title--middle u-mb10"><?php the_sub_field('ttl'); ?></p>
                  <p class="c-txt--middleBold"><?php the_sub_field('txt'); ?></p>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <table class="u-mb140 c-table">
      <tr class="c-table__tr">
        <th class="c-table__th">開催日</th>
        <td class="c-table__td">
          <?php
          // カスタムフィールドの値を取得
          $always = get_field('always');
          // カスタムフィールドが存在する場合の処理
          if ($always) :
            // 投稿のIDを取得
            $post_id = get_the_ID();
            // カスタムフィールドの値を取得
            $always_value = get_post_meta($post_id, 'always', true);
            // 真偽値として出力
            if ($always_value === '1') : ?>
              <p class="p-event__always">&nbsp;&nbsp;<?php echo esc_html('常時開催中'); ?></p>
            <?php endif; ?>
          <?php else : ?>

            <time class="js-DateOfPicture">
              <?php echo do_shortcode('[xo_event_field field="start_date"]'); ?>
            </time>
            ～
            <time class="js-DateOfPicture">
              <?php echo do_shortcode('[xo_event_field field="end_date"]'); ?>
            </time>
          <?php endif; ?>
        </td>
      </tr>

      <?php if (get_field('event-start-time') || get_field('event-end-time')) : ?>
        <tr class="c-table__tr">
          <th class="c-table__th">開催時間</th>
          <td class="c-table__td">
            <?php the_field('event-start-time'); ?>～<?php the_field('event-end-time'); ?>
          </td>
        </tr>
      <?php endif; ?>

      <?php if (get_field('event-place')) : ?>
        <tr class="c-table__tr">
          <th class="c-table__th">開催場所</th>
          <td class="c-table__td"><?php the_field('event-place'); ?></td>
        </tr>
      <?php endif; ?>
      <!-- <tr class="c-table__tr">
        <th class="c-table__th">お問合わせ番号</th>
        <td class="c-table__td">イベント情報に関するご質問等は 097-594-1481 までお気軽にお問い合わせ下さい！</td>
      </tr>
      <tr class="c-table__tr">
        <th class="c-table__th">お客様へのお願い</th>
        <td class="c-table__td">当日の予約は豊後夢工房まで直接お電話ください。 097-594-1481 にて承っておりますので、お気軽にお問合せ下さい！</td>
      </tr> -->
    </table>

    <section class="u-mb100">
      <?php
      $closing = get_field('closing-sentence'); ?>
      <?php if ($closing['title']) : ?>
        <p class="c-title--middle u-mb50">
          <?php echo esc_html($closing['title']); ?>
        </p>
      <?php endif; ?>
      <?php if ($closing['txt']) : ?>
        <p class="c-txt--middle">
          <?php echo esc_html($closing['txt']); ?>
        </p>
      <?php endif; ?>
    </section>

    <?php if (get_field('googleMap')) : ?>
      <section class="l-content--middle u-mb100">
        <h2 class="c-title--sectionEn">
          ACCESS MAP
        </h2>
        <p class="c-title--sectionSub">
          会場について
        </p>
        <div class="p-event__googleMapWrap">
          <?php the_field('googleMap'); ?>
        </div>
      </section>
    <?php endif; ?>

    <?php $cac = get_field('cac'); ?>
    <?php if ($cac) : ?>
      <section class="l-content--middle" id = "booking">
        <div class="c-title__wrap--sectionLine">
          <h3 class="c-title--sectionLine">
            CONTACT
          </h3>
          <div>
            <p class="c-title--orangeLine u-mb50">
              <span class="marker">来場予約</span>
            </p>
          </div>
        </div>

        <div id = "js-move">
          <?php echo do_shortcode($cac); ?>
        </div>

      </section>
    <?php endif; ?>
</main>
<?php get_template_part('common-link', 'link'); ?>
<?php get_footer(); ?>