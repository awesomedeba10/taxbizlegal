import Choices from "choices.js";
import { Tooltip, Popover, Toast } from "bootstrap";
import Pickr from "@simonwep/pickr";
import Waves from "node-waves";
import SimpleBar from "simplebar";
import flatpickr from "flatpickr";

(function () {
    "use strict";

    /* tooltip */
    const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new Tooltip(tooltipTriggerEl)
    );

    /* popover  */
    const popoverTriggerList = document.querySelectorAll(
        '[data-bs-toggle="popover"]'
    );
    const popoverList = [...popoverTriggerList].map(
        (popoverTriggerEl) => new Popover(popoverTriggerEl)
    );

    //switcher color pickers
    const pickrContainerPrimary = document.querySelector(
        ".pickr-container-primary"
    );
    const themeContainerPrimary = document.querySelector(
        ".theme-container-primary"
    );
    const pickrContainerBackground = document.querySelector(
        ".pickr-container-background"
    );
    const themeContainerBackground = document.querySelector(
        ".theme-container-background"
    );

    /* for theme primary */
    const nanoThemes = [
        [
            "nano",
            {
                defaultRepresentation: "RGB",
                components: {
                    preview: true,
                    opacity: false,
                    hue: true,

                    interaction: {
                        hex: false,
                        rgba: true,
                        hsva: false,
                        input: true,
                        clear: false,
                        save: false,
                    },
                },
            },
        ],
    ];
    const nanoButtons = [];
    let nanoPickr = null;
    for (const [theme, config] of nanoThemes) {
        const button = document.createElement("button");
        button.innerHTML = theme;
        nanoButtons.push(button);

        button.addEventListener("click", () => {
            const el = document.createElement("p");
            pickrContainerPrimary.appendChild(el);

            /* Delete previous instance */
            if (nanoPickr) {
                nanoPickr.destroyAndRemove();
            }

            /* Apply active class */
            for (const btn of nanoButtons) {
                btn.classList[btn === button ? "add" : "remove"]("active");
            }

            /* Create fresh instance */
            nanoPickr = new Pickr(
                Object.assign(
                    {
                        el,
                        theme,
                        default: "#845adf",
                    },
                    config
                )
            );

            /* Set events */
            nanoPickr.on("changestop", (source, instance) => {
                let color = instance.getColor().toRGBA();
                let html = document.querySelector("html");
                html.style.setProperty(
                    "--primary-rgb",
                    `${Math.floor(color[0])}, ${Math.floor(
                        color[1]
                    )}, ${Math.floor(color[2])}`
                );
                /* theme color picker */
                localStorage.setItem(
                    "primaryRGB",
                    `${Math.floor(color[0])}, ${Math.floor(
                        color[1]
                    )}, ${Math.floor(color[2])}`
                );
                updateColors();
            });
        });

        themeContainerPrimary.appendChild(button);
    }
    nanoButtons[0].click();
    /* for theme primary */

    /* for theme background */
    const nanoThemes1 = [
        [
            "nano",
            {
                defaultRepresentation: "RGB",
                components: {
                    preview: true,
                    opacity: false,
                    hue: true,

                    interaction: {
                        hex: false,
                        rgba: true,
                        hsva: false,
                        input: true,
                        clear: false,
                        save: false,
                    },
                },
            },
        ],
    ];
    const nanoButtons1 = [];
    let nanoPickr1 = null;
    for (const [theme, config] of nanoThemes) {
        const button = document.createElement("button");
        button.innerHTML = theme;
        nanoButtons1.push(button);

        button.addEventListener("click", () => {
            const el = document.createElement("p");
            pickrContainerBackground.appendChild(el);

            /* Delete previous instance */
            if (nanoPickr1) {
                nanoPickr1.destroyAndRemove();
            }

            /* Apply active class */
            for (const btn of nanoButtons) {
                btn.classList[btn === button ? "add" : "remove"]("active");
            }

            /* Create fresh instance */
            nanoPickr1 = new Pickr(
                Object.assign(
                    {
                        el,
                        theme,
                        default: "#845adf",
                    },
                    config
                )
            );

            /* Set events */
            nanoPickr1.on("changestop", (source, instance) => {
                let color = instance.getColor().toRGBA();
                let html = document.querySelector("html");
                html.style.setProperty(
                    "--body-bg-rgb",
                    `${color[0]}, ${color[1]}, ${color[2]}`
                );
                document
                    .querySelector("html")
                    .style.setProperty(
                        "--body-bg-rgb2",
                        `${color[0] + 14}, ${color[1] + 14}, ${color[2] + 14}`
                    );
                document
                    .querySelector("html")
                    .style.setProperty(
                        "--light-rgb",
                        `${color[0] + 14}, ${color[1] + 14}, ${color[2] + 14}`
                    );
                document
                    .querySelector("html")
                    .style.setProperty(
                        "--form-control-bg",
                        `rgb(${color[0] + 14}, ${color[1] + 14}, ${
                            color[2] + 14
                        })`
                    );
                localStorage.removeItem("bgtheme");
                updateColors();
                html.setAttribute("data-theme-mode", "dark");
                html.setAttribute("data-menu-styles", "dark");
                html.setAttribute("data-header-styles", "dark");
                document.querySelector("#switcher-dark-theme").checked = true;
                localStorage.setItem(
                    "bodyBgRGB",
                    `${color[0]}, ${color[1]}, ${color[2]}`
                );
                localStorage.setItem(
                    "bodylightRGB",
                    `${color[0] + 14}, ${color[1] + 14}, ${color[2] + 14}`
                );
            });
        });
        themeContainerBackground.appendChild(button);
    }
    nanoButtons1[0].click();
    /* for theme background */

    document.querySelectorAll('.copy-text').forEach(el => {
        el.addEventListener('click', () => {
            const textToCopy = el.textContent;
            navigator.clipboard.writeText(textToCopy).then(() => {
                setTimeout(() => {
                    showToast("success", 'Copied to Clipboard !!');
                }, 1000);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const sessionToast = document.getElementById("sessionMsgToast");
        if (sessionToast) {
            const toast = new Toast(sessionToast);
            toast.show();
        }

        /* Choices JS */
        var choiceElements = document.querySelectorAll(".choices__select");
        choiceElements.forEach((elm) => {
            if (
                elm.classList.contains("choices__input") ||
                elm.parentElement?.classList.contains("choices")
            ) {
                return;
            }

            new Choices(elm, {
                allowHTML: true,
                removeItemButton: true,
                shouldSort: false,
                placeholderValue:
                    elm.getAttribute("data-placeholder") || "Select an option",
                searchPlaceholderValue: "Search",
            });
        });
        /* Choices JS */

        /* flatpickr date */
        const dateInputs = document.querySelectorAll(".flatpickr-date");
        if (dateInputs.length) {
            flatpickr(".flatpickr-date", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
        }
        /* flatpickr date */

        /* node waves */
        Waves.attach(".btn-wave", ["waves-light"]);
        Waves.init();
        /* node waves */

        const fs = document.querySelector(".header-fullscreen a");
        if (fs) {
            fs.addEventListener("click", function (e) {
                openFullscreen();
            });
        }

        const saveViewButtons = document.querySelectorAll(".save-custom-view");
        if (saveViewButtons.length) {
            saveViewButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    saveCustomView();
                });
            });
        }

        const filterForm = document.getElementById("filterForm");
        if (filterForm) {
            filterForm.addEventListener("submit", function (e) {
                e.preventDefault();

                const formData = new FormData(filterForm);
                const params = {};

                const arrayFields = ["services[]", "current_status[]"];

                for (const key of formData.keys()) {
                    if (arrayFields.includes(key)) {
                        const values = formData
                            .getAll(key)
                            .filter((val) => val);
                        if (values.length > 0) {
                            const cleanKey = key.replace("[]", "");
                            params[cleanKey] = values;
                        }
                    } else {
                        const value = formData.get(key);
                        if (value) params[key] = value;
                    }
                }

                const redirectUrl = filterForm.getAttribute("data-action");

                fetch(
                    window.location.origin +
                        "/internal/ops/apply-filter-params",
                    {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector(
                                'meta[name="csrf-token"]'
                            ).content,
                        },
                        body: JSON.stringify(params),
                    }
                )
                    .then((res) => res.json())
                    .then(({ param }) => {
                        if (param) {
                            window.location.href = `${redirectUrl}?payload=${encodeURIComponent(
                                param
                            )}`;
                        } else {
                            alert("Something went wrong!");
                        }
                    })
                    .catch((err) => {
                        console.error("Encryption failed", err);
                        alert("Request failed.");
                    });
            });
        }

        fetchCustomViews();
    });

    /* footer year */
    document.getElementById("year").innerHTML = new Date().getFullYear();
    /* footer year */

    /* card with close button */
    let DIV_CARD = ".card";
    let cardRemoveBtn = document.querySelectorAll(
        '[data-bs-toggle="card-remove"]'
    );
    cardRemoveBtn.forEach((ele) => {
        ele.addEventListener("click", function (e) {
            e.preventDefault();
            let $this = this;
            let card = $this.closest(DIV_CARD);
            card.remove();
            return false;
        });
    });
    /* card with close button */

    /* card with fullscreen */
    let cardFullscreenBtn = document.querySelectorAll(
        '[data-bs-toggle="card-fullscreen"]'
    );
    cardFullscreenBtn.forEach((ele) => {
        ele.addEventListener("click", function (e) {
            let $this = this;
            let card = $this.closest(DIV_CARD);
            card.classList.toggle("card-fullscreen");
            card.classList.remove("card-collapsed");
            e.preventDefault();
            return false;
        });
    });
    /* card with fullscreen */

    /* count-up */
    var i = 1;
    setInterval(() => {
        document.querySelectorAll(".count-up").forEach((ele) => {
            if (ele.getAttribute("data-count") >= i) {
                i = i + 1;
                ele.innerText = i;
            }
        });
    }, 10);
    /* count-up */

    /* back to top */
    const scrollToTop = document.querySelector(".scrollToTop");
    const $rootElement = document.documentElement;
    const $body = document.body;
    window.onscroll = () => {
        const scrollTop = window.scrollY || window.pageYOffset;
        const clientHt = $rootElement.scrollHeight - $rootElement.clientHeight;
        if (window.scrollY > 100) {
            scrollToTop.style.display = "flex";
        } else {
            scrollToTop.style.display = "none";
        }
    };
    scrollToTop.onclick = () => {
        window.scrollTo(0, 0);
    };
    /* back to top */

    /* header dropdowns scroll */
    var myHeaderShortcut = document.getElementById("header-shortcut-scroll");
    new SimpleBar(myHeaderShortcut, { autoHide: true });
    /* header dropdowns scroll */
})();

