<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<?php 
  $taxonomy ='recruit-type';
  $parents = wp_get_post_terms( get_the_ID(), $taxonomy, array('parent' => 0));
  $parent = $parents[0]->name;
  $parent_id = $parents[0]->term_id;
  $requirements = get_field('requirements');
?>

<div>
  <p>
    <?php if($parent === 'タイプ1'): ?>
      タイプ1
    <?php elseif ($parent === 'タイプ2'):?>
      タイプ2
    <?php elseif ($parent === 'タイプ3'):?>
      タイプ3
    <?php endif; ?>
  </p>
</div>

<ul class = "p-bread__list  l-content">
  <li class = "p-bread__list__item"><a href = "<?php echo esc_url (home_url('') ); ?>" class = "p-bread__list__link">ホーム</a><span class = "p-bread__list__arrow">></span></li>
  <li class = "p-bread__list__item"><a href = "<?php echo esc_url (home_url('recruit') ); ?>">採用情報</a><span class = "p-bread__list__arrow">></span></li>
  <li class = "p-bread__list__item"><?php the_title(); ?></li>
</ul>

<main class = "l-content">
<h2><?php  echo esc_html($parent); ?><br><?php the_title(); ?>&nbsp; <br>募集要項</h2>

<table class = "p-recruit__table">
    <tbody class = "p-recruit__tbody">

    <?php if ($requirements) :?><!--サブフィールドを持っているか条件分岐。ACFでグループを使用するときはこの条件分岐が必要 -->
      <?php if ($requirements['jobName']):?><!--サブフィールドが値を持っているかの条件分岐-->
        <tr  class = "p-recruit__tr">
          <th class = "p-recruit__th">職種名</th>
          <td class = "p-recruit__td"><?php echo $requirements['jobName']; ?></td>
        </tr>
      <?php endif; ?>
      
      <?php if ($requirements['lisence']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">資格</th>
          <td class = "p-recruit__td"><?php echo $requirements['lisence']; ?></td>
        </tr>
      <?php endif; ?>
      
      <?php if ($requirements['salary']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">給与</th>
          <td class = "p-recruit__td"><?php echo $requirements['salary']; ?></td>
        </tr>
      <?php endif; ?>
      
      <?php if ($requirements['bonus']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">賞与</th>
          <td class = "p-recruit__td"><?php echo $requirements['bonus']; ?></td>
        </tr>
      <?php endif; ?>

      <?php if ($requirements['raise']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">昇給</th>
          <td class = "p-recruit__td"><?php echo $requirements['raise']; ?></td>
        </tr>
      <?php endif; ?>
      
      <?php if ($requirements['location']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">勤務地</th>
          <td class = "p-recruit__td"><?php echo $requirements['location']; ?></td>
        </tr>
      <?php endif; ?>
      
      <?php if ($requirements['vacation']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">休日・休暇</th>
          <td class = "p-recruit__td"><?php echo $requirements['vacation']; ?></td>
        </tr>
      <?php endif; ?>

      <?php if ($requirements['use']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">使用期間</th>
          <td class = "p-recruit__td"><?php echo $requirements['use']; ?></td>
        </tr>
      <?php endif; ?>
      
      <?php if ($requirements['insurance']):?>
        <tr class = "p-recruit__tr">
          <th class = "p-recruit__th">社会保険</th>
          <td class = "p-recruit__td"><?php echo $requirements['insurance']; ?></td>
        </tr>
      <?php endif; ?>
      <?php endif; ?>
    </tbody>
  </table> 
  
  <a href = "<?php echo esc_url (home_url('entry') ); ?>" class = "p-recruit__button">
    エントリーはこちら  >
  </a>
  
  <a href ="<?php echo esc_url (home_url('recruit') ); ?>" class = "c-button--jp u-mb100 u-opacity js-up">一覧に戻る</a>

</main>

<?php get_footer(); ?>

