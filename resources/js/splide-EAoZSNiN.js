function zn(e, n) {
    for (var t = 0; t < n.length; t++) {
        var r = n[t];
        r.enumerable = r.enumerable || !1,
        r.configurable = !0,
        "value"in r && (r.writable = !0),
        Object.defineProperty(e, r.key, r)
    }
}
function Un(e, n, t) {
    return n && zn(e.prototype, n),
    Object.defineProperty(e, "prototype", {
        writable: !1
    }),
    e
}
/*!
 * Splide.js
 * Version  : 4.1.4
 * License  : MIT
 * Copyright: 2022 Naotoshi Fujita
 */
var Kt = "(prefers-reduced-motion: reduce)"
  , De = 1
  , Bn = 2
  , we = 3
  , Me = 4
  , $e = 5
  , it = 6
  , st = 7
  , Wn = {
    CREATED: De,
    MOUNTED: Bn,
    IDLE: we,
    MOVING: Me,
    SCROLLING: $e,
    DRAGGING: it,
    DESTROYED: st
};
function de(e) {
    e.length = 0
}
function _e(e, n, t) {
    return Array.prototype.slice.call(e, n, t)
}
function U(e) {
    return e.bind.apply(e, [null].concat(_e(arguments, 1)))
}
var sn = setTimeout
  , Nt = function() {};
function $t(e) {
    return requestAnimationFrame(e)
}
function lt(e, n) {
    return typeof n === e
}
function ze(e) {
    return !wt(e) && lt("object", e)
}
var Pt = Array.isArray
  , cn = U(lt, "function")
  , he = U(lt, "string")
  , qe = U(lt, "undefined");
function wt(e) {
    return e === null
}
function fn(e) {
    try {
        return e instanceof (e.ownerDocument.defaultView || window).HTMLElement
    } catch {
        return !1
    }
}
function je(e) {
    return Pt(e) ? e : [e]
}
function ne(e, n) {
    je(e).forEach(n)
}
function pt(e, n) {
    return e.indexOf(n) > -1
}
function at(e, n) {
    return e.push.apply(e, je(n)),
    e
}
function fe(e, n, t) {
    e && ne(n, function(r) {
        r && e.classList[t ? "add" : "remove"](r)
    })
}
function oe(e, n) {
    fe(e, he(n) ? n.split(" ") : n, !0)
}
function Ze(e, n) {
    ne(n, e.appendChild.bind(e))
}
function Mt(e, n) {
    ne(e, function(t) {
        var r = (n || t).parentNode;
        r && r.insertBefore(t, n)
    })
}
function Ue(e, n) {
    return fn(e) && (e.msMatchesSelector || e.matches).call(e, n)
}
function vn(e, n) {
    var t = e ? _e(e.children) : [];
    return n ? t.filter(function(r) {
        return Ue(r, n)
    }) : t
}
function Je(e, n) {
    return n ? vn(e, n)[0] : e.firstElementChild
}
var Be = Object.keys;
function Le(e, n, t) {
    return e && (t ? Be(e).reverse() : Be(e)).forEach(function(r) {
        r !== "__proto__" && n(e[r], r)
    }),
    e
}
function We(e) {
    return _e(arguments, 1).forEach(function(n) {
        Le(n, function(t, r) {
            e[r] = n[r]
        })
    }),
    e
}
function Ee(e) {
    return _e(arguments, 1).forEach(function(n) {
        Le(n, function(t, r) {
            Pt(t) ? e[r] = t.slice() : ze(t) ? e[r] = Ee({}, ze(e[r]) ? e[r] : {}, t) : e[r] = t
        })
    }),
    e
}
function qt(e, n) {
    ne(n || Be(e), function(t) {
        delete e[t]
    })
}
function ue(e, n) {
    ne(e, function(t) {
        ne(n, function(r) {
            t && t.removeAttribute(r)
        })
    })
}
function x(e, n, t) {
    ze(n) ? Le(n, function(r, o) {
        x(e, o, r)
    }) : ne(e, function(r) {
        wt(t) || t === "" ? ue(r, n) : r.setAttribute(n, String(t))
    })
}
function Ce(e, n, t) {
    var r = document.createElement(e);
    return n && (he(n) ? oe(r, n) : x(r, n)),
    t && Ze(t, r),
    r
}
function re(e, n, t) {
    if (qe(t))
        return getComputedStyle(e)[n];
    wt(t) || (e.style[n] = "" + t)
}
function He(e, n) {
    re(e, "display", n)
}
function ln(e) {
    e.setActive && e.setActive() || e.focus({
        preventScroll: !0
    })
}
function ie(e, n) {
    return e.getAttribute(n)
}
function jt(e, n) {
    return e && e.classList.contains(n)
}
function ee(e) {
    return e.getBoundingClientRect()
}
function Ie(e) {
    ne(e, function(n) {
        n && n.parentNode && n.parentNode.removeChild(n)
    })
}
function dn(e) {
    return Je(new DOMParser().parseFromString(e, "text/html").body)
}
function ce(e, n) {
    e.preventDefault(),
    n && (e.stopPropagation(),
    e.stopImmediatePropagation())
}
function gn(e, n) {
    return e && e.querySelector(n)
}
function Vt(e, n) {
    return n ? _e(e.querySelectorAll(n)) : []
}
function ve(e, n) {
    fe(e, n, !1)
}
function Rt(e) {
    return e.timeStamp
}
function Te(e) {
    return he(e) ? e : e ? e + "px" : ""
}
var Qe = "splide"
  , xt = "data-" + Qe;
function Ge(e, n) {
    if (!e)
        throw new Error("[" + Qe + "] " + (n || ""))
}
var me = Math.min
  , ct = Math.max
  , ft = Math.floor
  , Ye = Math.ceil
  , J = Math.abs;
function En(e, n, t) {
    return J(e - n) < t
}
function ot(e, n, t, r) {
    var o = me(n, t)
      , l = ct(n, t);
    return r ? o < e && e < l : o <= e && e <= l
}
function Oe(e, n, t) {
    var r = me(n, t)
      , o = ct(n, t);
    return me(ct(r, e), o)
}
function Ot(e) {
    return +(e > 0) - +(e < 0)
}
function bt(e, n) {
    return ne(n, function(t) {
        e = e.replace("%s", "" + t)
    }),
    e
}
function Ft(e) {
    return e < 10 ? "0" + e : "" + e
}
var Zt = {};
function Hn(e) {
    return "" + e + Ft(Zt[e] = (Zt[e] || 0) + 1)
}
function hn() {
    var e = [];
    function n(i, s, c, v) {
        o(i, s, function(a, m, d) {
            var g = "addEventListener"in a
              , u = g ? a.removeEventListener.bind(a, m, c, v) : a.removeListener.bind(a, c);
            g ? a.addEventListener(m, c, v) : a.addListener(c),
            e.push([a, m, d, c, u])
        })
    }
    function t(i, s, c) {
        o(i, s, function(v, a, m) {
            e = e.filter(function(d) {
                return d[0] === v && d[1] === a && d[2] === m && (!c || d[3] === c) ? (d[4](),
                !1) : !0
            })
        })
    }
    function r(i, s, c) {
        var v, a = !0;
        return typeof CustomEvent == "function" ? v = new CustomEvent(s,{
            bubbles: a,
            detail: c
        }) : (v = document.createEvent("CustomEvent"),
        v.initCustomEvent(s, a, !1, c)),
        i.dispatchEvent(v),
        v
    }
    function o(i, s, c) {
        ne(i, function(v) {
            v && ne(s, function(a) {
                a.split(" ").forEach(function(m) {
                    var d = m.split(".");
                    c(v, d[0], d[1])
                })
            })
        })
    }
    function l() {
        e.forEach(function(i) {
            i[4]()
        }),
        de(e)
    }
    return {
        bind: n,
        unbind: t,
        dispatch: r,
        destroy: l
    }
}
var Re = "mounted"
  , Jt = "ready"
  , Ae = "move"
  , et = "moved"
  , mn = "click"
  , Yn = "active"
  , Xn = "inactive"
  , Kn = "visible"
  , $n = "hidden"
  , K = "refresh"
  , Q = "updated"
  , Xe = "resize"
  , Gt = "resized"
  , qn = "drag"
  , jn = "dragging"
  , Zn = "dragged"
  , kt = "scroll"
  , Ve = "scrolled"
  , Jn = "overflow"
  , An = "destroy"
  , Qn = "arrows:mounted"
  , er = "arrows:updated"
  , tr = "pagination:mounted"
  , nr = "pagination:updated"
  , _n = "navigation:mounted"
  , yn = "autoplay:play"
  , rr = "autoplay:playing"
  , Sn = "autoplay:pause"
  , Tn = "lazyload:loaded"
  , Ln = "sk"
  , In = "sh"
  , vt = "ei";
