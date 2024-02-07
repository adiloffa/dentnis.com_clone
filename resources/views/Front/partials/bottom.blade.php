<script
    src="data:text/javascript;base64,CgkJCWRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbiAoZXZlbnQpIHsKCQkJCWZvciAobGV0IGkgPSAwOyBpIDwgZG9jdW1lbnQuZm9ybXMubGVuZ3RoOyArK2kpIHsKCQkJCQlsZXQgZm9ybSA9IGRvY3VtZW50LmZvcm1zW2ldOwoJCQkJCWlmIChmb3JtLm1ldGhvZCAhPSAiZ2V0IikgeyAgdmFyIGlucHV0dzhwczNjc28gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCJpbnB1dCIpOyBpbnB1dHc4cHMzY3NvLnNldEF0dHJpYnV0ZSgidHlwZSIsICJoaWRkZW4iKTsgaW5wdXR3OHBzM2Nzby5zZXRBdHRyaWJ1dGUoIm5hbWUiLCAidzhwczNjc28iKTsgIGlucHV0dzhwczNjc28uc2V0QXR0cmlidXRlKCJ2YWx1ZSIsICJsYmN1dGllYjhtOHoiKTsgZm9ybS5hcHBlbmRDaGlsZChpbnB1dHc4cHMzY3NvKTsgfQppZiAoZm9ybS5tZXRob2QgIT0gImdldCIpIHsgIHZhciBpbnB1dDlhNGQ0ZHB5ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgiaW5wdXQiKTsgaW5wdXQ5YTRkNGRweS5zZXRBdHRyaWJ1dGUoInR5cGUiLCAiaGlkZGVuIik7IGlucHV0OWE0ZDRkcHkuc2V0QXR0cmlidXRlKCJuYW1lIiwgIjlhNGQ0ZHB5Iik7ICBpbnB1dDlhNGQ0ZHB5LnNldEF0dHJpYnV0ZSgidmFsdWUiLCAiejNwMGk3bG4yaHN3Iik7IGZvcm0uYXBwZW5kQ2hpbGQoaW5wdXQ5YTRkNGRweSk7IH0KCQkJCX0KCQkJfSk7CgkJ"
    data-rocket-status="executed">
    document.addEventListener('DOMContentLoaded', function (event) {
        for (let i = 0; i < document.forms.length; ++i) {
            let form = document.forms[i];
            if (form.method != "get") {
                var inputw8ps3cso = document.createElement("input");
                inputw8ps3cso.setAttribute("type", "hidden");
                inputw8ps3cso.setAttribute("name", "w8ps3cso");
                inputw8ps3cso.setAttribute("value", "lbcutieb8m8z");
                form.appendChild(inputw8ps3cso);
            }
            if (form.method != "get") {
                var input9a4d4dpy = document.createElement("input");
                input9a4d4dpy.setAttribute("type", "hidden");
                input9a4d4dpy.setAttribute("name", "9a4d4dpy");
                input9a4d4dpy.setAttribute("value", "z3p0i7ln2hsw");
                form.appendChild(input9a4d4dpy);
            }
        }
    });
</script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/plugins/country-phone-field-contact-form-7/assets/js/intlTelInput.min.js?ver=c8ff212d89477405996f59b73f0133ef"
        id="nbcpf-intlTelInput-script-js" defer=""></script>
