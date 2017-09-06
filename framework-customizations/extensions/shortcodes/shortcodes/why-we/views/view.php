<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
fw_print($atts);
?>
<div class="why-we">
    <div class="container">
        <div class="why-we__wrapper">
            <div class="why-we__wrapper__text">
                <h1><?= $atts['title'];?></h1>
                <p><?= $atts['description'];?></p>
                <div class="mid-line"></div>
            </div>

            <div class="why-we__wrapper__img">
                <div class="header-line"></div>
                <img src="<?php bloginfo('template_directory'); ?>/img/why-we.png" alt="">
            </div>
            <div class="clearfix"></div>
            <div class="left-line"></div>
            <div class="bottom-mid-line"></div>
            <div class="bottom-mid-line-right"></div>

                <?php foreach ($atts['advantages'] as $advantages) : ?>
                    <div class="why-we__wrapper__item">

                        <img src="<?= $advantages['icon']['url']; ?>" alt="">
                        
                        <div class="why-we__wrapper__item__text">
                            <h3><?= $advantages['title'];?></h3>

                            <p><?= $advantages['description'];?></p>
                        </div>

                    </div>
                <?php endforeach; ?>            

        </div>
    </div>
</div>