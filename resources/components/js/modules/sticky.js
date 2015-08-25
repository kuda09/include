$(function(){

    "use strict";
    var stickyHeaderTop = $('.headerRow2').offset().top, stickyHeader;

    stickyHeader = function () {

        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyHeaderTop) {

            $('.headerRow2').addClass('sticky');
        } else {
            $('.headerRow2').removeClass('sticky');
        }
    } ;

    stickyHeader();

    $(window).scroll(function (){
        stickyHeader();
    });


})