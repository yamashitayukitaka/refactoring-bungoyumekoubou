<?php
// Template Name: about
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>

<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        会社概要
      </h2>
      <p class="c-pageMv__heading__subTitle">
        ABOUT US
      </p>
    </div>
    <?php $mv = get_field('mv-page'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <section class="l-content--innerNarrow u-mb100">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine">
        MESSAGE
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">
            これから<span class="u-orange">家</span>を建てるみなさんへ</span>
        </p>
      </div>
    </div>
    <div class="p-about__message">
      <figure class="p-about__message__imgWrap">
        <img src="<?php echo esc_url(IMG_URL . '/recruit/president.png'); ?>" class="p-about__message__img" alt="代表取締役社長 永井 賢次">
      </figure>
      <p class="p-about__message__txt">
        豊後夢工房が考える本当によい家とは、そこに暮らす人の心と体を癒やし、家族との絆を育み、子育てをサポートする住まいだと考えます。 高品質で高性能、ランニングコストが低い家も今では当たり前。私たちはその全てを実現する家づくりを目指しています。 例えば、最新の太陽光発電システムと高気密・高断熱の設計によって、月々の住宅ローン返済がアパートの家賃よりも安くなる家を提供。 大手メーカーにも負けない開発力と技術力で、心と家計にゆとりをもたらす住まいを実現します。 豊後夢工房なら、自由設計のメリットを最大限に活かし、あなたの予算やライフスタイル、将来のプランにぴったりな理想の家を提供できます。心地よさと家族の絆を大切にする住まいを、わたしたちと一緒に実現しましょう。
      </p>
    </div>
    <dl>
      <dt class="p-about__message__bold">株式会社 豊後夢工房</dt>
      <dd class="p-about__message__bold">代表取締役社長<span class="p-about__message__name">　永井 賢次</span></dd>
    </dl>
  </section>

  <?php get_template_part('template-parts/staff-loop'); ?>

  <div class="u-center u-mb150">
    <a href="<?php echo esc_url(home_url('staff')); ?>" class="c-button--outline">
      一覧を見る
    </a>
  </div>

  <section class="l-content--innerNarrow u-mb100">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine">
        OUTLINE
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50"><span class="marker">会社概要</span></p>
      </div>
    </div>
    <table class="c-table c-table--narrow">
      <tbody>
        <tr class="c-table__tr">
          <th class="c-table__th">会社名</th>
          <td class="c-table__td">株式会社 豊後夢工房</td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">所在地</th>
          <td class="c-table__td">〒870-0245 <br>
            大分県大分市大在北4丁目7番31号
          </td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">代表者</th>
          <td class="c-table__td">代表取締役社長 永井 賢次 </td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">お問い合わせ先</th>
          <td class="c-table__td">TEL.097-594-1481 <br>
            FAX.097-594-1439 <br>
            専用フォームからのお問い合わせ
          </td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">定休日</th>
          <td class="c-table__td">火曜日・水曜日・祝日<br>
            ※展示場は営業しております</td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">創業</th>
          <td class="c-table__td">平成10年（1998）9月7日</td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">資本金</th>
          <td class="c-table__td">2,500万円 </td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">取引銀行</th>
          <td class="c-table__td">大分信用金庫高城支店／豊和銀行大在支店／大分銀行大在支店
          </td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">事業内容</th>
          <td class="c-table__td">
            建築工事<br>
            土木工事<br>
            リフォーム工事<br>
            電気工事<br>
            水道工事<br>
            通信工事<br>
            建築工事<br>
            土木工事の企画・設計<br>
            住宅販売<br>
            分譲販売及び不動産の販売<br>
            賃貸・仲介斡旋<br>
            資産運用プランニング業務<br>
            住宅ローン事務代行業務<br>
            地質調査<br>
            損害保険代理業</td>
          </td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">建設業登録</th>
          <td class="c-table__td">大分県知事登録（般-2）12417号</td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">宅建業登録</th>
          <td class="c-table__td">大分県知事（5）第2655号</td>
        </tr>
        <tr class="c-table__tr">
          <th class="c-table__th">設計事務所登録</th>
          <td class="c-table__td">一級建築士事務所 大分県知事 第21P-13776号
          </td>
        </tr>
      </tbody>
    </table>
  </section>
  <?php get_template_part('template-parts/company', 'history'); ?>

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
    $about_corporate_standards = [
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
      <?php foreach ($about_corporate_standards as $i => $qa) : ?>
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



  <?php get_template_part('template-parts/recruit-part'); ?>

  <?php get_template_part('template-parts/common'); ?>

  <?php get_template_part('template-parts/common-footer'); ?>

</main>

<?php get_footer(); ?>