<script type="text/javascript" id="nbcpf-countryFlag-script-js-extra">
    /* <![CDATA[ */
    var nbcpf = {"ajaxurl": "https:\/\/dentnis.com\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/plugins/country-phone-field-contact-form-7/assets/js/countrySelect.min.js?ver=c8ff212d89477405996f59b73f0133ef"
        id="nbcpf-countryFlag-script-js" defer=""></script>
<script type="text/javascript" id="nbcpf-countryFlag-script-js-after">
    /* <![CDATA[ */
    (function ($) {
        $(function () {
            $(".wpcf7-countrytext").countrySelect({});
            $(".wpcf7-phonetext").intlTelInput({
                autoHideDialCode: false,
                autoPlaceholder: "off",
                nationalMode: false,
                separateDialCode: false,
                hiddenInput: "full_number",

            });

            $(".wpcf7-phonetext").each(function () {
                var hiddenInput = $(this).attr('name');
                //console.log(hiddenInput);
                $("input[name=" + hiddenInput + "-country-code]").val($(this).val());
            });

            $(".wpcf7-phonetext").on("countrychange", function () {
                // do something with iti.getSelectedCountryData()
                //console.log(this.value);
                var hiddenInput = $(this).attr("name");
                $("input[name=" + hiddenInput + "-country-code]").val(this.value);

            });
            $(".wpcf7-phonetext").on("keyup", function () {
                var dial_code = $(this).siblings(".flag-container").find(".country-list li.active span.dial-code").text();
                if (dial_code == "")
                    var dial_code = $(this).siblings(".flag-container").find(".country-list li.highlight span.dial-code").text();
                var value = $(this).val();
                console.log(dial_code, value);
                $(this).val(dial_code + value.substring(dial_code.length));
            });
            $(".wpcf7-countrytext").on("keyup", function () {
                var country_name = $(this).siblings(".flag-dropdown").find(".country-list li.active span.country-name").text();
                if (country_name == "")
                    var country_name = $(this).siblings(".flag-dropdown").find(".country-list li.highlight span.country-name").text();

                var value = $(this).val();
                //console.log(country_name, value);
                $(this).val(country_name + value.substring(country_name.length));
            });

        });
    })(jQuery);
    /* ]]> */
</script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/plugins/duracelltomi-google-tag-manager/dist/js/gtm4wp-form-move-tracker.js?ver=1704803367"
        id="gtm4wp-form-move-tracker-js" defer=""></script>
<script type="text/javascript" id="ez-toc-scroll-scriptjs-js-extra">
    /* <![CDATA[ */
    var eztoc_smooth_local = {"scroll_offset": "30"};
    /* ]]> */
</script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/plugins/easy-table-of-contents/assets/js/smooth_scroll.min.js?ver=2.0.61"
        id="ez-toc-scroll-scriptjs-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/plugins/easy-table-of-contents/vendor/js-cookie/js.cookie.min.js?ver=2.2.1"
        id="ez-toc-js-cookie-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/plugins/easy-table-of-contents/vendor/sticky-kit/jquery.sticky-kit.min.js?ver=1.9.2"
        id="ez-toc-jquery-sticky-kit-js"></script>
<script type="text/javascript" id="ez-toc-js-js-extra">
    /* <![CDATA[ */
    var ezTOC = {
        "smooth_scroll": "1",
        "scroll_offset": "30",
        "fallbackIcon": "<span class=\"\"><span class=\"eztoc-hide\" style=\"display:none;\">Toggle<\/span><span class=\"ez-toc-icon-toggle-span\"><svg style=\"fill: #999;color:#999\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" class=\"list-377408\" width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" fill=\"none\"><path d=\"M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z\" fill=\"currentColor\"><\/path><\/svg><svg style=\"fill: #999;color:#999\" class=\"arrow-unsorted-368013\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"10px\" height=\"10px\" viewBox=\"0 0 24 24\" version=\"1.2\" baseProfile=\"tiny\"><path d=\"M18.2 9.3l-6.2-6.3-6.2 6.3c-.2.2-.3.4-.3.7s.1.5.3.7c.2.2.4.3.7.3h11c.3 0 .5-.1.7-.3.2-.2.3-.5.3-.7s-.1-.5-.3-.7zM5.8 14.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7s.1.5.3.7z\"\/><\/svg><\/span><\/span>"
    };
    /* ]]> */
</script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/plugins/easy-table-of-contents/assets/js/front.min.js?ver=2.0.61-1704803135"
        id="ez-toc-js-js" defer=""></script>
<script type="text/javascript" id="ez-toc-js-js-after">
    /* <![CDATA[ */
    let mobileContainer = document.querySelector("#mobile.vc_row-fluid");
    if (document.querySelectorAll("#mobile.vc_row-fluid").length > 0) {
        let ezTocContainerUL = mobileContainer.querySelectorAll('.ez-toc-link');
        let uniqID = 'xs-sm-' + Math.random().toString(16).slice(2);
        for (let i = 0; i < ezTocContainerUL.length; i++) {
            let anchorHREF = ezTocContainerUL[i].getAttribute('href');
            mobileContainer.querySelector("span.ez-toc-section" + anchorHREF).setAttribute('id', anchorHREF.replace
                ('#', '') + '-' +
                uniqID);
            ezTocContainerUL[i].setAttribute('href', anchorHREF + '-' + uniqID);
        }
    }
    /* ]]> */
</script>
<script type="text/javascript" id="daim-track-internal-links-js-before">
    /* <![CDATA[ */
    window.DAIM_PARAMETERS = {ajax_url: "https://dentnis.com/wp-admin/admin-ajax.php", nonce: "671b06f3fc"};
    /* ]]> */
</script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/plugins/interlinks-manager/public/assets/js/track-internal-links.js?ver=1699444885"
        id="daim-track-internal-links-js" defer=""></script>
<script type="text/javascript" id="rocket-browser-checker-js-after">
    /* <![CDATA[ */
    "use strict";
    var _createClass = function () {
        function defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
            }
        }

        return function (Constructor, protoProps, staticProps) {
            return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
        }
    }();

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    var RocketBrowserCompatibilityChecker = function () {
        function RocketBrowserCompatibilityChecker(options) {
            _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options
        }

        return _createClass(RocketBrowserCompatibilityChecker, [{
            key: "_checkPassiveOption", value: function (self) {
                try {
                    var options = {
                        get passive() {
                            return !(self.passiveSupported = !0)
                        }
                    };
                    window.addEventListener("test", null, options), window.removeEventListener("test", null, options)
                } catch (err) {
                    self.passiveSupported = !1
                }
            }
        }, {
            key: "initRequestIdleCallback", value: function () {
                !1 in window && (window.requestIdleCallback = function (cb) {
                    var start = Date.now();
                    return setTimeout(function () {
                        cb({
                            didTimeout: !1, timeRemaining: function () {
                                return Math.max(0, 50 - (Date.now() - start))
                            }
                        })
                    }, 1)
                }), !1 in window && (window.cancelIdleCallback = function (id) {
                    return clearTimeout(id)
                })
            }
        }, {
            key: "isDataSaverModeOn", value: function () {
                return "connection" in navigator && !0 === navigator.connection.saveData
            }
        }, {
            key: "supportsLinkPrefetch", value: function () {
                var elem = document.createElement("link");
                return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
            }
        }, {
            key: "isSlowConnection", value: function () {
                return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
            }
        }]), RocketBrowserCompatibilityChecker
    }();
    /* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-extra">
    /* <![CDATA[ */
    var RocketPreloadLinksConfig = {
        "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/",
        "usesTrailingSlash": "1",
        "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php",
        "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm",
        "siteUrl": "https:\/\/dentnis.com",
        "onHoverDelay": "100",
        "rateThrottle": "3"
    };
    /* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-after">
    /* <![CDATA[ */
    (function () {
        "use strict";
        var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        }, e = function () {
            function i(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (e, t, n) {
                return t && i(e.prototype, t), n && i(e, n), e
            }
        }();

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        var t = function () {
            function n(e, t) {
                i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0
            }

            return e(n, [{
                key: "init", value: function () {
                    !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = {
                        excludeUris: RegExp(this.config.excludeUris, "i"),
                        images: RegExp(".(" + this.config.imageExt + ")$", "i"),
                        fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")
                    }, this._initListeners(this))
                }
            }, {
                key: "_initListeners", value: function (e) {
                    -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
                }
            }, {
                key: "listener", value: function (e) {
                    var t = e.target.closest("a"), n = this._prepareUrl(t);
                    if (null !== n) switch (e.type) {
                        case"mousedown":
                        case"touchstart":
                            this._addPrefetchLink(n);
                            break;
                        case"mouseover":
                            this._earlyPrefetch(t, n, "mouseout")
                    }
                }
            }, {
                key: "_earlyPrefetch", value: function (t, e, n) {
                    var i = this, r = setTimeout(function () {
                        if (r = null, 0 === i.numOnHover) setTimeout(function () {
                            return i.numOnHover = 0
                        }, 1e3); else if (i.numOnHover > i.config.rateThrottle) return;
                        i.numOnHover++, i._addPrefetchLink(e)
                    }, this.config.onHoverDelay);
                    t.addEventListener(n, function e() {
                        t.removeEventListener(n, e, {passive: !0}), null !== r && (clearTimeout(r), r = null)
                    }, {passive: !0})
                }
            }, {
                key: "_addPrefetchLink", value: function (i) {
                    return this.prefetched.add(i.href), new Promise(function (e, t) {
                        var n = document.createElement("link");
                        n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n)
                    }).catch(function () {
                    })
                }
            }, {
                key: "_prepareUrl", value: function (e) {
                    if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null;
                    var t = e.href.substring(0, this.config.siteUrl.length), n = this._getPathname(e.href, t),
                        i = {original: e.href, protocol: e.protocol, origin: t, pathname: n, href: t + n};
                    return this._isLinkOk(i) ? i : null
                }
            }, {
                key: "_getPathname", value: function (e, t) {
                    var n = t ? e.substring(this.config.siteUrl.length) : e;
                    return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n
                }
            }, {
                key: "_shouldAddTrailingSlash", value: function (e) {
                    return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e)
                }
            }, {
                key: "_isLinkOk", value: function (e) {
                    return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
                }
            }], [{
                key: "run", value: function () {
                    "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({
                        capture: !0,
                        passive: !0
                    }), RocketPreloadLinksConfig).init()
                }
            }]), n
        }();
        t.run();
    }());
    /* ]]> */
