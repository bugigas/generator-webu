(function($){"use strict";$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html, body').animate({scrollTop:(target.offset().top-48)},1000,"easeInOutExpo");return!1}}});$('.js-scroll-trigger').click(function(){$('.navbar-collapse').collapse('hide')});$('body').scrollspy({target:'#mainNav',offset:54});var navbarCollapse=function(){if($("#mainNav").offset().top>100){$("#mainNav").addClass("navbar-shrink")}else{$("#mainNav").removeClass("navbar-shrink")}};navbarCollapse();$(window).scroll(navbarCollapse)})(jQuery);(function($){$(window).on('scroll',function(){if($(this).scrollTop()>100){$('#go_to_top').addClass('goto')}else{$('#go_to_top').removeClass('goto')}});$("#go_to_top").on("click",function(){$("html, body").animate({scrollTop:0},600);return!1})})(jQuery)
$(document).ready(function () {
    $("#gmap").click(function () {
        $("#over").slideUp(1000);
    });

});
$(document).ready(function() {
    $('.opening-hours li').eq(new Date().getDay()-1).addClass('today');
});