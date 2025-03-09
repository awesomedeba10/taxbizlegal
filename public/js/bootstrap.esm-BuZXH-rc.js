import {c as fs, g as ds} from "./onDomReady-CSuAWNBp.js";
var ii = {
    exports: {}
};
(function(n) {
    (function(t, e) {
        t.JSON && (n.exports = e(t))
    }
    )(typeof window < "u" ? window : fs, t => {
        const e = {};
        let i = {}
          , s = {}
          , l = new t.WeakMap;
        e.formErrors = [],
        e.version = "3.3.0";
        function c(o, a) {
            let r = o.elements.namedItem(a);
            return r instanceof RadioNodeList ? r[0] : r
        }
        function u(o) {
            let a = o.form.elements.namedItem(o.name);
            return a instanceof RadioNodeList ? Array.from(a) : [a]
        }
        return e.onDocumentReady = function(o) {
            document.readyState !== "loading" ? o.call(this) : document.addEventListener("DOMContentLoaded", o)
        }
        ,
        e.getValue = function(o) {
            var a, r;
            return o instanceof HTMLInputElement ? o.type === "radio" ? ((a = u(o).find(f => f.checked)) == null ? void 0 : a.value) ?? null : o.type === "file" ? o.files : o.type === "checkbox" ? o.name.endsWith("[]") ? u(o).filter(f => f.checked).map(f => f.value) : o.checked : o.value.trim() : o instanceof HTMLSelectElement ? o.multiple ? Array.from(o.selectedOptions, f => f.value) : ((r = o.selectedOptions[0]) == null ? void 0 : r.value) ?? null : o instanceof HTMLTextAreaElement ? o.value : o instanceof RadioNodeList ? e.getValue(o[0]) : null
        }
        ,
        e.getEffectiveValue = function(o, a=!1) {
            let r = e.getValue(o);
            if (r === o.getAttribute("data-nette-empty-value") && (r = ""),
            a && i[o.name] === void 0) {
                i[o.name] = !0;
                let f = {
                    value: r
                };
                e.validateControl(o, null, !0, f),
                r = f.value,
                delete i[o.name]
            }
            return r
        }
        ,
        e.validateControl = function(o, a, r=!1, f=null, h=null) {
            a ?? (a = JSON.parse(o.getAttribute("data-nette-rules") ?? "[]")),
            f ?? (f = {
                value: e.getEffectiveValue(o)
            }),
            h ?? (h = !e.validateRule(o, ":filled", null, f));
            for (let p of a) {
                let b = p.op.match(/(~)?([^?]+)/)
                  , _ = p.control ? c(o.form, p.control) : o;
                if (p.neg = b[1],
                p.op = b[2],
                p.condition = !!p.rules,
                _) {
                    if (h && !p.condition && p.op !== ":filled")
                        continue
                } else
                    continue;
                let v = e.validateRule(_, p.op, p.arg, o === _ ? f : void 0);
                if (v !== null) {
                    if (p.neg && (v = !v),
                    p.condition && v) {
                        if (!e.validateControl(o, p.rules, r, f, p.op === ":blank" ? !1 : h))
                            return !1
                    } else if (!p.condition && !v) {
                        if (e.isDisabled(_))
                            continue;
                        if (!r) {
                            let E = Array.isArray(p.arg) ? p.arg : [p.arg]
                              , w = p.msg.replace(/%(value|\d+)/g, (T, g) => e.getValue(g === "value" ? _ : o.form.elements.namedItem(E[g].control)));
                            e.addError(_, w)
                        }
                        return !1
                    }
                }
            }
            return !0
        }
        ,
        e.validateForm = function(o, a=!1) {
            let r = o.form ?? o, f;
            if (e.formErrors = [],
            r["nette-submittedBy"] && r["nette-submittedBy"].getAttribute("formnovalidate") !== null) {
                let p = JSON.parse(r["nette-submittedBy"].getAttribute("data-nette-validation-scope") ?? "[]");
                if (p.length)
                    f = new RegExp("^(" + p.join("-|") + "-)");
                else
                    return e.showFormErrors(r, []),
                    !0
            }
            for (let p of r.elements)
                if (p.willValidate && p.validity.badInput)
                    return p.reportValidity(),
                    !1;
            for (let p of Array.from(r.elements))
                if (p.getAttribute("data-nette-rules") && (!f || p.name.replace(/]\[|\[|]|$/g, "-").match(f)) && !e.isDisabled(p) && !e.validateControl(p, null, a) && !e.formErrors.length)
                    return !1;
            let h = !e.formErrors.length;
            return e.showFormErrors(r, e.formErrors),
            h
        }
        ,
        e.isDisabled = function(o) {
            return o.type === "radio" ? u(o).every(a => a.disabled) : o.disabled
        }
        ,
        e.addError = function(o, a) {
            e.formErrors.push({
                element: o,
                message: a
            })
        }
        ,
        e.showFormErrors = function(o, a) {
            let r = [], f;
            for (let h of a)
                r.indexOf(h.message) < 0 && (r.push(h.message),
                !f && h.element.focus && (f = h.element));
            r.length && e.showModal(r.join(`
`), () => {
                f && f.focus()
            }
            )
        }
        ,
        e.showModal = function(o, a) {
            let r = document.createElement("dialog");
            if (!r.showModal) {
                alert(o),
                a();
                return
            }
            let f = document.createElement("style");
            f.innerText = ".netteFormsModal { text-align: center; margin: auto; border: 2px solid black; padding: 1rem } .netteFormsModal button { padding: .1em 2em }";
            let h = document.createElement("button");
            h.innerText = "OK",
            h.onclick = () => {
                r.remove(),
                a()
            }
            ,
            r.setAttribute("class", "netteFormsModal"),
            r.innerText = o + `

`,
            r.append(f, h),
            document.body.append(r),
            r.showModal()
        }
        ,
        e.validateRule = function(o, a, r, f) {
            if (o.validity.badInput)
                return a === ":filled";
            f ?? (f = {
                value: e.getEffectiveValue(o, !0)
            });
            let h = a.charAt(0) === ":" ? a.substring(1) : a;
            h = h.replace("::", "_").replaceAll("\\", "");
            let p = Array.isArray(r) ? r : [r];
            return p = p.map(b => {
                if (b != null && b.control) {
                    let _ = c(o.form, b.control);
                    return _ === o ? f.value : e.getEffectiveValue(_, !0)
                }
                return b
            }
            ),
            e.validators[h] ? e.validators[h](o, Array.isArray(r) ? p : p[0], f.value, f) : null
        }
        ,
        e.validators = {
            filled: function(o, a, r) {
                return r !== "" && r !== !1 && r !== null && (!Array.isArray(r) || !!r.length) && (!(r instanceof FileList) || r.length)
            },
            blank: function(o, a, r) {
                return !e.validators.filled(o, a, r)
            },
            valid: function(o) {
                return e.validateControl(o, null, !0)
            },
            equal: function(o, a, r) {
                if (a === void 0)
                    return null;
                let f = h => typeof h == "number" || typeof h == "string" ? "" + h : h === !0 ? "1" : "";
                r = Array.isArray(r) ? r : [r],
                a = Array.isArray(a) ? a : [a];
                t: for (let h of r) {
                    for (let p of a)
                        if (f(h) === f(p))
                            continue t;
                    return !1
                }
                return r.length > 0
            },
            notEqual: function(o, a, r) {
                return a === void 0 ? null : !e.validators.equal(o, a, r)
            },
            minLength: function(o, a, r) {
                return r = typeof r == "number" ? r.toString() : r,
                r.length >= a
            },
            maxLength: function(o, a, r) {
                return r = typeof r == "number" ? r.toString() : r,
                r.length <= a
            },
            length: function(o, a, r) {
                return r = typeof r == "number" ? r.toString() : r,
                a = Array.isArray(a) ? a : [a, a],
                (a[0] === null || r.length >= a[0]) && (a[1] === null || r.length <= a[1])
            },
            email: function(o, a, r) {
                return /^("([ !#-[\]-~]|\\[ -~])+"|[-a-z0-9!#$%&'*+/=?^_`{|}~]+(\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*)@([0-9a-z\u00C0-\u02FF\u0370-\u1EFF]([-0-9a-z\u00C0-\u02FF\u0370-\u1EFF]{0,61}[0-9a-z\u00C0-\u02FF\u0370-\u1EFF])?\.)+[a-z\u00C0-\u02FF\u0370-\u1EFF]([-0-9a-z\u00C0-\u02FF\u0370-\u1EFF]{0,17}[a-z\u00C0-\u02FF\u0370-\u1EFF])?$/i.test(r)
            },
            url: function(o, a, r, f) {
                return /^[a-z\d+.-]+:/.test(r) || (r = "https://" + r),
                /^https?:\/\/((([-_0-9a-z\u00C0-\u02FF\u0370-\u1EFF]+\.)*[0-9a-z\u00C0-\u02FF\u0370-\u1EFF]([-0-9a-z\u00C0-\u02FF\u0370-\u1EFF]{0,61}[0-9a-z\u00C0-\u02FF\u0370-\u1EFF])?\.)?[a-z\u00C0-\u02FF\u0370-\u1EFF]([-0-9a-z\u00C0-\u02FF\u0370-\u1EFF]{0,17}[a-z\u00C0-\u02FF\u0370-\u1EFF])?|\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}|\[[0-9a-f:]{3,39}\])(:\d{1,5})?(\/\S*)?$/i.test(r) ? (f.value = r,
                !0) : !1
            },
            regexp: function(o, a, r) {
                let f = typeof a == "string" ? a.match(/^\/(.*)\/([imu]*)$/) : !1;
                try {
                    return f && new RegExp(f[1],f[2].replace("u", "")).test(r)
                } catch {}
            },
            pattern: function(o, a, r, f, h) {
                if (typeof a != "string")
                    return null;
                try {
                    let p;
                    try {
                        p = new RegExp("^(?:" + a + ")$",h ? "ui" : "u")
                    } catch {
                        p = new RegExp("^(?:" + a + ")$",h ? "i" : "")
                    }
                    return r instanceof FileList ? Array.from(r).every(b => p.test(b.name)) : p.test(r)
                } catch {}
            },
            patternCaseInsensitive: function(o, a, r) {
                return e.validators.pattern(o, a, r, null, !0)
            },
            numeric: function(o, a, r) {
                return /^[0-9]+$/.test(r)
            },
            integer: function(o, a, r, f) {
                return /^-?[0-9]+$/.test(r) ? (f.value = parseFloat(r),
                !0) : !1
            },
            float: function(o, a, r, f) {
                return r = r.replace(/ +/g, "").replace(/,/g, "."),
                /^-?[0-9]*\.?[0-9]+$/.test(r) ? (f.value = parseFloat(r),
                !0) : !1
            },
            min: function(o, a, r) {
                return Number.isFinite(a) && (r = parseFloat(r)),
                r >= a
            },
            max: function(o, a, r) {
                return Number.isFinite(a) && (r = parseFloat(r)),
                r <= a
            },
            range: function(o, a, r) {
                if (Array.isArray(a)) {
                    if (o.type === "time" && a[0] > a[1])
                        return r >= a[0] || r <= a[1]
                } else
                    return null;
                return (a[0] === null || e.validators.min(o, a[0], r)) && (a[1] === null || e.validators.max(o, a[1], r))
            },
            submitted: function(o) {
                return o.form["nette-submittedBy"] === o
            },
            fileSize: function(o, a, r) {
                return Array.from(r).every(f => f.size <= a)
            },
            mimeType: function(o, a, r) {
                let f = [];
                return a = Array.isArray(a) ? a : [a],
                a.forEach(h => f.push("^" + h.replace(/([^\w])/g, "\\$1").replace("\\*", ".*") + "$")),
                f = new RegExp(f.join("|")),
                Array.from(r).every(h => !h.type || f.test(h.type))
            },
            image: function(o, a, r) {
                return e.validators.mimeType(o, a ?? ["image/gif", "image/png", "image/jpeg", "image/webp"], r)
            },
            static: function(o, a) {
                return a
            }
        },
        e.toggleForm = function(o, a=null) {
            s = {};
            for (let r of Array.from(o.elements))
                r.getAttribute("data-nette-rules") && e.toggleControl(r, null, null, !a);
            for (let r in s)
                e.toggle(r, s[r].state, s[r].elem, a)
        }
        ,
        e.toggleControl = function(o, a, r, f, h=null, p=null) {
            var v;
            a ?? (a = JSON.parse(o.getAttribute("data-nette-rules") ?? "[]")),
            h ?? (h = {
                value: e.getEffectiveValue(o)
            }),
            p ?? (p = !e.validateRule(o, ":filled", null, h));
            let b = !1, _;
            for (let E of a) {
                let w = E.op.match(/(~)?([^?]+)/)
                  , T = E.control ? c(o.form, E.control) : o;
                if (E.neg = w[1],
                E.op = w[2],
                E.condition = !!E.rules,
                T) {
                    if (p && !E.condition && E.op !== ":filled")
                        continue
                } else
                    continue;
                if (_ = r,
                r !== !1) {
                    if (_ = e.validateRule(T, E.op, E.arg, o === T ? h : void 0),
                    _ === null)
                        continue;
                    E.neg && (_ = !_),
                    E.condition || (r = _)
                }
                if (E.condition && e.toggleControl(o, E.rules, _, f, h, E.op === ":blank" ? !1 : p) || E.toggle) {
                    b = !0,
                    f && u(T).filter(g => !l.has(g)).forEach(g => {
                        g.addEventListener("change", A => e.toggleForm(o.form, A)),
                        l.set(g, null)
                    }
                    );
                    for (let g in E.toggle ?? [])
                        s[g] ?? (s[g] = {
                            elem: o
                        }),
                        (v = s[g]).state || (v.state = E.toggle[g] ? _ : !_)
                }
            }
            return b
        }
        ,
        e.toggle = function(o, a, r, f) {
            /^\w[\w.:-]*$/.test(o) && (o = "#" + o),
            Array.from(document.querySelectorAll(o)).forEach(h => h.hidden = !a)
        }
        ,
        e.compactCheckboxes = function(o, a) {
            var f;
            let r = {};
            for (let h of o.elements)
                h instanceof HTMLInputElement && h.type === "checkbox" && h.name.endsWith("[]") && h.checked && !h.disabled && (a.delete(h.name),
                r[f = h.name] ?? (r[f] = []),
                r[h.name].push(h.value));
            for (let h in r)
                a.set(h.substring(0, h.length - 2), r[h].join(","))
        }
        ,
        e.initForm = function(o) {
            o.method === "get" && o.hasAttribute("data-nette-compact") && o.addEventListener("formdata", a => e.compactCheckboxes(o, a.formData)),
            Array.from(o.elements).some(a => a.getAttribute("data-nette-rules")) && (e.toggleForm(o),
            !o.noValidate && (o.noValidate = !0,
            o.addEventListener("submit", a => {
                e.validateForm(o) || (a.stopPropagation(),
                a.preventDefault())
            }
            ),
            o.addEventListener("reset", () => {
                setTimeout( () => e.toggleForm(o))
            }
            )))
        }
        ,
        e.initOnLoad = function() {
            e.onDocumentReady( () => {
                Array.from(document.forms).forEach(o => e.initForm(o)),
                document.body.addEventListener("click", o => {
                    let a = o.target;
                    for (; a; ) {
                        if (a.form && a.type in {
                            submit: 1,
                            image: 1
                        }) {
                            a.form["nette-submittedBy"] = a;
                            break
                        }
                        a = a.parentNode
                    }
                }
                )
            }
            )
        }
        ,
        e.webalize = function(o) {
            o = o.toLowerCase();
            let a = "", r;
            for (let f = 0; f < o.length; f++)
                r = e.webalizeTable[o.charAt(f)],
                a += r || o.charAt(f);
            return a.replace(/[^a-z0-9]+/g, "-").replace(/^-|-$/g, "")
        }
        ,
        e.webalizeTable = {
            á: "a",
            ä: "a",
            č: "c",
            ď: "d",
            é: "e",
            ě: "e",
            í: "i",
            ľ: "l",
            ň: "n",
            ó: "o",
            ô: "o",
            ř: "r",
            š: "s",
            ť: "t",
            ú: "u",
            ů: "u",
            ý: "y",
            ž: "z"
        },
        e
    }
    )
}
)(ii);
var hs = ii.exports;
const ps = ds(hs)
  , bn = n => {
    var e, i;
    let t = n.closest(".form-check-list");
    t || (t = n.closest(".form-group, .form-check, .form-floating")),
    t == null || t.classList.remove("is-invalid"),
    n.classList.remove("is-invalid"),
    t ? (e = t.querySelector(".invalid-feedback")) == null || e.remove() : (i = n.nextElementSibling) != null && i.classList.contains("invalid-feedback") && n.nextElementSibling.remove()
}
  , _s = (n, t) => {
    var s;
    let e = n.closest(".form-check-list");
    e || (e = n.closest(".form-group, .form-check, .form-floating")),
    e == null || e.classList.add("is-invalid"),
    n.classList.add("is-invalid");
    const i = document.createElement("div");
    i.classList.add("invalid-feedback"),
    i.classList.add("form-text"),
    i.classList.add("d-block"),
    i.innerHTML = t,
    n.dispatchEvent(new Event("invalid")),
    e ? e.append(i) : (s = n.parentNode) == null || s.insertBefore(i, n.nextSibling)
}
;
ps.showFormErrors = function(n, t) {
    let e = null;
    n.querySelectorAll(".is-invalid").forEach(i => bn(i)),
    t.forEach(i => {
        e || (e = i.element),
        _s(i.element, i.message),
        i.element.addEventListener("change", () => bn(i.element), {
            once: !0
        })
    }
    ),
    e && (e == null || e.focus(),
    e.dispatchEvent(new Event("focusInvalid"))),
    t.length > 0 && n.dispatchEvent(new CustomEvent("netteInvalid",{
        detail: {
            errors: t,
            focusElement: e
        }
    }))
}
;
var $ = "top"
  , R = "bottom"
  , P = "right"
  , I = "left"
  , he = "auto"
  , It = [$, R, P, I]
  , pt = "start"
  , Ct = "end"
  , si = "clippingParents"
  , Ue = "viewport"
  , At = "popper"
  , ri = "reference"
  , He = It.reduce(function(n, t) {
    return n.concat([t + "-" + pt, t + "-" + Ct])
}, [])
  , Ge = [].concat(It, [he]).reduce(function(n, t) {
    return n.concat([t, t + "-" + pt, t + "-" + Ct])
}, [])
  , oi = "beforeRead"
  , ai = "read"
  , li = "afterRead"
  , ci = "beforeMain"
  , ui = "main"
  , fi = "afterMain"
  , di = "beforeWrite"
  , hi = "write"
  , pi = "afterWrite"
  , _i = [oi, ai, li, ci, ui, fi, di, hi, pi];
function U(n) {
    return n ? (n.nodeName || "").toLowerCase() : null
}
function k(n) {
    if (n == null)
        return window;
    if (n.toString() !== "[object Window]") {
        var t = n.ownerDocument;
        return t && t.defaultView || window
    }
    return n
}
function _t(n) {
    var t = k(n).Element;
    return n instanceof t || n instanceof Element
}
function F(n) {
    var t = k(n).HTMLElement;
    return n instanceof t || n instanceof HTMLElement
}
function qe(n) {
    if (typeof ShadowRoot > "u")
        return !1;
    var t = k(n).ShadowRoot;
    return n instanceof t || n instanceof ShadowRoot
}
function ms(n) {
    var t = n.state;
    Object.keys(t.elements).forEach(function(e) {
        var i = t.styles[e] || {}
          , s = t.attributes[e] || {}
          , l = t.elements[e];
        !F(l) || !U(l) || (Object.assign(l.style, i),
        Object.keys(s).forEach(function(c) {
            var u = s[c];
            u === !1 ? l.removeAttribute(c) : l.setAttribute(c, u === !0 ? "" : u)
        }))
    })
}
function gs(n) {
    var t = n.state
      , e = {
        popper: {
            position: t.options.strategy,
            left: "0",
            top: "0",
            margin: "0"
        },
        arrow: {
            position: "absolute"
        },
        reference: {}
    };
    return Object.assign(t.elements.popper.style, e.popper),
    t.styles = e,
    t.elements.arrow && Object.assign(t.elements.arrow.style, e.arrow),
    function() {
        Object.keys(t.elements).forEach(function(i) {
            var s = t.elements[i]
              , l = t.attributes[i] || {}
              , c = Object.keys(t.styles.hasOwnProperty(i) ? t.styles[i] : e[i])
              , u = c.reduce(function(o, a) {
                return o[a] = "",
                o
            }, {});
            !F(s) || !U(s) || (Object.assign(s.style, u),
            Object.keys(l).forEach(function(o) {
                s.removeAttribute(o)
            }))
        })
    }
}
const Xe = {
    name: "applyStyles",
    enabled: !0,
    phase: "write",
    fn: ms,
    effect: gs,
    requires: ["computeStyles"]
};
function Y(n) {
    return n.split("-")[0]
}
var ht = Math.max
  , ce = Math.min
  , Ot = Math.round;
function We() {
    var n = navigator.userAgentData;
    return n != null && n.brands && Array.isArray(n.brands) ? n.brands.map(function(t) {
        return t.brand + "/" + t.version
    }).join(" ") : navigator.userAgent
}
function mi() {
    return !/^((?!chrome|android).)*safari/i.test(We())
}
function Nt(n, t, e) {
    t === void 0 && (t = !1),
    e === void 0 && (e = !1);
    var i = n.getBoundingClientRect()
      , s = 1
      , l = 1;
    t && F(n) && (s = n.offsetWidth > 0 && Ot(i.width) / n.offsetWidth || 1,
    l = n.offsetHeight > 0 && Ot(i.height) / n.offsetHeight || 1);
    var c = _t(n) ? k(n) : window
      , u = c.visualViewport
      , o = !mi() && e
      , a = (i.left + (o && u ? u.offsetLeft : 0)) / s
      , r = (i.top + (o && u ? u.offsetTop : 0)) / l
      , f = i.width / s
      , h = i.height / l;
    return {
        width: f,
        height: h,
        top: r,
        right: a + f,
        bottom: r + h,
        left: a,
        x: a,
        y: r
    }
}
function Qe(n) {
    var t = Nt(n)
      , e = n.offsetWidth
      , i = n.offsetHeight;
    return Math.abs(t.width - e) <= 1 && (e = t.width),
    Math.abs(t.height - i) <= 1 && (i = t.height),
    {
        x: n.offsetLeft,
        y: n.offsetTop,
        width: e,
        height: i
    }
}
function gi(n, t) {
    var e = t.getRootNode && t.getRootNode();
    if (n.contains(t))
        return !0;
    if (e && qe(e)) {
        var i = t;
        do {
            if (i && n.isSameNode(i))
                return !0;
            i = i.parentNode || i.host
        } while (i)
    }
    return !1
}
function X(n) {
    return k(n).getComputedStyle(n)
}
function Es(n) {
    return ["table", "td", "th"].indexOf(U(n)) >= 0
}
function it(n) {
    return ((_t(n) ? n.ownerDocument : n.document) || window.document).documentElement
}
function pe(n) {
    return U(n) === "html" ? n : n.assignedSlot || n.parentNode || (qe(n) ? n.host : null) || it(n)
}
function An(n) {
    return !F(n) || X(n).position === "fixed" ? null : n.offsetParent
}
function vs(n) {
    var t = /firefox/i.test(We())
      , e = /Trident/i.test(We());
    if (e && F(n)) {
        var i = X(n);
        if (i.position === "fixed")
            return null
    }
    var s = pe(n);
    for (qe(s) && (s = s.host); F(s) && ["html", "body"].indexOf(U(s)) < 0; ) {
        var l = X(s);
        if (l.transform !== "none" || l.perspective !== "none" || l.contain === "paint" || ["transform", "perspective"].indexOf(l.willChange) !== -1 || t && l.willChange === "filter" || t && l.filter && l.filter !== "none")
            return s;
        s = s.parentNode
    }
    return null
}
function jt(n) {
    for (var t = k(n), e = An(n); e && Es(e) && X(e).position === "static"; )
        e = An(e);
    return e && (U(e) === "html" || U(e) === "body" && X(e).position === "static") ? t : e || vs(n) || t
}
function Je(n) {
    return ["top", "bottom"].indexOf(n) >= 0 ? "x" : "y"
}
function Ht(n, t, e) {
    return ht(n, ce(t, e))
}
function bs(n, t, e) {
    var i = Ht(n, t, e);
    return i > e ? e : i
}
function Ei() {
    return {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
    }
}
function vi(n) {
    return Object.assign({}, Ei(), n)
}
function bi(n, t) {
    return t.reduce(function(e, i) {
        return e[i] = n,
        e
    }, {})
}
var As = function(t, e) {
    return t = typeof t == "function" ? t(Object.assign({}, e.rects, {
        placement: e.placement
    })) : t,
    vi(typeof t != "number" ? t : bi(t, It))
};
function ys(n) {
    var t, e = n.state, i = n.name, s = n.options, l = e.elements.arrow, c = e.modifiersData.popperOffsets, u = Y(e.placement), o = Je(u), a = [I, P].indexOf(u) >= 0, r = a ? "height" : "width";
    if (!(!l || !c)) {
        var f = As(s.padding, e)
          , h = Qe(l)
          , p = o === "y" ? $ : I
          , b = o === "y" ? R : P
          , _ = e.rects.reference[r] + e.rects.reference[o] - c[o] - e.rects.popper[r]
          , v = c[o] - e.rects.reference[o]
          , E = jt(l)
          , w = E ? o === "y" ? E.clientHeight || 0 : E.clientWidth || 0 : 0
          , T = _ / 2 - v / 2
          , g = f[p]
          , A = w - h[r] - f[b]
          , y = w / 2 - h[r] / 2 + T
          , C = Ht(g, y, A)
          , S = o;
        e.modifiersData[i] = (t = {},
        t[S] = C,
        t.centerOffset = C - y,
        t)
    }
}
function Ts(n) {
    var t = n.state
      , e = n.options
      , i = e.element
      , s = i === void 0 ? "[data-popper-arrow]" : i;
    s != null && (typeof s == "string" && (s = t.elements.popper.querySelector(s),
    !s) || gi(t.elements.popper, s) && (t.elements.arrow = s))
}
const Ai = {
    name: "arrow",
    enabled: !0,
    phase: "main",
    fn: ys,
    effect: Ts,
    requires: ["popperOffsets"],
    requiresIfExists: ["preventOverflow"]
};
function St(n) {
    return n.split("-")[1]
}
var ws = {
    top: "auto",
    right: "auto",
    bottom: "auto",
    left: "auto"
};
function Cs(n, t) {
    var e = n.x
      , i = n.y
      , s = t.devicePixelRatio || 1;
    return {
        x: Ot(e * s) / s || 0,
        y: Ot(i * s) / s || 0
    }
}
function yn(n) {
    var t, e = n.popper, i = n.popperRect, s = n.placement, l = n.variation, c = n.offsets, u = n.position, o = n.gpuAcceleration, a = n.adaptive, r = n.roundOffsets, f = n.isFixed, h = c.x, p = h === void 0 ? 0 : h, b = c.y, _ = b === void 0 ? 0 : b, v = typeof r == "function" ? r({
        x: p,
        y: _
    }) : {
        x: p,
        y: _
    };
    p = v.x,
    _ = v.y;
    var E = c.hasOwnProperty("x")
      , w = c.hasOwnProperty("y")
      , T = I
      , g = $
      , A = window;
    if (a) {
        var y = jt(e)
          , C = "clientHeight"
          , S = "clientWidth";
        if (y === k(e) && (y = it(e),
        X(y).position !== "static" && u === "absolute" && (C = "scrollHeight",
        S = "scrollWidth")),
        y = y,
        s === $ || (s === I || s === P) && l === Ct) {
            g = R;
            var N = f && y === A && A.visualViewport ? A.visualViewport.height : y[C];
            _ -= N - i.height,
            _ *= o ? 1 : -1
        }
        if (s === I || (s === $ || s === R) && l === Ct) {
            T = P;
            var O = f && y === A && A.visualViewport ? A.visualViewport.width : y[S];
            p -= O - i.width,
            p *= o ? 1 : -1
        }
    }
    var D = Object.assign({
        position: u
    }, a && ws)
      , B = r === !0 ? Cs({
        x: p,
        y: _
    }, k(e)) : {
        x: p,
        y: _
    };
    if (p = B.x,
    _ = B.y,
    o) {
        var L;
        return Object.assign({}, D, (L = {},
        L[g] = w ? "0" : "",
        L[T] = E ? "0" : "",
        L.transform = (A.devicePixelRatio || 1) <= 1 ? "translate(" + p + "px, " + _ + "px)" : "translate3d(" + p + "px, " + _ + "px, 0)",
        L))
    }
    return Object.assign({}, D, (t = {},
    t[g] = w ? _ + "px" : "",
    t[T] = E ? p + "px" : "",
    t.transform = "",
    t))
}
function Os(n) {
    var t = n.state
      , e = n.options
      , i = e.gpuAcceleration
      , s = i === void 0 ? !0 : i
      , l = e.adaptive
      , c = l === void 0 ? !0 : l
      , u = e.roundOffsets
      , o = u === void 0 ? !0 : u
      , a = {
        placement: Y(t.placement),
        variation: St(t.placement),
        popper: t.elements.popper,
        popperRect: t.rects.popper,
        gpuAcceleration: s,
        isFixed: t.options.strategy === "fixed"
    };
    t.modifiersData.popperOffsets != null && (t.styles.popper = Object.assign({}, t.styles.popper, yn(Object.assign({}, a, {
        offsets: t.modifiersData.popperOffsets,
        position: t.options.strategy,
        adaptive: c,
        roundOffsets: o
    })))),
    t.modifiersData.arrow != null && (t.styles.arrow = Object.assign({}, t.styles.arrow, yn(Object.assign({}, a, {
        offsets: t.modifiersData.arrow,
        position: "absolute",
        adaptive: !1,
        roundOffsets: o
    })))),
    t.attributes.popper = Object.assign({}, t.attributes.popper, {
        "data-popper-placement": t.placement
    })
}
const Ze = {
    name: "computeStyles",
    enabled: !0,
    phase: "beforeWrite",
    fn: Os,
    data: {}
};
var Zt = {
    passive: !0
};
function Ns(n) {
    var t = n.state
      , e = n.instance
      , i = n.options
      , s = i.scroll
      , l = s === void 0 ? !0 : s
      , c = i.resize
      , u = c === void 0 ? !0 : c
      , o = k(t.elements.popper)
      , a = [].concat(t.scrollParents.reference, t.scrollParents.popper);
    return l && a.forEach(function(r) {
        r.addEventListener("scroll", e.update, Zt)
    }),
    u && o.addEventListener("resize", e.update, Zt),
    function() {
        l && a.forEach(function(r) {
            r.removeEventListener("scroll", e.update, Zt)
        }),
        u && o.removeEventListener("resize", e.update, Zt)
    }
}
const tn = {
    name: "eventListeners",
    enabled: !0,
    phase: "write",
    fn: function() {},
    effect: Ns,
    data: {}
};
var Ss = {
    left: "right",
    right: "left",
    bottom: "top",
    top: "bottom"
};
function oe(n) {
    return n.replace(/left|right|bottom|top/g, function(t) {
        return Ss[t]
    })
}
var Ds = {
    start: "end",
    end: "start"
};
function Tn(n) {
    return n.replace(/start|end/g, function(t) {
        return Ds[t]
    })
}
function en(n) {
    var t = k(n)
      , e = t.pageXOffset
      , i = t.pageYOffset;
    return {
        scrollLeft: e,
        scrollTop: i
    }
}
function nn(n) {
    return Nt(it(n)).left + en(n).scrollLeft
}
function Ls(n, t) {
    var e = k(n)
      , i = it(n)
      , s = e.visualViewport
      , l = i.clientWidth
      , c = i.clientHeight
      , u = 0
      , o = 0;
    if (s) {
        l = s.width,
        c = s.height;
        var a = mi();
        (a || !a && t === "fixed") && (u = s.offsetLeft,
        o = s.offsetTop)
    }
    return {
        width: l,
        height: c,
        x: u + nn(n),
        y: o
    }
}
function $s(n) {
    var t, e = it(n), i = en(n), s = (t = n.ownerDocument) == null ? void 0 : t.body, l = ht(e.scrollWidth, e.clientWidth, s ? s.scrollWidth : 0, s ? s.clientWidth : 0), c = ht(e.scrollHeight, e.clientHeight, s ? s.scrollHeight : 0, s ? s.clientHeight : 0), u = -i.scrollLeft + nn(n), o = -i.scrollTop;
    return X(s || e).direction === "rtl" && (u += ht(e.clientWidth, s ? s.clientWidth : 0) - l),
    {
        width: l,
        height: c,
        x: u,
        y: o
    }
}
function sn(n) {
    var t = X(n)
      , e = t.overflow
      , i = t.overflowX
      , s = t.overflowY;
    return /auto|scroll|overlay|hidden/.test(e + s + i)
}
function yi(n) {
    return ["html", "body", "#document"].indexOf(U(n)) >= 0 ? n.ownerDocument.body : F(n) && sn(n) ? n : yi(pe(n))
}
function Wt(n, t) {
    var e;
    t === void 0 && (t = []);
    var i = yi(n)
      , s = i === ((e = n.ownerDocument) == null ? void 0 : e.body)
      , l = k(i)
      , c = s ? [l].concat(l.visualViewport || [], sn(i) ? i : []) : i
      , u = t.concat(c);
    return s ? u : u.concat(Wt(pe(c)))
}
function Be(n) {
    return Object.assign({}, n, {
        left: n.x,
        top: n.y,
        right: n.x + n.width,
        bottom: n.y + n.height
    })
}
function Is(n, t) {
    var e = Nt(n, !1, t === "fixed");
    return e.top = e.top + n.clientTop,
    e.left = e.left + n.clientLeft,
    e.bottom = e.top + n.clientHeight,
    e.right = e.left + n.clientWidth,
    e.width = n.clientWidth,
    e.height = n.clientHeight,
    e.x = e.left,
    e.y = e.top,
    e
}
function wn(n, t, e) {
    return t === Ue ? Be(Ls(n, e)) : _t(t) ? Is(t, e) : Be($s(it(n)))
}
function xs(n) {
    var t = Wt(pe(n))
      , e = ["absolute", "fixed"].indexOf(X(n).position) >= 0
      , i = e && F(n) ? jt(n) : n;
    return _t(i) ? t.filter(function(s) {
        return _t(s) && gi(s, i) && U(s) !== "body"
    }) : []
}
function Ms(n, t, e, i) {
    var s = t === "clippingParents" ? xs(n) : [].concat(t)
      , l = [].concat(s, [e])
      , c = l[0]
      , u = l.reduce(function(o, a) {
        var r = wn(n, a, i);
        return o.top = ht(r.top, o.top),
        o.right = ce(r.right, o.right),
        o.bottom = ce(r.bottom, o.bottom),
        o.left = ht(r.left, o.left),
        o
    }, wn(n, c, i));
    return u.width = u.right - u.left,
    u.height = u.bottom - u.top,
    u.x = u.left,
    u.y = u.top,
    u
}
function Ti(n) {
    var t = n.reference, e = n.element, i = n.placement, s = i ? Y(i) : null, l = i ? St(i) : null, c = t.x + t.width / 2 - e.width / 2, u = t.y + t.height / 2 - e.height / 2, o;
    switch (s) {
    case $:
        o = {
            x: c,
            y: t.y - e.height
        };
        break;
    case R:
        o = {
            x: c,
            y: t.y + t.height
        };
        break;
    case P:
        o = {
            x: t.x + t.width,
            y: u
        };
        break;
    case I:
        o = {
            x: t.x - e.width,
            y: u
        };
        break;
    default:
        o = {
            x: t.x,
            y: t.y
        }
    }
    var a = s ? Je(s) : null;
    if (a != null) {
        var r = a === "y" ? "height" : "width";
        switch (l) {
        case pt:
            o[a] = o[a] - (t[r] / 2 - e[r] / 2);
            break;
        case Ct:
            o[a] = o[a] + (t[r] / 2 - e[r] / 2);
            break
        }
    }
    return o
}
function Dt(n, t) {
    t === void 0 && (t = {});
    var e = t
      , i = e.placement
      , s = i === void 0 ? n.placement : i
      , l = e.strategy
      , c = l === void 0 ? n.strategy : l
      , u = e.boundary
      , o = u === void 0 ? si : u
      , a = e.rootBoundary
      , r = a === void 0 ? Ue : a
      , f = e.elementContext
      , h = f === void 0 ? At : f
      , p = e.altBoundary
      , b = p === void 0 ? !1 : p
      , _ = e.padding
      , v = _ === void 0 ? 0 : _
      , E = vi(typeof v != "number" ? v : bi(v, It))
      , w = h === At ? ri : At
      , T = n.rects.popper
      , g = n.elements[b ? w : h]
      , A = Ms(_t(g) ? g : g.contextElement || it(n.elements.popper), o, r, c)
      , y = Nt(n.elements.reference)
      , C = Ti({
        reference: y,
        element: T,
        strategy: "absolute",
        placement: s
    })
      , S = Be(Object.assign({}, T, C))
      , N = h === At ? S : y
      , O = {
        top: A.top - N.top + E.top,
        bottom: N.bottom - A.bottom + E.bottom,
        left: A.left - N.left + E.left,
        right: N.right - A.right + E.right
    }
      , D = n.modifiersData.offset;
    if (h === At && D) {
        var B = D[s];
        Object.keys(O).forEach(function(L) {
            var ot = [P, R].indexOf(L) >= 0 ? 1 : -1
              , at = [$, R].indexOf(L) >= 0 ? "y" : "x";
            O[L] += B[at] * ot
        })
    }
    return O
}
function Rs(n, t) {
    t === void 0 && (t = {});
    var e = t
      , i = e.placement
      , s = e.boundary
      , l = e.rootBoundary
      , c = e.padding
      , u = e.flipVariations
      , o = e.allowedAutoPlacements
      , a = o === void 0 ? Ge : o
      , r = St(i)
      , f = r ? u ? He : He.filter(function(b) {
        return St(b) === r
    }) : It
      , h = f.filter(function(b) {
        return a.indexOf(b) >= 0
    });
    h.length === 0 && (h = f);
    var p = h.reduce(function(b, _) {
        return b[_] = Dt(n, {
            placement: _,
            boundary: s,
            rootBoundary: l,
            padding: c
        })[Y(_)],
        b
    }, {});
    return Object.keys(p).sort(function(b, _) {
        return p[b] - p[_]
    })
}
function Ps(n) {
    if (Y(n) === he)
        return [];
    var t = oe(n);
    return [Tn(n), t, Tn(t)]
}
function ks(n) {
    var t = n.state
      , e = n.options
      , i = n.name;
    if (!t.modifiersData[i]._skip) {
        for (var s = e.mainAxis, l = s === void 0 ? !0 : s, c = e.altAxis, u = c === void 0 ? !0 : c, o = e.fallbackPlacements, a = e.padding, r = e.boundary, f = e.rootBoundary, h = e.altBoundary, p = e.flipVariations, b = p === void 0 ? !0 : p, _ = e.allowedAutoPlacements, v = t.options.placement, E = Y(v), w = E === v, T = o || (w || !b ? [oe(v)] : Ps(v)), g = [v].concat(T).reduce(function(Et, J) {
            return Et.concat(Y(J) === he ? Rs(t, {
                placement: J,
                boundary: r,
                rootBoundary: f,
                padding: a,
                flipVariations: b,
                allowedAutoPlacements: _
            }) : J)
        }, []), A = t.rects.reference, y = t.rects.popper, C = new Map, S = !0, N = g[0], O = 0; O < g.length; O++) {
            var D = g[O]
              , B = Y(D)
              , L = St(D) === pt
              , ot = [$, R].indexOf(B) >= 0
              , at = ot ? "width" : "height"
              , M = Dt(t, {
                placement: D,
                boundary: r,
                rootBoundary: f,
                altBoundary: h,
                padding: a
            })
              , j = ot ? L ? P : I : L ? R : $;
            A[at] > y[at] && (j = oe(j));
            var Gt = oe(j)
              , lt = [];
            if (l && lt.push(M[B] <= 0),
            u && lt.push(M[j] <= 0, M[Gt] <= 0),
            lt.every(function(Et) {
                return Et
            })) {
                N = D,
                S = !1;
                break
            }
            C.set(D, lt)
        }
        if (S)
            for (var qt = b ? 3 : 1, Ae = function(J) {
                var kt = g.find(function(Qt) {
                    var ct = C.get(Qt);
                    if (ct)
                        return ct.slice(0, J).every(function(ye) {
                            return ye
                        })
                });
                if (kt)
                    return N = kt,
                    "break"
            }, Pt = qt; Pt > 0; Pt--) {
                var Xt = Ae(Pt);
                if (Xt === "break")
                    break
            }
        t.placement !== N && (t.modifiersData[i]._skip = !0,
        t.placement = N,
        t.reset = !0)
    }
}
const wi = {
    name: "flip",
    enabled: !0,
    phase: "main",
    fn: ks,
    requiresIfExists: ["offset"],
    data: {
        _skip: !1
    }
};
function Cn(n, t, e) {
    return e === void 0 && (e = {
        x: 0,
        y: 0
    }),
    {
        top: n.top - t.height - e.y,
        right: n.right - t.width + e.x,
        bottom: n.bottom - t.height + e.y,
        left: n.left - t.width - e.x
    }
}
function On(n) {
    return [$, P, R, I].some(function(t) {
        return n[t] >= 0
    })
}
function Fs(n) {
    var t = n.state
      , e = n.name
      , i = t.rects.reference
      , s = t.rects.popper
      , l = t.modifiersData.preventOverflow
      , c = Dt(t, {
        elementContext: "reference"
    })
      , u = Dt(t, {
        altBoundary: !0
    })
      , o = Cn(c, i)
      , a = Cn(u, s, l)
      , r = On(o)
      , f = On(a);
    t.modifiersData[e] = {
        referenceClippingOffsets: o,
        popperEscapeOffsets: a,
        isReferenceHidden: r,
        hasPopperEscaped: f
    },
    t.attributes.popper = Object.assign({}, t.attributes.popper, {
        "data-popper-reference-hidden": r,
        "data-popper-escaped": f
    })
}
const Ci = {
    name: "hide",
    enabled: !0,
    phase: "main",
    requiresIfExists: ["preventOverflow"],
    fn: Fs
};
function Vs(n, t, e) {
    var i = Y(n)
      , s = [I, $].indexOf(i) >= 0 ? -1 : 1
      , l = typeof e == "function" ? e(Object.assign({}, t, {
        placement: n
    })) : e
      , c = l[0]
      , u = l[1];
    return c = c || 0,
    u = (u || 0) * s,
    [I, P].indexOf(i) >= 0 ? {
        x: u,
        y: c
    } : {
        x: c,
        y: u
    }
}
function Hs(n) {
    var t = n.state
      , e = n.options
      , i = n.name
      , s = e.offset
      , l = s === void 0 ? [0, 0] : s
      , c = Ge.reduce(function(r, f) {
        return r[f] = Vs(f, t.rects, l),
        r
    }, {})
      , u = c[t.placement]
      , o = u.x
      , a = u.y;
    t.modifiersData.popperOffsets != null && (t.modifiersData.popperOffsets.x += o,
    t.modifiersData.popperOffsets.y += a),
    t.modifiersData[i] = c
}
const Oi = {
    name: "offset",
    enabled: !0,
    phase: "main",
    requires: ["popperOffsets"],
    fn: Hs
};
function Ws(n) {
    var t = n.state
      , e = n.name;
    t.modifiersData[e] = Ti({
        reference: t.rects.reference,
        element: t.rects.popper,
        strategy: "absolute",
        placement: t.placement
    })
}
const rn = {
    name: "popperOffsets",
    enabled: !0,
    phase: "read",
    fn: Ws,
    data: {}
};
function Bs(n) {
    return n === "x" ? "y" : "x"
}
function js(n) {
    var t = n.state
      , e = n.options
      , i = n.name
      , s = e.mainAxis
      , l = s === void 0 ? !0 : s
      , c = e.altAxis
      , u = c === void 0 ? !1 : c
      , o = e.boundary
      , a = e.rootBoundary
      , r = e.altBoundary
      , f = e.padding
      , h = e.tether
      , p = h === void 0 ? !0 : h
      , b = e.tetherOffset
      , _ = b === void 0 ? 0 : b
      , v = Dt(t, {
        boundary: o,
        rootBoundary: a,
        padding: f,
        altBoundary: r
    })
      , E = Y(t.placement)
      , w = St(t.placement)
      , T = !w
      , g = Je(E)
      , A = Bs(g)
      , y = t.modifiersData.popperOffsets
      , C = t.rects.reference
      , S = t.rects.popper
      , N = typeof _ == "function" ? _(Object.assign({}, t.rects, {
        placement: t.placement
    })) : _
      , O = typeof N == "number" ? {
        mainAxis: N,
        altAxis: N
    } : Object.assign({
        mainAxis: 0,
        altAxis: 0
    }, N)
      , D = t.modifiersData.offset ? t.modifiersData.offset[t.placement] : null
      , B = {
        x: 0,
        y: 0
    };
    if (y) {
        if (l) {
            var L, ot = g === "y" ? $ : I, at = g === "y" ? R : P, M = g === "y" ? "height" : "width", j = y[g], Gt = j + v[ot], lt = j - v[at], qt = p ? -S[M] / 2 : 0, Ae = w === pt ? C[M] : S[M], Pt = w === pt ? -S[M] : -C[M], Xt = t.elements.arrow, Et = p && Xt ? Qe(Xt) : {
                width: 0,
                height: 0
            }, J = t.modifiersData["arrow#persistent"] ? t.modifiersData["arrow#persistent"].padding : Ei(), kt = J[ot], Qt = J[at], ct = Ht(0, C[M], Et[M]), ye = T ? C[M] / 2 - qt - ct - kt - O.mainAxis : Ae - ct - kt - O.mainAxis, rs = T ? -C[M] / 2 + qt + ct + Qt + O.mainAxis : Pt + ct + Qt + O.mainAxis, Te = t.elements.arrow && jt(t.elements.arrow), os = Te ? g === "y" ? Te.clientTop || 0 : Te.clientLeft || 0 : 0, fn = (L = D == null ? void 0 : D[g]) != null ? L : 0, as = j + ye - fn - os, ls = j + rs - fn, dn = Ht(p ? ce(Gt, as) : Gt, j, p ? ht(lt, ls) : lt);
            y[g] = dn,
            B[g] = dn - j
        }
        if (u) {
            var hn, cs = g === "x" ? $ : I, us = g === "x" ? R : P, ut = y[A], Jt = A === "y" ? "height" : "width", pn = ut + v[cs], _n = ut - v[us], we = [$, I].indexOf(E) !== -1, mn = (hn = D == null ? void 0 : D[A]) != null ? hn : 0, gn = we ? pn : ut - C[Jt] - S[Jt] - mn + O.altAxis, En = we ? ut + C[Jt] + S[Jt] - mn - O.altAxis : _n, vn = p && we ? bs(gn, ut, En) : Ht(p ? gn : pn, ut, p ? En : _n);
            y[A] = vn,
            B[A] = vn - ut
        }
        t.modifiersData[i] = B
    }
}
const Ni = {
    name: "preventOverflow",
    enabled: !0,
    phase: "main",
    fn: js,
    requiresIfExists: ["offset"]
};
function Ks(n) {
    return {
        scrollLeft: n.scrollLeft,
        scrollTop: n.scrollTop
    }
}
function Ys(n) {
    return n === k(n) || !F(n) ? en(n) : Ks(n)
}
function zs(n) {
    var t = n.getBoundingClientRect()
      , e = Ot(t.width) / n.offsetWidth || 1
      , i = Ot(t.height) / n.offsetHeight || 1;
    return e !== 1 || i !== 1
}
function Us(n, t, e) {
    e === void 0 && (e = !1);
    var i = F(t)
      , s = F(t) && zs(t)
      , l = it(t)
      , c = Nt(n, s, e)
      , u = {
        scrollLeft: 0,
        scrollTop: 0
    }
      , o = {
        x: 0,
        y: 0
    };
    return (i || !i && !e) && ((U(t) !== "body" || sn(l)) && (u = Ys(t)),
    F(t) ? (o = Nt(t, !0),
    o.x += t.clientLeft,
    o.y += t.clientTop) : l && (o.x = nn(l))),
    {
        x: c.left + u.scrollLeft - o.x,
        y: c.top + u.scrollTop - o.y,
        width: c.width,
        height: c.height
    }
}
function Gs(n) {
    var t = new Map
      , e = new Set
      , i = [];
    n.forEach(function(l) {
        t.set(l.name, l)
    });
    function s(l) {
        e.add(l.name);
        var c = [].concat(l.requires || [], l.requiresIfExists || []);
        c.forEach(function(u) {
            if (!e.has(u)) {
                var o = t.get(u);
                o && s(o)
            }
        }),
        i.push(l)
    }
    return n.forEach(function(l) {
        e.has(l.name) || s(l)
    }),
    i
}
function qs(n) {
    var t = Gs(n);
    return _i.reduce(function(e, i) {
        return e.concat(t.filter(function(s) {
            return s.phase === i
        }))
    }, [])
}
function Xs(n) {
    var t;
    return function() {
        return t || (t = new Promise(function(e) {
            Promise.resolve().then(function() {
                t = void 0,
                e(n())
            })
        }
        )),
        t
    }
}
function Qs(n) {
    var t = n.reduce(function(e, i) {
        var s = e[i.name];
        return e[i.name] = s ? Object.assign({}, s, i, {
            options: Object.assign({}, s.options, i.options),
            data: Object.assign({}, s.data, i.data)
        }) : i,
        e
    }, {});
    return Object.keys(t).map(function(e) {
        return t[e]
    })
}
var Nn = {
    placement: "bottom",
    modifiers: [],
    strategy: "absolute"
};
function Sn() {
    for (var n = arguments.length, t = new Array(n), e = 0; e < n; e++)
        t[e] = arguments[e];
    return !t.some(function(i) {
        return !(i && typeof i.getBoundingClientRect == "function")
    })
}
function _e(n) {
    n === void 0 && (n = {});
    var t = n
      , e = t.defaultModifiers
      , i = e === void 0 ? [] : e
      , s = t.defaultOptions
      , l = s === void 0 ? Nn : s;
    return function(u, o, a) {
        a === void 0 && (a = l);
        var r = {
            placement: "bottom",
            orderedModifiers: [],
            options: Object.assign({}, Nn, l),
            modifiersData: {},
            elements: {
                reference: u,
                popper: o
            },
            attributes: {},
            styles: {}
        }
          , f = []
          , h = !1
          , p = {
            state: r,
            setOptions: function(E) {
                var w = typeof E == "function" ? E(r.options) : E;
                _(),
                r.options = Object.assign({}, l, r.options, w),
                r.scrollParents = {
                    reference: _t(u) ? Wt(u) : u.contextElement ? Wt(u.contextElement) : [],
                    popper: Wt(o)
                };
                var T = qs(Qs([].concat(i, r.options.modifiers)));
                return r.orderedModifiers = T.filter(function(g) {
                    return g.enabled
                }),
                b(),
                p.update()
            },
            forceUpdate: function() {
                if (!h) {
                    var E = r.elements
                      , w = E.reference
                      , T = E.popper;
                    if (Sn(w, T)) {
                        r.rects = {
                            reference: Us(w, jt(T), r.options.strategy === "fixed"),
                            popper: Qe(T)
                        },
                        r.reset = !1,
                        r.placement = r.options.placement,
                        r.orderedModifiers.forEach(function(O) {
                            return r.modifiersData[O.name] = Object.assign({}, O.data)
                        });
                        for (var g = 0; g < r.orderedModifiers.length; g++) {
                            if (r.reset === !0) {
                                r.reset = !1,
                                g = -1;
                                continue
                            }
                            var A = r.orderedModifiers[g]
                              , y = A.fn
                              , C = A.options
                              , S = C === void 0 ? {} : C
                              , N = A.name;
                            typeof y == "function" && (r = y({
                                state: r,
                                options: S,
                                name: N,
                                instance: p
                            }) || r)
                        }
                    }
                }
            },
            update: Xs(function() {
                return new Promise(function(v) {
                    p.forceUpdate(),
                    v(r)
                }
                )
            }),
            destroy: function() {
                _(),
                h = !0
            }
        };
        if (!Sn(u, o))
            return p;
        p.setOptions(a).then(function(v) {
            !h && a.onFirstUpdate && a.onFirstUpdate(v)
        });
        function b() {
            r.orderedModifiers.forEach(function(v) {
                var E = v.name
                  , w = v.options
                  , T = w === void 0 ? {} : w
                  , g = v.effect;
                if (typeof g == "function") {
                    var A = g({
                        state: r,
                        name: E,
                        instance: p,
                        options: T
                    })
                      , y = function() {};
                    f.push(A || y)
                }
            })
        }
        function _() {
            f.forEach(function(v) {
                return v()
            }),
            f = []
        }
        return p
    }
}
var Js = _e()
  , Zs = [tn, rn, Ze, Xe]
  , tr = _e({
    defaultModifiers: Zs
})
  , er = [tn, rn, Ze, Xe, Oi, wi, Ni, Ai, Ci]
  , on = _e({
    defaultModifiers: er
});
const Si = Object.freeze(Object.defineProperty({
    __proto__: null,
    afterMain: fi,
    afterRead: li,
    afterWrite: pi,
    applyStyles: Xe,
    arrow: Ai,
    auto: he,
    basePlacements: It,
    beforeMain: ci,
    beforeRead: oi,
    beforeWrite: di,
    bottom: R,
    clippingParents: si,
    computeStyles: Ze,
    createPopper: on,
    createPopperBase: Js,
    createPopperLite: tr,
    detectOverflow: Dt,
    end: Ct,
    eventListeners: tn,
    flip: wi,
    hide: Ci,
    left: I,
    main: ui,
    modifierPhases: _i,
    offset: Oi,
    placements: Ge,
    popper: At,
    popperGenerator: _e,
    popperOffsets: rn,
    preventOverflow: Ni,
    read: ai,
    reference: ri,
    right: P,
    start: pt,
    top: $,
    variationPlacements: He,
    viewport: Ue,
    write: hi
}, Symbol.toStringTag, {
    value: "Module"
}));
/*!
  * Bootstrap v5.3.3 (https://getbootstrap.com/)
  * Copyright 2011-2024 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */
const Z = new Map
  , Ce = {
    set(n, t, e) {
        Z.has(n) || Z.set(n, new Map);
        const i = Z.get(n);
        if (!i.has(t) && i.size !== 0) {
            console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(i.keys())[0]}.`);
            return
        }
        i.set(t, e)
    },
    get(n, t) {
        return Z.has(n) && Z.get(n).get(t) || null
    },
    remove(n, t) {
        if (!Z.has(n))
            return;
        const e = Z.get(n);
        e.delete(t),
        e.size === 0 && Z.delete(n)
    }
}
  , nr = 1e6
  , ir = 1e3
  , je = "transitionend"
  , Di = n => (n && window.CSS && window.CSS.escape && (n = n.replace(/#([^\s"#']+)/g, (t, e) => `#${CSS.escape(e)}`)),
n)
  , sr = n => n == null ? `${n}` : Object.prototype.toString.call(n).match(/\s([a-z]+)/i)[1].toLowerCase()
  , rr = n => {
    do
        n += Math.floor(Math.random() * nr);
    while (document.getElementById(n));
    return n
}
  , or = n => {
    if (!n)
        return 0;
    let {transitionDuration: t, transitionDelay: e} = window.getComputedStyle(n);
    const i = Number.parseFloat(t)
      , s = Number.parseFloat(e);
    return !i && !s ? 0 : (t = t.split(",")[0],
    e = e.split(",")[0],
    (Number.parseFloat(t) + Number.parseFloat(e)) * ir)
}
  , Li = n => {
    n.dispatchEvent(new Event(je))
}
  , G = n => !n || typeof n != "object" ? !1 : (typeof n.jquery < "u" && (n = n[0]),
typeof n.nodeType < "u")
  , tt = n => G(n) ? n.jquery ? n[0] : n : typeof n == "string" && n.length > 0 ? document.querySelector(Di(n)) : null
  , xt = n => {
    if (!G(n) || n.getClientRects().length === 0)
        return !1;
    const t = getComputedStyle(n).getPropertyValue("visibility") === "visible"
      , e = n.closest("details:not([open])");
    if (!e)
        return t;
    if (e !== n) {
        const i = n.closest("summary");
        if (i && i.parentNode !== e || i === null)
            return !1
    }
    return t
}
  , et = n => !n || n.nodeType !== Node.ELEMENT_NODE || n.classList.contains("disabled") ? !0 : typeof n.disabled < "u" ? n.disabled : n.hasAttribute("disabled") && n.getAttribute("disabled") !== "false"
  , $i = n => {
    if (!document.documentElement.attachShadow)
        return null;
    if (typeof n.getRootNode == "function") {
        const t = n.getRootNode();
        return t instanceof ShadowRoot ? t : null
    }
    return n instanceof ShadowRoot ? n : n.parentNode ? $i(n.parentNode) : null
}
  , ue = () => {}
  , Kt = n => {
    n.offsetHeight
}
  , Ii = () => window.jQuery && !document.body.hasAttribute("data-bs-no-jquery") ? window.jQuery : null
  , Oe = []
  , ar = n => {
    document.readyState === "loading" ? (Oe.length || document.addEventListener("DOMContentLoaded", () => {
        for (const t of Oe)
            t()
    }
    ),
    Oe.push(n)) : n()
}
  , V = () => document.documentElement.dir === "rtl"
  , W = n => {
    ar( () => {
        const t = Ii();
        if (t) {
            const e = n.NAME
              , i = t.fn[e];
            t.fn[e] = n.jQueryInterface,
            t.fn[e].Constructor = n,
            t.fn[e].noConflict = () => (t.fn[e] = i,
            n.jQueryInterface)
        }
    }
    )
}
  , x = (n, t=[], e=n) => typeof n == "function" ? n(...t) : e
  , xi = (n, t, e=!0) => {
    if (!e) {
        x(n);
        return
    }
    const s = or(t) + 5;
    let l = !1;
    const c = ({target: u}) => {
        u === t && (l = !0,
        t.removeEventListener(je, c),
        x(n))
    }
    ;
    t.addEventListener(je, c),
    setTimeout( () => {
        l || Li(t)
    }
    , s)
}
  , an = (n, t, e, i) => {
    const s = n.length;
    let l = n.indexOf(t);
    return l === -1 ? !e && i ? n[s - 1] : n[0] : (l += e ? 1 : -1,
    i && (l = (l + s) % s),
    n[Math.max(0, Math.min(l, s - 1))])
}
  , lr = /[^.]*(?=\..*)\.|.*/
  , cr = /\..*/
  , ur = /::\d+$/
  , Ne = {};
let Dn = 1;
const Mi = {
    mouseenter: "mouseover",
    mouseleave: "mouseout"
}
  , fr = new Set(["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"]);
function Ri(n, t) {
    return t && `${t}::${Dn++}` || n.uidEvent || Dn++
}
function Pi(n) {
    const t = Ri(n);
    return n.uidEvent = t,
    Ne[t] = Ne[t] || {},
    Ne[t]
}
function dr(n, t) {
    return function e(i) {
        return ln(i, {
            delegateTarget: n
        }),
        e.oneOff && d.off(n, i.type, t),
        t.apply(n, [i])
    }
}
function hr(n, t, e) {
    return function i(s) {
        const l = n.querySelectorAll(t);
        for (let {target: c} = s; c && c !== this; c = c.parentNode)
            for (const u of l)
                if (u === c)
                    return ln(s, {
                        delegateTarget: c
                    }),
                    i.oneOff && d.off(n, s.type, t, e),
                    e.apply(c, [s])
    }
}
function ki(n, t, e=null) {
    return Object.values(n).find(i => i.callable === t && i.delegationSelector === e)
}
function Fi(n, t, e) {
    const i = typeof t == "string"
      , s = i ? e : t || e;
    let l = Vi(n);
    return fr.has(l) || (l = n),
    [i, s, l]
}
function Ln(n, t, e, i, s) {
    if (typeof t != "string" || !n)
        return;
    let[l,c,u] = Fi(t, e, i);
    t in Mi && (c = (b => function(_) {
        if (!_.relatedTarget || _.relatedTarget !== _.delegateTarget && !_.delegateTarget.contains(_.relatedTarget))
            return b.call(this, _)
    }
    )(c));
    const o = Pi(n)
      , a = o[u] || (o[u] = {})
      , r = ki(a, c, l ? e : null);
    if (r) {
        r.oneOff = r.oneOff && s;
        return
    }
    const f = Ri(c, t.replace(lr, ""))
      , h = l ? hr(n, e, c) : dr(n, c);
    h.delegationSelector = l ? e : null,
    h.callable = c,
    h.oneOff = s,
    h.uidEvent = f,
    a[f] = h,
    n.addEventListener(u, h, l)
}
function Ke(n, t, e, i, s) {
    const l = ki(t[e], i, s);
    l && (n.removeEventListener(e, l, !!s),
    delete t[e][l.uidEvent])
}
function pr(n, t, e, i) {
    const s = t[e] || {};
    for (const [l,c] of Object.entries(s))
        l.includes(i) && Ke(n, t, e, c.callable, c.delegationSelector)
}
function Vi(n) {
    return n = n.replace(cr, ""),
    Mi[n] || n
}
const d = {
    on(n, t, e, i) {
        Ln(n, t, e, i, !1)
    },
    one(n, t, e, i) {
        Ln(n, t, e, i, !0)
    },
    off(n, t, e, i) {
        if (typeof t != "string" || !n)
            return;
        const [s,l,c] = Fi(t, e, i)
          , u = c !== t
          , o = Pi(n)
          , a = o[c] || {}
          , r = t.startsWith(".");
        if (typeof l < "u") {
            if (!Object.keys(a).length)
                return;
            Ke(n, o, c, l, s ? e : null);
            return
        }
        if (r)
            for (const f of Object.keys(o))
                pr(n, o, f, t.slice(1));
        for (const [f,h] of Object.entries(a)) {
            const p = f.replace(ur, "");
            (!u || t.includes(p)) && Ke(n, o, c, h.callable, h.delegationSelector)
        }
    },
    trigger(n, t, e) {
        if (typeof t != "string" || !n)
            return null;
        const i = Ii()
          , s = Vi(t)
          , l = t !== s;
        let c = null
          , u = !0
          , o = !0
          , a = !1;
        l && i && (c = i.Event(t, e),
        i(n).trigger(c),
        u = !c.isPropagationStopped(),
        o = !c.isImmediatePropagationStopped(),
        a = c.isDefaultPrevented());
        const r = ln(new Event(t,{
            bubbles: u,
            cancelable: !0
        }), e);
        return a && r.preventDefault(),
        o && n.dispatchEvent(r),
        r.defaultPrevented && c && c.preventDefault(),
        r
    }
};
function ln(n, t={}) {
    for (const [e,i] of Object.entries(t))
        try {
            n[e] = i
        } catch {
            Object.defineProperty(n, e, {
                configurable: !0,
                get() {
                    return i
                }
            })
        }
    return n
}
function $n(n) {
    if (n === "true")
        return !0;
    if (n === "false")
        return !1;
    if (n === Number(n).toString())
        return Number(n);
    if (n === "" || n === "null")
        return null;
    if (typeof n != "string")
        return n;
    try {
        return JSON.parse(decodeURIComponent(n))
    } catch {
        return n
    }
}
function Se(n) {
    return n.replace(/[A-Z]/g, t => `-${t.toLowerCase()}`)
}
const q = {
    setDataAttribute(n, t, e) {
        n.setAttribute(`data-bs-${Se(t)}`, e)
    },
    removeDataAttribute(n, t) {
        n.removeAttribute(`data-bs-${Se(t)}`)
    },
    getDataAttributes(n) {
        if (!n)
            return {};
        const t = {}
          , e = Object.keys(n.dataset).filter(i => i.startsWith("bs") && !i.startsWith("bsConfig"));
        for (const i of e) {
            let s = i.replace(/^bs/, "");
            s = s.charAt(0).toLowerCase() + s.slice(1, s.length),
            t[s] = $n(n.dataset[i])
        }
        return t
    },
    getDataAttribute(n, t) {
        return $n(n.getAttribute(`data-bs-${Se(t)}`))
    }
};
class Yt {
    static get Default() {
        return {}
    }
    static get DefaultType() {
        return {}
    }
    static get NAME() {
        throw new Error('You have to implement the static method "NAME", for each component!')
    }
    _getConfig(t) {
        return t = this._mergeConfigObj(t),
        t = this._configAfterMerge(t),
        this._typeCheckConfig(t),
        t
    }
    _configAfterMerge(t) {
        return t
    }
    _mergeConfigObj(t, e) {
        const i = G(e) ? q.getDataAttribute(e, "config") : {};
        return {
            ...this.constructor.Default,
            ...typeof i == "object" ? i : {},
            ...G(e) ? q.getDataAttributes(e) : {},
            ...typeof t == "object" ? t : {}
        }
    }
    _typeCheckConfig(t, e=this.constructor.DefaultType) {
        for (const [i,s] of Object.entries(e)) {
            const l = t[i]
              , c = G(l) ? "element" : sr(l);
            if (!new RegExp(s).test(c))
                throw new TypeError(`${this.constructor.NAME.toUpperCase()}: Option "${i}" provided type "${c}" but expected type "${s}".`)
        }
    }
}
const _r = "5.3.3";
class K extends Yt {
    constructor(t, e) {
        super(),
        t = tt(t),
        t && (this._element = t,
        this._config = this._getConfig(e),
        Ce.set(this._element, this.constructor.DATA_KEY, this))
    }
    dispose() {
        Ce.remove(this._element, this.constructor.DATA_KEY),
        d.off(this._element, this.constructor.EVENT_KEY);
        for (const t of Object.getOwnPropertyNames(this))
            this[t] = null
    }
    _queueCallback(t, e, i=!0) {
        xi(t, e, i)
    }
    _getConfig(t) {
        return t = this._mergeConfigObj(t, this._element),
        t = this._configAfterMerge(t),
        this._typeCheckConfig(t),
        t
    }
    static getInstance(t) {
        return Ce.get(tt(t), this.DATA_KEY)
    }
    static getOrCreateInstance(t, e={}) {
        return this.getInstance(t) || new this(t,typeof e == "object" ? e : null)
    }
    static get VERSION() {
        return _r
    }
    static get DATA_KEY() {
        return `bs.${this.NAME}`
    }
    static get EVENT_KEY() {
        return `.${this.DATA_KEY}`
    }
    static eventName(t) {
        return `${t}${this.EVENT_KEY}`
    }
}
const De = n => {
    let t = n.getAttribute("data-bs-target");
    if (!t || t === "#") {
        let e = n.getAttribute("href");
        if (!e || !e.includes("#") && !e.startsWith("."))
            return null;
        e.includes("#") && !e.startsWith("#") && (e = `#${e.split("#")[1]}`),
        t = e && e !== "#" ? e.trim() : null
    }
    return t ? t.split(",").map(e => Di(e)).join(",") : null
}
  , m = {
    find(n, t=document.documentElement) {
        return [].concat(...Element.prototype.querySelectorAll.call(t, n))
    },
    findOne(n, t=document.documentElement) {
        return Element.prototype.querySelector.call(t, n)
    },
    children(n, t) {
        return [].concat(...n.children).filter(e => e.matches(t))
    },
    parents(n, t) {
        const e = [];
        let i = n.parentNode.closest(t);
        for (; i; )
            e.push(i),
            i = i.parentNode.closest(t);
        return e
    },
    prev(n, t) {
        let e = n.previousElementSibling;
        for (; e; ) {
            if (e.matches(t))
                return [e];
            e = e.previousElementSibling
        }
        return []
    },
    next(n, t) {
        let e = n.nextElementSibling;
        for (; e; ) {
            if (e.matches(t))
                return [e];
            e = e.nextElementSibling
        }
        return []
    },
    focusableChildren(n) {
        const t = ["a", "button", "input", "textarea", "select", "details", "[tabindex]", '[contenteditable="true"]'].map(e => `${e}:not([tabindex^="-"])`).join(",");
        return this.find(t, n).filter(e => !et(e) && xt(e))
    },
    getSelectorFromElement(n) {
        const t = De(n);
        return t && m.findOne(t) ? t : null
    },
    getElementFromSelector(n) {
        const t = De(n);
        return t ? m.findOne(t) : null
    },
    getMultipleElementsFromSelector(n) {
        const t = De(n);
        return t ? m.find(t) : []
    }
}
  , me = (n, t="hide") => {
    const e = `click.dismiss${n.EVENT_KEY}`
      , i = n.NAME;
    d.on(document, e, `[data-bs-dismiss="${i}"]`, function(s) {
        if (["A", "AREA"].includes(this.tagName) && s.preventDefault(),
        et(this))
            return;
        const l = m.getElementFromSelector(this) || this.closest(`.${i}`);
        n.getOrCreateInstance(l)[t]()
    })
}
  , mr = "alert"
  , gr = "bs.alert"
  , Hi = `.${gr}`
  , Er = `close${Hi}`
  , vr = `closed${Hi}`
  , br = "fade"
  , Ar = "show";
class ge extends K {
    static get NAME() {
        return mr
    }
    close() {
        if (d.trigger(this._element, Er).defaultPrevented)
            return;
        this._element.classList.remove(Ar);
        const e = this._element.classList.contains(br);
        this._queueCallback( () => this._destroyElement(), this._element, e)
    }
    _destroyElement() {
        this._element.remove(),
        d.trigger(this._element, vr),
        this.dispose()
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = ge.getOrCreateInstance(this);
            if (typeof t == "string") {
                if (e[t] === void 0 || t.startsWith("_") || t === "constructor")
                    throw new TypeError(`No method named "${t}"`);
                e[t](this)
            }
        })
    }
}
me(ge, "close");
W(ge);
const yr = "button"
  , Tr = "bs.button"
  , wr = `.${Tr}`
  , Cr = ".data-api"
  , Or = "active"
  , In = '[data-bs-toggle="button"]'
  , Nr = `click${wr}${Cr}`;
