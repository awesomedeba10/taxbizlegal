import {o as _, c as Re, g as De, n as f} from "./onDomReady-CSuAWNBp.js";
import {C as re, T as oe, M as V, O as ae, a as Ve, P as Ge, n as me} from "./bootstrap.esm-BuZXH-rc.js";
const S = typeof window < "u"
  , he = S && !("onscroll"in window) || typeof navigator < "u" && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent)
  , ge = S && window.devicePixelRatio > 1
  , je = {
    elements_selector: ".lazy",
    container: he || S ? document : null,
    threshold: 300,
    thresholds: null,
    data_src: "src",
    data_srcset: "srcset",
    data_sizes: "sizes",
    data_bg: "bg",
    data_bg_hidpi: "bg-hidpi",
    data_bg_multi: "bg-multi",
    data_bg_multi_hidpi: "bg-multi-hidpi",
    data_bg_set: "bg-set",
    data_poster: "poster",
    class_applied: "applied",
    class_loading: "loading",
    class_loaded: "loaded",
    class_error: "error",
    class_entered: "entered",
    class_exited: "exited",
    unobserve_completed: !0,
    unobserve_entered: !1,
    cancel_on_exit: !0,
    callback_enter: null,
    callback_exit: null,
    callback_applied: null,
    callback_loading: null,
    callback_loaded: null,
    callback_error: null,
    callback_finish: null,
    callback_cancel: null,
    use_native: !1,
    restore_on_error: !1
}
  , ve = e => Object.assign({}, je, e)
  , le = function(e, s) {
    let t;
    const n = "LazyLoad::Initialized"
      , r = new e(s);
    try {
        t = new CustomEvent(n,{
            detail: {
                instance: r
            }
        })
    } catch {
        t = document.createEvent("CustomEvent"),
        t.initCustomEvent(n, !1, !1, {
            instance: r
        })
    }
    window.dispatchEvent(t)
}
  , We = (e, s) => {
    if (s)
        if (s.length)
            for (let t, n = 0; t = s[n]; n += 1)
                le(e, t);
        else
            le(e, s)
}
  , b = "src"
  , J = "srcset"
  , K = "sizes"
  , _e = "poster"
  , P = "llOriginalAttrs"
  , be = "data"
  , Q = "loading"
  , Ee = "loaded"
  , ye = "applied"
  , Je = "entered"
  , X = "error"
  , Le = "native"
  , Se = "data-"
  , $e = "ll-status"
  , p = (e, s) => e.getAttribute(Se + s)
  , Ke = (e, s, t) => {
    const n = Se + s;
    t !== null ? e.setAttribute(n, t) : e.removeAttribute(n)
}
  , z = e => p(e, $e)
  , C = (e, s) => Ke(e, $e, s)
  , H = e => C(e, null)
  , Y = e => z(e) === null
  , Qe = e => z(e) === Q
  , Xe = e => z(e) === X
  , Z = e => z(e) === Le
  , Ye = [Q, Ee, ye, X]
  , Ze = e => Ye.indexOf(z(e)) >= 0
  , $ = (e, s, t, n) => {
    e && typeof e == "function" && (n === void 0 ? t === void 0 ? e(s) : e(s, t) : e(s, t, n))
}
  , x = (e, s) => {
    S && s !== "" && e.classList.add(s)
}
  , v = (e, s) => {
    S && s !== "" && e.classList.remove(s)
}
  , et = e => {
    e.llTempImage = document.createElement("IMG")
}
  , tt = e => {
    delete e.llTempImage
}
  , we = e => e.llTempImage
  , U = (e, s) => {
    if (!s)
        return;
    const t = s._observer;
    t && t.unobserve(e)
}
  , st = e => {
    e.disconnect()
}
  , nt = (e, s, t) => {
    s.unobserve_entered && U(e, t)
}
  , ee = (e, s) => {
    e && (e.loadingCount += s)
}
  , it = e => {
    e && (e.toLoadCount -= 1)
}
  , Ie = (e, s) => {
    e && (e.toLoadCount = s)
}
  , rt = e => e.loadingCount > 0
  , ot = e => e.toLoadCount > 0
  , Ce = e => {
    let s = [];
    for (let t, n = 0; t = e.children[n]; n += 1)
        t.tagName === "SOURCE" && s.push(t);
    return s
}
  , te = (e, s) => {
    const t = e.parentNode;
    t && t.tagName === "PICTURE" && Ce(t).forEach(s)
}
  , ke = (e, s) => {
    Ce(e).forEach(s)
}
  , B = [b]
  , Ae = [b, _e]
  , T = [b, J, K]
  , xe = [be]
  , F = e => !!e[P]
  , Oe = e => e[P]
  , Me = e => delete e[P]
  , A = (e, s) => {
    if (F(e))
        return;
    const t = {};
    s.forEach(n => {
        t[n] = e.getAttribute(n)
    }
    ),
    e[P] = t
}
  , at = e => {
    F(e) || (e[P] = {
        backgroundImage: e.style.backgroundImage
    })
}
  , I = (e, s) => {
    if (!F(e))
        return;
    const t = Oe(e);
    s.forEach(n => {
        ( (r, a, c) => {
            c ? r.setAttribute(a, c) : r.removeAttribute(a)
        }
        )(e, n, t[n])
    }
    )
}
  , lt = e => {
    if (!F(e))
        return;
    const s = Oe(e);
    e.style.backgroundImage = s.backgroundImage
}
  , qe = (e, s, t) => {
    x(e, s.class_applied),
    C(e, ye),
    t && (s.unobserve_completed && U(e, s),
    $(s.callback_applied, e, t))
}
  , Te = (e, s, t) => {
    x(e, s.class_loading),
    C(e, Q),
    t && (ee(t, 1),
    $(s.callback_loading, e, t))
}
  , L = (e, s, t) => {
    t && e.setAttribute(s, t)
}
  , ce = (e, s) => {
    L(e, K, p(e, s.data_sizes)),
    L(e, J, p(e, s.data_srcset)),
    L(e, b, p(e, s.data_src))
}
  , ct = (e, s) => {
    te(e, t => {
        A(t, T),
        ce(t, s)
    }
    ),
    A(e, T),
    ce(e, s)
}
  , dt = (e, s) => {
    A(e, B),
    L(e, b, p(e, s.data_src))
}
  , ut = (e, s) => {
    ke(e, t => {
        A(t, B),
        L(t, b, p(t, s.data_src))
    }
    ),
    A(e, Ae),
    L(e, _e, p(e, s.data_poster)),
    L(e, b, p(e, s.data_src)),
    e.load()
}
  , pt = (e, s) => {
    A(e, xe),
    L(e, be, p(e, s.data_src))
}
  , ft = (e, s, t) => {
    const n = p(e, s.data_bg)
      , r = p(e, s.data_bg_hidpi)
      , a = ge && r ? r : n;
    a && (e.style.backgroundImage = `url("%24%7ba%7d.html")`,
    we(e).setAttribute(b, a),
    Te(e, s, t))
}
  , mt = (e, s, t) => {
    const n = p(e, s.data_bg_multi)
      , r = p(e, s.data_bg_multi_hidpi)
      , a = ge && r ? r : n;
    a && (e.style.backgroundImage = a,
    qe(e, s, t))
}
  , ht = (e, s, t) => {
    const n = p(e, s.data_bg_set);
    if (!n)
        return;
    let r = n.split("|").map(a => `image-set(${a})`);
    e.style.backgroundImage = r.join(),
    qe(e, s, t)
}
  , Pe = {
    IMG: ct,
    IFRAME: dt,
    VIDEO: ut,
    OBJECT: pt
}
  , gt = (e, s) => {
    const t = Pe[e.tagName];
    t && t(e, s)
}
  , vt = (e, s, t) => {
    const n = Pe[e.tagName];
    n && (n(e, s),
    Te(e, s, t))
}
  , _t = ["IMG", "IFRAME", "VIDEO", "OBJECT"]
  , bt = e => _t.indexOf(e.tagName) > -1
  , ze = (e, s) => {
    !s || rt(s) || ot(s) || $(e.callback_finish, s)
}
  , de = (e, s, t) => {
    e.addEventListener(s, t),
    e.llEvLisnrs[s] = t
}
  , Et = (e, s, t) => {
    e.removeEventListener(s, t)
}
  , se = e => !!e.llEvLisnrs
  , yt = (e, s, t) => {
    se(e) || (e.llEvLisnrs = {});
    const n = e.tagName === "VIDEO" ? "loadeddata" : "load";
    de(e, n, s),
    de(e, "error", t)
}
  , G = e => {
    if (!se(e))
        return;
    const s = e.llEvLisnrs;
    for (let t in s) {
        const n = s[t];
        Et(e, t, n)
    }
    delete e.llEvLisnrs
}
  , Ne = (e, s, t) => {
    tt(e),
    ee(t, -1),
    it(t),
    v(e, s.class_loading),
    s.unobserve_completed && U(e, t)
}
  , Lt = (e, s, t, n) => {
    const r = Z(s);
    Ne(s, t, n),
    x(s, t.class_loaded),
    C(s, Ee),
    $(t.callback_loaded, s, n),
    r || ze(t, n)
}
  , St = (e, s, t, n) => {
    const r = Z(s);
    Ne(s, t, n),
    x(s, t.class_error),
    C(s, X),
    $(t.callback_error, s, n),
    t.restore_on_error && I(s, T),
    r || ze(t, n)
}
  , j = (e, s, t) => {
    const n = we(e) || e;
    se(n) || yt(n, r => {
        Lt(0, e, s, t),
        G(n)
    }
    , r => {
        St(0, e, s, t),
        G(n)
    }
    )
}
  , W = (e, s, t) => {
    bt(e) ? ( (n, r, a) => {
        j(n, r, a),
        vt(n, r, a)
    }
    )(e, s, t) : ( (n, r, a) => {
        et(n),
        j(n, r, a),
        at(n),
        ft(n, r, a),
        mt(n, r, a),
        ht(n, r, a)
    }
    )(e, s, t)
}
  , $t = (e, s, t) => {
    e.setAttribute("loading", "lazy"),
    j(e, s, t),
    gt(e, s),
    C(e, Le)
}
  , ue = e => {
    e.removeAttribute(b),
    e.removeAttribute(J),
    e.removeAttribute(K)
}
  , wt = e => {
    te(e, s => {
        ue(s)
    }
    ),
    ue(e)
}
  , He = e => {
    te(e, s => {
        I(s, T)
    }
    ),
    I(e, T)
}
  , It = e => {
    ke(e, s => {
        I(s, B)
    }
    ),
    I(e, Ae),
    e.load()
}
  , Ct = e => {
    I(e, B)
}
  , kt = e => {
    I(e, xe)
}
  , At = {
    IMG: He,
    IFRAME: Ct,
    VIDEO: It,
    OBJECT: kt
}
  , xt = (e, s) => {
    (t => {
        const n = At[t.tagName];
        n ? n(t) : lt(t)
    }
    )(e),
    ( (t, n) => {
        Y(t) || Z(t) || (v(t, n.class_entered),
        v(t, n.class_exited),
        v(t, n.class_applied),
        v(t, n.class_loading),
        v(t, n.class_loaded),
        v(t, n.class_error))
    }
    )(e, s),
    H(e),
    Me(e)
}
  , Ot = (e, s, t, n) => {
    t.cancel_on_exit && Qe(e) && e.tagName === "IMG" && (G(e),
    wt(e),
    He(e),
    v(e, t.class_loading),
    ee(n, -1),
    H(e),
    $(t.callback_cancel, e, s, n))
}
  , Mt = (e, s, t, n) => {
    const r = Ze(e);
    C(e, Je),
    x(e, t.class_entered),
    v(e, t.class_exited),
    nt(e, t, n),
    $(t.callback_enter, e, s, n),
    r || W(e, t, n)
}
  , qt = (e, s, t, n) => {
    Y(e) || (x(e, t.class_exited),
    Ot(e, s, t, n),
    $(t.callback_exit, e, s, n))
}
  , Tt = ["IMG", "IFRAME", "VIDEO"]
  , Ue = e => e.use_native && "loading"in HTMLImageElement.prototype
  , Pt = (e, s, t) => {
    e.forEach(n => {
        Tt.indexOf(n.tagName) !== -1 && $t(n, s, t)
    }
    ),
    Ie(t, 0)
}
  , zt = e => e.isIntersecting || e.intersectionRatio > 0
  , Nt = (e, s) => {
    s.forEach(t => {
        e.observe(t)
    }
    )
}
  , Ht = (e, s) => {
    st(e),
    Nt(e, s)
}
  , Ut = (e, s) => {
    Ue(e) || (s._observer = new IntersectionObserver(t => {
        ( (n, r, a) => {
            n.forEach(c => zt(c) ? Mt(c.target, c, r, a) : qt(c.target, c, r, a))
        }
        )(t, e, s)
    }
    ,(t => ({
        root: t.container === document ? null : t.container,
        rootMargin: t.thresholds || t.threshold + "px"
    }))(e)))
}
  , Be = e => Array.prototype.slice.call(e)
  , N = e => e.container.querySelectorAll(e.elements_selector)
  , Bt = e => Be(e).filter(Y)
  , Ft = e => Xe(e)
  , Rt = e => Be(e).filter(Ft)
  , pe = (e, s) => Bt(e || N(s))
  , Dt = (e, s) => {
    Rt(N(e)).forEach(t => {
        v(t, e.class_error),
        H(t)
    }
    ),
    s.update()
}
  , Vt = (e, s) => {
    S && (s._onlineHandler = () => {
        Dt(e, s)
    }
    ,
    window.addEventListener("online", s._onlineHandler))
}
  , Gt = e => {
    S && window.removeEventListener("online", e._onlineHandler)
}
  , q = function(e, s) {
    const t = ve(e);
    this._settings = t,
    this.loadingCount = 0,
    Ut(t, this),
    Vt(t, this),
    this.update(s)
};
q.prototype = {
    update: function(e) {
        const s = this._settings
          , t = pe(e, s);
        Ie(this, t.length),
        he ? this.loadAll(t) : Ue(s) ? Pt(t, s, this) : Ht(this._observer, t)
    },
    destroy: function() {
        this._observer && this._observer.disconnect(),
        Gt(this),
        N(this._settings).forEach(e => {
            Me(e)
        }
        ),
        delete this._observer,
        delete this._settings,
        delete this._onlineHandler,
        delete this.loadingCount,
        delete this.toLoadCount
    },
    loadAll: function(e) {
        const s = this._settings;
        pe(e, s).forEach(t => {
            U(t, this),
            W(t, s, this)
        }
        )
    },
    restoreAll: function() {
        const e = this._settings;
        N(e).forEach(s => {
            xt(s, e)
        }
        )
    }
},
q.load = (e, s) => {
    const t = ve(s);
    W(e, t)
}
,
q.resetStatus = e => {
    H(e)
}
,
S && We(q, window.lazyLoadOptions);
class jt {
    constructor(s=".lazyloaded") {
        this._selector = s
    }
    initialize(s) {
        _( () => {
            this._lazyload = new q({
                elements_selector: this._selector,
                threshold: 300
            }),
            s.snippetHandler.addEventListener("afterUpdate", t => this.update())
        }
        )
    }
    update() {
        this._lazyload.update()
    }
}
var Fe = {
    exports: {}
};
/* NProgress, (c) 2013, 2014 Rico Sta. Cruz - http://ricostacruz.com/nprogress
 * @license MIT */
