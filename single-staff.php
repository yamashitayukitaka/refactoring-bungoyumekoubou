<?php 
// Template Name: staff
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<?php $post_id = get_the_ID();?>
<?php $terms = wp_get_post_terms($post_id, 'department'); // 'category' を他のタクソノミー（例：'post_tag'）に置き換え可能?>

<main>
<div class = "c-pageMv u-mb100">
  <div class = "c-pageMv__ttl__wrap">
    <h2 class = "c-pageMv__ttl">
      快適ゆめ空間をつくる
      <br><span class = "u-orange--mv">スタッフたち</span>
    </h2>
  </div>
  <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo esc_url (get_template_directory_uri() ); ?>/dist/img/common/page.webp');"></figure>
</div>
<section class = "l-content p-staff__production">
  <div class = "p-staff__production__content">
    <div class = "p-staff__production__profile">
      <figure class = "p-staff__production__imgWrap">
        <img src="<?php the_field('staff-img'); ?>" alt="スタッフイメージ" class ="p-staff__img">
      </figure>

      <?php foreach($terms as $term):?>
        <div class = "c-id"><?php echo esc_html($term->name); ?></div>
      <?php endforeach;?>

      <dl class = "u-flex">
        <dt class = "p-staff__production__dt"><?php the_title(); ?></dt>
        <dd class = "p-staff__production__profileName"><?php the_field('english-name'); ?></dd>
      </dl>

      <?php if(get_field('lisence')): ?>
        <dl class = "u-flex">
          <dt class = "p-staff__production__dt">資格&nbsp;&nbsp;</dt>
          <dd class = "p-staff__production__dt"><?php the_field('lisence'); ?></dd>
        </dl>
      <?php endif; ?>
    </div>

    <?php if(get_field('self-introduction-img')): ?>
      <figure class = "p-staff__production__desc">
        <img src="<?php the_field('self-introduction-img'); ?>" alt="自己紹介画像" class ="p-staff__production__descImg">
      </figure>
    <?php endif; ?>
  </div>

  <p class = "p-staff__production__txt">
    <?php the_content(); ?>
  </p>
</section>

<?php $myBest = get_field('my-best'); ?>
<?php if(!empty($myBest['my-best-ttl']) || !empty($myBest['my-best-1']) || !empty($myBest['my-best-2']) || !empty($myBest['my-best-3'])):?>
  <section class = "p-staff__myBest">
    <div class = "p-staff__myBest__ttlWrap">
      <p class = "p-staff__myBest__txt">あなたのマイベスト3を教えて</p>
      <h3 class = "p-staff__myBest__ttl">MyBest&nbsp;<span class = "u-orange--mv">3</span></h3>
      <p class = "p-staff__myBest__txt"><?php echo esc_html($myBest['my-best-ttl']);?></p>
    </div>
    <ul class = "p-staff__myBest__list">
      <li class = "p-staff__myBest__item">
        <h4 class = "p-staff__myBest__num">Best&nbsp;<span class = "u-orange--large">1</span></h4>
        <p class = "p-staff__myBest__txt">&nbsp;&nbsp;<?php echo esc_html($myBest['my-best-1']);?></p>
      </li>
      <li class = "p-staff__myBest__item">
        <h4 class = "p-staff__myBest__num">Best&nbsp;<span class = "u-orange--large">2</span></h4>
        <p class = "p-staff__myBest__txt">&nbsp;&nbsp;<?php echo esc_html($myBest['my-best-2']);?></p>
      </li>
      <li class = "p-staff__myBest__item">
        <h4 class = "p-staff__myBest__num">Best&nbsp;<span class = "u-orange--large">3</span></h4>
        <p class = "p-staff__myBest__txt">&nbsp;&nbsp;<?php echo esc_html($myBest['my-best-3']);?></p>
      </li>
    </ul>
  </section>
<?php endif; ?>
<section class = "p-staff__question l-content--middle">
  <?php $questions = get_field('question'); ?>
    <?php if($questions):?>
      <?php foreach ( $questions as $question ) :?>
        <div class = "p-staff__question__content">
          <div class = "p-staff__question__ttlWrap">
            <p>
              <span class = "marker p-staff__question__ttl--another"><?php echo esc_html($question['question-ttl']);?></span>
            </p>
          </div>
          <div class = "p-staff__question__right">
            <?php if($question['question-img']):?>
              <figure class = "p-staff__question__imgWrap">
                <img src = "<?php echo esc_url($question['question-img']);?>"class = "p-staff__question__img" alt = "質問画像">
              </figure>
            <?php endif; ?>
            <p class = "p-staff__question__txt">
              <?php echo wp_kses_post($question['question-answer']);?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
</section>

<section class = "l-content">
  <div class = "u-center u-mb10">
    <h3 class = "c-title--sectionLine">
      YUME STAFF
    </h3>
  </div>
  <div class = "u-center u-mb30">
    <p class = "c-title--orangeLine">
      <span class = "marker">他の<span class = "u-orange">ゆめスタッフ</span>を見る</span>
    </p>
  </div>
  
  <ul class = "p-content__list">
    <?php
    $args = array(
    'post_type' => 'staff',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'post__not_in' => array($post_id),
    );?>
    <?php $staffLoop = new WP_Query($args);?>
    <?php if ($staffLoop ->have_posts()): ?>
      <?php while ($staffLoop ->have_posts()) : $staffLoop ->the_post();?>
        <li class ="p-content__list__item">
          <a href = "<?php the_permalink(); ?>">
            <figure class = "p-content__list__imgWrap">
              <img src="<?php the_field('staff-img'); ?>" alt="スタッフイメージ" class ="p-staff__img">
            </figure>
            <?php $Tags = get_the_terms(get_the_ID(),'department', 
              //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
              //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
                [
                  'hide_empty' => false,
                  'parent' =>0,
                  'orderby'=>'id',
                  'order'=>'ASC',
                ]
            );?>

            <?php if($Tags):?>
              <?php foreach($Tags as $Tag):?>
                <span class = "c-id"><?php echo esc_html($Tag->name); ?></span>
                <p><?php the_title(); ?></p>
              <?php endforeach;?>
            <?php endif; ?>
          </a>
        </li>
      <?php endwhile;
    endif;
    wp_reset_postdata();?>
  </ul>
</section>

<?php get_template_part('recruit-part','recruit'); ?>
<?php get_template_part('common','common'); ?>
<?php get_template_part('common-link','link'); ?>
</main>
<?php get_footer(); ?>