/* full screen */
function openFullscreen() {
    var elem = document.documentElement;
    let open = document.querySelector(".full-screen-open");
    let close = document.querySelector(".full-screen-close");

    if (
        !document.fullscreenElement &&
        !document.webkitFullscreenElement &&
        !document.msFullscreenElement
    ) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) {
            /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) {
            /* IE11 */
            elem.msRequestFullscreen();
        }
        close.classList.add("d-block");
        close.classList.remove("d-none");
        open.classList.add("d-none");
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
            /* Safari */
            document.webkitExitFullscreen();
            console.log("working");
        } else if (document.msExitFullscreen) {
            /* IE11 */
            document.msExitFullscreen();
        }
        close.classList.remove("d-block");
        open.classList.remove("d-none");
        close.classList.add("d-none");
        open.classList.add("d-block");
    }
}
/* full screen */

/* custom view */
function saveCustomView() {
    const url = window.location.href;

    fetch("/internal/ops/custom-view/save", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                ?.content,
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            url: url,
            name:
                prompt(
                    "Name this view (Something short-crisp to help you identifying):"
                ) || null,
        }),
    })
        .then((res) => res.json())
        .then((data) => {
            if (data.success) {
                showToast("success", data.message);

                let container = document.getElementById("custom-views-container");
                let emptyDiv = document.getElementById("empty-custom-views-div");
                if (emptyDiv) {
                    emptyDiv.remove();
                }
                let col = document.createElement("div");
                col.classList.add("col-4");
                col.innerHTML = `
                    <a href="${data.url}">
                        <div class="text-center p-3 related-app">
                            <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                <i class="bi bi-bookmark fs-16"></i>
                            </span>
                            <span class="d-block fs-12">${
                                data.name ?? "Untitled View"
                            }</span>
                        </div>
                    </a>
                `;
                container.appendChild(col);
            } else {
                showToast(
                    "danger",
                    "Something Went Wrong! View could not be saved."
                );
            }
        });
}
/* custom view */