(function(e, s) {
    (function(t, n) {
        e.exports = n()
    }
    )(Re, function() {
        var t = {};
        t.version = "0.2.0";
        var n = t.settings = {
            minimum: .08,
            easing: "ease",
            positionUsing: "",
            speed: 200,
            trickle: !0,
            trickleRate: .02,
            trickleSpeed: 800,
            showSpinner: !0,
            barSelector: '[role="bar"]',
            spinnerSelector: '[role="spinner"]',
            parent: "body",
            template: '<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div>'
        };
        t.configure = function(i) {
            var o, l;
            for (o in i)
                l = i[o],
                l !== void 0 && i.hasOwnProperty(o) && (n[o] = l);
            return this
        }
        ,
        t.status = null,
        t.set = function(i) {
            var o = t.isStarted();
            i = r(i, n.minimum, 1),
            t.status = i === 1 ? null : i;
            var l = t.render(!o)
              , u = l.querySelector(n.barSelector)
              , m = n.speed
              , y = n.easing;
            return l.offsetWidth,
            O(function(d) {
                n.positionUsing === "" && (n.positionUsing = t.getPositioningCSS()),
                E(u, c(i, m, y)),
                i === 1 ? (E(l, {
                    transition: "none",
                    opacity: 1
                }),
                l.offsetWidth,
                setTimeout(function() {
                    E(l, {
                        transition: "all " + m + "ms linear",
                        opacity: 0
                    }),
                    setTimeout(function() {
                        t.remove(),
                        d()
                    }, m)
                }, m)) : setTimeout(d, m)
            }),
            this
        }
        ,
        t.isStarted = function() {
            return typeof t.status == "number"
        }
        ,
        t.start = function() {
            t.status || t.set(0);
            var i = function() {
                setTimeout(function() {
                    t.status && (t.trickle(),
                    i())
                }, n.trickleSpeed)
            };
            return n.trickle && i(),
            this
        }
        ,
        t.done = function(i) {
            return !i && !t.status ? this : t.inc(.3 + .5 * Math.random()).set(1)
        }
        ,
        t.inc = function(i) {
            var o = t.status;
            return o ? (typeof i != "number" && (i = (1 - o) * r(Math.random() * o, .1, .95)),
            o = r(o + i, 0, .994),
            t.set(o)) : t.start()
        }
        ,
        t.trickle = function() {
            return t.inc(Math.random() * n.trickleRate)
        }
        ,
        function() {
            var i = 0
              , o = 0;
            t.promise = function(l) {
                return !l || l.state() === "resolved" ? this : (o === 0 && t.start(),
                i++,
                o++,
                l.always(function() {
                    o--,
                    o === 0 ? (i = 0,
                    t.done()) : t.set((i - o) / i)
                }),
                this)
            }
        }(),
        t.render = function(i) {
            if (t.isRendered())
                return document.getElementById("nprogress");
            M(document.documentElement, "nprogress-busy");
            var o = document.createElement("div");
            o.id = "nprogress",
            o.innerHTML = n.template;
            var l = o.querySelector(n.barSelector), u = i ? "-100" : a(t.status || 0), m = document.querySelector(n.parent), y;
            return E(l, {
                transition: "all 0 linear",
                transform: "translate3d(" + u + "%,0,0)"
            }),
            n.showSpinner || (y = o.querySelector(n.spinnerSelector),
            y && ie(y)),
            m != document.body && M(m, "nprogress-custom-parent"),
            m.appendChild(o),
            o
        }
        ,
        t.remove = function() {
            ne(document.documentElement, "nprogress-busy"),
            ne(document.querySelector(n.parent), "nprogress-custom-parent");
            var i = document.getElementById("nprogress");
            i && ie(i)
        }
        ,
        t.isRendered = function() {
            return !!document.getElementById("nprogress")
        }
        ,
        t.getPositioningCSS = function() {
            var i = document.body.style
              , o = "WebkitTransform"in i ? "Webkit" : "MozTransform"in i ? "Moz" : "msTransform"in i ? "ms" : "OTransform"in i ? "O" : "";
            return o + "Perspective"in i ? "translate3d" : o + "Transform"in i ? "translate" : "margin"
        }
        ;
        function r(i, o, l) {
            return i < o ? o : i > l ? l : i
        }
        function a(i) {
            return (-1 + i) * 100
        }
        function c(i, o, l) {
            var u;
            return n.positionUsing === "translate3d" ? u = {
                transform: "translate3d(" + a(i) + "%,0,0)"
            } : n.positionUsing === "translate" ? u = {
                transform: "translate(" + a(i) + "%,0)"
            } : u = {
                "margin-left": a(i) + "%"
            },
            u.transition = "all " + o + "ms " + l,
            u
        }
        var O = function() {
            var i = [];
            function o() {
                var l = i.shift();
                l && l(o)
            }
            return function(l) {
                i.push(l),
                i.length == 1 && o()
            }
        }()
          , E = function() {
            var i = ["Webkit", "O", "Moz", "ms"]
              , o = {};
            function l(d) {
                return d.replace(/^-ms-/, "ms-").replace(/-([\da-z])/gi, function(h, g) {
                    return g.toUpperCase()
                })
            }
            function u(d) {
                var h = document.body.style;
                if (d in h)
                    return d;
                for (var g = i.length, k = d.charAt(0).toUpperCase() + d.slice(1), w; g--; )
                    if (w = i[g] + k,
                    w in h)
                        return w;
                return d
            }
            function m(d) {
                return d = l(d),
                o[d] || (o[d] = u(d))
            }
            function y(d, h, g) {
                h = m(h),
                d.style[h] = g
            }
            return function(d, h) {
                var g = arguments, k, w;
                if (g.length == 2)
                    for (k in h)
                        w = h[k],
                        w !== void 0 && h.hasOwnProperty(k) && y(d, k, w);
                else
                    y(d, g[1], g[2])
            }
        }();
        function R(i, o) {
            var l = typeof i == "string" ? i : D(i);
            return l.indexOf(" " + o + " ") >= 0
        }
        function M(i, o) {
            var l = D(i)
              , u = l + o;
            R(l, o) || (i.className = u.substring(1))
        }
        function ne(i, o) {
            var l = D(i), u;
            R(i, o) && (u = l.replace(" " + o + " ", " "),
            i.className = u.substring(1, u.length - 1))
        }
        function D(i) {
            return (" " + (i.className || "") + " ").replace(/\s+/gi, " ")
        }
        function ie(i) {
            i && i.parentNode && i.parentNode.removeChild(i)
        }
        return t
    })
}
)(Fe);
var Wt = Fe.exports;
const fe = De(Wt);
class Jt {
    constructor() {
        this._selector = ".loadable",
        this._disabledSelector = ".loadable-disabled",
        this._overlayedSelector = ".loadable-overlayed",
        this._loadingClass = "loading",
        this._staticSubmitSelector = ".loadable-submit",
        this._counter = 0,
        this._counterEl = new Map
    }
    initialize(s) {
        _( () => {
            s.uiHandler.addEventListener("interaction", t => t.detail.options.loadable = t.detail.element.closest(this._selector)),
            s.addEventListener("start", t => this.start(t.detail.options.loadable || null)),
            s.addEventListener("complete", t => this.end(t.detail.options.loadable || null)),
            this.initStaticSubmits()
        }
        )
    }
    initStaticSubmits() {
        document.querySelectorAll(this._staticSubmitSelector).forEach(t => {
            const n = t.form;
            n == null || n.addEventListener("submit", () => {
                if (n.checkValidity()) {
                    const r = t.closest(this._selector);
                    this.start(r)
                }
            }
            )
        }
        )
    }
    start(s=null) {
        if (s) {
            let t = this._counterEl.get(s) || 0;
            t <= 0 && (s.classList.add(this._loadingClass),
            s.querySelectorAll(this._disabledSelector).forEach(n => n.disabled = !0),
            s.querySelectorAll(this._overlayedSelector).forEach(n => n.classList.add("overlayed"))),
            this._counterEl.set(s, ++t)
        } else
            this._counter <= 0 && fe.start(),
            this._counter++
    }
    end(s=null) {
        if (s) {
            let t = this._counterEl.get(s) || 0;
            t--,
            t <= 0 && (s.classList.remove(this._loadingClass),
            s.querySelectorAll(this._disabledSelector).forEach(n => n.disabled = !1),
            s.querySelectorAll(this._overlayedSelector).forEach(n => n.classList.remove("overlayed"))),
            this._counterEl.set(s, t)
        } else
            this._counter--,
            this._counter <= 0 && fe.done()
    }
}
class Kt {
    constructor() {
        this.lastScroll = 0,
        this.scrollLimit = 400
    }
    initialize(s) {
        _( () => this.initNavbar())
    }
    initNavbar(s=document) {
        this.navbar = s.querySelector("[data-navbar]"),
        this.navbar && !this.navbar.classList.contains("fixed") && (this._checkNavbar(),
        window.addEventListener("scroll", () => requestAnimationFrame( () => this._checkNavbar())));
        const t = s.querySelector("#topMenu")
          , n = s.querySelector('[data-bs-toggle="offcanvas"][data-bs-target="#topMenu"]');
        t == null || t.addEventListener("show.bs.offcanvas", () => (n == null ? void 0 : n.classList.add("active")) || document.body.classList.add("topMenu-opened")),
        t == null || t.addEventListener("hide.bs.offcanvas", () => (n == null ? void 0 : n.classList.remove("active")) || document.body.classList.remove("topMenu-opened"))
    }
    _checkNavbar() {
        // const s = document.documentElement.scrollTop
        //   , t = s > this.lastScroll
        //   , n = document.body.classList.contains("topMenu-hidden");
        // s >= this.scrollLimit && t && !n ? document.body.classList.add("topMenu-hidden") : (s < this.scrollLimit || !t) && n && document.body.classList.remove("topMenu-hidden"),
        // this.lastScroll = s <= 0 ? 0 : s
    }
}
class Qt {
    initialize(s) {
        _( () => this.initCollapse(document)),
        s.snippetHandler.addEventListener("afterUpdate", t => this.initCollapse(t.detail.snippet))
    }
    initCollapse(s) {
        s.querySelectorAll(".collapse").forEach(n => {
            const r = new re(n,{
                toggle: !1
            })
              , a = n.dataset.collapseUnique;
            if (a && n.addEventListener("show.bs.collapse", () => {
                document.querySelectorAll(`.collapse[data-collapse-unique="${a}"]`).forEach(c => {
                    c !== n && re.getOrCreateInstance(c, {
                        toggle: !1
                    }).hide()
                }
                )
            }
            ),
            n.dataset.collapseCloseOutside !== void 0) {
                const c = O => {
                    var M;
                    const E = O == null ? void 0 : O.target;
                    E.classList.contains("collapse") && E.id === n.id || ((M = E.closest(".collapse")) == null ? void 0 : M.id) === n.id || (r.hide(),
                    document.removeEventListener("click", c))
                }
                ;
                n.addEventListener("shown.bs.collapse", () => document.addEventListener("click", c))
            }
        }
        )
    }
}
class Xt {
    initialize(s) {
        (window.alert = (t, k) => this.alert(t, k)),
            _(() => this.refresh()),
            s.snippetHandler.addEventListener("afterUpdate", (t) =>
                this.refresh(t.detail.snippet)
            );
    }
    refresh(s = document) {
        s.querySelectorAll(".toast").forEach((r) => {
            const a = oe.getOrCreateInstance(r);
            a.isShown() ||
                (a.show(),
                r.addEventListener("hidden.bs.toast", () => r.remove()));
        }),
        s.querySelectorAll(".form-error").forEach((r) => {
            const a = r.innerHTML;
            r.remove(), this.alert(a);
        });
    }
    alert(s, k) {
        var c;
        const n = document.getElementById("alertTemplate").content.cloneNode(true).children[0];

        if (k === 'success') {
            n.classList.add('toast-success');
        } else if (k === 'error') {
            n.classList.add('toast-error');
        }
        const r = n.querySelector("[data-tpl-alert-content]");
        if (r) {
            r.innerHTML = s.trim().replaceAll(`\n`, "<br>");
        }
        (c = document.getElementById("flashes"))?.append(n);
        oe.getOrCreateInstance(n).show();
        n.addEventListener("hidden.bs.toast", () => n.remove());
    }
}
class Yt {
    initialize(s) {
        _( () => this.initCopy(document)),
        s.snippetHandler.addEventListener("afterUpdate", t => this.initCopy(t.detail.snippet))
    }
    initCopy(s) {
        s.querySelectorAll("[data-copy]").forEach(n => n.addEventListener("click", () => {
            const r = (n.dataset.copy + "").trim();
            if (!r)
                return;
            const a = n.querySelector('[data-copy-icon="success"]')
              , c = n.querySelector('[data-copy-icon="default"]');
            navigator.clipboard ? (navigator.clipboard.writeText(r),
            a && c && (a.classList.remove("d-none"),
            c.classList.add("d-none"),
            setTimeout( () => {
                a.classList.add("d-none"),
                c.classList.remove("d-none")
            }
            , 1500))) : console.error("Navigator doesn't support clipboard.")
        }
        ))
    }
}
class Zt {
    initialize(s) {
        _( () => this.initFromSnippet(document)),
        s.snippetHandler.addEventListener("afterUpdate", t => this.initFromSnippet(t.detail.snippet)),
        s.addEventListener("payload", t => this.initFromPayload(t.detail.payload))
    }
    initFromSnippet(s) {
        const t = s.querySelector("[data-naja-auto-modal]");
        t && new V(t).show()
    }
    initFromPayload(s) {
        if (s.openModal) {
            const t = document.getElementById(s.openModal);
            t && V.getOrCreateInstance(t).show()
        }
        if (s.closeModal) {
            const t = document.getElementById(s.closeModal);
            t && V.getOrCreateInstance(t).hide()
        }
        if (s.openOffcanvas) {
            const t = document.getElementById(s.openOffcanvas);
            t && ae.getOrCreateInstance(t).show()
        }
        if (s.openOffcanvas) {
            const t = document.getElementById(s.openOffcanvas);
            t && ae.getOrCreateInstance(t).show()
        }
    }
}
class es {
    initialize(s) {
        _( () => this.initTooltips(document)),
        s.snippetHandler.addEventListener("afterUpdate", t => this.initTooltips(t.detail.snippet))
    }
    initTooltips(s) {
        s.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(t => new Ve(t))
    }
}
class ts {
    initialize(s) {
        _( () => this.initPopovers(document)),
        s.snippetHandler.addEventListener("afterUpdate", t => this.initPopovers(t.detail.snippet))
    }
    initPopovers(s) {
        s.querySelectorAll('[data-bs-toggle="popover"]').forEach(t => new Ge(t))
    }
}
class ss {
    constructor() {
        this.btnSelector = "[data-password-toggle]"
    }
    initialize(s) {
        _( () => this.initPasswords(document)),
        s.snippetHandler.addEventListener("afterUpdate", t => this.initPasswords(t.detail.snippet)),
        s.addEventListener("success", t => this.clearInput(t.detail.payload))
    }
    initPasswords(s) {
        s.querySelectorAll(this.btnSelector).forEach(n => {
            var a;
            const r = document.querySelector(n.dataset.passwordToggle);
            (a = n.form) == null || a.addEventListener("formdata", () => {
                var c;
                return ((c = n.form) == null ? void 0 : c.checkValidity()) && this.toggle(r, "password")
            }
            ),
            n.addEventListener("click", () => this.toggle(r))
        }
        )
    }
    toggle(s, t=null) {
        s.type = t || (s.type === "password" ? "text" : "password")
    }
    clearInput(s) {
        if (s.clearFormPasswords) {
            const t = document.getElementById(s.clearFormPasswords)
              , n = t && t.querySelectorAll(this.btnSelector);
            n && n.forEach(r => {
                const a = document.querySelector(r.dataset.passwordToggle);
                a.value = ""
            }
            )
        }
    }
}
f.formsHandler.netteForms = me;
f.registerExtension(new jt);
f.registerExtension(new Jt);
f.registerExtension(new Kt);
f.registerExtension(new Qt);
f.registerExtension(new Xt);
f.registerExtension(new Yt);
f.registerExtension(new Zt);
f.registerExtension(new es);
f.registerExtension(new ts);
f.registerExtension(new ss);
document.addEventListener("DOMContentLoaded", f.initialize.bind(f));
me.initOnLoad();
f.redirectHandler.addEventListener("redirect", e => e.detail.setHardRedirect(!0));
