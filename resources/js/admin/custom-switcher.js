import * as Popper from "@popperjs/core";

("use strict");

const ANIMATION_DURATION = 300;

const sidebar = document.getElementById("sidebar");
let mainContentDiv = document.querySelector(".main-content");

const slideHasSub = document.querySelectorAll(".nav > ul > .slide.has-sub");

const firstLevelItems = document.querySelectorAll(
    ".nav > ul > .slide.has-sub > a"
);

const innerLevelItems = document.querySelectorAll(
    ".nav > ul > .slide.has-sub .slide.has-sub > a"
);

class PopperObject {
    instance = null;
    reference = null;
    popperTarget = null;

    constructor(reference, popperTarget) {
        this.init(reference, popperTarget);
    }

    init(reference, popperTarget) {
        this.reference = reference;
        this.popperTarget = popperTarget;
        this.instance = Popper.createPopper(this.reference, this.popperTarget, {
            placement: "bottom",
            strategy: "relative",
            resize: true,
            modifiers: [
                {
                    name: "computeStyles",
                    options: {
                        adaptive: false,
                    },
                },
            ],
        });

        document.addEventListener(
            "click",
            (e) => this.clicker(e, this.popperTarget, this.reference),
            false
        );

        const ro = new ResizeObserver(() => {
            this.instance.update();
        });

        ro.observe(this.popperTarget);
        ro.observe(this.reference);
    }

    clicker(event, popperTarget, reference) {
        if (
            sidebar.classList.contains("collapsed") &&
            !popperTarget.contains(event.target) &&
            !reference.contains(event.target)
        ) {
            this.hide();
        }
    }

    hide() {
        // this.instance.state.elements.popper.style.visibility = "hidden";
    }
}

class Poppers {
    subMenuPoppers = [];

    constructor() {
        this.init();
    }

    init() {
        slideHasSub.forEach((element) => {
            this.subMenuPoppers.push(
                new PopperObject(element, element.lastElementChild)
            );
            this.closePoppers();
        });
    }

    togglePopper(target) {
        if (
            window.getComputedStyle(target).visibility === "hidden" &&
            window.getComputedStyle(target).visibility === undefined
        )
            target.style.visibility = "visible";
        else target.style.visibility = "hidden";
    }

    updatePoppers() {
        this.subMenuPoppers.forEach((element) => {
            element.instance.state.elements.popper.style.display = "none";
            element.instance.update();
        });
    }

    closePoppers() {
        this.subMenuPoppers.forEach((element) => {
            element.hide();
        });
    }
}

const slideUp = (target, duration = ANIMATION_DURATION) => {
    const { parentElement } = target;
    parentElement.classList.remove("open");
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = `${duration}ms`;
    target.style.boxSizing = "border-box";
    target.style.height = `${target.offsetHeight}px`;
    target.offsetHeight;
    target.style.overflow = "hidden";
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout(() => {
        target.style.display = "none";
        target.style.removeProperty("height");
        target.style.removeProperty("padding-top");
        target.style.removeProperty("padding-bottom");
        target.style.removeProperty("margin-top");
        target.style.removeProperty("margin-bottom");
        target.style.removeProperty("overflow");
        target.style.removeProperty("transition-duration");
        target.style.removeProperty("transition-property");
    }, duration);

    const listItem = target.closest("li");
    if (listItem) {
        // Find the first sibling <ul> element
        const siblingUL = listItem.querySelector("ul");
        if (siblingUL) {
            siblingUL.classList.remove("force-left");
        }
    }
};
const slideDown = (target, duration = ANIMATION_DURATION) => {
    const { parentElement } = target;
    parentElement.classList.add("open");
    target.style.removeProperty("display");
    let { display } = window.getComputedStyle(target);
    if (display === "none") display = "block";
    target.style.display = display;
    const height = target.offsetHeight;
    target.style.overflow = "hidden";
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.boxSizing = "border-box";
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = `${duration}ms`;
    target.style.height = `${height}px`;
    target.style.removeProperty("padding-top");
    target.style.removeProperty("padding-bottom");
    target.style.removeProperty("margin-top");
    target.style.removeProperty("margin-bottom");
    window.setTimeout(() => {
        target.style.removeProperty("height");
        target.style.removeProperty("overflow");
        target.style.removeProperty("transition-property");
        target.style.removeProperty("transition-duration");
    }, duration);

    let html = document.documentElement;

    const listItem = target.closest("li");
    // Get the position of the clicked element
    var dropdownRect = listItem.getBoundingClientRect();
    var dropdownWidth = target.getBoundingClientRect().width;

    // Calculate the right edge position
    var rightEdge = dropdownRect.right + dropdownWidth;
    var leftEdge = dropdownRect.left - dropdownWidth;

    if (html.getAttribute("dir") == "rtl") {
        if (leftEdge < 0) {
            target.classList.add("force-left");
        } else {
            if (
                listItem.closest("ul").classList.contains("force-left") &&
                rightEdge < window.innerWidth
            ) {
                target.classList.add("force-left");
            } else {
                // Reset classes and position if not moving out
                target.classList.remove("force-left");
            }
        }
    } else {
        // Check if moving out to the right
        if (rightEdge > window.innerWidth) {
            target.classList.add("force-left");
        } else {
            if (
                listItem.closest("ul").classList.contains("force-left") &&
                leftEdge > 0
            ) {
                target.classList.add("force-left");
            }
            // Check if moving out to the left
            else if (leftEdge < 0) {
                target.classList.remove("force-left");
            } else {
                // Reset classes and position if not moving out
                target.classList.remove("force-left");
            }
        }
    }
};
const slideToggle = (target, duration = ANIMATION_DURATION) => {
    let html = document.querySelector("html");
    if (
        !(
            (html.getAttribute("data-nav-style") === "menu-hover" &&
                html.getAttribute("data-toggled") === "menu-hover-closed" &&
                window.innerWidth >= 992) ||
            (html.getAttribute("data-nav-style") === "icon-hover" &&
                html.getAttribute("data-toggled") === "icon-hover-closed" &&
                window.innerWidth >= 992)
        ) &&
        target &&
        target.nodeType != 3
    ) {
        if (window.getComputedStyle(target).display === "none")
            return slideDown(target, duration);
        return slideUp(target, duration);
    }
};

const PoppersInstance = new Poppers();

/**
 * wait for the current animation to finish and update poppers position
 */
const updatePoppersTimeout = () => {
    setTimeout(() => {
        PoppersInstance.updatePoppers();
    }, ANIMATION_DURATION);
};

const defaultOpenMenus = document.querySelectorAll(".slide.has-sub.open");

defaultOpenMenus.forEach((element) => {
    element.lastElementChild.style.display = "block";
});

/**
 * handle top level submenu click
 */
firstLevelItems.forEach((element) => {
    element.addEventListener("click", () => {
        let html = document.querySelector("html");
        if (
            (html.getAttribute("data-nav-style") != "menu-hover" &&
                html.getAttribute("data-nav-style") != "icon-hover") ||
            window.innerWidth < 992 ||
            (!html.getAttribute("data-toggled") &&
                html.getAttribute("data-nav-layout") != "horizontal")
        ) {
            const parentMenu = element.closest(".nav.sub-open");
            if (parentMenu)
                parentMenu
                    .querySelectorAll(":scope > ul > .slide.has-sub > a")
                    .forEach((el) => {
                        // window.getComputedStyle(el.nextElementSibling).display !== "none" &&
                        if (
                            el.nextElementSibling.style.display === "block" ||
                            window.getComputedStyle(el.nextElementSibling)
                                .display === "block"
                        ) {
                            slideUp(el.nextElementSibling);
                        }
                    });
            slideToggle(element.nextElementSibling);
        }
    });
});

/**
 * handle inner submenu click
 */
innerLevelItems.forEach((element) => {
    let html = document.querySelector("html");
    // if ((html.getAttribute('data-nav-style') !== "menu-hover" || html.getAttribute('data-nav-style') !== "icon-hover") ) {
    element.addEventListener("click", () => {
        if (
            (html.getAttribute("data-nav-style") != "menu-hover" &&
                html.getAttribute("data-nav-style") != "icon-hover") ||
            window.innerWidth < 992 ||
            (!html.getAttribute("data-toggled") &&
                html.getAttribute("data-nav-layout") != "horizontal")
        ) {
            const innerMenu = element.closest(".slide-menu");
            if (innerMenu)
                innerMenu
                    .querySelectorAll(":scope .slide.has-sub > a")
                    .forEach((el) => {
                        // window.getComputedStyle(el.nextElementSibling).display !== "none" &&
                        // ref || window.getComputedStyle(el.nextElementSibling).display === "block"
                        if (
                            el.nextElementSibling &&
                            el.nextElementSibling?.style.display === "block"
                        ) {
                            slideUp(el.nextElementSibling);
                        }
                    });
            slideToggle(element.nextElementSibling);
        }
    });
    // }
});

/**
 * menu styles
 */
let headerToggleBtn, WindowPreSize;
(() => {
    let html = document.querySelector("html");
    headerToggleBtn = document.querySelector(".sidemenu-toggle");
    headerToggleBtn.addEventListener("click", toggleSidemenu);
    let mainContent = document.querySelector(".main-content");
    if (window.innerWidth <= 992) {
        mainContent.addEventListener("click", menuClose);
    } else {
        mainContent.removeEventListener("click", menuClose);
    }

    WindowPreSize = [window.innerWidth];
    setNavActive();
    if (
        html.getAttribute("data-nav-layout") === "horizontal" &&
        window.innerWidth >= 992
    ) {
        clearNavDropdown();
        mainContent.addEventListener("click", clearNavDropdown);
    } else {
        mainContent.removeEventListener("click", clearNavDropdown);
    }

    window.addEventListener("resize", ResizeMenu);
    switcherArrowFn();

    if (
        !localStorage.getItem("ynexlayout") &&
        !localStorage.getItem("ynexnavstyles") &&
        !localStorage.getItem("ynexverticalstyles") &&
        !document.querySelector(".landing-body") &&
        document.querySelector("html").getAttribute("data-nav-layout") !==
            "horizontal"
    ) {
        // To enable sidemenu layout styles
        // iconTextFn();
        // detachedFn();
        // closedSidemenuFn();
        // doubletFn();
        if (
            !html.getAttribute("data-vertical-style") &&
            !html.getAttribute("data-nav-style")
        ) {
            iconOverayFn();
        }
    }

    function rtlFn() {
        let html = document.querySelector("html");
        html.setAttribute("dir", "rtl");
        document
            .querySelector("#style")
            ?.setAttribute(
                "href",
                "../assets/libs/bootstrap/css/bootstrap.rtl.min.css"
            );
        //RTL
        if (localStorage.getItem("ynexrtl")) {
            document.querySelector("#switcher-rtl").checked = true;
        }
    }

    /* RTL Start */
    if (html.getAttribute("dir") === "rtl") {
        rtlFn();
    }
    /* RTL End */

    /* Horizontal Start */
    if (
        html.getAttribute("data-nav-layout") === "horizontal" &&
        !document.querySelector(".landing-body") == true
    ) {
        setTimeout(() => {
            horizontalClickFn();
        }, 1000);
    }
    /* Horizontal End */

    toggleSidemenu();
    if (html.getAttribute("data-vertical-style") === "detached") {
        html.removeAttribute("data-toggled");
    }

    if (
        (html.getAttribute("data-nav-style") === "menu-hover" ||
            html.getAttribute("data-nav-style") === "icon-hover") &&
        window.innerWidth >= 992
    ) {
        clearNavDropdown();
    }
    if (window.innerWidth < 992) {
        html.setAttribute("data-toggled", "close");
    }
})();

