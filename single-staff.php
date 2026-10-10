<?php
/**
 * Single staff member template.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>

<?php $local_post_id = get_the_ID();?>
<?php $terms = wp_get_post_terms( $local_post_id, 'department' ); ?>

<main>
<div class = "c-pageMv u-mb100">
  <div class = "c-pageMv__heading">
    <h2 class = "c-pageMv__heading__title">
      快適ゆめ空間をつくる
      <br><span class = "u-orange--mv">スタッフたち</span>
    </h2>
  </div>
  <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/page.webp' ); ?>');"></figure>
</div>
<section class = "l-content p-staff__production">
  <div class = "p-staff__production__content">
    <div class = "p-staff__production__profile">
      <figure class = "p-staff__production__imgWrap">
        <?php $staff_img = get_field( 'staff-img' ); ?>
        <?php if ( $staff_img ) : ?>
        <img src="<?php echo esc_url( $staff_img ); ?>" alt="スタッフイメージ" class ="p-staff__img">
        <?php endif; ?>
      </figure>

      <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
        <?php foreach ( $terms as $local_term ) :?>
        <div class = "c-id"><?php echo esc_html( $local_term->name ); ?></div>
        <?php endforeach;?>
      <?php endif; ?>

      <dl class = "u-flex">
        <dt class = "p-staff__production__dt"><?php the_title(); ?></dt>
        <?php $english_name = get_field( 'english-name' ); ?>
        <?php if ( $english_name ) : ?>
        <dd class = "p-staff__production__profileName"><?php echo esc_html( $english_name ); ?></dd>
        <?php endif; ?>
      </dl>

      <?php $lisence = get_field( 'lisence' ); ?>
      <?php if ( $lisence ) : ?>
        <dl class = "u-flex">
          <dt class = "p-staff__production__dt">資格&nbsp;&nbsp;</dt>
          <dd class = "p-staff__production__dt"><?php echo esc_html( $lisence ); ?></dd>
        </dl>
      <?php endif; ?>
    </div>

    <?php $self_introduction_img = get_field( 'self-introduction-img' ); ?>
    <?php if ( $self_introduction_img ) : ?>
      <figure class = "p-staff__production__desc">
        <img src="<?php echo esc_url( $self_introduction_img ); ?>" alt="自己紹介画像" class ="p-staff__production__descImg">
      </figure>
    <?php endif; ?>
  </div>

  <p class = "p-staff__production__txt">
    <?php the_content(); ?>
  </p>
</section>

<?php $my_best = get_field( 'my-best' ); ?>
<?php if ( $my_best && ( ! empty( $my_best['my-best-ttl'] ) || ! empty( $my_best['my-best-1'] ) || ! empty( $my_best['my-best-2'] ) || ! empty( $my_best['my-best-3'] ) ) ) :?>
  <section class = "p-staff__myBest">
    <div class = "p-staff__myBest__ttlWrap">
      <p class = "p-staff__myBest__txt">あなたのマイベスト3を教えて</p>
      <h3 class = "p-staff__myBest__ttl">MyBest&nbsp;<span class = "u-orange--mv">3</span></h3>
      <?php if ( ! empty( $my_best['my-best-ttl'] ) ) :?>
      <p class = "p-staff__myBest__txt"><?php echo esc_html( $my_best['my-best-ttl'] );?></p>
      <?php endif; ?>
    </div>
    <ul class = "p-staff__myBest__list">
      <?php if ( ! empty( $my_best['my-best-1'] ) ) :?>
      <li class = "p-staff__myBest__item">
        <h4 class = "p-staff__myBest__num">Best&nbsp;<span class = "u-orange--large">1</span></h4>
        <p class = "p-staff__myBest__txt">&nbsp;&nbsp;<?php echo esc_html( $my_best['my-best-1'] );?></p>
      </li>
      <?php endif; ?>
      <?php if ( ! empty( $my_best['my-best-2'] ) ) :?>
      <li class = "p-staff__myBest__item">
        <h4 class = "p-staff__myBest__num">Best&nbsp;<span class = "u-orange--large">2</span></h4>
        <p class = "p-staff__myBest__txt">&nbsp;&nbsp;<?php echo esc_html( $my_best['my-best-2'] );?></p>
      </li>
      <?php endif; ?>
      <?php if ( ! empty( $my_best['my-best-3'] ) ) :?>
      <li class = "p-staff__myBest__item">
        <h4 class = "p-staff__myBest__num">Best&nbsp;<span class = "u-orange--large">3</span></h4>
        <p class = "p-staff__myBest__txt">&nbsp;&nbsp;<?php echo esc_html( $my_best['my-best-3'] );?></p>
      </li>
      <?php endif; ?>
    </ul>
  </section>
<?php endif; ?>
<?php $questions = get_field( 'question' ); ?>
<?php
$has_question = false;
if ( $questions ) {
  foreach ( $questions as $question ) {
    if ( ! empty( $question['question-ttl'] ) || ! empty( $question['question-img'] ) || ! empty( $question['question-answer'] ) ) {
      $has_question = true;
      break;
    }
  }
}
?>
<?php if ( $has_question ) : ?>
<section class = "p-staff__question l-content--middle">
      <?php foreach ( $questions as $question ) :?>
        <?php if ( empty( $question['question-ttl'] ) && empty( $question['question-img'] ) && empty( $question['question-answer'] ) ) {
          continue;
        } ?>
        <div class = "p-staff__question__content">
          <div class = "p-staff__question__ttlWrap">
            <p>
              <?php if ( ! empty( $question['question-ttl'] ) ) :?>
              <span class = "marker p-staff__question__ttl--another"><?php echo esc_html( $question['question-ttl'] );?></span>
              <?php endif; ?>
            </p>
          </div>
          <div class = "p-staff__question__right">
            <?php if ( ! empty( $question['question-img'] ) ) :?>
              <figure class = "p-staff__question__imgWrap">
                <img src = "<?php echo esc_url( $question['question-img'] );?>"class = "p-staff__question__img" alt = "質問画像">
              </figure>
            <?php endif; ?>
            <?php if ( ! empty( $question['question-answer'] ) ) :?>
            <p class = "p-staff__question__txt">
              <?php echo wp_kses_post( $question['question-answer'] );?>
            </p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
</section>
<?php endif; ?>

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
  
  <ul class = "c-cardList">
    <?php
    $args = array(
    'post_type'      => 'staff',
    'posts_per_page' => 3,
    'order'          => 'ASC',
    'post__not_in'   => array( $local_post_id ),
    );?>
    <?php $staff_loop = new WP_Query( $args );?>
    <?php if ( $staff_loop->have_posts() ) : ?>
      <?php while ( $staff_loop->have_posts() ) :
        $staff_loop->the_post();?>
        <li class ="c-cardList__item">
          <a href = "<?php the_permalink(); ?>">
            <figure class = "c-cardList__imgWrap">
              <?php $staff_img = get_field( 'staff-img' ); ?>
              <?php if ( $staff_img ) : ?>
              <img src="<?php echo esc_url( $staff_img ); ?>" alt="スタッフイメージ" class ="p-staff__img">
              <?php endif; ?>
            </figure>
            <?php $tags = get_the_terms(
                get_the_ID(),
                'department',
                [
                  'hide_empty' => false,
                  'parent'     => 0,
                  'orderby'    => 'id',
                  'order'      => 'ASC',
                ]
            );?>

            <?php if ( $tags && ! is_wp_error( $tags ) ) :?>
              <?php foreach ( $tags as $local_tag ) :?>
                <span class = "c-id"><?php echo esc_html( $local_tag->name ); ?></span>
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

<?php get_template_part( 'template-parts/recruit-part' ); ?>
<?php get_template_part( 'template-parts/common' ); ?>
<?php get_template_part( 'template-parts/common-link' ); ?>
</main>
<?php get_footer(); ?>