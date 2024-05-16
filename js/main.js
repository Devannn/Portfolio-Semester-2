// $(document).ready(function () {
//     $(window).on("scroll", function () {
//         if ($(document).scrollTop() > 700) {
//             $("#main-nav").addClass('bg-dark').removeClass('bg-transparent');
//         }
//         else {
//             $("#main-nav").addClass('bg-transparent').removeClass('bg-dark');
//         }
//     })
// });

$(window).scroll(function () {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 750);
});