function ResizeMenu() {
    let html = document.querySelector("html");
    let mainContent = document.querySelector(".main-content");

    WindowPreSize.push(window.innerWidth);
    if (WindowPreSize.length > 2) {
        WindowPreSize.shift();
    }
    if (WindowPreSize.length > 1) {
        if (
            WindowPreSize[WindowPreSize.length - 1] < 992 &&
            WindowPreSize[WindowPreSize.length - 2] >= 992
        ) {
            // less than 992;
            mainContent.addEventListener("click", menuClose);
            setNavActive();
            toggleSidemenu();
            mainContent.removeEventListener("click", clearNavDropdown);
        }

        if (
            WindowPreSize[WindowPreSize.length - 1] >= 992 &&
            WindowPreSize[WindowPreSize.length - 2] < 992
        ) {
            // greater than 992
            mainContent.removeEventListener("click", menuClose);
            toggleSidemenu();
            if (html.getAttribute("data-nav-layout") === "horizontal") {
                clearNavDropdown();
                mainContent.addEventListener("click", clearNavDropdown);
            } else {
                mainContent.removeEventListener("click", clearNavDropdown);
            }
            if (
                document.documentElement.getAttribute("data-vertical-style") ==
                "doublemenu"
            ) {
                if (document.querySelector(".double-menu-active")) {
                    html.setAttribute("data-toggled", "double-menu-open");
                } else {
                    html.setAttribute("data-toggled", "double-menu-close");
                }
            } else {
                html.removeAttribute("data-toggled");
            }
        }
    }
    checkHoriMenu();
}
function menuClose() {
    let html = document.querySelector("html");
    html.setAttribute("data-toggled", "close");
    document.querySelector("#responsive-overlay").classList.remove("active");
}
function toggleSidemenu() {
    let html = document.querySelector("html");
    let sidemenuType = html.getAttribute("data-nav-layout");

    if (window.innerWidth >= 992) {
        if (sidemenuType === "vertical") {
            sidebar.removeEventListener("mouseenter", mouseEntered);
            sidebar.removeEventListener("mouseleave", mouseLeave);
            sidebar.removeEventListener("click", icontextOpen);
            mainContentDiv.removeEventListener("click", icontextClose);
            let sidemenulink = document.querySelectorAll(
                ".main-menu li > .side-menu__item"
            );
            sidemenulink.forEach((ele) =>
                ele.removeEventListener("click", doubleClickFn)
            );

            let verticalStyle = html.getAttribute("data-vertical-style");
            switch (verticalStyle) {
                // closed
                case "closed":
                    html.removeAttribute("data-nav-style");
                    if (
                        html.getAttribute("data-toggled") === "close-menu-close"
                    ) {
                        html.removeAttribute("data-toggled");
                    } else {
                        html.setAttribute("data-toggled", "close-menu-close");
                    }
                    break;
                // icon-overlay
                case "overlay":
                    html.removeAttribute("data-nav-style");
                    if (
                        html.getAttribute("data-toggled") ===
                        "icon-overlay-close"
                    ) {
                        html.removeAttribute(
                            "data-toggled",
                            "icon-overlay-close"
                        );
                        sidebar.removeEventListener("mouseenter", mouseEntered);
                        sidebar.removeEventListener("mouseleave", mouseLeave);
                    } else {
                        if (window.innerWidth >= 992) {
                            if (!localStorage.getItem("ynexlayout")) {
                                html.setAttribute(
                                    "data-toggled",
                                    "icon-overlay-close"
                                );
                            }
                            sidebar.addEventListener(
                                "mouseenter",
                                mouseEntered
                            );
                            sidebar.addEventListener("mouseleave", mouseLeave);
                        } else {
                            sidebar.removeEventListener(
                                "mouseenter",
                                mouseEntered
                            );
                            sidebar.removeEventListener(
                                "mouseleave",
                                mouseLeave
                            );
                        }
                    }
                    break;
                // icon-text
                case "icontext":
                    html.removeAttribute("data-nav-style");
                    if (
                        html.getAttribute("data-toggled") === "icon-text-close"
                    ) {
                        html.removeAttribute("data-toggled", "icon-text-close");
                        sidebar.removeEventListener("click", icontextOpen);
                        mainContentDiv.removeEventListener(
                            "click",
                            icontextClose
                        );
                    } else {
                        html.setAttribute("data-toggled", "icon-text-close");
                        if (window.innerWidth >= 992) {
                            sidebar.addEventListener("click", icontextOpen);
                            mainContentDiv.addEventListener(
                                "click",
                                icontextClose
                            );
                        } else {
                            sidebar.removeEventListener("click", icontextOpen);
                            mainContentDiv.removeEventListener(
                                "click",
                                icontextClose
                            );
                        }
                    }
                    break;
                // doublemenu
                case "doublemenu":
                    html.removeAttribute("data-nav-style");
                    if (
                        html.getAttribute("data-toggled") === "double-menu-open"
                    ) {
                        html.setAttribute("data-toggled", "double-menu-close");
                        if (document.querySelector(".slide-menu")) {
                            let slidemenu =
                                document.querySelectorAll(".slide-menu");
                            slidemenu.forEach((e) => {
                                if (
                                    e.classList.contains("double-menu-active")
                                ) {
                                    e.classList.remove("double-menu-active");
                                }
                            });
                        }
                    } else {
                        let sidemenu = document.querySelector(
                            ".side-menu__item.active"
                        );
                        if (sidemenu) {
                            html.setAttribute(
                                "data-toggled",
                                "double-menu-open"
                            );
                            if (sidemenu.nextElementSibling) {
                                sidemenu.nextElementSibling.classList.add(
                                    "double-menu-active"
                                );
                            } else {
                                document
                                    .querySelector("html")
                                    .setAttribute(
                                        "data-toggled",
                                        "double-menu-close"
                                    );
                            }
                        }
                    }

                    doublemenu();
                    break;
                // detached
                case "detached":
                    if (
                        html.getAttribute("data-toggled") === "detached-close"
                    ) {
                        html.removeAttribute("data-toggled", "detached-close");
                        sidebar.removeEventListener("mouseenter", mouseEntered);
                        sidebar.removeEventListener("mouseleave", mouseLeave);
                    } else {
                        html.setAttribute("data-toggled", "detached-close");
                        if (window.innerWidth >= 992) {
                            sidebar.addEventListener(
                                "mouseenter",
                                mouseEntered
                            );
                            sidebar.addEventListener("mouseleave", mouseLeave);
                        } else {
                            sidebar.removeEventListener(
                                "mouseenter",
                                mouseEntered
                            );
                            sidebar.removeEventListener(
                                "mouseleave",
                                mouseLeave
                            );
                        }
                    }
                    break;
                // default
                case "default":
                    iconOverayFn();
                    html.removeAttribute("data-toggled");
                    break;
            }
            let menuclickStyle = html.getAttribute("data-nav-style");
            switch (menuclickStyle) {
                case "menu-click":
                    if (
                        html.getAttribute("data-toggled") ===
                        "menu-click-closed"
                    ) {
                        html.removeAttribute("data-toggled");
                    } else {
                        html.setAttribute("data-toggled", "menu-click-closed");
                    }
                    break;
                case "menu-hover":
                    if (
                        html.getAttribute("data-toggled") ===
                        "menu-hover-closed"
                    ) {
                        html.removeAttribute("data-toggled");
                        setNavActive();
                    } else {
                        html.setAttribute("data-toggled", "menu-hover-closed");
                        clearNavDropdown();
                    }
                    break;
                case "icon-click":
                    if (
                        html.getAttribute("data-toggled") ===
                        "icon-click-closed"
                    ) {
                        html.removeAttribute("data-toggled");
                    } else {
                        html.setAttribute("data-toggled", "icon-click-closed");
                    }
                    break;
                case "icon-hover":
                    if (
                        html.getAttribute("data-toggled") ===
                        "icon-hover-closed"
                    ) {
                        html.removeAttribute("data-toggled");
                        setNavActive();
                    } else {
                        html.setAttribute("data-toggled", "icon-hover-closed");
                        clearNavDropdown();
                    }
                    break;
                //for making any horizontal style as default
                default:
            }
        }
    } else {
        if (html.getAttribute("data-toggled") === "close") {
            html.setAttribute("data-toggled", "open");
            let i = document.createElement("div");
            i.id = "responsive-overlay";
            setTimeout(() => {
                if (
                    document
                        .querySelector("html")
                        .getAttribute("data-toggled") == "open"
                ) {
                    document
                        .querySelector("#responsive-overlay")
                        .classList.add("active");
                    document
                        .querySelector("#responsive-overlay")
                        .addEventListener("click", () => {
                            document
                                .querySelector("#responsive-overlay")
                                .classList.remove("active");
                            menuClose();
                        });
                }
                window.addEventListener("resize", () => {
                    if (window.innerWidth >= 992) {
                        document
                            .querySelector("#responsive-overlay")
                            .classList.remove("active");
                    }
                });
            }, 100);
        } else {
            html.setAttribute("data-toggled", "close");
        }
    }
}
function mouseEntered() {
    let html = document.querySelector("html");
    html.setAttribute("data-icon-overlay", "open");
}
function mouseLeave() {
    let html = document.querySelector("html");
    html.removeAttribute("data-icon-overlay");
}
function icontextOpen() {
    let html = document.querySelector("html");
    html.setAttribute("data-icon-text", "open");
}
function icontextClose() {
    let html = document.querySelector("html");
    html.removeAttribute("data-icon-text");
}
function closedSidemenuFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-layout", "vertical");
    html.setAttribute("data-vertical-style", "closed");
    html.removeAttribute("data-nav-style", "");
    toggleSidemenu();
}
function detachedFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-layout", "vertical");
    html.setAttribute("data-vertical-style", "detached");
    html.setAttribute("data-header-position", "fixed");
    html.removeAttribute("data-nav-style", "");
    toggleSidemenu();
}
function iconTextFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-layout", "vertical");
    html.setAttribute("data-vertical-style", "icontext");
    html.removeAttribute("data-nav-style", "");
    toggleSidemenu();
}
function iconOverayFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-layout", "vertical");
    html.setAttribute("data-vertical-style", "overlay");
    html.removeAttribute("data-nav-style", "");
    toggleSidemenu();
    setNavActive();
}
function doubletFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-layout", "vertical");
    html.setAttribute("data-vertical-style", "doublemenu");
    html.removeAttribute("data-nav-style", "");
    toggleSidemenu();
    setTimeout(() => {
        const menuSlideItem = document.querySelectorAll(
            ".main-menu > li > .side-menu__item"
        );

        // Create the tooltip element
        const tooltip = document.createElement("div");
        tooltip.className = "custome-tooltip";
        // tooltip.textContent = "This is a tooltip";

        // Set the CSS properties of the tooltip element
        tooltip.style.setProperty("position", "fixed");
        tooltip.style.setProperty("display", "none");
        tooltip.style.setProperty("padding", "0.5rem");
        tooltip.style.setProperty("white-space", "nowrap");
        tooltip.style.setProperty("font-weight", "500");
        tooltip.style.setProperty("font-size", "0.75rem");
        tooltip.style.setProperty("background-color", "rgb(15, 23 ,42)");
        tooltip.style.setProperty("color", "rgb(255, 255 ,255)");
        tooltip.style.setProperty("margin-inline-start", "135px");
        tooltip.style.setProperty("border-radius", "0.25rem");
        tooltip.style.setProperty("z-index", "99");
        menuSlideItem.forEach((e) => {
            // Add an event listener to the menu slide item to show the tooltip
            e.addEventListener("mouseenter", () => {
                if (window.innerWidth >= 992) {
                    if (localStorage.ynexverticalstyles == "doublemenu") {
                        tooltip.style.setProperty("display", "block");
                        tooltip.textContent =
                            e.querySelector(".side-menu__label").textContent;
                        if (
                            document
                                .querySelector("html")
                                .getAttribute("data-vertical-style") ==
                            "doublemenu"
                        ) {
                            e.appendChild(tooltip);
                        }
                    }
                }
            });

            // Add an event listener to hide the tooltip
            e.addEventListener("mouseleave", () => {
                tooltip.style.setProperty("display", "none");
                tooltip.textContent =
                    e.querySelector(".side-menu__label").textContent;
            });
        });
    }, 1000);
}
function menuClickFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-style", "menu-click");
    html.removeAttribute("data-hor-style");
    html.removeAttribute("data-vertical-style");

    toggleSidemenu();
    if (html.getAttribute("data-nav-layout") === "vertical") {
        setNavActive();
    }
}
function menuhoverFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-style", "menu-hover");
    html.removeAttribute("data-hor-style");
    html.removeAttribute("data-vertical-style");

    let hasSub = document.querySelectorAll(".slide.has-sub");
    hasSub.forEach((e) => {
        e.addEventListener("mouseenter", HoverToggleInnerMenuFn);
        e.addEventListener("mouseleave", HoverToggleInnerMenuRemoveForceFn);
    });
    toggleSidemenu();
    if (html.getAttribute("data-toggled") === "menu-hover-closed") {
        clearNavDropdown();
    }
}
function iconClickFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-style", "icon-click");
    toggleSidemenu();
    if (html.getAttribute("data-nav-layout") === "vertical") {
        setNavActive();
    }
}
function iconHoverFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-style", "icon-hover");
    toggleSidemenu();
    clearNavDropdown();
}
function setNavActive() {
    let currentPath = window.location.pathname.split("/")[0];

    currentPath =
        location.pathname == "/"
            ? "index.html"
            : location.pathname.substring(1);
    currentPath = currentPath.substring(currentPath.lastIndexOf("/") + 1);
    let sidemenuItems = document.querySelectorAll(".side-menu__item");
    sidemenuItems.forEach((e) => {
        if (currentPath === "/") {
            currentPath = "index.html";
        }
        if (e.getAttribute("href") === currentPath) {
            e.classList.add("active");
            e.parentElement.classList.add("active");
            let parent = e.closest("ul");
            let parentNotMain = e.closest("ul:not(.main-menu)");
            let hasParent = true;
            // while (hasParent) {
            if (parent) {
                parent.classList.add("active");
                parent.previousElementSibling.classList.add("active");
                parent.parentElement.classList.add("active");

                if (parent.parentElement.classList.contains("has-sub")) {
                    let elemrntRef =
                        parent.parentElement.parentElement.parentElement;
                    elemrntRef.classList.add("open", "active");
                    elemrntRef.firstElementChild.classList.add("active");
                    elemrntRef.children[1].style.display = "block";
                    Array.from(elemrntRef.children[1].children).map(
                        (element) => {
                            if (element.classList.contains("active")) {
                                element.children[1].style.display = "block";
                            }
                        }
                    );
                }

                if (parent.classList.contains("child1")) {
                    slideDown(parent);
                }
                parent = parent.parentElement.closest("ul");
                //
                if (parent && parent.closest("ul:not(.main-menu)")) {
                    parentNotMain = parent.closest("ul:not(.main-menu)");
                }
                if (!parentNotMain) hasParent = false;
            } else {
                hasParent = false;
            }
        }
        // }
    });
}
function clearNavDropdown() {
    let sidemenus = document.querySelectorAll("ul.slide-menu");
    sidemenus.forEach((e) => {
        let parent = e.closest("ul");
        let parentNotMain = e.closest("ul:not(.main-menu)");
        if (parent) {
            let hasParent = parent.closest("ul.main-menu");
            while (hasParent) {
                parent.classList.add("active");
                slideUp(parent);
                //
                parent = parent.parentElement.closest("ul");
                parentNotMain = parent.closest("ul:not(.main-menu)");
                if (!parentNotMain) hasParent = false;
            }
        }
    });
}
function switcherArrowFn() {
    let slideLeft = document.querySelector(".slide-left");
    let slideRight = document.querySelector(".slide-right");

    // used to remove is-expanded class and remove class on clicking arrow buttons
    function slideClick() {
        let slide = document.querySelectorAll(".slide");
        let slideMenu = document.querySelectorAll(".slide-menu");
        slide.forEach((element, index) => {
            if (element.classList.contains("is-expanded") == true) {
                element.classList.remove("is-expanded");
            }
        });
        slideMenu.forEach((element, index) => {
            if (element.classList.contains("open") == true) {
                element.classList.remove("open");
                element.style.display = "none";
            }
        });
    }

    checkHoriMenu();

    slideLeft.addEventListener("click", () => {
        let menuNav = document.querySelector(".main-menu");
        let mainContainer1 = document.querySelector(".main-sidebar");
        let marginLeftValue = Math.ceil(
            Number(window.getComputedStyle(menuNav).marginLeft.split("px")[0])
        );
        let marginRightValue = Math.ceil(
            Number(window.getComputedStyle(menuNav).marginRight.split("px")[0])
        );
        let mainContainer1Width = mainContainer1.offsetWidth;
        if (menuNav.scrollWidth > mainContainer1.offsetWidth) {
            if (
                !(document.querySelector("html").getAttribute("dir") === "rtl")
            ) {
                if (
                    marginLeftValue < 0 &&
                    !(Math.abs(marginLeftValue) < mainContainer1Width)
                ) {
                    menuNav.style.marginRight = 0;
                    menuNav.style.marginLeft =
                        Number(menuNav.style.marginLeft.split("px")[0]) +
                        Math.abs(mainContainer1Width) +
                        "px";
                    slideRight.classList.remove("d-none");
                } else if (marginLeftValue >= 0) {
                    menuNav.style.marginLeft = "0px";
                    slideLeft.classList.add("d-none");
                    slideRight.classList.remove("d-none");
                } else {
                    menuNav.style.marginLeft = "0px";
                    slideLeft.classList.add("d-none");
                    slideRight.classList.remove("d-none");
                }
            } else {
                if (
                    marginRightValue < 0 &&
                    !(Math.abs(marginRightValue) < mainContainer1Width)
                ) {
                    menuNav.style.marginLeft = 0;
                    menuNav.style.marginRight =
                        Number(menuNav.style.marginRight.split("px")[0]) +
                        Math.abs(mainContainer1Width) +
                        "px";
                    slideRight.classList.remove("d-none");
                } else if (marginRightValue >= 0) {
                    menuNav.style.marginRight = "0px";
                    slideLeft.classList.add("d-none");
                    slideRight.classList.remove("d-none");
                } else {
                    menuNav.style.marginRight = "0px";
                    slideLeft.classList.add("d-none");
                    slideRight.classList.remove("d-none");
                }
            }
        } else {
            document.querySelector(".main-menu").style.marginLeft = "0px";
            document.querySelector(".main-menu").style.marginRight = "0px";
            slideLeft.classList.add("d-none");
        }

        let element = document.querySelector(".main-menu > .slide.open");
        let element1 = document.querySelector(".main-menu > .slide.open >ul");
        if (element) {
            element.classList.remove("open");
        }
        if (element1) {
            element1.style.display = "none";
        }

        slideClick();
        return;
        //
    });
    slideRight.addEventListener("click", () => {
        let menuNav = document.querySelector(".main-menu");
        let mainContainer1 = document.querySelector(".main-sidebar");
        let marginLeftValue = Math.ceil(
            Number(window.getComputedStyle(menuNav).marginLeft.split("px")[0])
        );
        let marginRightValue = Math.ceil(
            Number(window.getComputedStyle(menuNav).marginRight.split("px")[0])
        );
        let check = menuNav.scrollWidth - mainContainer1.offsetWidth;
        let mainContainer1Width = mainContainer1.offsetWidth;

        if (menuNav.scrollWidth > mainContainer1.offsetWidth) {
            if (
                !(document.querySelector("html").getAttribute("dir") === "rtl")
            ) {
                if (Math.abs(check) > Math.abs(marginLeftValue)) {
                    menuNav.style.marginRight = 0;
                    if (
                        !(
                            Math.abs(check) >
                            Math.abs(marginLeftValue) + mainContainer1Width
                        )
                    ) {
                        mainContainer1Width =
                            Math.abs(check) - Math.abs(marginLeftValue);
                        slideRight.classList.add("d-none");
                    }
                    menuNav.style.marginLeft =
                        Number(menuNav.style.marginLeft.split("px")[0]) -
                        Math.abs(mainContainer1Width) +
                        "px";
                    slideLeft.classList.remove("d-none");
                }
            } else {
                if (Math.abs(check) > Math.abs(marginRightValue)) {
                    menuNav.style.marginLeft = 0;
                    if (
                        !(
                            Math.abs(check) >
                            Math.abs(marginRightValue) + mainContainer1Width
                        )
                    ) {
                        mainContainer1Width =
                            Math.abs(check) - Math.abs(marginRightValue);
                        slideRight.classList.add("d-none");
                    }
                    menuNav.style.marginRight =
                        Number(menuNav.style.marginRight.split("px")[0]) -
                        Math.abs(mainContainer1Width) +
                        "px";
                    slideLeft.classList.remove("d-none");
                }
            }
        }

        let element = document.querySelector(".main-menu > .slide.open");
        let element1 = document.querySelector(".main-menu > .slide.open >ul");
        if (element) {
            element.classList.remove("open");
        }
        if (element1) {
            element1.style.display = "none";
        }

        slideClick();
        return;
    });
}
function checkHoriMenu() {
    let menuNav = document.querySelector(".main-menu");
    let mainContainer1 = document.querySelector(".main-sidebar");
    let slideLeft = document.querySelector(".slide-left");
    let slideRight = document.querySelector(".slide-right");
    let marginLeftValue = Math.ceil(
        Number(window.getComputedStyle(menuNav).marginLeft.split("px")[0])
    );
    let marginRightValue = Math.ceil(
        Number(window.getComputedStyle(menuNav).marginRight.split("px")[0])
    );
    let check = menuNav.scrollWidth - mainContainer1.offsetWidth;
    // Show/Hide the arrows
    if (menuNav.scrollWidth > mainContainer1.offsetWidth) {
        slideRight.classList.remove("d-none");
        slideLeft.classList.add("d-none");
    } else {
        slideRight.classList.add("d-none");
        slideLeft.classList.add("d-none");
        menuNav.style.marginLeft = "0px";
        menuNav.style.marginRight = "0px";
    }
    if (
        document.querySelector("html").getAttribute("data-nav-layout") ===
            "horizontal" &&
        window.innerWidth > 992
    ) {
        let activeMenus = document.querySelectorAll(".slide.has-sub.open > ul");
        activeMenus.forEach((e) => {
            let target = e;
            let html = document.documentElement;

            const listItem = target.closest("li");
            // Get the position of the clicked element
            var dropdownRect = listItem.getBoundingClientRect();
            var dropdownWidth = target.getBoundingClientRect().width;

            // Calculate the right edge position
            var rightEdge = dropdownRect.right + dropdownWidth;
            var leftEdge = dropdownRect.left - dropdownWidth;

            if (html.getAttribute("dir") == "rtl") {
                // Check if moving out to the right
                if (e.classList.contains("child1")) {
                    if (dropdownRect.left < 0) {
                        clearNavDropdown();
                    }
                }
                if (leftEdge < 0) {
                    target.classList.add("force-left");
                } else {
                    if (
                        listItem
                            .closest("ul")
                            .classList.contains("force-left") &&
                        rightEdge < window.innerWidth
                    ) {
                        target.classList.add("force-left");
                    } else {
                        // Reset classes and position if not moving out
                        target.classList.remove("force-left");
                    }
                }
            } else {
                // Check if moving out to the right
                if (e.classList.contains("child1")) {
                    if (dropdownRect.right > window.innerWidth) {
                        clearNavDropdown();
                    }
                }
                if (rightEdge > window.innerWidth) {
                    target.classList.add("force-left");
                } else {
                    if (
                        listItem
                            .closest("ul")
                            .classList.contains("force-left") &&
                        leftEdge > 0
                    ) {
                        target.classList.add("force-left");
                    }
                    // Check if moving out to the left
                    else if (leftEdge < 0) {
                        target.classList.remove("force-left");
                    } else {
                        // Reset classes and position if not moving out
                        target.classList.remove("force-left");
                    }
                }
            }
        });
        let leftForceItem = document.querySelector(
            ".slide-menu.active.force-left"
        );
        if (leftForceItem) {
            if (document.querySelector("html").getAttribute("dir") != "rtl") {
                let check = leftForceItem.getBoundingClientRect().right;
                if (check < innerWidth) {
                    leftForceItem.classList.remove("force-left");
                } else if (leftForceItem.getBoundingClientRect().left < 0) {
                    if (
                        document.documentElement.getAttribute(
                            "data-nav-style"
                        ) == "menu-hover" ||
                        document.documentElement.getAttribute(
                            "data-nav-style"
                        ) == "icon-hover" ||
                        window.innerWidth > 992
                    ) {
                        e.classList.remove("force-left");
                    }
                }
            } else {
                let check =
                    leftForceItem.getBoundingClientRect().left -
                    leftForceItem.parentElement.closest(".slide-menu")
                        ?.clientWidth -
                    leftForceItem.getBoundingClientRect().width;
                if (check > 0) {
                    if (
                        document.documentElement.getAttribute(
                            "data-nav-style"
                        ) == "menu-hover" ||
                        document.documentElement.getAttribute(
                            "data-nav-style"
                        ) == "icon-hover" ||
                        window.innerWidth > 992
                    ) {
                        leftForceItem.classList.remove("force-left");
                    }
                }
            }
        }

        let elements = document.querySelectorAll(".main-menu .has-sub ul");
        elements.forEach((e) => {
            if (isElementVisible(e)) {
                let ele = e.getBoundingClientRect();
                if (document.documentElement.getAttribute("dir") == "rtl") {
                    if (ele.left < 0) {
                        if (e.classList.contains("child1")) {
                            e.classList.remove("force-left");
                        } else {
                            e.classList.add("force-left");
                        }
                    }
                } else {
                    if (ele.right > innerWidth) {
                        if (e.classList.contains("child1")) {
                            e.classList.remove("force-left");
                        } else {
                            e.classList.add("force-left");
                        }
                    }
                }
            }
        });
    }
    if (!(document.querySelector("html").getAttribute("dir") === "rtl")) {
        // LTR check the width and adjust the menu in screen
        if (menuNav.scrollWidth > mainContainer1.offsetWidth) {
            if (Math.abs(check) < Math.abs(marginLeftValue)) {
                menuNav.style.marginLeft = -check + "px";
                slideLeft.classList.remove("d-none");
                slideRight.classList.add("d-none");
            }
        }
        if (marginLeftValue == 0) {
            slideLeft.classList.add("d-none");
        } else {
            slideLeft.classList.remove("d-none");
        }
    } else {
        // RTL check the width and adjust the menu in screen
        if (menuNav.scrollWidth > mainContainer1.offsetWidth) {
            if (Math.abs(check) < Math.abs(marginRightValue)) {
                menuNav.style.marginRight = -check + "px";
                slideLeft.classList.remove("d-none");
                slideRight.classList.add("d-none");
            }
        }
        if (marginRightValue == 0) {
            slideLeft.classList.add("d-none");
        } else {
            slideLeft.classList.remove("d-none");
        }
    }
    if (marginLeftValue != 0 || marginRightValue != 0) {
        slideLeft.classList.remove("d-none");
    }
}
function isElementVisible(element) {
    const computedStyle = window.getComputedStyle(element);
    return computedStyle.display != "none";
}
function HoverToggleInnerMenuRemoveForceFn(event) {
    let element = event.currentTarget;
    let target = element.querySelector("ul");
    target.classList.remove("force-left");
}
//
function HoverToggleInnerMenuFn(event) {
    let html = document.documentElement;
    let element = event.currentTarget;
    let target = element.querySelector("ul");
    if (
        element &&
        html.getAttribute("data-nav-layout") == "horizontal" &&
        (html.getAttribute("data-nav-style") == "menu-hover" ||
            html.getAttribute("data-nav-style") == "icon-hover")
    ) {
        const listItem = element.closest("li");
        // Get the position of the clicked element
        var dropdownRect = listItem.getBoundingClientRect();
        var dropdownWidth = target.getBoundingClientRect().width;

        // Calculate the right edge position
        var rightEdge = dropdownRect.right + dropdownWidth;
        var leftEdge = dropdownRect.left - dropdownWidth;

        if (html.getAttribute("dir") == "rtl") {
            if (leftEdge < 0) {
                target.classList.add("force-left");
            } else {
                if (
                    listItem.closest("ul").classList.contains("force-left") &&
                    rightEdge < window.innerWidth
                ) {
                    target.classList.add("force-left");
                } else {
                    // Reset classes and position if not moving out
                    target.classList.remove("force-left");
                }
            }
        } else {
            // Check if moving out to the right
            if (rightEdge > window.innerWidth) {
                target.classList.add("force-left");
            } else {
                if (
                    listItem.closest("ul").classList.contains("force-left") &&
                    leftEdge > 0
                ) {
                    target.classList.add("force-left");
                }
                // Check if moving out to the left
                else if (leftEdge < 0) {
                    target.classList.remove("force-left");
                } else {
                    // Reset classes and position if not moving out
                    target.classList.remove("force-left");
                }
            }
        }
    }
}

