import $ from 'jquery';

$(function() {
    $(".multi-dropdown-menu").hover(
        function () {
            $(this).addClass("mod-dropdown-open"); // On mouse enter
        },
        function () {
            $(this).removeClass("mod-dropdown-open"); // On mouse leave
        }
    );
});

$(function() {
    $(".mod-flex > .mod-dropdown-submenu > a").hover(
        function () {
            $(this).find(".childDisplayHover").removeClass("mod-hidden");
        },
        function () {
            $(this).find(".childDisplayHover").addClass("mod-hidden");
        }
    );
});

$(function() {
    $(".multi-dropdown-menu").hover(
        function () {
            $(this).addClass("mod-dropdown-open"); // On mouse enter
        },
        function () {
            $(this).removeClass("mod-dropdown-open"); // On mouse leave
        }
    );

    $(".mobile-spcl-sidenav-toggle").on("click", function () {
        $(".mobile-spcl-sidenav").toggleClass("mod-sidenav-open");
        $('.mobile-sidenav-bc').toggleClass("mod-hidden");
    });

    $(".mobile-sidenav-bc").on('click', function(){
        $('.mobile-sidenav-bc').toggleClass("mod-toggle-close")
        $('.mobile-sidenav-content').toggleClass('mod-sidenav-open')
        $(".mobile-spcl-sidenav-toggle").toggleClass("mod-hidden");
    });
});

document.querySelectorAll('.services-nav-item').forEach(item => {
    item.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target'); // Get target section ID
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 180, // Adjust for navbar height if needed
                behavior: 'smooth' // Enables smooth scrolling effect
            });
        }
    });
});
