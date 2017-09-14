<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="blog">
    <div class="container">
        <h1>Наш блог</h1>
        <div class="blog__wrapper">
            <div class="blog__wrapper__item">
                <div class="blog__wrapper__item__content">
                    <img src="<?php bloginfo('template_directory'); ?>/img/blog.jpg" alt="">
                </div>
                <div class="blog__wrapper__item__substrate">
                    <span>25</span>
                    <span>04</span>
                </div>
                <div class="blog__wrapper__item__text">
                    <h2>Название статьи</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.

                    </p>
                </div>
            </div>
            <div class="blog__wrapper__item">
                <div class="blog__wrapper__item__content">
                    <img src="<?php bloginfo('template_directory'); ?>/img/blog.jpg" alt="">
                </div>
                <div class="blog__wrapper__item__substrate">
                    <span>25</span>
                    <span>04</span>
                </div>
                <div class="blog__wrapper__item__text">
                    <h2>Название статьи</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.

                    </p>
                </div>
            </div>
            <div class="blog__wrapper__item">
                <div class="blog__wrapper__item__content">
                    <img src="<?php bloginfo('template_directory'); ?>/img/blog.jpg" alt="">
                </div>
                <div class="blog__wrapper__item__substrate">
                    <span>25</span>
                    <span>04</span>
                </div>
                <div class="blog__wrapper__item__text">
                    <h2>Название статьи</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.

                    </p>
                </div>
            </div>
        </div>
    </div>

</section>