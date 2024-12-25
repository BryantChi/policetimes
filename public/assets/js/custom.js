(function ($) {
    "use strict";

    $(window).on("load", function () {
        $('.site-wrap').addClass('fixed-top');
        // 隱藏 Loading 效果
        setTimeout(function () {
            $("#loading").fadeOut("slow");
        }, 350);
        
    });

    $(function () {
        
        // Back to top button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('.back-to-top').fadeIn('slow');
                $('.site-navbar').addClass('site-navbar-scroll'); 
            } else {
                $('.back-to-top').fadeOut('slow');
                $('.site-navbar').removeClass('site-navbar-scroll');
            }
        });
        $('.back-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 1500);
            return false;
        });

        // 當頁面加載完成後，將 id="main" 的區域自動滾動到可視範圍內
        $('html, body').animate({
            scrollTop: $('#main').offset().top - 30
            //  - $('.site-navbar').height()
        }, 500); // 1000 毫秒（1 秒）滾動到該區域

        
    });

})(jQuery);