// JavaScript Document
$(document).ready(function () {

// Media query selector ---------------------->
    enquire.register("screen and (min-width:768px)", {
        match: function () {
            // customescroll ---------------------->
            $(".scrolledBox-custom").mCustomScrollbar();

            // header sticky ---------------------->
            $(window).scroll(function () {
                if ($(this).scrollTop() > 188) {
                    $('header').addClass("sticky");
                }
                else {
                    $('header').removeClass("sticky");
                }

            });
        }
    });


    // javascript for Flash news ---------------------->
    var dd = $('.flashNewsticker').easyTicker({
        direction: 'up',
        easing: 'easeInOutBack',
        speed: 'slow',
        interval: 3000,
        height: 'auto',
        visible: 1,
        theme: "minimal",
        mousePause: 1,
        controls: {
            up: '.up',
            down: '.down'
        }
    }).data('easyTicker');
// javascript for Menu ---------------------->	
    $(".drawer").drawer();

    $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });


    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function () {
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
                scrollTop: 0,
            }, scroll_top_duration
        );
    });


    $('#photodabali').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        pause: 5000,
        auto: true,
        speed: 1000,
        slideMargin: 0,
        thumbItem: 6
    });
    $('#videodabali').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        pause: 5000,
        controls: false,
        auto: true,
        speed: 1000,
        vertical: true,
        slideMargin: 0,
        thumbItem: 5,
        verticalHeight: 450
    });
    $('#modelPic-slider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        pause: 5000,
        auto: true,
        speed: 1000,
        slideMargin: 0,
        thumbItem: false,
        pager: false
    });

    $('#addbanner-vertical').lightSlider({
        gallery: true,
        item: 1,
        pager: false,
        vertical: true,
        loop: true,
        pause: 5000,
        auto: true,
        speed: 1000,
        slideMargin: 0,
        thumbItem: false
    });
    $("#addbanner-horizontal").lightSlider({
        loop: true,
        keyPress: true,
        auto: true,
        pager: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    item: 4,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    item: 4,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    item: 3,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    item: 3,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 2,
                    slideMove: 1
                }
            },
            {
                breakpoint: 320,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            }
        ]
    });

    $(".carousal-slider-box").slick({
        dots: true,
        autoplay: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
// detail off-canvas news ---------------------->

    var canvasVisibleHeight = $(window).height();
    $('.canvas-rightBody').height(canvasVisibleHeight - 100);

    $(".popup_trigger_1").click(function () {
        $(".popup_content_2").removeClass("active");
        $(".popup_content_3").removeClass("active");
        $(".popup_content_1").toggleClass("active", 1000);
    });
    $(".canvasrightBtn-close").click(function () {
        $(".popup_content_1").removeClass("active");
    });

    $(".popup_trigger_2").click(function () {
        $(".popup_content_1").removeClass("active");
        $(".popup_content_3").removeClass("active");
        $(".popup_content_2").toggleClass("active", 1000);
    });
    $(".canvasrightBtn-close").click(function () {
        $(".popup_content_2").removeClass("active");
    });

    $(".popup_trigger_3").click(function () {
        $(".popup_content_1").removeClass("active");
        $(".popup_content_2").removeClass("active");
        $(".popup_content_3").toggleClass("active", 1000);
    });
    $(".canvasrightBtn-close").click(function () {
        $(".popup_content_3").removeClass("active");
    });




    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
    }

    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);

});
function goNextTab(currtab, nexttab) {

    var curr = $('li.active');

    curr.removeClass('active');
    if (curr.is("li:last")) {
        $("li:first-child").addClass('active');
    } else {
        curr.next().find("a").click();
        curr.next().addClass('active');
    }
    $('#' + currtab).attr('aria-expanded', 'false');
    $('#' + nexttab).attr('aria-expanded', 'true');

}