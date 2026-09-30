<?php
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<?php $postType = 'staff'; ?>
<?php $taxonomy = 'department'; ?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        快適ゆめ空間をつくる
        <br><span class="u-orange--mv">スタッフたち</span>
      </h2>
    </div>
    <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/page.webp');"></figure>
  </div>
  <?php
  $postType = 'staff';
  $taxonomy = 'department';
  $terms = get_terms($taxonomy, [
    'hide_empty' => false,
    'parent' => 0,
    'orderby' => 'description',
    'order' => 'ASC',
  ]);
  ?>
  <?php if ($terms && !is_wp_error($terms)) : ?>
    <?php foreach ($terms as $term) : ?>
      <?php $slug = $term->slug; ?>
    <section>
      <h3 class="c-title--section u-mb30">
        <?php echo esc_html($term->name); ?>
      </h3>
      <ul class="p-staff__list l-content">
        <?php
        $staff = [
          'post_type' => $postType,
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'tax_query' => [
            [
              'taxonomy' => $taxonomy,
              'field' => 'slug',
              'terms' => $slug,
            ],
          ],
        ];
        $staffLoop = new WP_Query($staff);
        ?>
        <?php if ($staffLoop->have_posts()) : ?>
          <?php while ($staffLoop->have_posts()) :
            $staffLoop->the_post(); ?>
            <li class="p-staff__list__item">
              <a href="<?php the_permalink(); ?>">
                <figure class="p-staff__img__wrap">
                  <?php $staff_img = get_field('staff-img'); ?>
                  <?php if ($staff_img) : ?>
                  <img src="<?php echo esc_url($staff_img); ?>" alt="スタッフイメージ" class="p-staff__img">
                  <?php endif; ?>
                </figure>
                <p class="p-staff__name">
                  <?php the_title(); ?>
                </p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
        </div>
    </section>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php get_template_part('template-parts/common'); ?>

</main>
<?php get_footer(); ?>