<li class = "p-content__list__item js-order">
  <a href = "<?php the_permalink(); ?>" class = "p-content__list__link">
    <figure class = "p-content__list__imgWrap">
      <?php the_post_thumbnail();?>
    </figure>
    <div class = "p-content__list__txtWrap">
      <?php $eventTypes = get_the_terms(get_the_ID(),'event-type', 
      //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
      //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
        [
          'hide_empty' => false,
          'parent' =>0,
          'orderby'=>'date',
          'order'=>'DESC',
        ]
      );?>

      <?php if(get_field('event-type')): ?>
        <?php foreach($eventTypes as $eventType):?>
          <span class = "c-id u-mb15"><?php echo esc_html($eventType->name); ?></span>
        <?php endforeach;?>
        <span class = "c-id--end">終了</span>
      <?php endif; ?>

      <?php
        $start_date = do_shortcode('[xo_event_field field="start_date"]');
        $end_date = do_shortcode('[xo_event_field field="end_date"]');
      ?>
      
      <?php if (!empty($start_date) && !empty($end_date)) :?>
        <dl class = "u-flex u-mb15 p-content__list__dl">
          <dt class = "p-content__list__txt">開催日&nbsp;:&nbsp;</dt>
          <dd class = "p-content__list__txt">
            <?php 
              // カスタムフィールドの値を取得
              $always = get_field('always');
              // カスタムフィールドが存在する場合の処理
              if ($always):
                // 投稿のIDを取得
                $post_id = get_the_ID();
                // カスタムフィールドの値を取得
                $always_value = get_post_meta($post_id, 'always', true);
                // 真偽値として出力
                if ($always_value === '1'): ?>
                <p class = "p-event__always js-always">&nbsp;&nbsp;<?php echo esc_html('常時開催中'); ?></p>
              <?php endif; ?>
            <?php else:?>
              <time class = "js-DateOfPicture p-content__list__txt">
                <?php echo do_shortcode('[xo_event_field field="start_date"]'); ?>
              </time>
                ～
              <time class = "js-DateOfPicture js-end p-content__list__txt">
                <?php echo do_shortcode('[xo_event_field field="end_date"]'); ?>
              </time>
            <?php endif; ?>
          </dd>
        </dl>
      <?php endif; ?>

      <?php if(get_field('event-place')): ?>
        <dl class = "u-flex u-mb15">
          <dt class = "p-content__list__txt u-nowrap">開催場所&nbsp;:&nbsp;</dt>
          <dd class = "p-content__list__txt">
            <?php the_field('event-place'); ?>
          </dd>
        </dl>
      <?php endif; ?>

      <p class = "p-content__list__ttl"><?php the_title(); ?></p>
    </div>
  </a>
</li>