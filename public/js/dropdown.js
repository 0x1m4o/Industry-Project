// Dropdown Hover
$(document).ready(function () {
    // Add hover action for dropdowns
    let dropdown_hover = $(".dropdown-hover");
    let dropdown_not_hover = $(".dropdown-not-hover");
    dropdown_hover.on("mouseover", function () {
        let menu = $(this).find(".dropdown-menu-profile"),
            toggle = $(this).find(".dropdown-toggle"),
            otoggle = $(this).find(".dropdown-toggle-not-hover");
        dropdown_not_hover.css("display", "none");
        dropdown_not_hover.removeClass("show");
        menu.addClass("show");
        toggle.addClass("show").attr("aria-expanded", true);
        otoggle.removeClass("show").attr("aria-expanded", false);
    });
    dropdown_hover.on("mouseout", function () {
        let menu = $(this).find(".dropdown-menu-profile"),
            toggle = $(this).find(".dropdown-toggle"),
            otoggle = $(this).find(".dropdown-toggle-not-hover");
        menu.removeClass("show");
        toggle.removeClass("show").attr("aria-expanded", false);
        otoggle.addClass("show").attr("aria-expanded", false);
    });
});

// Dropdown Slide
$(".dropdown").on("show.bs.dropdown", function (e) {
    $(this)
        .find(".dropdown-menu")
        .first()
        .stop(true, true)
        .slideDown(300)
        .fadeIn({ duration: 300, opacity: 0, queue: false });
});

$(".dropdown").on("hide.bs.dropdown", function (e) {
    $(this)
        .find(".dropdown-menu")
        .first()
        .stop(true, true)
        .slideUp(200)
        .fadeOut({ duration: 500, opacity: 0, queue: false });
});

// Dropdown Propagation

$(".dropdown-keep-open").on("hide.bs.dropdown", function (e) {
    if (!e.clickEvent) {
        return true;
    }

    var target = $(e.clickEvent.target);

    return !(
        target.hasClass("dropdown-keep-open") ||
        target.parents(".dropdown-keep-open").length
    );
});

$(".btn-closed").click(function () {
    $(this).closest(".dropdown-menu").prev().dropdown("toggle");
});