["switcher-icon-click", "switcher-icon-hover", "switcher-horizontal"].map(
    (element) => {
        if (document.getElementById(element)) {
            document.getElementById(element).addEventListener("click", () => {
                let menuNav = document.querySelector(".main-menu");
                let mainContainer1 = document.querySelector(".main-sidebar");
                setTimeout(() => {
                    if (menuNav.offsetWidth > mainContainer1.offsetWidth) {
                        document
                            .getElementById("slide-right")
                            .classList.remove("d-none");
                    } else {
                        document
                            .getElementById("slide-right")
                            .classList.add("d-none");
                    }
                }, 100);
            });
        }
    }
);

// double-menu click toggle start
function doublemenu() {
    if (window.innerWidth >= 992) {
        let html = document.querySelector("html");
        let sidemenulink = document.querySelectorAll(
            ".main-menu > li > .side-menu__item"
        );
        sidemenulink.forEach((ele) => {
            ele.addEventListener("click", doubleClickFn);
        });
    }
}
function doubleClickFn() {
    var $this = this;
    let html = document.querySelector("html");
    var checkElement = $this.nextElementSibling;
    if (checkElement) {
        if (!checkElement.classList.contains("double-menu-active")) {
            if (document.querySelector(".slide-menu")) {
                let slidemenu = document.querySelectorAll(".slide-menu");
                slidemenu.forEach((e) => {
                    if (e.classList.contains("double-menu-active")) {
                        e.classList.remove("double-menu-active");
                        html.setAttribute("data-toggled", "double-menu-close");
                    }
                });
            }
            checkElement.classList.add("double-menu-active");
            html.setAttribute("data-toggled", "double-menu-open");
        }
    }
}
// double-menu click toggle end

