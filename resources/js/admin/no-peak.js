const zumy = document.all;
const vo91 = zumy && !document.getElementById;
const g2lu = zumy && document.getElementById;
const f20o = !zumy && document.getElementById;
const dk0l = document.layers;

// Disable right-click context menu
function vzhs(e) {
    try {
        if (vo91) alert("");
    } catch (err) {}
    if (e && e.stopPropagation) e.stopPropagation();
    return false;
}

// IE-specific right-click blocker
function qb9o() {
    if (event.button === 2 || event.button === 3) vzhs();
}

// Netscape-style right-click blocker
function ludw(e) {
    return e.which === 3 ? vzhs() : true;
}

// Assign context menu blockers
if (g2lu || f20o) {
    document.oncontextmenu = vzhs;
} else if (vo91) {
    document.onmousedown = qb9o;
} else if (dk0l) {
    window.captureEvents(Event.MOUSEDOWN);
    window.onmousedown = ludw;
}

// Block text selection on non-form elements
function qmkl(e) {
    const tag =
        e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
    if (tag !== "INPUT" && tag !== "TEXTAREA" && tag !== "BUTTON") {
        return false;
    }
}

function mizw() {
    return false;
}

// Disable selection and drag
if (zumy) {
    document.onselectstart = qmkl;
    document.ondragstart = mizw;
}

// Prevent copying text outside inputs/textareas
if (document.addEventListener) {
    document.addEventListener(
        "copy",
        function (e) {
            const tag = e.target.tagName;
            if (tag !== "INPUT" && tag !== "TEXTAREA") e.preventDefault();
        },
        false
    );

    document.addEventListener(
        "dragstart",
        function (e) {
            e.preventDefault();
        },
        false
    );
}

// Shortcut key block setup
function lcbk(evt) {
    if (evt.preventDefault) {
        evt.preventDefault();
    } else {
        evt.keyCode = 37;
        evt.returnValue = false;
    }
}

// Modifier keys
const SHIFT = 1;
const CTRL = 2;
const ALT = 4;

const blockedCombos = [
    [CTRL, 65], // Ctrl+A
    [CTRL, 67], // Ctrl+C
    [CTRL, 80], // Ctrl+P
    [CTRL, 83], // Ctrl+S
    [CTRL, 85], // Ctrl+U
    [SHIFT | CTRL, 73], // Ctrl+Shift+I
    [SHIFT | CTRL, 74], // Ctrl+Shift+J
    [SHIFT, 121], // Shift+F10
    [0, 123], // F12
];

function c08j(evt) {
    evt = evt || window.event;
    if (!evt) return;

    let keyCode = evt.keyCode || evt.charCode;
    if (!keyCode && evt.charCode) {
        keyCode = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
    }

    for (let i = 0; i < blockedCombos.length; i++) {
        const [modifier, key] = blockedCombos[i];
        const isMatch =
            evt.shiftKey === ((modifier & SHIFT) === SHIFT) &&
            (evt.ctrlKey || evt.metaKey) === ((modifier & CTRL) === CTRL) &&
            evt.altKey === ((modifier & ALT) === ALT) &&
            (keyCode === key || key === 0);

        if (isMatch) {
            lcbk(evt);
            break;
        }
    }
}

// Assign keydown/keypress blocking
if (document.addEventListener) {
    document.addEventListener("keydown", c08j, true);
    document.addEventListener("keypress", c08j, true);
} else if (document.attachEvent) {
    document.attachEvent("onkeydown", c08j);
}
