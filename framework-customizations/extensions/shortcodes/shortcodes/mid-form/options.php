<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'title'     => array(
        'type'  => 'text',
        'value' => 'Как сэкономить c нами 100 000 руб.?',
        'label' => __('Заголовок', '{domain}'),
    ),
    'description' => array(
        'type' => 'textarea',
        'label' => __('Описание', '{domain}'),
    ),
    'background' => array(
        'type' => 'upload',
        'label' => __('Фоновое изображение', '{domain}'),
    )
];