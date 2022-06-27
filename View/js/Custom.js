$(document).ready(function ($) {

    $(".iconMobileMenu").click(function(){
        $(".menu").slideToggle(100);
    });
    $(".subBtnMenu").on("click", function () {
        $(".secdownload").addClass("trnsorm-unset");
        $(".secdownload").addClass("transition-set");
        $(".btnMenu").attr("style", "display:none");
    });
    $("#close").on("click", function () {
        $(".secdownload").removeClass("trnsorm-unset");
        // $( ".secdownload" ).addClass( "transition-set");
        $(".btnMenu").removeAttr("style");
    });

    $.fn.isInViewport = function (x) {
        return $(this).position().top - (x) <= $(window).scrollTop();
    };
    //animates

    $.fn.isInView = function () {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(this).offset().top;
        var elemBottom = elemTop + $(this).height()/2;

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    };
    //
    $('.nav li a').on('click', function () {
        var y = $(this).attr('data-value');
        var z = $('#' + y).offset().top;
        $('html , body').animate({
            scrollTop: z
        }, 100);
        $('.nav li a').removeClass('active')
        $(this).addClass('active');
    });

    var owl = $('.owl-carouselSlider');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true
    });
    $(".fadeingOne").addClass('fadeShow');
    $(".fadeingSubOne").addClass('fadeShow');

    owl.on('changed.owl.carousel', function(event) {
        owl.trigger('stop.owl.autoplay');
        owl.trigger('play.owl.autoplay');
        setTimeout(function(){
            var activeEls = $('.owl-item.active'); // .eq(1) to get the "middle image out of 3 actives"
            var ac=$(activeEls).find(".fadeing")
            setCarouselCaption(ac);
        },1);
    });

    function setCarouselCaption(el){
        $(".fadeing").removeClass("fadeShow");
        el.addClass('fadeShow');
    }

    var owlProduct = $('.owl-carouselProduct');
    owlProduct.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        rtl:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            960: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }
    });
    var owlVideo = $('.owl-carouselVideo');
    owlVideo.owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 8000000,
        autoplayHoverPause: true,
        rtl:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            960: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }});


















    //
    // $('.nav li a').on('click', function () {
    //     var y = $(this).attr('data-value');
    //     var z = $('#' + y).offset().top;
    //     $('html , body').animate({
    //         scrollTop: z
    //     }, 100);
    //     $('.nav li a').removeClass('active')
    //     $(this).addClass('active');
    // });
    var IDplay,DataVAlue;
    $('.owl-carouselVideo .item a').on('click', function () {
        DataVAlue = $(this).attr('data-value');
        console.log(DataVAlue)
        IDplay = $('#'+ DataVAlue);
        console.log(IDplay)
        $(IDplay).trigger('play');
        $("#play" + DataVAlue).fadeOut(1000);
        console.log("#play"+DataVAlue)
    });

    // $("#play").click(function () {
    //     jQuery("#video").trigger('play');
    //     jQuery(".playVideo").fadeOut(1000);
    // });
    // $(IDplay).on('ended', function () {
    //     jQuery("#play"+DataVAlue).fadeIn(1000);
    // });

});

var y1 = 0;
$(window).scroll(function () {
    if ($(window).scrollTop() > 80) {
        if (y1 <= ($(window).scrollTop())) {
            $(".nav").addClass('displayfixe');
            $(".nav").removeClass('displayfixenone');
        } else {
            // $(".nav").removeClass('displayfixe');
            $(".nav").addClass('displayfixenone');
            $(".nav").removeClass('displayfixe');
        }
    }
    else {
        $(".nav").removeClass('displayfixenone');
        $(".nav").removeClass('displayfixe');

    }
    y1 = ($(window).scrollTop());

    $('section').each(function () {
        if ($(this).isInViewport(100)) {

            $('.nav li a').removeClass('active');
            $('[data-value='+$(this).attr('id')+']').addClass('active');
            // console.log($(this).isInViewport(100));
            console.log($(this).attr('id'));
            // $(this).addClass('active');
        }
    });


    $(".fadeing").each(function () {
            if($(this).parent().isInView()){
                $(this).addClass('fadeShow');
            }

        else if($(this).isInView()){
            $(this).addClass('fadeShow');
        }
    });

    $(".hasFadeParent").each(function () {
        var that=$(this);
        if($(that).isInView()){
            let counter=100;
            $(that).find(".hasChildFade").each(function () {
                var child=$(this);
                setTimeout(function () {
                    $(child).addClass("fadeShow");
                },counter);
                counter+=500;
            });
        }
    });
// $(".btnMobileMenu").onclick


});

