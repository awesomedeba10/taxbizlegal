var su = Object.defineProperty;
var au = (i, t, e) => t in i ? su(i, t, {
    enumerable: !0,
    configurable: !0,
    writable: !0,
    value: e
}) : i[t] = e;
var ou = (i, t) => () => (t || i((t = {
    exports: {}
}).exports, t),
t.exports);
var k = (i, t, e) => au(i, typeof t != "symbol" ? t + "" : t, e);
import {o as Kt, c as jt, g as Sl, n as ve} from "./onDomReady-CSuAWNBp.js";
import {n as Tl, c as lu, C as cu} from "./bootstrap.esm-BuZXH-rc.js";
var hb = ou( (Ve, We) => {
    class uu {
        initialize(t) {
            this.observer = new IntersectionObserver(e => {
                e.forEach(n => !n.isIntersecting || this.recalculateHeight(n.target))
            }
            ),
            Kt( () => this.initTextarea(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initTextarea(e.detail.snippet))
        }
        initTextarea(t) {
            t.querySelectorAll("textarea[data-textarea]").forEach(n => {
                n.style.height = `${n.scrollHeight}px`,
                n.style.overflowY = "hidden",
                n.addEventListener("input", () => this.recalculateHeight(n)),
                this.observer.observe(n)
            }
            )
        }
        recalculateHeight(t) {
            t.style.height = "auto",
            t.style.height = `${t.scrollHeight}px`
        }
    }
    class cv {
        initialize(t) {
            Kt( () => this.initWysiwyg(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initWysiwyg(e.detail.snippet))
        }
        initWysiwyg(t) {
            t.querySelectorAll("[data-wysiwyg]").forEach(n => {
                const r = n.dataset.wysiwygType === "full" ? this._getFullConfig(n) : this._getMinimalConfig();
                this._initQuill(n, r)
            }
            )
        }
        _initQuill(t, e) {
            const n = new x(t,e)
              , r = () => n.getContents().ops.filter(d => !!d.attributes || d.insert !== `
`).length <= 0
              , s = t.dataset.wysiwyg;
            if (!s)
                throw new Error("WYSIWYG editor name is missing. Set value to data-wysiwys attribute.");
            const a = document.querySelector(`input[name="${s}"]`);
            if (!a)
                throw new Error("Missing input for WYSIWYG content.");
            let o = a.value
              , l = o;
            a.addEventListener("focus", () => n.focus());
            const u = () => {
                t.classList.toggle("is-filled", !r()),
                o = r() ? "" : n.getSemanticHTML(),
                a.value = o
            }
              , h = () => {
                t.classList.toggle("is-focused", n.hasFocus())
            }
              , f = (d, g) => {
                d === null && g !== null && (o !== l && a.dispatchEvent(new Event("change")),
                l = o)
            }
            ;
            u(),
            n.on("text-change", u),
            n.on("selection-change", h),
            n.on("selection-change", f),
            t.dataset.wysiwygDisabled !== void 0 && (n.disable(),
            this._getToolbar(n).classList.add("is-disabled"))
        }
        _getToolbar(t) {
            var e;
            return (e = t.theme.modules.toolbar) == null ? void 0 : e.container
        }
        _getFullConfig(t) {
            const e = {
                modules: {
                    toolbar: [[{
                        header: 2
                    }, {
                        header: 3
                    }, {
                        size: ["small", !1, "large"]
                    }, "clean"], ["bold", "italic", "link"], [{
                        align: []
                    }, {
                        list: "bullet"
                    }, {
                        list: "ordered"
                    }], ["image"]]
                },
                theme: "snow"
            }
              , n = t.dataset.wysiwygUpload;
            return n && (e.modules.imageUploader = {
                upload: async r => {
                    try {
                        const s = new FormData;
                        s.append("file", r);
                        const a = await ve.makeRequest("POST", n, s, {
                            history: !1
                        });
                        return a == null ? void 0 : a.url
                    } catch (s) {
                        console.error(s)
                    }
                }
            }),
            e
        }
        _getMinimalConfig() {
            return {
                modules: {
                    toolbar: [["bold", "italic", {
                        list: "bullet"
                    }]]
                },
                theme: "snow"
            }
        }
    }
    const si = typeof JS_LOCALIZE < "u" ? JS_LOCALIZE : {};
    class uv {
        constructor() {
            this.classes = {
                hasSearch: "has-search",
                hasExternalItems: "has-external-items",
                filled: "is-filled",
                searching: "is-searching",
                hidden: "is-hidden",
                addable: "is-addable"
            }
        }
        getDefaultConfig() {
            const t = this;
            return {
                ...si.choices,
                allowHTML: !0,
                shouldSort: !1,
                position: "bottom",
                searchResultLimit: 10,
                duplicateItemsAllowed: !1,
                callbackOnInit: function() {
                    t.initChoices(this)
                }
            }
        }
        checkClasses(t) {
            const e = t.getValue();
            t.containerOuter.element.classList.toggle(this.classes.filled, Array.isArray(e) ? e.length > 0 : !!e),
            t.containerOuter.element.classList.toggle(this.classes.searching, !!t.input.element.value)
        }
        initChoices(t) {
            const e = t.passedElement.element;
            e.addEventListener("change", () => this.checkClasses(t)),
            t.input.element.addEventListener("input", () => this.checkClasses(t)),
            this.checkClasses(t),
            e.addEventListener("addItem", () => {
                setTimeout( () => t.containerOuter.element.classList.remove(this.classes.searching), 0)
            }
            )
        }
        initSearch(t, e, n, r) {
            t.containerOuter.element.classList.add(this.classes.hasSearch);
            let s;
            const a = t.passedElement.element;
            a.addEventListener("search", async o => {
                const l = o;
                clearTimeout(s),
                s = setTimeout(async () => {
                    const u = l.detail.value;
                    if (u.length > 0) {
                        const h = await this._fetchItems(t, u, e(a), n, r);
                        t.clearChoices(),
                        t.setChoices(h, void 0, void 0, !0),
                        t.passedElement.element.dispatchEvent(new CustomEvent("choicesUpdated",{
                            detail: h
                        }))
                    }
                }
                , 500)
            }
            )
        }
        _createItems(t, e, n, r= () => !1) {
            return Array.isArray(t) ? t.map(s => {
                const a = {
                    label: s[e],
                    value: s[n]
                };
                return a.disabled = r(a),
                a
            }
            ) : []
        }
        async _fetchItems(t, e, n, r, s) {
            const a = "%query%"
              , o = n.replace(a, e).replace(encodeURI(a), e)
              , l = new URL(o,window.location.origin);
            l.searchParams.append("limit", "10");
            const u = t.getValue();
            let h = [];
            Array.isArray(u) ? h = u.map(d => d.value + "") : u && (h = [u.value + ""]);
            const f = await ve.makeRequest("GET", l, null, {
                history: !1,
                loadable: t.containerOuter.element
            });
            return f ? this._createItems(f, r, s, d => h.includes(d.value + "")) : []
        }
        initAdd(t, e, n, r, s={}) {
            const a = document.getElementById(t.passedElement.element.dataset.selectAddButton);
            let o = t.getValue(!1);
            const l = () => {
                const u = t.input.element.value
                  , h = o.map(f => (f.label + "").toLocaleLowerCase());
                a.disabled = u === "" || h.includes(u.toLocaleLowerCase()),
                t.containerOuter.element.classList.toggle(this.classes.addable, u !== "")
            }
            ;
            t.passedElement.element.addEventListener("choicesUpdated", u => {
                o = u.detail,
                l()
            }
            ),
            t.input.element.addEventListener("input", l),
            a.addEventListener("click", async u => {
                t.input.element.disabled = !0;
                const h = t.input.element.value
                  , f = await this._insertValue(t, h, e, n, r, s);
                t.input.element.value = "",
                t.clearChoices(),
                t.setChoices([f], "value", "label", !0),
                t.setChoiceByValue(f.value),
                t.input.element.disabled = !1,
                t.input.element.focus(),
                l(),
                t.passedElement.element.dispatchEvent(new Event("change"))
            }
            )
        }
        async _insertValue(t, e, n, r, s, a={}) {
            const o = new URL(n,window.location.origin)
              , l = {
                ...a,
                [r]: e
            }
              , u = await ve.makeRequest("POST", o, JSON.stringify(l), {
                fetch: {
                    headers: {
                        "Content-Type": "application/json"
                    }
                },
                history: !1,
                loadable: t.containerOuter.element
            });
            return {
                label: u[r],
                value: u[s]
            }
        }
        initExternalItems(t, e) {
            const n = t.passedElement.element;
            t.containerOuter.element.classList.add(this.classes.hasExternalItems),
            t.getValue().forEach(a => e.append(this.createBadge(t, a.value, a.label + ""))),
            n.addEventListener("addItem", a => {
                const o = a;
                e.append(this.createBadge(t, o.detail.value, o.detail.label + ""))
            }
            ),
            n.addEventListener("removeItem", a => {
                var l;
                const o = a;
                (l = e.querySelector(`[data-value="${o.detail.value}"]`)) == null || l.remove()
            }
            );
            let r = !1;
            t.input.element.addEventListener("keydown", a => {
                a.key === "Backspace" && t.input.element.value === "" && (r = !0,
                a.preventDefault(),
                a.stopImmediatePropagation())
            }
            );
            const s = t._handleBackspace.bind(t);
            t._handleBackspace = a => {
                if (r) {
                    r = !1;
                    return
                }
                s(a)
            }
        }
        createBadge(t, e, n) {
            const r = si.deleteIcon
              , s = document.createElement("button");
            return s.setAttribute("type", "button"),
            s.classList.add("badge"),
            s.classList.add("badge-xl"),
            s.classList.add("icon-hover-rotate"),
            s.classList.add(this.classes.hidden),
            s.innerHTML = `${n} ${r}`,
            s.dataset.value = e,
            setTimeout( () => s.classList.remove(this.classes.hidden), 10),
            s.addEventListener("click", () => {
                s.classList.add(this.classes.hidden),
                setTimeout( () => t.removeActiveItemsByValue(e), 200)
            }
            ),
            s
        }
    }
    /*! choices.js v11.0.2 | © 2024 Josh Johnson | https://github.com/jshjohnson/Choices#readme */
    var ba = function(i, t) {
        return ba = Object.setPrototypeOf || {
            __proto__: []
        }instanceof Array && function(e, n) {
            e.__proto__ = n
        }
        || function(e, n) {
            for (var r in n)
                Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
        }
        ,
        ba(i, t)
    };
    function Hc(i, t) {
        if (typeof t != "function" && t !== null)
            throw new TypeError("Class extends value " + String(t) + " is not a constructor or null");
        ba(i, t);
        function e() {
            this.constructor = i
        }
        i.prototype = t === null ? Object.create(t) : (e.prototype = t.prototype,
        new e)
    }
    var Fe = function() {
        return Fe = Object.assign || function(t) {
            for (var e, n = 1, r = arguments.length; n < r; n++) {
                e = arguments[n];
                for (var s in e)
                    Object.prototype.hasOwnProperty.call(e, s) && (t[s] = e[s])
            }
            return t
        }
        ,
        Fe.apply(this, arguments)
    };
    function hv(i, t, e) {
        for (var n = 0, r = t.length, s; n < r; n++)
            (s || !(n in t)) && (s || (s = Array.prototype.slice.call(t, 0, n)),
            s[n] = t[n]);
        return i.concat(s || Array.prototype.slice.call(t))
    }
    var ce = {
        ADD_CHOICE: "ADD_CHOICE",
        REMOVE_CHOICE: "REMOVE_CHOICE",
        FILTER_CHOICES: "FILTER_CHOICES",
        ACTIVATE_CHOICES: "ACTIVATE_CHOICES",
        CLEAR_CHOICES: "CLEAR_CHOICES",
        ADD_GROUP: "ADD_GROUP",
        ADD_ITEM: "ADD_ITEM",
        REMOVE_ITEM: "REMOVE_ITEM",
        HIGHLIGHT_ITEM: "HIGHLIGHT_ITEM"
    }
      , Re = {
        showDropdown: "showDropdown",
        hideDropdown: "hideDropdown",
        change: "change",
        choice: "choice",
        search: "search",
        addItem: "addItem",
        removeItem: "removeItem",
        highlightItem: "highlightItem",
        highlightChoice: "highlightChoice",
        unhighlightItem: "unhighlightItem"
    }
      , dv = ["fuseOptions", "classNames"]
      , cn = {
        Text: "text",
        SelectOne: "select-one",
        SelectMultiple: "select-multiple"
    }
      , fv = function(i) {
        return {
            type: ce.ADD_CHOICE,
            choice: i
        }
    }
      , rl = function(i) {
        return {
            type: ce.REMOVE_CHOICE,
            choice: i
        }
    }
      , pv = function(i) {
        return {
            type: ce.FILTER_CHOICES,
            results: i
        }
    }
      , mv = function(i) {
        return {
            type: ce.ACTIVATE_CHOICES,
            active: i
        }
    }
      , gv = function(i) {
        return {
            type: ce.ADD_GROUP,
            group: i
        }
    }
      , vv = function(i) {
        return {
            type: ce.ADD_ITEM,
            item: i
        }
    }
      , sl = function(i) {
        return {
            type: ce.REMOVE_ITEM,
            item: i
        }
    }
      , Nr = function(i, t) {
        return {
            type: ce.HIGHLIGHT_ITEM,
            item: i,
            highlighted: t
        }
    }
      , bv = function(i, t) {
        return Math.floor(Math.random() * (t - i) + i)
    }
      , al = function(i) {
        return Array.from({
            length: i
        }, function() {
            return bv(0, 36).toString(36)
        }).join("")
    }
      , yv = function(i, t) {
        var e = i.id || i.name && "".concat(i.name, "-").concat(al(2)) || al(4);
        return e = e.replace(/(:|\.|\[|\]|,)/g, ""),
        e = "".concat(t, "-").concat(e),
        e
    }
      , Ev = function(i, t, e) {
        e === void 0 && (e = 1);
        for (var n = "".concat(e > 0 ? "next" : "previous", "ElementSibling"), r = i[n]; r; ) {
            if (r.matches(t))
                return r;
            r = r[n]
        }
        return null
    }
      , wv = function(i, t, e) {
        e === void 0 && (e = 1);
        var n;
        return e > 0 ? n = t.scrollTop + t.offsetHeight >= i.offsetTop + i.offsetHeight : n = i.offsetTop >= t.scrollTop,
        n
    }
      , es = function(i) {
        if (typeof i != "string") {
            if (i == null)
                return "";
            if (typeof i == "object") {
                if ("raw"in i)
                    return es(i.raw);
                if ("trusted"in i)
                    return i.trusted
            }
            return i
        }
        return i.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/'/g, "&#039;").replace(/"/g, "&quot;")
    }
      , _v = function() {
        var i = document.createElement("div");
        return function(t) {
            i.innerHTML = t.trim();
            for (var e = i.children[0]; i.firstChild; )
                i.removeChild(i.firstChild);
            return e
        }
    }()
      , Ki = function(i, t) {
        return typeof i == "function" ? i(es(t), t) : i
    }
      , ol = function(i) {
        return typeof i == "function" ? i() : i
    }
      , On = function(i) {
        if (typeof i == "string")
            return i;
        if (typeof i == "object") {
            if ("trusted"in i)
                return i.trusted;
            if ("raw"in i)
                return i.raw
        }
        return ""
    }
      , Cv = function(i) {
        if (typeof i == "string")
            return i;
        if (typeof i == "object") {
            if ("escaped"in i)
                return i.escaped;
            if ("trusted"in i)
                return i.trusted
        }
        return ""
    }
      , Ja = function(i, t) {
        return i ? Cv(t) : es(t)
    }
      , Bt = function(i, t, e) {
        i.innerHTML = Ja(t, e)
    }
      , Av = function(i, t) {
        var e = i.value
          , n = i.label
          , r = n === void 0 ? e : n
          , s = t.value
          , a = t.label
          , o = a === void 0 ? s : a;
        return On(r).localeCompare(On(o), [], {
            sensitivity: "base",
            ignorePunctuation: !0,
            numeric: !0
        })
    }
      , Sv = function(i, t) {
        return i.rank - t.rank
    }
      , Tv = function(i, t, e) {
        e === void 0 && (e = null);
        var n = new CustomEvent(t,{
            detail: e,
            bubbles: !0,
            cancelable: !0
        });
        return i.dispatchEvent(n)
    }
      , xv = function(i, t) {
        var e = Object.keys(i).sort()
          , n = Object.keys(t).sort();
        return e.filter(function(r) {
            return n.indexOf(r) < 0
        })
    }
      , ts = function(i) {
        return Array.isArray(i) ? i : [i]
    }
      , Bi = function(i) {
        return i && Array.isArray(i) ? i.map(function(t) {
            return ".".concat(t)
        }).join("") : ".".concat(i)
    }
      , Y = function(i, t) {
        var e;
        (e = i.classList).add.apply(e, ts(t))
    }
      , At = function(i, t) {
        var e;
        (e = i.classList).remove.apply(e, ts(t))
    }
      , Nv = function(i) {
        if (typeof i < "u")
            try {
                return JSON.parse(i)
            } catch {
                return i
            }
        return {}
    }
      , Iv = function(i, t, e) {
        var n = i.itemEl;
        n && (At(n, e),
        Y(n, t))
    }
      , Lv = function() {
        function i(t) {
            var e = t.element
              , n = t.type
              , r = t.classNames;
            this.element = e,
            this.classNames = r,
            this.type = n,
            this.isActive = !1
        }
        return i.prototype.show = function() {
            return Y(this.element, this.classNames.activeState),
            this.element.setAttribute("aria-expanded", "true"),
            this.isActive = !0,
            this
        }
        ,
        i.prototype.hide = function() {
            return At(this.element, this.classNames.activeState),
            this.element.setAttribute("aria-expanded", "false"),
            this.isActive = !1,
            this
        }
        ,
        i
    }()
      , ll = function() {
        function i(t) {
            var e = t.element
              , n = t.type
              , r = t.classNames
              , s = t.position;
            this.element = e,
            this.classNames = r,
            this.type = n,
            this.position = s,
            this.isOpen = !1,
            this.isFlipped = !1,
            this.isDisabled = !1,
            this.isLoading = !1
        }
        return i.prototype.shouldFlip = function(t, e) {
            var n = !1;
            return this.position === "auto" ? n = this.element.getBoundingClientRect().top - e >= 0 && !window.matchMedia("(min-height: ".concat(t + 1, "px)")).matches : this.position === "top" && (n = !0),
            n
        }
        ,
        i.prototype.setActiveDescendant = function(t) {
            this.element.setAttribute("aria-activedescendant", t)
        }
        ,
        i.prototype.removeActiveDescendant = function() {
            this.element.removeAttribute("aria-activedescendant")
        }
        ,
        i.prototype.open = function(t, e) {
            Y(this.element, this.classNames.openState),
            this.element.setAttribute("aria-expanded", "true"),
            this.isOpen = !0,
            this.shouldFlip(t, e) && (Y(this.element, this.classNames.flippedState),
            this.isFlipped = !0)
        }
        ,
        i.prototype.close = function() {
            At(this.element, this.classNames.openState),
            this.element.setAttribute("aria-expanded", "false"),
            this.removeActiveDescendant(),
            this.isOpen = !1,
            this.isFlipped && (At(this.element, this.classNames.flippedState),
            this.isFlipped = !1)
        }
        ,
        i.prototype.addFocusState = function() {
            Y(this.element, this.classNames.focusState)
        }
        ,
        i.prototype.removeFocusState = function() {
            At(this.element, this.classNames.focusState)
        }
        ,
        i.prototype.enable = function() {
            At(this.element, this.classNames.disabledState),
            this.element.removeAttribute("aria-disabled"),
            this.type === cn.SelectOne && this.element.setAttribute("tabindex", "0"),
            this.isDisabled = !1
        }
        ,
        i.prototype.disable = function() {
            Y(this.element, this.classNames.disabledState),
            this.element.setAttribute("aria-disabled", "true"),
            this.type === cn.SelectOne && this.element.setAttribute("tabindex", "-1"),
            this.isDisabled = !0
        }
        ,
        i.prototype.wrap = function(t) {
            var e = this.element
              , n = t.parentNode;
            n && (t.nextSibling ? n.insertBefore(e, t.nextSibling) : n.appendChild(e)),
            e.appendChild(t)
        }
        ,
        i.prototype.unwrap = function(t) {
            var e = this.element
              , n = e.parentNode;
            n && (n.insertBefore(t, e),
            n.removeChild(e))
        }
        ,
        i.prototype.addLoadingState = function() {
            Y(this.element, this.classNames.loadingState),
            this.element.setAttribute("aria-busy", "true"),
            this.isLoading = !0
        }
        ,
        i.prototype.removeLoadingState = function() {
            At(this.element, this.classNames.loadingState),
            this.element.removeAttribute("aria-busy"),
            this.isLoading = !1
        }
        ,
        i
    }()
      , Ov = function() {
        function i(t) {
            var e = t.element
              , n = t.type
              , r = t.classNames
              , s = t.preventPaste;
            this.element = e,
            this.type = n,
            this.classNames = r,
            this.preventPaste = s,
            this.isFocussed = this.element.isEqualNode(document.activeElement),
            this.isDisabled = e.disabled,
            this._onPaste = this._onPaste.bind(this),
            this._onInput = this._onInput.bind(this),
            this._onFocus = this._onFocus.bind(this),
            this._onBlur = this._onBlur.bind(this)
        }
        return Object.defineProperty(i.prototype, "placeholder", {
            set: function(t) {
                this.element.placeholder = t
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "value", {
            get: function() {
                return this.element.value
            },
            set: function(t) {
                this.element.value = t
            },
            enumerable: !1,
            configurable: !0
        }),
        i.prototype.addEventListeners = function() {
            var t = this.element;
            t.addEventListener("paste", this._onPaste),
            t.addEventListener("input", this._onInput, {
                passive: !0
            }),
            t.addEventListener("focus", this._onFocus, {
                passive: !0
            }),
            t.addEventListener("blur", this._onBlur, {
                passive: !0
            })
        }
        ,
        i.prototype.removeEventListeners = function() {
            var t = this.element;
            t.removeEventListener("input", this._onInput),
            t.removeEventListener("paste", this._onPaste),
            t.removeEventListener("focus", this._onFocus),
            t.removeEventListener("blur", this._onBlur)
        }
        ,
        i.prototype.enable = function() {
            var t = this.element;
            t.removeAttribute("disabled"),
            this.isDisabled = !1
        }
        ,
        i.prototype.disable = function() {
            var t = this.element;
            t.setAttribute("disabled", ""),
            this.isDisabled = !0
        }
        ,
        i.prototype.focus = function() {
            this.isFocussed || this.element.focus()
        }
        ,
        i.prototype.blur = function() {
            this.isFocussed && this.element.blur()
        }
        ,
        i.prototype.clear = function(t) {
            return t === void 0 && (t = !0),
            this.element.value = "",
            t && this.setWidth(),
            this
        }
        ,
        i.prototype.setWidth = function() {
            var t = this.element;
            t.style.minWidth = "".concat(t.placeholder.length + 1, "ch"),
            t.style.width = "".concat(t.value.length + 1, "ch")
        }
        ,
        i.prototype.setActiveDescendant = function(t) {
            this.element.setAttribute("aria-activedescendant", t)
        }
        ,
        i.prototype.removeActiveDescendant = function() {
            this.element.removeAttribute("aria-activedescendant")
        }
        ,
        i.prototype._onInput = function() {
            this.type !== cn.SelectOne && this.setWidth()
        }
        ,
        i.prototype._onPaste = function(t) {
            this.preventPaste && t.preventDefault()
        }
        ,
        i.prototype._onFocus = function() {
            this.isFocussed = !0
        }
        ,
        i.prototype._onBlur = function() {
            this.isFocussed = !1
        }
        ,
        i
    }()
      , Dv = 4
      , cl = function() {
        function i(t) {
            var e = t.element;
            this.element = e,
            this.scrollPos = this.element.scrollTop,
            this.height = this.element.offsetHeight
        }
        return i.prototype.prepend = function(t) {
            var e = this.element.firstElementChild;
            e ? this.element.insertBefore(t, e) : this.element.append(t)
        }
        ,
        i.prototype.scrollToTop = function() {
            this.element.scrollTop = 0
        }
        ,
        i.prototype.scrollToChildElement = function(t, e) {
            var n = this;
            if (t) {
                var r = this.element.offsetHeight
                  , s = this.element.scrollTop + r
                  , a = t.offsetHeight
                  , o = t.offsetTop + a
                  , l = e > 0 ? this.element.scrollTop + o - s : t.offsetTop;
                requestAnimationFrame(function() {
                    n._animateScroll(l, e)
                })
            }
        }
        ,
        i.prototype._scrollDown = function(t, e, n) {
            var r = (n - t) / e
              , s = r > 1 ? r : 1;
            this.element.scrollTop = t + s
        }
        ,
        i.prototype._scrollUp = function(t, e, n) {
            var r = (t - n) / e
              , s = r > 1 ? r : 1;
            this.element.scrollTop = t - s
        }
        ,
        i.prototype._animateScroll = function(t, e) {
            var n = this
              , r = Dv
              , s = this.element.scrollTop
              , a = !1;
            e > 0 ? (this._scrollDown(s, r, t),
            s < t && (a = !0)) : (this._scrollUp(s, r, t),
            s > t && (a = !0)),
            a && requestAnimationFrame(function() {
                n._animateScroll(t, e)
            })
        }
        ,
        i
    }()
      , Uc = function() {
        function i(t) {
            var e = t.element
              , n = t.classNames;
            this.element = e,
            this.classNames = n,
            this.isDisabled = !1
        }
        return Object.defineProperty(i.prototype, "isActive", {
            get: function() {
                return this.element.dataset.choice === "active"
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "dir", {
            get: function() {
                return this.element.dir
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "value", {
            get: function() {
                return this.element.value
            },
            set: function(t) {
                this.element.setAttribute("value", t),
                this.element.value = t
            },
            enumerable: !1,
            configurable: !0
        }),
        i.prototype.conceal = function() {
            var t = this.element;
            Y(t, this.classNames.input),
            t.hidden = !0,
            t.tabIndex = -1;
            var e = t.getAttribute("style");
            e && t.setAttribute("data-choice-orig-style", e),
            t.setAttribute("data-choice", "active")
        }
        ,
        i.prototype.reveal = function() {
            var t = this.element;
            At(t, this.classNames.input),
            t.hidden = !1,
            t.removeAttribute("tabindex");
            var e = t.getAttribute("data-choice-orig-style");
            e ? (t.removeAttribute("data-choice-orig-style"),
            t.setAttribute("style", e)) : t.removeAttribute("style"),
            t.removeAttribute("data-choice")
        }
        ,
        i.prototype.enable = function() {
            this.element.removeAttribute("disabled"),
            this.element.disabled = !1,
            this.isDisabled = !1
        }
        ,
        i.prototype.disable = function() {
            this.element.setAttribute("disabled", ""),
            this.element.disabled = !0,
            this.isDisabled = !0
        }
        ,
        i.prototype.triggerEvent = function(t, e) {
            Tv(this.element, t, e || {})
        }
        ,
        i
    }()
      , Mv = function(i) {
        Hc(t, i);
        function t() {
            return i !== null && i.apply(this, arguments) || this
        }
        return t
    }(Uc)
      , Ui = function(i, t) {
        return t === void 0 && (t = !0),
        typeof i > "u" ? t : !!i
    }
      , $c = function(i) {
        if (typeof i == "string" && (i = i.split(" ").filter(function(t) {
            return t.length
        })),
        Array.isArray(i) && i.length)
            return i
    }
      , _t = function(i, t) {
        if (typeof i == "string") {
            var e = _t({
                value: i,
                label: i
            }, !1);
            return e
        }
        var n = i;
        if ("choices"in n) {
            if (!t)
                throw new TypeError("optGroup is not allowed");
            var r = n
              , s = r.choices.map(function(u) {
                return _t(u, !1)
            })
              , a = {
                id: 0,
                label: On(r.label) || r.value,
                active: !!s.length,
                disabled: !!r.disabled,
                choices: s
            };
            return a
        }
        var o = n
          , l = {
            id: 0,
            group: null,
            score: 0,
            rank: 0,
            value: o.value,
            label: o.label || o.value,
            active: Ui(o.active),
            selected: Ui(o.selected, !1),
            disabled: Ui(o.disabled, !1),
            placeholder: Ui(o.placeholder, !1),
            highlighted: !1,
            labelClass: $c(o.labelClass),
            labelDescription: o.labelDescription,
            customProperties: o.customProperties
        };
        return l
    }
      , kv = function(i) {
        return i.tagName === "INPUT"
    }
      , zc = function(i) {
        return i.tagName === "SELECT"
    }
      , qv = function(i) {
        return i.tagName === "OPTION"
    }
      , Rv = function(i) {
        return i.tagName === "OPTGROUP"
    }
      , Fv = function(i) {
        Hc(t, i);
        function t(e) {
            var n = e.element
              , r = e.classNames
              , s = e.template
              , a = e.extractPlaceholder
              , o = i.call(this, {
                element: n,
                classNames: r
            }) || this;
            return o.template = s,
            o.extractPlaceholder = a,
            o
        }
        return Object.defineProperty(t.prototype, "placeholderOption", {
            get: function() {
                return this.element.querySelector('option[value=""]') || this.element.querySelector("option[placeholder]")
            },
            enumerable: !1,
            configurable: !0
        }),
        t.prototype.addOptions = function(e) {
            var n = this
              , r = document.createDocumentFragment();
            e.forEach(function(s) {
                var a = s;
                if (!a.element) {
                    var o = n.template(a);
                    r.appendChild(o),
                    a.element = o
                }
            }),
            this.element.appendChild(r)
        }
        ,
        t.prototype.optionsAsChoices = function() {
            var e = this
              , n = [];
            return this.element.querySelectorAll(":scope > option, :scope > optgroup").forEach(function(r) {
                qv(r) ? n.push(e._optionToChoice(r)) : Rv(r) && n.push(e._optgroupToChoice(r))
            }),
            n
        }
        ,
        t.prototype._optionToChoice = function(e) {
            return !e.hasAttribute("value") && e.hasAttribute("placeholder") && (e.setAttribute("value", ""),
            e.value = ""),
            {
                id: 0,
                group: null,
                score: 0,
                rank: 0,
                value: e.value,
                label: e.innerHTML,
                element: e,
                active: !0,
                selected: this.extractPlaceholder ? e.selected : e.hasAttribute("selected"),
                disabled: e.disabled,
                highlighted: !1,
                placeholder: this.extractPlaceholder && (!e.value || e.hasAttribute("placeholder")),
                labelClass: typeof e.dataset.labelClass < "u" ? $c(e.dataset.labelClass) : void 0,
                labelDescription: typeof e.dataset.labelDescription < "u" ? e.dataset.labelDescription : void 0,
                customProperties: Nv(e.dataset.customProperties)
            }
        }
        ,
        t.prototype._optgroupToChoice = function(e) {
            var n = this
              , r = e.querySelectorAll("option")
              , s = Array.from(r).map(function(a) {
                return n._optionToChoice(a)
            });
            return {
                id: 0,
                label: e.label || "",
                element: e,
                active: !!s.length,
                disabled: e.disabled,
                choices: s
            }
        }
        ,
        t
    }(Uc)
      , Pv = {
        containerOuter: ["choices"],
        containerInner: ["choices__inner"],
        input: ["choices__input"],
        inputCloned: ["choices__input--cloned"],
        list: ["choices__list"],
        listItems: ["choices__list--multiple"],
        listSingle: ["choices__list--single"],
        listDropdown: ["choices__list--dropdown"],
        item: ["choices__item"],
        itemSelectable: ["choices__item--selectable"],
        itemDisabled: ["choices__item--disabled"],
        itemChoice: ["choices__item--choice"],
        description: ["choices__description"],
        placeholder: ["choices__placeholder"],
        group: ["choices__group"],
        groupHeading: ["choices__heading"],
        button: ["choices__button"],
        activeState: ["is-active"],
        focusState: ["is-focused"],
        openState: ["is-open"],
        disabledState: ["is-disabled"],
        highlightedState: ["is-highlighted"],
        selectedState: ["is-selected"],
        flippedState: ["is-flipped"],
        loadingState: ["is-loading"],
        notice: ["choices__notice"],
        addChoice: ["choices__item--selectable", "add-choice"],
        noResults: ["has-no-results"],
        noChoices: ["has-no-choices"]
    }
      , ul = {
        items: [],
        choices: [],
        silent: !1,
        renderChoiceLimit: -1,
        maxItemCount: -1,
        closeDropdownOnSelect: "auto",
        singleModeForMultiSelect: !1,
        addChoices: !1,
        addItems: !0,
        addItemFilter: function(i) {
            return !!i && i !== ""
        },
        removeItems: !0,
        removeItemButton: !1,
        removeItemButtonAlignLeft: !1,
        editItems: !1,
        allowHTML: !1,
        allowHtmlUserInput: !1,
        duplicateItemsAllowed: !0,
        delimiter: ",",
        paste: !0,
        searchEnabled: !0,
        searchChoices: !0,
        searchFloor: 1,
        searchResultLimit: 4,
        searchFields: ["label", "value"],
        position: "auto",
        resetScrollPosition: !0,
        shouldSort: !0,
        shouldSortItems: !1,
        sorter: Av,
        shadowRoot: null,
        placeholder: !0,
        placeholderValue: null,
        searchPlaceholderValue: null,
        prependValue: null,
        appendValue: null,
        renderSelectedChoices: "auto",
        loadingText: "Loading...",
        noResultsText: "No results found",
        noChoicesText: "No choices to choose from",
        itemSelectText: "Press to select",
        uniqueItemText: "Only unique values can be added",
        customAddItemText: "Only values matching specific conditions can be added",
        addItemText: function(i) {
            return 'Press Enter to add <b>"'.concat(i, '"</b>')
        },
        removeItemIconText: function() {
            return "Remove item"
        },
        removeItemLabelText: function(i) {
            return "Remove item: ".concat(i)
        },
        maxItemText: function(i) {
            return "Only ".concat(i, " values can be added")
        },
        valueComparer: function(i, t) {
            return i === t
        },
        fuseOptions: {
            includeScore: !0
        },
        labelId: "",
        callbackOnInit: null,
        callbackOnCreateTemplates: null,
        classNames: Pv,
        appendGroupInSearch: !1
    }
      , hl = function(i) {
        var t = i.itemEl;
        t && (t.remove(),
        i.itemEl = void 0)
    };
    function Bv(i, t, e) {
        var n = i
          , r = !0;
        switch (t.type) {
        case ce.ADD_ITEM:
            {
                t.item.selected = !0;
                var s = t.item.element;
                s && (s.selected = !0,
                s.setAttribute("selected", "")),
                n.push(t.item);
                break
            }
        case ce.REMOVE_ITEM:
            {
                t.item.selected = !1;
                var s = t.item.element;
                if (s) {
                    s.selected = !1,
                    s.removeAttribute("selected");
                    var a = s.parentElement;
                    a && zc(a) && a.type === cn.SelectOne && (a.value = "")
                }
                hl(t.item),
                n = n.filter(function(h) {
                    return h.id !== t.item.id
                });
                break
            }
        case ce.REMOVE_CHOICE:
            {
                hl(t.choice),
                n = n.filter(function(u) {
                    return u.id !== t.choice.id
                });
                break
            }
        case ce.HIGHLIGHT_ITEM:
            {
                var o = t.highlighted
                  , l = n.find(function(u) {
                    return u.id === t.item.id
                });
                l && l.highlighted !== o && (l.highlighted = o,
                e && Iv(l, o ? e.classNames.highlightedState : e.classNames.selectedState, o ? e.classNames.selectedState : e.classNames.highlightedState));
                break
            }
        default:
            {
                r = !1;
                break
            }
        }
        return {
            state: n,
            update: r
        }
    }
    function jv(i, t) {
        var e = i
          , n = !0;
        switch (t.type) {
        case ce.ADD_GROUP:
            {
                e.push(t.group);
                break
            }
        case ce.CLEAR_CHOICES:
            {
                e = [];
                break
            }
        default:
            {
                n = !1;
                break
            }
        }
        return {
            state: e,
            update: n
        }
    }
    function Hv(i, t, e) {
        var n = i
          , r = !0;
        switch (t.type) {
        case ce.ADD_CHOICE:
            {
                n.push(t.choice);
                break
            }
        case ce.REMOVE_CHOICE:
            {
                t.choice.choiceEl = void 0,
                t.choice.group && (t.choice.group.choices = t.choice.group.choices.filter(function(a) {
                    return a.id !== t.choice.id
                })),
                n = n.filter(function(a) {
                    return a.id !== t.choice.id
                });
                break
            }
        case ce.ADD_ITEM:
        case ce.REMOVE_ITEM:
            {
                t.item.choiceEl = void 0;
                break
            }
        case ce.FILTER_CHOICES:
            {
                var s = [];
                t.results.forEach(function(a) {
                    s[a.item.id] = a
                }),
                n.forEach(function(a) {
                    var o = s[a.id];
                    o !== void 0 ? (a.score = o.score,
                    a.rank = o.rank,
                    a.active = !0) : (a.score = 0,
                    a.rank = 0,
                    a.active = !1),
                    e && e.appendGroupInSearch && (a.choiceEl = void 0)
                });
                break
            }
        case ce.ACTIVATE_CHOICES:
            {
                n.forEach(function(a) {
                    a.active = t.active,
                    e && e.appendGroupInSearch && (a.choiceEl = void 0)
                });
                break
            }
        case ce.CLEAR_CHOICES:
            {
                n = [];
                break
            }
        default:
            {
                r = !1;
                break
            }
        }
        return {
            state: n,
            update: r
        }
    }
    var dl = {
        groups: jv,
        items: Bv,
        choices: Hv
    }
      , Uv = function() {
        function i(t) {
            this._state = this.defaultState,
            this._listeners = [],
            this._txn = 0,
            this._context = t
        }
        return Object.defineProperty(i.prototype, "defaultState", {
            get: function() {
                return {
                    groups: [],
                    items: [],
                    choices: []
                }
            },
            enumerable: !1,
            configurable: !0
        }),
        i.prototype.changeSet = function(t) {
            return {
                groups: t,
                items: t,
                choices: t
            }
        }
        ,
        i.prototype.reset = function() {
            this._state = this.defaultState;
            var t = this.changeSet(!0);
            this._txn ? this._changeSet = t : this._listeners.forEach(function(e) {
                return e(t)
            })
        }
        ,
        i.prototype.subscribe = function(t) {
            return this._listeners.push(t),
            this
        }
        ,
        i.prototype.dispatch = function(t) {
            var e = this
              , n = this._state
              , r = !1
              , s = this._changeSet || this.changeSet(!1);
            Object.keys(dl).forEach(function(a) {
                var o = dl[a](n[a], t, e._context);
                o.update && (r = !0,
                s[a] = !0,
                n[a] = o.state)
            }),
            r && (this._txn ? this._changeSet = s : this._listeners.forEach(function(a) {
                return a(s)
            }))
        }
        ,
        i.prototype.withTxn = function(t) {
            this._txn++;
            try {
                t()
            } finally {
                if (this._txn = Math.max(0, this._txn - 1),
                !this._txn) {
                    var e = this._changeSet;
                    e && (this._changeSet = void 0,
                    this._listeners.forEach(function(n) {
                        return n(e)
                    }))
                }
            }
        }
        ,
        Object.defineProperty(i.prototype, "state", {
            get: function() {
                return this._state
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "items", {
            get: function() {
                return this.state.items
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "highlightedActiveItems", {
            get: function() {
                return this.items.filter(function(t) {
                    return !t.disabled && t.active && t.highlighted
                })
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "choices", {
            get: function() {
                return this.state.choices
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "activeChoices", {
            get: function() {
                return this.choices.filter(function(t) {
                    return t.active
                })
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "searchableChoices", {
            get: function() {
                return this.choices.filter(function(t) {
                    return !t.disabled && !t.placeholder
                })
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "groups", {
            get: function() {
                return this.state.groups
            },
            enumerable: !1,
            configurable: !0
        }),
        Object.defineProperty(i.prototype, "activeGroups", {
            get: function() {
                var t = this;
                return this.state.groups.filter(function(e) {
                    var n = e.active && !e.disabled
                      , r = t.state.choices.some(function(s) {
                        return s.active && !s.disabled
                    });
                    return n && r
                }, [])
            },
            enumerable: !1,
            configurable: !0
        }),
        i.prototype.inTxn = function() {
            return this._txn > 0
        }
        ,
        i.prototype.getChoiceById = function(t) {
            return this.activeChoices.find(function(e) {
                return e.id === t
            })
        }
        ,
        i.prototype.getGroupById = function(t) {
            return this.groups.find(function(e) {
                return e.id === t
            })
        }
        ,
        i
    }()
      , De = {
        noChoices: "no-choices",
        noResults: "no-results",
        addChoice: "add-choice",
        generic: ""
    };
    function $v(i, t, e) {
        return (t = Kv(t))in i ? Object.defineProperty(i, t, {
            value: e,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : i[t] = e,
        i
    }
    function fl(i, t) {
        var e = Object.keys(i);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(i);
            t && (n = n.filter(function(r) {
                return Object.getOwnPropertyDescriptor(i, r).enumerable
            })),
            e.push.apply(e, n)
        }
        return e
    }
    function ai(i) {
        for (var t = 1; t < arguments.length; t++) {
            var e = arguments[t] != null ? arguments[t] : {};
            t % 2 ? fl(Object(e), !0).forEach(function(n) {
                $v(i, n, e[n])
            }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(i, Object.getOwnPropertyDescriptors(e)) : fl(Object(e)).forEach(function(n) {
                Object.defineProperty(i, n, Object.getOwnPropertyDescriptor(e, n))
            })
        }
        return i
    }
    function zv(i, t) {
        if (typeof i != "object" || !i)
            return i;
        var e = i[Symbol.toPrimitive];
        if (e !== void 0) {
            var n = e.call(i, t || "default");
            if (typeof n != "object")
                return n;
            throw new TypeError("@@toPrimitive must return a primitive value.")
        }
        return (t === "string" ? String : Number)(i)
    }
    function Kv(i) {
        var t = zv(i, "string");
        return typeof t == "symbol" ? t : t + ""
    }
    function zt(i) {
        return Array.isArray ? Array.isArray(i) : Wc(i) === "[object Array]"
    }
    const Vv = 1 / 0;
    function Wv(i) {
        if (typeof i == "string")
            return i;
        let t = i + "";
        return t == "0" && 1 / i == -Vv ? "-0" : t
    }
    function Gv(i) {
        return i == null ? "" : Wv(i)
    }
    function St(i) {
        return typeof i == "string"
    }
    function Kc(i) {
        return typeof i == "number"
    }
    function Yv(i) {
        return i === !0 || i === !1 || Zv(i) && Wc(i) == "[object Boolean]"
    }
    function Vc(i) {
        return typeof i == "object"
    }
    function Zv(i) {
        return Vc(i) && i !== null
    }
    function ze(i) {
        return i != null
    }
    function Ps(i) {
        return !i.trim().length
    }
    function Wc(i) {
        return i == null ? i === void 0 ? "[object Undefined]" : "[object Null]" : Object.prototype.toString.call(i)
    }
    const Xv = "Incorrect 'index' type"
      , Qv = i => `Invalid value for key ${i}`
      , Jv = i => `Pattern length exceeds max of ${i}.`
      , e1 = i => `Missing ${i} property in key`
      , t1 = i => `Property 'weight' in key '${i}' must be a positive integer`
      , pl = Object.prototype.hasOwnProperty;
    class n1 {
        constructor(t) {
            this._keys = [],
            this._keyMap = {};
            let e = 0;
            t.forEach(n => {
                let r = Gc(n);
                this._keys.push(r),
                this._keyMap[r.id] = r,
                e += r.weight
            }
            ),
            this._keys.forEach(n => {
                n.weight /= e
            }
            )
        }
        get(t) {
            return this._keyMap[t]
        }
        keys() {
            return this._keys
        }
        toJSON() {
            return JSON.stringify(this._keys)
        }
    }
    function Gc(i) {
        let t = null
          , e = null
          , n = null
          , r = 1
          , s = null;
        if (St(i) || zt(i))
            n = i,
            t = ml(i),
            e = ya(i);
        else {
            if (!pl.call(i, "name"))
                throw new Error(e1("name"));
            const a = i.name;
            if (n = a,
            pl.call(i, "weight") && (r = i.weight,
            r <= 0))
                throw new Error(t1(a));
            t = ml(a),
            e = ya(a),
            s = i.getFn
        }
        return {
            path: t,
            id: e,
            weight: r,
            src: n,
            getFn: s
        }
    }
    function ml(i) {
        return zt(i) ? i : i.split(".")
    }
    function ya(i) {
        return zt(i) ? i.join(".") : i
    }
    function i1(i, t) {
        let e = []
          , n = !1;
        const r = (s, a, o) => {
            if (ze(s))
                if (!a[o])
                    e.push(s);
                else {
                    let l = a[o];
                    const u = s[l];
                    if (!ze(u))
                        return;
                    if (o === a.length - 1 && (St(u) || Kc(u) || Yv(u)))
                        e.push(Gv(u));
                    else if (zt(u)) {
                        n = !0;
                        for (let h = 0, f = u.length; h < f; h += 1)
                            r(u[h], a, o + 1)
                    } else
                        a.length && r(u, a, o + 1)
                }
        }
        ;
        return r(i, St(t) ? t.split(".") : t, 0),
        n ? e : e[0]
    }
    const r1 = {
        includeMatches: !1,
        findAllMatches: !1,
        minMatchCharLength: 1
    }
      , s1 = {
        isCaseSensitive: !1,
        includeScore: !1,
        keys: [],
        shouldSort: !0,
        sortFn: (i, t) => i.score === t.score ? i.idx < t.idx ? -1 : 1 : i.score < t.score ? -1 : 1
    }
      , a1 = {
        location: 0,
        threshold: .6,
        distance: 100
    }
      , o1 = {
        useExtendedSearch: !1,
        getFn: i1,
        ignoreLocation: !1,
        ignoreFieldNorm: !1,
        fieldNormWeight: 1
    };
    var K = ai(ai(ai(ai({}, s1), r1), a1), o1);
    const l1 = /[^ ]+/g;
    function c1(i=1, t=3) {
        const e = new Map
          , n = Math.pow(10, t);
        return {
            get(r) {
                const s = r.match(l1).length;
                if (e.has(s))
                    return e.get(s);
                const a = 1 / Math.pow(s, .5 * i)
                  , o = parseFloat(Math.round(a * n) / n);
                return e.set(s, o),
                o
            },
            clear() {
                e.clear()
            }
        }
    }
    class eo {
        constructor({getFn: t=K.getFn, fieldNormWeight: e=K.fieldNormWeight}={}) {
            this.norm = c1(e, 3),
            this.getFn = t,
            this.isCreated = !1,
            this.setIndexRecords()
        }
        setSources(t=[]) {
            this.docs = t
        }
        setIndexRecords(t=[]) {
            this.records = t
        }
        setKeys(t=[]) {
            this.keys = t,
            this._keysMap = {},
            t.forEach( (e, n) => {
                this._keysMap[e.id] = n
            }
            )
        }
        create() {
            this.isCreated || !this.docs.length || (this.isCreated = !0,
            St(this.docs[0]) ? this.docs.forEach( (t, e) => {
                this._addString(t, e)
            }
            ) : this.docs.forEach( (t, e) => {
                this._addObject(t, e)
            }
            ),
            this.norm.clear())
        }
        add(t) {
            const e = this.size();
            St(t) ? this._addString(t, e) : this._addObject(t, e)
        }
        removeAt(t) {
            this.records.splice(t, 1);
            for (let e = t, n = this.size(); e < n; e += 1)
                this.records[e].i -= 1
        }
        getValueForItemAtKeyId(t, e) {
            return t[this._keysMap[e]]
        }
        size() {
            return this.records.length
        }
        _addString(t, e) {
            if (!ze(t) || Ps(t))
                return;
            let n = {
                v: t,
                i: e,
                n: this.norm.get(t)
            };
            this.records.push(n)
        }
        _addObject(t, e) {
            let n = {
                i: e,
                $: {}
            };
            this.keys.forEach( (r, s) => {
                let a = r.getFn ? r.getFn(t) : this.getFn(t, r.path);
                if (ze(a)) {
                    if (zt(a)) {
                        let o = [];
                        const l = [{
                            nestedArrIndex: -1,
                            value: a
                        }];
                        for (; l.length; ) {
                            const {nestedArrIndex: u, value: h} = l.pop();
                            if (ze(h))
                                if (St(h) && !Ps(h)) {
                                    let f = {
                                        v: h,
                                        i: u,
                                        n: this.norm.get(h)
                                    };
                                    o.push(f)
                                } else
                                    zt(h) && h.forEach( (f, d) => {
                                        l.push({
                                            nestedArrIndex: d,
                                            value: f
                                        })
                                    }
                                    )
                        }
                        n.$[s] = o
                    } else if (St(a) && !Ps(a)) {
                        let o = {
                            v: a,
                            n: this.norm.get(a)
                        };
                        n.$[s] = o
                    }
                }
            }
            ),
            this.records.push(n)
        }
        toJSON() {
            return {
                keys: this.keys,
                records: this.records
            }
        }
    }
    function Yc(i, t, {getFn: e=K.getFn, fieldNormWeight: n=K.fieldNormWeight}={}) {
        const r = new eo({
            getFn: e,
            fieldNormWeight: n
        });
        return r.setKeys(i.map(Gc)),
        r.setSources(t),
        r.create(),
        r
    }
    function u1(i, {getFn: t=K.getFn, fieldNormWeight: e=K.fieldNormWeight}={}) {
        const {keys: n, records: r} = i
          , s = new eo({
            getFn: t,
            fieldNormWeight: e
        });
        return s.setKeys(n),
        s.setIndexRecords(r),
        s
    }
    function Ir(i, {errors: t=0, currentLocation: e=0, expectedLocation: n=0, distance: r=K.distance, ignoreLocation: s=K.ignoreLocation}={}) {
        const a = t / i.length;
        if (s)
            return a;
        const o = Math.abs(n - e);
        return r ? a + o / r : o ? 1 : a
    }
    function h1(i=[], t=K.minMatchCharLength) {
        let e = []
          , n = -1
          , r = -1
          , s = 0;
        for (let a = i.length; s < a; s += 1) {
            let o = i[s];
            o && n === -1 ? n = s : !o && n !== -1 && (r = s - 1,
            r - n + 1 >= t && e.push([n, r]),
            n = -1)
        }
        return i[s - 1] && s - n >= t && e.push([n, s - 1]),
        e
    }
    const In = 32;
    function d1(i, t, e, {location: n=K.location, distance: r=K.distance, threshold: s=K.threshold, findAllMatches: a=K.findAllMatches, minMatchCharLength: o=K.minMatchCharLength, includeMatches: l=K.includeMatches, ignoreLocation: u=K.ignoreLocation}={}) {
        if (t.length > In)
            throw new Error(Jv(In));
        const h = t.length
          , f = i.length
          , d = Math.max(0, Math.min(n, f));
        let g = s
          , b = d;
        const E = o > 1 || l
          , _ = E ? Array(f) : [];
        let C;
        for (; (C = i.indexOf(t, b)) > -1; ) {
            let U = Ir(t, {
                currentLocation: C,
                expectedLocation: d,
                distance: r,
                ignoreLocation: u
            });
            if (g = Math.min(U, g),
            b = C + h,
            E) {
                let G = 0;
                for (; G < h; )
                    _[C + G] = 1,
                    G += 1
            }
        }
        b = -1;
        let T = []
          , N = 1
          , O = h + f;
        const D = 1 << h - 1;
        for (let U = 0; U < h; U += 1) {
            let G = 0
              , le = O;
            for (; G < le; )
                Ir(t, {
                    errors: U,
                    currentLocation: d + le,
                    expectedLocation: d,
                    distance: r,
                    ignoreLocation: u
                }) <= g ? G = le : O = le,
                le = Math.floor((O - G) / 2 + G);
            O = le;
            let be = Math.max(1, d - le + 1)
              , Be = a ? f : Math.min(d + le, f) + h
              , he = Array(Be + 2);
            he[Be + 1] = (1 << U) - 1;
            for (let me = Be; me >= be; me -= 1) {
                let Ze = me - 1
                  , Gt = e[i.charAt(Ze)];
                if (E && (_[Ze] = +!!Gt),
                he[me] = (he[me + 1] << 1 | 1) & Gt,
                U && (he[me] |= (T[me + 1] | T[me]) << 1 | 1 | T[me + 1]),
                he[me] & D && (N = Ir(t, {
                    errors: U,
                    currentLocation: Ze,
                    expectedLocation: d,
                    distance: r,
                    ignoreLocation: u
                }),
                N <= g)) {
                    if (g = N,
                    b = Ze,
                    b <= d)
                        break;
                    be = Math.max(1, 2 * d - b)
                }
            }
            if (Ir(t, {
                errors: U + 1,
                currentLocation: d,
                expectedLocation: d,
                distance: r,
                ignoreLocation: u
            }) > g)
                break;
            T = he
        }
        const j = {
            isMatch: b >= 0,
            score: Math.max(.001, N)
        };
        if (E) {
            const U = h1(_, o);
            U.length ? l && (j.indices = U) : j.isMatch = !1
        }
        return j
    }
    function f1(i) {
        let t = {};
        for (let e = 0, n = i.length; e < n; e += 1) {
            const r = i.charAt(e);
            t[r] = (t[r] || 0) | 1 << n - e - 1
        }
        return t
    }
    class Zc {
        constructor(t, {location: e=K.location, threshold: n=K.threshold, distance: r=K.distance, includeMatches: s=K.includeMatches, findAllMatches: a=K.findAllMatches, minMatchCharLength: o=K.minMatchCharLength, isCaseSensitive: l=K.isCaseSensitive, ignoreLocation: u=K.ignoreLocation}={}) {
            if (this.options = {
                location: e,
                threshold: n,
                distance: r,
                includeMatches: s,
                findAllMatches: a,
                minMatchCharLength: o,
                isCaseSensitive: l,
                ignoreLocation: u
            },
            this.pattern = l ? t : t.toLowerCase(),
            this.chunks = [],
            !this.pattern.length)
                return;
            const h = (d, g) => {
                this.chunks.push({
                    pattern: d,
                    alphabet: f1(d),
                    startIndex: g
                })
            }
              , f = this.pattern.length;
            if (f > In) {
                let d = 0;
                const g = f % In
                  , b = f - g;
                for (; d < b; )
                    h(this.pattern.substr(d, In), d),
                    d += In;
                if (g) {
                    const E = f - In;
                    h(this.pattern.substr(E), E)
                }
            } else
                h(this.pattern, 0)
        }
        searchIn(t) {
            const {isCaseSensitive: e, includeMatches: n} = this.options;
            if (e || (t = t.toLowerCase()),
            this.pattern === t) {
                let b = {
                    isMatch: !0,
                    score: 0
                };
                return n && (b.indices = [[0, t.length - 1]]),
                b
            }
            const {location: r, distance: s, threshold: a, findAllMatches: o, minMatchCharLength: l, ignoreLocation: u} = this.options;
            let h = []
              , f = 0
              , d = !1;
            this.chunks.forEach( ({pattern: b, alphabet: E, startIndex: _}) => {
                const {isMatch: C, score: T, indices: N} = d1(t, b, E, {
                    location: r + _,
                    distance: s,
                    threshold: a,
                    findAllMatches: o,
                    minMatchCharLength: l,
                    includeMatches: n,
                    ignoreLocation: u
                });
                C && (d = !0),
                f += T,
                C && N && (h = [...h, ...N])
            }
            );
            let g = {
                isMatch: d,
                score: d ? f / this.chunks.length : 1
            };
            return d && n && (g.indices = h),
            g
        }
    }
    class pn {
        constructor(t) {
            this.pattern = t
        }
        static isMultiMatch(t) {
            return gl(t, this.multiRegex)
        }
        static isSingleMatch(t) {
            return gl(t, this.singleRegex)
        }
        search() {}
    }
    function gl(i, t) {
        const e = i.match(t);
        return e ? e[1] : null
    }
    class p1 extends pn {
        constructor(t) {
            super(t)
        }
        static get type() {
            return "exact"
        }
        static get multiRegex() {
            return /^="(.*)"$/
        }
        static get singleRegex() {
            return /^=(.*)$/
        }
        search(t) {
            const e = t === this.pattern;
            return {
                isMatch: e,
                score: e ? 0 : 1,
                indices: [0, this.pattern.length - 1]
            }
        }
    }
    class m1 extends pn {
        constructor(t) {
            super(t)
        }
        static get type() {
            return "inverse-exact"
        }
        static get multiRegex() {
            return /^!"(.*)"$/
        }
        static get singleRegex() {
            return /^!(.*)$/
        }
        search(t) {
            const n = t.indexOf(this.pattern) === -1;
            return {
                isMatch: n,
                score: n ? 0 : 1,
                indices: [0, t.length - 1]
            }
        }
    }
    class g1 extends pn {
        constructor(t) {
            super(t)
        }
        static get type() {
            return "prefix-exact"
        }
        static get multiRegex() {
            return /^\^"(.*)"$/
        }
        static get singleRegex() {
            return /^\^(.*)$/
        }
        search(t) {
            const e = t.startsWith(this.pattern);
            return {
                isMatch: e,
                score: e ? 0 : 1,
                indices: [0, this.pattern.length - 1]
            }
        }
    }
    class v1 extends pn {
        constructor(t) {
            super(t)
        }
        static get type() {
            return "inverse-prefix-exact"
        }
        static get multiRegex() {
            return /^!\^"(.*)"$/
        }
        static get singleRegex() {
            return /^!\^(.*)$/
        }
        search(t) {
            const e = !t.startsWith(this.pattern);
            return {
                isMatch: e,
                score: e ? 0 : 1,
                indices: [0, t.length - 1]
            }
        }
    }
    class b1 extends pn {
        constructor(t) {
            super(t)
        }
        static get type() {
            return "suffix-exact"
        }
        static get multiRegex() {
            return /^"(.*)"\$$/
        }
        static get singleRegex() {
            return /^(.*)\$$/
        }
        search(t) {
            const e = t.endsWith(this.pattern);
            return {
                isMatch: e,
                score: e ? 0 : 1,
                indices: [t.length - this.pattern.length, t.length - 1]
            }
        }
    }
    class y1 extends pn {
        constructor(t) {
            super(t)
        }
        static get type() {
            return "inverse-suffix-exact"
        }
        static get multiRegex() {
            return /^!"(.*)"\$$/
        }
        static get singleRegex() {
            return /^!(.*)\$$/
        }
        search(t) {
            const e = !t.endsWith(this.pattern);
            return {
                isMatch: e,
                score: e ? 0 : 1,
                indices: [0, t.length - 1]
            }
        }
    }
    class Xc extends pn {
        constructor(t, {location: e=K.location, threshold: n=K.threshold, distance: r=K.distance, includeMatches: s=K.includeMatches, findAllMatches: a=K.findAllMatches, minMatchCharLength: o=K.minMatchCharLength, isCaseSensitive: l=K.isCaseSensitive, ignoreLocation: u=K.ignoreLocation}={}) {
            super(t),
            this._bitapSearch = new Zc(t,{
                location: e,
                threshold: n,
                distance: r,
                includeMatches: s,
                findAllMatches: a,
                minMatchCharLength: o,
                isCaseSensitive: l,
                ignoreLocation: u
            })
        }
        static get type() {
            return "fuzzy"
        }
        static get multiRegex() {
            return /^"(.*)"$/
        }
        static get singleRegex() {
            return /^(.*)$/
        }
        search(t) {
            return this._bitapSearch.searchIn(t)
        }
    }
    class Qc extends pn {
        constructor(t) {
            super(t)
        }
        static get type() {
            return "include"
        }
        static get multiRegex() {
            return /^'"(.*)"$/
        }
        static get singleRegex() {
            return /^'(.*)$/
        }
        search(t) {
            let e = 0, n;
            const r = []
              , s = this.pattern.length;
            for (; (n = t.indexOf(this.pattern, e)) > -1; )
                e = n + s,
                r.push([n, e - 1]);
            const a = !!r.length;
            return {
                isMatch: a,
                score: a ? 0 : 1,
                indices: r
            }
        }
    }
    const Ea = [p1, Qc, g1, v1, y1, b1, m1, Xc]
      , vl = Ea.length
      , E1 = / +(?=(?:[^\"]*\"[^\"]*\")*[^\"]*$)/
      , w1 = "|";
    function _1(i, t={}) {
        return i.split(w1).map(e => {
            let n = e.trim().split(E1).filter(s => s && !!s.trim())
              , r = [];
            for (let s = 0, a = n.length; s < a; s += 1) {
                const o = n[s];
                let l = !1
                  , u = -1;
                for (; !l && ++u < vl; ) {
                    const h = Ea[u];
                    let f = h.isMultiMatch(o);
                    f && (r.push(new h(f,t)),
                    l = !0)
                }
                if (!l)
                    for (u = -1; ++u < vl; ) {
                        const h = Ea[u];
                        let f = h.isSingleMatch(o);
                        if (f) {
                            r.push(new h(f,t));
                            break
                        }
                    }
            }
            return r
        }
        )
    }
    const C1 = new Set([Xc.type, Qc.type]);
    class A1 {
        constructor(t, {isCaseSensitive: e=K.isCaseSensitive, includeMatches: n=K.includeMatches, minMatchCharLength: r=K.minMatchCharLength, ignoreLocation: s=K.ignoreLocation, findAllMatches: a=K.findAllMatches, location: o=K.location, threshold: l=K.threshold, distance: u=K.distance}={}) {
            this.query = null,
            this.options = {
                isCaseSensitive: e,
                includeMatches: n,
                minMatchCharLength: r,
                findAllMatches: a,
                ignoreLocation: s,
                location: o,
                threshold: l,
                distance: u
            },
            this.pattern = e ? t : t.toLowerCase(),
            this.query = _1(this.pattern, this.options)
        }
        static condition(t, e) {
            return e.useExtendedSearch
        }
        searchIn(t) {
            const e = this.query;
            if (!e)
                return {
                    isMatch: !1,
                    score: 1
                };
            const {includeMatches: n, isCaseSensitive: r} = this.options;
            t = r ? t : t.toLowerCase();
            let s = 0
              , a = []
              , o = 0;
            for (let l = 0, u = e.length; l < u; l += 1) {
                const h = e[l];
                a.length = 0,
                s = 0;
                for (let f = 0, d = h.length; f < d; f += 1) {
                    const g = h[f]
                      , {isMatch: b, indices: E, score: _} = g.search(t);
                    if (b) {
                        if (s += 1,
                        o += _,
                        n) {
                            const C = g.constructor.type;
                            C1.has(C) ? a = [...a, ...E] : a.push(E)
                        }
                    } else {
                        o = 0,
                        s = 0,
                        a.length = 0;
                        break
                    }
                }
                if (s) {
                    let f = {
                        isMatch: !0,
                        score: o / s
                    };
                    return n && (f.indices = a),
                    f
                }
            }
            return {
                isMatch: !1,
                score: 1
            }
        }
    }
    const wa = [];
    function S1(...i) {
        wa.push(...i)
    }
    function _a(i, t) {
        for (let e = 0, n = wa.length; e < n; e += 1) {
            let r = wa[e];
            if (r.condition(i, t))
                return new r(i,t)
        }
        return new Zc(i,t)
    }
    const Hr = {
        AND: "$and",
        OR: "$or"
    }
      , Ca = {
        PATH: "$path",
        PATTERN: "$val"
    }
      , Aa = i => !!(i[Hr.AND] || i[Hr.OR])
      , T1 = i => !!i[Ca.PATH]
      , x1 = i => !zt(i) && Vc(i) && !Aa(i)
      , bl = i => ({
        [Hr.AND]: Object.keys(i).map(t => ({
            [t]: i[t]
        }))
    });
    function Jc(i, t, {auto: e=!0}={}) {
        const n = r => {
            let s = Object.keys(r);
            const a = T1(r);
            if (!a && s.length > 1 && !Aa(r))
                return n(bl(r));
            if (x1(r)) {
                const l = a ? r[Ca.PATH] : s[0]
                  , u = a ? r[Ca.PATTERN] : r[l];
                if (!St(u))
                    throw new Error(Qv(l));
                const h = {
                    keyId: ya(l),
                    pattern: u
                };
                return e && (h.searcher = _a(u, t)),
                h
            }
            let o = {
                children: [],
                operator: s[0]
            };
            return s.forEach(l => {
                const u = r[l];
                zt(u) && u.forEach(h => {
                    o.children.push(n(h))
                }
                )
            }
            ),
            o
        }
        ;
        return Aa(i) || (i = bl(i)),
        n(i)
    }
    function N1(i, {ignoreFieldNorm: t=K.ignoreFieldNorm}) {
        i.forEach(e => {
            let n = 1;
            e.matches.forEach( ({key: r, norm: s, score: a}) => {
                const o = r ? r.weight : null;
                n *= Math.pow(a === 0 && o ? Number.EPSILON : a, (o || 1) * (t ? 1 : s))
            }
            ),
            e.score = n
        }
        )
    }
    function I1(i, t) {
        const e = i.matches;
        t.matches = [],
        ze(e) && e.forEach(n => {
            if (!ze(n.indices) || !n.indices.length)
                return;
            const {indices: r, value: s} = n;
            let a = {
                indices: r,
                value: s
            };
            n.key && (a.key = n.key.src),
            n.idx > -1 && (a.refIndex = n.idx),
            t.matches.push(a)
        }
        )
    }
    function L1(i, t) {
        t.score = i.score
    }
    function O1(i, t, {includeMatches: e=K.includeMatches, includeScore: n=K.includeScore}={}) {
        const r = [];
        return e && r.push(I1),
        n && r.push(L1),
        i.map(s => {
            const {idx: a} = s
              , o = {
                item: t[a],
                refIndex: a
            };
            return r.length && r.forEach(l => {
                l(s, o)
            }
            ),
            o
        }
        )
    }
    class yi {
        constructor(t, e={}, n) {
            this.options = ai(ai({}, K), e),
            this.options.useExtendedSearch,
            this._keyStore = new n1(this.options.keys),
            this.setCollection(t, n)
        }
        setCollection(t, e) {
            if (this._docs = t,
            e && !(e instanceof eo))
                throw new Error(Xv);
            this._myIndex = e || Yc(this.options.keys, this._docs, {
                getFn: this.options.getFn,
                fieldNormWeight: this.options.fieldNormWeight
            })
        }
        add(t) {
            ze(t) && (this._docs.push(t),
            this._myIndex.add(t))
        }
        remove(t= () => !1) {
            const e = [];
            for (let n = 0, r = this._docs.length; n < r; n += 1) {
                const s = this._docs[n];
                t(s, n) && (this.removeAt(n),
                n -= 1,
                r -= 1,
                e.push(s))
            }
            return e
        }
        removeAt(t) {
            this._docs.splice(t, 1),
            this._myIndex.removeAt(t)
        }
        getIndex() {
            return this._myIndex
        }
        search(t, {limit: e=-1}={}) {
            const {includeMatches: n, includeScore: r, shouldSort: s, sortFn: a, ignoreFieldNorm: o} = this.options;
            let l = St(t) ? St(this._docs[0]) ? this._searchStringList(t) : this._searchObjectList(t) : this._searchLogical(t);
            return N1(l, {
                ignoreFieldNorm: o
            }),
            s && l.sort(a),
            Kc(e) && e > -1 && (l = l.slice(0, e)),
            O1(l, this._docs, {
                includeMatches: n,
                includeScore: r
            })
        }
        _searchStringList(t) {
            const e = _a(t, this.options)
              , {records: n} = this._myIndex
              , r = [];
            return n.forEach( ({v: s, i: a, n: o}) => {
                if (!ze(s))
                    return;
                const {isMatch: l, score: u, indices: h} = e.searchIn(s);
                l && r.push({
                    item: s,
                    idx: a,
                    matches: [{
                        score: u,
                        value: s,
                        norm: o,
                        indices: h
                    }]
                })
            }
            ),
            r
        }
        _searchLogical(t) {
            const e = Jc(t, this.options)
              , n = (o, l, u) => {
                if (!o.children) {
                    const {keyId: f, searcher: d} = o
                      , g = this._findMatches({
                        key: this._keyStore.get(f),
                        value: this._myIndex.getValueForItemAtKeyId(l, f),
                        searcher: d
                    });
                    return g && g.length ? [{
                        idx: u,
                        item: l,
                        matches: g
                    }] : []
                }
                const h = [];
                for (let f = 0, d = o.children.length; f < d; f += 1) {
                    const g = o.children[f]
                      , b = n(g, l, u);
                    if (b.length)
                        h.push(...b);
                    else if (o.operator === Hr.AND)
                        return []
                }
                return h
            }
              , r = this._myIndex.records
              , s = {}
              , a = [];
            return r.forEach( ({$: o, i: l}) => {
                if (ze(o)) {
                    let u = n(e, o, l);
                    u.length && (s[l] || (s[l] = {
                        idx: l,
                        item: o,
                        matches: []
                    },
                    a.push(s[l])),
                    u.forEach( ({matches: h}) => {
                        s[l].matches.push(...h)
                    }
                    ))
                }
            }
            ),
            a
        }
        _searchObjectList(t) {
            const e = _a(t, this.options)
              , {keys: n, records: r} = this._myIndex
              , s = [];
            return r.forEach( ({$: a, i: o}) => {
                if (!ze(a))
                    return;
                let l = [];
                n.forEach( (u, h) => {
                    l.push(...this._findMatches({
                        key: u,
                        value: a[h],
                        searcher: e
                    }))
                }
                ),
                l.length && s.push({
                    idx: o,
                    item: a,
                    matches: l
                })
            }
            ),
            s
        }
        _findMatches({key: t, value: e, searcher: n}) {
            if (!ze(e))
                return [];
            let r = [];
            if (zt(e))
                e.forEach( ({v: s, i: a, n: o}) => {
                    if (!ze(s))
                        return;
                    const {isMatch: l, score: u, indices: h} = n.searchIn(s);
                    l && r.push({
                        score: u,
                        key: t,
                        value: s,
                        idx: a,
                        norm: o,
                        indices: h
                    })
                }
                );
            else {
                const {v: s, n: a} = e
                  , {isMatch: o, score: l, indices: u} = n.searchIn(s);
                o && r.push({
                    score: l,
                    key: t,
                    value: s,
                    norm: a,
                    indices: u
                })
            }
            return r
        }
    }
    yi.version = "7.0.0";
    yi.createIndex = Yc;
    yi.parseIndex = u1;
    yi.config = K;
    yi.parseQuery = Jc;
    S1(A1);
    var D1 = function() {
        function i(t) {
            this._haystack = [],
            this._fuseOptions = Fe(Fe({}, t.fuseOptions), {
                keys: hv([], t.searchFields),
                includeMatches: !0
            })
        }
        return i.prototype.index = function(t) {
            this._haystack = t,
            this._fuse && this._fuse.setCollection(t)
        }
        ,
        i.prototype.reset = function() {
            this._haystack = [],
            this._fuse = void 0
        }
        ,
        i.prototype.isEmptyIndex = function() {
            return !this._haystack.length
        }
        ,
        i.prototype.search = function(t) {
            this._fuse || (this._fuse = new yi(this._haystack,this._fuseOptions));
            var e = this._fuse.search(t);
            return e.map(function(n, r) {
                return {
                    item: n.item,
                    score: n.score || 0,
                    rank: r + 1
                }
            })
        }
        ,
        i
    }();
    function M1(i) {
        return new D1(i)
    }
    var k1 = function(i) {
        for (var t in i)
            if (Object.prototype.hasOwnProperty.call(i, t))
                return !1;
        return !0
    }
      , Bs = function(i, t, e) {
        var n = i.dataset
          , r = t.customProperties
          , s = t.labelClass
          , a = t.labelDescription;
        s && (n.labelClass = ts(s).join(" ")),
        a && (n.labelDescription = a),
        e && r && (typeof r == "string" ? n.customProperties = r : typeof r == "object" && !k1(r) && (n.customProperties = JSON.stringify(r)))
    }
      , yl = function(i, t, e) {
        var n = t && i.querySelector("label[for='".concat(t, "']"))
          , r = n && n.innerText;
        r && e.setAttribute("aria-label", r)
    }
      , q1 = {
        containerOuter: function(i, t, e, n, r, s, a) {
            var o = i.classNames.containerOuter
              , l = document.createElement("div");
            return Y(l, o),
            l.dataset.type = s,
            t && (l.dir = t),
            n && (l.tabIndex = 0),
            e && (l.setAttribute("role", r ? "combobox" : "listbox"),
            r ? l.setAttribute("aria-autocomplete", "list") : a || yl(this._docRoot, this.passedElement.element.id, l),
            l.setAttribute("aria-haspopup", "true"),
            l.setAttribute("aria-expanded", "false")),
            a && l.setAttribute("aria-labelledby", a),
            l
        },
        containerInner: function(i) {
            var t = i.classNames.containerInner
              , e = document.createElement("div");
            return Y(e, t),
            e
        },
        itemList: function(i, t) {
            var e = i.searchEnabled
              , n = i.classNames
              , r = n.list
              , s = n.listSingle
              , a = n.listItems
              , o = document.createElement("div");
            return Y(o, r),
            Y(o, t ? s : a),
            this._isSelectElement && e && o.setAttribute("role", "listbox"),
            o
        },
        placeholder: function(i, t) {
            var e = i.allowHTML
              , n = i.classNames.placeholder
              , r = document.createElement("div");
            return Y(r, n),
            Bt(r, e, t),
            r
        },
        item: function(i, t, e) {
            var n = i.allowHTML
              , r = i.removeItemButtonAlignLeft
              , s = i.removeItemIconText
              , a = i.removeItemLabelText
              , o = i.classNames
              , l = o.item
              , u = o.button
              , h = o.highlightedState
              , f = o.itemSelectable
              , d = o.placeholder
              , g = On(t.value)
              , b = document.createElement("div");
            if (Y(b, l),
            t.labelClass) {
                var E = document.createElement("span");
                Bt(E, n, t.label),
                Y(E, t.labelClass),
                b.appendChild(E)
            } else
                Bt(b, n, t.label);
            if (b.dataset.item = "",
            b.dataset.id = t.id,
            b.dataset.value = g,
            Bs(b, t, !0),
            (t.disabled || this.containerOuter.isDisabled) && b.setAttribute("aria-disabled", "true"),
            this._isSelectElement && (b.setAttribute("aria-selected", "true"),
            b.setAttribute("role", "option")),
            t.placeholder && (Y(b, d),
            b.dataset.placeholder = ""),
            Y(b, t.highlighted ? h : f),
            e) {
                t.disabled && At(b, f),
                b.dataset.deletable = "";
                var _ = document.createElement("button");
                _.type = "button",
                Y(_, u),
                Bt(_, !0, Ki(s, t.value));
                var C = Ki(a, t.value);
                C && _.setAttribute("aria-label", C),
                _.dataset.button = "",
                r ? b.insertAdjacentElement("afterbegin", _) : b.appendChild(_)
            }
            return b
        },
        choiceList: function(i, t) {
            var e = i.classNames.list
              , n = document.createElement("div");
            return Y(n, e),
            t || n.setAttribute("aria-multiselectable", "true"),
            n.setAttribute("role", "listbox"),
            n
        },
        choiceGroup: function(i, t) {
            var e = i.allowHTML
              , n = i.classNames
              , r = n.group
              , s = n.groupHeading
              , a = n.itemDisabled
              , o = t.id
              , l = t.label
              , u = t.disabled
              , h = On(l)
              , f = document.createElement("div");
            Y(f, r),
            u && Y(f, a),
            f.setAttribute("role", "group"),
            f.dataset.group = "",
            f.dataset.id = o,
            f.dataset.value = h,
            u && f.setAttribute("aria-disabled", "true");
            var d = document.createElement("div");
            return Y(d, s),
            Bt(d, e, l || ""),
            f.appendChild(d),
            f
        },
        choice: function(i, t, e, n) {
            var r = i.allowHTML
              , s = i.classNames
              , a = s.item
              , o = s.itemChoice
              , l = s.itemSelectable
              , u = s.selectedState
              , h = s.itemDisabled
              , f = s.description
              , d = s.placeholder
              , g = t.label
              , b = On(t.value)
              , E = document.createElement("div");
            E.id = t.elementId,
            Y(E, a),
            Y(E, o),
            n && typeof g == "string" && (g = Ja(r, g),
            g += " (".concat(n, ")"),
            g = {
                trusted: g
            });
            var _ = E;
            if (t.labelClass) {
                var C = document.createElement("span");
                Bt(C, r, g),
                Y(C, t.labelClass),
                _ = C,
                E.appendChild(C)
            } else
                Bt(E, r, g);
            if (t.labelDescription) {
                var T = "".concat(t.elementId, "-description");
                _.setAttribute("aria-describedby", T);
                var N = document.createElement("span");
                Bt(N, r, t.labelDescription),
                N.id = T,
                Y(N, f),
                E.appendChild(N)
            }
            return t.selected && Y(E, u),
            t.placeholder && Y(E, d),
            E.setAttribute("role", t.group ? "treeitem" : "option"),
            E.dataset.choice = "",
            E.dataset.id = t.id,
            E.dataset.value = b,
            e && (E.dataset.selectText = e),
            t.group && (E.dataset.groupId = "".concat(t.group.id)),
            Bs(E, t, !1),
            t.disabled ? (Y(E, h),
            E.dataset.choiceDisabled = "",
            E.setAttribute("aria-disabled", "true")) : (Y(E, l),
            E.dataset.choiceSelectable = ""),
            E
        },
        input: function(i, t) {
            var e = i.classNames
              , n = e.input
              , r = e.inputCloned
              , s = i.labelId
              , a = document.createElement("input");
            return a.type = "search",
            Y(a, n),
            Y(a, r),
            a.autocomplete = "off",
            a.autocapitalize = "off",
            a.spellcheck = !1,
            a.setAttribute("role", "textbox"),
            a.setAttribute("aria-autocomplete", "list"),
            t ? a.setAttribute("aria-label", t) : s || yl(this._docRoot, this.passedElement.element.id, a),
            a
        },
        dropdown: function(i) {
            var t = i.classNames
              , e = t.list
              , n = t.listDropdown
              , r = document.createElement("div");
            return Y(r, e),
            Y(r, n),
            r.setAttribute("aria-expanded", "false"),
            r
        },
        notice: function(i, t, e) {
            var n = i.classNames
              , r = n.item
              , s = n.itemChoice
              , a = n.addChoice
              , o = n.noResults
              , l = n.noChoices
              , u = n.notice;
            e === void 0 && (e = De.generic);
            var h = document.createElement("div");
            switch (Bt(h, !0, t),
            Y(h, r),
            Y(h, s),
            Y(h, u),
            e) {
            case De.addChoice:
                Y(h, a);
                break;
            case De.noResults:
                Y(h, o);
                break;
            case De.noChoices:
                Y(h, l);
                break
            }
            return e === De.addChoice && (h.dataset.choiceSelectable = "",
            h.dataset.choice = ""),
            h
        },
        option: function(i) {
            var t = On(i.label)
              , e = new Option(t,i.value,!1,i.selected);
            return Bs(e, i, !0),
            e.disabled = i.disabled,
            i.selected && e.setAttribute("selected", ""),
            e
        }
    }
      , R1 = "-ms-scroll-limit"in document.documentElement.style && "-ms-ime-align"in document.documentElement.style
      , F1 = {}
      , js = function(i) {
        if (i)
            return i.dataset.id ? parseInt(i.dataset.id, 10) : void 0
    }
      , ji = "[data-choice-selectable]"
      , P1 = function() {
        function i(t, e) {
            t === void 0 && (t = "[data-choice]"),
            e === void 0 && (e = {});
            var n = this;
            this.initialisedOK = void 0,
            this._hasNonChoicePlaceholder = !1,
            this._lastAddedChoiceId = 0,
            this._lastAddedGroupId = 0;
            var r = i.defaults;
            this.config = Fe(Fe(Fe({}, r.allOptions), r.options), e),
            dv.forEach(function(C) {
                n.config[C] = Fe(Fe(Fe({}, r.allOptions[C]), r.options[C]), e[C])
            });
            var s = this.config;
            s.silent || this._validateConfig();
            var a = s.shadowRoot || document.documentElement;
            this._docRoot = a;
            var o = typeof t == "string" ? a.querySelector(t) : t;
            if (!o || typeof o != "object" || !(kv(o) || zc(o)))
                throw TypeError(!o && typeof t == "string" ? "Selector ".concat(t, " failed to find an element") : "Expected one of the following types text|select-one|select-multiple");
            var l = o.type
              , u = l === cn.Text;
            (u || s.maxItemCount !== 1) && (s.singleModeForMultiSelect = !1),
            s.singleModeForMultiSelect && (l = cn.SelectMultiple);
            var h = l === cn.SelectOne
              , f = l === cn.SelectMultiple
              , d = h || f;
            if (this._elementType = l,
            this._isTextElement = u,
            this._isSelectOneElement = h,
            this._isSelectMultipleElement = f,
            this._isSelectElement = h || f,
            this._canAddUserChoices = u && s.addItems || d && s.addChoices,
            typeof s.renderSelectedChoices != "boolean" && (s.renderSelectedChoices = s.renderSelectedChoices === "always" || h),
            s.closeDropdownOnSelect === "auto" ? s.closeDropdownOnSelect = u || h || s.singleModeForMultiSelect : s.closeDropdownOnSelect = Ui(s.closeDropdownOnSelect),
            s.placeholder && (s.placeholderValue ? this._hasNonChoicePlaceholder = !0 : o.dataset.placeholder && (this._hasNonChoicePlaceholder = !0,
            s.placeholderValue = o.dataset.placeholder)),
            e.addItemFilter && typeof e.addItemFilter != "function") {
                var g = e.addItemFilter instanceof RegExp ? e.addItemFilter : new RegExp(e.addItemFilter);
                s.addItemFilter = g.test.bind(g)
            }
            if (this._isTextElement)
                this.passedElement = new Mv({
                    element: o,
                    classNames: s.classNames
                });
            else {
                var b = o;
                this.passedElement = new Fv({
                    element: b,
                    classNames: s.classNames,
                    template: function(C) {
                        return n._templates.option(C)
                    },
                    extractPlaceholder: s.placeholder && !this._hasNonChoicePlaceholder
                })
            }
            if (this.initialised = !1,
            this._store = new Uv(s),
            this._currentValue = "",
            s.searchEnabled = !u && s.searchEnabled || f,
            this._canSearch = s.searchEnabled,
            this._isScrollingOnIe = !1,
            this._highlightPosition = 0,
            this._wasTap = !0,
            this._placeholderValue = this._generatePlaceholderValue(),
            this._baseId = yv(o, "choices-"),
            this._direction = o.dir,
            !this._direction) {
                var E = window.getComputedStyle(o).direction
                  , _ = window.getComputedStyle(document.documentElement).direction;
                E !== _ && (this._direction = E)
            }
            if (this._idNames = {
                itemChoice: "item-choice"
            },
            this._templates = r.templates,
            this._render = this._render.bind(this),
            this._onFocus = this._onFocus.bind(this),
            this._onBlur = this._onBlur.bind(this),
            this._onKeyUp = this._onKeyUp.bind(this),
            this._onKeyDown = this._onKeyDown.bind(this),
            this._onInput = this._onInput.bind(this),
            this._onClick = this._onClick.bind(this),
            this._onTouchMove = this._onTouchMove.bind(this),
            this._onTouchEnd = this._onTouchEnd.bind(this),
            this._onMouseDown = this._onMouseDown.bind(this),
            this._onMouseOver = this._onMouseOver.bind(this),
            this._onFormReset = this._onFormReset.bind(this),
            this._onSelectKey = this._onSelectKey.bind(this),
            this._onEnterKey = this._onEnterKey.bind(this),
            this._onEscapeKey = this._onEscapeKey.bind(this),
            this._onDirectionKey = this._onDirectionKey.bind(this),
            this._onDeleteKey = this._onDeleteKey.bind(this),
            this.passedElement.isActive) {
                s.silent || console.warn("Trying to initialise Choices on element already initialised", {
                    element: t
                }),
                this.initialised = !0,
                this.initialisedOK = !1;
                return
            }
            this.init(),
            this._initialItems = this._store.items.map(function(C) {
                return C.value
            })
        }
        return Object.defineProperty(i, "defaults", {
            get: function() {
                return Object.preventExtensions({
                    get options() {
                        return F1
                    },
                    get allOptions() {
                        return ul
                    },
                    get templates() {
                        return q1
                    }
                })
            },
            enumerable: !1,
            configurable: !0
        }),
        i.prototype.init = function() {
            if (!(this.initialised || this.initialisedOK !== void 0)) {
                this._searcher = M1(this.config),
                this._loadChoices(),
                this._createTemplates(),
                this._createElements(),
                this._createStructure(),
                this._isTextElement && !this.config.addItems || this.passedElement.element.hasAttribute("disabled") || this.passedElement.element.closest("fieldset:disabled") ? this.disable() : (this.enable(),
                this._addEventListeners()),
                this._initStore(),
                this.initialised = !0,
                this.initialisedOK = !0;
                var t = this.config.callbackOnInit;
                typeof t == "function" && t.call(this)
            }
        }
        ,
        i.prototype.destroy = function() {
            this.initialised && (this._removeEventListeners(),
            this.passedElement.reveal(),
            this.containerOuter.unwrap(this.passedElement.element),
            this._store._listeners = [],
            this.clearStore(!1),
            this._stopSearch(),
            this._templates = i.defaults.templates,
            this.initialised = !1,
            this.initialisedOK = void 0)
        }
        ,
        i.prototype.enable = function() {
            return this.passedElement.isDisabled && this.passedElement.enable(),
            this.containerOuter.isDisabled && (this._addEventListeners(),
            this.input.enable(),
            this.containerOuter.enable()),
            this
        }
        ,
        i.prototype.disable = function() {
            return this.passedElement.isDisabled || this.passedElement.disable(),
            this.containerOuter.isDisabled || (this._removeEventListeners(),
            this.input.disable(),
            this.containerOuter.disable()),
            this
        }
        ,
        i.prototype.highlightItem = function(t, e) {
            if (e === void 0 && (e = !0),
            !t || !t.id)
                return this;
            var n = this._store.items.find(function(r) {
                return r.id === t.id
            });
            return !n || n.highlighted ? this : (this._store.dispatch(Nr(n, !0)),
            e && this.passedElement.triggerEvent(Re.highlightItem, this._getChoiceForOutput(n)),
            this)
        }
        ,
        i.prototype.unhighlightItem = function(t, e) {
            if (e === void 0 && (e = !0),
            !t || !t.id)
                return this;
            var n = this._store.items.find(function(r) {
                return r.id === t.id
            });
            return !n || !n.highlighted ? this : (this._store.dispatch(Nr(n, !1)),
            e && this.passedElement.triggerEvent(Re.unhighlightItem, this._getChoiceForOutput(n)),
            this)
        }
        ,
        i.prototype.highlightAll = function() {
            var t = this;
            return this._store.withTxn(function() {
                t._store.items.forEach(function(e) {
                    e.highlighted || (t._store.dispatch(Nr(e, !0)),
                    t.passedElement.triggerEvent(Re.highlightItem, t._getChoiceForOutput(e)))
                })
            }),
            this
        }
        ,
        i.prototype.unhighlightAll = function() {
            var t = this;
            return this._store.withTxn(function() {
                t._store.items.forEach(function(e) {
                    e.highlighted && (t._store.dispatch(Nr(e, !1)),
                    t.passedElement.triggerEvent(Re.highlightItem, t._getChoiceForOutput(e)))
                })
            }),
            this
        }
        ,
        i.prototype.removeActiveItemsByValue = function(t) {
            var e = this;
            return this._store.withTxn(function() {
                e._store.items.filter(function(n) {
                    return n.value === t
                }).forEach(function(n) {
                    return e._removeItem(n)
                })
            }),
            this
        }
        ,
        i.prototype.removeActiveItems = function(t) {
            var e = this;
            return this._store.withTxn(function() {
                e._store.items.filter(function(n) {
                    var r = n.id;
                    return r !== t
                }).forEach(function(n) {
                    return e._removeItem(n)
                })
            }),
            this
        }
        ,
        i.prototype.removeHighlightedItems = function(t) {
            var e = this;
            return t === void 0 && (t = !1),
            this._store.withTxn(function() {
                e._store.highlightedActiveItems.forEach(function(n) {
                    e._removeItem(n),
                    t && e._triggerChange(n.value)
                })
            }),
            this
        }
        ,
        i.prototype.showDropdown = function(t) {
            var e = this;
            return this.dropdown.isActive ? this : (requestAnimationFrame(function() {
                e.dropdown.show();
                var n = e.dropdown.element.getBoundingClientRect();
                e.containerOuter.open(n.bottom, n.height),
                !t && e._canSearch && e.input.focus(),
                e.passedElement.triggerEvent(Re.showDropdown)
            }),
            this)
        }
        ,
        i.prototype.hideDropdown = function(t) {
            var e = this;
            return this.dropdown.isActive ? (requestAnimationFrame(function() {
                e.dropdown.hide(),
                e.containerOuter.close(),
                !t && e._canSearch && (e.input.removeActiveDescendant(),
                e.input.blur()),
                e.passedElement.triggerEvent(Re.hideDropdown)
            }),
            this) : this
        }
        ,
        i.prototype.getValue = function(t) {
            var e = this
              , n = this._store.items.map(function(r) {
                return t ? r.value : e._getChoiceForOutput(r)
            });
            return this._isSelectOneElement || this.config.singleModeForMultiSelect ? n[0] : n
        }
        ,
        i.prototype.setValue = function(t) {
            var e = this;
            return this.initialisedOK ? (this._store.withTxn(function() {
                t.forEach(function(n) {
                    n && e._addChoice(_t(n, !1))
                })
            }),
            this._searcher.reset(),
            this) : (this._warnChoicesInitFailed("setValue"),
            this)
        }
        ,
        i.prototype.setChoiceByValue = function(t) {
            var e = this;
            return this.initialisedOK ? this._isTextElement ? this : (this._store.withTxn(function() {
                var n = Array.isArray(t) ? t : [t];
                n.forEach(function(r) {
                    return e._findAndSelectChoiceByValue(r)
                }),
                e.unhighlightAll()
            }),
            this._searcher.reset(),
            this) : (this._warnChoicesInitFailed("setChoiceByValue"),
            this)
        }
        ,
        i.prototype.setChoices = function(t, e, n, r, s) {
            var a = this;
            if (t === void 0 && (t = []),
            e === void 0 && (e = "value"),
            n === void 0 && (n = "label"),
            r === void 0 && (r = !1),
            s === void 0 && (s = !0),
            !this.initialisedOK)
                return this._warnChoicesInitFailed("setChoices"),
                this;
            if (!this._isSelectElement)
                throw new TypeError("setChoices can't be used with INPUT based Choices");
            if (typeof e != "string" || !e)
                throw new TypeError("value parameter must be a name of 'value' field in passed objects");
            if (r && this.clearChoices(),
            typeof t == "function") {
                var o = t(this);
                if (typeof Promise == "function" && o instanceof Promise)
                    return new Promise(function(l) {
                        return requestAnimationFrame(l)
                    }
                    ).then(function() {
                        return a._handleLoadingState(!0)
                    }).then(function() {
                        return o
                    }).then(function(l) {
                        return a.setChoices(l, e, n, r)
                    }).catch(function(l) {
                        a.config.silent || console.error(l)
                    }).then(function() {
                        return a._handleLoadingState(!1)
                    }).then(function() {
                        return a
                    });
                if (!Array.isArray(o))
                    throw new TypeError(".setChoices first argument function must return either array of choices or Promise, got: ".concat(typeof o));
                return this.setChoices(o, e, n, !1)
            }
            if (!Array.isArray(t))
                throw new TypeError(".setChoices must be called either with array of choices with a function resulting into Promise of array of choices");
            return this.containerOuter.removeLoadingState(),
            this._store.withTxn(function() {
                s && (a._isSearching = !1);
                var l = e === "value"
                  , u = n === "label";
                t.forEach(function(h) {
                    if ("choices"in h) {
                        var f = h;
                        u || (f = Fe(Fe({}, f), {
                            label: f[n]
                        })),
                        a._addGroup(_t(f, !0))
                    } else {
                        var d = h;
                        (!u || !l) && (d = Fe(Fe({}, d), {
                            value: d[e],
                            label: d[n]
                        })),
                        a._addChoice(_t(d, !1))
                    }
                }),
                a.unhighlightAll()
            }),
            this._searcher.reset(),
            this
        }
        ,
        i.prototype.refresh = function(t, e, n) {
            var r = this;
            return t === void 0 && (t = !1),
            e === void 0 && (e = !1),
            n === void 0 && (n = !1),
            this._isSelectElement ? (this._store.withTxn(function() {
                var s = r.passedElement.optionsAsChoices()
                  , a = {};
                n || r._store.items.forEach(function(l) {
                    l.id && l.active && l.selected && !l.disabled && (a[l.value] = !0)
                }),
                r.clearStore(!1);
                var o = function(l) {
                    n ? r._store.dispatch(sl(l)) : a[l.value] && (l.selected = !0)
                };
                s.forEach(function(l) {
                    if ("choices"in l) {
                        l.choices.forEach(o);
                        return
                    }
                    o(l)
                }),
                r._addPredefinedChoices(s, e, t),
                r._isSearching && r._searchChoices(r.input.value)
            }),
            this) : (this.config.silent || console.warn("refresh method can only be used on choices backed by a <select> element"),
            this)
        }
        ,
        i.prototype.removeChoice = function(t) {
            var e = this._store.choices.find(function(n) {
                return n.value === t
            });
            return e ? (this._clearNotice(),
            this._store.dispatch(rl(e)),
            this._searcher.reset(),
            e.selected && this.passedElement.triggerEvent(Re.removeItem, this._getChoiceForOutput(e)),
            this) : this
        }
        ,
        i.prototype.clearChoices = function() {
            var t = this;
            return this._store.withTxn(function() {
                t._store.choices.forEach(function(e) {
                    e.selected || t._store.dispatch(rl(e))
                })
            }),
            this._searcher.reset(),
            this
        }
        ,
        i.prototype.clearStore = function(t) {
            return t === void 0 && (t = !0),
            this._stopSearch(),
            t && this.passedElement.element.replaceChildren(""),
            this.itemList.element.replaceChildren(""),
            this.choiceList.element.replaceChildren(""),
            this._store.reset(),
            this._lastAddedChoiceId = 0,
            this._lastAddedGroupId = 0,
            this._searcher.reset(),
            this
        }
        ,
        i.prototype.clearInput = function() {
            var t = !this._isSelectOneElement;
            return this.input.clear(t),
            this._stopSearch(),
            this
        }
        ,
        i.prototype._validateConfig = function() {
            var t = this.config
              , e = xv(t, ul);
            e.length && console.warn("Unknown config option(s) passed", e.join(", ")),
            t.allowHTML && t.allowHtmlUserInput && (t.addItems && console.warn("Warning: allowHTML/allowHtmlUserInput/addItems all being true is strongly not recommended and may lead to XSS attacks"),
            t.addChoices && console.warn("Warning: allowHTML/allowHtmlUserInput/addChoices all being true is strongly not recommended and may lead to XSS attacks"))
        }
        ,
        i.prototype._render = function(t) {
            t === void 0 && (t = {
                choices: !0,
                groups: !0,
                items: !0
            }),
            !this._store.inTxn() && (this._isSelectElement && (t.choices || t.groups) && this._renderChoices(),
            t.items && this._renderItems())
        }
        ,
        i.prototype._renderChoices = function() {
            var t = this;
            if (this._canAddItems()) {
                var e = this
                  , n = e.config
                  , r = e._isSearching
                  , s = this._store
                  , a = s.activeGroups
                  , o = s.activeChoices
                  , l = 0;
                if (r && n.searchResultLimit > 0 ? l = n.searchResultLimit : n.renderChoiceLimit > 0 && (l = n.renderChoiceLimit),
                this._isSelectElement) {
                    var u = o.filter(function(b) {
                        return !b.element
                    });
                    u.length && this.passedElement.addOptions(u)
                }
                var h = document.createDocumentFragment()
                  , f = function(b) {
                    return b.filter(function(E) {
                        return !E.placeholder && (r ? !!E.rank : n.renderSelectedChoices || !E.selected)
                    })
                }
                  , d = !1
                  , g = function(b, E, _) {
                    r ? b.sort(Sv) : n.shouldSort && b.sort(n.sorter);
                    var C = b.length;
                    C = !E && l && C > l ? l : C,
                    C--,
                    b.every(function(T, N) {
                        var O = T.choiceEl || t._templates.choice(n, T, n.itemSelectText, _);
                        return T.choiceEl = O,
                        h.appendChild(O),
                        !T.disabled && (r || !T.selected) && (d = !0),
                        N < C
                    })
                };
                o.length && (n.resetScrollPosition && requestAnimationFrame(function() {
                    return t.choiceList.scrollToTop()
                }),
                !this._hasNonChoicePlaceholder && !r && this._isSelectOneElement && g(o.filter(function(b) {
                    return b.placeholder && !b.group
                }), !1, void 0),
                a.length && !r ? (n.shouldSort && a.sort(n.sorter),
                g(o.filter(function(b) {
                    return !b.placeholder && !b.group
                }), !1, void 0),
                a.forEach(function(b) {
                    var E = f(b.choices);
                    if (E.length) {
                        if (b.label) {
                            var _ = b.groupEl || t._templates.choiceGroup(t.config, b);
                            b.groupEl = _,
                            _.remove(),
                            h.appendChild(_)
                        }
                        g(E, !0, n.appendGroupInSearch && r ? b.label : void 0)
                    }
                })) : g(f(o), !1, void 0)),
                d || (this._notice || (this._notice = {
                    text: ol(r ? n.noResultsText : n.noChoicesText),
                    type: r ? De.noResults : De.noChoices
                }),
                h.replaceChildren("")),
                this._renderNotice(h),
                this.choiceList.element.replaceChildren(h),
                d && this._highlightChoice()
            }
        }
        ,
        i.prototype._renderItems = function() {
            var t = this
              , e = this._store.items || []
              , n = this.itemList.element
              , r = this.config
              , s = document.createDocumentFragment()
              , a = function(f) {
                return n.querySelector('[data-item][data-id="'.concat(f.id, '"]'))
            }
              , o = function(f) {
                var d = f.itemEl;
                d && d.parentElement || (d = a(f) || t._templates.item(r, f, r.removeItemButton),
                f.itemEl = d,
                s.appendChild(d))
            };
            e.forEach(o);
            var l = !!s.childNodes.length;
            if (this._isSelectOneElement && this._hasNonChoicePlaceholder) {
                var u = n.children.length;
                if (l || u > 1) {
                    var h = n.querySelector(Bi(r.classNames.placeholder));
                    h && h.remove()
                } else
                    u || (l = !0,
                    o(_t({
                        selected: !0,
                        value: "",
                        label: r.placeholderValue || "",
                        placeholder: !0
                    }, !1)))
            }
            l && (n.append(s),
            r.shouldSortItems && !this._isSelectOneElement && (e.sort(r.sorter),
            e.forEach(function(f) {
                var d = a(f);
                d && (d.remove(),
                s.append(d))
            }),
            n.append(s))),
            this._isTextElement && (this.passedElement.value = e.map(function(f) {
                var d = f.value;
                return d
            }).join(r.delimiter))
        }
        ,
        i.prototype._displayNotice = function(t, e, n) {
            n === void 0 && (n = !0);
            var r = this._notice;
            if (r && (r.type === e && r.text === t || r.type === De.addChoice && (e === De.noResults || e === De.noChoices))) {
                n && this.showDropdown(!0);
                return
            }
            this._clearNotice(),
            this._notice = t ? {
                text: t,
                type: e
            } : void 0,
            this._renderNotice(),
            n && t && this.showDropdown(!0)
        }
        ,
        i.prototype._clearNotice = function() {
            if (this._notice) {
                var t = this.choiceList.element.querySelector(Bi(this.config.classNames.notice));
                t && t.remove(),
                this._notice = void 0
            }
        }
        ,
        i.prototype._renderNotice = function(t) {
            var e = this._notice;
            if (e) {
                var n = this._templates.notice(this.config, e.text, e.type);
                t ? t.append(n) : this.choiceList.prepend(n)
            }
        }
        ,
        i.prototype._getChoiceForOutput = function(t, e) {
            return {
                id: t.id,
                highlighted: t.highlighted,
                labelClass: t.labelClass,
                labelDescription: t.labelDescription,
                customProperties: t.customProperties,
                disabled: t.disabled,
                active: t.active,
                label: t.label,
                placeholder: t.placeholder,
                value: t.value,
                groupValue: t.group ? t.group.label : void 0,
                element: t.element,
                keyCode: e
            }
        }
        ,
        i.prototype._triggerChange = function(t) {
            t != null && this.passedElement.triggerEvent(Re.change, {
                value: t
            })
        }
        ,
        i.prototype._handleButtonAction = function(t) {
            var e = this
              , n = this._store.items;
            if (!(!n.length || !this.config.removeItems || !this.config.removeItemButton)) {
                var r = t && js(t.parentElement)
                  , s = r && n.find(function(a) {
                    return a.id === r
                });
                s && this._store.withTxn(function() {
                    if (e._removeItem(s),
                    e._triggerChange(s.value),
                    e._isSelectOneElement && !e._hasNonChoicePlaceholder) {
                        var a = e._store.choices.reverse().find(function(o) {
                            return !o.disabled && o.placeholder
                        });
                        a && (e._addItem(a),
                        e.unhighlightAll(),
                        a.value && e._triggerChange(a.value))
                    }
                })
            }
        }
        ,
        i.prototype._handleItemAction = function(t, e) {
            var n = this;
            e === void 0 && (e = !1);
            var r = this._store.items;
            if (!(!r.length || !this.config.removeItems || this._isSelectOneElement)) {
                var s = js(t);
                s && (r.forEach(function(a) {
                    a.id === s && !a.highlighted ? n.highlightItem(a) : !e && a.highlighted && n.unhighlightItem(a)
                }),
                this.input.focus())
            }
        }
        ,
        i.prototype._handleChoiceAction = function(t) {
            var e = this
              , n = js(t)
              , r = n && this._store.getChoiceById(n);
            if (!r || r.disabled)
                return !1;
            var s = this.dropdown.isActive;
            if (!r.selected) {
                if (!this._canAddItems())
                    return !0;
                this._store.withTxn(function() {
                    e._addItem(r, !0, !0),
                    e.clearInput(),
                    e.unhighlightAll()
                }),
                this._triggerChange(r.value)
            }
            return s && this.config.closeDropdownOnSelect && (this.hideDropdown(!0),
            this.containerOuter.element.focus()),
            !0
        }
        ,
        i.prototype._handleBackspace = function(t) {
            var e = this.config;
            if (!(!e.removeItems || !t.length)) {
                var n = t[t.length - 1]
                  , r = t.some(function(s) {
                    return s.highlighted
                });
                e.editItems && !r && n ? (this.input.value = n.value,
                this.input.setWidth(),
                this._removeItem(n),
                this._triggerChange(n.value)) : (r || this.highlightItem(n, !1),
                this.removeHighlightedItems(!0))
            }
        }
        ,
        i.prototype._loadChoices = function() {
            var t, e = this.config;
            if (this._isTextElement) {
                if (this._presetChoices = e.items.map(function(s) {
                    return _t(s, !1)
                }),
                this.passedElement.value) {
                    var n = this.passedElement.value.split(e.delimiter).map(function(s) {
                        return _t(s, !1)
                    });
                    this._presetChoices = this._presetChoices.concat(n)
                }
                this._presetChoices.forEach(function(s) {
                    s.selected = !0
                })
            } else if (this._isSelectElement) {
                this._presetChoices = e.choices.map(function(s) {
                    return _t(s, !0)
                });
                var r = this.passedElement.optionsAsChoices();
                r && (t = this._presetChoices).push.apply(t, r)
            }
        }
        ,
        i.prototype._handleLoadingState = function(t) {
            t === void 0 && (t = !0);
            var e = this.itemList.element;
            t ? (this.disable(),
            this.containerOuter.addLoadingState(),
            this._isSelectOneElement ? e.replaceChildren(this._templates.placeholder(this.config, this.config.loadingText)) : this.input.placeholder = this.config.loadingText) : (this.enable(),
            this.containerOuter.removeLoadingState(),
            this._isSelectOneElement ? (e.replaceChildren(""),
            this._render()) : this.input.placeholder = this._placeholderValue || "")
        }
        ,
        i.prototype._handleSearch = function(t) {
            if (this.input.isFocussed)
                if (t !== null && typeof t < "u" && t.length >= this.config.searchFloor) {
                    var e = this.config.searchChoices ? this._searchChoices(t) : 0;
                    e !== null && this.passedElement.triggerEvent(Re.search, {
                        value: t,
                        resultCount: e
                    })
                } else
                    this._store.choices.some(function(n) {
                        return !n.active
                    }) && this._stopSearch()
        }
        ,
        i.prototype._canAddItems = function() {
            var t = this.config
              , e = t.maxItemCount
              , n = t.maxItemText;
            return !t.singleModeForMultiSelect && e > 0 && e <= this._store.items.length ? (this.choiceList.element.replaceChildren(""),
            this._displayNotice(typeof n == "function" ? n(e) : n, De.addChoice),
            !1) : !0
        }
        ,
        i.prototype._canCreateItem = function(t) {
            var e = this.config
              , n = !0
              , r = "";
            if (n && typeof e.addItemFilter == "function" && !e.addItemFilter(t) && (n = !1,
            r = Ki(e.customAddItemText, t)),
            n) {
                var s = this._store.choices.find(function(a) {
                    return e.valueComparer(a.value, t)
                });
                if (this._isSelectElement) {
                    if (s)
                        return this._displayNotice("", De.addChoice),
                        !1
                } else
                    this._isTextElement && !e.duplicateItemsAllowed && s && (n = !1,
                    r = Ki(e.uniqueItemText, t))
            }
            return n && (r = Ki(e.addItemText, t)),
            r && this._displayNotice(r, De.addChoice),
            n
        }
        ,
        i.prototype._searchChoices = function(t) {
            var e = t.trim().replace(/\s{2,}/, " ");
            if (!e.length || e === this._currentValue)
                return null;
            var n = this._searcher;
            n.isEmptyIndex() && n.index(this._store.searchableChoices);
            var r = n.search(e);
            this._currentValue = e,
            this._highlightPosition = 0,
            this._isSearching = !0;
            var s = this._notice
              , a = s && s.type;
            return a !== De.addChoice && (r.length ? this._clearNotice() : this._displayNotice(ol(this.config.noResultsText), De.noResults)),
            this._store.dispatch(pv(r)),
            r.length
        }
        ,
        i.prototype._stopSearch = function() {
            this._isSearching && (this._currentValue = "",
            this._isSearching = !1,
            this._clearNotice(),
            this._store.dispatch(mv(!0)),
            this.passedElement.triggerEvent(Re.search, {
                value: "",
                resultCount: 0
            }))
        }
        ,
        i.prototype._addEventListeners = function() {
            var t = this._docRoot
              , e = this.containerOuter.element
              , n = this.input.element;
            t.addEventListener("touchend", this._onTouchEnd, !0),
            e.addEventListener("keydown", this._onKeyDown, !0),
            e.addEventListener("mousedown", this._onMouseDown, !0),
            t.addEventListener("click", this._onClick, {
                passive: !0
            }),
            t.addEventListener("touchmove", this._onTouchMove, {
                passive: !0
            }),
            this.dropdown.element.addEventListener("mouseover", this._onMouseOver, {
                passive: !0
            }),
            this._isSelectOneElement && (e.addEventListener("focus", this._onFocus, {
                passive: !0
            }),
            e.addEventListener("blur", this._onBlur, {
                passive: !0
            })),
            n.addEventListener("keyup", this._onKeyUp, {
                passive: !0
            }),
            n.addEventListener("input", this._onInput, {
                passive: !0
            }),
            n.addEventListener("focus", this._onFocus, {
                passive: !0
            }),
            n.addEventListener("blur", this._onBlur, {
                passive: !0
            }),
            n.form && n.form.addEventListener("reset", this._onFormReset, {
                passive: !0
            }),
            this.input.addEventListeners()
        }
        ,
        i.prototype._removeEventListeners = function() {
            var t = this._docRoot
              , e = this.containerOuter.element
              , n = this.input.element;
            t.removeEventListener("touchend", this._onTouchEnd, !0),
            e.removeEventListener("keydown", this._onKeyDown, !0),
            e.removeEventListener("mousedown", this._onMouseDown, !0),
            t.removeEventListener("click", this._onClick),
            t.removeEventListener("touchmove", this._onTouchMove),
            this.dropdown.element.removeEventListener("mouseover", this._onMouseOver),
            this._isSelectOneElement && (e.removeEventListener("focus", this._onFocus),
            e.removeEventListener("blur", this._onBlur)),
            n.removeEventListener("keyup", this._onKeyUp),
            n.removeEventListener("input", this._onInput),
            n.removeEventListener("focus", this._onFocus),
            n.removeEventListener("blur", this._onBlur),
            n.form && n.form.removeEventListener("reset", this._onFormReset),
            this.input.removeEventListeners()
        }
        ,
        i.prototype._onKeyDown = function(t) {
            var e = t.keyCode
              , n = this.dropdown.isActive
              , r = t.key.length === 1 || t.key.length === 2 && t.key.charCodeAt(0) >= 55296 || t.key === "Unidentified";
            switch (!this._isTextElement && !n && (this.showDropdown(),
            !this.input.isFocussed && r && (this.input.value += t.key,
            t.key === " " && t.preventDefault())),
            e) {
            case 65:
                return this._onSelectKey(t, this.itemList.element.hasChildNodes());
            case 13:
                return this._onEnterKey(t, n);
            case 27:
                return this._onEscapeKey(t, n);
            case 38:
            case 33:
            case 40:
            case 34:
                return this._onDirectionKey(t, n);
            case 8:
            case 46:
                return this._onDeleteKey(t, this._store.items, this.input.isFocussed)
            }
        }
        ,
        i.prototype._onKeyUp = function() {
            this._canSearch = this.config.searchEnabled
        }
        ,
        i.prototype._onInput = function() {
            var t = this.input.value;
            if (!t) {
                this._isTextElement ? this.hideDropdown(!0) : this._stopSearch();
                return
            }
            this._canAddItems() && (this._canSearch && this._handleSearch(t),
            this._canAddUserChoices && (this._canCreateItem(t),
            this._isSelectElement && (this._highlightPosition = 0,
            this._highlightChoice())))
        }
        ,
        i.prototype._onSelectKey = function(t, e) {
            if ((t.ctrlKey || t.metaKey) && e) {
                this._canSearch = !1;
                var n = this.config.removeItems && !this.input.value && this.input.element === document.activeElement;
                n && this.highlightAll()
            }
        }
        ,
        i.prototype._onEnterKey = function(t, e) {
            var n = this
              , r = this.input.value
              , s = t.target;
            if (t.preventDefault(),
            s && s.hasAttribute("data-button")) {
                this._handleButtonAction(s);
                return
            }
            if (!e) {
                (this._isSelectElement || this._notice) && this.showDropdown();
                return
            }
            var a = this.dropdown.element.querySelector(Bi(this.config.classNames.highlightedState));
            if (!(a && this._handleChoiceAction(a))) {
                if (!s || !r) {
                    this.hideDropdown(!0);
                    return
                }
                if (this._canAddItems()) {
                    var o = !1;
                    this._store.withTxn(function() {
                        if (o = n._findAndSelectChoiceByValue(r, !0),
                        !o) {
                            if (!n._canAddUserChoices || !n._canCreateItem(r))
                                return;
                            var l = es(r)
                              , u = n.config.allowHtmlUserInput || l === r ? r : {
                                escaped: l,
                                raw: r
                            };
                            n._addChoice(_t({
                                value: u,
                                label: u,
                                selected: !0
                            }, !1), !0, !0),
                            o = !0
                        }
                        n.clearInput(),
                        n.unhighlightAll()
                    }),
                    o && (this._triggerChange(r),
                    this.config.closeDropdownOnSelect && this.hideDropdown(!0))
                }
            }
        }
        ,
        i.prototype._onEscapeKey = function(t, e) {
            e && (t.stopPropagation(),
            this.hideDropdown(!0),
            this.containerOuter.element.focus())
        }
        ,
        i.prototype._onDirectionKey = function(t, e) {
            var n = t.keyCode;
            if (e || this._isSelectOneElement) {
                this.showDropdown(),
                this._canSearch = !1;
                var r = n === 40 || n === 34 ? 1 : -1
                  , s = t.metaKey || n === 34 || n === 33
                  , a = void 0;
                if (s)
                    r > 0 ? a = this.dropdown.element.querySelector("".concat(ji, ":last-of-type")) : a = this.dropdown.element.querySelector(ji);
                else {
                    var o = this.dropdown.element.querySelector(Bi(this.config.classNames.highlightedState));
                    o ? a = Ev(o, ji, r) : a = this.dropdown.element.querySelector(ji)
                }
                a && (wv(a, this.choiceList.element, r) || this.choiceList.scrollToChildElement(a, r),
                this._highlightChoice(a)),
                t.preventDefault()
            }
        }
        ,
        i.prototype._onDeleteKey = function(t, e, n) {
            !this._isSelectOneElement && !t.target.value && n && (this._handleBackspace(e),
            t.preventDefault())
        }
        ,
        i.prototype._onTouchMove = function() {
            this._wasTap && (this._wasTap = !1)
        }
        ,
        i.prototype._onTouchEnd = function(t) {
            var e = (t || t.touches[0]).target
              , n = this._wasTap && this.containerOuter.element.contains(e);
            if (n) {
                var r = e === this.containerOuter.element || e === this.containerInner.element;
                r && (this._isTextElement ? this.input.focus() : this._isSelectMultipleElement && this.showDropdown()),
                t.stopPropagation()
            }
            this._wasTap = !0
        }
        ,
        i.prototype._onMouseDown = function(t) {
            var e = t.target;
            if (e instanceof HTMLElement) {
                if (R1 && this.choiceList.element.contains(e)) {
                    var n = this.choiceList.element.firstElementChild;
                    this._isScrollingOnIe = this._direction === "ltr" ? t.offsetX >= n.offsetWidth : t.offsetX < n.offsetLeft
                }
                if (e !== this.input.element) {
                    var r = e.closest("[data-button],[data-item],[data-choice]");
                    r instanceof HTMLElement && ("button"in r.dataset ? this._handleButtonAction(r) : "item"in r.dataset ? this._handleItemAction(r, t.shiftKey) : "choice"in r.dataset && this._handleChoiceAction(r)),
                    t.preventDefault()
                }
            }
        }
        ,
        i.prototype._onMouseOver = function(t) {
            var e = t.target;
            e instanceof HTMLElement && "choice"in e.dataset && this._highlightChoice(e)
        }
        ,
        i.prototype._onClick = function(t) {
            var e = t.target
              , n = this.containerOuter
              , r = n.element.contains(e);
            r ? !this.dropdown.isActive && !n.isDisabled ? this._isTextElement ? document.activeElement !== this.input.element && this.input.focus() : (this.showDropdown(),
            n.element.focus()) : this._isSelectOneElement && e !== this.input.element && !this.dropdown.element.contains(e) && this.hideDropdown() : (n.removeFocusState(),
            this.hideDropdown(!0),
            this.unhighlightAll())
        }
        ,
        i.prototype._onFocus = function(t) {
            var e = t.target
              , n = this.containerOuter
              , r = e && n.element.contains(e);
            if (r) {
                var s = e === this.input.element;
                this._isTextElement ? s && n.addFocusState() : this._isSelectMultipleElement ? s && (this.showDropdown(!0),
                n.addFocusState()) : (n.addFocusState(),
                s && this.showDropdown(!0))
            }
        }
        ,
        i.prototype._onBlur = function(t) {
            var e = t.target
              , n = this.containerOuter
              , r = e && n.element.contains(e);
            if (r && !this._isScrollingOnIe) {
                var s = e === this.input.element;
                this._isTextElement || this._isSelectMultipleElement ? s && (n.removeFocusState(),
                this.hideDropdown(!0),
                this.unhighlightAll()) : (n.removeFocusState(),
                (s || e === n.element && !this._canSearch) && this.hideDropdown(!0))
            } else
                this._isScrollingOnIe = !1,
                this.input.element.focus()
        }
        ,
        i.prototype._onFormReset = function() {
            var t = this;
            this._store.withTxn(function() {
                t.clearInput(),
                t.hideDropdown(),
                t.refresh(!1, !1, !0),
                t._initialItems.length && t.setChoiceByValue(t._initialItems)
            })
        }
        ,
        i.prototype._highlightChoice = function(t) {
            t === void 0 && (t = null);
            var e = Array.from(this.dropdown.element.querySelectorAll(ji));
            if (e.length) {
                var n = t
                  , r = this.config.classNames.highlightedState
                  , s = Array.from(this.dropdown.element.querySelectorAll(Bi(r)));
                s.forEach(function(a) {
                    At(a, r),
                    a.setAttribute("aria-selected", "false")
                }),
                n ? this._highlightPosition = e.indexOf(n) : (e.length > this._highlightPosition ? n = e[this._highlightPosition] : n = e[e.length - 1],
                n || (n = e[0])),
                Y(n, r),
                n.setAttribute("aria-selected", "true"),
                this.passedElement.triggerEvent(Re.highlightChoice, {
                    el: n
                }),
                this.dropdown.isActive && (this.input.setActiveDescendant(n.id),
                this.containerOuter.setActiveDescendant(n.id))
            }
        }
        ,
        i.prototype._addItem = function(t, e, n) {
            if (e === void 0 && (e = !0),
            n === void 0 && (n = !1),
            !t.id)
                throw new TypeError("item.id must be set before _addItem is called for a choice/item");
            (this.config.singleModeForMultiSelect || this._isSelectOneElement) && this.removeActiveItems(t.id),
            this._store.dispatch(vv(t)),
            e && (this.passedElement.triggerEvent(Re.addItem, this._getChoiceForOutput(t)),
            n && this.passedElement.triggerEvent(Re.choice, this._getChoiceForOutput(t)))
        }
        ,
        i.prototype._removeItem = function(t) {
            t.id && (this._store.dispatch(sl(t)),
            this.passedElement.triggerEvent(Re.removeItem, this._getChoiceForOutput(t)))
        }
        ,
        i.prototype._addChoice = function(t, e, n) {
            if (e === void 0 && (e = !0),
            n === void 0 && (n = !1),
            t.id)
                throw new TypeError("Can not re-add a choice which has already been added");
            var r = this.config;
            if (!((this._isSelectElement || !r.duplicateItemsAllowed) && this._store.choices.find(function(o) {
                return r.valueComparer(o.value, t.value)
            }))) {
                this._lastAddedChoiceId++,
                t.id = this._lastAddedChoiceId,
                t.elementId = "".concat(this._baseId, "-").concat(this._idNames.itemChoice, "-").concat(t.id);
                var s = r.prependValue
                  , a = r.appendValue;
                s && (t.value = s + t.value),
                a && (t.value += a.toString()),
                (s || a) && t.element && (t.element.value = t.value),
                this._clearNotice(),
                this._store.dispatch(fv(t)),
                t.selected && this._addItem(t, e, n)
            }
        }
        ,
        i.prototype._addGroup = function(t, e) {
            var n = this;
            if (e === void 0 && (e = !0),
            t.id)
                throw new TypeError("Can not re-add a group which has already been added");
            this._store.dispatch(gv(t)),
            t.choices && (this._lastAddedGroupId++,
            t.id = this._lastAddedGroupId,
            t.choices.forEach(function(r) {
                r.group = t,
                t.disabled && (r.disabled = !0),
                n._addChoice(r, e)
            }))
        }
        ,
        i.prototype._createTemplates = function() {
            var t = this
              , e = this.config.callbackOnCreateTemplates
              , n = {};
            typeof e == "function" && (n = e.call(this, _v, Ja, ts));
            var r = {};
            Object.keys(this._templates).forEach(function(s) {
                s in n ? r[s] = n[s].bind(t) : r[s] = t._templates[s].bind(t)
            }),
            this._templates = r
        }
        ,
        i.prototype._createElements = function() {
            var t = this._templates
              , e = this
              , n = e.config
              , r = e._isSelectOneElement
              , s = n.position
              , a = n.classNames
              , o = this._elementType;
            this.containerOuter = new ll({
                element: t.containerOuter(n, this._direction, this._isSelectElement, r, n.searchEnabled, o, n.labelId),
                classNames: a,
                type: o,
                position: s
            }),
            this.containerInner = new ll({
                element: t.containerInner(n),
                classNames: a,
                type: o,
                position: s
            }),
            this.input = new Ov({
                element: t.input(n, this._placeholderValue),
                classNames: a,
                type: o,
                preventPaste: !n.paste
            }),
            this.choiceList = new cl({
                element: t.choiceList(n, r)
            }),
            this.itemList = new cl({
                element: t.itemList(n, r)
            }),
            this.dropdown = new Lv({
                element: t.dropdown(n),
                classNames: a,
                type: o
            })
        }
        ,
        i.prototype._createStructure = function() {
            var t = this
              , e = t.containerInner
              , n = t.containerOuter
              , r = t.passedElement
              , s = this.dropdown.element;
            r.conceal(),
            e.wrap(r.element),
            n.wrap(e.element),
            this._isSelectOneElement ? this.input.placeholder = this.config.searchPlaceholderValue || "" : (this._placeholderValue && (this.input.placeholder = this._placeholderValue),
            this.input.setWidth()),
            n.element.appendChild(e.element),
            n.element.appendChild(s),
            e.element.appendChild(this.itemList.element),
            s.appendChild(this.choiceList.element),
            this._isSelectOneElement ? this.config.searchEnabled && s.insertBefore(this.input.element, s.firstChild) : e.element.appendChild(this.input.element),
            this._highlightPosition = 0,
            this._isSearching = !1
        }
        ,
        i.prototype._initStore = function() {
            var t = this;
            this._store.subscribe(this._render).withTxn(function() {
                t._addPredefinedChoices(t._presetChoices, t._isSelectOneElement && !t._hasNonChoicePlaceholder, !1)
            }),
            (!this._store.choices.length || this._isSelectOneElement && this._hasNonChoicePlaceholder) && this._render()
        }
        ,
        i.prototype._addPredefinedChoices = function(t, e, n) {
            var r = this;
            if (e === void 0 && (e = !1),
            n === void 0 && (n = !0),
            e) {
                var s = t.findIndex(function(a) {
                    return a.selected
                }) === -1;
                s && t.some(function(a) {
                    return a.disabled || "choices"in a ? !1 : (a.selected = !0,
                    !0)
                })
            }
            t.forEach(function(a) {
                "choices"in a ? r._isSelectElement && r._addGroup(a, n) : r._addChoice(a, n)
            })
        }
        ,
        i.prototype._findAndSelectChoiceByValue = function(t, e) {
            var n = this;
            e === void 0 && (e = !1);
            var r = this._store.choices.find(function(s) {
                return n.config.valueComparer(s.value, t)
            });
            return r && !r.disabled && !r.selected ? (this._addItem(r, !0, e),
            !0) : !1
        }
        ,
        i.prototype._generatePlaceholderValue = function() {
            var t = this.config;
            if (!t.placeholder)
                return null;
            if (this._hasNonChoicePlaceholder)
                return t.placeholderValue;
            if (this._isSelectElement) {
                var e = this.passedElement.placeholderOption;
                return e ? e.text : null
            }
            return null
        }
        ,
        i.prototype._warnChoicesInitFailed = function(t) {
            if (!this.config.silent)
                if (this.initialised) {
                    if (!this.initialisedOK)
                        throw new TypeError("".concat(t, " called for an element which has multiple instances of Choices initialised on it"))
                } else
                    throw new TypeError("".concat(t, " called on a non-initialised instance of Choices"))
        }
        ,
        i.version = "11.0.2",
        i
    }();
    class B1 extends uv {
        initialize(t) {
            Kt( () => this.initSelects(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initSelects(e.detail.snippet))
        }
        initSelects(t) {
            t.querySelectorAll("select[data-select]").forEach(n => this.initSelect(n))
        }
        initSelect(t) {
            var h;
            if (t._choices !== void 0)
                return;
            if (t.classList.contains("choices__input")) {
                const f = t.cloneNode(!0);
                f.classList.remove("choices__input"),
                f.removeAttribute("hidden"),
                delete f.dataset.choice,
                (h = t.closest(".choices")) == null || h.replaceWith(f),
                t = f
            }
            const e = !!t.multiple
              , n = !!t.dataset.selectSearch
              , r = !!t.dataset.selectAdd
              , s = t.dataset.selectLabel
              , a = t.dataset.selectValue || "id"
              , o = t.dataset.selectPlaceholder ?? null;
            let l;
            const u = {
                ...this.getDefaultConfig(),
                removeItemButton: e,
                placeholderValue: o
            };
            if (n && (u.noChoicesText = si.typeToSearch),
            r && (u.noChoicesText = si.typeToSearchOrAdd,
            u.noResultsText = function() {
                return l.input.element.value === "" ? si.typeToSearchOrAdd : si.clickPlusToAdd
            }
            ),
            l = new P1(t,u),
            t._choices = l,
            (r || n) && !s)
                throw new Error("Select with search or add ability needs to have the label key specified. Add data-search-label attribute to choices input.");
            if (l.containerInner.element.addEventListener("click", () => l.input.element.focus()),
            t.addEventListener("optionsUpdated", () => l.refresh()),
            t.dataset.selectSearch && this.initSearch(l, f => f.dataset.selectSearch, s, a),
            t.dataset.selectAutoclose !== void 0 && t.addEventListener("choice", () => l.hideDropdown()),
            t.dataset.selectAdd) {
                const f = t.dataset.selectAdd
                  , d = t.dataset.selectAddData ? JSON.parse(t.dataset.selectAddData) : {};
                this.initAdd(l, f, s, a, d)
            }
            if (e) {
                const f = t.dataset.selectExternal
                  , d = document.querySelector(`[data-form-badges="${f}"]`);
                d && this.initExternalItems(l, d)
            }
        }
    }
    
    class lb {
        initialize(t) {
            Kt( () => {
                this.initAccordions(document),
                this.initCounters(document)
            }
            ),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initAccordions(e.detail.snippet)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initCounters(e.detail.snippet))
        }
        initAccordions(t) {
            t.querySelectorAll("fieldset.accordion-item").forEach(n => {
                const r = n.form ?? null;
                r == null || r.removeEventListener("netteInvalid", this.openCollapsedFieldset),
                r == null || r.addEventListener("netteInvalid", this.openCollapsedFieldset)
            }
            )
        }
        initCounters(t) {
            t.querySelectorAll('[data-inputs-counter="group"]').forEach(n => {
                n.querySelectorAll("input").forEach(s => s.addEventListener("input", () => this.recountCounter(n))),
                this.recountCounter(n)
            }
            )
        }
        openCollapsedFieldset(t) {
            const {errors: e, focusElement: n} = t.detail
              , r = [];
            e.forEach(s => {
                var o;
                const a = s.element.closest(".accordion-collapse");
                if (!(!a || r.includes(a.id))) {
                    if (!a.classList.contains("show")) {
                        const l = cu.getOrCreateInstance(a, {
                            toggle: !1
                        });
                        ((o = n == null ? void 0 : n.closest(".accordion-collapse")) == null ? void 0 : o.id) === a.id && a.addEventListener("shown.bs.collapse", () => n.focus(), {
                            once: !0
                        }),
                        l.show()
                    }
                    r.push(a.id)
                }
            }
            )
        }
        recountCounter(t) {
            const e = t.querySelector('[data-inputs-counter="counter"]');
            if (!e)
                return;
            const n = t.querySelectorAll("input, textarea, select");
            let r = 0;
            n.forEach(s => {
                (s.nodeName === "INPUT" && s.type === "checkbox" ? !!s.checked : !!s.value) && r++
            }
            ),
            e.textContent = r + ""
        }
    }
    class cb {
        initialize(t) {
            Kt( () => this.initValuesText(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initValuesText(e.detail.snippet))
        }
        initValuesText(t) {
            t.querySelectorAll("[data-values-text]").forEach(n => {
                this.getInputs(n).forEach(s => s.addEventListener("input", () => this.changeText(n)))
            }
            )
        }
        changeText(t) {
            t.innerHTML = this.getText(t)
        }
        getText(t) {
            const e = this.getInputs(t).map(n => n.value.trim()).filter(n => !!n);
            return e.length > 0 ? e.join(this.getSeparator(t)) : this.getDefaultText(t)
        }
        getInputs(t) {
            return JSON.parse(t.dataset.valuesText + "").map(e => document.querySelector(`[name="${e}"]`))
        }
        getDefaultText(t) {
            return t.dataset.valuesTextDefault ?? ""
        }
        getSeparator(t) {
            return t.dataset.valuesTextSeparator ?? " "
        }
    }
    ve.registerExtension(new uu);
    ve.registerExtension(new cv);
    ve.registerExtension(new B1);
    ve.registerExtension(new lb);
    ve.registerExtension(new cb);
}
);
export default hb();