function H(e) {
    var n = e ? e.event.bus : document.createDocumentFragment()
      , t = hn();
    function r(l, i) {
        t.bind(n, je(l).join(" "), function(s) {
            i.apply(i, Pt(s.detail) ? s.detail : [])
        })
    }
    function o(l) {
        t.dispatch(n, l, _e(arguments, 1))
    }
    return e && e.event.on(An, t.destroy),
    We(t, {
        bus: n,
        on: r,
        off: U(t.unbind, n),
        emit: o
    })
}
function dt(e, n, t, r) {
    var o = Date.now, l, i = 0, s, c = !0, v = 0;
    function a() {
        if (!c) {
            if (i = e ? me((o() - l) / e, 1) : 1,
            t && t(i),
            i >= 1 && (n(),
            l = o(),
            r && ++v >= r))
                return d();
            s = $t(a)
        }
    }
    function m(A) {
        A || u(),
        l = o() - (A ? i * e : 0),
        c = !1,
        s = $t(a)
    }
    function d() {
        c = !0
    }
    function g() {
        l = o(),
        i = 0,
        t && t(i)
    }
    function u() {
        s && cancelAnimationFrame(s),
        i = 0,
        s = 0,
        c = !0
    }
    function f(A) {
        e = A
    }
    function _() {
        return c
    }
    return {
        start: m,
        rewind: g,
        pause: d,
        cancel: u,
        set: f,
        isPaused: _
    }
}
function ir(e) {
    var n = e;
    function t(o) {
        n = o
    }
    function r(o) {
        return pt(je(o), n)
    }
    return {
        set: t,
        is: r
    }
}
function ar(e, n) {
    var t = dt(0, e, null, 1);
    return function() {
        t.isPaused() && t.start()
    }
}
function or(e, n, t) {
    var r = e.state
      , o = t.breakpoints || {}
      , l = t.reducedMotion || {}
      , i = hn()
      , s = [];
    function c() {
        var u = t.mediaQuery === "min";
        Be(o).sort(function(f, _) {
            return u ? +f - +_ : +_ - +f
        }).forEach(function(f) {
            a(o[f], "(" + (u ? "min" : "max") + "-width:" + f + "px)")
        }),
        a(l, Kt),
        m()
    }
    function v(u) {
        u && i.destroy()
    }
    function a(u, f) {
        var _ = matchMedia(f);
        i.bind(_, "change", m),
        s.push([u, _])
    }
    function m() {
        var u = r.is(st)
          , f = t.direction
          , _ = s.reduce(function(A, h) {
            return Ee(A, h[1].matches ? h[0] : {})
        }, {});
        qt(t),
        g(_),
        t.destroy ? e.destroy(t.destroy === "completely") : u ? (v(!0),
        e.mount()) : f !== t.direction && e.refresh()
    }
    function d(u) {
        matchMedia(Kt).matches && (u ? Ee(t, l) : qt(t, Be(l)))
    }
    function g(u, f, _) {
        Ee(t, u),
        f && Ee(Object.getPrototypeOf(t), u),
        (_ || !r.is(De)) && e.emit(Q, t)
    }
    return {
        setup: c,
        destroy: v,
        reduce: d,
        set: g
    }
}
var gt = "Arrow"
  , Et = gt + "Left"
  , ht = gt + "Right"
  , Nn = gt + "Up"
  , Rn = gt + "Down"
  , Qt = "rtl"
  , mt = "ttb"
  , St = {
    width: ["height"],
    left: ["top", "right"],
    right: ["bottom", "left"],
    x: ["y"],
    X: ["Y"],
    Y: ["X"],
    ArrowLeft: [Nn, ht],
    ArrowRight: [Rn, Et]
};
function ur(e, n, t) {
    function r(l, i, s) {
        s = s || t.direction;
        var c = s === Qt && !i ? 1 : s === mt ? 0 : -1;
        return St[l] && St[l][c] || l.replace(/width|left|right/i, function(v, a) {
            var m = St[v.toLowerCase()][c] || v;
            return a > 0 ? m.charAt(0).toUpperCase() + m.slice(1) : m
        })
    }
    function o(l) {
        return l * (t.direction === Qt ? 1 : -1)
    }
    return {
        resolve: r,
        orient: o
    }
}
var le = "role"
  , Pe = "tabindex"
  , sr = "disabled"
  , ae = "aria-"
  , tt = ae + "controls"
  , On = ae + "current"
  , en = ae + "selected"
  , te = ae + "label"
  , zt = ae + "labelledby"
  , bn = ae + "hidden"
  , Ut = ae + "orientation"
  , Ke = ae + "roledescription"
  , tn = ae + "live"
  , nn = ae + "busy"
  , rn = ae + "atomic"
  , Bt = [le, Pe, sr, tt, On, te, zt, bn, Ut, Ke]
  , se = Qe + "__"
  , ye = "is-"
  , Tt = Qe
  , an = se + "track"
  , cr = se + "list"
  , At = se + "slide"
  , Dn = At + "--clone"
  , fr = At + "__container"
  , Wt = se + "arrows"
  , _t = se + "arrow"
  , Cn = _t + "--prev"
  , Pn = _t + "--next"
  , yt = se + "pagination"
  , wn = yt + "__page"
  , vr = se + "progress"
  , lr = vr + "__bar"
  , dr = se + "toggle"
  , gr = se + "spinner"
  , Er = se + "sr"
  , hr = ye + "initialized"
  , Ne = ye + "active"
  , pn = ye + "prev"
  , Mn = ye + "next"
  , Dt = ye + "visible"
  , Ct = ye + "loading"
  , Vn = ye + "focus-in"
  , xn = ye + "overflow"
  , mr = [Ne, Dt, pn, Mn, Ct, Vn, xn]
  , Ar = {
    slide: At,
    clone: Dn,
    arrows: Wt,
    arrow: _t,
    prev: Cn,
    next: Pn,
    pagination: yt,
    page: wn,
    spinner: gr
};
function _r(e, n) {
    if (cn(e.closest))
        return e.closest(n);
    for (var t = e; t && t.nodeType === 1 && !Ue(t, n); )
        t = t.parentElement;
    return t
}
var yr = 5
  , on = 200
  , Fn = "touchstart mousedown"
  , Lt = "touchmove mousemove"
  , It = "touchend touchcancel mouseup click";