class Ee extends K {
    static get NAME() {
        return yr
    }
    toggle() {
        this._element.setAttribute("aria-pressed", this._element.classList.toggle(Or))
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = Ee.getOrCreateInstance(this);
            t === "toggle" && e[t]()
        })
    }
}
d.on(document, Nr, In, n => {
    n.preventDefault();
    const t = n.target.closest(In);
    Ee.getOrCreateInstance(t).toggle()
}
);
W(Ee);
const Sr = "swipe"
  , Mt = ".bs.swipe"
  , Dr = `touchstart${Mt}`
  , Lr = `touchmove${Mt}`
  , $r = `touchend${Mt}`
  , Ir = `pointerdown${Mt}`
  , xr = `pointerup${Mt}`
  , Mr = "touch"
  , Rr = "pen"
  , Pr = "pointer-event"
  , kr = 40
  , Fr = {
    endCallback: null,
    leftCallback: null,
    rightCallback: null
}
  , Vr = {
    endCallback: "(function|null)",
    leftCallback: "(function|null)",
    rightCallback: "(function|null)"
};
class fe extends Yt {
    constructor(t, e) {
        super(),
        this._element = t,
        !(!t || !fe.isSupported()) && (this._config = this._getConfig(e),
        this._deltaX = 0,
        this._supportPointerEvents = !!window.PointerEvent,
        this._initEvents())
    }
    static get Default() {
        return Fr
    }
    static get DefaultType() {
        return Vr
    }
    static get NAME() {
        return Sr
    }
    dispose() {
        d.off(this._element, Mt)
    }
    _start(t) {
        if (!this._supportPointerEvents) {
            this._deltaX = t.touches[0].clientX;
            return
        }
        this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX)
    }
    _end(t) {
        this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX - this._deltaX),
        this._handleSwipe(),
        x(this._config.endCallback)
    }
    _move(t) {
        this._deltaX = t.touches && t.touches.length > 1 ? 0 : t.touches[0].clientX - this._deltaX
    }
    _handleSwipe() {
        const t = Math.abs(this._deltaX);
        if (t <= kr)
            return;
        const e = t / this._deltaX;
        this._deltaX = 0,
        e && x(e > 0 ? this._config.rightCallback : this._config.leftCallback)
    }
    _initEvents() {
        this._supportPointerEvents ? (d.on(this._element, Ir, t => this._start(t)),
        d.on(this._element, xr, t => this._end(t)),
        this._element.classList.add(Pr)) : (d.on(this._element, Dr, t => this._start(t)),
        d.on(this._element, Lr, t => this._move(t)),
        d.on(this._element, $r, t => this._end(t)))
    }
    _eventIsPointerPenTouch(t) {
        return this._supportPointerEvents && (t.pointerType === Rr || t.pointerType === Mr)
    }
    static isSupported() {
        return "ontouchstart"in document.documentElement || navigator.maxTouchPoints > 0
    }
}
const Hr = "carousel"
  , Wr = "bs.carousel"
  , st = `.${Wr}`
  , Wi = ".data-api"
  , Br = "ArrowLeft"
  , jr = "ArrowRight"
  , Kr = 500
  , Ft = "next"
  , vt = "prev"
  , yt = "left"
  , ae = "right"
  , Yr = `slide${st}`
  , Le = `slid${st}`
  , zr = `keydown${st}`
  , Ur = `mouseenter${st}`
  , Gr = `mouseleave${st}`
  , qr = `dragstart${st}`
  , Xr = `load${st}${Wi}`
  , Qr = `click${st}${Wi}`
  , Bi = "carousel"
  , te = "active"
  , Jr = "slide"
  , Zr = "carousel-item-end"
  , to = "carousel-item-start"
  , eo = "carousel-item-next"
  , no = "carousel-item-prev"
  , ji = ".active"
  , Ki = ".carousel-item"
  , io = ji + Ki
  , so = ".carousel-item img"
  , ro = ".carousel-indicators"
  , oo = "[data-bs-slide], [data-bs-slide-to]"
  , ao = '[data-bs-ride="carousel"]'
  , lo = {
    [Br]: ae,
    [jr]: yt
}
  , co = {
    interval: 5e3,
    keyboard: !0,
    pause: "hover",
    ride: !1,
    touch: !0,
    wrap: !0
}
  , uo = {
    interval: "(number|boolean)",
    keyboard: "boolean",
    pause: "(string|boolean)",
    ride: "(boolean|string)",
    touch: "boolean",
    wrap: "boolean"
};
class zt extends K {
    constructor(t, e) {
        super(t, e),
        this._interval = null,
        this._activeElement = null,
        this._isSliding = !1,
        this.touchTimeout = null,
        this._swipeHelper = null,
        this._indicatorsElement = m.findOne(ro, this._element),
        this._addEventListeners(),
        this._config.ride === Bi && this.cycle()
    }
    static get Default() {
        return co
    }
    static get DefaultType() {
        return uo
    }
    static get NAME() {
        return Hr
    }
    next() {
        this._slide(Ft)
    }
    nextWhenVisible() {
        !document.hidden && xt(this._element) && this.next()
    }
    prev() {
        this._slide(vt)
    }
    pause() {
        this._isSliding && Li(this._element),
        this._clearInterval()
    }
    cycle() {
        this._clearInterval(),
        this._updateInterval(),
        this._interval = setInterval( () => this.nextWhenVisible(), this._config.interval)
    }
    _maybeEnableCycle() {
        if (this._config.ride) {
            if (this._isSliding) {
                d.one(this._element, Le, () => this.cycle());
                return
            }
            this.cycle()
        }
    }
    to(t) {
        const e = this._getItems();
        if (t > e.length - 1 || t < 0)
            return;
        if (this._isSliding) {
            d.one(this._element, Le, () => this.to(t));
            return
        }
        const i = this._getItemIndex(this._getActive());
        if (i === t)
            return;
        const s = t > i ? Ft : vt;
        this._slide(s, e[t])
    }
    dispose() {
        this._swipeHelper && this._swipeHelper.dispose(),
        super.dispose()
    }
    _configAfterMerge(t) {
        return t.defaultInterval = t.interval,
        t
    }
    _addEventListeners() {
        this._config.keyboard && d.on(this._element, zr, t => this._keydown(t)),
        this._config.pause === "hover" && (d.on(this._element, Ur, () => this.pause()),
        d.on(this._element, Gr, () => this._maybeEnableCycle())),
        this._config.touch && fe.isSupported() && this._addTouchEventListeners()
    }
    _addTouchEventListeners() {
        for (const i of m.find(so, this._element))
            d.on(i, qr, s => s.preventDefault());
        const e = {
            leftCallback: () => this._slide(this._directionToOrder(yt)),
            rightCallback: () => this._slide(this._directionToOrder(ae)),
            endCallback: () => {
                this._config.pause === "hover" && (this.pause(),
                this.touchTimeout && clearTimeout(this.touchTimeout),
                this.touchTimeout = setTimeout( () => this._maybeEnableCycle(), Kr + this._config.interval))
            }
        };
        this._swipeHelper = new fe(this._element,e)
    }
    _keydown(t) {
        if (/input|textarea/i.test(t.target.tagName))
            return;
        const e = lo[t.key];
        e && (t.preventDefault(),
        this._slide(this._directionToOrder(e)))
    }
    _getItemIndex(t) {
        return this._getItems().indexOf(t)
    }
    _setActiveIndicatorElement(t) {
        if (!this._indicatorsElement)
            return;
        const e = m.findOne(ji, this._indicatorsElement);
        e.classList.remove(te),
        e.removeAttribute("aria-current");
        const i = m.findOne(`[data-bs-slide-to="${t}"]`, this._indicatorsElement);
        i && (i.classList.add(te),
        i.setAttribute("aria-current", "true"))
    }
    _updateInterval() {
        const t = this._activeElement || this._getActive();
        if (!t)
            return;
        const e = Number.parseInt(t.getAttribute("data-bs-interval"), 10);
        this._config.interval = e || this._config.defaultInterval
    }
    _slide(t, e=null) {
        if (this._isSliding)
            return;
        const i = this._getActive()
          , s = t === Ft
          , l = e || an(this._getItems(), i, s, this._config.wrap);
        if (l === i)
            return;
        const c = this._getItemIndex(l)
          , u = p => d.trigger(this._element, p, {
            relatedTarget: l,
            direction: this._orderToDirection(t),
            from: this._getItemIndex(i),
            to: c
        });
        if (u(Yr).defaultPrevented || !i || !l)
            return;
        const a = !!this._interval;
        this.pause(),
        this._isSliding = !0,
        this._setActiveIndicatorElement(c),
        this._activeElement = l;
        const r = s ? to : Zr
          , f = s ? eo : no;
        l.classList.add(f),
        Kt(l),
        i.classList.add(r),
        l.classList.add(r);
        const h = () => {
            l.classList.remove(r, f),
            l.classList.add(te),
            i.classList.remove(te, f, r),
            this._isSliding = !1,
            u(Le)
        }
        ;
        this._queueCallback(h, i, this._isAnimated()),
        a && this.cycle()
    }
    _isAnimated() {
        return this._element.classList.contains(Jr)
    }
    _getActive() {
        return m.findOne(io, this._element)
    }
    _getItems() {
        return m.find(Ki, this._element)
    }
    _clearInterval() {
        this._interval && (clearInterval(this._interval),
        this._interval = null)
    }
    _directionToOrder(t) {
        return V() ? t === yt ? vt : Ft : t === yt ? Ft : vt
    }
    _orderToDirection(t) {
        return V() ? t === vt ? yt : ae : t === vt ? ae : yt
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = zt.getOrCreateInstance(this, t);
            if (typeof t == "number") {
                e.to(t);
                return
            }
            if (typeof t == "string") {
                if (e[t] === void 0 || t.startsWith("_") || t === "constructor")
                    throw new TypeError(`No method named "${t}"`);
                e[t]()
            }
        })
    }
}
d.on(document, Qr, oo, function(n) {
    const t = m.getElementFromSelector(this);
    if (!t || !t.classList.contains(Bi))
        return;
    n.preventDefault();
    const e = zt.getOrCreateInstance(t)
      , i = this.getAttribute("data-bs-slide-to");
    if (i) {
        e.to(i),
        e._maybeEnableCycle();
        return
    }
    if (q.getDataAttribute(this, "slide") === "next") {
        e.next(),
        e._maybeEnableCycle();
        return
    }
    e.prev(),
    e._maybeEnableCycle()
});
d.on(window, Xr, () => {
    const n = m.find(ao);
    for (const t of n)
        zt.getOrCreateInstance(t)
}
);
W(zt);
const fo = "collapse"
  , ho = "bs.collapse"
  , Ut = `.${ho}`
  , po = ".data-api"
  , _o = `show${Ut}`
  , mo = `shown${Ut}`
  , go = `hide${Ut}`
  , Eo = `hidden${Ut}`
  , vo = `click${Ut}${po}`
  , $e = "show"
  , wt = "collapse"
  , ee = "collapsing"
  , bo = "collapsed"
  , Ao = `:scope .${wt} .${wt}`
  , yo = "collapse-horizontal"
  , To = "width"
  , wo = "height"
  , Co = ".collapse.show, .collapse.collapsing"
  , Ye = '[data-bs-toggle="collapse"]'
  , Oo = {
    parent: null,
    toggle: !0
}
  , No = {
    parent: "(null|element)",
    toggle: "boolean"
};
class Bt extends K {
    constructor(t, e) {
        super(t, e),
        this._isTransitioning = !1,
        this._triggerArray = [];
        const i = m.find(Ye);
        for (const s of i) {
            const l = m.getSelectorFromElement(s)
              , c = m.find(l).filter(u => u === this._element);
            l !== null && c.length && this._triggerArray.push(s)
        }
        this._initializeChildren(),
        this._config.parent || this._addAriaAndCollapsedClass(this._triggerArray, this._isShown()),
        this._config.toggle && this.toggle()
    }
    static get Default() {
        return Oo
    }
    static get DefaultType() {
        return No
    }
    static get NAME() {
        return fo
    }
    toggle() {
        this._isShown() ? this.hide() : this.show()
    }
    show() {
        if (this._isTransitioning || this._isShown())
            return;
        let t = [];
        if (this._config.parent && (t = this._getFirstLevelChildren(Co).filter(u => u !== this._element).map(u => Bt.getOrCreateInstance(u, {
            toggle: !1
        }))),
        t.length && t[0]._isTransitioning || d.trigger(this._element, _o).defaultPrevented)
            return;
        for (const u of t)
            u.hide();
        const i = this._getDimension();
        this._element.classList.remove(wt),
        this._element.classList.add(ee),
        this._element.style[i] = 0,
        this._addAriaAndCollapsedClass(this._triggerArray, !0),
        this._isTransitioning = !0;
        const s = () => {
            this._isTransitioning = !1,
            this._element.classList.remove(ee),
            this._element.classList.add(wt, $e),
            this._element.style[i] = "",
            d.trigger(this._element, mo)
        }
          , c = `scroll${i[0].toUpperCase() + i.slice(1)}`;
        this._queueCallback(s, this._element, !0),
        this._element.style[i] = `${this._element[c]}px`
    }
    hide() {
        if (this._isTransitioning || !this._isShown() || d.trigger(this._element, go).defaultPrevented)
            return;
        const e = this._getDimension();
        this._element.style[e] = `${this._element.getBoundingClientRect()[e]}px`,
        Kt(this._element),
        this._element.classList.add(ee),
        this._element.classList.remove(wt, $e);
        for (const s of this._triggerArray) {
            const l = m.getElementFromSelector(s);
            l && !this._isShown(l) && this._addAriaAndCollapsedClass([s], !1)
        }
        this._isTransitioning = !0;
        const i = () => {
            this._isTransitioning = !1,
            this._element.classList.remove(ee),
            this._element.classList.add(wt),
            d.trigger(this._element, Eo)
        }
        ;
        this._element.style[e] = "",
        this._queueCallback(i, this._element, !0)
    }
    _isShown(t=this._element) {
        return t.classList.contains($e)
    }
    _configAfterMerge(t) {
        return t.toggle = !!t.toggle,
        t.parent = tt(t.parent),
        t
    }
    _getDimension() {
        return this._element.classList.contains(yo) ? To : wo
    }
    _initializeChildren() {
        if (!this._config.parent)
            return;
        const t = this._getFirstLevelChildren(Ye);
        for (const e of t) {
            const i = m.getElementFromSelector(e);
            i && this._addAriaAndCollapsedClass([e], this._isShown(i))
        }
    }
    _getFirstLevelChildren(t) {
        const e = m.find(Ao, this._config.parent);
        return m.find(t, this._config.parent).filter(i => !e.includes(i))
    }
    _addAriaAndCollapsedClass(t, e) {
        if (t.length)
            for (const i of t)
                i.classList.toggle(bo, !e),
                i.setAttribute("aria-expanded", e)
    }
    static jQueryInterface(t) {
        const e = {};
        return typeof t == "string" && /show|hide/.test(t) && (e.toggle = !1),
        this.each(function() {
            const i = Bt.getOrCreateInstance(this, e);
            if (typeof t == "string") {
                if (typeof i[t] > "u")
                    throw new TypeError(`No method named "${t}"`);
                i[t]()
            }
        })
    }
}
d.on(document, vo, Ye, function(n) {
    (n.target.tagName === "A" || n.delegateTarget && n.delegateTarget.tagName === "A") && n.preventDefault();
    for (const t of m.getMultipleElementsFromSelector(this))
        Bt.getOrCreateInstance(t, {
            toggle: !1
        }).toggle()
});
W(Bt);
const xn = "dropdown"
  , So = "bs.dropdown"
  , mt = `.${So}`
  , cn = ".data-api"
  , Do = "Escape"
  , Mn = "Tab"
  , Lo = "ArrowUp"
  , Rn = "ArrowDown"
  , $o = 2
  , Io = `hide${mt}`
  , xo = `hidden${mt}`
  , Mo = `show${mt}`
  , Ro = `shown${mt}`
  , Yi = `click${mt}${cn}`
  , zi = `keydown${mt}${cn}`
  , Po = `keyup${mt}${cn}`
  , Tt = "show"
  , ko = "dropup"
  , Fo = "dropend"
  , Vo = "dropstart"
  , Ho = "dropup-center"
  , Wo = "dropdown-center"
  , ft = '[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)'
  , Bo = `${ft}.${Tt}`
  , le = ".dropdown-menu"
  , jo = ".navbar"
  , Ko = ".navbar-nav"
  , Yo = ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)"
  , zo = V() ? "top-end" : "top-start"
  , Uo = V() ? "top-start" : "top-end"
  , Go = V() ? "bottom-end" : "bottom-start"
  , qo = V() ? "bottom-start" : "bottom-end"
  , Xo = V() ? "left-start" : "right-start"
  , Qo = V() ? "right-start" : "left-start"
  , Jo = "top"
  , Zo = "bottom"
  , ta = {
    autoClose: !0,
    boundary: "clippingParents",
    display: "dynamic",
    offset: [0, 2],
    popperConfig: null,
    reference: "toggle"
}
  , ea = {
    autoClose: "(boolean|string)",
    boundary: "(string|element)",
    display: "string",
    offset: "(array|string|function)",
    popperConfig: "(null|object|function)",
    reference: "(string|element|object)"
};
class z extends K {
    constructor(t, e) {
        super(t, e),
        this._popper = null,
        this._parent = this._element.parentNode,
        this._menu = m.next(this._element, le)[0] || m.prev(this._element, le)[0] || m.findOne(le, this._parent),
        this._inNavbar = this._detectNavbar()
    }
    static get Default() {
        return ta
    }
    static get DefaultType() {
        return ea
    }
    static get NAME() {
        return xn
    }
    toggle() {
        return this._isShown() ? this.hide() : this.show()
    }
    show() {
        if (et(this._element) || this._isShown())
            return;
        const t = {
            relatedTarget: this._element
        };
        if (!d.trigger(this._element, Mo, t).defaultPrevented) {
            if (this._createPopper(),
            "ontouchstart"in document.documentElement && !this._parent.closest(Ko))
                for (const i of [].concat(...document.body.children))
                    d.on(i, "mouseover", ue);
            this._element.focus(),
            this._element.setAttribute("aria-expanded", !0),
            this._menu.classList.add(Tt),
            this._element.classList.add(Tt),
            d.trigger(this._element, Ro, t)
        }
    }
    hide() {
        if (et(this._element) || !this._isShown())
            return;
        const t = {
            relatedTarget: this._element
        };
        this._completeHide(t)
    }
    dispose() {
        this._popper && this._popper.destroy(),
        super.dispose()
    }
    update() {
        this._inNavbar = this._detectNavbar(),
        this._popper && this._popper.update()
    }
    _completeHide(t) {
        if (!d.trigger(this._element, Io, t).defaultPrevented) {
            if ("ontouchstart"in document.documentElement)
                for (const i of [].concat(...document.body.children))
                    d.off(i, "mouseover", ue);
            this._popper && this._popper.destroy(),
            this._menu.classList.remove(Tt),
            this._element.classList.remove(Tt),
            this._element.setAttribute("aria-expanded", "false"),
            q.removeDataAttribute(this._menu, "popper"),
            d.trigger(this._element, xo, t)
        }
    }
    _getConfig(t) {
        if (t = super._getConfig(t),
        typeof t.reference == "object" && !G(t.reference) && typeof t.reference.getBoundingClientRect != "function")
            throw new TypeError(`${xn.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`);
        return t
    }
    _createPopper() {
        if (typeof Si > "u")
            throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
        let t = this._element;
        this._config.reference === "parent" ? t = this._parent : G(this._config.reference) ? t = tt(this._config.reference) : typeof this._config.reference == "object" && (t = this._config.reference);
        const e = this._getPopperConfig();
        this._popper = on(t, this._menu, e)
    }
    _isShown() {
        return this._menu.classList.contains(Tt)
    }
    _getPlacement() {
        const t = this._parent;
        if (t.classList.contains(Fo))
            return Xo;
        if (t.classList.contains(Vo))
            return Qo;
        if (t.classList.contains(Ho))
            return Jo;
        if (t.classList.contains(Wo))
            return Zo;
        const e = getComputedStyle(this._menu).getPropertyValue("--bs-position").trim() === "end";
        return t.classList.contains(ko) ? e ? Uo : zo : e ? qo : Go
    }
    _detectNavbar() {
        return this._element.closest(jo) !== null
    }
    _getOffset() {
        const {offset: t} = this._config;
        return typeof t == "string" ? t.split(",").map(e => Number.parseInt(e, 10)) : typeof t == "function" ? e => t(e, this._element) : t
    }
    _getPopperConfig() {
        const t = {
            placement: this._getPlacement(),
            modifiers: [{
                name: "preventOverflow",
                options: {
                    boundary: this._config.boundary
                }
            }, {
                name: "offset",
                options: {
                    offset: this._getOffset()
                }
            }]
        };
        return (this._inNavbar || this._config.display === "static") && (q.setDataAttribute(this._menu, "popper", "static"),
        t.modifiers = [{
            name: "applyStyles",
            enabled: !1
        }]),
        {
            ...t,
            ...x(this._config.popperConfig, [t])
        }
    }
    _selectMenuItem({key: t, target: e}) {
        const i = m.find(Yo, this._menu).filter(s => xt(s));
        i.length && an(i, e, t === Rn, !i.includes(e)).focus()
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = z.getOrCreateInstance(this, t);
            if (typeof t == "string") {
                if (typeof e[t] > "u")
                    throw new TypeError(`No method named "${t}"`);
                e[t]()
            }
        })
    }
    static clearMenus(t) {
        if (t.button === $o || t.type === "keyup" && t.key !== Mn)
            return;
        const e = m.find(Bo);
        for (const i of e) {
            const s = z.getInstance(i);
            if (!s || s._config.autoClose === !1)
                continue;
            const l = t.composedPath()
              , c = l.includes(s._menu);
            if (l.includes(s._element) || s._config.autoClose === "inside" && !c || s._config.autoClose === "outside" && c || s._menu.contains(t.target) && (t.type === "keyup" && t.key === Mn || /input|select|option|textarea|form/i.test(t.target.tagName)))
                continue;
            const u = {
                relatedTarget: s._element
            };
            t.type === "click" && (u.clickEvent = t),
            s._completeHide(u)
        }
    }
    static dataApiKeydownHandler(t) {
        const e = /input|textarea/i.test(t.target.tagName)
          , i = t.key === Do
          , s = [Lo, Rn].includes(t.key);
        if (!s && !i || e && !i)
            return;
        t.preventDefault();
        const l = this.matches(ft) ? this : m.prev(this, ft)[0] || m.next(this, ft)[0] || m.findOne(ft, t.delegateTarget.parentNode)
          , c = z.getOrCreateInstance(l);
        if (s) {
            t.stopPropagation(),
            c.show(),
            c._selectMenuItem(t);
            return
        }
        c._isShown() && (t.stopPropagation(),
        c.hide(),
        l.focus())
    }
}
d.on(document, zi, ft, z.dataApiKeydownHandler);
d.on(document, zi, le, z.dataApiKeydownHandler);
d.on(document, Yi, z.clearMenus);
d.on(document, Po, z.clearMenus);
d.on(document, Yi, ft, function(n) {
    n.preventDefault(),
    z.getOrCreateInstance(this).toggle()
});
W(z);
const Ui = "backdrop"
  , na = "fade"
  , Pn = "show"
  , kn = `mousedown.bs.${Ui}`
  , ia = {
    className: "modal-backdrop",
    clickCallback: null,
    isAnimated: !1,
    isVisible: !0,
    rootElement: "body"
}
  , sa = {
    className: "string",
    clickCallback: "(function|null)",
    isAnimated: "boolean",
    isVisible: "boolean",
    rootElement: "(element|string)"
};
class Gi extends Yt {
    constructor(t) {
        super(),
        this._config = this._getConfig(t),
        this._isAppended = !1,
        this._element = null
    }
    static get Default() {
        return ia
    }
    static get DefaultType() {
        return sa
    }
    static get NAME() {
        return Ui
    }
    show(t) {
        if (!this._config.isVisible) {
            x(t);
            return
        }
        this._append();
        const e = this._getElement();
        this._config.isAnimated && Kt(e),
        e.classList.add(Pn),
        this._emulateAnimation( () => {
            x(t)
        }
        )
    }
    hide(t) {
        if (!this._config.isVisible) {
            x(t);
            return
        }
        this._getElement().classList.remove(Pn),
        this._emulateAnimation( () => {
            this.dispose(),
            x(t)
        }
        )
    }
    dispose() {
        this._isAppended && (d.off(this._element, kn),
        this._element.remove(),
        this._isAppended = !1)
    }
    _getElement() {
        if (!this._element) {
            const t = document.createElement("div");
            t.className = this._config.className,
            this._config.isAnimated && t.classList.add(na),
            this._element = t
        }
        return this._element
    }
    _configAfterMerge(t) {
        return t.rootElement = tt(t.rootElement),
        t
    }
    _append() {
        if (this._isAppended)
            return;
        const t = this._getElement();
        this._config.rootElement.append(t),
        d.on(t, kn, () => {
            x(this._config.clickCallback)
        }
        ),
        this._isAppended = !0
    }
    _emulateAnimation(t) {
        xi(t, this._getElement(), this._config.isAnimated)
    }
}
const ra = "focustrap"
  , oa = "bs.focustrap"
  , de = `.${oa}`
  , aa = `focusin${de}`
  , la = `keydown.tab${de}`
  , ca = "Tab"
  , ua = "forward"
  , Fn = "backward"
  , fa = {
    autofocus: !0,
    trapElement: null
}
  , da = {
    autofocus: "boolean",
    trapElement: "element"
};
class qi extends Yt {
    constructor(t) {
        super(),
        this._config = this._getConfig(t),
        this._isActive = !1,
        this._lastTabNavDirection = null
    }
    static get Default() {
        return fa
    }
    static get DefaultType() {
        return da
    }
    static get NAME() {
        return ra
    }
    activate() {
        this._isActive || (this._config.autofocus && this._config.trapElement.focus(),
        d.off(document, de),
        d.on(document, aa, t => this._handleFocusin(t)),
        d.on(document, la, t => this._handleKeydown(t)),
        this._isActive = !0)
    }
    deactivate() {
        this._isActive && (this._isActive = !1,
        d.off(document, de))
    }
    _handleFocusin(t) {
        const {trapElement: e} = this._config;
        if (t.target === document || t.target === e || e.contains(t.target))
            return;
        const i = m.focusableChildren(e);
        i.length === 0 ? e.focus() : this._lastTabNavDirection === Fn ? i[i.length - 1].focus() : i[0].focus()
    }
    _handleKeydown(t) {
        t.key === ca && (this._lastTabNavDirection = t.shiftKey ? Fn : ua)
    }
}
const Vn = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"
  , Hn = ".sticky-top"
  , ne = "padding-right"
  , Wn = "margin-right";