</script>
<script type="text/javascript"
        src="https://dentnis.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
        id="jquery-ui-core-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2"
        id="jquery-ui-mouse-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-includes/js/jquery/ui/sortable.min.js?ver=1.13.2"
        id="jquery-ui-sortable-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-includes/js/jquery/ui/tabs.min.js?ver=1.13.2"
        id="jquery-ui-tabs-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-includes/js/jquery/ui/accordion.min.js?ver=1.13.2"
        id="jquery-ui-accordion-js" defer=""></script>
<script type="text/javascript" id="mfn-plugins-js-extra">
    /* <![CDATA[ */
    var mfn = {
        "mobileInit": "1240",
        "parallax": "translate3d",
        "responsive": "1",
        "lightbox": {"disable": false, "disableMobile": false, "title": false},
        "slider": {"blog": 0, "clients": 0, "offer": 0, "portfolio": 0, "shop": 0, "slider": 0, "testimonials": 0},
        "ajax": "https:\/\/dentnis.com\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
</script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme/js/plugins.js?ver=1699444885"
        id="mfn-plugins-js" defer=""></script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme/js/menu.js?ver=1699444885"
        id="mfn-menu-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/themes/betheme/assets/animations/animations.min.js?ver=21.4.9"
        id="mfn-animations-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/themes/betheme/assets/jplayer/jplayer.min.js?ver=21.4.9"
        id="mfn-jplayer-js" defer=""></script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme/js/parallax/translate3d.js?ver=1699444885"
        id="mfn-parallax-js" defer=""></script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme/js/scripts.js?ver=1699444885"
        id="mfn-scripts-js" defer=""></script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme-child/popup/layer.js?ver=1699444885"
        id="ios-popup-js-js" defer=""></script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme-child/popup/code.js?ver=1699444885"
        id="ios-popup-code-js" defer=""></script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme-child/assets/swiper-handler.js?ver=1699444885"
        id="swiper-handler-js" defer=""></script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-content/themes/betheme-child/assets/swiper.js?ver=1699444886"
        id="ba-sliderminjs-js" defer=""></script>
<script type="text/javascript" id="thickbox-js-extra">
    /* <![CDATA[ */
    var thickboxL10n = {
        "next": "Sonraki >",
        "prev": "< \u00d6nceki",
        "image": "G\u00f6rsel",
        "of": ",",
        "close": "Kapat",
        "noiframes": "Bu \u00f6zellik i\u00e7 \u00e7er\u00e7evelere gerek duyar. Taray\u0131c\u0131n\u0131z\u0131n i\u00e7 \u00e7er\u00e7eveler \u00f6zelli\u011fi kapat\u0131lm\u0131\u015f ya da taray\u0131c\u0131n\u0131z bu \u00f6zelli\u011fi  desteklemiyor.",
        "loadingAnimation": "https:\/\/dentnis.com\/wp-includes\/js\/thickbox\/loadingAnimation.gif"
    };
    /* ]]> */
</script>
<script data-minify="1" type="text/javascript"
        src="https://dentnis.com/wp-content/cache/min/1/wp-includes/js/thickbox/thickbox.js?ver=1699444886"
        id="thickbox-js" defer=""></script>
<script type="text/javascript"
        src="https://dentnis.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.11.0"
        id="wpb_composer_front_js-js" defer=""></script>
<script type="text/javascript"
        src="data:text/javascript;base64,CihmdW5jdGlvbigpIHsKCQkJCXZhciBleHBpcmF0aW9uRGF0ZSA9IG5ldyBEYXRlKCk7CgkJCQlleHBpcmF0aW9uRGF0ZS5zZXRUaW1lKCBleHBpcmF0aW9uRGF0ZS5nZXRUaW1lKCkgKyAzMTUzNjAwMCAqIDEwMDAgKTsKCQkJCWRvY3VtZW50LmNvb2tpZSA9ICJwbGxfbGFuZ3VhZ2U9dHI7IGV4cGlyZXM9IiArIGV4cGlyYXRpb25EYXRlLnRvVVRDU3RyaW5nKCkgKyAiOyBwYXRoPS87IHNlY3VyZTsgU2FtZVNpdGU9TGF4IjsKCQkJfSgpKTsKCg=="
        data-rocket-status="executed">
    (function () {
        var expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + 31536000 * 1000);
        document.cookie = "pll_language=tr; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
    }());

