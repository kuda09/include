$(function () {

    "use strict";

    var getSearchNavigation = $('.navigation').find('ul').next('div').appendTo('.navigation .search');




    $(document).ready(function (){


        var getSearchNavigation = $('.navigation').find('ul').next('div').appendTo('.navigation .search');


        function DisplaySearch($node, $parent) {


            var ACTIVE_CLASS = 'activeSearch';

            /*$(document).on('click', '.search' , function (){
                $(this).find('div').first().removeClass(ACTIVE_CLASS);
            }, true);*/




            $($parent).on('click', $node, function (e) {

                e.preventDefault();
                e.stopPropagation();

                e.stopImmediatePropagation();

                var WW = $(window).width();

                if( $(this).find('div').first().hasClass(ACTIVE_CLASS)){
                    $(this).find('div').first().removeClass(ACTIVE_CLASS);
                } else {
                    $(this).find('div').first().addClass(ACTIVE_CLASS);
                }


            });


            $('.searchFormPop').on('click',function (e){
                e.stopPropagation();
                e.stopImmediatePropagation();
            });




            $(window).resize(function () {

                $($parent).find($node).find('div').first().removeClass(ACTIVE_CLASS);
            });
        }

        DisplaySearch('.search', '.navigation');
    });



});