class ze {
    constructor() {
        this._element = document.body
    }
    getWidth() {
        const t = document.documentElement.clientWidth;
        return Math.abs(window.innerWidth - t)
    }
    hide() {
        const t = this.getWidth();
        this._disableOverFlow(),
        this._setElementAttributes(this._element, ne, e => e + t),
        this._setElementAttributes(Vn, ne, e => e + t),
        this._setElementAttributes(Hn, Wn, e => e - t)
    }
    reset() {
        this._resetElementAttributes(this._element, "overflow"),
        this._resetElementAttributes(this._element, ne),
        this._resetElementAttributes(Vn, ne),
        this._resetElementAttributes(Hn, Wn)
    }
    isOverflowing() {
        return this.getWidth() > 0
    }
    _disableOverFlow() {
        this._saveInitialAttribute(this._element, "overflow"),
        this._element.style.overflow = "hidden"
    }
    _setElementAttributes(t, e, i) {
        const s = this.getWidth()
          , l = c => {
            if (c !== this._element && window.innerWidth > c.clientWidth + s)
                return;
            this._saveInitialAttribute(c, e);
            const u = window.getComputedStyle(c).getPropertyValue(e);
            c.style.setProperty(e, `${i(Number.parseFloat(u))}px`)
        }
        ;
        this._applyManipulationCallback(t, l)
    }
    _saveInitialAttribute(t, e) {
        const i = t.style.getPropertyValue(e);
        i && q.setDataAttribute(t, e, i)
    }
    _resetElementAttributes(t, e) {
        const i = s => {
            const l = q.getDataAttribute(s, e);
            if (l === null) {
                s.style.removeProperty(e);
                return
            }
            q.removeDataAttribute(s, e),
            s.style.setProperty(e, l)
        }
        ;
        this._applyManipulationCallback(t, i)
    }
    _applyManipulationCallback(t, e) {
        if (G(t)) {
            e(t);
            return
        }
        for (const i of m.find(t, this._element))
            e(i)
    }
}
const ha = "modal"
  , pa = "bs.modal"
  , H = `.${pa}`
  , _a = ".data-api"
  , ma = "Escape"
  , ga = `hide${H}`
  , Ea = `hidePrevented${H}`
  , Xi = `hidden${H}`
  , Qi = `show${H}`
  , va = `shown${H}`
  , ba = `resize${H}`
  , Aa = `click.dismiss${H}`
  , ya = `mousedown.dismiss${H}`
  , Ta = `keydown.dismiss${H}`
  , wa = `click${H}${_a}`
  , Bn = "modal-open"
  , Ca = "fade"
  , jn = "show"
  , Ie = "modal-static"
  , Oa = ".modal.show"
  , Na = ".modal-dialog"
  , Sa = ".modal-body"
  , Da = '[data-bs-toggle="modal"]'
  , La = {
    backdrop: !0,
    focus: !0,
    keyboard: !0
}
  , $a = {
    backdrop: "(boolean|string)",
    focus: "boolean",
    keyboard: "boolean"
};
class Lt extends K {
    constructor(t, e) {
        super(t, e),
        this._dialog = m.findOne(Na, this._element),
        this._backdrop = this._initializeBackDrop(),
        this._focustrap = this._initializeFocusTrap(),
        this._isShown = !1,
        this._isTransitioning = !1,
        this._scrollBar = new ze,
        this._addEventListeners()
    }
    static get Default() {
        return La
    }
    static get DefaultType() {
        return $a
    }
    static get NAME() {
        return ha
    }
    toggle(t) {
        return this._isShown ? this.hide() : this.show(t)
    }
    show(t) {
        this._isShown || this._isTransitioning || d.trigger(this._element, Qi, {
            relatedTarget: t
        }).defaultPrevented || (this._isShown = !0,
        this._isTransitioning = !0,
        this._scrollBar.hide(),
        document.body.classList.add(Bn),
        this._adjustDialog(),
        this._backdrop.show( () => this._showElement(t)))
    }
    hide() {
        !this._isShown || this._isTransitioning || d.trigger(this._element, ga).defaultPrevented || (this._isShown = !1,
        this._isTransitioning = !0,
        this._focustrap.deactivate(),
        this._element.classList.remove(jn),
        this._queueCallback( () => this._hideModal(), this._element, this._isAnimated()))
    }
    dispose() {
        d.off(window, H),
        d.off(this._dialog, H),
        this._backdrop.dispose(),
        this._focustrap.deactivate(),
        super.dispose()
    }
    handleUpdate() {
        this._adjustDialog()
    }
    _initializeBackDrop() {
        return new Gi({
            isVisible: !!this._config.backdrop,
            isAnimated: this._isAnimated()
        })
    }
    _initializeFocusTrap() {
        return new qi({
            trapElement: this._element
        })
    }
    _showElement(t) {
        document.body.contains(this._element) || document.body.append(this._element),
        this._element.style.display = "block",
        this._element.removeAttribute("aria-hidden"),
        this._element.setAttribute("aria-modal", !0),
        this._element.setAttribute("role", "dialog"),
        this._element.scrollTop = 0;
        const e = m.findOne(Sa, this._dialog);
        e && (e.scrollTop = 0),
        Kt(this._element),
        this._element.classList.add(jn);
        const i = () => {
            this._config.focus && this._focustrap.activate(),
            this._isTransitioning = !1,
            d.trigger(this._element, va, {
                relatedTarget: t
            })
        }
        ;
        this._queueCallback(i, this._dialog, this._isAnimated())
    }
    _addEventListeners() {
        d.on(this._element, Ta, t => {
            if (t.key === ma) {
                if (this._config.keyboard) {
                    this.hide();
                    return
                }
                this._triggerBackdropTransition()
            }
        }
        ),
        d.on(window, ba, () => {
            this._isShown && !this._isTransitioning && this._adjustDialog()
        }
        ),
        d.on(this._element, ya, t => {
            d.one(this._element, Aa, e => {
                if (!(this._element !== t.target || this._element !== e.target)) {
                    if (this._config.backdrop === "static") {
                        this._triggerBackdropTransition();
                        return
                    }
                    this._config.backdrop && this.hide()
                }
            }
            )
        }
        )
    }
    _hideModal() {
        this._element.style.display = "none",
        this._element.setAttribute("aria-hidden", !0),
        this._element.removeAttribute("aria-modal"),
        this._element.removeAttribute("role"),
        this._isTransitioning = !1,
        this._backdrop.hide( () => {
            document.body.classList.remove(Bn),
            this._resetAdjustments(),
            this._scrollBar.reset(),
            d.trigger(this._element, Xi)
        }
        )
    }
    _isAnimated() {
        return this._element.classList.contains(Ca)
    }
    _triggerBackdropTransition() {
        if (d.trigger(this._element, Ea).defaultPrevented)
            return;
        const e = this._element.scrollHeight > document.documentElement.clientHeight
          , i = this._element.style.overflowY;
        i === "hidden" || this._element.classList.contains(Ie) || (e || (this._element.style.overflowY = "hidden"),
        this._element.classList.add(Ie),
        this._queueCallback( () => {
            this._element.classList.remove(Ie),
            this._queueCallback( () => {
                this._element.style.overflowY = i
            }
            , this._dialog)
        }
        , this._dialog),
        this._element.focus())
    }
    _adjustDialog() {
        const t = this._element.scrollHeight > document.documentElement.clientHeight
          , e = this._scrollBar.getWidth()
          , i = e > 0;
        if (i && !t) {
            const s = V() ? "paddingLeft" : "paddingRight";
            this._element.style[s] = `${e}px`
        }
        if (!i && t) {
            const s = V() ? "paddingRight" : "paddingLeft";
            this._element.style[s] = `${e}px`
        }
    }
    _resetAdjustments() {
        this._element.style.paddingLeft = "",
        this._element.style.paddingRight = ""
    }
    static jQueryInterface(t, e) {
        return this.each(function() {
            const i = Lt.getOrCreateInstance(this, t);
            if (typeof t == "string") {
                if (typeof i[t] > "u")
                    throw new TypeError(`No method named "${t}"`);
                i[t](e)
            }
        })
    }
}
d.on(document, wa, Da, function(n) {
    const t = m.getElementFromSelector(this);
    ["A", "AREA"].includes(this.tagName) && n.preventDefault(),
    d.one(t, Qi, s => {
        s.defaultPrevented || d.one(t, Xi, () => {
            xt(this) && this.focus()
        }
        )
    }
    );
    const e = m.findOne(Oa);
    e && Lt.getInstance(e).hide(),
    Lt.getOrCreateInstance(t).toggle(this)
});
me(Lt);
W(Lt);
const Ia = "offcanvas"
  , xa = "bs.offcanvas"
  , Q = `.${xa}`
  , Ji = ".data-api"
  , Ma = `load${Q}${Ji}`
  , Ra = "Escape"
  , Kn = "show"
  , Yn = "showing"
  , zn = "hiding"
  , Pa = "offcanvas-backdrop"
  , Zi = ".offcanvas.show"
  , ka = `show${Q}`
  , Fa = `shown${Q}`
  , Va = `hide${Q}`
  , Un = `hidePrevented${Q}`
  , ts = `hidden${Q}`
  , Ha = `resize${Q}`
  , Wa = `click${Q}${Ji}`
  , Ba = `keydown.dismiss${Q}`
  , ja = '[data-bs-toggle="offcanvas"]'
  , Ka = {
    backdrop: !0,
    keyboard: !0,
    scroll: !1
}
  , Ya = {
    backdrop: "(boolean|string)",
    keyboard: "boolean",
    scroll: "boolean"
};
class nt extends K {
    constructor(t, e) {
        super(t, e),
        this._isShown = !1,
        this._backdrop = this._initializeBackDrop(),
        this._focustrap = this._initializeFocusTrap(),
        this._addEventListeners()
    }
    static get Default() {
        return Ka
    }
    static get DefaultType() {
        return Ya
    }
    static get NAME() {
        return Ia
    }
    toggle(t) {
        return this._isShown ? this.hide() : this.show(t)
    }
    show(t) {
        if (this._isShown || d.trigger(this._element, ka, {
            relatedTarget: t
        }).defaultPrevented)
            return;
        this._isShown = !0,
        this._backdrop.show(),
        this._config.scroll || new ze().hide(),
        this._element.setAttribute("aria-modal", !0),
        this._element.setAttribute("role", "dialog"),
        this._element.classList.add(Yn);
        const i = () => {
            (!this._config.scroll || this._config.backdrop) && this._focustrap.activate(),
            this._element.classList.add(Kn),
            this._element.classList.remove(Yn),
            d.trigger(this._element, Fa, {
                relatedTarget: t
            })
        }
        ;
        this._queueCallback(i, this._element, !0)
    }
    hide() {
        if (!this._isShown || d.trigger(this._element, Va).defaultPrevented)
            return;
        this._focustrap.deactivate(),
        this._element.blur(),
        this._isShown = !1,
        this._element.classList.add(zn),
        this._backdrop.hide();
        const e = () => {
            this._element.classList.remove(Kn, zn),
            this._element.removeAttribute("aria-modal"),
            this._element.removeAttribute("role"),
            this._config.scroll || new ze().reset(),
            d.trigger(this._element, ts)
        }
        ;
        this._queueCallback(e, this._element, !0)
    }
    dispose() {
        this._backdrop.dispose(),
        this._focustrap.deactivate(),
        super.dispose()
    }
    _initializeBackDrop() {
        const t = () => {
            if (this._config.backdrop === "static") {
                d.trigger(this._element, Un);
                return
            }
            this.hide()
        }
          , e = !!this._config.backdrop;
        return new Gi({
            className: Pa,
            isVisible: e,
            isAnimated: !0,
            rootElement: this._element.parentNode,
            clickCallback: e ? t : null
        })
    }
    _initializeFocusTrap() {
        return new qi({
            trapElement: this._element
        })
    }
    _addEventListeners() {
        d.on(this._element, Ba, t => {
            if (t.key === Ra) {
                if (this._config.keyboard) {
                    this.hide();
                    return
                }
                d.trigger(this._element, Un)
            }
        }
        )
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = nt.getOrCreateInstance(this, t);
            if (typeof t == "string") {
                if (e[t] === void 0 || t.startsWith("_") || t === "constructor")
                    throw new TypeError(`No method named "${t}"`);
                e[t](this)
            }
        })
    }
}
d.on(document, Wa, ja, function(n) {
    const t = m.getElementFromSelector(this);
    if (["A", "AREA"].includes(this.tagName) && n.preventDefault(),
    et(this))
        return;
    d.one(t, ts, () => {
        xt(this) && this.focus()
    }
    );
    const e = m.findOne(Zi);
    e && e !== t && nt.getInstance(e).hide(),
    nt.getOrCreateInstance(t).toggle(this)
});
d.on(window, Ma, () => {
    for (const n of m.find(Zi))
        nt.getOrCreateInstance(n).show()
}
);
d.on(window, Ha, () => {
    for (const n of m.find("[aria-modal][class*=show][class*=offcanvas-]"))
        getComputedStyle(n).position !== "fixed" && nt.getOrCreateInstance(n).hide()
}
);
me(nt);
W(nt);
const za = /^aria-[\w-]*$/i
  , es = {
    "*": ["class", "dir", "id", "lang", "role", za],
    a: ["target", "href", "title", "rel"],
    area: [],
    b: [],
    br: [],
    col: [],
    code: [],
    dd: [],
    div: [],
    dl: [],
    dt: [],
    em: [],
    hr: [],
    h1: [],
    h2: [],
    h3: [],
    h4: [],
    h5: [],
    h6: [],
    i: [],
    img: ["src", "srcset", "alt", "title", "width", "height"],
    li: [],
    ol: [],
    p: [],
    pre: [],
    s: [],
    small: [],
    span: [],
    sub: [],
    sup: [],
    strong: [],
    u: [],
    ul: []
}
  , Ua = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"])
  , Ga = /^(?!javascript:)(?:[a-z0-9+.-]+:|[^&:/?#]*(?:[/?#]|$))/i
  , qa = (n, t) => {
    const e = n.nodeName.toLowerCase();
    return t.includes(e) ? Ua.has(e) ? !!Ga.test(n.nodeValue) : !0 : t.filter(i => i instanceof RegExp).some(i => i.test(e))
}
;
function Xa(n, t, e) {
    if (!n.length)
        return n;
    if (e && typeof e == "function")
        return e(n);
    const s = new window.DOMParser().parseFromString(n, "text/html")
      , l = [].concat(...s.body.querySelectorAll("*"));
    for (const c of l) {
        const u = c.nodeName.toLowerCase();
        if (!Object.keys(t).includes(u)) {
            c.remove();
            continue
        }
        const o = [].concat(...c.attributes)
          , a = [].concat(t["*"] || [], t[u] || []);
        for (const r of o)
            qa(r, a) || c.removeAttribute(r.nodeName)
    }
    return s.body.innerHTML
}
const Qa = "TemplateFactory"
  , Ja = {
    allowList: es,
    content: {},
    extraClass: "",
    html: !1,
    sanitize: !0,
    sanitizeFn: null,
    template: "<div></div>"
}
  , Za = {
    allowList: "object",
    content: "object",
    extraClass: "(string|function)",
    html: "boolean",
    sanitize: "boolean",
    sanitizeFn: "(null|function)",
    template: "string"
}
  , tl = {
    entry: "(string|element|function|null)",
    selector: "(string|element)"
};
class el extends Yt {
    constructor(t) {
        super(),
        this._config = this._getConfig(t)
    }
    static get Default() {
        return Ja
    }
    static get DefaultType() {
        return Za
    }
    static get NAME() {
        return Qa
    }
    getContent() {
        return Object.values(this._config.content).map(t => this._resolvePossibleFunction(t)).filter(Boolean)
    }
    hasContent() {
        return this.getContent().length > 0
    }
    changeContent(t) {
        return this._checkContent(t),
        this._config.content = {
            ...this._config.content,
            ...t
        },
        this
    }
    toHtml() {
        const t = document.createElement("div");
        t.innerHTML = this._maybeSanitize(this._config.template);
        for (const [s,l] of Object.entries(this._config.content))
            this._setContent(t, l, s);
        const e = t.children[0]
          , i = this._resolvePossibleFunction(this._config.extraClass);
        return i && e.classList.add(...i.split(" ")),
        e
    }
    _typeCheckConfig(t) {
        super._typeCheckConfig(t),
        this._checkContent(t.content)
    }
    _checkContent(t) {
        for (const [e,i] of Object.entries(t))
            super._typeCheckConfig({
                selector: e,
                entry: i
            }, tl)
    }
    _setContent(t, e, i) {
        const s = m.findOne(i, t);
        if (s) {
            if (e = this._resolvePossibleFunction(e),
            !e) {
                s.remove();
                return
            }
            if (G(e)) {
                this._putElementInTemplate(tt(e), s);
                return
            }
            if (this._config.html) {
                s.innerHTML = this._maybeSanitize(e);
                return
            }
            s.textContent = e
        }
    }
    _maybeSanitize(t) {
        return this._config.sanitize ? Xa(t, this._config.allowList, this._config.sanitizeFn) : t
    }
    _resolvePossibleFunction(t) {
        return x(t, [this])
    }
    _putElementInTemplate(t, e) {
        if (this._config.html) {
            e.innerHTML = "",
            e.append(t);
            return
        }
        e.textContent = t.textContent
    }
}
const nl = "tooltip"
  , il = new Set(["sanitize", "allowList", "sanitizeFn"])
  , xe = "fade"
  , sl = "modal"
  , ie = "show"
  , rl = ".tooltip-inner"
  , Gn = `.${sl}`
  , qn = "hide.bs.modal"
  , Vt = "hover"
  , Me = "focus"
  , ol = "click"
  , al = "manual"
  , ll = "hide"
  , cl = "hidden"
  , ul = "show"
  , fl = "shown"
  , dl = "inserted"
  , hl = "click"
  , pl = "focusin"
  , _l = "focusout"
  , ml = "mouseenter"
  , gl = "mouseleave"
  , El = {
    AUTO: "auto",
    TOP: "top",
    RIGHT: V() ? "left" : "right",
    BOTTOM: "bottom",
    LEFT: V() ? "right" : "left"
}
  , vl = {
    allowList: es,
    animation: !0,
    boundary: "clippingParents",
    container: !1,
    customClass: "",
    delay: 0,
    fallbackPlacements: ["top", "right", "bottom", "left"],
    html: !1,
    offset: [0, 6],
    placement: "top",
    popperConfig: null,
    sanitize: !0,
    sanitizeFn: null,
    selector: !1,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    title: "",
    trigger: "hover focus"
}
  , bl = {
    allowList: "object",
    animation: "boolean",
    boundary: "(string|element)",
    container: "(string|element|boolean)",
    customClass: "(string|function)",
    delay: "(number|object)",
    fallbackPlacements: "array",
    html: "boolean",
    offset: "(array|string|function)",
    placement: "(string|function)",
    popperConfig: "(null|object|function)",
    sanitize: "boolean",
    sanitizeFn: "(null|function)",
    selector: "(string|boolean)",
    template: "string",
    title: "(string|element|function)",
    trigger: "string"
};
class Rt extends K {
    constructor(t, e) {
        if (typeof Si > "u")
            throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
        super(t, e),
        this._isEnabled = !0,
        this._timeout = 0,
        this._isHovered = null,
        this._activeTrigger = {},
        this._popper = null,
        this._templateFactory = null,
        this._newContent = null,
        this.tip = null,
        this._setListeners(),
        this._config.selector || this._fixTitle()
    }
    static get Default() {
        return vl
    }
    static get DefaultType() {
        return bl
    }
    static get NAME() {
        return nl
    }
    enable() {
        this._isEnabled = !0
    }
    disable() {
        this._isEnabled = !1
    }
    toggleEnabled() {
        this._isEnabled = !this._isEnabled
    }
    toggle() {
        if (this._isEnabled) {
            if (this._activeTrigger.click = !this._activeTrigger.click,
            this._isShown()) {
                this._leave();
                return
            }
            this._enter()
        }
    }
    dispose() {
        clearTimeout(this._timeout),
        d.off(this._element.closest(Gn), qn, this._hideModalHandler),
        this._element.getAttribute("data-bs-original-title") && this._element.setAttribute("title", this._element.getAttribute("data-bs-original-title")),
        this._disposePopper(),
        super.dispose()
    }
    show() {
        if (this._element.style.display === "none")
            throw new Error("Please use show on visible elements");
        if (!(this._isWithContent() && this._isEnabled))
            return;
        const t = d.trigger(this._element, this.constructor.eventName(ul))
          , i = ($i(this._element) || this._element.ownerDocument.documentElement).contains(this._element);
        if (t.defaultPrevented || !i)
            return;
        this._disposePopper();
        const s = this._getTipElement();
        this._element.setAttribute("aria-describedby", s.getAttribute("id"));
        const {container: l} = this._config;
        if (this._element.ownerDocument.documentElement.contains(this.tip) || (l.append(s),
        d.trigger(this._element, this.constructor.eventName(dl))),
        this._popper = this._createPopper(s),
        s.classList.add(ie),
        "ontouchstart"in document.documentElement)
            for (const u of [].concat(...document.body.children))
                d.on(u, "mouseover", ue);
        const c = () => {
            d.trigger(this._element, this.constructor.eventName(fl)),
            this._isHovered === !1 && this._leave(),
            this._isHovered = !1
        }
        ;
        this._queueCallback(c, this.tip, this._isAnimated())
    }
    hide() {
        if (!this._isShown() || d.trigger(this._element, this.constructor.eventName(ll)).defaultPrevented)
            return;
        if (this._getTipElement().classList.remove(ie),
        "ontouchstart"in document.documentElement)
            for (const s of [].concat(...document.body.children))
                d.off(s, "mouseover", ue);
        this._activeTrigger[ol] = !1,
        this._activeTrigger[Me] = !1,
        this._activeTrigger[Vt] = !1,
        this._isHovered = null;
        const i = () => {
            this._isWithActiveTrigger() || (this._isHovered || this._disposePopper(),
            this._element.removeAttribute("aria-describedby"),
            d.trigger(this._element, this.constructor.eventName(cl)))
        }
        ;
        this._queueCallback(i, this.tip, this._isAnimated())
    }
    update() {
        this._popper && this._popper.update()
    }
    _isWithContent() {
        return !!this._getTitle()
    }
    _getTipElement() {
        return this.tip || (this.tip = this._createTipElement(this._newContent || this._getContentForTemplate())),
        this.tip
    }
    _createTipElement(t) {
        const e = this._getTemplateFactory(t).toHtml();
        if (!e)
            return null;
        e.classList.remove(xe, ie),
        e.classList.add(`bs-${this.constructor.NAME}-auto`);
        const i = rr(this.constructor.NAME).toString();
        return e.setAttribute("id", i),
        this._isAnimated() && e.classList.add(xe),
        e
    }
    setContent(t) {
        this._newContent = t,
        this._isShown() && (this._disposePopper(),
        this.show())
    }
    _getTemplateFactory(t) {
        return this._templateFactory ? this._templateFactory.changeContent(t) : this._templateFactory = new el({
            ...this._config,
            content: t,
            extraClass: this._resolvePossibleFunction(this._config.customClass)
        }),
        this._templateFactory
    }
    _getContentForTemplate() {
        return {
            [rl]: this._getTitle()
        }
    }
    _getTitle() {
        return this._resolvePossibleFunction(this._config.title) || this._element.getAttribute("data-bs-original-title")
    }
    _initializeOnDelegatedTarget(t) {
        return this.constructor.getOrCreateInstance(t.delegateTarget, this._getDelegateConfig())
    }
    _isAnimated() {
        return this._config.animation || this.tip && this.tip.classList.contains(xe)
    }
    _isShown() {
        return this.tip && this.tip.classList.contains(ie)
    }
    _createPopper(t) {
        const e = x(this._config.placement, [this, t, this._element])
          , i = El[e.toUpperCase()];
        return on(this._element, t, this._getPopperConfig(i))
    }
    _getOffset() {
        const {offset: t} = this._config;
        return typeof t == "string" ? t.split(",").map(e => Number.parseInt(e, 10)) : typeof t == "function" ? e => t(e, this._element) : t
    }
    _resolvePossibleFunction(t) {
        return x(t, [this._element])
    }
    _getPopperConfig(t) {
        const e = {
            placement: t,
            modifiers: [{
                name: "flip",
                options: {
                    fallbackPlacements: this._config.fallbackPlacements
                }
            }, {
                name: "offset",
                options: {
                    offset: this._getOffset()
                }
            }, {
                name: "preventOverflow",
                options: {
                    boundary: this._config.boundary
                }
            }, {
                name: "arrow",
                options: {
                    element: `.${this.constructor.NAME}-arrow`
                }
            }, {
                name: "preSetPlacement",
                enabled: !0,
                phase: "beforeMain",
                fn: i => {
                    this._getTipElement().setAttribute("data-popper-placement", i.state.placement)
                }
            }]
        };
        return {
            ...e,
            ...x(this._config.popperConfig, [e])
        }
    }
    _setListeners() {
        const t = this._config.trigger.split(" ");
        for (const e of t)
            if (e === "click")
                d.on(this._element, this.constructor.eventName(hl), this._config.selector, i => {
                    this._initializeOnDelegatedTarget(i).toggle()
                }
                );
            else if (e !== al) {
                const i = e === Vt ? this.constructor.eventName(ml) : this.constructor.eventName(pl)
                  , s = e === Vt ? this.constructor.eventName(gl) : this.constructor.eventName(_l);
                d.on(this._element, i, this._config.selector, l => {
                    const c = this._initializeOnDelegatedTarget(l);
                    c._activeTrigger[l.type === "focusin" ? Me : Vt] = !0,
                    c._enter()
                }
                ),
                d.on(this._element, s, this._config.selector, l => {
                    const c = this._initializeOnDelegatedTarget(l);
                    c._activeTrigger[l.type === "focusout" ? Me : Vt] = c._element.contains(l.relatedTarget),
                    c._leave()
                }
                )
            }
        this._hideModalHandler = () => {
            this._element && this.hide()
        }
        ,
        d.on(this._element.closest(Gn), qn, this._hideModalHandler)
    }
    _fixTitle() {
        const t = this._element.getAttribute("title");
        t && (!this._element.getAttribute("aria-label") && !this._element.textContent.trim() && this._element.setAttribute("aria-label", t),
        this._element.setAttribute("data-bs-original-title", t),
        this._element.removeAttribute("title"))
    }
    _enter() {
        if (this._isShown() || this._isHovered) {
            this._isHovered = !0;
            return
        }
        this._isHovered = !0,
        this._setTimeout( () => {
            this._isHovered && this.show()
        }
        , this._config.delay.show)
    }
    _leave() {
        this._isWithActiveTrigger() || (this._isHovered = !1,
        this._setTimeout( () => {
            this._isHovered || this.hide()
        }
        , this._config.delay.hide))
    }
    _setTimeout(t, e) {
        clearTimeout(this._timeout),
        this._timeout = setTimeout(t, e)
    }
    _isWithActiveTrigger() {
        return Object.values(this._activeTrigger).includes(!0)
    }
    _getConfig(t) {
        const e = q.getDataAttributes(this._element);
        for (const i of Object.keys(e))
            il.has(i) && delete e[i];
        return t = {
            ...e,
            ...typeof t == "object" && t ? t : {}
        },
        t = this._mergeConfigObj(t),
        t = this._configAfterMerge(t),
        this._typeCheckConfig(t),
        t
    }
    _configAfterMerge(t) {
        return t.container = t.container === !1 ? document.body : tt(t.container),
        typeof t.delay == "number" && (t.delay = {
            show: t.delay,
            hide: t.delay
        }),
        typeof t.title == "number" && (t.title = t.title.toString()),
        typeof t.content == "number" && (t.content = t.content.toString()),
        t
    }
    _getDelegateConfig() {
        const t = {};
        for (const [e,i] of Object.entries(this._config))
            this.constructor.Default[e] !== i && (t[e] = i);
        return t.selector = !1,
        t.trigger = "manual",
        t
    }
    _disposePopper() {
        this._popper && (this._popper.destroy(),
        this._popper = null),
        this.tip && (this.tip.remove(),
        this.tip = null)
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = Rt.getOrCreateInstance(this, t);
            if (typeof t == "string") {
                if (typeof e[t] > "u")
                    throw new TypeError(`No method named "${t}"`);
                e[t]()
            }
        })
    }
}
W(Rt);
const Al = "popover"
  , yl = ".popover-header"
  , Tl = ".popover-body"
  , wl = {
    ...Rt.Default,
    content: "",
    offset: [0, 8],
    placement: "right",
    template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
    trigger: "click"
}
  , Cl = {
    ...Rt.DefaultType,
    content: "(null|string|element|function)"
};
let Ol = class ns extends Rt {
    static get Default() {
        return wl
    }
    static get DefaultType() {
        return Cl
    }
    static get NAME() {
        return Al
    }
    _isWithContent() {
        return this._getTitle() || this._getContent()
    }
    _getContentForTemplate() {
        return {
            [yl]: this._getTitle(),
            [Tl]: this._getContent()
        }
    }
    _getContent() {
        return this._resolvePossibleFunction(this._config.content)
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = ns.getOrCreateInstance(this, t);
            if (typeof t == "string") {
                if (typeof e[t] > "u")
                    throw new TypeError(`No method named "${t}"`);
                e[t]()
            }
        })
    }
}
;
W(Ol);
const Nl = "scrollspy"
  , Sl = "bs.scrollspy"
  , un = `.${Sl}`
  , Dl = ".data-api"
  , Ll = `activate${un}`
  , Xn = `click${un}`
  , $l = `load${un}${Dl}`
  , Il = "dropdown-item"
  , bt = "active"
  , xl = '[data-bs-spy="scroll"]'
  , Re = "[href]"
  , Ml = ".nav, .list-group"
  , Qn = ".nav-link"
  , Rl = ".nav-item"
  , Pl = ".list-group-item"
  , kl = `${Qn}, ${Rl} > ${Qn}, ${Pl}`
  , Fl = ".dropdown"
  , Vl = ".dropdown-toggle"
  , Hl = {
    offset: null,
    rootMargin: "0px 0px -25%",
    smoothScroll: !1,
    target: null,
    threshold: [.1, .5, 1]
}
  , Wl = {
    offset: "(number|null)",
    rootMargin: "string",
    smoothScroll: "boolean",
    target: "element",
    threshold: "array"
};
class ve extends K {
    constructor(t, e) {
        super(t, e),
        this._targetLinks = new Map,
        this._observableSections = new Map,
        this._rootElement = getComputedStyle(this._element).overflowY === "visible" ? null : this._element,
        this._activeTarget = null,
        this._observer = null,
        this._previousScrollData = {
            visibleEntryTop: 0,
            parentScrollTop: 0
        },
        this.refresh()
    }
    static get Default() {
        return Hl
    }
    static get DefaultType() {
        return Wl
    }
    static get NAME() {
        return Nl
    }
    refresh() {
        this._initializeTargetsAndObservables(),
        this._maybeEnableSmoothScroll(),
        this._observer ? this._observer.disconnect() : this._observer = this._getNewObserver();
        for (const t of this._observableSections.values())
            this._observer.observe(t)
    }
    dispose() {
        this._observer.disconnect(),
        super.dispose()
    }
    _configAfterMerge(t) {
        return t.target = tt(t.target) || document.body,
        t.rootMargin = t.offset ? `${t.offset}px 0px -30%` : t.rootMargin,
        typeof t.threshold == "string" && (t.threshold = t.threshold.split(",").map(e => Number.parseFloat(e))),
        t
    }
    _maybeEnableSmoothScroll() {
        this._config.smoothScroll && (d.off(this._config.target, Xn),
        d.on(this._config.target, Xn, Re, t => {
            const e = this._observableSections.get(t.target.hash);
            if (e) {
                t.preventDefault();
                const i = this._rootElement || window
                  , s = e.offsetTop - this._element.offsetTop;
                if (i.scrollTo) {
                    i.scrollTo({
                        top: s,
                        behavior: "smooth"
                    });
                    return
                }
                i.scrollTop = s
            }
        }
        ))
    }
    _getNewObserver() {
        const t = {
            root: this._rootElement,
            threshold: this._config.threshold,
            rootMargin: this._config.rootMargin
        };
        return new IntersectionObserver(e => this._observerCallback(e),t)
    }
    _observerCallback(t) {
        const e = c => this._targetLinks.get(`#${c.target.id}`)
          , i = c => {
            this._previousScrollData.visibleEntryTop = c.target.offsetTop,
            this._process(e(c))
        }
          , s = (this._rootElement || document.documentElement).scrollTop
          , l = s >= this._previousScrollData.parentScrollTop;
        this._previousScrollData.parentScrollTop = s;
        for (const c of t) {
            if (!c.isIntersecting) {
                this._activeTarget = null,
                this._clearActiveClass(e(c));
                continue
            }
            const u = c.target.offsetTop >= this._previousScrollData.visibleEntryTop;
            if (l && u) {
                if (i(c),
                !s)
                    return;
                continue
            }
            !l && !u && i(c)
        }
    }
    _initializeTargetsAndObservables() {
        this._targetLinks = new Map,
        this._observableSections = new Map;
        const t = m.find(Re, this._config.target);
        for (const e of t) {
            if (!e.hash || et(e))
                continue;
            const i = m.findOne(decodeURI(e.hash), this._element);
            xt(i) && (this._targetLinks.set(decodeURI(e.hash), e),
            this._observableSections.set(e.hash, i))
        }
    }
    _process(t) {
        this._activeTarget !== t && (this._clearActiveClass(this._config.target),
        this._activeTarget = t,
        t.classList.add(bt),
        this._activateParents(t),
        d.trigger(this._element, Ll, {
            relatedTarget: t
        }))
    }
    _activateParents(t) {
        if (t.classList.contains(Il)) {
            m.findOne(Vl, t.closest(Fl)).classList.add(bt);
            return
        }
        for (const e of m.parents(t, Ml))
            for (const i of m.prev(e, kl))
                i.classList.add(bt)
    }
    _clearActiveClass(t) {
        t.classList.remove(bt);
        const e = m.find(`${Re}.${bt}`, t);
        for (const i of e)
            i.classList.remove(bt)
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = ve.getOrCreateInstance(this, t);
            if (typeof t == "string") {
                if (e[t] === void 0 || t.startsWith("_") || t === "constructor")
                    throw new TypeError(`No method named "${t}"`);
                e[t]()
            }
        })
    }
}
d.on(window, $l, () => {
    for (const n of m.find(xl))
        ve.getOrCreateInstance(n)
}
);
W(ve);
const Bl = "tab"
  , jl = "bs.tab"
  , gt = `.${jl}`
  , Kl = `hide${gt}`
  , Yl = `hidden${gt}`
  , zl = `show${gt}`
  , Ul = `shown${gt}`
  , Gl = `click${gt}`
  , ql = `keydown${gt}`
  , Xl = `load${gt}`
  , Ql = "ArrowLeft"
  , Jn = "ArrowRight"
  , Jl = "ArrowUp"
  , Zn = "ArrowDown"
  , Pe = "Home"
  , ti = "End"
  , dt = "active"
  , ei = "fade"
  , ke = "show"
  , Zl = "dropdown"
  , is = ".dropdown-toggle"
  , tc = ".dropdown-menu"
  , Fe = `:not(${is})`
  , ec = '.list-group, .nav, [role="tablist"]'
  , nc = ".nav-item, .list-group-item"
  , ic = `.nav-link${Fe}, .list-group-item${Fe}, [role="tab"]${Fe}`
  , ss = '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]'
  , Ve = `${ic}, ${ss}`
  , sc = `.${dt}[data-bs-toggle="tab"], .${dt}[data-bs-toggle="pill"], .${dt}[data-bs-toggle="list"]`;
