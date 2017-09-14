<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
//fw_print($atts);
?>
<section class="working" id="working">
    <div class="container">
        <div class="working__head">
            <h1><?= $atts['title'];?></h1>
            <p><?= $atts['description'];?></p>
        </div>
        <div class="working__content">
            <div class="working__content__item">
                <div class="working__content__item__col">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/w1.png" alt="">
                </div>
                <p>
                    Предпроектный этап
                </p>
            </div>
            <div class="working__content__item">
                <div class="working__content__item__col">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/w2.png" alt="">
                </div>
                <p>
                    Рабочее проектирвоание
                </p>
            </div>
            <div class="working__content__item">
                <div class="working__content__item__col">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/w3.png" alt="">
                </div>
                <p>
                    Реализация интерьера
                </p>
            </div>
        </div>
        <div class="working__progress">
            <img src="<?php bloginfo('template_directory'); ?>/img/progres.png" alt="">
        </div>
        <div class="working__content-bottom">
            <div class="working__content-bottom__item">
                <div class="working__content-bottom__item__col">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/w6.png" alt="">
                </div>
                <p>
                    Заключительный этап
                </p>
            </div>
            <div class="working__content-bottom__item">
                <div class="working__content-bottom__item__col">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/w5.png" alt="">
                </div>
                <p>
                    Подбор и закупка материалов
                </p>
            </div>
            <div class="working__content-bottom__item">
                <div class="working__content-bottom__item__col">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/w4.png" alt="">
                </div>
                <p>
                    Эскизное проектирование

                </p>
            </div>
        </div>
    </div>
</section>