window.addEventListener("unload", () => {
    let mainContent = document.querySelector(".main-content");
    mainContent.removeEventListener("click", clearNavDropdown);
    window.removeEventListener("resize", ResizeMenu);
    let sidemenulink = document.querySelectorAll(
        ".main-menu li > .side-menu__item"
    );
    sidemenulink.forEach((ele) =>
        ele.removeEventListener("click", doubleClickFn)
    );
});

// for menu scroll to top active page
let customScrollTop = () => {
    document.querySelectorAll(".side-menu__item").forEach((ele) => {
        if (ele.classList.contains("active")) {
            let elemRect = ele.getBoundingClientRect();
            if (
                ele.children[0] &&
                ele.parentElement.classList.contains("has-sub") &&
                elemRect.top > 435
            ) {
                ele.scrollIntoView({ behavior: "smooth" });
            }
        }
    });
};
setTimeout(() => {
    customScrollTop();
}, 300);
// for menu scroll to top active page

// for menu click active close
document.querySelector(".main-content").addEventListener("click", () => {
    document.querySelectorAll(".slide-menu").forEach((ele) => {
        if (
            document.querySelector("html").getAttribute("data-toggled") ==
                "menu-click-closed" ||
            document.querySelector("html").getAttribute("data-toggled") ==
                "icon-click-closed"
        ) {
            ele.style.display = "none";
        }
    });
});
// for menu click active close

