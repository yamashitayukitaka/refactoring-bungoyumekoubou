<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

// セッション開始
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

get_header(); ?>

<!--if (!session_id()) { session_start(); } と if (session_status() === PHP_SESSION_NONE) { session_start(); } の違いは、セッションの状態を確認する方法にあります。
1. if (!session_id()) { session_start(); }
これは session_id() を使って、セッションIDが既に生成されているかを確認します。
セッションIDが存在しない場合、新しいセッションを開始します。
制約: セッションが既に開始されていても、セッションIDが検出されない場合（例えば、セッション管理がクッキーやヘッダーで正しく処理されていない場合など）、セッションの持続が正しく処理されない可能性があります。
2. if (session_status() === PHP_SESSION_NONE) { session_start(); }
session_status() はセッションの状態を直接確認し、セッションがアクティブか無効か、まだ開始されていないかを返します。
PHP_SESSION_NONE をチェックすることで、セッションがまだ開始されていない場合のみ新しいセッションを開始します。
利点: この方法は、セッションがまだ開始されていない場合にのみ開始されるので、より確実にセッションのライフサイクルを管理できます。
なぜこれがあなたのケースでうまくいくのか:
複数のリクエストやヘッダーが関与する場面（例えば taxonomy-works-type.php と taxonomy-works-tag.php の間の遷移）では、session_status() を使うことで、セッションが一度だけ正しく開始され、セッションのリセットやデータの不一致が避けられます。そのため、ページ間の遷移時に $lootSlug が保持され、意図通りに動作するのです。
-->


<?php 
  $taxonomy = 'works-type';
  $tag = 'works-tag';
  $mainQueryTerm = get_queried_object(); // taxonomy-$taxonomy.php テンプレートファイル内で現在のメインクエリのターム情報を取得できます。
  $mainQueryTermName = $mainQueryTerm -> name;
  $mainQueryTermSlug = $mainQueryTerm -> slug;
?>

<?php
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
// 現在のページの遷移元のURLを取得する
$lootUrl = htmlspecialchars($referer);
$archiveUrl = home_url('works/');
$tagArchiveUrl = home_url('works-tag/' . $mainQueryTermSlug . '/');

// $lootSlug をセッションから取得する
if (isset($_SESSION['lootSlug'])) {
    $lootSlug = $_SESSION['lootSlug'];
} else {
    $lootSlug = '';
}

// URLのパース
$parsed_url = parse_url($lootUrl);
$path = isset($parsed_url['path']) ? $parsed_url['path'] : '';
$segments = explode('/', trim($path, '/'));

// $segments のチェックと $lootSlug の設定
if (isset($segments[0]) && $segments[0] === 'works-type' && isset($segments[1])) {
  $lootSlug = $segments[1];
  // $lootSlug をセッションに保存する
  $_SESSION['lootSlug'] = $lootSlug;
} elseif ($lootUrl === $archiveUrl) {
  // $lootSlug を初期化または空にする
  $lootSlug = '';
  unset($_SESSION['lootSlug']);
} elseif (strpos($lootUrl, 'works-tag') !== false) {
  // この部分で何も処理しないことで、セッションに保存された $lootSlug をそのまま使用
}

?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// クエリの設定
if ($lootUrl === $archiveUrl) {
    // $lootUrl が $archiveUrl と同じ場合の処理
    $works = array(
        'post_type' => 'works',
        'posts_per_page' =>6,
        'paged' => $paged,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => $tag,
                'field' => 'slug',
                'terms' => $mainQueryTermSlug,
            ),
        ),
    );
} elseif ($lootSlug) {
    // $lootSlug がセットされている場合の処理
    $works = array(
        'post_type' => 'works',
        'posts_per_page' =>6,
        'paged' => $paged,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => $tag,
                'field' => 'slug',
                'terms' => $mainQueryTermSlug,
            ),
            array(
                'taxonomy' => 'works-type',
                'field' => 'slug',
                'terms' => $lootSlug,
            ),
        ),
    );
} else {
    // デフォルトのクエリなど、$lootSlug が空の場合の処理
    $works = array(
        'post_type' => 'works',
        'posts_per_page' =>6,
        'paged' => $paged,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => $tag,
                'field' => 'slug',
                'terms' => $mainQueryTermSlug,
            ),
        ),
    );
}
?>
<main>

<h2 class = "c-title--section u-mb50">
  施工事例
</h2>

<?php $terms = get_terms($taxonomy, 
    [
    'hide_empty' => false,
    'parent' =>0,
    'orderby'=>'id',
    'order'=>'DESC',
    ]
  );?>

<?php if ($lootUrl === $archiveUrl):?>

<ul class = "c-term__list">
  <li class = "c-term__list__item u-current">
    <a href = "<?php echo esc_url (get_post_type_archive_link('works')); ?>">
      すべて
    </a>
  </li>
  <?php foreach($terms as $term):?>
    <?php $termSlug = $term -> slug;?>
    <li class = "c-term__list__item">
      <a href = "<?php echo esc_url (get_term_link($term)); ?>">
        <?php echo esc_html($term->name); ?>
      </a>
    </li>
  <?php endforeach;?>
</ul>

<?php elseif ($lootSlug): ?>

  <ul class = "c-term__list">
    <li class = "c-term__list__item">
      <a href = "<?php echo esc_url (get_post_type_archive_link('works')); ?>">
        すべて
      </a>
    </li>
    <?php foreach($terms as $term):?>
      <?php $termSlug = $term -> slug;?>
        <li class = "c-term__list__item <?php if ($lootSlug === $termSlug):?>u-current<?php endif; ?>">
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
    <?php endforeach;?>
  </ul>

<?php else:?>

  <ul class = "c-term__list">
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url (get_post_type_archive_link('works')); ?>">
        すべて
      </a>
    </li>
    <?php foreach($terms as $term):?>
      <?php $termSlug = $term -> slug;?>
        <li class = "c-term__list__item">
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
    <?php endforeach;?>
  </ul>

<?php endif; ?>



  <?php $worksTags = get_terms($tag, 
      [
      'hide_empty' => false,
      'parent' =>0,
      'orderby'=>'id',
      'order'=>'ASC',
      ]
    );?>

  <?php if($worksTags):?>

    <ul class = "c-tag__list l-content--large">
      
      <?php if($lootSlug):?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url(home_url('works-type/' . $lootSlug)); ?>" class = "js-allTab c-tag__list__link">すべて</a>
        </li>
      <?php else: ?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url(home_url('works/')); ?>" class = "js-allTab c-tag__list__link">すべて</a>
        </li>
      <?php endif; ?>
      
      <?php foreach($worksTags as $worksTag):?>
        <?php $worksSlug = $worksTag->slug ;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo get_term_link($worksSlug,$tag); ?>" class = "js-tab c-tag__list__link <?php if ($worksSlug === $mainQueryTermSlug):?>u-currentTab<?php endif; ?>">
            <?php echo esc_html($worksTag->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>

  <?php endif; ?>

  <section class = "l-content">
    <?php $worksLoop = new WP_Query($works);?>
      <?php if ($worksLoop->have_posts()): ?>
        <ul class = "p-content__list js-allswitch">
          <?php while ($worksLoop->have_posts()) : $worksLoop->the_post();?>
            <?php get_template_part('works-loop','works'); ?>
          <?php endwhile;?>
        </ul>
      <?php endif;
      wp_reset_postdata();?>
    
      <?php if ($worksLoop->found_posts > $works['posts_per_page']):?>
        <div class = "u-mb50">
          <?php the_posts_pagination(); ?>
        </div>
      <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>