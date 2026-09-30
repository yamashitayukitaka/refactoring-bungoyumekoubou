<li class = "c-cardList__item js-order">
  <a href = "<?php the_permalink(); ?>" class = "c-cardList__link">
    <figure class = "c-cardList__imgWrap">
      <?php the_post_thumbnail();?>
    </figure>
    <div class = "c-cardList__txtWrap">
      <?php $eventTypes = get_the_terms(
          get_the_ID(),
          'event-type',
          [
          'hide_empty' => false,
          'parent' => 0,
          'orderby' => 'date',
          'order' => 'DESC',
          ]
      );?>

      <?php $event_type = get_field('event-type'); ?>
      <?php if ($event_type && $eventTypes && !is_wp_error($eventTypes)) : ?>
        <?php foreach ($eventTypes as $eventType) :?>
          <span class = "c-id u-mb15"><?php echo esc_html($eventType->name); ?></span>
        <?php endforeach;?>
        <span class = "c-id--end">終了</span>
      <?php endif; ?>

      <?php
        $start_date = do_shortcode('[xo_event_field field="start_date"]');
        $end_date = do_shortcode('[xo_event_field field="end_date"]');
      ?>
      
      <?php if (!empty($start_date) && !empty($end_date)) :?>
        <dl class = "u-flex u-mb15 c-cardList__dl">
          <dt class = "c-cardList__txt">開催日&nbsp;:&nbsp;</dt>
          <dd class = "c-cardList__txt">
            <?php
              $always = get_field('always');
            if ($always) :
              $post_id = get_the_ID();
              $always_value = get_post_meta($post_id, 'always', true);
              if ($always_value === '1') : ?>
                <p class = "p-event__always js-always">&nbsp;&nbsp;<?php echo esc_html('常時開催中'); ?></p>
              <?php endif; ?>
            <?php else :?>
              <time class = "js-DateOfPicture c-cardList__txt">
                <?php echo do_shortcode('[xo_event_field field="start_date"]'); ?>
              </time>
                ～
              <time class = "js-DateOfPicture js-end c-cardList__txt">
                <?php echo do_shortcode('[xo_event_field field="end_date"]'); ?>
              </time>
            <?php endif; ?>
          </dd>
        </dl>
      <?php endif; ?>

      <?php $event_place = get_field('event-place'); ?>
      <?php if ($event_place) : ?>
        <dl class = "u-flex u-mb15">
          <dt class = "c-cardList__txt u-nowrap">開催場所&nbsp;:&nbsp;</dt>
          <dd class = "c-cardList__txt">
            <?php echo esc_html($event_place); ?>
          </dd>
        </dl>
      <?php endif; ?>

      <p class = "c-cardList__ttl"><?php the_title(); ?></p>
    </div>
  </a>
</li>