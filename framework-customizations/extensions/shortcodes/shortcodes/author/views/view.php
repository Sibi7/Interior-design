<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="author">
    <div class="author__item">
        <figure>
            <img src="<?php bloginfo('template_directory'); ?>/img/photo.jpg" alt="">
            <figcaption>
                <h1>Дмитрий Гаврилов</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
                <button>Дмитрий Гаврилов</button>
            </figcaption>
        </figure>
    </div>
    <div class="author__item">
        <figure>
            <img src="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="">
            <figcaption>
                <h1>Филипп Шуруев</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
                <button>Филипп Шуруев</button>

            </figcaption>
        </figure>
        <div class="author__item__absolute">

        </div>
    </div>
</section>