function Sr(e, n, t) {
    var r = H(e), o = r.on, l = r.bind, i = e.root, s = t.i18n, c = {}, v = [], a = [], m = [], d, g, u;
    function f() {
        E(),
        w(),
        h()
    }
    function _() {
        o(K, A),
        o(K, f),
        o(Q, h),
        l(document, Fn + " keydown", function(S) {
            u = S.type === "keydown"
        }, {
            capture: !0
        }),
        l(i, "focusin", function() {
            fe(i, Vn, !!u)
        })
    }
    function A(S) {
        var b = Bt.concat("style");
        de(v),
        ve(i, a),
        ve(d, m),
        ue([d, g], b),
        ue(i, S ? b : ["style", Ke])
    }
    function h() {
        ve(i, a),
        ve(d, m),
        a = M(Tt),
        m = M(an),
        oe(i, a),
        oe(d, m),
        x(i, te, t.label),
        x(i, zt, t.labelledby)
    }
    function E() {
        d = O("." + an),
        g = Je(d, "." + cr),
        Ge(d && g, "A track/list element is missing."),
        at(v, vn(g, "." + At + ":not(." + Dn + ")")),
        Le({
            arrows: Wt,
            pagination: yt,
            prev: Cn,
            next: Pn,
            bar: lr,
            toggle: dr
        }, function(S, b) {
            c[b] = O("." + S)
        }),
        We(c, {
            root: i,
            track: d,
            list: g,
            slides: v
        })
    }
    function w() {
        var S = i.id || Hn(Qe)
          , b = t.role;
        i.id = S,
        d.id = d.id || S + "-track",
        g.id = g.id || S + "-list",
        !ie(i, le) && i.tagName !== "SECTION" && b && x(i, le, b),
        x(i, Ke, s.carousel),
        x(g, le, "presentation")
    }
    function O(S) {
        var b = gn(i, S);
        return b && _r(b, "." + Tt) === i ? b : void 0
    }
    function M(S) {
        return [S + "--" + t.type, S + "--" + t.direction, t.drag && S + "--draggable", t.isNavigation && S + "--nav", S === Tt && Ne]
    }
    return We(c, {
        setup: f,
        mount: _,
        destroy: A
    })
}
var pe = "slide"
  , xe = "loop"
  , nt = "fade";
