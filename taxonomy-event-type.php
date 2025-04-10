<?php 
// Template Name: event-type
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
  $taxonomy = 'area';
  $tag = 'event-type';
  $mainQueryTerm = get_queried_object(); // taxonomy-$taxonomy.php テンプレートファイル内で現在のメインクエリのターム情報を取得できます。
  $mainQueryTermName = $mainQueryTerm -> name;
  $mainQueryTermSlug = $mainQueryTerm -> slug;
?>

<?php
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
// 現在のページの遷移元のURLを取得する
$lootUrl = htmlspecialchars($referer);
$archiveUrl = home_url('xo_event/');
$tagArchiveUrl = home_url('event-type/' . $mainQueryTermSlug . '/');

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
if (isset($segments[0]) && $segments[0] === 'area' && isset($segments[1])) {
  $lootSlug = $segments[1];
  // $lootSlug をセッションに保存する
  $_SESSION['lootSlug'] = $lootSlug;
} elseif ($lootUrl === $archiveUrl) {
  // $lootSlug を初期化または空にする
  $lootSlug = '';
  unset($_SESSION['lootSlug']);
} elseif (strpos($lootUrl, 'event-type') !== false) {
  // この部分で何も処理しないことで、セッションに保存された $lootSlug をそのまま使用
}

?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


if ($lootUrl === $archiveUrl) {
  // $lootUrl が $archiveUrl と同じ場合の処理
  $event = array(
      'post_type' => 'xo_event',
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
    $event = array(
        'post_type' => 'xo_event',
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
                'taxonomy' => 'area',
                'field' => 'slug',
                'terms' => $lootSlug,
            ),
        ),
    );
} else {
    // デフォルトのクエリなど、$lootSlug が空の場合の処理
    $event = array(
        'post_type' => 'xo_event',
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
  イベント情報
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
        <a href = "<?php echo esc_url (get_post_type_archive_link('xo_event')); ?>">
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
          <a href = "<?php echo esc_url (get_post_type_archive_link('xo_event')); ?>">
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
          <a href = "<?php echo esc_url (get_post_type_archive_link('xo_event')); ?>">
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
  

  <?php $eventTags = get_terms($tag, 
      [
      'hide_empty' => false,
      'parent' =>0,
      'orderby'=>'id',
      'order'=>'DESC',
      ]
    );?>


  
    <ul class = "c-tag__list l-content--large">
      
    <?php if($lootSlug):?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url(home_url('area/' . $lootSlug)); ?>" class = "js-allTab c-tag__list__link">すべて</a>
      </li>
    <?php else:?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url(home_url('xo_event/')); ?>" class = "js-allTab c-tag__list__link">すべて</a>
      </li>
    <?php endif; ?>
      
      <?php foreach($eventTags as $eventTag):?>
        <?php $eventSlug = $eventTag->slug ;?>
          <li class = "c-tag__list__item">
            <a href = "<?php echo get_term_link($eventSlug,$tag); ?>" class = "js-tab c-tag__list__link <?php if ($eventSlug === $mainQueryTermSlug):?>u-currentTab<?php endif; ?>">
              <?php echo esc_html($eventTag->name); ?>
            </a>
          </li>
      <?php endforeach;?>
    </ul>

 

    

  <section class = "l-content">
    <?php $eventLoop = new WP_Query($event);?>
      <?php if ($eventLoop->have_posts()): ?>
        <ul class = "p-content__list js-allswitch">
          <?php while ($eventLoop->have_posts()) : $eventLoop->the_post();?>
            <?php get_template_part('event-loop','event'); ?>
          <?php endwhile;?>
        </ul>
      <?php endif;
      wp_reset_postdata();?>

    <?php if ($eventLoop->found_posts > $event['posts_per_page']):?>
      <div class = "u-mb50">
        <?php the_posts_pagination(); ?>
      </div>
    <?php endif; ?>

  </section>
  <?php get_template_part('xo-event','calendar'); ?>
</main>
<?php get_footer(); ?>