/* toggle switches */
let customSwitch = document.querySelectorAll(".toggle");
customSwitch.forEach((e) =>
    e.addEventListener("click", () => {
        e.classList.toggle("on");
    })
);
/* toggle switches */

/* header dropdown close button */

/* for cart dropdown */
const headerbtn = document.querySelectorAll(".dropdown-item-close");
headerbtn.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        button.parentNode.parentNode.parentNode.parentNode.parentNode.remove();
        document.getElementById("cart-data").innerText = `${
            document.querySelectorAll(".dropdown-item-close").length
        } Items`;
        document.getElementById("cart-icon-badge").innerText = `${
            document.querySelectorAll(".dropdown-item-close").length
        }`;
        console.log(
            document.getElementById("header-cart-items-scroll").children.length
        );
        if (document.querySelectorAll(".dropdown-item-close").length == 0) {
            let elementHide = document.querySelector(".empty-header-item");
            let elementShow = document.querySelector(".empty-item");
            elementHide.classList.add("d-none");
            elementShow.classList.remove("d-none");
        }
    });
});
/* for cart dropdown */

/* for notifications dropdown */
const headerbtn1 = document.querySelectorAll(".dropdown-item-close1");
headerbtn1.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        button.parentNode.parentNode.parentNode.parentNode.remove();
        document.getElementById("notifiation-data").innerText = `${
            document.querySelectorAll(".dropdown-item-close1").length
        } Unread`;
        document.getElementById("notification-icon-badge").innerText = `${
            document.querySelectorAll(".dropdown-item-close1").length
        }`;
        if (document.querySelectorAll(".dropdown-item-close1").length == 0) {
            let elementHide1 = document.querySelector(".empty-header-item1");
            let elementShow1 = document.querySelector(".empty-item1");
            elementHide1.classList.add("d-none");
            elementShow1.classList.remove("d-none");
        }
    });
});
/* for notifications dropdown */

