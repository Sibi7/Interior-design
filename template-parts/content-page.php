<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package artcraft
 */

?>

<?php the_content(); ?>

<div class="mid-form">
    <div class="container">
        <h1>
            Как сэкономить c нами 100 000 руб.?
        </h1>
        <p>
            Только до 15 августа мы отдаем вам свою
            на ремонтные работы
        </p>
        <form action="#">
            <input type="text" placeholder="Ваше имя" required>
            <input type="text" placeholder="Номер телефона" required>
            <button>Получить скидку</button>
        </form>
    </div>
</div>

<section class="projects">
    <div class="container">
        <h1>Наши Проекты</h1>
    </div>
    <div class="projects__wrapper">

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/1.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект ванной комнаты на ул. Стара Загора
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/2.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект и реализация двухкомнатной квартиры на ул Осетинской
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/3.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект интерьера дома в п.Прибрежный
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/4.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект интерьера квартиры в г.Москва
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/5.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект интерьера дома на 8 просеке
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/6.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект интерьера квартиры на ул.Георгия Димитрова
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/7.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект квартиры на арцыбушевской
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/8.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект квартиры на ерошевского 31
                </h4>
            </div>
        </div>

        <div class="projects__wrapper__item">
            <a href="#" >
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/9.jpg" alt="">
            </a>
            <div class="projects__wrapper__item__absolute">
                <h4>
                    Проект трёхкомнатной квартиры на ул. Тихомирова г. Москва
                </h4>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <button>Посмотреть все наши работы</button>
</section>

<div class="form-two">
    <div class="container">
        <h1>
            Заказать бесплатно выезд
            дизайнера на ваш объект
        </h1>
        <form action="#">
            <input type="text" placeholder="Ваше имя" required>
            <input type="text" placeholder="Номер телефона" required>
            <button>Получить скидку</button>
        </form>
    </div>
</div>

<section class="working" id="working">
    <div class="container">
        <div class="working__head">
            <h1>Как мы
                работаем</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>
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

<section class="reviews" id="reviews">
    <div class="container">
        <h1>Отзывы</h1>
        <div class="reviews__wrapper">
            <div class="reviews__wrapper__item">
                <div class="reviews__wrapper__item__user">
                    <img src="<?php bloginfo('template_directory'); ?>/img/rew1.jpg" alt="">
                </div>
                <div class="reviews__wrapper__item__text">
                    <h1>Несмелов Кирилл</h1>

                    <p>
                        <span>“</span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                        <span>”</span>
                    </p>

                </div>
            </div>
            <div class="reviews__wrapper__item">
                <div class="reviews__wrapper__item__user">
                    <img src="<?php bloginfo('template_directory'); ?>/img/rew2.jpg" alt="">
                </div>
                <div class="reviews__wrapper__item__text">
                    <h1>Несмелов Кирилл</h1>

                    <p>
                        <span>“</span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                        <span>”</span>
                    </p>

                </div>
            </div>
            <button>Посмотреть еще отзывы</button>
        </div>
    </div>
</section>

<section class="rewards">
    <div class="container">
        <h1>Наши награды</h1>
        <div class="rewards__wrapper">
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/1.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/1.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/2.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/2.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/3.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/3.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/4.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/4.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/05.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/05.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/5.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/5.jpg" alt="">
                </a>
            </div>

        </div>
        <div class="rewards__wrapper">
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/1.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/1.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/2.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/2.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/3.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/3.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/4.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/4.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/05.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/05.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/5.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/5.jpg" alt="">
                </a>
            </div>

        </div>
        <div class="rewards__wrapper">
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/12.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/1.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/12.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/2.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/13.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/13.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/14.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/14.jpg" alt="">
                </a>
            </div>
            <div class="rewards__wrapper__item">
                <a href="<?php bloginfo('template_directory'); ?>/img/awards/15.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/awards/15.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="form-3">
    <div class="container">
        <h1>
            Всего 1 шаг до комфорта <br>
            и продуманного интерьера
        </h1>
        <p>
            Оставьте заявку и мы свяжемся с вами
        </p>
        <form action="#">
            <input type="text" placeholder="Ваше имя" required>
            <input type="text" placeholder="Номер телефона" required>
            <button>Получить скидку</button>
        </form>
    </div>
</section>

<section class="services" id="services">
    <div class="container">
        <h1>Наши услуги и цены</h1>
        <div class="services__wrapper">
            <div class="services__wrapper__item">
                <div class="services__wrapper__item__classes">
                    <p>Эскизный</p>
                </div>
                <div class="services__wrapper__item__text">
                    <p>
                        Подготовим для вас 2 дизайн-интерьера
                        вашего помещения
                    </p>
                </div>
                <a href="#" target="_blank">Подробнее</a>
            </div>
            <div class="services__wrapper__item">
                <div class="services__wrapper__item__classes">
                    <p>Базовый</p>
                </div>
                <div class="services__wrapper__item__text">
                    <p>
                        Уникальный дизайн-проект помещения
                        с учетом технических нюансов
                        помещения
                    </p>
                </div>
                <a href="#" target="_blank">Подробнее</a>
            </div>
            <div class="services__wrapper__item">
                <div class="services__wrapper__item__classes">
                    <p>Премиум</p>
                </div>
                <div class="services__wrapper__item__text">
                    <p>
                        Мы ведем проект от и до включая
                        уникальный дизайн, технический план
                        помещения, закупка материалов
                        и авторский надзор.
                    </p>
                </div>
                <a href="#" target="_blank">Подробнее</a>
            </div>
        </div>
    </div>
</section>

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

<div class="mid-form">
    <div class="container">
        <h1>
            Как сэкономить c нами 100 000 руб.?
        </h1>
        <p>
            Только до 15 августа мы отдаем вам свою
            на ремонтные работы
        </p>
        <form action="#">
            <input type="text" placeholder="Ваше имя" required>
            <input type="text" placeholder="Номер телефона" required>
            <button>Получить скидку</button>
        </form>
    </div>
</div>