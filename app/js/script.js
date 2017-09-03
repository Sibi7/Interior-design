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
                position: 'left'
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
        'fitImagesInViewport': true,
        'disableScrolling': true
    });

    $(window).scroll(function () {

        //Анимация линий второй секции
        $('.header-line').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).height('99px')
            }
        });
        $('.mid-line').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).width('111%')
            }
        });
        $('.left-line').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).height('200px')
            }
        });
        $('.bottom-mid-line').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).width('36%')
            }
        });
        $('.bottom-mid-line-right').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).width('7%')
            }
        });
        //    end

    });
});


