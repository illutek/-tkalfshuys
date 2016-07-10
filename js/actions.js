/**
 * Created by Stefan on 10/07/2016.
 */
$(document).ready(function () {
    $('.actions--wrap__title').hover(function () {
        $('.actions--wrap__body').toggleClass('action__hide');
        $(this).find("i").toggleClass('fa-caret-up fa-caret-down');
    });
});