let mainContent;
(function () {
    let html = document.querySelector("html");
    mainContent = document.querySelector(".main-content");

    localStorageBackup2();
    switcherClick();
    checkOptions();
    setTimeout(() => {
        checkOptions();
    }, 1000);
})();

function switcherClick() {
    let verticalBtn,
        horiBtn,
        lightBtn,
        darkBtn,
        boxedBtn,
        fullwidthBtn,
        scrollHeaderBtn,
        scrollMenuBtn,
        fixedHeaderBtn,
        fixedMenuBtn,
        lightHeaderBtn,
        darkHeaderBtn,
        colorHeaderBtn,
        gradientHeaderBtn,
        lightMenuBtn,
        darkMenuBtn,
        colorMenuBtn,
        gradientMenuBtn,
        transparentMenuBtn,
        transparentHeaderBtn,
        regular,
        classic,
        modern,
        defaultBtn,
        closedBtn,
        iconTextBtn,
        detachedBtn,
        overlayBtn,
        doubleBtn,
        menuClickBtn,
        menuHoverBtn,
        iconClickBtn,
        iconHoverBtn,
        primaryDefaultColor1Btn,
        primaryDefaultColor2Btn,
        primaryDefaultColor3Btn,
        primaryDefaultColor4Btn,
        primaryDefaultColor5Btn,
        bgDefaultColor1Btn,
        bgDefaultColor2Btn,
        bgDefaultColor3Btn,
        bgDefaultColor4Btn,
        bgDefaultColor5Btn,
        bgImage1Btn,
        bgImage2Btn,
        bgImage3Btn,
        bgImage4Btn,
        bgImage5Btn,
        ResetAll,
        resetBtn;
    let html = document.querySelector("html");
    lightBtn = document.querySelector("#switcher-light-theme");
    darkBtn = document.querySelector("#switcher-dark-theme");
    verticalBtn = document.querySelector("#switcher-vertical");
    horiBtn = document.querySelector("#switcher-horizontal");
    boxedBtn = document.querySelector("#switcher-boxed");
    fullwidthBtn = document.querySelector("#switcher-full-width");
    fixedMenuBtn = document.querySelector("#switcher-menu-fixed");
    scrollMenuBtn = document.querySelector("#switcher-menu-scroll");
    fixedHeaderBtn = document.querySelector("#switcher-header-fixed");
    scrollHeaderBtn = document.querySelector("#switcher-header-scroll");
    lightHeaderBtn = document.querySelector("#switcher-header-light");
    darkHeaderBtn = document.querySelector("#switcher-header-dark");
    colorHeaderBtn = document.querySelector("#switcher-header-primary");
    gradientHeaderBtn = document.querySelector("#switcher-header-gradient");
    transparentHeaderBtn = document.querySelector(
        "#switcher-header-transparent"
    );
    lightMenuBtn = document.querySelector("#switcher-menu-light");
    darkMenuBtn = document.querySelector("#switcher-menu-dark");
    colorMenuBtn = document.querySelector("#switcher-menu-primary");
    gradientMenuBtn = document.querySelector("#switcher-menu-gradient");
    transparentMenuBtn = document.querySelector("#switcher-menu-transparent");
    regular = document.querySelector("#switcher-regular");
    classic = document.querySelector("#switcher-classic");
    modern = document.querySelector("#switcher-modern");
    defaultBtn = document.querySelector("#switcher-default-menu");
    menuClickBtn = document.querySelector("#switcher-menu-click");
    menuHoverBtn = document.querySelector("#switcher-menu-hover");
    iconClickBtn = document.querySelector("#switcher-icon-click");
    iconHoverBtn = document.querySelector("#switcher-icon-hover");
    closedBtn = document.querySelector("#switcher-closed-menu");
    iconTextBtn = document.querySelector("#switcher-icontext-menu");
    overlayBtn = document.querySelector("#switcher-icon-overlay");
    doubleBtn = document.querySelector("#switcher-double-menu");
    detachedBtn = document.querySelector("#switcher-detached");
    resetBtn = document.querySelector("#resetbtn");
    primaryDefaultColor1Btn = document.querySelector("#switcher-primary");
    primaryDefaultColor2Btn = document.querySelector("#switcher-primary1");
    primaryDefaultColor3Btn = document.querySelector("#switcher-primary2");
    primaryDefaultColor4Btn = document.querySelector("#switcher-primary3");
    primaryDefaultColor5Btn = document.querySelector("#switcher-primary4");
    bgDefaultColor1Btn = document.querySelector("#switcher-background");
    bgDefaultColor2Btn = document.querySelector("#switcher-background1");
    bgDefaultColor3Btn = document.querySelector("#switcher-background2");
    bgDefaultColor4Btn = document.querySelector("#switcher-background3");
    bgDefaultColor5Btn = document.querySelector("#switcher-background4");
    bgImage1Btn = document.querySelector("#switcher-bg-img");
    bgImage2Btn = document.querySelector("#switcher-bg-img1");
    bgImage3Btn = document.querySelector("#switcher-bg-img2");
    bgImage4Btn = document.querySelector("#switcher-bg-img3");
    bgImage5Btn = document.querySelector("#switcher-bg-img4");
    ResetAll = document.querySelector("#reset-all");

    // primary theme
    let primaryColor1Var = primaryDefaultColor1Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("primaryRGB", "58, 88, 146");
            html.style.setProperty("--primary-rgb", `58, 88, 146`);
            document.querySelector("#switcher-primary").checked = true;
            updateColors();
        }
    );
    let primaryColor2Var = primaryDefaultColor2Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("primaryRGB", "92, 144, 163");
            html.style.setProperty("--primary-rgb", `92, 144, 163`);
            document.querySelector("#switcher-primary1").checked = true;
            updateColors();
        }
    );
    let primaryColor3Var = primaryDefaultColor3Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("primaryRGB", "161, 90, 223");
            html.style.setProperty("--primary-rgb", `161, 90, 223`);
            document.querySelector("#switcher-primary2").checked = true;
            updateColors();
        }
    );
    let primaryColor4Var = primaryDefaultColor4Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("primaryRGB", "78, 172, 76");
            html.style.setProperty("--primary-rgb", `78, 172, 76`);
            document.querySelector("#switcher-primary3").checked = true;
            updateColors();
        }
    );
    let primaryColor5Var = primaryDefaultColor5Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("primaryRGB", "223, 90, 90");
            html.style.setProperty("--primary-rgb", `223, 90, 90`);
            document.querySelector("#switcher-primary4").checked = true;
            updateColors();
        }
    );

    // Background theme
    let backgroundColor1Var = bgDefaultColor1Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("bodyBgRGB", "20, 30, 96");
            localStorage.setItem("bodylightRGB", "25, 38, 101");
            html.setAttribute("data-theme-mode", "dark");
            html.setAttribute("data-menu-styles", "dark");
            html.setAttribute("data-header-styles", "dark");
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb", localStorage.bodyBgRGB);
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb2", localStorage.bodylightRGB);
            document
                .querySelector("html")
                .style.setProperty("--light-rgb", "25, 38, 101");
            document
                .querySelector("html")
                .style.setProperty("--form-control-bg", "rgb(25, 38, 101)");
            document
                .querySelector("html")
                .style.setProperty("--input-border", "rgba(255,255,255,0.1)");
            document.querySelector("#switcher-dark-theme").checked = true;
            document.querySelector("#switcher-menu-dark").checked = true;
            document.querySelector("#switcher-header-dark").checked = true;
            localStorage.setItem("ynexMenu", "dark");
            localStorage.setItem("ynexHeader", "dark");
        }
    );
    let backgroundColor2Var = bgDefaultColor2Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("bodyBgRGB", "8, 78, 115");
            localStorage.setItem("bodylightRGB", "13, 86, 120");
            html.setAttribute("data-theme-mode", "dark");
            html.setAttribute("data-menu-styles", "dark");
            html.setAttribute("data-header-styles", "dark");
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb", localStorage.bodyBgRGB);
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb2", localStorage.bodylightRGB);
            document
                .querySelector("html")
                .style.setProperty("--light-rgb", "13, 86, 120");
            document
                .querySelector("html")
                .style.setProperty("--form-control-bg", "rgb(13, 86, 120)");
            document
                .querySelector("html")
                .style.setProperty("--input-border", "rgba(255,255,255,0.1)");
            document.querySelector("#switcher-dark-theme").checked = true;
            document.querySelector("#switcher-menu-dark").checked = true;
            document.querySelector("#switcher-header-dark").checked = true;
            localStorage.setItem("ynexMenu", "dark");
            localStorage.setItem("ynexHeader", "dark");
        }
    );
    let backgroundColor3Var = bgDefaultColor3Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("bodyBgRGB", "90, 37, 135");
            localStorage.setItem("bodylightRGB", "95, 45, 140");
            html.setAttribute("data-theme-mode", "dark");
            html.setAttribute("data-menu-styles", "dark");
            html.setAttribute("data-header-styles", "dark");
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb", localStorage.bodyBgRGB);
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb2", localStorage.bodylightRGB);
            document
                .querySelector("html")
                .style.setProperty("--light-rgb", "95, 45, 140");
            document
                .querySelector("html")
                .style.setProperty("--form-control-bg", "rgb(95, 45, 140)");
            document
                .querySelector("html")
                .style.setProperty("--input-border", "rgba(255,255,255,0.1)");
            document.querySelector("#switcher-dark-theme").checked = true;
            document.querySelector("#switcher-menu-dark").checked = true;
            document.querySelector("#switcher-header-dark").checked = true;
            localStorage.setItem("ynexMenu", "dark");
            localStorage.setItem("ynexHeader", "dark");
        }
    );
    let backgroundColor4Var = bgDefaultColor4Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("bodyBgRGB", "24, 101, 51");
            localStorage.setItem("bodylightRGB", "29, 109, 56");
            html.setAttribute("data-theme-mode", "dark");
            html.setAttribute("data-menu-styles", "dark");
            html.setAttribute("data-header-styles", "dark");
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb", localStorage.bodyBgRGB);
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb2", localStorage.bodylightRGB);
            document
                .querySelector("html")
                .style.setProperty("--light-rgb", "29, 109, 56");
            document
                .querySelector("html")
                .style.setProperty("--form-control-bg", "rgb(29, 109, 56)");
            document
                .querySelector("html")
                .style.setProperty("--input-border", "rgba(255,255,255,0.1)");
            document.querySelector("#switcher-dark-theme").checked = true;
            document.querySelector("#switcher-menu-dark").checked = true;
            document.querySelector("#switcher-header-dark").checked = true;
            localStorage.setItem("ynexMenu", "dark");
            localStorage.setItem("ynexHeader", "dark");
        }
    );
    let backgroundColor5Var = bgDefaultColor5Btn.addEventListener(
        "click",
        () => {
            localStorage.setItem("bodyBgRGB", "120, 66, 20");
            localStorage.setItem("bodylightRGB", "125, 74, 25");
            html.setAttribute("data-theme-mode", "dark");
            html.setAttribute("data-menu-styles", "dark");
            html.setAttribute("data-header-styles", "dark");
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb", localStorage.bodyBgRGB);
            document
                .querySelector("html")
                .style.setProperty("--body-bg-rgb2", localStorage.bodylightRGB);
            document
                .querySelector("html")
                .style.setProperty("--light-rgb", "125, 74, 25");
            document
                .querySelector("html")
                .style.setProperty("--form-control-bg", "rgb(125, 74, 25)");
            document
                .querySelector("html")
                .style.setProperty("--input-border", "rgba(255,255,255,0.1)");
            document.querySelector("#switcher-dark-theme").checked = true;
            document.querySelector("#switcher-menu-dark").checked = true;
            document.querySelector("#switcher-header-dark").checked = true;
            localStorage.setItem("ynexMenu", "dark");
            localStorage.setItem("ynexHeader", "dark");
        }
    );

    // Bg image
    let bgImg1Var = bgImage1Btn.addEventListener("click", () => {
        html.setAttribute("data-bg-img", "bgimg1");
        localStorage.setItem("bgimg", "bgimg1");
    });
    let bgImg2Var = bgImage2Btn.addEventListener("click", () => {
        html.setAttribute("data-bg-img", "bgimg2");
        localStorage.setItem("bgimg", "bgimg2");
    });
    let bgImg3Var = bgImage3Btn.addEventListener("click", () => {
        html.setAttribute("data-bg-img", "bgimg3");
        localStorage.setItem("bgimg", "bgimg3");
    });
    let bgImg4Var = bgImage4Btn.addEventListener("click", () => {
        html.setAttribute("data-bg-img", "bgimg4");
        localStorage.setItem("bgimg", "bgimg4");
    });
    let bgImg5Var = bgImage5Btn.addEventListener("click", () => {
        html.setAttribute("data-bg-img", "bgimg5");
        localStorage.setItem("bgimg", "bgimg5");
    });

    /* Light Layout Start */
    let lightThemeVar = lightBtn.addEventListener("click", () => {
        lightFn();
        localStorage.setItem("ynexHeader", "light");
        localStorage.removeItem("bodylightRGB");
        localStorage.removeItem("bodyBgRGB");
        localStorage.removeItem("ynexMenu");
    });
    /* Light Layout End */

    /* Dark Layout Start */
    let darkThemeVar = darkBtn.addEventListener("click", () => {
        darkFn();
        localStorage.setItem("ynexMenu", "dark");
        localStorage.setItem("ynexHeader", "dark");
    });
    /* Dark Layout End */

    /* Light Menu Start */
    let lightMenuVar = lightMenuBtn.addEventListener("click", () => {
        html.setAttribute("data-menu-styles", "light");
        localStorage.setItem("ynexMenu", "light");
    });
    /* Light Menu End */

    /* Color Menu Start */
    let colorMenuVar = colorMenuBtn.addEventListener("click", () => {
        html.setAttribute("data-menu-styles", "color");
        localStorage.setItem("ynexMenu", "color");
    });
    /* Color Menu End */

    /* Dark Menu Start */
    let darkMenuVar = darkMenuBtn.addEventListener("click", () => {
        html.setAttribute("data-menu-styles", "dark");
        localStorage.setItem("ynexMenu", "dark");
    });
    /* Dark Menu End */

    /* Gradient Menu Start */
    let gradientMenuVar = gradientMenuBtn.addEventListener("click", () => {
        html.setAttribute("data-menu-styles", "gradient");
        localStorage.setItem("ynexMenu", "gradient");
    });
    /* Gradient Menu End */

    /* Transparent Menu Start */
    let transparentMenuVar = transparentMenuBtn.addEventListener(
        "click",
        () => {
            html.setAttribute("data-menu-styles", "transparent");
            localStorage.setItem("ynexMenu", "transparent");
        }
    );
    /* Transparent Menu End */

    /* Light Header Start */
    let lightHeaderVar = lightHeaderBtn.addEventListener("click", () => {
        html.setAttribute("data-header-styles", "light");
        localStorage.setItem("ynexHeader", "light");
    });
    /* Light Header End */

    /* Color Header Start */
    let colorHeaderVar = colorHeaderBtn.addEventListener("click", () => {
        html.setAttribute("data-header-styles", "color");
        localStorage.setItem("ynexHeader", "color");
    });
    /* Color Header End */

    /* Dark Header Start */
    let darkHeaderVar = darkHeaderBtn.addEventListener("click", () => {
        html.setAttribute("data-header-styles", "dark");
        localStorage.setItem("ynexHeader", "dark");
    });
    /* Dark Header End */

    /* Gradient Header Start */
    let gradientHeaderVar = gradientHeaderBtn.addEventListener("click", () => {
        html.setAttribute("data-header-styles", "gradient");
        localStorage.setItem("ynexHeader", "gradient");
    });
    /* Gradient Header End */

    /* Transparent Header Start */
    let transparentHeaderVar = transparentHeaderBtn.addEventListener(
        "click",
        () => {
            html.setAttribute("data-header-styles", "transparent");
            localStorage.setItem("ynexHeader", "transparent");
        }
    );
    /* Transparent Header End */

    /* Full Width Layout Start */
    let fullwidthVar = fullwidthBtn.addEventListener("click", () => {
        html.setAttribute("data-width", "fullwidth");
        localStorage.setItem("ynexfullwidth", true);
        localStorage.removeItem("ynexboxed");
    });
    /* Full Width Layout End */

    /* Boxed Layout Start */
    let boxedVar = boxedBtn.addEventListener("click", () => {
        html.setAttribute("data-width", "boxed");
        localStorage.setItem("ynexboxed", true);
        localStorage.removeItem("ynexfullwidth");
        checkHoriMenu();
    });
    /* Boxed Layout End */

    /* Regular page style Start */
    let shadowVar = regular.addEventListener("click", () => {
        html.setAttribute("data-page-style", "regular");
        localStorage.setItem("ynexregular", true);
        localStorage.removeItem("ynexclassic");
        localStorage.removeItem("ynexmodern");
    });
    /* Regular page style End */

    /* Classic page style Start */
    let noShadowVar = classic.addEventListener("click", () => {
        html.setAttribute("data-page-style", "classic");
        localStorage.setItem("ynexclassic", true);
        localStorage.removeItem("ynexregular");
        localStorage.removeItem("ynexmodern");
    });
    /* Classic page style End */

    /* modern page style Start */
    let modernVar = modern.addEventListener("click", () => {
        html.setAttribute("data-page-style", "modern");
        localStorage.setItem("ynexmodern", true);
        localStorage.removeItem("ynexregular");
        localStorage.removeItem("ynexclassic");
    });
    /* modern page style End */

    /* Header-Position Styles Start */
    let fixedHeaderVar = fixedHeaderBtn.addEventListener("click", () => {
        html.setAttribute("data-header-position", "fixed");
        localStorage.setItem("ynexheaderfixed", true);
        localStorage.removeItem("ynexheaderscrollable");
    });

    let scrollHeaderVar = scrollHeaderBtn.addEventListener("click", () => {
        html.setAttribute("data-header-position", "scrollable");
        localStorage.setItem("ynexheaderscrollable", true);
        localStorage.removeItem("ynexheaderfixed");
    });
    /* Header-Position Styles End */

    /* Menu-Position Styles Start */
    let fixedMenuVar = fixedMenuBtn.addEventListener("click", () => {
        html.setAttribute("data-menu-position", "fixed");
        localStorage.setItem("ynexmenufixed", true);
        localStorage.removeItem("ynexmenuscrollable");
    });

    let scrollMenuVar = scrollMenuBtn.addEventListener("click", () => {
        html.setAttribute("data-menu-position", "scrollable");
        localStorage.setItem("ynexmenuscrollable", true);
        localStorage.removeItem("ynexmenufixed");
    });
    /* Menu-Position Styles End */

    /* Default Sidemenu Start */
    let defaultVar = defaultBtn.addEventListener("click", () => {
        html.setAttribute("data-vertical-style", "default");
        html.setAttribute("data-nav-layout", "vertical");
        localStorage.removeItem("ynexnavstyles");
        toggleSidemenu();
        localStorage.removeItem("ynexverticalstyles");
        document.querySelectorAll(".main-menu>li.open").forEach((ele) => {
            if (!ele.classList.contains("active")) {
                ele.classList.remove("open");
                ele.querySelector("ul").style.display = "none";
            }
        });
    });
    /* Default Sidemenu End */

    /* Closed Sidemenu Start */
    let closedVar = closedBtn.addEventListener("click", () => {
        closedSidemenuFn();
        localStorage.setItem("ynexverticalstyles", "closed");
        document.querySelectorAll(".main-menu>li.open").forEach((ele) => {
            if (!ele.classList.contains("active")) {
                ele.classList.remove("open");
                ele.querySelector("ul").style.display = "none";
            }
        });
    });
    /* Closed Sidemenu End */

    /* Hover Submenu Start */
    let detachedVar = detachedBtn.addEventListener("click", () => {
        detachedFn();
        localStorage.setItem("ynexverticalstyles", "detached");
    });
    /* Hover Submenu End */

    /* Icon Text Sidemenu Start */
    let iconTextVar = iconTextBtn.addEventListener("click", () => {
        iconTextFn();
        localStorage.setItem("ynexverticalstyles", "icontext");
    });
    /* Icon Text Sidemenu End */

    /* Icon Overlay Sidemenu Start */
    let overlayVar = overlayBtn.addEventListener("click", () => {
        iconOverayFn();
        localStorage.setItem("ynexverticalstyles", "overlay");
        document.querySelectorAll(".main-menu>li.open").forEach((ele) => {
            if (!ele.classList.contains("active")) {
                ele.classList.remove("open");
                ele.querySelector("ul").style.display = "none";
            }
        });
    });
    /* Icon Overlay Sidemenu End */

    /* doublemenu Sidemenu Start */
    let doubleVar = doubleBtn.addEventListener("click", () => {
        doubletFn();
        localStorage.setItem("ynexverticalstyles", "doublemenu");
    });
    /* doublemenu Sidemenu End */

    /* Menu Click Sidemenu Start */
    let menuClickVar = menuClickBtn.addEventListener("click", () => {
        html.removeAttribute("data-vertical-style");
        menuClickFn();
        localStorage.setItem("ynexnavstyles", "menu-click");
        localStorage.removeItem("ynexverticalstyles");
        document.querySelectorAll(".main-menu>li.open").forEach((ele) => {
            if (!ele.classList.contains("active")) {
                ele.classList.remove("open");
                ele.querySelector("ul").style.display = "none";
            }
        });
        if (
            document.querySelector("html").getAttribute("data-nav-layout") ==
            "horizontal"
        ) {
            document.querySelector(".main-menu").style.marginLeft = "0px";
            document.querySelector(".main-menu").style.marginRight = "0px";
            ResizeMenu();
        }
    });
    /* Menu Click Sidemenu End */

    /* Menu Hover Sidemenu Start */
    let menuhoverVar = menuHoverBtn.addEventListener("click", () => {
        html.removeAttribute("data-vertical-style");
        menuhoverFn();
        localStorage.setItem("ynexnavstyles", "menu-hover");
        localStorage.removeItem("ynexverticalstyles");

        if (
            document.querySelector("html").getAttribute("data-nav-layout") ==
            "horizontal"
        ) {
            document.querySelector(".main-menu").style.marginLeft = "0px";
            document.querySelector(".main-menu").style.marginRight = "0px";
            ResizeMenu();
        }
    });
    /* Menu Hover Sidemenu End */

    /* icon Click Sidemenu Start */
    let iconClickVar = iconClickBtn.addEventListener("click", () => {
        html.removeAttribute("data-vertical-style");
        iconClickFn();
        localStorage.setItem("ynexnavstyles", "icon-click");
        localStorage.removeItem("ynexverticalstyles");

        if (
            document.querySelector("html").getAttribute("data-nav-layout") ==
            "horizontal"
        ) {
            document.querySelector(".main-menu").style.marginLeft = "0px";
            document.querySelector(".main-menu").style.marginRight = "0px";
            ResizeMenu();
            document.querySelector("#slide-left").classList.add("d-none");
        }
        document.querySelectorAll(".main-menu>li.open").forEach((ele) => {
            if (!ele.classList.contains("active")) {
                ele.classList.remove("open");
                ele.querySelector("ul").style.display = "none";
            }
        });
    });
    /* icon Click Sidemenu End */

    /* icon hover Sidemenu Start */
    let iconhoverVar = iconHoverBtn.addEventListener("click", () => {
        html.removeAttribute("data-vertical-style");
        iconHoverFn();
        localStorage.setItem("ynexnavstyles", "icon-hover");
        localStorage.removeItem("ynexverticalstyles");

        if (
            document.querySelector("html").getAttribute("data-nav-layout") ==
            "horizontal"
        ) {
            document.querySelector(".main-menu").style.marginLeft = "0px";
            document.querySelector(".main-menu").style.marginRight = "0px";
            ResizeMenu();
            document.querySelector("#slide-left").classList.add("d-none");
        }
    });
    /* icon hover Sidemenu End */

    /* Sidemenu start*/
    let verticalVar = verticalBtn.addEventListener("click", () => {
        let mainContent = document.querySelector(".main-content");
        // local storage
        localStorage.removeItem("ynexlayout");
        localStorage.setItem("ynexverticalstyles", "default");
        verticalFn();
        setNavActive();
        mainContent.removeEventListener("click", clearNavDropdown);

        //
        document.querySelector(".main-menu").style.marginLeft = "0px";
        document.querySelector(".main-menu").style.marginRight = "0px";

        document.querySelectorAll(".slide").forEach((element) => {
            if (
                element.classList.contains("open") &&
                !element.classList.contains("active")
            ) {
                element.querySelector("ul").style.display = "none";
            }
        });
    });
    /* Sidemenu end */

    /* horizontal start*/
    let horiVar = horiBtn.addEventListener("click", () => {
        let mainContent = document.querySelector(".main-content");
        html.removeAttribute("data-vertical-style");
        //    local storage
        localStorage.setItem("ynexlayout", "horizontal");
        localStorage.removeItem("ynexverticalstyles");

        horizontalClickFn();
        clearNavDropdown();
        mainContent.addEventListener("click", clearNavDropdown);
    });
    /* horizontal end*/

    // reset all start
    let resetVar = ResetAll.addEventListener("click", () => {
        ResetAllFn();
        setNavActive();
        document.querySelector("html").setAttribute("data-menu-styles", "dark");
        document.querySelector("#switcher-menu-dark").checked = true;
        document.querySelectorAll(".slide").forEach((element) => {
            if (
                element.classList.contains("open") &&
                !element.classList.contains("active")
            ) {
                element.querySelector("ul").style.display = "none";
            }
        });
    });
    // reset all end
}

function lightFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-theme-mode", "light");
    html.setAttribute("data-header-styles", "light");
    html.setAttribute("data-menu-styles", "dark");
    if (localStorage.getItem("ynexlayout") == "horizontal") {
        html.setAttribute("data-menu-styles", "light");
    }
    if (!localStorage.getItem("primaryRGB")) {
        html.setAttribute("style", "");
    }
    document.querySelector("#switcher-light-theme").checked = true;
    document.querySelector("#switcher-menu-dark").checked = true;
    document.querySelector("#switcher-header-light").checked = true;
    updateColors();
    localStorage.removeItem("ynexdarktheme");
    localStorage.removeItem("ynexbgColor");
    localStorage.removeItem("ynexheaderbg");
    localStorage.removeItem("ynexbgwhite");
    localStorage.removeItem("ynexmenubg");
    localStorage.removeItem("ynexmenubg");
    checkOptions();
    html.style.removeProperty("--body-bg-rgb");
    html.style.removeProperty("--body-bg-rgb2");
    html.style.removeProperty("--light-rgb");
    html.style.removeProperty("--form-control-bg");
    html.style.removeProperty("--input-border");

    document.querySelector("#switcher-background4").checked = false;
    document.querySelector("#switcher-background3").checked = false;
    document.querySelector("#switcher-background2").checked = false;
    document.querySelector("#switcher-background1").checked = false;
    document.querySelector("#switcher-background").checked = false;
    document.querySelector("#switcher-menu-light").checked = true;
    document.querySelector("#switcher-header-light").checked = true;
}

function darkFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-theme-mode", "dark");
    html.setAttribute("data-header-styles", "dark");
    html.setAttribute("data-menu-styles", "dark");
    if (!localStorage.getItem("primaryRGB")) {
        html.setAttribute("style", "");
    }
    document.querySelector("#switcher-menu-dark").checked = true;
    document.querySelector("#switcher-header-dark").checked = true;
    document.querySelector("html").style.removeProperty("--body-bg-rgb");
    document.querySelector("html").style.removeProperty("--body-bg-rgb2");
    document.querySelector("html").style.removeProperty("--light-rgb");
    document.querySelector("html").style.removeProperty("--form-control-bg");
    document.querySelector("html").style.removeProperty("--input-border");
    updateColors();
    localStorage.setItem("ynexdarktheme", true);
    localStorage.removeItem("ynexlighttheme");
    localStorage.removeItem("bodyBgRGB");
    localStorage.removeItem("ynexbgColor");
    localStorage.removeItem("ynexheaderbg");
    localStorage.removeItem("ynexbgwhite");
    localStorage.removeItem("ynexmenubg");
    checkOptions();

    document.querySelector("#switcher-background4").checked = false;
    document.querySelector("#switcher-background3").checked = false;
    document.querySelector("#switcher-background2").checked = false;
    document.querySelector("#switcher-background1").checked = false;
    document.querySelector("#switcher-background").checked = false;
    document.querySelector("#switcher-menu-dark").checked = true;
    document.querySelector("#switcher-header-dark").checked = true;
}

function verticalFn() {
    let html = document.querySelector("html");
    html.setAttribute("data-nav-layout", "vertical");
    html.setAttribute("data-vertical-style", "overlay");
    html.removeAttribute("data-nav-style");
    localStorage.removeItem("ynexnavstyles");
    html.removeAttribute("data-toggled");
    document.querySelector("#switcher-vertical").checked = true;
    document.querySelector("#switcher-menu-click").checked = false;
    document.querySelector("#switcher-menu-hover").checked = false;
    document.querySelector("#switcher-icon-click").checked = false;
    document.querySelector("#switcher-icon-hover").checked = false;
    checkOptions();
    if (!localStorage.ynexMenu) {
        html.setAttribute("data-menu-styles", "dark");
    }
}

function horizontalClickFn() {
    document.querySelector("#switcher-horizontal").checked = true;
    document.querySelector("#switcher-menu-click").checked = true;
    let html = document.querySelector("html");
    html.setAttribute("data-nav-layout", "horizontal");
    html.removeAttribute("data-vertical-style");
    if (!html.getAttribute("data-nav-style")) {
        html.setAttribute("data-nav-style", "menu-click");
    }
    if (!localStorage.ynexMenu && !localStorage.bodylightRGB) {
        html.setAttribute("data-menu-styles", "light");
        document.querySelector("#switcher-menu-light").checked = true;
        checkOptions();
    }
    checkOptions();
    checkHoriMenu();
}

function ResetAllFn() {
    let html = document.querySelector("html");
    if (localStorage.getItem("ynexlayout") == "horizontal") {
        document.querySelector(".main-menu").style.display = "block";
    }
    checkOptions();

    // clearing localstorage
    localStorage.clear();

    // reseting to light
    lightFn();

    //To reset the light-rgb
    document.querySelector("html").removeAttribute("style");

    // clearing attibutes
    // removing header, menu, pageStyle & boxed
    html.removeAttribute("data-nav-style");
    html.removeAttribute("data-menu-position");
    html.removeAttribute("data-header-position");
    html.removeAttribute("data-width");
    html.removeAttribute("data-page-style");

    // removing theme styles
    html.removeAttribute("data-bg-img");

    // clear primary & bg color
    html.style.removeProperty(`--primary-rgb`);
    html.style.removeProperty(`--body-bg-rgb`);

    // reseting to vertical
    verticalFn();
    mainContent.removeEventListener("click", clearNavDropdown);

    // reseting page style
    document.querySelector("#switcher-classic").checked = false;
    document.querySelector("#switcher-modern").checked = false;
    document.querySelector("#switcher-regular").checked = true;

    // reseting layout width styles
    document.querySelector("#switcher-full-width").checked = true;
    document.querySelector("#switcher-boxed").checked = false;

    // reseting menu position styles
    document.querySelector("#switcher-menu-fixed").checked = true;
    document.querySelector("#switcher-menu-scroll").checked = false;

    // reseting header position styles
    document.querySelector("#switcher-header-fixed").checked = true;
    document.querySelector("#switcher-header-scroll").checked = false;

    // reseting sidemenu layout styles
    document.querySelector("#switcher-default-menu").checked = true;
    document.querySelector("#switcher-closed-menu").checked = false;
    document.querySelector("#switcher-icontext-menu").checked = false;
    document.querySelector("#switcher-icon-overlay").checked = false;
    document.querySelector("#switcher-detached").checked = false;
    document.querySelector("#switcher-double-menu").checked = false;

    // resetting theme primary
    document.querySelector("#switcher-primary").checked = false;
    document.querySelector("#switcher-primary1").checked = false;
    document.querySelector("#switcher-primary2").checked = false;
    document.querySelector("#switcher-primary3").checked = false;
    document.querySelector("#switcher-primary4").checked = false;

    // resetting theme background
    document.querySelector("#switcher-background").checked = false;
    document.querySelector("#switcher-background1").checked = false;
    document.querySelector("#switcher-background2").checked = false;
    document.querySelector("#switcher-background3").checked = false;
    document.querySelector("#switcher-background4").checked = false;

    // reseting chart colors
    updateColors();

    // to reset horizontal menu scroll
    document.querySelector(".main-menu").style.marginLeft = "0px";
    document.querySelector(".main-menu").style.marginRight = "0px";
}