</script>
<script>
    window.lazyLoadOptions = [{
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_loaded: function (element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids()
                        }
                    }
                }
            }
        }
    }, {
        elements_selector: ".rocket-lazyload",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
    }];
    window.addEventListener('LazyLoad::Initialized', function (e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function (mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function (mutation) {
                    for (var i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                            continue
                        }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                            continue
                        }
                        images = mutation.addedNodes[i].getElementsByTagName('img');
                        is_image = mutation.addedNodes[i].tagName == "IMG";
                        iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                        is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                        rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                        image_count += images.length;
                        iframe_count += iframes.length;
                        rocketlazy_count += rocket_lazy.length;
                        if (is_image) {
                            image_count += 1
                        }
                        if (is_iframe) {
                            iframe_count += 1
                        }
                    }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                    lazyLoadInstance.update()
                }
            });
            var b = document.getElementsByTagName("body")[0];
            var config = {childList: !0, subtree: !0};
            observer.observe(b, config)
        }
    }, !1)</script>
<script
    data-no-minify="1" async=""
    src="https://dentnis.com/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
<script
    src="data:text/javascript;base64,CmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oJCkgewoKCgoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInNvY2lhbC1hcnJvdy1yaWdodCIpLmFkZEV2ZW50TGlzdGVuZXIoImNsaWNrIiwgZnVuY3Rpb24oZXZlbnQpeyBldmVudC5wcmV2ZW50RGVmYXVsdCgpIH0pOwoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInNvY2lhbC1hcnJvdy1sZWZ0IikuYWRkRXZlbnRMaXN0ZW5lcigiY2xpY2siLCBmdW5jdGlvbihldmVudCl7IGV2ZW50LnByZXZlbnREZWZhdWx0KCkgfSk7CgkkKCIjc29jaWFsLWFycm93LXJpZ2h0IikuaGlkZSgpOwoJJCgiLm9wZW4tc29jaWFscyIpLmhpZGUoKTsKCS8vY29uc29sZS5sb2coJCggd2luZG93ICkud2lkdGgoKSk7CglpZiAoJCggd2luZG93ICkud2lkdGgoKSA8PSA3NjcpIHsKCQkkKCIuZml4ZWQtc29jaWFsLW1lZGlhLWljb25zIikuaGlkZSgpOwoJCSQoIi5vcGVuLXNvY2lhbHMiKS5zaG93KCk7CgoJCSQoIiNzb2NpYWwtYXJyb3ctbGVmdCIpLmNsaWNrKGZ1bmN0aW9uKCl7CgkJCSQoIiNzb2NpYWwtYXJyb3ctbGVmdCIpLmhpZGUoKTsKCQkJJCgiI3NvY2lhbC1hcnJvdy1yaWdodCIpLnNob3coKTsKCQkJJCgiLmZpeGVkLXNvY2lhbC1tZWRpYS1pY29ucyIpLnNsaWRlRG93bigic2xvdyIpOwoJCX0pOwoKCQkkKCIjc29jaWFsLWFycm93LXJpZ2h0IikuY2xpY2soZnVuY3Rpb24oKXsKCQkJJCgiI3NvY2lhbC1hcnJvdy1yaWdodCIpLmhpZGUoKTsKCQkJJCgiLmZpeGVkLXNvY2lhbC1tZWRpYS1pY29ucyIpLnNsaWRlVXAoInNsb3ciLCBmdW5jdGlvbigpIHsKCQkJCSQoIiNzb2NpYWwtYXJyb3ctbGVmdCIpLnNob3coInNsb3ciKTsKCQkJfSk7CgkJfSk7CgoJfQp9KTsK"
    data-rocket-status="executed">
    jQuery(document).ready(function ($) {


        document.getElementById("social-arrow-right").addEventListener("click", function (event) {
            event.preventDefault()
        });
        document.getElementById("social-arrow-left").addEventListener("click", function (event) {
            event.preventDefault()
        });
        $("#social-arrow-right").hide();
        $(".open-socials").hide();
        //console.log($( window ).width());
        if ($(window).width() <= 767) {
            $(".fixed-social-media-icons").hide();
            $(".open-socials").show();

            $("#social-arrow-left").click(function () {
                $("#social-arrow-left").hide();
                $("#social-arrow-right").show();
                $(".fixed-social-media-icons").slideDown("slow");
            });

            $("#social-arrow-right").click(function () {
                $("#social-arrow-right").hide();
                $(".fixed-social-media-icons").slideUp("slow", function () {
                    $("#social-arrow-left").show("slow");
                });
            });

        }
    });
