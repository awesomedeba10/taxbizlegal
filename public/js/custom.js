$(function() {
    $(".multi-dropdown-menu").hover(
        function () {
            $(this).addClass("lil-dropdown-open"); // On mouse enter
        },
        function () {
            $(this).removeClass("lil-dropdown-open"); // On mouse leave
        }
    );
});

$(function() {
    $(".lil-flex > .lil-dropdown-submenu > a").hover(
        function () {
            $(this).find(".childDisplayHover").removeClass("lil-hidden");
        },
        function () {
            $(this).find(".childDisplayHover").addClass("lil-hidden");
        }
    );
});

