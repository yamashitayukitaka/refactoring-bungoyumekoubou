<?php
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

    <?php $event_type = get_field('event-type'); ?>
    <?php if ($event_type) : ?>
      <?php $eventTypes = get_the_terms(
        get_the_ID(),
        'event-type',
        [
          'hide_empty' => false,
          'parent' => 0,
          'orderby' => 'id',
          'order' => 'ASC',
        ]
      ); ?>
      <?php if ($eventTypes && !is_wp_error($eventTypes)) : ?>
      <?php foreach ($eventTypes as $eventType) : ?>
        <div class="c-id__wrap--top">
          <span class="c-id"><?php echo esc_html($eventType->name); ?></span>
          <span class = "c-id--end">終了</span>
        </div>
      <?php endforeach; ?>
      <?php endif; ?>
    <?php endif; ?>

    <dl class="u-flex">
      <dt>開催日</dt>
      <?php
      $always = get_field('always');
      if ($always) :
        $post_id = get_the_ID();
        $always_value = get_post_meta($post_id, 'always', true);
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

    <?php
    $event_start_time = get_field('event-start-time');
    $event_end_time = get_field('event-end-time');
    ?>
    <?php if ($event_start_time || $event_end_time) : ?>
      <dl class="u-flex">
        <dt>開催時間&nbsp;&nbsp;</dt>
        <dd><?php echo esc_html($event_start_time); ?>～<?php echo esc_html($event_end_time); ?></dd>
      </dl>
    <?php endif; ?>
    <?php $event_place = get_field('event-place'); ?>
    <?php if ($event_place) : ?>
      <dl class="u-flex">
        <dt>開催場所&nbsp;&nbsp;</dt>
        <dd><?php echo esc_html($event_place); ?></dd>
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
    
    <?php $event_main_txt = get_field('event-main-txt'); ?>
    <?php if ($event_main_txt) : ?>
    <p class="c-title--middle u-mb50">
      <?php echo wp_kses_post($event_main_txt); ?>
    </p>
    <?php endif; ?>
    <?php $event_txt = get_field('event-txt'); ?>
    <?php if ($event_txt) : ?>
    <p class="c-txt--middleBold u-mb50">
      <?php echo wp_kses_post($event_txt); ?>
    </p>
    <?php endif; ?>
    <?php if (have_rows('flex')) : ?>
      <?php while (have_rows('flex')) : the_row(); ?>
        <?php if (get_row_layout() == 'two-column') : ?>
          <div class="p-flex__two u-mb50">
            <?php if (have_rows('contents-1')) : ?>
              <?php while (have_rows('contents-1')) : the_row(); ?>
                <div class="p-flex__two__content">
                  <?php $img = get_sub_field('img'); ?>
                  <?php $ttl = get_sub_field('ttl'); ?>
                  <?php $txt = get_sub_field('txt'); ?>
                  <figure class="p-flex__two__imgWrap u-mb10">
                    <?php if ($img) : ?>
                    <img src="<?php echo esc_url($img); ?>" alt="イベント">
                    <?php endif; ?>
                  </figure>
                  <?php if ($ttl) : ?>
                  <p class="c-title--middle"><?php echo esc_html($ttl); ?></p>
                  <?php endif; ?>
                  <?php if ($txt) : ?>
                  <p class="c-txt--middleBold"><?php echo wp_kses_post($txt); ?></p>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('contents-2')) : ?>
              <?php while (have_rows('contents-2')) : the_row(); ?>
                <div class="p-flex__two__content">
                  <?php $img = get_sub_field('img'); ?>
                  <?php $ttl = get_sub_field('ttl'); ?>
                  <?php $txt = get_sub_field('txt'); ?>
                  <figure class="p-flex__two__imgWrap u-mb10">
                    <?php if ($img) : ?>
                    <img src="<?php echo esc_url($img); ?>" alt="イベント">
                    <?php endif; ?>
                  </figure>
                  <?php if ($ttl) : ?>
                  <p class="c-title--middle"><?php echo esc_html($ttl); ?></p>
                  <?php endif; ?>
                  <?php if ($txt) : ?>
                  <p class="c-txt--middleBold"><?php echo wp_kses_post($txt); ?></p>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <?php elseif (get_row_layout() == 'one-column') : ?>
          <div class="p-flex__one u-mb50">
            <?php if (have_rows('contents')) : ?>
              <?php while (have_rows('contents')) : the_row(); ?>
                <div>
                  <?php $img = get_sub_field('img'); ?>
                  <?php $ttl = get_sub_field('ttl'); ?>
                  <?php $txt = get_sub_field('txt'); ?>
                  <figure class="p-flex__one__imgWrap u-mb10">
                    <?php if ($img) : ?>
                    <img src="<?php echo esc_url($img); ?>" alt="イベント">
                    <?php endif; ?>
                  </figure>
                  <?php if ($ttl) : ?>
                  <p class="c-title--middle u-mb10"><?php echo esc_html($ttl); ?></p>
                  <?php endif; ?>
                  <?php if ($txt) : ?>
                  <p class="c-txt--middleBold"><?php echo wp_kses_post($txt); ?></p>
                  <?php endif; ?>
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
          $always = get_field('always');
          if ($always) :
            $post_id = get_the_ID();
            $always_value = get_post_meta($post_id, 'always', true);
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

      <?php
      $event_start_time = get_field('event-start-time');
      $event_end_time = get_field('event-end-time');
      ?>
      <?php if ($event_start_time || $event_end_time) : ?>
        <tr class="c-table__tr">
          <th class="c-table__th">開催時間</th>
          <td class="c-table__td">
            <?php echo esc_html($event_start_time); ?>～<?php echo esc_html($event_end_time); ?>
          </td>
        </tr>
      <?php endif; ?>

      <?php $event_place = get_field('event-place'); ?>
      <?php if ($event_place) : ?>
        <tr class="c-table__tr">
          <th class="c-table__th">開催場所</th>
          <td class="c-table__td"><?php echo esc_html($event_place); ?></td>
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

    <?php $closing = get_field('closing-sentence'); ?>
    <?php if ($closing && (!empty($closing['title']) || !empty($closing['txt']))) : ?>
    <section class="u-mb100">
      <?php if (!empty($closing['title'])) : ?>
        <p class="c-title--middle u-mb50">
          <?php echo esc_html($closing['title']); ?>
        </p>
      <?php endif; ?>
      <?php if (!empty($closing['txt'])) : ?>
        <p class="c-txt--middle">
          <?php echo esc_html($closing['txt']); ?>
        </p>
      <?php endif; ?>
    </section>
    <?php endif; ?>

    <?php $googleMap = get_field('googleMap'); ?>
    <?php if ($googleMap) : ?>
      <section class="l-content--middle u-mb100">
        <h2 class="c-title--sectionEn">
          ACCESS MAP
        </h2>
        <p class="c-title--sectionSub">
          会場について
        </p>
        <div class="p-event__googleMapWrap">
          <?php echo wazeka_kses_iframe($googleMap); ?>
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