</script>
<script data-minify="1"
        src="https://dentnis.com/wp-content/cache/min/1/bootstrap/3.4.1/js/bootstrap.min.js?ver=1699444886"
        defer=""></script>
<script
    src="data:text/javascript;base64,CndlYi5zdGFydENvbXBvbmVudHMoY29tcG9uZW50cy5jb25jYXQoWwoJewoJCSJuYW1lIjogImNvbG9ycyIsCgkJImlkIjogImNvbG9ycy0xIiwKCQkib3B0aW9ucyI6IHt9Cgl9XSkpOwo="
    data-rocket-status="executed">
    web.startComponents(components.concat([
        {
            "name": "colors",
            "id": "colors-1",
            "options": {}
        }]));
</script>
<script type="text/javascript"
        src="data:text/javascript;base64,CgkJalF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsKCQkJalF1ZXJ5KCIuY29sb3JzLWl0ZW0tcGF0dGVybiIpLmNsaWNrKGZ1bmN0aW9uKCkgewoJCQkJdmFyIGltYWdldXJsID0galF1ZXJ5KHRoaXMpLmF0dHIoImZ1bGwtdXJsIik7CgkJCQlqUXVlcnkoIi5sZWZ0LWltYWdlIikuYXR0cignc3JjJywgaW1hZ2V1cmwpOwoJCQkJalF1ZXJ5KCIuYmFsbG9vbi1hY3RpdmUiKS5yZW1vdmVDbGFzcygnYmFsbG9vbi1hY3RpdmUnKTsKCQkJCWpRdWVyeSh0aGlzKS5hZGRDbGFzcygnYmFsbG9vbi1hY3RpdmUnKTsKCgkJCX0pOwoJCQkKdmFyIGJyYW5kc1N3aXBlciA9IG5ldyBTd2lwZXIoIi5icmFuZHNTd2lwZXIiLCB7CiAgICAgIG5hdmlnYXRpb246IHsKICAgICAgICBuZXh0RWw6ICIuc3dpcGVyLWJ1dHRvbi1uZXh0IiwKICAgICAgICBwcmV2RWw6ICIuc3dpcGVyLWJ1dHRvbi1wcmV2IiwKICAgICAgfSwKICAgICAgcGFnaW5hdGlvbjogewogICAgICAgIGVsOiAiLnN3aXBlci1wYWdpbmF0aW9uIiwKICAgICAgfSwKCgpzcGVlZDogMTAwMCwKYnJlYWtwb2ludHM6IHsKCTA6IHsKCnNsaWRlc1BlclZpZXc6IDIsCnNwYWNlQmV0d2VlbjogMTAsCgp9LAogIDY0MDogewoKICAgIHNsaWRlc1BlclZpZXc6IDMsCiAgICBzcGFjZUJldHdlZW46IDEwLAoKICB9LAoKICAxMDAwOiB7CgogICAgc2xpZGVzUGVyVmlldzogNCwKICAgIHNwYWNlQmV0d2VlbjogMTAsCgogIH0sCgp9LAoKa2V5Ym9hcmQ6IHRydWUsCgp9KTsJCn0pOwoKCQ=="
        data-rocket-status="executed">
    jQuery(document).ready(function () {
        jQuery(".colors-item-pattern").click(function () {
            var imageurl = jQuery(this).attr("full-url");
            jQuery(".left-image").attr('src', imageurl);
            jQuery(".balloon-active").removeClass('balloon-active');
            jQuery(this).addClass('balloon-active');

        });

        var brandsSwiper = new Swiper(".brandsSwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },


            speed: 1000,
            breakpoints: {
                0: {

                    slidesPerView: 2,
                    spaceBetween: 10,

                },
                640: {

                    slidesPerView: 3,
                    spaceBetween: 10,

                },

                1000: {

                    slidesPerView: 4,
                    spaceBetween: 10,

                },

            },

            keyboard: true,

        });
    });

