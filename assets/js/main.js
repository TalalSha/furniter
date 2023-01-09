$(document).ready(function () {
    $('.toggle').click(function () {
        $('.toggle').toggleClass('active');
        $('nav').toggleClass('active');
        $('.upperlay').toggleClass('active');
    });

    $('.upperlay').click(function () {
        $('.toggle').removeClass('active');
        $('nav').removeClass('active');
        $('.upperlay').removeClass('active');
    });


    /*---- loginSec -----*/
    $('.log').click(function () {
        $('#login, #loginSec').fadeIn('3000');
    });
    $('.register').click(function () {
        $('#signup, #loginSec').fadeIn('3000');
    });
    $('.log, .register').click(function () {
        $('body').css('overflow-y', 'hidden');
    });
    $('#user').click(function () {
        $('#signup, #forgtPas').hide();
        $('#login').fadeIn('3000');
    });
    $('#pass').click(function () {
        $('#signup, #login').hide();
        $('#forgtPas').fadeIn('3000');
    });
    $('#member').click(function () {
        $('#forgtPas, #login').hide();
        $('#signup').fadeIn('3000');
    });
    $('#loginSec').click(function (e) {
        if ($(e.target).closest('#loginSec .inner').length === 0) {
            $('#loginSec').fadeOut('3000');
            $('#login, #forgtPas, #signup').fadeOut('3000');
            $('body').css('overflow-y', 'auto');
        }
    });
    $('.crosBtn').click(function (e) {
        $('#loginSec').fadeOut('3000');
        $('#login, #forgtPas, #signup').fadeOut('3000');
        $('body').css('overflow-y', 'auto');
    });


    $('.iColor').click(function () {
        var ic = $(this).attr("data-color");
        var icc = $("#icolor");
        icc.val(ic);
        $('.iColor').not(this).removeClass('active');
        $(this).addClass('active');
        console.log(icc.val());
    });
    $('.iSize').click(function () {
        var is = $(this).attr("data-size");
        var isc = $("#isize");
        isc.val(is);
        $('.iSize').not(this).removeClass('active');
        $(this).addClass('active');
        console.log(isc.val());
    });

    $(".iColor").each(function () {
        var obj = $(this);
        color = obj.attr('data-color');
        obj.css({"background": color, "color": color});
    });
    
    
    $('#find').click(function () {
        $('header form').fadeToggle('3000');
    });
});

(function () {
    var sbCatg = ".subCateg";
    $(".mailBar > li > a").click(function () {
        $(".mailBar > li > .subCateg").not($(this).parent().children(sbCatg).slideToggle()).slideUp();
    }).children(sbCatg).click(function (event) {
        event.stopPropagation();
    });
})();


/*----	fixed-header	-----*/
$(document).ready(function () {
    var nav0ffset = $("header").offset().top;
    //var nav0ffset = nav0ffset + 10;
    $(window).scroll(function () {
        var scrollPos = $(window).scrollTop();
        if (scrollPos >= nav0ffset) {
            $('header').addClass("fix");
        } else {
            $('header').removeClass("fix");
        }
    });
});


jQuery(document).ready(function () {
    // This button will increment the value
    $('.qtyplus').click(function (e) {
        e.preventDefault();
        var parnt = $(this).parent().children('.qty');
        var currentVal = parnt.val();
        if (!isNaN(currentVal)) {
            parnt.val(parseInt(currentVal) + 1);
        } else {
            parnt.val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function (e) {
        e.preventDefault();
        var parnt = $(this).parent().children('.qty');
        var currentVal = parnt.val();
        if (!isNaN(currentVal) && currentVal > 0) {
            parnt.val(parseInt(currentVal) - 1);
        } else {
            parnt.val(0);
        }
    });
});


/*----	Page Loader	-----*/
'use strict';
$(window).load(function () {
    $(".loader").delay(700).fadeOut();
    $("#pageloader").delay(1200).fadeOut("slow");
});


$(window).load(function () {
    $('img').each(function () {
        lezysrc = $(this).attr('data-src');
        $(this).attr("src", lezysrc);
    });
});