const values = [
    {
        value: "1",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/us_flag.jpg" alt=""> <span class="mx-1">United States</span>',
        id: 1,
    },
    {
        value: "2",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/spain_flag.jpg"  alt=""> <span class="ms-1">Spain</span>',
        id: 2,
    },
    {
        value: "3",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/french_flag.jpg" alt=""> <span class="ms-1">France</span>',
        id: 3,
    },
    {
        value: "4",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/germany_flag.jpg" alt=""> <span class="ms-1">Germany</span>',
        id: 4,
    },
    {
        value: "5",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/italy_flag.jpg" alt=""> <span class="ms-1">Italy</span>',
        id: 5,
    },
    {
        value: "6",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/russia_flag.jpg" alt=""> <span class="ms-1">Netherlands</span>',
        id: 6,
    },
    {
        value: "7",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/argentina_flag.jpg" alt=""> <span class="ms-1">Argentina</span>',
        id: 7,
    },
    {
        value: "8",
        label: '<img class="avatar avatar-xs avatar-rounded" src="../assets/images/flags/argentina_flag.jpg" alt=""> <span class="ms-1">Argentina</span>',
        id: 8,
    },
];
const elements = document.querySelectorAll(".choices-images");
elements.forEach(function (element) {
    if (element.choices) {
        element.choices.destroy();
    }
    const choices = new Choices(element, {
        choices: values,
    });
    element.choices = choices;
});

function fetchCustomViews() {
    fetch('/internal/ops/custom-view/get', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
    })
        .then((response) => response.json())
        .then((data) => {
            if (!data || data.length === 0) { return; }

            const container = document.getElementById("custom-views-container");
            container.innerHTML = "";

            data.forEach((view) => {
                const col = document.createElement("div");
                col.classList.add("col-4");
                col.innerHTML = `
                    <a href="${view.url}">
                        <div class="text-center p-3 related-app">
                            <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                <i class="bi bi-bookmark fs-16"></i>
                            </span>
                            <span class="d-block fs-12">${
                                view.name ?? "Untitled View"
                            }</span>
                        </div>
                    </a>
                `;
                container.appendChild(col);
            });
        })
        .catch((error) => {
            console.error("Failed to load custom views:", error);
        });
}

function showToast(toastType = "success", toastMessage = "Something happened") {
    const toast = document.getElementById("customMsgToast");
    const toastHeader = document.getElementById("customToastHeader");
    const toastBody = document.getElementById("customToastBody");

    toast.className = `toast colored-toast bg-${toastType}-transparent fade hide`;
    toastHeader.className = `toast-header bg-${toastType} text-fixed-white`;

    toastBody.innerText = toastMessage;

    const bsToast = new Toast(toast);
    bsToast.show();
}
