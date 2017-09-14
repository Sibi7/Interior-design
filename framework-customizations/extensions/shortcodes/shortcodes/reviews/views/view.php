<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
/*fw_print($atts)*/
?>

<section class="reviews" id="reviews">
    <div class="container">
        <h1>Отзывы</h1>
        <div class="reviews__wrapper">

            <?php if(is_array($atts['advantages']) && !empty($atts['advantages'])): ?>
                <?php foreach( $atts['advantages'] as $key => $advantage ): ?>

                    <div class="reviews__wrapper__item">
                        <div class="reviews__wrapper__item__user">
                            <img src="<?= $advantage['icon']['url'] ?>" alt="">
                        </div>
                        <div class="reviews__wrapper__item__text">
                            <h1><?= $advantage['title'] ;?></h1>

                            <p>
                                <span>“</span>
                                <?= $advantage['description'];?>
                                <span>”</span>
                            </p>

                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>            

            <button>Посмотреть еще отзывы</button>
            
        </div>
    </div>
</section>