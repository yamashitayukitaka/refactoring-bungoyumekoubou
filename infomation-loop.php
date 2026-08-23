<?php $infomations = get_field('infomation');?>
<?php
$hasInfomation = false;
if ($infomations) {
  foreach ($infomations as $row) {
    if (!empty($row['img']) || !empty($row['txt']) || !empty($row['value'])) {
      $hasInfomation = true;
      break;
    }
  }
}
?>
<?php if($hasInfomation):?>
<section class = "p-property__infomation u-mb100">
  <div class = "l-content">
    <h3 class = "c-title--sectionEn">
      INFOMATION
    </h3>
    <p class = "c-title--sectionSub u-mb50">
      周辺情報
    </p>
    <ul class = "p-property__infomation__list u-mb50">
      <!--PHPのcountはJavaScriptのlengthと同じように、配列の要素数を取得するために使用される-->
      
        <?php for ($i = 0; $i < count($infomations); $i++): ?>
          <?php $infomation = $infomations[$i]; ?>
          <?php if (!empty($infomation['img']) || !empty($infomation['txt']) || !empty($infomation['value'])) : ?>
          <li class = "p-property__infomation__item">
            <?php if (!empty($infomation['img'])) : ?>
            <figure class = "p-property__infomation__imgWrap">
              <img src = "<?php echo esc_url($infomation['img']);?>" class = "p-property__infomation__img">
            </figure>
            <?php endif; ?>
            <?php if (!empty($infomation['txt'])) : ?>
            <p class = "p-property__infomation__txt"><?php echo esc_html($infomation['txt']);?></p>
            <?php endif; ?>
            <?php if (!empty($infomation['value'])) : ?>
            <p class = "p-property__infomation__distance"><span class = "p-property__infomation__value"><?php echo esc_html($infomation['value']);?></span></p>
            <?php endif; ?>
          </li>
          <?php endif; ?>
        <?php endfor; ?>
      
    </ul>
    
    
      <?php for ($i = 0; $i < count($infomations); $i++): ?>
        <?php $infomation = $infomations[$i]; ?>
        <?php if (!empty($infomation['txt']) || !empty($infomation['value'])) : ?>
        <dl class = "p-property__infomation__dl">
          <?php if (!empty($infomation['txt'])) : ?>
          <dt class = "p-property__infomation__dt"><?php echo esc_html($infomation['txt']);?></dt>
          <?php endif; ?>
          <?php if (!empty($infomation['value'])) : ?>
          <dd class = "p-property__infomation__dd"><?php echo esc_html($infomation['value']);?></dd>
          <?php endif; ?>
        </dl>
        <?php endif; ?>
        <?php endfor; ?>
  </div>
</section>
<?php endif; ?>