function Tr(e, n, t, r) {
    var o = H(e), l = o.on, i = o.emit, s = o.bind, c = e.Components, v = e.root, a = e.options, m = a.isNavigation, d = a.updateOnMove, g = a.i18n, u = a.pagination, f = a.slideFocus, _ = c.Direction.resolve, A = ie(r, "style"), h = ie(r, te), E = t > -1, w = Je(r, "." + fr), O;
    function M() {
        E || (r.id = v.id + "-slide" + Ft(n + 1),
        x(r, le, u ? "tabpanel" : "group"),
        x(r, Ke, g.slide),
        x(r, te, h || bt(g.slideLabel, [n + 1, e.length]))),
        S()
    }
    function S() {
        s(r, "click", U(i, mn, p)),
        s(r, "keydown", U(i, Ln, p)),
        l([et, In, Ve], L),
        l(_n, G),
        d && l(Ae, P)
    }
    function b() {
        O = !0,
        o.destroy(),
        ve(r, mr),
        ue(r, Bt),
        x(r, "style", A),
        x(r, te, h || "")
    }
    function G() {
        var C = e.splides.map(function(T) {
            var D = T.splide.Components.Slides.getAt(n);
            return D ? D.slide.id : ""
        }).join(" ");
        x(r, te, bt(g.slideX, (E ? t : n) + 1)),
        x(r, tt, C),
        x(r, le, f ? "button" : ""),
        f && ue(r, Ke)
    }
    function P() {
        O || L()
    }
    function L() {
        if (!O) {
            var C = e.index;
            I(),
            N(),
            fe(r, pn, n === C - 1),
            fe(r, Mn, n === C + 1)
        }
    }
    function I() {
        var C = F();
        C !== jt(r, Ne) && (fe(r, Ne, C),
        x(r, On, m && C || ""),
        i(C ? Yn : Xn, p))
    }
    function N() {
        var C = Y()
          , T = !C && (!F() || E);
        if (e.state.is([Me, $e]) || x(r, bn, T || ""),
        x(Vt(r, a.focusableNodes || ""), Pe, T ? -1 : ""),
        f && x(r, Pe, T ? -1 : 0),
        C !== jt(r, Dt) && (fe(r, Dt, C),
        i(C ? Kn : $n, p)),
        !C && document.activeElement === r) {
            var D = c.Slides.getAt(e.index);
            D && ln(D.slide)
        }
    }
    function V(C, T, D) {
        re(D && w || r, C, T)
    }
    function F() {
        var C = e.index;
        return C === n || a.cloneStatus && C === t
    }
    function Y() {
        if (e.is(nt))
            return F();
        var C = ee(c.Elements.track)
          , T = ee(r)
          , D = _("left", !0)
          , k = _("right", !0);
        return ft(C[D]) <= Ye(T[D]) && ft(T[k]) <= Ye(C[k])
    }
    function W(C, T) {
        var D = J(C - n);
        return !E && (a.rewind || e.is(xe)) && (D = me(D, e.length - D)),
        D <= T
    }
    var p = {
        index: n,
        slideIndex: t,
        slide: r,
        container: w,
        isClone: E,
        mount: M,
        destroy: b,
        update: L,
        style: V,
        isWithin: W
    };
    return p
}
function Lr(e, n, t) {
    var r = H(e)
      , o = r.on
      , l = r.emit
      , i = r.bind
      , s = n.Elements
      , c = s.slides
      , v = s.list
      , a = [];
    function m() {
        d(),
        o(K, g),
        o(K, d)
    }
    function d() {
        c.forEach(function(L, I) {
            f(L, I, -1)
        })
    }
    function g() {
        O(function(L) {
            L.destroy()
        }),
        de(a)
    }
    function u() {
        O(function(L) {
            L.update()
        })
    }
    function f(L, I, N) {
        var V = Tr(e, I, N, L);
        V.mount(),
        a.push(V),
        a.sort(function(F, Y) {
            return F.index - Y.index
        })
    }
    function _(L) {
        return L ? M(function(I) {
            return !I.isClone
        }) : a
    }
    function A(L) {
        var I = n.Controller
          , N = I.toIndex(L)
          , V = I.hasFocus() ? 1 : t.perPage;
        return M(function(F) {
            return ot(F.index, N, N + V - 1)
        })
    }
    function h(L) {
        return M(L)[0]
    }
    function E(L, I) {
        ne(L, function(N) {
            if (he(N) && (N = dn(N)),
            fn(N)) {
                var V = c[I];
                V ? Mt(N, V) : Ze(v, N),
                oe(N, t.classes.slide),
                b(N, U(l, Xe))
            }
        }),
        l(K)
    }
    function w(L) {
        Ie(M(L).map(function(I) {
            return I.slide
        })),
        l(K)
    }
    function O(L, I) {
        _(I).forEach(L)
    }
    function M(L) {
        return a.filter(cn(L) ? L : function(I) {
            return he(L) ? Ue(I.slide, L) : pt(je(L), I.index)
        }
        )
    }
    function S(L, I, N) {
        O(function(V) {
            V.style(L, I, N)
        })
    }
    function b(L, I) {
        var N = Vt(L, "img")
          , V = N.length;
        V ? N.forEach(function(F) {
            i(F, "load error", function() {
                --V || I()
            })
        }) : I()
    }
    function G(L) {
        return L ? c.length : a.length
    }
    function P() {
        return a.length > t.perPage
    }
    return {
        mount: m,
        destroy: g,
        update: u,
        register: f,
        get: _,
        getIn: A,
        getAt: h,
        add: E,
        remove: w,
        forEach: O,
        filter: M,
        style: S,
        getLength: G,
        isEnough: P
    }
}
function Ir(e, n, t) {
    var r = H(e), o = r.on, l = r.bind, i = r.emit, s = n.Slides, c = n.Direction.resolve, v = n.Elements, a = v.root, m = v.track, d = v.list, g = s.getAt, u = s.style, f, _, A;
    function h() {
        E(),
        l(window, "resize load", ar(U(i, Xe))),
        o([Q, K], E),
        o(Xe, w)
    }
    function E() {
        f = t.direction === mt,
        re(a, "maxWidth", Te(t.width)),
        re(m, c("paddingLeft"), O(!1)),
        re(m, c("paddingRight"), O(!0)),
        w(!0)
    }
    function w(p) {
        var C = ee(a);
        (p || _.width !== C.width || _.height !== C.height) && (re(m, "height", M()),
        u(c("marginRight"), Te(t.gap)),
        u("width", b()),
        u("height", G(), !0),
        _ = C,
        i(Gt),
        A !== (A = W()) && (fe(a, xn, A),
        i(Jn, A)))
    }
    function O(p) {
        var C = t.padding
          , T = c(p ? "right" : "left");
        return C && Te(C[T] || (ze(C) ? 0 : C)) || "0px"
    }
    function M() {
        var p = "";
        return f && (p = S(),
        Ge(p, "height or heightRatio is missing."),
        p = "calc(" + p + " - " + O(!1) + " - " + O(!0) + ")"),
        p
    }
    function S() {
        return Te(t.height || ee(d).width * t.heightRatio)
    }
    function b() {
        return t.autoWidth ? null : Te(t.fixedWidth) || (f ? "" : P())
    }
    function G() {
        return Te(t.fixedHeight) || (f ? t.autoHeight ? null : P() : S())
    }
    function P() {
        var p = Te(t.gap);
        return "calc((100%" + (p && " + " + p) + ")/" + (t.perPage || 1) + (p && " - " + p) + ")"
    }
    function L() {
        return ee(d)[c("width")]
    }
    function I(p, C) {
        var T = g(p || 0);
        return T ? ee(T.slide)[c("width")] + (C ? 0 : F()) : 0
    }
    function N(p, C) {
        var T = g(p);
        if (T) {
            var D = ee(T.slide)[c("right")]
              , k = ee(d)[c("left")];
            return J(D - k) + (C ? 0 : F())
        }
        return 0
    }
    function V(p) {
        return N(e.length - 1) - N(0) + I(0, p)
    }
    function F() {
        var p = g(0);
        return p && parseFloat(re(p.slide, c("marginRight"))) || 0
    }
    function Y(p) {
        return parseFloat(re(m, c("padding" + (p ? "Right" : "Left")))) || 0
    }
    function W() {
        return e.is(nt) || V(!0) > L()
    }
    return {
        mount: h,
        resize: w,
        listSize: L,
        slideSize: I,
        sliderSize: V,
        totalSize: N,
        getPadding: Y,
        isOverflow: W
    }
}
var Nr = 2;
function Rr(e, n, t) {
    var r = H(e), o = r.on, l = n.Elements, i = n.Slides, s = n.Direction.resolve, c = [], v;
    function a() {
        o(K, m),
        o([Q, Xe], g),
        (v = _()) && (u(v),
        n.Layout.resize(!0))
    }
    function m() {
        d(),
        a()
    }
    function d() {
        Ie(c),
        de(c),
        r.destroy()
    }
    function g() {
        var A = _();
        v !== A && (v < A || !A) && r.emit(K)
    }
    function u(A) {
        var h = i.get().slice()
          , E = h.length;
        if (E) {
            for (; h.length < A; )
                at(h, h);
            at(h.slice(-A), h.slice(0, A)).forEach(function(w, O) {
                var M = O < A
                  , S = f(w.slide, O);
                M ? Mt(S, h[0].slide) : Ze(l.list, S),
                at(c, S),
                i.register(S, O - A + (M ? 0 : E), w.index)
            })
        }
    }
    function f(A, h) {
        var E = A.cloneNode(!0);
        return oe(E, t.classes.clone),
        E.id = e.root.id + "-clone" + Ft(h + 1),
        E
    }
    function _() {
        var A = t.clones;
        if (!e.is(xe))
            A = 0;
        else if (qe(A)) {
            var h = t[s("fixedWidth")] && n.Layout.slideSize(0)
              , E = h && Ye(ee(l.track)[s("width")] / h);
            A = E || t[s("autoWidth")] && e.length || t.perPage * Nr
        }
        return A
    }
    return {
        mount: a,
        destroy: d
    }
}
function Or(e, n, t) {
    var r = H(e), o = r.on, l = r.emit, i = e.state.set, s = n.Layout, c = s.slideSize, v = s.getPadding, a = s.totalSize, m = s.listSize, d = s.sliderSize, g = n.Direction, u = g.resolve, f = g.orient, _ = n.Elements, A = _.list, h = _.track, E;
    function w() {
        E = n.Transition,
        o([Re, Gt, Q, K], O)
    }
    function O() {
        n.Controller.isBusy() || (n.Scroll.cancel(),
        S(e.index),
        n.Slides.update())
    }
    function M(T, D, k, q) {
        T !== D && p(T > k) && (L(),
        b(P(V(), T > k), !0)),
        i(Me),
        l(Ae, D, k, T),
        E.start(D, function() {
            i(we),
            l(et, D, k, T),
            q && q()
        })
    }
    function S(T) {
        b(N(T, !0))
    }
    function b(T, D) {
        if (!e.is(nt)) {
            var k = D ? T : G(T);
            re(A, "transform", "translate" + u("X") + "(" + k + "px)"),
            T !== k && l(In)
        }
    }
    function G(T) {
        if (e.is(xe)) {
            var D = I(T)
              , k = D > n.Controller.getEnd()
              , q = D < 0;
            (q || k) && (T = P(T, k))
        }
        return T
    }
    function P(T, D) {
        var k = T - W(D)
          , q = d();
        return T -= f(q * (Ye(J(k) / q) || 1)) * (D ? 1 : -1),
        T
    }
    function L() {
        b(V(), !0),
        E.cancel()
    }
    function I(T) {
        for (var D = n.Slides.get(), k = 0, q = 1 / 0, $ = 0; $ < D.length; $++) {
            var ge = D[$].index
              , y = J(N(ge, !0) - T);
            if (y <= q)
                q = y,
                k = ge;
            else
                break
        }
        return k
    }
    function N(T, D) {
        var k = f(a(T - 1) - Y(T));
        return D ? F(k) : k
    }
    function V() {
        var T = u("left");
        return ee(A)[T] - ee(h)[T] + f(v(!1))
    }
    function F(T) {
        return t.trimSpace && e.is(pe) && (T = Oe(T, 0, f(d(!0) - m()))),
        T
    }
    function Y(T) {
        var D = t.focus;
        return D === "center" ? (m() - c(T, !0)) / 2 : +D * c(T) || 0
    }
    function W(T) {
        return N(T ? n.Controller.getEnd() : 0, !!t.trimSpace)
    }
    function p(T) {
        var D = f(P(V(), T));
        return T ? D >= 0 : D <= A[u("scrollWidth")] - ee(h)[u("width")]
    }
    function C(T, D) {
        D = qe(D) ? V() : D;
        var k = T !== !0 && f(D) < f(W(!1))
          , q = T !== !1 && f(D) > f(W(!0));
        return k || q
    }
    return {
        mount: w,
        move: M,
        jump: S,
        translate: b,
        shift: P,
        cancel: L,
        toIndex: I,
        toPosition: N,
        getPosition: V,
        getLimit: W,
        exceededLimit: C,
        reposition: O
    }
}
function br(e, n, t) {
    var r = H(e), o = r.on, l = r.emit, i = n.Move, s = i.getPosition, c = i.getLimit, v = i.toPosition, a = n.Slides, m = a.isEnough, d = a.getLength, g = t.omitEnd, u = e.is(xe), f = e.is(pe), _ = U(V, !1), A = U(V, !0), h = t.start || 0, E, w = h, O, M, S;
    function b() {
        G(),
        o([Q, K, vt], G),
        o(Gt, P)
    }
    function G() {
        O = d(!0),
        M = t.perMove,
        S = t.perPage,
        E = p();
        var y = Oe(h, 0, g ? E : O - 1);
        y !== h && (h = y,
        i.reposition())
    }
    function P() {
        E !== p() && l(vt)
    }
    function L(y, z, Z) {
        if (!ge()) {
            var X = N(y)
              , j = W(X);
            j > -1 && (z || j !== h) && (k(j),
            i.move(X, j, w, Z))
        }
    }
    function I(y, z, Z, X) {
        n.Scroll.scroll(y, z, Z, function() {
            var j = W(i.toIndex(s()));
            k(g ? me(j, E) : j),
            X && X()
        })
    }
    function N(y) {
        var z = h;
        if (he(y)) {
            var Z = y.match(/([+\-<>])(\d+)?/) || []
              , X = Z[1]
              , j = Z[2];
            X === "+" || X === "-" ? z = F(h + +("" + X + (+j || 1)), h) : X === ">" ? z = j ? C(+j) : _(!0) : X === "<" && (z = A(!0))
        } else
            z = u ? y : Oe(y, 0, E);
        return z
    }
    function V(y, z) {
        var Z = M || ($() ? 1 : S)
          , X = F(h + Z * (y ? -1 : 1), h, !(M || $()));
        return X === -1 && f && !En(s(), c(!y), 1) ? y ? 0 : E : z ? X : W(X)
    }
    function F(y, z, Z) {
        if (m() || $()) {
            var X = Y(y);
            X !== y && (z = y,
            y = X,
            Z = !1),
            y < 0 || y > E ? !M && (ot(0, y, z, !0) || ot(E, z, y, !0)) ? y = C(T(y)) : u ? y = Z ? y < 0 ? -(O % S || S) : O : y : t.rewind ? y = y < 0 ? E : 0 : y = -1 : Z && y !== z && (y = C(T(z) + (y < z ? -1 : 1)))
        } else
            y = -1;
        return y
    }
    function Y(y) {
        if (f && t.trimSpace === "move" && y !== h)
            for (var z = s(); z === v(y, !0) && ot(y, 0, e.length - 1, !t.rewind); )
                y < h ? --y : ++y;
        return y
    }
    function W(y) {
        return u ? (y + O) % O || 0 : y
    }
    function p() {
        for (var y = O - ($() || u && M ? 1 : S); g && y-- > 0; )
            if (v(O - 1, !0) !== v(y, !0)) {
                y++;
                break
            }
        return Oe(y, 0, O - 1)
    }
    function C(y) {
        return Oe($() ? y : S * y, 0, E)
    }
    function T(y) {
        return $() ? me(y, E) : ft((y >= E ? O - 1 : y) / S)
    }
    function D(y) {
        var z = i.toIndex(y);
        return f ? Oe(z, 0, E) : z
    }
    function k(y) {
        y !== h && (w = h,
        h = y)
    }
    function q(y) {
        return y ? w : h
    }
    function $() {
        return !qe(t.focus) || t.isNavigation
    }
    function ge() {
        return e.state.is([Me, $e]) && !!t.waitForTransition
    }
    return {
        mount: b,
        go: L,
        scroll: I,
        getNext: _,
        getPrev: A,
        getAdjacent: V,
        getEnd: p,
        setIndex: k,
        getIndex: q,
        toIndex: C,
        toPage: T,
        toDest: D,
        hasFocus: $,
        isBusy: ge
    }
}
var Dr = "http://www.w3.org/2000/svg"
  , Cr = "m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"
  , rt = 40;
