<?php
// Template Name: concept
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main class="p-concept">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title u-mb20">
        わたしたちの思い
      </h2>
      <p class="p-concept__mv__lead">
        <span class="u-textOrange">夢</span>をカタチに、<br>
        暮らしをもっと<span class="u-textOrange">豊か</span>に
      </p>
      <p class="p-concept__mv__en">
        Dream in your heart,<br>
        freedom in your future
      </p>
    </div>
    <?php $mv = get_field('mv-concept-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <section class="p-concept__intro">
    <div class="p-concept__intro__inner">
      <div class="p-concept__intro__photos">
        <div class="p-concept__intro__photo">
          <img class="p-concept__intro__img" src="<?php echo IMG_URL; ?>/top/top-des1.webp" alt="">
        </div>
        <div class="p-concept__intro__family">
          <img class="p-concept__intro__img" src="<?php echo IMG_URL; ?>/illustration/family_img.webp" alt="">
        </div>
      </div>
      <div class="p-concept__intro__text">
        <br>
        <p class="p-concept__intro__paragraph">
          「豊後夢工房(ぶんごゆめこうぼう)」の名前には、大分(豊後)に暮らす皆さまの夢を形にするという強い思いが込められています。「工房」とは、職人が心を込めて作品を作り上げる場所。
          私たちはその名の通り、一人ひとりのお客様の個性を大切にし、夢を叶える住まいを丁寧に作り上げることを使命としています。
        </p>
        <p class="p-concept__intro__paragraph">
          豊後夢工房は、住まいを通じて個性を表現できる場所です。<br>
          暮らしの理想や夢をお持ちの方々も、具体的なイメージがまだ湧いていなくても、いつも気軽に相談できるパートナーでありたいと考えています。
        </p>
        <p class="p-concept__intro__paragraph">
          住まいづくりは、とても自由です。家が欲しい、そのひとつの入口からあなたに合った「暮らし」を一緒に探したい。まずは、暮らしのイメージを一緒に語り合いませんか。
        </p>
        あなたの住まいを、<span class="u-textOrange">楽しく</span>、もっと<span class="u-textOrange">自由</span>に。
      </div>
    </div>
  </section>

  <section class="p-concept__policy">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine">POLICY</h3>
      <p class="c-title--orangeLine u-mb50">
        <span class="marker">
          <span class="u-orange">豊後夢工房</span>が大切にしていること
        </span>
      </p>
    </div>
    <ul class="p-concept__policy__list">
      <li class="p-concept__policy__item">
        <div class="p-concept__policy__media">
          <img class="p-concept__policy__img" src="<?php echo IMG_URL; ?>/concept/concept1.png" alt="">
        </div>
        <div class="p-concept__policy__panel">

            <h3 class="c-title--sectionLine">POLICY 01</h3>
            <p class="c-title--orangeLine u-mb10">
              <span class="marker">
                <span class="u-orange">自由</span>に<span class="u-orange">デザイン</span>する<br>
                という楽しさ
              </span>
            </p>
          <div class="p-concept__policy__text">
            「家を建てたいな。」と思った日から、みんないろんな想像をすると思います。<br>
            こんな暮らしがしてみたい、こんなデザインがいい。<br>
            自由に想像し、楽しみます。私たちも自分の家を作る気持ちで、一緒にワクワクさせてもらっています。<br>
            決まった枠にとらわれず、自由に暮らしをデザインするところからスタートです。
          </div>
          <div class="p-concept__policy__action">
            <a class="p-concept__policy__link" href="<?php echo home_url('/design/'); ?>">デザインのこだわりを見る</a>
          </div>
        </div>
      </li>
      <li class="p-concept__policy__item">
        <div class="p-concept__policy__media">
          <img class="p-concept__policy__img" src="<?php echo IMG_URL; ?>/concept/concept2.png" alt="">
        </div>
        <div class="p-concept__policy__panel">
          <h3 class="c-title--sectionLine">POLICY 02</h3>
          <p class="c-title--orangeLine u-mb10">
            <span class="marker">
              <span class="u-orange">コスト</span>を抑えた<br>
              <span class="u-orange">スマート</span>な家づくり
            </span>
          </p>
          <div class="p-concept__policy__text">
            家づくりで大切なのは持続可能性です。そのためには、日々のランニングコストや経済性が欠かせません。<br>
            私たちは、経済性と快適性を兼ね備えたZEH住宅を基盤とし、エネルギー効率を最大化しています。<br>
            また、最新の再生可能エネルギーを導入することで、ランニングコストを大幅に削減した住宅を提供しています。<br>
            夢工房ならではの価格で、コストを抑えながらもワンランク上のスマートな家づくりを実現します。
          </div>
          <div class="p-concept__policy__action">
            <a class="p-concept__policy__link" href="<?php echo home_url('/cost/'); ?>">コストへのこだわりを見る</a>
          </div>
        </div>
      </li>
      <li class="p-concept__policy__item">
        <div class="p-concept__policy__media">
          <img class="p-concept__policy__img" src="<?php echo IMG_URL; ?>/concept/concept3.png" alt="">
        </div>
        <div class="p-concept__policy__panel">
          <h3 class="c-title--sectionLine">POLICY 03</h3>
          <p class="c-title--orangeLine u-mb10">
            <span class="marker">
              <span class="u-orange">心地よく暮らせる</span><br>
              ということ
            </span>
          </p>
          <div class="p-concept__policy__text">
            家は人生のベースです。安心して暮らしてほしい。
            私たちはデザインの良さだけを追求する家は作りません。自由なデザインを、安心して暮らせる住み心地の面からも考え、いつも住まい手のことを考え家を建てています。最新の技術と経験を生かし、未来基準の高性能住宅を提供します。
          </div>
          <div class="p-concept__policy__action">
            <a class="p-concept__policy__link" href="<?php echo home_url('/quality/'); ?>">性能のこだわりを見る</a>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <section class="p-concept__system">
    <div class="p-concept__system__head">
      <div>
        <div class="c-title__head">
          <h3 class="c-title--sectionLine">
            SYSTEM & DESIGN
          </h3>
          <p class="c-title--orangeLine p-concept__system__title"><span class="marker">
              豊後夢工房の<span class="u-orange">組織力</span>と<span class="u-orange">デザイン力</span></span>
          </p>
        </div>
        <p class="p-concept__system__lead">
          土地探しから家づくりの相談、メンテナンスまで、<br>
          <strong class="u-textOrange">ワンストップで</strong>住まいづくりをおまかせできます
        </p>
      </div>
    </div>
    <div class="p-concept__roles">
      <ul class="p-concept__roles__list">
        <li class="p-concept__roles__item">
          <p class="p-concept__roles__en">LAND</p>
          <span class="p-concept__roles__ja">土地</span>
        </li>
        <li class="p-concept__roles__item">
          <p class="p-concept__roles__en">DESIGN</p>
          <span class="p-concept__roles__ja">設計</span>
        </li>
      </ul>
      <ul class="p-concept__roles__list">
        <li class="p-concept__roles__item">
          <p class="p-concept__roles__en">PLANNER</p>
          <span class="p-concept__roles__ja">営業</span>
        </li>
        <li class="p-concept__roles__mark u-none__mobile--sp" aria-hidden="true"></li>
        <li class="p-concept__roles__item">
          <p class="p-concept__roles__en">COORDINATOR</p>
          <span class="p-concept__roles__ja u-none__mobile--sp">インテリアコーディネーター</span>
          <span class="p-concept__roles__ja u-none__pc--sp">コーディネーター</span>
        </li>
      </ul>
      <ul class="p-concept__roles__list">
        <li class="p-concept__roles__item">
          <p class="p-concept__roles__en">SUPERVISOR</p>
          <span class="p-concept__roles__ja">施工</span>
        </li>
        <li class="p-concept__roles__item">
          <p class="p-concept__roles__en">MAINTENANCE</p>
          <span class="p-concept__roles__ja">メンテナンス</span>
        </li>
      </ul>
    </div>
    <div class="p-concept__team">
      <p class="c-title--orangeLine p-concept__team__title">
        <span class="marker">
          <span class="u-orange">Team 夢工房</span>の<span class="u-orange">デザイン力</span></span>
      </p>
      <p class="p-concept__team__text">
        家づくりのプロ集団としての品質を高めるために、各部署との連携は不可欠です。特にチームワークを重視する豊後夢工房では、お客様に最高のサービスを提供するための社内環境づくりに注力しています。社内ネットワークを活用し、家づくりのデータを全社員が共有し、全体会議を開いて問題点や改善点を話し合うことで、各部署の壁を越えて自由にアイディアを出し合えるオープンな体制を整えています。情報を共有し合い、お客様のニーズに応える感度を高めながら、創造的なデザイン力を提案します。
      </p>
      <div class="p-concept__team__action">
        <a class="p-concept__team__link" href="<?php echo home_url('/staff/'); ?>">ゆめづくりスタッフ一覧へ</a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/common'); ?>
</main>
<?php get_footer(); ?>
