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
    // var api = $('#my-menu').data('mmenu');
    // api.bind('opened', function () {
    //     $('.menu-link').addClass('active');
    // })
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'positionFromTop': 100,
        'fitImagesInViewport': true,
        'disableScrolling': true
    })
});


