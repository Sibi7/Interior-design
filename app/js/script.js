$(document).ready(function () {

    $(function () {
        $('#my-menu').mmenu({
            extensions: ['fx-menu-slide', 'shadow-page', 'shadow-panels', 'pagedim-black', 'theme-black'],
            iconPanels: true,
            counters: true,
            keyboardNavigation: {
                enable: true,
                enhance: true
            },
            navbar: {
                title: 'Меню',
                content: ['breadcrumbs', 'close']
            },
            offCanvas: {
                position: 'right'
            },
            navbars: [
                {
                    position: 'top',
                    content: ['breadcrumbs', 'close']
                }
            ]
        });
    });
});