function Pr(e, n, t) {
    var r = H(e), o = r.on, l = r.bind, i = r.emit, s = t.classes, c = t.i18n, v = n.Elements, a = n.Controller, m = v.arrows, d = v.track, g = m, u = v.prev, f = v.next, _, A, h = {};
    function E() {
        O(),
        o(Q, w)
    }
    function w() {
        M(),
        E()
    }
    function O() {
        var I = t.arrows;
        I && !(u && f) && G(),
        u && f && (We(h, {
            prev: u,
            next: f
        }),
        He(g, I ? "" : "none"),
        oe(g, A = Wt + "--" + t.direction),
        I && (S(),
        L(),
        x([u, f], tt, d.id),
        i(Qn, u, f)))
    }
    function M() {
        r.destroy(),
        ve(g, A),
        _ ? (Ie(m ? [u, f] : g),
        u = f = null) : ue([u, f], Bt)
    }
    function S() {
        o([Re, et, K, Ve, vt], L),
        l(f, "click", U(b, ">")),
        l(u, "click", U(b, "<"))
    }
    function b(I) {
        a.go(I, !0)
    }
    function G() {
        g = m || Ce("div", s.arrows),
        u = P(!0),
        f = P(!1),
        _ = !0,
        Ze(g, [u, f]),
        !m && Mt(g, d)
    }
    function P(I) {
        var N = '<button class="' + s.arrow + " " + (I ? s.prev : s.next) + '" type="button"><svg xmlns="' + Dr + '" viewBox="0 0 ' + rt + " " + rt + '" width="' + rt + '" height="' + rt + '" focusable="false"><path d="' + (t.arrowPath || Cr) + '" />';
        return dn(N)
    }
    function L() {
        if (u && f) {
            var I = e.index
              , N = a.getPrev()
              , V = a.getNext()
              , F = N > -1 && I < N ? c.last : c.prev
              , Y = V > -1 && I > V ? c.first : c.next;
            u.disabled = N < 0,
            f.disabled = V < 0,
            x(u, te, F),
            x(f, te, Y),
            i(er, u, f, N, V)
        }
    }
    return {
        arrows: h,
        mount: E,
        destroy: M,
        update: L
    }
}
var wr = xt + "-interval";
function pr(e, n, t) {
    var r = H(e), o = r.on, l = r.bind, i = r.emit, s = dt(t.interval, e.go.bind(e, ">"), S), c = s.isPaused, v = n.Elements, a = n.Elements, m = a.root, d = a.toggle, g = t.autoplay, u, f, _ = g === "pause";
    function A() {
        g && (h(),
        d && x(d, tt, v.track.id),
        _ || E(),
        M())
    }
    function h() {
        t.pauseOnHover && l(m, "mouseenter mouseleave", function(G) {
            u = G.type === "mouseenter",
            O()
        }),
        t.pauseOnFocus && l(m, "focusin focusout", function(G) {
            f = G.type === "focusin",
            O()
        }),
        d && l(d, "click", function() {
            _ ? E() : w(!0)
        }),
        o([Ae, kt, K], s.rewind),
        o(Ae, b)
    }
    function E() {
        c() && n.Slides.isEnough() && (s.start(!t.resetProgress),
        f = u = _ = !1,
        M(),
        i(yn))
    }
    function w(G) {
        G === void 0 && (G = !0),
        _ = !!G,
        M(),
        c() || (s.pause(),
        i(Sn))
    }
    function O() {
        _ || (u || f ? w(!1) : E())
    }
    function M() {
        d && (fe(d, Ne, !_),
        x(d, te, t.i18n[_ ? "play" : "pause"]))
    }
    function S(G) {
        var P = v.bar;
        P && re(P, "width", G * 100 + "%"),
        i(rr, G)
    }
    function b(G) {
        var P = n.Slides.getAt(G);
        s.set(P && +ie(P.slide, wr) || t.interval)
    }
    return {
        mount: A,
        destroy: s.cancel,
        play: E,
        pause: w,
        isPaused: c
    }
}
function Mr(e, n, t) {
    var r = H(e)
      , o = r.on;
    function l() {
        t.cover && (o(Tn, U(s, !0)),
        o([Re, Q, K], U(i, !0)))
    }
    function i(c) {
        n.Slides.forEach(function(v) {
            var a = Je(v.container || v.slide, "img");
            a && a.src && s(c, a, v)
        })
    }
    function s(c, v, a) {
        a.style("background", c ? 'center/cover no-repeat url("' + v.src + '")' : "", !0),
        He(v, c ? "none" : "")
    }
    return {
        mount: l,
        destroy: U(i, !1)
    }
}
var Vr = 10
  , xr = 600
  , Fr = .6
  , Gr = 1.5
  , kr = 800;
