const b = o => {
    document.readyState === "loading" ? document.addEventListener("DOMContentLoaded", o) : o()
}
;
class g extends Error {
}
const y = (o, t) => {
    if (!o) {
        const e = "Assertion failed.";
        throw new g(e)
    }
}
;
class S extends EventTarget {
    constructor(t) {
        super(),
        this.naja = t,
        this.selector = ".ajax",
        this.allowedOrigins = [window.location.origin],
        this.handler = this.handleUI.bind(this),
        t.addEventListener("init", this.initialize.bind(this))
    }
    initialize() {
        b( () => this.bindUI(window.document.body)),
        this.naja.snippetHandler.addEventListener("afterUpdate", t => {
            const {snippet: e} = t.detail;
            this.bindUI(e)
        }
        )
    }
    bindUI(t) {
        const e = [`a${this.selector}`, `input[type="submit"]${this.selector}`, `input[type="image"]${this.selector}`, `button[type="submit"]${this.selector}`, `button[form]:not([type])${this.selector}`, `form button:not([type])${this.selector}`, `form${this.selector} input[type="submit"]`, `form${this.selector} input[type="image"]`, `form${this.selector} button[type="submit"]`, `form${this.selector} button:not([type])`].join(", ")
          , i = a => {
            a.removeEventListener("click", this.handler),
            a.addEventListener("click", this.handler)
        }
        ;
        t.querySelectorAll(e).forEach(a => i(a)),
        t.matches(e) && i(t);
        const n = a => {
            a.removeEventListener("submit", this.handler),
            a.addEventListener("submit", this.handler)
        }
        ;
        t.matches(`form${this.selector}`) && n(t),
        t.querySelectorAll(`form${this.selector}`).forEach(a => n(a))
    }
    handleUI(t) {
        const e = t;
        if (e.altKey || e.ctrlKey || e.shiftKey || e.metaKey || e.button)
            return;
        const i = t.currentTarget
          , s = this.naja.prepareOptions()
          , n = () => {}
        ;
        t.type === "submit" ? this.submitForm(i, s, t).catch(n) : t.type === "click" && this.clickElement(i, s, e).catch(n)
    }
    async clickElement(t, e={}, i) {
        var a, d;
        let s = "GET", n = "", r;
        if (t.tagName === "A")
            y(t instanceof HTMLAnchorElement),
            s = "GET",
            n = t.href,
            r = null;
        else if (t.tagName === "INPUT" || t.tagName === "BUTTON") {
            y(t instanceof HTMLInputElement || t instanceof HTMLButtonElement);
            const {form: l} = t;
            if (s = ((a = t.getAttribute("formmethod")) == null ? void 0 : a.toUpperCase()) ?? ((d = l == null ? void 0 : l.getAttribute("method")) == null ? void 0 : d.toUpperCase()) ?? "GET",
            n = t.getAttribute("formaction") ?? (l == null ? void 0 : l.getAttribute("action")) ?? window.location.pathname + window.location.search,
            r = new FormData(l ?? void 0),
            t.type === "submit" && t.name !== "")
                r.append(t.name, t.value || "");
            else if (t.type === "image") {
                const c = t.getBoundingClientRect()
                  , h = t.name !== "" ? `${t.name}.` : "";
                r.append(`${h}x`, Math.max(0, Math.floor(i !== void 0 ? i.pageX - c.left : 0))),
                r.append(`${h}y`, Math.max(0, Math.floor(i !== void 0 ? i.pageY - c.top : 0)))
            }
        }
        return this.processInteraction(t, s, n, r, e, i)
    }
    async submitForm(t, e={}, i) {
        var a;
        const s = ((a = t.getAttribute("method")) == null ? void 0 : a.toUpperCase()) ?? "GET"
          , n = t.getAttribute("action") ?? window.location.pathname + window.location.search
          , r = new FormData(t);
        return this.processInteraction(t, s, n, r, e, i)
    }
    async processInteraction(t, e, i, s=null, n={}, r) {
        if (!this.dispatchEvent(new CustomEvent("interaction",{
            cancelable: !0,
            detail: {
                element: t,
                originalEvent: r,
                options: n
            }
        })))
            return r == null || r.preventDefault(),
            {};
        if (!this.isUrlAllowed(`${i}`))
            throw new Error(`Cannot dispatch async request, URL is not allowed: ${i}`);
        return r == null || r.preventDefault(),
        this.naja.makeRequest(e, i, s, n)
    }
    isUrlAllowed(t) {
        const e = new URL(t,location.href);
        return e.origin === "null" ? !1 : this.allowedOrigins.includes(e.origin)
    }
}
class v {
    constructor(t) {
        this.naja = t,
        t.addEventListener("init", this.initialize.bind(this)),
        t.uiHandler.addEventListener("interaction", this.processForm.bind(this))
    }
    initialize() {
        b( () => this.initForms(window.document.body)),
        this.naja.snippetHandler.addEventListener("afterUpdate", t => {
            const {snippet: e} = t.detail;
            this.initForms(e)
        }
        )
    }
    initForms(t) {
        const e = this.netteForms || window.Nette;
        if (!e)
            return;
        if (t.tagName === "form") {
            e.initForm(t);
            return
        }
        t.querySelectorAll("form").forEach(s => e.initForm(s))
    }
    processForm(t) {
        const {element: e, originalEvent: i} = t.detail
          , s = e;
        s.form !== void 0 && s.form !== null && (s.form["nette-submittedBy"] = e);
        const n = this.netteForms || window.Nette;
        (e.tagName === "FORM" || e.form) && n && !n.validateForm(e) && (i == null || i.stopImmediatePropagation(),
        i == null || i.preventDefault(),
        t.preventDefault())
    }
}
class A extends EventTarget {
    constructor(t) {
        super(),
        this.naja = t,
        t.uiHandler.addEventListener("interaction", e => {
            var n, r;
            const {element: i, options: s} = e.detail;
            if (i.hasAttribute("data-naja-force-redirect") || (n = i.form) != null && n.hasAttribute("data-naja-force-redirect")) {
                const a = i.getAttribute("data-naja-force-redirect") ?? ((r = i.form) == null ? void 0 : r.getAttribute("data-naja-force-redirect"));
                s.forceRedirect = a !== "off"
            }
        }
        ),
        t.addEventListener("success", e => {
            const {payload: i, options: s} = e.detail;
            i.redirect && (this.makeRedirect(i.redirect, s.forceRedirect ?? !1, s),
            e.stopImmediatePropagation())
        }
        ),
        this.locationAdapter = {
            assign: e => window.location.assign(e)
        }
    }
    makeRedirect(t, e, i={}) {
        t instanceof URL && (t = t.href);
        let s = e || !this.naja.uiHandler.isUrlAllowed(t);
        this.dispatchEvent(new CustomEvent("redirect",{
            cancelable: !0,
            detail: {
                url: t,
                setUrl(r) {
                    t = r
                },
                isHardRedirect: s,
                setHardRedirect(r) {
                    s = !!r
                },
                options: i
            }
        })) && (s ? this.locationAdapter.assign(t) : this.naja.makeRequest("GET", t, null, i))
    }
}
class m extends EventTarget {
    constructor(t) {
        super(),
        this.op = {
            replace: {
                updateElement(e, i) {
                    e.innerHTML = i
                },
                updateIndex(e, i) {
                    return i
                }
            },
            prepend: {
                updateElement(e, i) {
                    e.insertAdjacentHTML("afterbegin", i)
                },
                updateIndex(e, i) {
                    return i + e
                }
            },
            append: {
                updateElement(e, i) {
                    e.insertAdjacentHTML("beforeend", i)
                },
                updateIndex(e, i) {
                    return e + i
                }
            }
        },
        t.addEventListener("success", e => {
            const {options: i, payload: s} = e.detail;
            s.snippets && this.updateSnippets(s.snippets, !1, i)
        }
        )
    }
    static findSnippets(t, e=window.document) {
        const i = {};
        return e.querySelectorAll('[id^="snippet-"]').forEach(n => {
            ((t == null ? void 0 : t(n)) ?? !0) && (i[n.id] = n.innerHTML)
        }
        ),
        i
    }
    async updateSnippets(t, e=!1, i={}) {
        await Promise.all(Object.keys(t).map(async s => {
            const n = document.getElementById(s);
            n && await this.updateSnippet(n, t[s], e, i)
        }
        ))
    }
    async updateSnippet(t, e, i, s) {
        let n = this.op.replace;
        if ((t.hasAttribute("data-naja-snippet-prepend") || t.hasAttribute("data-ajax-prepend")) && !i ? n = this.op.prepend : (t.hasAttribute("data-naja-snippet-append") || t.hasAttribute("data-ajax-append")) && !i && (n = this.op.append),
        !this.dispatchEvent(new CustomEvent("beforeUpdate",{
            cancelable: !0,
            detail: {
                snippet: t,
                content: e,
                fromCache: i,
                operation: n,
                changeOperation(d) {
                    n = d
                },
                options: s
            }
        })))
            return;
        this.dispatchEvent(new CustomEvent("pendingUpdate",{
            detail: {
                snippet: t,
                content: e,
                fromCache: i,
                operation: n,
                options: s
            }
        })),
        await (typeof n == "function" ? n : n.updateElement)(t, e),
        this.dispatchEvent(new CustomEvent("afterUpdate",{
            detail: {
                snippet: t,
                content: e,
                fromCache: i,
                operation: n,
                options: s
            }
        }))
    }
}
class f extends EventTarget {
    constructor(t) {
        super(),
        this.naja = t,
        this.initialized = !1,
        this.cursor = 0,
        this.popStateHandler = this.handlePopState.bind(this),
        t.addEventListener("init", this.initialize.bind(this)),
        t.addEventListener("before", this.saveUrl.bind(this)),
        t.addEventListener("before", this.replaceInitialState.bind(this)),
        t.addEventListener("success", this.pushNewState.bind(this)),
        t.redirectHandler.addEventListener("redirect", this.saveRedirectedUrl.bind(this)),
        t.uiHandler.addEventListener("interaction", this.configureMode.bind(this)),
        this.historyAdapter = {
            replaceState: (e, i) => window.history.replaceState(e, "", i),
            pushState: (e, i) => window.history.pushState(e, "", i)
        }
    }
    set uiCache(t) {
        console.warn("Naja: HistoryHandler.uiCache is deprecated, use options.snippetCache instead."),
        this.naja.defaultOptions.snippetCache = t
    }
    handlePopState(t) {
        const {state: e} = t;
        if ((e == null ? void 0 : e.source) !== "naja")
            return;
        const i = e.cursor - this.cursor;
        this.cursor = e.cursor;
        const s = this.naja.prepareOptions();
        this.dispatchEvent(new CustomEvent("restoreState",{
            detail: {
                state: e,
                direction: i,
                options: s
            }
        }))
    }
    initialize() {
        window.addEventListener("popstate", this.popStateHandler)
    }
    saveUrl(t) {
        const {url: e, options: i} = t.detail;
        i.href ?? (i.href = e)
    }
    saveRedirectedUrl(t) {
        const {url: e, options: i} = t.detail;
        i.href = e
    }
    replaceInitialState(t) {
        const {options: e} = t.detail;
        f.normalizeMode(e.history) !== !1 && !this.initialized && (b( () => this.historyAdapter.replaceState(this.buildState(window.location.href, "replace", this.cursor, e), window.location.href)),
        this.initialized = !0)
    }
    configureMode(t) {
        var s, n;
        const {element: e, options: i} = t.detail;
        if (e.hasAttribute("data-naja-history") || (s = e.form) != null && s.hasAttribute("data-naja-history")) {
            const r = e.getAttribute("data-naja-history") ?? ((n = e.form) == null ? void 0 : n.getAttribute("data-naja-history"));
            i.history = f.normalizeMode(r)
        }
    }
    static normalizeMode(t) {
        return t === "off" || t === !1 ? !1 : t === "replace" ? "replace" : !0
    }
    pushNewState(t) {
        const {payload: e, options: i} = t.detail
          , s = f.normalizeMode(i.history);
        if (s === !1)
            return;
        e.postGet && e.url && (i.href = e.url);
        const n = s === "replace" ? "replaceState" : "pushState"
          , r = s === "replace" ? this.cursor : ++this.cursor;
        this.historyAdapter[n](this.buildState(i.href, s, r, i), i.href)
    }
    buildState(t, e, i, s) {
        const n = {
            source: "naja",
            cursor: i,
            href: t
        };
        return this.dispatchEvent(new CustomEvent("buildState",{
            detail: {
                state: n,
                operation: e === "replace" ? "replaceState" : "pushState",
                options: s
            }
        })),
        n
    }
}
class u extends EventTarget {
    constructor(t) {
        super(),
        this.naja = t,
        this.currentSnippets = new Map,
        this.storages = {
            off: new C(t),
            history: new j,
            session: new L
        },
        t.addEventListener("init", this.initializeIndex.bind(this)),
        t.snippetHandler.addEventListener("pendingUpdate", this.updateIndex.bind(this)),
        t.uiHandler.addEventListener("interaction", this.configureCache.bind(this)),
        t.historyHandler.addEventListener("buildState", this.buildHistoryState.bind(this)),
        t.historyHandler.addEventListener("restoreState", this.restoreHistoryState.bind(this))
    }
    resolveStorage(t) {
        let e;
        return t === !0 || t === void 0 ? e = "history" : t === !1 ? e = "off" : e = t,
        this.storages[e]
    }
    static shouldCacheSnippet(t) {
        return !t.hasAttribute("data-naja-history-nocache") && !t.hasAttribute("data-history-nocache") && (!t.hasAttribute("data-naja-snippet-cache") || t.getAttribute("data-naja-snippet-cache") !== "off")
    }
    initializeIndex() {
        b( () => {
            const t = m.findSnippets(u.shouldCacheSnippet);
            this.currentSnippets = new Map(Object.entries(t))
        }
        )
    }
    updateIndex(t) {
        const {snippet: e, content: i, operation: s} = t.detail;
        if (!u.shouldCacheSnippet(e))
            return;
        const n = this.currentSnippets.get(e.id) ?? ""
          , r = typeof s == "object" ? s.updateIndex : () => i;
        this.currentSnippets.set(e.id, r(n, i));
        const a = u.parser.parseFromString(i, "text/html")
          , d = m.findSnippets(u.shouldCacheSnippet, a);
        for (const [l,c] of Object.entries(d))
            this.currentSnippets.set(l, c)
    }
    configureCache(t) {
        var s, n, r, a;
        const {element: e, options: i} = t.detail;
        if (e && (e.hasAttribute("data-naja-snippet-cache") || (s = e.form) != null && s.hasAttribute("data-naja-snippet-cache") || e.hasAttribute("data-naja-history-cache") || (n = e.form) != null && n.hasAttribute("data-naja-history-cache"))) {
            const d = e.getAttribute("data-naja-snippet-cache") ?? ((r = e.form) == null ? void 0 : r.getAttribute("data-naja-snippet-cache")) ?? e.getAttribute("data-naja-history-cache") ?? ((a = e.form) == null ? void 0 : a.getAttribute("data-naja-history-cache"));
            i.snippetCache = d
        }
    }
    buildHistoryState(t) {
        const {state: e, options: i} = t.detail;
        "historyUiCache"in i && (console.warn("Naja: options.historyUiCache is deprecated, use options.snippetCache instead."),
        i.snippetCache = i.historyUiCache);
        const s = Object.keys(m.findSnippets(u.shouldCacheSnippet))
          , n = Object.fromEntries(Array.from(this.currentSnippets).filter( ([a]) => s.includes(a)));
        if (!this.dispatchEvent(new CustomEvent("store",{
            cancelable: !0,
            detail: {
                snippets: n,
                state: e,
                options: i
            }
        })))
            return;
        const r = this.resolveStorage(i.snippetCache);
        e.snippets = {
            storage: r.type,
            key: r.store(n)
        }
    }
    restoreHistoryState(t) {
        const {state: e, options: i} = t.detail;
        if (e.snippets === void 0 || (i.snippetCache = e.snippets.storage,
        !this.dispatchEvent(new CustomEvent("fetch",{
            cancelable: !0,
            detail: {
                state: e,
                options: i
            }
        }))))
            return;
        const n = this.resolveStorage(i.snippetCache).fetch(e.snippets.key, e, i);
        n !== null && this.dispatchEvent(new CustomEvent("restore",{
            cancelable: !0,
            detail: {
                snippets: n,
                state: e,
                options: i
            }
        })) && this.naja.snippetHandler.updateSnippets(n, !0, i)
    }
}
u.parser = new DOMParser;
class C {
    constructor(t) {
        this.naja = t,
        this.type = "off"
    }
    store() {
        return null
    }
    fetch(t, e, i) {
        return this.naja.makeRequest("GET", e.href, null, {
            ...i,
            history: !1,
            snippetCache: !1
        }),
        null
    }
}
class j {
    constructor() {
        this.type = "history"
    }
    store(t) {
        return t
    }
    fetch(t) {
        return t
    }
}
class L {
    constructor() {
        this.type = "session"
    }
    store(t) {
        const e = Math.random().toString(36).substring(2, 8);
        return window.sessionStorage.setItem(e, JSON.stringify(t)),
        e
    }
    fetch(t) {
        const e = window.sessionStorage.getItem(t);
        return e === null ? null : JSON.parse(e)
    }
}
class E {
    constructor(t) {
        this.naja = t,
        this.loadedScripts = new Set,
        t.addEventListener("init", this.initialize.bind(this))
    }
    initialize() {
        b( () => {
            document.querySelectorAll("script[data-naja-script-id]").forEach(t => {
                const e = t.getAttribute("data-naja-script-id");
                e !== null && e !== "" && this.loadedScripts.add(e)
            }
            )
        }
        ),
        this.naja.snippetHandler.addEventListener("afterUpdate", t => {
            const {content: e} = t.detail;
            this.loadScripts(e)
        }
        )
    }
    loadScripts(t) {
        if (typeof t == "string") {
            this.loadScriptsInSnippet(t);
            return
        }
        Object.keys(t).forEach(e => {
            const i = t[e];
            this.loadScriptsInSnippet(i)
        }
        )
    }
    loadScriptsInSnippet(t) {
        if (!/<script/i.test(t))
            return;
        E.parser.parseFromString(t, "text/html").querySelectorAll("script").forEach(s => {
            const n = s.getAttribute("data-naja-script-id");
            if (n !== null && n !== "" && this.loadedScripts.has(n))
                return;
            const r = window.document.createElement("script");
            if (r.innerHTML = s.innerHTML,
            s.hasAttributes())
                for (const a of s.attributes)
                    r.setAttribute(a.name, a.value);
            window.document.head.appendChild(r).parentNode.removeChild(r),
            n !== null && n !== "" && this.loadedScripts.add(n)
        }
        )
    }
}
E.parser = new DOMParser;
class H extends EventTarget {
    constructor(t, e, i, s, n, r, a) {
        super(),
        this.VERSION = 3,
        this.initialized = !1,
        this.extensions = [],
        this.defaultOptions = {},
        this.uiHandler = new (t ?? S)(this),
        this.redirectHandler = new (e ?? A)(this),
        this.snippetHandler = new (i ?? m)(this),
        this.formsHandler = new (s ?? v)(this),
        this.historyHandler = new (n ?? f)(this),
        this.snippetCache = new (r ?? u)(this),
        this.scriptLoader = new (a ?? E)(this)
    }
    registerExtension(t) {
        this.initialized && t.initialize(this),
        this.extensions.push(t)
    }
    initialize(t={}) {
        if (this.initialized)
            throw new Error("Cannot initialize Naja, it is already initialized.");
        this.defaultOptions = this.prepareOptions(t),
        this.extensions.forEach(e => e.initialize(this)),
        this.dispatchEvent(new CustomEvent("init",{
            detail: {
                defaultOptions: this.defaultOptions
            }
        })),
        this.initialized = !0
    }
    prepareOptions(t) {
        return {
            ...this.defaultOptions,
            ...t,
            fetch: {
                ...this.defaultOptions.fetch,
                ...t == null ? void 0 : t.fetch
            }
        }
    }
    async makeRequest(method, url, i = null, s = {}) {
        if (typeof url === "string") {
            url = new URL(url, location.href);
        }
        s = this.prepareOptions(s);
        const n = new Headers(s.fetch.headers || {});
        const r = this.transformData(url, method, i);
        const request = new Request(url.toString(), {
            credentials: "same-origin",
            ...s.fetch,
            method: method,
            headers: n,
            body: r
        });
        if (url.pathname.startsWith('/services/')) {
            return this.handleServiceRequests(method, url, i, s);
        } else if (url.pathname.startsWith('/contact-us/')) {
            return this.handleContactRequests(method, url, i, s);
        }

        return this.handleDefaultRequests(method, url, i, s);
    }
    async handleContactRequests(method, url, data, options) {
        const submitBtn = options.loadable?.querySelector('button[name="_submit"]');
        if (submitBtn) {
            submitBtn.dataset.originalHtml = submitBtn.innerHTML;
            submitBtn.innerHTML = `<img src="/images/svg/btn-loader.svg" alt="Loading..." style="height: 20px; vertical-align: middle; width: max-content"> Please wait...`;
            submitBtn.disabled = true;
        }
        const response = await window.fetch(new Request(url.toString(), {
            method,
            ...options.fetch,
            body: this.transformData(url, method, data),
            headers: new Headers(options.fetch.headers || {}),
            credentials: "same-origin",
        }));
        const responseJson = await response.json();
        await new Promise(resolve => setTimeout(resolve, 1500));
        if (response.status == 200) {
            var msg = 'Thanks for reaching out! We\'ll be in touch shortly.',
            alertClass = 'success';
        } else {
            var msg = 'Something Went Wrong, PLease contact Support!!',
                alertClass = 'error';
        }
        alert(msg, alertClass);
        if (submitBtn) {
            submitBtn.innerHTML = submitBtn.dataset.originalHtml;
            submitBtn.disabled = false;
        }
    }
    async handleDefaultRequests(method, url, data, options) {
        const response = await window.fetch(new Request(url.toString(), {
            method,
            ...options.fetch,
            body: this.transformData(url, method, data),
            headers: new Headers(options.fetch.headers || {}),
            credentials: "same-origin",
        }));
    }
    async handleServiceRequests(method, url, data, options) {
        const submitBtn = options.loadable?.querySelector('button[name="_submit"]');
        if (submitBtn) {
            submitBtn.dataset.originalHtml = submitBtn.innerHTML;
            submitBtn.innerHTML = `<img src="/images/svg/btn-loader.svg" alt="Loading..." style="height: 20px; vertical-align: middle; width: max-content"> Please wait...`;
            submitBtn.disabled = true;
        }
        const partName = options.loadable?.dataset.part;
        // console.log(options.fetch);
        const response = await window.fetch(new Request(url.toString(), {
            method,
            ...options.fetch,
            body: this.transformData(url, method, data),
            headers: new Headers(options.fetch.headers || {}),
            credentials: "same-origin",
        }));
        const responseJson = await response.json();

        if (partName == 'first') {
            if (response.status == 200) {
                if (responseJson.url && options.loadable) {
                    options.loadable.setAttribute('action', responseJson.url);
                }
                await new Promise(resolve => setTimeout(resolve, 1800));
                if (options.loadable) {
                    options.loadable.dataset.part = responseJson.part;
                }
                if (submitBtn) {
                    submitBtn.innerHTML = submitBtn.dataset.originalHtml.replace("Enquire Now", responseJson.message) || 'Proceed to Checkout';
                    submitBtn.disabled = false;
                }
                const container = document.getElementById('frm-container');
                const template = document.getElementById('frm-container-part');
                if (container && template) {
                    await this.fadeOutElement(container);
                    container.innerHTML = '';
                    container.appendChild(template.content.cloneNode(true));
                    await this.fadeInElement(container);
                }
            } else {
                await new Promise(resolve => setTimeout(resolve, 1800));
                if (submitBtn) {
                    submitBtn.innerHTML = submitBtn.dataset.originalHtml;
                    submitBtn.disabled = false;
                }
            }
        } else if (partName == 'second') {
            if (response.status == 200) {
                await new Promise(resolve => setTimeout(resolve, 1400));
                window.location.href = responseJson.url;
            } else {
                await new Promise(resolve => setTimeout(resolve, 1400));
                if (submitBtn) {
                    submitBtn.innerHTML = submitBtn.dataset.originalHtml;
                    submitBtn.disabled = false;
                }
            }
        }
    }
    fadeOutElement(el, duration = 500) {
        return new Promise(resolve => {
            el.classList.add('fade-transition');
            el.classList.add('hidden');
            setTimeout(() => {
                el.style.display = 'none';
                resolve();
            }, duration);
        });
    }
    fadeInElement(el, duration = 500) {
        return new Promise(resolve => {
            el.style.display = '';
            el.classList.add('fade-transition');
            el.classList.add('hidden');

            requestAnimationFrame(() => {
                el.classList.remove('hidden');
                setTimeout(() => {
                    resolve();
                }, duration);
            });
        });
    }
    appendToQueryString(t, e, i) {
        if (i != null)
            if (Array.isArray(i) || Object.getPrototypeOf(i) === Object.prototype)
                for (const [s,n] of Object.entries(i))
                    this.appendToQueryString(t, `${e}[${s}]`, n);
            else
                t.append(e, String(i))
    }
    transformData(t, e, i) {
        const s = ["GET", "HEAD"].includes(e.toUpperCase());
        if (s && i instanceof FormData) {
            for (const [r,a] of i)
                a != null && t.searchParams.append(r, String(a));
            return null
        }
        if (i !== null && Object.getPrototypeOf(i) === Object.prototype || Array.isArray(i)) {
            const r = s ? t.searchParams : new URLSearchParams;
            for (const [a,d] of Object.entries(i))
                this.appendToQueryString(r, a, d);
            return s ? null : r
        }
        return i
    }
}
class U extends Error {
    constructor(t) {
        const e = `HTTP ${t.status}: ${t.statusText}`;
        super(e),
        this.name = this.constructor.name,
        this.stack = new Error(e).stack,
        this.response = t
    }
}
class O {
    constructor() {
        this.abortControllers = new Set
    }
    initialize(t) {
        t.uiHandler.addEventListener("interaction", this.checkAbortable.bind(this)),
        t.addEventListener("init", this.onInitialize.bind(this)),
        t.addEventListener("start", this.saveAbortController.bind(this)),
        t.addEventListener("complete", this.removeAbortController.bind(this))
    }
    onInitialize() {
        document.addEventListener("keydown", t => {
            if (t.key === "Escape" && !(t.ctrlKey || t.shiftKey || t.altKey || t.metaKey)) {
                for (const e of this.abortControllers)
                    e.abort();
                this.abortControllers.clear()
            }
        }
        )
    }
    checkAbortable(t) {
        var s, n;
        const {element: e, options: i} = t.detail;
        (e.hasAttribute("data-naja-abort") || (s = e.form) != null && s.hasAttribute("data-naja-abort")) && (i.abort = (e.getAttribute("data-naja-abort") ?? ((n = e.form) == null ? void 0 : n.getAttribute("data-naja-abort"))) !== "off")
    }
    saveAbortController(t) {
        const {abortController: e, options: i} = t.detail;
        i.abort !== !1 && (this.abortControllers.add(e),
        i.clearAbortExtension = () => this.abortControllers.delete(e))
    }
    removeAbortController(t) {
        const {options: e} = t.detail;
        e.abort !== !1 && e.clearAbortExtension && e.clearAbortExtension()
    }
}
class I {
    constructor() {
        this.abortControllers = new Map
    }
    initialize(t) {
        t.uiHandler.addEventListener("interaction", this.checkUniqueness.bind(this)),
        t.addEventListener("start", this.abortPreviousRequest.bind(this)),
        t.addEventListener("complete", this.clearRequest.bind(this))
    }
    checkUniqueness(t) {
        var s, n;
        const {element: e, options: i} = t.detail;
        if (e.hasAttribute("data-naja-unique") ?? ((s = e.form) == null ? void 0 : s.hasAttribute("data-naja-unique"))) {
            const r = e.getAttribute("data-naja-unique") ?? ((n = e.form) == null ? void 0 : n.getAttribute("data-naja-unique"));
            i.unique = r === "off" ? !1 : r ?? "default"
        }
    }
    abortPreviousRequest(t) {
        var s;
        const {abortController: e, options: i} = t.detail;
        i.unique !== !1 && ((s = this.abortControllers.get(i.unique ?? "default")) == null || s.abort(),
        this.abortControllers.set(i.unique ?? "default", e))
    }
    clearRequest(t) {
        const {request: e, options: i} = t.detail;
        !e.signal.aborted && i.unique !== !1 && this.abortControllers.delete(i.unique ?? "default")
    }
}
const w = new H;
w.registerExtension(new O);
w.registerExtension(new I);
var x = typeof globalThis < "u" ? globalThis : typeof window < "u" ? window : typeof global < "u" ? global : typeof self < "u" ? self : {};
function T(o) {
    return o && o.__esModule && Object.prototype.hasOwnProperty.call(o, "default") ? o.default : o
}
const q = o => {
    document.readyState !== "loading" ? o() : document.addEventListener("DOMContentLoaded", o)
}
;
export {x as c, T as g, w as n, q as o};
