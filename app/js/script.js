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
    $(document).on('click', '#my-menu ul li .scroll', function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    //end
//    slow scroll for menu footer
    $(document).on('click', '.footer__nav ul li .scroll', function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    $(document).on('click', '.why-we__wrapper__item link', function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    //end


    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: false,
        animationLoop: true,
        slideshow: true,
        itemMargin: 17,
        asNavFor: '#slider',
        itemWidth: 247
    });

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: 5000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

});
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}