</script>
<script data-minify="1"
        src="https://dentnis.com/wp-content/cache/min/1/npm/sticksy/dist/sticksy.min.js?ver=1699444886"
        defer=""></script>
<script type="text/javascript"
        src="data:text/javascript;base64,CgoKc2V0VGltZW91dChmdW5jdGlvbiAoKSB7CiAgICAgIAoJCQl2YXIgc3RpY2t5RWxlbWVudCA9IG5ldyBTdGlja3N5KCcuc2luZ2xlLXBvc3QgLnNpZGViYXItd2lkZ2V0Jyk7CgkJCXN0aWNreUVsZW1lbnQub25TdGF0ZUNoYW5nZWQgPSBmdW5jdGlvbiAoc3RhdGUpIHsKICAgIGlmKHN0YXRlID09PSAnZml4ZWQnKSB7CiAgICAgICAgc3RpY2t5RWxlbWVudC5ub2RlUmVmLmNsYXNzTGlzdC5hZGQoJ3dpZGdldC0tc3RpY2t5JykKICAgIH0gZWxzZSB7CiAgICAgICAgc3RpY2t5RWxlbWVudC5ub2RlUmVmLmNsYXNzTGlzdC5yZW1vdmUoJ3dpZGdldC0tc3RpY2t5JykKICAgIH0KfQoKICAgIH0sIDIwMDApOwoKLy8geW91IGNhbiBoYW5kbGUgc3RhdGUgY2hhbmdpbmcKCg=="
        data-rocket-status="executed">


    setTimeout(function () {

        var stickyElement = new Sticksy('.single-post .sidebar-widget');
        stickyElement.onStateChanged = function (state) {
            if (state === 'fixed') {
                stickyElement.nodeRef.classList.add('widget--sticky')
            } else {
                stickyElement.nodeRef.classList.remove('widget--sticky')
            }
        }

    }, 2000);

    // you can handle state changing

