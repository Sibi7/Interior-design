<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>
<footer class="footer">
    <div class="container">
        <nav class="footer__nav">
            <ul>
                <li><a href="#">Наши строители </a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#services">Прайс</a></li>
                <li><a href="#reviews">Отзывы</a></li>
                <li><a href="#working">Как мы работаем</a></li>
            </ul>
        </nav>
        <div class="footer__contacts">

            <div class="header__phone">
                <i class="fa fa-phone fa-2-x" aria-hidden="true"></i>
                <a href="tel:+7 (495) 151-94-01">+7 (495) <b>151-94-01</b></a>
            </div>
            <div class="footer__contacts__address">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                    127018, Самара
ул. Советской Армии, д. 17/52
                </span>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
