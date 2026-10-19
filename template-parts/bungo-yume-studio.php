<?php
/**
 * Bungo Yume Studio section part.
 *
 * @package Wazeka
 */
?>

<?php
$heading_tag = $args['heading_tag'] ?? 'h2';
?>

<section class="p-bungoYumeStudio u-mb100">
  <div class="c-title__head">
    <<?php echo esc_attr( $heading_tag ); ?> class="c-title--sectionLine">
      BUNGO_YUME_STUDIO
    </<?php echo esc_attr( $heading_tag ); ?>>
    <div>
      <p class="c-title--orangeLine u-mb50"><span class="marker">
          豊後夢工房について</span>
      </p>
    </div>
  </div>
  <ul class="p-bungoYumeStudio__list">
    <li class="p-bungoYumeStudio__list__item">
      <p class="p-bungoYumeStudio__list__lead">
        <span class="p-bungoYumeStudio__list__emphasis">創業</span>から<br>
        変わらない<br>
        <span class="p-bungoYumeStudio__list__emphasis">私たち</span>の思い<br>
      </p>
      <div class="p-bungoYumeStudio__list__media">
        <img loading="lazy" width="108" height="117" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/bungo_ladder.webp' ); ?>" alt="">
      </div>
      <nav aria-label="PHILOSOPHY 関連リンク">
        <ul class="p-bungoYumeStudio__list__nav">
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/concept' ) ); ?>">豊後夢工房の思い</a>
          </li>
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/staff' ) ); ?>">ゆめ空間づくりスタッフ</a>
          </li>
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/about' ) ); ?>">会社概要</a>
          </li>
        </ul>
      </nav>
      <div class="p-bungoYumeStudio__list__tag">PHILOSOPHY</div>
      <div class="p-bungoYumeStudio__list__number">01</div>
    </li>
    <li class="p-bungoYumeStudio__list__item p-bungoYumeStudio__list__item--shift">
      <p class="p-bungoYumeStudio__list__lead">
        <span class="p-bungoYumeStudio__list__emphasis">快適ゆめ空間</span><br>
        をつくる<span class="p-bungoYumeStudio__list__emphasis">3</span>つの<br>
        こだわり
      </p>
      <div class="p-bungoYumeStudio__list__media">
        <img loading="lazy" width="148" height="141" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/bungo_sp.webp' ); ?>" alt="">
      </div>
      <nav aria-label="SERVICE 関連リンク">
        <ul class="p-bungoYumeStudio__list__nav">
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/quality' ) ); ?>">品質へのこだわり</a>
          </li>
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/cost' ) ); ?>">コストへのこだわり</a>
          </li>
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/design' ) ); ?>">デザインへのこだわり</a>
          </li>
        </ul>
      </nav>
      <div class="p-bungoYumeStudio__list__tag">SERVICE</div>
      <div class="p-bungoYumeStudio__list__number">02</div>
    </li>
    <li class="p-bungoYumeStudio__list__item">
      <p class="p-bungoYumeStudio__list__lead">
        <span class="p-bungoYumeStudio__list__emphasis">豊後夢工房</span><br>
        家づくり<br>
        <span class="p-bungoYumeStudio__list__emphasis">サポート</span>
      </p>
      <div class="p-bungoYumeStudio__list__media">
        <img loading="lazy" width="145" height="124" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/bungo_pen.webp' ); ?>" alt="">
      </div>
      <nav aria-label="SUPPORT 関連リンク">
        <ul class="p-bungoYumeStudio__list__nav">
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/after-support' ) ); ?>">安心の保証制度</a>
          </li>
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/flow' ) ); ?>">いえづくりのステップ</a>
          </li>
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/faq' ) ); ?>">よくあるご質問</a>
          </li>
        </ul>
      </nav>
      <div class="p-bungoYumeStudio__list__tag">SUPPORT</div>
      <div class="p-bungoYumeStudio__list__number">03</div>
    </li>
    <li class="p-bungoYumeStudio__list__item p-bungoYumeStudio__list__item--shift">
      <p class="p-bungoYumeStudio__list__lead">
        <span class="p-bungoYumeStudio__list__emphasis">住まいの</span><br>
        メンテナンス
      </p>
      <div class="p-bungoYumeStudio__list__media">
        <img loading="lazy" width="129" height="136" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/bungo_drill.webp' ); ?>" alt="">
      </div>
      <nav aria-label="maintenance 関連リンク">
        <ul class="p-bungoYumeStudio__list__nav">
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/maintenance' ) ); ?>">アフターメンテナンス</a>
          </li>
          <li class="p-bungoYumeStudio__list__navItem">
            <a class="p-bungoYumeStudio__list__navLink" href="<?php echo esc_url( home_url( '/renovation' ) ); ?>">ゆめ再生リフォーム</a>
          </li>
        </ul>
      </nav>
      <div class="p-bungoYumeStudio__list__tag p-bungoYumeStudio__list__tag--maintenance">maintenance</div>
      <div class="p-bungoYumeStudio__list__number">04</div>
    </li>
  </ul>
</section>
