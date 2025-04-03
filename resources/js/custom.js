import $ from 'jquery';

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

document.addEventListener("DOMContentLoaded", function () {
    const navList = document.querySelector(".services-nav-ul");
    const itemsCount = navList.children.length;
    navList.style.setProperty("--items", itemsCount);
});

$(function() {
    $(".multi-dropdown-menu").hover(
        function () {
            $(this).addClass("mod-dropdown-open"); // On mouse enter
        },
        function () {
            let $this = $(this);
            if (!$this.is(":hover") && !$(".services-shortcut").is(":hover")) {
                $this.removeClass("mod-dropdown-open"); // Remove class only if shortcut-container is not hovered
            } else {
                console.log('uooo')
            }
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
                top: targetElement.offsetTop - 135, // Adjust for navbar height if needed
                behavior: 'smooth' // Enables smooth scrolling effect
            });
        }
    });
});



