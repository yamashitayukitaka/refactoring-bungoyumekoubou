<?php $infomations = get_field('infomation');?>
<?php if($infomations):?>
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
          <?php $infomation = $infomations[$i];
                $img = $infomation['img'];
                $txt = $infomation['txt'];
                $value = $infomation['value'];
          ?>
          <li class = "p-property__infomation__item">
            <figure class = "p-property__infomation__imgWrap">
              <img src = "<?php echo esc_url($img);?>" class = "p-property__infomation__img">
            </figure>
            <p class = "p-property__infomation__txt"><?php echo esc_html($txt);?></p>
            <p class = "p-property__infomation__distance"><span class = "p-property__infomation__value"><?php echo esc_html($value);?></span></p>
          </li>
        <?php endfor; ?>
      
    </ul>
    
    
      <?php for ($i = 0; $i < count($infomations); $i++): ?>
        <?php 
          $infomation = $infomations[$i];
          $txt = $infomation['txt'];
          $value = $infomation['value'];
        ?>
        <dl class = "p-property__infomation__dl">
          <dt class = "p-property__infomation__dt"><?php echo esc_html( $txt );?></dt>
          <dd class = "p-property__infomation__dd"><?php echo esc_html( $value );?></dd>
        </dl>
      <?php endfor; ?>
    <?php endif; ?>
  </div>
</section>