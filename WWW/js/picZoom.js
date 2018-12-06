//评论放大图片
;
(function ($) {
    $.fn.picZoom = function (options) {

        return this.each(function () {
            $('.rev_photo_bar li').click(function () {
                $('.rev_photo_bar li').removeClass('cu');
                $(this).addClass('cu');
                $('.pto_arrow').hide();
                $('.rev_photo_stage img').addClass('cur_bigimg');
                var currentimg = $(this).find('.sm_img');
                var imgData = currentimg.data('img');
                $('.cur_bigimg').attr('src', imgData);

                if ($('.cur_bigimg').css('opacity') == 0) {
                    $('.cur_bigimg').animate({
                        opacity: 1
                    });
                }
                var _this = $(this).parent();
                if ($('.rev_photo_bar').hasClass('rev_photo_stage')) {
                    $('.rev_photo_stage').toggle();

                } else {
                    $('.rev_photo_stage').insertAfter(_this).css('display', 'block');
                    $(this).find('.pto_arrow').show();
                }

            });
            $('.pto_close').click(function () {
                $('.pto_arrow').hide();
                $('.rev_photo_stage').slideUp();
            });
        });
    };
})(jQuery);