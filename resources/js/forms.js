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
    var xl = typeof global == "object" && global && global.Object === Object && global
      , hu = typeof self == "object" && self && self.Object === Object && self
      , Lt = xl || hu || Function("return this")()
      , hn = Lt.Symbol
      , Nl = Object.prototype
      , du = Nl.hasOwnProperty
      , fu = Nl.toString
      , Fi = hn ? hn.toStringTag : void 0;
    function pu(i) {
        var t = du.call(i, Fi)
          , e = i[Fi];
        try {
            i[Fi] = void 0;
            var n = !0
        } catch {}
        var r = fu.call(i);
        return n && (t ? i[Fi] = e : delete i[Fi]),
        r
    }
    var mu = Object.prototype
      , gu = mu.toString;
    function vu(i) {
        return gu.call(i)
    }
    var bu = "[object Null]"
      , yu = "[object Undefined]"
      , no = hn ? hn.toStringTag : void 0;
    function bi(i) {
        return i == null ? i === void 0 ? yu : bu : no && no in Object(i) ? pu(i) : vu(i)
    }
    function Ht(i) {
        return i != null && typeof i == "object"
    }
    var Dn = Array.isArray;
    function dn(i) {
        var t = typeof i;
        return i != null && (t == "object" || t == "function")
    }
    function Il(i) {
        return i
    }
    var Eu = "[object AsyncFunction]"
      , wu = "[object Function]"
      , _u = "[object GeneratorFunction]"
      , Cu = "[object Proxy]";
    function xa(i) {
        if (!dn(i))
            return !1;
        var t = bi(i);
        return t == wu || t == _u || t == Eu || t == Cu
    }
    var Ss = Lt["__core-js_shared__"]
      , io = function() {
        var i = /[^.]+$/.exec(Ss && Ss.keys && Ss.keys.IE_PROTO || "");
        return i ? "Symbol(src)_1." + i : ""
    }();
    function Au(i) {
        return !!io && io in i
    }
    var Su = Function.prototype
      , Tu = Su.toString;
    function qn(i) {
        if (i != null) {
            try {
                return Tu.call(i)
            } catch {}
            try {
                return i + ""
            } catch {}
        }
        return ""
    }
    var xu = /[\\^$.*+?()[\]{}|]/g
      , Nu = /^\[object .+?Constructor\]$/
      , Iu = Function.prototype
      , Lu = Object.prototype
      , Ou = Iu.toString
      , Du = Lu.hasOwnProperty
      , Mu = RegExp("^" + Ou.call(Du).replace(xu, "\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, "$1.*?") + "$");
    function ku(i) {
        if (!dn(i) || Au(i))
            return !1;
        var t = xa(i) ? Mu : Nu;
        return t.test(qn(i))
    }
    function qu(i, t) {
        return i == null ? void 0 : i[t]
    }
    function Rn(i, t) {
        var e = qu(i, t);
        return ku(e) ? e : void 0
    }
    var Vs = Rn(Lt, "WeakMap")
      , ro = Object.create
      , Ru = function() {
        function i() {}
        return function(t) {
            if (!dn(t))
                return {};
            if (ro)
                return ro(t);
            i.prototype = t;
            var e = new i;
            return i.prototype = void 0,
            e
        }
    }();
    function Fu(i, t, e) {
        switch (e.length) {
        case 0:
            return i.call(t);
        case 1:
            return i.call(t, e[0]);
        case 2:
            return i.call(t, e[0], e[1]);
        case 3:
            return i.call(t, e[0], e[1], e[2])
        }
        return i.apply(t, e)
    }
    function Ll(i, t) {
        var e = -1
          , n = i.length;
        for (t || (t = Array(n)); ++e < n; )
            t[e] = i[e];
        return t
    }
    var Pu = 800
      , Bu = 16
      , ju = Date.now;
    function Hu(i) {
        var t = 0
          , e = 0;
        return function() {
            var n = ju()
              , r = Bu - (n - e);
            if (e = n,
            r > 0) {
                if (++t >= Pu)
                    return arguments[0]
            } else
                t = 0;
            return i.apply(void 0, arguments)
        }
    }
    function Uu(i) {
        return function() {
            return i
        }
    }
    var qr = function() {
        try {
            var i = Rn(Object, "defineProperty");
            return i({}, "", {}),
            i
        } catch {}
    }()
      , $u = qr ? function(i, t) {
        return qr(i, "toString", {
            configurable: !0,
            enumerable: !1,
            value: Uu(t),
            writable: !0
        })
    }
    : Il
      , zu = Hu($u);
    function Ku(i, t) {
        for (var e = -1, n = i == null ? 0 : i.length; ++e < n && t(i[e], e, i) !== !1; )
            ;
        return i
    }
    var Vu = 9007199254740991
      , Wu = /^(?:0|[1-9]\d*)$/;
    function Ol(i, t) {
        var e = typeof i;
        return t = t ?? Vu,
        !!t && (e == "number" || e != "symbol" && Wu.test(i)) && i > -1 && i % 1 == 0 && i < t
    }
    function Na(i, t, e) {
        t == "__proto__" && qr ? qr(i, t, {
            configurable: !0,
            enumerable: !0,
            value: e,
            writable: !0
        }) : i[t] = e
    }
    function rr(i, t) {
        return i === t || i !== i && t !== t
    }
    var Gu = Object.prototype
      , Yu = Gu.hasOwnProperty;
    function Dl(i, t, e) {
        var n = i[t];
        (!(Yu.call(i, t) && rr(n, e)) || e === void 0 && !(t in i)) && Na(i, t, e)
    }
    function sr(i, t, e, n) {
        var r = !e;
        e || (e = {});
        for (var s = -1, a = t.length; ++s < a; ) {
            var o = t[s]
              , l = void 0;
            l === void 0 && (l = i[o]),
            r ? Na(e, o, l) : Dl(e, o, l)
        }
        return e
    }
    var so = Math.max;
    function Zu(i, t, e) {
        return t = so(t === void 0 ? i.length - 1 : t, 0),
        function() {
            for (var n = arguments, r = -1, s = so(n.length - t, 0), a = Array(s); ++r < s; )
                a[r] = n[t + r];
            r = -1;
            for (var o = Array(t + 1); ++r < t; )
                o[r] = n[r];
            return o[t] = e(a),
            Fu(i, this, o)
        }
    }
    function Xu(i, t) {
        return zu(Zu(i, t, Il), i + "")
    }
    var Qu = 9007199254740991;
    function Ml(i) {
        return typeof i == "number" && i > -1 && i % 1 == 0 && i <= Qu
    }
    function $r(i) {
        return i != null && Ml(i.length) && !xa(i)
    }
    function Ju(i, t, e) {
        if (!dn(e))
            return !1;
        var n = typeof t;
        return (n == "number" ? $r(e) && Ol(t, e.length) : n == "string" && t in e) ? rr(e[t], i) : !1
    }
    function eh(i) {
        return Xu(function(t, e) {
            var n = -1
              , r = e.length
              , s = r > 1 ? e[r - 1] : void 0
              , a = r > 2 ? e[2] : void 0;
            for (s = i.length > 3 && typeof s == "function" ? (r--,
            s) : void 0,
            a && Ju(e[0], e[1], a) && (s = r < 3 ? void 0 : s,
            r = 1),
            t = Object(t); ++n < r; ) {
                var o = e[n];
                o && i(t, o, n, s)
            }
            return t
        })
    }
    var th = Object.prototype;
    function Ia(i) {
        var t = i && i.constructor
          , e = typeof t == "function" && t.prototype || th;
        return i === e
    }
    function nh(i, t) {
        for (var e = -1, n = Array(i); ++e < i; )
            n[e] = t(e);
        return n
    }
    var ih = "[object Arguments]";
    function ao(i) {
        return Ht(i) && bi(i) == ih
    }
    var kl = Object.prototype
      , rh = kl.hasOwnProperty
      , sh = kl.propertyIsEnumerable
      , Ws = ao(function() {
        return arguments
    }()) ? ao : function(i) {
        return Ht(i) && rh.call(i, "callee") && !sh.call(i, "callee")
    }
    ;
    function ah() {
        return !1
    }
    var ql = typeof Ve == "object" && Ve && !Ve.nodeType && Ve
      , oo = ql && typeof We == "object" && We && !We.nodeType && We
      , oh = oo && oo.exports === ql
      , lo = oh ? Lt.Buffer : void 0
      , lh = lo ? lo.isBuffer : void 0
      , Yi = lh || ah
      , ch = "[object Arguments]"
      , uh = "[object Array]"
      , hh = "[object Boolean]"
      , dh = "[object Date]"
      , fh = "[object Error]"
      , ph = "[object Function]"
      , mh = "[object Map]"
      , gh = "[object Number]"
      , vh = "[object Object]"
      , bh = "[object RegExp]"
      , yh = "[object Set]"
      , Eh = "[object String]"
      , wh = "[object WeakMap]"
      , _h = "[object ArrayBuffer]"
      , Ch = "[object DataView]"
      , Ah = "[object Float32Array]"
      , Sh = "[object Float64Array]"
      , Th = "[object Int8Array]"
      , xh = "[object Int16Array]"
      , Nh = "[object Int32Array]"
      , Ih = "[object Uint8Array]"
      , Lh = "[object Uint8ClampedArray]"
      , Oh = "[object Uint16Array]"
      , Dh = "[object Uint32Array]"
      , ae = {};
    ae[Ah] = ae[Sh] = ae[Th] = ae[xh] = ae[Nh] = ae[Ih] = ae[Lh] = ae[Oh] = ae[Dh] = !0;
    ae[ch] = ae[uh] = ae[_h] = ae[hh] = ae[Ch] = ae[dh] = ae[fh] = ae[ph] = ae[mh] = ae[gh] = ae[vh] = ae[bh] = ae[yh] = ae[Eh] = ae[wh] = !1;
    function Mh(i) {
        return Ht(i) && Ml(i.length) && !!ae[bi(i)]
    }
    function La(i) {
        return function(t) {
            return i(t)
        }
    }
    var Rl = typeof Ve == "object" && Ve && !Ve.nodeType && Ve
      , $i = Rl && typeof We == "object" && We && !We.nodeType && We
      , kh = $i && $i.exports === Rl
      , Ts = kh && xl.process
      , di = function() {
        try {
            var i = $i && $i.require && $i.require("util").types;
            return i || Ts && Ts.binding && Ts.binding("util")
        } catch {}
    }()
      , co = di && di.isTypedArray
      , Oa = co ? La(co) : Mh
      , qh = Object.prototype
      , Rh = qh.hasOwnProperty;
    function Fl(i, t) {
        var e = Dn(i)
          , n = !e && Ws(i)
          , r = !e && !n && Yi(i)
          , s = !e && !n && !r && Oa(i)
          , a = e || n || r || s
          , o = a ? nh(i.length, String) : []
          , l = o.length;
        for (var u in i)
            (t || Rh.call(i, u)) && !(a && (u == "length" || r && (u == "offset" || u == "parent") || s && (u == "buffer" || u == "byteLength" || u == "byteOffset") || Ol(u, l))) && o.push(u);
        return o
    }
    function Pl(i, t) {
        return function(e) {
            return i(t(e))
        }
    }
    var Fh = Pl(Object.keys, Object)
      , Ph = Object.prototype
      , Bh = Ph.hasOwnProperty;
    function jh(i) {
        if (!Ia(i))
            return Fh(i);
        var t = [];
        for (var e in Object(i))
            Bh.call(i, e) && e != "constructor" && t.push(e);
        return t
    }
    function Da(i) {
        return $r(i) ? Fl(i) : jh(i)
    }
    function Hh(i) {
        var t = [];
        if (i != null)
            for (var e in Object(i))
                t.push(e);
        return t
    }
    var Uh = Object.prototype
      , $h = Uh.hasOwnProperty;
    function zh(i) {
        if (!dn(i))
            return Hh(i);
        var t = Ia(i)
          , e = [];
        for (var n in i)
            n == "constructor" && (t || !$h.call(i, n)) || e.push(n);
        return e
    }
    function ar(i) {
        return $r(i) ? Fl(i, !0) : zh(i)
    }
    var Zi = Rn(Object, "create");
    function Kh() {
        this.__data__ = Zi ? Zi(null) : {},
        this.size = 0
    }
    function Vh(i) {
        var t = this.has(i) && delete this.__data__[i];
        return this.size -= t ? 1 : 0,
        t
    }
    var Wh = "__lodash_hash_undefined__"
      , Gh = Object.prototype
      , Yh = Gh.hasOwnProperty;
    function Zh(i) {
        var t = this.__data__;
        if (Zi) {
            var e = t[i];
            return e === Wh ? void 0 : e
        }
        return Yh.call(t, i) ? t[i] : void 0
    }
    var Xh = Object.prototype
      , Qh = Xh.hasOwnProperty;
    function Jh(i) {
        var t = this.__data__;
        return Zi ? t[i] !== void 0 : Qh.call(t, i)
    }
    var ed = "__lodash_hash_undefined__";
    function td(i, t) {
        var e = this.__data__;
        return this.size += this.has(i) ? 0 : 1,
        e[i] = Zi && t === void 0 ? ed : t,
        this
    }
    function Mn(i) {
        var t = -1
          , e = i == null ? 0 : i.length;
        for (this.clear(); ++t < e; ) {
            var n = i[t];
            this.set(n[0], n[1])
        }
    }
    Mn.prototype.clear = Kh;
    Mn.prototype.delete = Vh;
    Mn.prototype.get = Zh;
    Mn.prototype.has = Jh;
    Mn.prototype.set = td;
    function nd() {
        this.__data__ = [],
        this.size = 0
    }
    function zr(i, t) {
        for (var e = i.length; e--; )
            if (rr(i[e][0], t))
                return e;
        return -1
    }
    var id = Array.prototype
      , rd = id.splice;
    function sd(i) {
        var t = this.__data__
          , e = zr(t, i);
        if (e < 0)
            return !1;
        var n = t.length - 1;
        return e == n ? t.pop() : rd.call(t, e, 1),
        --this.size,
        !0
    }
    function ad(i) {
        var t = this.__data__
          , e = zr(t, i);
        return e < 0 ? void 0 : t[e][1]
    }
    function od(i) {
        return zr(this.__data__, i) > -1
    }
    function ld(i, t) {
        var e = this.__data__
          , n = zr(e, i);
        return n < 0 ? (++this.size,
        e.push([i, t])) : e[n][1] = t,
        this
    }
    function Vt(i) {
        var t = -1
          , e = i == null ? 0 : i.length;
        for (this.clear(); ++t < e; ) {
            var n = i[t];
            this.set(n[0], n[1])
        }
    }
    Vt.prototype.clear = nd;
    Vt.prototype.delete = sd;
    Vt.prototype.get = ad;
    Vt.prototype.has = od;
    Vt.prototype.set = ld;
    var Xi = Rn(Lt, "Map");
    function cd() {
        this.size = 0,
        this.__data__ = {
            hash: new Mn,
            map: new (Xi || Vt),
            string: new Mn
        }
    }
    function ud(i) {
        var t = typeof i;
        return t == "string" || t == "number" || t == "symbol" || t == "boolean" ? i !== "__proto__" : i === null
    }
    function Kr(i, t) {
        var e = i.__data__;
        return ud(t) ? e[typeof t == "string" ? "string" : "hash"] : e.map
    }
    function hd(i) {
        var t = Kr(this, i).delete(i);
        return this.size -= t ? 1 : 0,
        t
    }
    function dd(i) {
        return Kr(this, i).get(i)
    }
    function fd(i) {
        return Kr(this, i).has(i)
    }
    function pd(i, t) {
        var e = Kr(this, i)
          , n = e.size;
        return e.set(i, t),
        this.size += e.size == n ? 0 : 1,
        this
    }
    function Fn(i) {
        var t = -1
          , e = i == null ? 0 : i.length;
        for (this.clear(); ++t < e; ) {
            var n = i[t];
            this.set(n[0], n[1])
        }
    }
    Fn.prototype.clear = cd;
    Fn.prototype.delete = hd;
    Fn.prototype.get = dd;
    Fn.prototype.has = fd;
    Fn.prototype.set = pd;
    function Bl(i, t) {
        for (var e = -1, n = t.length, r = i.length; ++e < n; )
            i[r + e] = t[e];
        return i
    }
    var Ma = Pl(Object.getPrototypeOf, Object)
      , md = "[object Object]"
      , gd = Function.prototype
      , vd = Object.prototype
      , jl = gd.toString
      , bd = vd.hasOwnProperty
      , yd = jl.call(Object);
    function Ed(i) {
        if (!Ht(i) || bi(i) != md)
            return !1;
        var t = Ma(i);
        if (t === null)
            return !0;
        var e = bd.call(t, "constructor") && t.constructor;
        return typeof e == "function" && e instanceof e && jl.call(e) == yd
    }
    function wd() {
        this.__data__ = new Vt,
        this.size = 0
    }
    function _d(i) {
        var t = this.__data__
          , e = t.delete(i);
        return this.size = t.size,
        e
    }
    function Cd(i) {
        return this.__data__.get(i)
    }
    function Ad(i) {
        return this.__data__.has(i)
    }
    var Sd = 200;
    function Td(i, t) {
        var e = this.__data__;
        if (e instanceof Vt) {
            var n = e.__data__;
            if (!Xi || n.length < Sd - 1)
                return n.push([i, t]),
                this.size = ++e.size,
                this;
            e = this.__data__ = new Fn(n)
        }
        return e.set(i, t),
        this.size = e.size,
        this
    }
    function Tt(i) {
        var t = this.__data__ = new Vt(i);
        this.size = t.size
    }
    Tt.prototype.clear = wd;
    Tt.prototype.delete = _d;
    Tt.prototype.get = Cd;
    Tt.prototype.has = Ad;
    Tt.prototype.set = Td;
    function xd(i, t) {
        return i && sr(t, Da(t), i)
    }
    function Nd(i, t) {
        return i && sr(t, ar(t), i)
    }
    var Hl = typeof Ve == "object" && Ve && !Ve.nodeType && Ve
      , uo = Hl && typeof We == "object" && We && !We.nodeType && We
      , Id = uo && uo.exports === Hl
      , ho = Id ? Lt.Buffer : void 0
      , fo = ho ? ho.allocUnsafe : void 0;
    function Ul(i, t) {
        if (t)
            return i.slice();
        var e = i.length
          , n = fo ? fo(e) : new i.constructor(e);
        return i.copy(n),
        n
    }
    function Ld(i, t) {
        for (var e = -1, n = i == null ? 0 : i.length, r = 0, s = []; ++e < n; ) {
            var a = i[e];
            t(a, e, i) && (s[r++] = a)
        }
        return s
    }
    function $l() {
        return []
    }
    var Od = Object.prototype
      , Dd = Od.propertyIsEnumerable
      , po = Object.getOwnPropertySymbols
      , ka = po ? function(i) {
        return i == null ? [] : (i = Object(i),
        Ld(po(i), function(t) {
            return Dd.call(i, t)
        }))
    }
    : $l;
    function Md(i, t) {
        return sr(i, ka(i), t)
    }
    var kd = Object.getOwnPropertySymbols
      , zl = kd ? function(i) {
        for (var t = []; i; )
            Bl(t, ka(i)),
            i = Ma(i);
        return t
    }
    : $l;
    function qd(i, t) {
        return sr(i, zl(i), t)
    }
    function Kl(i, t, e) {
        var n = t(i);
        return Dn(i) ? n : Bl(n, e(i))
    }
    function Gs(i) {
        return Kl(i, Da, ka)
    }
    function Rd(i) {
        return Kl(i, ar, zl)
    }
    var Ys = Rn(Lt, "DataView")
      , Zs = Rn(Lt, "Promise")
      , Xs = Rn(Lt, "Set")
      , mo = "[object Map]"
      , Fd = "[object Object]"
      , go = "[object Promise]"
      , vo = "[object Set]"
      , bo = "[object WeakMap]"
      , yo = "[object DataView]"
      , Pd = qn(Ys)
      , Bd = qn(Xi)
      , jd = qn(Zs)
      , Hd = qn(Xs)
      , Ud = qn(Vs)
      , ot = bi;
    (Ys && ot(new Ys(new ArrayBuffer(1))) != yo || Xi && ot(new Xi) != mo || Zs && ot(Zs.resolve()) != go || Xs && ot(new Xs) != vo || Vs && ot(new Vs) != bo) && (ot = function(i) {
        var t = bi(i)
          , e = t == Fd ? i.constructor : void 0
          , n = e ? qn(e) : "";
        if (n)
            switch (n) {
            case Pd:
                return yo;
            case Bd:
                return mo;
            case jd:
                return go;
            case Hd:
                return vo;
            case Ud:
                return bo
            }
        return t
    }
    );
    var $d = Object.prototype
      , zd = $d.hasOwnProperty;
    function Kd(i) {
        var t = i.length
          , e = new i.constructor(t);
        return t && typeof i[0] == "string" && zd.call(i, "index") && (e.index = i.index,
        e.input = i.input),
        e
    }
    var Rr = Lt.Uint8Array;
    function qa(i) {
        var t = new i.constructor(i.byteLength);
        return new Rr(t).set(new Rr(i)),
        t
    }
    function Vd(i, t) {
        var e = t ? qa(i.buffer) : i.buffer;
        return new i.constructor(e,i.byteOffset,i.byteLength)
    }
    var Wd = /\w*$/;
    function Gd(i) {
        var t = new i.constructor(i.source,Wd.exec(i));
        return t.lastIndex = i.lastIndex,
        t
    }
    var Eo = hn ? hn.prototype : void 0
      , wo = Eo ? Eo.valueOf : void 0;
    function Yd(i) {
        return wo ? Object(wo.call(i)) : {}
    }
    function Vl(i, t) {
        var e = t ? qa(i.buffer) : i.buffer;
        return new i.constructor(e,i.byteOffset,i.length)
    }
    var Zd = "[object Boolean]"
      , Xd = "[object Date]"
      , Qd = "[object Map]"
      , Jd = "[object Number]"
      , ef = "[object RegExp]"
      , tf = "[object Set]"
      , nf = "[object String]"
      , rf = "[object Symbol]"
      , sf = "[object ArrayBuffer]"
      , af = "[object DataView]"
      , of = "[object Float32Array]"
      , lf = "[object Float64Array]"
      , cf = "[object Int8Array]"
      , uf = "[object Int16Array]"
      , hf = "[object Int32Array]"
      , df = "[object Uint8Array]"
      , ff = "[object Uint8ClampedArray]"
      , pf = "[object Uint16Array]"
      , mf = "[object Uint32Array]";
    function gf(i, t, e) {
        var n = i.constructor;
        switch (t) {
        case sf:
            return qa(i);
        case Zd:
        case Xd:
            return new n(+i);
        case af:
            return Vd(i, e);
        case of:
        case lf:
        case cf:
        case uf:
        case hf:
        case df:
        case ff:
        case pf:
        case mf:
            return Vl(i, e);
        case Qd:
            return new n;
        case Jd:
        case nf:
            return new n(i);
        case ef:
            return Gd(i);
        case tf:
            return new n;
        case rf:
            return Yd(i)
        }
    }
    function Wl(i) {
        return typeof i.constructor == "function" && !Ia(i) ? Ru(Ma(i)) : {}
    }
    var vf = "[object Map]";
    function bf(i) {
        return Ht(i) && ot(i) == vf
    }
    var _o = di && di.isMap
      , yf = _o ? La(_o) : bf
      , Ef = "[object Set]";
    function wf(i) {
        return Ht(i) && ot(i) == Ef
    }
    var Co = di && di.isSet
      , _f = Co ? La(Co) : wf
      , Cf = 1
      , Af = 2
      , Sf = 4
      , Gl = "[object Arguments]"
      , Tf = "[object Array]"
      , xf = "[object Boolean]"
      , Nf = "[object Date]"
      , If = "[object Error]"
      , Yl = "[object Function]"
      , Lf = "[object GeneratorFunction]"
      , Of = "[object Map]"
      , Df = "[object Number]"
      , Zl = "[object Object]"
      , Mf = "[object RegExp]"
      , kf = "[object Set]"
      , qf = "[object String]"
      , Rf = "[object Symbol]"
      , Ff = "[object WeakMap]"
      , Pf = "[object ArrayBuffer]"
      , Bf = "[object DataView]"
      , jf = "[object Float32Array]"
      , Hf = "[object Float64Array]"
      , Uf = "[object Int8Array]"
      , $f = "[object Int16Array]"
      , zf = "[object Int32Array]"
      , Kf = "[object Uint8Array]"
      , Vf = "[object Uint8ClampedArray]"
      , Wf = "[object Uint16Array]"
      , Gf = "[object Uint32Array]"
      , se = {};
    se[Gl] = se[Tf] = se[Pf] = se[Bf] = se[xf] = se[Nf] = se[jf] = se[Hf] = se[Uf] = se[$f] = se[zf] = se[Of] = se[Df] = se[Zl] = se[Mf] = se[kf] = se[qf] = se[Rf] = se[Kf] = se[Vf] = se[Wf] = se[Gf] = !0;
    se[If] = se[Yl] = se[Ff] = !1;
    function Dr(i, t, e, n, r, s) {
        var a, o = t & Cf, l = t & Af, u = t & Sf;
        if (a !== void 0)
            return a;
        if (!dn(i))
            return i;
        var h = Dn(i);
        if (h) {
            if (a = Kd(i),
            !o)
                return Ll(i, a)
        } else {
            var f = ot(i)
              , d = f == Yl || f == Lf;
            if (Yi(i))
                return Ul(i, o);
            if (f == Zl || f == Gl || d && !r) {
                if (a = l || d ? {} : Wl(i),
                !o)
                    return l ? qd(i, Nd(a, i)) : Md(i, xd(a, i))
            } else {
                if (!se[f])
                    return r ? i : {};
                a = gf(i, f, o)
            }
        }
        s || (s = new Tt);
        var g = s.get(i);
        if (g)
            return g;
        s.set(i, a),
        _f(i) ? i.forEach(function(_) {
            a.add(Dr(_, t, e, _, i, s))
        }) : yf(i) && i.forEach(function(_, C) {
            a.set(C, Dr(_, t, e, C, i, s))
        });
        var b = u ? l ? Rd : Gs : l ? ar : Da
          , E = h ? void 0 : b(i);
        return Ku(E || i, function(_, C) {
            E && (C = _,
            _ = i[C]),
            Dl(a, C, Dr(_, t, e, C, i, s))
        }),
        a
    }
    var Yf = 1
      , Zf = 4;
    function oi(i) {
        return Dr(i, Yf | Zf)
    }
    var Xf = "__lodash_hash_undefined__";
    function Qf(i) {
        return this.__data__.set(i, Xf),
        this
    }
    function Jf(i) {
        return this.__data__.has(i)
    }
    function Fr(i) {
        var t = -1
          , e = i == null ? 0 : i.length;
        for (this.__data__ = new Fn; ++t < e; )
            this.add(i[t])
    }
    Fr.prototype.add = Fr.prototype.push = Qf;
    Fr.prototype.has = Jf;
    function ep(i, t) {
        for (var e = -1, n = i == null ? 0 : i.length; ++e < n; )
            if (t(i[e], e, i))
                return !0;
        return !1
    }
    function tp(i, t) {
        return i.has(t)
    }
    var np = 1
      , ip = 2;
    function Xl(i, t, e, n, r, s) {
        var a = e & np
          , o = i.length
          , l = t.length;
        if (o != l && !(a && l > o))
            return !1;
        var u = s.get(i)
          , h = s.get(t);
        if (u && h)
            return u == t && h == i;
        var f = -1
          , d = !0
          , g = e & ip ? new Fr : void 0;
        for (s.set(i, t),
        s.set(t, i); ++f < o; ) {
            var b = i[f]
              , E = t[f];
            if (n)
                var _ = a ? n(E, b, f, t, i, s) : n(b, E, f, i, t, s);
            if (_ !== void 0) {
                if (_)
                    continue;
                d = !1;
                break
            }
            if (g) {
                if (!ep(t, function(C, T) {
                    if (!tp(g, T) && (b === C || r(b, C, e, n, s)))
                        return g.push(T)
                })) {
                    d = !1;
                    break
                }
            } else if (!(b === E || r(b, E, e, n, s))) {
                d = !1;
                break
            }
        }
        return s.delete(i),
        s.delete(t),
        d
    }
    function rp(i) {
        var t = -1
          , e = Array(i.size);
        return i.forEach(function(n, r) {
            e[++t] = [r, n]
        }),
        e
    }
    function sp(i) {
        var t = -1
          , e = Array(i.size);
        return i.forEach(function(n) {
            e[++t] = n
        }),
        e
    }
    var ap = 1
      , op = 2
      , lp = "[object Boolean]"
      , cp = "[object Date]"
      , up = "[object Error]"
      , hp = "[object Map]"
      , dp = "[object Number]"
      , fp = "[object RegExp]"
      , pp = "[object Set]"
      , mp = "[object String]"
      , gp = "[object Symbol]"
      , vp = "[object ArrayBuffer]"
      , bp = "[object DataView]"
      , Ao = hn ? hn.prototype : void 0
      , xs = Ao ? Ao.valueOf : void 0;
    function yp(i, t, e, n, r, s, a) {
        switch (e) {
        case bp:
            if (i.byteLength != t.byteLength || i.byteOffset != t.byteOffset)
                return !1;
            i = i.buffer,
            t = t.buffer;
        case vp:
            return !(i.byteLength != t.byteLength || !s(new Rr(i), new Rr(t)));
        case lp:
        case cp:
        case dp:
            return rr(+i, +t);
        case up:
            return i.name == t.name && i.message == t.message;
        case fp:
        case mp:
            return i == t + "";
        case hp:
            var o = rp;
        case pp:
            var l = n & ap;
            if (o || (o = sp),
            i.size != t.size && !l)
                return !1;
            var u = a.get(i);
            if (u)
                return u == t;
            n |= op,
            a.set(i, t);
            var h = Xl(o(i), o(t), n, r, s, a);
            return a.delete(i),
            h;
        case gp:
            if (xs)
                return xs.call(i) == xs.call(t)
        }
        return !1
    }
    var Ep = 1
      , wp = Object.prototype
      , _p = wp.hasOwnProperty;
    function Cp(i, t, e, n, r, s) {
        var a = e & Ep
          , o = Gs(i)
          , l = o.length
          , u = Gs(t)
          , h = u.length;
        if (l != h && !a)
            return !1;
        for (var f = l; f--; ) {
            var d = o[f];
            if (!(a ? d in t : _p.call(t, d)))
                return !1
        }
        var g = s.get(i)
          , b = s.get(t);
        if (g && b)
            return g == t && b == i;
        var E = !0;
        s.set(i, t),
        s.set(t, i);
        for (var _ = a; ++f < l; ) {
            d = o[f];
            var C = i[d]
              , T = t[d];
            if (n)
                var N = a ? n(T, C, d, t, i, s) : n(C, T, d, i, t, s);
            if (!(N === void 0 ? C === T || r(C, T, e, n, s) : N)) {
                E = !1;
                break
            }
            _ || (_ = d == "constructor")
        }
        if (E && !_) {
            var O = i.constructor
              , D = t.constructor;
            O != D && "constructor"in i && "constructor"in t && !(typeof O == "function" && O instanceof O && typeof D == "function" && D instanceof D) && (E = !1)
        }
        return s.delete(i),
        s.delete(t),
        E
    }
    var Ap = 1
      , So = "[object Arguments]"
      , To = "[object Array]"
      , _r = "[object Object]"
      , Sp = Object.prototype
      , xo = Sp.hasOwnProperty;
    function Tp(i, t, e, n, r, s) {
        var a = Dn(i)
          , o = Dn(t)
          , l = a ? To : ot(i)
          , u = o ? To : ot(t);
        l = l == So ? _r : l,
        u = u == So ? _r : u;
        var h = l == _r
          , f = u == _r
          , d = l == u;
        if (d && Yi(i)) {
            if (!Yi(t))
                return !1;
            a = !0,
            h = !1
        }
        if (d && !h)
            return s || (s = new Tt),
            a || Oa(i) ? Xl(i, t, e, n, r, s) : yp(i, t, l, e, n, r, s);
        if (!(e & Ap)) {
            var g = h && xo.call(i, "__wrapped__")
              , b = f && xo.call(t, "__wrapped__");
            if (g || b) {
                var E = g ? i.value() : i
                  , _ = b ? t.value() : t;
                return s || (s = new Tt),
                r(E, _, e, n, s)
            }
        }
        return d ? (s || (s = new Tt),
        Cp(i, t, e, n, r, s)) : !1
    }
    function Ql(i, t, e, n, r) {
        return i === t ? !0 : i == null || t == null || !Ht(i) && !Ht(t) ? i !== i && t !== t : Tp(i, t, e, n, Ql, r)
    }
    function xp(i) {
        return function(t, e, n) {
            for (var r = -1, s = Object(t), a = n(t), o = a.length; o--; ) {
                var l = a[++r];
                if (e(s[l], l, s) === !1)
                    break
            }
            return t
        }
    }
    var Np = xp();
    function Qs(i, t, e) {
        (e !== void 0 && !rr(i[t], e) || e === void 0 && !(t in i)) && Na(i, t, e)
    }
    function Ip(i) {
        return Ht(i) && $r(i)
    }
    function Js(i, t) {
        if (!(t === "constructor" && typeof i[t] == "function") && t != "__proto__")
            return i[t]
    }
    function Lp(i) {
        return sr(i, ar(i))
    }
    function Op(i, t, e, n, r, s, a) {
        var o = Js(i, e)
          , l = Js(t, e)
          , u = a.get(l);
        if (u) {
            Qs(i, e, u);
            return
        }
        var h = s ? s(o, l, e + "", i, t, a) : void 0
          , f = h === void 0;
        if (f) {
            var d = Dn(l)
              , g = !d && Yi(l)
              , b = !d && !g && Oa(l);
            h = l,
            d || g || b ? Dn(o) ? h = o : Ip(o) ? h = Ll(o) : g ? (f = !1,
            h = Ul(l, !0)) : b ? (f = !1,
            h = Vl(l, !0)) : h = [] : Ed(l) || Ws(l) ? (h = o,
            Ws(o) ? h = Lp(o) : (!dn(o) || xa(o)) && (h = Wl(l))) : f = !1
        }
        f && (a.set(l, h),
        r(h, l, n, s, a),
        a.delete(l)),
        Qs(i, e, h)
    }
    function Jl(i, t, e, n, r) {
        i !== t && Np(t, function(s, a) {
            if (r || (r = new Tt),
            dn(s))
                Op(i, t, a, e, Jl, n, r);
            else {
                var o = n ? n(Js(i, a), s, a + "", i, t, r) : void 0;
                o === void 0 && (o = s),
                Qs(i, a, o)
            }
        }, ar)
    }
    function Ra(i, t) {
        return Ql(i, t)
    }
    var un = eh(function(i, t, e) {
        Jl(i, t, e)
    })
      , B = (i => (i[i.TYPE = 3] = "TYPE",
    i[i.LEVEL = 12] = "LEVEL",
    i[i.ATTRIBUTE = 13] = "ATTRIBUTE",
    i[i.BLOT = 14] = "BLOT",
    i[i.INLINE = 7] = "INLINE",
    i[i.BLOCK = 11] = "BLOCK",
    i[i.BLOCK_BLOT = 10] = "BLOCK_BLOT",
    i[i.INLINE_BLOT = 6] = "INLINE_BLOT",
    i[i.BLOCK_ATTRIBUTE = 9] = "BLOCK_ATTRIBUTE",
    i[i.INLINE_ATTRIBUTE = 5] = "INLINE_ATTRIBUTE",
    i[i.ANY = 15] = "ANY",
    i))(B || {});
    class Nt {
        constructor(t, e, n={}) {
            this.attrName = t,
            this.keyName = e;
            const r = B.TYPE & B.ATTRIBUTE;
            this.scope = n.scope != null ? n.scope & B.LEVEL | r : B.ATTRIBUTE,
            n.whitelist != null && (this.whitelist = n.whitelist)
        }
        static keys(t) {
            return Array.from(t.attributes).map(e => e.name)
        }
        add(t, e) {
            return this.canAdd(t, e) ? (t.setAttribute(this.keyName, e),
            !0) : !1
        }
        canAdd(t, e) {
            return this.whitelist == null ? !0 : typeof e == "string" ? this.whitelist.indexOf(e.replace(/["']/g, "")) > -1 : this.whitelist.indexOf(e) > -1
        }
        remove(t) {
            t.removeAttribute(this.keyName)
        }
        value(t) {
            const e = t.getAttribute(this.keyName);
            return this.canAdd(t, e) && e ? e : ""
        }
    }
    class li extends Error {
        constructor(t) {
            t = "[Parchment] " + t,
            super(t),
            this.message = t,
            this.name = this.constructor.name
        }
    }
    const ec = class ea {
        constructor() {
            this.attributes = {},
            this.classes = {},
            this.tags = {},
            this.types = {}
        }
        static find(t, e=!1) {
            if (t == null)
                return null;
            if (this.blots.has(t))
                return this.blots.get(t) || null;
            if (e) {
                let n = null;
                try {
                    n = t.parentNode
                } catch {
                    return null
                }
                return this.find(n, e)
            }
            return null
        }
        create(t, e, n) {
            const r = this.query(e);
            if (r == null)
                throw new li(`Unable to create ${e} blot`);
            const s = r
              , a = e instanceof Node || e.nodeType === Node.TEXT_NODE ? e : s.create(n)
              , o = new s(t,a,n);
            return ea.blots.set(o.domNode, o),
            o
        }
        find(t, e=!1) {
            return ea.find(t, e)
        }
        query(t, e=B.ANY) {
            let n;
            return typeof t == "string" ? n = this.types[t] || this.attributes[t] : t instanceof Text || t.nodeType === Node.TEXT_NODE ? n = this.types.text : typeof t == "number" ? t & B.LEVEL & B.BLOCK ? n = this.types.block : t & B.LEVEL & B.INLINE && (n = this.types.inline) : t instanceof Element && ((t.getAttribute("class") || "").split(/\s+/).some(r => (n = this.classes[r],
            !!n)),
            n = n || this.tags[t.tagName]),
            n == null ? null : "scope"in n && e & B.LEVEL & n.scope && e & B.TYPE & n.scope ? n : null
        }
        register(...t) {
            return t.map(e => {
                const n = "blotName"in e
                  , r = "attrName"in e;
                if (!n && !r)
                    throw new li("Invalid definition");
                if (n && e.blotName === "abstract")
                    throw new li("Cannot register abstract class");
                const s = n ? e.blotName : r ? e.attrName : void 0;
                return this.types[s] = e,
                r ? typeof e.keyName == "string" && (this.attributes[e.keyName] = e) : n && (e.className && (this.classes[e.className] = e),
                e.tagName && (Array.isArray(e.tagName) ? e.tagName = e.tagName.map(a => a.toUpperCase()) : e.tagName = e.tagName.toUpperCase(),
                (Array.isArray(e.tagName) ? e.tagName : [e.tagName]).forEach(a => {
                    (this.tags[a] == null || e.className == null) && (this.tags[a] = e)
                }
                ))),
                e
            }
            )
        }
    }
    ;
    ec.blots = new WeakMap;
    let fi = ec;
    function No(i, t) {
        return (i.getAttribute("class") || "").split(/\s+/).filter(e => e.indexOf(`${t}-`) === 0)
    }
    class Dp extends Nt {
        static keys(t) {
            return (t.getAttribute("class") || "").split(/\s+/).map(e => e.split("-").slice(0, -1).join("-"))
        }
        add(t, e) {
            return this.canAdd(t, e) ? (this.remove(t),
            t.classList.add(`${this.keyName}-${e}`),
            !0) : !1
        }
        remove(t) {
            No(t, this.keyName).forEach(e => {
                t.classList.remove(e)
            }
            ),
            t.classList.length === 0 && t.removeAttribute("class")
        }
        value(t) {
            const e = (No(t, this.keyName)[0] || "").slice(this.keyName.length + 1);
            return this.canAdd(t, e) ? e : ""
        }
    }
    const ht = Dp;
    function Ns(i) {
        const t = i.split("-")
          , e = t.slice(1).map(n => n[0].toUpperCase() + n.slice(1)).join("");
        return t[0] + e
    }
    class Mp extends Nt {
        static keys(t) {
            return (t.getAttribute("style") || "").split(";").map(e => e.split(":")[0].trim())
        }
        add(t, e) {
            return this.canAdd(t, e) ? (t.style[Ns(this.keyName)] = e,
            !0) : !1
        }
        remove(t) {
            t.style[Ns(this.keyName)] = "",
            t.getAttribute("style") || t.removeAttribute("style")
        }
        value(t) {
            const e = t.style[Ns(this.keyName)];
            return this.canAdd(t, e) ? e : ""
        }
    }
    const fn = Mp;
    class kp {
        constructor(t) {
            this.attributes = {},
            this.domNode = t,
            this.build()
        }
        attribute(t, e) {
            e ? t.add(this.domNode, e) && (t.value(this.domNode) != null ? this.attributes[t.attrName] = t : delete this.attributes[t.attrName]) : (t.remove(this.domNode),
            delete this.attributes[t.attrName])
        }
        build() {
            this.attributes = {};
            const t = fi.find(this.domNode);
            if (t == null)
                return;
            const e = Nt.keys(this.domNode)
              , n = ht.keys(this.domNode)
              , r = fn.keys(this.domNode);
            e.concat(n).concat(r).forEach(s => {
                const a = t.scroll.query(s, B.ATTRIBUTE);
                a instanceof Nt && (this.attributes[a.attrName] = a)
            }
            )
        }
        copy(t) {
            Object.keys(this.attributes).forEach(e => {
                const n = this.attributes[e].value(this.domNode);
                t.format(e, n)
            }
            )
        }
        move(t) {
            this.copy(t),
            Object.keys(this.attributes).forEach(e => {
                this.attributes[e].remove(this.domNode)
            }
            ),
            this.attributes = {}
        }
        values() {
            return Object.keys(this.attributes).reduce( (t, e) => (t[e] = this.attributes[e].value(this.domNode),
            t), {})
        }
    }
    const Vr = kp
      , tc = class {
        constructor(t, e) {
            this.scroll = t,
            this.domNode = e,
            fi.blots.set(e, this),
            this.prev = null,
            this.next = null
        }
        static create(t) {
            if (this.tagName == null)
                throw new li("Blot definition missing tagName");
            let e, n;
            return Array.isArray(this.tagName) ? (typeof t == "string" ? (n = t.toUpperCase(),
            parseInt(n, 10).toString() === n && (n = parseInt(n, 10))) : typeof t == "number" && (n = t),
            typeof n == "number" ? e = document.createElement(this.tagName[n - 1]) : n && this.tagName.indexOf(n) > -1 ? e = document.createElement(n) : e = document.createElement(this.tagName[0])) : e = document.createElement(this.tagName),
            this.className && e.classList.add(this.className),
            e
        }
        get statics() {
            return this.constructor
        }
        attach() {}
        clone() {
            const t = this.domNode.cloneNode(!1);
            return this.scroll.create(t)
        }
        detach() {
            this.parent != null && this.parent.removeChild(this),
            fi.blots.delete(this.domNode)
        }
        deleteAt(t, e) {
            this.isolate(t, e).remove()
        }
        formatAt(t, e, n, r) {
            const s = this.isolate(t, e);
            if (this.scroll.query(n, B.BLOT) != null && r)
                s.wrap(n, r);
            else if (this.scroll.query(n, B.ATTRIBUTE) != null) {
                const a = this.scroll.create(this.statics.scope);
                s.wrap(a),
                a.format(n, r)
            }
        }
        insertAt(t, e, n) {
            const r = n == null ? this.scroll.create("text", e) : this.scroll.create(e, n)
              , s = this.split(t);
            this.parent.insertBefore(r, s || void 0)
        }
        isolate(t, e) {
            const n = this.split(t);
            if (n == null)
                throw new Error("Attempt to isolate at end");
            return n.split(e),
            n
        }
        length() {
            return 1
        }
        offset(t=this.parent) {
            return this.parent == null || this === t ? 0 : this.parent.children.offset(this) + this.parent.offset(t)
        }
        optimize(t) {
            this.statics.requiredContainer && !(this.parent instanceof this.statics.requiredContainer) && this.wrap(this.statics.requiredContainer.blotName)
        }
        remove() {
            this.domNode.parentNode != null && this.domNode.parentNode.removeChild(this.domNode),
            this.detach()
        }
        replaceWith(t, e) {
            const n = typeof t == "string" ? this.scroll.create(t, e) : t;
            return this.parent != null && (this.parent.insertBefore(n, this.next || void 0),
            this.remove()),
            n
        }
        split(t, e) {
            return t === 0 ? this : this.next
        }
        update(t, e) {}
        wrap(t, e) {
            const n = typeof t == "string" ? this.scroll.create(t, e) : t;
            if (this.parent != null && this.parent.insertBefore(n, this.next || void 0),
            typeof n.appendChild != "function")
                throw new li(`Cannot wrap ${t}`);
            return n.appendChild(this),
            n
        }
    }
    ;
    tc.blotName = "abstract";
    let nc = tc;
    const ic = class extends nc {
        static value(t) {
            return !0
        }
        index(t, e) {
            return this.domNode === t || this.domNode.compareDocumentPosition(t) & Node.DOCUMENT_POSITION_CONTAINED_BY ? Math.min(e, 1) : -1
        }
        position(t, e) {
            let n = Array.from(this.parent.domNode.childNodes).indexOf(this.domNode);
            return t > 0 && (n += 1),
            [this.parent.domNode, n]
        }
        value() {
            return {
                [this.statics.blotName]: this.statics.value(this.domNode) || !0
            }
        }
    }
    ;
    ic.scope = B.INLINE_BLOT;
    let qp = ic;
    const xe = qp;
    class Rp {
        constructor() {
            this.head = null,
            this.tail = null,
            this.length = 0
        }
        append(...t) {
            if (this.insertBefore(t[0], null),
            t.length > 1) {
                const e = t.slice(1);
                this.append(...e)
            }
        }
        at(t) {
            const e = this.iterator();
            let n = e();
            for (; n && t > 0; )
                t -= 1,
                n = e();
            return n
        }
        contains(t) {
            const e = this.iterator();
            let n = e();
            for (; n; ) {
                if (n === t)
                    return !0;
                n = e()
            }
            return !1
        }
        indexOf(t) {
            const e = this.iterator();
            let n = e()
              , r = 0;
            for (; n; ) {
                if (n === t)
                    return r;
                r += 1,
                n = e()
            }
            return -1
        }
        insertBefore(t, e) {
            t != null && (this.remove(t),
            t.next = e,
            e != null ? (t.prev = e.prev,
            e.prev != null && (e.prev.next = t),
            e.prev = t,
            e === this.head && (this.head = t)) : this.tail != null ? (this.tail.next = t,
            t.prev = this.tail,
            this.tail = t) : (t.prev = null,
            this.head = this.tail = t),
            this.length += 1)
        }
        offset(t) {
            let e = 0
              , n = this.head;
            for (; n != null; ) {
                if (n === t)
                    return e;
                e += n.length(),
                n = n.next
            }
            return -1
        }
        remove(t) {
            this.contains(t) && (t.prev != null && (t.prev.next = t.next),
            t.next != null && (t.next.prev = t.prev),
            t === this.head && (this.head = t.next),
            t === this.tail && (this.tail = t.prev),
            this.length -= 1)
        }
        iterator(t=this.head) {
            return () => {
                const e = t;
                return t != null && (t = t.next),
                e
            }
        }
        find(t, e=!1) {
            const n = this.iterator();
            let r = n();
            for (; r; ) {
                const s = r.length();
                if (t < s || e && t === s && (r.next == null || r.next.length() !== 0))
                    return [r, t];
                t -= s,
                r = n()
            }
            return [null, 0]
        }
        forEach(t) {
            const e = this.iterator();
            let n = e();
            for (; n; )
                t(n),
                n = e()
        }
        forEachAt(t, e, n) {
            if (e <= 0)
                return;
            const [r,s] = this.find(t);
            let a = t - s;
            const o = this.iterator(r);
            let l = o();
            for (; l && a < t + e; ) {
                const u = l.length();
                t > a ? n(l, t - a, Math.min(e, a + u - t)) : n(l, 0, Math.min(u, t + e - a)),
                a += u,
                l = o()
            }
        }
        map(t) {
            return this.reduce( (e, n) => (e.push(t(n)),
            e), [])
        }
        reduce(t, e) {
            const n = this.iterator();
            let r = n();
            for (; r; )
                e = t(e, r),
                r = n();
            return e
        }
    }
    function Io(i, t) {
        const e = t.find(i);
        if (e)
            return e;
        try {
            return t.create(i)
        } catch {
            const n = t.create(B.INLINE);
            return Array.from(i.childNodes).forEach(r => {
                n.domNode.appendChild(r)
            }
            ),
            i.parentNode && i.parentNode.replaceChild(n.domNode, i),
            n.attach(),
            n
        }
    }
    const rc = class an extends nc {
        constructor(t, e) {
            super(t, e),
            this.uiNode = null,
            this.build()
        }
        appendChild(t) {
            this.insertBefore(t)
        }
        attach() {
            super.attach(),
            this.children.forEach(t => {
                t.attach()
            }
            )
        }
        attachUI(t) {
            this.uiNode != null && this.uiNode.remove(),
            this.uiNode = t,
            an.uiClass && this.uiNode.classList.add(an.uiClass),
            this.uiNode.setAttribute("contenteditable", "false"),
            this.domNode.insertBefore(this.uiNode, this.domNode.firstChild)
        }
        build() {
            this.children = new Rp,
            Array.from(this.domNode.childNodes).filter(t => t !== this.uiNode).reverse().forEach(t => {
                try {
                    const e = Io(t, this.scroll);
                    this.insertBefore(e, this.children.head || void 0)
                } catch (e) {
                    if (e instanceof li)
                        return;
                    throw e
                }
            }
            )
        }
        deleteAt(t, e) {
            if (t === 0 && e === this.length())
                return this.remove();
            this.children.forEachAt(t, e, (n, r, s) => {
                n.deleteAt(r, s)
            }
            )
        }
        descendant(t, e=0) {
            const [n,r] = this.children.find(e);
            return t.blotName == null && t(n) || t.blotName != null && n instanceof t ? [n, r] : n instanceof an ? n.descendant(t, r) : [null, -1]
        }
        descendants(t, e=0, n=Number.MAX_VALUE) {
            let r = []
              , s = n;
            return this.children.forEachAt(e, n, (a, o, l) => {
                (t.blotName == null && t(a) || t.blotName != null && a instanceof t) && r.push(a),
                a instanceof an && (r = r.concat(a.descendants(t, o, s))),
                s -= l
            }
            ),
            r
        }
        detach() {
            this.children.forEach(t => {
                t.detach()
            }
            ),
            super.detach()
        }
        enforceAllowedChildren() {
            let t = !1;
            this.children.forEach(e => {
                t || this.statics.allowedChildren.some(n => e instanceof n) || (e.statics.scope === B.BLOCK_BLOT ? (e.next != null && this.splitAfter(e),
                e.prev != null && this.splitAfter(e.prev),
                e.parent.unwrap(),
                t = !0) : e instanceof an ? e.unwrap() : e.remove())
            }
            )
        }
        formatAt(t, e, n, r) {
            this.children.forEachAt(t, e, (s, a, o) => {
                s.formatAt(a, o, n, r)
            }
            )
        }
        insertAt(t, e, n) {
            const [r,s] = this.children.find(t);
            if (r)
                r.insertAt(s, e, n);
            else {
                const a = n == null ? this.scroll.create("text", e) : this.scroll.create(e, n);
                this.appendChild(a)
            }
        }
        insertBefore(t, e) {
            t.parent != null && t.parent.children.remove(t);
            let n = null;
            this.children.insertBefore(t, e || null),
            t.parent = this,
            e != null && (n = e.domNode),
            (this.domNode.parentNode !== t.domNode || this.domNode.nextSibling !== n) && this.domNode.insertBefore(t.domNode, n),
            t.attach()
        }
        length() {
            return this.children.reduce( (t, e) => t + e.length(), 0)
        }
        moveChildren(t, e) {
            this.children.forEach(n => {
                t.insertBefore(n, e)
            }
            )
        }
        optimize(t) {
            if (super.optimize(t),
            this.enforceAllowedChildren(),
            this.uiNode != null && this.uiNode !== this.domNode.firstChild && this.domNode.insertBefore(this.uiNode, this.domNode.firstChild),
            this.children.length === 0)
                if (this.statics.defaultChild != null) {
                    const e = this.scroll.create(this.statics.defaultChild.blotName);
                    this.appendChild(e)
                } else
                    this.remove()
        }
        path(t, e=!1) {
            const [n,r] = this.children.find(t, e)
              , s = [[this, t]];
            return n instanceof an ? s.concat(n.path(r, e)) : (n != null && s.push([n, r]),
            s)
        }
        removeChild(t) {
            this.children.remove(t)
        }
        replaceWith(t, e) {
            const n = typeof t == "string" ? this.scroll.create(t, e) : t;
            return n instanceof an && this.moveChildren(n),
            super.replaceWith(n)
        }
        split(t, e=!1) {
            if (!e) {
                if (t === 0)
                    return this;
                if (t === this.length())
                    return this.next
            }
            const n = this.clone();
            return this.parent && this.parent.insertBefore(n, this.next || void 0),
            this.children.forEachAt(t, this.length(), (r, s, a) => {
                const o = r.split(s, e);
                o != null && n.appendChild(o)
            }
            ),
            n
        }
        splitAfter(t) {
            const e = this.clone();
            for (; t.next != null; )
                e.appendChild(t.next);
            return this.parent && this.parent.insertBefore(e, this.next || void 0),
            e
        }
        unwrap() {
            this.parent && this.moveChildren(this.parent, this.next || void 0),
            this.remove()
        }
        update(t, e) {
            const n = []
              , r = [];
            t.forEach(s => {
                s.target === this.domNode && s.type === "childList" && (n.push(...s.addedNodes),
                r.push(...s.removedNodes))
            }
            ),
            r.forEach(s => {
                if (s.parentNode != null && s.tagName !== "IFRAME" && document.body.compareDocumentPosition(s) & Node.DOCUMENT_POSITION_CONTAINED_BY)
                    return;
                const a = this.scroll.find(s);
                a != null && (a.domNode.parentNode == null || a.domNode.parentNode === this.domNode) && a.detach()
            }
            ),
            n.filter(s => s.parentNode === this.domNode && s !== this.uiNode).sort( (s, a) => s === a ? 0 : s.compareDocumentPosition(a) & Node.DOCUMENT_POSITION_FOLLOWING ? 1 : -1).forEach(s => {
                let a = null;
                s.nextSibling != null && (a = this.scroll.find(s.nextSibling));
                const o = Io(s, this.scroll);
                (o.next !== a || o.next == null) && (o.parent != null && o.parent.removeChild(this),
                this.insertBefore(o, a || void 0))
            }
            ),
            this.enforceAllowedChildren()
        }
    }
    ;
    rc.uiClass = "";
    let Fp = rc;
    const ct = Fp;
    function Pp(i, t) {
        if (Object.keys(i).length !== Object.keys(t).length)
            return !1;
        for (const e in i)
            if (i[e] !== t[e])
                return !1;
        return !0
    }
    const Jn = class ei extends ct {
        static create(t) {
            return super.create(t)
        }
        static formats(t, e) {
            const n = e.query(ei.blotName);
            if (!(n != null && t.tagName === n.tagName)) {
                if (typeof this.tagName == "string")
                    return !0;
                if (Array.isArray(this.tagName))
                    return t.tagName.toLowerCase()
            }
        }
        constructor(t, e) {
            super(t, e),
            this.attributes = new Vr(this.domNode)
        }
        format(t, e) {
            if (t === this.statics.blotName && !e)
                this.children.forEach(n => {
                    n instanceof ei || (n = n.wrap(ei.blotName, !0)),
                    this.attributes.copy(n)
                }
                ),
                this.unwrap();
            else {
                const n = this.scroll.query(t, B.INLINE);
                if (n == null)
                    return;
                n instanceof Nt ? this.attributes.attribute(n, e) : e && (t !== this.statics.blotName || this.formats()[t] !== e) && this.replaceWith(t, e)
            }
        }
        formats() {
            const t = this.attributes.values()
              , e = this.statics.formats(this.domNode, this.scroll);
            return e != null && (t[this.statics.blotName] = e),
            t
        }
        formatAt(t, e, n, r) {
            this.formats()[n] != null || this.scroll.query(n, B.ATTRIBUTE) ? this.isolate(t, e).format(n, r) : super.formatAt(t, e, n, r)
        }
        optimize(t) {
            super.optimize(t);
            const e = this.formats();
            if (Object.keys(e).length === 0)
                return this.unwrap();
            const n = this.next;
            n instanceof ei && n.prev === this && Pp(e, n.formats()) && (n.moveChildren(this),
            n.remove())
        }
        replaceWith(t, e) {
            const n = super.replaceWith(t, e);
            return this.attributes.copy(n),
            n
        }
        update(t, e) {
            super.update(t, e),
            t.some(n => n.target === this.domNode && n.type === "attributes") && this.attributes.build()
        }
        wrap(t, e) {
            const n = super.wrap(t, e);
            return n instanceof ei && this.attributes.move(n),
            n
        }
    }
    ;
    Jn.allowedChildren = [Jn, xe],
    Jn.blotName = "inline",
    Jn.scope = B.INLINE_BLOT,
    Jn.tagName = "SPAN";
    let Bp = Jn;
    const Fa = Bp
      , ti = class ta extends ct {
        static create(t) {
            return super.create(t)
        }
        static formats(t, e) {
            const n = e.query(ta.blotName);
            if (!(n != null && t.tagName === n.tagName)) {
                if (typeof this.tagName == "string")
                    return !0;
                if (Array.isArray(this.tagName))
                    return t.tagName.toLowerCase()
            }
        }
        constructor(t, e) {
            super(t, e),
            this.attributes = new Vr(this.domNode)
        }
        format(t, e) {
            const n = this.scroll.query(t, B.BLOCK);
            n != null && (n instanceof Nt ? this.attributes.attribute(n, e) : t === this.statics.blotName && !e ? this.replaceWith(ta.blotName) : e && (t !== this.statics.blotName || this.formats()[t] !== e) && this.replaceWith(t, e))
        }
        formats() {
            const t = this.attributes.values()
              , e = this.statics.formats(this.domNode, this.scroll);
            return e != null && (t[this.statics.blotName] = e),
            t
        }
        formatAt(t, e, n, r) {
            this.scroll.query(n, B.BLOCK) != null ? this.format(n, r) : super.formatAt(t, e, n, r)
        }
        insertAt(t, e, n) {
            if (n == null || this.scroll.query(e, B.INLINE) != null)
                super.insertAt(t, e, n);
            else {
                const r = this.split(t);
                if (r != null) {
                    const s = this.scroll.create(e, n);
                    r.parent.insertBefore(s, r)
                } else
                    throw new Error("Attempt to insertAt after block boundaries")
            }
        }
        replaceWith(t, e) {
            const n = super.replaceWith(t, e);
            return this.attributes.copy(n),
            n
        }
        update(t, e) {
            super.update(t, e),
            t.some(n => n.target === this.domNode && n.type === "attributes") && this.attributes.build()
        }
    }
    ;
    ti.blotName = "block",
    ti.scope = B.BLOCK_BLOT,
    ti.tagName = "P",
    ti.allowedChildren = [Fa, ti, xe];
    let jp = ti;
    const Qi = jp
      , na = class extends ct {
        checkMerge() {
            return this.next !== null && this.next.statics.blotName === this.statics.blotName
        }
        deleteAt(t, e) {
            super.deleteAt(t, e),
            this.enforceAllowedChildren()
        }
        formatAt(t, e, n, r) {
            super.formatAt(t, e, n, r),
            this.enforceAllowedChildren()
        }
        insertAt(t, e, n) {
            super.insertAt(t, e, n),
            this.enforceAllowedChildren()
        }
        optimize(t) {
            super.optimize(t),
            this.children.length > 0 && this.next != null && this.checkMerge() && (this.next.moveChildren(this),
            this.next.remove())
        }
    }
    ;
    na.blotName = "container",
    na.scope = B.BLOCK_BLOT;
    let Hp = na;
    const Wr = Hp;
    class Up extends xe {
        static formats(t, e) {}
        format(t, e) {
            super.formatAt(0, this.length(), t, e)
        }
        formatAt(t, e, n, r) {
            t === 0 && e === this.length() ? this.format(n, r) : super.formatAt(t, e, n, r)
        }
        formats() {
            return this.statics.formats(this.domNode, this.scroll)
        }
    }
    const Ge = Up
      , $p = {
        attributes: !0,
        characterData: !0,
        characterDataOldValue: !0,
        childList: !0,
        subtree: !0
    }
      , zp = 100
      , ni = class extends ct {
        constructor(t, e) {
            super(null, e),
            this.registry = t,
            this.scroll = this,
            this.build(),
            this.observer = new MutationObserver(n => {
                this.update(n)
            }
            ),
            this.observer.observe(this.domNode, $p),
            this.attach()
        }
        create(t, e) {
            return this.registry.create(this, t, e)
        }
        find(t, e=!1) {
            const n = this.registry.find(t, e);
            return n ? n.scroll === this ? n : e ? this.find(n.scroll.domNode.parentNode, !0) : null : null
        }
        query(t, e=B.ANY) {
            return this.registry.query(t, e)
        }
        register(...t) {
            return this.registry.register(...t)
        }
        build() {
            this.scroll != null && super.build()
        }
        detach() {
            super.detach(),
            this.observer.disconnect()
        }
        deleteAt(t, e) {
            this.update(),
            t === 0 && e === this.length() ? this.children.forEach(n => {
                n.remove()
            }
            ) : super.deleteAt(t, e)
        }
        formatAt(t, e, n, r) {
            this.update(),
            super.formatAt(t, e, n, r)
        }
        insertAt(t, e, n) {
            this.update(),
            super.insertAt(t, e, n)
        }
        optimize(t=[], e={}) {
            super.optimize(e);
            const n = e.mutationsMap || new WeakMap;
            let r = Array.from(this.observer.takeRecords());
            for (; r.length > 0; )
                t.push(r.pop());
            const s = (l, u=!0) => {
                l == null || l === this || l.domNode.parentNode != null && (n.has(l.domNode) || n.set(l.domNode, []),
                u && s(l.parent))
            }
              , a = l => {
                n.has(l.domNode) && (l instanceof ct && l.children.forEach(a),
                n.delete(l.domNode),
                l.optimize(e))
            }
            ;
            let o = t;
            for (let l = 0; o.length > 0; l += 1) {
                if (l >= zp)
                    throw new Error("[Parchment] Maximum optimize iterations reached");
                for (o.forEach(u => {
                    const h = this.find(u.target, !0);
                    h != null && (h.domNode === u.target && (u.type === "childList" ? (s(this.find(u.previousSibling, !1)),
                    Array.from(u.addedNodes).forEach(f => {
                        const d = this.find(f, !1);
                        s(d, !1),
                        d instanceof ct && d.children.forEach(g => {
                            s(g, !1)
                        }
                        )
                    }
                    )) : u.type === "attributes" && s(h.prev)),
                    s(h))
                }
                ),
                this.children.forEach(a),
                o = Array.from(this.observer.takeRecords()),
                r = o.slice(); r.length > 0; )
                    t.push(r.pop())
            }
        }
        update(t, e={}) {
            t = t || this.observer.takeRecords();
            const n = new WeakMap;
            t.map(r => {
                const s = this.find(r.target, !0);
                return s == null ? null : n.has(s.domNode) ? (n.get(s.domNode).push(r),
                null) : (n.set(s.domNode, [r]),
                s)
            }
            ).forEach(r => {
                r != null && r !== this && n.has(r.domNode) && r.update(n.get(r.domNode) || [], e)
            }
            ),
            e.mutationsMap = n,
            n.has(this.domNode) && super.update(n.get(this.domNode), e),
            this.optimize(t, e)
        }
    }
    ;
    ni.blotName = "scroll",
    ni.defaultChild = Qi,
    ni.allowedChildren = [Qi, Wr],
    ni.scope = B.BLOCK_BLOT,
    ni.tagName = "DIV";
    let Kp = ni;
    const Pa = Kp
      , ia = class sc extends xe {
        static create(t) {
            return document.createTextNode(t)
        }
        static value(t) {
            return t.data
        }
        constructor(t, e) {
            super(t, e),
            this.text = this.statics.value(this.domNode)
        }
        deleteAt(t, e) {
            this.domNode.data = this.text = this.text.slice(0, t) + this.text.slice(t + e)
        }
        index(t, e) {
            return this.domNode === t ? e : -1
        }
        insertAt(t, e, n) {
            n == null ? (this.text = this.text.slice(0, t) + e + this.text.slice(t),
            this.domNode.data = this.text) : super.insertAt(t, e, n)
        }
        length() {
            return this.text.length
        }
        optimize(t) {
            super.optimize(t),
            this.text = this.statics.value(this.domNode),
            this.text.length === 0 ? this.remove() : this.next instanceof sc && this.next.prev === this && (this.insertAt(this.length(), this.next.value()),
            this.next.remove())
        }
        position(t, e=!1) {
            return [this.domNode, t]
        }
        split(t, e=!1) {
            if (!e) {
                if (t === 0)
                    return this;
                if (t === this.length())
                    return this.next
            }
            const n = this.scroll.create(this.domNode.splitText(t));
            return this.parent.insertBefore(n, this.next || void 0),
            this.text = this.statics.value(this.domNode),
            n
        }
        update(t, e) {
            t.some(n => n.type === "characterData" && n.target === this.domNode) && (this.text = this.statics.value(this.domNode))
        }
        value() {
            return this.text
        }
    }
    ;
    ia.blotName = "text",
    ia.scope = B.INLINE_BLOT;
    let Vp = ia;
    const Pr = Vp
      , Wp = Object.freeze(Object.defineProperty({
        __proto__: null,
        Attributor: Nt,
        AttributorStore: Vr,
        BlockBlot: Qi,
        ClassAttributor: ht,
        ContainerBlot: Wr,
        EmbedBlot: Ge,
        InlineBlot: Fa,
        LeafBlot: xe,
        ParentBlot: ct,
        Registry: fi,
        Scope: B,
        ScrollBlot: Pa,
        StyleAttributor: fn,
        TextBlot: Pr
    }, Symbol.toStringTag, {
        value: "Module"
    }));
    var ra = {
        exports: {}
    }
      , Ke = -1
      , Me = 1
      , pe = 0;
    function Ji(i, t, e, n, r) {
        if (i === t)
            return i ? [[pe, i]] : [];
        if (e != null) {
            var s = nm(i, t, e);
            if (s)
                return s
        }
        var a = Ba(i, t)
          , o = i.substring(0, a);
        i = i.substring(a),
        t = t.substring(a),
        a = Gr(i, t);
        var l = i.substring(i.length - a);
        i = i.substring(0, i.length - a),
        t = t.substring(0, t.length - a);
        var u = Gp(i, t);
        return o && u.unshift([pe, o]),
        l && u.push([pe, l]),
        ja(u, r),
        n && Xp(u),
        u
    }
    function Gp(i, t) {
        var e;
        if (!i)
            return [[Me, t]];
        if (!t)
            return [[Ke, i]];
        var n = i.length > t.length ? i : t
          , r = i.length > t.length ? t : i
          , s = n.indexOf(r);
        if (s !== -1)
            return e = [[Me, n.substring(0, s)], [pe, r], [Me, n.substring(s + r.length)]],
            i.length > t.length && (e[0][0] = e[2][0] = Ke),
            e;
        if (r.length === 1)
            return [[Ke, i], [Me, t]];
        var a = Zp(i, t);
        if (a) {
            var o = a[0]
              , l = a[1]
              , u = a[2]
              , h = a[3]
              , f = a[4]
              , d = Ji(o, u)
              , g = Ji(l, h);
            return d.concat([[pe, f]], g)
        }
        return Yp(i, t)
    }
    function Yp(i, t) {
        for (var e = i.length, n = t.length, r = Math.ceil((e + n) / 2), s = r, a = 2 * r, o = new Array(a), l = new Array(a), u = 0; u < a; u++)
            o[u] = -1,
            l[u] = -1;
        o[s + 1] = 0,
        l[s + 1] = 0;
        for (var h = e - n, f = h % 2 !== 0, d = 0, g = 0, b = 0, E = 0, _ = 0; _ < r; _++) {
            for (var C = -_ + d; C <= _ - g; C += 2) {
                var T = s + C, N;
                C === -_ || C !== _ && o[T - 1] < o[T + 1] ? N = o[T + 1] : N = o[T - 1] + 1;
                for (var O = N - C; N < e && O < n && i.charAt(N) === t.charAt(O); )
                    N++,
                    O++;
                if (o[T] = N,
                N > e)
                    g += 2;
                else if (O > n)
                    d += 2;
                else if (f) {
                    var D = s + h - C;
                    if (D >= 0 && D < a && l[D] !== -1) {
                        var j = e - l[D];
                        if (N >= j)
                            return Lo(i, t, N, O)
                    }
                }
            }
            for (var U = -_ + b; U <= _ - E; U += 2) {
                var D = s + U, j;
                U === -_ || U !== _ && l[D - 1] < l[D + 1] ? j = l[D + 1] : j = l[D - 1] + 1;
                for (var G = j - U; j < e && G < n && i.charAt(e - j - 1) === t.charAt(n - G - 1); )
                    j++,
                    G++;
                if (l[D] = j,
                j > e)
                    E += 2;
                else if (G > n)
                    b += 2;
                else if (!f) {
                    var T = s + h - U;
                    if (T >= 0 && T < a && o[T] !== -1) {
                        var N = o[T]
                          , O = s + N - T;
                        if (j = e - j,
                        N >= j)
                            return Lo(i, t, N, O)
                    }
                }
            }
        }
        return [[Ke, i], [Me, t]]
    }
    function Lo(i, t, e, n) {
        var r = i.substring(0, e)
          , s = t.substring(0, n)
          , a = i.substring(e)
          , o = t.substring(n)
          , l = Ji(r, s)
          , u = Ji(a, o);
        return l.concat(u)
    }
    function Ba(i, t) {
        if (!i || !t || i.charAt(0) !== t.charAt(0))
            return 0;
        for (var e = 0, n = Math.min(i.length, t.length), r = n, s = 0; e < r; )
            i.substring(s, r) == t.substring(s, r) ? (e = r,
            s = e) : n = r,
            r = Math.floor((n - e) / 2 + e);
        return ac(i.charCodeAt(r - 1)) && r--,
        r
    }
    function Oo(i, t) {
        var e = i.length
          , n = t.length;
        if (e == 0 || n == 0)
            return 0;
        e > n ? i = i.substring(e - n) : e < n && (t = t.substring(0, e));
        var r = Math.min(e, n);
        if (i == t)
            return r;
        for (var s = 0, a = 1; ; ) {
            var o = i.substring(r - a)
              , l = t.indexOf(o);
            if (l == -1)
                return s;
            a += l,
            (l == 0 || i.substring(r - a) == t.substring(0, a)) && (s = a,
            a++)
        }
    }
    function Gr(i, t) {
        if (!i || !t || i.slice(-1) !== t.slice(-1))
            return 0;
        for (var e = 0, n = Math.min(i.length, t.length), r = n, s = 0; e < r; )
            i.substring(i.length - r, i.length - s) == t.substring(t.length - r, t.length - s) ? (e = r,
            s = e) : n = r,
            r = Math.floor((n - e) / 2 + e);
        return oc(i.charCodeAt(i.length - r)) && r--,
        r
    }
    function Zp(i, t) {
        var e = i.length > t.length ? i : t
          , n = i.length > t.length ? t : i;
        if (e.length < 4 || n.length * 2 < e.length)
            return null;
        function r(g, b, E) {
            for (var _ = g.substring(E, E + Math.floor(g.length / 4)), C = -1, T = "", N, O, D, j; (C = b.indexOf(_, C + 1)) !== -1; ) {
                var U = Ba(g.substring(E), b.substring(C))
                  , G = Gr(g.substring(0, E), b.substring(0, C));
                T.length < G + U && (T = b.substring(C - G, C) + b.substring(C, C + U),
                N = g.substring(0, E - G),
                O = g.substring(E + U),
                D = b.substring(0, C - G),
                j = b.substring(C + U))
            }
            return T.length * 2 >= g.length ? [N, O, D, j, T] : null
        }
        var s = r(e, n, Math.ceil(e.length / 4)), a = r(e, n, Math.ceil(e.length / 2)), o;
        if (!s && !a)
            return null;
        a ? s ? o = s[4].length > a[4].length ? s : a : o = a : o = s;
        var l, u, h, f;
        i.length > t.length ? (l = o[0],
        u = o[1],
        h = o[2],
        f = o[3]) : (h = o[0],
        f = o[1],
        l = o[2],
        u = o[3]);
        var d = o[4];
        return [l, u, h, f, d]
    }
    function Xp(i) {
        for (var t = !1, e = [], n = 0, r = null, s = 0, a = 0, o = 0, l = 0, u = 0; s < i.length; )
            i[s][0] == pe ? (e[n++] = s,
            a = l,
            o = u,
            l = 0,
            u = 0,
            r = i[s][1]) : (i[s][0] == Me ? l += i[s][1].length : u += i[s][1].length,
            r && r.length <= Math.max(a, o) && r.length <= Math.max(l, u) && (i.splice(e[n - 1], 0, [Ke, r]),
            i[e[n - 1] + 1][0] = Me,
            n--,
            n--,
            s = n > 0 ? e[n - 1] : -1,
            a = 0,
            o = 0,
            l = 0,
            u = 0,
            r = null,
            t = !0)),
            s++;
        for (t && ja(i),
        em(i),
        s = 1; s < i.length; ) {
            if (i[s - 1][0] == Ke && i[s][0] == Me) {
                var h = i[s - 1][1]
                  , f = i[s][1]
                  , d = Oo(h, f)
                  , g = Oo(f, h);
                d >= g ? (d >= h.length / 2 || d >= f.length / 2) && (i.splice(s, 0, [pe, f.substring(0, d)]),
                i[s - 1][1] = h.substring(0, h.length - d),
                i[s + 1][1] = f.substring(d),
                s++) : (g >= h.length / 2 || g >= f.length / 2) && (i.splice(s, 0, [pe, h.substring(0, g)]),
                i[s - 1][0] = Me,
                i[s - 1][1] = f.substring(0, f.length - g),
                i[s + 1][0] = Ke,
                i[s + 1][1] = h.substring(g),
                s++),
                s++
            }
            s++
        }
    }
    var Do = /[^a-zA-Z0-9]/
      , Mo = /\s/
      , ko = /[\r\n]/
      , Qp = /\n\r?\n$/
      , Jp = /^\r?\n\r?\n/;
    function em(i) {
        function t(g, b) {
            if (!g || !b)
                return 6;
            var E = g.charAt(g.length - 1)
              , _ = b.charAt(0)
              , C = E.match(Do)
              , T = _.match(Do)
              , N = C && E.match(Mo)
              , O = T && _.match(Mo)
              , D = N && E.match(ko)
              , j = O && _.match(ko)
              , U = D && g.match(Qp)
              , G = j && b.match(Jp);
            return U || G ? 5 : D || j ? 4 : C && !N && O ? 3 : N || O ? 2 : C || T ? 1 : 0
        }
        for (var e = 1; e < i.length - 1; ) {
            if (i[e - 1][0] == pe && i[e + 1][0] == pe) {
                var n = i[e - 1][1]
                  , r = i[e][1]
                  , s = i[e + 1][1]
                  , a = Gr(n, r);
                if (a) {
                    var o = r.substring(r.length - a);
                    n = n.substring(0, n.length - a),
                    r = o + r.substring(0, r.length - a),
                    s = o + s
                }
                for (var l = n, u = r, h = s, f = t(n, r) + t(r, s); r.charAt(0) === s.charAt(0); ) {
                    n += r.charAt(0),
                    r = r.substring(1) + s.charAt(0),
                    s = s.substring(1);
                    var d = t(n, r) + t(r, s);
                    d >= f && (f = d,
                    l = n,
                    u = r,
                    h = s)
                }
                i[e - 1][1] != l && (l ? i[e - 1][1] = l : (i.splice(e - 1, 1),
                e--),
                i[e][1] = u,
                h ? i[e + 1][1] = h : (i.splice(e + 1, 1),
                e--))
            }
            e++
        }
    }
    function ja(i, t) {
        i.push([pe, ""]);
        for (var e = 0, n = 0, r = 0, s = "", a = "", o; e < i.length; ) {
            if (e < i.length - 1 && !i[e][1]) {
                i.splice(e, 1);
                continue
            }
            switch (i[e][0]) {
            case Me:
                r++,
                a += i[e][1],
                e++;
                break;
            case Ke:
                n++,
                s += i[e][1],
                e++;
                break;
            case pe:
                var l = e - r - n - 1;
                if (t) {
                    if (l >= 0 && cc(i[l][1])) {
                        var u = i[l][1].slice(-1);
                        if (i[l][1] = i[l][1].slice(0, -1),
                        s = u + s,
                        a = u + a,
                        !i[l][1]) {
                            i.splice(l, 1),
                            e--;
                            var h = l - 1;
                            i[h] && i[h][0] === Me && (r++,
                            a = i[h][1] + a,
                            h--),
                            i[h] && i[h][0] === Ke && (n++,
                            s = i[h][1] + s,
                            h--),
                            l = h
                        }
                    }
                    if (lc(i[e][1])) {
                        var u = i[e][1].charAt(0);
                        i[e][1] = i[e][1].slice(1),
                        s += u,
                        a += u
                    }
                }
                if (e < i.length - 1 && !i[e][1]) {
                    i.splice(e, 1);
                    break
                }
                if (s.length > 0 || a.length > 0) {
                    s.length > 0 && a.length > 0 && (o = Ba(a, s),
                    o !== 0 && (l >= 0 ? i[l][1] += a.substring(0, o) : (i.splice(0, 0, [pe, a.substring(0, o)]),
                    e++),
                    a = a.substring(o),
                    s = s.substring(o)),
                    o = Gr(a, s),
                    o !== 0 && (i[e][1] = a.substring(a.length - o) + i[e][1],
                    a = a.substring(0, a.length - o),
                    s = s.substring(0, s.length - o)));
                    var f = r + n;
                    s.length === 0 && a.length === 0 ? (i.splice(e - f, f),
                    e = e - f) : s.length === 0 ? (i.splice(e - f, f, [Me, a]),
                    e = e - f + 1) : a.length === 0 ? (i.splice(e - f, f, [Ke, s]),
                    e = e - f + 1) : (i.splice(e - f, f, [Ke, s], [Me, a]),
                    e = e - f + 2)
                }
                e !== 0 && i[e - 1][0] === pe ? (i[e - 1][1] += i[e][1],
                i.splice(e, 1)) : e++,
                r = 0,
                n = 0,
                s = "",
                a = "";
                break
            }
        }
        i[i.length - 1][1] === "" && i.pop();
        var d = !1;
        for (e = 1; e < i.length - 1; )
            i[e - 1][0] === pe && i[e + 1][0] === pe && (i[e][1].substring(i[e][1].length - i[e - 1][1].length) === i[e - 1][1] ? (i[e][1] = i[e - 1][1] + i[e][1].substring(0, i[e][1].length - i[e - 1][1].length),
            i[e + 1][1] = i[e - 1][1] + i[e + 1][1],
            i.splice(e - 1, 1),
            d = !0) : i[e][1].substring(0, i[e + 1][1].length) == i[e + 1][1] && (i[e - 1][1] += i[e + 1][1],
            i[e][1] = i[e][1].substring(i[e + 1][1].length) + i[e + 1][1],
            i.splice(e + 1, 1),
            d = !0)),
            e++;
        d && ja(i, t)
    }
    function ac(i) {
        return i >= 55296 && i <= 56319
    }
    function oc(i) {
        return i >= 56320 && i <= 57343
    }
    function lc(i) {
        return oc(i.charCodeAt(0))
    }
    function cc(i) {
        return ac(i.charCodeAt(i.length - 1))
    }
    function tm(i) {
        for (var t = [], e = 0; e < i.length; e++)
            i[e][1].length > 0 && t.push(i[e]);
        return t
    }
    function Is(i, t, e, n) {
        return cc(i) || lc(n) ? null : tm([[pe, i], [Ke, t], [Me, e], [pe, n]])
    }
    function nm(i, t, e) {
        var n = typeof e == "number" ? {
            index: e,
            length: 0
        } : e.oldRange
          , r = typeof e == "number" ? null : e.newRange
          , s = i.length
          , a = t.length;
        if (n.length === 0 && (r === null || r.length === 0)) {
            var o = n.index
              , l = i.slice(0, o)
              , u = i.slice(o)
              , h = r ? r.index : null;
            e: {
                var f = o + a - s;
                if (h !== null && h !== f || f < 0 || f > a)
                    break e;
                var d = t.slice(0, f)
                  , g = t.slice(f);
                if (g !== u)
                    break e;
                var b = Math.min(o, f)
                  , E = l.slice(0, b)
                  , _ = d.slice(0, b);
                if (E !== _)
                    break e;
                var C = l.slice(b)
                  , T = d.slice(b);
                return Is(E, C, T, u)
            }
            e: {
                if (h !== null && h !== o)
                    break e;
                var N = o
                  , d = t.slice(0, N)
                  , g = t.slice(N);
                if (d !== l)
                    break e;
                var O = Math.min(s - N, a - N)
                  , D = u.slice(u.length - O)
                  , j = g.slice(g.length - O);
                if (D !== j)
                    break e;
                var C = u.slice(0, u.length - O)
                  , T = g.slice(0, g.length - O);
                return Is(l, C, T, D)
            }
        }
        if (n.length > 0 && r && r.length === 0)
            e: {
                var E = i.slice(0, n.index)
                  , D = i.slice(n.index + n.length)
                  , b = E.length
                  , O = D.length;
                if (a < b + O)
                    break e;
                var _ = t.slice(0, b)
                  , j = t.slice(a - O);
                if (E !== _ || D !== j)
                    break e;
                var C = i.slice(b, s - O)
                  , T = t.slice(b, a - O);
                return Is(E, C, T, D)
            }
        return null
    }
    function Yr(i, t, e, n) {
        return Ji(i, t, e, n, !0)
    }
    Yr.INSERT = Me;
    Yr.DELETE = Ke;
    Yr.EQUAL = pe;
    var im = Yr
      , Br = {
        exports: {}
    };
    Br.exports;
    (function(i, t) {
        var e = 200
          , n = "__lodash_hash_undefined__"
          , r = 9007199254740991
          , s = "[object Arguments]"
          , a = "[object Array]"
          , o = "[object Boolean]"
          , l = "[object Date]"
          , u = "[object Error]"
          , h = "[object Function]"
          , f = "[object GeneratorFunction]"
          , d = "[object Map]"
          , g = "[object Number]"
          , b = "[object Object]"
          , E = "[object Promise]"
          , _ = "[object RegExp]"
          , C = "[object Set]"
          , T = "[object String]"
          , N = "[object Symbol]"
          , O = "[object WeakMap]"
          , D = "[object ArrayBuffer]"
          , j = "[object DataView]"
          , U = "[object Float32Array]"
          , G = "[object Float64Array]"
          , le = "[object Int8Array]"
          , be = "[object Int16Array]"
          , Be = "[object Int32Array]"
          , he = "[object Uint8Array]"
          , Ye = "[object Uint8ClampedArray]"
          , me = "[object Uint16Array]"
          , Ze = "[object Uint32Array]"
          , Gt = /[\\^$.*+?()[\]{}|]/g
          , Ei = /\w*$/
          , Hn = /^\[object .+?Constructor\]$/
          , Un = /^(?:0|[1-9]\d*)$/
          , te = {};
        te[s] = te[a] = te[D] = te[j] = te[o] = te[l] = te[U] = te[G] = te[le] = te[be] = te[Be] = te[d] = te[g] = te[b] = te[_] = te[C] = te[T] = te[N] = te[he] = te[Ye] = te[me] = te[Ze] = !0,
        te[u] = te[h] = te[O] = !1;
        var mn = typeof jt == "object" && jt && jt.Object === Object && jt
          , wi = typeof self == "object" && self && self.Object === Object && self
          , je = mn || wi || Function("return this")()
          , $n = t && !t.nodeType && t
          , Z = $n && !0 && i && !i.nodeType && i
          , Yt = Z && Z.exports === $n;
        function Zt(c, p) {
            return c.set(p[0], p[1]),
            c
        }
        function de(c, p) {
            return c.add(p),
            c
        }
        function Ot(c, p) {
            for (var y = -1, S = c ? c.length : 0; ++y < S && p(c[y], y, c) !== !1; )
                ;
            return c
        }
        function zn(c, p) {
            for (var y = -1, S = p.length, V = c.length; ++y < S; )
                c[V + y] = p[y];
            return c
        }
        function Xt(c, p, y, S) {
            for (var V = -1, H = c ? c.length : 0; ++V < H; )
                y = p(y, c[V], V, c);
            return y
        }
        function pt(c, p) {
            for (var y = -1, S = Array(c); ++y < c; )
                S[y] = p(y);
            return S
        }
        function Kn(c, p) {
            return c == null ? void 0 : c[p]
        }
        function gn(c) {
            var p = !1;
            if (c != null && typeof c.toString != "function")
                try {
                    p = !!(c + "")
                } catch {}
            return p
        }
        function vn(c) {
            var p = -1
              , y = Array(c.size);
            return c.forEach(function(S, V) {
                y[++p] = [V, S]
            }),
            y
        }
        function bn(c, p) {
            return function(y) {
                return c(p(y))
            }
        }
        function yn(c) {
            var p = -1
              , y = Array(c.size);
            return c.forEach(function(S) {
                y[++p] = S
            }),
            y
        }
        var Vn = Array.prototype
          , Qt = Function.prototype
          , Jt = Object.prototype
          , En = je["__core-js_shared__"]
          , wn = function() {
            var c = /[^.]+$/.exec(En && En.keys && En.keys.IE_PROTO || "");
            return c ? "Symbol(src)_1." + c : ""
        }()
          , en = Qt.toString
          , He = Jt.hasOwnProperty
          , it = Jt.toString
          , _i = RegExp("^" + en.call(He).replace(Gt, "\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, "$1.*?") + "$")
          , mt = Yt ? je.Buffer : void 0
          , tn = je.Symbol
          , nn = je.Uint8Array
          , ke = bn(Object.getPrototypeOf, Object)
          , Wn = Object.create
          , _n = Jt.propertyIsEnumerable
          , Ci = Vn.splice
          , Cn = Object.getOwnPropertySymbols
          , ne = mt ? mt.isBuffer : void 0
          , rn = bn(Object.keys, Object)
          , gt = rt(je, "DataView")
          , Dt = rt(je, "Map")
          , _e = rt(je, "Promise")
          , vt = rt(je, "Set")
          , Ie = rt(je, "WeakMap")
          , Mt = rt(Object, "create")
          , An = Le(gt)
          , m = Le(Dt)
          , v = Le(_e)
          , w = Le(vt)
          , A = Le(Ie)
          , I = tn ? tn.prototype : void 0
          , M = I ? I.valueOf : void 0;
        function z(c) {
            var p = -1
              , y = c ? c.length : 0;
            for (this.clear(); ++p < y; ) {
                var S = c[p];
                this.set(S[0], S[1])
            }
        }
        function F() {
            this.__data__ = Mt ? Mt(null) : {}
        }
        function W(c) {
            return this.has(c) && delete this.__data__[c]
        }
        function q(c) {
            var p = this.__data__;
            if (Mt) {
                var y = p[c];
                return y === n ? void 0 : y
            }
            return He.call(p, c) ? p[c] : void 0
        }
        function $(c) {
            var p = this.__data__;
            return Mt ? p[c] !== void 0 : He.call(p, c)
        }
        function X(c, p) {
            var y = this.__data__;
            return y[c] = Mt && p === void 0 ? n : p,
            this
        }
        z.prototype.clear = F,
        z.prototype.delete = W,
        z.prototype.get = q,
        z.prototype.has = $,
        z.prototype.set = X;
        function re(c) {
            var p = -1
              , y = c ? c.length : 0;
            for (this.clear(); ++p < y; ) {
                var S = c[p];
                this.set(S[0], S[1])
            }
        }
        function ye() {
            this.__data__ = []
        }
        function kt(c) {
            var p = this.__data__
              , y = Yn(p, c);
            if (y < 0)
                return !1;
            var S = p.length - 1;
            return y == S ? p.pop() : Ci.call(p, y, 1),
            !0
        }
        function bt(c) {
            var p = this.__data__
              , y = Yn(p, c);
            return y < 0 ? void 0 : p[y][1]
        }
        function Ai(c) {
            return Yn(this.__data__, c) > -1
        }
        function Sn(c, p) {
            var y = this.__data__
              , S = Yn(y, c);
            return S < 0 ? y.push([c, p]) : y[S][1] = p,
            this
        }
        re.prototype.clear = ye,
        re.prototype.delete = kt,
        re.prototype.get = bt,
        re.prototype.has = Ai,
        re.prototype.set = Sn;
        function ge(c) {
            var p = -1
              , y = c ? c.length : 0;
            for (this.clear(); ++p < y; ) {
                var S = c[p];
                this.set(S[0], S[1])
            }
        }
        function Si() {
            this.__data__ = {
                hash: new z,
                map: new (Dt || re),
                string: new z
            }
        }
        function Ti(c) {
            return xn(this, c).delete(c)
        }
        function xi(c) {
            return xn(this, c).get(c)
        }
        function Ni(c) {
            return xn(this, c).has(c)
        }
        function Ii(c, p) {
            return xn(this, c).set(c, p),
            this
        }
        ge.prototype.clear = Si,
        ge.prototype.delete = Ti,
        ge.prototype.get = xi,
        ge.prototype.has = Ni,
        ge.prototype.set = Ii;
        function Ce(c) {
            this.__data__ = new re(c)
        }
        function Li() {
            this.__data__ = new re
        }
        function ns(c) {
            return this.__data__.delete(c)
        }
        function is(c) {
            return this.__data__.get(c)
        }
        function rs(c) {
            return this.__data__.has(c)
        }
        function ss(c, p) {
            var y = this.__data__;
            if (y instanceof re) {
                var S = y.__data__;
                if (!Dt || S.length < e - 1)
                    return S.push([c, p]),
                    this;
                y = this.__data__ = new ge(S)
            }
            return y.set(c, p),
            this
        }
        Ce.prototype.clear = Li,
        Ce.prototype.delete = ns,
        Ce.prototype.get = is,
        Ce.prototype.has = rs,
        Ce.prototype.set = ss;
        function Gn(c, p) {
            var y = ki(c) || Xn(c) ? pt(c.length, String) : []
              , S = y.length
              , V = !!S;
            for (var H in c)
                He.call(c, H) && !(V && (H == "length" || ys(H, S))) && y.push(H);
            return y
        }
        function hr(c, p, y) {
            var S = c[p];
            (!(He.call(c, p) && gr(S, y)) || y === void 0 && !(p in c)) && (c[p] = y)
        }
        function Yn(c, p) {
            for (var y = c.length; y--; )
                if (gr(c[y][0], p))
                    return y;
            return -1
        }
        function yt(c, p) {
            return c && Mi(p, Ri(p), c)
        }
        function Oi(c, p, y, S, V, H, J) {
            var Q;
            if (S && (Q = H ? S(c, V, H, J) : S(c)),
            Q !== void 0)
                return Q;
            if (!wt(c))
                return c;
            var ue = ki(c);
            if (ue) {
                if (Q = vs(c),
                !p)
                    return ps(c, Q)
            } else {
                var ie = Rt(c)
                  , Ae = ie == h || ie == f;
                if (vr(c))
                    return Zn(c, p);
                if (ie == b || ie == s || Ae && !H) {
                    if (gn(c))
                        return H ? c : {};
                    if (Q = Et(Ae ? {} : c),
                    !p)
                        return ms(c, yt(Q, c))
                } else {
                    if (!te[ie])
                        return H ? c : {};
                    Q = bs(c, ie, Oi, p)
                }
            }
            J || (J = new Ce);
            var qe = J.get(c);
            if (qe)
                return qe;
            if (J.set(c, Q),
            !ue)
                var fe = y ? gs(c) : Ri(c);
            return Ot(fe || c, function(Se, Ee) {
                fe && (Ee = Se,
                Se = c[Ee]),
                hr(Q, Ee, Oi(Se, p, y, S, Ee, c, J))
            }),
            Q
        }
        function as(c) {
            return wt(c) ? Wn(c) : {}
        }
        function os(c, p, y) {
            var S = p(c);
            return ki(c) ? S : zn(S, y(c))
        }
        function ls(c) {
            return it.call(c)
        }
        function cs(c) {
            if (!wt(c) || ws(c))
                return !1;
            var p = qi(c) || gn(c) ? _i : Hn;
            return p.test(Le(c))
        }
        function us(c) {
            if (!pr(c))
                return rn(c);
            var p = [];
            for (var y in Object(c))
                He.call(c, y) && y != "constructor" && p.push(y);
            return p
        }
        function Zn(c, p) {
            if (p)
                return c.slice();
            var y = new c.constructor(c.length);
            return c.copy(y),
            y
        }
        function Di(c) {
            var p = new c.constructor(c.byteLength);
            return new nn(p).set(new nn(c)),
            p
        }
        function Tn(c, p) {
            var y = p ? Di(c.buffer) : c.buffer;
            return new c.constructor(y,c.byteOffset,c.byteLength)
        }
        function dr(c, p, y) {
            var S = p ? y(vn(c), !0) : vn(c);
            return Xt(S, Zt, new c.constructor)
        }
        function fr(c) {
            var p = new c.constructor(c.source,Ei.exec(c));
            return p.lastIndex = c.lastIndex,
            p
        }
        function hs(c, p, y) {
            var S = p ? y(yn(c), !0) : yn(c);
            return Xt(S, de, new c.constructor)
        }
        function ds(c) {
            return M ? Object(M.call(c)) : {}
        }
        function fs(c, p) {
            var y = p ? Di(c.buffer) : c.buffer;
            return new c.constructor(y,c.byteOffset,c.length)
        }
        function ps(c, p) {
            var y = -1
              , S = c.length;
            for (p || (p = Array(S)); ++y < S; )
                p[y] = c[y];
            return p
        }
        function Mi(c, p, y, S) {
            y || (y = {});
            for (var V = -1, H = p.length; ++V < H; ) {
                var J = p[V]
                  , Q = void 0;
                hr(y, J, Q === void 0 ? c[J] : Q)
            }
            return y
        }
        function ms(c, p) {
            return Mi(c, qt(c), p)
        }
        function gs(c) {
            return os(c, Ri, qt)
        }
        function xn(c, p) {
            var y = c.__data__;
            return Es(p) ? y[typeof p == "string" ? "string" : "hash"] : y.map
        }
        function rt(c, p) {
            var y = Kn(c, p);
            return cs(y) ? y : void 0
        }
        var qt = Cn ? bn(Cn, Object) : Cs
          , Rt = ls;
        (gt && Rt(new gt(new ArrayBuffer(1))) != j || Dt && Rt(new Dt) != d || _e && Rt(_e.resolve()) != E || vt && Rt(new vt) != C || Ie && Rt(new Ie) != O) && (Rt = function(c) {
            var p = it.call(c)
              , y = p == b ? c.constructor : void 0
              , S = y ? Le(y) : void 0;
            if (S)
                switch (S) {
                case An:
                    return j;
                case m:
                    return d;
                case v:
                    return E;
                case w:
                    return C;
                case A:
                    return O
                }
            return p
        }
        );
        function vs(c) {
            var p = c.length
              , y = c.constructor(p);
            return p && typeof c[0] == "string" && He.call(c, "index") && (y.index = c.index,
            y.input = c.input),
            y
        }
        function Et(c) {
            return typeof c.constructor == "function" && !pr(c) ? as(ke(c)) : {}
        }
        function bs(c, p, y, S) {
            var V = c.constructor;
            switch (p) {
            case D:
                return Di(c);
            case o:
            case l:
                return new V(+c);
            case j:
                return Tn(c, S);
            case U:
            case G:
            case le:
            case be:
            case Be:
            case he:
            case Ye:
            case me:
            case Ze:
                return fs(c, S);
            case d:
                return dr(c, S, y);
            case g:
            case T:
                return new V(c);
            case _:
                return fr(c);
            case C:
                return hs(c, S, y);
            case N:
                return ds(c)
            }
        }
        function ys(c, p) {
            return p = p ?? r,
            !!p && (typeof c == "number" || Un.test(c)) && c > -1 && c % 1 == 0 && c < p
        }
        function Es(c) {
            var p = typeof c;
            return p == "string" || p == "number" || p == "symbol" || p == "boolean" ? c !== "__proto__" : c === null
        }
        function ws(c) {
            return !!wn && wn in c
        }
        function pr(c) {
            var p = c && c.constructor
              , y = typeof p == "function" && p.prototype || Jt;
            return c === y
        }
        function Le(c) {
            if (c != null) {
                try {
                    return en.call(c)
                } catch {}
                try {
                    return c + ""
                } catch {}
            }
            return ""
        }
        function mr(c) {
            return Oi(c, !0, !0)
        }
        function gr(c, p) {
            return c === p || c !== c && p !== p
        }
        function Xn(c) {
            return _s(c) && He.call(c, "callee") && (!_n.call(c, "callee") || it.call(c) == s)
        }
        var ki = Array.isArray;
        function Qn(c) {
            return c != null && br(c.length) && !qi(c)
        }
        function _s(c) {
            return yr(c) && Qn(c)
        }
        var vr = ne || As;
        function qi(c) {
            var p = wt(c) ? it.call(c) : "";
            return p == h || p == f
        }
        function br(c) {
            return typeof c == "number" && c > -1 && c % 1 == 0 && c <= r
        }
        function wt(c) {
            var p = typeof c;
            return !!c && (p == "object" || p == "function")
        }
        function yr(c) {
            return !!c && typeof c == "object"
        }
        function Ri(c) {
            return Qn(c) ? Gn(c) : us(c)
        }
        function Cs() {
            return []
        }
        function As() {
            return !1
        }
        i.exports = mr
    }
    )(Br, Br.exports);
    var uc = Br.exports
      , jr = {
        exports: {}
    };
    jr.exports;
    (function(i, t) {
        var e = 200
          , n = "__lodash_hash_undefined__"
          , r = 1
          , s = 2
          , a = 9007199254740991
          , o = "[object Arguments]"
          , l = "[object Array]"
          , u = "[object AsyncFunction]"
          , h = "[object Boolean]"
          , f = "[object Date]"
          , d = "[object Error]"
          , g = "[object Function]"
          , b = "[object GeneratorFunction]"
          , E = "[object Map]"
          , _ = "[object Number]"
          , C = "[object Null]"
          , T = "[object Object]"
          , N = "[object Promise]"
          , O = "[object Proxy]"
          , D = "[object RegExp]"
          , j = "[object Set]"
          , U = "[object String]"
          , G = "[object Symbol]"
          , le = "[object Undefined]"
          , be = "[object WeakMap]"
          , Be = "[object ArrayBuffer]"
          , he = "[object DataView]"
          , Ye = "[object Float32Array]"
          , me = "[object Float64Array]"
          , Ze = "[object Int8Array]"
          , Gt = "[object Int16Array]"
          , Ei = "[object Int32Array]"
          , Hn = "[object Uint8Array]"
          , Un = "[object Uint8ClampedArray]"
          , te = "[object Uint16Array]"
          , mn = "[object Uint32Array]"
          , wi = /[\\^$.*+?()[\]{}|]/g
          , je = /^\[object .+?Constructor\]$/
          , $n = /^(?:0|[1-9]\d*)$/
          , Z = {};
        Z[Ye] = Z[me] = Z[Ze] = Z[Gt] = Z[Ei] = Z[Hn] = Z[Un] = Z[te] = Z[mn] = !0,
        Z[o] = Z[l] = Z[Be] = Z[h] = Z[he] = Z[f] = Z[d] = Z[g] = Z[E] = Z[_] = Z[T] = Z[D] = Z[j] = Z[U] = Z[be] = !1;
        var Yt = typeof jt == "object" && jt && jt.Object === Object && jt
          , Zt = typeof self == "object" && self && self.Object === Object && self
          , de = Yt || Zt || Function("return this")()
          , Ot = t && !t.nodeType && t
          , zn = Ot && !0 && i && !i.nodeType && i
          , Xt = zn && zn.exports === Ot
          , pt = Xt && Yt.process
          , Kn = function() {
            try {
                return pt && pt.binding && pt.binding("util")
            } catch {}
        }()
          , gn = Kn && Kn.isTypedArray;
        function vn(c, p) {
            for (var y = -1, S = c == null ? 0 : c.length, V = 0, H = []; ++y < S; ) {
                var J = c[y];
                p(J, y, c) && (H[V++] = J)
            }
            return H
        }
        function bn(c, p) {
            for (var y = -1, S = p.length, V = c.length; ++y < S; )
                c[V + y] = p[y];
            return c
        }
        function yn(c, p) {
            for (var y = -1, S = c == null ? 0 : c.length; ++y < S; )
                if (p(c[y], y, c))
                    return !0;
            return !1
        }
        function Vn(c, p) {
            for (var y = -1, S = Array(c); ++y < c; )
                S[y] = p(y);
            return S
        }
        function Qt(c) {
            return function(p) {
                return c(p)
            }
        }
        function Jt(c, p) {
            return c.has(p)
        }
        function En(c, p) {
            return c == null ? void 0 : c[p]
        }
        function wn(c) {
            var p = -1
              , y = Array(c.size);
            return c.forEach(function(S, V) {
                y[++p] = [V, S]
            }),
            y
        }
        function en(c, p) {
            return function(y) {
                return c(p(y))
            }
        }
        function He(c) {
            var p = -1
              , y = Array(c.size);
            return c.forEach(function(S) {
                y[++p] = S
            }),
            y
        }
        var it = Array.prototype
          , _i = Function.prototype
          , mt = Object.prototype
          , tn = de["__core-js_shared__"]
          , nn = _i.toString
          , ke = mt.hasOwnProperty
          , Wn = function() {
            var c = /[^.]+$/.exec(tn && tn.keys && tn.keys.IE_PROTO || "");
            return c ? "Symbol(src)_1." + c : ""
        }()
          , _n = mt.toString
          , Ci = RegExp("^" + nn.call(ke).replace(wi, "\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, "$1.*?") + "$")
          , Cn = Xt ? de.Buffer : void 0
          , ne = de.Symbol
          , rn = de.Uint8Array
          , gt = mt.propertyIsEnumerable
          , Dt = it.splice
          , _e = ne ? ne.toStringTag : void 0
          , vt = Object.getOwnPropertySymbols
          , Ie = Cn ? Cn.isBuffer : void 0
          , Mt = en(Object.keys, Object)
          , An = qt(de, "DataView")
          , m = qt(de, "Map")
          , v = qt(de, "Promise")
          , w = qt(de, "Set")
          , A = qt(de, "WeakMap")
          , I = qt(Object, "create")
          , M = Le(An)
          , z = Le(m)
          , F = Le(v)
          , W = Le(w)
          , q = Le(A)
          , $ = ne ? ne.prototype : void 0
          , X = $ ? $.valueOf : void 0;
        function re(c) {
            var p = -1
              , y = c == null ? 0 : c.length;
            for (this.clear(); ++p < y; ) {
                var S = c[p];
                this.set(S[0], S[1])
            }
        }
        function ye() {
            this.__data__ = I ? I(null) : {},
            this.size = 0
        }
        function kt(c) {
            var p = this.has(c) && delete this.__data__[c];
            return this.size -= p ? 1 : 0,
            p
        }
        function bt(c) {
            var p = this.__data__;
            if (I) {
                var y = p[c];
                return y === n ? void 0 : y
            }
            return ke.call(p, c) ? p[c] : void 0
        }
        function Ai(c) {
            var p = this.__data__;
            return I ? p[c] !== void 0 : ke.call(p, c)
        }
        function Sn(c, p) {
            var y = this.__data__;
            return this.size += this.has(c) ? 0 : 1,
            y[c] = I && p === void 0 ? n : p,
            this
        }
        re.prototype.clear = ye,
        re.prototype.delete = kt,
        re.prototype.get = bt,
        re.prototype.has = Ai,
        re.prototype.set = Sn;
        function ge(c) {
            var p = -1
              , y = c == null ? 0 : c.length;
            for (this.clear(); ++p < y; ) {
                var S = c[p];
                this.set(S[0], S[1])
            }
        }
        function Si() {
            this.__data__ = [],
            this.size = 0
        }
        function Ti(c) {
            var p = this.__data__
              , y = Zn(p, c);
            if (y < 0)
                return !1;
            var S = p.length - 1;
            return y == S ? p.pop() : Dt.call(p, y, 1),
            --this.size,
            !0
        }
        function xi(c) {
            var p = this.__data__
              , y = Zn(p, c);
            return y < 0 ? void 0 : p[y][1]
        }
        function Ni(c) {
            return Zn(this.__data__, c) > -1
        }
        function Ii(c, p) {
            var y = this.__data__
              , S = Zn(y, c);
            return S < 0 ? (++this.size,
            y.push([c, p])) : y[S][1] = p,
            this
        }
        ge.prototype.clear = Si,
        ge.prototype.delete = Ti,
        ge.prototype.get = xi,
        ge.prototype.has = Ni,
        ge.prototype.set = Ii;
        function Ce(c) {
            var p = -1
              , y = c == null ? 0 : c.length;
            for (this.clear(); ++p < y; ) {
                var S = c[p];
                this.set(S[0], S[1])
            }
        }
        function Li() {
            this.size = 0,
            this.__data__ = {
                hash: new re,
                map: new (m || ge),
                string: new re
            }
        }
        function ns(c) {
            var p = rt(this, c).delete(c);
            return this.size -= p ? 1 : 0,
            p
        }
        function is(c) {
            return rt(this, c).get(c)
        }
        function rs(c) {
            return rt(this, c).has(c)
        }
        function ss(c, p) {
            var y = rt(this, c)
              , S = y.size;
            return y.set(c, p),
            this.size += y.size == S ? 0 : 1,
            this
        }
        Ce.prototype.clear = Li,
        Ce.prototype.delete = ns,
        Ce.prototype.get = is,
        Ce.prototype.has = rs,
        Ce.prototype.set = ss;
        function Gn(c) {
            var p = -1
              , y = c == null ? 0 : c.length;
            for (this.__data__ = new Ce; ++p < y; )
                this.add(c[p])
        }
        function hr(c) {
            return this.__data__.set(c, n),
            this
        }
        function Yn(c) {
            return this.__data__.has(c)
        }
        Gn.prototype.add = Gn.prototype.push = hr,
        Gn.prototype.has = Yn;
        function yt(c) {
            var p = this.__data__ = new ge(c);
            this.size = p.size
        }
        function Oi() {
            this.__data__ = new ge,
            this.size = 0
        }
        function as(c) {
            var p = this.__data__
              , y = p.delete(c);
            return this.size = p.size,
            y
        }
        function os(c) {
            return this.__data__.get(c)
        }
        function ls(c) {
            return this.__data__.has(c)
        }
        function cs(c, p) {
            var y = this.__data__;
            if (y instanceof ge) {
                var S = y.__data__;
                if (!m || S.length < e - 1)
                    return S.push([c, p]),
                    this.size = ++y.size,
                    this;
                y = this.__data__ = new Ce(S)
            }
            return y.set(c, p),
            this.size = y.size,
            this
        }
        yt.prototype.clear = Oi,
        yt.prototype.delete = as,
        yt.prototype.get = os,
        yt.prototype.has = ls,
        yt.prototype.set = cs;
        function us(c, p) {
            var y = Xn(c)
              , S = !y && gr(c)
              , V = !y && !S && Qn(c)
              , H = !y && !S && !V && yr(c)
              , J = y || S || V || H
              , Q = J ? Vn(c.length, String) : []
              , ue = Q.length;
            for (var ie in c)
                ke.call(c, ie) && !(J && (ie == "length" || V && (ie == "offset" || ie == "parent") || H && (ie == "buffer" || ie == "byteLength" || ie == "byteOffset") || bs(ie, ue))) && Q.push(ie);
            return Q
        }
        function Zn(c, p) {
            for (var y = c.length; y--; )
                if (mr(c[y][0], p))
                    return y;
            return -1
        }
        function Di(c, p, y) {
            var S = p(c);
            return Xn(c) ? S : bn(S, y(c))
        }
        function Tn(c) {
            return c == null ? c === void 0 ? le : C : _e && _e in Object(c) ? Rt(c) : pr(c)
        }
        function dr(c) {
            return wt(c) && Tn(c) == o
        }
        function fr(c, p, y, S, V) {
            return c === p ? !0 : c == null || p == null || !wt(c) && !wt(p) ? c !== c && p !== p : hs(c, p, y, S, fr, V)
        }
        function hs(c, p, y, S, V, H) {
            var J = Xn(c)
              , Q = Xn(p)
              , ue = J ? l : Et(c)
              , ie = Q ? l : Et(p);
            ue = ue == o ? T : ue,
            ie = ie == o ? T : ie;
            var Ae = ue == T
              , qe = ie == T
              , fe = ue == ie;
            if (fe && Qn(c)) {
                if (!Qn(p))
                    return !1;
                J = !0,
                Ae = !1
            }
            if (fe && !Ae)
                return H || (H = new yt),
                J || yr(c) ? Mi(c, p, y, S, V, H) : ms(c, p, ue, y, S, V, H);
            if (!(y & r)) {
                var Se = Ae && ke.call(c, "__wrapped__")
                  , Ee = qe && ke.call(p, "__wrapped__");
                if (Se || Ee) {
                    var sn = Se ? c.value() : c
                      , Ft = Ee ? p.value() : p;
                    return H || (H = new yt),
                    V(sn, Ft, y, S, H)
                }
            }
            return fe ? (H || (H = new yt),
            gs(c, p, y, S, V, H)) : !1
        }
        function ds(c) {
            if (!br(c) || Es(c))
                return !1;
            var p = vr(c) ? Ci : je;
            return p.test(Le(c))
        }
        function fs(c) {
            return wt(c) && qi(c.length) && !!Z[Tn(c)]
        }
        function ps(c) {
            if (!ws(c))
                return Mt(c);
            var p = [];
            for (var y in Object(c))
                ke.call(c, y) && y != "constructor" && p.push(y);
            return p
        }
        function Mi(c, p, y, S, V, H) {
            var J = y & r
              , Q = c.length
              , ue = p.length;
            if (Q != ue && !(J && ue > Q))
                return !1;
            var ie = H.get(c);
            if (ie && H.get(p))
                return ie == p;
            var Ae = -1
              , qe = !0
              , fe = y & s ? new Gn : void 0;
            for (H.set(c, p),
            H.set(p, c); ++Ae < Q; ) {
                var Se = c[Ae]
                  , Ee = p[Ae];
                if (S)
                    var sn = J ? S(Ee, Se, Ae, p, c, H) : S(Se, Ee, Ae, c, p, H);
                if (sn !== void 0) {
                    if (sn)
                        continue;
                    qe = !1;
                    break
                }
                if (fe) {
                    if (!yn(p, function(Ft, Nn) {
                        if (!Jt(fe, Nn) && (Se === Ft || V(Se, Ft, y, S, H)))
                            return fe.push(Nn)
                    })) {
                        qe = !1;
                        break
                    }
                } else if (!(Se === Ee || V(Se, Ee, y, S, H))) {
                    qe = !1;
                    break
                }
            }
            return H.delete(c),
            H.delete(p),
            qe
        }
        function ms(c, p, y, S, V, H, J) {
            switch (y) {
            case he:
                if (c.byteLength != p.byteLength || c.byteOffset != p.byteOffset)
                    return !1;
                c = c.buffer,
                p = p.buffer;
            case Be:
                return !(c.byteLength != p.byteLength || !H(new rn(c), new rn(p)));
            case h:
            case f:
            case _:
                return mr(+c, +p);
            case d:
                return c.name == p.name && c.message == p.message;
            case D:
            case U:
                return c == p + "";
            case E:
                var Q = wn;
            case j:
                var ue = S & r;
                if (Q || (Q = He),
                c.size != p.size && !ue)
                    return !1;
                var ie = J.get(c);
                if (ie)
                    return ie == p;
                S |= s,
                J.set(c, p);
                var Ae = Mi(Q(c), Q(p), S, V, H, J);
                return J.delete(c),
                Ae;
            case G:
                if (X)
                    return X.call(c) == X.call(p)
            }
            return !1
        }
        function gs(c, p, y, S, V, H) {
            var J = y & r
              , Q = xn(c)
              , ue = Q.length
              , ie = xn(p)
              , Ae = ie.length;
            if (ue != Ae && !J)
                return !1;
            for (var qe = ue; qe--; ) {
                var fe = Q[qe];
                if (!(J ? fe in p : ke.call(p, fe)))
                    return !1
            }
            var Se = H.get(c);
            if (Se && H.get(p))
                return Se == p;
            var Ee = !0;
            H.set(c, p),
            H.set(p, c);
            for (var sn = J; ++qe < ue; ) {
                fe = Q[qe];
                var Ft = c[fe]
                  , Nn = p[fe];
                if (S)
                    var to = J ? S(Nn, Ft, fe, p, c, H) : S(Ft, Nn, fe, c, p, H);
                if (!(to === void 0 ? Ft === Nn || V(Ft, Nn, y, S, H) : to)) {
                    Ee = !1;
                    break
                }
                sn || (sn = fe == "constructor")
            }
            if (Ee && !sn) {
                var Er = c.constructor
                  , wr = p.constructor;
                Er != wr && "constructor"in c && "constructor"in p && !(typeof Er == "function" && Er instanceof Er && typeof wr == "function" && wr instanceof wr) && (Ee = !1)
            }
            return H.delete(c),
            H.delete(p),
            Ee
        }
        function xn(c) {
            return Di(c, Ri, vs)
        }
        function rt(c, p) {
            var y = c.__data__;
            return ys(p) ? y[typeof p == "string" ? "string" : "hash"] : y.map
        }
        function qt(c, p) {
            var y = En(c, p);
            return ds(y) ? y : void 0
        }
        function Rt(c) {
            var p = ke.call(c, _e)
              , y = c[_e];
            try {
                c[_e] = void 0;
                var S = !0
            } catch {}
            var V = _n.call(c);
            return S && (p ? c[_e] = y : delete c[_e]),
            V
        }
        var vs = vt ? function(c) {
            return c == null ? [] : (c = Object(c),
            vn(vt(c), function(p) {
                return gt.call(c, p)
            }))
        }
        : Cs
          , Et = Tn;
        (An && Et(new An(new ArrayBuffer(1))) != he || m && Et(new m) != E || v && Et(v.resolve()) != N || w && Et(new w) != j || A && Et(new A) != be) && (Et = function(c) {
            var p = Tn(c)
              , y = p == T ? c.constructor : void 0
              , S = y ? Le(y) : "";
            if (S)
                switch (S) {
                case M:
                    return he;
                case z:
                    return E;
                case F:
                    return N;
                case W:
                    return j;
                case q:
                    return be
                }
            return p
        }
        );
        function bs(c, p) {
            return p = p ?? a,
            !!p && (typeof c == "number" || $n.test(c)) && c > -1 && c % 1 == 0 && c < p
        }
        function ys(c) {
            var p = typeof c;
            return p == "string" || p == "number" || p == "symbol" || p == "boolean" ? c !== "__proto__" : c === null
        }
        function Es(c) {
            return !!Wn && Wn in c
        }
        function ws(c) {
            var p = c && c.constructor
              , y = typeof p == "function" && p.prototype || mt;
            return c === y
        }
        function pr(c) {
            return _n.call(c)
        }
        function Le(c) {
            if (c != null) {
                try {
                    return nn.call(c)
                } catch {}
                try {
                    return c + ""
                } catch {}
            }
            return ""
        }
        function mr(c, p) {
            return c === p || c !== c && p !== p
        }
        var gr = dr(function() {
            return arguments
        }()) ? dr : function(c) {
            return wt(c) && ke.call(c, "callee") && !gt.call(c, "callee")
        }
          , Xn = Array.isArray;
        function ki(c) {
            return c != null && qi(c.length) && !vr(c)
        }
        var Qn = Ie || As;
        function _s(c, p) {
            return fr(c, p)
        }
        function vr(c) {
            if (!br(c))
                return !1;
            var p = Tn(c);
            return p == g || p == b || p == u || p == O
        }
        function qi(c) {
            return typeof c == "number" && c > -1 && c % 1 == 0 && c <= a
        }
        function br(c) {
            var p = typeof c;
            return c != null && (p == "object" || p == "function")
        }
        function wt(c) {
            return c != null && typeof c == "object"
        }
        var yr = gn ? Qt(gn) : fs;
        function Ri(c) {
            return ki(c) ? us(c) : ps(c)
        }
        function Cs() {
            return []
        }
        function As() {
            return !1
        }
        i.exports = _s
    }
    )(jr, jr.exports);
    var hc = jr.exports
      , Ha = {};
    Object.defineProperty(Ha, "__esModule", {
        value: !0
    });
    const rm = uc
      , sm = hc;
    var sa;
    (function(i) {
        function t(s={}, a={}, o=!1) {
            typeof s != "object" && (s = {}),
            typeof a != "object" && (a = {});
            let l = rm(a);
            o || (l = Object.keys(l).reduce( (u, h) => (l[h] != null && (u[h] = l[h]),
            u), {}));
            for (const u in s)
                s[u] !== void 0 && a[u] === void 0 && (l[u] = s[u]);
            return Object.keys(l).length > 0 ? l : void 0
        }
        i.compose = t;
        function e(s={}, a={}) {
            typeof s != "object" && (s = {}),
            typeof a != "object" && (a = {});
            const o = Object.keys(s).concat(Object.keys(a)).reduce( (l, u) => (sm(s[u], a[u]) || (l[u] = a[u] === void 0 ? null : a[u]),
            l), {});
            return Object.keys(o).length > 0 ? o : void 0
        }
        i.diff = e;
        function n(s={}, a={}) {
            s = s || {};
            const o = Object.keys(a).reduce( (l, u) => (a[u] !== s[u] && s[u] !== void 0 && (l[u] = a[u]),
            l), {});
            return Object.keys(s).reduce( (l, u) => (s[u] !== a[u] && a[u] === void 0 && (l[u] = null),
            l), o)
        }
        i.invert = n;
        function r(s, a, o=!1) {
            if (typeof s != "object")
                return a;
            if (typeof a != "object")
                return;
            if (!o)
                return a;
            const l = Object.keys(a).reduce( (u, h) => (s[h] === void 0 && (u[h] = a[h]),
            u), {});
            return Object.keys(l).length > 0 ? l : void 0
        }
        i.transform = r
    }
    )(sa || (sa = {}));
    Ha.default = sa;
    var Zr = {};
    Object.defineProperty(Zr, "__esModule", {
        value: !0
    });
    var aa;
    (function(i) {
        function t(e) {
            return typeof e.delete == "number" ? e.delete : typeof e.retain == "number" ? e.retain : typeof e.retain == "object" && e.retain !== null ? 1 : typeof e.insert == "string" ? e.insert.length : 1
        }
        i.length = t
    }
    )(aa || (aa = {}));
    Zr.default = aa;
    var Ua = {};
    Object.defineProperty(Ua, "__esModule", {
        value: !0
    });
    const qo = Zr;
    class am {
        constructor(t) {
            this.ops = t,
            this.index = 0,
            this.offset = 0
        }
        hasNext() {
            return this.peekLength() < 1 / 0
        }
        next(t) {
            t || (t = 1 / 0);
            const e = this.ops[this.index];
            if (e) {
                const n = this.offset
                  , r = qo.default.length(e);
                if (t >= r - n ? (t = r - n,
                this.index += 1,
                this.offset = 0) : this.offset += t,
                typeof e.delete == "number")
                    return {
                        delete: t
                    };
                {
                    const s = {};
                    return e.attributes && (s.attributes = e.attributes),
                    typeof e.retain == "number" ? s.retain = t : typeof e.retain == "object" && e.retain !== null ? s.retain = e.retain : typeof e.insert == "string" ? s.insert = e.insert.substr(n, t) : s.insert = e.insert,
                    s
                }
            } else
                return {
                    retain: 1 / 0
                }
        }
        peek() {
            return this.ops[this.index]
        }
        peekLength() {
            return this.ops[this.index] ? qo.default.length(this.ops[this.index]) - this.offset : 1 / 0
        }
        peekType() {
            const t = this.ops[this.index];
            return t ? typeof t.delete == "number" ? "delete" : typeof t.retain == "number" || typeof t.retain == "object" && t.retain !== null ? "retain" : "insert" : "retain"
        }
        rest() {
            if (this.hasNext()) {
                if (this.offset === 0)
                    return this.ops.slice(this.index);
                {
                    const t = this.offset
                      , e = this.index
                      , n = this.next()
                      , r = this.ops.slice(this.index);
                    return this.offset = t,
                    this.index = e,
                    [n].concat(r)
                }
            } else
                return []
        }
    }
    Ua.default = am;
    (function(i, t) {
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
        t.AttributeMap = t.OpIterator = t.Op = void 0;
        const e = im
          , n = uc
          , r = hc
          , s = Ha;
        t.AttributeMap = s.default;
        const a = Zr;
        t.Op = a.default;
        const o = Ua;
        t.OpIterator = o.default;
        const l = "\0"
          , u = (f, d) => {
            if (typeof f != "object" || f === null)
                throw new Error(`cannot retain a ${typeof f}`);
            if (typeof d != "object" || d === null)
                throw new Error(`cannot retain a ${typeof d}`);
            const g = Object.keys(f)[0];
            if (!g || g !== Object.keys(d)[0])
                throw new Error(`embed types not matched: ${g} != ${Object.keys(d)[0]}`);
            return [g, f[g], d[g]]
        }
        ;
        class h {
            constructor(d) {
                Array.isArray(d) ? this.ops = d : d != null && Array.isArray(d.ops) ? this.ops = d.ops : this.ops = []
            }
            static registerEmbed(d, g) {
                this.handlers[d] = g
            }
            static unregisterEmbed(d) {
                delete this.handlers[d]
            }
            static getHandler(d) {
                const g = this.handlers[d];
                if (!g)
                    throw new Error(`no handlers for embed type "${d}"`);
                return g
            }
            insert(d, g) {
                const b = {};
                return typeof d == "string" && d.length === 0 ? this : (b.insert = d,
                g != null && typeof g == "object" && Object.keys(g).length > 0 && (b.attributes = g),
                this.push(b))
            }
            delete(d) {
                return d <= 0 ? this : this.push({
                    delete: d
                })
            }
            retain(d, g) {
                if (typeof d == "number" && d <= 0)
                    return this;
                const b = {
                    retain: d
                };
                return g != null && typeof g == "object" && Object.keys(g).length > 0 && (b.attributes = g),
                this.push(b)
            }
            push(d) {
                let g = this.ops.length
                  , b = this.ops[g - 1];
                if (d = n(d),
                typeof b == "object") {
                    if (typeof d.delete == "number" && typeof b.delete == "number")
                        return this.ops[g - 1] = {
                            delete: b.delete + d.delete
                        },
                        this;
                    if (typeof b.delete == "number" && d.insert != null && (g -= 1,
                    b = this.ops[g - 1],
                    typeof b != "object"))
                        return this.ops.unshift(d),
                        this;
                    if (r(d.attributes, b.attributes)) {
                        if (typeof d.insert == "string" && typeof b.insert == "string")
                            return this.ops[g - 1] = {
                                insert: b.insert + d.insert
                            },
                            typeof d.attributes == "object" && (this.ops[g - 1].attributes = d.attributes),
                            this;
                        if (typeof d.retain == "number" && typeof b.retain == "number")
                            return this.ops[g - 1] = {
                                retain: b.retain + d.retain
                            },
                            typeof d.attributes == "object" && (this.ops[g - 1].attributes = d.attributes),
                            this
                    }
                }
                return g === this.ops.length ? this.ops.push(d) : this.ops.splice(g, 0, d),
                this
            }
            chop() {
                const d = this.ops[this.ops.length - 1];
                return d && typeof d.retain == "number" && !d.attributes && this.ops.pop(),
                this
            }
            filter(d) {
                return this.ops.filter(d)
            }
            forEach(d) {
                this.ops.forEach(d)
            }
            map(d) {
                return this.ops.map(d)
            }
            partition(d) {
                const g = []
                  , b = [];
                return this.forEach(E => {
                    (d(E) ? g : b).push(E)
                }
                ),
                [g, b]
            }
            reduce(d, g) {
                return this.ops.reduce(d, g)
            }
            changeLength() {
                return this.reduce( (d, g) => g.insert ? d + a.default.length(g) : g.delete ? d - g.delete : d, 0)
            }
            length() {
                return this.reduce( (d, g) => d + a.default.length(g), 0)
            }
            slice(d=0, g=1 / 0) {
                const b = []
                  , E = new o.default(this.ops);
                let _ = 0;
                for (; _ < g && E.hasNext(); ) {
                    let C;
                    _ < d ? C = E.next(d - _) : (C = E.next(g - _),
                    b.push(C)),
                    _ += a.default.length(C)
                }
                return new h(b)
            }
            compose(d) {
                const g = new o.default(this.ops)
                  , b = new o.default(d.ops)
                  , E = []
                  , _ = b.peek();
                if (_ != null && typeof _.retain == "number" && _.attributes == null) {
                    let T = _.retain;
                    for (; g.peekType() === "insert" && g.peekLength() <= T; )
                        T -= g.peekLength(),
                        E.push(g.next());
                    _.retain - T > 0 && b.next(_.retain - T)
                }
                const C = new h(E);
                for (; g.hasNext() || b.hasNext(); )
                    if (b.peekType() === "insert")
                        C.push(b.next());
                    else if (g.peekType() === "delete")
                        C.push(g.next());
                    else {
                        const T = Math.min(g.peekLength(), b.peekLength())
                          , N = g.next(T)
                          , O = b.next(T);
                        if (O.retain) {
                            const D = {};
                            if (typeof N.retain == "number")
                                D.retain = typeof O.retain == "number" ? T : O.retain;
                            else if (typeof O.retain == "number")
                                N.retain == null ? D.insert = N.insert : D.retain = N.retain;
                            else {
                                const U = N.retain == null ? "insert" : "retain"
                                  , [G,le,be] = u(N[U], O.retain)
                                  , Be = h.getHandler(G);
                                D[U] = {
                                    [G]: Be.compose(le, be, U === "retain")
                                }
                            }
                            const j = s.default.compose(N.attributes, O.attributes, typeof N.retain == "number");
                            if (j && (D.attributes = j),
                            C.push(D),
                            !b.hasNext() && r(C.ops[C.ops.length - 1], D)) {
                                const U = new h(g.rest());
                                return C.concat(U).chop()
                            }
                        } else
                            typeof O.delete == "number" && (typeof N.retain == "number" || typeof N.retain == "object" && N.retain !== null) && C.push(O)
                    }
                return C.chop()
            }
            concat(d) {
                const g = new h(this.ops.slice());
                return d.ops.length > 0 && (g.push(d.ops[0]),
                g.ops = g.ops.concat(d.ops.slice(1))),
                g
            }
            diff(d, g) {
                if (this.ops === d.ops)
                    return new h;
                const b = [this, d].map(N => N.map(O => {
                    if (O.insert != null)
                        return typeof O.insert == "string" ? O.insert : l;
                    const D = N === d ? "on" : "with";
                    throw new Error("diff() called " + D + " non-document")
                }
                ).join(""))
                  , E = new h
                  , _ = e(b[0], b[1], g, !0)
                  , C = new o.default(this.ops)
                  , T = new o.default(d.ops);
                return _.forEach(N => {
                    let O = N[1].length;
                    for (; O > 0; ) {
                        let D = 0;
                        switch (N[0]) {
                        case e.INSERT:
                            D = Math.min(T.peekLength(), O),
                            E.push(T.next(D));
                            break;
                        case e.DELETE:
                            D = Math.min(O, C.peekLength()),
                            C.next(D),
                            E.delete(D);
                            break;
                        case e.EQUAL:
                            D = Math.min(C.peekLength(), T.peekLength(), O);
                            const j = C.next(D)
                              , U = T.next(D);
                            r(j.insert, U.insert) ? E.retain(D, s.default.diff(j.attributes, U.attributes)) : E.push(U).delete(D);
                            break
                        }
                        O -= D
                    }
                }
                ),
                E.chop()
            }
            eachLine(d, g=`
`) {
                const b = new o.default(this.ops);
                let E = new h
                  , _ = 0;
                for (; b.hasNext(); ) {
                    if (b.peekType() !== "insert")
                        return;
                    const C = b.peek()
                      , T = a.default.length(C) - b.peekLength()
                      , N = typeof C.insert == "string" ? C.insert.indexOf(g, T) - T : -1;
                    if (N < 0)
                        E.push(b.next());
                    else if (N > 0)
                        E.push(b.next(N));
                    else {
                        if (d(E, b.next(1).attributes || {}, _) === !1)
                            return;
                        _ += 1,
                        E = new h
                    }
                }
                E.length() > 0 && d(E, {}, _)
            }
            invert(d) {
                const g = new h;
                return this.reduce( (b, E) => {
                    if (E.insert)
                        g.delete(a.default.length(E));
                    else {
                        if (typeof E.retain == "number" && E.attributes == null)
                            return g.retain(E.retain),
                            b + E.retain;
                        if (E.delete || typeof E.retain == "number") {
                            const _ = E.delete || E.retain;
                            return d.slice(b, b + _).forEach(T => {
                                E.delete ? g.push(T) : E.retain && E.attributes && g.retain(a.default.length(T), s.default.invert(E.attributes, T.attributes))
                            }
                            ),
                            b + _
                        } else if (typeof E.retain == "object" && E.retain !== null) {
                            const _ = d.slice(b, b + 1)
                              , C = new o.default(_.ops).next()
                              , [T,N,O] = u(E.retain, C.insert)
                              , D = h.getHandler(T);
                            return g.retain({
                                [T]: D.invert(N, O)
                            }, s.default.invert(E.attributes, C.attributes)),
                            b + 1
                        }
                    }
                    return b
                }
                , 0),
                g.chop()
            }
            transform(d, g=!1) {
                if (g = !!g,
                typeof d == "number")
                    return this.transformPosition(d, g);
                const b = d
                  , E = new o.default(this.ops)
                  , _ = new o.default(b.ops)
                  , C = new h;
                for (; E.hasNext() || _.hasNext(); )
                    if (E.peekType() === "insert" && (g || _.peekType() !== "insert"))
                        C.retain(a.default.length(E.next()));
                    else if (_.peekType() === "insert")
                        C.push(_.next());
                    else {
                        const T = Math.min(E.peekLength(), _.peekLength())
                          , N = E.next(T)
                          , O = _.next(T);
                        if (N.delete)
                            continue;
                        if (O.delete)
                            C.push(O);
                        else {
                            const D = N.retain
                              , j = O.retain;
                            let U = typeof j == "object" && j !== null ? j : T;
                            if (typeof D == "object" && D !== null && typeof j == "object" && j !== null) {
                                const G = Object.keys(D)[0];
                                if (G === Object.keys(j)[0]) {
                                    const le = h.getHandler(G);
                                    le && (U = {
                                        [G]: le.transform(D[G], j[G], g)
                                    })
                                }
                            }
                            C.retain(U, s.default.transform(N.attributes, O.attributes, g))
                        }
                    }
                return C.chop()
            }
            transformPosition(d, g=!1) {
                g = !!g;
                const b = new o.default(this.ops);
                let E = 0;
                for (; b.hasNext() && E <= d; ) {
                    const _ = b.peekLength()
                      , C = b.peekType();
                    if (b.next(),
                    C === "delete") {
                        d -= Math.min(_, d - E);
                        continue
                    } else
                        C === "insert" && (E < d || !g) && (d += _);
                    E += _
                }
                return d
            }
        }
        h.Op = a.default,
        h.OpIterator = o.default,
        h.AttributeMap = s.default,
        h.handlers = {},
        t.default = h,
        i.exports = h,
        i.exports.default = h
    }
    )(ra, ra.exports);
    var nt = ra.exports;
    const P = Sl(nt);
    class dt extends Ge {
        static value() {}
        optimize() {
            (this.prev || this.next) && this.remove()
        }
        length() {
            return 0
        }
        value() {
            return ""
        }
    }
    dt.blotName = "break";
    dt.tagName = "BR";
    let ut = class extends Pr {
    }
    ;
    function Xr(i) {
        return i.replace(/[&<>"']/g, t => ({
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;"
        })[t])
    }
    const Ct = class Ct extends Fa {
        static compare(t, e) {
            const n = Ct.order.indexOf(t)
              , r = Ct.order.indexOf(e);
            return n >= 0 || r >= 0 ? n - r : t === e ? 0 : t < e ? -1 : 1
        }
        formatAt(t, e, n, r) {
            if (Ct.compare(this.statics.blotName, n) < 0 && this.scroll.query(n, B.BLOT)) {
                const s = this.isolate(t, e);
                r && s.wrap(n, r)
            } else
                super.formatAt(t, e, n, r)
        }
        optimize(t) {
            if (super.optimize(t),
            this.parent instanceof Ct && Ct.compare(this.statics.blotName, this.parent.statics.blotName) > 0) {
                const e = this.parent.isolate(this.offset(), this.length());
                this.moveChildren(e),
                e.wrap(this)
            }
        }
    }
    ;
    k(Ct, "allowedChildren", [Ct, dt, Ge, ut]),
    k(Ct, "order", ["cursor", "inline", "link", "underline", "strike", "italic", "bold", "script", "code"]);
    let It = Ct;
    const Ro = 1;
    class we extends Qi {
        constructor() {
            super(...arguments);
            k(this, "cache", {})
        }
        delta() {
            return this.cache.delta == null && (this.cache.delta = dc(this)),
            this.cache.delta
        }
        deleteAt(e, n) {
            super.deleteAt(e, n),
            this.cache = {}
        }
        formatAt(e, n, r, s) {
            n <= 0 || (this.scroll.query(r, B.BLOCK) ? e + n === this.length() && this.format(r, s) : super.formatAt(e, Math.min(n, this.length() - e - 1), r, s),
            this.cache = {})
        }
        insertAt(e, n, r) {
            if (r != null) {
                super.insertAt(e, n, r),
                this.cache = {};
                return
            }
            if (n.length === 0)
                return;
            const s = n.split(`
`)
              , a = s.shift();
            a.length > 0 && (e < this.length() - 1 || this.children.tail == null ? super.insertAt(Math.min(e, this.length() - 1), a) : this.children.tail.insertAt(this.children.tail.length(), a),
            this.cache = {});
            let o = this;
            s.reduce( (l, u) => (o = o.split(l, !0),
            o.insertAt(0, u),
            u.length), e + a.length)
        }
        insertBefore(e, n) {
            const {head: r} = this.children;
            super.insertBefore(e, n),
            r instanceof dt && r.remove(),
            this.cache = {}
        }
        length() {
            return this.cache.length == null && (this.cache.length = super.length() + Ro),
            this.cache.length
        }
        moveChildren(e, n) {
            super.moveChildren(e, n),
            this.cache = {}
        }
        optimize(e) {
            super.optimize(e),
            this.cache = {}
        }
        path(e) {
            return super.path(e, !0)
        }
        removeChild(e) {
            super.removeChild(e),
            this.cache = {}
        }
        split(e) {
            let n = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !1;
            if (n && (e === 0 || e >= this.length() - Ro)) {
                const s = this.clone();
                return e === 0 ? (this.parent.insertBefore(s, this),
                this) : (this.parent.insertBefore(s, this.next),
                s)
            }
            const r = super.split(e, n);
            return this.cache = {},
            r
        }
    }
    we.blotName = "block";
    we.tagName = "P";
    we.defaultChild = dt;
    we.allowedChildren = [dt, It, Ge, ut];
    class tt extends Ge {
        attach() {
            super.attach(),
            this.attributes = new Vr(this.domNode)
        }
        delta() {
            return new P().insert(this.value(), {
                ...this.formats(),
                ...this.attributes.values()
            })
        }
        format(t, e) {
            const n = this.scroll.query(t, B.BLOCK_ATTRIBUTE);
            n != null && this.attributes.attribute(n, e)
        }
        formatAt(t, e, n, r) {
            this.format(n, r)
        }
        insertAt(t, e, n) {
            if (n != null) {
                super.insertAt(t, e, n);
                return
            }
            const r = e.split(`
`)
              , s = r.pop()
              , a = r.map(l => {
                const u = this.scroll.create(we.blotName);
                return u.insertAt(0, l),
                u
            }
            )
              , o = this.split(t);
            a.forEach(l => {
                this.parent.insertBefore(l, o)
            }
            ),
            s && this.parent.insertBefore(this.scroll.create("text", s), o)
        }
    }
    tt.scope = B.BLOCK_BLOT;
    function dc(i) {
        let t = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !0;
        return i.descendants(xe).reduce( (e, n) => n.length() === 0 ? e : e.insert(n.value(), Je(n, {}, t)), new P).insert(`
`, Je(i))
    }
    function Je(i) {
        let t = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : {}
          , e = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : !0;
        return i == null || ("formats"in i && typeof i.formats == "function" && (t = {
            ...t,
            ...i.formats()
        },
        e && delete t["code-token"]),
        i.parent == null || i.parent.statics.blotName === "scroll" || i.parent.statics.scope !== i.statics.scope) ? t : Je(i.parent, t, e)
    }
    const Qe = class Qe extends Ge {
        static value() {}
        constructor(t, e, n) {
            super(t, e),
            this.selection = n,
            this.textNode = document.createTextNode(Qe.CONTENTS),
            this.domNode.appendChild(this.textNode),
            this.savedLength = 0
        }
        detach() {
            this.parent != null && this.parent.removeChild(this)
        }
        format(t, e) {
            if (this.savedLength !== 0) {
                super.format(t, e);
                return
            }
            let n = this
              , r = 0;
            for (; n != null && n.statics.scope !== B.BLOCK_BLOT; )
                r += n.offset(n.parent),
                n = n.parent;
            n != null && (this.savedLength = Qe.CONTENTS.length,
            n.optimize(),
            n.formatAt(r, Qe.CONTENTS.length, t, e),
            this.savedLength = 0)
        }
        index(t, e) {
            return t === this.textNode ? 0 : super.index(t, e)
        }
        length() {
            return this.savedLength
        }
        position() {
            return [this.textNode, this.textNode.data.length]
        }
        remove() {
            super.remove(),
            this.parent = null
        }
        restore() {
            if (this.selection.composing || this.parent == null)
                return null;
            const t = this.selection.getNativeRange();
            for (; this.domNode.lastChild != null && this.domNode.lastChild !== this.textNode; )
                this.domNode.parentNode.insertBefore(this.domNode.lastChild, this.domNode);
            const e = this.prev instanceof ut ? this.prev : null
              , n = e ? e.length() : 0
              , r = this.next instanceof ut ? this.next : null
              , s = r ? r.text : ""
              , {textNode: a} = this
              , o = a.data.split(Qe.CONTENTS).join("");
            a.data = Qe.CONTENTS;
            let l;
            if (e)
                l = e,
                (o || r) && (e.insertAt(e.length(), o + s),
                r && r.remove());
            else if (r)
                l = r,
                r.insertAt(0, o);
            else {
                const u = document.createTextNode(o);
                l = this.scroll.create(u),
                this.parent.insertBefore(l, this)
            }
            if (this.remove(),
            t) {
                const u = (d, g) => e && d === e.domNode ? g : d === a ? n + g - 1 : r && d === r.domNode ? n + o.length + g : null
                  , h = u(t.start.node, t.start.offset)
                  , f = u(t.end.node, t.end.offset);
                if (h !== null && f !== null)
                    return {
                        startNode: l.domNode,
                        startOffset: h,
                        endNode: l.domNode,
                        endOffset: f
                    }
            }
            return null
        }
        update(t, e) {
            if (t.some(n => n.type === "characterData" && n.target === this.textNode)) {
                const n = this.restore();
                n && (e.range = n)
            }
        }
        optimize(t) {
            super.optimize(t);
            let {parent: e} = this;
            for (; e; ) {
                if (e.domNode.tagName === "A") {
                    this.savedLength = Qe.CONTENTS.length,
                    e.isolate(this.offset(e), this.length()).unwrap(),
                    this.savedLength = 0;
                    break
                }
                e = e.parent
            }
        }
        value() {
            return ""
        }
    }
    ;
    k(Qe, "blotName", "cursor"),
    k(Qe, "className", "ql-cursor"),
    k(Qe, "tagName", "span"),
    k(Qe, "CONTENTS", "\uFEFF");
    let pi = Qe;
    var fc = {
        exports: {}
    };
    (function(i) {
        var t = Object.prototype.hasOwnProperty
          , e = "~";
        function n() {}
        Object.create && (n.prototype = Object.create(null),
        new n().__proto__ || (e = !1));
        function r(l, u, h) {
            this.fn = l,
            this.context = u,
            this.once = h || !1
        }
        function s(l, u, h, f, d) {
            if (typeof h != "function")
                throw new TypeError("The listener must be a function");
            var g = new r(h,f || l,d)
              , b = e ? e + u : u;
            return l._events[b] ? l._events[b].fn ? l._events[b] = [l._events[b], g] : l._events[b].push(g) : (l._events[b] = g,
            l._eventsCount++),
            l
        }
        function a(l, u) {
            --l._eventsCount === 0 ? l._events = new n : delete l._events[u]
        }
        function o() {
            this._events = new n,
            this._eventsCount = 0
        }
        o.prototype.eventNames = function() {
            var u = [], h, f;
            if (this._eventsCount === 0)
                return u;
            for (f in h = this._events)
                t.call(h, f) && u.push(e ? f.slice(1) : f);
            return Object.getOwnPropertySymbols ? u.concat(Object.getOwnPropertySymbols(h)) : u
        }
        ,
        o.prototype.listeners = function(u) {
            var h = e ? e + u : u
              , f = this._events[h];
            if (!f)
                return [];
            if (f.fn)
                return [f.fn];
            for (var d = 0, g = f.length, b = new Array(g); d < g; d++)
                b[d] = f[d].fn;
            return b
        }
        ,
        o.prototype.listenerCount = function(u) {
            var h = e ? e + u : u
              , f = this._events[h];
            return f ? f.fn ? 1 : f.length : 0
        }
        ,
        o.prototype.emit = function(u, h, f, d, g, b) {
            var E = e ? e + u : u;
            if (!this._events[E])
                return !1;
            var _ = this._events[E], C = arguments.length, T, N;
            if (_.fn) {
                switch (_.once && this.removeListener(u, _.fn, void 0, !0),
                C) {
                case 1:
                    return _.fn.call(_.context),
                    !0;
                case 2:
                    return _.fn.call(_.context, h),
                    !0;
                case 3:
                    return _.fn.call(_.context, h, f),
                    !0;
                case 4:
                    return _.fn.call(_.context, h, f, d),
                    !0;
                case 5:
                    return _.fn.call(_.context, h, f, d, g),
                    !0;
                case 6:
                    return _.fn.call(_.context, h, f, d, g, b),
                    !0
                }
                for (N = 1,
                T = new Array(C - 1); N < C; N++)
                    T[N - 1] = arguments[N];
                _.fn.apply(_.context, T)
            } else {
                var O = _.length, D;
                for (N = 0; N < O; N++)
                    switch (_[N].once && this.removeListener(u, _[N].fn, void 0, !0),
                    C) {
                    case 1:
                        _[N].fn.call(_[N].context);
                        break;
                    case 2:
                        _[N].fn.call(_[N].context, h);
                        break;
                    case 3:
                        _[N].fn.call(_[N].context, h, f);
                        break;
                    case 4:
                        _[N].fn.call(_[N].context, h, f, d);
                        break;
                    default:
                        if (!T)
                            for (D = 1,
                            T = new Array(C - 1); D < C; D++)
                                T[D - 1] = arguments[D];
                        _[N].fn.apply(_[N].context, T)
                    }
            }
            return !0
        }
        ,
        o.prototype.on = function(u, h, f) {
            return s(this, u, h, f, !1)
        }
        ,
        o.prototype.once = function(u, h, f) {
            return s(this, u, h, f, !0)
        }
        ,
        o.prototype.removeListener = function(u, h, f, d) {
            var g = e ? e + u : u;
            if (!this._events[g])
                return this;
            if (!h)
                return a(this, g),
                this;
            var b = this._events[g];
            if (b.fn)
                b.fn === h && (!d || b.once) && (!f || b.context === f) && a(this, g);
            else {
                for (var E = 0, _ = [], C = b.length; E < C; E++)
                    (b[E].fn !== h || d && !b[E].once || f && b[E].context !== f) && _.push(b[E]);
                _.length ? this._events[g] = _.length === 1 ? _[0] : _ : a(this, g)
            }
            return this
        }
        ,
        o.prototype.removeAllListeners = function(u) {
            var h;
            return u ? (h = e ? e + u : u,
            this._events[h] && a(this, h)) : (this._events = new n,
            this._eventsCount = 0),
            this
        }
        ,
        o.prototype.off = o.prototype.removeListener,
        o.prototype.addListener = o.prototype.on,
        o.prefixed = e,
        o.EventEmitter = o,
        i.exports = o
    }
    )(fc);
    var om = fc.exports;
    const lm = Sl(om)
      , oa = new WeakMap
      , la = ["error", "warn", "log", "info"];
    let ca = "warn";
    function pc(i) {
        if (ca && la.indexOf(i) <= la.indexOf(ca)) {
            for (var t = arguments.length, e = new Array(t > 1 ? t - 1 : 0), n = 1; n < t; n++)
                e[n - 1] = arguments[n];
            console[i](...e)
        }
    }
    function Wt(i) {
        return la.reduce( (t, e) => (t[e] = pc.bind(console, e, i),
        t), {})
    }
    Wt.level = i => {
        ca = i
    }
    ;
    pc.level = Wt.level;
    const Ls = Wt("quill:events")
      , cm = ["selectionchange", "mousedown", "mouseup", "click"];
    cm.forEach(i => {
        document.addEventListener(i, function() {
            for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++)
                e[n] = arguments[n];
            Array.from(document.querySelectorAll(".ql-container")).forEach(r => {
                const s = oa.get(r);
                s && s.emitter && s.emitter.handleDOM(...e)
            }
            )
        })
    }
    );
    class R extends lm {
        constructor() {
            super(),
            this.domListeners = {},
            this.on("error", Ls.error)
        }
        emit() {
            for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++)
                e[n] = arguments[n];
            return Ls.log.call(Ls, ...e),
            super.emit(...e)
        }
        handleDOM(t) {
            for (var e = arguments.length, n = new Array(e > 1 ? e - 1 : 0), r = 1; r < e; r++)
                n[r - 1] = arguments[r];
            (this.domListeners[t.type] || []).forEach(s => {
                let {node: a, handler: o} = s;
                (t.target === a || a.contains(t.target)) && o(t, ...n)
            }
            )
        }
        listenDOM(t, e, n) {
            this.domListeners[t] || (this.domListeners[t] = []),
            this.domListeners[t].push({
                node: e,
                handler: n
            })
        }
    }
    k(R, "events", {
        EDITOR_CHANGE: "editor-change",
        SCROLL_BEFORE_UPDATE: "scroll-before-update",
        SCROLL_BLOT_MOUNT: "scroll-blot-mount",
        SCROLL_BLOT_UNMOUNT: "scroll-blot-unmount",
        SCROLL_OPTIMIZE: "scroll-optimize",
        SCROLL_UPDATE: "scroll-update",
        SCROLL_EMBED_UPDATE: "scroll-embed-update",
        SELECTION_CHANGE: "selection-change",
        TEXT_CHANGE: "text-change",
        COMPOSITION_BEFORE_START: "composition-before-start",
        COMPOSITION_START: "composition-start",
        COMPOSITION_BEFORE_END: "composition-before-end",
        COMPOSITION_END: "composition-end"
    }),
    k(R, "sources", {
        API: "api",
        SILENT: "silent",
        USER: "user"
    });
    const Os = Wt("quill:selection");
    class kn {
        constructor(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : 0;
            this.index = t,
            this.length = e
        }
    }
    class um {
        constructor(t, e) {
            this.emitter = e,
            this.scroll = t,
            this.composing = !1,
            this.mouseDown = !1,
            this.root = this.scroll.domNode,
            this.cursor = this.scroll.create("cursor", this),
            this.savedRange = new kn(0,0),
            this.lastRange = this.savedRange,
            this.lastNative = null,
            this.handleComposition(),
            this.handleDragging(),
            this.emitter.listenDOM("selectionchange", document, () => {
                !this.mouseDown && !this.composing && setTimeout(this.update.bind(this, R.sources.USER), 1)
            }
            ),
            this.emitter.on(R.events.SCROLL_BEFORE_UPDATE, () => {
                if (!this.hasFocus())
                    return;
                const n = this.getNativeRange();
                n != null && n.start.node !== this.cursor.textNode && this.emitter.once(R.events.SCROLL_UPDATE, (r, s) => {
                    try {
                        this.root.contains(n.start.node) && this.root.contains(n.end.node) && this.setNativeRange(n.start.node, n.start.offset, n.end.node, n.end.offset);
                        const a = s.some(o => o.type === "characterData" || o.type === "childList" || o.type === "attributes" && o.target === this.root);
                        this.update(a ? R.sources.SILENT : r)
                    } catch {}
                }
                )
            }
            ),
            this.emitter.on(R.events.SCROLL_OPTIMIZE, (n, r) => {
                if (r.range) {
                    const {startNode: s, startOffset: a, endNode: o, endOffset: l} = r.range;
                    this.setNativeRange(s, a, o, l),
                    this.update(R.sources.SILENT)
                }
            }
            ),
            this.update(R.sources.SILENT)
        }
        handleComposition() {
            this.emitter.on(R.events.COMPOSITION_BEFORE_START, () => {
                this.composing = !0
            }
            ),
            this.emitter.on(R.events.COMPOSITION_END, () => {
                if (this.composing = !1,
                this.cursor.parent) {
                    const t = this.cursor.restore();
                    if (!t)
                        return;
                    setTimeout( () => {
                        this.setNativeRange(t.startNode, t.startOffset, t.endNode, t.endOffset)
                    }
                    , 1)
                }
            }
            )
        }
        handleDragging() {
            this.emitter.listenDOM("mousedown", document.body, () => {
                this.mouseDown = !0
            }
            ),
            this.emitter.listenDOM("mouseup", document.body, () => {
                this.mouseDown = !1,
                this.update(R.sources.USER)
            }
            )
        }
        focus() {
            this.hasFocus() || (this.root.focus({
                preventScroll: !0
            }),
            this.setRange(this.savedRange))
        }
        format(t, e) {
            this.scroll.update();
            const n = this.getNativeRange();
            if (!(n == null || !n.native.collapsed || this.scroll.query(t, B.BLOCK))) {
                if (n.start.node !== this.cursor.textNode) {
                    const r = this.scroll.find(n.start.node, !1);
                    if (r == null)
                        return;
                    if (r instanceof xe) {
                        const s = r.split(n.start.offset);
                        r.parent.insertBefore(this.cursor, s)
                    } else
                        r.insertBefore(this.cursor, n.start.node);
                    this.cursor.attach()
                }
                this.cursor.format(t, e),
                this.scroll.optimize(),
                this.setNativeRange(this.cursor.textNode, this.cursor.textNode.data.length),
                this.update()
            }
        }
        getBounds(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : 0;
            const n = this.scroll.length();
            t = Math.min(t, n - 1),
            e = Math.min(t + e, n - 1) - t;
            let r, [s,a] = this.scroll.leaf(t);
            if (s == null)
                return null;
            if (e > 0 && a === s.length()) {
                const [h] = this.scroll.leaf(t + 1);
                if (h) {
                    const [f] = this.scroll.line(t)
                      , [d] = this.scroll.line(t + 1);
                    f === d && (s = h,
                    a = 0)
                }
            }
            [r,a] = s.position(a, !0);
            const o = document.createRange();
            if (e > 0)
                return o.setStart(r, a),
                [s,a] = this.scroll.leaf(t + e),
                s == null ? null : ([r,a] = s.position(a, !0),
                o.setEnd(r, a),
                o.getBoundingClientRect());
            let l = "left", u;
            if (r instanceof Text) {
                if (!r.data.length)
                    return null;
                a < r.data.length ? (o.setStart(r, a),
                o.setEnd(r, a + 1)) : (o.setStart(r, a - 1),
                o.setEnd(r, a),
                l = "right"),
                u = o.getBoundingClientRect()
            } else {
                if (!(s.domNode instanceof Element))
                    return null;
                u = s.domNode.getBoundingClientRect(),
                a > 0 && (l = "right")
            }
            return {
                bottom: u.top + u.height,
                height: u.height,
                left: u[l],
                right: u[l],
                top: u.top,
                width: 0
            }
        }
        getNativeRange() {
            const t = document.getSelection();
            if (t == null || t.rangeCount <= 0)
                return null;
            const e = t.getRangeAt(0);
            if (e == null)
                return null;
            const n = this.normalizeNative(e);
            return Os.info("getNativeRange", n),
            n
        }
        getRange() {
            const t = this.scroll.domNode;
            if ("isConnected"in t && !t.isConnected)
                return [null, null];
            const e = this.getNativeRange();
            return e == null ? [null, null] : [this.normalizedToRange(e), e]
        }
        hasFocus() {
            return document.activeElement === this.root || document.activeElement != null && Ds(this.root, document.activeElement)
        }
        normalizedToRange(t) {
            const e = [[t.start.node, t.start.offset]];
            t.native.collapsed || e.push([t.end.node, t.end.offset]);
            const n = e.map(a => {
                const [o,l] = a
                  , u = this.scroll.find(o, !0)
                  , h = u.offset(this.scroll);
                return l === 0 ? h : u instanceof xe ? h + u.index(o, l) : h + u.length()
            }
            )
              , r = Math.min(Math.max(...n), this.scroll.length() - 1)
              , s = Math.min(r, ...n);
            return new kn(s,r - s)
        }
        normalizeNative(t) {
            if (!Ds(this.root, t.startContainer) || !t.collapsed && !Ds(this.root, t.endContainer))
                return null;
            const e = {
                start: {
                    node: t.startContainer,
                    offset: t.startOffset
                },
                end: {
                    node: t.endContainer,
                    offset: t.endOffset
                },
                native: t
            };
            return [e.start, e.end].forEach(n => {
                let {node: r, offset: s} = n;
                for (; !(r instanceof Text) && r.childNodes.length > 0; )
                    if (r.childNodes.length > s)
                        r = r.childNodes[s],
                        s = 0;
                    else if (r.childNodes.length === s)
                        r = r.lastChild,
                        r instanceof Text ? s = r.data.length : r.childNodes.length > 0 ? s = r.childNodes.length : s = r.childNodes.length + 1;
                    else
                        break;
                n.node = r,
                n.offset = s
            }
            ),
            e
        }
        rangeToNative(t) {
            const e = this.scroll.length()
              , n = (r, s) => {
                r = Math.min(e - 1, r);
                const [a,o] = this.scroll.leaf(r);
                return a ? a.position(o, s) : [null, -1]
            }
            ;
            return [...n(t.index, !1), ...n(t.index + t.length, !0)]
        }
        setNativeRange(t, e) {
            let n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : t
              , r = arguments.length > 3 && arguments[3] !== void 0 ? arguments[3] : e
              , s = arguments.length > 4 && arguments[4] !== void 0 ? arguments[4] : !1;
            if (Os.info("setNativeRange", t, e, n, r),
            t != null && (this.root.parentNode == null || t.parentNode == null || n.parentNode == null))
                return;
            const a = document.getSelection();
            if (a != null)
                if (t != null) {
                    this.hasFocus() || this.root.focus({
                        preventScroll: !0
                    });
                    const {native: o} = this.getNativeRange() || {};
                    if (o == null || s || t !== o.startContainer || e !== o.startOffset || n !== o.endContainer || r !== o.endOffset) {
                        t instanceof Element && t.tagName === "BR" && (e = Array.from(t.parentNode.childNodes).indexOf(t),
                        t = t.parentNode),
                        n instanceof Element && n.tagName === "BR" && (r = Array.from(n.parentNode.childNodes).indexOf(n),
                        n = n.parentNode);
                        const l = document.createRange();
                        l.setStart(t, e),
                        l.setEnd(n, r),
                        a.removeAllRanges(),
                        a.addRange(l)
                    }
                } else
                    a.removeAllRanges(),
                    this.root.blur()
        }
        setRange(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !1
              , n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : R.sources.API;
            if (typeof e == "string" && (n = e,
            e = !1),
            Os.info("setRange", t),
            t != null) {
                const r = this.rangeToNative(t);
                this.setNativeRange(...r, e)
            } else
                this.setNativeRange(null);
            this.update(n)
        }
        update() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : R.sources.USER;
            const e = this.lastRange
              , [n,r] = this.getRange();
            if (this.lastRange = n,
            this.lastNative = r,
            this.lastRange != null && (this.savedRange = this.lastRange),
            !Ra(e, this.lastRange)) {
                if (!this.composing && r != null && r.native.collapsed && r.start.node !== this.cursor.textNode) {
                    const a = this.cursor.restore();
                    a && this.setNativeRange(a.startNode, a.startOffset, a.endNode, a.endOffset)
                }
                const s = [R.events.SELECTION_CHANGE, oi(this.lastRange), oi(e), t];
                this.emitter.emit(R.events.EDITOR_CHANGE, ...s),
                t !== R.sources.SILENT && this.emitter.emit(...s)
            }
        }
    }
    function Ds(i, t) {
        try {
            t.parentNode
        } catch {
            return !1
        }
        return i.contains(t)
    }
    const hm = /^[ -~]*$/;
    class dm {
        constructor(t) {
            this.scroll = t,
            this.delta = this.getDelta()
        }
        applyDelta(t) {
            this.scroll.update();
            let e = this.scroll.length();
            this.scroll.batchStart();
            const n = Fo(t)
              , r = new P;
            return pm(n.ops.slice()).reduce( (a, o) => {
                const l = nt.Op.length(o);
                let u = o.attributes || {}
                  , h = !1
                  , f = !1;
                if (o.insert != null) {
                    if (r.retain(l),
                    typeof o.insert == "string") {
                        const b = o.insert;
                        f = !b.endsWith(`
`) && (e <= a || !!this.scroll.descendant(tt, a)[0]),
                        this.scroll.insertAt(a, b);
                        const [E,_] = this.scroll.line(a);
                        let C = un({}, Je(E));
                        if (E instanceof we) {
                            const [T] = E.descendant(xe, _);
                            T && (C = un(C, Je(T)))
                        }
                        u = nt.AttributeMap.diff(C, u) || {}
                    } else if (typeof o.insert == "object") {
                        const b = Object.keys(o.insert)[0];
                        if (b == null)
                            return a;
                        const E = this.scroll.query(b, B.INLINE) != null;
                        if (E)
                            (e <= a || this.scroll.descendant(tt, a)[0]) && (f = !0);
                        else if (a > 0) {
                            const [_,C] = this.scroll.descendant(xe, a - 1);
                            _ instanceof ut ? _.value()[C] !== `
` && (h = !0) : _ instanceof Ge && _.statics.scope === B.INLINE_BLOT && (h = !0)
                        }
                        if (this.scroll.insertAt(a, b, o.insert[b]),
                        E) {
                            const [_] = this.scroll.descendant(xe, a);
                            if (_) {
                                const C = un({}, Je(_));
                                u = nt.AttributeMap.diff(C, u) || {}
                            }
                        }
                    }
                    e += l
                } else if (r.push(o),
                o.retain !== null && typeof o.retain == "object") {
                    const b = Object.keys(o.retain)[0];
                    if (b == null)
                        return a;
                    this.scroll.updateEmbedAt(a, b, o.retain[b])
                }
                Object.keys(u).forEach(b => {
                    this.scroll.formatAt(a, l, b, u[b])
                }
                );
                const d = h ? 1 : 0
                  , g = f ? 1 : 0;
                return e += d + g,
                r.retain(d),
                r.delete(g),
                a + l + d + g
            }
            , 0),
            r.reduce( (a, o) => typeof o.delete == "number" ? (this.scroll.deleteAt(a, o.delete),
            a) : a + nt.Op.length(o), 0),
            this.scroll.batchEnd(),
            this.scroll.optimize(),
            this.update(n)
        }
        deleteText(t, e) {
            return this.scroll.deleteAt(t, e),
            this.update(new P().retain(t).delete(e))
        }
        formatLine(t, e) {
            let n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : {};
            this.scroll.update(),
            Object.keys(n).forEach(s => {
                this.scroll.lines(t, Math.max(e, 1)).forEach(a => {
                    a.format(s, n[s])
                }
                )
            }
            ),
            this.scroll.optimize();
            const r = new P().retain(t).retain(e, oi(n));
            return this.update(r)
        }
        formatText(t, e) {
            let n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : {};
            Object.keys(n).forEach(s => {
                this.scroll.formatAt(t, e, s, n[s])
            }
            );
            const r = new P().retain(t).retain(e, oi(n));
            return this.update(r)
        }
        getContents(t, e) {
            return this.delta.slice(t, t + e)
        }
        getDelta() {
            return this.scroll.lines().reduce( (t, e) => t.concat(e.delta()), new P)
        }
        getFormat(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : 0
              , n = []
              , r = [];
            e === 0 ? this.scroll.path(t).forEach(o => {
                const [l] = o;
                l instanceof we ? n.push(l) : l instanceof xe && r.push(l)
            }
            ) : (n = this.scroll.lines(t, e),
            r = this.scroll.descendants(xe, t, e));
            const [s,a] = [n, r].map(o => {
                const l = o.shift();
                if (l == null)
                    return {};
                let u = Je(l);
                for (; Object.keys(u).length > 0; ) {
                    const h = o.shift();
                    if (h == null)
                        return u;
                    u = fm(Je(h), u)
                }
                return u
            }
            );
            return {
                ...s,
                ...a
            }
        }
        getHTML(t, e) {
            const [n,r] = this.scroll.line(t);
            if (n) {
                const s = n.length();
                return n.length() >= r + e && !(r === 0 && e === s) ? er(n, r, e, !0) : er(this.scroll, t, e, !0)
            }
            return ""
        }
        getText(t, e) {
            return this.getContents(t, e).filter(n => typeof n.insert == "string").map(n => n.insert).join("")
        }
        insertContents(t, e) {
            const n = Fo(e)
              , r = new P().retain(t).concat(n);
            return this.scroll.insertContents(t, n),
            this.update(r)
        }
        insertEmbed(t, e, n) {
            return this.scroll.insertAt(t, e, n),
            this.update(new P().retain(t).insert({
                [e]: n
            }))
        }
        insertText(t, e) {
            let n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : {};
            return e = e.replace(/\r\n/g, `
`).replace(/\r/g, `
`),
            this.scroll.insertAt(t, e),
            Object.keys(n).forEach(r => {
                this.scroll.formatAt(t, e.length, r, n[r])
            }
            ),
            this.update(new P().retain(t).insert(e, oi(n)))
        }
        isBlank() {
            if (this.scroll.children.length === 0)
                return !0;
            if (this.scroll.children.length > 1)
                return !1;
            const t = this.scroll.children.head;
            if ((t == null ? void 0 : t.statics.blotName) !== we.blotName)
                return !1;
            const e = t;
            return e.children.length > 1 ? !1 : e.children.head instanceof dt
        }
        removeFormat(t, e) {
            const n = this.getText(t, e)
              , [r,s] = this.scroll.line(t + e);
            let a = 0
              , o = new P;
            r != null && (a = r.length() - s,
            o = r.delta().slice(s, s + a - 1).insert(`
`));
            const u = this.getContents(t, e + a).diff(new P().insert(n).concat(o))
              , h = new P().retain(t).concat(u);
            return this.applyDelta(h)
        }
        update(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : []
              , n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : void 0;
            const r = this.delta;
            if (e.length === 1 && e[0].type === "characterData" && e[0].target.data.match(hm) && this.scroll.find(e[0].target)) {
                const s = this.scroll.find(e[0].target)
                  , a = Je(s)
                  , o = s.offset(this.scroll)
                  , l = e[0].oldValue.replace(pi.CONTENTS, "")
                  , u = new P().insert(l)
                  , h = new P().insert(s.value())
                  , f = n && {
                    oldRange: Po(n.oldRange, -o),
                    newRange: Po(n.newRange, -o)
                };
                t = new P().retain(o).concat(u.diff(h, f)).reduce( (g, b) => b.insert ? g.insert(b.insert, a) : g.push(b), new P),
                this.delta = r.compose(t)
            } else
                this.delta = this.getDelta(),
                (!t || !Ra(r.compose(t), this.delta)) && (t = r.diff(this.delta, n));
            return t
        }
    }
    function ii(i, t, e) {
        if (i.length === 0) {
            const [g] = Ms(e.pop());
            return t <= 0 ? `</li></${g}>` : `</li></${g}>${ii([], t - 1, e)}`
        }
        const [{child: n, offset: r, length: s, indent: a, type: o},...l] = i
          , [u,h] = Ms(o);
        if (a > t)
            return e.push(o),
            a === t + 1 ? `<${u}><li${h}>${er(n, r, s)}${ii(l, a, e)}` : `<${u}><li>${ii(i, t + 1, e)}`;
        const f = e[e.length - 1];
        if (a === t && o === f)
            return `</li><li${h}>${er(n, r, s)}${ii(l, a, e)}`;
        const [d] = Ms(e.pop());
        return `</li></${d}>${ii(i, t - 1, e)}`
    }
    function er(i, t, e) {
        let n = arguments.length > 3 && arguments[3] !== void 0 ? arguments[3] : !1;
        if ("html"in i && typeof i.html == "function")
            return i.html(t, e);
        if (i instanceof ut)
            return Xr(i.value().slice(t, t + e));
        if (i instanceof ct) {
            if (i.statics.blotName === "list-container") {
                const u = [];
                return i.children.forEachAt(t, e, (h, f, d) => {
                    const g = "formats"in h && typeof h.formats == "function" ? h.formats() : {};
                    u.push({
                        child: h,
                        offset: f,
                        length: d,
                        indent: g.indent || 0,
                        type: g.list
                    })
                }
                ),
                ii(u, -1, [])
            }
            const r = [];
            if (i.children.forEachAt(t, e, (u, h, f) => {
                r.push(er(u, h, f))
            }
            ),
            n || i.statics.blotName === "list")
                return r.join("");
            const {outerHTML: s, innerHTML: a} = i.domNode
              , [o,l] = s.split(`>${a}<`);
            return o === "<table" ? `<table style="border: 1px solid #000;">${r.join("")}<${l}` : `${o}>${r.join("")}<${l}`
        }
        return i.domNode instanceof Element ? i.domNode.outerHTML : ""
    }
    function fm(i, t) {
        return Object.keys(t).reduce( (e, n) => {
            if (i[n] == null)
                return e;
            const r = t[n];
            return r === i[n] ? e[n] = r : Array.isArray(r) ? r.indexOf(i[n]) < 0 ? e[n] = r.concat([i[n]]) : e[n] = r : e[n] = [r, i[n]],
            e
        }
        , {})
    }
    function Ms(i) {
        const t = i === "ordered" ? "ol" : "ul";
        switch (i) {
        case "checked":
            return [t, ' data-list="checked"'];
        case "unchecked":
            return [t, ' data-list="unchecked"'];
        default:
            return [t, ""]
        }
    }
    function Fo(i) {
        return i.reduce( (t, e) => {
            if (typeof e.insert == "string") {
                const n = e.insert.replace(/\r\n/g, `
`).replace(/\r/g, `
`);
                return t.insert(n, e.attributes)
            }
            return t.push(e)
        }
        , new P)
    }
    function Po(i, t) {
        let {index: e, length: n} = i;
        return new kn(e + t,n)
    }
    function pm(i) {
        const t = [];
        return i.forEach(e => {
            typeof e.insert == "string" ? e.insert.split(`
`).forEach( (r, s) => {
                s && t.push({
                    insert: `
`,
                    attributes: e.attributes
                }),
                r && t.push({
                    insert: r,
                    attributes: e.attributes
                })
            }
            ) : t.push(e)
        }
        ),
        t
    }
    class ft {
        constructor(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : {};
            this.quill = t,
            this.options = e
        }
    }
    k(ft, "DEFAULTS", {});
    const Cr = "\uFEFF";
    class $a extends Ge {
        constructor(t, e) {
            super(t, e),
            this.contentNode = document.createElement("span"),
            this.contentNode.setAttribute("contenteditable", "false"),
            Array.from(this.domNode.childNodes).forEach(n => {
                this.contentNode.appendChild(n)
            }
            ),
            this.leftGuard = document.createTextNode(Cr),
            this.rightGuard = document.createTextNode(Cr),
            this.domNode.appendChild(this.leftGuard),
            this.domNode.appendChild(this.contentNode),
            this.domNode.appendChild(this.rightGuard)
        }
        index(t, e) {
            return t === this.leftGuard ? 0 : t === this.rightGuard ? 1 : super.index(t, e)
        }
        restore(t) {
            let e = null, n;
            const r = t.data.split(Cr).join("");
            if (t === this.leftGuard)
                if (this.prev instanceof ut) {
                    const s = this.prev.length();
                    this.prev.insertAt(s, r),
                    e = {
                        startNode: this.prev.domNode,
                        startOffset: s + r.length
                    }
                } else
                    n = document.createTextNode(r),
                    this.parent.insertBefore(this.scroll.create(n), this),
                    e = {
                        startNode: n,
                        startOffset: r.length
                    };
            else
                t === this.rightGuard && (this.next instanceof ut ? (this.next.insertAt(0, r),
                e = {
                    startNode: this.next.domNode,
                    startOffset: r.length
                }) : (n = document.createTextNode(r),
                this.parent.insertBefore(this.scroll.create(n), this.next),
                e = {
                    startNode: n,
                    startOffset: r.length
                }));
            return t.data = Cr,
            e
        }
        update(t, e) {
            t.forEach(n => {
                if (n.type === "characterData" && (n.target === this.leftGuard || n.target === this.rightGuard)) {
                    const r = this.restore(n.target);
                    r && (e.range = r)
                }
            }
            )
        }
    }
    class mm {
        constructor(t, e) {
            k(this, "isComposing", !1);
            this.scroll = t,
            this.emitter = e,
            this.setupListeners()
        }
        setupListeners() {
            this.scroll.domNode.addEventListener("compositionstart", t => {
                this.isComposing || this.handleCompositionStart(t)
            }
            ),
            this.scroll.domNode.addEventListener("compositionend", t => {
                this.isComposing && queueMicrotask( () => {
                    this.handleCompositionEnd(t)
                }
                )
            }
            )
        }
        handleCompositionStart(t) {
            const e = t.target instanceof Node ? this.scroll.find(t.target, !0) : null;
            e && !(e instanceof $a) && (this.emitter.emit(R.events.COMPOSITION_BEFORE_START, t),
            this.scroll.batchStart(),
            this.emitter.emit(R.events.COMPOSITION_START, t),
            this.isComposing = !0)
        }
        handleCompositionEnd(t) {
            this.emitter.emit(R.events.COMPOSITION_BEFORE_END, t),
            this.scroll.batchEnd(),
            this.emitter.emit(R.events.COMPOSITION_END, t),
            this.isComposing = !1
        }
    }
    const Wi = class Wi {
        constructor(t, e) {
            k(this, "modules", {});
            this.quill = t,
            this.options = e
        }
        init() {
            Object.keys(this.options.modules).forEach(t => {
                this.modules[t] == null && this.addModule(t)
            }
            )
        }
        addModule(t) {
            const e = this.quill.constructor.import(`modules/${t}`);
            return this.modules[t] = new e(this.quill,this.options.modules[t] || {}),
            this.modules[t]
        }
    }
    ;
    k(Wi, "DEFAULTS", {
        modules: {}
    }),
    k(Wi, "themes", {
        default: Wi
    });
    let mi = Wi;
    const gm = i => i.parentElement || i.getRootNode().host || null
      , vm = i => {
        const t = i.getBoundingClientRect()
          , e = "offsetWidth"in i && Math.abs(t.width) / i.offsetWidth || 1
          , n = "offsetHeight"in i && Math.abs(t.height) / i.offsetHeight || 1;
        return {
            top: t.top,
            right: t.left + i.clientWidth * e,
            bottom: t.top + i.clientHeight * n,
            left: t.left
        }
    }
      , Ar = i => {
        const t = parseInt(i, 10);
        return Number.isNaN(t) ? 0 : t
    }
      , Bo = (i, t, e, n, r, s) => i < e && t > n ? 0 : i < e ? -(e - i + r) : t > n ? t - i > n - e ? i + r - e : t - n + s : 0
      , bm = (i, t) => {
        var s, a, o;
        const e = i.ownerDocument;
        let n = t
          , r = i;
        for (; r; ) {
            const l = r === e.body
              , u = l ? {
                top: 0,
                right: ((s = window.visualViewport) == null ? void 0 : s.width) ?? e.documentElement.clientWidth,
                bottom: ((a = window.visualViewport) == null ? void 0 : a.height) ?? e.documentElement.clientHeight,
                left: 0
            } : vm(r)
              , h = getComputedStyle(r)
              , f = Bo(n.left, n.right, u.left, u.right, Ar(h.scrollPaddingLeft), Ar(h.scrollPaddingRight))
              , d = Bo(n.top, n.bottom, u.top, u.bottom, Ar(h.scrollPaddingTop), Ar(h.scrollPaddingBottom));
            if (f || d)
                if (l)
                    (o = e.defaultView) == null || o.scrollBy(f, d);
                else {
                    const {scrollLeft: g, scrollTop: b} = r;
                    d && (r.scrollTop += d),
                    f && (r.scrollLeft += f);
                    const E = r.scrollLeft - g
                      , _ = r.scrollTop - b;
                    n = {
                        left: n.left - E,
                        top: n.top - _,
                        right: n.right - E,
                        bottom: n.bottom - _
                    }
                }
            r = l || h.position === "fixed" ? null : gm(r)
        }
    }
      , ym = 100
      , Em = ["block", "break", "cursor", "inline", "scroll", "text"]
      , wm = (i, t, e) => {
        const n = new fi;
        return Em.forEach(r => {
            const s = t.query(r);
            s && n.register(s)
        }
        ),
        i.forEach(r => {
            let s = t.query(r);
            s || e.error(`Cannot register "${r}" specified in "formats" config. Are you sure it was registered?`);
            let a = 0;
            for (; s; )
                if (n.register(s),
                s = "blotName"in s ? s.requiredContainer ?? null : null,
                a += 1,
                a > ym) {
                    e.error(`Cycle detected in registering blot requiredContainer: "${r}"`);
                    break
                }
        }
        ),
        n
    }
      , ci = Wt("quill")
      , Sr = new fi;
    ct.uiClass = "ql-ui";
    const at = class at {
        static debug(t) {
            t === !0 && (t = "log"),
            Wt.level(t)
        }
        static find(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !1;
            return oa.get(t) || Sr.find(t, e)
        }
        static import(t) {
            return this.imports[t] == null && ci.error(`Cannot import ${t}. Are you sure it was registered?`),
            this.imports[t]
        }
        static register() {
            if (typeof (arguments.length <= 0 ? void 0 : arguments[0]) != "string") {
                const t = arguments.length <= 0 ? void 0 : arguments[0]
                  , e = !!(!(arguments.length <= 1) && arguments[1])
                  , n = "attrName"in t ? t.attrName : t.blotName;
                typeof n == "string" ? this.register(`formats/${n}`, t, e) : Object.keys(t).forEach(r => {
                    this.register(r, t[r], e)
                }
                )
            } else {
                const t = arguments.length <= 0 ? void 0 : arguments[0]
                  , e = arguments.length <= 1 ? void 0 : arguments[1]
                  , n = !!(!(arguments.length <= 2) && arguments[2]);
                this.imports[t] != null && !n && ci.warn(`Overwriting ${t} with`, e),
                this.imports[t] = e,
                (t.startsWith("blots/") || t.startsWith("formats/")) && e && typeof e != "boolean" && e.blotName !== "abstract" && Sr.register(e),
                typeof e.register == "function" && e.register(Sr)
            }
        }
        constructor(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : {};
            if (this.options = _m(t, e),
            this.container = this.options.container,
            this.container == null) {
                ci.error("Invalid Quill container", t);
                return
            }
            this.options.debug && at.debug(this.options.debug);
            const n = this.container.innerHTML.trim();
            this.container.classList.add("ql-container"),
            this.container.innerHTML = "",
            oa.set(this.container, this),
            this.root = this.addContainer("ql-editor"),
            this.root.classList.add("ql-blank"),
            this.emitter = new R;
            const r = Pa.blotName
              , s = this.options.registry.query(r);
            if (!s || !("blotName"in s))
                throw new Error(`Cannot initialize Quill without "${r}" blot`);
            if (this.scroll = new s(this.options.registry,this.root,{
                emitter: this.emitter
            }),
            this.editor = new dm(this.scroll),
            this.selection = new um(this.scroll,this.emitter),
            this.composition = new mm(this.scroll,this.emitter),
            this.theme = new this.options.theme(this,this.options),
            this.keyboard = this.theme.addModule("keyboard"),
            this.clipboard = this.theme.addModule("clipboard"),
            this.history = this.theme.addModule("history"),
            this.uploader = this.theme.addModule("uploader"),
            this.theme.addModule("input"),
            this.theme.addModule("uiNode"),
            this.theme.init(),
            this.emitter.on(R.events.EDITOR_CHANGE, a => {
                a === R.events.TEXT_CHANGE && this.root.classList.toggle("ql-blank", this.editor.isBlank())
            }
            ),
            this.emitter.on(R.events.SCROLL_UPDATE, (a, o) => {
                const l = this.selection.lastRange
                  , [u] = this.selection.getRange()
                  , h = l && u ? {
                    oldRange: l,
                    newRange: u
                } : void 0;
                st.call(this, () => this.editor.update(null, o, h), a)
            }
            ),
            this.emitter.on(R.events.SCROLL_EMBED_UPDATE, (a, o) => {
                const l = this.selection.lastRange
                  , [u] = this.selection.getRange()
                  , h = l && u ? {
                    oldRange: l,
                    newRange: u
                } : void 0;
                st.call(this, () => {
                    const f = new P().retain(a.offset(this)).retain({
                        [a.statics.blotName]: o
                    });
                    return this.editor.update(f, [], h)
                }
                , at.sources.USER)
            }
            ),
            n) {
                const a = this.clipboard.convert({
                    html: `${n}<p><br></p>`,
                    text: `
`
                });
                this.setContents(a)
            }
            this.history.clear(),
            this.options.placeholder && this.root.setAttribute("data-placeholder", this.options.placeholder),
            this.options.readOnly && this.disable(),
            this.allowReadOnlyEdits = !1
        }
        addContainer(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : null;
            if (typeof t == "string") {
                const n = t;
                t = document.createElement("div"),
                t.classList.add(n)
            }
            return this.container.insertBefore(t, e),
            t
        }
        blur() {
            this.selection.setRange(null)
        }
        deleteText(t, e, n) {
            return [t,e,,n] = Pt(t, e, n),
            st.call(this, () => this.editor.deleteText(t, e), n, t, -1 * e)
        }
        disable() {
            this.enable(!1)
        }
        editReadOnly(t) {
            this.allowReadOnlyEdits = !0;
            const e = t();
            return this.allowReadOnlyEdits = !1,
            e
        }
        enable() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : !0;
            this.scroll.enable(t),
            this.container.classList.toggle("ql-disabled", !t)
        }
        focus() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : {};
            this.selection.focus(),
            t.preventScroll || this.scrollSelectionIntoView()
        }
        format(t, e) {
            let n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : R.sources.API;
            return st.call(this, () => {
                const r = this.getSelection(!0);
                let s = new P;
                if (r == null)
                    return s;
                if (this.scroll.query(t, B.BLOCK))
                    s = this.editor.formatLine(r.index, r.length, {
                        [t]: e
                    });
                else {
                    if (r.length === 0)
                        return this.selection.format(t, e),
                        s;
                    s = this.editor.formatText(r.index, r.length, {
                        [t]: e
                    })
                }
                return this.setSelection(r, R.sources.SILENT),
                s
            }
            , n)
        }
        formatLine(t, e, n, r, s) {
            let a;
            return [t,e,a,s] = Pt(t, e, n, r, s),
            st.call(this, () => this.editor.formatLine(t, e, a), s, t, 0)
        }
        formatText(t, e, n, r, s) {
            let a;
            return [t,e,a,s] = Pt(t, e, n, r, s),
            st.call(this, () => this.editor.formatText(t, e, a), s, t, 0)
        }
        getBounds(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : 0
              , n = null;
            if (typeof t == "number" ? n = this.selection.getBounds(t, e) : n = this.selection.getBounds(t.index, t.length),
            !n)
                return null;
            const r = this.container.getBoundingClientRect();
            return {
                bottom: n.bottom - r.top,
                height: n.height,
                left: n.left - r.left,
                right: n.right - r.left,
                top: n.top - r.top,
                width: n.width
            }
        }
        getContents() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : 0
              , e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : this.getLength() - t;
            return [t,e] = Pt(t, e),
            this.editor.getContents(t, e)
        }
        getFormat() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : this.getSelection(!0)
              , e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : 0;
            return typeof t == "number" ? this.editor.getFormat(t, e) : this.editor.getFormat(t.index, t.length)
        }
        getIndex(t) {
            return t.offset(this.scroll)
        }
        getLength() {
            return this.scroll.length()
        }
        getLeaf(t) {
            return this.scroll.leaf(t)
        }
        getLine(t) {
            return this.scroll.line(t)
        }
        getLines() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : 0
              , e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : Number.MAX_VALUE;
            return typeof t != "number" ? this.scroll.lines(t.index, t.length) : this.scroll.lines(t, e)
        }
        getModule(t) {
            return this.theme.modules[t]
        }
        getSelection() {
            return (arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : !1) && this.focus(),
            this.update(),
            this.selection.getRange()[0]
        }
        getSemanticHTML() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : 0
              , e = arguments.length > 1 ? arguments[1] : void 0;
            return typeof t == "number" && (e = e ?? this.getLength() - t),
            [t,e] = Pt(t, e),
            this.editor.getHTML(t, e)
        }
        getText() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : 0
              , e = arguments.length > 1 ? arguments[1] : void 0;
            return typeof t == "number" && (e = e ?? this.getLength() - t),
            [t,e] = Pt(t, e),
            this.editor.getText(t, e)
        }
        hasFocus() {
            return this.selection.hasFocus()
        }
        insertEmbed(t, e, n) {
            let r = arguments.length > 3 && arguments[3] !== void 0 ? arguments[3] : at.sources.API;
            return st.call(this, () => this.editor.insertEmbed(t, e, n), r, t)
        }
        insertText(t, e, n, r, s) {
            let a;
            return [t,,a,s] = Pt(t, 0, n, r, s),
            st.call(this, () => this.editor.insertText(t, e, a), s, t, e.length)
        }
        isEnabled() {
            return this.scroll.isEnabled()
        }
        off() {
            return this.emitter.off(...arguments)
        }
        on() {
            return this.emitter.on(...arguments)
        }
        once() {
            return this.emitter.once(...arguments)
        }
        removeFormat(t, e, n) {
            return [t,e,,n] = Pt(t, e, n),
            st.call(this, () => this.editor.removeFormat(t, e), n, t)
        }
        scrollRectIntoView(t) {
            bm(this.root, t)
        }
        scrollIntoView() {
            console.warn("Quill#scrollIntoView() has been deprecated and will be removed in the near future. Please use Quill#scrollSelectionIntoView() instead."),
            this.scrollSelectionIntoView()
        }
        scrollSelectionIntoView() {
            const t = this.selection.lastRange
              , e = t && this.selection.getBounds(t.index, t.length);
            e && this.scrollRectIntoView(e)
        }
        setContents(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : R.sources.API;
            return st.call(this, () => {
                t = new P(t);
                const n = this.getLength()
                  , r = this.editor.deleteText(0, n)
                  , s = this.editor.insertContents(0, t)
                  , a = this.editor.deleteText(this.getLength() - 1, 1);
                return r.compose(s).compose(a)
            }
            , e)
        }
        setSelection(t, e, n) {
            t == null ? this.selection.setRange(null, e || at.sources.API) : ([t,e,,n] = Pt(t, e, n),
            this.selection.setRange(new kn(Math.max(0, t),e), n),
            n !== R.sources.SILENT && this.scrollSelectionIntoView())
        }
        setText(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : R.sources.API;
            const n = new P().insert(t);
            return this.setContents(n, e)
        }
        update() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : R.sources.USER;
            const e = this.scroll.update(t);
            return this.selection.update(t),
            e
        }
        updateContents(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : R.sources.API;
            return st.call(this, () => (t = new P(t),
            this.editor.applyDelta(t)), e, !0)
        }
    }
    ;
    k(at, "DEFAULTS", {
        bounds: null,
        modules: {
            clipboard: !0,
            keyboard: !0,
            history: !0,
            uploader: !0
        },
        placeholder: "",
        readOnly: !1,
        registry: Sr,
        theme: "default"
    }),
    k(at, "events", R.events),
    k(at, "sources", R.sources),
    k(at, "version", "2.0.2"),
    k(at, "imports", {
        delta: P,
        parchment: Wp,
        "core/module": ft,
        "core/theme": mi
    });
    let x = at;
    function jo(i) {
        return typeof i == "string" ? document.querySelector(i) : i
    }
    function ks(i) {
        return Object.entries(i ?? {}).reduce( (t, e) => {
            let[n,r] = e;
            return {
                ...t,
                [n]: r === !0 ? {} : r
            }
        }
        , {})
    }
    function Ho(i) {
        return Object.fromEntries(Object.entries(i).filter(t => t[1] !== void 0))
    }
    function _m(i, t) {
        const e = jo(i);
        if (!e)
            throw new Error("Invalid Quill container");
        const r = !t.theme || t.theme === x.DEFAULTS.theme ? mi : x.import(`themes/${t.theme}`);
        if (!r)
            throw new Error(`Invalid theme ${t.theme}. Did you register it?`);
        const {modules: s, ...a} = x.DEFAULTS
          , {modules: o, ...l} = r.DEFAULTS;
        let u = ks(t.modules);
        u != null && u.toolbar && u.toolbar.constructor !== Object && (u = {
            ...u,
            toolbar: {
                container: u.toolbar
            }
        });
        const h = un({}, ks(s), ks(o), u)
          , f = {
            ...a,
            ...Ho(l),
            ...Ho(t)
        };
        let d = t.registry;
        return d ? t.formats && ci.warn('Ignoring "formats" option because "registry" is specified') : d = t.formats ? wm(t.formats, f.registry, ci) : f.registry,
        {
            ...f,
            registry: d,
            container: e,
            theme: r,
            modules: Object.entries(h).reduce( (g, b) => {
                let[E,_] = b;
                if (!_)
                    return g;
                const C = x.import(`modules/${E}`);
                return C == null ? (ci.error(`Cannot load ${E} module. Are you sure you registered it?`),
                g) : {
                    ...g,
                    [E]: un({}, C.DEFAULTS || {}, _)
                }
            }
            , {}),
            bounds: jo(f.bounds)
        }
    }
    function st(i, t, e, n) {
        if (!this.isEnabled() && t === R.sources.USER && !this.allowReadOnlyEdits)
            return new P;
        let r = e == null ? null : this.getSelection();
        const s = this.editor.delta
          , a = i();
        if (r != null && (e === !0 && (e = r.index),
        n == null ? r = Uo(r, a, t) : n !== 0 && (r = Uo(r, e, n, t)),
        this.setSelection(r, R.sources.SILENT)),
        a.length() > 0) {
            const o = [R.events.TEXT_CHANGE, a, s, t];
            this.emitter.emit(R.events.EDITOR_CHANGE, ...o),
            t !== R.sources.SILENT && this.emitter.emit(...o)
        }
        return a
    }
    function Pt(i, t, e, n, r) {
        let s = {};
        return typeof i.index == "number" && typeof i.length == "number" ? typeof t != "number" ? (r = n,
        n = e,
        e = t,
        t = i.length,
        i = i.index) : (t = i.length,
        i = i.index) : typeof t != "number" && (r = n,
        n = e,
        e = t,
        t = 0),
        typeof e == "object" ? (s = e,
        r = n) : typeof e == "string" && (n != null ? s[e] = n : r = e),
        r = r || R.sources.API,
        [i, t, s, r]
    }
    function Uo(i, t, e, n) {
        const r = typeof e == "number" ? e : 0;
        if (i == null)
            return null;
        let s, a;
        return t && typeof t.transformPosition == "function" ? [s,a] = [i.index, i.index + i.length].map(o => t.transformPosition(o, n !== R.sources.USER)) : [s,a] = [i.index, i.index + i.length].map(o => o < t || o === t && n === R.sources.USER ? o : r >= 0 ? o + r : Math.max(t, o + r)),
        new kn(s,a - s)
    }
    let Pn = class extends Wr {
    }
    ;
    function $o(i) {
        return i instanceof we || i instanceof tt
    }
    function zo(i) {
        return typeof i.updateContent == "function"
    }
    class ri extends Pa {
        constructor(t, e, n) {
            let {emitter: r} = n;
            super(t, e),
            this.emitter = r,
            this.batch = !1,
            this.optimize(),
            this.enable(),
            this.domNode.addEventListener("dragstart", s => this.handleDragStart(s))
        }
        batchStart() {
            Array.isArray(this.batch) || (this.batch = [])
        }
        batchEnd() {
            if (!this.batch)
                return;
            const t = this.batch;
            this.batch = !1,
            this.update(t)
        }
        emitMount(t) {
            this.emitter.emit(R.events.SCROLL_BLOT_MOUNT, t)
        }
        emitUnmount(t) {
            this.emitter.emit(R.events.SCROLL_BLOT_UNMOUNT, t)
        }
        emitEmbedUpdate(t, e) {
            this.emitter.emit(R.events.SCROLL_EMBED_UPDATE, t, e)
        }
        deleteAt(t, e) {
            const [n,r] = this.line(t)
              , [s] = this.line(t + e);
            if (super.deleteAt(t, e),
            s != null && n !== s && r > 0) {
                if (n instanceof tt || s instanceof tt) {
                    this.optimize();
                    return
                }
                const a = s.children.head instanceof dt ? null : s.children.head;
                n.moveChildren(s, a),
                n.remove()
            }
            this.optimize()
        }
        enable() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : !0;
            this.domNode.setAttribute("contenteditable", t ? "true" : "false")
        }
        formatAt(t, e, n, r) {
            super.formatAt(t, e, n, r),
            this.optimize()
        }
        insertAt(t, e, n) {
            if (t >= this.length())
                if (n == null || this.scroll.query(e, B.BLOCK) == null) {
                    const r = this.scroll.create(this.statics.defaultChild.blotName);
                    this.appendChild(r),
                    n == null && e.endsWith(`
`) ? r.insertAt(0, e.slice(0, -1), n) : r.insertAt(0, e, n)
                } else {
                    const r = this.scroll.create(e, n);
                    this.appendChild(r)
                }
            else
                super.insertAt(t, e, n);
            this.optimize()
        }
        insertBefore(t, e) {
            if (t.statics.scope === B.INLINE_BLOT) {
                const n = this.scroll.create(this.statics.defaultChild.blotName);
                n.appendChild(t),
                super.insertBefore(n, e)
            } else
                super.insertBefore(t, e)
        }
        insertContents(t, e) {
            const n = this.deltaToRenderBlocks(e.concat(new P().insert(`
`)))
              , r = n.pop();
            if (r == null)
                return;
            this.batchStart();
            const s = n.shift();
            if (s) {
                const l = s.type === "block" && (s.delta.length() === 0 || !this.descendant(tt, t)[0] && t < this.length())
                  , u = s.type === "block" ? s.delta : new P().insert({
                    [s.key]: s.value
                });
                qs(this, t, u);
                const h = s.type === "block" ? 1 : 0
                  , f = t + u.length() + h;
                l && this.insertAt(f - 1, `
`);
                const d = Je(this.line(t)[0])
                  , g = nt.AttributeMap.diff(d, s.attributes) || {};
                Object.keys(g).forEach(b => {
                    this.formatAt(f - 1, 1, b, g[b])
                }
                ),
                t = f
            }
            let[a,o] = this.children.find(t);
            if (n.length && (a && (a = a.split(o),
            o = 0),
            n.forEach(l => {
                if (l.type === "block") {
                    const u = this.createBlock(l.attributes, a || void 0);
                    qs(u, 0, l.delta)
                } else {
                    const u = this.create(l.key, l.value);
                    this.insertBefore(u, a || void 0),
                    Object.keys(l.attributes).forEach(h => {
                        u.format(h, l.attributes[h])
                    }
                    )
                }
            }
            )),
            r.type === "block" && r.delta.length()) {
                const l = a ? a.offset(a.scroll) + o : this.length();
                qs(this, l, r.delta)
            }
            this.batchEnd(),
            this.optimize()
        }
        isEnabled() {
            return this.domNode.getAttribute("contenteditable") === "true"
        }
        leaf(t) {
            const e = this.path(t).pop();
            if (!e)
                return [null, -1];
            const [n,r] = e;
            return n instanceof xe ? [n, r] : [null, -1]
        }
        line(t) {
            return t === this.length() ? this.line(t - 1) : this.descendant($o, t)
        }
        lines() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : 0
              , e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : Number.MAX_VALUE;
            const n = (r, s, a) => {
                let o = []
                  , l = a;
                return r.children.forEachAt(s, a, (u, h, f) => {
                    $o(u) ? o.push(u) : u instanceof Wr && (o = o.concat(n(u, h, l))),
                    l -= f
                }
                ),
                o
            }
            ;
            return n(this, t, e)
        }
        optimize() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : []
              , e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : {};
            this.batch || (super.optimize(t, e),
            t.length > 0 && this.emitter.emit(R.events.SCROLL_OPTIMIZE, t, e))
        }
        path(t) {
            return super.path(t).slice(1)
        }
        remove() {}
        update(t) {
            if (this.batch) {
                Array.isArray(t) && (this.batch = this.batch.concat(t));
                return
            }
            let e = R.sources.USER;
            typeof t == "string" && (e = t),
            Array.isArray(t) || (t = this.observer.takeRecords()),
            t = t.filter(n => {
                let {target: r} = n;
                const s = this.find(r, !0);
                return s && !zo(s)
            }
            ),
            t.length > 0 && this.emitter.emit(R.events.SCROLL_BEFORE_UPDATE, e, t),
            super.update(t.concat([])),
            t.length > 0 && this.emitter.emit(R.events.SCROLL_UPDATE, e, t)
        }
        updateEmbedAt(t, e, n) {
            const [r] = this.descendant(s => s instanceof tt, t);
            r && r.statics.blotName === e && zo(r) && r.updateContent(n)
        }
        handleDragStart(t) {
            t.preventDefault()
        }
        deltaToRenderBlocks(t) {
            const e = [];
            let n = new P;
            return t.forEach(r => {
                const s = r == null ? void 0 : r.insert;
                if (s)
                    if (typeof s == "string") {
                        const a = s.split(`
`);
                        a.slice(0, -1).forEach(l => {
                            n.insert(l, r.attributes),
                            e.push({
                                type: "block",
                                delta: n,
                                attributes: r.attributes ?? {}
                            }),
                            n = new P
                        }
                        );
                        const o = a[a.length - 1];
                        o && n.insert(o, r.attributes)
                    } else {
                        const a = Object.keys(s)[0];
                        if (!a)
                            return;
                        this.query(a, B.INLINE) ? n.push(r) : (n.length() && e.push({
                            type: "block",
                            delta: n,
                            attributes: {}
                        }),
                        n = new P,
                        e.push({
                            type: "blockEmbed",
                            key: a,
                            value: s[a],
                            attributes: r.attributes ?? {}
                        }))
                    }
            }
            ),
            n.length() && e.push({
                type: "block",
                delta: n,
                attributes: {}
            }),
            e
        }
        createBlock(t, e) {
            let n;
            const r = {};
            Object.entries(t).forEach(o => {
                let[l,u] = o;
                this.query(l, B.BLOCK & B.BLOT) != null ? n = l : r[l] = u
            }
            );
            const s = this.create(n || this.statics.defaultChild.blotName, n ? t[n] : void 0);
            this.insertBefore(s, e || void 0);
            const a = s.length();
            return Object.entries(r).forEach(o => {
                let[l,u] = o;
                s.formatAt(0, a, l, u)
            }
            ),
            s
        }
    }
    k(ri, "blotName", "scroll"),
    k(ri, "className", "ql-editor"),
    k(ri, "tagName", "DIV"),
    k(ri, "defaultChild", we),
    k(ri, "allowedChildren", [we, tt, Pn]);
    function qs(i, t, e) {
        e.reduce( (n, r) => {
            const s = nt.Op.length(r);
            let a = r.attributes || {};
            if (r.insert != null) {
                if (typeof r.insert == "string") {
                    const o = r.insert;
                    i.insertAt(n, o);
                    const [l] = i.descendant(xe, n)
                      , u = Je(l);
                    a = nt.AttributeMap.diff(u, a) || {}
                } else if (typeof r.insert == "object") {
                    const o = Object.keys(r.insert)[0];
                    if (o == null)
                        return n;
                    if (i.insertAt(n, o, r.insert[o]),
                    i.scroll.query(o, B.INLINE) != null) {
                        const [u] = i.descendant(xe, n)
                          , h = Je(u);
                        a = nt.AttributeMap.diff(h, a) || {}
                    }
                }
            }
            return Object.keys(a).forEach(o => {
                i.formatAt(n, s, o, a[o])
            }
            ),
            n + s
        }
        , t)
    }
    const za = {
        scope: B.BLOCK,
        whitelist: ["right", "center", "justify"]
    }
      , Cm = new Nt("align","align",za)
      , mc = new ht("align","ql-align",za)
      , gc = new fn("align","text-align",za);
    class vc extends fn {
        value(t) {
            let e = super.value(t);
            return e.startsWith("rgb(") ? (e = e.replace(/^[^\d]+/, "").replace(/[^\d]+$/, ""),
            `#${e.split(",").map(r => `00${parseInt(r, 10).toString(16)}`.slice(-2)).join("")}`) : e
        }
    }
    const Am = new ht("color","ql-color",{
        scope: B.INLINE
    })
      , Ka = new vc("color","color",{
        scope: B.INLINE
    })
      , Sm = new ht("background","ql-bg",{
        scope: B.INLINE
    })
      , Va = new vc("background","background-color",{
        scope: B.INLINE
    });
    class Bn extends Pn {
        static create(t) {
            const e = super.create(t);
            return e.setAttribute("spellcheck", "false"),
            e
        }
        code(t, e) {
            return this.children.map(n => n.length() <= 1 ? "" : n.domNode.innerText).join(`
`).slice(t, t + e)
        }
        html(t, e) {
            return `<pre>
${Xr(this.code(t, e))}
</pre>`
        }
    }
    class Ne extends we {
        static register() {
            x.register(Bn)
        }
    }
    k(Ne, "TAB", "  ");
    class Wa extends It {
    }
    Wa.blotName = "code";
    Wa.tagName = "CODE";
    Ne.blotName = "code-block";
    Ne.className = "ql-code-block";
    Ne.tagName = "DIV";
    Bn.blotName = "code-block-container";
    Bn.className = "ql-code-block-container";
    Bn.tagName = "DIV";
    Bn.allowedChildren = [Ne];
    Ne.allowedChildren = [ut, dt, pi];
    Ne.requiredContainer = Bn;
    const Ga = {
        scope: B.BLOCK,
        whitelist: ["rtl"]
    }
      , bc = new Nt("direction","dir",Ga)
      , yc = new ht("direction","ql-direction",Ga)
      , Ec = new fn("direction","direction",Ga)
      , wc = {
        scope: B.INLINE,
        whitelist: ["serif", "monospace"]
    }
      , _c = new ht("font","ql-font",wc);
    class Tm extends fn {
        value(t) {
            return super.value(t).replace(/["']/g, "")
        }
    }
    const Cc = new Tm("font","font-family",wc)
      , Ac = new ht("size","ql-size",{
        scope: B.INLINE,
        whitelist: ["small", "large", "huge"]
    })
      , Sc = new fn("size","font-size",{
        scope: B.INLINE,
        whitelist: ["10px", "18px", "32px"]
    })
      , xm = Wt("quill:keyboard")
      , Nm = /Mac/i.test(navigator.platform) ? "metaKey" : "ctrlKey";
    class Qr extends ft {
        static match(t, e) {
            return ["altKey", "ctrlKey", "metaKey", "shiftKey"].some(n => !!e[n] !== t[n] && e[n] !== null) ? !1 : e.key === t.key || e.key === t.which
        }
        constructor(t, e) {
            super(t, e),
            this.bindings = {},
            Object.keys(this.options.bindings).forEach(n => {
                this.options.bindings[n] && this.addBinding(this.options.bindings[n])
            }
            ),
            this.addBinding({
                key: "Enter",
                shiftKey: null
            }, this.handleEnter),
            this.addBinding({
                key: "Enter",
                metaKey: null,
                ctrlKey: null,
                altKey: null
            }, () => {}
            ),
            /Firefox/i.test(navigator.userAgent) ? (this.addBinding({
                key: "Backspace"
            }, {
                collapsed: !0
            }, this.handleBackspace),
            this.addBinding({
                key: "Delete"
            }, {
                collapsed: !0
            }, this.handleDelete)) : (this.addBinding({
                key: "Backspace"
            }, {
                collapsed: !0,
                prefix: /^.?$/
            }, this.handleBackspace),
            this.addBinding({
                key: "Delete"
            }, {
                collapsed: !0,
                suffix: /^.?$/
            }, this.handleDelete)),
            this.addBinding({
                key: "Backspace"
            }, {
                collapsed: !1
            }, this.handleDeleteRange),
            this.addBinding({
                key: "Delete"
            }, {
                collapsed: !1
            }, this.handleDeleteRange),
            this.addBinding({
                key: "Backspace",
                altKey: null,
                ctrlKey: null,
                metaKey: null,
                shiftKey: null
            }, {
                collapsed: !0,
                offset: 0
            }, this.handleBackspace),
            this.listen()
        }
        addBinding(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : {}
              , n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : {};
            const r = Lm(t);
            if (r == null) {
                xm.warn("Attempted to add invalid keyboard binding", r);
                return
            }
            typeof e == "function" && (e = {
                handler: e
            }),
            typeof n == "function" && (n = {
                handler: n
            }),
            (Array.isArray(r.key) ? r.key : [r.key]).forEach(a => {
                const o = {
                    ...r,
                    key: a,
                    ...e,
                    ...n
                };
                this.bindings[o.key] = this.bindings[o.key] || [],
                this.bindings[o.key].push(o)
            }
            )
        }
        listen() {
            this.quill.root.addEventListener("keydown", t => {
                if (t.defaultPrevented || t.isComposing || t.keyCode === 229 && (t.key === "Enter" || t.key === "Backspace"))
                    return;
                const r = (this.bindings[t.key] || []).concat(this.bindings[t.which] || []).filter(C => Qr.match(t, C));
                if (r.length === 0)
                    return;
                const s = x.find(t.target, !0);
                if (s && s.scroll !== this.quill.scroll)
                    return;
                const a = this.quill.getSelection();
                if (a == null || !this.quill.hasFocus())
                    return;
                const [o,l] = this.quill.getLine(a.index)
                  , [u,h] = this.quill.getLeaf(a.index)
                  , [f,d] = a.length === 0 ? [u, h] : this.quill.getLeaf(a.index + a.length)
                  , g = u instanceof Pr ? u.value().slice(0, h) : ""
                  , b = f instanceof Pr ? f.value().slice(d) : ""
                  , E = {
                    collapsed: a.length === 0,
                    empty: a.length === 0 && o.length() <= 1,
                    format: this.quill.getFormat(a),
                    line: o,
                    offset: l,
                    prefix: g,
                    suffix: b,
                    event: t
                };
                r.some(C => {
                    if (C.collapsed != null && C.collapsed !== E.collapsed || C.empty != null && C.empty !== E.empty || C.offset != null && C.offset !== E.offset)
                        return !1;
                    if (Array.isArray(C.format)) {
                        if (C.format.every(T => E.format[T] == null))
                            return !1
                    } else if (typeof C.format == "object" && !Object.keys(C.format).every(T => C.format[T] === !0 ? E.format[T] != null : C.format[T] === !1 ? E.format[T] == null : Ra(C.format[T], E.format[T])))
                        return !1;
                    return C.prefix != null && !C.prefix.test(E.prefix) || C.suffix != null && !C.suffix.test(E.suffix) ? !1 : C.handler.call(this, a, E, C) !== !0
                }
                ) && t.preventDefault()
            }
            )
        }
        handleBackspace(t, e) {
            const n = /[\uD800-\uDBFF][\uDC00-\uDFFF]$/.test(e.prefix) ? 2 : 1;
            if (t.index === 0 || this.quill.getLength() <= 1)
                return;
            let r = {};
            const [s] = this.quill.getLine(t.index);
            let a = new P().retain(t.index - n).delete(n);
            if (e.offset === 0) {
                const [o] = this.quill.getLine(t.index - 1);
                if (o && !(o.statics.blotName === "block" && o.length() <= 1)) {
                    const u = s.formats()
                      , h = this.quill.getFormat(t.index - 1, 1);
                    if (r = nt.AttributeMap.diff(u, h) || {},
                    Object.keys(r).length > 0) {
                        const f = new P().retain(t.index + s.length() - 2).retain(1, r);
                        a = a.compose(f)
                    }
                }
            }
            this.quill.updateContents(a, x.sources.USER),
            this.quill.focus()
        }
        handleDelete(t, e) {
            const n = /^[\uD800-\uDBFF][\uDC00-\uDFFF]/.test(e.suffix) ? 2 : 1;
            if (t.index >= this.quill.getLength() - n)
                return;
            let r = {};
            const [s] = this.quill.getLine(t.index);
            let a = new P().retain(t.index).delete(n);
            if (e.offset >= s.length() - 1) {
                const [o] = this.quill.getLine(t.index + 1);
                if (o) {
                    const l = s.formats()
                      , u = this.quill.getFormat(t.index, 1);
                    r = nt.AttributeMap.diff(l, u) || {},
                    Object.keys(r).length > 0 && (a = a.retain(o.length() - 1).retain(1, r))
                }
            }
            this.quill.updateContents(a, x.sources.USER),
            this.quill.focus()
        }
        handleDeleteRange(t) {
            Ya({
                range: t,
                quill: this.quill
            }),
            this.quill.focus()
        }
        handleEnter(t, e) {
            const n = Object.keys(e.format).reduce( (s, a) => (this.quill.scroll.query(a, B.BLOCK) && !Array.isArray(e.format[a]) && (s[a] = e.format[a]),
            s), {})
              , r = new P().retain(t.index).delete(t.length).insert(`
`, n);
            this.quill.updateContents(r, x.sources.USER),
            this.quill.setSelection(t.index + 1, x.sources.SILENT),
            this.quill.focus()
        }
    }
    const Im = {
        bindings: {
            bold: Rs("bold"),
            italic: Rs("italic"),
            underline: Rs("underline"),
            indent: {
                key: "Tab",
                format: ["blockquote", "indent", "list"],
                handler(i, t) {
                    return t.collapsed && t.offset !== 0 ? !0 : (this.quill.format("indent", "+1", x.sources.USER),
                    !1)
                }
            },
            outdent: {
                key: "Tab",
                shiftKey: !0,
                format: ["blockquote", "indent", "list"],
                handler(i, t) {
                    return t.collapsed && t.offset !== 0 ? !0 : (this.quill.format("indent", "-1", x.sources.USER),
                    !1)
                }
            },
            "outdent backspace": {
                key: "Backspace",
                collapsed: !0,
                shiftKey: null,
                metaKey: null,
                ctrlKey: null,
                altKey: null,
                format: ["indent", "list"],
                offset: 0,
                handler(i, t) {
                    t.format.indent != null ? this.quill.format("indent", "-1", x.sources.USER) : t.format.list != null && this.quill.format("list", !1, x.sources.USER)
                }
            },
            "indent code-block": Ko(!0),
            "outdent code-block": Ko(!1),
            "remove tab": {
                key: "Tab",
                shiftKey: !0,
                collapsed: !0,
                prefix: /\t$/,
                handler(i) {
                    this.quill.deleteText(i.index - 1, 1, x.sources.USER)
                }
            },
            tab: {
                key: "Tab",
                handler(i, t) {
                    if (t.format.table)
                        return !0;
                    this.quill.history.cutoff();
                    const e = new P().retain(i.index).delete(i.length).insert("	");
                    return this.quill.updateContents(e, x.sources.USER),
                    this.quill.history.cutoff(),
                    this.quill.setSelection(i.index + 1, x.sources.SILENT),
                    !1
                }
            },
            "blockquote empty enter": {
                key: "Enter",
                collapsed: !0,
                format: ["blockquote"],
                empty: !0,
                handler() {
                    this.quill.format("blockquote", !1, x.sources.USER)
                }
            },
            "list empty enter": {
                key: "Enter",
                collapsed: !0,
                format: ["list"],
                empty: !0,
                handler(i, t) {
                    const e = {
                        list: !1
                    };
                    t.format.indent && (e.indent = !1),
                    this.quill.formatLine(i.index, i.length, e, x.sources.USER)
                }
            },
            "checklist enter": {
                key: "Enter",
                collapsed: !0,
                format: {
                    list: "checked"
                },
                handler(i) {
                    const [t,e] = this.quill.getLine(i.index)
                      , n = {
                        ...t.formats(),
                        list: "checked"
                    }
                      , r = new P().retain(i.index).insert(`
`, n).retain(t.length() - e - 1).retain(1, {
                        list: "unchecked"
                    });
                    this.quill.updateContents(r, x.sources.USER),
                    this.quill.setSelection(i.index + 1, x.sources.SILENT),
                    this.quill.scrollSelectionIntoView()
                }
            },
            "header enter": {
                key: "Enter",
                collapsed: !0,
                format: ["header"],
                suffix: /^$/,
                handler(i, t) {
                    const [e,n] = this.quill.getLine(i.index)
                      , r = new P().retain(i.index).insert(`
`, t.format).retain(e.length() - n - 1).retain(1, {
                        header: null
                    });
                    this.quill.updateContents(r, x.sources.USER),
                    this.quill.setSelection(i.index + 1, x.sources.SILENT),
                    this.quill.scrollSelectionIntoView()
                }
            },
            "table backspace": {
                key: "Backspace",
                format: ["table"],
                collapsed: !0,
                offset: 0,
                handler() {}
            },
            "table delete": {
                key: "Delete",
                format: ["table"],
                collapsed: !0,
                suffix: /^$/,
                handler() {}
            },
            "table enter": {
                key: "Enter",
                shiftKey: null,
                format: ["table"],
                handler(i) {
                    const t = this.quill.getModule("table");
                    if (t) {
                        const [e,n,r,s] = t.getTable(i)
                          , a = Om(e, n, r, s);
                        if (a == null)
                            return;
                        let o = e.offset();
                        if (a < 0) {
                            const l = new P().retain(o).insert(`
`);
                            this.quill.updateContents(l, x.sources.USER),
                            this.quill.setSelection(i.index + 1, i.length, x.sources.SILENT)
                        } else if (a > 0) {
                            o += e.length();
                            const l = new P().retain(o).insert(`
`);
                            this.quill.updateContents(l, x.sources.USER),
                            this.quill.setSelection(o, x.sources.USER)
                        }
                    }
                }
            },
            "table tab": {
                key: "Tab",
                shiftKey: null,
                format: ["table"],
                handler(i, t) {
                    const {event: e, line: n} = t
                      , r = n.offset(this.quill.scroll);
                    e.shiftKey ? this.quill.setSelection(r - 1, x.sources.USER) : this.quill.setSelection(r + n.length(), x.sources.USER)
                }
            },
            "list autofill": {
                key: " ",
                shiftKey: null,
                collapsed: !0,
                format: {
                    "code-block": !1,
                    blockquote: !1,
                    table: !1
                },
                prefix: /^\s*?(\d+\.|-|\*|\[ ?\]|\[x\])$/,
                handler(i, t) {
                    if (this.quill.scroll.query("list") == null)
                        return !0;
                    const {length: e} = t.prefix
                      , [n,r] = this.quill.getLine(i.index);
                    if (r > e)
                        return !0;
                    let s;
                    switch (t.prefix.trim()) {
                    case "[]":
                    case "[ ]":
                        s = "unchecked";
                        break;
                    case "[x]":
                        s = "checked";
                        break;
                    case "-":
                    case "*":
                        s = "bullet";
                        break;
                    default:
                        s = "ordered"
                    }
                    this.quill.insertText(i.index, " ", x.sources.USER),
                    this.quill.history.cutoff();
                    const a = new P().retain(i.index - r).delete(e + 1).retain(n.length() - 2 - r).retain(1, {
                        list: s
                    });
                    return this.quill.updateContents(a, x.sources.USER),
                    this.quill.history.cutoff(),
                    this.quill.setSelection(i.index - e, x.sources.SILENT),
                    !1
                }
            },
            "code exit": {
                key: "Enter",
                collapsed: !0,
                format: ["code-block"],
                prefix: /^$/,
                suffix: /^\s*$/,
                handler(i) {
                    const [t,e] = this.quill.getLine(i.index);
                    let n = 2
                      , r = t;
                    for (; r != null && r.length() <= 1 && r.formats()["code-block"]; )
                        if (r = r.prev,
                        n -= 1,
                        n <= 0) {
                            const s = new P().retain(i.index + t.length() - e - 2).retain(1, {
                                "code-block": null
                            }).delete(1);
                            return this.quill.updateContents(s, x.sources.USER),
                            this.quill.setSelection(i.index - 1, x.sources.SILENT),
                            !1
                        }
                    return !0
                }
            },
            "embed left": Tr("ArrowLeft", !1),
            "embed left shift": Tr("ArrowLeft", !0),
            "embed right": Tr("ArrowRight", !1),
            "embed right shift": Tr("ArrowRight", !0),
            "table down": Vo(!1),
            "table up": Vo(!0)
        }
    };
    Qr.DEFAULTS = Im;
    function Ko(i) {
        return {
            key: "Tab",
            shiftKey: !i,
            format: {
                "code-block": !0
            },
            handler(t, e) {
                let {event: n} = e;
                const r = this.quill.scroll.query("code-block")
                  , {TAB: s} = r;
                if (t.length === 0 && !n.shiftKey) {
                    this.quill.insertText(t.index, s, x.sources.USER),
                    this.quill.setSelection(t.index + s.length, x.sources.SILENT);
                    return
                }
                const a = t.length === 0 ? this.quill.getLines(t.index, 1) : this.quill.getLines(t);
                let {index: o, length: l} = t;
                a.forEach( (u, h) => {
                    i ? (u.insertAt(0, s),
                    h === 0 ? o += s.length : l += s.length) : u.domNode.textContent.startsWith(s) && (u.deleteAt(0, s.length),
                    h === 0 ? o -= s.length : l -= s.length)
                }
                ),
                this.quill.update(x.sources.USER),
                this.quill.setSelection(o, l, x.sources.SILENT)
            }
        }
    }
    function Tr(i, t) {
        return {
            key: i,
            shiftKey: t,
            altKey: null,
            [i === "ArrowLeft" ? "prefix" : "suffix"]: /^$/,
            handler(n) {
                let {index: r} = n;
                i === "ArrowRight" && (r += n.length + 1);
                const [s] = this.quill.getLeaf(r);
                return s instanceof Ge ? (i === "ArrowLeft" ? t ? this.quill.setSelection(n.index - 1, n.length + 1, x.sources.USER) : this.quill.setSelection(n.index - 1, x.sources.USER) : t ? this.quill.setSelection(n.index, n.length + 1, x.sources.USER) : this.quill.setSelection(n.index + n.length + 1, x.sources.USER),
                !1) : !0
            }
        }
    }
    function Rs(i) {
        return {
            key: i[0],
            shortKey: !0,
            handler(t, e) {
                this.quill.format(i, !e.format[i], x.sources.USER)
            }
        }
    }
    function Vo(i) {
        return {
            key: i ? "ArrowUp" : "ArrowDown",
            collapsed: !0,
            format: ["table"],
            handler(t, e) {
                const n = i ? "prev" : "next"
                  , r = e.line
                  , s = r.parent[n];
                if (s != null) {
                    if (s.statics.blotName === "table-row") {
                        let a = s.children.head
                          , o = r;
                        for (; o.prev != null; )
                            o = o.prev,
                            a = a.next;
                        const l = a.offset(this.quill.scroll) + Math.min(e.offset, a.length() - 1);
                        this.quill.setSelection(l, 0, x.sources.USER)
                    }
                } else {
                    const a = r.table()[n];
                    a != null && (i ? this.quill.setSelection(a.offset(this.quill.scroll) + a.length() - 1, 0, x.sources.USER) : this.quill.setSelection(a.offset(this.quill.scroll), 0, x.sources.USER))
                }
                return !1
            }
        }
    }
    function Lm(i) {
        if (typeof i == "string" || typeof i == "number")
            i = {
                key: i
            };
        else if (typeof i == "object")
            i = oi(i);
        else
            return null;
        return i.shortKey && (i[Nm] = i.shortKey,
        delete i.shortKey),
        i
    }
    function Ya(i) {
        let {quill: t, range: e} = i;
        const n = t.getLines(e);
        let r = {};
        if (n.length > 1) {
            const s = n[0].formats()
              , a = n[n.length - 1].formats();
            r = nt.AttributeMap.diff(a, s) || {}
        }
        t.deleteText(e, x.sources.USER),
        Object.keys(r).length > 0 && t.formatLine(e.index, 1, r, x.sources.USER),
        t.setSelection(e.index, x.sources.SILENT)
    }
    function Om(i, t, e, n) {
        return t.prev == null && t.next == null ? e.prev == null && e.next == null ? n === 0 ? -1 : 1 : e.prev == null ? -1 : 1 : t.prev == null ? -1 : t.next == null ? 1 : null
    }
    const Dm = /font-weight:\s*normal/
      , Mm = ["P", "OL", "UL"]
      , Wo = i => i && Mm.includes(i.tagName)
      , km = i => {
        Array.from(i.querySelectorAll("br")).filter(t => Wo(t.previousElementSibling) && Wo(t.nextElementSibling)).forEach(t => {
            var e;
            (e = t.parentNode) == null || e.removeChild(t)
        }
        )
    }
      , qm = i => {
        Array.from(i.querySelectorAll('b[style*="font-weight"]')).filter(t => {
            var e;
            return (e = t.getAttribute("style")) == null ? void 0 : e.match(Dm)
        }
        ).forEach(t => {
            var n;
            const e = i.createDocumentFragment();
            e.append(...t.childNodes),
            (n = t.parentNode) == null || n.replaceChild(e, t)
        }
        )
    }
    ;
    function Rm(i) {
        i.querySelector('[id^="docs-internal-guid-"]') && (qm(i),
        km(i))
    }
    const Fm = /\bmso-list:[^;]*ignore/i
      , Pm = /\bmso-list:[^;]*\bl(\d+)/i
      , Bm = /\bmso-list:[^;]*\blevel(\d+)/i
      , jm = (i, t) => {
        const e = i.getAttribute("style")
          , n = e == null ? void 0 : e.match(Pm);
        if (!n)
            return null;
        const r = Number(n[1])
          , s = e == null ? void 0 : e.match(Bm)
          , a = s ? Number(s[1]) : 1
          , o = new RegExp(`@list l${r}:level${a}\\s*\\{[^\\}]*mso-level-number-format:\\s*([\\w-]+)`,"i")
          , l = t.match(o)
          , u = l && l[1] === "bullet" ? "bullet" : "ordered";
        return {
            id: r,
            indent: a,
            type: u,
            element: i
        }
    }
      , Hm = i => {
        var a, o;
        const t = Array.from(i.querySelectorAll("[style*=mso-list]"))
          , e = []
          , n = [];
        t.forEach(l => {
            (l.getAttribute("style") || "").match(Fm) ? e.push(l) : n.push(l)
        }
        ),
        e.forEach(l => {
            var u;
            return (u = l.parentNode) == null ? void 0 : u.removeChild(l)
        }
        );
        const r = i.documentElement.innerHTML
          , s = n.map(l => jm(l, r)).filter(l => l);
        for (; s.length; ) {
            const l = [];
            let u = s.shift();
            for (; u; )
                l.push(u),
                u = s.length && ((a = s[0]) == null ? void 0 : a.element) === u.element.nextElementSibling && s[0].id === u.id ? s.shift() : null;
            const h = document.createElement("ul");
            l.forEach(g => {
                const b = document.createElement("li");
                b.setAttribute("data-list", g.type),
                g.indent > 1 && b.setAttribute("class", `ql-indent-${g.indent - 1}`),
                b.innerHTML = g.element.innerHTML,
                h.appendChild(b)
            }
            );
            const f = (o = l[0]) == null ? void 0 : o.element
              , {parentNode: d} = f ?? {};
            f && (d == null || d.replaceChild(h, f)),
            l.slice(1).forEach(g => {
                let {element: b} = g;
                d == null || d.removeChild(b)
            }
            )
        }
    }
    ;
    function Um(i) {
        i.documentElement.getAttribute("xmlns:w") === "urn:schemas-microsoft-com:office:word" && Hm(i)
    }
    const $m = [Um, Rm]
      , zm = i => {
        i.documentElement && $m.forEach(t => {
            t(i)
        }
        )
    }
      , Km = Wt("quill:clipboard")
      , Vm = [[Node.TEXT_NODE, rg], [Node.TEXT_NODE, Yo], ["br", Xm], [Node.ELEMENT_NODE, Yo], [Node.ELEMENT_NODE, Zm], [Node.ELEMENT_NODE, Ym], [Node.ELEMENT_NODE, ng], ["li", eg], ["ol, ul", tg], ["pre", Qm], ["tr", ig], ["b", Fs("bold")], ["i", Fs("italic")], ["strike", Fs("strike")], ["style", Jm]]
      , Wm = [Cm, bc].reduce( (i, t) => (i[t.keyName] = t,
    i), {})
      , Go = [gc, Va, Ka, Ec, Cc, Sc].reduce( (i, t) => (i[t.keyName] = t,
    i), {});
    class Tc extends ft {
        constructor(t, e) {
            super(t, e),
            this.quill.root.addEventListener("copy", n => this.onCaptureCopy(n, !1)),
            this.quill.root.addEventListener("cut", n => this.onCaptureCopy(n, !0)),
            this.quill.root.addEventListener("paste", this.onCapturePaste.bind(this)),
            this.matchers = [],
            Vm.concat(this.options.matchers ?? []).forEach(n => {
                let[r,s] = n;
                this.addMatcher(r, s)
            }
            )
        }
        addMatcher(t, e) {
            this.matchers.push([t, e])
        }
        convert(t) {
            let {html: e, text: n} = t
              , r = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : {};
            if (r[Ne.blotName])
                return new P().insert(n || "", {
                    [Ne.blotName]: r[Ne.blotName]
                });
            if (!e)
                return new P().insert(n || "", r);
            const s = this.convertHTML(e);
            return or(s, `
`) && (s.ops[s.ops.length - 1].attributes == null || r.table) ? s.compose(new P().retain(s.length() - 1).delete(1)) : s
        }
        normalizeHTML(t) {
            zm(t)
        }
        convertHTML(t) {
            const e = new DOMParser().parseFromString(t, "text/html");
            this.normalizeHTML(e);
            const n = e.body
              , r = new WeakMap
              , [s,a] = this.prepareMatching(n, r);
            return Za(this.quill.scroll, n, s, a, r)
        }
        dangerouslyPasteHTML(t, e) {
            let n = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : x.sources.API;
            if (typeof t == "string") {
                const r = this.convert({
                    html: t,
                    text: ""
                });
                this.quill.setContents(r, e),
                this.quill.setSelection(0, x.sources.SILENT)
            } else {
                const r = this.convert({
                    html: e,
                    text: ""
                });
                this.quill.updateContents(new P().retain(t).concat(r), n),
                this.quill.setSelection(t + r.length(), x.sources.SILENT)
            }
        }
        onCaptureCopy(t) {
            var a, o;
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !1;
            if (t.defaultPrevented)
                return;
            t.preventDefault();
            const [n] = this.quill.selection.getRange();
            if (n == null)
                return;
            const {html: r, text: s} = this.onCopy(n, e);
            (a = t.clipboardData) == null || a.setData("text/plain", s),
            (o = t.clipboardData) == null || o.setData("text/html", r),
            e && Ya({
                range: n,
                quill: this.quill
            })
        }
        normalizeURIList(t) {
            return t.split(/\r?\n/).filter(e => e[0] !== "#").join(`
`)
        }
        onCapturePaste(t) {
            var a, o, l, u, h;
            if (t.defaultPrevented || !this.quill.isEnabled())
                return;
            t.preventDefault();
            const e = this.quill.getSelection(!0);
            if (e == null)
                return;
            const n = (a = t.clipboardData) == null ? void 0 : a.getData("text/html");
            let r = (o = t.clipboardData) == null ? void 0 : o.getData("text/plain");
            if (!n && !r) {
                const f = (l = t.clipboardData) == null ? void 0 : l.getData("text/uri-list");
                f && (r = this.normalizeURIList(f))
            }
            const s = Array.from(((u = t.clipboardData) == null ? void 0 : u.files) || []);
            if (!n && s.length > 0) {
                this.quill.uploader.upload(e, s);
                return
            }
            if (n && s.length > 0) {
                const f = new DOMParser().parseFromString(n, "text/html");
                if (f.body.childElementCount === 1 && ((h = f.body.firstElementChild) == null ? void 0 : h.tagName) === "IMG") {
                    this.quill.uploader.upload(e, s);
                    return
                }
            }
            this.onPaste(e, {
                html: n,
                text: r
            })
        }
        onCopy(t) {
            const e = this.quill.getText(t);
            return {
                html: this.quill.getSemanticHTML(t),
                text: e
            }
        }
        onPaste(t, e) {
            let {text: n, html: r} = e;
            const s = this.quill.getFormat(t.index)
              , a = this.convert({
                text: n,
                html: r
            }, s);
            Km.log("onPaste", a, {
                text: n,
                html: r
            });
            const o = new P().retain(t.index).delete(t.length).concat(a);
            this.quill.updateContents(o, x.sources.USER),
            this.quill.setSelection(o.length() - t.length, x.sources.SILENT),
            this.quill.scrollSelectionIntoView()
        }
        prepareMatching(t, e) {
            const n = []
              , r = [];
            return this.matchers.forEach(s => {
                const [a,o] = s;
                switch (a) {
                case Node.TEXT_NODE:
                    r.push(o);
                    break;
                case Node.ELEMENT_NODE:
                    n.push(o);
                    break;
                default:
                    Array.from(t.querySelectorAll(a)).forEach(l => {
                        if (e.has(l)) {
                            const u = e.get(l);
                            u == null || u.push(o)
                        } else
                            e.set(l, [o])
                    }
                    );
                    break
                }
            }
            ),
            [n, r]
        }
    }
    k(Tc, "DEFAULTS", {
        matchers: []
    });
    function jn(i, t, e, n) {
        return n.query(t) ? i.reduce( (r, s) => {
            if (!s.insert)
                return r;
            if (s.attributes && s.attributes[t])
                return r.push(s);
            const a = e ? {
                [t]: e
            } : {};
            return r.insert(s.insert, {
                ...a,
                ...s.attributes
            })
        }
        , new P) : i
    }
    function or(i, t) {
        let e = "";
        for (let n = i.ops.length - 1; n >= 0 && e.length < t.length; --n) {
            const r = i.ops[n];
            if (typeof r.insert != "string")
                break;
            e = r.insert + e
        }
        return e.slice(-1 * t.length) === t
    }
    function on(i, t) {
        if (!(i instanceof Element))
            return !1;
        const e = t.query(i);
        return e && e.prototype instanceof Ge ? !1 : ["address", "article", "blockquote", "canvas", "dd", "div", "dl", "dt", "fieldset", "figcaption", "figure", "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "header", "iframe", "li", "main", "nav", "ol", "output", "p", "pre", "section", "table", "td", "tr", "ul", "video"].includes(i.tagName.toLowerCase())
    }
    function Gm(i, t) {
        return i.previousElementSibling && i.nextElementSibling && !on(i.previousElementSibling, t) && !on(i.nextElementSibling, t)
    }
    const xr = new WeakMap;
    function xc(i) {
        return i == null ? !1 : (xr.has(i) || (i.tagName === "PRE" ? xr.set(i, !0) : xr.set(i, xc(i.parentNode))),
        xr.get(i))
    }
    function Za(i, t, e, n, r) {
        return t.nodeType === t.TEXT_NODE ? n.reduce( (s, a) => a(t, s, i), new P) : t.nodeType === t.ELEMENT_NODE ? Array.from(t.childNodes || []).reduce( (s, a) => {
            let o = Za(i, a, e, n, r);
            return a.nodeType === t.ELEMENT_NODE && (o = e.reduce( (l, u) => u(a, l, i), o),
            o = (r.get(a) || []).reduce( (l, u) => u(a, l, i), o)),
            s.concat(o)
        }
        , new P) : new P
    }
    function Fs(i) {
        return (t, e, n) => jn(e, i, !0, n)
    }
    function Ym(i, t, e) {
        const n = Nt.keys(i)
          , r = ht.keys(i)
          , s = fn.keys(i)
          , a = {};
        return n.concat(r).concat(s).forEach(o => {
            let l = e.query(o, B.ATTRIBUTE);
            l != null && (a[l.attrName] = l.value(i),
            a[l.attrName]) || (l = Wm[o],
            l != null && (l.attrName === o || l.keyName === o) && (a[l.attrName] = l.value(i) || void 0),
            l = Go[o],
            l != null && (l.attrName === o || l.keyName === o) && (l = Go[o],
            a[l.attrName] = l.value(i) || void 0))
        }
        ),
        Object.entries(a).reduce( (o, l) => {
            let[u,h] = l;
            return jn(o, u, h, e)
        }
        , t)
    }
    function Zm(i, t, e) {
        const n = e.query(i);
        if (n == null)
            return t;
        if (n.prototype instanceof Ge) {
            const r = {}
              , s = n.value(i);
            if (s != null)
                return r[n.blotName] = s,
                new P().insert(r, n.formats(i, e))
        } else if (n.prototype instanceof Qi && !or(t, `
`) && t.insert(`
`),
        "blotName"in n && "formats"in n && typeof n.formats == "function")
            return jn(t, n.blotName, n.formats(i, e), e);
        return t
    }
    function Xm(i, t) {
        return or(t, `
`) || t.insert(`
`),
        t
    }
    function Qm(i, t, e) {
        const n = e.query("code-block")
          , r = n && "formats"in n && typeof n.formats == "function" ? n.formats(i, e) : !0;
        return jn(t, "code-block", r, e)
    }
    function Jm() {
        return new P
    }
    function eg(i, t, e) {
        const n = e.query(i);
        if (n == null || n.blotName !== "list" || !or(t, `
`))
            return t;
        let r = -1
          , s = i.parentNode;
        for (; s != null; )
            ["OL", "UL"].includes(s.tagName) && (r += 1),
            s = s.parentNode;
        return r <= 0 ? t : t.reduce( (a, o) => o.insert ? o.attributes && typeof o.attributes.indent == "number" ? a.push(o) : a.insert(o.insert, {
            indent: r,
            ...o.attributes || {}
        }) : a, new P)
    }
    function tg(i, t, e) {
        const n = i;
        let r = n.tagName === "OL" ? "ordered" : "bullet";
        const s = n.getAttribute("data-checked");
        return s && (r = s === "true" ? "checked" : "unchecked"),
        jn(t, "list", r, e)
    }
    function Yo(i, t, e) {
        if (!or(t, `
`)) {
            if (on(i, e) && (i.childNodes.length > 0 || i instanceof HTMLParagraphElement))
                return t.insert(`
`);
            if (t.length() > 0 && i.nextSibling) {
                let n = i.nextSibling;
                for (; n != null; ) {
                    if (on(n, e))
                        return t.insert(`
`);
                    const r = e.query(n);
                    if (r && r.prototype instanceof tt)
                        return t.insert(`
`);
                    n = n.firstChild
                }
            }
        }
        return t
    }
    function ng(i, t, e) {
        var s;
        const n = {}
          , r = i.style || {};
        return r.fontStyle === "italic" && (n.italic = !0),
        r.textDecoration === "underline" && (n.underline = !0),
        r.textDecoration === "line-through" && (n.strike = !0),
        ((s = r.fontWeight) != null && s.startsWith("bold") || parseInt(r.fontWeight, 10) >= 700) && (n.bold = !0),
        t = Object.entries(n).reduce( (a, o) => {
            let[l,u] = o;
            return jn(a, l, u, e)
        }
        , t),
        parseFloat(r.textIndent || 0) > 0 ? new P().insert("	").concat(t) : t
    }
    function ig(i, t, e) {
        var r, s;
        const n = ((r = i.parentElement) == null ? void 0 : r.tagName) === "TABLE" ? i.parentElement : (s = i.parentElement) == null ? void 0 : s.parentElement;
        if (n != null) {
            const o = Array.from(n.querySelectorAll("tr")).indexOf(i) + 1;
            return jn(t, "table", o, e)
        }
        return t
    }
    function rg(i, t, e) {
        var r;
        let n = i.data;
        if (((r = i.parentElement) == null ? void 0 : r.tagName) === "O:P")
            return t.insert(n.trim());
        if (!xc(i)) {
            if (n.trim().length === 0 && n.includes(`
`) && !Gm(i, e))
                return t;
            const s = (a, o) => {
                const l = o.replace(/[^\u00a0]/g, "");
                return l.length < 1 && a ? " " : l
            }
            ;
            n = n.replace(/\r\n/g, " ").replace(/\n/g, " "),
            n = n.replace(/\s\s+/g, s.bind(s, !0)),
            (i.previousSibling == null && i.parentElement != null && on(i.parentElement, e) || i.previousSibling instanceof Element && on(i.previousSibling, e)) && (n = n.replace(/^\s+/, s.bind(s, !1))),
            (i.nextSibling == null && i.parentElement != null && on(i.parentElement, e) || i.nextSibling instanceof Element && on(i.nextSibling, e)) && (n = n.replace(/\s+$/, s.bind(s, !1)))
        }
        return t.insert(n)
    }
    class Nc extends ft {
        constructor(e, n) {
            super(e, n);
            k(this, "lastRecorded", 0);
            k(this, "ignoreChange", !1);
            k(this, "stack", {
                undo: [],
                redo: []
            });
            k(this, "currentRange", null);
            this.quill.on(x.events.EDITOR_CHANGE, (r, s, a, o) => {
                r === x.events.SELECTION_CHANGE ? s && o !== x.sources.SILENT && (this.currentRange = s) : r === x.events.TEXT_CHANGE && (this.ignoreChange || (!this.options.userOnly || o === x.sources.USER ? this.record(s, a) : this.transform(s)),
                this.currentRange = ua(this.currentRange, s))
            }
            ),
            this.quill.keyboard.addBinding({
                key: "z",
                shortKey: !0
            }, this.undo.bind(this)),
            this.quill.keyboard.addBinding({
                key: ["z", "Z"],
                shortKey: !0,
                shiftKey: !0
            }, this.redo.bind(this)),
            /Win/i.test(navigator.platform) && this.quill.keyboard.addBinding({
                key: "y",
                shortKey: !0
            }, this.redo.bind(this)),
            this.quill.root.addEventListener("beforeinput", r => {
                r.inputType === "historyUndo" ? (this.undo(),
                r.preventDefault()) : r.inputType === "historyRedo" && (this.redo(),
                r.preventDefault())
            }
            )
        }
        change(e, n) {
            if (this.stack[e].length === 0)
                return;
            const r = this.stack[e].pop();
            if (!r)
                return;
            const s = this.quill.getContents()
              , a = r.delta.invert(s);
            this.stack[n].push({
                delta: a,
                range: ua(r.range, a)
            }),
            this.lastRecorded = 0,
            this.ignoreChange = !0,
            this.quill.updateContents(r.delta, x.sources.USER),
            this.ignoreChange = !1,
            this.restoreSelection(r)
        }
        clear() {
            this.stack = {
                undo: [],
                redo: []
            }
        }
        cutoff() {
            this.lastRecorded = 0
        }
        record(e, n) {
            if (e.ops.length === 0)
                return;
            this.stack.redo = [];
            let r = e.invert(n)
              , s = this.currentRange;
            const a = Date.now();
            if (this.lastRecorded + this.options.delay > a && this.stack.undo.length > 0) {
                const o = this.stack.undo.pop();
                o && (r = r.compose(o.delta),
                s = o.range)
            } else
                this.lastRecorded = a;
            r.length() !== 0 && (this.stack.undo.push({
                delta: r,
                range: s
            }),
            this.stack.undo.length > this.options.maxStack && this.stack.undo.shift())
        }
        redo() {
            this.change("redo", "undo")
        }
        transform(e) {
            Zo(this.stack.undo, e),
            Zo(this.stack.redo, e)
        }
        undo() {
            this.change("undo", "redo")
        }
        restoreSelection(e) {
            if (e.range)
                this.quill.setSelection(e.range, x.sources.USER);
            else {
                const n = ag(this.quill.scroll, e.delta);
                this.quill.setSelection(n, x.sources.USER)
            }
        }
    }
    k(Nc, "DEFAULTS", {
        delay: 1e3,
        maxStack: 100,
        userOnly: !1
    });
    function Zo(i, t) {
        let e = t;
        for (let n = i.length - 1; n >= 0; n -= 1) {
            const r = i[n];
            i[n] = {
                delta: e.transform(r.delta, !0),
                range: r.range && ua(r.range, e)
            },
            e = r.delta.transform(e),
            i[n].delta.length() === 0 && i.splice(n, 1)
        }
    }
    function sg(i, t) {
        const e = t.ops[t.ops.length - 1];
        return e == null ? !1 : e.insert != null ? typeof e.insert == "string" && e.insert.endsWith(`
`) : e.attributes != null ? Object.keys(e.attributes).some(n => i.query(n, B.BLOCK) != null) : !1
    }
    function ag(i, t) {
        const e = t.reduce( (r, s) => r + (s.delete || 0), 0);
        let n = t.length() - e;
        return sg(i, t) && (n -= 1),
        n
    }
    function ua(i, t) {
        if (!i)
            return i;
        const e = t.transformPosition(i.index)
          , n = t.transformPosition(i.index + i.length);
        return {
            index: e,
            length: n - e
        }
    }
    class Ic extends ft {
        constructor(t, e) {
            super(t, e),
            t.root.addEventListener("drop", n => {
                var a;
                n.preventDefault();
                let r = null;
                if (document.caretRangeFromPoint)
                    r = document.caretRangeFromPoint(n.clientX, n.clientY);
                else if (document.caretPositionFromPoint) {
                    const o = document.caretPositionFromPoint(n.clientX, n.clientY);
                    r = document.createRange(),
                    r.setStart(o.offsetNode, o.offset),
                    r.setEnd(o.offsetNode, o.offset)
                }
                const s = r && t.selection.normalizeNative(r);
                if (s) {
                    const o = t.selection.normalizedToRange(s);
                    (a = n.dataTransfer) != null && a.files && this.upload(o, n.dataTransfer.files)
                }
            }
            )
        }
        upload(t, e) {
            const n = [];
            Array.from(e).forEach(r => {
                var s;
                r && ((s = this.options.mimetypes) != null && s.includes(r.type)) && n.push(r)
            }
            ),
            n.length > 0 && this.options.handler.call(this, t, n)
        }
    }
    Ic.DEFAULTS = {
        mimetypes: ["image/png", "image/jpeg"],
        handler(i, t) {
            if (!this.quill.scroll.query("image"))
                return;
            const e = t.map(n => new Promise(r => {
                const s = new FileReader;
                s.onload = () => {
                    r(s.result)
                }
                ,
                s.readAsDataURL(n)
            }
            ));
            Promise.all(e).then(n => {
                const r = n.reduce( (s, a) => s.insert({
                    image: a
                }), new P().retain(i.index).delete(i.length));
                this.quill.updateContents(r, R.sources.USER),
                this.quill.setSelection(i.index + n.length, R.sources.SILENT)
            }
            )
        }
    };
    const og = ["insertText", "insertReplacementText"];
    let lg = class extends ft {
        constructor(t, e) {
            super(t, e),
            t.root.addEventListener("beforeinput", n => {
                this.handleBeforeInput(n)
            }
            ),
            /Android/i.test(navigator.userAgent) || t.on(x.events.COMPOSITION_BEFORE_START, () => {
                this.handleCompositionStart()
            }
            )
        }
        deleteRange(t) {
            Ya({
                range: t,
                quill: this.quill
            })
        }
        replaceText(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : "";
            if (t.length === 0)
                return !1;
            if (e) {
                const n = this.quill.getFormat(t.index, 1);
                this.deleteRange(t),
                this.quill.updateContents(new P().retain(t.index).insert(e, n), x.sources.USER)
            } else
                this.deleteRange(t);
            return this.quill.setSelection(t.index + e.length, 0, x.sources.SILENT),
            !0
        }
        handleBeforeInput(t) {
            if (this.quill.composition.isComposing || t.defaultPrevented || !og.includes(t.inputType))
                return;
            const e = t.getTargetRanges ? t.getTargetRanges()[0] : null;
            if (!e || e.collapsed === !0)
                return;
            const n = cg(t);
            if (n == null)
                return;
            const r = this.quill.selection.normalizeNative(e)
              , s = r ? this.quill.selection.normalizedToRange(r) : null;
            s && this.replaceText(s, n) && t.preventDefault()
        }
        handleCompositionStart() {
            const t = this.quill.getSelection();
            t && this.replaceText(t)
        }
    }
    ;
    function cg(i) {
        var t;
        return typeof i.data == "string" ? i.data : (t = i.dataTransfer) != null && t.types.includes("text/plain") ? i.dataTransfer.getData("text/plain") : null
    }
    const ug = /Mac/i.test(navigator.platform)
      , hg = 100
      , dg = i => !!(i.key === "ArrowLeft" || i.key === "ArrowRight" || i.key === "ArrowUp" || i.key === "ArrowDown" || i.key === "Home" || ug && i.key === "a" && i.ctrlKey === !0);
    class fg extends ft {
        constructor(e, n) {
            super(e, n);
            k(this, "isListening", !1);
            k(this, "selectionChangeDeadline", 0);
            this.handleArrowKeys(),
            this.handleNavigationShortcuts()
        }
        handleArrowKeys() {
            this.quill.keyboard.addBinding({
                key: ["ArrowLeft", "ArrowRight"],
                offset: 0,
                shiftKey: null,
                handler(e, n) {
                    let {line: r, event: s} = n;
                    if (!(r instanceof ct) || !r.uiNode)
                        return !0;
                    const a = getComputedStyle(r.domNode).direction === "rtl";
                    return a && s.key !== "ArrowRight" || !a && s.key !== "ArrowLeft" ? !0 : (this.quill.setSelection(e.index - 1, e.length + (s.shiftKey ? 1 : 0), x.sources.USER),
                    !1)
                }
            })
        }
        handleNavigationShortcuts() {
            this.quill.root.addEventListener("keydown", e => {
                !e.defaultPrevented && dg(e) && this.ensureListeningToSelectionChange()
            }
            )
        }
        ensureListeningToSelectionChange() {
            if (this.selectionChangeDeadline = Date.now() + hg,
            this.isListening)
                return;
            this.isListening = !0;
            const e = () => {
                this.isListening = !1,
                Date.now() <= this.selectionChangeDeadline && this.handleSelectionChange()
            }
            ;
            document.addEventListener("selectionchange", e, {
                once: !0
            })
        }
        handleSelectionChange() {
            const e = document.getSelection();
            if (!e)
                return;
            const n = e.getRangeAt(0);
            if (n.collapsed !== !0 || n.startOffset !== 0)
                return;
            const r = this.quill.scroll.find(n.startContainer);
            if (!(r instanceof ct) || !r.uiNode)
                return;
            const s = document.createRange();
            s.setStartAfter(r.uiNode),
            s.setEndAfter(r.uiNode),
            e.removeAllRanges(),
            e.addRange(s)
        }
    }
    x.register({
        "blots/block": we,
        "blots/block/embed": tt,
        "blots/break": dt,
        "blots/container": Pn,
        "blots/cursor": pi,
        "blots/embed": $a,
        "blots/inline": It,
        "blots/scroll": ri,
        "blots/text": ut,
        "modules/clipboard": Tc,
        "modules/history": Nc,
        "modules/keyboard": Qr,
        "modules/uploader": Ic,
        "modules/input": lg,
        "modules/uiNode": fg
    });
    class pg extends ht {
        add(t, e) {
            let n = 0;
            if (e === "+1" || e === "-1") {
                const r = this.value(t) || 0;
                n = e === "+1" ? r + 1 : r - 1
            } else
                typeof e == "number" && (n = e);
            return n === 0 ? (this.remove(t),
            !0) : super.add(t, n.toString())
        }
        canAdd(t, e) {
            return super.canAdd(t, e) || super.canAdd(t, parseInt(e, 10))
        }
        value(t) {
            return parseInt(super.value(t), 10) || void 0
        }
    }
    const mg = new pg("indent","ql-indent",{
        scope: B.BLOCK,
        whitelist: [1, 2, 3, 4, 5, 6, 7, 8]
    });
    class ha extends we {
    }
    k(ha, "blotName", "blockquote"),
    k(ha, "tagName", "blockquote");
    class da extends we {
        static formats(t) {
            return this.tagName.indexOf(t.tagName) + 1
        }
    }
    k(da, "blotName", "header"),
    k(da, "tagName", ["H1", "H2", "H3", "H4", "H5", "H6"]);
    class lr extends Pn {
    }
    lr.blotName = "list-container";
    lr.tagName = "OL";
    class cr extends we {
        static create(t) {
            const e = super.create();
            return e.setAttribute("data-list", t),
            e
        }
        static formats(t) {
            return t.getAttribute("data-list") || void 0
        }
        static register() {
            x.register(lr)
        }
        constructor(t, e) {
            super(t, e);
            const n = e.ownerDocument.createElement("span")
              , r = s => {
                if (!t.isEnabled())
                    return;
                const a = this.statics.formats(e, t);
                a === "checked" ? (this.format("list", "unchecked"),
                s.preventDefault()) : a === "unchecked" && (this.format("list", "checked"),
                s.preventDefault())
            }
            ;
            n.addEventListener("mousedown", r),
            n.addEventListener("touchstart", r),
            this.attachUI(n)
        }
        format(t, e) {
            t === this.statics.blotName && e ? this.domNode.setAttribute("data-list", e) : super.format(t, e)
        }
    }
    cr.blotName = "list";
    cr.tagName = "LI";
    lr.allowedChildren = [cr];
    cr.requiredContainer = lr;
    class tr extends It {
        static create() {
            return super.create()
        }
        static formats() {
            return !0
        }
        optimize(t) {
            super.optimize(t),
            this.domNode.tagName !== this.statics.tagName[0] && this.replaceWith(this.statics.blotName)
        }
    }
    k(tr, "blotName", "bold"),
    k(tr, "tagName", ["STRONG", "B"]);
    class fa extends tr {
    }
    k(fa, "blotName", "italic"),
    k(fa, "tagName", ["EM", "I"]);
    class ln extends It {
        static create(t) {
            const e = super.create(t);
            return e.setAttribute("href", this.sanitize(t)),
            e.setAttribute("rel", "noopener noreferrer"),
            e.setAttribute("target", "_blank"),
            e
        }
        static formats(t) {
            return t.getAttribute("href")
        }
        static sanitize(t) {
            return Lc(t, this.PROTOCOL_WHITELIST) ? t : this.SANITIZED_URL
        }
        format(t, e) {
            t !== this.statics.blotName || !e ? super.format(t, e) : this.domNode.setAttribute("href", this.constructor.sanitize(e))
        }
    }
    k(ln, "blotName", "link"),
    k(ln, "tagName", "A"),
    k(ln, "SANITIZED_URL", "about:blank"),
    k(ln, "PROTOCOL_WHITELIST", ["http", "https", "mailto", "tel", "sms"]);
    function Lc(i, t) {
        const e = document.createElement("a");
        e.href = i;
        const n = e.href.slice(0, e.href.indexOf(":"));
        return t.indexOf(n) > -1
    }
    class pa extends It {
        static create(t) {
            return t === "super" ? document.createElement("sup") : t === "sub" ? document.createElement("sub") : super.create(t)
        }
        static formats(t) {
            if (t.tagName === "SUB")
                return "sub";
            if (t.tagName === "SUP")
                return "super"
        }
    }
    k(pa, "blotName", "script"),
    k(pa, "tagName", ["SUB", "SUP"]);
    class ma extends tr {
    }
    k(ma, "blotName", "strike"),
    k(ma, "tagName", ["S", "STRIKE"]);
    class ga extends It {
    }
    k(ga, "blotName", "underline"),
    k(ga, "tagName", "U");
    class Mr extends $a {
        static create(t) {
            if (window.katex == null)
                throw new Error("Formula module requires KaTeX.");
            const e = super.create(t);
            return typeof t == "string" && (window.katex.render(t, e, {
                throwOnError: !1,
                errorColor: "#f00"
            }),
            e.setAttribute("data-value", t)),
            e
        }
        static value(t) {
            return t.getAttribute("data-value")
        }
        html() {
            const {formula: t} = this.value();
            return `<span>${t}</span>`
        }
    }
    k(Mr, "blotName", "formula"),
    k(Mr, "className", "ql-formula"),
    k(Mr, "tagName", "SPAN");
    const Xo = ["alt", "height", "width"];
    class va extends Ge {
        static create(t) {
            const e = super.create(t);
            return typeof t == "string" && e.setAttribute("src", this.sanitize(t)),
            e
        }
        static formats(t) {
            return Xo.reduce( (e, n) => (t.hasAttribute(n) && (e[n] = t.getAttribute(n)),
            e), {})
        }
        static match(t) {
            return /\.(jpe?g|gif|png)$/.test(t) || /^data:image\/.+;base64/.test(t)
        }
        static sanitize(t) {
            return Lc(t, ["http", "https", "data"]) ? t : "//:0"
        }
        static value(t) {
            return t.getAttribute("src")
        }
        format(t, e) {
            Xo.indexOf(t) > -1 ? e ? this.domNode.setAttribute(t, e) : this.domNode.removeAttribute(t) : super.format(t, e)
        }
    }
    k(va, "blotName", "image"),
    k(va, "tagName", "IMG");
    const Qo = ["height", "width"];
    class kr extends tt {
        static create(t) {
            const e = super.create(t);
            return e.setAttribute("frameborder", "0"),
            e.setAttribute("allowfullscreen", "true"),
            e.setAttribute("src", this.sanitize(t)),
            e
        }
        static formats(t) {
            return Qo.reduce( (e, n) => (t.hasAttribute(n) && (e[n] = t.getAttribute(n)),
            e), {})
        }
        static sanitize(t) {
            return ln.sanitize(t)
        }
        static value(t) {
            return t.getAttribute("src")
        }
        format(t, e) {
            Qo.indexOf(t) > -1 ? e ? this.domNode.setAttribute(t, e) : this.domNode.removeAttribute(t) : super.format(t, e)
        }
        html() {
            const {video: t} = this.value();
            return `<a href="${t}">${t}</a>`
        }
    }
    k(kr, "blotName", "video"),
    k(kr, "className", "ql-video"),
    k(kr, "tagName", "IFRAME");
    const Hi = new ht("code-token","hljs",{
        scope: B.INLINE
    });
    class Ut extends It {
        static formats(t, e) {
            for (; t != null && t !== e.domNode; ) {
                if (t.classList && t.classList.contains(Ne.className))
                    return super.formats(t, e);
                t = t.parentNode
            }
        }
        constructor(t, e, n) {
            super(t, e, n),
            Hi.add(this.domNode, n)
        }
        format(t, e) {
            t !== Ut.blotName ? super.format(t, e) : e ? Hi.add(this.domNode, e) : (Hi.remove(this.domNode),
            this.domNode.classList.remove(this.statics.className))
        }
        optimize() {
            super.optimize(...arguments),
            Hi.value(this.domNode) || this.unwrap()
        }
    }
    Ut.blotName = "code-token";
    Ut.className = "ql-token";
    class et extends Ne {
        static create(t) {
            const e = super.create(t);
            return typeof t == "string" && e.setAttribute("data-language", t),
            e
        }
        static formats(t) {
            return t.getAttribute("data-language") || "plain"
        }
        static register() {}
        format(t, e) {
            t === this.statics.blotName && e ? this.domNode.setAttribute("data-language", e) : super.format(t, e)
        }
        replaceWith(t, e) {
            return this.formatAt(0, this.length(), Ut.blotName, !1),
            super.replaceWith(t, e)
        }
    }
    class zi extends Bn {
        attach() {
            super.attach(),
            this.forceNext = !1,
            this.scroll.emitMount(this)
        }
        format(t, e) {
            t === et.blotName && (this.forceNext = !0,
            this.children.forEach(n => {
                n.format(t, e)
            }
            ))
        }
        formatAt(t, e, n, r) {
            n === et.blotName && (this.forceNext = !0),
            super.formatAt(t, e, n, r)
        }
        highlight(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !1;
            if (this.children.head == null)
                return;
            const r = `${Array.from(this.domNode.childNodes).filter(a => a !== this.uiNode).map(a => a.textContent).join(`
`)}
`
              , s = et.formats(this.children.head.domNode);
            if (e || this.forceNext || this.cachedText !== r) {
                if (r.trim().length > 0 || this.cachedText == null) {
                    const a = this.children.reduce( (l, u) => l.concat(dc(u, !1)), new P)
                      , o = t(r, s);
                    a.diff(o).reduce( (l, u) => {
                        let {retain: h, attributes: f} = u;
                        return h ? (f && Object.keys(f).forEach(d => {
                            [et.blotName, Ut.blotName].includes(d) && this.formatAt(l, h, d, f[d])
                        }
                        ),
                        l + h) : l
                    }
                    , 0)
                }
                this.cachedText = r,
                this.forceNext = !1
            }
        }
        html(t, e) {
            const [n] = this.children.find(t);
            return `<pre data-language="${n ? et.formats(n.domNode) : "plain"}">
${Xr(this.code(t, e))}
</pre>`
        }
        optimize(t) {
            if (super.optimize(t),
            this.parent != null && this.children.head != null && this.uiNode != null) {
                const e = et.formats(this.children.head.domNode);
                e !== this.uiNode.value && (this.uiNode.value = e)
            }
        }
    }
    zi.allowedChildren = [et];
    et.requiredContainer = zi;
    et.allowedChildren = [Ut, pi, ut, dt];
    const gg = (i, t, e) => {
        if (typeof i.versionString == "string") {
            const n = i.versionString.split(".")[0];
            if (parseInt(n, 10) >= 11)
                return i.highlight(e, {
                    language: t
                }).value
        }
        return i.highlight(t, e).value
    }
    ;
    class Oc extends ft {
        static register() {
            x.register(Ut, !0),
            x.register(et, !0),
            x.register(zi, !0)
        }
        constructor(t, e) {
            if (super(t, e),
            this.options.hljs == null)
                throw new Error("Syntax module requires highlight.js. Please include the library on the page before Quill.");
            this.languages = this.options.languages.reduce( (n, r) => {
                let {key: s} = r;
                return n[s] = !0,
                n
            }
            , {}),
            this.highlightBlot = this.highlightBlot.bind(this),
            this.initListener(),
            this.initTimer()
        }
        initListener() {
            this.quill.on(x.events.SCROLL_BLOT_MOUNT, t => {
                if (!(t instanceof zi))
                    return;
                const e = this.quill.root.ownerDocument.createElement("select");
                this.options.languages.forEach(n => {
                    let {key: r, label: s} = n;
                    const a = e.ownerDocument.createElement("option");
                    a.textContent = s,
                    a.setAttribute("value", r),
                    e.appendChild(a)
                }
                ),
                e.addEventListener("change", () => {
                    t.format(et.blotName, e.value),
                    this.quill.root.focus(),
                    this.highlight(t, !0)
                }
                ),
                t.uiNode == null && (t.attachUI(e),
                t.children.head && (e.value = et.formats(t.children.head.domNode)))
            }
            )
        }
        initTimer() {
            let t = null;
            this.quill.on(x.events.SCROLL_OPTIMIZE, () => {
                t && clearTimeout(t),
                t = setTimeout( () => {
                    this.highlight(),
                    t = null
                }
                , this.options.interval)
            }
            )
        }
        highlight() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : null
              , e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !1;
            if (this.quill.selection.composing)
                return;
            this.quill.update(x.sources.USER);
            const n = this.quill.getSelection();
            (t == null ? this.quill.scroll.descendants(zi) : [t]).forEach(s => {
                s.highlight(this.highlightBlot, e)
            }
            ),
            this.quill.update(x.sources.SILENT),
            n != null && this.quill.setSelection(n, x.sources.SILENT)
        }
        highlightBlot(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : "plain";
            if (e = this.languages[e] ? e : "plain",
            e === "plain")
                return Xr(t).split(`
`).reduce( (r, s, a) => (a !== 0 && r.insert(`
`, {
                    [Ne.blotName]: e
                }),
                r.insert(s)), new P);
            const n = this.quill.root.ownerDocument.createElement("div");
            return n.classList.add(Ne.className),
            n.innerHTML = gg(this.options.hljs, e, t),
            Za(this.quill.scroll, n, [ (r, s) => {
                const a = Hi.value(r);
                return a ? s.compose(new P().retain(s.length(), {
                    [Ut.blotName]: a
                })) : s
            }
            ], [ (r, s) => r.data.split(`
`).reduce( (a, o, l) => (l !== 0 && a.insert(`
`, {
                [Ne.blotName]: e
            }),
            a.insert(o)), s)], new WeakMap)
        }
    }
    Oc.DEFAULTS = {
        hljs: window.hljs,
        interval: 1e3,
        languages: [{
            key: "plain",
            label: "Plain"
        }, {
            key: "bash",
            label: "Bash"
        }, {
            key: "cpp",
            label: "C++"
        }, {
            key: "cs",
            label: "C#"
        }, {
            key: "css",
            label: "CSS"
        }, {
            key: "diff",
            label: "Diff"
        }, {
            key: "xml",
            label: "HTML/XML"
        }, {
            key: "java",
            label: "Java"
        }, {
            key: "javascript",
            label: "JavaScript"
        }, {
            key: "markdown",
            label: "Markdown"
        }, {
            key: "php",
            label: "PHP"
        }, {
            key: "python",
            label: "Python"
        }, {
            key: "ruby",
            label: "Ruby"
        }, {
            key: "sql",
            label: "SQL"
        }]
    };
    const Gi = class Gi extends we {
        static create(t) {
            const e = super.create();
            return t ? e.setAttribute("data-row", t) : e.setAttribute("data-row", Xa()),
            e
        }
        static formats(t) {
            if (t.hasAttribute("data-row"))
                return t.getAttribute("data-row")
        }
        cellOffset() {
            return this.parent ? this.parent.children.indexOf(this) : -1
        }
        format(t, e) {
            t === Gi.blotName && e ? this.domNode.setAttribute("data-row", e) : super.format(t, e)
        }
        row() {
            return this.parent
        }
        rowOffset() {
            return this.row() ? this.row().rowOffset() : -1
        }
        table() {
            return this.row() && this.row().table()
        }
    }
    ;
    k(Gi, "blotName", "table"),
    k(Gi, "tagName", "TD");
    let lt = Gi;
    class $t extends Pn {
        checkMerge() {
            if (super.checkMerge() && this.next.children.head != null) {
                const t = this.children.head.formats()
                  , e = this.children.tail.formats()
                  , n = this.next.children.head.formats()
                  , r = this.next.children.tail.formats();
                return t.table === e.table && t.table === n.table && t.table === r.table
            }
            return !1
        }
        optimize(t) {
            super.optimize(t),
            this.children.forEach(e => {
                if (e.next == null)
                    return;
                const n = e.formats()
                  , r = e.next.formats();
                if (n.table !== r.table) {
                    const s = this.splitAfter(e);
                    s && s.optimize(),
                    this.prev && this.prev.optimize()
                }
            }
            )
        }
        rowOffset() {
            return this.parent ? this.parent.children.indexOf(this) : -1
        }
        table() {
            return this.parent && this.parent.parent
        }
    }
    k($t, "blotName", "table-row"),
    k($t, "tagName", "TR");
    class xt extends Pn {
    }
    k(xt, "blotName", "table-body"),
    k(xt, "tagName", "TBODY");
    class gi extends Pn {
        balanceCells() {
            const t = this.descendants($t)
              , e = t.reduce( (n, r) => Math.max(r.children.length, n), 0);
            t.forEach(n => {
                new Array(e - n.children.length).fill(0).forEach( () => {
                    let r;
                    n.children.head != null && (r = lt.formats(n.children.head.domNode));
                    const s = this.scroll.create(lt.blotName, r);
                    n.appendChild(s),
                    s.optimize()
                }
                )
            }
            )
        }
        cells(t) {
            return this.rows().map(e => e.children.at(t))
        }
        deleteColumn(t) {
            const [e] = this.descendant(xt);
            e == null || e.children.head == null || e.children.forEach(n => {
                const r = n.children.at(t);
                r != null && r.remove()
            }
            )
        }
        insertColumn(t) {
            const [e] = this.descendant(xt);
            e == null || e.children.head == null || e.children.forEach(n => {
                const r = n.children.at(t)
                  , s = lt.formats(n.children.head.domNode)
                  , a = this.scroll.create(lt.blotName, s);
                n.insertBefore(a, r)
            }
            )
        }
        insertRow(t) {
            const [e] = this.descendant(xt);
            if (e == null || e.children.head == null)
                return;
            const n = Xa()
              , r = this.scroll.create($t.blotName);
            e.children.head.children.forEach( () => {
                const a = this.scroll.create(lt.blotName, n);
                r.appendChild(a)
            }
            );
            const s = e.children.at(t);
            e.insertBefore(r, s)
        }
        rows() {
            const t = this.children.head;
            return t == null ? [] : t.children.map(e => e)
        }
    }
    k(gi, "blotName", "table-container"),
    k(gi, "tagName", "TABLE");
    gi.allowedChildren = [xt];
    xt.requiredContainer = gi;
    xt.allowedChildren = [$t];
    $t.requiredContainer = xt;
    $t.allowedChildren = [lt];
    lt.requiredContainer = $t;
    function Xa() {
        return `row-${Math.random().toString(36).slice(2, 6)}`
    }
    class vg extends ft {
        static register() {
            x.register(lt),
            x.register($t),
            x.register(xt),
            x.register(gi)
        }
        constructor() {
            super(...arguments),
            this.listenBalanceCells()
        }
        balanceTables() {
            this.quill.scroll.descendants(gi).forEach(t => {
                t.balanceCells()
            }
            )
        }
        deleteColumn() {
            const [t,,e] = this.getTable();
            e != null && (t.deleteColumn(e.cellOffset()),
            this.quill.update(x.sources.USER))
        }
        deleteRow() {
            const [,t] = this.getTable();
            t != null && (t.remove(),
            this.quill.update(x.sources.USER))
        }
        deleteTable() {
            const [t] = this.getTable();
            if (t == null)
                return;
            const e = t.offset();
            t.remove(),
            this.quill.update(x.sources.USER),
            this.quill.setSelection(e, x.sources.SILENT)
        }
        getTable() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : this.quill.getSelection();
            if (t == null)
                return [null, null, null, -1];
            const [e,n] = this.quill.getLine(t.index);
            if (e == null || e.statics.blotName !== lt.blotName)
                return [null, null, null, -1];
            const r = e.parent;
            return [r.parent.parent, r, e, n]
        }
        insertColumn(t) {
            const e = this.quill.getSelection();
            if (!e)
                return;
            const [n,r,s] = this.getTable(e);
            if (s == null)
                return;
            const a = s.cellOffset();
            n.insertColumn(a + t),
            this.quill.update(x.sources.USER);
            let o = r.rowOffset();
            t === 0 && (o += 1),
            this.quill.setSelection(e.index + o, e.length, x.sources.SILENT)
        }
        insertColumnLeft() {
            this.insertColumn(0)
        }
        insertColumnRight() {
            this.insertColumn(1)
        }
        insertRow(t) {
            const e = this.quill.getSelection();
            if (!e)
                return;
            const [n,r,s] = this.getTable(e);
            if (s == null)
                return;
            const a = r.rowOffset();
            n.insertRow(a + t),
            this.quill.update(x.sources.USER),
            t > 0 ? this.quill.setSelection(e, x.sources.SILENT) : this.quill.setSelection(e.index + r.children.length, e.length, x.sources.SILENT)
        }
        insertRowAbove() {
            this.insertRow(0)
        }
        insertRowBelow() {
            this.insertRow(1)
        }
        insertTable(t, e) {
            const n = this.quill.getSelection();
            if (n == null)
                return;
            const r = new Array(t).fill(0).reduce(s => {
                const a = new Array(e).fill(`
`).join("");
                return s.insert(a, {
                    table: Xa()
                })
            }
            , new P().retain(n.index));
            this.quill.updateContents(r, x.sources.USER),
            this.quill.setSelection(n.index, x.sources.SILENT),
            this.balanceTables()
        }
        listenBalanceCells() {
            this.quill.on(x.events.SCROLL_OPTIMIZE, t => {
                t.some(e => ["TD", "TR", "TBODY", "TABLE"].includes(e.target.tagName) ? (this.quill.once(x.events.TEXT_CHANGE, (n, r, s) => {
                    s === x.sources.USER && this.balanceTables()
                }
                ),
                !0) : !1)
            }
            )
        }
    }
    const Jo = Wt("quill:toolbar");
    class Qa extends ft {
        constructor(t, e) {
            var n, r;
            if (super(t, e),
            Array.isArray(this.options.container)) {
                const s = document.createElement("div");
                s.setAttribute("role", "toolbar"),
                bg(s, this.options.container),
                (r = (n = t.container) == null ? void 0 : n.parentNode) == null || r.insertBefore(s, t.container),
                this.container = s
            } else
                typeof this.options.container == "string" ? this.container = document.querySelector(this.options.container) : this.container = this.options.container;
            if (!(this.container instanceof HTMLElement)) {
                Jo.error("Container required for toolbar", this.options);
                return
            }
            this.container.classList.add("ql-toolbar"),
            this.controls = [],
            this.handlers = {},
            this.options.handlers && Object.keys(this.options.handlers).forEach(s => {
                var o;
                const a = (o = this.options.handlers) == null ? void 0 : o[s];
                a && this.addHandler(s, a)
            }
            ),
            Array.from(this.container.querySelectorAll("button, select")).forEach(s => {
                this.attach(s)
            }
            ),
            this.quill.on(x.events.EDITOR_CHANGE, () => {
                const [s] = this.quill.selection.getRange();
                this.update(s)
            }
            )
        }
        addHandler(t, e) {
            this.handlers[t] = e
        }
        attach(t) {
            let e = Array.from(t.classList).find(r => r.indexOf("ql-") === 0);
            if (!e)
                return;
            if (e = e.slice(3),
            t.tagName === "BUTTON" && t.setAttribute("type", "button"),
            this.handlers[e] == null && this.quill.scroll.query(e) == null) {
                Jo.warn("ignoring attaching to nonexistent format", e, t);
                return
            }
            const n = t.tagName === "SELECT" ? "change" : "click";
            t.addEventListener(n, r => {
                let s;
                if (t.tagName === "SELECT") {
                    if (t.selectedIndex < 0)
                        return;
                    const o = t.options[t.selectedIndex];
                    o.hasAttribute("selected") ? s = !1 : s = o.value || !1
                } else
                    t.classList.contains("ql-active") ? s = !1 : s = t.value || !t.hasAttribute("value"),
                    r.preventDefault();
                this.quill.focus();
                const [a] = this.quill.selection.getRange();
                if (this.handlers[e] != null)
                    this.handlers[e].call(this, s);
                else if (this.quill.scroll.query(e).prototype instanceof Ge) {
                    if (s = prompt(`Enter ${e}`),
                    !s)
                        return;
                    this.quill.updateContents(new P().retain(a.index).delete(a.length).insert({
                        [e]: s
                    }), x.sources.USER)
                } else
                    this.quill.format(e, s, x.sources.USER);
                this.update(a)
            }
            ),
            this.controls.push([e, t])
        }
        update(t) {
            const e = t == null ? {} : this.quill.getFormat(t);
            this.controls.forEach(n => {
                const [r,s] = n;
                if (s.tagName === "SELECT") {
                    let a = null;
                    if (t == null)
                        a = null;
                    else if (e[r] == null)
                        a = s.querySelector("option[selected]");
                    else if (!Array.isArray(e[r])) {
                        let o = e[r];
                        typeof o == "string" && (o = o.replace(/"/g, '\\"')),
                        a = s.querySelector(`option[value="${o}"]`)
                    }
                    a == null ? (s.value = "",
                    s.selectedIndex = -1) : a.selected = !0
                } else if (t == null)
                    s.classList.remove("ql-active"),
                    s.setAttribute("aria-pressed", "false");
                else if (s.hasAttribute("value")) {
                    const a = e[r]
                      , o = a === s.getAttribute("value") || a != null && a.toString() === s.getAttribute("value") || a == null && !s.getAttribute("value");
                    s.classList.toggle("ql-active", o),
                    s.setAttribute("aria-pressed", o.toString())
                } else {
                    const a = e[r] != null;
                    s.classList.toggle("ql-active", a),
                    s.setAttribute("aria-pressed", a.toString())
                }
            }
            )
        }
    }
    Qa.DEFAULTS = {};
    function el(i, t, e) {
        const n = document.createElement("button");
        n.setAttribute("type", "button"),
        n.classList.add(`ql-${t}`),
        n.setAttribute("aria-pressed", "false"),
        e != null ? (n.value = e,
        n.setAttribute("aria-label", `${t}: ${e}`)) : n.setAttribute("aria-label", t),
        i.appendChild(n)
    }
    function bg(i, t) {
        Array.isArray(t[0]) || (t = [t]),
        t.forEach(e => {
            const n = document.createElement("span");
            n.classList.add("ql-formats"),
            e.forEach(r => {
                if (typeof r == "string")
                    el(n, r);
                else {
                    const s = Object.keys(r)[0]
                      , a = r[s];
                    Array.isArray(a) ? yg(n, s, a) : el(n, s, a)
                }
            }
            ),
            i.appendChild(n)
        }
        )
    }
    function yg(i, t, e) {
        const n = document.createElement("select");
        n.classList.add(`ql-${t}`),
        e.forEach(r => {
            const s = document.createElement("option");
            r !== !1 ? s.setAttribute("value", String(r)) : s.setAttribute("selected", "selected"),
            n.appendChild(s)
        }
        ),
        i.appendChild(n)
    }
    Qa.DEFAULTS = {
        container: null,
        handlers: {
            clean() {
                const i = this.quill.getSelection();
                if (i != null)
                    if (i.length === 0) {
                        const t = this.quill.getFormat();
                        Object.keys(t).forEach(e => {
                            this.quill.scroll.query(e, B.INLINE) != null && this.quill.format(e, !1, x.sources.USER)
                        }
                        )
                    } else
                        this.quill.removeFormat(i.index, i.length, x.sources.USER)
            },
            direction(i) {
                const {align: t} = this.quill.getFormat();
                i === "rtl" && t == null ? this.quill.format("align", "right", x.sources.USER) : !i && t === "right" && this.quill.format("align", !1, x.sources.USER),
                this.quill.format("direction", i, x.sources.USER)
            },
            indent(i) {
                const t = this.quill.getSelection()
                  , e = this.quill.getFormat(t)
                  , n = parseInt(e.indent || 0, 10);
                if (i === "+1" || i === "-1") {
                    let r = i === "+1" ? 1 : -1;
                    e.direction === "rtl" && (r *= -1),
                    this.quill.format("indent", n + r, x.sources.USER)
                }
            },
            link(i) {
                i === !0 && (i = prompt("Enter link URL:")),
                this.quill.format("link", i, x.sources.USER)
            },
            list(i) {
                const t = this.quill.getSelection()
                  , e = this.quill.getFormat(t);
                i === "check" ? e.list === "checked" || e.list === "unchecked" ? this.quill.format("list", !1, x.sources.USER) : this.quill.format("list", "unchecked", x.sources.USER) : this.quill.format("list", i, x.sources.USER)
            }
        }
    };
    const Eg = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"/><line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"/><line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"/></svg>'
      , wg = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"/><line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"/><line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"/></svg>'
      , _g = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"/><line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"/><line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"/></svg>'
      , Cg = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"/><line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"/><line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"/></svg>'
      , Ag = '<svg viewbox="0 0 18 18"><g class="ql-fill ql-color-label"><polygon points="6 6.868 6 6 5 6 5 7 5.942 7 6 6.868"/><rect height="1" width="1" x="4" y="4"/><polygon points="6.817 5 6 5 6 6 6.38 6 6.817 5"/><rect height="1" width="1" x="2" y="6"/><rect height="1" width="1" x="3" y="5"/><rect height="1" width="1" x="4" y="7"/><polygon points="4 11.439 4 11 3 11 3 12 3.755 12 4 11.439"/><rect height="1" width="1" x="2" y="12"/><rect height="1" width="1" x="2" y="9"/><rect height="1" width="1" x="2" y="15"/><polygon points="4.63 10 4 10 4 11 4.192 11 4.63 10"/><rect height="1" width="1" x="3" y="8"/><path d="M10.832,4.2L11,4.582V4H10.708A1.948,1.948,0,0,1,10.832,4.2Z"/><path d="M7,4.582L7.168,4.2A1.929,1.929,0,0,1,7.292,4H7V4.582Z"/><path d="M8,13H7.683l-0.351.8a1.933,1.933,0,0,1-.124.2H8V13Z"/><rect height="1" width="1" x="12" y="2"/><rect height="1" width="1" x="11" y="3"/><path d="M9,3H8V3.282A1.985,1.985,0,0,1,9,3Z"/><rect height="1" width="1" x="2" y="3"/><rect height="1" width="1" x="6" y="2"/><rect height="1" width="1" x="3" y="2"/><rect height="1" width="1" x="5" y="3"/><rect height="1" width="1" x="9" y="2"/><rect height="1" width="1" x="15" y="14"/><polygon points="13.447 10.174 13.469 10.225 13.472 10.232 13.808 11 14 11 14 10 13.37 10 13.447 10.174"/><rect height="1" width="1" x="13" y="7"/><rect height="1" width="1" x="15" y="5"/><rect height="1" width="1" x="14" y="6"/><rect height="1" width="1" x="15" y="8"/><rect height="1" width="1" x="14" y="9"/><path d="M3.775,14H3v1H4V14.314A1.97,1.97,0,0,1,3.775,14Z"/><rect height="1" width="1" x="14" y="3"/><polygon points="12 6.868 12 6 11.62 6 12 6.868"/><rect height="1" width="1" x="15" y="2"/><rect height="1" width="1" x="12" y="5"/><rect height="1" width="1" x="13" y="4"/><polygon points="12.933 9 13 9 13 8 12.495 8 12.933 9"/><rect height="1" width="1" x="9" y="14"/><rect height="1" width="1" x="8" y="15"/><path d="M6,14.926V15H7V14.316A1.993,1.993,0,0,1,6,14.926Z"/><rect height="1" width="1" x="5" y="15"/><path d="M10.668,13.8L10.317,13H10v1h0.792A1.947,1.947,0,0,1,10.668,13.8Z"/><rect height="1" width="1" x="11" y="15"/><path d="M14.332,12.2a1.99,1.99,0,0,1,.166.8H15V12H14.245Z"/><rect height="1" width="1" x="14" y="15"/><rect height="1" width="1" x="15" y="11"/></g><polyline class="ql-stroke" points="5.5 13 9 5 12.5 13"/><line class="ql-stroke" x1="11.63" x2="6.38" y1="11" y2="11"/></svg>'
      , Sg = '<svg viewbox="0 0 18 18"><rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"/><rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"/><path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"/><path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"/></svg>'
      , Tg = '<svg viewbox="0 0 18 18"><path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"/><path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"/></svg>'
      , xg = '<svg class="" viewbox="0 0 18 18"><line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"/><line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"/><line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"/><line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"/><rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"/></svg>'
      , tl = '<svg viewbox="0 0 18 18"><polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"/><polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"/><line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"/></svg>'
      , Ng = '<svg viewbox="0 0 18 18"><line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15" y2="15"/><polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"/><line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"/></svg>'
      , Ig = '<svg viewbox="0 0 18 18"><polygon class="ql-stroke ql-fill" points="3 11 5 9 3 7 3 11"/><line class="ql-stroke ql-fill" x1="15" x2="11" y1="4" y2="4"/><path class="ql-fill" d="M11,3a3,3,0,0,0,0,6h1V3H11Z"/><rect class="ql-fill" height="11" width="1" x="11" y="4"/><rect class="ql-fill" height="11" width="1" x="13" y="4"/></svg>'
      , Lg = '<svg viewbox="0 0 18 18"><polygon class="ql-stroke ql-fill" points="15 12 13 10 15 8 15 12"/><line class="ql-stroke ql-fill" x1="9" x2="5" y1="4" y2="4"/><path class="ql-fill" d="M5,3A3,3,0,0,0,5,9H6V3H5Z"/><rect class="ql-fill" height="11" width="1" x="5" y="4"/><rect class="ql-fill" height="11" width="1" x="7" y="4"/></svg>'
      , Og = '<svg viewbox="0 0 18 18"><path class="ql-fill" d="M11.759,2.482a2.561,2.561,0,0,0-3.53.607A7.656,7.656,0,0,0,6.8,6.2C6.109,9.188,5.275,14.677,4.15,14.927a1.545,1.545,0,0,0-1.3-.933A0.922,0.922,0,0,0,2,15.036S1.954,16,4.119,16s3.091-2.691,3.7-5.553c0.177-.826.36-1.726,0.554-2.6L8.775,6.2c0.381-1.421.807-2.521,1.306-2.676a1.014,1.014,0,0,0,1.02.56A0.966,0.966,0,0,0,11.759,2.482Z"/><rect class="ql-fill" height="1.6" rx="0.8" ry="0.8" width="5" x="5.15" y="6.2"/><path class="ql-fill" d="M13.663,12.027a1.662,1.662,0,0,1,.266-0.276q0.193,0.069.456,0.138a2.1,2.1,0,0,0,.535.069,1.075,1.075,0,0,0,.767-0.3,1.044,1.044,0,0,0,.314-0.8,0.84,0.84,0,0,0-.238-0.619,0.8,0.8,0,0,0-.594-0.239,1.154,1.154,0,0,0-.781.3,4.607,4.607,0,0,0-.781,1q-0.091.15-.218,0.346l-0.246.38c-0.068-.288-0.137-0.582-0.212-0.885-0.459-1.847-2.494-.984-2.941-0.8-0.482.2-.353,0.647-0.094,0.529a0.869,0.869,0,0,1,1.281.585c0.217,0.751.377,1.436,0.527,2.038a5.688,5.688,0,0,1-.362.467,2.69,2.69,0,0,1-.264.271q-0.221-.08-0.471-0.147a2.029,2.029,0,0,0-.522-0.066,1.079,1.079,0,0,0-.768.3A1.058,1.058,0,0,0,9,15.131a0.82,0.82,0,0,0,.832.852,1.134,1.134,0,0,0,.787-0.3,5.11,5.11,0,0,0,.776-0.993q0.141-.219.215-0.34c0.046-.076.122-0.194,0.223-0.346a2.786,2.786,0,0,0,.918,1.726,2.582,2.582,0,0,0,2.376-.185c0.317-.181.212-0.565,0-0.494A0.807,0.807,0,0,1,14.176,15a5.159,5.159,0,0,1-.913-2.446l0,0Q13.487,12.24,13.663,12.027Z"/></svg>'
      , Dg = '<svg viewBox="0 0 18 18"><path class="ql-fill" d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm6.06787,9.209H14.98975V7.59863a.54085.54085,0,0,0-.605-.60547h-.62744a1.01119,1.01119,0,0,0-.748.29688L11.645,8.56641a.5435.5435,0,0,0-.022.8584l.28613.30762a.53861.53861,0,0,0,.84717.0332l.09912-.08789a1.2137,1.2137,0,0,0,.2417-.35254h.02246s-.01123.30859-.01123.60547V13.209H12.041a.54085.54085,0,0,0-.605.60547v.43945a.54085.54085,0,0,0,.605.60547h4.02686a.54085.54085,0,0,0,.605-.60547v-.43945A.54085.54085,0,0,0,16.06787,13.209Z"/></svg>'
      , Mg = '<svg viewBox="0 0 18 18"><path class="ql-fill" d="M16.73975,13.81445v.43945a.54085.54085,0,0,1-.605.60547H11.855a.58392.58392,0,0,1-.64893-.60547V14.0127c0-2.90527,3.39941-3.42187,3.39941-4.55469a.77675.77675,0,0,0-.84717-.78125,1.17684,1.17684,0,0,0-.83594.38477c-.2749.26367-.561.374-.85791.13184l-.4292-.34082c-.30811-.24219-.38525-.51758-.1543-.81445a2.97155,2.97155,0,0,1,2.45361-1.17676,2.45393,2.45393,0,0,1,2.68408,2.40918c0,2.45312-3.1792,2.92676-3.27832,3.93848h2.79443A.54085.54085,0,0,1,16.73975,13.81445ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z"/></svg>'
      , kg = '<svg viewBox="0 0 18 18"><path class="ql-fill" d="M16.65186,12.30664a2.6742,2.6742,0,0,1-2.915,2.68457,3.96592,3.96592,0,0,1-2.25537-.6709.56007.56007,0,0,1-.13232-.83594L11.64648,13c.209-.34082.48389-.36328.82471-.1543a2.32654,2.32654,0,0,0,1.12256.33008c.71484,0,1.12207-.35156,1.12207-.78125,0-.61523-.61621-.86816-1.46338-.86816H13.2085a.65159.65159,0,0,1-.68213-.41895l-.05518-.10937a.67114.67114,0,0,1,.14307-.78125l.71533-.86914a8.55289,8.55289,0,0,1,.68213-.7373V8.58887a3.93913,3.93913,0,0,1-.748.05469H11.9873a.54085.54085,0,0,1-.605-.60547V7.59863a.54085.54085,0,0,1,.605-.60547h3.75146a.53773.53773,0,0,1,.60547.59375v.17676a1.03723,1.03723,0,0,1-.27539.748L14.74854,10.0293A2.31132,2.31132,0,0,1,16.65186,12.30664ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z"/></svg>'
      , qg = '<svg viewBox="0 0 18 18"><path class="ql-fill" d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm7.05371,7.96582v.38477c0,.39648-.165.60547-.46191.60547h-.47314v1.29785a.54085.54085,0,0,1-.605.60547h-.69336a.54085.54085,0,0,1-.605-.60547V12.95605H11.333a.5412.5412,0,0,1-.60547-.60547v-.15332a1.199,1.199,0,0,1,.22021-.748l2.56348-4.05957a.7819.7819,0,0,1,.72607-.39648h1.27637a.54085.54085,0,0,1,.605.60547v3.7627h.33008A.54055.54055,0,0,1,17.05371,11.96582ZM14.28125,8.7207h-.022a4.18969,4.18969,0,0,1-.38525.81348l-1.188,1.80469v.02246h1.5293V9.60059A7.04058,7.04058,0,0,1,14.28125,8.7207Z"/></svg>'
      , Rg = '<svg viewBox="0 0 18 18"><path class="ql-fill" d="M16.74023,12.18555a2.75131,2.75131,0,0,1-2.91553,2.80566,3.908,3.908,0,0,1-2.25537-.68164.54809.54809,0,0,1-.13184-.8252L11.73438,13c.209-.34082.48389-.36328.8252-.1543a2.23757,2.23757,0,0,0,1.1001.33008,1.01827,1.01827,0,0,0,1.1001-.96777c0-.61621-.53906-.97949-1.25439-.97949a2.15554,2.15554,0,0,0-.64893.09961,1.15209,1.15209,0,0,1-.814.01074l-.12109-.04395a.64116.64116,0,0,1-.45117-.71484l.231-3.00391a.56666.56666,0,0,1,.62744-.583H15.541a.54085.54085,0,0,1,.605.60547v.43945a.54085.54085,0,0,1-.605.60547H13.41748l-.04395.72559a1.29306,1.29306,0,0,1-.04395.30859h.022a2.39776,2.39776,0,0,1,.57227-.07715A2.53266,2.53266,0,0,1,16.74023,12.18555ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z"/></svg>'
      , Fg = '<svg viewBox="0 0 18 18"><path class="ql-fill" d="M14.51758,9.64453a1.85627,1.85627,0,0,0-1.24316.38477H13.252a1.73532,1.73532,0,0,1,1.72754-1.4082,2.66491,2.66491,0,0,1,.5498.06641c.35254.05469.57227.01074.70508-.40723l.16406-.5166a.53393.53393,0,0,0-.373-.75977,4.83723,4.83723,0,0,0-1.17773-.14258c-2.43164,0-3.7627,2.17773-3.7627,4.43359,0,2.47559,1.60645,3.69629,3.19043,3.69629A2.70585,2.70585,0,0,0,16.96,12.19727,2.43861,2.43861,0,0,0,14.51758,9.64453Zm-.23047,3.58691c-.67187,0-1.22168-.81445-1.22168-1.45215,0-.47363.30762-.583.72559-.583.96875,0,1.27734.59375,1.27734,1.12207A.82182.82182,0,0,1,14.28711,13.23145ZM10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Z"/></svg>'
      , Pg = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"/><line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"/><line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"/></svg>'
      , Bg = '<svg viewbox="0 0 18 18"><rect class="ql-stroke" height="10" width="12" x="3" y="4"/><circle class="ql-fill" cx="6" cy="7" r="1"/><polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"/></svg>'
      , jg = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="14" y2="14"/><line class="ql-stroke" x1="3" x2="15" y1="4" y2="4"/><line class="ql-stroke" x1="9" x2="15" y1="9" y2="9"/><polyline class="ql-fill ql-stroke" points="3 7 3 11 5 9 3 7"/></svg>'
      , Hg = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="14" y2="14"/><line class="ql-stroke" x1="3" x2="15" y1="4" y2="4"/><line class="ql-stroke" x1="9" x2="15" y1="9" y2="9"/><polyline class="ql-stroke" points="5 7 5 11 3 9 5 7"/></svg>'
      , Ug = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"/><path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"/><path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"/></svg>'
      , $g = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"/><line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"/><line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"/><line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"/><line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"/><line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"/></svg>'
      , zg = '<svg class="" viewbox="0 0 18 18"><line class="ql-stroke" x1="9" x2="15" y1="4" y2="4"/><polyline class="ql-stroke" points="3 4 4 5 6 3"/><line class="ql-stroke" x1="9" x2="15" y1="14" y2="14"/><polyline class="ql-stroke" points="3 14 4 15 6 13"/><line class="ql-stroke" x1="9" x2="15" y1="9" y2="9"/><polyline class="ql-stroke" points="3 9 4 10 6 8"/></svg>'
      , Kg = '<svg viewbox="0 0 18 18"><line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"/><line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"/><line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"/><line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"/><path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"/><path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"/><path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"/></svg>'
      , Vg = '<svg viewbox="0 0 18 18"><path class="ql-fill" d="M15.5,15H13.861a3.858,3.858,0,0,0,1.914-2.975,1.8,1.8,0,0,0-1.6-1.751A1.921,1.921,0,0,0,12.021,11.7a0.50013,0.50013,0,1,0,.957.291h0a0.914,0.914,0,0,1,1.053-.725,0.81,0.81,0,0,1,.744.762c0,1.076-1.16971,1.86982-1.93971,2.43082A1.45639,1.45639,0,0,0,12,15.5a0.5,0.5,0,0,0,.5.5h3A0.5,0.5,0,0,0,15.5,15Z"/><path class="ql-fill" d="M9.65,5.241a1,1,0,0,0-1.409.108L6,7.964,3.759,5.349A1,1,0,0,0,2.192,6.59178Q2.21541,6.6213,2.241,6.649L4.684,9.5,2.241,12.35A1,1,0,0,0,3.71,13.70722q0.02557-.02768.049-0.05722L6,11.036,8.241,13.65a1,1,0,1,0,1.567-1.24277Q9.78459,12.3777,9.759,12.35L7.316,9.5,9.759,6.651A1,1,0,0,0,9.65,5.241Z"/></svg>'
      , Wg = '<svg viewbox="0 0 18 18"><path class="ql-fill" d="M15.5,7H13.861a4.015,4.015,0,0,0,1.914-2.975,1.8,1.8,0,0,0-1.6-1.751A1.922,1.922,0,0,0,12.021,3.7a0.5,0.5,0,1,0,.957.291,0.917,0.917,0,0,1,1.053-.725,0.81,0.81,0,0,1,.744.762c0,1.077-1.164,1.925-1.934,2.486A1.423,1.423,0,0,0,12,7.5a0.5,0.5,0,0,0,.5.5h3A0.5,0.5,0,0,0,15.5,7Z"/><path class="ql-fill" d="M9.651,5.241a1,1,0,0,0-1.41.108L6,7.964,3.759,5.349a1,1,0,1,0-1.519,1.3L4.683,9.5,2.241,12.35a1,1,0,1,0,1.519,1.3L6,11.036,8.241,13.65a1,1,0,0,0,1.519-1.3L7.317,9.5,9.759,6.651A1,1,0,0,0,9.651,5.241Z"/></svg>'
      , Gg = '<svg viewbox="0 0 18 18"><line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"/><path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"/><path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"/></svg>'
      , Yg = '<svg viewbox="0 0 18 18"><rect class="ql-stroke" height="12" width="12" x="3" y="3"/><rect class="ql-fill" height="2" width="3" x="5" y="5"/><rect class="ql-fill" height="2" width="4" x="9" y="5"/><g class="ql-fill ql-transparent"><rect height="2" width="3" x="5" y="8"/><rect height="2" width="4" x="9" y="8"/><rect height="2" width="3" x="5" y="11"/><rect height="2" width="4" x="9" y="11"/></g></svg>'
      , Zg = '<svg viewbox="0 0 18 18"><path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"/><rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"/></svg>'
      , Xg = '<svg viewbox="0 0 18 18"><rect class="ql-stroke" height="12" width="12" x="3" y="3"/><rect class="ql-fill" height="12" width="1" x="5" y="3"/><rect class="ql-fill" height="12" width="1" x="12" y="3"/><rect class="ql-fill" height="2" width="8" x="5" y="8"/><rect class="ql-fill" height="1" width="3" x="3" y="5"/><rect class="ql-fill" height="1" width="3" x="3" y="7"/><rect class="ql-fill" height="1" width="3" x="3" y="10"/><rect class="ql-fill" height="1" width="3" x="3" y="12"/><rect class="ql-fill" height="1" width="3" x="12" y="5"/><rect class="ql-fill" height="1" width="3" x="12" y="7"/><rect class="ql-fill" height="1" width="3" x="12" y="10"/><rect class="ql-fill" height="1" width="3" x="12" y="12"/></svg>'
      , nr = {
        align: {
            "": Eg,
            center: wg,
            right: _g,
            justify: Cg
        },
        background: Ag,
        blockquote: Sg,
        bold: Tg,
        clean: xg,
        code: tl,
        "code-block": tl,
        color: Ng,
        direction: {
            "": Ig,
            rtl: Lg
        },
        formula: Og,
        header: {
            1: Dg,
            2: Mg,
            3: kg,
            4: qg,
            5: Rg,
            6: Fg
        },
        italic: Pg,
        image: Bg,
        indent: {
            "+1": jg,
            "-1": Hg
        },
        link: Ug,
        list: {
            bullet: $g,
            check: zg,
            ordered: Kg
        },
        script: {
            sub: Vg,
            super: Wg
        },
        strike: Gg,
        table: Yg,
        underline: Zg,
        video: Xg
    }
      , Qg = '<svg viewbox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"/><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"/></svg>';
    let nl = 0;
    function il(i, t) {
        i.setAttribute(t, `${i.getAttribute(t) !== "true"}`)
    }
    class Jr {
        constructor(t) {
            this.select = t,
            this.container = document.createElement("span"),
            this.buildPicker(),
            this.select.style.display = "none",
            this.select.parentNode.insertBefore(this.container, this.select),
            this.label.addEventListener("mousedown", () => {
                this.togglePicker()
            }
            ),
            this.label.addEventListener("keydown", e => {
                switch (e.key) {
                case "Enter":
                    this.togglePicker();
                    break;
                case "Escape":
                    this.escape(),
                    e.preventDefault();
                    break
                }
            }
            ),
            this.select.addEventListener("change", this.update.bind(this))
        }
        togglePicker() {
            this.container.classList.toggle("ql-expanded"),
            il(this.label, "aria-expanded"),
            il(this.options, "aria-hidden")
        }
        buildItem(t) {
            const e = document.createElement("span");
            e.tabIndex = "0",
            e.setAttribute("role", "button"),
            e.classList.add("ql-picker-item");
            const n = t.getAttribute("value");
            return n && e.setAttribute("data-value", n),
            t.textContent && e.setAttribute("data-label", t.textContent),
            e.addEventListener("click", () => {
                this.selectItem(e, !0)
            }
            ),
            e.addEventListener("keydown", r => {
                switch (r.key) {
                case "Enter":
                    this.selectItem(e, !0),
                    r.preventDefault();
                    break;
                case "Escape":
                    this.escape(),
                    r.preventDefault();
                    break
                }
            }
            ),
            e
        }
        buildLabel() {
            const t = document.createElement("span");
            return t.classList.add("ql-picker-label"),
            t.innerHTML = Qg,
            t.tabIndex = "0",
            t.setAttribute("role", "button"),
            t.setAttribute("aria-expanded", "false"),
            this.container.appendChild(t),
            t
        }
        buildOptions() {
            const t = document.createElement("span");
            t.classList.add("ql-picker-options"),
            t.setAttribute("aria-hidden", "true"),
            t.tabIndex = "-1",
            t.id = `ql-picker-options-${nl}`,
            nl += 1,
            this.label.setAttribute("aria-controls", t.id),
            this.options = t,
            Array.from(this.select.options).forEach(e => {
                const n = this.buildItem(e);
                t.appendChild(n),
                e.selected === !0 && this.selectItem(n)
            }
            ),
            this.container.appendChild(t)
        }
        buildPicker() {
            Array.from(this.select.attributes).forEach(t => {
                this.container.setAttribute(t.name, t.value)
            }
            ),
            this.container.classList.add("ql-picker"),
            this.label = this.buildLabel(),
            this.buildOptions()
        }
        escape() {
            this.close(),
            setTimeout( () => this.label.focus(), 1)
        }
        close() {
            this.container.classList.remove("ql-expanded"),
            this.label.setAttribute("aria-expanded", "false"),
            this.options.setAttribute("aria-hidden", "true")
        }
        selectItem(t) {
            let e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : !1;
            const n = this.container.querySelector(".ql-selected");
            t !== n && (n != null && n.classList.remove("ql-selected"),
            t != null && (t.classList.add("ql-selected"),
            this.select.selectedIndex = Array.from(t.parentNode.children).indexOf(t),
            t.hasAttribute("data-value") ? this.label.setAttribute("data-value", t.getAttribute("data-value")) : this.label.removeAttribute("data-value"),
            t.hasAttribute("data-label") ? this.label.setAttribute("data-label", t.getAttribute("data-label")) : this.label.removeAttribute("data-label"),
            e && (this.select.dispatchEvent(new Event("change")),
            this.close())))
        }
        update() {
            let t;
            if (this.select.selectedIndex > -1) {
                const n = this.container.querySelector(".ql-picker-options").children[this.select.selectedIndex];
                t = this.select.options[this.select.selectedIndex],
                this.selectItem(n)
            } else
                this.selectItem(null);
            const e = t != null && t !== this.select.querySelector("option[selected]");
            this.label.classList.toggle("ql-active", e)
        }
    }
    class Dc extends Jr {
        constructor(t, e) {
            super(t),
            this.label.innerHTML = e,
            this.container.classList.add("ql-color-picker"),
            Array.from(this.container.querySelectorAll(".ql-picker-item")).slice(0, 7).forEach(n => {
                n.classList.add("ql-primary")
            }
            )
        }
        buildItem(t) {
            const e = super.buildItem(t);
            return e.style.backgroundColor = t.getAttribute("value") || "",
            e
        }
        selectItem(t, e) {
            super.selectItem(t, e);
            const n = this.label.querySelector(".ql-color-label")
              , r = t && t.getAttribute("data-value") || "";
            n && (n.tagName === "line" ? n.style.stroke = r : n.style.fill = r)
        }
    }
    class Mc extends Jr {
        constructor(t, e) {
            super(t),
            this.container.classList.add("ql-icon-picker"),
            Array.from(this.container.querySelectorAll(".ql-picker-item")).forEach(n => {
                n.innerHTML = e[n.getAttribute("data-value") || ""]
            }
            ),
            this.defaultItem = this.container.querySelector(".ql-selected"),
            this.selectItem(this.defaultItem)
        }
        selectItem(t, e) {
            super.selectItem(t, e);
            const n = t || this.defaultItem;
            if (n != null) {
                if (this.label.innerHTML === n.innerHTML)
                    return;
                this.label.innerHTML = n.innerHTML
            }
        }
    }
    const Jg = i => {
        const {overflowY: t} = getComputedStyle(i, null);
        return t !== "visible" && t !== "clip"
    }
    ;
    class kc {
        constructor(t, e) {
            this.quill = t,
            this.boundsContainer = e || document.body,
            this.root = t.addContainer("ql-tooltip"),
            this.root.innerHTML = this.constructor.TEMPLATE,
            Jg(this.quill.root) && this.quill.root.addEventListener("scroll", () => {
                this.root.style.marginTop = `${-1 * this.quill.root.scrollTop}px`
            }
            ),
            this.hide()
        }
        hide() {
            this.root.classList.add("ql-hidden")
        }
        position(t) {
            const e = t.left + t.width / 2 - this.root.offsetWidth / 2
              , n = t.bottom + this.quill.root.scrollTop;
            this.root.style.left = `${e}px`,
            this.root.style.top = `${n}px`,
            this.root.classList.remove("ql-flip");
            const r = this.boundsContainer.getBoundingClientRect()
              , s = this.root.getBoundingClientRect();
            let a = 0;
            if (s.right > r.right && (a = r.right - s.right,
            this.root.style.left = `${e + a}px`),
            s.left < r.left && (a = r.left - s.left,
            this.root.style.left = `${e + a}px`),
            s.bottom > r.bottom) {
                const o = s.bottom - s.top
                  , l = t.bottom - t.top + o;
                this.root.style.top = `${n - l}px`,
                this.root.classList.add("ql-flip")
            }
            return a
        }
        show() {
            this.root.classList.remove("ql-editing"),
            this.root.classList.remove("ql-hidden")
        }
    }
    const ev = [!1, "center", "right", "justify"]
      , tv = ["#000000", "#e60000", "#ff9900", "#ffff00", "#008a00", "#0066cc", "#9933ff", "#ffffff", "#facccc", "#ffebcc", "#ffffcc", "#cce8cc", "#cce0f5", "#ebd6ff", "#bbbbbb", "#f06666", "#ffc266", "#ffff66", "#66b966", "#66a3e0", "#c285ff", "#888888", "#a10000", "#b26b00", "#b2b200", "#006100", "#0047b2", "#6b24b2", "#444444", "#5c0000", "#663d00", "#666600", "#003700", "#002966", "#3d1466"]
      , nv = [!1, "serif", "monospace"]
      , iv = ["1", "2", "3", !1]
      , rv = ["small", !1, "large", "huge"];
    class ur extends mi {
        constructor(t, e) {
            super(t, e);
            const n = r => {
                if (!document.body.contains(t.root)) {
                    document.body.removeEventListener("click", n);
                    return
                }
                this.tooltip != null && !this.tooltip.root.contains(r.target) && document.activeElement !== this.tooltip.textbox && !this.quill.hasFocus() && this.tooltip.hide(),
                this.pickers != null && this.pickers.forEach(s => {
                    s.container.contains(r.target) || s.close()
                }
                )
            }
            ;
            t.emitter.listenDOM("click", document.body, n)
        }
        addModule(t) {
            const e = super.addModule(t);
            return t === "toolbar" && this.extendToolbar(e),
            e
        }
        buildButtons(t, e) {
            Array.from(t).forEach(n => {
                (n.getAttribute("class") || "").split(/\s+/).forEach(s => {
                    if (s.startsWith("ql-") && (s = s.slice(3),
                    e[s] != null))
                        if (s === "direction")
                            n.innerHTML = e[s][""] + e[s].rtl;
                        else if (typeof e[s] == "string")
                            n.innerHTML = e[s];
                        else {
                            const a = n.value || "";
                            a != null && e[s][a] && (n.innerHTML = e[s][a])
                        }
                }
                )
            }
            )
        }
        buildPickers(t, e) {
            this.pickers = Array.from(t).map(r => {
                if (r.classList.contains("ql-align") && (r.querySelector("option") == null && Pi(r, ev),
                typeof e.align == "object"))
                    return new Mc(r,e.align);
                if (r.classList.contains("ql-background") || r.classList.contains("ql-color")) {
                    const s = r.classList.contains("ql-background") ? "background" : "color";
                    return r.querySelector("option") == null && Pi(r, tv, s === "background" ? "#ffffff" : "#000000"),
                    new Dc(r,e[s])
                }
                return r.querySelector("option") == null && (r.classList.contains("ql-font") ? Pi(r, nv) : r.classList.contains("ql-header") ? Pi(r, iv) : r.classList.contains("ql-size") && Pi(r, rv)),
                new Jr(r)
            }
            );
            const n = () => {
                this.pickers.forEach(r => {
                    r.update()
                }
                )
            }
            ;
            this.quill.on(R.events.EDITOR_CHANGE, n)
        }
    }
    ur.DEFAULTS = un({}, mi.DEFAULTS, {
        modules: {
            toolbar: {
                handlers: {
                    formula() {
                        this.quill.theme.tooltip.edit("formula")
                    },
                    image() {
                        let i = this.container.querySelector("input.ql-image[type=file]");
                        i == null && (i = document.createElement("input"),
                        i.setAttribute("type", "file"),
                        i.setAttribute("accept", this.quill.uploader.options.mimetypes.join(", ")),
                        i.classList.add("ql-image"),
                        i.addEventListener("change", () => {
                            const t = this.quill.getSelection(!0);
                            this.quill.uploader.upload(t, i.files),
                            i.value = ""
                        }
                        ),
                        this.container.appendChild(i)),
                        i.click()
                    },
                    video() {
                        this.quill.theme.tooltip.edit("video")
                    }
                }
            }
        }
    });
    class qc extends kc {
        constructor(t, e) {
            super(t, e),
            this.textbox = this.root.querySelector('input[type="text"]'),
            this.listen()
        }
        listen() {
            this.textbox.addEventListener("keydown", t => {
                t.key === "Enter" ? (this.save(),
                t.preventDefault()) : t.key === "Escape" && (this.cancel(),
                t.preventDefault())
            }
            )
        }
        cancel() {
            this.hide(),
            this.restoreFocus()
        }
        edit() {
            let t = arguments.length > 0 && arguments[0] !== void 0 ? arguments[0] : "link"
              , e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : null;
            if (this.root.classList.remove("ql-hidden"),
            this.root.classList.add("ql-editing"),
            this.textbox == null)
                return;
            e != null ? this.textbox.value = e : t !== this.root.getAttribute("data-mode") && (this.textbox.value = "");
            const n = this.quill.getBounds(this.quill.selection.savedRange);
            n != null && this.position(n),
            this.textbox.select(),
            this.textbox.setAttribute("placeholder", this.textbox.getAttribute(`data-${t}`) || ""),
            this.root.setAttribute("data-mode", t)
        }
        restoreFocus() {
            this.quill.focus({
                preventScroll: !0
            })
        }
        save() {
            let {value: t} = this.textbox;
            switch (this.root.getAttribute("data-mode")) {
            case "link":
                {
                    const {scrollTop: e} = this.quill.root;
                    this.linkRange ? (this.quill.formatText(this.linkRange, "link", t, R.sources.USER),
                    delete this.linkRange) : (this.restoreFocus(),
                    this.quill.format("link", t, R.sources.USER)),
                    this.quill.root.scrollTop = e;
                    break
                }
            case "video":
                t = sv(t);
            case "formula":
                {
                    if (!t)
                        break;
                    const e = this.quill.getSelection(!0);
                    if (e != null) {
                        const n = e.index + e.length;
                        this.quill.insertEmbed(n, this.root.getAttribute("data-mode"), t, R.sources.USER),
                        this.root.getAttribute("data-mode") === "formula" && this.quill.insertText(n + 1, " ", R.sources.USER),
                        this.quill.setSelection(n + 2, R.sources.USER)
                    }
                    break
                }
            }
            this.textbox.value = "",
            this.hide()
        }
    }
    function sv(i) {
        let t = i.match(/^(?:(https?):\/\/)?(?:(?:www|m)\.)?youtube\.com\/watch.*v=([a-zA-Z0-9_-]+)/) || i.match(/^(?:(https?):\/\/)?(?:(?:www|m)\.)?youtu\.be\/([a-zA-Z0-9_-]+)/);
        return t ? `${t[1] || "https"}://www.youtube.com/embed/${t[2]}?showinfo=0` : (t = i.match(/^(?:(https?):\/\/)?(?:www\.)?vimeo\.com\/(\d+)/)) ? `${t[1] || "https"}://player.vimeo.com/video/${t[2]}/` : i
    }
    function Pi(i, t) {
        let e = arguments.length > 2 && arguments[2] !== void 0 ? arguments[2] : !1;
        t.forEach(n => {
            const r = document.createElement("option");
            n === e ? r.setAttribute("selected", "selected") : r.setAttribute("value", String(n)),
            i.appendChild(r)
        }
        )
    }
    const av = [["bold", "italic", "link"], [{
        header: 1
    }, {
        header: 2
    }, "blockquote"]];
    class Rc extends qc {
        constructor(t, e) {
            super(t, e),
            this.quill.on(R.events.EDITOR_CHANGE, (n, r, s, a) => {
                if (n === R.events.SELECTION_CHANGE)
                    if (r != null && r.length > 0 && a === R.sources.USER) {
                        this.show(),
                        this.root.style.left = "0px",
                        this.root.style.width = "",
                        this.root.style.width = `${this.root.offsetWidth}px`;
                        const o = this.quill.getLines(r.index, r.length);
                        if (o.length === 1) {
                            const l = this.quill.getBounds(r);
                            l != null && this.position(l)
                        } else {
                            const l = o[o.length - 1]
                              , u = this.quill.getIndex(l)
                              , h = Math.min(l.length() - 1, r.index + r.length - u)
                              , f = this.quill.getBounds(new kn(u,h));
                            f != null && this.position(f)
                        }
                    } else
                        document.activeElement !== this.textbox && this.quill.hasFocus() && this.hide()
            }
            )
        }
        listen() {
            super.listen(),
            this.root.querySelector(".ql-close").addEventListener("click", () => {
                this.root.classList.remove("ql-editing")
            }
            ),
            this.quill.on(R.events.SCROLL_OPTIMIZE, () => {
                setTimeout( () => {
                    if (this.root.classList.contains("ql-hidden"))
                        return;
                    const t = this.quill.getSelection();
                    if (t != null) {
                        const e = this.quill.getBounds(t);
                        e != null && this.position(e)
                    }
                }
                , 1)
            }
            )
        }
        cancel() {
            this.show()
        }
        position(t) {
            const e = super.position(t)
              , n = this.root.querySelector(".ql-tooltip-arrow");
            return n.style.marginLeft = "",
            e !== 0 && (n.style.marginLeft = `${-1 * e - n.offsetWidth / 2}px`),
            e
        }
    }
    k(Rc, "TEMPLATE", ['<span class="ql-tooltip-arrow"></span>', '<div class="ql-tooltip-editor">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">', '<a class="ql-close"></a>', "</div>"].join(""));
    class Fc extends ur {
        constructor(t, e) {
            e.modules.toolbar != null && e.modules.toolbar.container == null && (e.modules.toolbar.container = av),
            super(t, e),
            this.quill.container.classList.add("ql-bubble")
        }
        extendToolbar(t) {
            this.tooltip = new Rc(this.quill,this.options.bounds),
            t.container != null && (this.tooltip.root.appendChild(t.container),
            this.buildButtons(t.container.querySelectorAll("button"), nr),
            this.buildPickers(t.container.querySelectorAll("select"), nr))
        }
    }
    Fc.DEFAULTS = un({}, ur.DEFAULTS, {
        modules: {
            toolbar: {
                handlers: {
                    link(i) {
                        i ? this.quill.theme.tooltip.edit() : this.quill.format("link", !1, x.sources.USER)
                    }
                }
            }
        }
    });
    const ov = [[{
        header: ["1", "2", "3", !1]
    }], ["bold", "italic", "underline", "link"], [{
        list: "ordered"
    }, {
        list: "bullet"
    }], ["clean"]];
    class Pc extends qc {
        constructor() {
            super(...arguments);
            k(this, "preview", this.root.querySelector("a.ql-preview"))
        }
        listen() {
            super.listen(),
            this.root.querySelector("a.ql-action").addEventListener("click", e => {
                this.root.classList.contains("ql-editing") ? this.save() : this.edit("link", this.preview.textContent),
                e.preventDefault()
            }
            ),
            this.root.querySelector("a.ql-remove").addEventListener("click", e => {
                if (this.linkRange != null) {
                    const n = this.linkRange;
                    this.restoreFocus(),
                    this.quill.formatText(n, "link", !1, R.sources.USER),
                    delete this.linkRange
                }
                e.preventDefault(),
                this.hide()
            }
            ),
            this.quill.on(R.events.SELECTION_CHANGE, (e, n, r) => {
                if (e != null) {
                    if (e.length === 0 && r === R.sources.USER) {
                        const [s,a] = this.quill.scroll.descendant(ln, e.index);
                        if (s != null) {
                            this.linkRange = new kn(e.index - a,s.length());
                            const o = ln.formats(s.domNode);
                            this.preview.textContent = o,
                            this.preview.setAttribute("href", o),
                            this.show();
                            const l = this.quill.getBounds(this.linkRange);
                            l != null && this.position(l);
                            return
                        }
                    } else
                        delete this.linkRange;
                    this.hide()
                }
            }
            )
        }
        show() {
            super.show(),
            this.root.removeAttribute("data-mode")
        }
    }
    k(Pc, "TEMPLATE", ['<a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">', '<a class="ql-action"></a>', '<a class="ql-remove"></a>'].join(""));
    class Bc extends ur {
        constructor(t, e) {
            e.modules.toolbar != null && e.modules.toolbar.container == null && (e.modules.toolbar.container = ov),
            super(t, e),
            this.quill.container.classList.add("ql-snow")
        }
        extendToolbar(t) {
            t.container != null && (t.container.classList.add("ql-snow"),
            this.buildButtons(t.container.querySelectorAll("button"), nr),
            this.buildPickers(t.container.querySelectorAll("select"), nr),
            this.tooltip = new Pc(this.quill,this.options.bounds),
            t.container.querySelector(".ql-link") && this.quill.keyboard.addBinding({
                key: "k",
                shortKey: !0
            }, (e, n) => {
                t.handlers.link.call(t, !n.format.link)
            }
            ))
        }
    }
    Bc.DEFAULTS = un({}, ur.DEFAULTS, {
        modules: {
            toolbar: {
                handlers: {
                    link(i) {
                        if (i) {
                            const t = this.quill.getSelection();
                            if (t == null || t.length === 0)
                                return;
                            let e = this.quill.getText(t);
                            /^\S+@\S+\.\S+$/.test(e) && e.indexOf("mailto:") !== 0 && (e = `mailto:${e}`);
                            const {tooltip: n} = this.quill.theme;
                            n.edit("link", e)
                        } else
                            this.quill.format("link", !1, x.sources.USER)
                    }
                }
            }
        }
    });
    x.register({
        "attributors/attribute/direction": bc,
        "attributors/class/align": mc,
        "attributors/class/background": Sm,
        "attributors/class/color": Am,
        "attributors/class/direction": yc,
        "attributors/class/font": _c,
        "attributors/class/size": Ac,
        "attributors/style/align": gc,
        "attributors/style/background": Va,
        "attributors/style/color": Ka,
        "attributors/style/direction": Ec,
        "attributors/style/font": Cc,
        "attributors/style/size": Sc
    }, !0);
    x.register({
        "formats/align": mc,
        "formats/direction": yc,
        "formats/indent": mg,
        "formats/background": Va,
        "formats/color": Ka,
        "formats/font": _c,
        "formats/size": Ac,
        "formats/blockquote": ha,
        "formats/code-block": Ne,
        "formats/header": da,
        "formats/list": cr,
        "formats/bold": tr,
        "formats/code": Wa,
        "formats/italic": fa,
        "formats/link": ln,
        "formats/script": pa,
        "formats/strike": ma,
        "formats/underline": ga,
        "formats/formula": Mr,
        "formats/image": va,
        "formats/video": kr,
        "modules/syntax": Oc,
        "modules/table": vg,
        "modules/toolbar": Qa,
        "themes/bubble": Fc,
        "themes/snow": Bc,
        "ui/icons": nr,
        "ui/picker": Jr,
        "ui/icon-picker": Mc,
        "ui/color-picker": Dc,
        "ui/tooltip": kc
    }, !0);
    const lv = x.import("blots/block");
    class vi extends lv {
        static create(t) {
            const e = super.create(t);
            if (t === !0)
                return e;
            const n = document.createElement("img");
            return n.setAttribute("src", t),
            e.appendChild(n),
            e
        }
        deleteAt(t, e) {
            super.deleteAt(t, e),
            this.cache = {}
        }
        static value(t) {
            const {src: e, custom: n} = t.dataset;
            return {
                src: e,
                custom: n
            }
        }
    }
    vi.blotName = "imageBlot";
    vi.className = "quill-image-uploading";
    vi.tagName = "span";
    x.register({
        "formats/imageBlot": vi
    });
    class jc {
        constructor(t, e) {
            this.quill = t,
            this.options = e,
            this.range = null,
            typeof this.options.upload != "function" && console.warn("[Missing config] upload function that returns a promise is required"),
            this.options.loadingClass && (vi.className = this.options.loadingClass),
            this.quill.getModule("toolbar").addHandler("image", this.selectLocalImage.bind(this)),
            this.handleDrop = this.handleDrop.bind(this),
            this.handlePaste = this.handlePaste.bind(this),
            this.quill.root.addEventListener("drop", this.handleDrop, !1),
            this.quill.root.addEventListener("paste", this.handlePaste, !1)
        }
        selectLocalImage() {
            this.range = this.quill.getSelection(),
            this.fileHolder = document.createElement("input"),
            this.fileHolder.setAttribute("type", "file"),
            this.fileHolder.setAttribute("accept", "image/*"),
            this.fileHolder.setAttribute("style", "visibility:hidden"),
            this.fileHolder.onchange = this.fileChanged.bind(this),
            document.body.appendChild(this.fileHolder),
            this.fileHolder.click(),
            window.requestAnimationFrame( () => {
                document.body.removeChild(this.fileHolder)
            }
            )
        }
        handleDrop(t) {
            if (t.stopPropagation(),
            t.preventDefault(),
            t.dataTransfer && t.dataTransfer.files && t.dataTransfer.files.length) {
                if (document.caretRangeFromPoint) {
                    const n = document.getSelection()
                      , r = document.caretRangeFromPoint(t.clientX, t.clientY);
                    n && r && n.setBaseAndExtent(r.startContainer, r.startOffset, r.startContainer, r.startOffset)
                } else {
                    const n = document.getSelection()
                      , r = document.caretPositionFromPoint(t.clientX, t.clientY);
                    n && r && n.setBaseAndExtent(r.offsetNode, r.offset, r.offsetNode, r.offset)
                }
                this.range = this.quill.getSelection();
                const e = t.dataTransfer.files[0];
                setTimeout( () => {
                    this.range = this.quill.getSelection(),
                    this.readAndUploadFile(e)
                }
                , 0)
            }
        }
        handlePaste(t) {
            const e = t.clipboardData || window.clipboardData;
            if (e && (e.items || e.files)) {
                const n = e.items || e.files
                  , r = /^image\/(jpe?g|gif|png|svg|webp)$/i;
                for (let s = 0; s < n.length; s++)
                    if (r.test(n[s].type)) {
                        const a = n[s].getAsFile ? n[s].getAsFile() : n[s];
                        a && (this.range = this.quill.getSelection(),
                        t.preventDefault(),
                        setTimeout( () => {
                            this.range = this.quill.getSelection(),
                            this.readAndUploadFile(a)
                        }
                        , 0))
                    }
            }
        }
        readAndUploadFile(t) {
            let e = !1;
            const n = new FileReader;
            n.addEventListener("load", () => {
                if (!e) {
                    const r = n.result;
                    this.insertBase64Image(r)
                }
            }
            , !1),
            t && n.readAsDataURL(t),
            this.options.upload(t).then(r => {
                this.insertToEditor(r)
            }
            , r => {
                e = !0,
                this.removeBase64Image(),
                console.warn(r)
            }
            )
        }
        fileChanged() {
            const t = this.fileHolder.files[0];
            this.readAndUploadFile(t)
        }
        insertBase64Image(t) {
            const {range: e} = this;
            this.quill.insertEmbed(e.index, vi.blotName, `${t}`, "user")
        }
        insertToEditor(t) {
            const {range: e} = this;
            this.quill.deleteText(e.index, 3, "user"),
            this.quill.insertEmbed(e.index, "image", `${t}`, "user"),
            e.index++,
            this.quill.setSelection(e, "user")
        }
        removeBase64Image() {
            const {range: t} = this;
            this.quill.deleteText(t.index, 3, "user")
        }
    }
    window.ImageUploader = jc;
    x.register({
        "modules/imageUploader": jc
    }, !0);
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
    var Hs = ["onChange", "onClose", "onDayCreate", "onDestroy", "onKeyDown", "onMonthChange", "onOpen", "onParseConfig", "onReady", "onValueUpdate", "onYearChange", "onPreCalendarPosition"]
      , ui = {
        _disable: [],
        allowInput: !1,
        allowInvalidPreload: !1,
        altFormat: "F j, Y",
        altInput: !1,
        altInputClass: "form-control input",
        animate: typeof window == "object" && window.navigator.userAgent.indexOf("MSIE") === -1,
        ariaDateFormat: "F j, Y",
        autoFillDefaultTime: !0,
        clickOpens: !0,
        closeOnSelect: !0,
        conjunction: ", ",
        dateFormat: "Y-m-d",
        defaultHour: 12,
        defaultMinute: 0,
        defaultSeconds: 0,
        disable: [],
        disableMobile: !1,
        enableSeconds: !1,
        enableTime: !1,
        errorHandler: function(i) {
            return typeof console < "u" && console.warn(i)
        },
        getWeek: function(i) {
            var t = new Date(i.getTime());
            t.setHours(0, 0, 0, 0),
            t.setDate(t.getDate() + 3 - (t.getDay() + 6) % 7);
            var e = new Date(t.getFullYear(),0,4);
            return 1 + Math.round(((t.getTime() - e.getTime()) / 864e5 - 3 + (e.getDay() + 6) % 7) / 7)
        },
        hourIncrement: 1,
        ignoredFocusElements: [],
        inline: !1,
        locale: "default",
        minuteIncrement: 5,
        mode: "single",
        monthSelectorType: "dropdown",
        nextArrow: "<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 17 17'><g></g><path d='M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z' /></svg>",
        noCalendar: !1,
        now: new Date,
        onChange: [],
        onClose: [],
        onDayCreate: [],
        onDestroy: [],
        onKeyDown: [],
        onMonthChange: [],
        onOpen: [],
        onParseConfig: [],
        onReady: [],
        onValueUpdate: [],
        onYearChange: [],
        onPreCalendarPosition: [],
        plugins: [],
        position: "auto",
        positionElement: void 0,
        prevArrow: "<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 17 17'><g></g><path d='M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z' /></svg>",
        shorthandCurrentMonth: !1,
        showMonths: 1,
        static: !1,
        time_24hr: !1,
        weekNumbers: !1,
        wrap: !1
    }
      , ir = {
        weekdays: {
            shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            longhand: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
        },
        months: {
            shorthand: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            longhand: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
        },
        daysInMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
        firstDayOfWeek: 0,
        ordinal: function(i) {
            var t = i % 100;
            if (t > 3 && t < 21)
                return "th";
            switch (t % 10) {
            case 1:
                return "st";
            case 2:
                return "nd";
            case 3:
                return "rd";
            default:
                return "th"
            }
        },
        rangeSeparator: " to ",
        weekAbbreviation: "Wk",
        scrollTitle: "Scroll to increment",
        toggleTitle: "Click to toggle",
        amPM: ["AM", "PM"],
        yearAriaLabel: "Year",
        monthAriaLabel: "Month",
        hourAriaLabel: "Hour",
        minuteAriaLabel: "Minute",
        time_24hr: !1
    }
      , Pe = function(i, t) {
        return t === void 0 && (t = 2),
        ("000" + i).slice(t * -1)
    }
      , Xe = function(i) {
        return i === !0 ? 1 : 0
    };
    function El(i, t) {
        var e;
        return function() {
            var n = this
              , r = arguments;
            clearTimeout(e),
            e = setTimeout(function() {
                return i.apply(n, r)
            }, t)
        }
    }
    var Us = function(i) {
        return i instanceof Array ? i : [i]
    };
    function Oe(i, t, e) {
        if (e === !0)
            return i.classList.add(t);
        i.classList.remove(t)
    }
    function ee(i, t, e) {
        var n = window.document.createElement(i);
        return t = t || "",
        e = e || "",
        n.className = t,
        e !== void 0 && (n.textContent = e),
        n
    }
    function Lr(i) {
        for (; i.firstChild; )
            i.removeChild(i.firstChild)
    }
    function eu(i, t) {
        if (t(i))
            return i;
        if (i.parentNode)
            return eu(i.parentNode, t)
    }
    function Or(i, t) {
        var e = ee("div", "numInputWrapper")
          , n = ee("input", "numInput " + i)
          , r = ee("span", "arrowUp")
          , s = ee("span", "arrowDown");
        if (navigator.userAgent.indexOf("MSIE 9.0") === -1 ? n.type = "number" : (n.type = "text",
        n.pattern = "\\d*"),
        t !== void 0)
            for (var a in t)
                n.setAttribute(a, t[a]);
        return e.appendChild(n),
        e.appendChild(r),
        e.appendChild(s),
        e
    }
    function Ue(i) {
        try {
            if (typeof i.composedPath == "function") {
                var t = i.composedPath();
                return t[0]
            }
            return i.target
        } catch {
            return i.target
        }
    }
    var $s = function() {}
      , Ur = function(i, t, e) {
        return e.months[t ? "shorthand" : "longhand"][i]
    }
      , j1 = {
        D: $s,
        F: function(i, t, e) {
            i.setMonth(e.months.longhand.indexOf(t))
        },
        G: function(i, t) {
            i.setHours((i.getHours() >= 12 ? 12 : 0) + parseFloat(t))
        },
        H: function(i, t) {
            i.setHours(parseFloat(t))
        },
        J: function(i, t) {
            i.setDate(parseFloat(t))
        },
        K: function(i, t, e) {
            i.setHours(i.getHours() % 12 + 12 * Xe(new RegExp(e.amPM[1],"i").test(t)))
        },
        M: function(i, t, e) {
            i.setMonth(e.months.shorthand.indexOf(t))
        },
        S: function(i, t) {
            i.setSeconds(parseFloat(t))
        },
        U: function(i, t) {
            return new Date(parseFloat(t) * 1e3)
        },
        W: function(i, t, e) {
            var n = parseInt(t)
              , r = new Date(i.getFullYear(),0,2 + (n - 1) * 7,0,0,0,0);
            return r.setDate(r.getDate() - r.getDay() + e.firstDayOfWeek),
            r
        },
        Y: function(i, t) {
            i.setFullYear(parseFloat(t))
        },
        Z: function(i, t) {
            return new Date(t)
        },
        d: function(i, t) {
            i.setDate(parseFloat(t))
        },
        h: function(i, t) {
            i.setHours((i.getHours() >= 12 ? 12 : 0) + parseFloat(t))
        },
        i: function(i, t) {
            i.setMinutes(parseFloat(t))
        },
        j: function(i, t) {
            i.setDate(parseFloat(t))
        },
        l: $s,
        m: function(i, t) {
            i.setMonth(parseFloat(t) - 1)
        },
        n: function(i, t) {
            i.setMonth(parseFloat(t) - 1)
        },
        s: function(i, t) {
            i.setSeconds(parseFloat(t))
        },
        u: function(i, t) {
            return new Date(parseFloat(t))
        },
        w: $s,
        y: function(i, t) {
            i.setFullYear(2e3 + parseFloat(t))
        }
    }
      , Ln = {
        D: "",
        F: "",
        G: "(\\d\\d|\\d)",
        H: "(\\d\\d|\\d)",
        J: "(\\d\\d|\\d)\\w+",
        K: "",
        M: "",
        S: "(\\d\\d|\\d)",
        U: "(.+)",
        W: "(\\d\\d|\\d)",
        Y: "(\\d{4})",
        Z: "(.+)",
        d: "(\\d\\d|\\d)",
        h: "(\\d\\d|\\d)",
        i: "(\\d\\d|\\d)",
        j: "(\\d\\d|\\d)",
        l: "",
        m: "(\\d\\d|\\d)",
        n: "(\\d\\d|\\d)",
        s: "(\\d\\d|\\d)",
        u: "(.+)",
        w: "(\\d\\d|\\d)",
        y: "(\\d{2})"
    }
      , Vi = {
        Z: function(i) {
            return i.toISOString()
        },
        D: function(i, t, e) {
            return t.weekdays.shorthand[Vi.w(i, t, e)]
        },
        F: function(i, t, e) {
            return Ur(Vi.n(i, t, e) - 1, !1, t)
        },
        G: function(i, t, e) {
            return Pe(Vi.h(i, t, e))
        },
        H: function(i) {
            return Pe(i.getHours())
        },
        J: function(i, t) {
            return t.ordinal !== void 0 ? i.getDate() + t.ordinal(i.getDate()) : i.getDate()
        },
        K: function(i, t) {
            return t.amPM[Xe(i.getHours() > 11)]
        },
        M: function(i, t) {
            return Ur(i.getMonth(), !0, t)
        },
        S: function(i) {
            return Pe(i.getSeconds())
        },
        U: function(i) {
            return i.getTime() / 1e3
        },
        W: function(i, t, e) {
            return e.getWeek(i)
        },
        Y: function(i) {
            return Pe(i.getFullYear(), 4)
        },
        d: function(i) {
            return Pe(i.getDate())
        },
        h: function(i) {
            return i.getHours() % 12 ? i.getHours() % 12 : 12
        },
        i: function(i) {
            return Pe(i.getMinutes())
        },
        j: function(i) {
            return i.getDate()
        },
        l: function(i, t) {
            return t.weekdays.longhand[i.getDay()]
        },
        m: function(i) {
            return Pe(i.getMonth() + 1)
        },
        n: function(i) {
            return i.getMonth() + 1
        },
        s: function(i) {
            return i.getSeconds()
        },
        u: function(i) {
            return i.getTime()
        },
        w: function(i) {
            return i.getDay()
        },
        y: function(i) {
            return String(i.getFullYear()).substring(2)
        }
    }
      , tu = function(i) {
        var t = i.config
          , e = t === void 0 ? ui : t
          , n = i.l10n
          , r = n === void 0 ? ir : n
          , s = i.isMobile
          , a = s === void 0 ? !1 : s;
        return function(o, l, u) {
            var h = u || r;
            return e.formatDate !== void 0 && !a ? e.formatDate(o, l, h) : l.split("").map(function(f, d, g) {
                return Vi[f] && g[d - 1] !== "\\" ? Vi[f](o, h, e) : f !== "\\" ? f : ""
            }).join("")
        }
    }
      , Sa = function(i) {
        var t = i.config
          , e = t === void 0 ? ui : t
          , n = i.l10n
          , r = n === void 0 ? ir : n;
        return function(s, a, o, l) {
            if (!(s !== 0 && !s)) {
                var u = l || r, h, f = s;
                if (s instanceof Date)
                    h = new Date(s.getTime());
                else if (typeof s != "string" && s.toFixed !== void 0)
                    h = new Date(s);
                else if (typeof s == "string") {
                    var d = a || (e || ui).dateFormat
                      , g = String(s).trim();
                    if (g === "today")
                        h = new Date,
                        o = !0;
                    else if (e && e.parseDate)
                        h = e.parseDate(s, d);
                    else if (/Z$/.test(g) || /GMT$/.test(g))
                        h = new Date(s);
                    else {
                        for (var b = void 0, E = [], _ = 0, C = 0, T = ""; _ < d.length; _++) {
                            var N = d[_]
                              , O = N === "\\"
                              , D = d[_ - 1] === "\\" || O;
                            if (Ln[N] && !D) {
                                T += Ln[N];
                                var j = new RegExp(T).exec(s);
                                j && (b = !0) && E[N !== "Y" ? "push" : "unshift"]({
                                    fn: j1[N],
                                    val: j[++C]
                                })
                            } else
                                O || (T += ".")
                        }
                        h = !e || !e.noCalendar ? new Date(new Date().getFullYear(),0,1,0,0,0,0) : new Date(new Date().setHours(0, 0, 0, 0)),
                        E.forEach(function(U) {
                            var G = U.fn
                              , le = U.val;
                            return h = G(h, le, u) || h
                        }),
                        h = b ? h : void 0
                    }
                }
                if (!(h instanceof Date && !isNaN(h.getTime()))) {
                    e.errorHandler(new Error("Invalid date provided: " + f));
                    return
                }
                return o === !0 && h.setHours(0, 0, 0, 0),
                h
            }
        }
    };
    function $e(i, t, e) {
        return e === void 0 && (e = !0),
        e !== !1 ? new Date(i.getTime()).setHours(0, 0, 0, 0) - new Date(t.getTime()).setHours(0, 0, 0, 0) : i.getTime() - t.getTime()
    }
    var H1 = function(i, t, e) {
        return i > Math.min(t, e) && i < Math.max(t, e)
    }
      , zs = function(i, t, e) {
        return i * 3600 + t * 60 + e
    }
      , U1 = function(i) {
        var t = Math.floor(i / 3600)
          , e = (i - t * 3600) / 60;
        return [t, e, i - t * 3600 - e * 60]
    }
      , $1 = {
        DAY: 864e5
    };
    function Ks(i) {
        var t = i.defaultHour
          , e = i.defaultMinute
          , n = i.defaultSeconds;
        if (i.minDate !== void 0) {
            var r = i.minDate.getHours()
              , s = i.minDate.getMinutes()
              , a = i.minDate.getSeconds();
            t < r && (t = r),
            t === r && e < s && (e = s),
            t === r && e === s && n < a && (n = i.minDate.getSeconds())
        }
        if (i.maxDate !== void 0) {
            var o = i.maxDate.getHours()
              , l = i.maxDate.getMinutes();
            t = Math.min(t, o),
            t === o && (e = Math.min(l, e)),
            t === o && e === l && (n = i.maxDate.getSeconds())
        }
        return {
            hours: t,
            minutes: e,
            seconds: n
        }
    }
    typeof Object.assign != "function" && (Object.assign = function(i) {
        for (var t = [], e = 1; e < arguments.length; e++)
            t[e - 1] = arguments[e];
        if (!i)
            throw TypeError("Cannot convert undefined or null to object");
        for (var n = function(o) {
            o && Object.keys(o).forEach(function(l) {
                return i[l] = o[l]
            })
        }, r = 0, s = t; r < s.length; r++) {
            var a = s[r];
            n(a)
        }
        return i
    }
    );
    var Te = function() {
        return Te = Object.assign || function(i) {
            for (var t, e = 1, n = arguments.length; e < n; e++) {
                t = arguments[e];
                for (var r in t)
                    Object.prototype.hasOwnProperty.call(t, r) && (i[r] = t[r])
            }
            return i
        }
        ,
        Te.apply(this, arguments)
    }
      , wl = function() {
        for (var i = 0, t = 0, e = arguments.length; t < e; t++)
            i += arguments[t].length;
        for (var n = Array(i), r = 0, t = 0; t < e; t++)
            for (var s = arguments[t], a = 0, o = s.length; a < o; a++,
            r++)
                n[r] = s[a];
        return n
    }
      , z1 = 300;
    function K1(i, t) {
        var e = {
            config: Te(Te({}, ui), oe.defaultConfig),
            l10n: ir
        };
        e.parseDate = Sa({
            config: e.config,
            l10n: e.l10n
        }),
        e._handlers = [],
        e.pluginElements = [],
        e.loadedPlugins = [],
        e._bind = E,
        e._setHoursFromDate = d,
        e._positionCalendar = Qt,
        e.changeMonth = mn,
        e.changeYear = Zt,
        e.clear = wi,
        e.close = je,
        e.onMouseOver = pt,
        e._createElement = ee,
        e.createDay = j,
        e.destroy = $n,
        e.isEnabled = de,
        e.jumpToDate = T,
        e.updateValue = Ie,
        e.open = gn,
        e.redraw = wn,
        e.set = _i,
        e.setDate = tn,
        e.toggle = Cn;
        function n() {
            e.utils = {
                getDaysInMonth: function(m, v) {
                    return m === void 0 && (m = e.currentMonth),
                    v === void 0 && (v = e.currentYear),
                    m === 1 && (v % 4 === 0 && v % 100 !== 0 || v % 400 === 0) ? 29 : e.l10n.daysInMonth[m]
                }
            }
        }
        function r() {
            e.element = e.input = i,
            e.isOpen = !1,
            bn(),
            Vn(),
            Wn(),
            ke(),
            n(),
            e.isMobile || D(),
            C(),
            (e.selectedDates.length || e.config.noCalendar) && (e.config.enableTime && d(e.config.noCalendar ? e.latestSelectedDateObj : void 0),
            Ie(!1)),
            o();
            var m = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
            !e.isMobile && m && Qt(),
            ne("onReady")
        }
        function s() {
            var m;
            return ((m = e.calendarContainer) === null || m === void 0 ? void 0 : m.getRootNode()).activeElement || document.activeElement
        }
        function a(m) {
            return m.bind(e)
        }
        function o() {
            var m = e.config;
            m.weekNumbers === !1 && m.showMonths === 1 || m.noCalendar !== !0 && window.requestAnimationFrame(function() {
                if (e.calendarContainer !== void 0 && (e.calendarContainer.style.visibility = "hidden",
                e.calendarContainer.style.display = "block"),
                e.daysContainer !== void 0) {
                    var v = (e.days.offsetWidth + 1) * m.showMonths;
                    e.daysContainer.style.width = v + "px",
                    e.calendarContainer.style.width = v + (e.weekWrapper !== void 0 ? e.weekWrapper.offsetWidth : 0) + "px",
                    e.calendarContainer.style.removeProperty("visibility"),
                    e.calendarContainer.style.removeProperty("display")
                }
            })
        }
        function l(m) {
            if (e.selectedDates.length === 0) {
                var v = e.config.minDate === void 0 || $e(new Date, e.config.minDate) >= 0 ? new Date : new Date(e.config.minDate.getTime())
                  , w = Ks(e.config);
                v.setHours(w.hours, w.minutes, w.seconds, v.getMilliseconds()),
                e.selectedDates = [v],
                e.latestSelectedDateObj = v
            }
            m !== void 0 && m.type !== "blur" && An(m);
            var A = e._input.value;
            f(),
            Ie(),
            e._input.value !== A && e._debouncedChange()
        }
        function u(m, v) {
            return m % 12 + 12 * Xe(v === e.l10n.amPM[1])
        }
        function h(m) {
            switch (m % 24) {
            case 0:
            case 12:
                return 12;
            default:
                return m % 12
            }
        }
        function f() {
            if (!(e.hourElement === void 0 || e.minuteElement === void 0)) {
                var m = (parseInt(e.hourElement.value.slice(-2), 10) || 0) % 24
                  , v = (parseInt(e.minuteElement.value, 10) || 0) % 60
                  , w = e.secondElement !== void 0 ? (parseInt(e.secondElement.value, 10) || 0) % 60 : 0;
                e.amPM !== void 0 && (m = u(m, e.amPM.textContent));
                var A = e.config.minTime !== void 0 || e.config.minDate && e.minDateHasTime && e.latestSelectedDateObj && $e(e.latestSelectedDateObj, e.config.minDate, !0) === 0
                  , I = e.config.maxTime !== void 0 || e.config.maxDate && e.maxDateHasTime && e.latestSelectedDateObj && $e(e.latestSelectedDateObj, e.config.maxDate, !0) === 0;
                if (e.config.maxTime !== void 0 && e.config.minTime !== void 0 && e.config.minTime > e.config.maxTime) {
                    var M = zs(e.config.minTime.getHours(), e.config.minTime.getMinutes(), e.config.minTime.getSeconds())
                      , z = zs(e.config.maxTime.getHours(), e.config.maxTime.getMinutes(), e.config.maxTime.getSeconds())
                      , F = zs(m, v, w);
                    if (F > z && F < M) {
                        var W = U1(M);
                        m = W[0],
                        v = W[1],
                        w = W[2]
                    }
                } else {
                    if (I) {
                        var q = e.config.maxTime !== void 0 ? e.config.maxTime : e.config.maxDate;
                        m = Math.min(m, q.getHours()),
                        m === q.getHours() && (v = Math.min(v, q.getMinutes())),
                        v === q.getMinutes() && (w = Math.min(w, q.getSeconds()))
                    }
                    if (A) {
                        var $ = e.config.minTime !== void 0 ? e.config.minTime : e.config.minDate;
                        m = Math.max(m, $.getHours()),
                        m === $.getHours() && v < $.getMinutes() && (v = $.getMinutes()),
                        v === $.getMinutes() && (w = Math.max(w, $.getSeconds()))
                    }
                }
                g(m, v, w)
            }
        }
        function d(m) {
            var v = m || e.latestSelectedDateObj;
            v && v instanceof Date && g(v.getHours(), v.getMinutes(), v.getSeconds())
        }
        function g(m, v, w) {
            e.latestSelectedDateObj !== void 0 && e.latestSelectedDateObj.setHours(m % 24, v, w || 0, 0),
            !(!e.hourElement || !e.minuteElement || e.isMobile) && (e.hourElement.value = Pe(e.config.time_24hr ? m : (12 + m) % 12 + 12 * Xe(m % 12 === 0)),
            e.minuteElement.value = Pe(v),
            e.amPM !== void 0 && (e.amPM.textContent = e.l10n.amPM[Xe(m >= 12)]),
            e.secondElement !== void 0 && (e.secondElement.value = Pe(w)))
        }
        function b(m) {
            var v = Ue(m)
              , w = parseInt(v.value) + (m.delta || 0);
            (w / 1e3 > 1 || m.key === "Enter" && !/[^\d]/.test(w.toString())) && Zt(w)
        }
        function E(m, v, w, A) {
            if (v instanceof Array)
                return v.forEach(function(I) {
                    return E(m, I, w, A)
                });
            if (m instanceof Array)
                return m.forEach(function(I) {
                    return E(I, v, w, A)
                });
            m.addEventListener(v, w, A),
            e._handlers.push({
                remove: function() {
                    return m.removeEventListener(v, w, A)
                }
            })
        }
        function _() {
            ne("onChange")
        }
        function C() {
            if (e.config.wrap && ["open", "close", "toggle", "clear"].forEach(function(w) {
                Array.prototype.forEach.call(e.element.querySelectorAll("[data-" + w + "]"), function(A) {
                    return E(A, "click", e[w])
                })
            }),
            e.isMobile) {
                Ci();
                return
            }
            var m = El(Kn, 50);
            if (e._debouncedChange = El(_, z1),
            e.daysContainer && !/iPhone|iPad|iPod/i.test(navigator.userAgent) && E(e.daysContainer, "mouseover", function(w) {
                e.config.mode === "range" && pt(Ue(w))
            }),
            E(e._input, "keydown", Xt),
            e.calendarContainer !== void 0 && E(e.calendarContainer, "keydown", Xt),
            !e.config.inline && !e.config.static && E(window, "resize", m),
            window.ontouchstart !== void 0 ? E(window.document, "touchstart", Yt) : E(window.document, "mousedown", Yt),
            E(window.document, "focus", Yt, {
                capture: !0
            }),
            e.config.clickOpens === !0 && (E(e._input, "focus", e.open),
            E(e._input, "click", e.open)),
            e.daysContainer !== void 0 && (E(e.monthNav, "click", Mt),
            E(e.monthNav, ["keyup", "increment"], b),
            E(e.daysContainer, "click", He)),
            e.timeContainer !== void 0 && e.minuteElement !== void 0 && e.hourElement !== void 0) {
                var v = function(w) {
                    return Ue(w).select()
                };
                E(e.timeContainer, ["increment"], l),
                E(e.timeContainer, "blur", l, {
                    capture: !0
                }),
                E(e.timeContainer, "click", N),
                E([e.hourElement, e.minuteElement], ["focus", "click"], v),
                e.secondElement !== void 0 && E(e.secondElement, "focus", function() {
                    return e.secondElement && e.secondElement.select()
                }),
                e.amPM !== void 0 && E(e.amPM, "click", function(w) {
                    l(w)
                })
            }
            e.config.allowInput && E(e._input, "blur", zn)
        }
        function T(m, v) {
            var w = m !== void 0 ? e.parseDate(m) : e.latestSelectedDateObj || (e.config.minDate && e.config.minDate > e.now ? e.config.minDate : e.config.maxDate && e.config.maxDate < e.now ? e.config.maxDate : e.now)
              , A = e.currentYear
              , I = e.currentMonth;
            try {
                w !== void 0 && (e.currentYear = w.getFullYear(),
                e.currentMonth = w.getMonth())
            } catch (M) {
                M.message = "Invalid date supplied: " + w,
                e.config.errorHandler(M)
            }
            v && e.currentYear !== A && (ne("onYearChange"),
            Ye()),
            v && (e.currentYear !== A || e.currentMonth !== I) && ne("onMonthChange"),
            e.redraw()
        }
        function N(m) {
            var v = Ue(m);
            ~v.className.indexOf("arrow") && O(m, v.classList.contains("arrowUp") ? 1 : -1)
        }
        function O(m, v, w) {
            var A = m && Ue(m)
              , I = w || A && A.parentNode && A.parentNode.firstChild
              , M = rn("increment");
            M.delta = v,
            I && I.dispatchEvent(M)
        }
        function D() {
            var m = window.document.createDocumentFragment();
            if (e.calendarContainer = ee("div", "flatpickr-calendar"),
            e.calendarContainer.tabIndex = -1,
            !e.config.noCalendar) {
                if (m.appendChild(Gt()),
                e.innerContainer = ee("div", "flatpickr-innerContainer"),
                e.config.weekNumbers) {
                    var v = te()
                      , w = v.weekWrapper
                      , A = v.weekNumbers;
                    e.innerContainer.appendChild(w),
                    e.weekNumbers = A,
                    e.weekWrapper = w
                }
                e.rContainer = ee("div", "flatpickr-rContainer"),
                e.rContainer.appendChild(Hn()),
                e.daysContainer || (e.daysContainer = ee("div", "flatpickr-days"),
                e.daysContainer.tabIndex = -1),
                he(),
                e.rContainer.appendChild(e.daysContainer),
                e.innerContainer.appendChild(e.rContainer),
                m.appendChild(e.innerContainer)
            }
            e.config.enableTime && m.appendChild(Ei()),
            Oe(e.calendarContainer, "rangeMode", e.config.mode === "range"),
            Oe(e.calendarContainer, "animate", e.config.animate === !0),
            Oe(e.calendarContainer, "multiMonth", e.config.showMonths > 1),
            e.calendarContainer.appendChild(m);
            var I = e.config.appendTo !== void 0 && e.config.appendTo.nodeType !== void 0;
            if ((e.config.inline || e.config.static) && (e.calendarContainer.classList.add(e.config.inline ? "inline" : "static"),
            e.config.inline && (!I && e.element.parentNode ? e.element.parentNode.insertBefore(e.calendarContainer, e._input.nextSibling) : e.config.appendTo !== void 0 && e.config.appendTo.appendChild(e.calendarContainer)),
            e.config.static)) {
                var M = ee("div", "flatpickr-wrapper");
                e.element.parentNode && e.element.parentNode.insertBefore(M, e.element),
                M.appendChild(e.element),
                e.altInput && M.appendChild(e.altInput),
                M.appendChild(e.calendarContainer)
            }
            !e.config.static && !e.config.inline && (e.config.appendTo !== void 0 ? e.config.appendTo : window.document.body).appendChild(e.calendarContainer)
        }
        function j(m, v, w, A) {
            var I = de(v, !0)
              , M = ee("span", m, v.getDate().toString());
            return M.dateObj = v,
            M.$i = A,
            M.setAttribute("aria-label", e.formatDate(v, e.config.ariaDateFormat)),
            m.indexOf("hidden") === -1 && $e(v, e.now) === 0 && (e.todayDateElem = M,
            M.classList.add("today"),
            M.setAttribute("aria-current", "date")),
            I ? (M.tabIndex = -1,
            gt(v) && (M.classList.add("selected"),
            e.selectedDateElem = M,
            e.config.mode === "range" && (Oe(M, "startRange", e.selectedDates[0] && $e(v, e.selectedDates[0], !0) === 0),
            Oe(M, "endRange", e.selectedDates[1] && $e(v, e.selectedDates[1], !0) === 0),
            m === "nextMonthDay" && M.classList.add("inRange")))) : M.classList.add("flatpickr-disabled"),
            e.config.mode === "range" && Dt(v) && !gt(v) && M.classList.add("inRange"),
            e.weekNumbers && e.config.showMonths === 1 && m !== "prevMonthDay" && A % 7 === 6 && e.weekNumbers.insertAdjacentHTML("beforeend", "<span class='flatpickr-day'>" + e.config.getWeek(v) + "</span>"),
            ne("onDayCreate", M),
            M
        }
        function U(m) {
            m.focus(),
            e.config.mode === "range" && pt(m)
        }
        function G(m) {
            for (var v = m > 0 ? 0 : e.config.showMonths - 1, w = m > 0 ? e.config.showMonths : -1, A = v; A != w; A += m)
                for (var I = e.daysContainer.children[A], M = m > 0 ? 0 : I.children.length - 1, z = m > 0 ? I.children.length : -1, F = M; F != z; F += m) {
                    var W = I.children[F];
                    if (W.className.indexOf("hidden") === -1 && de(W.dateObj))
                        return W
                }
        }
        function le(m, v) {
            for (var w = m.className.indexOf("Month") === -1 ? m.dateObj.getMonth() : e.currentMonth, A = v > 0 ? e.config.showMonths : -1, I = v > 0 ? 1 : -1, M = w - e.currentMonth; M != A; M += I)
                for (var z = e.daysContainer.children[M], F = w - e.currentMonth === M ? m.$i + v : v < 0 ? z.children.length - 1 : 0, W = z.children.length, q = F; q >= 0 && q < W && q != (v > 0 ? W : -1); q += I) {
                    var $ = z.children[q];
                    if ($.className.indexOf("hidden") === -1 && de($.dateObj) && Math.abs(m.$i - q) >= Math.abs(v))
                        return U($)
                }
            e.changeMonth(I),
            be(G(I), 0)
        }
        function be(m, v) {
            var w = s()
              , A = Ot(w || document.body)
              , I = m !== void 0 ? m : A ? w : e.selectedDateElem !== void 0 && Ot(e.selectedDateElem) ? e.selectedDateElem : e.todayDateElem !== void 0 && Ot(e.todayDateElem) ? e.todayDateElem : G(v > 0 ? 1 : -1);
            I === void 0 ? e._input.focus() : A ? le(I, v) : U(I)
        }
        function Be(m, v) {
            for (var w = (new Date(m,v,1).getDay() - e.l10n.firstDayOfWeek + 7) % 7, A = e.utils.getDaysInMonth((v - 1 + 12) % 12, m), I = e.utils.getDaysInMonth(v, m), M = window.document.createDocumentFragment(), z = e.config.showMonths > 1, F = z ? "prevMonthDay hidden" : "prevMonthDay", W = z ? "nextMonthDay hidden" : "nextMonthDay", q = A + 1 - w, $ = 0; q <= A; q++,
            $++)
                M.appendChild(j("flatpickr-day " + F, new Date(m,v - 1,q), q, $));
            for (q = 1; q <= I; q++,
            $++)
                M.appendChild(j("flatpickr-day", new Date(m,v,q), q, $));
            for (var X = I + 1; X <= 42 - w && (e.config.showMonths === 1 || $ % 7 !== 0); X++,
            $++)
                M.appendChild(j("flatpickr-day " + W, new Date(m,v + 1,X % I), X, $));
            var re = ee("div", "dayContainer");
            return re.appendChild(M),
            re
        }
        function he() {
            if (e.daysContainer !== void 0) {
                Lr(e.daysContainer),
                e.weekNumbers && Lr(e.weekNumbers);
                for (var m = document.createDocumentFragment(), v = 0; v < e.config.showMonths; v++) {
                    var w = new Date(e.currentYear,e.currentMonth,1);
                    w.setMonth(e.currentMonth + v),
                    m.appendChild(Be(w.getFullYear(), w.getMonth()))
                }
                e.daysContainer.appendChild(m),
                e.days = e.daysContainer.firstChild,
                e.config.mode === "range" && e.selectedDates.length === 1 && pt()
            }
        }
        function Ye() {
            if (!(e.config.showMonths > 1 || e.config.monthSelectorType !== "dropdown")) {
                var m = function(A) {
                    return e.config.minDate !== void 0 && e.currentYear === e.config.minDate.getFullYear() && A < e.config.minDate.getMonth() ? !1 : !(e.config.maxDate !== void 0 && e.currentYear === e.config.maxDate.getFullYear() && A > e.config.maxDate.getMonth())
                };
                e.monthsDropdownContainer.tabIndex = -1,
                e.monthsDropdownContainer.innerHTML = "";
                for (var v = 0; v < 12; v++)
                    if (m(v)) {
                        var w = ee("option", "flatpickr-monthDropdown-month");
                        w.value = new Date(e.currentYear,v).getMonth().toString(),
                        w.textContent = Ur(v, e.config.shorthandCurrentMonth, e.l10n),
                        w.tabIndex = -1,
                        e.currentMonth === v && (w.selected = !0),
                        e.monthsDropdownContainer.appendChild(w)
                    }
            }
        }
        function me() {
            var m = ee("div", "flatpickr-month"), v = window.document.createDocumentFragment(), w;
            e.config.showMonths > 1 || e.config.monthSelectorType === "static" ? w = ee("span", "cur-month") : (e.monthsDropdownContainer = ee("select", "flatpickr-monthDropdown-months"),
            e.monthsDropdownContainer.setAttribute("aria-label", e.l10n.monthAriaLabel),
            E(e.monthsDropdownContainer, "change", function(z) {
                var F = Ue(z)
                  , W = parseInt(F.value, 10);
                e.changeMonth(W - e.currentMonth),
                ne("onMonthChange")
            }),
            Ye(),
            w = e.monthsDropdownContainer);
            var A = Or("cur-year", {
                tabindex: "-1"
            })
              , I = A.getElementsByTagName("input")[0];
            I.setAttribute("aria-label", e.l10n.yearAriaLabel),
            e.config.minDate && I.setAttribute("min", e.config.minDate.getFullYear().toString()),
            e.config.maxDate && (I.setAttribute("max", e.config.maxDate.getFullYear().toString()),
            I.disabled = !!e.config.minDate && e.config.minDate.getFullYear() === e.config.maxDate.getFullYear());
            var M = ee("div", "flatpickr-current-month");
            return M.appendChild(w),
            M.appendChild(A),
            v.appendChild(M),
            m.appendChild(v),
            {
                container: m,
                yearElement: I,
                monthElement: w
            }
        }
        function Ze() {
            Lr(e.monthNav),
            e.monthNav.appendChild(e.prevMonthNav),
            e.config.showMonths && (e.yearElements = [],
            e.monthElements = []);
            for (var m = e.config.showMonths; m--; ) {
                var v = me();
                e.yearElements.push(v.yearElement),
                e.monthElements.push(v.monthElement),
                e.monthNav.appendChild(v.container)
            }
            e.monthNav.appendChild(e.nextMonthNav)
        }
        function Gt() {
            return e.monthNav = ee("div", "flatpickr-months"),
            e.yearElements = [],
            e.monthElements = [],
            e.prevMonthNav = ee("span", "flatpickr-prev-month"),
            e.prevMonthNav.innerHTML = e.config.prevArrow,
            e.nextMonthNav = ee("span", "flatpickr-next-month"),
            e.nextMonthNav.innerHTML = e.config.nextArrow,
            Ze(),
            Object.defineProperty(e, "_hidePrevMonthArrow", {
                get: function() {
                    return e.__hidePrevMonthArrow
                },
                set: function(m) {
                    e.__hidePrevMonthArrow !== m && (Oe(e.prevMonthNav, "flatpickr-disabled", m),
                    e.__hidePrevMonthArrow = m)
                }
            }),
            Object.defineProperty(e, "_hideNextMonthArrow", {
                get: function() {
                    return e.__hideNextMonthArrow
                },
                set: function(m) {
                    e.__hideNextMonthArrow !== m && (Oe(e.nextMonthNav, "flatpickr-disabled", m),
                    e.__hideNextMonthArrow = m)
                }
            }),
            e.currentYearElement = e.yearElements[0],
            _e(),
            e.monthNav
        }
        function Ei() {
            e.calendarContainer.classList.add("hasTime"),
            e.config.noCalendar && e.calendarContainer.classList.add("noCalendar");
            var m = Ks(e.config);
            e.timeContainer = ee("div", "flatpickr-time"),
            e.timeContainer.tabIndex = -1;
            var v = ee("span", "flatpickr-time-separator", ":")
              , w = Or("flatpickr-hour", {
                "aria-label": e.l10n.hourAriaLabel
            });
            e.hourElement = w.getElementsByTagName("input")[0];
            var A = Or("flatpickr-minute", {
                "aria-label": e.l10n.minuteAriaLabel
            });
            if (e.minuteElement = A.getElementsByTagName("input")[0],
            e.hourElement.tabIndex = e.minuteElement.tabIndex = -1,
            e.hourElement.value = Pe(e.latestSelectedDateObj ? e.latestSelectedDateObj.getHours() : e.config.time_24hr ? m.hours : h(m.hours)),
            e.minuteElement.value = Pe(e.latestSelectedDateObj ? e.latestSelectedDateObj.getMinutes() : m.minutes),
            e.hourElement.setAttribute("step", e.config.hourIncrement.toString()),
            e.minuteElement.setAttribute("step", e.config.minuteIncrement.toString()),
            e.hourElement.setAttribute("min", e.config.time_24hr ? "0" : "1"),
            e.hourElement.setAttribute("max", e.config.time_24hr ? "23" : "12"),
            e.hourElement.setAttribute("maxlength", "2"),
            e.minuteElement.setAttribute("min", "0"),
            e.minuteElement.setAttribute("max", "59"),
            e.minuteElement.setAttribute("maxlength", "2"),
            e.timeContainer.appendChild(w),
            e.timeContainer.appendChild(v),
            e.timeContainer.appendChild(A),
            e.config.time_24hr && e.timeContainer.classList.add("time24hr"),
            e.config.enableSeconds) {
                e.timeContainer.classList.add("hasSeconds");
                var I = Or("flatpickr-second");
                e.secondElement = I.getElementsByTagName("input")[0],
                e.secondElement.value = Pe(e.latestSelectedDateObj ? e.latestSelectedDateObj.getSeconds() : m.seconds),
                e.secondElement.setAttribute("step", e.minuteElement.getAttribute("step")),
                e.secondElement.setAttribute("min", "0"),
                e.secondElement.setAttribute("max", "59"),
                e.secondElement.setAttribute("maxlength", "2"),
                e.timeContainer.appendChild(ee("span", "flatpickr-time-separator", ":")),
                e.timeContainer.appendChild(I)
            }
            return e.config.time_24hr || (e.amPM = ee("span", "flatpickr-am-pm", e.l10n.amPM[Xe((e.latestSelectedDateObj ? e.hourElement.value : e.config.defaultHour) > 11)]),
            e.amPM.title = e.l10n.toggleTitle,
            e.amPM.tabIndex = -1,
            e.timeContainer.appendChild(e.amPM)),
            e.timeContainer
        }
        function Hn() {
            e.weekdayContainer ? Lr(e.weekdayContainer) : e.weekdayContainer = ee("div", "flatpickr-weekdays");
            for (var m = e.config.showMonths; m--; ) {
                var v = ee("div", "flatpickr-weekdaycontainer");
                e.weekdayContainer.appendChild(v)
            }
            return Un(),
            e.weekdayContainer
        }
        function Un() {
            if (e.weekdayContainer) {
                var m = e.l10n.firstDayOfWeek
                  , v = wl(e.l10n.weekdays.shorthand);
                m > 0 && m < v.length && (v = wl(v.splice(m, v.length), v.splice(0, m)));
                for (var w = e.config.showMonths; w--; )
                    e.weekdayContainer.children[w].innerHTML = `
      <span class='flatpickr-weekday'>
        ` + v.join("</span><span class='flatpickr-weekday'>") + `
      </span>
      `
            }
        }
        function te() {
            e.calendarContainer.classList.add("hasWeeks");
            var m = ee("div", "flatpickr-weekwrapper");
            m.appendChild(ee("span", "flatpickr-weekday", e.l10n.weekAbbreviation));
            var v = ee("div", "flatpickr-weeks");
            return m.appendChild(v),
            {
                weekWrapper: m,
                weekNumbers: v
            }
        }
        function mn(m, v) {
            v === void 0 && (v = !0);
            var w = v ? m : m - e.currentMonth;
            w < 0 && e._hidePrevMonthArrow === !0 || w > 0 && e._hideNextMonthArrow === !0 || (e.currentMonth += w,
            (e.currentMonth < 0 || e.currentMonth > 11) && (e.currentYear += e.currentMonth > 11 ? 1 : -1,
            e.currentMonth = (e.currentMonth + 12) % 12,
            ne("onYearChange"),
            Ye()),
            he(),
            ne("onMonthChange"),
            _e())
        }
        function wi(m, v) {
            if (m === void 0 && (m = !0),
            v === void 0 && (v = !0),
            e.input.value = "",
            e.altInput !== void 0 && (e.altInput.value = ""),
            e.mobileInput !== void 0 && (e.mobileInput.value = ""),
            e.selectedDates = [],
            e.latestSelectedDateObj = void 0,
            v === !0 && (e.currentYear = e._initialDate.getFullYear(),
            e.currentMonth = e._initialDate.getMonth()),
            e.config.enableTime === !0) {
                var w = Ks(e.config)
                  , A = w.hours
                  , I = w.minutes
                  , M = w.seconds;
                g(A, I, M)
            }
            e.redraw(),
            m && ne("onChange")
        }
        function je() {
            e.isOpen = !1,
            e.isMobile || (e.calendarContainer !== void 0 && e.calendarContainer.classList.remove("open"),
            e._input !== void 0 && e._input.classList.remove("active")),
            ne("onClose")
        }
        function $n() {
            e.config !== void 0 && ne("onDestroy");
            for (var m = e._handlers.length; m--; )
                e._handlers[m].remove();
            if (e._handlers = [],
            e.mobileInput)
                e.mobileInput.parentNode && e.mobileInput.parentNode.removeChild(e.mobileInput),
                e.mobileInput = void 0;
            else if (e.calendarContainer && e.calendarContainer.parentNode)
                if (e.config.static && e.calendarContainer.parentNode) {
                    var v = e.calendarContainer.parentNode;
                    if (v.lastChild && v.removeChild(v.lastChild),
                    v.parentNode) {
                        for (; v.firstChild; )
                            v.parentNode.insertBefore(v.firstChild, v);
                        v.parentNode.removeChild(v)
                    }
                } else
                    e.calendarContainer.parentNode.removeChild(e.calendarContainer);
            e.altInput && (e.input.type = "text",
            e.altInput.parentNode && e.altInput.parentNode.removeChild(e.altInput),
            delete e.altInput),
            e.input && (e.input.type = e.input._type,
            e.input.classList.remove("flatpickr-input"),
            e.input.removeAttribute("readonly")),
            ["_showTimeInput", "latestSelectedDateObj", "_hideNextMonthArrow", "_hidePrevMonthArrow", "__hideNextMonthArrow", "__hidePrevMonthArrow", "isMobile", "isOpen", "selectedDateElem", "minDateHasTime", "maxDateHasTime", "days", "daysContainer", "_input", "_positionElement", "innerContainer", "rContainer", "monthNav", "todayDateElem", "calendarContainer", "weekdayContainer", "prevMonthNav", "nextMonthNav", "monthsDropdownContainer", "currentMonthElement", "currentYearElement", "navigationCurrentMonth", "selectedDateElem", "config"].forEach(function(w) {
                try {
                    delete e[w]
                } catch {}
            })
        }
        function Z(m) {
            return e.calendarContainer.contains(m)
        }
        function Yt(m) {
            if (e.isOpen && !e.config.inline) {
                var v = Ue(m)
                  , w = Z(v)
                  , A = v === e.input || v === e.altInput || e.element.contains(v) || m.path && m.path.indexOf && (~m.path.indexOf(e.input) || ~m.path.indexOf(e.altInput))
                  , I = !A && !w && !Z(m.relatedTarget)
                  , M = !e.config.ignoredFocusElements.some(function(z) {
                    return z.contains(v)
                });
                I && M && (e.config.allowInput && e.setDate(e._input.value, !1, e.config.altInput ? e.config.altFormat : e.config.dateFormat),
                e.timeContainer !== void 0 && e.minuteElement !== void 0 && e.hourElement !== void 0 && e.input.value !== "" && e.input.value !== void 0 && l(),
                e.close(),
                e.config && e.config.mode === "range" && e.selectedDates.length === 1 && e.clear(!1))
            }
        }
        function Zt(m) {
            if (!(!m || e.config.minDate && m < e.config.minDate.getFullYear() || e.config.maxDate && m > e.config.maxDate.getFullYear())) {
                var v = m
                  , w = e.currentYear !== v;
                e.currentYear = v || e.currentYear,
                e.config.maxDate && e.currentYear === e.config.maxDate.getFullYear() ? e.currentMonth = Math.min(e.config.maxDate.getMonth(), e.currentMonth) : e.config.minDate && e.currentYear === e.config.minDate.getFullYear() && (e.currentMonth = Math.max(e.config.minDate.getMonth(), e.currentMonth)),
                w && (e.redraw(),
                ne("onYearChange"),
                Ye())
            }
        }
        function de(m, v) {
            var w;
            v === void 0 && (v = !0);
            var A = e.parseDate(m, void 0, v);
            if (e.config.minDate && A && $e(A, e.config.minDate, v !== void 0 ? v : !e.minDateHasTime) < 0 || e.config.maxDate && A && $e(A, e.config.maxDate, v !== void 0 ? v : !e.maxDateHasTime) > 0)
                return !1;
            if (!e.config.enable && e.config.disable.length === 0)
                return !0;
            if (A === void 0)
                return !1;
            for (var I = !!e.config.enable, M = (w = e.config.enable) !== null && w !== void 0 ? w : e.config.disable, z = 0, F = void 0; z < M.length; z++) {
                if (F = M[z],
                typeof F == "function" && F(A))
                    return I;
                if (F instanceof Date && A !== void 0 && F.getTime() === A.getTime())
                    return I;
                if (typeof F == "string") {
                    var W = e.parseDate(F, void 0, !0);
                    return W && W.getTime() === A.getTime() ? I : !I
                } else if (typeof F == "object" && A !== void 0 && F.from && F.to && A.getTime() >= F.from.getTime() && A.getTime() <= F.to.getTime())
                    return I
            }
            return !I
        }
        function Ot(m) {
            return e.daysContainer !== void 0 ? m.className.indexOf("hidden") === -1 && m.className.indexOf("flatpickr-disabled") === -1 && e.daysContainer.contains(m) : !1
        }
        function zn(m) {
            var v = m.target === e._input
              , w = e._input.value.trimEnd() !== vt();
            v && w && !(m.relatedTarget && Z(m.relatedTarget)) && e.setDate(e._input.value, !0, m.target === e.altInput ? e.config.altFormat : e.config.dateFormat)
        }
        function Xt(m) {
            var v = Ue(m)
              , w = e.config.wrap ? i.contains(v) : v === e._input
              , A = e.config.allowInput
              , I = e.isOpen && (!A || !w)
              , M = e.config.inline && w && !A;
            if (m.keyCode === 13 && w) {
                if (A)
                    return e.setDate(e._input.value, !0, v === e.altInput ? e.config.altFormat : e.config.dateFormat),
                    e.close(),
                    v.blur();
                e.open()
            } else if (Z(v) || I || M) {
                var z = !!e.timeContainer && e.timeContainer.contains(v);
                switch (m.keyCode) {
                case 13:
                    z ? (m.preventDefault(),
                    l(),
                    en()) : He(m);
                    break;
                case 27:
                    m.preventDefault(),
                    en();
                    break;
                case 8:
                case 46:
                    w && !e.config.allowInput && (m.preventDefault(),
                    e.clear());
                    break;
                case 37:
                case 39:
                    if (!z && !w) {
                        m.preventDefault();
                        var F = s();
                        if (e.daysContainer !== void 0 && (A === !1 || F && Ot(F))) {
                            var W = m.keyCode === 39 ? 1 : -1;
                            m.ctrlKey ? (m.stopPropagation(),
                            mn(W),
                            be(G(1), 0)) : be(void 0, W)
                        }
                    } else
                        e.hourElement && e.hourElement.focus();
                    break;
                case 38:
                case 40:
                    m.preventDefault();
                    var q = m.keyCode === 40 ? 1 : -1;
                    e.daysContainer && v.$i !== void 0 || v === e.input || v === e.altInput ? m.ctrlKey ? (m.stopPropagation(),
                    Zt(e.currentYear - q),
                    be(G(1), 0)) : z || be(void 0, q * 7) : v === e.currentYearElement ? Zt(e.currentYear - q) : e.config.enableTime && (!z && e.hourElement && e.hourElement.focus(),
                    l(m),
                    e._debouncedChange());
                    break;
                case 9:
                    if (z) {
                        var $ = [e.hourElement, e.minuteElement, e.secondElement, e.amPM].concat(e.pluginElements).filter(function(ye) {
                            return ye
                        })
                          , X = $.indexOf(v);
                        if (X !== -1) {
                            var re = $[X + (m.shiftKey ? -1 : 1)];
                            m.preventDefault(),
                            (re || e._input).focus()
                        }
                    } else
                        !e.config.noCalendar && e.daysContainer && e.daysContainer.contains(v) && m.shiftKey && (m.preventDefault(),
                        e._input.focus());
                    break
                }
            }
            if (e.amPM !== void 0 && v === e.amPM)
                switch (m.key) {
                case e.l10n.amPM[0].charAt(0):
                case e.l10n.amPM[0].charAt(0).toLowerCase():
                    e.amPM.textContent = e.l10n.amPM[0],
                    f(),
                    Ie();
                    break;
                case e.l10n.amPM[1].charAt(0):
                case e.l10n.amPM[1].charAt(0).toLowerCase():
                    e.amPM.textContent = e.l10n.amPM[1],
                    f(),
                    Ie();
                    break
                }
            (w || Z(v)) && ne("onKeyDown", m)
        }
        function pt(m, v) {
            if (v === void 0 && (v = "flatpickr-day"),
            !(e.selectedDates.length !== 1 || m && (!m.classList.contains(v) || m.classList.contains("flatpickr-disabled")))) {
                for (var w = m ? m.dateObj.getTime() : e.days.firstElementChild.dateObj.getTime(), A = e.parseDate(e.selectedDates[0], void 0, !0).getTime(), I = Math.min(w, e.selectedDates[0].getTime()), M = Math.max(w, e.selectedDates[0].getTime()), z = !1, F = 0, W = 0, q = I; q < M; q += $1.DAY)
                    de(new Date(q), !0) || (z = z || q > I && q < M,
                    q < A && (!F || q > F) ? F = q : q > A && (!W || q < W) && (W = q));
                var $ = Array.from(e.rContainer.querySelectorAll("*:nth-child(-n+" + e.config.showMonths + ") > ." + v));
                $.forEach(function(X) {
                    var re = X.dateObj
                      , ye = re.getTime()
                      , kt = F > 0 && ye < F || W > 0 && ye > W;
                    if (kt) {
                        X.classList.add("notAllowed"),
                        ["inRange", "startRange", "endRange"].forEach(function(bt) {
                            X.classList.remove(bt)
                        });
                        return
                    } else if (z && !kt)
                        return;
                    ["startRange", "inRange", "endRange", "notAllowed"].forEach(function(bt) {
                        X.classList.remove(bt)
                    }),
                    m !== void 0 && (m.classList.add(w <= e.selectedDates[0].getTime() ? "startRange" : "endRange"),
                    A < w && ye === A ? X.classList.add("startRange") : A > w && ye === A && X.classList.add("endRange"),
                    ye >= F && (W === 0 || ye <= W) && H1(ye, A, w) && X.classList.add("inRange"))
                })
            }
        }
        function Kn() {
            e.isOpen && !e.config.static && !e.config.inline && Qt()
        }
        function gn(m, v) {
            if (v === void 0 && (v = e._positionElement),
            e.isMobile === !0) {
                if (m) {
                    m.preventDefault();
                    var w = Ue(m);
                    w && w.blur()
                }
                e.mobileInput !== void 0 && (e.mobileInput.focus(),
                e.mobileInput.click()),
                ne("onOpen");
                return
            } else if (e._input.disabled || e.config.inline)
                return;
            var A = e.isOpen;
            e.isOpen = !0,
            A || (e.calendarContainer.classList.add("open"),
            e._input.classList.add("active"),
            ne("onOpen"),
            Qt(v)),
            e.config.enableTime === !0 && e.config.noCalendar === !0 && e.config.allowInput === !1 && (m === void 0 || !e.timeContainer.contains(m.relatedTarget)) && setTimeout(function() {
                return e.hourElement.select()
            }, 50)
        }
        function vn(m) {
            return function(v) {
                var w = e.config["_" + m + "Date"] = e.parseDate(v, e.config.dateFormat)
                  , A = e.config["_" + (m === "min" ? "max" : "min") + "Date"];
                w !== void 0 && (e[m === "min" ? "minDateHasTime" : "maxDateHasTime"] = w.getHours() > 0 || w.getMinutes() > 0 || w.getSeconds() > 0),
                e.selectedDates && (e.selectedDates = e.selectedDates.filter(function(I) {
                    return de(I)
                }),
                !e.selectedDates.length && m === "min" && d(w),
                Ie()),
                e.daysContainer && (wn(),
                w !== void 0 ? e.currentYearElement[m] = w.getFullYear().toString() : e.currentYearElement.removeAttribute(m),
                e.currentYearElement.disabled = !!A && w !== void 0 && A.getFullYear() === w.getFullYear())
            }
        }
        function bn() {
            var m = ["wrap", "weekNumbers", "allowInput", "allowInvalidPreload", "clickOpens", "time_24hr", "enableTime", "noCalendar", "altInput", "shorthandCurrentMonth", "inline", "static", "enableSeconds", "disableMobile"]
              , v = Te(Te({}, JSON.parse(JSON.stringify(i.dataset || {}))), t)
              , w = {};
            e.config.parseDate = v.parseDate,
            e.config.formatDate = v.formatDate,
            Object.defineProperty(e.config, "enable", {
                get: function() {
                    return e.config._enable
                },
                set: function($) {
                    e.config._enable = nn($)
                }
            }),
            Object.defineProperty(e.config, "disable", {
                get: function() {
                    return e.config._disable
                },
                set: function($) {
                    e.config._disable = nn($)
                }
            });
            var A = v.mode === "time";
            if (!v.dateFormat && (v.enableTime || A)) {
                var I = oe.defaultConfig.dateFormat || ui.dateFormat;
                w.dateFormat = v.noCalendar || A ? "H:i" + (v.enableSeconds ? ":S" : "") : I + " H:i" + (v.enableSeconds ? ":S" : "")
            }
            if (v.altInput && (v.enableTime || A) && !v.altFormat) {
                var M = oe.defaultConfig.altFormat || ui.altFormat;
                w.altFormat = v.noCalendar || A ? "h:i" + (v.enableSeconds ? ":S K" : " K") : M + (" h:i" + (v.enableSeconds ? ":S" : "") + " K")
            }
            Object.defineProperty(e.config, "minDate", {
                get: function() {
                    return e.config._minDate
                },
                set: vn("min")
            }),
            Object.defineProperty(e.config, "maxDate", {
                get: function() {
                    return e.config._maxDate
                },
                set: vn("max")
            });
            var z = function($) {
                return function(X) {
                    e.config[$ === "min" ? "_minTime" : "_maxTime"] = e.parseDate(X, "H:i:S")
                }
            };
            Object.defineProperty(e.config, "minTime", {
                get: function() {
                    return e.config._minTime
                },
                set: z("min")
            }),
            Object.defineProperty(e.config, "maxTime", {
                get: function() {
                    return e.config._maxTime
                },
                set: z("max")
            }),
            v.mode === "time" && (e.config.noCalendar = !0,
            e.config.enableTime = !0),
            Object.assign(e.config, w, v);
            for (var F = 0; F < m.length; F++)
                e.config[m[F]] = e.config[m[F]] === !0 || e.config[m[F]] === "true";
            Hs.filter(function($) {
                return e.config[$] !== void 0
            }).forEach(function($) {
                e.config[$] = Us(e.config[$] || []).map(a)
            }),
            e.isMobile = !e.config.disableMobile && !e.config.inline && e.config.mode === "single" && !e.config.disable.length && !e.config.enable && !e.config.weekNumbers && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            for (var F = 0; F < e.config.plugins.length; F++) {
                var W = e.config.plugins[F](e) || {};
                for (var q in W)
                    Hs.indexOf(q) > -1 ? e.config[q] = Us(W[q]).map(a).concat(e.config[q]) : typeof v[q] > "u" && (e.config[q] = W[q])
            }
            v.altInputClass || (e.config.altInputClass = yn().className + " " + e.config.altInputClass),
            ne("onParseConfig")
        }
        function yn() {
            return e.config.wrap ? i.querySelector("[data-input]") : i
        }
        function Vn() {
            typeof e.config.locale != "object" && typeof oe.l10ns[e.config.locale] > "u" && e.config.errorHandler(new Error("flatpickr: invalid locale " + e.config.locale)),
            e.l10n = Te(Te({}, oe.l10ns.default), typeof e.config.locale == "object" ? e.config.locale : e.config.locale !== "default" ? oe.l10ns[e.config.locale] : void 0),
            Ln.D = "(" + e.l10n.weekdays.shorthand.join("|") + ")",
            Ln.l = "(" + e.l10n.weekdays.longhand.join("|") + ")",
            Ln.M = "(" + e.l10n.months.shorthand.join("|") + ")",
            Ln.F = "(" + e.l10n.months.longhand.join("|") + ")",
            Ln.K = "(" + e.l10n.amPM[0] + "|" + e.l10n.amPM[1] + "|" + e.l10n.amPM[0].toLowerCase() + "|" + e.l10n.amPM[1].toLowerCase() + ")";
            var m = Te(Te({}, t), JSON.parse(JSON.stringify(i.dataset || {})));
            m.time_24hr === void 0 && oe.defaultConfig.time_24hr === void 0 && (e.config.time_24hr = e.l10n.time_24hr),
            e.formatDate = tu(e),
            e.parseDate = Sa({
                config: e.config,
                l10n: e.l10n
            })
        }
        function Qt(m) {
            if (typeof e.config.position == "function")
                return void e.config.position(e, m);
            if (e.calendarContainer !== void 0) {
                ne("onPreCalendarPosition");
                var v = m || e._positionElement
                  , w = Array.prototype.reduce.call(e.calendarContainer.children, function(Ce, Li) {
                    return Ce + Li.offsetHeight
                }, 0)
                  , A = e.calendarContainer.offsetWidth
                  , I = e.config.position.split(" ")
                  , M = I[0]
                  , z = I.length > 1 ? I[1] : null
                  , F = v.getBoundingClientRect()
                  , W = window.innerHeight - F.bottom
                  , q = M === "above" || M !== "below" && W < w && F.top > w
                  , $ = window.pageYOffset + F.top + (q ? -w - 2 : v.offsetHeight + 2);
                if (Oe(e.calendarContainer, "arrowTop", !q),
                Oe(e.calendarContainer, "arrowBottom", q),
                !e.config.inline) {
                    var X = window.pageXOffset + F.left
                      , re = !1
                      , ye = !1;
                    z === "center" ? (X -= (A - F.width) / 2,
                    re = !0) : z === "right" && (X -= A - F.width,
                    ye = !0),
                    Oe(e.calendarContainer, "arrowLeft", !re && !ye),
                    Oe(e.calendarContainer, "arrowCenter", re),
                    Oe(e.calendarContainer, "arrowRight", ye);
                    var kt = window.document.body.offsetWidth - (window.pageXOffset + F.right)
                      , bt = X + A > window.document.body.offsetWidth
                      , Ai = kt + A > window.document.body.offsetWidth;
                    if (Oe(e.calendarContainer, "rightMost", bt),
                    !e.config.static)
                        if (e.calendarContainer.style.top = $ + "px",
                        !bt)
                            e.calendarContainer.style.left = X + "px",
                            e.calendarContainer.style.right = "auto";
                        else if (!Ai)
                            e.calendarContainer.style.left = "auto",
                            e.calendarContainer.style.right = kt + "px";
                        else {
                            var Sn = Jt();
                            if (Sn === void 0)
                                return;
                            var ge = window.document.body.offsetWidth
                              , Si = Math.max(0, ge / 2 - A / 2)
                              , Ti = ".flatpickr-calendar.centerMost:before"
                              , xi = ".flatpickr-calendar.centerMost:after"
                              , Ni = Sn.cssRules.length
                              , Ii = "{left:" + F.left + "px;right:auto;}";
                            Oe(e.calendarContainer, "rightMost", !1),
                            Oe(e.calendarContainer, "centerMost", !0),
                            Sn.insertRule(Ti + "," + xi + Ii, Ni),
                            e.calendarContainer.style.left = Si + "px",
                            e.calendarContainer.style.right = "auto"
                        }
                }
            }
        }
        function Jt() {
            for (var m = null, v = 0; v < document.styleSheets.length; v++) {
                var w = document.styleSheets[v];
                if (w.cssRules) {
                    try {
                        w.cssRules
                    } catch {
                        continue
                    }
                    m = w;
                    break
                }
            }
            return m ?? En()
        }
        function En() {
            var m = document.createElement("style");
            return document.head.appendChild(m),
            m.sheet
        }
        function wn() {
            e.config.noCalendar || e.isMobile || (Ye(),
            _e(),
            he())
        }
        function en() {
            e._input.focus(),
            window.navigator.userAgent.indexOf("MSIE") !== -1 || navigator.msMaxTouchPoints !== void 0 ? setTimeout(e.close, 0) : e.close()
        }
        function He(m) {
            m.preventDefault(),
            m.stopPropagation();
            var v = function($) {
                return $.classList && $.classList.contains("flatpickr-day") && !$.classList.contains("flatpickr-disabled") && !$.classList.contains("notAllowed")
            }
              , w = eu(Ue(m), v);
            if (w !== void 0) {
                var A = w
                  , I = e.latestSelectedDateObj = new Date(A.dateObj.getTime())
                  , M = (I.getMonth() < e.currentMonth || I.getMonth() > e.currentMonth + e.config.showMonths - 1) && e.config.mode !== "range";
                if (e.selectedDateElem = A,
                e.config.mode === "single")
                    e.selectedDates = [I];
                else if (e.config.mode === "multiple") {
                    var z = gt(I);
                    z ? e.selectedDates.splice(parseInt(z), 1) : e.selectedDates.push(I)
                } else
                    e.config.mode === "range" && (e.selectedDates.length === 2 && e.clear(!1, !1),
                    e.latestSelectedDateObj = I,
                    e.selectedDates.push(I),
                    $e(I, e.selectedDates[0], !0) !== 0 && e.selectedDates.sort(function($, X) {
                        return $.getTime() - X.getTime()
                    }));
                if (f(),
                M) {
                    var F = e.currentYear !== I.getFullYear();
                    e.currentYear = I.getFullYear(),
                    e.currentMonth = I.getMonth(),
                    F && (ne("onYearChange"),
                    Ye()),
                    ne("onMonthChange")
                }
                if (_e(),
                he(),
                Ie(),
                !M && e.config.mode !== "range" && e.config.showMonths === 1 ? U(A) : e.selectedDateElem !== void 0 && e.hourElement === void 0 && e.selectedDateElem && e.selectedDateElem.focus(),
                e.hourElement !== void 0 && e.hourElement !== void 0 && e.hourElement.focus(),
                e.config.closeOnSelect) {
                    var W = e.config.mode === "single" && !e.config.enableTime
                      , q = e.config.mode === "range" && e.selectedDates.length === 2 && !e.config.enableTime;
                    (W || q) && en()
                }
                _()
            }
        }
        var it = {
            locale: [Vn, Un],
            showMonths: [Ze, o, Hn],
            minDate: [T],
            maxDate: [T],
            positionElement: [_n],
            clickOpens: [function() {
                e.config.clickOpens === !0 ? (E(e._input, "focus", e.open),
                E(e._input, "click", e.open)) : (e._input.removeEventListener("focus", e.open),
                e._input.removeEventListener("click", e.open))
            }
            ]
        };
        function _i(m, v) {
            if (m !== null && typeof m == "object") {
                Object.assign(e.config, m);
                for (var w in m)
                    it[w] !== void 0 && it[w].forEach(function(A) {
                        return A()
                    })
            } else
                e.config[m] = v,
                it[m] !== void 0 ? it[m].forEach(function(A) {
                    return A()
                }) : Hs.indexOf(m) > -1 && (e.config[m] = Us(v));
            e.redraw(),
            Ie(!0)
        }
        function mt(m, v) {
            var w = [];
            if (m instanceof Array)
                w = m.map(function(A) {
                    return e.parseDate(A, v)
                });
            else if (m instanceof Date || typeof m == "number")
                w = [e.parseDate(m, v)];
            else if (typeof m == "string")
                switch (e.config.mode) {
                case "single":
                case "time":
                    w = [e.parseDate(m, v)];
                    break;
                case "multiple":
                    w = m.split(e.config.conjunction).map(function(A) {
                        return e.parseDate(A, v)
                    });
                    break;
                case "range":
                    w = m.split(e.l10n.rangeSeparator).map(function(A) {
                        return e.parseDate(A, v)
                    });
                    break
                }
            else
                e.config.errorHandler(new Error("Invalid date supplied: " + JSON.stringify(m)));
            e.selectedDates = e.config.allowInvalidPreload ? w : w.filter(function(A) {
                return A instanceof Date && de(A, !1)
            }),
            e.config.mode === "range" && e.selectedDates.sort(function(A, I) {
                return A.getTime() - I.getTime()
            })
        }
        function tn(m, v, w) {
            if (v === void 0 && (v = !1),
            w === void 0 && (w = e.config.dateFormat),
            m !== 0 && !m || m instanceof Array && m.length === 0)
                return e.clear(v);
            mt(m, w),
            e.latestSelectedDateObj = e.selectedDates[e.selectedDates.length - 1],
            e.redraw(),
            T(void 0, v),
            d(),
            e.selectedDates.length === 0 && e.clear(!1),
            Ie(v),
            v && ne("onChange")
        }
        function nn(m) {
            return m.slice().map(function(v) {
                return typeof v == "string" || typeof v == "number" || v instanceof Date ? e.parseDate(v, void 0, !0) : v && typeof v == "object" && v.from && v.to ? {
                    from: e.parseDate(v.from, void 0),
                    to: e.parseDate(v.to, void 0)
                } : v
            }).filter(function(v) {
                return v
            })
        }
        function ke() {
            e.selectedDates = [],
            e.now = e.parseDate(e.config.now) || new Date;
            var m = e.config.defaultDate || ((e.input.nodeName === "INPUT" || e.input.nodeName === "TEXTAREA") && e.input.placeholder && e.input.value === e.input.placeholder ? null : e.input.value);
            m && mt(m, e.config.dateFormat),
            e._initialDate = e.selectedDates.length > 0 ? e.selectedDates[0] : e.config.minDate && e.config.minDate.getTime() > e.now.getTime() ? e.config.minDate : e.config.maxDate && e.config.maxDate.getTime() < e.now.getTime() ? e.config.maxDate : e.now,
            e.currentYear = e._initialDate.getFullYear(),
            e.currentMonth = e._initialDate.getMonth(),
            e.selectedDates.length > 0 && (e.latestSelectedDateObj = e.selectedDates[0]),
            e.config.minTime !== void 0 && (e.config.minTime = e.parseDate(e.config.minTime, "H:i")),
            e.config.maxTime !== void 0 && (e.config.maxTime = e.parseDate(e.config.maxTime, "H:i")),
            e.minDateHasTime = !!e.config.minDate && (e.config.minDate.getHours() > 0 || e.config.minDate.getMinutes() > 0 || e.config.minDate.getSeconds() > 0),
            e.maxDateHasTime = !!e.config.maxDate && (e.config.maxDate.getHours() > 0 || e.config.maxDate.getMinutes() > 0 || e.config.maxDate.getSeconds() > 0)
        }
        function Wn() {
            if (e.input = yn(),
            !e.input) {
                e.config.errorHandler(new Error("Invalid input element specified"));
                return
            }
            e.input._type = e.input.type,
            e.input.type = "text",
            e.input.classList.add("flatpickr-input"),
            e._input = e.input,
            e.config.altInput && (e.altInput = ee(e.input.nodeName, e.config.altInputClass),
            e._input = e.altInput,
            e.altInput.placeholder = e.input.placeholder,
            e.altInput.disabled = e.input.disabled,
            e.altInput.required = e.input.required,
            e.altInput.tabIndex = e.input.tabIndex,
            e.altInput.type = "text",
            e.input.setAttribute("type", "hidden"),
            !e.config.static && e.input.parentNode && e.input.parentNode.insertBefore(e.altInput, e.input.nextSibling)),
            e.config.allowInput || e._input.setAttribute("readonly", "readonly"),
            _n()
        }
        function _n() {
            e._positionElement = e.config.positionElement || e._input
        }
        function Ci() {
            var m = e.config.enableTime ? e.config.noCalendar ? "time" : "datetime-local" : "date";
            e.mobileInput = ee("input", e.input.className + " flatpickr-mobile"),
            e.mobileInput.tabIndex = 1,
            e.mobileInput.type = m,
            e.mobileInput.disabled = e.input.disabled,
            e.mobileInput.required = e.input.required,
            e.mobileInput.placeholder = e.input.placeholder,
            e.mobileFormatStr = m === "datetime-local" ? "Y-m-d\\TH:i:S" : m === "date" ? "Y-m-d" : "H:i:S",
            e.selectedDates.length > 0 && (e.mobileInput.defaultValue = e.mobileInput.value = e.formatDate(e.selectedDates[0], e.mobileFormatStr)),
            e.config.minDate && (e.mobileInput.min = e.formatDate(e.config.minDate, "Y-m-d")),
            e.config.maxDate && (e.mobileInput.max = e.formatDate(e.config.maxDate, "Y-m-d")),
            e.input.getAttribute("step") && (e.mobileInput.step = String(e.input.getAttribute("step"))),
            e.input.type = "hidden",
            e.altInput !== void 0 && (e.altInput.type = "hidden");
            try {
                e.input.parentNode && e.input.parentNode.insertBefore(e.mobileInput, e.input.nextSibling)
            } catch {}
            E(e.mobileInput, "change", function(v) {
                e.setDate(Ue(v).value, !1, e.mobileFormatStr),
                ne("onChange"),
                ne("onClose")
            })
        }
        function Cn(m) {
            if (e.isOpen === !0)
                return e.close();
            e.open(m)
        }
        function ne(m, v) {
            if (e.config !== void 0) {
                var w = e.config[m];
                if (w !== void 0 && w.length > 0)
                    for (var A = 0; w[A] && A < w.length; A++)
                        w[A](e.selectedDates, e.input.value, e, v);
                m === "onChange" && (e.input.dispatchEvent(rn("change")),
                e.input.dispatchEvent(rn("input")))
            }
        }
        function rn(m) {
            var v = document.createEvent("Event");
            return v.initEvent(m, !0, !0),
            v
        }
        function gt(m) {
            for (var v = 0; v < e.selectedDates.length; v++) {
                var w = e.selectedDates[v];
                if (w instanceof Date && $e(w, m) === 0)
                    return "" + v
            }
            return !1
        }
        function Dt(m) {
            return e.config.mode !== "range" || e.selectedDates.length < 2 ? !1 : $e(m, e.selectedDates[0]) >= 0 && $e(m, e.selectedDates[1]) <= 0
        }
        function _e() {
            e.config.noCalendar || e.isMobile || !e.monthNav || (e.yearElements.forEach(function(m, v) {
                var w = new Date(e.currentYear,e.currentMonth,1);
                w.setMonth(e.currentMonth + v),
                e.config.showMonths > 1 || e.config.monthSelectorType === "static" ? e.monthElements[v].textContent = Ur(w.getMonth(), e.config.shorthandCurrentMonth, e.l10n) + " " : e.monthsDropdownContainer.value = w.getMonth().toString(),
                m.value = w.getFullYear().toString()
            }),
            e._hidePrevMonthArrow = e.config.minDate !== void 0 && (e.currentYear === e.config.minDate.getFullYear() ? e.currentMonth <= e.config.minDate.getMonth() : e.currentYear < e.config.minDate.getFullYear()),
            e._hideNextMonthArrow = e.config.maxDate !== void 0 && (e.currentYear === e.config.maxDate.getFullYear() ? e.currentMonth + 1 > e.config.maxDate.getMonth() : e.currentYear > e.config.maxDate.getFullYear()))
        }
        function vt(m) {
            var v = m || (e.config.altInput ? e.config.altFormat : e.config.dateFormat);
            return e.selectedDates.map(function(w) {
                return e.formatDate(w, v)
            }).filter(function(w, A, I) {
                return e.config.mode !== "range" || e.config.enableTime || I.indexOf(w) === A
            }).join(e.config.mode !== "range" ? e.config.conjunction : e.l10n.rangeSeparator)
        }
        function Ie(m) {
            m === void 0 && (m = !0),
            e.mobileInput !== void 0 && e.mobileFormatStr && (e.mobileInput.value = e.latestSelectedDateObj !== void 0 ? e.formatDate(e.latestSelectedDateObj, e.mobileFormatStr) : ""),
            e.input.value = vt(e.config.dateFormat),
            e.altInput !== void 0 && (e.altInput.value = vt(e.config.altFormat)),
            m !== !1 && ne("onValueUpdate")
        }
        function Mt(m) {
            var v = Ue(m)
              , w = e.prevMonthNav.contains(v)
              , A = e.nextMonthNav.contains(v);
            w || A ? mn(w ? -1 : 1) : e.yearElements.indexOf(v) >= 0 ? v.select() : v.classList.contains("arrowUp") ? e.changeYear(e.currentYear + 1) : v.classList.contains("arrowDown") && e.changeYear(e.currentYear - 1)
        }
        function An(m) {
            m.preventDefault();
            var v = m.type === "keydown"
              , w = Ue(m)
              , A = w;
            e.amPM !== void 0 && w === e.amPM && (e.amPM.textContent = e.l10n.amPM[Xe(e.amPM.textContent === e.l10n.amPM[0])]);
            var I = parseFloat(A.getAttribute("min"))
              , M = parseFloat(A.getAttribute("max"))
              , z = parseFloat(A.getAttribute("step"))
              , F = parseInt(A.value, 10)
              , W = m.delta || (v ? m.which === 38 ? 1 : -1 : 0)
              , q = F + z * W;
            if (typeof A.value < "u" && A.value.length === 2) {
                var $ = A === e.hourElement
                  , X = A === e.minuteElement;
                q < I ? (q = M + q + Xe(!$) + (Xe($) && Xe(!e.amPM)),
                X && O(void 0, -1, e.hourElement)) : q > M && (q = A === e.hourElement ? q - M - Xe(!e.amPM) : I,
                X && O(void 0, 1, e.hourElement)),
                e.amPM && $ && (z === 1 ? q + F === 23 : Math.abs(q - F) > z) && (e.amPM.textContent = e.l10n.amPM[Xe(e.amPM.textContent === e.l10n.amPM[0])]),
                A.value = Pe(q)
            }
        }
        return r(),
        e
    }
    function hi(i, t) {
        for (var e = Array.prototype.slice.call(i).filter(function(a) {
            return a instanceof HTMLElement
        }), n = [], r = 0; r < e.length; r++) {
            var s = e[r];
            try {
                if (s.getAttribute("data-fp-omit") !== null)
                    continue;
                s._flatpickr !== void 0 && (s._flatpickr.destroy(),
                s._flatpickr = void 0),
                s._flatpickr = K1(s, t || {}),
                n.push(s._flatpickr)
            } catch (a) {
                console.error(a)
            }
        }
        return n.length === 1 ? n[0] : n
    }
    typeof HTMLElement < "u" && typeof HTMLCollection < "u" && typeof NodeList < "u" && (HTMLCollection.prototype.flatpickr = NodeList.prototype.flatpickr = function(i) {
        return hi(this, i)
    }
    ,
    HTMLElement.prototype.flatpickr = function(i) {
        return hi([this], i)
    }
    );
    var oe = function(i, t) {
        return typeof i == "string" ? hi(window.document.querySelectorAll(i), t) : i instanceof Node ? hi([i], t) : hi(i, t)
    };
    oe.defaultConfig = {};
    oe.l10ns = {
        en: Te({}, ir),
        default: Te({}, ir)
    };
    oe.localize = function(i) {
        oe.l10ns.default = Te(Te({}, oe.l10ns.default), i)
    }
    ;
    oe.setDefaults = function(i) {
        oe.defaultConfig = Te(Te({}, oe.defaultConfig), i)
    }
    ;
    oe.parseDate = Sa({});
    oe.formatDate = tu({});
    oe.compareDates = $e;
    typeof jQuery < "u" && typeof jQuery.fn < "u" && (jQuery.fn.flatpickr = function(i) {
        return hi(this, i)
    }
    );
    Date.prototype.fp_incr = function(i) {
        return new Date(this.getFullYear(),this.getMonth(),this.getDate() + (typeof i == "string" ? parseInt(i, 10) : i))
    }
    ;
    typeof window < "u" && (window.flatpickr = oe);
    var Ta = {
        exports: {}
    };
    (function(i, t) {
        (function(e, n) {
            n(t)
        }
        )(jt, function(e) {
            var n = typeof window < "u" && window.flatpickr !== void 0 ? window.flatpickr : {
                l10ns: {}
            }
              , r = {
                weekdays: {
                    shorthand: ["Ne", "Po", "Út", "St", "Čt", "Pá", "So"],
                    longhand: ["Neděle", "Pondělí", "Úterý", "Středa", "Čtvrtek", "Pátek", "Sobota"]
                },
                months: {
                    shorthand: ["Led", "Ún", "Bře", "Dub", "Kvě", "Čer", "Čvc", "Srp", "Zář", "Říj", "Lis", "Pro"],
                    longhand: ["Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec"]
                },
                firstDayOfWeek: 1,
                ordinal: function() {
                    return "."
                },
                rangeSeparator: " do ",
                weekAbbreviation: "Týd.",
                scrollTitle: "Rolujte pro změnu",
                toggleTitle: "Přepnout dopoledne/odpoledne",
                amPM: ["dop.", "odp."],
                yearAriaLabel: "Rok",
                time_24hr: !0
            };
            n.l10ns.cs = r;
            var s = n.l10ns;
            e.Czech = r,
            e.default = s,
            Object.defineProperty(e, "__esModule", {
                value: !0
            })
        })
    }
    )(Ta, Ta.exports);
    var V1 = Ta.exports;
    const W1 = {
        locale: V1.Czech,
        dateFormat: "d.m.Y",
        disableMobile: !0
    };
    class G1 {
        initialize(t) {
            Kt( () => this.initCalendar(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initCalendar(e.detail.snippet))
        }
        initCalendar(t) {
            t.querySelectorAll("input[data-calendar]").forEach(n => {
                let r = n.dataset.calendar;
                ["single", "multiple", "range", "time"].includes(r) || (r = "single");
                let s, a = n.min ? new Date(n.min) : void 0, o = n.max ? new Date(n.max) : void 0;
                const l = n.dataset.netteRules ? JSON.parse(n.dataset.netteRules) : []
                  , u = f => d => {
                    if (d.op !== f || typeof d.arg != "object" || !d.arg.control)
                        return !1;
                    const g = document.querySelector(`[name="${d.arg.control}"]`);
                    return g.dataset.calendar !== void 0 ? g._flatpickr : !1
                }
                ;
                l.map(u(":min")).filter(f => !!f).forEach(f => {
                    a = f.selectedDates[0],
                    f.config.onChange.push(d => s.set("minDate", d[0]))
                }
                ),
                l.map(u(":max")).filter(f => !!f).forEach(f => {
                    o = f.selectedDates[0],
                    f.config.onChange.push(d => s.set("maxDate", d[0]))
                }
                );
                const h = {
                    ...W1,
                    mode: r,
                    minDate: a,
                    maxDate: o,
                    allowInput: !0
                };
                s = oe(n, h)
            }
            )
        }
    }
    Tl.validators.min = function(i, t, e) {
        return i.dataset.calendar !== void 0 && (t = oe.parseDate(t),
        e = oe.parseDate(e, i.dataset.calendar)),
        Number.isFinite(t) && (e = parseFloat(e)),
        e >= t
    }
    ;
    Tl.validators.max = function(i, t, e) {
        return i.dataset.calendar !== void 0 && (t = oe.parseDate(t),
        e = oe.parseDate(e, i.dataset.calendar)),
        Number.isFinite(t) && (e = parseFloat(e)),
        e <= t
    }
    ;
    class Y1 {
        initialize(t) {
            Kt( () => this.initMonthYear(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initMonthYear(e.detail.snippet))
        }
        initMonthYear(t) {
            t.querySelectorAll('[data-month-year="wrap"]').forEach(n => {
                const r = n.querySelector('[data-month-year="value"]')
                  , s = n.querySelector('[data-month-year="month"]')
                  , a = n.querySelector('[data-month-year="year"]')
                  , o = () => {
                    let u = s._choices ? s._choices.getValue(!0) : s.value;
                    u && (u = ("0" + u).slice(-2));
                    const h = a._choices ? a._choices.getValue(!0) : a.value;
                    return {
                        month: u,
                        year: h
                    }
                }
                  , l = () => {
                    const {month: u, year: h} = o();
                    u && h && (r.value = `${h}-${u}-01`,
                    lu(r))
                }
                ;
                s.addEventListener("change", l),
                a.addEventListener("change", l),
                r.addEventListener("focusInvalid", () => {
                    const {month: u, year: h} = o()
                      , f = !u || h ? s : a;
                    f._choices ? f._choices.showDropdown() : f.focus()
                }
                )
            }
            )
        }
    }
    var _l = nu;
    function nu() {
        var i = [].slice.call(arguments)
          , t = !1;
        typeof i[0] == "boolean" && (t = i.shift());
        var e = i[0];
        if (Cl(e))
            throw new Error("extendee must be an object");
        for (var n = i.slice(1), r = n.length, s = 0; s < r; s++) {
            var a = n[s];
            for (var o in a)
                if (Object.prototype.hasOwnProperty.call(a, o)) {
                    var l = a[o];
                    if (t && Z1(l)) {
                        var u = Array.isArray(l) ? [] : {};
                        e[o] = nu(!0, Object.prototype.hasOwnProperty.call(e, o) && !Cl(e[o]) ? e[o] : u, l)
                    } else
                        e[o] = l
                }
        }
        return e
    }
    function Z1(i) {
        return Array.isArray(i) || {}.toString.call(i) == "[object Object]"
    }
    function Cl(i) {
        return !i || typeof i != "object" && typeof i != "function"
    }
    function X1(i) {
        return i && i.__esModule ? i.default : i
    }
    class Al {
        on(t, e) {
            return this._callbacks = this._callbacks || {},
            this._callbacks[t] || (this._callbacks[t] = []),
            this._callbacks[t].push(e),
            this
        }
        emit(t, ...e) {
            this._callbacks = this._callbacks || {};
            let n = this._callbacks[t];
            if (n)
                for (let r of n)
                    r.apply(this, e);
            return this.element && this.element.dispatchEvent(this.makeEvent("dropzone:" + t, {
                args: e
            })),
            this
        }
        makeEvent(t, e) {
            let n = {
                bubbles: !0,
                cancelable: !0,
                detail: e
            };
            if (typeof window.CustomEvent == "function")
                return new CustomEvent(t,n);
            var r = document.createEvent("CustomEvent");
            return r.initCustomEvent(t, n.bubbles, n.cancelable, n.detail),
            r
        }
        off(t, e) {
            if (!this._callbacks || arguments.length === 0)
                return this._callbacks = {},
                this;
            let n = this._callbacks[t];
            if (!n)
                return this;
            if (arguments.length === 1)
                return delete this._callbacks[t],
                this;
            for (let r = 0; r < n.length; r++)
                if (n[r] === e) {
                    n.splice(r, 1);
                    break
                }
            return this
        }
    }
    var iu = {};
    iu = `<div class="dz-preview dz-file-preview">
  <div class="dz-image"><img data-dz-thumbnail=""></div>
  <div class="dz-details">
    <div class="dz-size"><span data-dz-size=""></span></div>
    <div class="dz-filename"><span data-dz-name=""></span></div>
  </div>
  <div class="dz-progress">
    <span class="dz-upload" data-dz-uploadprogress=""></span>
  </div>
  <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
  <div class="dz-success-mark">
    <svg width="54" height="54" viewBox="0 0 54 54" fill="white" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2071 29.7929L14.2929 25.7071C14.6834 25.3166 15.3166 25.3166 15.7071 25.7071L21.2929 31.2929C21.6834 31.6834 22.3166 31.6834 22.7071 31.2929L38.2929 15.7071C38.6834 15.3166 39.3166 15.3166 39.7071 15.7071L43.7929 19.7929C44.1834 20.1834 44.1834 20.8166 43.7929 21.2071L22.7071 42.2929C22.3166 42.6834 21.6834 42.6834 21.2929 42.2929L10.2071 31.2071C9.81658 30.8166 9.81658 30.1834 10.2071 29.7929Z"></path>
    </svg>
  </div>
  <div class="dz-error-mark">
    <svg width="54" height="54" viewBox="0 0 54 54" fill="white" xmlns="http://www.w3.org/2000/svg">
      <path d="M26.2929 20.2929L19.2071 13.2071C18.8166 12.8166 18.1834 12.8166 17.7929 13.2071L13.2071 17.7929C12.8166 18.1834 12.8166 18.8166 13.2071 19.2071L20.2929 26.2929C20.6834 26.6834 20.6834 27.3166 20.2929 27.7071L13.2071 34.7929C12.8166 35.1834 12.8166 35.8166 13.2071 36.2071L17.7929 40.7929C18.1834 41.1834 18.8166 41.1834 19.2071 40.7929L26.2929 33.7071C26.6834 33.3166 27.3166 33.3166 27.7071 33.7071L34.7929 40.7929C35.1834 41.1834 35.8166 41.1834 36.2071 40.7929L40.7929 36.2071C41.1834 35.8166 41.1834 35.1834 40.7929 34.7929L33.7071 27.7071C33.3166 27.3166 33.3166 26.6834 33.7071 26.2929L40.7929 19.2071C41.1834 18.8166 41.1834 18.1834 40.7929 17.7929L36.2071 13.2071C35.8166 12.8166 35.1834 12.8166 34.7929 13.2071L27.7071 20.2929C27.3166 20.6834 26.6834 20.6834 26.2929 20.2929Z"></path>
    </svg>
  </div>
</div>
`;
    let Q1 = {
        url: null,
        method: "post",
        withCredentials: !1,
        timeout: null,
        parallelUploads: 2,
        uploadMultiple: !1,
        chunking: !1,
        forceChunking: !1,
        chunkSize: 2097152,
        parallelChunkUploads: !1,
        retryChunks: !1,
        retryChunksLimit: 3,
        maxFilesize: 256,
        paramName: "file",
        createImageThumbnails: !0,
        maxThumbnailFilesize: 10,
        thumbnailWidth: 120,
        thumbnailHeight: 120,
        thumbnailMethod: "crop",
        resizeWidth: null,
        resizeHeight: null,
        resizeMimeType: null,
        resizeQuality: .8,
        resizeMethod: "contain",
        filesizeBase: 1e3,
        maxFiles: null,
        headers: null,
        defaultHeaders: !0,
        clickable: !0,
        ignoreHiddenFiles: !0,
        acceptedFiles: null,
        acceptedMimeTypes: null,
        autoProcessQueue: !0,
        autoQueue: !0,
        addRemoveLinks: !1,
        previewsContainer: null,
        disablePreviews: !1,
        hiddenInputContainer: "body",
        capture: null,
        renameFilename: null,
        renameFile: null,
        forceFallback: !1,
        dictDefaultMessage: "Drop files here to upload",
        dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
        dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",
        dictFileTooBig: "File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",
        dictInvalidFileType: "You can't upload files of this type.",
        dictResponseError: "Server responded with {{statusCode}} code.",
        dictCancelUpload: "Cancel upload",
        dictUploadCanceled: "Upload canceled.",
        dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
        dictRemoveFile: "Remove file",
        dictRemoveFileConfirmation: null,
        dictMaxFilesExceeded: "You can not upload any more files.",
        dictFileSizeUnits: {
            tb: "TB",
            gb: "GB",
            mb: "MB",
            kb: "KB",
            b: "b"
        },
        init() {},
        params(i, t, e) {
            if (e)
                return {
                    dzuuid: e.file.upload.uuid,
                    dzchunkindex: e.index,
                    dztotalfilesize: e.file.size,
                    dzchunksize: this.options.chunkSize,
                    dztotalchunkcount: e.file.upload.totalChunkCount,
                    dzchunkbyteoffset: e.index * this.options.chunkSize
                }
        },
        accept(i, t) {
            return t()
        },
        chunksUploaded: function(i, t) {
            t()
        },
        binaryBody: !1,
        fallback() {
            let i;
            this.element.className = `${this.element.className} dz-browser-not-supported`;
            for (let e of this.element.getElementsByTagName("div"))
                if (/(^| )dz-message($| )/.test(e.className)) {
                    i = e,
                    e.className = "dz-message";
                    break
                }
            i || (i = L.createElement('<div class="dz-message"><span></span></div>'),
            this.element.appendChild(i));
            let t = i.getElementsByTagName("span")[0];
            return t && (t.textContent != null ? t.textContent = this.options.dictFallbackMessage : t.innerText != null && (t.innerText = this.options.dictFallbackMessage)),
            this.element.appendChild(this.getFallbackForm())
        },
        resize(i, t, e, n) {
            let r = {
                srcX: 0,
                srcY: 0,
                srcWidth: i.width,
                srcHeight: i.height
            }
              , s = i.width / i.height;
            t == null && e == null ? (t = r.srcWidth,
            e = r.srcHeight) : t == null ? t = e * s : e == null && (e = t / s),
            t = Math.min(t, r.srcWidth),
            e = Math.min(e, r.srcHeight);
            let a = t / e;
            if (r.srcWidth > t || r.srcHeight > e)
                if (n === "crop")
                    s > a ? (r.srcHeight = i.height,
                    r.srcWidth = r.srcHeight * a) : (r.srcWidth = i.width,
                    r.srcHeight = r.srcWidth / a);
                else if (n === "contain")
                    s > a ? e = t / s : t = e * s;
                else
                    throw new Error(`Unknown resizeMethod '${n}'`);
            return r.srcX = (i.width - r.srcWidth) / 2,
            r.srcY = (i.height - r.srcHeight) / 2,
            r.trgWidth = t,
            r.trgHeight = e,
            r
        },
        transformFile(i, t) {
            return (this.options.resizeWidth || this.options.resizeHeight) && i.type.match(/image.*/) ? this.resizeImage(i, this.options.resizeWidth, this.options.resizeHeight, this.options.resizeMethod, t) : t(i)
        },
        previewTemplate: X1(iu),
        drop(i) {
            return this.element.classList.remove("dz-drag-hover")
        },
        dragstart(i) {},
        dragend(i) {
            return this.element.classList.remove("dz-drag-hover")
        },
        dragenter(i) {
            return this.element.classList.add("dz-drag-hover")
        },
        dragover(i) {
            return this.element.classList.add("dz-drag-hover")
        },
        dragleave(i) {
            return this.element.classList.remove("dz-drag-hover")
        },
        paste(i) {},
        reset() {
            return this.element.classList.remove("dz-started")
        },
        addedfile(i) {
            if (this.element === this.previewsContainer && this.element.classList.add("dz-started"),
            this.previewsContainer && !this.options.disablePreviews) {
                i.previewElement = L.createElement(this.options.previewTemplate.trim()),
                i.previewTemplate = i.previewElement,
                this.previewsContainer.appendChild(i.previewElement);
                for (var t of i.previewElement.querySelectorAll("[data-dz-name]"))
                    t.textContent = i.name;
                for (t of i.previewElement.querySelectorAll("[data-dz-size]"))
                    t.innerHTML = this.filesize(i.size);
                this.options.addRemoveLinks && (i._removeLink = L.createElement(`<a class="dz-remove" href="javascript:undefined;" data-dz-remove>${this.options.dictRemoveFile}</a>`),
                i.previewElement.appendChild(i._removeLink));
                let e = n => (n.preventDefault(),
                n.stopPropagation(),
                i.status === L.UPLOADING ? L.confirm(this.options.dictCancelUploadConfirmation, () => this.removeFile(i)) : this.options.dictRemoveFileConfirmation ? L.confirm(this.options.dictRemoveFileConfirmation, () => this.removeFile(i)) : this.removeFile(i));
                for (let n of i.previewElement.querySelectorAll("[data-dz-remove]"))
                    n.addEventListener("click", e)
            }
        },
        removedfile(i) {
            return i.previewElement != null && i.previewElement.parentNode != null && i.previewElement.parentNode.removeChild(i.previewElement),
            this._updateMaxFilesReachedClass()
        },
        thumbnail(i, t) {
            if (i.previewElement) {
                i.previewElement.classList.remove("dz-file-preview");
                for (let e of i.previewElement.querySelectorAll("[data-dz-thumbnail]"))
                    e.alt = i.name,
                    e.src = t;
                return setTimeout( () => i.previewElement.classList.add("dz-image-preview"), 1)
            }
        },
        error(i, t) {
            if (i.previewElement) {
                i.previewElement.classList.add("dz-error"),
                typeof t != "string" && t.error && (t = t.error);
                for (let e of i.previewElement.querySelectorAll("[data-dz-errormessage]"))
                    e.textContent = t
            }
        },
        errormultiple() {},
        processing(i) {
            if (i.previewElement && (i.previewElement.classList.add("dz-processing"),
            i._removeLink))
                return i._removeLink.innerHTML = this.options.dictCancelUpload
        },
        processingmultiple() {},
        uploadprogress(i, t, e) {
            if (i.previewElement)
                for (let n of i.previewElement.querySelectorAll("[data-dz-uploadprogress]"))
                    n.nodeName === "PROGRESS" ? n.value = t : n.style.width = `${t}%`
        },
        totaluploadprogress() {},
        sending() {},
        sendingmultiple() {},
        success(i) {
            if (i.previewElement)
                return i.previewElement.classList.add("dz-success")
        },
        successmultiple() {},
        canceled(i) {
            return this.emit("error", i, this.options.dictUploadCanceled)
        },
        canceledmultiple() {},
        complete(i) {
            if (i._removeLink && (i._removeLink.innerHTML = this.options.dictRemoveFile),
            i.previewElement)
                return i.previewElement.classList.add("dz-complete")
        },
        completemultiple() {},
        maxfilesexceeded() {},
        maxfilesreached() {},
        queuecomplete() {},
        addedfiles() {}
    };
    var J1 = Q1;
    class L extends Al {
        static initClass() {
            this.prototype.Emitter = Al,
            this.prototype.events = ["drop", "dragstart", "dragend", "dragenter", "dragover", "dragleave", "addedfile", "addedfiles", "removedfile", "thumbnail", "error", "errormultiple", "processing", "processingmultiple", "uploadprogress", "totaluploadprogress", "sending", "sendingmultiple", "success", "successmultiple", "canceled", "canceledmultiple", "complete", "completemultiple", "reset", "maxfilesexceeded", "maxfilesreached", "queuecomplete"],
            this.prototype._thumbnailQueue = [],
            this.prototype._processingThumbnail = !1
        }
        getAcceptedFiles() {
            return this.files.filter(t => t.accepted).map(t => t)
        }
        getRejectedFiles() {
            return this.files.filter(t => !t.accepted).map(t => t)
        }
        getFilesWithStatus(t) {
            return this.files.filter(e => e.status === t).map(e => e)
        }
        getQueuedFiles() {
            return this.getFilesWithStatus(L.QUEUED)
        }
        getUploadingFiles() {
            return this.getFilesWithStatus(L.UPLOADING)
        }
        getAddedFiles() {
            return this.getFilesWithStatus(L.ADDED)
        }
        getActiveFiles() {
            return this.files.filter(t => t.status === L.UPLOADING || t.status === L.QUEUED).map(t => t)
        }
        init() {
            if (this.element.tagName === "form" && this.element.setAttribute("enctype", "multipart/form-data"),
            this.element.classList.contains("dropzone") && !this.element.querySelector(".dz-message") && this.element.appendChild(L.createElement(`<div class="dz-default dz-message"><button class="dz-button" type="button">${this.options.dictDefaultMessage}</button></div>`)),
            this.clickableElements.length) {
                let n = () => {
                    this.hiddenFileInput && this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput),
                    this.hiddenFileInput = document.createElement("input"),
                    this.hiddenFileInput.setAttribute("type", "file"),
                    (this.options.maxFiles === null || this.options.maxFiles > 1) && this.hiddenFileInput.setAttribute("multiple", "multiple"),
                    this.hiddenFileInput.className = "dz-hidden-input",
                    this.options.acceptedFiles !== null && this.hiddenFileInput.setAttribute("accept", this.options.acceptedFiles),
                    this.options.capture !== null && this.hiddenFileInput.setAttribute("capture", this.options.capture),
                    this.hiddenFileInput.setAttribute("tabindex", "-1"),
                    this.hiddenFileInput.style.visibility = "hidden",
                    this.hiddenFileInput.style.position = "absolute",
                    this.hiddenFileInput.style.top = "0",
                    this.hiddenFileInput.style.left = "0",
                    this.hiddenFileInput.style.height = "0",
                    this.hiddenFileInput.style.width = "0",
                    L.getElement(this.options.hiddenInputContainer, "hiddenInputContainer").appendChild(this.hiddenFileInput),
                    this.hiddenFileInput.addEventListener("change", () => {
                        let {files: r} = this.hiddenFileInput;
                        if (r.length)
                            for (let s of r)
                                this.addFile(s);
                        this.emit("addedfiles", r),
                        n()
                    }
                    )
                }
                ;
                n()
            }
            this.URL = window.URL !== null ? window.URL : window.webkitURL;
            for (let n of this.events)
                this.on(n, this.options[n]);
            this.on("uploadprogress", () => this.updateTotalUploadProgress()),
            this.on("removedfile", () => this.updateTotalUploadProgress()),
            this.on("canceled", n => this.emit("complete", n)),
            this.on("complete", n => {
                if (this.getAddedFiles().length === 0 && this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0)
                    return setTimeout( () => this.emit("queuecomplete"), 0)
            }
            );
            const t = function(n) {
                if (n.dataTransfer.types) {
                    for (var r = 0; r < n.dataTransfer.types.length; r++)
                        if (n.dataTransfer.types[r] === "Files")
                            return !0
                }
                return !1
            };
            let e = function(n) {
                if (t(n))
                    return n.stopPropagation(),
                    n.preventDefault ? n.preventDefault() : n.returnValue = !1
            };
            return this.listeners = [{
                element: this.element,
                events: {
                    dragstart: n => this.emit("dragstart", n),
                    dragenter: n => (e(n),
                    this.emit("dragenter", n)),
                    dragover: n => {
                        let r;
                        try {
                            r = n.dataTransfer.effectAllowed
                        } catch {}
                        return n.dataTransfer.dropEffect = r === "move" || r === "linkMove" ? "move" : "copy",
                        e(n),
                        this.emit("dragover", n)
                    }
                    ,
                    dragleave: n => this.emit("dragleave", n),
                    drop: n => (e(n),
                    this.drop(n)),
                    dragend: n => this.emit("dragend", n)
                }
            }],
            this.clickableElements.forEach(n => this.listeners.push({
                element: n,
                events: {
                    click: r => ((n !== this.element || r.target === this.element || L.elementInside(r.target, this.element.querySelector(".dz-message"))) && this.hiddenFileInput.click(),
                    !0)
                }
            })),
            this.enable(),
            this.options.init.call(this)
        }
        destroy() {
            return this.disable(),
            this.removeAllFiles(!0),
            this.hiddenFileInput != null && this.hiddenFileInput.parentNode && (this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput),
            this.hiddenFileInput = null),
            delete this.element.dropzone,
            L.instances.splice(L.instances.indexOf(this), 1)
        }
        updateTotalUploadProgress() {
            let t, e = 0, n = 0;
            if (this.getActiveFiles().length) {
                for (let s of this.getActiveFiles())
                    e += s.upload.bytesSent,
                    n += s.upload.total;
                t = 100 * e / n
            } else
                t = 100;
            return this.emit("totaluploadprogress", t, n, e)
        }
        _getParamName(t) {
            return typeof this.options.paramName == "function" ? this.options.paramName(t) : `${this.options.paramName}${this.options.uploadMultiple ? `[${t}]` : ""}`
        }
        _renameFile(t) {
            return typeof this.options.renameFile != "function" ? t.name : this.options.renameFile(t)
        }
        getFallbackForm() {
            let t, e;
            if (t = this.getExistingFallback())
                return t;
            let n = '<div class="dz-fallback">';
            this.options.dictFallbackText && (n += `<p>${this.options.dictFallbackText}</p>`),
            n += `<input type="file" name="${this._getParamName(0)}" ${this.options.uploadMultiple ? 'multiple="multiple"' : void 0} /><input type="submit" value="Upload!"></div>`;
            let r = L.createElement(n);
            return this.element.tagName !== "FORM" ? (e = L.createElement(`<form action="${this.options.url}" enctype="multipart/form-data" method="${this.options.method}"></form>`),
            e.appendChild(r)) : (this.element.setAttribute("enctype", "multipart/form-data"),
            this.element.setAttribute("method", this.options.method)),
            e ?? r
        }
        getExistingFallback() {
            let t = function(n) {
                for (let r of n)
                    if (/(^| )fallback($| )/.test(r.className))
                        return r
            };
            for (let n of ["div", "form"]) {
                var e;
                if (e = t(this.element.getElementsByTagName(n)))
                    return e
            }
        }
        setupEventListeners() {
            return this.listeners.map(t => ( () => {
                let e = [];
                for (let n in t.events) {
                    let r = t.events[n];
                    e.push(t.element.addEventListener(n, r, !1))
                }
                return e
            }
            )())
        }
        removeEventListeners() {
            return this.listeners.map(t => ( () => {
                let e = [];
                for (let n in t.events) {
                    let r = t.events[n];
                    e.push(t.element.removeEventListener(n, r, !1))
                }
                return e
            }
            )())
        }
        disable() {
            return this.clickableElements.forEach(t => t.classList.remove("dz-clickable")),
            this.removeEventListeners(),
            this.disabled = !0,
            this.files.map(t => this.cancelUpload(t))
        }
        enable() {
            return delete this.disabled,
            this.clickableElements.forEach(t => t.classList.add("dz-clickable")),
            this.setupEventListeners()
        }
        filesize(t) {
            let e = 0
              , n = "b";
            if (t > 0) {
                let r = ["tb", "gb", "mb", "kb", "b"];
                for (let s = 0; s < r.length; s++) {
                    let a = r[s]
                      , o = Math.pow(this.options.filesizeBase, 4 - s) / 10;
                    if (t >= o) {
                        e = t / Math.pow(this.options.filesizeBase, 4 - s),
                        n = a;
                        break
                    }
                }
                e = Math.round(10 * e) / 10
            }
            return `<strong>${e}</strong> ${this.options.dictFileSizeUnits[n]}`
        }
        _updateMaxFilesReachedClass() {
            return this.options.maxFiles != null && this.getAcceptedFiles().length >= this.options.maxFiles ? (this.getAcceptedFiles().length === this.options.maxFiles && this.emit("maxfilesreached", this.files),
            this.element.classList.add("dz-max-files-reached")) : this.element.classList.remove("dz-max-files-reached")
        }
        drop(t) {
            if (!t.dataTransfer)
                return;
            this.emit("drop", t);
            let e = [];
            for (let n = 0; n < t.dataTransfer.files.length; n++)
                e[n] = t.dataTransfer.files[n];
            if (e.length) {
                let {items: n} = t.dataTransfer;
                n && n.length && n[0].webkitGetAsEntry != null ? this._addFilesFromItems(n) : this.handleFiles(e)
            }
            this.emit("addedfiles", e)
        }
        paste(t) {
            if (rb(t != null ? t.clipboardData : void 0, n => n.items) == null)
                return;
            this.emit("paste", t);
            let {items: e} = t.clipboardData;
            if (e.length)
                return this._addFilesFromItems(e)
        }
        handleFiles(t) {
            for (let e of t)
                this.addFile(e)
        }
        _addFilesFromItems(t) {
            return ( () => {
                let e = [];
                for (let r of t) {
                    var n;
                    r.webkitGetAsEntry != null && (n = r.webkitGetAsEntry()) ? n.isFile ? e.push(this.addFile(r.getAsFile())) : n.isDirectory ? e.push(this._addFilesFromDirectory(n, n.name)) : e.push(void 0) : r.getAsFile != null && (r.kind == null || r.kind === "file") ? e.push(this.addFile(r.getAsFile())) : e.push(void 0)
                }
                return e
            }
            )()
        }
        _addFilesFromDirectory(t, e) {
            let n = t.createReader()
              , r = a => sb(console, "log", o => o.log(a));
            var s = () => n.readEntries(a => {
                if (a.length > 0) {
                    for (let o of a)
                        o.isFile ? o.file(l => {
                            if (!(this.options.ignoreHiddenFiles && l.name.substring(0, 1) === "."))
                                return l.fullPath = `${e}/${l.name}`,
                                this.addFile(l)
                        }
                        ) : o.isDirectory && this._addFilesFromDirectory(o, `${e}/${o.name}`);
                    s()
                }
                return null
            }
            , r);
            return s()
        }
        accept(t, e) {
            this.options.maxFilesize && t.size > this.options.maxFilesize * 1048576 ? e(this.options.dictFileTooBig.replace("{{filesize}}", Math.round(t.size / 1024 / 10.24) / 100).replace("{{maxFilesize}}", this.options.maxFilesize)) : L.isValidFile(t, this.options.acceptedFiles) ? this.options.maxFiles != null && this.getAcceptedFiles().length >= this.options.maxFiles ? (e(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}", this.options.maxFiles)),
            this.emit("maxfilesexceeded", t)) : this.options.accept.call(this, t, e) : e(this.options.dictInvalidFileType)
        }
        addFile(t) {
            t.upload = {
                uuid: L.uuidv4(),
                progress: 0,
                total: t.size,
                bytesSent: 0,
                filename: this._renameFile(t)
            },
            this.files.push(t),
            t.status = L.ADDED,
            this.emit("addedfile", t),
            this._enqueueThumbnail(t),
            this.accept(t, e => {
                e ? (t.accepted = !1,
                this._errorProcessing([t], e)) : (t.accepted = !0,
                this.options.autoQueue && this.enqueueFile(t)),
                this._updateMaxFilesReachedClass()
            }
            )
        }
        enqueueFiles(t) {
            for (let e of t)
                this.enqueueFile(e);
            return null
        }
        enqueueFile(t) {
            if (t.status === L.ADDED && t.accepted === !0) {
                if (t.status = L.QUEUED,
                this.options.autoProcessQueue)
                    return setTimeout( () => this.processQueue(), 0)
            } else
                throw new Error("This file can't be queued because it has already been processed or was rejected.")
        }
        _enqueueThumbnail(t) {
            if (this.options.createImageThumbnails && t.type.match(/image.*/) && t.size <= this.options.maxThumbnailFilesize * 1048576)
                return this._thumbnailQueue.push(t),
                setTimeout( () => this._processThumbnailQueue(), 0)
        }
        _processThumbnailQueue() {
            if (this._processingThumbnail || this._thumbnailQueue.length === 0)
                return;
            this._processingThumbnail = !0;
            let t = this._thumbnailQueue.shift();
            return this.createThumbnail(t, this.options.thumbnailWidth, this.options.thumbnailHeight, this.options.thumbnailMethod, !0, e => (this.emit("thumbnail", t, e),
            this._processingThumbnail = !1,
            this._processThumbnailQueue()))
        }
        removeFile(t) {
            if (t.status === L.UPLOADING && this.cancelUpload(t),
            this.files = eb(this.files, t),
            this.emit("removedfile", t),
            this.files.length === 0)
                return this.emit("reset")
        }
        removeAllFiles(t) {
            t == null && (t = !1);
            for (let e of this.files.slice())
                (e.status !== L.UPLOADING || t) && this.removeFile(e);
            return null
        }
        resizeImage(t, e, n, r, s) {
            return this.createThumbnail(t, e, n, r, !0, (a, o) => {
                if (o == null)
                    return s(t);
                {
                    let {resizeMimeType: l} = this.options;
                    l == null && (l = t.type);
                    let u = o.toDataURL(l, this.options.resizeQuality);
                    return (l === "image/jpeg" || l === "image/jpg") && (u = ru.restore(t.dataURL, u)),
                    s(L.dataURItoBlob(u))
                }
            }
            )
        }
        createThumbnail(t, e, n, r, s, a) {
            let o = new FileReader;
            o.onload = () => {
                if (t.dataURL = o.result,
                t.type === "image/svg+xml") {
                    a != null && a(o.result);
                    return
                }
                this.createThumbnailFromUrl(t, e, n, r, s, a)
            }
            ,
            o.readAsDataURL(t)
        }
        displayExistingFile(t, e, n, r, s=!0) {
            if (this.emit("addedfile", t),
            this.emit("complete", t),
            !s)
                this.emit("thumbnail", t, e),
                n && n();
            else {
                let a = o => {
                    this.emit("thumbnail", t, o),
                    n && n()
                }
                ;
                t.dataURL = e,
                this.createThumbnailFromUrl(t, this.options.thumbnailWidth, this.options.thumbnailHeight, this.options.thumbnailMethod, this.options.fixOrientation, a, r)
            }
        }
        createThumbnailFromUrl(t, e, n, r, s, a, o) {
            let l = document.createElement("img");
            return o && (l.crossOrigin = o),
            s = getComputedStyle(document.body).imageOrientation == "from-image" ? !1 : s,
            l.onload = () => {
                let u = h => h(1);
                return typeof EXIF < "u" && EXIF !== null && s && (u = h => EXIF.getData(l, function() {
                    return h(EXIF.getTag(this, "Orientation"))
                })),
                u(h => {
                    t.width = l.width,
                    t.height = l.height;
                    let f = this.options.resize.call(this, t, e, n, r)
                      , d = document.createElement("canvas")
                      , g = d.getContext("2d");
                    switch (d.width = f.trgWidth,
                    d.height = f.trgHeight,
                    h > 4 && (d.width = f.trgHeight,
                    d.height = f.trgWidth),
                    h) {
                    case 2:
                        g.translate(d.width, 0),
                        g.scale(-1, 1);
                        break;
                    case 3:
                        g.translate(d.width, d.height),
                        g.rotate(Math.PI);
                        break;
                    case 4:
                        g.translate(0, d.height),
                        g.scale(1, -1);
                        break;
                    case 5:
                        g.rotate(.5 * Math.PI),
                        g.scale(1, -1);
                        break;
                    case 6:
                        g.rotate(.5 * Math.PI),
                        g.translate(0, -d.width);
                        break;
                    case 7:
                        g.rotate(.5 * Math.PI),
                        g.translate(d.height, -d.width),
                        g.scale(-1, 1);
                        break;
                    case 8:
                        g.rotate(-.5 * Math.PI),
                        g.translate(-d.height, 0);
                        break
                    }
                    ib(g, l, f.srcX != null ? f.srcX : 0, f.srcY != null ? f.srcY : 0, f.srcWidth, f.srcHeight, f.trgX != null ? f.trgX : 0, f.trgY != null ? f.trgY : 0, f.trgWidth, f.trgHeight);
                    let b = d.toDataURL("image/png");
                    if (a != null)
                        return a(b, d)
                }
                )
            }
            ,
            a != null && (l.onerror = a),
            l.src = t.dataURL
        }
        processQueue() {
            let {parallelUploads: t} = this.options
              , e = this.getUploadingFiles().length
              , n = e;
            if (e >= t)
                return;
            let r = this.getQueuedFiles();
            if (r.length > 0) {
                if (this.options.uploadMultiple)
                    return this.processFiles(r.slice(0, t - e));
                for (; n < t; ) {
                    if (!r.length)
                        return;
                    this.processFile(r.shift()),
                    n++
                }
            }
        }
        processFile(t) {
            return this.processFiles([t])
        }
        processFiles(t) {
            for (let e of t)
                e.processing = !0,
                e.status = L.UPLOADING,
                this.emit("processing", e);
            return this.options.uploadMultiple && this.emit("processingmultiple", t),
            this.uploadFiles(t)
        }
        _getFilesWithXhr(t) {
            return this.files.filter(e => e.xhr === t).map(e => e)
        }
        cancelUpload(t) {
            if (t.status === L.UPLOADING) {
                let e = this._getFilesWithXhr(t.xhr);
                for (let n of e)
                    n.status = L.CANCELED;
                typeof t.xhr < "u" && t.xhr.abort();
                for (let n of e)
                    this.emit("canceled", n);
                this.options.uploadMultiple && this.emit("canceledmultiple", e)
            } else
                (t.status === L.ADDED || t.status === L.QUEUED) && (t.status = L.CANCELED,
                this.emit("canceled", t),
                this.options.uploadMultiple && this.emit("canceledmultiple", [t]));
            if (this.options.autoProcessQueue)
                return this.processQueue()
        }
        resolveOption(t, ...e) {
            return typeof t == "function" ? t.apply(this, e) : t
        }
        uploadFile(t) {
            return this.uploadFiles([t])
        }
        uploadFiles(t) {
            this._transformFiles(t, e => {
                if (this.options.chunking) {
                    let n = e[0];
                    t[0].upload.chunked = this.options.chunking && (this.options.forceChunking || n.size > this.options.chunkSize),
                    t[0].upload.totalChunkCount = Math.ceil(n.size / this.options.chunkSize)
                }
                if (t[0].upload.chunked) {
                    let n = t[0]
                      , r = e[0];
                    n.upload.chunks = [];
                    let s = () => {
                        let a = 0;
                        for (; n.upload.chunks[a] !== void 0; )
                            a++;
                        if (a >= n.upload.totalChunkCount)
                            return;
                        let o = a * this.options.chunkSize
                          , l = Math.min(o + this.options.chunkSize, r.size)
                          , u = {
                            name: this._getParamName(0),
                            data: r.webkitSlice ? r.webkitSlice(o, l) : r.slice(o, l),
                            filename: n.upload.filename,
                            chunkIndex: a
                        };
                        n.upload.chunks[a] = {
                            file: n,
                            index: a,
                            dataBlock: u,
                            status: L.UPLOADING,
                            progress: 0,
                            retries: 0
                        },
                        this._uploadData(t, [u])
                    }
                    ;
                    if (n.upload.finishedChunkUpload = (a, o) => {
                        let l = !0;
                        a.status = L.SUCCESS,
                        a.dataBlock = null,
                        a.response = a.xhr.responseText,
                        a.responseHeaders = a.xhr.getAllResponseHeaders(),
                        a.xhr = null;
                        for (let u = 0; u < n.upload.totalChunkCount; u++) {
                            if (n.upload.chunks[u] === void 0)
                                return s();
                            n.upload.chunks[u].status !== L.SUCCESS && (l = !1)
                        }
                        l && this.options.chunksUploaded(n, () => {
                            this._finished(t, o, null)
                        }
                        )
                    }
                    ,
                    this.options.parallelChunkUploads)
                        for (let a = 0; a < n.upload.totalChunkCount; a++)
                            s();
                    else
                        s()
                } else {
                    let n = [];
                    for (let r = 0; r < t.length; r++)
                        n[r] = {
                            name: this._getParamName(r),
                            data: e[r],
                            filename: t[r].upload.filename
                        };
                    this._uploadData(t, n)
                }
            }
            )
        }
        _getChunk(t, e) {
            for (let n = 0; n < t.upload.totalChunkCount; n++)
                if (t.upload.chunks[n] !== void 0 && t.upload.chunks[n].xhr === e)
                    return t.upload.chunks[n]
        }
        _uploadData(t, e) {
            let n = new XMLHttpRequest;
            for (let u of t)
                u.xhr = n;
            t[0].upload.chunked && (t[0].upload.chunks[e[0].chunkIndex].xhr = n);
            let r = this.resolveOption(this.options.method, t, e)
              , s = this.resolveOption(this.options.url, t, e);
            n.open(r, s, !0),
            this.resolveOption(this.options.timeout, t) && (n.timeout = this.resolveOption(this.options.timeout, t)),
            n.withCredentials = !!this.options.withCredentials,
            n.onload = u => {
                this._finishedUploading(t, n, u)
            }
            ,
            n.ontimeout = () => {
                this._handleUploadError(t, n, `Request timedout after ${this.options.timeout / 1e3} seconds`)
            }
            ,
            n.onerror = () => {
                this._handleUploadError(t, n)
            }
            ;
            let o = n.upload != null ? n.upload : n;
            o.onprogress = u => this._updateFilesUploadProgress(t, n, u);
            let l = this.options.defaultHeaders ? {
                Accept: "application/json",
                "Cache-Control": "no-cache",
                "X-Requested-With": "XMLHttpRequest"
            } : {};
            this.options.binaryBody && (l["Content-Type"] = t[0].type),
            this.options.headers && _l(l, this.options.headers);
            for (let u in l) {
                let h = l[u];
                h && n.setRequestHeader(u, h)
            }
            if (this.options.binaryBody) {
                for (let u of t)
                    this.emit("sending", u, n);
                this.options.uploadMultiple && this.emit("sendingmultiple", t, n),
                this.submitRequest(n, null, t)
            } else {
                let u = new FormData;
                if (this.options.params) {
                    let h = this.options.params;
                    typeof h == "function" && (h = h.call(this, t, n, t[0].upload.chunked ? this._getChunk(t[0], n) : null));
                    for (let f in h) {
                        let d = h[f];
                        if (Array.isArray(d))
                            for (let g = 0; g < d.length; g++)
                                u.append(f, d[g]);
                        else
                            u.append(f, d)
                    }
                }
                for (let h of t)
                    this.emit("sending", h, n, u);
                this.options.uploadMultiple && this.emit("sendingmultiple", t, n, u),
                this._addFormElementData(u);
                for (let h = 0; h < e.length; h++) {
                    let f = e[h];
                    u.append(f.name, f.data, f.filename)
                }
                this.submitRequest(n, u, t)
            }
        }
        _transformFiles(t, e) {
            let n = []
              , r = 0;
            for (let s = 0; s < t.length; s++)
                this.options.transformFile.call(this, t[s], a => {
                    n[s] = a,
                    ++r === t.length && e(n)
                }
                )
        }
        _addFormElementData(t) {
            if (this.element.tagName === "FORM")
                for (let e of this.element.querySelectorAll("input, textarea, select, button")) {
                    let n = e.getAttribute("name")
                      , r = e.getAttribute("type");
                    if (r && (r = r.toLowerCase()),
                    !(typeof n > "u" || n === null))
                        if (e.tagName === "SELECT" && e.hasAttribute("multiple"))
                            for (let s of e.options)
                                s.selected && t.append(n, s.value);
                        else
                            (!r || r !== "checkbox" && r !== "radio" || e.checked) && t.append(n, e.value)
                }
        }
        _updateFilesUploadProgress(t, e, n) {
            if (t[0].upload.chunked) {
                let r = t[0]
                  , s = this._getChunk(r, e);
                n ? (s.progress = 100 * n.loaded / n.total,
                s.total = n.total,
                s.bytesSent = n.loaded) : (s.progress = 100,
                s.bytesSent = s.total),
                r.upload.progress = 0,
                r.upload.total = 0,
                r.upload.bytesSent = 0;
                for (let a = 0; a < r.upload.totalChunkCount; a++)
                    r.upload.chunks[a] && typeof r.upload.chunks[a].progress < "u" && (r.upload.progress += r.upload.chunks[a].progress,
                    r.upload.total += r.upload.chunks[a].total,
                    r.upload.bytesSent += r.upload.chunks[a].bytesSent);
                r.upload.progress = r.upload.progress / r.upload.totalChunkCount,
                this.emit("uploadprogress", r, r.upload.progress, r.upload.bytesSent)
            } else
                for (let r of t)
                    r.upload.total && r.upload.bytesSent && r.upload.bytesSent == r.upload.total || (n ? (r.upload.progress = 100 * n.loaded / n.total,
                    r.upload.total = n.total,
                    r.upload.bytesSent = n.loaded) : (r.upload.progress = 100,
                    r.upload.bytesSent = r.upload.total),
                    this.emit("uploadprogress", r, r.upload.progress, r.upload.bytesSent))
        }
        _finishedUploading(t, e, n) {
            let r;
            if (t[0].status !== L.CANCELED && e.readyState === 4) {
                if (e.responseType !== "arraybuffer" && e.responseType !== "blob" && (r = e.responseText,
                e.getResponseHeader("content-type") && ~e.getResponseHeader("content-type").indexOf("application/json")))
                    try {
                        r = JSON.parse(r)
                    } catch (s) {
                        n = s,
                        r = "Invalid JSON response from server."
                    }
                this._updateFilesUploadProgress(t, e),
                200 <= e.status && e.status < 300 ? t[0].upload.chunked ? t[0].upload.finishedChunkUpload(this._getChunk(t[0], e), r) : this._finished(t, r, n) : this._handleUploadError(t, e, r)
            }
        }
        _handleUploadError(t, e, n) {
            if (t[0].status !== L.CANCELED) {
                if (t[0].upload.chunked && this.options.retryChunks) {
                    let r = this._getChunk(t[0], e);
                    if (r.retries++ < this.options.retryChunksLimit) {
                        this._uploadData(t, [r.dataBlock]);
                        return
                    } else
                        console.warn("Retried this chunk too often. Giving up.")
                }
                this._errorProcessing(t, n || this.options.dictResponseError.replace("{{statusCode}}", e.status), e)
            }
        }
        submitRequest(t, e, n) {
            if (t.readyState != 1) {
                console.warn("Cannot send this request because the XMLHttpRequest.readyState is not OPENED.");
                return
            }
            if (this.options.binaryBody)
                if (n[0].upload.chunked) {
                    const r = this._getChunk(n[0], t);
                    t.send(r.dataBlock.data)
                } else
                    t.send(n[0]);
            else
                t.send(e)
        }
        _finished(t, e, n) {
            for (let r of t)
                r.status = L.SUCCESS,
                this.emit("success", r, e, n),
                this.emit("complete", r);
            if (this.options.uploadMultiple && (this.emit("successmultiple", t, e, n),
            this.emit("completemultiple", t)),
            this.options.autoProcessQueue)
                return this.processQueue()
        }
        _errorProcessing(t, e, n) {
            for (let r of t)
                r.status = L.ERROR,
                this.emit("error", r, e, n),
                this.emit("complete", r);
            if (this.options.uploadMultiple && (this.emit("errormultiple", t, e, n),
            this.emit("completemultiple", t)),
            this.options.autoProcessQueue)
                return this.processQueue()
        }
        static uuidv4() {
            return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(t) {
                let e = Math.random() * 16 | 0;
                return (t === "x" ? e : e & 3 | 8).toString(16)
            })
        }
        constructor(t, e) {
            super();
            let n, r;
            if (this.element = t,
            this.clickableElements = [],
            this.listeners = [],
            this.files = [],
            typeof this.element == "string" && (this.element = document.querySelector(this.element)),
            !this.element || this.element.nodeType == null)
                throw new Error("Invalid dropzone element.");
            if (this.element.dropzone)
                throw new Error("Dropzone already attached.");
            L.instances.push(this),
            this.element.dropzone = this;
            let s = (r = L.optionsForElement(this.element)) != null ? r : {};
            if (this.options = _l(!0, {}, J1, s, e ?? {}),
            this.options.previewTemplate = this.options.previewTemplate.replace(/\n*/g, ""),
            this.options.forceFallback || !L.isBrowserSupported())
                return this.options.fallback.call(this);
            if (this.options.url == null && (this.options.url = this.element.getAttribute("action")),
            !this.options.url)
                throw new Error("No URL provided.");
            if (this.options.acceptedFiles && this.options.acceptedMimeTypes)
                throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");
            if (this.options.uploadMultiple && this.options.chunking)
                throw new Error("You cannot set both: uploadMultiple and chunking.");
            if (this.options.binaryBody && this.options.uploadMultiple)
                throw new Error("You cannot set both: binaryBody and uploadMultiple.");
            this.options.acceptedMimeTypes && (this.options.acceptedFiles = this.options.acceptedMimeTypes,
            delete this.options.acceptedMimeTypes),
            this.options.renameFilename != null && (this.options.renameFile = a => this.options.renameFilename.call(this, a.name, a)),
            typeof this.options.method == "string" && (this.options.method = this.options.method.toUpperCase()),
            (n = this.getExistingFallback()) && n.parentNode && n.parentNode.removeChild(n),
            this.options.previewsContainer !== !1 && (this.options.previewsContainer ? this.previewsContainer = L.getElement(this.options.previewsContainer, "previewsContainer") : this.previewsContainer = this.element),
            this.options.clickable && (this.options.clickable === !0 ? this.clickableElements = [this.element] : this.clickableElements = L.getElements(this.options.clickable, "clickable")),
            this.init()
        }
    }
    L.initClass();
    L.options = {};
    L.optionsForElement = function(i) {
        if (i.getAttribute("id"))
            return L.options[tb(i.getAttribute("id"))]
    }
    ;
    L.instances = [];
    L.forElement = function(i) {
        if (typeof i == "string" && (i = document.querySelector(i)),
        (i != null ? i.dropzone : void 0) == null)
            throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");
        return i.dropzone
    }
    ;
    L.discover = function() {
        let i;
        if (document.querySelectorAll)
            i = document.querySelectorAll(".dropzone");
        else {
            i = [];
            let t = e => ( () => {
                let n = [];
                for (let r of e)
                    /(^| )dropzone($| )/.test(r.className) ? n.push(i.push(r)) : n.push(void 0);
                return n
            }
            )();
            t(document.getElementsByTagName("div")),
            t(document.getElementsByTagName("form"))
        }
        return ( () => {
            let t = [];
            for (let e of i)
                L.optionsForElement(e) !== !1 ? t.push(new L(e)) : t.push(void 0);
            return t
        }
        )()
    }
    ;
    L.blockedBrowsers = [/opera.*(Macintosh|Windows Phone).*version\/12/i];
    L.isBrowserSupported = function() {
        let i = !0;
        if (window.File && window.FileReader && window.FileList && window.Blob && window.FormData && document.querySelector)
            if (!("classList"in document.createElement("a")))
                i = !1;
            else {
                L.blacklistedBrowsers !== void 0 && (L.blockedBrowsers = L.blacklistedBrowsers);
                for (let t of L.blockedBrowsers)
                    if (t.test(navigator.userAgent)) {
                        i = !1;
                        continue
                    }
            }
        else
            i = !1;
        return i
    }
    ;
    L.dataURItoBlob = function(i) {
        let t = atob(i.split(",")[1])
          , e = i.split(",")[0].split(":")[1].split(";")[0]
          , n = new ArrayBuffer(t.length)
          , r = new Uint8Array(n);
        for (let s = 0, a = t.length, o = 0 <= a; o ? s <= a : s >= a; o ? s++ : s--)
            r[s] = t.charCodeAt(s);
        return new Blob([n],{
            type: e
        })
    }
    ;
    const eb = (i, t) => i.filter(e => e !== t).map(e => e)
      , tb = i => i.replace(/[\-_](\w)/g, t => t.charAt(1).toUpperCase());
    L.createElement = function(i) {
        let t = document.createElement("div");
        return t.innerHTML = i,
        t.childNodes[0]
    }
    ;
    L.elementInside = function(i, t) {
        if (i === t)
            return !0;
        for (; i = i.parentNode; )
            if (i === t)
                return !0;
        return !1
    }
    ;
    L.getElement = function(i, t) {
        let e;
        if (typeof i == "string" ? e = document.querySelector(i) : i.nodeType != null && (e = i),
        e == null)
            throw new Error(`Invalid \`${t}\` option provided. Please provide a CSS selector or a plain HTML element.`);
        return e
    }
    ;
    L.getElements = function(i, t) {
        let e, n;
        if (i instanceof Array) {
            n = [];
            try {
                for (e of i)
                    n.push(this.getElement(e, t))
            } catch {
                n = null
            }
        } else if (typeof i == "string") {
            n = [];
            for (e of document.querySelectorAll(i))
                n.push(e)
        } else
            i.nodeType != null && (n = [i]);
        if (n == null || !n.length)
            throw new Error(`Invalid \`${t}\` option provided. Please provide a CSS selector, a plain HTML element or a list of those.`);
        return n
    }
    ;
    L.confirm = function(i, t, e) {
        if (window.confirm(i))
            return t();
        if (e != null)
            return e()
    }
    ;
    L.isValidFile = function(i, t) {
        if (!t)
            return !0;
        t = t.split(",");
        let e = i.type
          , n = e.replace(/\/.*$/, "");
        for (let r of t)
            if (r = r.trim(),
            r.charAt(0) === ".") {
                if (i.name.toLowerCase().indexOf(r.toLowerCase(), i.name.length - r.length) !== -1)
                    return !0
            } else if (/\/\*$/.test(r)) {
                if (n === r.replace(/\/.*$/, ""))
                    return !0
            } else if (e === r)
                return !0;
        return !1
    }
    ;
    typeof jQuery < "u" && jQuery !== null && (jQuery.fn.dropzone = function(i) {
        return this.each(function() {
            return new L(this,i)
        })
    }
    );
    L.ADDED = "added";
    L.QUEUED = "queued";
    L.ACCEPTED = L.QUEUED;
    L.UPLOADING = "uploading";
    L.PROCESSING = L.UPLOADING;
    L.CANCELED = "canceled";
    L.ERROR = "error";
    L.SUCCESS = "success";
    let nb = function(i) {
        i.naturalWidth;
        let t = i.naturalHeight
          , e = document.createElement("canvas");
        e.width = 1,
        e.height = t;
        let n = e.getContext("2d");
        n.drawImage(i, 0, 0);
        let {data: r} = n.getImageData(1, 0, 1, t)
          , s = 0
          , a = t
          , o = t;
        for (; o > s; )
            r[(o - 1) * 4 + 3] === 0 ? a = o : s = o,
            o = a + s >> 1;
        let l = o / t;
        return l === 0 ? 1 : l
    };
    var ib = function(i, t, e, n, r, s, a, o, l, u) {
        let h = nb(t);
        return i.drawImage(t, e, n, r, s, a, o, l, u / h)
    };
    class ru {
        static initClass() {
            this.KEY_STR = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="
        }
        static encode64(t) {
            let e = "", n, r, s = "", a, o, l, u = "", h = 0;
            for (; n = t[h++],
            r = t[h++],
            s = t[h++],
            a = n >> 2,
            o = (n & 3) << 4 | r >> 4,
            l = (r & 15) << 2 | s >> 6,
            u = s & 63,
            isNaN(r) ? l = u = 64 : isNaN(s) && (u = 64),
            e = e + this.KEY_STR.charAt(a) + this.KEY_STR.charAt(o) + this.KEY_STR.charAt(l) + this.KEY_STR.charAt(u),
            n = r = s = "",
            a = o = l = u = "",
            h < t.length; )
                ;
            return e
        }
        static restore(t, e) {
            if (!t.match("data:image/jpeg;base64,"))
                return e;
            let n = this.decode64(t.replace("data:image/jpeg;base64,", ""))
              , r = this.slice2Segments(n)
              , s = this.exifManipulation(e, r);
            return `data:image/jpeg;base64,${this.encode64(s)}`
        }
        static exifManipulation(t, e) {
            let n = this.getExifArray(e)
              , r = this.insertExif(t, n);
            return new Uint8Array(r)
        }
        static getExifArray(t) {
            let e, n = 0;
            for (; n < t.length; ) {
                if (e = t[n],
                e[0] === 255 & e[1] === 225)
                    return e;
                n++
            }
            return []
        }
        static insertExif(t, e) {
            let n = t.replace("data:image/jpeg;base64,", "")
              , r = this.decode64(n)
              , s = r.indexOf(255, 3)
              , a = r.slice(0, s)
              , o = r.slice(s)
              , l = a;
            return l = l.concat(e),
            l = l.concat(o),
            l
        }
        static slice2Segments(t) {
            let e = 0
              , n = [];
            for (; ; ) {
                var r;
                if (t[e] === 255 & t[e + 1] === 218)
                    break;
                if (t[e] === 255 & t[e + 1] === 216)
                    e += 2;
                else {
                    r = t[e + 2] * 256 + t[e + 3];
                    let s = e + r + 2
                      , a = t.slice(e, s);
                    n.push(a),
                    e = s
                }
                if (e > t.length)
                    break
            }
            return n
        }
        static decode64(t) {
            let e, n, r = "", s, a, o, l = "", u = 0, h = [];
            for (/[^A-Za-z0-9\+\/\=]/g.exec(t) && console.warn(`There were invalid base64 characters in the input text.
Valid base64 characters are A-Z, a-z, 0-9, '+', '/',and '='
Expect errors in decoding.`),
            t = t.replace(/[^A-Za-z0-9\+\/\=]/g, ""); s = this.KEY_STR.indexOf(t.charAt(u++)),
            a = this.KEY_STR.indexOf(t.charAt(u++)),
            o = this.KEY_STR.indexOf(t.charAt(u++)),
            l = this.KEY_STR.indexOf(t.charAt(u++)),
            e = s << 2 | a >> 4,
            n = (a & 15) << 4 | o >> 2,
            r = (o & 3) << 6 | l,
            h.push(e),
            o !== 64 && h.push(n),
            l !== 64 && h.push(r),
            e = n = r = "",
            s = a = o = l = "",
            u < t.length; )
                ;
            return h
        }
    }
    ru.initClass();
    function rb(i, t) {
        return typeof i < "u" && i !== null ? t(i) : void 0
    }
    function sb(i, t, e) {
        if (typeof i < "u" && i !== null && typeof i[t] == "function")
            return e(i, t)
    }
    L.autoDiscover = !1;
    class ab {
        initialize(t) {
            Kt( () => this.initUploads(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initUploads(e.detail.snippet))
        }
        initUploads(t) {
            t.querySelectorAll("[data-upload]").forEach(n => {
                const r = n.dataset.upload
                  , s = n.querySelector("[data-upload-remove-btn]")
                  , a = n.dataset.uploadAccept
                  , o = new L(n,{
                    maxFilesize: 4,
                    url: r,
                    acceptedFiles: a,
                    ...JS_LOCALIZE.dropzone
                });
                o.on("error", (u, h) => {
                    alert(h)
                }
                ),
                o.on("addedfile", u => {
                    o.files.forEach(h => h === u || o.removeFile(h))
                }
                ),
                o.on("complete", u => n.classList.add("has-file")),
                o.on("success", u => {
                    const h = u.xhr.response
                      , f = JSON.parse(h);
                    f && f.uploaded && f.uploaded.id ? (o.element.querySelector("[data-upload-input]").value = f.uploaded.id,
                    n.dataset.uploaded = h) : console.error("Image can't be saved due to missing or invalid response in file.xhr.", u),
                    f.snippets && ve.snippetHandler.updateSnippets(f.snippets)
                }
                ),
                o.on("removedfile", u => this._removeFile(o, u)),
                s.addEventListener("click", u => {
                    u.preventDefault(),
                    o.files.forEach(h => o.removeFile(h))
                }
                ),
                n.addEventListener("keydown", u => {
                    u.key !== "Enter" && u.key !== " " || (o.files.length > 0 ? s.click() : n.click())
                }
                );
                const l = n.dataset.uploaded;
                if (l) {
                    const u = JSON.parse(l);
                    o.files.push(u),
                    o.emit("addedfile", u),
                    o.emit("thumbnail", u, u.url),
                    o.emit("complete", u)
                }
            }
            )
        }
        _removeFile(t, e) {
            const n = t.element.querySelector("[data-upload-input]")
              , r = t.element.dataset.uploadRemove
              , s = n.value;
            t.element.classList.remove("has-file"),
            n.value = "",
            r && ve.makeRequest("POST", r, {
                file: s
            }, {
                history: !1,
                loadable: t.element
            })
        }
    }
    class ob {
        initialize(t) {
            Kt( () => this.initAutosubmit(document)),
            t.snippetHandler.addEventListener("afterUpdate", e => this.initAutosubmit(e.detail.snippet))
        }
        initAutosubmit(t) {
            t.querySelectorAll('input:not([type="hidden"]), select, textarea').forEach(s => {
                var a;
                ((a = s.form) == null ? void 0 : a.dataset.autosubmit) !== void 0 && this.initInput(s)
            }
            ),
            t.querySelectorAll("[data-autosubmit]:not(form)").forEach(s => this.initInput(s)),
            t.querySelectorAll("[data-autosubmit-signal]").forEach(s => this.initInputSignal(s))
        }
        initInput(t) {
            t.dataset.autosubmitHandled !== "1" && (t.dataset.autosubmitHandled = "1",
            t.addEventListener("change", () => this.autosubmit(t)))
        }
        initInputSignal(t) {
            t.addEventListener("change", () => {
                const e = t.type === "checkbox" || t.type === "radio" ? t.checked ? 1 : 0 : t.value
                  , n = (t.dataset.autosubmitSignal + "").replace(encodeURI("%value%"), e + "");
                n && ve.makeRequest("GET", n, null, {
                    history: !1
                })
            }
            )
        }
        autosubmit(t) {
            const e = t.form;
            if (!e)
                return;
            const n = e.querySelector("[data-autosubmit-button]");
            if (!n)
                throw new Error("No autosubmit button found.");
            const r = new FormData(e);
            r.append(n.name, t.name);
            const s = e.dataset.najaHistory === void 0 ? !1 : e.dataset.najaHistory === "replace" ? "replace" : !0;
            ve.makeRequest("POST", e.action, r, {
                history: s,
                unique: !0
            })
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
    class ub {
        initialize(t) {
            t.addEventListener("success", e => {
                const {payload: n} = e.detail;
                n.setFormValues && this.setFormValues(n.setFormValues),
                n.setFormOptions && this.setFormOptions(n.setFormOptions),
                n.focusInput && this.focusInput(n.focusInput),
                n.hide && this.toggle(n.hide, !1),
                n.show && this.toggle(n.show, !0),
                n.submitForm && this.submitForm(n.submitForm),
                n.setButtonLabel && this.setButtonLabel(n.setButtonLabel)
            }
            )
        }
        setFormValues(t) {
            Object.keys(t).forEach(e => {
                const n = document.querySelector(e);
                if (n)
                    if (n.type === "radio") {
                        const r = document.querySelector(`${e}[value="${t[e]}"]`);
                        r && (r.checked = !0,
                        r.dispatchEvent(new Event("change")))
                    } else
                        n.value = t[e]
            }
            )
        }
        setFormOptions(t) {
            Object.keys(t).forEach(e => {
                const n = document.querySelector(e);
                if (!n || n.nodeName !== "SELECT")
                    return;
                const r = t[e];
                n.querySelectorAll("option").forEach(s => s.remove()),
                r.forEach(s => {
                    const a = document.createElement("option");
                    a.value = s[0],
                    a.innerHTML = s[1],
                    n.appendChild(a)
                }
                ),
                n.dispatchEvent(new Event("optionsUpdated"))
            }
            )
        }
        focusInput(t) {
            const e = document.querySelector(t);
            e && e.focus()
        }
        toggle(t, e) {
            t.forEach(n => {
                var r;
                return (r = document.querySelector(n)) == null ? void 0 : r.classList.toggle("d-none", !e)
            }
            )
        }
        submitForm(t) {
            const e = document.querySelector(t);
            e.nodeName === "FORM" && ve.uiHandler.submitForm(e)
        }
        setButtonLabel(t) {
            Object.keys(t).forEach(e => {
                const n = document.querySelector(e);
                n && (n.textContent = t[e])
            }
            )
        }
    }
    ve.registerExtension(new uu);
    ve.registerExtension(new cv);
    ve.registerExtension(new B1);
    ve.registerExtension(new G1);
    ve.registerExtension(new Y1);
    ve.registerExtension(new ab);
    ve.registerExtension(new ob);
    ve.registerExtension(new lb);
    ve.registerExtension(new cb);
    ve.registerExtension(new ub)
}
);
export default hb();
