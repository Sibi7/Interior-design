<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<header class="header">
    <div class="container">
        <div class="header__menu">
            <div class="header__menu__wrap">
                <a href="#my-menu" class="menu-link">
                    <span class="hamburger"></span>
                    <p>меню</p>

                </a>
                <nav id="my-menu">
                    <ul>
                        <li><a href="#">Наши строители</a></li>
                        <li><a href="/about/">Портфолио</a></li>
                        <li><a href="/contact/">Контакты</a></li>
                        <li><a href="#services">Прайс</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#working">Как мы работаем</a></li>
                    </ul>
                </nav>
            </div>

        </div>

        <div class="header__phone">
            <i class="fa fa-phone fa-2-x" aria-hidden="true"></i>
            <a href="tel:+7 (495) 151-94-01">+7 (495) <b>151-94-01</b></a>
            <div class="header__phone__social">
                <a href="http://vk.com" target="_blank">
                    <i class="fa fa-vk " aria-hidden="true"></i>
                </a>
                <a href="http://instagram.com" target="_blank">
                    <i class="fa fa-instagram " aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="header__content">
            <h1>
                Продуманный
                дизайн интерьера
            </h1>
            <h2>
                Вашей квартиры за 899 р./м2 до 15 августа
            </h2>
            <div class="header__content__wrapper">
                <div class="header__content__wrapper__item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/h1.png" alt="">
                    <p>
                        Авторский надзор
                        в подарок
                    </p>
                </div>
                <div class="header__content__wrapper__item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/h2.png" alt="">
                    <p>
                        2 варианта
                        планировки вместо 1
                    </p>
                </div>
                <div class="header__content__wrapper__item">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/h3.png" alt="">
                    <p>
                        3D визуализация
                        высокого качества
                    </p>
                </div>
            </div>
            <button type="submit">Получить консультацию</button>
            <button>Расчет стоимости</button>
        </div>
    </div>
</header>

<body>

