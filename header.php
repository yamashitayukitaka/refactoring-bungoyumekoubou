<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KR6HSXJ5');</script>
<!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow" />

  <!-- ファビコン設定  -->
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/logo_icon.webp">
  <!-- カスタム検索画像 -->
  <meta name="thumbnail" content="https://bungoyumekoubou.jp/wp-content/themes/wazeka/dist/img/common/logo.webp" />
  <!-- Webクリップアイコン設定 -->
  <link rel="apple-touch-icon" size="152×152" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/logo_icon.webp">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Googleサーチコンソール -->
  <meta name="google-site-verification" content="3uvVH3KZ3KhQVHtzFvXxDVJWYiOfdNQtAJlkbIZyyNc" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6X3Q3S19LM"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6X3Q3S19LM');
  </script>
  <?php wp_head(); ?>
  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '515122124340367');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=515122124340367&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</head>




<body <?php body_class(); ?>>
<!-- Google Tag Manager WINKMARK (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KR6HSXJ5" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
  <header id="js-measure" class="l-header">

    <div class="l-header__content">

      <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo">
        <h1>
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/logo.webp" />
        </h1>
      </a>

      <div class="l-header__content__innerWrap">
        <div class="l-header__content__innerTop">
          <div class="l-header__info u-none__mobile--md">
            <a class="l-header__tel" href="tel:+097-594-1481">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/tel.webp" alt="tel" class="l-header__tel__img">
              <span class = "l-header__tel__num u-none__mobile--xxl">097-594-1481<span>
            </a>
            <div class="l-header__time u-none__mobile--xxl">
              <dl class="l-header__dl">
                <dt class="l-header__dt">受付時間/</dt>
                <dd class="l-header__dd">9:00～18:00</dd>
              </dl>
              <dl class="l-header__dl">
                <dt class="l-header__dt">定休日/</dt>
                <dd class="l-header__dd">火曜日・水曜日</dd>
              </dl>
            </div>
          </div>
          <ul class="l-header__sns__list u-none__mobile--md">
            <li class="l-header__sns__YouTube"><a href = "https://www.youtube.com/@%E8%B1%8A%E5%BE%8C%E5%A4%A2%E5%B7%A5%E6%88%BF"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/youtube.webp" alt="youtube"></a></li>
            <li class="l-header__sns__insta"><a href="https://www.instagram.com/bungoyumekoubou/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/instagram.webp" alt="insta"></a></li>
            <li class="l-header__sns__line"><a href="https://lin.ee/86brEGxs"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/h-line.webp" alt="友だち追加"></a></li>
          </ul>
          <nav class="c-navigation c-navigation--top">
            <ul class="c-navigation__list--top js-navList">
              <li class="c-navigation__list__item--top">
                <a href="<?php echo esc_url(home_url("/")); ?>property" class="c-navigation__list__link--top u-none__mobile--xl">土地・物件情報</a>
                <a href="<?php echo esc_url(home_url("/")); ?>model-house" class="c-navigation__list__link--top u-none__pc--xl">モデルハウス</a>
              </li>
              <li class="c-navigation__list__item--top">
                <a href="<?php echo esc_url(home_url("/")); ?>catalog" class="c-navigation__list__link--top u-none__mobile--xl">カタログ請求</a>
                <a href="<?php echo esc_url(home_url("/")); ?>property" class="c-navigation__list__link--top u-none__pc--xl">土地・物件情報</a>
              </li>
              <li class="c-navigation__list__item--top">
                <a href="<?php echo esc_url(home_url('/')); ?>xo_event" class="c-navigation__list__link--top">見学予約</a>
              </li>
            </ul>
          </nav>
        </div>

        <?php if ( is_singular('xo_event') ) :?>
          <style>
            @media all and (max-width: 1200px) {
              .c-navigation--top{
                display:none;
              }
            }
          </style>
        <?php endif; ?>


        <nav class="c-navigation u-none__mobile--xxl">
          <ul class="c-navigation__list">

            <li class="c-navigation__list__item js-hover">
              <a href="<?php echo esc_url(home_url('')); ?>">ホーム</a>
            </li>

            <li class="c-navigation__list__item js-hover">
              <a href="#">豊後夢工房の家づくり</a>
              <ul class="c-navigation__child__list js-toggle">
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>concept" class="c-navigation__child__link">
                    わたしたちの思い
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img8.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>quality" class="c-navigation__child__link">
                    品質へのこだわり
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img6.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>cost" class="c-navigation__child__link">コストへのこだわり
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img7.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>design" class="c-navigation__child__link">デザインへのこだわり
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img9.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>staff" class="c-navigation__child__link">ゆめ空間スタッフ
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/page.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>about" class="c-navigation__child__link">会社概要
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img1.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
              </ul>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a href="#">サービスラインナップ</a>
              <ul class="c-navigation__child__list js-toggle">
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>rireve" class="c-navigation__child__link">
                    リレーヴ
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img4.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>heig" class="c-navigation__child__link">
                    ヘイグ
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/heig_img.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>irohaie" class="c-navigation__child__link">
                    いろはいえ
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/irohaie_img.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
              </ul>
            </li>

            <li class="c-navigation__list__item js-hover">
              <a href="<?php echo esc_url(home_url("/")); ?>works" class="c-navigation__list__link">
                施工事例
              </a>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a href="<?php echo esc_url(home_url("/")); ?>model-house" class="c-navigation__list__link">
                モデルハウス
              </a>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a href="<?php echo esc_url(home_url("/")); ?>xo_event" class="c-navigation__list__link">
                イベント
              </a>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a href="#">サポート</a>
              <ul class="c-navigation__child__list js-toggle">
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>after-support" class="c-navigation__child__link">
                    安心の保証制度
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img7.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>flow" class="c-navigation__child__link">
                    家づくりのながれ
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img2.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>faq" class="c-navigation__child__link">
                    よくある質問
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img5.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
              </ul>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a class="c-navigation__list__link">
                メンテナンス
              </a>
              <ul class="c-navigation__child__list js-toggle">
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>maintenance" class="c-navigation__child__link">アフターメンテナンス
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
                <li class="c-navigation__child__item">
                  <a href="<?php echo esc_url(home_url("/")); ?>renovation" class="c-navigation__child__link">ゆめリフォーム
                    <figure class="c-navigation__child__imgWrap">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img3.webp" class="c-navigation__child__img" alt="ナビ画像">
                    </figure>
                  </a>
                </li>
              </ul>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a href="<?php echo esc_url(home_url("/")); ?>recruit" class="c-navigation__list__link">
                採用情報
              </a>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a href="<?php echo esc_url(home_url("/")); ?>blog" class="c-navigation__list__link">
                ブログ
              </a>
            </li>
            <li class="c-navigation__list__item js-hover">
              <a href="<?php echo esc_url(home_url("/")); ?>contact" class="c-navigation__list__link">
                お問い合わせ
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div id="js-openHamburger" class="p-hamburger__button u-none__pc--xxl">
        <span class="p-hamburger__button__line"></span>
        <span class="p-hamburger__button__line"></span>
        <span class="p-hamburger__button__line"></span>
      </div>
    </div>


    <div id="js-hamburger" class="p-hamburger">
      <nav class="p-hamburger__nav" id="js-hamburger__nav">

        <ul class="p-hamburger__nav__list">
          <li class="p-hamburger__nav__item">
            <a href="<?php echo esc_url(home_url()); ?>" class="p-hamburger__nav__link">ホーム</a>
          </li>
          <li class="p-hamburger__nav__item">
            <a class="p-hamburger__nav__link js-open">豊後夢工房の家づくり</a>
            <ul class="p-hamburger__child__list js-slide">
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>concept" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">わたしたちの思い</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img8.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>quality" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">品質へのこだわり</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img6.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>cost" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">コストへのこだわり</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img7.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>design" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">デザインへのこだわり</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img9.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>staff" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">ゆめ空間スタッフ</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/page.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>about" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">会社概要</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img1.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
            </ul>
          </li>
          <li class="p-hamburger__nav__item">
            <a class="p-hamburger__nav__link js-open">サービスラインナップ</a>
            <ul class="p-hamburger__child__list js-slide">
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>rireve" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">リレーヴ</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img4.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>heig" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">ヘイグ</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/heig_img.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>irohaie" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">いろはいえ</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/irohaie_img.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
            </ul>
          </li>
          <li class="p-hamburger__nav__item">
            <a href="<?php echo esc_url(home_url("/")); ?>works" class="p-hamburger__nav__link">施工事例</a>
          </li>
          <li class="p-hamburger__nav__item">
            <a href="<?php echo esc_url(home_url("/")); ?>model-house" class="p-hamburger__nav__link">モデルハウス</a>
          </li>
          <li class="p-hamburger__nav__item">
            <a href="<?php echo esc_url(home_url('/')); ?>xo_event" class="p-hamburger__nav__link">イベント</a>
          </li>
          <li class="p-hamburger__nav__item">
            <a class="p-hamburger__nav__link js-open">サポート</a>
            <ul class="p-hamburger__child__list js-slide">
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>after-support" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">安心の保証制度</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img7.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>flow" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">家づくりのながれ</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img2.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>faq" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">よくある質問</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img5.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
            </ul>
          </li>
          <li class="p-hamburger__nav__item">
            <a class="p-hamburger__nav__link js-open">メンテナンス</a>
            <ul class="p-hamburger__child__list js-slide">
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>maintenance" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">アフターメンテナンス</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
              <li class="p-hamburger__child__item">
                <a href="<?php echo esc_url(home_url("/")); ?>renovation" class="p-hamburger__child__link">
                  <p class="p-hamburger__child__txt">ゆめリフォーム</p>
                  <figure class="p-hamburger__child__imgWrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/header_img3.webp" class="c-navigation__child__img" alt="ナビ画像">
                  </figure>
                </a>
              </li>
            </ul>
          </li>
          <li class="p-hamburger__nav__item">
            <a href="<?php echo esc_url(home_url('/')); ?>recruit" class="p-hamburger__nav__link">採用情報</a>
          </li>
          <li class="p-hamburger__nav__item">
            <a href="<?php echo esc_url(home_url('/')); ?>blog" class="p-hamburger__nav__link">ブログ</a>
          </li>
          <li class="p-hamburger__nav__item">
            <a href="<?php echo esc_url(home_url('/')); ?>contact" class="p-hamburger__nav__link">お問い合わせ</a>
          </li>
          <li class="l-header__sns__list--hamTop">
            <div class="l-header__info">
              <a class="l-header__tel" href="tel:+097-594-1481">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/tel.webp" alt="tel" class="l-header__tel__img">
                097-594-1481
              </a>
              <div class="u-flex">
                <dl class="l-header__dl">
                  <dt class="l-header__dt">受付時間/</dt>
                  <dd class="l-header__dd">9:00～18:00</dd>
                </dl>
                <dl class="l-header__dl">
                  <dt class="l-header__dt">定休日/</dt>
                  <dd class="l-header__dd">火曜日・水曜日</dd>
                </dl>
              </div>
            </div>
          </li>
          <li class="p-hamburger__nav__item--bottom u-none__pc--xl">
            <ul class="c-navigation__list--bottom">
              <li class="c-navigation__list__item--top">
                <a href="<?php echo esc_url(home_url("/")); ?>model-house" class="c-navigation__list__link--top">モデルハウス</a>
              </li>
              <li class="c-navigation__list__item--top">
                <a href="<?php echo esc_url(home_url("/")); ?>property" class="c-navigation__list__link--top">土地・物件情報</a>
              </li>
              <li class="c-navigation__list__item--top">
                <a href="<?php echo esc_url(home_url('/')); ?>xo_event" class="c-navigation__list__link--top">見学予約</a>
              </li>
            </ul>
          </li>

          <li>
            <ul class="l-header__sns__list--ham u-none__pc--md">
              <li class="l-header__sns__YouTube"><a href = "https://www.youtube.com/@%E8%B1%8A%E5%BE%8C%E5%A4%A2%E5%B7%A5%E6%88%BF"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/youtube.webp" alt="youtube"></a></li>
              <li class="l-header__sns__insta"><a href="https://www.instagram.com/bungoyumekoubou/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/instagram.webp" alt="insta"></a></li>
              <li class="l-header__sns__line"><a href="https://lin.ee/86brEGxs"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/h-line.webp" alt="友だち追加"></a></li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>

  </header>