$(".sidebar__list__item").hover(function() {
    $(this).find(".sidebar__list__link").css("color", "#101d2c");
});
$(".sidebar__list__item").mouseleave(function() {
    $(this).find(".sidebar__list__link").css("color", "white");
});