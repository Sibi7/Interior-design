$(document).ready(function () {

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

        $('.working__content__item').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 0) {
                $(this).addClass('fadeInUpBig').css('opacity', '1');
            }
        });
        //    end

    });
//    menu
    $( ".menu-link" ).click(function() {
        $( "#my-menu" ).slideToggle( "slow", function() {
        });
        return false
    });
    $(document).ready(function () {
        var link =$('.menu-link');
        var link_active = $('.menu-link_active');

        link.click(function () {
            link.toggleClass('menu-link_active');
        })
    });
});


