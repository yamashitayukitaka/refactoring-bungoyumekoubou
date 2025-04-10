<?php
// Template Name: about
if (!defined('ABSPATH')) exit;
get_header();
?>

<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        会社概要
      </h2>
      <p class="c-pageMv__subTtl">
        ABOUT US
      </p>
    </div>
    <?php $mv = get_field('mv-page'); ?>
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>

  <section class="l_content_middle_70 u-mb100">
    <div class="c-title__wrap--sectionLine">
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
      <?php $president = get_field('president'); ?>
      <figure class="p-about__message__imgWrap">
        <img src="<?php echo esc_url($president['img']); ?>" class="p-about__message__img">
      </figure>
      <p class="p-about__message__txt">
        <?php echo esc_html($president['txt']); ?>
      </p>
    </div>
    <dl>
      <dt class="p-about__message__bold ">株式会社 豊後夢工房</dt>
      <dd class="p-about__message__bold ">代表取締役社長<span class="rireve_txt">　永井 賢次</span></dd>
    </dl>
  </section>

  <?php get_template_part('staff-loop', 'staff'); ?>

  <div class="u-center u-mb150">
    <a href="<?php echo esc_url(home_url('staff')); ?>" class="c-button--page">
      一覧を見る
    </a>
  </div>

  <section class="l_content_middle_70 u-mb100">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        OUTLINE
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50"><span class="marker">会社概要</span></p>
      </div>
    </div>
    <?php $table = get_field('works-table'); ?>
    <table class="c-table__about">
      <tbody class="c-table__about__tbody">
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">会社名</th>
          <td class="c-table__about__td">株式会社 豊後夢工房</td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">所在地</th>
          <td class="c-table__about__td">〒870-0245 <br>
            大分県大分市大在北4丁目7番31号
          </td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">代表者</th>
          <td class="c-table__about__td">代表取締役社長 永井 賢次 </td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">お問い合わせ先</th>
          <td class="c-table__about__td">TEL.097-594-1481 <br>
            FAX.097-594-1439 <br>
            専用フォームからのお問い合わせ
          </td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">定休日</th>
          <td class="c-table__about__td">火曜日・水曜日・祝日<br>
            ※展示場は営業しております</td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">創業</th>
          <td class="c-table__about__td">平成10年（1998）9月7日</td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">資本金</th>
          <td class="c-table__about__td">2,500万円 </td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">取引銀行</th>
          <td class="c-table__about__td">大分信用金庫高城支店／豊和銀行大在支店／大分銀行大在支店
          </td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">事業内容</th>
          <td class="c-table__about__td">
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
        <!--
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">建設業登録</th>
          <td class="c-table__about__td">
            建築工事
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
        </tr>
        -->
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">建設業登録</th>
          <td class="c-table__about__td">大分県知事登録（般-2）12417号</td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">宅建業登録</th>
          <td class="c-table__about__td">大分県知事（5）第2655号</td>
        </tr>
        <tr class="c-table__about__tr">
          <th class="c-table__about__th">設計事務所登録</th>
          <td class="c-table__about__td">一級建築士事務所 大分県知事 第21P-13776号
          </td>
        </tr>
      </tbody>
    </table>
  </section>
  <section class="u-pt50 u-mb100">
    <!-- <div class="l_content_middle_70">
      <div class="c-title__wrap--sectionLine">
        <h3 class="c-title--sectionLine">
          HISTORY
        </h3>
        <div>
          <p class="c-title--orangeLine u-mb50">
            <span class="u-orange">夢工房</span>の沿革
          </p>
        </div>
      </div>
    </div> -->

    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        HISTORY
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50"><span class="marker">豊後夢工房の沿革</span></p>
      </div>
    </div>

    <div class="body-wrap">
      <div class="pres-timeline" id="this-timeline">
        <!-- 年号・タイトル -->
        <div class="periods-container">
          <!-- 1 -->
          <section class="period-single" period="period1">
            <h4 class="year">1998年　5月</h4>
            <h2 class="title"><span class="marker">豊後夢工房(ぶんごゆめこうぼう)創業</span></h2>
          </section>
          <!-- 2 -->
          <section class="period-single" period="period2">
            <h4 class="year">2007年　9月</h4>
            <h2 class="title"><span class="marker">三蔵奉仕　モデルハウスOPEN</span></h2>
          </section>
          <!-- 3 -->
          <section class="period-single" period="period3">
            <h4 class="year">2011年　10月</h4>
            <h2 class="title"><span class="marker">佐伯市　四季ZENモデルハウスOPEN</span></h2>
          </section>
          <!-- 4 -->
          <section class="period-single" period="period4">
            <h4 class="year">2012年　9月</h4>
            <h2 class="title"><span class="marker">スムスム展示場　三蔵奉仕リモデルOPEN</span></h2>
          </section>
          <!-- 5 -->
          <section class="period-single" period="period5">
            <h4 class="year">2013年　4月</h4>
            <h2 class="title"><span class="marker">
                TOSハウジングメッセ　太陽光発電MAX住宅モデルハウスOPEN</span>
            </h2>
          </section>
          <!-- 6 -->
          <section class="period-single" period="period6">
            <h4 class="year">2014年　3月</h4>
            <h2 class="title"><span class="marker">杵築市　ローン0円住宅モデルハウスOPEN</span></h2>
          </section>
          <!-- 7 -->
          <section class="period-single" period="period7">
            <h4 class="year">2014年　6月</h4>
            <h2 class="title"><span class="marker">佐伯市　ローン0円住宅モデルハウスOPEN</span></h2>
          </section>
          <!-- 8 -->
          <section class="period-single" period="period8">
            <h4 class="year">2015年　11月</h4>
            <h2 class="title"><span class="marker">HEIG和モダン　モデルハウスOPEN</span></h2>
          </section>
          <!-- 9 -->
          <section class="period-single" period="period9">
            <h4 class="year">2015年　11月</h4>
            <h2 class="title"><span class="marker">W断熱住宅　「リレーヴ」販売開始</span></h2>
          </section>
          <!-- 10 -->
          <section class="period-single" period="period10">
            <h4 class="year">2018年</h4>
            <h2 class="title"><span class="marker">リレーヴモデルハウス1号店OPEN</span></h2>
          </section>
          <!-- 11 -->
          <section class="period-single" period="period11">
            <h4 class="year">2018年</h4>
            <h2 class="title"><span class="marker">本社移転　大在にて</span></h2>
          </section>
          <!-- 12 -->
          <section class="period-single" period="period12">
            <h4 class="year">2021年　6月</h4>
            <h2 class="title">
              <span class="marker">リレーヴ　モデルハウス2号OPEN　TOSハウジングメッセ</span>
            </h2>
          </section>
          <!-- 13 -->
          <section class="period-single" period="period13">
            <h4 class="year">2022年</h4>
            <h2 class="title"><span class="marker">工事件数　県内1000件　達成</span></h2>
          </section>
          <!-- 14 -->
          <section class="period-single" period="period14">
            <h4 class="year">2023年　10月</h4>
            <h2 class="title">
              <span class="marker">設計事務所　参會堂　監修　シェリーハウスモデルハウスOPEN</span>
            </h2>
          </section>
          <!-- 15 -->
          <section class="period-single" period="period15">
            <h4 class="year">2024年</h4>
            <h2 class="title"><span class="marker">不動産事業部　開設</span></h2>
          </section>
          <!-- 16 -->
          <section class="period-single" period="period16">
            <h4 class="year">2024年</h4>
            <h2 class="title">
              <span class="marker">安心の定額制住宅「いろはいえ」モデルハウスOPEN予定（大分市坂ノ市）</span>
            </h2>
          </section>
          <div class="btn-back"></div>
          <div class="btn-next"></div>
        </div>

        <!-- 矢印 -->
        <div class="timeline-container">
          <div class="timeline"></div>
          <div class="btn-back">
            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
              <path fill="none" d="M0 0h30v30H0z" />
              <path fill="#D8D8D8" fill-rule="evenodd" d="M11.828 15l7.89-7.89-2.83-2.828L6.283 14.89l.11.11-.11.11L16.89 25.72l2.828-2.83" />
            </svg>
          </div>
          <div class="btn-next">
            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
              <path fill="none" d="M0 0h30v30H0z" />
              <path fill="#D8D8D8" fill-rule="evenodd" d="M18.172 14.718l-7.89-7.89L13.112 4l10.606 10.607-.11.11.11.11-10.608 10.61-2.828-2.83 7.89-7.89" />
            </svg>
          </div>
        </div>

        <div class="cards-container">
          <!-- 1 -->
          <section class="card-single active" period="period1">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/company1.webp" alt="" />
              <p>
                大手ハウスメーカーの営業だった二人を中心に創業しました。<br />
                イシンホーム住宅研究会加盟
              </p>
            </div>
          </section>
          <!-- 2 -->
          <section class="card-single" period="period2">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie1.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 3 -->
          <section class="card-single" period="period3">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/company2.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 4 -->
          <section class="card-single active" period="period4">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/company3.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 5 -->
          <section class="card-single" period="period5">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie2.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 6 -->
          <section class="card-single" period="period6">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie3.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 7 -->
          <section class="card-single active" period="period7">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie4.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 8 -->
          <section class="card-single" period="period8">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie12.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 9 -->
          <section class="card-single" period="period9">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie11.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 10 -->
          <section class="card-single" period="period10">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie7.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 11 -->
          <section class="card-single" period="period11">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie8.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 12 -->
          <section class="card-single" period="period12">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie6.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 13 -->
          <section class="card-single" period="period13">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/company4.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 14 -->
          <section class="card-single" period="period14">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie10.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 15 -->
          <section class="card-single" period="period15">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie1.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
          <!-- 16 -->
          <section class="card-single" period="period16">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/company/movie1.webp" alt="" />
              <!-- <p></p> -->
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section class="faq u-mb200">
    <div class="c-title__wrap--sectionLine">
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
    $qas = get_field('answers');
    for ($i = 0; $i < count($qas); $i++) {
      $question = $qas[$i]['question'];
      $answer = $qas[$i]['answer'];
    ?>
      <button class="accordion">
        <span class="accordion-number">
          <?php echo sprintf("%02d", ($i + 1)); ?>
        </span>
        <?php echo $question; ?>
      </button>
      <div class="panel">
        <p>
          <?php echo $answer; ?>
        </p>
      </div>
    <?php } ?>
  </section>



  <?php get_template_part('recruit-part', 'recruit'); ?>

  <?php include get_template_directory() . '/common.php' ?>

  <?php get_template_part('common-footer', 'common-footer'); ?>

</main>

<?php get_footer(); ?>