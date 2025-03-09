import {c as gt, g as yt, o as X, n as K} from "./onDomReady-CSuAWNBp.js";
import {S as st} from "./splide-EAoZSNiN.js";
var ot = {
    exports: {}
};
(function(g, n) {
    (function(s, p) {
        g.exports = p()
    }
    )(typeof self < "u" ? self : gt, () => ( () => {
        var s = {
            75: function(o) {
                (function() {
                    var c, h, E, w, b, S;
                    typeof performance < "u" && performance !== null && performance.now ? o.exports = function() {
                        return performance.now()
                    }
                    : typeof process < "u" && process !== null && process.hrtime ? (o.exports = function() {
                        return (c() - b) / 1e6
                    }
                    ,
                    h = process.hrtime,
                    w = (c = function() {
                        var v;
                        return 1e9 * (v = h())[0] + v[1]
                    }
                    )(),
                    S = 1e9 * process.uptime(),
                    b = w - S) : Date.now ? (o.exports = function() {
                        return Date.now() - E
                    }
                    ,
                    E = Date.now()) : (o.exports = function() {
                        return new Date().getTime() - E
                    }
                    ,
                    E = new Date().getTime())
                }
                ).call(this)
            },
            4087: (o, c, h) => {
                for (var E = h(75), w = typeof window > "u" ? h.g : window, b = ["moz", "webkit"], S = "AnimationFrame", v = w["request" + S], V = w["cancel" + S] || w["cancelRequest" + S], x = 0; !v && x < b.length; x++)
                    v = w[b[x] + "Request" + S],
                    V = w[b[x] + "Cancel" + S] || w[b[x] + "CancelRequest" + S];
                if (!v || !V) {
                    var O = 0
                      , M = 0
                      , F = [];
                    v = function(C) {
                        if (F.length === 0) {
                            var D = E()
                              , H = Math.max(0, 16.666666666666668 - (D - O));
                            O = H + D,
                            setTimeout(function() {
                                var _ = F.slice(0);
                                F.length = 0;
                                for (var P = 0; P < _.length; P++)
                                    if (!_[P].cancelled)
                                        try {
                                            _[P].callback(O)
                                        } catch (k) {
                                            setTimeout(function() {
                                                throw k
                                            }, 0)
                                        }
                            }, Math.round(H))
                        }
                        return F.push({
                            handle: ++M,
                            callback: C,
                            cancelled: !1
                        }),
                        M
                    }
                    ,
                    V = function(C) {
                        for (var D = 0; D < F.length; D++)
                            F[D].handle === C && (F[D].cancelled = !0)
                    }
                }
                o.exports = function(C) {
                    return v.call(w, C)
                }
                ,
                o.exports.cancel = function() {
                    V.apply(w, arguments)
                }
                ,
                o.exports.polyfill = function(C) {
                    C || (C = w),
                    C.requestAnimationFrame = v,
                    C.cancelAnimationFrame = V
                }
            }
        }
          , p = {};
        function e(o) {
            var c = p[o];
            if (c !== void 0)
                return c.exports;
            var h = p[o] = {
                exports: {}
            };
            return s[o].call(h.exports, h, h.exports, e),
            h.exports
        }
        e.n = o => {
            var c = o && o.__esModule ? () => o.default : () => o;
            return e.d(c, {
                a: c
            }),
            c
        }
        ,
        e.d = (o, c) => {
            for (var h in c)
                e.o(c, h) && !e.o(o, h) && Object.defineProperty(o, h, {
                    enumerable: !0,
                    get: c[h]
                })
        }
        ,
        e.g = function() {
            if (typeof globalThis == "object")
                return globalThis;
            try {
                return this || new Function("return this")()
            } catch {
                if (typeof window == "object")
                    return window
            }
        }(),
        e.o = (o, c) => Object.prototype.hasOwnProperty.call(o, c);
        var y = {};
        return ( () => {
            e.d(y, {
                default: () => lt
            });
            var o = e(4087)
              , c = e.n(o);
            const h = function(l) {
                return new RegExp(/<[a-z][\s\S]*>/i).test(l)
            }
              , E = function(l, r) {
                return Math.floor(Math.random() * (r - l + 1)) + l
            };
            var w = "TYPE_CHARACTER"
              , b = "REMOVE_CHARACTER"
              , S = "REMOVE_ALL"
              , v = "REMOVE_LAST_VISIBLE_NODE"
              , V = "PAUSE_FOR"
              , x = "CALL_FUNCTION"
              , O = "ADD_HTML_TAG_ELEMENT"
              , M = "CHANGE_DELETE_SPEED"
              , F = "CHANGE_DELAY"
              , C = "CHANGE_CURSOR"
              , D = "PASTE_STRING"
              , H = "HTML_TAG";
            function _(l) {
                return _ = typeof Symbol == "function" && typeof Symbol.iterator == "symbol" ? function(r) {
                    return typeof r
                }
                : function(r) {
                    return r && typeof Symbol == "function" && r.constructor === Symbol && r !== Symbol.prototype ? "symbol" : typeof r
                }
                ,
                _(l)
            }
            function P(l, r) {
                var u = Object.keys(l);
                if (Object.getOwnPropertySymbols) {
                    var a = Object.getOwnPropertySymbols(l);
                    r && (a = a.filter(function(L) {
                        return Object.getOwnPropertyDescriptor(l, L).enumerable
                    })),
                    u.push.apply(u, a)
                }
                return u
            }
            function k(l) {
                for (var r = 1; r < arguments.length; r++) {
                    var u = arguments[r] != null ? arguments[r] : {};
                    r % 2 ? P(Object(u), !0).forEach(function(a) {
                        m(l, a, u[a])
                    }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(l, Object.getOwnPropertyDescriptors(u)) : P(Object(u)).forEach(function(a) {
                        Object.defineProperty(l, a, Object.getOwnPropertyDescriptor(u, a))
                    })
                }
                return l
            }
            function R(l) {
                return function(r) {
                    if (Array.isArray(r))
                        return G(r)
                }(l) || function(r) {
                    if (typeof Symbol < "u" && r[Symbol.iterator] != null || r["@@iterator"] != null)
                        return Array.from(r)
                }(l) || function(r, u) {
                    if (r) {
                        if (typeof r == "string")
                            return G(r, u);
                        var a = Object.prototype.toString.call(r).slice(8, -1);
                        return a === "Object" && r.constructor && (a = r.constructor.name),
                        a === "Map" || a === "Set" ? Array.from(r) : a === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(a) ? G(r, u) : void 0
                    }
                }(l) || function() {
                    throw new TypeError(`Invalid attempt to spread non-iterable instance.
In order to be iterable, non-array objects must have a [Symbol.iterator]() method.`)
                }()
            }
            function G(l, r) {
                (r == null || r > l.length) && (r = l.length);
                for (var u = 0, a = new Array(r); u < r; u++)
                    a[u] = l[u];
                return a
            }
            function at(l, r) {
                for (var u = 0; u < r.length; u++) {
                    var a = r[u];
                    a.enumerable = a.enumerable || !1,
                    a.configurable = !0,
                    "value"in a && (a.writable = !0),
                    Object.defineProperty(l, Z(a.key), a)
                }
            }
            function m(l, r, u) {
                return (r = Z(r))in l ? Object.defineProperty(l, r, {
                    value: u,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : l[r] = u,
                l
            }
            function Z(l) {
                var r = function(u, a) {
                    if (_(u) !== "object" || u === null)
                        return u;
                    var L = u[Symbol.toPrimitive];
                    if (L !== void 0) {
                        var t = L.call(u, "string");
                        if (_(t) !== "object")
                            return t;
                        throw new TypeError("@@toPrimitive must return a primitive value.")
                    }
                    return String(u)
                }(l);
                return _(r) === "symbol" ? r : String(r)
            }
            const lt = function() {
                function l(a, L) {
                    var t = this;
                    if (function(i, d) {
                        if (!(i instanceof d))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, l),
                    m(this, "state", {
                        cursorAnimation: null,
                        lastFrameTime: null,
                        pauseUntil: null,
                        eventQueue: [],
                        eventLoop: null,
                        eventLoopPaused: !1,
                        reverseCalledEvents: [],
                        calledEvents: [],
                        visibleNodes: [],
                        initialOptions: null,
                        elements: {
                            container: null,
                            wrapper: document.createElement("span"),
                            cursor: document.createElement("span")
                        }
                    }),
                    m(this, "options", {
                        strings: null,
                        cursor: "|",
                        delay: "natural",
                        pauseFor: 1500,
                        deleteSpeed: "natural",
                        loop: !1,
                        autoStart: !1,
                        devMode: !1,
                        skipAddStyles: !1,
                        wrapperClassName: "Typewriter__wrapper",
                        cursorClassName: "Typewriter__cursor",
                        stringSplitter: null,
                        onCreateTextNode: null,
                        onRemoveNode: null
                    }),
                    m(this, "setupWrapperElement", function() {
                        t.state.elements.container && (t.state.elements.wrapper.className = t.options.wrapperClassName,
                        t.state.elements.cursor.className = t.options.cursorClassName,
                        t.state.elements.cursor.innerHTML = t.options.cursor,
                        t.state.elements.container.innerHTML = "",
                        t.state.elements.container.appendChild(t.state.elements.wrapper),
                        t.state.elements.container.appendChild(t.state.elements.cursor))
                    }),
                    m(this, "start", function() {
                        return t.state.eventLoopPaused = !1,
                        t.runEventLoop(),
                        t
                    }),
                    m(this, "pause", function() {
                        return t.state.eventLoopPaused = !0,
                        t
                    }),
                    m(this, "stop", function() {
                        return t.state.eventLoop && ((0,
                        o.cancel)(t.state.eventLoop),
                        t.state.eventLoop = null),
                        t
                    }),
                    m(this, "pauseFor", function(i) {
                        return t.addEventToQueue(V, {
                            ms: i
                        }),
                        t
                    }),
                    m(this, "typeOutAllStrings", function() {
                        return typeof t.options.strings == "string" ? (t.typeString(t.options.strings).pauseFor(t.options.pauseFor),
                        t) : (t.options.strings.forEach(function(i) {
                            t.typeString(i).pauseFor(t.options.pauseFor).deleteAll(t.options.deleteSpeed)
                        }),
                        t)
                    }),
                    m(this, "typeString", function(i) {
                        var d = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : null;
                        if (h(i))
                            return t.typeOutHTMLString(i, d);
                        if (i) {
                            var T = (t.options || {}).stringSplitter
                              , A = typeof T == "function" ? T(i) : i.split("");
                            t.typeCharacters(A, d)
                        }
                        return t
                    }),
                    m(this, "pasteString", function(i) {
                        var d = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : null;
                        return h(i) ? t.typeOutHTMLString(i, d, !0) : (i && t.addEventToQueue(D, {
                            character: i,
                            node: d
                        }),
                        t)
                    }),
                    m(this, "typeOutHTMLString", function(i) {
                        var d = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : null
                          , T = arguments.length > 2 ? arguments[2] : void 0
                          , A = function(q) {
                            var I = document.createElement("div");
                            return I.innerHTML = q,
                            I.childNodes
                        }(i);
                        if (A.length > 0)
                            for (var f = 0; f < A.length; f++) {
                                var N = A[f]
                                  , j = N.innerHTML;
                                N && N.nodeType !== 3 ? (N.innerHTML = "",
                                t.addEventToQueue(O, {
                                    node: N,
                                    parentNode: d
                                }),
                                T ? t.pasteString(j, N) : t.typeString(j, N)) : N.textContent && (T ? t.pasteString(N.textContent, d) : t.typeString(N.textContent, d))
                            }
                        return t
                    }),
                    m(this, "deleteAll", function() {
                        var i = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : "natural";
                        return t.addEventToQueue(S, {
                            speed: i
                        }),
                        t
                    }),
                    m(this, "changeDeleteSpeed", function(i) {
                        if (!i)
                            throw new Error("Must provide new delete speed");
                        return t.addEventToQueue(M, {
                            speed: i
                        }),
                        t
                    }),
                    m(this, "changeDelay", function(i) {
                        if (!i)
                            throw new Error("Must provide new delay");
                        return t.addEventToQueue(F, {
                            delay: i
                        }),
                        t
                    }),
                    m(this, "changeCursor", function(i) {
                        if (!i)
                            throw new Error("Must provide new cursor");
                        return t.addEventToQueue(C, {
                            cursor: i
                        }),
                        t
                    }),
                    m(this, "deleteChars", function(i) {
                        if (!i)
                            throw new Error("Must provide amount of characters to delete");
                        for (var d = 0; d < i; d++)
                            t.addEventToQueue(b);
                        return t
                    }),
                    m(this, "callFunction", function(i, d) {
                        if (!i || typeof i != "function")
                            throw new Error("Callback must be a function");
                        return t.addEventToQueue(x, {
                            cb: i,
                            thisArg: d
                        }),
                        t
                    }),
                    m(this, "typeCharacters", function(i) {
                        var d = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : null;
                        if (!i || !Array.isArray(i))
                            throw new Error("Characters must be an array");
                        return i.forEach(function(T) {
                            t.addEventToQueue(w, {
                                character: T,
                                node: d
                            })
                        }),
                        t
                    }),
                    m(this, "removeCharacters", function(i) {
                        if (!i || !Array.isArray(i))
                            throw new Error("Characters must be an array");
                        return i.forEach(function() {
                            t.addEventToQueue(b)
                        }),
                        t
                    }),
                    m(this, "addEventToQueue", function(i, d) {
                        var T = arguments.length > 2 && arguments[2] !== void 0 && arguments[2];
                        return t.addEventToStateProperty(i, d, T, "eventQueue")
                    }),
                    m(this, "addReverseCalledEvent", function(i, d) {
                        var T = arguments.length > 2 && arguments[2] !== void 0 && arguments[2];
                        return t.options.loop ? t.addEventToStateProperty(i, d, T, "reverseCalledEvents") : t
                    }),
                    m(this, "addEventToStateProperty", function(i, d) {
                        var T = arguments.length > 2 && arguments[2] !== void 0 && arguments[2]
                          , A = arguments.length > 3 ? arguments[3] : void 0
                          , f = {
                            eventName: i,
                            eventArgs: d || {}
                        };
                        return t.state[A] = T ? [f].concat(R(t.state[A])) : [].concat(R(t.state[A]), [f]),
                        t
                    }),
                    m(this, "runEventLoop", function() {
                        t.state.lastFrameTime || (t.state.lastFrameTime = Date.now());
                        var i = Date.now()
                          , d = i - t.state.lastFrameTime;
                        if (!t.state.eventQueue.length) {
                            if (!t.options.loop)
                                return;
                            t.state.eventQueue = R(t.state.calledEvents),
                            t.state.calledEvents = [],
                            t.options = k({}, t.state.initialOptions)
                        }
                        if (t.state.eventLoop = c()(t.runEventLoop),
                        !t.state.eventLoopPaused) {
                            if (t.state.pauseUntil) {
                                if (i < t.state.pauseUntil)
                                    return;
                                t.state.pauseUntil = null
                            }
                            var T, A = R(t.state.eventQueue), f = A.shift();
                            if (!(d <= (T = f.eventName === v || f.eventName === b ? t.options.deleteSpeed === "natural" ? E(40, 80) : t.options.deleteSpeed : t.options.delay === "natural" ? E(120, 160) : t.options.delay))) {
                                var N = f.eventName
                                  , j = f.eventArgs;
                                switch (t.logInDevMode({
                                    currentEvent: f,
                                    state: t.state,
                                    delay: T
                                }),
                                N) {
                                case D:
                                case w:
                                    var q = j.character
                                      , I = j.node
                                      , et = document.createTextNode(q)
                                      , Q = et;
                                    t.options.onCreateTextNode && typeof t.options.onCreateTextNode == "function" && (Q = t.options.onCreateTextNode(q, et)),
                                    Q && (I ? I.appendChild(Q) : t.state.elements.wrapper.appendChild(Q)),
                                    t.state.visibleNodes = [].concat(R(t.state.visibleNodes), [{
                                        type: "TEXT_NODE",
                                        character: q,
                                        node: Q
                                    }]);
                                    break;
                                case b:
                                    A.unshift({
                                        eventName: v,
                                        eventArgs: {
                                            removingCharacterNode: !0
                                        }
                                    });
                                    break;
                                case V:
                                    var ut = f.eventArgs.ms;
                                    t.state.pauseUntil = Date.now() + parseInt(ut);
                                    break;
                                case x:
                                    var nt = f.eventArgs
                                      , pt = nt.cb
                                      , ct = nt.thisArg;
                                    pt.call(ct, {
                                        elements: t.state.elements
                                    });
                                    break;
                                case O:
                                    var rt = f.eventArgs
                                      , z = rt.node
                                      , $ = rt.parentNode;
                                    $ ? $.appendChild(z) : t.state.elements.wrapper.appendChild(z),
                                    t.state.visibleNodes = [].concat(R(t.state.visibleNodes), [{
                                        type: H,
                                        node: z,
                                        parentNode: $ || t.state.elements.wrapper
                                    }]);
                                    break;
                                case S:
                                    var dt = t.state.visibleNodes
                                      , B = j.speed
                                      , W = [];
                                    B && W.push({
                                        eventName: M,
                                        eventArgs: {
                                            speed: B,
                                            temp: !0
                                        }
                                    });
                                    for (var it = 0, ht = dt.length; it < ht; it++)
                                        W.push({
                                            eventName: v,
                                            eventArgs: {
                                                removingCharacterNode: !1
                                            }
                                        });
                                    B && W.push({
                                        eventName: M,
                                        eventArgs: {
                                            speed: t.options.deleteSpeed,
                                            temp: !0
                                        }
                                    }),
                                    A.unshift.apply(A, W);
                                    break;
                                case v:
                                    var mt = f.eventArgs.removingCharacterNode;
                                    if (t.state.visibleNodes.length) {
                                        var J = t.state.visibleNodes.pop()
                                          , ft = J.type
                                          , U = J.node
                                          , vt = J.character;
                                        t.options.onRemoveNode && typeof t.options.onRemoveNode == "function" && t.options.onRemoveNode({
                                            node: U,
                                            character: vt
                                        }),
                                        U && U.parentNode.removeChild(U),
                                        ft === H && mt && A.unshift({
                                            eventName: v,
                                            eventArgs: {}
                                        })
                                    }
                                    break;
                                case M:
                                    t.options.deleteSpeed = f.eventArgs.speed;
                                    break;
                                case F:
                                    t.options.delay = f.eventArgs.delay;
                                    break;
                                case C:
                                    t.options.cursor = f.eventArgs.cursor,
                                    t.state.elements.cursor.innerHTML = f.eventArgs.cursor
                                }
                                t.options.loop && (f.eventName === v || f.eventArgs && f.eventArgs.temp || (t.state.calledEvents = [].concat(R(t.state.calledEvents), [f]))),
                                t.state.eventQueue = A,
                                t.state.lastFrameTime = i
                            }
                        }
                    }),
                    a)
                        if (typeof a == "string") {
                            var tt = document.querySelector(a);
                            if (!tt)
                                throw new Error("Could not find container element");
                            this.state.elements.container = tt
                        } else
                            this.state.elements.container = a;
                    L && (this.options = k(k({}, this.options), L)),
                    this.state.initialOptions = k({}, this.options),
                    this.init()
                }
                var r, u;
                return r = l,
                (u = [{
                    key: "init",
                    value: function() {
                        var a, L;
                        this.setupWrapperElement(),
                        this.addEventToQueue(C, {
                            cursor: this.options.cursor
                        }, !0),
                        this.addEventToQueue(S, null, !0),
                        !window || window.___TYPEWRITER_JS_STYLES_ADDED___ || this.options.skipAddStyles || (a = ".Typewriter__cursor{-webkit-animation:Typewriter-cursor 1s infinite;animation:Typewriter-cursor 1s infinite;margin-left:1px}@-webkit-keyframes Typewriter-cursor{0%{opacity:0}50%{opacity:1}100%{opacity:0}}@keyframes Typewriter-cursor{0%{opacity:0}50%{opacity:1}100%{opacity:0}}",
                        (L = document.createElement("style")).appendChild(document.createTextNode(a)),
                        document.head.appendChild(L),
                        window.___TYPEWRITER_JS_STYLES_ADDED___ = !0),
                        this.options.autoStart === !0 && this.options.strings && this.typeOutAllStrings().start()
                    }
                }, {
                    key: "logInDevMode",
                    value: function(a) {
                        this.options.devMode && console.log(a)
                    }
                }]) && at(r.prototype, u),
                Object.defineProperty(r, "prototype", {
                    writable: !1
                }),
                l
            }()
        }
        )(),
        y.default
    }
    )())
}
)(ot);
var wt = ot.exports;
const Et = yt(wt);
class bt {
    constructor() {
        this.slideshow = null,
        this.writer = null,
        this.titles = null
    }
    initialize(n) {
        X( () => this.initSlideshow(document)),
        n.snippetHandler.addEventListener("afterUpdate", s => this.initSlideshow(s.detail.snippet))
    }
    initSlideshow(n) {
        if (this.slideshow = n.querySelector("#homeSlideshow"),
        !this.slideshow)
            return;
        const s = new st(this.slideshow,{
            type: "fade",
            autoplay: !0,
            interval: 7e3,
            speed: 1e3,
            rewind: !0,
            pagination: !1,
            waitForTransition: !0
        });
        window.addEventListener("resize", () => requestAnimationFrame( () => this.repositionWriter())),
        this.repositionWriter(),
        s.on("ready", () => this.getTypewriter().stop()),
        s.on("move", () => this.getTypewriter().deleteAll(5).start()),
        s.on("inactive", e => e.slide.classList.remove("is-shown")),
        s.on("active", e => {
            clearTimeout(this.tweenWrite),
            this.tweenWrite = setTimeout( () => {
                var o;
                e.slide.classList.add("is-shown");
                const y = (o = e.slide.querySelector("[data-slideshow-title]")) == null ? void 0 : o.innerHTML;
                this.getTypewriter().stop().deleteAll(5).typeString(y).start()
            }
            , 500)
        }
        ),
        s.mount();
        const {Autoplay: p} = s.Components;
        document.addEventListener("visibilitychange", () => document.hidden ? p.pause() : p.play())
    }
    getWriter() {
        return this.writer === null && (this.writer = document.querySelector("[data-slideshow-writer]")),
        this.writer
    }
    getTypewriter() {
        return this.typewriter || (this.typewriter = new Et(this.getWriter(),{
            autoStart: !1,
            loop: !1,
            delay: 20,
            skipAddStyles: !0
        }),
        this.getTitles().forEach(n => n.classList.add("invisible")),
        this.getWriter().removeAttribute("hidden")),
        this.typewriter
    }
    repositionWriter() {
        this.slideshow && (clearTimeout(this.tweenReposition),
        this.tweenReposition = setTimeout( () => {
            let n = 0;
            const s = this.getTitles();
            s.forEach(e => {
                e.style.height = "auto",
                e.clientHeight > n && (n = e.clientHeight)
            }
            ),
            s.forEach(e => e.style.height = `${n}px`);
            const p = s[0].getBoundingClientRect();
            this.getWriter().style.top = `${Math.round(p.y + window.scrollY)}px`,
            this.getWriter().style.left = `${Math.round(p.x)}px`,
            this.getWriter().style.width = `${Math.round(p.width)}px`,
            this.getWriter().style.height = `${Math.round(p.height)}px`
        }
        , 150))
    }
    getTitles() {
        return this.titles === null && (this.titles = this.slideshow.querySelectorAll("[data-slideshow-title]")),
        this.titles
    }
}
var Y = function() {
    return Y = Object.assign || function(g) {
        for (var n, s = 1, p = arguments.length; s < p; s++)
            for (var e in n = arguments[s])
                Object.prototype.hasOwnProperty.call(n, e) && (g[e] = n[e]);
        return g
    }
    ,
    Y.apply(this, arguments)
}
  , St = function() {
    function g(n, s, p) {
        var e = this;
        this.endVal = s,
        this.options = p,
        this.version = "2.8.0",
        this.defaults = {
            startVal: 0,
            decimalPlaces: 0,
            duration: 2,
            useEasing: !0,
            useGrouping: !0,
            useIndianSeparators: !1,
            smartEasingThreshold: 999,
            smartEasingAmount: 333,
            separator: ",",
            decimal: ".",
            prefix: "",
            suffix: "",
            enableScrollSpy: !1,
            scrollSpyDelay: 200,
            scrollSpyOnce: !1
        },
        this.finalEndVal = null,
        this.useEasing = !0,
        this.countDown = !1,
        this.error = "",
        this.startVal = 0,
        this.paused = !0,
        this.once = !1,
        this.count = function(y) {
            e.startTime || (e.startTime = y);
            var o = y - e.startTime;
            e.remaining = e.duration - o,
            e.useEasing ? e.countDown ? e.frameVal = e.startVal - e.easingFn(o, 0, e.startVal - e.endVal, e.duration) : e.frameVal = e.easingFn(o, e.startVal, e.endVal - e.startVal, e.duration) : e.frameVal = e.startVal + (e.endVal - e.startVal) * (o / e.duration);
            var c = e.countDown ? e.frameVal < e.endVal : e.frameVal > e.endVal;
            e.frameVal = c ? e.endVal : e.frameVal,
            e.frameVal = Number(e.frameVal.toFixed(e.options.decimalPlaces)),
            e.printValue(e.frameVal),
            o < e.duration ? e.rAF = requestAnimationFrame(e.count) : e.finalEndVal !== null ? e.update(e.finalEndVal) : e.options.onCompleteCallback && e.options.onCompleteCallback()
        }
        ,
        this.formatNumber = function(y) {
            var o, c, h, E, w = y < 0 ? "-" : "";
            o = Math.abs(y).toFixed(e.options.decimalPlaces);
            var b = (o += "").split(".");
            if (c = b[0],
            h = b.length > 1 ? e.options.decimal + b[1] : "",
            e.options.useGrouping) {
                E = "";
                for (var S = 3, v = 0, V = 0, x = c.length; V < x; ++V)
                    e.options.useIndianSeparators && V === 4 && (S = 2,
                    v = 1),
                    V !== 0 && v % S == 0 && (E = e.options.separator + E),
                    v++,
                    E = c[x - V - 1] + E;
                c = E
            }
            return e.options.numerals && e.options.numerals.length && (c = c.replace(/[0-9]/g, function(O) {
                return e.options.numerals[+O]
            }),
            h = h.replace(/[0-9]/g, function(O) {
                return e.options.numerals[+O]
            })),
            w + e.options.prefix + c + h + e.options.suffix
        }
        ,
        this.easeOutExpo = function(y, o, c, h) {
            return c * (1 - Math.pow(2, -10 * y / h)) * 1024 / 1023 + o
        }
        ,
        this.options = Y(Y({}, this.defaults), p),
        this.formattingFn = this.options.formattingFn ? this.options.formattingFn : this.formatNumber,
        this.easingFn = this.options.easingFn ? this.options.easingFn : this.easeOutExpo,
        this.startVal = this.validateValue(this.options.startVal),
        this.frameVal = this.startVal,
        this.endVal = this.validateValue(s),
        this.options.decimalPlaces = Math.max(this.options.decimalPlaces),
        this.resetDuration(),
        this.options.separator = String(this.options.separator),
        this.useEasing = this.options.useEasing,
        this.options.separator === "" && (this.options.useGrouping = !1),
        this.el = typeof n == "string" ? document.getElementById(n) : n,
        this.el ? this.printValue(this.startVal) : this.error = "[CountUp] target is null or undefined",
        typeof window < "u" && this.options.enableScrollSpy && (this.error ? console.error(this.error, n) : (window.onScrollFns = window.onScrollFns || [],
        window.onScrollFns.push(function() {
            return e.handleScroll(e)
        }),
        window.onscroll = function() {
            window.onScrollFns.forEach(function(y) {
                return y()
            })
        }
        ,
        this.handleScroll(this)))
    }
    return g.prototype.handleScroll = function(n) {
        if (n && window && !n.once) {
            var s = window.innerHeight + window.scrollY
              , p = n.el.getBoundingClientRect()
              , e = p.top + window.pageYOffset
              , y = p.top + p.height + window.pageYOffset;
            y < s && y > window.scrollY && n.paused ? (n.paused = !1,
            setTimeout(function() {
                return n.start()
            }, n.options.scrollSpyDelay),
            n.options.scrollSpyOnce && (n.once = !0)) : (window.scrollY > y || e > s) && !n.paused && n.reset()
        }
    }
    ,
    g.prototype.determineDirectionAndSmartEasing = function() {
        var n = this.finalEndVal ? this.finalEndVal : this.endVal;
        this.countDown = this.startVal > n;
        var s = n - this.startVal;
        if (Math.abs(s) > this.options.smartEasingThreshold && this.options.useEasing) {
            this.finalEndVal = n;
            var p = this.countDown ? 1 : -1;
            this.endVal = n + p * this.options.smartEasingAmount,
            this.duration = this.duration / 2
        } else
            this.endVal = n,
            this.finalEndVal = null;
        this.finalEndVal !== null ? this.useEasing = !1 : this.useEasing = this.options.useEasing
    }
    ,
    g.prototype.start = function(n) {
        this.error || (this.options.onStartCallback && this.options.onStartCallback(),
        n && (this.options.onCompleteCallback = n),
        this.duration > 0 ? (this.determineDirectionAndSmartEasing(),
        this.paused = !1,
        this.rAF = requestAnimationFrame(this.count)) : this.printValue(this.endVal))
    }
    ,
    g.prototype.pauseResume = function() {
        this.paused ? (this.startTime = null,
        this.duration = this.remaining,
        this.startVal = this.frameVal,
        this.determineDirectionAndSmartEasing(),
        this.rAF = requestAnimationFrame(this.count)) : cancelAnimationFrame(this.rAF),
        this.paused = !this.paused
    }
    ,
    g.prototype.reset = function() {
        cancelAnimationFrame(this.rAF),
        this.paused = !0,
        this.resetDuration(),
        this.startVal = this.validateValue(this.options.startVal),
        this.frameVal = this.startVal,
        this.printValue(this.startVal)
    }
    ,
    g.prototype.update = function(n) {
        cancelAnimationFrame(this.rAF),
        this.startTime = null,
        this.endVal = this.validateValue(n),
        this.endVal !== this.frameVal && (this.startVal = this.frameVal,
        this.finalEndVal == null && this.resetDuration(),
        this.finalEndVal = null,
        this.determineDirectionAndSmartEasing(),
        this.rAF = requestAnimationFrame(this.count))
    }
    ,
    g.prototype.printValue = function(n) {
        var s;
        if (this.el) {
            var p = this.formattingFn(n);
            !((s = this.options.plugin) === null || s === void 0) && s.render ? this.options.plugin.render(this.el, p) : this.el.tagName === "INPUT" ? this.el.value = p : this.el.tagName === "text" || this.el.tagName === "tspan" ? this.el.textContent = p : this.el.innerHTML = p
        }
    }
    ,
    g.prototype.ensureNumber = function(n) {
        return typeof n == "number" && !isNaN(n)
    }
    ,
    g.prototype.validateValue = function(n) {
        var s = Number(n);
        return this.ensureNumber(s) ? s : (this.error = "[CountUp] invalid start or end value: ".concat(n),
        null)
    }
    ,
    g.prototype.resetDuration = function() {
        this.startTime = null,
        this.duration = 1e3 * Number(this.options.duration),
        this.remaining = this.duration
    }
    ,
    g
}();
class Tt {
    initialize(n) {
        X( () => this.initCounter(document)),
        n.snippetHandler.addEventListener("afterUpdate", s => this.initCounter(s.detail.snippet))
    }
    initCounter(n) {
        n.querySelectorAll("[data-counter]").forEach(p => {
            const e = parseInt(p.dataset.counter + "");
            new St(p,e,{
                enableScrollSpy: !0
            }).start()
        }
        )
    }
}
class At {
    constructor() {
        this.showcase = null
    }
    initialize(n) {
        X( () => this.initTemplateShowcase(document)),
        n.snippetHandler.addEventListener("afterUpdate", s => this.initTemplateShowcase(s.detail.snippet))
    }
    initTemplateShowcase(n) {
        if (this.showcase = n.querySelector("#templateShowcase"),
        !this.showcase)
            return;
        new st(this.showcase,{
            type: "slide",
            speed: 500,
            rewind: !0,
            pagination: !1,
            fixedWidth: "var(--splide-width)"
        }).mount()
    }
}
K.registerExtension(new bt);
K.registerExtension(new Tt);
K.registerExtension(new At);
