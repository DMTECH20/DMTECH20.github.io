           
$(function(){
    'use strict';

    $('body').css('paddingTop', $('startnav').innerHeight()); 

    $('.dropdown-content  a').click(function(e) {
        e.preventDefault(); 
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top - 1
        }, 1000);
    });

    $('.dropdown-content a').click(function () {

$(this).addClass('active').parent().siblings().find('a').removeClass('active');

    });
    $(window).scroll(function () {
        $('.block').each(function() {

if ($(window).scrollTop() > $(this).offset().top) {

    var blockID = $(this).attr('id');
    $('.dropdown-content a').removeClass('active');
    $('.dropdown-content a[data-scroll="' + blockID + '"]').addClass('active'); 
}
        });
    });
});



$(function(){
    'use strict';

    $('body').css('paddingTop', $('startnav').innerHeight()); 

    $('.panel-body  a').click(function(e) {
        e.preventDefault(); 
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top - 1
        }, 1000);
    });

    $('.panel-body a').click(function () {

$(this).addClass('active').parent().siblings().find('a').removeClass('active');

    });
    $(window).scroll(function () {
        $('.block').each(function() {

if ($(window).scrollTop() > $(this).offset().top) {

    var blockID = $(this).attr('id');
    $('.panel-body a').removeClass('active');
    $('.panel-body a[data-scroll="' + blockID + '"]').addClass('active'); 
}
        });
    });
});


