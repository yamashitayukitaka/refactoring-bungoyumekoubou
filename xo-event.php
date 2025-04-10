<section class = "l-content u-mb100">
  <div class = "p-xo-event__search__wrap">
    <p class = "p-xo-event__search">カレンダーから探す</p>
    <p class = "p-xo-event__search u-none__mobile--md">内容から探す</p>
  </div>
  <div class = "p-xo-event__outer">
    <div class = "p-xo-event__wrap">
      <?php echo do_shortcode('[xo_event_calendar]'); ?>
    </div>
    <div class = "p-xo-event__content">
      <ul class = "p-xo-event__list">
        <?php
          $args = array(
          'post_type' => 'xo_event',
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC',
        );?>
        <?php $eventLoop = new WP_Query($args);?>
        <?php if ($eventLoop->have_posts()): ?>
          <time class = "p-xo-event__time"></time>

          <div class = "p-xo-event__list__overflow">

            <?php while ($eventLoop->have_posts()) : $eventLoop->the_post();?>
              <li class = "p-xo-event__list__item">
                <a href = "<?php the_permalink(); ?>" class = "p-xo-event__list__link">
                  <time class = "p-xo-event__list__startDate">
                    <?php echo do_shortcode('[xo_event_field field="start_date"]'); ?>
                  </time>
                  <time class = "p-xo-event__list__endDate js-end">
                    <?php echo do_shortcode('[xo_event_field field="end_date"]'); ?>
                  </time>

                  <figure class = "p-xo-event__list__imgWrap">
                    <?php the_post_thumbnail();?>
                  </figure>

                  <div class = "p-xo-event__list__txtContent">

                    <p>
                      <?php the_title(); ?>
                    </p>
                    
                      <?php $eventTypes = get_the_terms(get_the_ID(),'event-type', 
                      //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
                      //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
                        [
                          'hide_empty' => false,
                          'parent' =>0,
                          'orderby'=>'id',
                          'order'=>'ASC',
                        ]
                      );?>

                    <?php if(get_field('event-type')): ?>
                      <div class = "c-id__wrap">
                        <?php foreach($eventTypes as $eventType):?>
                          <span class = "c-id u-mb15"><?php echo esc_html($eventType->name); ?></span>
                          <span class = "c-id--end">終了</span>
                        <?php endforeach;?>
                      </div>
                    <?php endif; ?>

                  </div>
                </a>
              </li>
              <?php endwhile;?>
            <?php endif;
            wp_reset_postdata();?>
          </div>
        </ul>
      </div>
  </div>
</section>