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
            if (imagePos < topOfWindow + 500) {
                $(this).css('opacity', '1').addClass('animated rotateInDownLeft')
            }
        });
        $('.working__content-bottom__item').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 500) {
                $(this).css('opacity', '1').addClass('animated rotateInDownRight')
            }
        });
        $('.left-line').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).height('200px')
            }
        });
        //    end

    });
//    menu
    $(".menu-link").click(function () {
        $("#my-menu").slideToggle("slow", function () {
        });
        return false
    });
    $(document).ready(function () {
        var link = $('.menu-link');
        var link_active = $('.menu-link_active');

        link.click(function () {
            link.toggleClass('menu-link_active');
        })
    });
//    slow scroll for menu header
    $(document).on('click', '#my-menu ul li a', function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    //end
//    slow scroll for menu footer
    $(document).on('click', '.footer__nav ul li a', function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    //end
});


