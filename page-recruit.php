<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        採用情報
      </h2>
      <p class="c-pageMv__subTtl">
        RECRUIT
      </p>
    </div>
    <?php $mv = get_field('mv-recruit-img'); ?>
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>

  <section class="l-content--middle u-mb100">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        MESSAGE
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="u-orange">代表</span>メッセージ
        </p>
      </div>
    </div>
    <div class="recruit__message">
      <?php $president = get_field('recruit-president'); ?>
      <div class="recruit__message__photo sp">
        <figure class="recruit__message__imgWrap u-mb40">
          <img src="<?php echo esc_url($president['img']); ?>" class="recruit__message__img">
        </figure>
        <dl>
          <dt class="recruit__message__bold">株式会社 豊後夢工房</dt>
          <dd class="recruit__message__bold">代表取締役社長 永井 賢次</dd>
        </dl>
      </div>
      <div class="recruit__message__desc">
        <div class="recruit__message__txt">
          <p class="c-title--orangeLine"><span class="marker">豊後の地で、<br>
              共に夢を実現する仲間へ</span></p>
          <br><br>
        </div>
        <p class="recruit__message__subtxt">
          <?php echo wp_kses_post($president['txt']); ?>
        </p>
      </div>
      <div class="recruit__message__photo pc_tab">
        <figure class="recruit__message__imgWrap u-mb40">
          <img src="<?php echo esc_url($president['img']); ?>" class="recruit__message__img">
        </figure>
        <dl>
          <dt class="recruit__message__bold">株式会社 豊後夢工房</dt>
          <dd class="recruit__message__bold">代表取締役社長 永井 賢次</dd>
        </dl>
      </div>
    </div>
  </section>

  <?php get_template_part('staff-loop', 'staff'); ?>

  <div class="u-center u-mb150">
    <a href="<?php echo esc_url(home_url('staff')); ?>" class="c-button--page">
      一覧を見る
    </a>
  </div>

  <section class="l-content--middle u-mb200">
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

  <!-- <section class="l-content">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        MOVIE
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">会社紹介映像</span>
        </p>
      </div>
    </div>

    <video controls autoplay muted loop class="p-about__video">
      <source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/video/video.m4v">
      お使いのブラウザは動画タグに対応していません。
    </video>
  </section> -->

  <!-- 会社沿革 -->
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

  <section class="l-content--middle u-mb90">
    <div class="recruit__interview">
      <?php $interviews = get_field('recruit-interview')['recruit-interview-content'];
      for ($i = 0; $i < count($interviews); $i++) {
        $title = $interviews[$i]["r-interview-content-tit"];
        $users = $interviews[$i]["r-interview-content-user"];
      ?>
        <div class="c-title__wrap--sectionLine">
          <h3 class="c-title--sectionLine">
            INTERVIEW
          </h3>
          <div>
            <p class="c-title--orangeLine u-mb30">
              <?php echo $title; ?>
            </p>
          </div>
        </div>
        <div class="recruit__interview__user__wrap">
          <?php
          for ($j = 0; $j < count($users); $j++) {
            $user_img = $users[$j]["r-content-user-img"];
            $user_txt = $users[$j]["r-content-user-txt"];
          ?>
            <div class="recruit__interview__user  u-mb100">
              <figure class=" recruit__interview__imgWrap">
                <img src="<?php echo esc_url($user_img); ?>" class="recruit__interview__img">
              </figure>
              <p class="recruit__interview__usertxt">
                <?php echo $user_txt ?>
              </p>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
  </section>

  <section class="l-content--middle u-mb100 recruit__recruit">
    <figure class=" recruit__recruit__topImg">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/recruit/tree.webp'); ?>" class="recruit__recruit__img">
    </figure>
    <div class="c-title__wrap--sectionLine">
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
    <table class="c-table__about">
      <tbody class="c-table__about__tbody">
        <?php
        for ($i = 0; $i < count($table); $i++) {
          $title = $table[$i]['recruit-app-title'];
          $content = $table[$i]['recruit-app-content'];
        ?>
          <tr class="c-table__about__tr">
            <th class="c-table__about__th">
              <?php echo $title; ?>
            </th>
            <td class="c-table__about__td">
              <?php echo $content; ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <figure class=" recruit__recruit__bottomImg">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/recruit/tree.webp'); ?>" class="recruit__recruit__img">
    </figure>
  </section>

  <?php $tel_number = get_field('recruite-tel-number'); ?>
  <div class="l-content--middle recruit__contact__form u-mb100">
    <p class="recruit__contact__desc">
      わたしたちと一緒にゆめをつくりませんか？ご応募は以下の応募フォーム<br>
      またはお電話にてお気軽にご連絡ください。
    </p>
    <a href="tel:0975941481" class="recruit__contact__info">
      <span class="recruit__contact__info__txt">応募はこちら</span>
      <p class=recruit__contact__info__tel>TEL.　<span class="recruit__contact__info__tel__number">097-594-1481</span>
      </p>
    </a>
  </div>

  <section class="p-contact l-content">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        APPLICATION
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">応募する</span>
        </p>
      </div>
    </div>
    <div class="p-contact__form">
      <?php echo do_shortcode('[mwform_formkey key="1820"]'); ?>
    </div>
  </section>

  <?php get_template_part('common-link', 'link'); ?>
</main>
<?php get_footer(); ?>