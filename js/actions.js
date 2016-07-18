/**
 * Created by Stefan on 10/07/2016.
 */
$(document).ready(function () {
    // bij het laden van de page body hide
    $('.actions--wrap__body').hide();

    $('.actions--wrap__title').hover(function () {
        // Hover de titel balk body tonen
        $('.actions--wrap__body').slideToggle(500);
        // caret fontawesome animeren
        $(this).find('i').toggleClass('fa-caret-up fa-caret-down');
    });
});


/**
 * Onderstaande een manier om hover en click te combineren maar geeft
 * een verwarend effect
 */
    // var hoverOrClick = function () {
    // $('.actions--wrap__body').slideToggle(500);
    // $(this).find('i').toggleClass('fa-caret-up fa-caret-down');
    // }
    // $('.actions--wrap__title').click(hoverOrClick). hover(hoverOrClick);