function checkOptions() {
    // dark
    if (localStorage.getItem("ynexdarktheme")) {
        document.querySelector("#switcher-dark-theme").checked = true;
    }

    // horizontal
    if (localStorage.getItem("ynexlayout") === "horizontal") {
        document.querySelector("#switcher-horizontal").checked = true;
        document.querySelector("#switcher-menu-click").checked = true;
    } else {
        document.querySelector("#switcher-vertical").checked = true;
    }

    // light header
    if (localStorage.getItem("ynexHeader") === "light") {
        document.querySelector("#switcher-header-light").checked = true;
    }

    // color header
    if (localStorage.getItem("ynexHeader") === "color") {
        document.querySelector("#switcher-header-primary").checked = true;
    }

    // gradient header
    if (localStorage.getItem("ynexHeader") === "gradient") {
        document.querySelector("#switcher-header-gradient").checked = true;
    }

    // dark header
    if (localStorage.getItem("ynexHeader") === "dark") {
        document.querySelector("#switcher-header-dark").checked = true;
    }
    // transparent header
    if (localStorage.getItem("ynexHeader") === "transparent") {
        document.querySelector("#switcher-header-transparent").checked = true;
    }

    // light menu
    if (localStorage.getItem("ynexMenu") === "light") {
        document.querySelector("#switcher-menu-light").checked = true;
    }

    // color menu
    if (localStorage.getItem("ynexMenu") === "color") {
        document.querySelector("#switcher-menu-primary").checked = true;
    }

    // gradient menu
    if (localStorage.getItem("ynexMenu") === "gradient") {
        document.querySelector("#switcher-menu-gradient").checked = true;
    }

    // dark menu
    if (localStorage.getItem("ynexMenu") === "dark") {
        document.querySelector("#switcher-menu-dark").checked = true;
    }
    // transparent menu
    if (localStorage.getItem("ynexMenu") === "transparent") {
        document.querySelector("#switcher-menu-transparent").checked = true;
    }

    //boxed
    if (localStorage.getItem("ynexboxed")) {
        document.querySelector("#switcher-boxed").checked = true;
    }

    //scrollable
    if (localStorage.getItem("ynexheaderscrollable")) {
        document.querySelector("#switcher-header-scroll").checked = true;
    }
    if (localStorage.getItem("ynexmenuscrollable")) {
        document.querySelector("#switcher-menu-scroll").checked = true;
    }

    //fixed
    if (localStorage.getItem("ynexheaderfixed")) {
        document.querySelector("#switcher-header-fixed").checked = true;
    }
    if (localStorage.getItem("ynexmenufixed")) {
        document.querySelector("#switcher-menu-fixed").checked = true;
    }

    //classic
    if (localStorage.getItem("ynexclassic")) {
        document.querySelector("#switcher-classic").checked = true;
    }

    //modern
    if (localStorage.getItem("ynexmodern")) {
        document.querySelector("#switcher-modern").checked = true;
    }

    // sidemenu layout style
    if (localStorage.ynexverticalstyles) {
        let verticalStyles = localStorage.getItem("ynexverticalstyles");
        switch (verticalStyles) {
            case "default":
                document.querySelector("#switcher-default-menu").checked = true;
                break;
            case "closed":
                document.querySelector("#switcher-closed-menu").checked = true;
                break;
            case "icontext":
                document.querySelector(
                    "#switcher-icontext-menu"
                ).checked = true;
                break;
            case "overlay":
                document.querySelector("#switcher-icon-overlay").checked = true;
                break;
            case "detached":
                document.querySelector("#switcher-detached").checked = true;
                break;
            case "doublemenu":
                document.querySelector("#switcher-double-menu").checked = true;
                break;
            default:
                document.querySelector("#switcher-default-menu").checked = true;
                break;
        }
    }
    // navigation menu style
    if (localStorage.ynexnavstyles) {
        let navStyles = localStorage.getItem("ynexnavstyles");
        switch (navStyles) {
            case "menu-click":
                document.querySelector("#switcher-menu-click").checked = true;
                break;
            case "menu-hover":
                document.querySelector("#switcher-menu-hover").checked = true;
                break;
            case "icon-click":
                document.querySelector("#switcher-icon-click").checked = true;
                break;
            case "icon-hover":
                document.querySelector("#switcher-icon-hover").checked = true;
                break;
        }
    }
}

/* header theme toggle */
function toggleTheme() {
    let html = document.querySelector("html");
    if (html.getAttribute("data-theme-mode") === "dark") {
        html.setAttribute("data-theme-mode", "light");
        html.setAttribute("data-header-styles", "light");
        html.setAttribute("data-menu-styles", "light");
        if (!localStorage.getItem("primaryRGB")) {
            html.setAttribute("style", "");
        }
        html.removeAttribute("data-bg-theme");
        document.querySelector("#switcher-light-theme").checked = true;
        document.querySelector("#switcher-menu-light").checked = true;
        document
            .querySelector("html")
            .style.removeProperty("--body-bg-rgb", localStorage.bodyBgRGB);
        checkOptions();
        html.style.removeProperty("--body-bg-rgb2");
        html.style.removeProperty("--light-rgb");
        html.style.removeProperty("--form-control-bg");
        html.style.removeProperty("--input-border");
        document.querySelector("#switcher-header-light").checked = true;
        document.querySelector("#switcher-menu-light").checked = true;
        document.querySelector("#switcher-light-theme").checked = true;
        document.querySelector("#switcher-background4").checked = false;
        document.querySelector("#switcher-background3").checked = false;
        document.querySelector("#switcher-background2").checked = false;
        document.querySelector("#switcher-background1").checked = false;
        document.querySelector("#switcher-background").checked = false;
        localStorage.removeItem("ynexdarktheme");
        localStorage.removeItem("ynexMenu");
        localStorage.removeItem("ynexHeader");
        localStorage.removeItem("bodylightRGB");
        localStorage.removeItem("bodyBgRGB");
        if (localStorage.getItem("ynexlayout") != "horizontal") {
            html.setAttribute("data-menu-styles", "dark");
        }
        html.setAttribute("data-header-styles", "light");
    } else {
        html.setAttribute("data-theme-mode", "dark");
        html.setAttribute("data-header-styles", "dark");
        if (!localStorage.getItem("primaryRGB")) {
            html.setAttribute("style", "");
        }
        html.setAttribute("data-menu-styles", "dark");
        document.querySelector("#switcher-dark-theme").checked = true;
        document.querySelector("#switcher-menu-dark").checked = true;
        document.querySelector("#switcher-header-dark").checked = true;
        checkOptions();
        document.querySelector("#switcher-menu-dark").checked = true;
        document.querySelector("#switcher-header-dark").checked = true;
        document.querySelector("#switcher-dark-theme").checked = true;
        document.querySelector("#switcher-background4").checked = false;
        document.querySelector("#switcher-background3").checked = false;
        document.querySelector("#switcher-background2").checked = false;
        document.querySelector("#switcher-background1").checked = false;
        document.querySelector("#switcher-background").checked = false;
        localStorage.setItem("ynexdarktheme", "true");
        localStorage.setItem("ynexMenu", "dark");
        localStorage.setItem("ynexHeader", "dark");
        localStorage.removeItem("bodylightRGB");
        localStorage.removeItem("bodyBgRGB");
    }
}
let layoutSetting = document.querySelector(".layout-setting");
layoutSetting.addEventListener("click", toggleTheme);
/* header theme toggle */

// chart colors
let myVarVal, primaryRGB;
function updateColors() {
    "use strict";
    primaryRGB = getComputedStyle(document.documentElement)
        .getPropertyValue("--primary-rgb")
        .trim();

    //get variable
    myVarVal = localStorage.getItem("primaryRGB") || primaryRGB;

    // if (document.querySelector("#waterTrack") !== null) {
    //     waterTrack();
    // }
}

function localStorageBackup2() {
    if (localStorage.bodyBgRGB || localStorage.bodylightRGB) {
        document.querySelector("#switcher-dark-theme").checked = true;
        document.querySelector("#switcher-menu-dark").checked = true;
        document.querySelector("#switcher-header-dark").checked = true;
    }

    if (localStorage.bodyBgRGB && localStorage.bodylightRGB) {
        if (localStorage.bodyBgRGB == "20, 30, 96") {
            document.querySelector("#switcher-background").checked = true;
        }
        if (localStorage.bodyBgRGB == "8, 78, 115") {
            document.querySelector("#switcher-background1").checked = true;
        }
        if (localStorage.bodyBgRGB == "90, 37, 135") {
            document.querySelector("#switcher-background2").checked = true;
        }
        if (localStorage.bodyBgRGB == "24, 101, 51") {
            document.querySelector("#switcher-background3").checked = true;
        }
        if (localStorage.bodyBgRGB == "120, 66, 20") {
            document.querySelector("#switcher-background4").checked = true;
        }
    }

    if (localStorage.primaryRGB) {
        if (localStorage.primaryRGB == "58, 88, 146") {
            document.querySelector("#switcher-primary").checked = true;
        }
        if (localStorage.primaryRGB == "92, 144, 163") {
            document.querySelector("#switcher-primary1").checked = true;
        }
        if (localStorage.primaryRGB == "161, 90, 223") {
            document.querySelector("#switcher-primary2").checked = true;
        }
        if (localStorage.primaryRGB == "78, 172, 76") {
            document.querySelector("#switcher-primary3").checked = true;
        }
        if (localStorage.primaryRGB == "223, 90, 90") {
            document.querySelector("#switcher-primary4").checked = true;
        }
    }

    if (localStorage.ynexnavstyles) {
        let navStyles = localStorage.getItem("ynexnavstyles");
        if (navStyles == "menu-click") {
            menuClickFn();
            document.documentElement.setAttribute(
                "data-toggled",
                "menu-click-closed"
            );
        }
        if (navStyles == "menu-hover") {
            menuhoverFn();
            document.documentElement.setAttribute(
                "data-toggled",
                "menu-hover-closed"
            );
        }
        if (navStyles == "icon-click") {
            iconClickFn();
            document.documentElement.setAttribute(
                "data-toggled",
                "icon-click-closed"
            );
        }
        if (navStyles == "icon-hover") {
            iconHoverFn();
            document.documentElement.setAttribute(
                "data-toggled",
                "icon-hover-closed"
            );
        }
    }
}
