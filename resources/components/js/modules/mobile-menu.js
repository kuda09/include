$(function (){
    var logoTarget,
        navTarget,
        ACTIVE_CLASS = 'active';

    function setClick (logoTaget, navTarget){

        $(logoTaget).on('click', function (){

            if($(this).hasClass(ACTIVE_CLASS)) {
                $(this).removeClass(ACTIVE_CLASS);

                $('.headerRow2').find(navTarget).removeClass(ACTIVE_CLASS);

            } else {
                $(this).addClass(ACTIVE_CLASS);

                $('.headerRow2').find(navTarget).addClass(ACTIVE_CLASS);
            }

        })
    }

    setClick('.menuIcon', '.navigation');



})