function zr(e, n, t) {
    var r = H(e), o = r.on, l = r.emit, i = e.state.set, s = n.Move, c = s.getPosition, v = s.getLimit, a = s.exceededLimit, m = s.translate, d = e.is(pe), g, u, f = 1;
    function _() {
        o(Ae, w),
        o([Q, K], O)
    }
    function A(S, b, G, P, L) {
        var I = c();
        if (w(),
        G && (!d || !a())) {
            var N = n.Layout.sliderSize()
              , V = Ot(S) * N * ft(J(S) / N) || 0;
            S = s.toPosition(n.Controller.toDest(S % N)) + V
        }
        var F = En(I, S, 1);
        f = 1,
        b = F ? 0 : b || ct(J(S - I) / Gr, kr),
        u = P,
        g = dt(b, h, U(E, I, S, L), 1),
        i($e),
        l(kt),
        g.start()
    }
    function h() {
        i(we),
        u && u(),
        l(Ve)
    }
    function E(S, b, G, P) {
        var L = c()
          , I = S + (b - S) * M(P)
          , N = (I - L) * f;
        m(L + N),
        d && !G && a() && (f *= Fr,
        J(N) < Vr && A(v(a(!0)), xr, !1, u, !0))
    }
    function w() {
        g && g.cancel()
    }
    function O() {
        g && !g.isPaused() && (w(),
        h())
    }
    function M(S) {
        var b = t.easingFunc;
        return b ? b(S) : 1 - Math.pow(1 - S, 4)
    }
    return {
        mount: _,
        destroy: w,
        scroll: A,
        cancel: O
    }
}
var be = {
    passive: !1,
    capture: !0
};
function Ur(e, n, t) {
    var r = H(e), o = r.on, l = r.emit, i = r.bind, s = r.unbind, c = e.state, v = n.Move, a = n.Scroll, m = n.Controller, d = n.Elements.track, g = n.Media.reduce, u = n.Direction, f = u.resolve, _ = u.orient, A = v.getPosition, h = v.exceededLimit, E, w, O, M, S, b = !1, G, P, L;
    function I() {
        i(d, Lt, Nt, be),
        i(d, It, Nt, be),
        i(d, Fn, V, be),
        i(d, "click", W, {
            capture: !0
        }),
        i(d, "dragstart", ce),
        o([Re, Q], N)
    }
    function N() {
        var R = t.drag;
        Xt(!R),
        M = R === "free"
    }
    function V(R) {
        if (G = !1,
        !P) {
            var B = j(R);
            X(R.target) && (B || !R.button) && (m.isBusy() ? ce(R, !0) : (L = B ? d : window,
            S = c.is([Me, $e]),
            O = null,
            i(L, Lt, F, be),
            i(L, It, Y, be),
            v.cancel(),
            a.cancel(),
            p(R)))
        }
    }
    function F(R) {
        if (c.is(it) || (c.set(it),
        l(qn)),
        R.cancelable)
            if (S) {
                v.translate(E + Z($(R)));
                var B = ge(R) > on
                  , Se = b !== (b = h());
                (B || Se) && p(R),
                G = !0,
                l(jn),
                ce(R)
            } else
                D(R) && (S = T(R),
                ce(R))
    }
    function Y(R) {
        c.is(it) && (c.set(we),
        l(Zn)),
        S && (C(R),
        ce(R)),
        s(L, Lt, F),
        s(L, It, Y),
        S = !1
    }
    function W(R) {
        !P && G && ce(R, !0)
    }
    function p(R) {
        O = w,
        w = R,
        E = A()
    }
    function C(R) {
        var B = k(R)
          , Se = q(B)
          , Fe = t.rewind && t.rewindByDrag;
        g(!1),
        M ? m.scroll(Se, 0, t.snap) : e.is(nt) ? m.go(_(Ot(B)) < 0 ? Fe ? "<" : "-" : Fe ? ">" : "+") : e.is(pe) && b && Fe ? m.go(h(!0) ? ">" : "<") : m.go(m.toDest(Se), !0),
        g(!0)
    }
    function T(R) {
        var B = t.dragMinThreshold
          , Se = ze(B)
          , Fe = Se && B.mouse || 0
          , kn = (Se ? B.touch : +B) || 10;
        return J($(R)) > (j(R) ? kn : Fe)
    }
    function D(R) {
        return J($(R)) > J($(R, !0))
    }
    function k(R) {
        if (e.is(xe) || !b) {
            var B = ge(R);
            if (B && B < on)
                return $(R) / B
        }
        return 0
    }
    function q(R) {
        return A() + Ot(R) * me(J(R) * (t.flickPower || 600), M ? 1 / 0 : n.Layout.listSize() * (t.flickMaxPages || 1))
    }
    function $(R, B) {
        return z(R, B) - z(y(R), B)
    }
    function ge(R) {
        return Rt(R) - Rt(y(R))
    }
    function y(R) {
        return w === R && O || w
    }
    function z(R, B) {
        return (j(R) ? R.changedTouches[0] : R)["page" + f(B ? "Y" : "X")]
    }
    function Z(R) {
        return R / (b && e.is(pe) ? yr : 1)
    }
    function X(R) {
        var B = t.noDrag;
        return !Ue(R, "." + wn + ", ." + _t) && (!B || !Ue(R, B))
    }
    function j(R) {
        return typeof TouchEvent < "u" && R instanceof TouchEvent
    }
    function Gn() {
        return S
    }
    function Xt(R) {
        P = R
    }
    return {
        mount: I,
        disable: Xt,
        isDragging: Gn
    }
}
var Br = {
    Spacebar: " ",
    Right: ht,
    Left: Et,
    Up: Nn,
    Down: Rn
};
function Ht(e) {
    return e = he(e) ? e : e.key,
    Br[e] || e
}
var un = "keydown";
function Wr(e, n, t) {
    var r = H(e), o = r.on, l = r.bind, i = r.unbind, s = e.root, c = n.Direction.resolve, v, a;
    function m() {
        d(),
        o(Q, g),
        o(Q, d),
        o(Ae, f)
    }
    function d() {
        var A = t.keyboard;
        A && (v = A === "global" ? window : s,
        l(v, un, _))
    }
    function g() {
        i(v, un)
    }
    function u(A) {
        a = A
    }
    function f() {
        var A = a;
        a = !0,
        sn(function() {
            a = A
        })
    }
    function _(A) {
        if (!a) {
            var h = Ht(A);
            h === c(Et) ? e.go("<") : h === c(ht) && e.go(">")
        }
    }
    return {
        mount: m,
        destroy: g,
        disable: u
    }
}
var ke = xt + "-lazy"
  , ut = ke + "-srcset"
  , Hr = "[" + ke + "], [" + ut + "]";
