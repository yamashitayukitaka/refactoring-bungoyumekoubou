<?php
// Template Name: recruit
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        採用情報
      </h2>
      <p class="c-pageMv__heading__subTitle">
        RECRUIT
      </p>
    </div>
    <?php $mv = get_field('mv-recruit-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <section class="l-content--middle u-mb100">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine">
        MESSAGE
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="u-orange">代表</span>メッセージ
        </p>
      </div>
    </div>
    <div class="p-recruit__message">
      <div class="p-recruit__message__photo u-none__pc--sp">
        <figure class="p-recruit__message__figure u-mb40">
          <img src="<?php echo esc_url(IMG_URL . '/recruit/president.png'); ?>" class="p-recruit__message__img" alt="">
        </figure>
        <dl class="p-recruit__message__meta">
          <dt class="p-recruit__message__metaLine">株式会社 豊後夢工房</dt>
          <dd class="p-recruit__message__metaLine">代表取締役社長 永井 賢次</dd>
        </dl>
      </div>
      <div class="p-recruit__message__content">
        <div class="p-recruit__message__lead">
          <p class="c-title--orangeLine"><span class="marker">豊後の地で、<br>
              共に夢を実現する仲間へ</span></p>
          <br><br>
        </div>
        <p class="p-recruit__message__text">
          私たちの会社名「豊後夢工房」には、大分（豊後）の地に暮らす皆さまの夢を形にするという強い思いが込められています。豊後の地に、夢をお届けする工房。それが私たち「豊後夢工房」です。「工房」とは、職人が心を込めて作品を作り上げる場所。その名の通り、私たちは一人ひとりのお客様の個性を大切にし、夢を叶える住まいを丁寧に作り上げることを使命としています。<br>
          <br>
          家づくりは、お客様のこれからの人生において「ゆめ」であり、「終の棲家」として長期的に携わる仕事です。この大切な仕事を通じて、私たちはお客様の夢を実現し、豊かな暮らしを提供したいと考えています。<br>
          <br>
          そのために、私たちが求めるのは「情熱」「愛情」「スピード」を体現し、行動できる人材です。情熱を持って仕事に取り組み、愛情を込めてお客様の夢を形にし、迅速に対応できるスキルを持つ仲間を求めています。<br>
          <br>
          あなたの情熱と愛情、そしてスピードをもって、私たちと一緒に豊後の地で、共に夢を作り上げていきませんか。豊後夢工房で、共に成長し、共に夢を実現しましょう。<br>
          <br>
          皆さまのご応募を心よりお待ちしております。
        </p>
      </div>
      <div class="p-recruit__message__photo u-none__mobile--sp">
        <figure class="p-recruit__message__figure u-mb40">
          <img src="<?php echo esc_url(IMG_URL . '/recruit/president.png'); ?>" class="p-recruit__message__img" alt="">
        </figure>
        <dl class="p-recruit__message__meta">
          <dt class="p-recruit__message__metaLine">株式会社 豊後夢工房</dt>
          <dd class="p-recruit__message__metaLine">代表取締役社長 永井 賢次</dd>
        </dl>
      </div>
    </div>
  </section>

  

  <section class="l-content--middle u-mb200">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine">
        CORPORATE STANDARD
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">社内標準</span>
        </p>
      </div>
    </div>
    <?php
    $recruit_corporate_standards = [
      [
        'question' => '企業理念',
        'answer' => '生活を立て続けること',
      ],
      [
        'question' => 'ミッション',
        'answer' => '「お客様の笑顔が見える住まい」を創り続ける',
      ],
      [
        'question' => 'ビジョン',
        'answer' => 'お客様の子供たちや友人の方々から「豊後夢工房」で家が建てたいと言われるような地域密着の会社を目指していく',
      ],
      [
        'question' => 'バリュー',
        'answer' => '商品を提供する社員も明るく楽しく仕事が出来る環境づくりを行い褒め認め合うteamを形成していく',
      ],
    ];
    ?>
    <ul class="c-accordion c-accordion--full">
      <?php foreach ($recruit_corporate_standards as $i => $qa) : ?>
        <li class="c-accordion__item">
          <button type="button" class="c-accordion__trigger js-accordion">
            <span class="c-accordion__number">
              <?php echo esc_html(sprintf('%02d', $i + 1)); ?>
            </span>
            <?php echo esc_html($qa['question']); ?>
          </button>
          <div class="c-accordion__panel">
            <p class="c-accordion__body">
              <?php echo esc_html($qa['answer']); ?>
            </p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <?php get_template_part('template-parts/company', 'history'); ?>

  <section class="l-content--middle u-mb90">
    <div class="p-recruit__interview">
      <?php
      $recruit_interviews = [
        [
          'title' => '01.入社を決めたきっかけは？',
          'users' => [
            [
              'img' => '/recruit/interview-executive.jpeg',
              'text' => '誘われて入社を決めました。自分を高められると思いトライして正解でした。',
            ],
            [
              'img' => '/recruit/interview-man-glasses.jpeg',
              'text' => '手に職をつけたくて現場監督にチャレンジしてみました。わからないことだらけでしたが、先輩の監督が同行して指導していただいたおかげで、独り立ちまでしっかりサポートしてもらいました。',
            ],
          ],
        ],
        [
          'title' => '02.会社のアピールポイントを教えてください',
          'users' => [
            [
              'img' => '/recruit/interview-career-woman.jpeg',
              'text' => 'スタッフ間の仲がよく、笑いながら仕事を遂行できる環境です！',
            ],
            [
              'img' => '/recruit/interview-executive.jpeg',
              'text' => 'フレンドリーでコミュニケーションが活発な職場環境です。皆の意見が尊重され、やりがいを感じながら業務に取り組めます。',
            ],
          ],
        ],
        [
          'title' => '03.仕事のモチベーションは何ですか',
          'users' => [
            [
              'img' => '/recruit/interview-man-glasses.jpeg',
              'text' => 'お客様との商談の中で、「○○さんで契約します」と言っていただける瞬間です。メーカーとしてではなく、私自身の人格や人柄を評価して選んでもらえることで、自分の成長を実感し、さらにやる気が湧いてきます。',
            ],
            [
              'img' => '/recruit/interview-career-woman.jpeg',
              'text' => '間取りや内装についてなど、お客様と一緒にこれをやりたいあれをやりたいなど打ち合わせをしたことが、形となり完成した時にモチベーションが最大限に高まります。',
            ],
          ],
        ],
        [
          'title' => '04.今までで一番楽しかった、またはやりがいのあった仕事を教えてください',
          'users' => [
            [
              'img' => '/recruit/interview-man-glasses.jpeg',
              'text' => '入居後のお客様の家に遊びに行く際、子供たちの成長や新たにお子様が増えていると幸せな「ゆめ」づくりに貢献できたんだと実感します。',
            ],
            [
              'img' => '/recruit/interview-executive.jpeg',
              'text' => 'お引き渡しの際お礼のお手紙や感謝のお言葉をたくさんいただき、自分の宝物になっています。ご契約からお引き渡し、そしてアフターメンテナンス訪問時にいつも感謝していただけるので、実は毎回お伺いするのが楽しみです。',
            ],
          ],
        ],
      ];
      ?>
      <?php foreach ($recruit_interviews as $interview) : ?>
        <div class="c-title__head">
          <h3 class="c-title--sectionLine">
            INTERVIEW
          </h3>
          <div>
            <p class="c-title--orangeLine u-mb30">
              <?php echo esc_html($interview['title']); ?>
            </p>
          </div>
        </div>
        <div class="p-recruit__interview__list">
          <?php foreach ($interview['users'] as $user) : ?>
            <div class="p-recruit__interview__item u-mb100">
              <figure class="p-recruit__interview__figure">
                <img src="<?php echo esc_url(IMG_URL . $user['img']); ?>" class="p-recruit__interview__img" alt="">
              </figure>
              <p class="p-recruit__interview__text">
                <?php echo esc_html($user['text']); ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="l-content--middle u-mb100 p-recruit__requirements">
    <figure class="p-recruit__requirements__decoration p-recruit__requirements__decoration--top">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/recruit/tree.webp'); ?>" class="p-recruit__requirements__decorationImg" alt="">
    </figure>
    <div class="c-title__head">
      <h3 class="c-title--sectionLine">
        RECRUIT
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          募集要項
        </p>
      </div>
    </div>
    <?php $table = get_field('recruit-app'); ?>
    <?php
    $hasApp = false;
    if ($table) {
      foreach ($table as $row) {
        if (!empty($row['recruit-app-title']) || !empty($row['recruit-app-content'])) {
          $hasApp = true;
          break;
        }
      }
    }
    ?>
    <?php if ($hasApp) : ?>
      <table class="c-table c-table--narrow">
        <tbody>
          <?php foreach ($table as $row) :
            if (empty($row['recruit-app-title']) && empty($row['recruit-app-content'])) {
              continue;
            }
            ?>
            <tr class="c-table__tr">
              <th class="c-table__th">
                <?php if (!empty($row['recruit-app-title'])) : ?>
                  <?php echo esc_html($row['recruit-app-title']); ?>
                <?php endif; ?>
              </th>
              <td class="c-table__td">
                <?php if (!empty($row['recruit-app-content'])) : ?>
                  <?php echo wp_kses_post($row['recruit-app-content']); ?>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else : ?>
      <p class="p-recruit__requirements__empty">
        現在、募集はしておりません。
      </p>
    <?php endif; ?>
    <figure class="p-recruit__requirements__decoration p-recruit__requirements__decoration--bottom">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/recruit/tree.webp'); ?>" class="p-recruit__requirements__decorationImg" alt="">
    </figure>
  </section>

  <?php if ($hasApp) : ?>
    <div class="l-content--middle c-contact u-mb100">
      <p class="c-contact__desc">
        わたしたちと一緒にゆめをつくりませんか？ご応募は以下の応募フォーム<br>
        またはお電話にてお気軽にご連絡ください。
      </p>
      <a href="tel:0975941481" class="c-contact__link">
        <span class="c-contact__linkLabel">応募はこちら</span>
        <p class="c-contact__tel">TEL.　<span class="c-contact__telNumber">097-594-1481</span>
        </p>
      </a>
    </div>

    <section class="l-content">
      <div class="c-title__head">
        <h3 class="c-title--sectionLine">
          APPLICATION
        </h3>
        <div>
          <p class="c-title--orangeLine u-mb50">
            <span class="marker">応募する</span>
          </p>
        </div>
      </div>
      <div class="c-form__wrap">
        <?php echo do_shortcode('[mwform_formkey key="1820"]'); ?>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('template-parts/common-link'); ?>
</main>
<?php get_footer(); ?>