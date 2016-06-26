function parallax_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#parallax-anchor').offset().top;
    if (window_top > div_top) {
        $('.btncta__btn').addClass('parallax__effect');
    } else {
        $('.btncta__btn').removeClass('parallax__effect');
    }
}

$(function () {
    $(window).scroll(parallax_relocate);
    parallax_relocate();
});