function Yr(e, n, t) {
    var r = H(e)
      , o = r.on
      , l = r.off
      , i = r.bind
      , s = r.emit
      , c = t.lazyLoad === "sequential"
      , v = [et, Ve]
      , a = [];
    function m() {
        t.lazyLoad && (d(),
        o(K, d))
    }
    function d() {
        de(a),
        g(),
        c ? A() : (l(v),
        o(v, u),
        u())
    }
    function g() {
        n.Slides.forEach(function(h) {
            Vt(h.slide, Hr).forEach(function(E) {
                var w = ie(E, ke)
                  , O = ie(E, ut);
                if (w !== E.src || O !== E.srcset) {
                    var M = t.classes.spinner
                      , S = E.parentElement
                      , b = Je(S, "." + M) || Ce("span", M, S);
                    a.push([E, h, b]),
                    E.src || He(E, "none")
                }
            })
        })
    }
    function u() {
        a = a.filter(function(h) {
            var E = t.perPage * ((t.preloadPages || 1) + 1) - 1;
            return h[1].isWithin(e.index, E) ? f(h) : !0
        }),
        a.length || l(v)
    }
    function f(h) {
        var E = h[0];
        oe(h[1].slide, Ct),
        i(E, "load error", U(_, h)),
        x(E, "src", ie(E, ke)),
        x(E, "srcset", ie(E, ut)),
        ue(E, ke),
        ue(E, ut)
    }
    function _(h, E) {
        var w = h[0]
          , O = h[1];
        ve(O.slide, Ct),
        E.type !== "error" && (Ie(h[2]),
        He(w, ""),
        s(Tn, w, O),
        s(Xe)),
        c && A()
    }
    function A() {
        a.length && f(a.shift())
    }
    return {
        mount: m,
        destroy: U(de, a),
        check: u
    }
}
function Xr(e, n, t) {
    var r = H(e), o = r.on, l = r.emit, i = r.bind, s = n.Slides, c = n.Elements, v = n.Controller, a = v.hasFocus, m = v.getIndex, d = v.go, g = n.Direction.resolve, u = c.pagination, f = [], _, A;
    function h() {
        E(),
        o([Q, K, vt], h);
        var P = t.pagination;
        u && He(u, P ? "" : "none"),
        P && (o([Ae, kt, Ve], G),
        w(),
        G(),
        l(tr, {
            list: _,
            items: f
        }, b(e.index)))
    }
    function E() {
        _ && (Ie(u ? _e(_.children) : _),
        ve(_, A),
        de(f),
        _ = null),
        r.destroy()
    }
    function w() {
        var P = e.length
          , L = t.classes
          , I = t.i18n
          , N = t.perPage
          , V = a() ? v.getEnd() + 1 : Ye(P / N);
        _ = u || Ce("ul", L.pagination, c.track.parentElement),
        oe(_, A = yt + "--" + S()),
        x(_, le, "tablist"),
        x(_, te, I.select),
        x(_, Ut, S() === mt ? "vertical" : "");
        for (var F = 0; F < V; F++) {
            var Y = Ce("li", null, _)
              , W = Ce("button", {
                class: L.page,
                type: "button"
            }, Y)
              , p = s.getIn(F).map(function(T) {
                return T.slide.id
            })
              , C = !a() && N > 1 ? I.pageX : I.slideX;
            i(W, "click", U(O, F)),
            t.paginationKeyboard && i(W, "keydown", U(M, F)),
            x(Y, le, "presentation"),
            x(W, le, "tab"),
            x(W, tt, p.join(" ")),
            x(W, te, bt(C, F + 1)),
            x(W, Pe, -1),
            f.push({
                li: Y,
                button: W,
                page: F
            })
        }
    }
    function O(P) {
        d(">" + P, !0)
    }
    function M(P, L) {
        var I = f.length
          , N = Ht(L)
          , V = S()
          , F = -1;
        N === g(ht, !1, V) ? F = ++P % I : N === g(Et, !1, V) ? F = (--P + I) % I : N === "Home" ? F = 0 : N === "End" && (F = I - 1);
        var Y = f[F];
        Y && (ln(Y.button),
        d(">" + F),
        ce(L, !0))
    }
    function S() {
        return t.paginationDirection || t.direction
    }
    function b(P) {
        return f[v.toPage(P)]
    }
    function G() {
        var P = b(m(!0))
          , L = b(m());
        if (P) {
            var I = P.button;
            ve(I, Ne),
            ue(I, en),
            x(I, Pe, -1)
        }
        if (L) {
            var N = L.button;
            oe(N, Ne),
            x(N, en, !0),
            x(N, Pe, "")
        }
        l(nr, {
            list: _,
            items: f
        }, P, L)
    }
    return {
        items: f,
        mount: h,
        destroy: E,
        getAt: b,
        update: G
    }
}
var Kr = [" ", "Enter"];
function $r(e, n, t) {
    var r = t.isNavigation
      , o = t.slideFocus
      , l = [];
    function i() {
        e.splides.forEach(function(u) {
            u.isParent || (v(e, u.splide),
            v(u.splide, e))
        }),
        r && a()
    }
    function s() {
        l.forEach(function(u) {
            u.destroy()
        }),
        de(l)
    }
    function c() {
        s(),
        i()
    }
    function v(u, f) {
        var _ = H(u);
        _.on(Ae, function(A, h, E) {
            f.go(f.is(xe) ? E : A)
        }),
        l.push(_)
    }
    function a() {
        var u = H(e)
          , f = u.on;
        f(mn, d),
        f(Ln, g),
        f([Re, Q], m),
        l.push(u),
        u.emit(_n, e.splides)
    }
    function m() {
        x(n.Elements.list, Ut, t.direction === mt ? "vertical" : "")
    }
    function d(u) {
        e.go(u.index)
    }
    function g(u, f) {
        pt(Kr, Ht(f)) && (d(u),
        ce(f))
    }
    return {
        setup: U(n.Media.set, {
            slideFocus: qe(o) ? r : o
        }, !0),
        mount: i,
        destroy: s,
        remount: c
    }
}
function qr(e, n, t) {
    var r = H(e)
      , o = r.bind
      , l = 0;
    function i() {
        t.wheel && o(n.Elements.track, "wheel", s, be)
    }
    function s(v) {
        if (v.cancelable) {
            var a = v.deltaY
              , m = a < 0
              , d = Rt(v)
              , g = t.wheelMinThreshold || 0
              , u = t.wheelSleep || 0;
            J(a) > g && d - l > u && (e.go(m ? "<" : ">"),
            l = d),
            c(m) && ce(v)
        }
    }
    function c(v) {
        return !t.releaseWheel || e.state.is(Me) || n.Controller.getAdjacent(v) !== -1
    }
    return {
        mount: i
    }
}
var jr = 90;
function Zr(e, n, t) {
    var r = H(e)
      , o = r.on
      , l = n.Elements.track
      , i = t.live && !t.isNavigation
      , s = Ce("span", Er)
      , c = dt(jr, U(a, !1));
    function v() {
        i && (d(!n.Autoplay.isPaused()),
        x(l, rn, !0),
        s.textContent = "…",
        o(yn, U(d, !0)),
        o(Sn, U(d, !1)),
        o([et, Ve], U(a, !0)))
    }
    function a(g) {
        x(l, nn, g),
        g ? (Ze(l, s),
        c.start()) : (Ie(s),
        c.cancel())
    }
    function m() {
        ue(l, [tn, rn, nn]),
        Ie(s)
    }
    function d(g) {
        i && x(l, tn, g ? "off" : "polite")
    }
    return {
        mount: v,
        disable: d,
        destroy: m
    }
}
var Jr = Object.freeze({
    __proto__: null,
    Media: or,
    Direction: ur,
    Elements: Sr,
    Slides: Lr,
    Layout: Ir,
    Clones: Rr,
    Move: Or,
    Controller: br,
    Arrows: Pr,
    Autoplay: pr,
    Cover: Mr,
    Scroll: zr,
    Drag: Ur,
    Keyboard: Wr,
    LazyLoad: Yr,
    Pagination: Xr,
    Sync: $r,
    Wheel: qr,
    Live: Zr
})
  , Qr = {
    prev: "Previous slide",
    next: "Next slide",
    first: "Go to first slide",
    last: "Go to last slide",
    slideX: "Go to slide %s",
    pageX: "Go to page %s",
    play: "Start autoplay",
    pause: "Pause autoplay",
    carousel: "carousel",
    slide: "slide",
    select: "Select a slide to show",
    slideLabel: "%s of %s"
}
  , ei = {
    type: "slide",
    role: "region",
    speed: 400,
    perPage: 1,
    cloneStatus: !0,
    arrows: !0,
    pagination: !0,
    paginationKeyboard: !0,
    interval: 5e3,
    pauseOnHover: !0,
    pauseOnFocus: !0,
    resetProgress: !0,
    easing: "cubic-bezier(0.25, 1, 0.5, 1)",
    drag: !0,
    direction: "ltr",
    trimSpace: !0,
    focusableNodes: "a, button, textarea, input, select, iframe",
    live: !0,
    classes: Ar,
    i18n: Qr,
    reducedMotion: {
        speed: 0,
        rewindSpeed: 0,
        autoplay: "pause"
    }
};
function ti(e, n, t) {
    var r = n.Slides;
    function o() {
        H(e).on([Re, K], l)
    }
    function l() {
        r.forEach(function(s) {
            s.style("transform", "translateX(-" + 100 * s.index + "%)")
        })
    }
    function i(s, c) {
        r.style("transition", "opacity " + t.speed + "ms " + t.easing),
        sn(c)
    }
    return {
        mount: o,
        start: i,
        cancel: Nt
    }
}
function ni(e, n, t) {
    var r = n.Move, o = n.Controller, l = n.Scroll, i = n.Elements.list, s = U(re, i, "transition"), c;
    function v() {
        H(e).bind(i, "transitionend", function(g) {
            g.target === i && c && (m(),
            c())
        })
    }
    function a(g, u) {
        var f = r.toPosition(g, !0)
          , _ = r.getPosition()
          , A = d(g);
        J(f - _) >= 1 && A >= 1 ? t.useScroll ? l.scroll(f, A, !1, u) : (s("transform " + A + "ms " + t.easing),
        r.translate(f, !0),
        c = u) : (r.jump(g),
        u())
    }
    function m() {
        s(""),
        l.cancel()
    }
    function d(g) {
        var u = t.rewindSpeed;
        if (e.is(pe) && u) {
            var f = o.getIndex(!0)
              , _ = o.getEnd();
            if (f === 0 && g >= _ || f >= _ && g === 0)
                return u
        }
        return t.speed
    }
    return {
        mount: v,
        start: a,
        cancel: m
    }
}
var ri = function() {
    function e(t, r) {
        this.event = H(),
        this.Components = {},
        this.state = ir(De),
        this.splides = [],
        this._o = {},
        this._E = {};
        var o = he(t) ? gn(document, t) : t;
        Ge(o, o + " is invalid."),
        this.root = o,
        r = Ee({
            label: ie(o, te) || "",
            labelledby: ie(o, zt) || ""
        }, ei, e.defaults, r || {});
        try {
            Ee(r, JSON.parse(ie(o, xt)))
        } catch {
            Ge(!1, "Invalid JSON")
        }
        this._o = Object.create(Ee({}, r))
    }
    var n = e.prototype;
    return n.mount = function(r, o) {
        var l = this
          , i = this.state
          , s = this.Components;
        Ge(i.is([De, st]), "Already mounted!"),
        i.set(De),
        this._C = s,
        this._T = o || this._T || (this.is(nt) ? ti : ni),
        this._E = r || this._E;
        var c = We({}, Jr, this._E, {
            Transition: this._T
        });
        return Le(c, function(v, a) {
            var m = v(l, s, l._o);
            s[a] = m,
            m.setup && m.setup()
        }),
        Le(s, function(v) {
            v.mount && v.mount()
        }),
        this.emit(Re),
        oe(this.root, hr),
        i.set(we),
        this.emit(Jt),
        this
    }
    ,
    n.sync = function(r) {
        return this.splides.push({
            splide: r
        }),
        r.splides.push({
            splide: this,
            isParent: !0
        }),
        this.state.is(we) && (this._C.Sync.remount(),
        r.Components.Sync.remount()),
        this
    }
    ,
    n.go = function(r) {
        return this._C.Controller.go(r),
        this
    }
    ,
    n.on = function(r, o) {
        return this.event.on(r, o),
        this
    }
    ,
    n.off = function(r) {
        return this.event.off(r),
        this
    }
    ,
    n.emit = function(r) {
        var o;
        return (o = this.event).emit.apply(o, [r].concat(_e(arguments, 1))),
        this
    }
    ,
    n.add = function(r, o) {
        return this._C.Slides.add(r, o),
        this
    }
    ,
    n.remove = function(r) {
        return this._C.Slides.remove(r),
        this
    }
    ,
    n.is = function(r) {
        return this._o.type === r
    }
    ,
    n.refresh = function() {
        return this.emit(K),
        this
    }
    ,
    n.destroy = function(r) {
        r === void 0 && (r = !0);
        var o = this.event
          , l = this.state;
        return l.is(De) ? H(this).on(Jt, this.destroy.bind(this, r)) : (Le(this._C, function(i) {
            i.destroy && i.destroy(r)
        }, !0),
        o.emit(An),
        o.destroy(),
        r && de(this.splides),
        l.set(st)),
        this
    }
    ,
    Un(e, [{
        key: "options",
        get: function() {
            return this._o
        },
        set: function(r) {
            this._C.Media.set(r, !0, !0)
        }
    }, {
        key: "length",
        get: function() {
            return this._C.Slides.getLength(!0)
        }
    }, {
        key: "index",
        get: function() {
            return this._C.Controller.getIndex()
        }
    }]),
    e
}()
  , Yt = ri;
Yt.defaults = {};
Yt.STATES = Wn;
Yt.defaults = {
    gap: "var(--splide-gap, 2.5rem)",
    padding: "var(--splide-padding, var(--container-margin))",
    drag: "free",
    snap: !0,
    trimSpaces: !1,
    omitEnd: !0,
    mediaQuery: "min"
};
export {Yt as S};
