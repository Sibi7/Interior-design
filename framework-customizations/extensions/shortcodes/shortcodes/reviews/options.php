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
    'advantages' => array(
        'type' => 'addable-popup',
        'label' => __('Отзыв', '{domain}'),
        'template' => '{{- title }}',
        'size' => 'large', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'label' => __('Имя', '{domain}'),
                'type' => 'text'
            ),
            'description' => array(
                'label' => __('Отзыв', '{domain}'),
                'type' => 'textarea',
            ),
            'icon' => array(
                'label' => __('Фото', '{domain}'),
                'type' => 'upload',
                'images_only' => true,
            )
        ),
    )
];