<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
?>

<div class="mid-form" style="background-image: url(<?= $atts['background']['url'];?>)">
    <div class="container">
        <h1>
            <?= $atts['title'];?>
        </h1>
        <p>
            <?= $atts['description'];?>
        </p>
        <form action="#">
            <input type="text" placeholder="Ваше имя" required>
            <input type="text" placeholder="Номер телефона" required>
            <button>Получить скидку</button>
        </form>
    </div>
</div>