class $t extends K {
    constructor(t) {
        super(t),
        this._parent = this._element.closest(ec),
        this._parent && (this._setInitialAttributes(this._parent, this._getChildren()),
        d.on(this._element, ql, e => this._keydown(e)))
    }
    static get NAME() {
        return Bl
    }
    show() {
        const t = this._element;
        if (this._elemIsActive(t))
            return;
        const e = this._getActiveElem()
          , i = e ? d.trigger(e, Kl, {
            relatedTarget: t
        }) : null;
        d.trigger(t, zl, {
            relatedTarget: e
        }).defaultPrevented || i && i.defaultPrevented || (this._deactivate(e, t),
        this._activate(t, e))
    }
    _activate(t, e) {
        if (!t)
            return;
        t.classList.add(dt),
        this._activate(m.getElementFromSelector(t));
        const i = () => {
            if (t.getAttribute("role") !== "tab") {
                t.classList.add(ke);
                return
            }
            t.removeAttribute("tabindex"),
            t.setAttribute("aria-selected", !0),
            this._toggleDropDown(t, !0),
            d.trigger(t, Ul, {
                relatedTarget: e
            })
        }
        ;
        this._queueCallback(i, t, t.classList.contains(ei))
    }
    _deactivate(t, e) {
        if (!t)
            return;
        t.classList.remove(dt),
        t.blur(),
        this._deactivate(m.getElementFromSelector(t));
        const i = () => {
            if (t.getAttribute("role") !== "tab") {
                t.classList.remove(ke);
                return
            }
            t.setAttribute("aria-selected", !1),
            t.setAttribute("tabindex", "-1"),
            this._toggleDropDown(t, !1),
            d.trigger(t, Yl, {
                relatedTarget: e
            })
        }
        ;
        this._queueCallback(i, t, t.classList.contains(ei))
    }
    _keydown(t) {
        if (![Ql, Jn, Jl, Zn, Pe, ti].includes(t.key))
            return;
        t.stopPropagation(),
        t.preventDefault();
        const e = this._getChildren().filter(s => !et(s));
        let i;
        if ([Pe, ti].includes(t.key))
            i = e[t.key === Pe ? 0 : e.length - 1];
        else {
            const s = [Jn, Zn].includes(t.key);
            i = an(e, t.target, s, !0)
        }
        i && (i.focus({
            preventScroll: !0
        }),
        $t.getOrCreateInstance(i).show())
    }
    _getChildren() {
        return m.find(Ve, this._parent)
    }
    _getActiveElem() {
        return this._getChildren().find(t => this._elemIsActive(t)) || null
    }
    _setInitialAttributes(t, e) {
        this._setAttributeIfNotExists(t, "role", "tablist");
        for (const i of e)
            this._setInitialAttributesOnChild(i)
    }
    _setInitialAttributesOnChild(t) {
        t = this._getInnerElement(t);
        const e = this._elemIsActive(t)
          , i = this._getOuterElement(t);
        t.setAttribute("aria-selected", e),
        i !== t && this._setAttributeIfNotExists(i, "role", "presentation"),
        e || t.setAttribute("tabindex", "-1"),
        this._setAttributeIfNotExists(t, "role", "tab"),
        this._setInitialAttributesOnTargetPanel(t)
    }
    _setInitialAttributesOnTargetPanel(t) {
        const e = m.getElementFromSelector(t);
        e && (this._setAttributeIfNotExists(e, "role", "tabpanel"),
        t.id && this._setAttributeIfNotExists(e, "aria-labelledby", `${t.id}`))
    }
    _toggleDropDown(t, e) {
        const i = this._getOuterElement(t);
        if (!i.classList.contains(Zl))
            return;
        const s = (l, c) => {
            const u = m.findOne(l, i);
            u && u.classList.toggle(c, e)
        }
        ;
        s(is, dt),
        s(tc, ke),
        i.setAttribute("aria-expanded", e)
    }
    _setAttributeIfNotExists(t, e, i) {
        t.hasAttribute(e) || t.setAttribute(e, i)
    }
    _elemIsActive(t) {
        return t.classList.contains(dt)
    }
    _getInnerElement(t) {
        return t.matches(Ve) ? t : m.findOne(Ve, t)
    }
    _getOuterElement(t) {
        return t.closest(nc) || t
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = $t.getOrCreateInstance(this);
            if (typeof t == "string") {
                if (e[t] === void 0 || t.startsWith("_") || t === "constructor")
                    throw new TypeError(`No method named "${t}"`);
                e[t]()
            }
        })
    }
}
d.on(document, Gl, ss, function(n) {
    ["A", "AREA"].includes(this.tagName) && n.preventDefault(),
    !et(this) && $t.getOrCreateInstance(this).show()
});
d.on(window, Xl, () => {
    for (const n of m.find(sc))
        $t.getOrCreateInstance(n)
}
);
W($t);
const rc = "toast"
  , oc = "bs.toast"
  , rt = `.${oc}`
  , ac = `mouseover${rt}`
  , lc = `mouseout${rt}`
  , cc = `focusin${rt}`
  , uc = `focusout${rt}`
  , fc = `hide${rt}`
  , dc = `hidden${rt}`
  , hc = `show${rt}`
  , pc = `shown${rt}`
  , _c = "fade"
  , ni = "hide"
  , se = "show"
  , re = "showing"
  , mc = {
    animation: "boolean",
    autohide: "boolean",
    delay: "number"
}
  , gc = {
    animation: !0,
    autohide: !0,
    delay: 5e3
};
class be extends K {
    constructor(t, e) {
        super(t, e),
        this._timeout = null,
        this._hasMouseInteraction = !1,
        this._hasKeyboardInteraction = !1,
        this._setListeners()
    }
    static get Default() {
        return gc
    }
    static get DefaultType() {
        return mc
    }
    static get NAME() {
        return rc
    }
    show() {
        if (d.trigger(this._element, hc).defaultPrevented)
            return;
        this._clearTimeout(),
        this._config.animation && this._element.classList.add(_c);
        const e = () => {
            this._element.classList.remove(re),
            d.trigger(this._element, pc),
            this._maybeScheduleHide()
        }
        ;
        this._element.classList.remove(ni),
        Kt(this._element),
        this._element.classList.add(se, re),
        this._queueCallback(e, this._element, this._config.animation)
    }
    hide() {
        if (!this.isShown() || d.trigger(this._element, fc).defaultPrevented)
            return;
        const e = () => {
            this._element.classList.add(ni),
            this._element.classList.remove(re, se),
            d.trigger(this._element, dc)
        }
        ;
        this._element.classList.add(re),
        this._queueCallback(e, this._element, this._config.animation)
    }
    dispose() {
        this._clearTimeout(),
        this.isShown() && this._element.classList.remove(se),
        super.dispose()
    }
    isShown() {
        return this._element.classList.contains(se)
    }
    _maybeScheduleHide() {
        this._config.autohide && (this._hasMouseInteraction || this._hasKeyboardInteraction || (this._timeout = setTimeout( () => {
            this.hide()
        }
        , this._config.delay)))
    }
    _onInteraction(t, e) {
        switch (t.type) {
        case "mouseover":
        case "mouseout":
            {
                this._hasMouseInteraction = e;
                break
            }
        case "focusin":
        case "focusout":
            {
                this._hasKeyboardInteraction = e;
                break
            }
        }
        if (e) {
            this._clearTimeout();
            return
        }
        const i = t.relatedTarget;
        this._element === i || this._element.contains(i) || this._maybeScheduleHide()
    }
    _setListeners() {
        d.on(this._element, ac, t => this._onInteraction(t, !0)),
        d.on(this._element, lc, t => this._onInteraction(t, !1)),
        d.on(this._element, cc, t => this._onInteraction(t, !0)),
        d.on(this._element, uc, t => this._onInteraction(t, !1))
    }
    _clearTimeout() {
        clearTimeout(this._timeout),
        this._timeout = null
    }
    static jQueryInterface(t) {
        return this.each(function() {
            const e = be.getOrCreateInstance(this, t);
            if (typeof t == "string") {
                if (typeof e[t] > "u")
                    throw new TypeError(`No method named "${t}"`);
                e[t](this)
            }
        })
    }
}
me(be);
W(be);
export {Bt as C, Lt as M, nt as O, Ol as P, be as T, Rt as a, bn as c, ps as n};