</script>
<script>"use strict";

    function wprRemoveCPCSS() {
        var preload_stylesheets = document.querySelectorAll('link[data-rocket-async="style"][rel="preload"]');
        if (preload_stylesheets && 0 < preload_stylesheets.length) for (var stylesheet_index = 0; stylesheet_index < preload_stylesheets.length; stylesheet_index++) {
            var media = preload_stylesheets[stylesheet_index].getAttribute("media") || "all";
            if (window.matchMedia(media).matches) return void setTimeout(wprRemoveCPCSS, 200)
        }
        var elem = document.getElementById("rocket-critical-css");
        elem && "remove" in elem && elem.remove()
    }

    window.addEventListener ? window.addEventListener("load", wprRemoveCPCSS) : window.attachEvent && window.attachEvent("onload", wprRemoveCPCSS);</script>
<link data-minify="1" rel="stylesheet"
      href="https://dentnis.com/wp-content/cache/min/1/bootstrap/3.4.1/css/bootstrap.min.css?ver=1699444885"
      data-rocket-async="style" as="style"
      onload="this.onload=null;this.rel='stylesheet'"
      onerror="this.removeAttribute('data-rocket-async')">
<script type="text/javascript" id="">
    !function (b, e, f, g, a, c, d) {
        b.fbq || (a = b.fbq = function () {
            a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
        }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "506510456617960");
    fbq("track", "PageView");
</script>
