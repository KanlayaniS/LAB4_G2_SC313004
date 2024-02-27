!(function () {
  var e = {
      411: function () {
        /**
         * Copyright since 2007 PrestaShop SA and Contributors
         * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
         *
         * NOTICE OF LICENSE
         *
         * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
         * that is bundled with this package in the file LICENSE.md.
         * It is also available through the world-wide-web at this URL:
         * https://opensource.org/licenses/AFL-3.0
         * If you did not receive a copy of the license and are unable to
         * obtain it through the world-wide-web, please send an email
         * to license@prestashop.com so we can send you a copy immediately.
         *
         * DISCLAIMER
         *
         * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
         * versions in the future. If you wish to customize PrestaShop for your
         * needs please refer to https://devdocs.prestashop.com/ for more information.
         *
         * @author    PrestaShop SA and Contributors <contact@prestashop.com>
         * @copyright Since 2007 PrestaShop SA and Contributors
         * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
         */
        !(function (e) {
          var t = 0,
            n = function (t, n) {
              (this.options = n),
                (this.$elementFilestyle = []),
                (this.$element = e(t));
            };
          n.prototype = {
            clear: function () {
              this.$element.val(""),
                this.$elementFilestyle.find(":text").val(""),
                this.$elementFilestyle.find(".badge").remove();
            },
            destroy: function () {
              this.$element.removeAttr("style").removeData("filestyle"),
                this.$elementFilestyle.remove();
            },
            disabled: function (e) {
              if (!0 === e)
                this.options.disabled ||
                  (this.$element.attr("disabled", "true"),
                  this.$elementFilestyle.find("label").attr("disabled", "true"),
                  (this.options.disabled = !0));
              else {
                if (!1 !== e) return this.options.disabled;
                this.options.disabled &&
                  (this.$element.removeAttr("disabled"),
                  this.$elementFilestyle.find("label").removeAttr("disabled"),
                  (this.options.disabled = !1));
              }
            },
            buttonBefore: function (e) {
              if (!0 === e)
                this.options.buttonBefore ||
                  ((this.options.buttonBefore = !0),
                  this.options.input &&
                    (this.$elementFilestyle.remove(),
                    this.constructor(),
                    this.pushNameFiles()));
              else {
                if (!1 !== e) return this.options.buttonBefore;
                this.options.buttonBefore &&
                  ((this.options.buttonBefore = !1),
                  this.options.input &&
                    (this.$elementFilestyle.remove(),
                    this.constructor(),
                    this.pushNameFiles()));
              }
            },
            icon: function (e) {
              if (!0 === e)
                this.options.icon ||
                  ((this.options.icon = !0),
                  this.$elementFilestyle
                    .find("label")
                    .prepend(this.htmlIcon()));
              else {
                if (!1 !== e) return this.options.icon;
                this.options.icon &&
                  ((this.options.icon = !1),
                  this.$elementFilestyle.find(".icon-span-filestyle").remove());
              }
            },
            input: function (e) {
              if (!0 === e)
                this.options.input ||
                  ((this.options.input = !0),
                  this.options.buttonBefore
                    ? this.$elementFilestyle.append(this.htmlInput())
                    : this.$elementFilestyle.prepend(this.htmlInput()),
                  this.$elementFilestyle.find(".badge").remove(),
                  this.pushNameFiles(),
                  this.$elementFilestyle
                    .find(".group-span-filestyle")
                    .addClass("input-group-btn"));
              else {
                if (!1 !== e) return this.options.input;
                if (this.options.input) {
                  (this.options.input = !1),
                    this.$elementFilestyle.find(":text").remove();
                  var t = this.pushNameFiles();
                  t.length > 0 &&
                    this.options.badge &&
                    this.$elementFilestyle
                      .find("label")
                      .append(' <span class="badge">' + t.length + "</span>"),
                    this.$elementFilestyle
                      .find(".group-span-filestyle")
                      .removeClass("input-group-btn");
                }
              }
            },
            size: function (e) {
              if (void 0 === e) return this.options.size;
              var t = this.$elementFilestyle.find("label"),
                n = this.$elementFilestyle.find("input");
              t.removeClass("btn-lg btn-sm"),
                n.removeClass("input-lg input-sm"),
                "nr" != e && (t.addClass("btn-" + e), n.addClass("input-" + e));
            },
            placeholder: function (e) {
              if (void 0 === e) return this.options.placeholder;
              (this.options.placeholder = e),
                this.$elementFilestyle.find("input").attr("placeholder", e);
            },
            buttonText: function (e) {
              if (void 0 === e) return this.options.buttonText;
              (this.options.buttonText = e),
                this.$elementFilestyle
                  .find("label .buttonText")
                  .html(this.options.buttonText);
            },
            buttonName: function (e) {
              if (void 0 === e) return this.options.buttonName;
              (this.options.buttonName = e),
                this.$elementFilestyle
                  .find("label")
                  .attr({ class: "btn " + this.options.buttonName });
            },
            iconName: function (e) {
              if (void 0 === e) return this.options.iconName;
              this.$elementFilestyle
                .find(".icon-span-filestyle")
                .attr({
                  class: "icon-span-filestyle " + this.options.iconName,
                });
            },
            htmlIcon: function () {
              return this.options.icon
                ? '<span class="icon-span-filestyle ' +
                    this.options.iconName +
                    '"></span> '
                : "";
            },
            htmlInput: function () {
              return this.options.input
                ? '<input type="text" class="form-control ' +
                    ("nr" == this.options.size
                      ? ""
                      : "input-" + this.options.size) +
                    '" placeholder="' +
                    this.options.placeholder +
                    '" disabled> '
                : "";
            },
            pushNameFiles: function () {
              var e = "",
                t = [];
              void 0 === this.$element[0].files
                ? (t[0] = { name: this.$element[0] && this.$element[0].value })
                : (t = this.$element[0].files);
              for (var n = 0; n < t.length; n++)
                e += t[n].name.split("\\").pop() + ", ";
              return (
                "" !== e
                  ? this.$elementFilestyle
                      .find(":text")
                      .val(e.replace(/\, $/g, ""))
                  : this.$elementFilestyle.find(":text").val(""),
                t
              );
            },
            constructor: function () {
              var n,
                r,
                i = this,
                o = i.$element.attr("id");
              ("" !== o && o) ||
                ((o = "filestyle-" + t), i.$element.attr({ id: o }), t++),
                (r =
                  '<span class="group-span-filestyle ' +
                  (i.options.input ? "input-group-btn" : "") +
                  '"><label for="' +
                  o +
                  '" class="btn ' +
                  i.options.buttonName +
                  " " +
                  ("nr" == i.options.size ? "" : "btn-" + i.options.size) +
                  '" ' +
                  (i.options.disabled ? 'disabled="true"' : "") +
                  ">" +
                  i.htmlIcon() +
                  '<span class="buttonText">' +
                  i.options.buttonText +
                  "</span></label></span>"),
                (n = i.options.buttonBefore
                  ? r + i.htmlInput()
                  : i.htmlInput() + r),
                (i.$elementFilestyle = e(
                  '<div class="bootstrap-filestyle input-group">' + n + "</div>"
                )),
                i.$elementFilestyle
                  .find(".group-span-filestyle")
                  .attr("tabindex", "0")
                  .keypress(function (e) {
                    if (13 === e.keyCode || 32 === e.charCode)
                      return i.$elementFilestyle.find("label").click(), !1;
                  }),
                i.$element
                  .css({ position: "absolute", clip: "rect(0px 0px 0px 0px)" })
                  .attr("tabindex", "-1")
                  .after(i.$elementFilestyle),
                i.options.disabled && i.$element.attr("disabled", "true"),
                i.$element.change(function () {
                  var e = i.pushNameFiles();
                  0 == i.options.input && i.options.badge
                    ? 0 == i.$elementFilestyle.find(".badge").length
                      ? i.$elementFilestyle
                          .find("label")
                          .append(
                            ' <span class="badge">' + e.length + "</span>"
                          )
                      : 0 == e.length
                      ? i.$elementFilestyle.find(".badge").remove()
                      : i.$elementFilestyle.find(".badge").html(e.length)
                    : i.$elementFilestyle.find(".badge").remove();
                }),
                window.navigator.userAgent.search(/firefox/i) > -1 &&
                  i.$elementFilestyle.find("label").click(function () {
                    return i.$element.click(), !1;
                  });
            },
          };
          var r = e.fn.filestyle;
          (e.fn.filestyle = function (t, r) {
            var i = "",
              o = this.each(function () {
                if ("file" === e(this).attr("type")) {
                  var o = e(this),
                    s = o.data("filestyle"),
                    a = e.extend(
                      {},
                      e.fn.filestyle.defaults,
                      t,
                      "object" == typeof t && t
                    );
                  s ||
                    (o.data("filestyle", (s = new n(this, a))),
                    s.constructor()),
                    "string" == typeof t && (i = s[t](r));
                }
              });
            return void 0 !== typeof i ? i : o;
          }),
            (e.fn.filestyle.defaults = {
              buttonText: "Choose file",
              iconName: "glyphicon glyphicon-folder-open",
              buttonName: "btn-default",
              size: "nr",
              input: !0,
              badge: !0,
              icon: !0,
              buttonBefore: !1,
              disabled: !1,
              placeholder: "",
            }),
            (e.fn.filestyle.noConflict = function () {
              return (e.fn.filestyle = r), this;
            }),
            e(function () {
              e(".filestyle").each(function () {
                var t = e(this),
                  n = {
                    input: "false" !== t.attr("data-input"),
                    icon: "false" !== t.attr("data-icon"),
                    buttonBefore: "true" === t.attr("data-buttonBefore"),
                    disabled: "true" === t.attr("data-disabled"),
                    size: t.attr("data-size"),
                    buttonText: t.attr("data-buttonText"),
                    buttonName: t.attr("data-buttonName"),
                    iconName: t.attr("data-iconName"),
                    badge: "false" !== t.attr("data-badge"),
                    placeholder: t.attr("data-placeholder"),
                  };
                t.filestyle(n);
              });
            });
        })(window.jQuery);
      },
      861: function () {
        /**
         * Copyright since 2007 PrestaShop SA and Contributors
         * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
         *
         * NOTICE OF LICENSE
         *
         * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
         * that is bundled with this package in the file LICENSE.md.
         * It is also available through the world-wide-web at this URL:
         * https://opensource.org/licenses/AFL-3.0
         * If you did not receive a copy of the license and are unable to
         * obtain it through the world-wide-web, please send an email
         * to license@prestashop.com so we can send you a copy immediately.
         *
         * DISCLAIMER
         *
         * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
         * versions in the future. If you wish to customize PrestaShop for your
         * needs please refer to https://devdocs.prestashop.com/ for more information.
         *
         * @author    PrestaShop SA and Contributors <contact@prestashop.com>
         * @copyright Since 2007 PrestaShop SA and Contributors
         * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
         */
        !(function (e) {
          e.fn.scrollbox = function (t) {
            return (
              ((t = e.extend(
                {
                  linear: !1,
                  startDelay: 2,
                  delay: 3,
                  step: 5,
                  speed: 32,
                  switchItems: 1,
                  direction: "vertical",
                  distance: "auto",
                  autoPlay: !0,
                  onMouseOverPause: !0,
                  paused: !1,
                  queue: null,
                  listElement: "ul",
                  listItemElement: "li",
                  infiniteLoop: !0,
                  switchAmount: 0,
                  afterForward: null,
                  afterBackward: null,
                  triggerStackable: !1,
                },
                t
              )).scrollOffset =
                "vertical" === t.direction ? "scrollTop" : "scrollLeft"),
              t.queue && (t.queue = e("#" + t.queue)),
              this.each(function () {
                var n,
                  r,
                  i,
                  o,
                  s,
                  a,
                  l,
                  c,
                  u,
                  f = e(this),
                  d = null,
                  p = null,
                  h = !1,
                  m = 0,
                  g = 0;
                t.onMouseOverPause &&
                  (f.bind("mouseover", function () {
                    h = !0;
                  }),
                  f.bind("mouseout", function () {
                    h = !1;
                  })),
                  (n = f.children(t.listElement + ":first-child")),
                  !1 === t.infiniteLoop &&
                    0 === t.switchAmount &&
                    (t.switchAmount = n.children().length),
                  (a = function () {
                    var i, s, a, l, c;
                    if (
                      !h &&
                      ((i = n.children(t.listItemElement + ":first-child")),
                      (l =
                        "auto" !== t.distance
                          ? t.distance
                          : "vertical" === t.direction
                          ? i.outerHeight(!0)
                          : i.outerWidth(!0)),
                      t.linear
                        ? (a = Math.min(f[0][t.scrollOffset] + t.step, l))
                        : ((c = Math.max(
                            3,
                            parseInt(0.3 * (l - f[0][t.scrollOffset]), 10)
                          )),
                          (a = Math.min(f[0][t.scrollOffset] + c, l))),
                      (f[0][t.scrollOffset] = a),
                      a >= l)
                    ) {
                      for (s = 0; s < t.switchItems; s++)
                        t.queue && t.queue.find(t.listItemElement).length > 0
                          ? (n.append(t.queue.find(t.listItemElement)[0]),
                            n
                              .children(t.listItemElement + ":first-child")
                              .remove())
                          : n.append(
                              n.children(t.listItemElement + ":first-child")
                            ),
                          ++m;
                      if (
                        ((f[0][t.scrollOffset] = 0),
                        clearInterval(d),
                        (d = null),
                        e.isFunction(t.afterForward) &&
                          t.afterForward.call(f, {
                            switchCount: m,
                            currentFirstChild: n.children(
                              t.listItemElement + ":first-child"
                            ),
                          }),
                        t.triggerStackable && 0 !== g)
                      )
                        return void r();
                      if (!1 === t.infiniteLoop && m >= t.switchAmount) return;
                      t.autoPlay && (p = setTimeout(o, 1e3 * t.delay));
                    }
                  }),
                  (l = function () {
                    if (!h) {
                      var i, s, a, l, c;
                      if (0 === f[0][t.scrollOffset]) {
                        for (s = 0; s < t.switchItems; s++)
                          n.children(
                            t.listItemElement + ":last-child"
                          ).insertBefore(
                            n.children(t.listItemElement + ":first-child")
                          );
                        (i = n.children(t.listItemElement + ":first-child")),
                          (l =
                            "auto" !== t.distance
                              ? t.distance
                              : "vertical" === t.direction
                              ? i.height()
                              : i.width()),
                          (f[0][t.scrollOffset] = l);
                      }
                      if (
                        (t.linear
                          ? (a = Math.max(f[0][t.scrollOffset] - t.step, 0))
                          : ((c = Math.max(
                              3,
                              parseInt(0.3 * f[0][t.scrollOffset], 10)
                            )),
                            (a = Math.max(f[0][t.scrollOffset] - c, 0))),
                        (f[0][t.scrollOffset] = a),
                        0 === a)
                      ) {
                        if (
                          (--m,
                          clearInterval(d),
                          (d = null),
                          e.isFunction(t.afterBackward) &&
                            t.afterBackward.call(f, {
                              switchCount: m,
                              currentFirstChild: n.children(
                                t.listItemElement + ":first-child"
                              ),
                            }),
                          t.triggerStackable && 0 !== g)
                        )
                          return void r();
                        t.autoPlay && (p = setTimeout(o, 1e3 * t.delay));
                      }
                    }
                  }),
                  (r = function () {
                    0 !== g &&
                      (g > 0
                        ? (g--, (p = setTimeout(o, 0)))
                        : (g++, (p = setTimeout(i, 0))));
                  }),
                  (o = function () {
                    clearInterval(d), (d = setInterval(a, t.speed));
                  }),
                  (i = function () {
                    clearInterval(d), (d = setInterval(l, t.speed));
                  }),
                  (c = function () {
                    (t.autoPlay = !0),
                      (h = !1),
                      clearInterval(d),
                      (d = setInterval(a, t.speed));
                  }),
                  (u = function () {
                    h = !0;
                  }),
                  (s = function (e) {
                    (t.delay = e || t.delay),
                      clearTimeout(p),
                      t.autoPlay && (p = setTimeout(o, 1e3 * t.delay));
                  }),
                  t.autoPlay && (p = setTimeout(o, 1e3 * t.startDelay)),
                  f.bind("resetClock", function (e) {
                    s(e);
                  }),
                  f.bind("forward", function () {
                    t.triggerStackable
                      ? null !== d
                        ? g++
                        : o()
                      : (clearTimeout(p), o());
                  }),
                  f.bind("backward", function () {
                    t.triggerStackable
                      ? null !== d
                        ? g--
                        : i()
                      : (clearTimeout(p), i());
                  }),
                  f.bind("pauseHover", function () {
                    u();
                  }),
                  f.bind("forwardHover", function () {
                    c();
                  }),
                  f.bind("speedUp", function (e, n) {
                    "undefined" === n &&
                      (n = Math.max(1, parseInt(t.speed / 2, 10))),
                      (t.speed = n);
                  }),
                  f.bind("speedDown", function (e, n) {
                    "undefined" === n && (n = 2 * t.speed), (t.speed = n);
                  }),
                  f.bind("updateConfig", function (n, r) {
                    t = e.extend(t, r);
                  });
              })
            );
          };
        })(jQuery);
      },
      661: function () {
        !(function (e) {
          "use strict";
          var t = 0;
          function n(t, n) {
            return e.map(t, function (e) {
              return (function (e, t) {
                return e + ".touchspin_" + t;
              })(e, n);
            });
          }
          e.fn.TouchSpin = function (r) {
            if ("destroy" !== r) {
              var i = {
                  min: 0,
                  max: 100,
                  initval: "",
                  replacementval: "",
                  step: 1,
                  decimals: 0,
                  stepinterval: 100,
                  forcestepdivisibility: "round",
                  stepintervaldelay: 500,
                  verticalbuttons: !1,
                  verticalupclass: "glyphicon glyphicon-chevron-up",
                  verticaldownclass: "glyphicon glyphicon-chevron-down",
                  prefix: "",
                  postfix: "",
                  prefix_extraclass: "",
                  postfix_extraclass: "",
                  booster: !0,
                  boostat: 10,
                  maxboostedstep: !1,
                  mousewheel: !0,
                  buttondown_class: "btn btn-default",
                  buttonup_class: "btn btn-default",
                  buttondown_txt: "-",
                  buttonup_txt: "+",
                },
                o = {
                  min: "min",
                  max: "max",
                  initval: "init-val",
                  replacementval: "replacement-val",
                  step: "step",
                  decimals: "decimals",
                  stepinterval: "step-interval",
                  verticalbuttons: "vertical-buttons",
                  verticalupclass: "vertical-up-class",
                  verticaldownclass: "vertical-down-class",
                  forcestepdivisibility: "force-step-divisibility",
                  stepintervaldelay: "step-interval-delay",
                  prefix: "prefix",
                  postfix: "postfix",
                  prefix_extraclass: "prefix-extra-class",
                  postfix_extraclass: "postfix-extra-class",
                  booster: "booster",
                  boostat: "boostat",
                  maxboostedstep: "max-boosted-step",
                  mousewheel: "mouse-wheel",
                  buttondown_class: "button-down-class",
                  buttonup_class: "button-up-class",
                  buttondown_txt: "button-down-txt",
                  buttonup_txt: "button-up-txt",
                };
              return this.each(function () {
                var s,
                  a,
                  l,
                  c,
                  u,
                  f,
                  d,
                  p,
                  h = e(this),
                  m = h.data(),
                  g = 0,
                  v = !1;
                function y() {
                  var e, t, n;
                  "" !== (e = h.val())
                    ? (s.decimals > 0 && "." === e) ||
                      ((t = parseFloat(e)),
                      isNaN(t) &&
                        (t = "" !== s.replacementval ? s.replacementval : 0),
                      (n = t),
                      t.toString() !== e && (n = t),
                      t < s.min && (n = s.min),
                      t > s.max && (n = s.max),
                      (n = (function (e) {
                        switch (s.forcestepdivisibility) {
                          case "round":
                            return (Math.round(e / s.step) * s.step).toFixed(
                              s.decimals
                            );
                          case "floor":
                            return (Math.floor(e / s.step) * s.step).toFixed(
                              s.decimals
                            );
                          case "ceil":
                            return (Math.ceil(e / s.step) * s.step).toFixed(
                              s.decimals
                            );
                          default:
                            return e;
                        }
                      })(n)),
                      Number(e).toString() !== n.toString() &&
                        (h.val(n), h.trigger("change")))
                    : "" !== s.replacementval &&
                      (h.val(s.replacementval), h.trigger("change"));
                }
                function b() {
                  if (s.booster) {
                    var e = Math.pow(2, Math.floor(g / s.boostat)) * s.step;
                    return (
                      s.maxboostedstep &&
                        e > s.maxboostedstep &&
                        ((e = s.maxboostedstep), (c = Math.round(c / e) * e)),
                      Math.max(s.step, e)
                    );
                  }
                  return s.step;
                }
                function w() {
                  y(), (c = parseFloat(l.input.val())), isNaN(c) && (c = 0);
                  var e = c,
                    t = b();
                  (c += t) > s.max &&
                    ((c = s.max), h.trigger("touchspin.on.max"), C()),
                    l.input.val(Number(c).toFixed(s.decimals)),
                    e !== c && h.trigger("change");
                }
                function x() {
                  y(), (c = parseFloat(l.input.val())), isNaN(c) && (c = 0);
                  var e = c,
                    t = b();
                  (c -= t) < s.min &&
                    ((c = s.min), h.trigger("touchspin.on.min"), C()),
                    l.input.val(c.toFixed(s.decimals)),
                    e !== c && h.trigger("change");
                }
                function S() {
                  C(),
                    (g = 0),
                    (v = "down"),
                    h.trigger("touchspin.on.startspin"),
                    h.trigger("touchspin.on.startdownspin"),
                    (d = setTimeout(function () {
                      u = setInterval(function () {
                        g++, x();
                      }, s.stepinterval);
                    }, s.stepintervaldelay));
                }
                function _() {
                  C(),
                    (g = 0),
                    (v = "up"),
                    h.trigger("touchspin.on.startspin"),
                    h.trigger("touchspin.on.startupspin"),
                    (p = setTimeout(function () {
                      f = setInterval(function () {
                        g++, w();
                      }, s.stepinterval);
                    }, s.stepintervaldelay));
                }
                function C() {
                  switch (
                    (clearTimeout(d),
                    clearTimeout(p),
                    clearInterval(u),
                    clearInterval(f),
                    v)
                  ) {
                    case "up":
                      h.trigger("touchspin.on.stopupspin"),
                        h.trigger("touchspin.on.stopspin");
                      break;
                    case "down":
                      h.trigger("touchspin.on.stopdownspin"),
                        h.trigger("touchspin.on.stopspin");
                  }
                  (g = 0), (v = !1);
                }
                !(function () {
                  if (h.data("alreadyinitialized")) return;
                  if (
                    (h.data("alreadyinitialized", !0),
                    (t += 1),
                    h.data("spinnerid", t),
                    !h.is("input"))
                  )
                    return void console.log("Must be an input.");
                  (s = e.extend(
                    {},
                    i,
                    m,
                    ((c = {}),
                    e.each(o, function (e, t) {
                      var n = "bts-" + t;
                      h.is("[data-" + n + "]") && (c[e] = h.data(n));
                    }),
                    c),
                    r
                  )),
                    "" !== s.initval && "" === h.val() && h.val(s.initval),
                    y(),
                    (function () {
                      var t = h.val(),
                        n = h.parent();
                      "" !== t && (t = Number(t).toFixed(s.decimals));
                      h.data("initvalue", t).val(t),
                        h.addClass("form-control"),
                        n.hasClass("input-group")
                          ? (function (t) {
                              t.addClass("bootstrap-touchspin");
                              var n,
                                r,
                                i = h.prev(),
                                o = h.next(),
                                l =
                                  '<span class="input-group-addon bootstrap-touchspin-prefix">' +
                                  s.prefix +
                                  "</span>",
                                c =
                                  '<span class="input-group-addon bootstrap-touchspin-postfix">' +
                                  s.postfix +
                                  "</span>";
                              i.hasClass("input-group-btn")
                                ? ((n =
                                    '<button class="' +
                                    s.buttondown_class +
                                    ' bootstrap-touchspin-down" type="button">' +
                                    s.buttondown_txt +
                                    "</button>"),
                                  i.append(n))
                                : ((n =
                                    '<span class="input-group-btn"><button class="' +
                                    s.buttondown_class +
                                    ' bootstrap-touchspin-down" type="button">' +
                                    s.buttondown_txt +
                                    "</button></span>"),
                                  e(n).insertBefore(h));
                              o.hasClass("input-group-btn")
                                ? ((r =
                                    '<button class="' +
                                    s.buttonup_class +
                                    ' bootstrap-touchspin-up" type="button">' +
                                    s.buttonup_txt +
                                    "</button>"),
                                  o.prepend(r))
                                : ((r =
                                    '<span class="input-group-btn"><button class="' +
                                    s.buttonup_class +
                                    ' bootstrap-touchspin-up" type="button">' +
                                    s.buttonup_txt +
                                    "</button></span>"),
                                  e(r).insertAfter(h));
                              e(l).insertBefore(h),
                                e(c).insertAfter(h),
                                (a = t);
                            })(n)
                          : (function () {
                              var t;
                              t = s.verticalbuttons
                                ? '<div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix">' +
                                  s.prefix +
                                  '</span><span class="input-group-addon bootstrap-touchspin-postfix">' +
                                  s.postfix +
                                  '</span><span class="input-group-btn-vertical"><button class="' +
                                  s.buttondown_class +
                                  ' bootstrap-touchspin-up" type="button"><i class="' +
                                  s.verticalupclass +
                                  '"></i></button><button class="' +
                                  s.buttonup_class +
                                  ' bootstrap-touchspin-down" type="button"><i class="' +
                                  s.verticaldownclass +
                                  '"></i></button></span></div>'
                                : '<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="' +
                                  s.buttondown_class +
                                  ' bootstrap-touchspin-down" type="button">' +
                                  s.buttondown_txt +
                                  '</button></span><span class="input-group-addon bootstrap-touchspin-prefix">' +
                                  s.prefix +
                                  '</span><span class="input-group-addon bootstrap-touchspin-postfix">' +
                                  s.postfix +
                                  '</span><span class="input-group-btn"><button class="' +
                                  s.buttonup_class +
                                  ' bootstrap-touchspin-up" type="button">' +
                                  s.buttonup_txt +
                                  "</button></span></div>";
                              (a = e(t).insertBefore(h)),
                                e(".bootstrap-touchspin-prefix", a).after(h),
                                h.hasClass("input-sm")
                                  ? a.addClass("input-group-sm")
                                  : h.hasClass("input-lg") &&
                                    a.addClass("input-group-lg");
                            })();
                    })(),
                    (l = {
                      down: e(".bootstrap-touchspin-down", a),
                      up: e(".bootstrap-touchspin-up", a),
                      input: e("input", a),
                      prefix: e(".bootstrap-touchspin-prefix", a).addClass(
                        s.prefix_extraclass
                      ),
                      postfix: e(".bootstrap-touchspin-postfix", a).addClass(
                        s.postfix_extraclass
                      ),
                    }),
                    (function () {
                      "" === s.prefix && l.prefix.hide();
                      "" === s.postfix && l.postfix.hide();
                    })(),
                    h.on("keydown", function (e) {
                      var t = e.keyCode || e.which;
                      38 === t
                        ? ("up" !== v && (w(), _()), e.preventDefault())
                        : 40 === t &&
                          ("down" !== v && (x(), S()), e.preventDefault());
                    }),
                    h.on("keyup", function (e) {
                      var t = e.keyCode || e.which;
                      (38 === t || 40 === t) && C();
                    }),
                    h.on("blur", function () {
                      y();
                    }),
                    l.down.on("keydown", function (e) {
                      var t = e.keyCode || e.which;
                      (32 !== t && 13 !== t) ||
                        ("down" !== v && (x(), S()), e.preventDefault());
                    }),
                    l.down.on("keyup", function (e) {
                      var t = e.keyCode || e.which;
                      (32 !== t && 13 !== t) || C();
                    }),
                    l.up.on("keydown", function (e) {
                      var t = e.keyCode || e.which;
                      (32 !== t && 13 !== t) ||
                        ("up" !== v && (w(), _()), e.preventDefault());
                    }),
                    l.up.on("keyup", function (e) {
                      var t = e.keyCode || e.which;
                      (32 !== t && 13 !== t) || C();
                    }),
                    l.down.on("mousedown.touchspin", function (e) {
                      l.down.off("touchstart.touchspin"),
                        h.is(":disabled") ||
                          (x(), S(), e.preventDefault(), e.stopPropagation());
                    }),
                    l.down.on("touchstart.touchspin", function (e) {
                      l.down.off("mousedown.touchspin"),
                        h.is(":disabled") ||
                          (x(), S(), e.preventDefault(), e.stopPropagation());
                    }),
                    l.up.on("mousedown.touchspin", function (e) {
                      l.up.off("touchstart.touchspin"),
                        h.is(":disabled") ||
                          (w(), _(), e.preventDefault(), e.stopPropagation());
                    }),
                    l.up.on("touchstart.touchspin", function (e) {
                      l.up.off("mousedown.touchspin"),
                        h.is(":disabled") ||
                          (w(), _(), e.preventDefault(), e.stopPropagation());
                    }),
                    l.up.on(
                      "mouseout touchleave touchend touchcancel",
                      function (e) {
                        v && (e.stopPropagation(), C());
                      }
                    ),
                    l.down.on(
                      "mouseout touchleave touchend touchcancel",
                      function (e) {
                        v && (e.stopPropagation(), C());
                      }
                    ),
                    l.down.on("mousemove touchmove", function (e) {
                      v && (e.stopPropagation(), e.preventDefault());
                    }),
                    l.up.on("mousemove touchmove", function (e) {
                      v && (e.stopPropagation(), e.preventDefault());
                    }),
                    e(document).on(
                      n(["mouseup", "touchend", "touchcancel"], t).join(" "),
                      function (e) {
                        v && (e.preventDefault(), C());
                      }
                    ),
                    e(document).on(
                      n(
                        ["mousemove", "touchmove", "scroll", "scrollstart"],
                        t
                      ).join(" "),
                      function (e) {
                        v && (e.preventDefault(), C());
                      }
                    ),
                    h.on("mousewheel DOMMouseScroll", function (e) {
                      if (s.mousewheel && h.is(":focus")) {
                        var t =
                          e.originalEvent.wheelDelta ||
                          -e.originalEvent.deltaY ||
                          -e.originalEvent.detail;
                        e.stopPropagation(),
                          e.preventDefault(),
                          t < 0 ? x() : w();
                      }
                    }),
                    h.on("touchspin.uponce", function () {
                      C(), w();
                    }),
                    h.on("touchspin.downonce", function () {
                      C(), x();
                    }),
                    h.on("touchspin.startupspin", function () {
                      _();
                    }),
                    h.on("touchspin.startdownspin", function () {
                      S();
                    }),
                    h.on("touchspin.stopspin", function () {
                      C();
                    }),
                    h.on("touchspin.updatesettings", function (t, n) {
                      !(function (t) {
                        (function (t) {
                          s = e.extend({}, s, t);
                        })(t),
                          y();
                        var n = l.input.val();
                        "" !== n &&
                          ((n = Number(l.input.val())),
                          l.input.val(n.toFixed(s.decimals)));
                      })(n);
                    }),
                    l.input.css("display", "block");
                  var c;
                })();
              });
            }
            this.each(function () {
              var t = e(this).data();
              e(document).off(
                n(
                  [
                    "mouseup",
                    "touchend",
                    "touchcancel",
                    "mousemove",
                    "touchmove",
                    "scroll",
                    "scrollstart",
                  ],
                  t.spinnerid
                ).join(" ")
              );
            });
          };
        })(jQuery);
      },
      615: function () {
        /*!
         * Bootstrap v4.0.0-alpha.5 (https://getbootstrap.com)
         * Copyright 2011-2016 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         */
        if ("undefined" == typeof jQuery)
          throw new Error("Bootstrap's JavaScript requires jQuery");
        !(function (e) {
          var t = jQuery.fn.jquery.split(" ")[0].split(".");
          if (
            (t[0] < 2 && t[1] < 9) ||
            (1 == t[0] && 9 == t[1] && t[2] < 1) ||
            t[0] >= 4
          )
            throw new Error(
              "Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0"
            );
        })(),
          (function () {
            function e(e, t) {
              if (!e)
                throw new ReferenceError(
                  "this hasn't been initialised - super() hasn't been called"
                );
              return !t || ("object" != typeof t && "function" != typeof t)
                ? e
                : t;
            }
            function t(e, t) {
              if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
            }
            var n,
              r,
              i,
              o,
              s,
              a,
              l,
              c,
              u,
              f,
              d =
                "function" == typeof Symbol &&
                "symbol" == typeof Symbol.iterator
                  ? function (e) {
                      return typeof e;
                    }
                  : function (e) {
                      return e &&
                        "function" == typeof Symbol &&
                        e.constructor === Symbol &&
                        e !== Symbol.prototype
                        ? "symbol"
                        : typeof e;
                    },
              p = (function () {
                function e(e, t) {
                  for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    (r.enumerable = r.enumerable || !1),
                      (r.configurable = !0),
                      "value" in r && (r.writable = !0),
                      Object.defineProperty(e, r.key, r);
                  }
                }
                return function (t, n, r) {
                  return n && e(t.prototype, n), r && e(t, r), t;
                };
              })(),
              h = (function (e) {
                function t(e) {
                  return {}.toString
                    .call(e)
                    .match(/\s([a-zA-Z]+)/)[1]
                    .toLowerCase();
                }
                function n(e) {
                  return (e[0] || e).nodeType;
                }
                function r(t) {
                  var n = this,
                    r = !1;
                  return (
                    e(this).one(s.TRANSITION_END, function () {
                      r = !0;
                    }),
                    setTimeout(function () {
                      r || s.triggerTransitionEnd(n);
                    }, t),
                    this
                  );
                }
                var i = !1,
                  o = {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd otransitionend",
                    transition: "transitionend",
                  },
                  s = {
                    TRANSITION_END: "bsTransitionEnd",
                    getUID: function (e) {
                      do {
                        e += ~~(1e6 * Math.random());
                      } while (document.getElementById(e));
                      return e;
                    },
                    getSelectorFromElement: function (e) {
                      var t = e.getAttribute("data-target");
                      return (
                        t ||
                          ((t = e.getAttribute("href") || ""),
                          (t = /^#[a-z]/i.test(t) ? t : null)),
                        t
                      );
                    },
                    reflow: function (e) {
                      new Function("bs", "return bs")(e.offsetHeight);
                    },
                    triggerTransitionEnd: function (t) {
                      e(t).trigger(i.end);
                    },
                    supportsTransitionEnd: function () {
                      return Boolean(i);
                    },
                    typeCheckConfig: function (e, r, i) {
                      for (var o in i)
                        if (i.hasOwnProperty(o)) {
                          var s,
                            a = i[o],
                            l = r[o];
                          if (
                            ((s = l && n(l) ? "element" : t(l)),
                            !new RegExp(a).test(s))
                          )
                            throw new Error(
                              e.toUpperCase() +
                                ': Option "' +
                                o +
                                '" provided type "' +
                                s +
                                '" but expected type "' +
                                a +
                                '".'
                            );
                        }
                    },
                  };
                return (
                  (i = (function () {
                    if (window.QUnit) return !1;
                    var e = document.createElement("bootstrap");
                    for (var t in o)
                      if (void 0 !== e.style[t]) return { end: o[t] };
                    return !1;
                  })()),
                  (e.fn.emulateTransitionEnd = r),
                  s.supportsTransitionEnd() &&
                    (e.event.special[s.TRANSITION_END] = {
                      bindType: i.end,
                      delegateType: i.end,
                      handle: function (t) {
                        if (e(t.target).is(this))
                          return t.handleObj.handler.apply(this, arguments);
                      },
                    }),
                  s
                );
              })(jQuery),
              m =
                ((n = jQuery),
                (r = "alert"),
                (o = "." + (i = "bs.alert")),
                (s = n.fn[r]),
                (a = {
                  CLOSE: "close" + o,
                  CLOSED: "closed" + o,
                  CLICK_DATA_API: "click" + o + ".data-api",
                }),
                (l = "alert"),
                (c = "fade"),
                (u = "in"),
                (f = (function () {
                  function e(n) {
                    t(this, e), (this._element = n);
                  }
                  return (
                    (e.prototype.close = function (e) {
                      e = e || this._element;
                      var t = this._getRootElement(e);
                      this._triggerCloseEvent(t).isDefaultPrevented() ||
                        this._removeElement(t);
                    }),
                    (e.prototype.dispose = function () {
                      n.removeData(this._element, i), (this._element = null);
                    }),
                    (e.prototype._getRootElement = function (e) {
                      var t = h.getSelectorFromElement(e),
                        r = !1;
                      return (
                        t && (r = n(t)[0]),
                        r || (r = n(e).closest("." + l)[0]),
                        r
                      );
                    }),
                    (e.prototype._triggerCloseEvent = function (e) {
                      var t = n.Event(a.CLOSE);
                      return n(e).trigger(t), t;
                    }),
                    (e.prototype._removeElement = function (e) {
                      return (
                        n(e).removeClass(u),
                        h.supportsTransitionEnd() && n(e).hasClass(c)
                          ? void n(e)
                              .one(
                                h.TRANSITION_END,
                                n.proxy(this._destroyElement, this, e)
                              )
                              .emulateTransitionEnd(150)
                          : void this._destroyElement(e)
                      );
                    }),
                    (e.prototype._destroyElement = function (e) {
                      n(e).detach().trigger(a.CLOSED).remove();
                    }),
                    (e._jQueryInterface = function (t) {
                      return this.each(function () {
                        var r = n(this),
                          o = r.data(i);
                        o || ((o = new e(this)), r.data(i, o)),
                          "close" === t && o[t](this);
                      });
                    }),
                    (e._handleDismiss = function (e) {
                      return function (t) {
                        t && t.preventDefault(), e.close(this);
                      };
                    }),
                    p(e, null, [
                      {
                        key: "VERSION",
                        get: function () {
                          return "4.0.0-alpha.5";
                        },
                      },
                    ]),
                    e
                  );
                })()),
                n(document).on(
                  a.CLICK_DATA_API,
                  '[data-dismiss="alert"]',
                  f._handleDismiss(new f())
                ),
                (n.fn[r] = f._jQueryInterface),
                (n.fn[r].Constructor = f),
                (n.fn[r].noConflict = function () {
                  return (n.fn[r] = s), f._jQueryInterface;
                }),
                (function (e) {
                  var n = "button",
                    r = "bs.button",
                    i = "." + r,
                    o = ".data-api",
                    s = e.fn[n],
                    a = "active",
                    l = "btn",
                    c = "focus",
                    u = '[data-toggle^="button"]',
                    f = '[data-toggle="buttons"]',
                    d = "input",
                    h = ".active",
                    m = ".btn",
                    g = {
                      CLICK_DATA_API: "click" + i + o,
                      FOCUS_BLUR_DATA_API: "focus" + i + o + " blur" + i + o,
                    },
                    v = (function () {
                      function n(e) {
                        t(this, n), (this._element = e);
                      }
                      return (
                        (n.prototype.toggle = function () {
                          var t = !0,
                            n = e(this._element).closest(f)[0];
                          if (n) {
                            var r = e(this._element).find(d)[0];
                            if (r) {
                              if ("radio" === r.type)
                                if (r.checked && e(this._element).hasClass(a))
                                  t = !1;
                                else {
                                  var i = e(n).find(h)[0];
                                  i && e(i).removeClass(a);
                                }
                              t &&
                                ((r.checked = !e(this._element).hasClass(a)),
                                e(this._element).trigger("change")),
                                r.focus();
                            }
                          } else
                            this._element.setAttribute(
                              "aria-pressed",
                              !e(this._element).hasClass(a)
                            );
                          t && e(this._element).toggleClass(a);
                        }),
                        (n.prototype.dispose = function () {
                          e.removeData(this._element, r),
                            (this._element = null);
                        }),
                        (n._jQueryInterface = function (t) {
                          return this.each(function () {
                            var i = e(this).data(r);
                            i || ((i = new n(this)), e(this).data(r, i)),
                              "toggle" === t && i[t]();
                          });
                        }),
                        p(n, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                        ]),
                        n
                      );
                    })();
                  e(document)
                    .on(g.CLICK_DATA_API, u, function (t) {
                      t.preventDefault();
                      var n = t.target;
                      e(n).hasClass(l) || (n = e(n).closest(m)),
                        v._jQueryInterface.call(e(n), "toggle");
                    })
                    .on(g.FOCUS_BLUR_DATA_API, u, function (t) {
                      var n = e(t.target).closest(m)[0];
                      e(n).toggleClass(c, /^focus(in)?$/.test(t.type));
                    }),
                    (e.fn[n] = v._jQueryInterface),
                    (e.fn[n].Constructor = v),
                    (e.fn[n].noConflict = function () {
                      return (e.fn[n] = s), v._jQueryInterface;
                    });
                })(jQuery),
                (function (e) {
                  var n = "carousel",
                    r = "bs.carousel",
                    i = "." + r,
                    o = ".data-api",
                    s = e.fn[n],
                    a = {
                      interval: 5e3,
                      keyboard: !0,
                      slide: !1,
                      pause: "hover",
                      wrap: !0,
                    },
                    l = {
                      interval: "(number|boolean)",
                      keyboard: "boolean",
                      slide: "(boolean|string)",
                      pause: "(string|boolean)",
                      wrap: "boolean",
                    },
                    c = "next",
                    u = "prev",
                    f = {
                      SLIDE: "slide" + i,
                      SLID: "slid" + i,
                      KEYDOWN: "keydown" + i,
                      MOUSEENTER: "mouseenter" + i,
                      MOUSELEAVE: "mouseleave" + i,
                      LOAD_DATA_API: "load" + i + o,
                      CLICK_DATA_API: "click" + i + o,
                    },
                    m = "carousel",
                    g = "active",
                    v = "slide",
                    y = "right",
                    b = "left",
                    w = ".active",
                    x = ".active.carousel-item",
                    S = ".carousel-item",
                    _ = ".next, .prev",
                    C = ".carousel-indicators",
                    T = "[data-slide], [data-slide-to]",
                    E = '[data-ride="carousel"]',
                    k = (function () {
                      function o(n, r) {
                        t(this, o),
                          (this._items = null),
                          (this._interval = null),
                          (this._activeElement = null),
                          (this._isPaused = !1),
                          (this._isSliding = !1),
                          (this._config = this._getConfig(r)),
                          (this._element = e(n)[0]),
                          (this._indicatorsElement = e(this._element).find(
                            C
                          )[0]),
                          this._addEventListeners();
                      }
                      return (
                        (o.prototype.next = function () {
                          this._isSliding || this._slide(c);
                        }),
                        (o.prototype.nextWhenVisible = function () {
                          document.hidden || this.next();
                        }),
                        (o.prototype.prev = function () {
                          this._isSliding || this._slide(u);
                        }),
                        (o.prototype.pause = function (t) {
                          t || (this._isPaused = !0),
                            e(this._element).find(_)[0] &&
                              h.supportsTransitionEnd() &&
                              (h.triggerTransitionEnd(this._element),
                              this.cycle(!0)),
                            clearInterval(this._interval),
                            (this._interval = null);
                        }),
                        (o.prototype.cycle = function (t) {
                          t || (this._isPaused = !1),
                            this._interval &&
                              (clearInterval(this._interval),
                              (this._interval = null)),
                            this._config.interval &&
                              !this._isPaused &&
                              (this._interval = setInterval(
                                e.proxy(
                                  document.visibilityState
                                    ? this.nextWhenVisible
                                    : this.next,
                                  this
                                ),
                                this._config.interval
                              ));
                        }),
                        (o.prototype.to = function (t) {
                          var n = this;
                          this._activeElement = e(this._element).find(x)[0];
                          var r = this._getItemIndex(this._activeElement);
                          if (!(t > this._items.length - 1 || t < 0)) {
                            if (this._isSliding)
                              return void e(this._element).one(
                                f.SLID,
                                function () {
                                  return n.to(t);
                                }
                              );
                            if (r === t) return this.pause(), void this.cycle();
                            var i = t > r ? c : u;
                            this._slide(i, this._items[t]);
                          }
                        }),
                        (o.prototype.dispose = function () {
                          e(this._element).off(i),
                            e.removeData(this._element, r),
                            (this._items = null),
                            (this._config = null),
                            (this._element = null),
                            (this._interval = null),
                            (this._isPaused = null),
                            (this._isSliding = null),
                            (this._activeElement = null),
                            (this._indicatorsElement = null);
                        }),
                        (o.prototype._getConfig = function (t) {
                          return (
                            (t = e.extend({}, a, t)),
                            h.typeCheckConfig(n, t, l),
                            t
                          );
                        }),
                        (o.prototype._addEventListeners = function () {
                          this._config.keyboard &&
                            e(this._element).on(
                              f.KEYDOWN,
                              e.proxy(this._keydown, this)
                            ),
                            "hover" !== this._config.pause ||
                              "ontouchstart" in document.documentElement ||
                              e(this._element)
                                .on(f.MOUSEENTER, e.proxy(this.pause, this))
                                .on(f.MOUSELEAVE, e.proxy(this.cycle, this));
                        }),
                        (o.prototype._keydown = function (e) {
                          if (
                            (e.preventDefault(),
                            !/input|textarea/i.test(e.target.tagName))
                          )
                            switch (e.which) {
                              case 37:
                                this.prev();
                                break;
                              case 39:
                                this.next();
                                break;
                              default:
                                return;
                            }
                        }),
                        (o.prototype._getItemIndex = function (t) {
                          return (
                            (this._items = e.makeArray(e(t).parent().find(S))),
                            this._items.indexOf(t)
                          );
                        }),
                        (o.prototype._getItemByDirection = function (e, t) {
                          var n = e === c,
                            r = e === u,
                            i = this._getItemIndex(t),
                            o = this._items.length - 1;
                          if (
                            ((r && 0 === i) || (n && i === o)) &&
                            !this._config.wrap
                          )
                            return t;
                          var s = (i + (e === u ? -1 : 1)) % this._items.length;
                          return -1 === s
                            ? this._items[this._items.length - 1]
                            : this._items[s];
                        }),
                        (o.prototype._triggerSlideEvent = function (t, n) {
                          var r = e.Event(f.SLIDE, {
                            relatedTarget: t,
                            direction: n,
                          });
                          return e(this._element).trigger(r), r;
                        }),
                        (o.prototype._setActiveIndicatorElement = function (t) {
                          if (this._indicatorsElement) {
                            e(this._indicatorsElement).find(w).removeClass(g);
                            var n =
                              this._indicatorsElement.children[
                                this._getItemIndex(t)
                              ];
                            n && e(n).addClass(g);
                          }
                        }),
                        (o.prototype._slide = function (t, n) {
                          var r = this,
                            i = e(this._element).find(x)[0],
                            o = n || (i && this._getItemByDirection(t, i)),
                            s = Boolean(this._interval),
                            a = t === c ? b : y;
                          if (o && e(o).hasClass(g)) this._isSliding = !1;
                          else if (
                            !this._triggerSlideEvent(
                              o,
                              a
                            ).isDefaultPrevented() &&
                            i &&
                            o
                          ) {
                            (this._isSliding = !0),
                              s && this.pause(),
                              this._setActiveIndicatorElement(o);
                            var l = e.Event(f.SLID, {
                              relatedTarget: o,
                              direction: a,
                            });
                            h.supportsTransitionEnd() &&
                            e(this._element).hasClass(v)
                              ? (e(o).addClass(t),
                                h.reflow(o),
                                e(i).addClass(a),
                                e(o).addClass(a),
                                e(i)
                                  .one(h.TRANSITION_END, function () {
                                    e(o).removeClass(a).removeClass(t),
                                      e(o).addClass(g),
                                      e(i)
                                        .removeClass(g)
                                        .removeClass(t)
                                        .removeClass(a),
                                      (r._isSliding = !1),
                                      setTimeout(function () {
                                        return e(r._element).trigger(l);
                                      }, 0);
                                  })
                                  .emulateTransitionEnd(600))
                              : (e(i).removeClass(g),
                                e(o).addClass(g),
                                (this._isSliding = !1),
                                e(this._element).trigger(l)),
                              s && this.cycle();
                          }
                        }),
                        (o._jQueryInterface = function (t) {
                          return this.each(function () {
                            var n = e(this).data(r),
                              i = e.extend({}, a, e(this).data());
                            "object" === (void 0 === t ? "undefined" : d(t)) &&
                              e.extend(i, t);
                            var s = "string" == typeof t ? t : i.slide;
                            if (
                              (n || ((n = new o(this, i)), e(this).data(r, n)),
                              "number" == typeof t)
                            )
                              n.to(t);
                            else if ("string" == typeof s) {
                              if (void 0 === n[s])
                                throw new Error('No method named "' + s + '"');
                              n[s]();
                            } else i.interval && (n.pause(), n.cycle());
                          });
                        }),
                        (o._dataApiClickHandler = function (t) {
                          var n = h.getSelectorFromElement(this);
                          if (n) {
                            var i = e(n)[0];
                            if (i && e(i).hasClass(m)) {
                              var s = e.extend({}, e(i).data(), e(this).data()),
                                a = this.getAttribute("data-slide-to");
                              a && (s.interval = !1),
                                o._jQueryInterface.call(e(i), s),
                                a && e(i).data(r).to(a),
                                t.preventDefault();
                            }
                          }
                        }),
                        p(o, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                          {
                            key: "Default",
                            get: function () {
                              return a;
                            },
                          },
                        ]),
                        o
                      );
                    })();
                  e(document).on(f.CLICK_DATA_API, T, k._dataApiClickHandler),
                    e(window).on(f.LOAD_DATA_API, function () {
                      e(E).each(function () {
                        var t = e(this);
                        k._jQueryInterface.call(t, t.data());
                      });
                    }),
                    (e.fn[n] = k._jQueryInterface),
                    (e.fn[n].Constructor = k),
                    (e.fn[n].noConflict = function () {
                      return (e.fn[n] = s), k._jQueryInterface;
                    });
                })(jQuery),
                (function (e) {
                  var n = "collapse",
                    r = "bs.collapse",
                    i = "." + r,
                    o = e.fn[n],
                    s = { toggle: !0, parent: "" },
                    a = { toggle: "boolean", parent: "string" },
                    l = {
                      SHOW: "show" + i,
                      SHOWN: "shown" + i,
                      HIDE: "hide" + i,
                      HIDDEN: "hidden" + i,
                      CLICK_DATA_API: "click" + i + ".data-api",
                    },
                    c = "in",
                    u = "collapse",
                    f = "collapsing",
                    m = "collapsed",
                    g = "width",
                    v = "height",
                    y = ".card > .in, .card > .collapsing",
                    b = '[data-toggle="collapse"]',
                    w = (function () {
                      function i(n, r) {
                        t(this, i),
                          (this._isTransitioning = !1),
                          (this._element = n),
                          (this._config = this._getConfig(r)),
                          (this._triggerArray = e.makeArray(
                            e(
                              '[data-toggle="collapse"][href="#' +
                                n.id +
                                '"],[data-toggle="collapse"][data-target="#' +
                                n.id +
                                '"]'
                            )
                          )),
                          (this._parent = this._config.parent
                            ? this._getParent()
                            : null),
                          this._config.parent ||
                            this._addAriaAndCollapsedClass(
                              this._element,
                              this._triggerArray
                            ),
                          this._config.toggle && this.toggle();
                      }
                      return (
                        (i.prototype.toggle = function () {
                          e(this._element).hasClass(c)
                            ? this.hide()
                            : this.show();
                        }),
                        (i.prototype.show = function () {
                          var t = this;
                          if (
                            !this._isTransitioning &&
                            !e(this._element).hasClass(c)
                          ) {
                            var n = void 0,
                              o = void 0;
                            if (
                              (this._parent &&
                                ((n = e.makeArray(e(y))).length || (n = null)),
                              !(
                                n &&
                                ((o = e(n).data(r)), o && o._isTransitioning)
                              ))
                            ) {
                              var s = e.Event(l.SHOW);
                              if (
                                (e(this._element).trigger(s),
                                !s.isDefaultPrevented())
                              ) {
                                n &&
                                  (i._jQueryInterface.call(e(n), "hide"),
                                  o || e(n).data(r, null));
                                var a = this._getDimension();
                                e(this._element).removeClass(u).addClass(f),
                                  (this._element.style[a] = 0),
                                  this._element.setAttribute(
                                    "aria-expanded",
                                    !0
                                  ),
                                  this._triggerArray.length &&
                                    e(this._triggerArray)
                                      .removeClass(m)
                                      .attr("aria-expanded", !0),
                                  this.setTransitioning(!0);
                                var d = function () {
                                  e(t._element)
                                    .removeClass(f)
                                    .addClass(u)
                                    .addClass(c),
                                    (t._element.style[a] = ""),
                                    t.setTransitioning(!1),
                                    e(t._element).trigger(l.SHOWN);
                                };
                                if (!h.supportsTransitionEnd()) return void d();
                                var p =
                                  "scroll" + (a[0].toUpperCase() + a.slice(1));
                                e(this._element)
                                  .one(h.TRANSITION_END, d)
                                  .emulateTransitionEnd(600),
                                  (this._element.style[a] =
                                    this._element[p] + "px");
                              }
                            }
                          }
                        }),
                        (i.prototype.hide = function () {
                          var t = this;
                          if (
                            !this._isTransitioning &&
                            e(this._element).hasClass(c)
                          ) {
                            var n = e.Event(l.HIDE);
                            if (
                              (e(this._element).trigger(n),
                              !n.isDefaultPrevented())
                            ) {
                              var r = this._getDimension(),
                                i = r === g ? "offsetWidth" : "offsetHeight";
                              (this._element.style[r] =
                                this._element[i] + "px"),
                                h.reflow(this._element),
                                e(this._element)
                                  .addClass(f)
                                  .removeClass(u)
                                  .removeClass(c),
                                this._element.setAttribute("aria-expanded", !1),
                                this._triggerArray.length &&
                                  e(this._triggerArray)
                                    .addClass(m)
                                    .attr("aria-expanded", !1),
                                this.setTransitioning(!0);
                              var o = function () {
                                t.setTransitioning(!1),
                                  e(t._element)
                                    .removeClass(f)
                                    .addClass(u)
                                    .trigger(l.HIDDEN);
                              };
                              return (
                                (this._element.style[r] = ""),
                                h.supportsTransitionEnd()
                                  ? void e(this._element)
                                      .one(h.TRANSITION_END, o)
                                      .emulateTransitionEnd(600)
                                  : void o()
                              );
                            }
                          }
                        }),
                        (i.prototype.setTransitioning = function (e) {
                          this._isTransitioning = e;
                        }),
                        (i.prototype.dispose = function () {
                          e.removeData(this._element, r),
                            (this._config = null),
                            (this._parent = null),
                            (this._element = null),
                            (this._triggerArray = null),
                            (this._isTransitioning = null);
                        }),
                        (i.prototype._getConfig = function (t) {
                          return (
                            ((t = e.extend({}, s, t)).toggle = Boolean(
                              t.toggle
                            )),
                            h.typeCheckConfig(n, t, a),
                            t
                          );
                        }),
                        (i.prototype._getDimension = function () {
                          return e(this._element).hasClass(g) ? g : v;
                        }),
                        (i.prototype._getParent = function () {
                          var t = this,
                            n = e(this._config.parent)[0],
                            r =
                              '[data-toggle="collapse"][data-parent="' +
                              this._config.parent +
                              '"]';
                          return (
                            e(n)
                              .find(r)
                              .each(function (e, n) {
                                t._addAriaAndCollapsedClass(
                                  i._getTargetFromElement(n),
                                  [n]
                                );
                              }),
                            n
                          );
                        }),
                        (i.prototype._addAriaAndCollapsedClass = function (
                          t,
                          n
                        ) {
                          if (t) {
                            var r = e(t).hasClass(c);
                            t.setAttribute("aria-expanded", r),
                              n.length &&
                                e(n)
                                  .toggleClass(m, !r)
                                  .attr("aria-expanded", r);
                          }
                        }),
                        (i._getTargetFromElement = function (t) {
                          var n = h.getSelectorFromElement(t);
                          return n ? e(n)[0] : null;
                        }),
                        (i._jQueryInterface = function (t) {
                          return this.each(function () {
                            var n = e(this),
                              o = n.data(r),
                              a = e.extend(
                                {},
                                s,
                                n.data(),
                                "object" ===
                                  (void 0 === t ? "undefined" : d(t)) && t
                              );
                            if (
                              (!o &&
                                a.toggle &&
                                /show|hide/.test(t) &&
                                (a.toggle = !1),
                              o || ((o = new i(this, a)), n.data(r, o)),
                              "string" == typeof t)
                            ) {
                              if (void 0 === o[t])
                                throw new Error('No method named "' + t + '"');
                              o[t]();
                            }
                          });
                        }),
                        p(i, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                          {
                            key: "Default",
                            get: function () {
                              return s;
                            },
                          },
                        ]),
                        i
                      );
                    })();
                  e(document).on(l.CLICK_DATA_API, b, function (t) {
                    t.preventDefault();
                    var n = w._getTargetFromElement(this),
                      i = e(n).data(r) ? "toggle" : e(this).data();
                    w._jQueryInterface.call(e(n), i);
                  }),
                    (e.fn[n] = w._jQueryInterface),
                    (e.fn[n].Constructor = w),
                    (e.fn[n].noConflict = function () {
                      return (e.fn[n] = o), w._jQueryInterface;
                    });
                })(jQuery),
                (function (e) {
                  var n = "dropdown",
                    r = "bs.dropdown",
                    i = "." + r,
                    o = ".data-api",
                    s = e.fn[n],
                    a = {
                      HIDE: "hide" + i,
                      HIDDEN: "hidden" + i,
                      SHOW: "show" + i,
                      SHOWN: "shown" + i,
                      CLICK: "click" + i,
                      CLICK_DATA_API: "click" + i + o,
                      KEYDOWN_DATA_API: "keydown" + i + o,
                    },
                    l = "dropdown-backdrop",
                    c = "disabled",
                    u = "open",
                    f = ".dropdown-backdrop",
                    d = '[data-toggle="dropdown"]',
                    m = ".dropdown form",
                    g = '[role="menu"]',
                    v = '[role="listbox"]',
                    y = ".navbar-nav",
                    b =
                      '[role="menu"] li:not(.disabled) a, [role="listbox"] li:not(.disabled) a',
                    w = (function () {
                      function n(e) {
                        t(this, n),
                          (this._element = e),
                          this._addEventListeners();
                      }
                      return (
                        (n.prototype.toggle = function () {
                          if (this.disabled || e(this).hasClass(c)) return !1;
                          var t = n._getParentFromElement(this),
                            r = e(t).hasClass(u);
                          if ((n._clearMenus(), r)) return !1;
                          if (
                            "ontouchstart" in document.documentElement &&
                            !e(t).closest(y).length
                          ) {
                            var i = document.createElement("div");
                            (i.className = l),
                              e(i).insertBefore(this),
                              e(i).on("click", n._clearMenus);
                          }
                          var o = { relatedTarget: this },
                            s = e.Event(a.SHOW, o);
                          return (
                            e(t).trigger(s),
                            !s.isDefaultPrevented() &&
                              (this.focus(),
                              this.setAttribute("aria-expanded", "true"),
                              e(t).toggleClass(u),
                              e(t).trigger(e.Event(a.SHOWN, o)),
                              !1)
                          );
                        }),
                        (n.prototype.dispose = function () {
                          e.removeData(this._element, r),
                            e(this._element).off(i),
                            (this._element = null);
                        }),
                        (n.prototype._addEventListeners = function () {
                          e(this._element).on(a.CLICK, this.toggle);
                        }),
                        (n._jQueryInterface = function (t) {
                          return this.each(function () {
                            var i = e(this).data(r);
                            if (
                              (i || e(this).data(r, (i = new n(this))),
                              "string" == typeof t)
                            ) {
                              if (void 0 === i[t])
                                throw new Error('No method named "' + t + '"');
                              i[t].call(this);
                            }
                          });
                        }),
                        (n._clearMenus = function (t) {
                          if (!t || 3 !== t.which) {
                            var r = e(f)[0];
                            r && r.parentNode.removeChild(r);
                            for (
                              var i = e.makeArray(e(d)), o = 0;
                              o < i.length;
                              o++
                            ) {
                              var s = n._getParentFromElement(i[o]),
                                l = { relatedTarget: i[o] };
                              if (
                                e(s).hasClass(u) &&
                                !(
                                  t &&
                                  "click" === t.type &&
                                  /input|textarea/i.test(t.target.tagName) &&
                                  e.contains(s, t.target)
                                )
                              ) {
                                var c = e.Event(a.HIDE, l);
                                e(s).trigger(c),
                                  c.isDefaultPrevented() ||
                                    (i[o].setAttribute(
                                      "aria-expanded",
                                      "false"
                                    ),
                                    e(s)
                                      .removeClass(u)
                                      .trigger(e.Event(a.HIDDEN, l)));
                              }
                            }
                          }
                        }),
                        (n._getParentFromElement = function (t) {
                          var n = void 0,
                            r = h.getSelectorFromElement(t);
                          return r && (n = e(r)[0]), n || t.parentNode;
                        }),
                        (n._dataApiKeydownHandler = function (t) {
                          if (
                            /(38|40|27|32)/.test(t.which) &&
                            !/input|textarea/i.test(t.target.tagName) &&
                            (t.preventDefault(),
                            t.stopPropagation(),
                            !this.disabled && !e(this).hasClass(c))
                          ) {
                            var r = n._getParentFromElement(this),
                              i = e(r).hasClass(u);
                            if (
                              (!i && 27 !== t.which) ||
                              (i && 27 === t.which)
                            ) {
                              if (27 === t.which) {
                                var o = e(r).find(d)[0];
                                e(o).trigger("focus");
                              }
                              return void e(this).trigger("click");
                            }
                            var s = e.makeArray(e(b));
                            if (
                              (s = s.filter(function (e) {
                                return e.offsetWidth || e.offsetHeight;
                              })).length
                            ) {
                              var a = s.indexOf(t.target);
                              38 === t.which && a > 0 && a--,
                                40 === t.which && a < s.length - 1 && a++,
                                a < 0 && (a = 0),
                                s[a].focus();
                            }
                          }
                        }),
                        p(n, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                        ]),
                        n
                      );
                    })();
                  e(document)
                    .on(a.KEYDOWN_DATA_API, d, w._dataApiKeydownHandler)
                    .on(a.KEYDOWN_DATA_API, g, w._dataApiKeydownHandler)
                    .on(a.KEYDOWN_DATA_API, v, w._dataApiKeydownHandler)
                    .on(a.CLICK_DATA_API, w._clearMenus)
                    .on(a.CLICK_DATA_API, d, w.prototype.toggle)
                    .on(a.CLICK_DATA_API, m, function (e) {
                      e.stopPropagation();
                    }),
                    (e.fn[n] = w._jQueryInterface),
                    (e.fn[n].Constructor = w),
                    (e.fn[n].noConflict = function () {
                      return (e.fn[n] = s), w._jQueryInterface;
                    });
                })(jQuery),
                (function (e) {
                  var n = "modal",
                    r = "bs.modal",
                    i = "." + r,
                    o = e.fn[n],
                    s = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
                    a = {
                      backdrop: "(boolean|string)",
                      keyboard: "boolean",
                      focus: "boolean",
                      show: "boolean",
                    },
                    l = {
                      HIDE: "hide" + i,
                      HIDDEN: "hidden" + i,
                      SHOW: "show" + i,
                      SHOWN: "shown" + i,
                      FOCUSIN: "focusin" + i,
                      RESIZE: "resize" + i,
                      CLICK_DISMISS: "click.dismiss" + i,
                      KEYDOWN_DISMISS: "keydown.dismiss" + i,
                      MOUSEUP_DISMISS: "mouseup.dismiss" + i,
                      MOUSEDOWN_DISMISS: "mousedown.dismiss" + i,
                      CLICK_DATA_API: "click" + i + ".data-api",
                    },
                    c = "modal-scrollbar-measure",
                    u = "modal-backdrop",
                    f = "modal-open",
                    m = "fade",
                    g = "in",
                    v = ".modal-dialog",
                    y = '[data-toggle="modal"]',
                    b = '[data-dismiss="modal"]',
                    w = ".navbar-fixed-top, .navbar-fixed-bottom, .is-fixed",
                    x = (function () {
                      function o(n, r) {
                        t(this, o),
                          (this._config = this._getConfig(r)),
                          (this._element = n),
                          (this._dialog = e(n).find(v)[0]),
                          (this._backdrop = null),
                          (this._isShown = !1),
                          (this._isBodyOverflowing = !1),
                          (this._ignoreBackdropClick = !1),
                          (this._originalBodyPadding = 0),
                          (this._scrollbarWidth = 0);
                      }
                      return (
                        (o.prototype.toggle = function (e) {
                          return this._isShown ? this.hide() : this.show(e);
                        }),
                        (o.prototype.show = function (t) {
                          var n = this,
                            r = e.Event(l.SHOW, { relatedTarget: t });
                          e(this._element).trigger(r),
                            this._isShown ||
                              r.isDefaultPrevented() ||
                              ((this._isShown = !0),
                              this._checkScrollbar(),
                              this._setScrollbar(),
                              e(document.body).addClass(f),
                              this._setEscapeEvent(),
                              this._setResizeEvent(),
                              e(this._element).on(
                                l.CLICK_DISMISS,
                                b,
                                e.proxy(this.hide, this)
                              ),
                              e(this._dialog).on(
                                l.MOUSEDOWN_DISMISS,
                                function () {
                                  e(n._element).one(
                                    l.MOUSEUP_DISMISS,
                                    function (t) {
                                      e(t.target).is(n._element) &&
                                        (n._ignoreBackdropClick = !0);
                                    }
                                  );
                                }
                              ),
                              this._showBackdrop(
                                e.proxy(this._showElement, this, t)
                              ));
                        }),
                        (o.prototype.hide = function (t) {
                          t && t.preventDefault();
                          var n = e.Event(l.HIDE);
                          e(this._element).trigger(n),
                            this._isShown &&
                              !n.isDefaultPrevented() &&
                              ((this._isShown = !1),
                              this._setEscapeEvent(),
                              this._setResizeEvent(),
                              e(document).off(l.FOCUSIN),
                              e(this._element).removeClass(g),
                              e(this._element).off(l.CLICK_DISMISS),
                              e(this._dialog).off(l.MOUSEDOWN_DISMISS),
                              h.supportsTransitionEnd() &&
                              e(this._element).hasClass(m)
                                ? e(this._element)
                                    .one(
                                      h.TRANSITION_END,
                                      e.proxy(this._hideModal, this)
                                    )
                                    .emulateTransitionEnd(300)
                                : this._hideModal());
                        }),
                        (o.prototype.dispose = function () {
                          e.removeData(this._element, r),
                            e(window).off(i),
                            e(document).off(i),
                            e(this._element).off(i),
                            e(this._backdrop).off(i),
                            (this._config = null),
                            (this._element = null),
                            (this._dialog = null),
                            (this._backdrop = null),
                            (this._isShown = null),
                            (this._isBodyOverflowing = null),
                            (this._ignoreBackdropClick = null),
                            (this._originalBodyPadding = null),
                            (this._scrollbarWidth = null);
                        }),
                        (o.prototype._getConfig = function (t) {
                          return (
                            (t = e.extend({}, s, t)),
                            h.typeCheckConfig(n, t, a),
                            t
                          );
                        }),
                        (o.prototype._showElement = function (t) {
                          var n = this,
                            r =
                              h.supportsTransitionEnd() &&
                              e(this._element).hasClass(m);
                          (this._element.parentNode &&
                            this._element.parentNode.nodeType ===
                              Node.ELEMENT_NODE) ||
                            document.body.appendChild(this._element),
                            (this._element.style.display = "block"),
                            this._element.removeAttribute("aria-hidden"),
                            (this._element.scrollTop = 0),
                            r && h.reflow(this._element),
                            e(this._element).addClass(g),
                            this._config.focus && this._enforceFocus();
                          var i = e.Event(l.SHOWN, { relatedTarget: t }),
                            o = function () {
                              n._config.focus && n._element.focus(),
                                e(n._element).trigger(i);
                            };
                          r
                            ? e(this._dialog)
                                .one(h.TRANSITION_END, o)
                                .emulateTransitionEnd(300)
                            : o();
                        }),
                        (o.prototype._enforceFocus = function () {
                          var t = this;
                          e(document)
                            .off(l.FOCUSIN)
                            .on(l.FOCUSIN, function (n) {
                              document === n.target ||
                                t._element === n.target ||
                                e(t._element).has(n.target).length ||
                                t._element.focus();
                            });
                        }),
                        (o.prototype._setEscapeEvent = function () {
                          var t = this;
                          this._isShown && this._config.keyboard
                            ? e(this._element).on(
                                l.KEYDOWN_DISMISS,
                                function (e) {
                                  27 === e.which && t.hide();
                                }
                              )
                            : this._isShown ||
                              e(this._element).off(l.KEYDOWN_DISMISS);
                        }),
                        (o.prototype._setResizeEvent = function () {
                          this._isShown
                            ? e(window).on(
                                l.RESIZE,
                                e.proxy(this._handleUpdate, this)
                              )
                            : e(window).off(l.RESIZE);
                        }),
                        (o.prototype._hideModal = function () {
                          var t = this;
                          (this._element.style.display = "none"),
                            this._element.setAttribute("aria-hidden", "true"),
                            this._showBackdrop(function () {
                              e(document.body).removeClass(f),
                                t._resetAdjustments(),
                                t._resetScrollbar(),
                                e(t._element).trigger(l.HIDDEN);
                            });
                        }),
                        (o.prototype._removeBackdrop = function () {
                          this._backdrop &&
                            (e(this._backdrop).remove(),
                            (this._backdrop = null));
                        }),
                        (o.prototype._showBackdrop = function (t) {
                          var n = this,
                            r = e(this._element).hasClass(m) ? m : "";
                          if (this._isShown && this._config.backdrop) {
                            var i = h.supportsTransitionEnd() && r;
                            if (
                              ((this._backdrop = document.createElement("div")),
                              (this._backdrop.className = u),
                              r && e(this._backdrop).addClass(r),
                              e(this._backdrop).appendTo(document.body),
                              e(this._element).on(
                                l.CLICK_DISMISS,
                                function (e) {
                                  return n._ignoreBackdropClick
                                    ? void (n._ignoreBackdropClick = !1)
                                    : void (
                                        e.target === e.currentTarget &&
                                        ("static" === n._config.backdrop
                                          ? n._element.focus()
                                          : n.hide())
                                      );
                                }
                              ),
                              i && h.reflow(this._backdrop),
                              e(this._backdrop).addClass(g),
                              !t)
                            )
                              return;
                            if (!i) return void t();
                            e(this._backdrop)
                              .one(h.TRANSITION_END, t)
                              .emulateTransitionEnd(150);
                          } else if (!this._isShown && this._backdrop) {
                            e(this._backdrop).removeClass(g);
                            var o = function () {
                              n._removeBackdrop(), t && t();
                            };
                            h.supportsTransitionEnd() &&
                            e(this._element).hasClass(m)
                              ? e(this._backdrop)
                                  .one(h.TRANSITION_END, o)
                                  .emulateTransitionEnd(150)
                              : o();
                          } else t && t();
                        }),
                        (o.prototype._handleUpdate = function () {
                          this._adjustDialog();
                        }),
                        (o.prototype._adjustDialog = function () {
                          var e =
                            this._element.scrollHeight >
                            document.documentElement.clientHeight;
                          !this._isBodyOverflowing &&
                            e &&
                            (this._element.style.paddingLeft =
                              this._scrollbarWidth + "px"),
                            this._isBodyOverflowing &&
                              !e &&
                              (this._element.style.paddingRight =
                                this._scrollbarWidth + "px");
                        }),
                        (o.prototype._resetAdjustments = function () {
                          (this._element.style.paddingLeft = ""),
                            (this._element.style.paddingRight = "");
                        }),
                        (o.prototype._checkScrollbar = function () {
                          (this._isBodyOverflowing =
                            document.body.clientWidth < window.innerWidth),
                            (this._scrollbarWidth = this._getScrollbarWidth());
                        }),
                        (o.prototype._setScrollbar = function () {
                          var t = parseInt(e(w).css("padding-right") || 0, 10);
                          (this._originalBodyPadding =
                            document.body.style.paddingRight || ""),
                            this._isBodyOverflowing &&
                              (document.body.style.paddingRight =
                                t + this._scrollbarWidth + "px");
                        }),
                        (o.prototype._resetScrollbar = function () {
                          document.body.style.paddingRight =
                            this._originalBodyPadding;
                        }),
                        (o.prototype._getScrollbarWidth = function () {
                          var e = document.createElement("div");
                          (e.className = c), document.body.appendChild(e);
                          var t = e.offsetWidth - e.clientWidth;
                          return document.body.removeChild(e), t;
                        }),
                        (o._jQueryInterface = function (t, n) {
                          return this.each(function () {
                            var i = e(this).data(r),
                              s = e.extend(
                                {},
                                o.Default,
                                e(this).data(),
                                "object" ===
                                  (void 0 === t ? "undefined" : d(t)) && t
                              );
                            if (
                              (i || ((i = new o(this, s)), e(this).data(r, i)),
                              "string" == typeof t)
                            ) {
                              if (void 0 === i[t])
                                throw new Error('No method named "' + t + '"');
                              i[t](n);
                            } else s.show && i.show(n);
                          });
                        }),
                        p(o, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                          {
                            key: "Default",
                            get: function () {
                              return s;
                            },
                          },
                        ]),
                        o
                      );
                    })();
                  e(document).on(l.CLICK_DATA_API, y, function (t) {
                    var n = this,
                      i = void 0,
                      o = h.getSelectorFromElement(this);
                    o && (i = e(o)[0]);
                    var s = e(i).data(r)
                      ? "toggle"
                      : e.extend({}, e(i).data(), e(this).data());
                    "A" === this.tagName && t.preventDefault();
                    var a = e(i).one(l.SHOW, function (t) {
                      t.isDefaultPrevented() ||
                        a.one(l.HIDDEN, function () {
                          e(n).is(":visible") && n.focus();
                        });
                    });
                    x._jQueryInterface.call(e(i), s, this);
                  }),
                    (e.fn[n] = x._jQueryInterface),
                    (e.fn[n].Constructor = x),
                    (e.fn[n].noConflict = function () {
                      return (e.fn[n] = o), x._jQueryInterface;
                    });
                })(jQuery),
                (function (e) {
                  var n = "scrollspy",
                    r = "bs.scrollspy",
                    i = "." + r,
                    o = e.fn[n],
                    s = { offset: 10, method: "auto", target: "" },
                    a = {
                      offset: "number",
                      method: "string",
                      target: "(string|element)",
                    },
                    l = {
                      ACTIVATE: "activate" + i,
                      SCROLL: "scroll" + i,
                      LOAD_DATA_API: "load" + i + ".data-api",
                    },
                    c = "dropdown-item",
                    u = "active",
                    f = '[data-spy="scroll"]',
                    m = ".active",
                    g = "li",
                    v = ".nav-link",
                    y = ".dropdown",
                    b = ".dropdown-item",
                    w = ".dropdown-toggle",
                    x = "offset",
                    S = "position",
                    _ = (function () {
                      function o(n, r) {
                        t(this, o),
                          (this._element = n),
                          (this._scrollElement =
                            "BODY" === n.tagName ? window : n),
                          (this._config = this._getConfig(r)),
                          (this._selector =
                            this._config.target +
                            " " +
                            v +
                            "," +
                            this._config.target +
                            " " +
                            b),
                          (this._offsets = []),
                          (this._targets = []),
                          (this._activeTarget = null),
                          (this._scrollHeight = 0),
                          e(this._scrollElement).on(
                            l.SCROLL,
                            e.proxy(this._process, this)
                          ),
                          this.refresh(),
                          this._process();
                      }
                      return (
                        (o.prototype.refresh = function () {
                          var t = this,
                            n =
                              this._scrollElement !== this._scrollElement.window
                                ? S
                                : x,
                            r =
                              "auto" === this._config.method
                                ? n
                                : this._config.method,
                            i = r === S ? this._getScrollTop() : 0;
                          (this._offsets = []),
                            (this._targets = []),
                            (this._scrollHeight = this._getScrollHeight()),
                            e
                              .makeArray(e(this._selector))
                              .map(function (t) {
                                var n = void 0,
                                  o = h.getSelectorFromElement(t);
                                return (
                                  o && (n = e(o)[0]),
                                  n && (n.offsetWidth || n.offsetHeight)
                                    ? [e(n)[r]().top + i, o]
                                    : null
                                );
                              })
                              .filter(function (e) {
                                return e;
                              })
                              .sort(function (e, t) {
                                return e[0] - t[0];
                              })
                              .forEach(function (e) {
                                t._offsets.push(e[0]), t._targets.push(e[1]);
                              });
                        }),
                        (o.prototype.dispose = function () {
                          e.removeData(this._element, r),
                            e(this._scrollElement).off(i),
                            (this._element = null),
                            (this._scrollElement = null),
                            (this._config = null),
                            (this._selector = null),
                            (this._offsets = null),
                            (this._targets = null),
                            (this._activeTarget = null),
                            (this._scrollHeight = null);
                        }),
                        (o.prototype._getConfig = function (t) {
                          if (
                            "string" != typeof (t = e.extend({}, s, t)).target
                          ) {
                            var r = e(t.target).attr("id");
                            r || ((r = h.getUID(n)), e(t.target).attr("id", r)),
                              (t.target = "#" + r);
                          }
                          return h.typeCheckConfig(n, t, a), t;
                        }),
                        (o.prototype._getScrollTop = function () {
                          return this._scrollElement === window
                            ? this._scrollElement.scrollY
                            : this._scrollElement.scrollTop;
                        }),
                        (o.prototype._getScrollHeight = function () {
                          return (
                            this._scrollElement.scrollHeight ||
                            Math.max(
                              document.body.scrollHeight,
                              document.documentElement.scrollHeight
                            )
                          );
                        }),
                        (o.prototype._process = function () {
                          var e = this._getScrollTop() + this._config.offset,
                            t = this._getScrollHeight(),
                            n =
                              this._config.offset +
                              t -
                              this._scrollElement.offsetHeight;
                          if (
                            (this._scrollHeight !== t && this.refresh(), e >= n)
                          ) {
                            var r = this._targets[this._targets.length - 1];
                            this._activeTarget !== r && this._activate(r);
                          }
                          if (this._activeTarget && e < this._offsets[0])
                            return (
                              (this._activeTarget = null), void this._clear()
                            );
                          for (var i = this._offsets.length; i--; ) {
                            this._activeTarget !== this._targets[i] &&
                              e >= this._offsets[i] &&
                              (void 0 === this._offsets[i + 1] ||
                                e < this._offsets[i + 1]) &&
                              this._activate(this._targets[i]);
                          }
                        }),
                        (o.prototype._activate = function (t) {
                          (this._activeTarget = t), this._clear();
                          var n = this._selector.split(",");
                          n = n.map(function (e) {
                            return (
                              e +
                              '[data-target="' +
                              t +
                              '"],' +
                              e +
                              '[href="' +
                              t +
                              '"]'
                            );
                          });
                          var r = e(n.join(","));
                          r.hasClass(c)
                            ? (r.closest(y).find(w).addClass(u), r.addClass(u))
                            : r.parents(g).find(v).addClass(u),
                            e(this._scrollElement).trigger(l.ACTIVATE, {
                              relatedTarget: t,
                            });
                        }),
                        (o.prototype._clear = function () {
                          e(this._selector).filter(m).removeClass(u);
                        }),
                        (o._jQueryInterface = function (t) {
                          return this.each(function () {
                            var n = e(this).data(r),
                              i =
                                ("object" ===
                                  (void 0 === t ? "undefined" : d(t)) &&
                                  t) ||
                                null;
                            if (
                              (n || ((n = new o(this, i)), e(this).data(r, n)),
                              "string" == typeof t)
                            ) {
                              if (void 0 === n[t])
                                throw new Error('No method named "' + t + '"');
                              n[t]();
                            }
                          });
                        }),
                        p(o, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                          {
                            key: "Default",
                            get: function () {
                              return s;
                            },
                          },
                        ]),
                        o
                      );
                    })();
                  e(window).on(l.LOAD_DATA_API, function () {
                    for (var t = e.makeArray(e(f)), n = t.length; n--; ) {
                      var r = e(t[n]);
                      _._jQueryInterface.call(r, r.data());
                    }
                  }),
                    (e.fn[n] = _._jQueryInterface),
                    (e.fn[n].Constructor = _),
                    (e.fn[n].noConflict = function () {
                      return (e.fn[n] = o), _._jQueryInterface;
                    });
                })(jQuery),
                (function (e) {
                  var n = "bs.tab",
                    r = "." + n,
                    i = e.fn.tab,
                    o = {
                      HIDE: "hide" + r,
                      HIDDEN: "hidden" + r,
                      SHOW: "show" + r,
                      SHOWN: "shown" + r,
                      CLICK_DATA_API: "click" + r + ".data-api",
                    },
                    s = "dropdown-menu",
                    a = "active",
                    l = "fade",
                    c = "in",
                    u = ".dropdown",
                    f = "ul:not(.dropdown-menu)",
                    d = "> .nav-item .fade, > .fade",
                    m = ".active",
                    g = "> .nav-item > .active, > .active",
                    v = '[data-toggle="tab"], [data-toggle="pill"]',
                    y = ".dropdown-toggle",
                    b = "> .dropdown-menu .active",
                    w = (function () {
                      function r(e) {
                        t(this, r), (this._element = e);
                      }
                      return (
                        (r.prototype.show = function () {
                          var t = this;
                          if (
                            !this._element.parentNode ||
                            this._element.parentNode.nodeType !==
                              Node.ELEMENT_NODE ||
                            !e(this._element).hasClass(a)
                          ) {
                            var n = void 0,
                              r = void 0,
                              i = e(this._element).closest(f)[0],
                              s = h.getSelectorFromElement(this._element);
                            i &&
                              (r = (r = e.makeArray(e(i).find(m)))[
                                r.length - 1
                              ]);
                            var l = e.Event(o.HIDE, {
                                relatedTarget: this._element,
                              }),
                              c = e.Event(o.SHOW, { relatedTarget: r });
                            if (
                              (r && e(r).trigger(l),
                              e(this._element).trigger(c),
                              !c.isDefaultPrevented() &&
                                !l.isDefaultPrevented())
                            ) {
                              s && (n = e(s)[0]),
                                this._activate(this._element, i);
                              var u = function () {
                                var n = e.Event(o.HIDDEN, {
                                    relatedTarget: t._element,
                                  }),
                                  i = e.Event(o.SHOWN, { relatedTarget: r });
                                e(r).trigger(n), e(t._element).trigger(i);
                              };
                              n ? this._activate(n, n.parentNode, u) : u();
                            }
                          }
                        }),
                        (r.prototype.dispose = function () {
                          e.removeClass(this._element, n),
                            (this._element = null);
                        }),
                        (r.prototype._activate = function (t, n, r) {
                          var i = e(n).find(g)[0],
                            o =
                              r &&
                              h.supportsTransitionEnd() &&
                              ((i && e(i).hasClass(l)) ||
                                Boolean(e(n).find(d)[0])),
                            s = e.proxy(
                              this._transitionComplete,
                              this,
                              t,
                              i,
                              o,
                              r
                            );
                          i && o
                            ? e(i)
                                .one(h.TRANSITION_END, s)
                                .emulateTransitionEnd(150)
                            : s(),
                            i && e(i).removeClass(c);
                        }),
                        (r.prototype._transitionComplete = function (
                          t,
                          n,
                          r,
                          i
                        ) {
                          if (n) {
                            e(n).removeClass(a);
                            var o = e(n).find(b)[0];
                            o && e(o).removeClass(a),
                              n.setAttribute("aria-expanded", !1);
                          }
                          if (
                            (e(t).addClass(a),
                            t.setAttribute("aria-expanded", !0),
                            r
                              ? (h.reflow(t), e(t).addClass(c))
                              : e(t).removeClass(l),
                            t.parentNode && e(t.parentNode).hasClass(s))
                          ) {
                            var f = e(t).closest(u)[0];
                            f && e(f).find(y).addClass(a),
                              t.setAttribute("aria-expanded", !0);
                          }
                          i && i();
                        }),
                        (r._jQueryInterface = function (t) {
                          return this.each(function () {
                            var i = e(this),
                              o = i.data(n);
                            if (
                              (o || ((o = o = new r(this)), i.data(n, o)),
                              "string" == typeof t)
                            ) {
                              if (void 0 === o[t])
                                throw new Error('No method named "' + t + '"');
                              o[t]();
                            }
                          });
                        }),
                        p(r, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                        ]),
                        r
                      );
                    })();
                  e(document).on(o.CLICK_DATA_API, v, function (t) {
                    t.preventDefault(),
                      w._jQueryInterface.call(e(this), "show");
                  }),
                    (e.fn.tab = w._jQueryInterface),
                    (e.fn.tab.Constructor = w),
                    (e.fn.tab.noConflict = function () {
                      return (e.fn.tab = i), w._jQueryInterface;
                    });
                })(jQuery),
                (function (e) {
                  if (void 0 === window.Tether)
                    throw new Error(
                      "Bootstrap tooltips require Tether (http://tether.io/)"
                    );
                  var n = "tooltip",
                    r = "bs.tooltip",
                    i = "." + r,
                    o = e.fn[n],
                    s = {
                      animation: !0,
                      template:
                        '<div class="tooltip" role="tooltip"><div class="tooltip-inner"></div></div>',
                      trigger: "hover focus",
                      title: "",
                      delay: 0,
                      html: !1,
                      selector: !1,
                      placement: "top",
                      offset: "0 0",
                      constraints: [],
                    },
                    a = {
                      animation: "boolean",
                      template: "string",
                      title: "(string|element|function)",
                      trigger: "string",
                      delay: "(number|object)",
                      html: "boolean",
                      selector: "(string|boolean)",
                      placement: "(string|function)",
                      offset: "string",
                      constraints: "array",
                    },
                    l = {
                      TOP: "bottom center",
                      RIGHT: "middle left",
                      BOTTOM: "top center",
                      LEFT: "middle right",
                    },
                    c = "in",
                    u = "out",
                    f = {
                      HIDE: "hide" + i,
                      HIDDEN: "hidden" + i,
                      SHOW: "show" + i,
                      SHOWN: "shown" + i,
                      INSERTED: "inserted" + i,
                      CLICK: "click" + i,
                      FOCUSIN: "focusin" + i,
                      FOCUSOUT: "focusout" + i,
                      MOUSEENTER: "mouseenter" + i,
                      MOUSELEAVE: "mouseleave" + i,
                    },
                    m = "fade",
                    g = "in",
                    v = ".tooltip-inner",
                    y = { element: !1, enabled: !1 },
                    b = "hover",
                    w = "focus",
                    x = "manual",
                    S = (function () {
                      function o(e, n) {
                        t(this, o),
                          (this._isEnabled = !0),
                          (this._timeout = 0),
                          (this._hoverState = ""),
                          (this._activeTrigger = {}),
                          (this._tether = null),
                          (this.element = e),
                          (this.config = this._getConfig(n)),
                          (this.tip = null),
                          this._setListeners();
                      }
                      return (
                        (o.prototype.enable = function () {
                          this._isEnabled = !0;
                        }),
                        (o.prototype.disable = function () {
                          this._isEnabled = !1;
                        }),
                        (o.prototype.toggleEnabled = function () {
                          this._isEnabled = !this._isEnabled;
                        }),
                        (o.prototype.toggle = function (t) {
                          if (t) {
                            var n = this.constructor.DATA_KEY,
                              r = e(t.currentTarget).data(n);
                            r ||
                              ((r = new this.constructor(
                                t.currentTarget,
                                this._getDelegateConfig()
                              )),
                              e(t.currentTarget).data(n, r)),
                              (r._activeTrigger.click =
                                !r._activeTrigger.click),
                              r._isWithActiveTrigger()
                                ? r._enter(null, r)
                                : r._leave(null, r);
                          } else {
                            if (e(this.getTipElement()).hasClass(g))
                              return void this._leave(null, this);
                            this._enter(null, this);
                          }
                        }),
                        (o.prototype.dispose = function () {
                          clearTimeout(this._timeout),
                            this.cleanupTether(),
                            e.removeData(
                              this.element,
                              this.constructor.DATA_KEY
                            ),
                            e(this.element).off(this.constructor.EVENT_KEY),
                            this.tip && e(this.tip).remove(),
                            (this._isEnabled = null),
                            (this._timeout = null),
                            (this._hoverState = null),
                            (this._activeTrigger = null),
                            (this._tether = null),
                            (this.element = null),
                            (this.config = null),
                            (this.tip = null);
                        }),
                        (o.prototype.show = function () {
                          var t = this,
                            n = e.Event(this.constructor.Event.SHOW);
                          if (this.isWithContent() && this._isEnabled) {
                            e(this.element).trigger(n);
                            var r = e.contains(
                              this.element.ownerDocument.documentElement,
                              this.element
                            );
                            if (n.isDefaultPrevented() || !r) return;
                            var i = this.getTipElement(),
                              s = h.getUID(this.constructor.NAME);
                            i.setAttribute("id", s),
                              this.element.setAttribute("aria-describedby", s),
                              this.setContent(),
                              this.config.animation && e(i).addClass(m);
                            var a =
                                "function" == typeof this.config.placement
                                  ? this.config.placement.call(
                                      this,
                                      i,
                                      this.element
                                    )
                                  : this.config.placement,
                              l = this._getAttachment(a);
                            e(i)
                              .data(this.constructor.DATA_KEY, this)
                              .appendTo(document.body),
                              e(this.element).trigger(
                                this.constructor.Event.INSERTED
                              ),
                              (this._tether = new Tether({
                                attachment: l,
                                element: i,
                                target: this.element,
                                classes: y,
                                classPrefix: "bs-tether",
                                offset: this.config.offset,
                                constraints: this.config.constraints,
                                addTargetClasses: !1,
                              })),
                              h.reflow(i),
                              this._tether.position(),
                              e(i).addClass(g);
                            var c = function () {
                              var n = t._hoverState;
                              (t._hoverState = null),
                                e(t.element).trigger(t.constructor.Event.SHOWN),
                                n === u && t._leave(null, t);
                            };
                            if (
                              h.supportsTransitionEnd() &&
                              e(this.tip).hasClass(m)
                            )
                              return void e(this.tip)
                                .one(h.TRANSITION_END, c)
                                .emulateTransitionEnd(o._TRANSITION_DURATION);
                            c();
                          }
                        }),
                        (o.prototype.hide = function (t) {
                          var n = this,
                            r = this.getTipElement(),
                            i = e.Event(this.constructor.Event.HIDE),
                            o = function () {
                              n._hoverState !== c &&
                                r.parentNode &&
                                r.parentNode.removeChild(r),
                                n.element.removeAttribute("aria-describedby"),
                                e(n.element).trigger(
                                  n.constructor.Event.HIDDEN
                                ),
                                n.cleanupTether(),
                                t && t();
                            };
                          e(this.element).trigger(i),
                            i.isDefaultPrevented() ||
                              (e(r).removeClass(g),
                              h.supportsTransitionEnd() &&
                              e(this.tip).hasClass(m)
                                ? e(r)
                                    .one(h.TRANSITION_END, o)
                                    .emulateTransitionEnd(150)
                                : o(),
                              (this._hoverState = ""));
                        }),
                        (o.prototype.isWithContent = function () {
                          return Boolean(this.getTitle());
                        }),
                        (o.prototype.getTipElement = function () {
                          return (this.tip =
                            this.tip || e(this.config.template)[0]);
                        }),
                        (o.prototype.setContent = function () {
                          var t = e(this.getTipElement());
                          this.setElementContent(t.find(v), this.getTitle()),
                            t.removeClass(m).removeClass(g),
                            this.cleanupTether();
                        }),
                        (o.prototype.setElementContent = function (t, n) {
                          var r = this.config.html;
                          "object" === (void 0 === n ? "undefined" : d(n)) &&
                          (n.nodeType || n.jquery)
                            ? r
                              ? e(n).parent().is(t) || t.empty().append(n)
                              : t.text(e(n).text())
                            : t[r ? "html" : "text"](n);
                        }),
                        (o.prototype.getTitle = function () {
                          var e = this.element.getAttribute(
                            "data-original-title"
                          );
                          return (
                            e ||
                              (e =
                                "function" == typeof this.config.title
                                  ? this.config.title.call(this.element)
                                  : this.config.title),
                            e
                          );
                        }),
                        (o.prototype.cleanupTether = function () {
                          this._tether && this._tether.destroy();
                        }),
                        (o.prototype._getAttachment = function (e) {
                          return l[e.toUpperCase()];
                        }),
                        (o.prototype._setListeners = function () {
                          var t = this;
                          this.config.trigger.split(" ").forEach(function (n) {
                            if ("click" === n)
                              e(t.element).on(
                                t.constructor.Event.CLICK,
                                t.config.selector,
                                e.proxy(t.toggle, t)
                              );
                            else if (n !== x) {
                              var r =
                                  n === b
                                    ? t.constructor.Event.MOUSEENTER
                                    : t.constructor.Event.FOCUSIN,
                                i =
                                  n === b
                                    ? t.constructor.Event.MOUSELEAVE
                                    : t.constructor.Event.FOCUSOUT;
                              e(t.element)
                                .on(r, t.config.selector, e.proxy(t._enter, t))
                                .on(i, t.config.selector, e.proxy(t._leave, t));
                            }
                          }),
                            this.config.selector
                              ? (this.config = e.extend({}, this.config, {
                                  trigger: "manual",
                                  selector: "",
                                }))
                              : this._fixTitle();
                        }),
                        (o.prototype._fixTitle = function () {
                          var e = d(
                            this.element.getAttribute("data-original-title")
                          );
                          (this.element.getAttribute("title") ||
                            "string" !== e) &&
                            (this.element.setAttribute(
                              "data-original-title",
                              this.element.getAttribute("title") || ""
                            ),
                            this.element.setAttribute("title", ""));
                        }),
                        (o.prototype._enter = function (t, n) {
                          var r = this.constructor.DATA_KEY;
                          return (
                            (n = n || e(t.currentTarget).data(r)) ||
                              ((n = new this.constructor(
                                t.currentTarget,
                                this._getDelegateConfig()
                              )),
                              e(t.currentTarget).data(r, n)),
                            t &&
                              (n._activeTrigger["focusin" === t.type ? w : b] =
                                !0),
                            e(n.getTipElement()).hasClass(g) ||
                            n._hoverState === c
                              ? void (n._hoverState = c)
                              : (clearTimeout(n._timeout),
                                (n._hoverState = c),
                                n.config.delay && n.config.delay.show
                                  ? void (n._timeout = setTimeout(function () {
                                      n._hoverState === c && n.show();
                                    }, n.config.delay.show))
                                  : void n.show())
                          );
                        }),
                        (o.prototype._leave = function (t, n) {
                          var r = this.constructor.DATA_KEY;
                          if (
                            ((n = n || e(t.currentTarget).data(r)) ||
                              ((n = new this.constructor(
                                t.currentTarget,
                                this._getDelegateConfig()
                              )),
                              e(t.currentTarget).data(r, n)),
                            t &&
                              (n._activeTrigger["focusout" === t.type ? w : b] =
                                !1),
                            !n._isWithActiveTrigger())
                          )
                            return (
                              clearTimeout(n._timeout),
                              (n._hoverState = u),
                              n.config.delay && n.config.delay.hide
                                ? void (n._timeout = setTimeout(function () {
                                    n._hoverState === u && n.hide();
                                  }, n.config.delay.hide))
                                : void n.hide()
                            );
                        }),
                        (o.prototype._isWithActiveTrigger = function () {
                          for (var e in this._activeTrigger)
                            if (this._activeTrigger[e]) return !0;
                          return !1;
                        }),
                        (o.prototype._getConfig = function (t) {
                          return (
                            (t = e.extend(
                              {},
                              this.constructor.Default,
                              e(this.element).data(),
                              t
                            )).delay &&
                              "number" == typeof t.delay &&
                              (t.delay = { show: t.delay, hide: t.delay }),
                            h.typeCheckConfig(
                              n,
                              t,
                              this.constructor.DefaultType
                            ),
                            t
                          );
                        }),
                        (o.prototype._getDelegateConfig = function () {
                          var e = {};
                          if (this.config)
                            for (var t in this.config)
                              this.constructor.Default[t] !== this.config[t] &&
                                (e[t] = this.config[t]);
                          return e;
                        }),
                        (o._jQueryInterface = function (t) {
                          return this.each(function () {
                            var n = e(this).data(r),
                              i =
                                "object" === (void 0 === t ? "undefined" : d(t))
                                  ? t
                                  : null;
                            if (
                              (n || !/dispose|hide/.test(t)) &&
                              (n || ((n = new o(this, i)), e(this).data(r, n)),
                              "string" == typeof t)
                            ) {
                              if (void 0 === n[t])
                                throw new Error('No method named "' + t + '"');
                              n[t]();
                            }
                          });
                        }),
                        p(o, null, [
                          {
                            key: "VERSION",
                            get: function () {
                              return "4.0.0-alpha.5";
                            },
                          },
                          {
                            key: "Default",
                            get: function () {
                              return s;
                            },
                          },
                          {
                            key: "NAME",
                            get: function () {
                              return n;
                            },
                          },
                          {
                            key: "DATA_KEY",
                            get: function () {
                              return r;
                            },
                          },
                          {
                            key: "Event",
                            get: function () {
                              return f;
                            },
                          },
                          {
                            key: "EVENT_KEY",
                            get: function () {
                              return i;
                            },
                          },
                          {
                            key: "DefaultType",
                            get: function () {
                              return a;
                            },
                          },
                        ]),
                        o
                      );
                    })();
                  return (
                    (e.fn[n] = S._jQueryInterface),
                    (e.fn[n].Constructor = S),
                    (e.fn[n].noConflict = function () {
                      return (e.fn[n] = o), S._jQueryInterface;
                    }),
                    S
                  );
                })(jQuery));
            !(function (n) {
              var r = "popover",
                i = "bs.popover",
                o = "." + i,
                s = n.fn[r],
                a = n.extend({}, m.Default, {
                  placement: "right",
                  trigger: "click",
                  content: "",
                  template:
                    '<div class="popover" role="tooltip"><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
                }),
                l = n.extend({}, m.DefaultType, {
                  content: "(string|element|function)",
                }),
                c = "fade",
                u = "in",
                f = ".popover-title",
                h = ".popover-content",
                g = {
                  HIDE: "hide" + o,
                  HIDDEN: "hidden" + o,
                  SHOW: "show" + o,
                  SHOWN: "shown" + o,
                  INSERTED: "inserted" + o,
                  CLICK: "click" + o,
                  FOCUSIN: "focusin" + o,
                  FOCUSOUT: "focusout" + o,
                  MOUSEENTER: "mouseenter" + o,
                  MOUSELEAVE: "mouseleave" + o,
                },
                v = (function (s) {
                  function m() {
                    return t(this, m), e(this, s.apply(this, arguments));
                  }
                  return (
                    (function (e, t) {
                      if ("function" != typeof t && null !== t)
                        throw new TypeError(
                          "Super expression must either be null or a function, not " +
                            typeof t
                        );
                      (e.prototype = Object.create(t && t.prototype, {
                        constructor: {
                          value: e,
                          enumerable: !1,
                          writable: !0,
                          configurable: !0,
                        },
                      })),
                        t &&
                          (Object.setPrototypeOf
                            ? Object.setPrototypeOf(e, t)
                            : (e.__proto__ = t));
                    })(m, s),
                    (m.prototype.isWithContent = function () {
                      return this.getTitle() || this._getContent();
                    }),
                    (m.prototype.getTipElement = function () {
                      return (this.tip =
                        this.tip || n(this.config.template)[0]);
                    }),
                    (m.prototype.setContent = function () {
                      var e = n(this.getTipElement());
                      this.setElementContent(e.find(f), this.getTitle()),
                        this.setElementContent(e.find(h), this._getContent()),
                        e.removeClass(c).removeClass(u),
                        this.cleanupTether();
                    }),
                    (m.prototype._getContent = function () {
                      return (
                        this.element.getAttribute("data-content") ||
                        ("function" == typeof this.config.content
                          ? this.config.content.call(this.element)
                          : this.config.content)
                      );
                    }),
                    (m._jQueryInterface = function (e) {
                      return this.each(function () {
                        var t = n(this).data(i),
                          r =
                            "object" === (void 0 === e ? "undefined" : d(e))
                              ? e
                              : null;
                        if (
                          (t || !/destroy|hide/.test(e)) &&
                          (t || ((t = new m(this, r)), n(this).data(i, t)),
                          "string" == typeof e)
                        ) {
                          if (void 0 === t[e])
                            throw new Error('No method named "' + e + '"');
                          t[e]();
                        }
                      });
                    }),
                    p(m, null, [
                      {
                        key: "VERSION",
                        get: function () {
                          return "4.0.0-alpha.5";
                        },
                      },
                      {
                        key: "Default",
                        get: function () {
                          return a;
                        },
                      },
                      {
                        key: "NAME",
                        get: function () {
                          return r;
                        },
                      },
                      {
                        key: "DATA_KEY",
                        get: function () {
                          return i;
                        },
                      },
                      {
                        key: "Event",
                        get: function () {
                          return g;
                        },
                      },
                      {
                        key: "EVENT_KEY",
                        get: function () {
                          return o;
                        },
                      },
                      {
                        key: "DefaultType",
                        get: function () {
                          return l;
                        },
                      },
                    ]),
                    m
                  );
                })(m);
              (n.fn[r] = v._jQueryInterface),
                (n.fn[r].Constructor = v),
                (n.fn[r].noConflict = function () {
                  return (n.fn[r] = s), v._jQueryInterface;
                });
            })(jQuery);
          })();
      },
      151: function (e) {
        function t() {
          (this._events = this._events || {}),
            (this._maxListeners = this._maxListeners || void 0);
        }
        function n(e) {
          return "function" == typeof e;
        }
        function r(e) {
          return "object" == typeof e && null !== e;
        }
        function i(e) {
          return void 0 === e;
        }
        (e.exports = t),
          (t.EventEmitter = t),
          (t.prototype._events = void 0),
          (t.prototype._maxListeners = void 0),
          (t.defaultMaxListeners = 10),
          (t.prototype.setMaxListeners = function (e) {
            if ("number" != typeof e || e < 0 || isNaN(e))
              throw TypeError("n must be a positive number");
            return (this._maxListeners = e), this;
          }),
          (t.prototype.emit = function (e) {
            var t, o, s, a, l, c;
            if (
              (this._events || (this._events = {}),
              "error" === e &&
                (!this._events.error ||
                  (r(this._events.error) && !this._events.error.length)))
            ) {
              if ((t = arguments[1]) instanceof Error) throw t;
              var u = new Error(
                'Uncaught, unspecified "error" event. (' + t + ")"
              );
              throw ((u.context = t), u);
            }
            if (i((o = this._events[e]))) return !1;
            if (n(o))
              switch (arguments.length) {
                case 1:
                  o.call(this);
                  break;
                case 2:
                  o.call(this, arguments[1]);
                  break;
                case 3:
                  o.call(this, arguments[1], arguments[2]);
                  break;
                default:
                  (a = Array.prototype.slice.call(arguments, 1)),
                    o.apply(this, a);
              }
            else if (r(o))
              for (
                a = Array.prototype.slice.call(arguments, 1),
                  s = (c = o.slice()).length,
                  l = 0;
                l < s;
                l++
              )
                c[l].apply(this, a);
            return !0;
          }),
          (t.prototype.addListener = function (e, o) {
            var s;
            if (!n(o)) throw TypeError("listener must be a function");
            return (
              this._events || (this._events = {}),
              this._events.newListener &&
                this.emit("newListener", e, n(o.listener) ? o.listener : o),
              this._events[e]
                ? r(this._events[e])
                  ? this._events[e].push(o)
                  : (this._events[e] = [this._events[e], o])
                : (this._events[e] = o),
              r(this._events[e]) &&
                !this._events[e].warned &&
                (s = i(this._maxListeners)
                  ? t.defaultMaxListeners
                  : this._maxListeners) &&
                s > 0 &&
                this._events[e].length > s &&
                ((this._events[e].warned = !0),
                console.error(
                  "(node) warning: possible EventEmitter memory leak detected. %d listeners added. Use emitter.setMaxListeners() to increase limit.",
                  this._events[e].length
                ),
                "function" == typeof console.trace && console.trace()),
              this
            );
          }),
          (t.prototype.on = t.prototype.addListener),
          (t.prototype.once = function (e, t) {
            if (!n(t)) throw TypeError("listener must be a function");
            var r = !1;
            function i() {
              this.removeListener(e, i),
                r || ((r = !0), t.apply(this, arguments));
            }
            return (i.listener = t), this.on(e, i), this;
          }),
          (t.prototype.removeListener = function (e, t) {
            var i, o, s, a;
            if (!n(t)) throw TypeError("listener must be a function");
            if (!this._events || !this._events[e]) return this;
            if (
              ((s = (i = this._events[e]).length),
              (o = -1),
              i === t || (n(i.listener) && i.listener === t))
            )
              delete this._events[e],
                this._events.removeListener &&
                  this.emit("removeListener", e, t);
            else if (r(i)) {
              for (a = s; a-- > 0; )
                if (i[a] === t || (i[a].listener && i[a].listener === t)) {
                  o = a;
                  break;
                }
              if (o < 0) return this;
              1 === i.length
                ? ((i.length = 0), delete this._events[e])
                : i.splice(o, 1),
                this._events.removeListener &&
                  this.emit("removeListener", e, t);
            }
            return this;
          }),
          (t.prototype.removeAllListeners = function (e) {
            var t, r;
            if (!this._events) return this;
            if (!this._events.removeListener)
              return (
                0 === arguments.length
                  ? (this._events = {})
                  : this._events[e] && delete this._events[e],
                this
              );
            if (0 === arguments.length) {
              for (t in this._events)
                "removeListener" !== t && this.removeAllListeners(t);
              return (
                this.removeAllListeners("removeListener"),
                (this._events = {}),
                this
              );
            }
            if (n((r = this._events[e]))) this.removeListener(e, r);
            else if (r)
              for (; r.length; ) this.removeListener(e, r[r.length - 1]);
            return delete this._events[e], this;
          }),
          (t.prototype.listeners = function (e) {
            return this._events && this._events[e]
              ? n(this._events[e])
                ? [this._events[e]]
                : this._events[e].slice()
              : [];
          }),
          (t.prototype.listenerCount = function (e) {
            if (this._events) {
              var t = this._events[e];
              if (n(t)) return 1;
              if (t) return t.length;
            }
            return 0;
          }),
          (t.listenerCount = function (e, t) {
            return e.listenerCount(t);
          });
      },
      5: function (e, t, n) {
        "use strict";
        e.exports = (function () {
          if ("object" == typeof globalThis) return globalThis;
          var e;
          try {
            e = this || new Function("return this")();
          } catch (e) {
            if ("object" == typeof window) return window;
            if ("object" == typeof self) return self;
            if (void 0 !== n.g) return n.g;
          }
          return e;
        })();
      },
      975: function (e) {
        e.exports = (function e(t, n, r) {
          function i(s, a) {
            if (!n[s]) {
              if (!t[s]) {
                if (o) return o(s, !0);
                var l = new Error("Cannot find module '" + s + "'");
                throw ((l.code = "MODULE_NOT_FOUND"), l);
              }
              var c = (n[s] = { exports: {} });
              t[s][0].call(
                c.exports,
                function (e) {
                  var n = t[s][1][e];
                  return i(n || e);
                },
                c,
                c.exports,
                e,
                t,
                n,
                r
              );
            }
            return n[s].exports;
          }
          for (var o = void 0, s = 0; s < r.length; s++) i(r[s]);
          return i;
        })(
          {
            1: [
              function (e, t, n) {
                t.exports = function (e) {
                  var t,
                    n,
                    r,
                    i = -1;
                  if (
                    e.lines.length > 1 &&
                    "flex-start" === e.style.alignContent
                  )
                    for (t = 0; (r = e.lines[++i]); )
                      (r.crossStart = t), (t += r.cross);
                  else if (
                    e.lines.length > 1 &&
                    "flex-end" === e.style.alignContent
                  )
                    for (t = e.flexStyle.crossSpace; (r = e.lines[++i]); )
                      (r.crossStart = t), (t += r.cross);
                  else if (
                    e.lines.length > 1 &&
                    "center" === e.style.alignContent
                  )
                    for (t = e.flexStyle.crossSpace / 2; (r = e.lines[++i]); )
                      (r.crossStart = t), (t += r.cross);
                  else if (
                    e.lines.length > 1 &&
                    "space-between" === e.style.alignContent
                  )
                    for (
                      n = e.flexStyle.crossSpace / (e.lines.length - 1), t = 0;
                      (r = e.lines[++i]);

                    )
                      (r.crossStart = t), (t += r.cross + n);
                  else if (
                    e.lines.length > 1 &&
                    "space-around" === e.style.alignContent
                  )
                    for (
                      t =
                        (n =
                          (2 * e.flexStyle.crossSpace) / (2 * e.lines.length)) /
                        2;
                      (r = e.lines[++i]);

                    )
                      (r.crossStart = t), (t += r.cross + n);
                  else
                    for (
                      n = e.flexStyle.crossSpace / e.lines.length,
                        t = e.flexStyle.crossInnerBefore;
                      (r = e.lines[++i]);

                    )
                      (r.crossStart = t), (r.cross += n), (t += r.cross);
                };
              },
              {},
            ],
            2: [
              function (e, t, n) {
                t.exports = function (e) {
                  for (var t, n = -1; (line = e.lines[++n]); )
                    for (t = -1; (child = line.children[++t]); ) {
                      var r = child.style.alignSelf;
                      "auto" === r && (r = e.style.alignItems),
                        "flex-start" === r
                          ? (child.flexStyle.crossStart = line.crossStart)
                          : "flex-end" === r
                          ? (child.flexStyle.crossStart =
                              line.crossStart +
                              line.cross -
                              child.flexStyle.crossOuter)
                          : "center" === r
                          ? (child.flexStyle.crossStart =
                              line.crossStart +
                              (line.cross - child.flexStyle.crossOuter) / 2)
                          : ((child.flexStyle.crossStart = line.crossStart),
                            (child.flexStyle.crossOuter = line.cross),
                            (child.flexStyle.cross =
                              child.flexStyle.crossOuter -
                              child.flexStyle.crossBefore -
                              child.flexStyle.crossAfter));
                    }
                };
              },
              {},
            ],
            3: [
              function (e, t, n) {
                t.exports = function (e, t) {
                  var n = "row" === t || "row-reverse" === t,
                    r = e.mainAxis;
                  r
                    ? (n && "inline" === r) ||
                      (!n && "block" === r) ||
                      (e.flexStyle = {
                        main: e.flexStyle.cross,
                        cross: e.flexStyle.main,
                        mainOffset: e.flexStyle.crossOffset,
                        crossOffset: e.flexStyle.mainOffset,
                        mainBefore: e.flexStyle.crossBefore,
                        mainAfter: e.flexStyle.crossAfter,
                        crossBefore: e.flexStyle.mainBefore,
                        crossAfter: e.flexStyle.mainAfter,
                        mainInnerBefore: e.flexStyle.crossInnerBefore,
                        mainInnerAfter: e.flexStyle.crossInnerAfter,
                        crossInnerBefore: e.flexStyle.mainInnerBefore,
                        crossInnerAfter: e.flexStyle.mainInnerAfter,
                        mainBorderBefore: e.flexStyle.crossBorderBefore,
                        mainBorderAfter: e.flexStyle.crossBorderAfter,
                        crossBorderBefore: e.flexStyle.mainBorderBefore,
                        crossBorderAfter: e.flexStyle.mainBorderAfter,
                      })
                    : ((e.flexStyle = n
                        ? {
                            main: e.style.width,
                            cross: e.style.height,
                            mainOffset: e.style.offsetWidth,
                            crossOffset: e.style.offsetHeight,
                            mainBefore: e.style.marginLeft,
                            mainAfter: e.style.marginRight,
                            crossBefore: e.style.marginTop,
                            crossAfter: e.style.marginBottom,
                            mainInnerBefore: e.style.paddingLeft,
                            mainInnerAfter: e.style.paddingRight,
                            crossInnerBefore: e.style.paddingTop,
                            crossInnerAfter: e.style.paddingBottom,
                            mainBorderBefore: e.style.borderLeftWidth,
                            mainBorderAfter: e.style.borderRightWidth,
                            crossBorderBefore: e.style.borderTopWidth,
                            crossBorderAfter: e.style.borderBottomWidth,
                          }
                        : {
                            main: e.style.height,
                            cross: e.style.width,
                            mainOffset: e.style.offsetHeight,
                            crossOffset: e.style.offsetWidth,
                            mainBefore: e.style.marginTop,
                            mainAfter: e.style.marginBottom,
                            crossBefore: e.style.marginLeft,
                            crossAfter: e.style.marginRight,
                            mainInnerBefore: e.style.paddingTop,
                            mainInnerAfter: e.style.paddingBottom,
                            crossInnerBefore: e.style.paddingLeft,
                            crossInnerAfter: e.style.paddingRight,
                            mainBorderBefore: e.style.borderTopWidth,
                            mainBorderAfter: e.style.borderBottomWidth,
                            crossBorderBefore: e.style.borderLeftWidth,
                            crossBorderAfter: e.style.borderRightWidth,
                          }),
                      "content-box" === e.style.boxSizing &&
                        ("number" == typeof e.flexStyle.main &&
                          (e.flexStyle.main +=
                            e.flexStyle.mainInnerBefore +
                            e.flexStyle.mainInnerAfter +
                            e.flexStyle.mainBorderBefore +
                            e.flexStyle.mainBorderAfter),
                        "number" == typeof e.flexStyle.cross &&
                          (e.flexStyle.cross +=
                            e.flexStyle.crossInnerBefore +
                            e.flexStyle.crossInnerAfter +
                            e.flexStyle.crossBorderBefore +
                            e.flexStyle.crossBorderAfter))),
                    (e.mainAxis = n ? "inline" : "block"),
                    (e.crossAxis = n ? "block" : "inline"),
                    "number" == typeof e.style.flexBasis &&
                      (e.flexStyle.main =
                        e.style.flexBasis +
                        e.flexStyle.mainInnerBefore +
                        e.flexStyle.mainInnerAfter +
                        e.flexStyle.mainBorderBefore +
                        e.flexStyle.mainBorderAfter),
                    (e.flexStyle.mainOuter = e.flexStyle.main),
                    (e.flexStyle.crossOuter = e.flexStyle.cross),
                    "auto" === e.flexStyle.mainOuter &&
                      (e.flexStyle.mainOuter = e.flexStyle.mainOffset),
                    "auto" === e.flexStyle.crossOuter &&
                      (e.flexStyle.crossOuter = e.flexStyle.crossOffset),
                    "number" == typeof e.flexStyle.mainBefore &&
                      (e.flexStyle.mainOuter += e.flexStyle.mainBefore),
                    "number" == typeof e.flexStyle.mainAfter &&
                      (e.flexStyle.mainOuter += e.flexStyle.mainAfter),
                    "number" == typeof e.flexStyle.crossBefore &&
                      (e.flexStyle.crossOuter += e.flexStyle.crossBefore),
                    "number" == typeof e.flexStyle.crossAfter &&
                      (e.flexStyle.crossOuter += e.flexStyle.crossAfter);
                };
              },
              {},
            ],
            4: [
              function (e, t, n) {
                var r = e("../reduce");
                t.exports = function (e) {
                  if (e.mainSpace > 0) {
                    var t = r(
                      e.children,
                      function (e, t) {
                        return e + parseFloat(t.style.flexGrow);
                      },
                      0
                    );
                    t > 0 &&
                      ((e.main = r(
                        e.children,
                        function (n, r) {
                          return (
                            "auto" === r.flexStyle.main
                              ? (r.flexStyle.main =
                                  r.flexStyle.mainOffset +
                                  (parseFloat(r.style.flexGrow) / t) *
                                    e.mainSpace)
                              : (r.flexStyle.main +=
                                  (parseFloat(r.style.flexGrow) / t) *
                                  e.mainSpace),
                            (r.flexStyle.mainOuter =
                              r.flexStyle.main +
                              r.flexStyle.mainBefore +
                              r.flexStyle.mainAfter),
                            n + r.flexStyle.mainOuter
                          );
                        },
                        0
                      )),
                      (e.mainSpace = 0));
                  }
                };
              },
              { "../reduce": 12 },
            ],
            5: [
              function (e, t, n) {
                var r = e("../reduce");
                t.exports = function (e) {
                  if (e.mainSpace < 0) {
                    var t = r(
                      e.children,
                      function (e, t) {
                        return e + parseFloat(t.style.flexShrink);
                      },
                      0
                    );
                    t > 0 &&
                      ((e.main = r(
                        e.children,
                        function (n, r) {
                          return (
                            (r.flexStyle.main +=
                              (parseFloat(r.style.flexShrink) / t) *
                              e.mainSpace),
                            (r.flexStyle.mainOuter =
                              r.flexStyle.main +
                              r.flexStyle.mainBefore +
                              r.flexStyle.mainAfter),
                            n + r.flexStyle.mainOuter
                          );
                        },
                        0
                      )),
                      (e.mainSpace = 0));
                  }
                };
              },
              { "../reduce": 12 },
            ],
            6: [
              function (e, t, n) {
                var r = e("../reduce");
                t.exports = function (e) {
                  var t;
                  e.lines = [(t = { main: 0, cross: 0, children: [] })];
                  for (var n, i = -1; (n = e.children[++i]); )
                    "nowrap" === e.style.flexWrap ||
                    0 === t.children.length ||
                    "auto" === e.flexStyle.main ||
                    e.flexStyle.main -
                      e.flexStyle.mainInnerBefore -
                      e.flexStyle.mainInnerAfter -
                      e.flexStyle.mainBorderBefore -
                      e.flexStyle.mainBorderAfter >=
                      t.main + n.flexStyle.mainOuter
                      ? ((t.main += n.flexStyle.mainOuter),
                        (t.cross = Math.max(t.cross, n.flexStyle.crossOuter)))
                      : e.lines.push(
                          (t = {
                            main: n.flexStyle.mainOuter,
                            cross: n.flexStyle.crossOuter,
                            children: [],
                          })
                        ),
                      t.children.push(n);
                  (e.flexStyle.mainLines = r(
                    e.lines,
                    function (e, t) {
                      return Math.max(e, t.main);
                    },
                    0
                  )),
                    (e.flexStyle.crossLines = r(
                      e.lines,
                      function (e, t) {
                        return e + t.cross;
                      },
                      0
                    )),
                    "auto" === e.flexStyle.main &&
                      (e.flexStyle.main = Math.max(
                        e.flexStyle.mainOffset,
                        e.flexStyle.mainLines +
                          e.flexStyle.mainInnerBefore +
                          e.flexStyle.mainInnerAfter +
                          e.flexStyle.mainBorderBefore +
                          e.flexStyle.mainBorderAfter
                      )),
                    "auto" === e.flexStyle.cross &&
                      (e.flexStyle.cross = Math.max(
                        e.flexStyle.crossOffset,
                        e.flexStyle.crossLines +
                          e.flexStyle.crossInnerBefore +
                          e.flexStyle.crossInnerAfter +
                          e.flexStyle.crossBorderBefore +
                          e.flexStyle.crossBorderAfter
                      )),
                    (e.flexStyle.crossSpace =
                      e.flexStyle.cross -
                      e.flexStyle.crossInnerBefore -
                      e.flexStyle.crossInnerAfter -
                      e.flexStyle.crossBorderBefore -
                      e.flexStyle.crossBorderAfter -
                      e.flexStyle.crossLines),
                    (e.flexStyle.mainOuter =
                      e.flexStyle.main +
                      e.flexStyle.mainBefore +
                      e.flexStyle.mainAfter),
                    (e.flexStyle.crossOuter =
                      e.flexStyle.cross +
                      e.flexStyle.crossBefore +
                      e.flexStyle.crossAfter);
                };
              },
              { "../reduce": 12 },
            ],
            7: [
              function (e, t, n) {
                function r(t) {
                  for (var n, r = -1; (n = t.children[++r]); )
                    e("./flex-direction")(n, t.style.flexDirection);
                  e("./flex-direction")(t, t.style.flexDirection),
                    e("./order")(t),
                    e("./flexbox-lines")(t),
                    e("./align-content")(t),
                    (r = -1);
                  for (var i; (i = t.lines[++r]); )
                    (i.mainSpace =
                      t.flexStyle.main -
                      t.flexStyle.mainInnerBefore -
                      t.flexStyle.mainInnerAfter -
                      t.flexStyle.mainBorderBefore -
                      t.flexStyle.mainBorderAfter -
                      i.main),
                      e("./flex-grow")(i),
                      e("./flex-shrink")(i),
                      e("./margin-main")(i),
                      e("./margin-cross")(i),
                      e("./justify-content")(i, t.style.justifyContent, t);
                  e("./align-items")(t);
                }
                t.exports = r;
              },
              {
                "./align-content": 1,
                "./align-items": 2,
                "./flex-direction": 3,
                "./flex-grow": 4,
                "./flex-shrink": 5,
                "./flexbox-lines": 6,
                "./justify-content": 8,
                "./margin-cross": 9,
                "./margin-main": 10,
                "./order": 11,
              },
            ],
            8: [
              function (e, t, n) {
                t.exports = function (e, t, n) {
                  var r,
                    i,
                    o,
                    s = n.flexStyle.mainInnerBefore,
                    a = -1;
                  if ("flex-end" === t)
                    for (r = e.mainSpace, r += s; (o = e.children[++a]); )
                      (o.flexStyle.mainStart = r), (r += o.flexStyle.mainOuter);
                  else if ("center" === t)
                    for (r = e.mainSpace / 2, r += s; (o = e.children[++a]); )
                      (o.flexStyle.mainStart = r), (r += o.flexStyle.mainOuter);
                  else if ("space-between" === t)
                    for (
                      i = e.mainSpace / (e.children.length - 1), r = 0, r += s;
                      (o = e.children[++a]);

                    )
                      (o.flexStyle.mainStart = r),
                        (r += o.flexStyle.mainOuter + i);
                  else if ("space-around" === t)
                    for (
                      r = (i = (2 * e.mainSpace) / (2 * e.children.length)) / 2,
                        r += s;
                      (o = e.children[++a]);

                    )
                      (o.flexStyle.mainStart = r),
                        (r += o.flexStyle.mainOuter + i);
                  else
                    for (r = 0, r += s; (o = e.children[++a]); )
                      (o.flexStyle.mainStart = r), (r += o.flexStyle.mainOuter);
                };
              },
              {},
            ],
            9: [
              function (e, t, n) {
                t.exports = function (e) {
                  for (var t, n = -1; (t = e.children[++n]); ) {
                    var r = 0;
                    "auto" === t.flexStyle.crossBefore && ++r,
                      "auto" === t.flexStyle.crossAfter && ++r;
                    var i = e.cross - t.flexStyle.crossOuter;
                    "auto" === t.flexStyle.crossBefore &&
                      (t.flexStyle.crossBefore = i / r),
                      "auto" === t.flexStyle.crossAfter &&
                        (t.flexStyle.crossAfter = i / r),
                      "auto" === t.flexStyle.cross
                        ? (t.flexStyle.crossOuter =
                            t.flexStyle.crossOffset +
                            t.flexStyle.crossBefore +
                            t.flexStyle.crossAfter)
                        : (t.flexStyle.crossOuter =
                            t.flexStyle.cross +
                            t.flexStyle.crossBefore +
                            t.flexStyle.crossAfter);
                  }
                };
              },
              {},
            ],
            10: [
              function (e, t, n) {
                t.exports = function (e) {
                  for (var t, n = 0, r = -1; (t = e.children[++r]); )
                    "auto" === t.flexStyle.mainBefore && ++n,
                      "auto" === t.flexStyle.mainAfter && ++n;
                  if (n > 0) {
                    for (r = -1; (t = e.children[++r]); )
                      "auto" === t.flexStyle.mainBefore &&
                        (t.flexStyle.mainBefore = e.mainSpace / n),
                        "auto" === t.flexStyle.mainAfter &&
                          (t.flexStyle.mainAfter = e.mainSpace / n),
                        "auto" === t.flexStyle.main
                          ? (t.flexStyle.mainOuter =
                              t.flexStyle.mainOffset +
                              t.flexStyle.mainBefore +
                              t.flexStyle.mainAfter)
                          : (t.flexStyle.mainOuter =
                              t.flexStyle.main +
                              t.flexStyle.mainBefore +
                              t.flexStyle.mainAfter);
                    e.mainSpace = 0;
                  }
                };
              },
              {},
            ],
            11: [
              function (e, t, n) {
                var r = /^(column|row)-reverse$/;
                t.exports = function (e) {
                  e.children.sort(function (e, t) {
                    return e.style.order - t.style.order || e.index - t.index;
                  }),
                    r.test(e.style.flexDirection) && e.children.reverse();
                };
              },
              {},
            ],
            12: [
              function (e, t, n) {
                function r(e, t, n) {
                  for (var r = e.length, i = -1; ++i < r; )
                    i in e && (n = t(n, e[i], i));
                  return n;
                }
                t.exports = r;
              },
              {},
            ],
            13: [
              function (e, t, n) {
                function r(e) {
                  a(s(e));
                }
                var i = e("./read"),
                  o = e("./write"),
                  s = e("./readAll"),
                  a = e("./writeAll");
                (t.exports = r),
                  (t.exports.read = i),
                  (t.exports.write = o),
                  (t.exports.readAll = s),
                  (t.exports.writeAll = a);
              },
              {
                "./read": 15,
                "./readAll": 16,
                "./write": 17,
                "./writeAll": 18,
              },
            ],
            14: [
              function (e, t, n) {
                function r(e, t) {
                  var n = String(e).match(o);
                  if (!n) return e;
                  var r = n[1],
                    s = n[2];
                  return "px" === s
                    ? 1 * r
                    : "cm" === s
                    ? 0.3937 * r * 96
                    : "in" === s
                    ? 96 * r
                    : "mm" === s
                    ? (0.3937 * r * 96) / 10
                    : "pc" === s
                    ? (12 * r * 96) / 72
                    : "pt" === s
                    ? (96 * r) / 72
                    : "rem" === s
                    ? 16 * r
                    : i(e, t);
                }
                function i(e, t) {
                  (s.style.cssText =
                    "border:none!important;clip:rect(0 0 0 0)!important;display:block!important;font-size:1em!important;height:0!important;margin:0!important;padding:0!important;position:relative!important;width:" +
                    e +
                    "!important"),
                    t.parentNode.insertBefore(s, t.nextSibling);
                  var n = s.offsetWidth;
                  return t.parentNode.removeChild(s), n;
                }
                t.exports = r;
                var o = /^([-+]?\d*\.?\d+)(%|[a-z]+)$/,
                  s = document.createElement("div");
              },
              {},
            ],
            15: [
              function (e, t, n) {
                function r(e) {
                  var t = {
                    alignContent: "stretch",
                    alignItems: "stretch",
                    alignSelf: "auto",
                    borderBottomWidth: 0,
                    borderLeftWidth: 0,
                    borderRightWidth: 0,
                    borderTopWidth: 0,
                    boxSizing: "content-box",
                    display: "inline",
                    flexBasis: "auto",
                    flexDirection: "row",
                    flexGrow: 0,
                    flexShrink: 1,
                    flexWrap: "nowrap",
                    justifyContent: "flex-start",
                    height: "auto",
                    marginTop: 0,
                    marginRight: 0,
                    marginLeft: 0,
                    marginBottom: 0,
                    paddingTop: 0,
                    paddingRight: 0,
                    paddingLeft: 0,
                    paddingBottom: 0,
                    maxHeight: "none",
                    maxWidth: "none",
                    minHeight: 0,
                    minWidth: 0,
                    order: 0,
                    position: "static",
                    width: "auto",
                  };
                  if (e instanceof Element) {
                    var n = e.hasAttribute("data-style"),
                      r = n
                        ? e.getAttribute("data-style")
                        : e.getAttribute("style") || "";
                    n || e.setAttribute("data-style", r),
                      s(
                        t,
                        (window.getComputedStyle && getComputedStyle(e)) || {}
                      );
                    var a = e.currentStyle || {};
                    for (var c in (i(t, a), o(t, r), t)) t[c] = l(t[c], e);
                    var u = e.getBoundingClientRect();
                    (t.offsetHeight = u.height || e.offsetHeight),
                      (t.offsetWidth = u.width || e.offsetWidth);
                  }
                  return { element: e, style: t };
                }
                function i(e, t) {
                  for (var n in e)
                    if (n in t) e[n] = t[n];
                    else {
                      var r = n.replace(/[A-Z]/g, "-$&").toLowerCase();
                      r in t && (e[n] = t[r]);
                    }
                  "-js-display" in t && (e.display = t["-js-display"]);
                }
                function o(e, t) {
                  for (var n; (n = a.exec(t)); )
                    e[
                      n[1].toLowerCase().replace(/-[a-z]/g, function (e) {
                        return e.slice(1).toUpperCase();
                      })
                    ] = n[2];
                }
                function s(e, t) {
                  for (var n in e)
                    n in t &&
                      !/^(alignSelf|height|width)$/.test(n) &&
                      (e[n] = t[n]);
                }
                t.exports = r;
                var a = /([^\s:;]+)\s*:\s*([^;]+?)\s*(;|$)/g,
                  l = e("./getComputedLength");
              },
              { "./getComputedLength": 14 },
            ],
            16: [
              function (e, t, n) {
                function r(e) {
                  var t = [];
                  return i(e, t), t;
                }
                function i(e, t) {
                  for (
                    var n, r = o(e), a = [], l = -1;
                    (n = e.childNodes[++l]);

                  ) {
                    var c = 3 === n.nodeType && !/^\s*$/.test(n.nodeValue);
                    if (r && c) {
                      var u = n;
                      (n = e.insertBefore(
                        document.createElement("flex-item"),
                        u
                      )).appendChild(u);
                    }
                    if (n instanceof Element) {
                      var f = i(n, t);
                      if (r) {
                        var d = n.style;
                        (d.display = "inline-block"),
                          (d.position = "absolute"),
                          (f.style = s(n).style),
                          a.push(f);
                      }
                    }
                  }
                  var p = { element: e, children: a };
                  return r && ((p.style = s(e).style), t.push(p)), p;
                }
                function o(e) {
                  var t = e instanceof Element,
                    n = t && e.getAttribute("data-style"),
                    r = t && e.currentStyle && e.currentStyle["-js-display"];
                  return a.test(n) || l.test(r);
                }
                t.exports = r;
                var s = e("../read"),
                  a = /(^|;)\s*display\s*:\s*(inline-)?flex\s*(;|$)/i,
                  l = /^(inline-)?flex$/i;
              },
              { "../read": 15 },
            ],
            17: [
              function (e, t, n) {
                function r(e) {
                  o(e);
                  var t = e.element.style,
                    n =
                      "inline" === e.mainAxis
                        ? ["main", "cross"]
                        : ["cross", "main"];
                  (t.boxSizing = "content-box"),
                    (t.display = "block"),
                    (t.position = "relative"),
                    (t.width = i(
                      e.flexStyle[n[0]] -
                        e.flexStyle[n[0] + "InnerBefore"] -
                        e.flexStyle[n[0] + "InnerAfter"] -
                        e.flexStyle[n[0] + "BorderBefore"] -
                        e.flexStyle[n[0] + "BorderAfter"]
                    )),
                    (t.height = i(
                      e.flexStyle[n[1]] -
                        e.flexStyle[n[1] + "InnerBefore"] -
                        e.flexStyle[n[1] + "InnerAfter"] -
                        e.flexStyle[n[1] + "BorderBefore"] -
                        e.flexStyle[n[1] + "BorderAfter"]
                    ));
                  for (var r, s = -1; (r = e.children[++s]); ) {
                    var a = r.element.style,
                      l =
                        "inline" === r.mainAxis
                          ? ["main", "cross"]
                          : ["cross", "main"];
                    (a.boxSizing = "content-box"),
                      (a.display = "block"),
                      (a.position = "absolute"),
                      "auto" !== r.flexStyle[l[0]] &&
                        (a.width = i(
                          r.flexStyle[l[0]] -
                            r.flexStyle[l[0] + "InnerBefore"] -
                            r.flexStyle[l[0] + "InnerAfter"] -
                            r.flexStyle[l[0] + "BorderBefore"] -
                            r.flexStyle[l[0] + "BorderAfter"]
                        )),
                      "auto" !== r.flexStyle[l[1]] &&
                        (a.height = i(
                          r.flexStyle[l[1]] -
                            r.flexStyle[l[1] + "InnerBefore"] -
                            r.flexStyle[l[1] + "InnerAfter"] -
                            r.flexStyle[l[1] + "BorderBefore"] -
                            r.flexStyle[l[1] + "BorderAfter"]
                        )),
                      (a.top = i(r.flexStyle[l[1] + "Start"])),
                      (a.left = i(r.flexStyle[l[0] + "Start"])),
                      (a.marginTop = i(r.flexStyle[l[1] + "Before"])),
                      (a.marginRight = i(r.flexStyle[l[0] + "After"])),
                      (a.marginBottom = i(r.flexStyle[l[1] + "After"])),
                      (a.marginLeft = i(r.flexStyle[l[0] + "Before"]));
                  }
                }
                function i(e) {
                  return "string" == typeof e ? e : Math.max(e, 0) + "px";
                }
                t.exports = r;
                var o = e("../flexbox");
              },
              { "../flexbox": 7 },
            ],
            18: [
              function (e, t, n) {
                function r(e) {
                  for (var t, n = -1; (t = e[++n]); ) i(t);
                }
                t.exports = r;
                var i = e("../write");
              },
              { "../write": 17 },
            ],
          },
          {},
          [13]
        )(13);
      },
      31: function (e, t, n) {
        var r, i, o, s;
        /*!
         * @fileOverview TouchSwipe - jQuery Plugin
         * @version 1.6.18
         *
         * @author Matt Bryson http://www.github.com/mattbryson
         * @see https://github.com/mattbryson/TouchSwipe-Jquery-Plugin
         * @see http://labs.rampinteractive.co.uk/touchSwipe/
         * @see http://plugins.jquery.com/project/touchSwipe
         * @license
         * Copyright (c) 2010-2015 Matt Bryson
         * Dual licensed under the MIT or GPL Version 2 licenses.
         *
         */ (s = function (e) {
          "use strict";
          function t(t) {
            return (
              !t ||
                void 0 !== t.allowPageScroll ||
                (void 0 === t.swipe && void 0 === t.swipeStatus) ||
                (t.allowPageScroll = c),
              void 0 !== t.click && void 0 === t.tap && (t.tap = t.click),
              t || (t = {}),
              (t = e.extend({}, e.fn.swipe.defaults, t)),
              this.each(function () {
                var r = e(this),
                  i = r.data(k);
                i || ((i = new n(this, t)), r.data(k, i));
              })
            );
          }
          function n(t, n) {
            function A(t) {
              if (
                !(
                  !0 === Se.data(k + "_intouch") ||
                  e(t.target).closest(n.excludedElements, Se).length > 0
                )
              ) {
                var a = t.originalEvent ? t.originalEvent : t;
                if (
                  !a.pointerType ||
                  "mouse" != a.pointerType ||
                  0 != n.fallbackToMouseEvents
                ) {
                  var l,
                    c = a.touches,
                    u = c ? c[0] : a;
                  return (
                    (_e = w),
                    c
                      ? (Ce = c.length)
                      : !1 !== n.preventDefaultEvents && t.preventDefault(),
                    (de = 0),
                    (pe = null),
                    (he = null),
                    (we = null),
                    (me = 0),
                    (ge = 0),
                    (ve = 0),
                    (ye = 1),
                    (be = 0),
                    ((f = {})[r] = te(r)),
                    (f[i] = te(i)),
                    (f[o] = te(o)),
                    (f[s] = te(s)),
                    (xe = f),
                    K(),
                    Z(0, u),
                    !c || Ce === n.fingers || n.fingers === y || W()
                      ? ((Ee = oe()),
                        2 == Ce &&
                          (Z(1, c[1]),
                          (ge = ve = re(Te[0].start, Te[1].start))),
                        (n.swipeStatus || n.pinchStatus) && (l = B(a, _e)))
                      : (l = !1),
                    !1 === l
                      ? (B(a, (_e = _)), l)
                      : (n.hold &&
                          (Ne = setTimeout(
                            e.proxy(function () {
                              Se.trigger("hold", [a.target]),
                                n.hold && (l = n.hold.call(Se, a, a.target));
                            }, this),
                            n.longTapThreshold
                          )),
                        G(!0),
                        null)
                  );
                }
              }
              var f;
            }
            function O(t) {
              var f,
                d,
                p,
                h,
                m,
                b,
                w = t.originalEvent ? t.originalEvent : t;
              if (_e !== S && _e !== _ && !X()) {
                var C,
                  T = w.touches,
                  E = J(T ? T[0] : w);
                if (
                  ((ke = oe()),
                  T && (Ce = T.length),
                  n.hold && clearTimeout(Ne),
                  (_e = x),
                  2 == Ce &&
                    (0 == ge
                      ? (Z(1, T[1]), (ge = ve = re(Te[0].start, Te[1].start)))
                      : (J(T[1]),
                        (ve = re(Te[0].end, Te[1].end)),
                        Te[0].end,
                        Te[1].end,
                        (we = 1 > ye ? l : a)),
                    (ye = ((ve / ge) * 1).toFixed(2)),
                    (be = Math.abs(ge - ve))),
                  Ce === n.fingers || n.fingers === y || !T || W())
                ) {
                  if (
                    ((pe = ie(E.start, E.end)),
                    (function (e, t) {
                      if (!1 !== n.preventDefaultEvents)
                        if (n.allowPageScroll === c) e.preventDefault();
                        else {
                          var a = n.allowPageScroll === u;
                          switch (t) {
                            case r:
                              ((n.swipeLeft && a) ||
                                (!a && n.allowPageScroll != g)) &&
                                e.preventDefault();
                              break;
                            case i:
                              ((n.swipeRight && a) ||
                                (!a && n.allowPageScroll != g)) &&
                                e.preventDefault();
                              break;
                            case o:
                              ((n.swipeUp && a) ||
                                (!a && n.allowPageScroll != v)) &&
                                e.preventDefault();
                              break;
                            case s:
                              ((n.swipeDown && a) ||
                                (!a && n.allowPageScroll != v)) &&
                                e.preventDefault();
                          }
                        }
                    })(t, (he = ie(E.last, E.end))),
                    (m = E.start),
                    (b = E.end),
                    (de = Math.round(
                      Math.sqrt(Math.pow(b.x - m.x, 2) + Math.pow(b.y - m.y, 2))
                    )),
                    (me = ne()),
                    (h = de),
                    (p = pe) != c &&
                      ((h = Math.max(h, ee(p))), (xe[p].distance = h)),
                    (C = B(w, _e)),
                    !n.triggerOnTouchEnd || n.triggerOnTouchLeave)
                  ) {
                    var k = !0;
                    if (n.triggerOnTouchLeave) {
                      var A = {
                        left: (d = (f = e((f = this))).offset()).left,
                        right: d.left + f.outerWidth(),
                        top: d.top,
                        bottom: d.top + f.outerHeight(),
                      };
                      k = (function (e, t) {
                        return (
                          e.x > t.left &&
                          e.x < t.right &&
                          e.y > t.top &&
                          e.y < t.bottom
                        );
                      })(E.end, A);
                    }
                    !n.triggerOnTouchEnd && k
                      ? (_e = j(x))
                      : n.triggerOnTouchLeave && !k && (_e = j(S)),
                      (_e != _ && _e != S) || B(w, _e);
                  }
                } else B(w, (_e = _));
                !1 === C && B(w, (_e = _));
              }
            }
            function I(e) {
              var t = e.originalEvent ? e.originalEvent : e,
                r = t.touches;
              if (r) {
                if (r.length && !X())
                  return (
                    (function (e) {
                      (Ae = oe()), (Oe = e.touches.length + 1);
                    })(t),
                    !0
                  );
                if (r.length && X()) return !0;
              }
              return (
                X() && (Ce = Oe),
                (ke = oe()),
                (me = ne()),
                V() || !L()
                  ? B(t, (_e = _))
                  : n.triggerOnTouchEnd ||
                    (!1 === n.triggerOnTouchEnd && _e === x)
                  ? (!1 !== n.preventDefaultEvents &&
                      !1 !== e.cancelable &&
                      e.preventDefault(),
                    B(t, (_e = S)))
                  : !n.triggerOnTouchEnd && U()
                  ? F(t, (_e = S), p)
                  : _e === x && B(t, (_e = _)),
                G(!1),
                null
              );
            }
            function P() {
              (Ce = 0),
                (ke = 0),
                (Ee = 0),
                (ge = 0),
                (ve = 0),
                (ye = 1),
                K(),
                G(!1);
            }
            function N(e) {
              var t = e.originalEvent ? e.originalEvent : e;
              n.triggerOnTouchLeave && B(t, (_e = j(S)));
            }
            function D() {
              Se.off(ae, A),
                Se.off(fe, P),
                Se.off(le, O),
                Se.off(ce, I),
                ue && Se.off(ue, N),
                G(!1);
            }
            function j(e) {
              var t = e,
                r = M(),
                i = L(),
                o = V();
              return (
                !r || o
                  ? (t = _)
                  : !i ||
                    e != x ||
                    (n.triggerOnTouchEnd && !n.triggerOnTouchLeave)
                  ? !i && e == S && n.triggerOnTouchLeave && (t = _)
                  : (t = S),
                t
              );
            }
            function B(e, t) {
              var r,
                i = e.touches;
              return (
                (!(!R() || !q()) || q()) && (r = F(e, t, f)),
                (!(!H() || !W()) || W()) && !1 !== r && (r = F(e, t, d)),
                Y() && Q() && !1 !== r
                  ? (r = F(e, t, h))
                  : me > n.longTapThreshold && b > de && n.longTap && !1 !== r
                  ? (r = F(e, t, m))
                  : !(
                      (1 !== Ce && C) ||
                      !(isNaN(de) || de < n.threshold) ||
                      !U()
                    ) &&
                    !1 !== r &&
                    (r = F(e, t, p)),
                t === _ && P(),
                t === S && ((i && i.length) || P()),
                r
              );
            }
            function F(t, c, u) {
              var g;
              if (u == f) {
                if (
                  (Se.trigger("swipeStatus", [
                    c,
                    pe || null,
                    de || 0,
                    me || 0,
                    Ce,
                    Te,
                    he,
                  ]),
                  n.swipeStatus &&
                    !1 ===
                      (g = n.swipeStatus.call(
                        Se,
                        t,
                        c,
                        pe || null,
                        de || 0,
                        me || 0,
                        Ce,
                        Te,
                        he
                      )))
                )
                  return !1;
                if (c == S && R()) {
                  if (
                    (clearTimeout(Pe),
                    clearTimeout(Ne),
                    Se.trigger("swipe", [pe, de, me, Ce, Te, he]),
                    n.swipe &&
                      !1 === (g = n.swipe.call(Se, t, pe, de, me, Ce, Te, he)))
                  )
                    return !1;
                  switch (pe) {
                    case r:
                      Se.trigger("swipeLeft", [pe, de, me, Ce, Te, he]),
                        n.swipeLeft &&
                          (g = n.swipeLeft.call(Se, t, pe, de, me, Ce, Te, he));
                      break;
                    case i:
                      Se.trigger("swipeRight", [pe, de, me, Ce, Te, he]),
                        n.swipeRight &&
                          (g = n.swipeRight.call(
                            Se,
                            t,
                            pe,
                            de,
                            me,
                            Ce,
                            Te,
                            he
                          ));
                      break;
                    case o:
                      Se.trigger("swipeUp", [pe, de, me, Ce, Te, he]),
                        n.swipeUp &&
                          (g = n.swipeUp.call(Se, t, pe, de, me, Ce, Te, he));
                      break;
                    case s:
                      Se.trigger("swipeDown", [pe, de, me, Ce, Te, he]),
                        n.swipeDown &&
                          (g = n.swipeDown.call(Se, t, pe, de, me, Ce, Te, he));
                  }
                }
              }
              if (u == d) {
                if (
                  (Se.trigger("pinchStatus", [
                    c,
                    we || null,
                    be || 0,
                    me || 0,
                    Ce,
                    ye,
                    Te,
                  ]),
                  n.pinchStatus &&
                    !1 ===
                      (g = n.pinchStatus.call(
                        Se,
                        t,
                        c,
                        we || null,
                        be || 0,
                        me || 0,
                        Ce,
                        ye,
                        Te
                      )))
                )
                  return !1;
                if (c == S && H())
                  switch (we) {
                    case a:
                      Se.trigger("pinchIn", [
                        we || null,
                        be || 0,
                        me || 0,
                        Ce,
                        ye,
                        Te,
                      ]),
                        n.pinchIn &&
                          (g = n.pinchIn.call(
                            Se,
                            t,
                            we || null,
                            be || 0,
                            me || 0,
                            Ce,
                            ye,
                            Te
                          ));
                      break;
                    case l:
                      Se.trigger("pinchOut", [
                        we || null,
                        be || 0,
                        me || 0,
                        Ce,
                        ye,
                        Te,
                      ]),
                        n.pinchOut &&
                          (g = n.pinchOut.call(
                            Se,
                            t,
                            we || null,
                            be || 0,
                            me || 0,
                            Ce,
                            ye,
                            Te
                          ));
                  }
              }
              return (
                u == p
                  ? (c !== _ && c !== S) ||
                    (clearTimeout(Pe),
                    clearTimeout(Ne),
                    Q() && !Y()
                      ? ((Ie = oe()),
                        (Pe = setTimeout(
                          e.proxy(function () {
                            (Ie = null),
                              Se.trigger("tap", [t.target]),
                              n.tap && (g = n.tap.call(Se, t, t.target));
                          }, this),
                          n.doubleTapThreshold
                        )))
                      : ((Ie = null),
                        Se.trigger("tap", [t.target]),
                        n.tap && (g = n.tap.call(Se, t, t.target))))
                  : u == h
                  ? (c !== _ && c !== S) ||
                    (clearTimeout(Pe),
                    clearTimeout(Ne),
                    (Ie = null),
                    Se.trigger("doubletap", [t.target]),
                    n.doubleTap && (g = n.doubleTap.call(Se, t, t.target)))
                  : u == m &&
                    ((c !== _ && c !== S) ||
                      (clearTimeout(Pe),
                      (Ie = null),
                      Se.trigger("longtap", [t.target]),
                      n.longTap && (g = n.longTap.call(Se, t, t.target)))),
                g
              );
            }
            function L() {
              var e = !0;
              return null !== n.threshold && (e = de >= n.threshold), e;
            }
            function V() {
              var e = !1;
              return (
                null !== n.cancelThreshold &&
                  null !== pe &&
                  (e = ee(pe) - de >= n.cancelThreshold),
                e
              );
            }
            function M() {
              return !(n.maxTimeThreshold && me >= n.maxTimeThreshold);
            }
            function H() {
              var e = $(),
                t = z(),
                r = null === n.pinchThreshold || be >= n.pinchThreshold;
              return e && t && r;
            }
            function W() {
              return !!(n.pinchStatus || n.pinchIn || n.pinchOut);
            }
            function R() {
              var e = M(),
                t = L(),
                n = $(),
                r = z();
              return !V() && r && n && t && e;
            }
            function q() {
              return !!(
                n.swipe ||
                n.swipeStatus ||
                n.swipeLeft ||
                n.swipeRight ||
                n.swipeUp ||
                n.swipeDown
              );
            }
            function $() {
              return Ce === n.fingers || n.fingers === y || !C;
            }
            function z() {
              return 0 !== Te[0].end.x;
            }
            function U() {
              return !!n.tap;
            }
            function Q() {
              return !!n.doubleTap;
            }
            function Y() {
              if (null == Ie) return !1;
              var e = oe();
              return Q() && e - Ie <= n.doubleTapThreshold;
            }
            function K() {
              (Ae = 0), (Oe = 0);
            }
            function X() {
              var e = !1;
              return Ae && oe() - Ae <= n.fingerReleaseThreshold && (e = !0), e;
            }
            function G(e) {
              Se &&
                (!0 === e
                  ? (Se.on(le, O), Se.on(ce, I), ue && Se.on(ue, N))
                  : (Se.off(le, O, !1),
                    Se.off(ce, I, !1),
                    ue && Se.off(ue, N, !1)),
                Se.data(k + "_intouch", !0 === e));
            }
            function Z(e, t) {
              var n = {
                start: { x: 0, y: 0 },
                last: { x: 0, y: 0 },
                end: { x: 0, y: 0 },
              };
              return (
                (n.start.x = n.last.x = n.end.x = t.pageX || t.clientX),
                (n.start.y = n.last.y = n.end.y = t.pageY || t.clientY),
                (Te[e] = n),
                n
              );
            }
            function J(e) {
              var t = void 0 !== e.identifier ? e.identifier : 0,
                n = (function (e) {
                  return Te[e] || null;
                })(t);
              return (
                null === n && (n = Z(t, e)),
                (n.last.x = n.end.x),
                (n.last.y = n.end.y),
                (n.end.x = e.pageX || e.clientX),
                (n.end.y = e.pageY || e.clientY),
                n
              );
            }
            function ee(e) {
              return xe[e] ? xe[e].distance : void 0;
            }
            function te(e) {
              return { direction: e, distance: 0 };
            }
            function ne() {
              return ke - Ee;
            }
            function re(e, t) {
              var n = Math.abs(e.x - t.x),
                r = Math.abs(e.y - t.y);
              return Math.round(Math.sqrt(n * n + r * r));
            }
            function ie(e, t) {
              if (((a = t), (n = e).x == a.x && n.y == a.y)) return c;
              var n,
                a,
                l = (function (e, t) {
                  var n = e.x - t.x,
                    r = t.y - e.y,
                    i = Math.atan2(r, n),
                    o = Math.round((180 * i) / Math.PI);
                  return 0 > o && (o = 360 - Math.abs(o)), o;
                })(e, t);
              return (45 >= l && l >= 0) || (360 >= l && l >= 315)
                ? r
                : l >= 135 && 225 >= l
                ? i
                : l > 45 && 135 > l
                ? s
                : o;
            }
            function oe() {
              return new Date().getTime();
            }
            n = e.extend({}, n);
            var se = C || E || !n.fallbackToMouseEvents,
              ae = se
                ? E
                  ? T
                    ? "MSPointerDown"
                    : "pointerdown"
                  : "touchstart"
                : "mousedown",
              le = se
                ? E
                  ? T
                    ? "MSPointerMove"
                    : "pointermove"
                  : "touchmove"
                : "mousemove",
              ce = se
                ? E
                  ? T
                    ? "MSPointerUp"
                    : "pointerup"
                  : "touchend"
                : "mouseup",
              ue = se ? (E ? "mouseleave" : null) : "mouseleave",
              fe = E
                ? T
                  ? "MSPointerCancel"
                  : "pointercancel"
                : "touchcancel",
              de = 0,
              pe = null,
              he = null,
              me = 0,
              ge = 0,
              ve = 0,
              ye = 1,
              be = 0,
              we = 0,
              xe = null,
              Se = e(t),
              _e = "start",
              Ce = 0,
              Te = {},
              Ee = 0,
              ke = 0,
              Ae = 0,
              Oe = 0,
              Ie = 0,
              Pe = null,
              Ne = null;
            try {
              Se.on(ae, A), Se.on(fe, P);
            } catch (t) {
              e.error(
                "events not supported " + ae + "," + fe + " on jQuery.swipe"
              );
            }
            (this.enable = function () {
              return this.disable(), Se.on(ae, A), Se.on(fe, P), Se;
            }),
              (this.disable = function () {
                return D(), Se;
              }),
              (this.destroy = function () {
                D(), Se.data(k, null), (Se = null);
              }),
              (this.option = function (t, r) {
                if ("object" == typeof t) n = e.extend(n, t);
                else if (void 0 !== n[t]) {
                  if (void 0 === r) return n[t];
                  n[t] = r;
                } else {
                  if (!t) return n;
                  e.error(
                    "Option " + t + " does not exist on jQuery.swipe.options"
                  );
                }
                return null;
              });
          }
          var r = "left",
            i = "right",
            o = "up",
            s = "down",
            a = "in",
            l = "out",
            c = "none",
            u = "auto",
            f = "swipe",
            d = "pinch",
            p = "tap",
            h = "doubletap",
            m = "longtap",
            g = "horizontal",
            v = "vertical",
            y = "all",
            b = 10,
            w = "start",
            x = "move",
            S = "end",
            _ = "cancel",
            C = "ontouchstart" in window,
            T = window.navigator.msPointerEnabled && !window.PointerEvent && !C,
            E =
              (window.PointerEvent || window.navigator.msPointerEnabled) && !C,
            k = "TouchSwipe";
          (e.fn.swipe = function (n) {
            var r = e(this),
              i = r.data(k);
            if (i && "string" == typeof n) {
              if (i[n])
                return i[n].apply(i, Array.prototype.slice.call(arguments, 1));
              e.error("Method " + n + " does not exist on jQuery.swipe");
            } else if (i && "object" == typeof n) i.option.apply(i, arguments);
            else if (!(i || ("object" != typeof n && n)))
              return t.apply(this, arguments);
            return r;
          }),
            (e.fn.swipe.version = "1.6.18"),
            (e.fn.swipe.defaults = {
              fingers: 1,
              threshold: 75,
              cancelThreshold: null,
              pinchThreshold: 20,
              maxTimeThreshold: null,
              fingerReleaseThreshold: 250,
              longTapThreshold: 500,
              doubleTapThreshold: 200,
              swipe: null,
              swipeLeft: null,
              swipeRight: null,
              swipeUp: null,
              swipeDown: null,
              swipeStatus: null,
              pinchIn: null,
              pinchOut: null,
              pinchStatus: null,
              click: null,
              tap: null,
              doubleTap: null,
              longTap: null,
              hold: null,
              triggerOnTouchEnd: !0,
              triggerOnTouchLeave: !1,
              allowPageScroll: "auto",
              fallbackToMouseEvents: !0,
              excludedElements: ".noSwipe",
              preventDefaultEvents: !0,
            }),
            (e.fn.swipe.phases = {
              PHASE_START: w,
              PHASE_MOVE: x,
              PHASE_END: S,
              PHASE_CANCEL: _,
            }),
            (e.fn.swipe.directions = {
              LEFT: r,
              RIGHT: i,
              UP: o,
              DOWN: s,
              IN: a,
              OUT: l,
            }),
            (e.fn.swipe.pageScroll = {
              NONE: c,
              HORIZONTAL: g,
              VERTICAL: v,
              AUTO: u,
            }),
            (e.fn.swipe.fingers = {
              ONE: 1,
              TWO: 2,
              THREE: 3,
              FOUR: 4,
              FIVE: 5,
              ALL: y,
            });
        }),
          n.amdO.jQuery
            ? ((i = [n(311)]),
              void 0 ===
                (o = "function" == typeof (r = s) ? r.apply(t, i) : r) ||
                (e.exports = o))
            : s(e.exports ? n(311) : jQuery);
      },
      895: function (e, t, n) {
        var r;
        !(function () {
          "use strict";
          var i = {
            not_string: /[^s]/,
            not_bool: /[^t]/,
            not_type: /[^T]/,
            not_primitive: /[^v]/,
            number: /[diefg]/,
            numeric_arg: /[bcdiefguxX]/,
            json: /[j]/,
            not_json: /[^j]/,
            text: /^[^\x25]+/,
            modulo: /^\x25{2}/,
            placeholder:
              /^\x25(?:([1-9]\d*)\$|\(([^)]+)\))?(\+)?(0|'[^$])?(-)?(\d+)?(?:\.(\d+))?([b-gijostTuvxX])/,
            key: /^([a-z_][a-z_\d]*)/i,
            key_access: /^\.([a-z_][a-z_\d]*)/i,
            index_access: /^\[(\d+)\]/,
            sign: /^[+-]/,
          };
          function o(e) {
            return a(c(e), arguments);
          }
          function s(e, t) {
            return o.apply(null, [e].concat(t || []));
          }
          function a(e, t) {
            var n,
              r,
              s,
              a,
              l,
              c,
              u,
              f,
              d,
              p = 1,
              h = e.length,
              m = "";
            for (r = 0; r < h; r++)
              if ("string" == typeof e[r]) m += e[r];
              else if ("object" == typeof e[r]) {
                if ((a = e[r]).keys)
                  for (n = t[p], s = 0; s < a.keys.length; s++) {
                    if (null == n)
                      throw new Error(
                        o(
                          '[sprintf] Cannot access property "%s" of undefined value "%s"',
                          a.keys[s],
                          a.keys[s - 1]
                        )
                      );
                    n = n[a.keys[s]];
                  }
                else n = a.param_no ? t[a.param_no] : t[p++];
                if (
                  (i.not_type.test(a.type) &&
                    i.not_primitive.test(a.type) &&
                    n instanceof Function &&
                    (n = n()),
                  i.numeric_arg.test(a.type) &&
                    "number" != typeof n &&
                    isNaN(n))
                )
                  throw new TypeError(
                    o("[sprintf] expecting number but found %T", n)
                  );
                switch ((i.number.test(a.type) && (f = n >= 0), a.type)) {
                  case "b":
                    n = parseInt(n, 10).toString(2);
                    break;
                  case "c":
                    n = String.fromCharCode(parseInt(n, 10));
                    break;
                  case "d":
                  case "i":
                    n = parseInt(n, 10);
                    break;
                  case "j":
                    n = JSON.stringify(
                      n,
                      null,
                      a.width ? parseInt(a.width) : 0
                    );
                    break;
                  case "e":
                    n = a.precision
                      ? parseFloat(n).toExponential(a.precision)
                      : parseFloat(n).toExponential();
                    break;
                  case "f":
                    n = a.precision
                      ? parseFloat(n).toFixed(a.precision)
                      : parseFloat(n);
                    break;
                  case "g":
                    n = a.precision
                      ? String(Number(n.toPrecision(a.precision)))
                      : parseFloat(n);
                    break;
                  case "o":
                    n = (parseInt(n, 10) >>> 0).toString(8);
                    break;
                  case "s":
                    (n = String(n)),
                      (n = a.precision ? n.substring(0, a.precision) : n);
                    break;
                  case "t":
                    (n = String(!!n)),
                      (n = a.precision ? n.substring(0, a.precision) : n);
                    break;
                  case "T":
                    (n = Object.prototype.toString
                      .call(n)
                      .slice(8, -1)
                      .toLowerCase()),
                      (n = a.precision ? n.substring(0, a.precision) : n);
                    break;
                  case "u":
                    n = parseInt(n, 10) >>> 0;
                    break;
                  case "v":
                    (n = n.valueOf()),
                      (n = a.precision ? n.substring(0, a.precision) : n);
                    break;
                  case "x":
                    n = (parseInt(n, 10) >>> 0).toString(16);
                    break;
                  case "X":
                    n = (parseInt(n, 10) >>> 0).toString(16).toUpperCase();
                }
                i.json.test(a.type)
                  ? (m += n)
                  : (!i.number.test(a.type) || (f && !a.sign)
                      ? (d = "")
                      : ((d = f ? "+" : "-"),
                        (n = n.toString().replace(i.sign, ""))),
                    (c = a.pad_char
                      ? "0" === a.pad_char
                        ? "0"
                        : a.pad_char.charAt(1)
                      : " "),
                    (u = a.width - (d + n).length),
                    (l = a.width && u > 0 ? c.repeat(u) : ""),
                    (m += a.align
                      ? d + n + l
                      : "0" === c
                      ? d + l + n
                      : l + d + n));
              }
            return m;
          }
          var l = Object.create(null);
          function c(e) {
            if (l[e]) return l[e];
            for (var t, n = e, r = [], o = 0; n; ) {
              if (null !== (t = i.text.exec(n))) r.push(t[0]);
              else if (null !== (t = i.modulo.exec(n))) r.push("%");
              else {
                if (null === (t = i.placeholder.exec(n)))
                  throw new SyntaxError("[sprintf] unexpected placeholder");
                if (t[2]) {
                  o |= 1;
                  var s = [],
                    a = t[2],
                    c = [];
                  if (null === (c = i.key.exec(a)))
                    throw new SyntaxError(
                      "[sprintf] failed to parse named argument key"
                    );
                  for (s.push(c[1]); "" !== (a = a.substring(c[0].length)); )
                    if (null !== (c = i.key_access.exec(a))) s.push(c[1]);
                    else {
                      if (null === (c = i.index_access.exec(a)))
                        throw new SyntaxError(
                          "[sprintf] failed to parse named argument key"
                        );
                      s.push(c[1]);
                    }
                  t[2] = s;
                } else o |= 2;
                if (3 === o)
                  throw new Error(
                    "[sprintf] mixing positional and named placeholders is not (yet) supported"
                  );
                r.push({
                  placeholder: t[0],
                  param_no: t[1],
                  keys: t[2],
                  sign: t[3],
                  pad_char: t[4],
                  align: t[5],
                  width: t[6],
                  precision: t[7],
                  type: t[8],
                });
              }
              n = n.substring(t[0].length);
            }
            return (l[e] = r);
          }
          (t.sprintf = o),
            (t.vsprintf = s),
            "undefined" != typeof window &&
              ((window.sprintf = o),
              (window.vsprintf = s),
              void 0 ===
                (r = function () {
                  return { sprintf: o, vsprintf: s };
                }.call(t, n, t, e)) || (e.exports = r));
        })();
      },
      992: function (e, t) {
        var n, r, i;
        /*! tether 1.4.7 */ (r = []),
          (n = function () {
            "use strict";
            var e = (function () {
              function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                  var r = t[n];
                  (r.enumerable = r.enumerable || !1),
                    (r.configurable = !0),
                    "value" in r && (r.writable = !0),
                    Object.defineProperty(e, r.key, r);
                }
              }
              return function (t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t;
              };
            })();
            function t(e, t) {
              if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
            }
            var n = void 0;
            void 0 === n && (n = { modules: [] });
            var r = null;
            function i(e) {
              var t = e.getBoundingClientRect(),
                n = {};
              for (var r in t) n[r] = t[r];
              try {
                if (e.ownerDocument !== document) {
                  var o = e.ownerDocument.defaultView.frameElement;
                  if (o) {
                    var s = i(o);
                    (n.top += s.top),
                      (n.bottom += s.top),
                      (n.left += s.left),
                      (n.right += s.left);
                  }
                }
              } catch (e) {}
              return n;
            }
            function o(e) {
              var t = (getComputedStyle(e) || {}).position,
                n = [];
              if ("fixed" === t) return [e];
              for (var r = e; (r = r.parentNode) && r && 1 === r.nodeType; ) {
                var i = void 0;
                try {
                  i = getComputedStyle(r);
                } catch (e) {}
                if (null == i) return n.push(r), n;
                var o = i,
                  s = o.overflow,
                  a = o.overflowX,
                  l = o.overflowY;
                /(auto|scroll|overlay)/.test(s + l + a) &&
                  ("absolute" !== t ||
                    ["relative", "absolute", "fixed"].indexOf(i.position) >=
                      0) &&
                  n.push(r);
              }
              return (
                n.push(e.ownerDocument.body),
                e.ownerDocument !== document &&
                  n.push(e.ownerDocument.defaultView),
                n
              );
            }
            var s,
              a =
                ((s = 0),
                function () {
                  return ++s;
                }),
              l = {},
              c = function () {
                var e = r;
                (e && document.body.contains(e)) ||
                  ((e = document.createElement("div")).setAttribute(
                    "data-tether-id",
                    a()
                  ),
                  m(e.style, { top: 0, left: 0, position: "absolute" }),
                  document.body.appendChild(e),
                  (r = e));
                var t = e.getAttribute("data-tether-id");
                return (
                  void 0 === l[t] &&
                    ((l[t] = i(e)),
                    _(function () {
                      delete l[t];
                    })),
                  l[t]
                );
              };
            function u() {
              r && document.body.removeChild(r), (r = null);
            }
            function f(e) {
              var t = void 0;
              e === document
                ? ((t = document), (e = document.documentElement))
                : (t = e.ownerDocument);
              var n = t.documentElement,
                r = i(e),
                o = c();
              return (
                (r.top -= o.top),
                (r.left -= o.left),
                void 0 === r.width &&
                  (r.width = document.body.scrollWidth - r.left - r.right),
                void 0 === r.height &&
                  (r.height = document.body.scrollHeight - r.top - r.bottom),
                (r.top = r.top - n.clientTop),
                (r.left = r.left - n.clientLeft),
                (r.right = t.body.clientWidth - r.width - r.left),
                (r.bottom = t.body.clientHeight - r.height - r.top),
                r
              );
            }
            function d(e) {
              return e.offsetParent || document.documentElement;
            }
            var p = null;
            function h() {
              if (p) return p;
              var e = document.createElement("div");
              (e.style.width = "100%"), (e.style.height = "200px");
              var t = document.createElement("div");
              m(t.style, {
                position: "absolute",
                top: 0,
                left: 0,
                pointerEvents: "none",
                visibility: "hidden",
                width: "200px",
                height: "150px",
                overflow: "hidden",
              }),
                t.appendChild(e),
                document.body.appendChild(t);
              var n = e.offsetWidth;
              t.style.overflow = "scroll";
              var r = e.offsetWidth;
              n === r && (r = t.clientWidth), document.body.removeChild(t);
              var i = n - r;
              return (p = { width: i, height: i });
            }
            function m() {
              var e =
                  arguments.length <= 0 || void 0 === arguments[0]
                    ? {}
                    : arguments[0],
                t = [];
              return (
                Array.prototype.push.apply(t, arguments),
                t.slice(1).forEach(function (t) {
                  if (t)
                    for (var n in t)
                      ({}).hasOwnProperty.call(t, n) && (e[n] = t[n]);
                }),
                e
              );
            }
            function g(e, t) {
              if (void 0 !== e.classList)
                t.split(" ").forEach(function (t) {
                  t.trim() && e.classList.remove(t);
                });
              else {
                var n = new RegExp(
                    "(^| )" + t.split(" ").join("|") + "( |$)",
                    "gi"
                  ),
                  r = b(e).replace(n, " ");
                w(e, r);
              }
            }
            function v(e, t) {
              if (void 0 !== e.classList)
                t.split(" ").forEach(function (t) {
                  t.trim() && e.classList.add(t);
                });
              else {
                g(e, t);
                var n = b(e) + " " + t;
                w(e, n);
              }
            }
            function y(e, t) {
              if (void 0 !== e.classList) return e.classList.contains(t);
              var n = b(e);
              return new RegExp("(^| )" + t + "( |$)", "gi").test(n);
            }
            function b(e) {
              return e.className instanceof
                e.ownerDocument.defaultView.SVGAnimatedString
                ? e.className.baseVal
                : e.className;
            }
            function w(e, t) {
              e.setAttribute("class", t);
            }
            function x(e, t, n) {
              n.forEach(function (n) {
                -1 === t.indexOf(n) && y(e, n) && g(e, n);
              }),
                t.forEach(function (t) {
                  y(e, t) || v(e, t);
                });
            }
            var S = [],
              _ = function (e) {
                S.push(e);
              },
              C = function () {
                for (var e = void 0; (e = S.pop()); ) e();
              },
              T = (function () {
                function n() {
                  t(this, n);
                }
                return (
                  e(n, [
                    {
                      key: "on",
                      value: function (e, t, n) {
                        var r =
                          !(arguments.length <= 3 || void 0 === arguments[3]) &&
                          arguments[3];
                        void 0 === this.bindings && (this.bindings = {}),
                          void 0 === this.bindings[e] &&
                            (this.bindings[e] = []),
                          this.bindings[e].push({
                            handler: t,
                            ctx: n,
                            once: r,
                          });
                      },
                    },
                    {
                      key: "once",
                      value: function (e, t, n) {
                        this.on(e, t, n, !0);
                      },
                    },
                    {
                      key: "off",
                      value: function (e, t) {
                        if (
                          void 0 !== this.bindings &&
                          void 0 !== this.bindings[e]
                        )
                          if (void 0 === t) delete this.bindings[e];
                          else
                            for (var n = 0; n < this.bindings[e].length; )
                              this.bindings[e][n].handler === t
                                ? this.bindings[e].splice(n, 1)
                                : ++n;
                      },
                    },
                    {
                      key: "trigger",
                      value: function (e) {
                        if (void 0 !== this.bindings && this.bindings[e]) {
                          for (
                            var t = 0,
                              n = arguments.length,
                              r = Array(n > 1 ? n - 1 : 0),
                              i = 1;
                            i < n;
                            i++
                          )
                            r[i - 1] = arguments[i];
                          for (; t < this.bindings[e].length; ) {
                            var o = this.bindings[e][t],
                              s = o.handler,
                              a = o.ctx,
                              l = o.once,
                              c = a;
                            void 0 === c && (c = this),
                              s.apply(c, r),
                              l ? this.bindings[e].splice(t, 1) : ++t;
                          }
                        }
                      },
                    },
                  ]),
                  n
                );
              })();
            n.Utils = {
              getActualBoundingClientRect: i,
              getScrollParents: o,
              getBounds: f,
              getOffsetParent: d,
              extend: m,
              addClass: v,
              removeClass: g,
              hasClass: y,
              updateClasses: x,
              defer: _,
              flush: C,
              uniqueId: a,
              Evented: T,
              getScrollBarSize: h,
              removeUtilElements: u,
            };
            var E = (function () {
                function e(e, t) {
                  var n = [],
                    r = !0,
                    i = !1,
                    o = void 0;
                  try {
                    for (
                      var s, a = e[Symbol.iterator]();
                      !(r = (s = a.next()).done) &&
                      (n.push(s.value), !t || n.length !== t);
                      r = !0
                    );
                  } catch (e) {
                    (i = !0), (o = e);
                  } finally {
                    try {
                      !r && a.return && a.return();
                    } finally {
                      if (i) throw o;
                    }
                  }
                  return n;
                }
                return function (t, n) {
                  if (Array.isArray(t)) return t;
                  if (Symbol.iterator in Object(t)) return e(t, n);
                  throw new TypeError(
                    "Invalid attempt to destructure non-iterable instance"
                  );
                };
              })(),
              k =
                ((e = (function () {
                  function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                      var r = t[n];
                      (r.enumerable = r.enumerable || !1),
                        (r.configurable = !0),
                        "value" in r && (r.writable = !0),
                        Object.defineProperty(e, r.key, r);
                    }
                  }
                  return function (t, n, r) {
                    return n && e(t.prototype, n), r && e(t, r), t;
                  };
                })()),
                function (e, t, n) {
                  for (var r = !0; r; ) {
                    var i = e,
                      o = t,
                      s = n;
                    (r = !1), null === i && (i = Function.prototype);
                    var a = Object.getOwnPropertyDescriptor(i, o);
                    if (void 0 !== a) {
                      if ("value" in a) return a.value;
                      var l = a.get;
                      if (void 0 === l) return;
                      return l.call(s);
                    }
                    var c = Object.getPrototypeOf(i);
                    if (null === c) return;
                    (e = c), (t = o), (n = s), (r = !0), (a = c = void 0);
                  }
                });
            function t(e, t) {
              if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
            }
            function A(e, t) {
              if ("function" != typeof t && null !== t)
                throw new TypeError(
                  "Super expression must either be null or a function, not " +
                    typeof t
                );
              (e.prototype = Object.create(t && t.prototype, {
                constructor: {
                  value: e,
                  enumerable: !1,
                  writable: !0,
                  configurable: !0,
                },
              })),
                t &&
                  (Object.setPrototypeOf
                    ? Object.setPrototypeOf(e, t)
                    : (e.__proto__ = t));
            }
            if (void 0 === n)
              throw new Error(
                "You must include the utils.js file before tether.js"
              );
            var o = (G = n.Utils).getScrollParents,
              d = ((f = G.getBounds), G.getOffsetParent),
              v = ((m = G.extend), G.addClass),
              g = G.removeClass,
              h =
                ((x = G.updateClasses),
                (_ = G.defer),
                (C = G.flush),
                G.getScrollBarSize),
              u = G.removeUtilElements;
            function O(e, t) {
              var n =
                arguments.length <= 2 || void 0 === arguments[2]
                  ? 1
                  : arguments[2];
              return e + n >= t && t >= e - n;
            }
            var I,
              P,
              N,
              D,
              j = (function () {
                if ("undefined" == typeof document) return "";
                for (
                  var e = document.createElement("div"),
                    t = [
                      "transform",
                      "WebkitTransform",
                      "OTransform",
                      "MozTransform",
                      "msTransform",
                    ],
                    n = 0;
                  n < t.length;
                  ++n
                ) {
                  var r = t[n];
                  if (void 0 !== e.style[r]) return r;
                }
              })(),
              B = [],
              F = function () {
                B.forEach(function (e) {
                  e.position(!1);
                }),
                  C();
              };
            function L() {
              return "object" == typeof performance &&
                "function" == typeof performance.now
                ? performance.now()
                : +new Date();
            }
            (I = null),
              (P = null),
              (N = null),
              (D = function e() {
                if (void 0 !== P && P > 16)
                  return (
                    (P = Math.min(P - 16, 250)), void (N = setTimeout(e, 250))
                  );
                (void 0 !== I && L() - I < 10) ||
                  (null != N && (clearTimeout(N), (N = null)),
                  (I = L()),
                  F(),
                  (P = L() - I));
              }),
              "undefined" != typeof window &&
                void 0 !== window.addEventListener &&
                ["resize", "scroll", "touchmove"].forEach(function (e) {
                  window.addEventListener(e, D);
                });
            var V = { center: "center", left: "right", right: "left" },
              M = { middle: "middle", top: "bottom", bottom: "top" },
              H = {
                top: 0,
                left: 0,
                middle: "50%",
                center: "50%",
                bottom: "100%",
                right: "100%",
              },
              W = function (e, t) {
                var n = e.left,
                  r = e.top;
                return (
                  "auto" === n && (n = V[t.left]),
                  "auto" === r && (r = M[t.top]),
                  { left: n, top: r }
                );
              },
              R = function (e) {
                var t = e.left,
                  n = e.top;
                return (
                  void 0 !== H[e.left] && (t = H[e.left]),
                  void 0 !== H[e.top] && (n = H[e.top]),
                  { left: t, top: n }
                );
              };
            function q() {
              for (
                var e = { top: 0, left: 0 },
                  t = arguments.length,
                  n = Array(t),
                  r = 0;
                r < t;
                r++
              )
                n[r] = arguments[r];
              return (
                n.forEach(function (t) {
                  var n = t.top,
                    r = t.left;
                  "string" == typeof n && (n = parseFloat(n, 10)),
                    "string" == typeof r && (r = parseFloat(r, 10)),
                    (e.top += n),
                    (e.left += r);
                }),
                e
              );
            }
            function $(e, t) {
              return (
                "string" == typeof e.left &&
                  -1 !== e.left.indexOf("%") &&
                  (e.left = (parseFloat(e.left, 10) / 100) * t.width),
                "string" == typeof e.top &&
                  -1 !== e.top.indexOf("%") &&
                  (e.top = (parseFloat(e.top, 10) / 100) * t.height),
                e
              );
            }
            var z = function (e) {
                var t = e.split(" "),
                  n = E(t, 2);
                return { top: n[0], left: n[1] };
              },
              U = z,
              Q = (function (r) {
                function i(e) {
                  var r = this;
                  t(this, i),
                    k(
                      Object.getPrototypeOf(i.prototype),
                      "constructor",
                      this
                    ).call(this),
                    (this.position = this.position.bind(this)),
                    B.push(this),
                    (this.history = []),
                    this.setOptions(e, !1),
                    n.modules.forEach(function (e) {
                      void 0 !== e.initialize && e.initialize.call(r);
                    }),
                    this.position();
                }
                return (
                  A(i, r),
                  e(i, [
                    {
                      key: "getClass",
                      value: function () {
                        var e =
                            arguments.length <= 0 || void 0 === arguments[0]
                              ? ""
                              : arguments[0],
                          t = this.options.classes;
                        return void 0 !== t && t[e]
                          ? this.options.classes[e]
                          : this.options.classPrefix
                          ? this.options.classPrefix + "-" + e
                          : e;
                      },
                    },
                    {
                      key: "setOptions",
                      value: function (e) {
                        var t = this,
                          n =
                            arguments.length <= 1 ||
                            void 0 === arguments[1] ||
                            arguments[1],
                          r = {
                            offset: "0 0",
                            targetOffset: "0 0",
                            targetAttachment: "auto auto",
                            classPrefix: "tether",
                          };
                        this.options = m(r, e);
                        var i = this.options,
                          s = i.element,
                          a = i.target,
                          l = i.targetModifier;
                        if (
                          ((this.element = s),
                          (this.target = a),
                          (this.targetModifier = l),
                          "viewport" === this.target
                            ? ((this.target = document.body),
                              (this.targetModifier = "visible"))
                            : "scroll-handle" === this.target &&
                              ((this.target = document.body),
                              (this.targetModifier = "scroll-handle")),
                          ["element", "target"].forEach(function (e) {
                            if (void 0 === t[e])
                              throw new Error(
                                "Tether Error: Both element and target must be defined"
                              );
                            void 0 !== t[e].jquery
                              ? (t[e] = t[e][0])
                              : "string" == typeof t[e] &&
                                (t[e] = document.querySelector(t[e]));
                          }),
                          v(this.element, this.getClass("element")),
                          !1 !== this.options.addTargetClasses &&
                            v(this.target, this.getClass("target")),
                          !this.options.attachment)
                        )
                          throw new Error(
                            "Tether Error: You must provide an attachment"
                          );
                        (this.targetAttachment = U(
                          this.options.targetAttachment
                        )),
                          (this.attachment = U(this.options.attachment)),
                          (this.offset = z(this.options.offset)),
                          (this.targetOffset = z(this.options.targetOffset)),
                          void 0 !== this.scrollParents && this.disable(),
                          "scroll-handle" === this.targetModifier
                            ? (this.scrollParents = [this.target])
                            : (this.scrollParents = o(this.target)),
                          !1 !== this.options.enabled && this.enable(n);
                      },
                    },
                    {
                      key: "getTargetBounds",
                      value: function () {
                        if (void 0 === this.targetModifier)
                          return f(this.target);
                        if ("visible" === this.targetModifier)
                          return this.target === document.body
                            ? {
                                top: pageYOffset,
                                left: pageXOffset,
                                height: innerHeight,
                                width: innerWidth,
                              }
                            : (((o = {
                                height: (e = f(this.target)).height,
                                width: e.width,
                                top: e.top,
                                left: e.left,
                              }).height = Math.min(
                                o.height,
                                e.height - (pageYOffset - e.top)
                              )),
                              (o.height = Math.min(
                                o.height,
                                e.height -
                                  (e.top +
                                    e.height -
                                    (pageYOffset + innerHeight))
                              )),
                              (o.height = Math.min(innerHeight, o.height)),
                              (o.height -= 2),
                              (o.width = Math.min(
                                o.width,
                                e.width - (pageXOffset - e.left)
                              )),
                              (o.width = Math.min(
                                o.width,
                                e.width -
                                  (e.left +
                                    e.width -
                                    (pageXOffset + innerWidth))
                              )),
                              (o.width = Math.min(innerWidth, o.width)),
                              (o.width -= 2),
                              o.top < pageYOffset && (o.top = pageYOffset),
                              o.left < pageXOffset && (o.left = pageXOffset),
                              o);
                        if ("scroll-handle" === this.targetModifier) {
                          var e = void 0,
                            t = this.target;
                          t === document.body
                            ? ((t = document.documentElement),
                              (e = {
                                left: pageXOffset,
                                top: pageYOffset,
                                height: innerHeight,
                                width: innerWidth,
                              }))
                            : (e = f(t));
                          var n = getComputedStyle(t),
                            r = 0;
                          (t.scrollWidth > t.clientWidth ||
                            [n.overflow, n.overflowX].indexOf("scroll") >= 0 ||
                            this.target !== document.body) &&
                            (r = 15);
                          var i =
                              e.height -
                              parseFloat(n.borderTopWidth) -
                              parseFloat(n.borderBottomWidth) -
                              r,
                            o = {
                              width: 15,
                              height: 0.975 * i * (i / t.scrollHeight),
                              left:
                                e.left +
                                e.width -
                                parseFloat(n.borderLeftWidth) -
                                15,
                            },
                            s = 0;
                          i < 408 &&
                            this.target === document.body &&
                            (s = -11e-5 * Math.pow(i, 2) - 0.00727 * i + 22.58),
                            this.target !== document.body &&
                              (o.height = Math.max(o.height, 24));
                          var a = this.target.scrollTop / (t.scrollHeight - i);
                          return (
                            (o.top =
                              a * (i - o.height - s) +
                              e.top +
                              parseFloat(n.borderTopWidth)),
                            this.target === document.body &&
                              (o.height = Math.max(o.height, 24)),
                            o
                          );
                        }
                      },
                    },
                    {
                      key: "clearCache",
                      value: function () {
                        this._cache = {};
                      },
                    },
                    {
                      key: "cache",
                      value: function (e, t) {
                        return (
                          void 0 === this._cache && (this._cache = {}),
                          void 0 === this._cache[e] &&
                            (this._cache[e] = t.call(this)),
                          this._cache[e]
                        );
                      },
                    },
                    {
                      key: "enable",
                      value: function () {
                        var e = this,
                          t =
                            arguments.length <= 0 ||
                            void 0 === arguments[0] ||
                            arguments[0];
                        !1 !== this.options.addTargetClasses &&
                          v(this.target, this.getClass("enabled")),
                          v(this.element, this.getClass("enabled")),
                          (this.enabled = !0),
                          this.scrollParents.forEach(function (t) {
                            t !== e.target.ownerDocument &&
                              t.addEventListener("scroll", e.position);
                          }),
                          t && this.position();
                      },
                    },
                    {
                      key: "disable",
                      value: function () {
                        var e = this;
                        g(this.target, this.getClass("enabled")),
                          g(this.element, this.getClass("enabled")),
                          (this.enabled = !1),
                          void 0 !== this.scrollParents &&
                            this.scrollParents.forEach(function (t) {
                              t.removeEventListener("scroll", e.position);
                            });
                      },
                    },
                    {
                      key: "destroy",
                      value: function () {
                        var e = this;
                        this.disable(),
                          B.forEach(function (t, n) {
                            t === e && B.splice(n, 1);
                          }),
                          0 === B.length && u();
                      },
                    },
                    {
                      key: "updateAttachClasses",
                      value: function (e, t) {
                        var n = this;
                        (e = e || this.attachment),
                          (t = t || this.targetAttachment);
                        var r = [
                          "left",
                          "top",
                          "bottom",
                          "right",
                          "middle",
                          "center",
                        ];
                        void 0 !== this._addAttachClasses &&
                          this._addAttachClasses.length &&
                          this._addAttachClasses.splice(
                            0,
                            this._addAttachClasses.length
                          ),
                          void 0 === this._addAttachClasses &&
                            (this._addAttachClasses = []);
                        var i = this._addAttachClasses;
                        e.top &&
                          i.push(
                            this.getClass("element-attached") + "-" + e.top
                          ),
                          e.left &&
                            i.push(
                              this.getClass("element-attached") + "-" + e.left
                            ),
                          t.top &&
                            i.push(
                              this.getClass("target-attached") + "-" + t.top
                            ),
                          t.left &&
                            i.push(
                              this.getClass("target-attached") + "-" + t.left
                            );
                        var o = [];
                        r.forEach(function (e) {
                          o.push(n.getClass("element-attached") + "-" + e),
                            o.push(n.getClass("target-attached") + "-" + e);
                        }),
                          _(function () {
                            void 0 !== n._addAttachClasses &&
                              (x(n.element, n._addAttachClasses, o),
                              !1 !== n.options.addTargetClasses &&
                                x(n.target, n._addAttachClasses, o),
                              delete n._addAttachClasses);
                          });
                      },
                    },
                    {
                      key: "position",
                      value: function () {
                        var e = this,
                          t =
                            arguments.length <= 0 ||
                            void 0 === arguments[0] ||
                            arguments[0];
                        if (this.enabled) {
                          this.clearCache();
                          var r = W(this.targetAttachment, this.attachment);
                          this.updateAttachClasses(this.attachment, r);
                          var i = this.cache("element-bounds", function () {
                              return f(e.element);
                            }),
                            o = i.width,
                            s = i.height;
                          if (0 === o && 0 === s && void 0 !== this.lastSize) {
                            var a = this.lastSize;
                            (o = a.width), (s = a.height);
                          } else this.lastSize = { width: o, height: s };
                          var l = this.cache("target-bounds", function () {
                              return e.getTargetBounds();
                            }),
                            c = l,
                            u = $(R(this.attachment), { width: o, height: s }),
                            p = $(R(r), c),
                            m = $(this.offset, { width: o, height: s }),
                            g = $(this.targetOffset, c);
                          (u = q(u, m)), (p = q(p, g));
                          for (
                            var v = l.left + p.left - u.left,
                              y = l.top + p.top - u.top,
                              b = 0;
                            b < n.modules.length;
                            ++b
                          ) {
                            var w = n.modules[b].position.call(this, {
                              left: v,
                              top: y,
                              targetAttachment: r,
                              targetPos: l,
                              elementPos: i,
                              offset: u,
                              targetOffset: p,
                              manualOffset: m,
                              manualTargetOffset: g,
                              scrollbarSize: T,
                              attachment: this.attachment,
                            });
                            if (!1 === w) return !1;
                            void 0 !== w &&
                              "object" == typeof w &&
                              ((y = w.top), (v = w.left));
                          }
                          var x = {
                              page: { top: y, left: v },
                              viewport: {
                                top: y - pageYOffset,
                                bottom: pageYOffset - y - s + innerHeight,
                                left: v - pageXOffset,
                                right: pageXOffset - v - o + innerWidth,
                              },
                            },
                            S = this.target.ownerDocument,
                            _ = S.defaultView,
                            T = void 0;
                          return (
                            _.innerHeight > S.documentElement.clientHeight &&
                              ((T = this.cache("scrollbar-size", h)),
                              (x.viewport.bottom -= T.height)),
                            _.innerWidth > S.documentElement.clientWidth &&
                              ((T = this.cache("scrollbar-size", h)),
                              (x.viewport.right -= T.width)),
                            (-1 !==
                              ["", "static"].indexOf(S.body.style.position) &&
                              -1 !==
                                ["", "static"].indexOf(
                                  S.body.parentElement.style.position
                                )) ||
                              ((x.page.bottom = S.body.scrollHeight - y - s),
                              (x.page.right = S.body.scrollWidth - v - o)),
                            void 0 !== this.options.optimizations &&
                              !1 !== this.options.optimizations.moveElement &&
                              void 0 === this.targetModifier &&
                              (function () {
                                var t = e.cache(
                                    "target-offsetparent",
                                    function () {
                                      return d(e.target);
                                    }
                                  ),
                                  n = e.cache(
                                    "target-offsetparent-bounds",
                                    function () {
                                      return f(t);
                                    }
                                  ),
                                  r = getComputedStyle(t),
                                  i = n,
                                  o = {};
                                if (
                                  (["Top", "Left", "Bottom", "Right"].forEach(
                                    function (e) {
                                      o[e.toLowerCase()] = parseFloat(
                                        r["border" + e + "Width"]
                                      );
                                    }
                                  ),
                                  (n.right =
                                    S.body.scrollWidth -
                                    n.left -
                                    i.width +
                                    o.right),
                                  (n.bottom =
                                    S.body.scrollHeight -
                                    n.top -
                                    i.height +
                                    o.bottom),
                                  x.page.top >= n.top + o.top &&
                                    x.page.bottom >= n.bottom &&
                                    x.page.left >= n.left + o.left &&
                                    x.page.right >= n.right)
                                ) {
                                  var s = t.scrollTop,
                                    a = t.scrollLeft;
                                  x.offset = {
                                    top: x.page.top - n.top + s - o.top,
                                    left: x.page.left - n.left + a - o.left,
                                  };
                                }
                              })(),
                            this.move(x),
                            this.history.unshift(x),
                            this.history.length > 3 && this.history.pop(),
                            t && C(),
                            !0
                          );
                        }
                      },
                    },
                    {
                      key: "move",
                      value: function (e) {
                        var t = this;
                        if (void 0 !== this.element.parentNode) {
                          var n = {};
                          for (var r in e)
                            for (var i in ((n[r] = {}), e[r])) {
                              for (
                                var o = !1, s = 0;
                                s < this.history.length;
                                ++s
                              ) {
                                var a = this.history[s];
                                if (void 0 !== a[r] && !O(a[r][i], e[r][i])) {
                                  o = !0;
                                  break;
                                }
                              }
                              o || (n[r][i] = !0);
                            }
                          var l = { top: "", left: "", right: "", bottom: "" },
                            c = function (e, n) {
                              if (
                                !1 !==
                                (void 0 !== t.options.optimizations
                                  ? t.options.optimizations.gpu
                                  : null)
                              ) {
                                var r = void 0,
                                  i = void 0;
                                e.top
                                  ? ((l.top = 0), (r = n.top))
                                  : ((l.bottom = 0), (r = -n.bottom)),
                                  e.left
                                    ? ((l.left = 0), (i = n.left))
                                    : ((l.right = 0), (i = -n.right)),
                                  "number" == typeof window.devicePixelRatio &&
                                    devicePixelRatio % 1 == 0 &&
                                    ((i =
                                      Math.round(i * devicePixelRatio) /
                                      devicePixelRatio),
                                    (r =
                                      Math.round(r * devicePixelRatio) /
                                      devicePixelRatio)),
                                  (l[j] =
                                    "translateX(" +
                                    i +
                                    "px) translateY(" +
                                    r +
                                    "px)"),
                                  "msTransform" !== j &&
                                    (l[j] += " translateZ(0)");
                              } else
                                e.top
                                  ? (l.top = n.top + "px")
                                  : (l.bottom = n.bottom + "px"),
                                  e.left
                                    ? (l.left = n.left + "px")
                                    : (l.right = n.right + "px");
                            },
                            u = !1;
                          if (
                            ((n.page.top || n.page.bottom) &&
                            (n.page.left || n.page.right)
                              ? ((l.position = "absolute"), c(n.page, e.page))
                              : (n.viewport.top || n.viewport.bottom) &&
                                (n.viewport.left || n.viewport.right)
                              ? ((l.position = "fixed"),
                                c(n.viewport, e.viewport))
                              : void 0 !== n.offset &&
                                n.offset.top &&
                                n.offset.left
                              ? (function () {
                                  l.position = "absolute";
                                  var r = t.cache(
                                    "target-offsetparent",
                                    function () {
                                      return d(t.target);
                                    }
                                  );
                                  d(t.element) !== r &&
                                    _(function () {
                                      t.element.parentNode.removeChild(
                                        t.element
                                      ),
                                        r.appendChild(t.element);
                                    }),
                                    c(n.offset, e.offset),
                                    (u = !0);
                                })()
                              : ((l.position = "absolute"),
                                c({ top: !0, left: !0 }, e.page)),
                            !u)
                          )
                            if (this.options.bodyElement)
                              this.element.parentNode !==
                                this.options.bodyElement &&
                                this.options.bodyElement.appendChild(
                                  this.element
                                );
                            else {
                              for (
                                var f = function (e) {
                                    var t = e.ownerDocument;
                                    return (
                                      (t.fullscreenElement ||
                                        t.webkitFullscreenElement ||
                                        t.mozFullScreenElement ||
                                        t.msFullscreenElement) === e
                                    );
                                  },
                                  p = !0,
                                  h = this.element.parentNode;
                                h &&
                                1 === h.nodeType &&
                                "BODY" !== h.tagName &&
                                !f(h);

                              ) {
                                if ("static" !== getComputedStyle(h).position) {
                                  p = !1;
                                  break;
                                }
                                h = h.parentNode;
                              }
                              p ||
                                (this.element.parentNode.removeChild(
                                  this.element
                                ),
                                this.element.ownerDocument.body.appendChild(
                                  this.element
                                ));
                            }
                          var g = {},
                            v = !1;
                          for (var i in l) {
                            var y = l[i];
                            this.element.style[i] !== y &&
                              ((v = !0), (g[i] = y));
                          }
                          v &&
                            _(function () {
                              m(t.element.style, g), t.trigger("repositioned");
                            });
                        }
                      },
                    },
                  ]),
                  i
                );
              })(T);
            (Q.modules = []), (n.position = F);
            var Y = m(Q, n);
            (E = (function () {
              function e(e, t) {
                var n = [],
                  r = !0,
                  i = !1,
                  o = void 0;
                try {
                  for (
                    var s, a = e[Symbol.iterator]();
                    !(r = (s = a.next()).done) &&
                    (n.push(s.value), !t || n.length !== t);
                    r = !0
                  );
                } catch (e) {
                  (i = !0), (o = e);
                } finally {
                  try {
                    !r && a.return && a.return();
                  } finally {
                    if (i) throw o;
                  }
                }
                return n;
              }
              return function (t, n) {
                if (Array.isArray(t)) return t;
                if (Symbol.iterator in Object(t)) return e(t, n);
                throw new TypeError(
                  "Invalid attempt to destructure non-iterable instance"
                );
              };
            })()),
              (f = (G = n.Utils).getBounds);
            var m = G.extend,
              K =
                ((x = G.updateClasses),
                (_ = G.defer),
                ["left", "top", "right", "bottom"]);
            function X(e, t) {
              return (
                "scrollParent" === t
                  ? (t = e.scrollParents[0])
                  : "window" === t &&
                    (t = [
                      pageXOffset,
                      pageYOffset,
                      innerWidth + pageXOffset,
                      innerHeight + pageYOffset,
                    ]),
                t === document && (t = t.documentElement),
                void 0 !== t.nodeType &&
                  (function () {
                    var e = t,
                      n = f(t),
                      r = n,
                      i = getComputedStyle(t);
                    if (
                      ((t = [
                        r.left,
                        r.top,
                        n.width + r.left,
                        n.height + r.top,
                      ]),
                      e.ownerDocument !== document)
                    ) {
                      var o = e.ownerDocument.defaultView;
                      (t[0] += o.pageXOffset),
                        (t[1] += o.pageYOffset),
                        (t[2] += o.pageXOffset),
                        (t[3] += o.pageYOffset);
                    }
                    K.forEach(function (e, n) {
                      "Top" === (e = e[0].toUpperCase() + e.substr(1)) ||
                      "Left" === e
                        ? (t[n] += parseFloat(i["border" + e + "Width"]))
                        : (t[n] -= parseFloat(i["border" + e + "Width"]));
                    });
                  })(),
                t
              );
            }
            n.modules.push({
              position: function (e) {
                var t = this,
                  n = e.top,
                  r = e.left,
                  i = e.targetAttachment;
                if (!this.options.constraints) return !0;
                var o = this.cache("element-bounds", function () {
                    return f(t.element);
                  }),
                  s = o.height,
                  a = o.width;
                if (0 === a && 0 === s && void 0 !== this.lastSize) {
                  var l = this.lastSize;
                  (a = l.width), (s = l.height);
                }
                var c = this.cache("target-bounds", function () {
                    return t.getTargetBounds();
                  }),
                  u = c.height,
                  d = c.width,
                  p = [this.getClass("pinned"), this.getClass("out-of-bounds")];
                this.options.constraints.forEach(function (e) {
                  var t = e.outOfBoundsClass,
                    n = e.pinnedClass;
                  t && p.push(t), n && p.push(n);
                }),
                  p.forEach(function (e) {
                    ["left", "top", "right", "bottom"].forEach(function (t) {
                      p.push(e + "-" + t);
                    });
                  });
                var h = [],
                  g = m({}, i),
                  v = m({}, this.attachment);
                return (
                  this.options.constraints.forEach(function (e) {
                    var o = e.to,
                      l = e.attachment,
                      c = e.pin;
                    void 0 === l && (l = "");
                    var f = void 0,
                      p = void 0;
                    if (l.indexOf(" ") >= 0) {
                      var m = l.split(" "),
                        y = E(m, 2);
                      (p = y[0]), (f = y[1]);
                    } else f = p = l;
                    var b = X(t, o);
                    ("target" !== p && "both" !== p) ||
                      (n < b[1] &&
                        "top" === g.top &&
                        ((n += u), (g.top = "bottom")),
                      n + s > b[3] &&
                        "bottom" === g.top &&
                        ((n -= u), (g.top = "top"))),
                      "together" === p &&
                        ("top" === g.top &&
                          ("bottom" === v.top && n < b[1]
                            ? ((n += u),
                              (g.top = "bottom"),
                              (n += s),
                              (v.top = "top"))
                            : "top" === v.top &&
                              n + s > b[3] &&
                              n - (s - u) >= b[1] &&
                              ((n -= s - u),
                              (g.top = "bottom"),
                              (v.top = "bottom"))),
                        "bottom" === g.top &&
                          ("top" === v.top && n + s > b[3]
                            ? ((n -= u),
                              (g.top = "top"),
                              (n -= s),
                              (v.top = "bottom"))
                            : "bottom" === v.top &&
                              n < b[1] &&
                              n + (2 * s - u) <= b[3] &&
                              ((n += s - u), (g.top = "top"), (v.top = "top"))),
                        "middle" === g.top &&
                          (n + s > b[3] && "top" === v.top
                            ? ((n -= s), (v.top = "bottom"))
                            : n < b[1] &&
                              "bottom" === v.top &&
                              ((n += s), (v.top = "top")))),
                      ("target" !== f && "both" !== f) ||
                        (r < b[0] &&
                          "left" === g.left &&
                          ((r += d), (g.left = "right")),
                        r + a > b[2] &&
                          "right" === g.left &&
                          ((r -= d), (g.left = "left"))),
                      "together" === f &&
                        (r < b[0] && "left" === g.left
                          ? "right" === v.left
                            ? ((r += d),
                              (g.left = "right"),
                              (r += a),
                              (v.left = "left"))
                            : "left" === v.left &&
                              ((r += d),
                              (g.left = "right"),
                              (r -= a),
                              (v.left = "right"))
                          : r + a > b[2] && "right" === g.left
                          ? "left" === v.left
                            ? ((r -= d),
                              (g.left = "left"),
                              (r -= a),
                              (v.left = "right"))
                            : "right" === v.left &&
                              ((r -= d),
                              (g.left = "left"),
                              (r += a),
                              (v.left = "left"))
                          : "center" === g.left &&
                            (r + a > b[2] && "left" === v.left
                              ? ((r -= a), (v.left = "right"))
                              : r < b[0] &&
                                "right" === v.left &&
                                ((r += a), (v.left = "left")))),
                      ("element" !== p && "both" !== p) ||
                        (n < b[1] &&
                          "bottom" === v.top &&
                          ((n += s), (v.top = "top")),
                        n + s > b[3] &&
                          "top" === v.top &&
                          ((n -= s), (v.top = "bottom"))),
                      ("element" !== f && "both" !== f) ||
                        (r < b[0] &&
                          ("right" === v.left
                            ? ((r += a), (v.left = "left"))
                            : "center" === v.left &&
                              ((r += a / 2), (v.left = "left"))),
                        r + a > b[2] &&
                          ("left" === v.left
                            ? ((r -= a), (v.left = "right"))
                            : "center" === v.left &&
                              ((r -= a / 2), (v.left = "right")))),
                      "string" == typeof c
                        ? (c = c.split(",").map(function (e) {
                            return e.trim();
                          }))
                        : !0 === c && (c = ["top", "left", "right", "bottom"]),
                      (c = c || []);
                    var w,
                      x,
                      S = [],
                      _ = [];
                    n < b[1] &&
                      (c.indexOf("top") >= 0
                        ? ((n = b[1]), S.push("top"))
                        : _.push("top")),
                      n + s > b[3] &&
                        (c.indexOf("bottom") >= 0
                          ? ((n = b[3] - s), S.push("bottom"))
                          : _.push("bottom")),
                      r < b[0] &&
                        (c.indexOf("left") >= 0
                          ? ((r = b[0]), S.push("left"))
                          : _.push("left")),
                      r + a > b[2] &&
                        (c.indexOf("right") >= 0
                          ? ((r = b[2] - a), S.push("right"))
                          : _.push("right")),
                      S.length &&
                        ((w = void 0),
                        (w =
                          void 0 !== t.options.pinnedClass
                            ? t.options.pinnedClass
                            : t.getClass("pinned")),
                        h.push(w),
                        S.forEach(function (e) {
                          h.push(w + "-" + e);
                        })),
                      _.length &&
                        ((x = void 0),
                        (x =
                          void 0 !== t.options.outOfBoundsClass
                            ? t.options.outOfBoundsClass
                            : t.getClass("out-of-bounds")),
                        h.push(x),
                        _.forEach(function (e) {
                          h.push(x + "-" + e);
                        })),
                      (S.indexOf("left") >= 0 || S.indexOf("right") >= 0) &&
                        (v.left = g.left = !1),
                      (S.indexOf("top") >= 0 || S.indexOf("bottom") >= 0) &&
                        (v.top = g.top = !1),
                      (g.top === i.top &&
                        g.left === i.left &&
                        v.top === t.attachment.top &&
                        v.left === t.attachment.left) ||
                        (t.updateAttachClasses(v, g),
                        t.trigger("update", {
                          attachment: v,
                          targetAttachment: g,
                        }));
                  }),
                  _(function () {
                    !1 !== t.options.addTargetClasses && x(t.target, h, p),
                      x(t.element, h, p);
                  }),
                  { top: n, left: r }
                );
              },
            });
            var G,
              f = (G = n.Utils).getBounds,
              x = G.updateClasses;
            return (
              (_ = G.defer),
              n.modules.push({
                position: function (e) {
                  var t = this,
                    n = e.top,
                    r = e.left,
                    i = this.cache("element-bounds", function () {
                      return f(t.element);
                    }),
                    o = i.height,
                    s = i.width,
                    a = this.getTargetBounds(),
                    l = n + o,
                    c = r + s,
                    u = [];
                  n <= a.bottom &&
                    l >= a.top &&
                    ["left", "right"].forEach(function (e) {
                      var t = a[e];
                      (t !== r && t !== c) || u.push(e);
                    }),
                    r <= a.right &&
                      c >= a.left &&
                      ["top", "bottom"].forEach(function (e) {
                        var t = a[e];
                        (t !== n && t !== l) || u.push(e);
                      });
                  var d = [],
                    p = [],
                    h = ["left", "top", "right", "bottom"];
                  return (
                    d.push(this.getClass("abutted")),
                    h.forEach(function (e) {
                      d.push(t.getClass("abutted") + "-" + e);
                    }),
                    u.length && p.push(this.getClass("abutted")),
                    u.forEach(function (e) {
                      p.push(t.getClass("abutted") + "-" + e);
                    }),
                    _(function () {
                      !1 !== t.options.addTargetClasses && x(t.target, p, d),
                        x(t.element, p, d);
                    }),
                    !0
                  );
                },
              }),
              (E = (function () {
                function e(e, t) {
                  var n = [],
                    r = !0,
                    i = !1,
                    o = void 0;
                  try {
                    for (
                      var s, a = e[Symbol.iterator]();
                      !(r = (s = a.next()).done) &&
                      (n.push(s.value), !t || n.length !== t);
                      r = !0
                    );
                  } catch (e) {
                    (i = !0), (o = e);
                  } finally {
                    try {
                      !r && a.return && a.return();
                    } finally {
                      if (i) throw o;
                    }
                  }
                  return n;
                }
                return function (t, n) {
                  if (Array.isArray(t)) return t;
                  if (Symbol.iterator in Object(t)) return e(t, n);
                  throw new TypeError(
                    "Invalid attempt to destructure non-iterable instance"
                  );
                };
              })()),
              n.modules.push({
                position: function (e) {
                  var t = e.top,
                    n = e.left;
                  if (this.options.shift) {
                    var r = this.options.shift;
                    "function" == typeof this.options.shift &&
                      (r = this.options.shift.call(this, { top: t, left: n }));
                    var i = void 0,
                      o = void 0;
                    if ("string" == typeof r) {
                      (r = r.split(" "))[1] = r[1] || r[0];
                      var s = E(r, 2);
                      (i = s[0]),
                        (o = s[1]),
                        (i = parseFloat(i, 10)),
                        (o = parseFloat(o, 10));
                    } else (i = r.top), (o = r.left);
                    return { top: (t += i), left: (n += o) };
                  }
                },
              }),
              Y
            );
          }),
          void 0 === (i = "function" == typeof n ? n.apply(t, r) : n) ||
            (e.exports = i);
      },
      593: function (e, t, n) {
        var r,
          i; /*! VelocityJS.org (1.5.0). (C) 2014 Julian Shapiro. MIT @license: en.wikipedia.org/wiki/MIT_License */
        /*! VelocityJS.org jQuery Shim (1.0.1). (C) 2014 The jQuery Foundation. MIT @license: en.wikipedia.org/wiki/MIT_License. */ !(function (
          e
        ) {
          "use strict";
          if (!e.jQuery) {
            var t = function (e, n) {
              return new t.fn.init(e, n);
            };
            (t.isWindow = function (e) {
              return e && e === e.window;
            }),
              (t.type = function (e) {
                return e
                  ? "object" == typeof e || "function" == typeof e
                    ? r[o.call(e)] || "object"
                    : typeof e
                  : e + "";
              }),
              (t.isArray =
                Array.isArray ||
                function (e) {
                  return "array" === t.type(e);
                }),
              (t.isPlainObject = function (e) {
                var n;
                if (!e || "object" !== t.type(e) || e.nodeType || t.isWindow(e))
                  return !1;
                try {
                  if (
                    e.constructor &&
                    !i.call(e, "constructor") &&
                    !i.call(e.constructor.prototype, "isPrototypeOf")
                  )
                    return !1;
                } catch (e) {
                  return !1;
                }
                for (n in e);
                return void 0 === n || i.call(e, n);
              }),
              (t.each = function (e, t, n) {
                var r = 0,
                  i = e.length,
                  o = l(e);
                if (n) {
                  if (o) for (; r < i && !1 !== t.apply(e[r], n); r++);
                  else
                    for (r in e)
                      if (e.hasOwnProperty(r) && !1 === t.apply(e[r], n)) break;
                } else if (o)
                  for (; r < i && !1 !== t.call(e[r], r, e[r]); r++);
                else
                  for (r in e)
                    if (e.hasOwnProperty(r) && !1 === t.call(e[r], r, e[r]))
                      break;
                return e;
              }),
              (t.data = function (e, r, i) {
                if (void 0 === i) {
                  var o = e[t.expando],
                    s = o && n[o];
                  if (void 0 === r) return s;
                  if (s && r in s) return s[r];
                } else if (void 0 !== r) {
                  var a = e[t.expando] || (e[t.expando] = ++t.uuid);
                  return (n[a] = n[a] || {}), (n[a][r] = i), i;
                }
              }),
              (t.removeData = function (e, r) {
                var i = e[t.expando],
                  o = i && n[i];
                o &&
                  (r
                    ? t.each(r, function (e, t) {
                        delete o[t];
                      })
                    : delete n[i]);
              }),
              (t.extend = function () {
                var e,
                  n,
                  r,
                  i,
                  o,
                  s,
                  a = arguments[0] || {},
                  l = 1,
                  c = arguments.length,
                  u = !1;
                for (
                  "boolean" == typeof a &&
                    ((u = a), (a = arguments[l] || {}), l++),
                    "object" != typeof a &&
                      "function" !== t.type(a) &&
                      (a = {}),
                    l === c && ((a = this), l--);
                  l < c;
                  l++
                )
                  if ((o = arguments[l]))
                    for (i in o)
                      o.hasOwnProperty(i) &&
                        ((e = a[i]),
                        a !== (r = o[i]) &&
                          (u && r && (t.isPlainObject(r) || (n = t.isArray(r)))
                            ? (n
                                ? ((n = !1), (s = e && t.isArray(e) ? e : []))
                                : (s = e && t.isPlainObject(e) ? e : {}),
                              (a[i] = t.extend(u, s, r)))
                            : void 0 !== r && (a[i] = r)));
                return a;
              }),
              (t.queue = function (e, n, r) {
                if (e) {
                  n = (n || "fx") + "queue";
                  var i,
                    o,
                    s,
                    a = t.data(e, n);
                  return r
                    ? (!a || t.isArray(r)
                        ? (a = t.data(
                            e,
                            n,
                            ((s = o || []),
                            (i = r) &&
                              (l(Object(i))
                                ? (function (e, t) {
                                    for (
                                      var n = +t.length, r = 0, i = e.length;
                                      r < n;

                                    )
                                      e[i++] = t[r++];
                                    if (n != n)
                                      for (; void 0 !== t[r]; ) e[i++] = t[r++];
                                    e.length = i;
                                  })(s, "string" == typeof i ? [i] : i)
                                : [].push.call(s, i)),
                            s)
                          ))
                        : a.push(r),
                      a)
                    : a || [];
                }
              }),
              (t.dequeue = function (e, n) {
                t.each(e.nodeType ? [e] : e, function (e, r) {
                  n = n || "fx";
                  var i = t.queue(r, n),
                    o = i.shift();
                  "inprogress" === o && (o = i.shift()),
                    o &&
                      ("fx" === n && i.unshift("inprogress"),
                      o.call(r, function () {
                        t.dequeue(r, n);
                      }));
                });
              }),
              (t.fn = t.prototype =
                {
                  init: function (e) {
                    if (e.nodeType) return (this[0] = e), this;
                    throw new Error("Not a DOM node.");
                  },
                  offset: function () {
                    var t = this[0].getBoundingClientRect
                      ? this[0].getBoundingClientRect()
                      : { top: 0, left: 0 };
                    return {
                      top:
                        t.top +
                        (e.pageYOffset || document.scrollTop || 0) -
                        (document.clientTop || 0),
                      left:
                        t.left +
                        (e.pageXOffset || document.scrollLeft || 0) -
                        (document.clientLeft || 0),
                    };
                  },
                  position: function () {
                    var e = this[0],
                      n = (function (e) {
                        for (
                          var t = e.offsetParent;
                          t &&
                          "html" !== t.nodeName.toLowerCase() &&
                          t.style &&
                          "static" === t.style.position;

                        )
                          t = t.offsetParent;
                        return t || document;
                      })(e),
                      r = this.offset(),
                      i = /^(?:body|html)$/i.test(n.nodeName)
                        ? { top: 0, left: 0 }
                        : t(n).offset();
                    return (
                      (r.top -= parseFloat(e.style.marginTop) || 0),
                      (r.left -= parseFloat(e.style.marginLeft) || 0),
                      n.style &&
                        ((i.top += parseFloat(n.style.borderTopWidth) || 0),
                        (i.left += parseFloat(n.style.borderLeftWidth) || 0)),
                      { top: r.top - i.top, left: r.left - i.left }
                    );
                  },
                });
            var n = {};
            (t.expando = "velocity" + new Date().getTime()), (t.uuid = 0);
            for (
              var r = {},
                i = r.hasOwnProperty,
                o = r.toString,
                s =
                  "Boolean Number String Function Array Date RegExp Object Error".split(
                    " "
                  ),
                a = 0;
              a < s.length;
              a++
            )
              r["[object " + s[a] + "]"] = s[a].toLowerCase();
            (t.fn.init.prototype = t.fn), (e.Velocity = { Utilities: t });
          }
          function l(e) {
            var n = e.length,
              r = t.type(e);
            return (
              "function" !== r &&
              !t.isWindow(e) &&
              (!(1 !== e.nodeType || !n) ||
                "array" === r ||
                0 === n ||
                ("number" == typeof n && n > 0 && n - 1 in e))
            );
          }
        })(window),
          (function (o) {
            "use strict";
            "object" == typeof e.exports
              ? (e.exports = o())
              : void 0 ===
                  (i = "function" == typeof (r = o) ? r.call(t, n, t, e) : r) ||
                (e.exports = i);
          })(function () {
            "use strict";
            return (function (e, t, n, r) {
              var i,
                o = (function () {
                  if (n.documentMode) return n.documentMode;
                  for (var e = 7; e > 4; e--) {
                    var t = n.createElement("div");
                    if (
                      ((t.innerHTML =
                        "\x3c!--[if IE " +
                        e +
                        "]><span></span><![endif]--\x3e"),
                      t.getElementsByTagName("span").length)
                    )
                      return (t = null), e;
                  }
                  return r;
                })(),
                s =
                  ((i = 0),
                  t.webkitRequestAnimationFrame ||
                    t.mozRequestAnimationFrame ||
                    function (e) {
                      var t,
                        n = new Date().getTime();
                      return (
                        (t = Math.max(0, 16 - (n - i))),
                        (i = n + t),
                        setTimeout(function () {
                          e(n + t);
                        }, t)
                      );
                    }),
                a = (function () {
                  var e = t.performance || {};
                  if ("function" != typeof e.now) {
                    var n =
                      e.timing && e.timing.navigationStart
                        ? e.timing.navigationStart
                        : new Date().getTime();
                    e.now = function () {
                      return new Date().getTime() - n;
                    };
                  }
                  return e;
                })();
              var l = (function () {
                  var e = Array.prototype.slice;
                  try {
                    return e.call(n.documentElement), e;
                  } catch (t) {
                    return function (t, n) {
                      var r = this.length;
                      if (
                        ("number" != typeof t && (t = 0),
                        "number" != typeof n && (n = r),
                        this.slice)
                      )
                        return e.call(this, t, n);
                      var i,
                        o = [],
                        s = t >= 0 ? t : Math.max(0, r + t),
                        a = (n < 0 ? r + n : Math.min(n, r)) - s;
                      if (a > 0)
                        if (((o = new Array(a)), this.charAt))
                          for (i = 0; i < a; i++) o[i] = this.charAt(s + i);
                        else for (i = 0; i < a; i++) o[i] = this[s + i];
                      return o;
                    };
                  }
                })(),
                c = function () {
                  return Array.prototype.includes
                    ? function (e, t) {
                        return e.includes(t);
                      }
                    : Array.prototype.indexOf
                    ? function (e, t) {
                        return e.indexOf(t) >= 0;
                      }
                    : function (e, t) {
                        for (var n = 0; n < e.length; n++)
                          if (e[n] === t) return !0;
                        return !1;
                      };
                };
              function u(e) {
                return (
                  d.isWrapped(e) ? (e = l.call(e)) : d.isNode(e) && (e = [e]), e
                );
              }
              var f,
                d = {
                  isNumber: function (e) {
                    return "number" == typeof e;
                  },
                  isString: function (e) {
                    return "string" == typeof e;
                  },
                  isArray:
                    Array.isArray ||
                    function (e) {
                      return (
                        "[object Array]" === Object.prototype.toString.call(e)
                      );
                    },
                  isFunction: function (e) {
                    return (
                      "[object Function]" === Object.prototype.toString.call(e)
                    );
                  },
                  isNode: function (e) {
                    return e && e.nodeType;
                  },
                  isWrapped: function (e) {
                    return (
                      e &&
                      e !== t &&
                      d.isNumber(e.length) &&
                      !d.isString(e) &&
                      !d.isFunction(e) &&
                      !d.isNode(e) &&
                      (0 === e.length || d.isNode(e[0]))
                    );
                  },
                  isSVG: function (e) {
                    return t.SVGElement && e instanceof t.SVGElement;
                  },
                  isEmptyObject: function (e) {
                    for (var t in e) if (e.hasOwnProperty(t)) return !1;
                    return !0;
                  },
                },
                p = !1;
              if (
                (e.fn && e.fn.jquery
                  ? ((f = e), (p = !0))
                  : (f = t.Velocity.Utilities),
                o <= 8 && !p)
              )
                throw new Error(
                  "Velocity: IE8 and below require jQuery to be loaded before Velocity."
                );
              if (!(o <= 7)) {
                var h = 400,
                  m = "swing",
                  g = {
                    State: {
                      isMobile:
                        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                          navigator.userAgent
                        ),
                      isAndroid: /Android/i.test(navigator.userAgent),
                      isGingerbread: /Android 2\.3\.[3-7]/i.test(
                        navigator.userAgent
                      ),
                      isChrome: t.chrome,
                      isFirefox: /Firefox/i.test(navigator.userAgent),
                      prefixElement: n.createElement("div"),
                      prefixMatches: {},
                      scrollAnchor: null,
                      scrollPropertyLeft: null,
                      scrollPropertyTop: null,
                      isTicking: !1,
                      calls: [],
                      delayedElements: { count: 0 },
                    },
                    CSS: {},
                    Utilities: f,
                    Redirects: {},
                    Easings: {},
                    Promise: t.Promise,
                    defaults: {
                      queue: "",
                      duration: h,
                      easing: m,
                      begin: r,
                      complete: r,
                      progress: r,
                      display: r,
                      visibility: r,
                      loop: !1,
                      delay: !1,
                      mobileHA: !0,
                      _cacheValues: !0,
                      promiseRejectEmpty: !0,
                    },
                    init: function (e) {
                      f.data(e, "velocity", {
                        isSVG: d.isSVG(e),
                        isAnimating: !1,
                        computedStyle: null,
                        tweensContainer: null,
                        rootPropertyValueCache: {},
                        transformCache: {},
                      });
                    },
                    hook: null,
                    mock: !1,
                    version: { major: 1, minor: 5, patch: 0 },
                    debug: !1,
                    timestamp: !0,
                    pauseAll: function (e) {
                      var t = new Date().getTime();
                      f.each(g.State.calls, function (t, n) {
                        if (n) {
                          if (
                            e !== r &&
                            (n[2].queue !== e || !1 === n[2].queue)
                          )
                            return !0;
                          n[5] = { resume: !1 };
                        }
                      }),
                        f.each(g.State.delayedElements, function (e, n) {
                          n && _(n, t);
                        });
                    },
                    resumeAll: function (e) {
                      var t = new Date().getTime();
                      f.each(g.State.calls, function (t, n) {
                        if (n) {
                          if (
                            e !== r &&
                            (n[2].queue !== e || !1 === n[2].queue)
                          )
                            return !0;
                          n[5] && (n[5].resume = !0);
                        }
                      }),
                        f.each(g.State.delayedElements, function (e, n) {
                          n && C(n, t);
                        });
                    },
                  };
                t.pageYOffset !== r
                  ? ((g.State.scrollAnchor = t),
                    (g.State.scrollPropertyLeft = "pageXOffset"),
                    (g.State.scrollPropertyTop = "pageYOffset"))
                  : ((g.State.scrollAnchor =
                      n.documentElement || n.body.parentNode || n.body),
                    (g.State.scrollPropertyLeft = "scrollLeft"),
                    (g.State.scrollPropertyTop = "scrollTop"));
                var v = (function () {
                  function e(e) {
                    return -e.tension * e.x - e.friction * e.v;
                  }
                  function t(t, n, r) {
                    var i = {
                      x: t.x + r.dx * n,
                      v: t.v + r.dv * n,
                      tension: t.tension,
                      friction: t.friction,
                    };
                    return { dx: i.v, dv: e(i) };
                  }
                  function n(n, r) {
                    var i = { dx: n.v, dv: e(n) },
                      o = t(n, 0.5 * r, i),
                      s = t(n, 0.5 * r, o),
                      a = t(n, r, s),
                      l = (1 / 6) * (i.dx + 2 * (o.dx + s.dx) + a.dx),
                      c = (1 / 6) * (i.dv + 2 * (o.dv + s.dv) + a.dv);
                    return (n.x = n.x + l * r), (n.v = n.v + c * r), n;
                  }
                  return function e(t, r, i) {
                    var o,
                      s,
                      a,
                      l = { x: -1, v: 0, tension: null, friction: null },
                      c = [0],
                      u = 0,
                      f = 1e-4;
                    for (
                      t = parseFloat(t) || 500,
                        r = parseFloat(r) || 20,
                        i = i || null,
                        l.tension = t,
                        l.friction = r,
                        s = (o = null !== i)
                          ? ((u = e(t, r)) / i) * 0.016
                          : 0.016;
                      (a = n(a || l, s)),
                        c.push(1 + a.x),
                        (u += 16),
                        Math.abs(a.x) > f && Math.abs(a.v) > f;

                    );
                    return o
                      ? function (e) {
                          return c[(e * (c.length - 1)) | 0];
                        }
                      : u;
                  };
                })();
                (g.Easings = {
                  linear: function (e) {
                    return e;
                  },
                  swing: function (e) {
                    return 0.5 - Math.cos(e * Math.PI) / 2;
                  },
                  spring: function (e) {
                    return 1 - Math.cos(4.5 * e * Math.PI) * Math.exp(6 * -e);
                  },
                }),
                  f.each(
                    [
                      ["ease", [0.25, 0.1, 0.25, 1]],
                      ["ease-in", [0.42, 0, 1, 1]],
                      ["ease-out", [0, 0, 0.58, 1]],
                      ["ease-in-out", [0.42, 0, 0.58, 1]],
                      ["easeInSine", [0.47, 0, 0.745, 0.715]],
                      ["easeOutSine", [0.39, 0.575, 0.565, 1]],
                      ["easeInOutSine", [0.445, 0.05, 0.55, 0.95]],
                      ["easeInQuad", [0.55, 0.085, 0.68, 0.53]],
                      ["easeOutQuad", [0.25, 0.46, 0.45, 0.94]],
                      ["easeInOutQuad", [0.455, 0.03, 0.515, 0.955]],
                      ["easeInCubic", [0.55, 0.055, 0.675, 0.19]],
                      ["easeOutCubic", [0.215, 0.61, 0.355, 1]],
                      ["easeInOutCubic", [0.645, 0.045, 0.355, 1]],
                      ["easeInQuart", [0.895, 0.03, 0.685, 0.22]],
                      ["easeOutQuart", [0.165, 0.84, 0.44, 1]],
                      ["easeInOutQuart", [0.77, 0, 0.175, 1]],
                      ["easeInQuint", [0.755, 0.05, 0.855, 0.06]],
                      ["easeOutQuint", [0.23, 1, 0.32, 1]],
                      ["easeInOutQuint", [0.86, 0, 0.07, 1]],
                      ["easeInExpo", [0.95, 0.05, 0.795, 0.035]],
                      ["easeOutExpo", [0.19, 1, 0.22, 1]],
                      ["easeInOutExpo", [1, 0, 0, 1]],
                      ["easeInCirc", [0.6, 0.04, 0.98, 0.335]],
                      ["easeOutCirc", [0.075, 0.82, 0.165, 1]],
                      ["easeInOutCirc", [0.785, 0.135, 0.15, 0.86]],
                    ],
                    function (e, t) {
                      g.Easings[t[0]] = E.apply(null, t[1]);
                    }
                  );
                var y = (g.CSS = {
                  RegEx: {
                    isHex: /^#([A-f\d]{3}){1,2}$/i,
                    valueUnwrap: /^[A-z]+\((.*)\)$/i,
                    wrappedValueAlreadyExtracted:
                      /[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/,
                    valueSplit: /([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/gi,
                  },
                  Lists: {
                    colors: [
                      "fill",
                      "stroke",
                      "stopColor",
                      "color",
                      "backgroundColor",
                      "borderColor",
                      "borderTopColor",
                      "borderRightColor",
                      "borderBottomColor",
                      "borderLeftColor",
                      "outlineColor",
                    ],
                    transformsBase: [
                      "translateX",
                      "translateY",
                      "scale",
                      "scaleX",
                      "scaleY",
                      "skewX",
                      "skewY",
                      "rotateZ",
                    ],
                    transforms3D: [
                      "transformPerspective",
                      "translateZ",
                      "scaleZ",
                      "rotateX",
                      "rotateY",
                    ],
                    units: [
                      "%",
                      "em",
                      "ex",
                      "ch",
                      "rem",
                      "vw",
                      "vh",
                      "vmin",
                      "vmax",
                      "cm",
                      "mm",
                      "Q",
                      "in",
                      "pc",
                      "pt",
                      "px",
                      "deg",
                      "grad",
                      "rad",
                      "turn",
                      "s",
                      "ms",
                    ],
                    colorNames: {
                      aliceblue: "240,248,255",
                      antiquewhite: "250,235,215",
                      aquamarine: "127,255,212",
                      aqua: "0,255,255",
                      azure: "240,255,255",
                      beige: "245,245,220",
                      bisque: "255,228,196",
                      black: "0,0,0",
                      blanchedalmond: "255,235,205",
                      blueviolet: "138,43,226",
                      blue: "0,0,255",
                      brown: "165,42,42",
                      burlywood: "222,184,135",
                      cadetblue: "95,158,160",
                      chartreuse: "127,255,0",
                      chocolate: "210,105,30",
                      coral: "255,127,80",
                      cornflowerblue: "100,149,237",
                      cornsilk: "255,248,220",
                      crimson: "220,20,60",
                      cyan: "0,255,255",
                      darkblue: "0,0,139",
                      darkcyan: "0,139,139",
                      darkgoldenrod: "184,134,11",
                      darkgray: "169,169,169",
                      darkgrey: "169,169,169",
                      darkgreen: "0,100,0",
                      darkkhaki: "189,183,107",
                      darkmagenta: "139,0,139",
                      darkolivegreen: "85,107,47",
                      darkorange: "255,140,0",
                      darkorchid: "153,50,204",
                      darkred: "139,0,0",
                      darksalmon: "233,150,122",
                      darkseagreen: "143,188,143",
                      darkslateblue: "72,61,139",
                      darkslategray: "47,79,79",
                      darkturquoise: "0,206,209",
                      darkviolet: "148,0,211",
                      deeppink: "255,20,147",
                      deepskyblue: "0,191,255",
                      dimgray: "105,105,105",
                      dimgrey: "105,105,105",
                      dodgerblue: "30,144,255",
                      firebrick: "178,34,34",
                      floralwhite: "255,250,240",
                      forestgreen: "34,139,34",
                      fuchsia: "255,0,255",
                      gainsboro: "220,220,220",
                      ghostwhite: "248,248,255",
                      gold: "255,215,0",
                      goldenrod: "218,165,32",
                      gray: "128,128,128",
                      grey: "128,128,128",
                      greenyellow: "173,255,47",
                      green: "0,128,0",
                      honeydew: "240,255,240",
                      hotpink: "255,105,180",
                      indianred: "205,92,92",
                      indigo: "75,0,130",
                      ivory: "255,255,240",
                      khaki: "240,230,140",
                      lavenderblush: "255,240,245",
                      lavender: "230,230,250",
                      lawngreen: "124,252,0",
                      lemonchiffon: "255,250,205",
                      lightblue: "173,216,230",
                      lightcoral: "240,128,128",
                      lightcyan: "224,255,255",
                      lightgoldenrodyellow: "250,250,210",
                      lightgray: "211,211,211",
                      lightgrey: "211,211,211",
                      lightgreen: "144,238,144",
                      lightpink: "255,182,193",
                      lightsalmon: "255,160,122",
                      lightseagreen: "32,178,170",
                      lightskyblue: "135,206,250",
                      lightslategray: "119,136,153",
                      lightsteelblue: "176,196,222",
                      lightyellow: "255,255,224",
                      limegreen: "50,205,50",
                      lime: "0,255,0",
                      linen: "250,240,230",
                      magenta: "255,0,255",
                      maroon: "128,0,0",
                      mediumaquamarine: "102,205,170",
                      mediumblue: "0,0,205",
                      mediumorchid: "186,85,211",
                      mediumpurple: "147,112,219",
                      mediumseagreen: "60,179,113",
                      mediumslateblue: "123,104,238",
                      mediumspringgreen: "0,250,154",
                      mediumturquoise: "72,209,204",
                      mediumvioletred: "199,21,133",
                      midnightblue: "25,25,112",
                      mintcream: "245,255,250",
                      mistyrose: "255,228,225",
                      moccasin: "255,228,181",
                      navajowhite: "255,222,173",
                      navy: "0,0,128",
                      oldlace: "253,245,230",
                      olivedrab: "107,142,35",
                      olive: "128,128,0",
                      orangered: "255,69,0",
                      orange: "255,165,0",
                      orchid: "218,112,214",
                      palegoldenrod: "238,232,170",
                      palegreen: "152,251,152",
                      paleturquoise: "175,238,238",
                      palevioletred: "219,112,147",
                      papayawhip: "255,239,213",
                      peachpuff: "255,218,185",
                      peru: "205,133,63",
                      pink: "255,192,203",
                      plum: "221,160,221",
                      powderblue: "176,224,230",
                      purple: "128,0,128",
                      red: "255,0,0",
                      rosybrown: "188,143,143",
                      royalblue: "65,105,225",
                      saddlebrown: "139,69,19",
                      salmon: "250,128,114",
                      sandybrown: "244,164,96",
                      seagreen: "46,139,87",
                      seashell: "255,245,238",
                      sienna: "160,82,45",
                      silver: "192,192,192",
                      skyblue: "135,206,235",
                      slateblue: "106,90,205",
                      slategray: "112,128,144",
                      snow: "255,250,250",
                      springgreen: "0,255,127",
                      steelblue: "70,130,180",
                      tan: "210,180,140",
                      teal: "0,128,128",
                      thistle: "216,191,216",
                      tomato: "255,99,71",
                      turquoise: "64,224,208",
                      violet: "238,130,238",
                      wheat: "245,222,179",
                      whitesmoke: "245,245,245",
                      white: "255,255,255",
                      yellowgreen: "154,205,50",
                      yellow: "255,255,0",
                    },
                  },
                  Hooks: {
                    templates: {
                      textShadow: ["Color X Y Blur", "black 0px 0px 0px"],
                      boxShadow: [
                        "Color X Y Blur Spread",
                        "black 0px 0px 0px 0px",
                      ],
                      clip: ["Top Right Bottom Left", "0px 0px 0px 0px"],
                      backgroundPosition: ["X Y", "0% 0%"],
                      transformOrigin: ["X Y Z", "50% 50% 0px"],
                      perspectiveOrigin: ["X Y", "50% 50%"],
                    },
                    registered: {},
                    register: function () {
                      for (var e = 0; e < y.Lists.colors.length; e++) {
                        var t =
                          "color" === y.Lists.colors[e]
                            ? "0 0 0 1"
                            : "255 255 255 1";
                        y.Hooks.templates[y.Lists.colors[e]] = [
                          "Red Green Blue Alpha",
                          t,
                        ];
                      }
                      var n, r, i;
                      if (o)
                        for (n in y.Hooks.templates)
                          if (y.Hooks.templates.hasOwnProperty(n)) {
                            i = (r = y.Hooks.templates[n])[0].split(" ");
                            var s = r[1].match(y.RegEx.valueSplit);
                            "Color" === i[0] &&
                              (i.push(i.shift()),
                              s.push(s.shift()),
                              (y.Hooks.templates[n] = [
                                i.join(" "),
                                s.join(" "),
                              ]));
                          }
                      for (n in y.Hooks.templates)
                        if (y.Hooks.templates.hasOwnProperty(n))
                          for (var a in (i = (r =
                            y.Hooks.templates[n])[0].split(" ")))
                            if (i.hasOwnProperty(a)) {
                              var l = n + i[a],
                                c = a;
                              y.Hooks.registered[l] = [n, c];
                            }
                    },
                    getRoot: function (e) {
                      var t = y.Hooks.registered[e];
                      return t ? t[0] : e;
                    },
                    getUnit: function (e, t) {
                      var n =
                        (e.substr(t || 0, 5).match(/^[a-z%]+/) || [])[0] || "";
                      return n && c(y.Lists.units) ? n : "";
                    },
                    fixColors: function (e) {
                      return e.replace(
                        /(rgba?\(\s*)?(\b[a-z]+\b)/g,
                        function (e, t, n) {
                          return y.Lists.colorNames.hasOwnProperty(n)
                            ? (t || "rgba(") +
                                y.Lists.colorNames[n] +
                                (t ? "" : ",1)")
                            : t + n;
                        }
                      );
                    },
                    cleanRootPropertyValue: function (e, t) {
                      return (
                        y.RegEx.valueUnwrap.test(t) &&
                          (t = t.match(y.RegEx.valueUnwrap)[1]),
                        y.Values.isCSSNullValue(t) &&
                          (t = y.Hooks.templates[e][1]),
                        t
                      );
                    },
                    extractValue: function (e, t) {
                      var n = y.Hooks.registered[e];
                      if (n) {
                        var r = n[0],
                          i = n[1];
                        return (t = y.Hooks.cleanRootPropertyValue(r, t))
                          .toString()
                          .match(y.RegEx.valueSplit)[i];
                      }
                      return t;
                    },
                    injectValue: function (e, t, n) {
                      var r = y.Hooks.registered[e];
                      if (r) {
                        var i,
                          o = r[0],
                          s = r[1];
                        return (
                          ((i = (n = y.Hooks.cleanRootPropertyValue(o, n))
                            .toString()
                            .match(y.RegEx.valueSplit))[s] = t),
                          i.join(" ")
                        );
                      }
                      return n;
                    },
                  },
                  Normalizations: {
                    registered: {
                      clip: function (e, t, n) {
                        switch (e) {
                          case "name":
                            return "clip";
                          case "extract":
                            var r;
                            return (r =
                              y.RegEx.wrappedValueAlreadyExtracted.test(n)
                                ? n
                                : (r = n.toString().match(y.RegEx.valueUnwrap))
                                ? r[1].replace(/,(\s+)?/g, " ")
                                : n);
                          case "inject":
                            return "rect(" + n + ")";
                        }
                      },
                      blur: function (e, t, n) {
                        switch (e) {
                          case "name":
                            return g.State.isFirefox
                              ? "filter"
                              : "-webkit-filter";
                          case "extract":
                            var r = parseFloat(n);
                            if (!r && 0 !== r) {
                              var i = n
                                .toString()
                                .match(/blur\(([0-9]+[A-z]+)\)/i);
                              r = i ? i[1] : 0;
                            }
                            return r;
                          case "inject":
                            return parseFloat(n) ? "blur(" + n + ")" : "none";
                        }
                      },
                      opacity: function (e, t, n) {
                        if (o <= 8)
                          switch (e) {
                            case "name":
                              return "filter";
                            case "extract":
                              var r = n
                                .toString()
                                .match(/alpha\(opacity=(.*)\)/i);
                              return (n = r ? r[1] / 100 : 1);
                            case "inject":
                              return (
                                (t.style.zoom = 1),
                                parseFloat(n) >= 1
                                  ? ""
                                  : "alpha(opacity=" +
                                    parseInt(100 * parseFloat(n), 10) +
                                    ")"
                              );
                          }
                        else
                          switch (e) {
                            case "name":
                              return "opacity";
                            case "extract":
                            case "inject":
                              return n;
                          }
                      },
                    },
                    register: function () {
                      (o && !(o > 9)) ||
                        g.State.isGingerbread ||
                        (y.Lists.transformsBase = y.Lists.transformsBase.concat(
                          y.Lists.transforms3D
                        ));
                      for (var e = 0; e < y.Lists.transformsBase.length; e++)
                        !(function () {
                          var t = y.Lists.transformsBase[e];
                          y.Normalizations.registered[t] = function (e, n, i) {
                            switch (e) {
                              case "name":
                                return "transform";
                              case "extract":
                                return S(n) === r ||
                                  S(n).transformCache[t] === r
                                  ? /^scale/i.test(t)
                                    ? 1
                                    : 0
                                  : S(n).transformCache[t].replace(/[()]/g, "");
                              case "inject":
                                var o = !1;
                                switch (t.substr(0, t.length - 1)) {
                                  case "translate":
                                    o = !/(%|px|em|rem|vw|vh|\d)$/i.test(i);
                                    break;
                                  case "scal":
                                  case "scale":
                                    g.State.isAndroid &&
                                      S(n).transformCache[t] === r &&
                                      i < 1 &&
                                      (i = 1),
                                      (o = !/(\d)$/i.test(i));
                                    break;
                                  case "skew":
                                  case "rotate":
                                    o = !/(deg|\d)$/i.test(i);
                                }
                                return (
                                  o || (S(n).transformCache[t] = "(" + i + ")"),
                                  S(n).transformCache[t]
                                );
                            }
                          };
                        })();
                      for (var t = 0; t < y.Lists.colors.length; t++)
                        !(function () {
                          var e = y.Lists.colors[t];
                          y.Normalizations.registered[e] = function (t, n, i) {
                            switch (t) {
                              case "name":
                                return e;
                              case "extract":
                                var s;
                                if (
                                  y.RegEx.wrappedValueAlreadyExtracted.test(i)
                                )
                                  s = i;
                                else {
                                  var a,
                                    l = {
                                      black: "rgb(0, 0, 0)",
                                      blue: "rgb(0, 0, 255)",
                                      gray: "rgb(128, 128, 128)",
                                      green: "rgb(0, 128, 0)",
                                      red: "rgb(255, 0, 0)",
                                      white: "rgb(255, 255, 255)",
                                    };
                                  /^[A-z]+$/i.test(i)
                                    ? (a = l[i] !== r ? l[i] : l.black)
                                    : y.RegEx.isHex.test(i)
                                    ? (a =
                                        "rgb(" +
                                        y.Values.hexToRgb(i).join(" ") +
                                        ")")
                                    : /^rgba?\(/i.test(i) || (a = l.black),
                                    (s = (a || i)
                                      .toString()
                                      .match(y.RegEx.valueUnwrap)[1]
                                      .replace(/,(\s+)?/g, " "));
                                }
                                return (
                                  (!o || o > 8) &&
                                    3 === s.split(" ").length &&
                                    (s += " 1"),
                                  s
                                );
                              case "inject":
                                return /^rgb/.test(i)
                                  ? i
                                  : (o <= 8
                                      ? 4 === i.split(" ").length &&
                                        (i = i
                                          .split(/\s+/)
                                          .slice(0, 3)
                                          .join(" "))
                                      : 3 === i.split(" ").length &&
                                        (i += " 1"),
                                    (o <= 8 ? "rgb" : "rgba") +
                                      "(" +
                                      i
                                        .replace(/\s+/g, ",")
                                        .replace(/\.(\d)+(?=,)/g, "") +
                                      ")");
                            }
                          };
                        })();
                      function n(e, t, n) {
                        if (
                          ("border-box" ===
                            y
                              .getPropertyValue(t, "boxSizing")
                              .toString()
                              .toLowerCase()) ===
                          (n || !1)
                        ) {
                          var r,
                            i,
                            o = 0,
                            s =
                              "width" === e
                                ? ["Left", "Right"]
                                : ["Top", "Bottom"],
                            a = [
                              "padding" + s[0],
                              "padding" + s[1],
                              "border" + s[0] + "Width",
                              "border" + s[1] + "Width",
                            ];
                          for (r = 0; r < a.length; r++)
                            (i = parseFloat(y.getPropertyValue(t, a[r]))),
                              isNaN(i) || (o += i);
                          return n ? -o : o;
                        }
                        return 0;
                      }
                      function i(e, t) {
                        return function (r, i, o) {
                          switch (r) {
                            case "name":
                              return e;
                            case "extract":
                              return parseFloat(o) + n(e, i, t);
                            case "inject":
                              return parseFloat(o) - n(e, i, t) + "px";
                          }
                        };
                      }
                      (y.Normalizations.registered.innerWidth = i("width", !0)),
                        (y.Normalizations.registered.innerHeight = i(
                          "height",
                          !0
                        )),
                        (y.Normalizations.registered.outerWidth = i("width")),
                        (y.Normalizations.registered.outerHeight = i("height"));
                    },
                  },
                  Names: {
                    camelCase: function (e) {
                      return e.replace(/-(\w)/g, function (e, t) {
                        return t.toUpperCase();
                      });
                    },
                    SVGAttribute: function (e) {
                      var t = "width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";
                      return (
                        (o || (g.State.isAndroid && !g.State.isChrome)) &&
                          (t += "|transform"),
                        new RegExp("^(" + t + ")$", "i").test(e)
                      );
                    },
                    prefixCheck: function (e) {
                      if (g.State.prefixMatches[e])
                        return [g.State.prefixMatches[e], !0];
                      for (
                        var t = ["", "Webkit", "Moz", "ms", "O"],
                          n = 0,
                          r = t.length;
                        n < r;
                        n++
                      ) {
                        var i;
                        if (
                          ((i =
                            0 === n
                              ? e
                              : t[n] +
                                e.replace(/^\w/, function (e) {
                                  return e.toUpperCase();
                                })),
                          d.isString(g.State.prefixElement.style[i]))
                        )
                          return (g.State.prefixMatches[e] = i), [i, !0];
                      }
                      return [e, !1];
                    },
                  },
                  Values: {
                    hexToRgb: function (e) {
                      var t;
                      return (
                        (e = e.replace(
                          /^#?([a-f\d])([a-f\d])([a-f\d])$/i,
                          function (e, t, n, r) {
                            return t + t + n + n + r + r;
                          }
                        )),
                        (t = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(
                          e
                        ))
                          ? [
                              parseInt(t[1], 16),
                              parseInt(t[2], 16),
                              parseInt(t[3], 16),
                            ]
                          : [0, 0, 0]
                      );
                    },
                    isCSSNullValue: function (e) {
                      return (
                        !e ||
                        /^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(
                          e
                        )
                      );
                    },
                    getUnitType: function (e) {
                      return /^(rotate|skew)/i.test(e)
                        ? "deg"
                        : /(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(
                            e
                          )
                        ? ""
                        : "px";
                    },
                    getDisplayType: function (e) {
                      var t = e && e.tagName.toString().toLowerCase();
                      return /^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(
                        t
                      )
                        ? "inline"
                        : /^(li)$/i.test(t)
                        ? "list-item"
                        : /^(tr)$/i.test(t)
                        ? "table-row"
                        : /^(table)$/i.test(t)
                        ? "table"
                        : /^(tbody)$/i.test(t)
                        ? "table-row-group"
                        : "block";
                    },
                    addClass: function (e, t) {
                      if (e)
                        if (e.classList) e.classList.add(t);
                        else if (d.isString(e.className))
                          e.className += (e.className.length ? " " : "") + t;
                        else {
                          var n =
                            e.getAttribute(o <= 7 ? "className" : "class") ||
                            "";
                          e.setAttribute("class", n + (n ? " " : "") + t);
                        }
                    },
                    removeClass: function (e, t) {
                      if (e)
                        if (e.classList) e.classList.remove(t);
                        else if (d.isString(e.className))
                          e.className = e.className
                            .toString()
                            .replace(
                              new RegExp(
                                "(^|\\s)" + t.split(" ").join("|") + "(\\s|$)",
                                "gi"
                              ),
                              " "
                            );
                        else {
                          var n =
                            e.getAttribute(o <= 7 ? "className" : "class") ||
                            "";
                          e.setAttribute(
                            "class",
                            n.replace(
                              new RegExp(
                                "(^|s)" + t.split(" ").join("|") + "(s|$)",
                                "gi"
                              ),
                              " "
                            )
                          );
                        }
                    },
                  },
                  getPropertyValue: function (e, n, i, s) {
                    function a(e, n) {
                      var i = 0;
                      if (o <= 8) i = f.css(e, n);
                      else {
                        var l = !1;
                        /^(width|height)$/.test(n) &&
                          0 === y.getPropertyValue(e, "display") &&
                          ((l = !0),
                          y.setPropertyValue(
                            e,
                            "display",
                            y.Values.getDisplayType(e)
                          ));
                        var c,
                          u = function () {
                            l && y.setPropertyValue(e, "display", "none");
                          };
                        if (!s) {
                          if (
                            "height" === n &&
                            "border-box" !==
                              y
                                .getPropertyValue(e, "boxSizing")
                                .toString()
                                .toLowerCase()
                          ) {
                            var d =
                              e.offsetHeight -
                              (parseFloat(
                                y.getPropertyValue(e, "borderTopWidth")
                              ) || 0) -
                              (parseFloat(
                                y.getPropertyValue(e, "borderBottomWidth")
                              ) || 0) -
                              (parseFloat(
                                y.getPropertyValue(e, "paddingTop")
                              ) || 0) -
                              (parseFloat(
                                y.getPropertyValue(e, "paddingBottom")
                              ) || 0);
                            return u(), d;
                          }
                          if (
                            "width" === n &&
                            "border-box" !==
                              y
                                .getPropertyValue(e, "boxSizing")
                                .toString()
                                .toLowerCase()
                          ) {
                            var p =
                              e.offsetWidth -
                              (parseFloat(
                                y.getPropertyValue(e, "borderLeftWidth")
                              ) || 0) -
                              (parseFloat(
                                y.getPropertyValue(e, "borderRightWidth")
                              ) || 0) -
                              (parseFloat(
                                y.getPropertyValue(e, "paddingLeft")
                              ) || 0) -
                              (parseFloat(
                                y.getPropertyValue(e, "paddingRight")
                              ) || 0);
                            return u(), p;
                          }
                        }
                        (c =
                          S(e) === r
                            ? t.getComputedStyle(e, null)
                            : S(e).computedStyle
                            ? S(e).computedStyle
                            : (S(e).computedStyle = t.getComputedStyle(
                                e,
                                null
                              ))),
                          "borderColor" === n && (n = "borderTopColor"),
                          ("" !==
                            (i =
                              9 === o && "filter" === n
                                ? c.getPropertyValue(n)
                                : c[n]) &&
                            null !== i) ||
                            (i = e.style[n]),
                          u();
                      }
                      if (
                        "auto" === i &&
                        /^(top|right|bottom|left)$/i.test(n)
                      ) {
                        var h = a(e, "position");
                        ("fixed" === h ||
                          ("absolute" === h && /top|left/i.test(n))) &&
                          (i = f(e).position()[n] + "px");
                      }
                      return i;
                    }
                    var l;
                    if (y.Hooks.registered[n]) {
                      var c = n,
                        u = y.Hooks.getRoot(c);
                      i === r &&
                        (i = y.getPropertyValue(e, y.Names.prefixCheck(u)[0])),
                        y.Normalizations.registered[u] &&
                          (i = y.Normalizations.registered[u]("extract", e, i)),
                        (l = y.Hooks.extractValue(c, i));
                    } else if (y.Normalizations.registered[n]) {
                      var d, p;
                      "transform" !==
                        (d = y.Normalizations.registered[n]("name", e)) &&
                        ((p = a(e, y.Names.prefixCheck(d)[0])),
                        y.Values.isCSSNullValue(p) &&
                          y.Hooks.templates[n] &&
                          (p = y.Hooks.templates[n][1])),
                        (l = y.Normalizations.registered[n]("extract", e, p));
                    }
                    if (!/^[\d-]/.test(l)) {
                      var h = S(e);
                      if (h && h.isSVG && y.Names.SVGAttribute(n))
                        if (/^(height|width)$/i.test(n))
                          try {
                            l = e.getBBox()[n];
                          } catch (e) {
                            l = 0;
                          }
                        else l = e.getAttribute(n);
                      else l = a(e, y.Names.prefixCheck(n)[0]);
                    }
                    return (
                      y.Values.isCSSNullValue(l) && (l = 0),
                      g.debug >= 2 && console.log("Get " + n + ": " + l),
                      l
                    );
                  },
                  setPropertyValue: function (e, n, r, i, s) {
                    var a = n;
                    if ("scroll" === n)
                      s.container
                        ? (s.container["scroll" + s.direction] = r)
                        : "Left" === s.direction
                        ? t.scrollTo(r, s.alternateValue)
                        : t.scrollTo(s.alternateValue, r);
                    else if (
                      y.Normalizations.registered[n] &&
                      "transform" === y.Normalizations.registered[n]("name", e)
                    )
                      y.Normalizations.registered[n]("inject", e, r),
                        (a = "transform"),
                        (r = S(e).transformCache[n]);
                    else {
                      if (y.Hooks.registered[n]) {
                        var l = n,
                          c = y.Hooks.getRoot(n);
                        (i = i || y.getPropertyValue(e, c)),
                          (r = y.Hooks.injectValue(l, r, i)),
                          (n = c);
                      }
                      if (
                        (y.Normalizations.registered[n] &&
                          ((r = y.Normalizations.registered[n]("inject", e, r)),
                          (n = y.Normalizations.registered[n]("name", e))),
                        (a = y.Names.prefixCheck(n)[0]),
                        o <= 8)
                      )
                        try {
                          e.style[a] = r;
                        } catch (e) {
                          g.debug &&
                            console.log(
                              "Browser does not support [" +
                                r +
                                "] for [" +
                                a +
                                "]"
                            );
                        }
                      else {
                        var u = S(e);
                        u && u.isSVG && y.Names.SVGAttribute(n)
                          ? e.setAttribute(n, r)
                          : (e.style[a] = r);
                      }
                      g.debug >= 2 &&
                        console.log("Set " + n + " (" + a + "): " + r);
                    }
                    return [a, r];
                  },
                  flushTransformCache: function (e) {
                    var t = "",
                      n = S(e);
                    if (
                      (o || (g.State.isAndroid && !g.State.isChrome)) &&
                      n &&
                      n.isSVG
                    ) {
                      var r = function (t) {
                          return parseFloat(y.getPropertyValue(e, t));
                        },
                        i = {
                          translate: [r("translateX"), r("translateY")],
                          skewX: [r("skewX")],
                          skewY: [r("skewY")],
                          scale:
                            1 !== r("scale")
                              ? [r("scale"), r("scale")]
                              : [r("scaleX"), r("scaleY")],
                          rotate: [r("rotateZ"), 0, 0],
                        };
                      f.each(S(e).transformCache, function (e) {
                        /^translate/i.test(e)
                          ? (e = "translate")
                          : /^scale/i.test(e)
                          ? (e = "scale")
                          : /^rotate/i.test(e) && (e = "rotate"),
                          i[e] &&
                            ((t += e + "(" + i[e].join(" ") + ") "),
                            delete i[e]);
                      });
                    } else {
                      var s, a;
                      f.each(S(e).transformCache, function (n) {
                        if (
                          ((s = S(e).transformCache[n]),
                          "transformPerspective" === n)
                        )
                          return (a = s), !0;
                        9 === o && "rotateZ" === n && (n = "rotate"),
                          (t += n + s + " ");
                      }),
                        a && (t = "perspective" + a + " " + t);
                    }
                    y.setPropertyValue(e, "transform", t);
                  },
                });
                y.Hooks.register(),
                  y.Normalizations.register(),
                  (g.hook = function (e, t, n) {
                    var i;
                    return (
                      (e = u(e)),
                      f.each(e, function (e, o) {
                        if ((S(o) === r && g.init(o), n === r))
                          i === r && (i = y.getPropertyValue(o, t));
                        else {
                          var s = y.setPropertyValue(o, t, n);
                          "transform" === s[0] && g.CSS.flushTransformCache(o),
                            (i = s);
                        }
                      }),
                      i
                    );
                  });
                var b = function () {
                  var e;
                  function i() {
                    return o ? w.promise || null : s;
                  }
                  var o,
                    s,
                    a,
                    l,
                    p,
                    m,
                    v =
                      arguments[0] &&
                      (arguments[0].p ||
                        (f.isPlainObject(arguments[0].properties) &&
                          !arguments[0].properties.names) ||
                        d.isString(arguments[0].properties));
                  d.isWrapped(this)
                    ? ((o = !1), (a = 0), (l = this), (s = this))
                    : ((o = !0),
                      (a = 1),
                      (l = v
                        ? arguments[0].elements || arguments[0].e
                        : arguments[0]));
                  var w = { promise: null, resolver: null, rejecter: null };
                  if (
                    (o &&
                      g.Promise &&
                      (w.promise = new g.Promise(function (e, t) {
                        (w.resolver = e), (w.rejecter = t);
                      })),
                    v
                      ? ((p = arguments[0].properties || arguments[0].p),
                        (m = arguments[0].options || arguments[0].o))
                      : ((p = arguments[a]), (m = arguments[a + 1])),
                    (l = u(l)))
                  ) {
                    var x,
                      T = l.length,
                      E = 0;
                    if (
                      !/^(stop|finish|finishAll|pause|resume)$/i.test(p) &&
                      !f.isPlainObject(m)
                    ) {
                      var I = a + 1;
                      m = {};
                      for (var P = I; P < arguments.length; P++)
                        d.isArray(arguments[P]) ||
                        (!/^(fast|normal|slow)$/i.test(arguments[P]) &&
                          !/^\d/.test(arguments[P]))
                          ? d.isString(arguments[P]) || d.isArray(arguments[P])
                            ? (m.easing = arguments[P])
                            : d.isFunction(arguments[P]) &&
                              (m.complete = arguments[P])
                          : (m.duration = arguments[P]);
                    }
                    switch (p) {
                      case "scroll":
                        x = "scroll";
                        break;
                      case "reverse":
                        x = "reverse";
                        break;
                      case "pause":
                        var N = new Date().getTime();
                        return (
                          f.each(l, function (e, t) {
                            _(t, N);
                          }),
                          f.each(g.State.calls, function (e, t) {
                            var n = !1;
                            t &&
                              f.each(t[1], function (e, i) {
                                var o = m === r ? "" : m;
                                return (
                                  (!0 !== o &&
                                    t[2].queue !== o &&
                                    (m !== r || !1 !== t[2].queue)) ||
                                  (f.each(l, function (e, r) {
                                    if (r === i)
                                      return (
                                        (t[5] = { resume: !1 }), (n = !0), !1
                                      );
                                  }),
                                  !n && void 0)
                                );
                              });
                          }),
                          i()
                        );
                      case "resume":
                        return (
                          f.each(l, function (e, t) {
                            C(t);
                          }),
                          f.each(g.State.calls, function (e, t) {
                            var n = !1;
                            t &&
                              f.each(t[1], function (e, i) {
                                var o = m === r ? "" : m;
                                return (
                                  (!0 !== o &&
                                    t[2].queue !== o &&
                                    (m !== r || !1 !== t[2].queue)) ||
                                  !t[5] ||
                                  (f.each(l, function (e, r) {
                                    if (r === i)
                                      return (t[5].resume = !0), (n = !0), !1;
                                  }),
                                  !n && void 0)
                                );
                              });
                          }),
                          i()
                        );
                      case "finish":
                      case "finishAll":
                      case "stop":
                        f.each(l, function (e, t) {
                          S(t) &&
                            S(t).delayTimer &&
                            (clearTimeout(S(t).delayTimer.setTimeout),
                            S(t).delayTimer.next && S(t).delayTimer.next(),
                            delete S(t).delayTimer),
                            "finishAll" !== p ||
                              (!0 !== m && !d.isString(m)) ||
                              (f.each(
                                f.queue(t, d.isString(m) ? m : ""),
                                function (e, t) {
                                  d.isFunction(t) && t();
                                }
                              ),
                              f.queue(t, d.isString(m) ? m : "", []));
                        });
                        var D = [];
                        return (
                          f.each(g.State.calls, function (e, t) {
                            t &&
                              f.each(t[1], function (n, i) {
                                var o = m === r ? "" : m;
                                if (
                                  !0 !== o &&
                                  t[2].queue !== o &&
                                  (m !== r || !1 !== t[2].queue)
                                )
                                  return !0;
                                f.each(l, function (n, r) {
                                  if (r === i)
                                    if (
                                      ((!0 === m || d.isString(m)) &&
                                        (f.each(
                                          f.queue(r, d.isString(m) ? m : ""),
                                          function (e, t) {
                                            d.isFunction(t) && t(null, !0);
                                          }
                                        ),
                                        f.queue(r, d.isString(m) ? m : "", [])),
                                      "stop" === p)
                                    ) {
                                      var s = S(r);
                                      s &&
                                        s.tweensContainer &&
                                        !1 !== o &&
                                        f.each(
                                          s.tweensContainer,
                                          function (e, t) {
                                            t.endValue = t.currentValue;
                                          }
                                        ),
                                        D.push(e);
                                    } else
                                      ("finish" !== p && "finishAll" !== p) ||
                                        (t[2].duration = 1);
                                });
                              });
                          }),
                          "stop" === p &&
                            (f.each(D, function (e, t) {
                              O(t, !0);
                            }),
                            w.promise && w.resolver(l)),
                          i()
                        );
                      default:
                        if (!f.isPlainObject(p) || d.isEmptyObject(p)) {
                          if (d.isString(p) && g.Redirects[p]) {
                            var j = (e = f.extend({}, m)).duration,
                              B = e.delay || 0;
                            return (
                              !0 === e.backwards &&
                                (l = f.extend(!0, [], l).reverse()),
                              f.each(l, function (t, n) {
                                parseFloat(e.stagger)
                                  ? (e.delay = B + parseFloat(e.stagger) * t)
                                  : d.isFunction(e.stagger) &&
                                    (e.delay = B + e.stagger.call(n, t, T)),
                                  e.drag &&
                                    ((e.duration =
                                      parseFloat(j) ||
                                      (/^(callout|transition)/.test(p)
                                        ? 1e3
                                        : h)),
                                    (e.duration = Math.max(
                                      e.duration *
                                        (e.backwards ? 1 - t / T : (t + 1) / T),
                                      0.75 * e.duration,
                                      200
                                    ))),
                                  g.Redirects[p].call(
                                    n,
                                    n,
                                    e || {},
                                    t,
                                    T,
                                    l,
                                    w.promise ? w : r
                                  );
                              }),
                              i()
                            );
                          }
                          var F =
                            "Velocity: First argument (" +
                            p +
                            ") was not a property map, a known action, or a registered redirect. Aborting.";
                          return (
                            w.promise
                              ? w.rejecter(new Error(F))
                              : t.console && console.log(F),
                            i()
                          );
                        }
                        x = "start";
                    }
                    var L = {
                        lastParent: null,
                        lastPosition: null,
                        lastFontSize: null,
                        lastPercentToPxWidth: null,
                        lastPercentToPxHeight: null,
                        lastEmToPx: null,
                        remToPx: null,
                        vwToPx: null,
                        vhToPx: null,
                      },
                      V = [];
                    f.each(l, function (e, t) {
                      d.isNode(t) && R(t, e);
                    }),
                      ((e = f.extend({}, g.defaults, m)).loop = parseInt(
                        e.loop,
                        10
                      ));
                    var M = 2 * e.loop - 1;
                    if (e.loop)
                      for (var H = 0; H < M; H++) {
                        var W = { delay: e.delay, progress: e.progress };
                        H === M - 1 &&
                          ((W.display = e.display),
                          (W.visibility = e.visibility),
                          (W.complete = e.complete)),
                          b(l, "reverse", W);
                      }
                    return i();
                  }
                  function R(e, i) {
                    var o,
                      s,
                      a = f.extend({}, g.defaults, m),
                      u = {};
                    switch (
                      (S(e) === r && g.init(e),
                      parseFloat(a.delay) &&
                        !1 !== a.queue &&
                        f.queue(e, a.queue, function (t) {
                          g.velocityQueueEntryFlag = !0;
                          var n = g.State.delayedElements.count++;
                          g.State.delayedElements[n] = e;
                          var r,
                            i =
                              ((r = n),
                              function () {
                                (g.State.delayedElements[r] = !1), t();
                              });
                          (S(e).delayBegin = new Date().getTime()),
                            (S(e).delay = parseFloat(a.delay)),
                            (S(e).delayTimer = {
                              setTimeout: setTimeout(t, parseFloat(a.delay)),
                              next: i,
                            });
                        }),
                      a.duration.toString().toLowerCase())
                    ) {
                      case "fast":
                        a.duration = 200;
                        break;
                      case "normal":
                        a.duration = h;
                        break;
                      case "slow":
                        a.duration = 600;
                        break;
                      default:
                        a.duration = parseFloat(a.duration) || 1;
                    }
                    function v(s) {
                      var h, v, b, _, C, O, I;
                      if (a.begin && 0 === E)
                        try {
                          a.begin.call(l, l);
                        } catch (e) {
                          setTimeout(function () {
                            throw e;
                          }, 1);
                        }
                      if ("scroll" === x) {
                        var P,
                          N,
                          D,
                          j = /^x$/i.test(a.axis) ? "Left" : "Top",
                          B = parseFloat(a.offset) || 0;
                        a.container
                          ? d.isWrapped(a.container) || d.isNode(a.container)
                            ? ((a.container = a.container[0] || a.container),
                              (D =
                                (P = a.container["scroll" + j]) +
                                f(e).position()[j.toLowerCase()] +
                                B))
                            : (a.container = null)
                          : ((P =
                              g.State.scrollAnchor[
                                g.State["scrollProperty" + j]
                              ]),
                            (N =
                              g.State.scrollAnchor[
                                g.State[
                                  "scrollProperty" +
                                    ("Left" === j ? "Top" : "Left")
                                ]
                              ]),
                            (D = f(e).offset()[j.toLowerCase()] + B)),
                          (u = {
                            scroll: {
                              rootPropertyValue: !1,
                              startValue: P,
                              currentValue: P,
                              endValue: D,
                              unitType: "",
                              easing: a.easing,
                              scrollData: {
                                container: a.container,
                                direction: j,
                                alternateValue: N,
                              },
                            },
                            element: e,
                          }),
                          g.debug &&
                            console.log(
                              "tweensContainer (scroll): ",
                              u.scroll,
                              e
                            );
                      } else if ("reverse" === x) {
                        if (!(h = S(e))) return;
                        if (!h.tweensContainer)
                          return void f.dequeue(e, a.queue);
                        for (var F in ("none" === h.opts.display &&
                          (h.opts.display = "auto"),
                        "hidden" === h.opts.visibility &&
                          (h.opts.visibility = "visible"),
                        (h.opts.loop = !1),
                        (h.opts.begin = null),
                        (h.opts.complete = null),
                        m.easing || delete a.easing,
                        m.duration || delete a.duration,
                        (a = f.extend({}, h.opts, a)),
                        (v = f.extend(!0, {}, h ? h.tweensContainer : null))))
                          if (v.hasOwnProperty(F) && "element" !== F) {
                            var M = v[F].startValue;
                            (v[F].startValue = v[F].currentValue =
                              v[F].endValue),
                              (v[F].endValue = M),
                              d.isEmptyObject(m) || (v[F].easing = a.easing),
                              g.debug &&
                                console.log(
                                  "reverse tweensContainer (" +
                                    F +
                                    "): " +
                                    JSON.stringify(v[F]),
                                  e
                                );
                          }
                        u = v;
                      } else if ("start" === x) {
                        (h = S(e)) &&
                          h.tweensContainer &&
                          !0 === h.isAnimating &&
                          (v = h.tweensContainer);
                        var H = function (i, s) {
                          var l,
                            c = y.Hooks.getRoot(i),
                            p = !1,
                            m = s[0],
                            b = s[1],
                            w = s[2];
                          if (
                            (h && h.isSVG) ||
                            "tween" === c ||
                            !1 !== y.Names.prefixCheck(c)[1] ||
                            y.Normalizations.registered[c] !== r
                          ) {
                            ((a.display !== r &&
                              null !== a.display &&
                              "none" !== a.display) ||
                              (a.visibility !== r &&
                                "hidden" !== a.visibility)) &&
                              /opacity|filter/.test(i) &&
                              !w &&
                              0 !== m &&
                              (w = 0),
                              a._cacheValues && v && v[i]
                                ? (w === r &&
                                    (w = v[i].endValue + v[i].unitType),
                                  (p = h.rootPropertyValueCache[c]))
                                : y.Hooks.registered[i]
                                ? w === r
                                  ? ((p = y.getPropertyValue(e, c)),
                                    (w = y.getPropertyValue(e, i, p)))
                                  : (p = y.Hooks.templates[c][1])
                                : w === r && (w = y.getPropertyValue(e, i));
                            var x,
                              S,
                              _,
                              C = !1,
                              T = function (e, t) {
                                var n, r;
                                return (
                                  (r = (t || "0")
                                    .toString()
                                    .toLowerCase()
                                    .replace(/[%A-z]+$/, function (e) {
                                      return (n = e), "";
                                    })),
                                  n || (n = y.Values.getUnitType(e)),
                                  [r, n]
                                );
                              };
                            if (w !== m && d.isString(w) && d.isString(m)) {
                              l = "";
                              var E = 0,
                                k = 0,
                                A = [],
                                O = [],
                                I = 0,
                                P = 0,
                                N = 0;
                              for (
                                w = y.Hooks.fixColors(w),
                                  m = y.Hooks.fixColors(m);
                                E < w.length && k < m.length;

                              ) {
                                var D = w[E],
                                  j = m[k];
                                if (/[\d\.-]/.test(D) && /[\d\.-]/.test(j)) {
                                  for (
                                    var B = D, F = j, V = ".", M = ".";
                                    ++E < w.length;

                                  ) {
                                    if ((D = w[E]) === V) V = "..";
                                    else if (!/\d/.test(D)) break;
                                    B += D;
                                  }
                                  for (; ++k < m.length; ) {
                                    if ((j = m[k]) === M) M = "..";
                                    else if (!/\d/.test(j)) break;
                                    F += j;
                                  }
                                  var H = y.Hooks.getUnit(w, E),
                                    W = y.Hooks.getUnit(m, k);
                                  if (
                                    ((E += H.length), (k += W.length), H === W)
                                  )
                                    B === F
                                      ? (l += B + H)
                                      : ((l +=
                                          "{" +
                                          A.length +
                                          (P ? "!" : "") +
                                          "}" +
                                          H),
                                        A.push(parseFloat(B)),
                                        O.push(parseFloat(F)));
                                  else {
                                    var R = parseFloat(B),
                                      q = parseFloat(F);
                                    (l +=
                                      (I < 5 ? "calc" : "") +
                                      "(" +
                                      (R
                                        ? "{" + A.length + (P ? "!" : "") + "}"
                                        : "0") +
                                      H +
                                      " + " +
                                      (q
                                        ? "{" +
                                          (A.length + (R ? 1 : 0)) +
                                          (P ? "!" : "") +
                                          "}"
                                        : "0") +
                                      W +
                                      ")"),
                                      R && (A.push(R), O.push(0)),
                                      q && (A.push(0), O.push(q));
                                  }
                                } else {
                                  if (D !== j) {
                                    I = 0;
                                    break;
                                  }
                                  (l += D),
                                    E++,
                                    k++,
                                    (0 === I && "c" === D) ||
                                    (1 === I && "a" === D) ||
                                    (2 === I && "l" === D) ||
                                    (3 === I && "c" === D) ||
                                    (I >= 4 && "(" === D)
                                      ? I++
                                      : ((I && I < 5) ||
                                          (I >= 4 && ")" === D && --I < 5)) &&
                                        (I = 0),
                                    (0 === P && "r" === D) ||
                                    (1 === P && "g" === D) ||
                                    (2 === P && "b" === D) ||
                                    (3 === P && "a" === D) ||
                                    (P >= 3 && "(" === D)
                                      ? (3 === P && "a" === D && (N = 1), P++)
                                      : N && "," === D
                                      ? ++N > 3 && (P = N = 0)
                                      : ((N && P < (N ? 5 : 4)) ||
                                          (P >= (N ? 4 : 3) &&
                                            ")" === D &&
                                            --P < (N ? 5 : 4))) &&
                                        (P = N = 0);
                                }
                              }
                              (E === w.length && k === m.length) ||
                                (g.debug &&
                                  console.error(
                                    'Trying to pattern match mis-matched strings ["' +
                                      m +
                                      '", "' +
                                      w +
                                      '"]'
                                  ),
                                (l = r)),
                                l &&
                                  (A.length
                                    ? (g.debug &&
                                        console.log(
                                          'Pattern found "' + l + '" -> ',
                                          A,
                                          O,
                                          "[" + w + "," + m + "]"
                                        ),
                                      (w = A),
                                      (m = O),
                                      (S = _ = ""))
                                    : (l = r));
                            }
                            l ||
                              ((w = (x = T(i, w))[0]),
                              (_ = x[1]),
                              (m = (x = T(i, m))[0].replace(
                                /^([+-\/*])=/,
                                function (e, t) {
                                  return (C = t), "";
                                }
                              )),
                              (S = x[1]),
                              (w = parseFloat(w) || 0),
                              (m = parseFloat(m) || 0),
                              "%" === S &&
                                (/^(fontSize|lineHeight)$/.test(i)
                                  ? ((m /= 100), (S = "em"))
                                  : /^scale/.test(i)
                                  ? ((m /= 100), (S = ""))
                                  : /(Red|Green|Blue)$/i.test(i) &&
                                    ((m = (m / 100) * 255), (S = ""))));
                            if (/[\/*]/.test(C)) S = _;
                            else if (_ !== S && 0 !== w)
                              if (0 === m) S = _;
                              else {
                                o =
                                  o ||
                                  (function () {
                                    var r = {
                                        myParent: e.parentNode || n.body,
                                        position: y.getPropertyValue(
                                          e,
                                          "position"
                                        ),
                                        fontSize: y.getPropertyValue(
                                          e,
                                          "fontSize"
                                        ),
                                      },
                                      i =
                                        r.position === L.lastPosition &&
                                        r.myParent === L.lastParent,
                                      o = r.fontSize === L.lastFontSize;
                                    (L.lastParent = r.myParent),
                                      (L.lastPosition = r.position),
                                      (L.lastFontSize = r.fontSize);
                                    var s = 100,
                                      a = {};
                                    if (o && i)
                                      (a.emToPx = L.lastEmToPx),
                                        (a.percentToPxWidth =
                                          L.lastPercentToPxWidth),
                                        (a.percentToPxHeight =
                                          L.lastPercentToPxHeight);
                                    else {
                                      var l =
                                        h && h.isSVG
                                          ? n.createElementNS(
                                              "http://www.w3.org/2000/svg",
                                              "rect"
                                            )
                                          : n.createElement("div");
                                      g.init(l),
                                        r.myParent.appendChild(l),
                                        f.each(
                                          [
                                            "overflow",
                                            "overflowX",
                                            "overflowY",
                                          ],
                                          function (e, t) {
                                            g.CSS.setPropertyValue(
                                              l,
                                              t,
                                              "hidden"
                                            );
                                          }
                                        ),
                                        g.CSS.setPropertyValue(
                                          l,
                                          "position",
                                          r.position
                                        ),
                                        g.CSS.setPropertyValue(
                                          l,
                                          "fontSize",
                                          r.fontSize
                                        ),
                                        g.CSS.setPropertyValue(
                                          l,
                                          "boxSizing",
                                          "content-box"
                                        ),
                                        f.each(
                                          [
                                            "minWidth",
                                            "maxWidth",
                                            "width",
                                            "minHeight",
                                            "maxHeight",
                                            "height",
                                          ],
                                          function (e, t) {
                                            g.CSS.setPropertyValue(
                                              l,
                                              t,
                                              "100%"
                                            );
                                          }
                                        ),
                                        g.CSS.setPropertyValue(
                                          l,
                                          "paddingLeft",
                                          "100em"
                                        ),
                                        (a.percentToPxWidth =
                                          L.lastPercentToPxWidth =
                                            (parseFloat(
                                              y.getPropertyValue(
                                                l,
                                                "width",
                                                null,
                                                !0
                                              )
                                            ) || 1) / s),
                                        (a.percentToPxHeight =
                                          L.lastPercentToPxHeight =
                                            (parseFloat(
                                              y.getPropertyValue(
                                                l,
                                                "height",
                                                null,
                                                !0
                                              )
                                            ) || 1) / s),
                                        (a.emToPx = L.lastEmToPx =
                                          (parseFloat(
                                            y.getPropertyValue(l, "paddingLeft")
                                          ) || 1) / s),
                                        r.myParent.removeChild(l);
                                    }
                                    return (
                                      null === L.remToPx &&
                                        (L.remToPx =
                                          parseFloat(
                                            y.getPropertyValue(
                                              n.body,
                                              "fontSize"
                                            )
                                          ) || 16),
                                      null === L.vwToPx &&
                                        ((L.vwToPx =
                                          parseFloat(t.innerWidth) / 100),
                                        (L.vhToPx =
                                          parseFloat(t.innerHeight) / 100)),
                                      (a.remToPx = L.remToPx),
                                      (a.vwToPx = L.vwToPx),
                                      (a.vhToPx = L.vhToPx),
                                      g.debug >= 1 &&
                                        console.log(
                                          "Unit ratios: " + JSON.stringify(a),
                                          e
                                        ),
                                      a
                                    );
                                  })();
                                var $ =
                                  /margin|padding|left|right|width|text|word|letter/i.test(
                                    i
                                  ) ||
                                  /X$/.test(i) ||
                                  "x" === i
                                    ? "x"
                                    : "y";
                                switch (_) {
                                  case "%":
                                    w *=
                                      "x" === $
                                        ? o.percentToPxWidth
                                        : o.percentToPxHeight;
                                    break;
                                  case "px":
                                    break;
                                  default:
                                    w *= o[_ + "ToPx"];
                                }
                                switch (S) {
                                  case "%":
                                    w *=
                                      1 /
                                      ("x" === $
                                        ? o.percentToPxWidth
                                        : o.percentToPxHeight);
                                    break;
                                  case "px":
                                    break;
                                  default:
                                    w *= 1 / o[S + "ToPx"];
                                }
                              }
                            switch (C) {
                              case "+":
                                m = w + m;
                                break;
                              case "-":
                                m = w - m;
                                break;
                              case "*":
                                m *= w;
                                break;
                              case "/":
                                m = w / m;
                            }
                            (u[i] = {
                              rootPropertyValue: p,
                              startValue: w,
                              currentValue: w,
                              endValue: m,
                              unitType: S,
                              easing: b,
                            }),
                              l && (u[i].pattern = l),
                              g.debug &&
                                console.log(
                                  "tweensContainer (" +
                                    i +
                                    "): " +
                                    JSON.stringify(u[i]),
                                  e
                                );
                          } else
                            g.debug &&
                              console.log(
                                "Skipping [" +
                                  c +
                                  "] due to a lack of browser support."
                              );
                        };
                        for (var W in p)
                          if (p.hasOwnProperty(W)) {
                            var R = y.Names.camelCase(W),
                              q =
                                ((b = p[W]),
                                (_ = void 0),
                                (C = void 0),
                                (O = void 0),
                                (I = void 0),
                                d.isFunction(b) && (b = b.call(e, i, T)),
                                d.isArray(b)
                                  ? ((C = b[0]),
                                    (!d.isArray(b[1]) && /^[\d-]/.test(b[1])) ||
                                    d.isFunction(b[1]) ||
                                    y.RegEx.isHex.test(b[1])
                                      ? (I = b[1])
                                      : (d.isString(b[1]) &&
                                          !y.RegEx.isHex.test(b[1]) &&
                                          g.Easings[b[1]]) ||
                                        d.isArray(b[1])
                                      ? ((O = _ ? b[1] : k(b[1], a.duration)),
                                        (I = b[2]))
                                      : (I = b[1] || b[2]))
                                  : (C = b),
                                _ || (O = O || a.easing),
                                d.isFunction(C) && (C = C.call(e, i, T)),
                                d.isFunction(I) && (I = I.call(e, i, T)),
                                [C || 0, O, I]);
                            if (c(y.Lists.colors)) {
                              var $ = q[0],
                                z = q[1],
                                U = q[2];
                              if (y.RegEx.isHex.test($)) {
                                for (
                                  var Q = ["Red", "Green", "Blue"],
                                    Y = y.Values.hexToRgb($),
                                    K = U ? y.Values.hexToRgb(U) : r,
                                    X = 0;
                                  X < Q.length;
                                  X++
                                ) {
                                  var G = [Y[X]];
                                  z && G.push(z),
                                    K !== r && G.push(K[X]),
                                    H(R + Q[X], G);
                                }
                                continue;
                              }
                            }
                            H(R, q);
                          }
                        u.element = e;
                      }
                      u.element &&
                        (y.Values.addClass(e, "velocity-animating"),
                        V.push(u),
                        (h = S(e)) &&
                          ("" === a.queue &&
                            ((h.tweensContainer = u), (h.opts = a)),
                          (h.isAnimating = !0)),
                        E === T - 1
                          ? (g.State.calls.push([
                              V,
                              l,
                              a,
                              null,
                              w.resolver,
                              null,
                              0,
                            ]),
                            !1 === g.State.isTicking &&
                              ((g.State.isTicking = !0), A()))
                          : E++);
                    }
                    if (
                      (!1 !== g.mock &&
                        (!0 === g.mock
                          ? (a.duration = a.delay = 1)
                          : ((a.duration *= parseFloat(g.mock) || 1),
                            (a.delay *= parseFloat(g.mock) || 1))),
                      (a.easing = k(a.easing, a.duration)),
                      a.begin && !d.isFunction(a.begin) && (a.begin = null),
                      a.progress &&
                        !d.isFunction(a.progress) &&
                        (a.progress = null),
                      a.complete &&
                        !d.isFunction(a.complete) &&
                        (a.complete = null),
                      a.display !== r &&
                        null !== a.display &&
                        ((a.display = a.display.toString().toLowerCase()),
                        "auto" === a.display &&
                          (a.display = g.CSS.Values.getDisplayType(e))),
                      a.visibility !== r &&
                        null !== a.visibility &&
                        (a.visibility = a.visibility.toString().toLowerCase()),
                      (a.mobileHA =
                        a.mobileHA &&
                        g.State.isMobile &&
                        !g.State.isGingerbread),
                      !1 === a.queue)
                    )
                      if (a.delay) {
                        var b = g.State.delayedElements.count++;
                        g.State.delayedElements[b] = e;
                        var _ =
                          ((s = b),
                          function () {
                            (g.State.delayedElements[s] = !1), v();
                          });
                        (S(e).delayBegin = new Date().getTime()),
                          (S(e).delay = parseFloat(a.delay)),
                          (S(e).delayTimer = {
                            setTimeout: setTimeout(v, parseFloat(a.delay)),
                            next: _,
                          });
                      } else v();
                    else
                      f.queue(e, a.queue, function (e, t) {
                        if (!0 === t) return w.promise && w.resolver(l), !0;
                        (g.velocityQueueEntryFlag = !0), v();
                      });
                    ("" !== a.queue && "fx" !== a.queue) ||
                      "inprogress" === f.queue(e)[0] ||
                      f.dequeue(e);
                  }
                  w.promise &&
                    (p && m && !1 === m.promiseRejectEmpty
                      ? w.resolver()
                      : w.rejecter());
                };
                (g = f.extend(b, g)).animate = b;
                var w = t.requestAnimationFrame || s;
                if (!g.State.isMobile && n.hidden !== r) {
                  var x = function () {
                    n.hidden
                      ? ((w = function (e) {
                          return setTimeout(function () {
                            e(!0);
                          }, 16);
                        }),
                        A())
                      : (w = t.requestAnimationFrame || s);
                  };
                  x(), n.addEventListener("visibilitychange", x);
                }
                return (
                  (e.Velocity = g),
                  e !== t &&
                    ((e.fn.velocity = b),
                    (e.fn.velocity.defaults = g.defaults)),
                  f.each(["Down", "Up"], function (e, t) {
                    g.Redirects["slide" + t] = function (e, n, i, o, s, a) {
                      var l = f.extend({}, n),
                        c = l.begin,
                        u = l.complete,
                        d = {},
                        p = {
                          height: "",
                          marginTop: "",
                          marginBottom: "",
                          paddingTop: "",
                          paddingBottom: "",
                        };
                      l.display === r &&
                        (l.display =
                          "Down" === t
                            ? "inline" === g.CSS.Values.getDisplayType(e)
                              ? "inline-block"
                              : "block"
                            : "none"),
                        (l.begin = function () {
                          for (var n in (0 === i && c && c.call(s, s), p))
                            if (p.hasOwnProperty(n)) {
                              d[n] = e.style[n];
                              var r = y.getPropertyValue(e, n);
                              p[n] = "Down" === t ? [r, 0] : [0, r];
                            }
                          (d.overflow = e.style.overflow),
                            (e.style.overflow = "hidden");
                        }),
                        (l.complete = function () {
                          for (var t in d)
                            d.hasOwnProperty(t) && (e.style[t] = d[t]);
                          i === o - 1 &&
                            (u && u.call(s, s), a && a.resolver(s));
                        }),
                        g(e, p, l);
                    };
                  }),
                  f.each(["In", "Out"], function (e, t) {
                    g.Redirects["fade" + t] = function (e, n, i, o, s, a) {
                      var l = f.extend({}, n),
                        c = l.complete,
                        u = { opacity: "In" === t ? 1 : 0 };
                      0 !== i && (l.begin = null),
                        (l.complete =
                          i !== o - 1
                            ? null
                            : function () {
                                c && c.call(s, s), a && a.resolver(s);
                              }),
                        l.display === r &&
                          (l.display = "In" === t ? "auto" : "none"),
                        g(this, u, l);
                    };
                  }),
                  g
                );
              }
              function S(e) {
                var t = f.data(e, "velocity");
                return null === t ? r : t;
              }
              function _(e, t) {
                var n = S(e);
                n &&
                  n.delayTimer &&
                  !n.delayPaused &&
                  ((n.delayRemaining = n.delay - t + n.delayBegin),
                  (n.delayPaused = !0),
                  clearTimeout(n.delayTimer.setTimeout));
              }
              function C(e, t) {
                var n = S(e);
                n &&
                  n.delayTimer &&
                  n.delayPaused &&
                  ((n.delayPaused = !1),
                  (n.delayTimer.setTimeout = setTimeout(
                    n.delayTimer.next,
                    n.delayRemaining
                  )));
              }
              function T(e) {
                return function (t) {
                  return Math.round(t * e) * (1 / e);
                };
              }
              function E(e, n, r, i) {
                var o = 4,
                  s = 0.001,
                  a = 1e-7,
                  l = 10,
                  c = 11,
                  u = 1 / (c - 1),
                  f = "Float32Array" in t;
                if (4 !== arguments.length) return !1;
                for (var d = 0; d < 4; ++d)
                  if (
                    "number" != typeof arguments[d] ||
                    isNaN(arguments[d]) ||
                    !isFinite(arguments[d])
                  )
                    return !1;
                (e = Math.min(e, 1)),
                  (r = Math.min(r, 1)),
                  (e = Math.max(e, 0)),
                  (r = Math.max(r, 0));
                var p = f ? new Float32Array(c) : new Array(c);
                function h(e, t) {
                  return 1 - 3 * t + 3 * e;
                }
                function m(e, t) {
                  return 3 * t - 6 * e;
                }
                function g(e) {
                  return 3 * e;
                }
                function v(e, t, n) {
                  return ((h(t, n) * e + m(t, n)) * e + g(t)) * e;
                }
                function y(e, t, n) {
                  return 3 * h(t, n) * e * e + 2 * m(t, n) * e + g(t);
                }
                function b(t, n) {
                  for (var i = 0; i < o; ++i) {
                    var s = y(n, e, r);
                    if (0 === s) return n;
                    n -= (v(n, e, r) - t) / s;
                  }
                  return n;
                }
                function w() {
                  for (var t = 0; t < c; ++t) p[t] = v(t * u, e, r);
                }
                function x(t, n, i) {
                  var o,
                    s,
                    c = 0;
                  do {
                    (o = v((s = n + (i - n) / 2), e, r) - t) > 0
                      ? (i = s)
                      : (n = s);
                  } while (Math.abs(o) > a && ++c < l);
                  return s;
                }
                function S(t) {
                  for (var n = 0, i = 1, o = c - 1; i !== o && p[i] <= t; ++i)
                    n += u;
                  --i;
                  var a = n + ((t - p[i]) / (p[i + 1] - p[i])) * u,
                    l = y(a, e, r);
                  return l >= s ? b(t, a) : 0 === l ? a : x(t, n, n + u);
                }
                var _ = !1;
                function C() {
                  (_ = !0), (e === n && r === i) || w();
                }
                var T = function (t) {
                  return (
                    _ || C(),
                    e === n && r === i
                      ? t
                      : 0 === t
                      ? 0
                      : 1 === t
                      ? 1
                      : v(S(t), n, i)
                  );
                };
                T.getControlPoints = function () {
                  return [
                    { x: e, y: n },
                    { x: r, y: i },
                  ];
                };
                var E = "generateBezier(" + [e, n, r, i] + ")";
                return (
                  (T.toString = function () {
                    return E;
                  }),
                  T
                );
              }
              function k(e, t) {
                var n = e;
                return (
                  d.isString(e)
                    ? g.Easings[e] || (n = !1)
                    : (n =
                        d.isArray(e) && 1 === e.length
                          ? T.apply(null, e)
                          : d.isArray(e) && 2 === e.length
                          ? v.apply(null, e.concat([t]))
                          : !(!d.isArray(e) || 4 !== e.length) &&
                            E.apply(null, e)),
                  !1 === n &&
                    (n = g.Easings[g.defaults.easing] ? g.defaults.easing : m),
                  n
                );
              }
              function A(e) {
                if (e) {
                  var t = g.timestamp && !0 !== e ? e : a.now(),
                    n = g.State.calls.length;
                  n > 1e4 &&
                    ((g.State.calls = (function (e) {
                      for (
                        var t = -1, n = e ? e.length : 0, r = [];
                        ++t < n;

                      ) {
                        var i = e[t];
                        i && r.push(i);
                      }
                      return r;
                    })(g.State.calls)),
                    (n = g.State.calls.length));
                  for (var i = 0; i < n; i++)
                    if (g.State.calls[i]) {
                      var s = g.State.calls[i],
                        l = s[0],
                        c = s[2],
                        u = s[3],
                        p = !!u,
                        h = null,
                        m = s[5],
                        v = s[6];
                      if ((u || (u = g.State.calls[i][3] = t - 16), m)) {
                        if (!0 !== m.resume) continue;
                        (u = s[3] = Math.round(t - v - 16)), (s[5] = null);
                      }
                      v = s[6] = t - u;
                      for (
                        var b = Math.min(v / c.duration, 1),
                          x = 0,
                          _ = l.length;
                        x < _;
                        x++
                      ) {
                        var C = l[x],
                          T = C.element;
                        if (S(T)) {
                          var E = !1;
                          if (
                            c.display !== r &&
                            null !== c.display &&
                            "none" !== c.display
                          ) {
                            if ("flex" === c.display) {
                              f.each(
                                [
                                  "-webkit-box",
                                  "-moz-box",
                                  "-ms-flexbox",
                                  "-webkit-flex",
                                ],
                                function (e, t) {
                                  y.setPropertyValue(T, "display", t);
                                }
                              );
                            }
                            y.setPropertyValue(T, "display", c.display);
                          }
                          for (var k in (c.visibility !== r &&
                            "hidden" !== c.visibility &&
                            y.setPropertyValue(T, "visibility", c.visibility),
                          C))
                            if (C.hasOwnProperty(k) && "element" !== k) {
                              var I,
                                P = C[k],
                                N = d.isString(P.easing)
                                  ? g.Easings[P.easing]
                                  : P.easing;
                              if (d.isString(P.pattern)) {
                                var D =
                                  1 === b
                                    ? function (e, t, n) {
                                        var r = P.endValue[t];
                                        return n ? Math.round(r) : r;
                                      }
                                    : function (e, t, n) {
                                        var r = P.startValue[t],
                                          i = P.endValue[t] - r,
                                          o = r + i * N(b, c, i);
                                        return n ? Math.round(o) : o;
                                      };
                                I = P.pattern.replace(/{(\d+)(!)?}/g, D);
                              } else if (1 === b) I = P.endValue;
                              else {
                                var j = P.endValue - P.startValue;
                                I = P.startValue + j * N(b, c, j);
                              }
                              if (!p && I === P.currentValue) continue;
                              if (((P.currentValue = I), "tween" === k)) h = I;
                              else {
                                var B;
                                if (y.Hooks.registered[k]) {
                                  B = y.Hooks.getRoot(k);
                                  var F = S(T).rootPropertyValueCache[B];
                                  F && (P.rootPropertyValue = F);
                                }
                                var L = y.setPropertyValue(
                                  T,
                                  k,
                                  P.currentValue +
                                    (o < 9 && 0 === parseFloat(I)
                                      ? ""
                                      : P.unitType),
                                  P.rootPropertyValue,
                                  P.scrollData
                                );
                                y.Hooks.registered[k] &&
                                  (y.Normalizations.registered[B]
                                    ? (S(T).rootPropertyValueCache[B] =
                                        y.Normalizations.registered[B](
                                          "extract",
                                          null,
                                          L[1]
                                        ))
                                    : (S(T).rootPropertyValueCache[B] = L[1])),
                                  "transform" === L[0] && (E = !0);
                              }
                            }
                          c.mobileHA &&
                            S(T).transformCache.translate3d === r &&
                            ((S(T).transformCache.translate3d =
                              "(0px, 0px, 0px)"),
                            (E = !0)),
                            E && y.flushTransformCache(T);
                        }
                      }
                      c.display !== r &&
                        "none" !== c.display &&
                        (g.State.calls[i][2].display = !1),
                        c.visibility !== r &&
                          "hidden" !== c.visibility &&
                          (g.State.calls[i][2].visibility = !1),
                        c.progress &&
                          c.progress.call(
                            s[1],
                            s[1],
                            b,
                            Math.max(0, u + c.duration - t),
                            u,
                            h
                          ),
                        1 === b && O(i);
                    }
                }
                g.State.isTicking && w(A);
              }
              function O(e, t) {
                if (!g.State.calls[e]) return !1;
                for (
                  var n = g.State.calls[e][0],
                    i = g.State.calls[e][1],
                    o = g.State.calls[e][2],
                    s = g.State.calls[e][4],
                    a = !1,
                    l = 0,
                    c = n.length;
                  l < c;
                  l++
                ) {
                  var u = n[l].element;
                  t ||
                    o.loop ||
                    ("none" === o.display &&
                      y.setPropertyValue(u, "display", o.display),
                    "hidden" === o.visibility &&
                      y.setPropertyValue(u, "visibility", o.visibility));
                  var d = S(u);
                  if (
                    !0 !== o.loop &&
                    (f.queue(u)[1] === r ||
                      !/\.velocityQueueEntryFlag/i.test(f.queue(u)[1])) &&
                    d
                  ) {
                    (d.isAnimating = !1), (d.rootPropertyValueCache = {});
                    var p = !1;
                    f.each(y.Lists.transforms3D, function (e, t) {
                      var n = /^scale/.test(t) ? 1 : 0,
                        i = d.transformCache[t];
                      d.transformCache[t] !== r &&
                        new RegExp("^\\(" + n + "[^.]").test(i) &&
                        ((p = !0), delete d.transformCache[t]);
                    }),
                      o.mobileHA &&
                        ((p = !0), delete d.transformCache.translate3d),
                      p && y.flushTransformCache(u),
                      y.Values.removeClass(u, "velocity-animating");
                  }
                  if (!t && o.complete && !o.loop && l === c - 1)
                    try {
                      o.complete.call(i, i);
                    } catch (e) {
                      setTimeout(function () {
                        throw e;
                      }, 1);
                    }
                  s && !0 !== o.loop && s(i),
                    d &&
                      !0 === o.loop &&
                      !t &&
                      (f.each(d.tweensContainer, function (e, t) {
                        if (
                          /^rotate/.test(e) &&
                          (parseFloat(t.startValue) - parseFloat(t.endValue)) %
                            360 ==
                            0
                        ) {
                          var n = t.startValue;
                          (t.startValue = t.endValue), (t.endValue = n);
                        }
                        /^backgroundPosition/.test(e) &&
                          100 === parseFloat(t.endValue) &&
                          "%" === t.unitType &&
                          ((t.endValue = 0), (t.startValue = 100));
                      }),
                      g(u, "reverse", { loop: !0, delay: o.delay })),
                    !1 !== o.queue && f.dequeue(u, o.queue);
                }
                g.State.calls[e] = !1;
                for (var h = 0, m = g.State.calls.length; h < m; h++)
                  if (!1 !== g.State.calls[h]) {
                    a = !0;
                    break;
                  }
                !1 === a &&
                  ((g.State.isTicking = !1),
                  delete g.State.calls,
                  (g.State.calls = []));
              }
              jQuery.fn.velocity = jQuery.fn.animate;
            })(
              window.jQuery || window.Zepto || window,
              window,
              window ? window.document : void 0
            );
          });
      },
      948: function (e, t, n) {
        var r = n(992),
          i = n(5);
        void 0 === i.Tether && (i.Tether = r), (e.exports = r);
      },
      311: function (e) {
        "use strict";
        e.exports = jQuery;
      },
    },
    t = {};
  function n(r) {
    var i = t[r];
    if (void 0 !== i) return i.exports;
    var o = (t[r] = { exports: {} });
    return e[r].call(o.exports, o, o.exports, n), o.exports;
  }
  (n.amdO = {}),
    (n.n = function (e) {
      var t =
        e && e.__esModule
          ? function () {
              return e.default;
            }
          : function () {
              return e;
            };
      return n.d(t, { a: t }), t;
    }),
    (n.d = function (e, t) {
      for (var r in t)
        n.o(t, r) &&
          !n.o(e, r) &&
          Object.defineProperty(e, r, { enumerable: !0, get: t[r] });
    }),
    (n.g = (function () {
      if ("object" == typeof globalThis) return globalThis;
      try {
        return this || new Function("return this")();
      } catch (e) {
        if ("object" == typeof window) return window;
      }
    })()),
    (n.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (function () {
      "use strict";
      n(948), n(615), n(975), n(661), n(31);
      var e = prestashop,
        t = n.n(e),
        r = n(311),
        i = n.n(r);
      function o(e, t) {
        const n = t.children().detach();
        t.empty().append(e.children().detach()), e.append(n);
      }
      function s() {
        t().responsive.mobile
          ? i()("*[id^='_desktop_']").each((e, t) => {
              const n = i()(`#${t.id.replace("_desktop_", "_mobile_")}`);
              n.length && o(i()(t), n);
            })
          : i()("*[id^='_mobile_']").each((e, t) => {
              const n = i()(`#${t.id.replace("_mobile_", "_desktop_")}`);
              n.length && o(i()(t), n);
            }),
          t().emit("responsive update", { mobile: t().responsive.mobile });
      }
      (t().themeSelectors = {
        product: {
          tabs: ".tabs .nav-link",
          activeNavClass: "js-product-nav-active",
          activeTabClass: "js-product-tab-active",
          activeTabs: ".tabs .nav-link.active, .js-product-nav-active",
          imagesModal: ".js-product-images-modal",
          thumb: ".js-thumb",
          thumbContainer: ".thumb-container, .js-thumb-container",
          arrows: ".js-arrows",
          selected: ".selected, .js-thumb-selected",
          modalProductCover: ".js-modal-product-cover",
          cover: ".js-qv-product-cover",
          customizationModal: ".js-customization-modal",
        },
        listing: {
          searchFilterToggler: "#search_filter_toggler, .js-search-toggler",
          searchFiltersWrapper: "#search_filters_wrapper",
          searchFilterControls: "#search_filter_controls",
          searchFilters: "#search_filters",
          activeSearchFilters: "#js-active-search-filters",
          listTop: "#js-product-list-top",
          product: ".js-product",
          list: "#js-product-list",
          listBottom: "#js-product-list-bottom",
          listHeader: "#js-product-list-header",
          searchFiltersClearAll: ".js-search-filters-clear-all",
          searchLink: ".js-search-link",
        },
        order: { returnForm: "#order-return-form, .js-order-return-form" },
        arrowDown: ".arrow-down, .js-arrow-down",
        arrowUp: ".arrow-up, .js-arrow-up",
        clear: ".clear",
        fileInput: ".js-file-input",
        contentWrapper: "#content-wrapper, .js-content-wrapper",
        footer: "#footer, .js-footer",
        modalContent: ".js-modal-content",
        modal: "#modal, .js-checkout-modal",
        touchspin: ".js-touchspin",
        checkout: {
          termsLink: ".js-terms a",
          giftCheckbox: ".js-gift-checkbox",
          imagesLink:
            ".card-block .cart-summary-products p a, .js-show-details",
          carrierExtraContent:
            ".carrier-extra-content, .js-carrier-extra-content",
          btn: ".checkout a",
        },
        cart: {
          productLineQty: ".js-cart-line-product-quantity",
          quickview: ".quickview",
          touchspin: ".bootstrap-touchspin",
          promoCode: "#promo-code",
          displayPromo: ".display-promo",
          promoCodeButton: ".promo-code-button",
          discountCode: ".js-discount .code",
          discountName: "[name=discount_name]",
          actions:
            '[data-link-action="delete-from-cart"], [data-link-action="remove-voucher"]',
        },
        notifications: {
          dangerAlert: "#notifications article.alert-danger",
          container: "#notifications .notifications-container",
        },
        passwordPolicy: {
          template: "#password-feedback",
          hint: ".js-hint-password",
          container: ".password-strength-feedback",
          strengthText: ".password-strength-text",
          requirementScore: ".password-requirements-score",
          requirementLength: ".password-requirements-length",
          requirementScoreIcon: ".password-requirements-score i",
          requirementLengthIcon: ".password-requirements-length i",
          progressBar: ".progress-bar",
          inputColumn: ".js-input-column",
        },
      }),
        i()(document).ready(() => {
          t().emit("themeSelectorsInit");
        }),
        /**
         * Copyright since 2007 PrestaShop SA and Contributors
         * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
         *
         * NOTICE OF LICENSE
         *
         * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
         * that is bundled with this package in the file LICENSE.md.
         * It is also available through the world-wide-web at this URL:
         * https://opensource.org/licenses/AFL-3.0
         * If you did not receive a copy of the license and are unable to
         * obtain it through the world-wide-web, please send an email
         * to license@prestashop.com so we can send you a copy immediately.
         *
         * DISCLAIMER
         *
         * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
         * versions in the future. If you wish to customize PrestaShop for your
         * needs please refer to https://devdocs.prestashop.com/ for more information.
         *
         * @author    PrestaShop SA and Contributors <contact@prestashop.com>
         * @copyright Since 2007 PrestaShop SA and Contributors
         * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
         */
        (t().responsive = t().responsive || {}),
        (t().responsive.current_width = window.innerWidth),
        (t().responsive.min_width = 768),
        (t().responsive.mobile =
          t().responsive.current_width < t().responsive.min_width),
        i()(window).on("resize", () => {
          const e = t().responsive.current_width,
            n = t().responsive.min_width,
            r = window.innerWidth,
            i = (e >= n && r < n) || (e < n && r >= n);
          (t().responsive.current_width = r),
            (t().responsive.mobile =
              t().responsive.current_width < t().responsive.min_width),
            i && s();
        }),
        i()(document).ready(() => {
          t().responsive.mobile && s();
        }),
        i()(document).ready(() => {
          1 === i()("body#checkout").length &&
            (i()(t().themeSelectors.checkout.termsLink).on("click", (e) => {
              e.preventDefault();
              let n = i()(e.target).attr("href");
              n &&
                ((n += "?content_only=1"),
                i()
                  .get(n, (e) => {
                    i()(t().themeSelectors.modal)
                      .find(t().themeSelectors.modalContent)
                      .html(i()(e).find(".page-cms").contents());
                  })
                  .fail((e) => {
                    t().emit("handleError", {
                      eventType: "clickTerms",
                      resp: e,
                    });
                  })),
                i()(t().themeSelectors.modal).modal("show");
            }),
            i()(t().themeSelectors.checkout.giftCheckbox).on("click", () => {
              i()("#gift").slideToggle();
            }),
            i()(t().themeSelectors.checkout.imagesLink).on(
              "click",
              function () {
                const e = i()(this).find("i.material-icons");
                "expand_more" === e.text()
                  ? e.text("expand_less")
                  : e.text("expand_more");
              }
            )),
            t().on("updatedDeliveryForm", (e) => {
              void 0 !== e.deliveryOption &&
                0 !== e.deliveryOption.length &&
                (i()(t().themeSelectors.checkout.carrierExtraContent).hide(),
                e.deliveryOption
                  .next(t().themeSelectors.checkout.carrierExtraContent)
                  .slideDown());
            });
        }),
        i()(document).ready(function () {
          i()("body#order-detail") &&
            i()(
              `${
                t().themeSelectors.order.returnForm
              } table thead input[type=checkbox]`
            ).on("click", function () {
              const e = i()(this).prop("checked");
              i()(
                `${
                  t().themeSelectors.order.returnForm
                } table tbody input[type=checkbox]`
              ).each((t, n) => {
                i()(n).prop("checked", e);
              });
            });
        });
      n(593);
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      function a(e, t) {
        if (void 0 === t) return;
        const n = i()(e).siblings('source[type="image/webp"]'),
          r = i()(e).siblings('source[type="image/avif"]');
        void 0 !== t.webp && n.length && n.attr("srcset", t.webp),
          void 0 !== t.avif && r.length && r.attr("srcset", t.avif);
      }
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      class l {
        init() {
          i()(".js-product-miniature").each((e, t) => {
            if (i()(t).find(".color").length > 5) {
              let e = 0;
              i()(t)
                .find(".color")
                .each((t, n) => {
                  t > 4 && (i()(n).hide(), (e += 1));
                }),
                i()(t).find(".js-count").append(`+${e}`);
            }
          });
        }
      }
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      i()(document).ready(() => {
        const e = (e) => {
          const t = i()(".js-qv-product-images"),
            n = i()(".js-qv-product-images li img").height() + 20,
            r = t.position().top;
          t.velocity({ translateY: "up" === e ? r + n : r - n }, () => {
            t.position().top >= 0
              ? i()(".arrow-up").css("opacity", ".2")
              : t.position().top + t.height() <= i()(".js-qv-mask").height() &&
                i()(".arrow-down").css("opacity", ".2");
          });
        };
        t().on("clickQuickView", (n) => {
          const r = {
            action: "quickview",
            id_product: n.dataset.idProduct,
            id_product_attribute: n.dataset.idProductAttribute,
          };
          i()
            .post(t().urls.pages.product, r, null, "json")
            .then((n) => {
              i()("body").append(n.quickview_html);
              const r = i()(
                `#quickview-modal-${n.product.id}-${n.product.id_product_attribute}`
              );
              r.modal("show"),
                ((n) => {
                  const r = i()(t().themeSelectors.product.arrows),
                    o = n.find(".js-qv-product-images");
                  i()(t().themeSelectors.product.thumb).on("click", (e) => {
                    i()(t().themeSelectors.product.thumb).hasClass(
                      "selected"
                    ) &&
                      i()(t().themeSelectors.product.thumb).removeClass(
                        "selected"
                      ),
                      i()(e.currentTarget).addClass("selected"),
                      i()(t().themeSelectors.product.cover).attr(
                        "src",
                        i()(e.target).data("image-large-src")
                      ),
                      i()(t().themeSelectors.product.cover).attr(
                        "alt",
                        i()(e.target).attr("alt")
                      ),
                      i()(t().themeSelectors.product.cover).attr(
                        "title",
                        i()(e.target).attr("title")
                      ),
                      a(
                        i()(t().themeSelectors.product.cover),
                        i()(e.target).data("image-large-sources")
                      );
                  }),
                    o.find("li").length <= 4
                      ? r.hide()
                      : r.on("click", (n) => {
                          i()(n.target).hasClass("arrow-up") &&
                          i()(".js-qv-product-images").position().top < 0
                            ? (e("up"),
                              i()(t().themeSelectors.arrowDown).css(
                                "opacity",
                                "1"
                              ))
                            : i()(n.target).hasClass("arrow-down") &&
                              o.position().top + o.height() >
                                i()(".js-qv-mask").height() &&
                              (e("down"),
                              i()(t().themeSelectors.arrowUp).css(
                                "opacity",
                                "1"
                              ));
                        }),
                    n
                      .find(t().selectors.quantityWanted)
                      .TouchSpin({
                        verticalbuttons: !0,
                        verticalupclass: "material-icons touchspin-up",
                        verticaldownclass: "material-icons touchspin-down",
                        buttondown_class: "btn btn-touchspin js-touchspin",
                        buttonup_class: "btn btn-touchspin js-touchspin",
                        min: 1,
                        max: 1e6,
                      }),
                    i()(t().themeSelectors.touchspin).off(
                      "touchstart.touchspin"
                    );
                })(r),
                r.on("hidden.bs.modal", () => {
                  r.remove();
                });
            })
            .fail((e) => {
              t().emit("handleError", { eventType: "clickQuickView", resp: e });
            });
        }),
          i()("body").on(
            "click",
            t().themeSelectors.listing.searchFilterToggler,
            () => {
              i()(t().themeSelectors.listing.searchFiltersWrapper).removeClass(
                "hidden-sm-down"
              ),
                i()(t().themeSelectors.contentWrapper).addClass(
                  "hidden-sm-down"
                ),
                i()(t().themeSelectors.footer).addClass("hidden-sm-down");
            }
          ),
          i()(
            `${t().themeSelectors.listing.searchFilterControls} ${
              t().themeSelectors.clear
            }`
          ).on("click", () => {
            i()(t().themeSelectors.listing.searchFiltersWrapper).addClass(
              "hidden-sm-down"
            ),
              i()(t().themeSelectors.contentWrapper).removeClass(
                "hidden-sm-down"
              ),
              i()(t().themeSelectors.footer).removeClass("hidden-sm-down");
          }),
          i()(`${t().themeSelectors.listing.searchFilterControls} .ok`).on(
            "click",
            () => {
              i()(t().themeSelectors.listing.searchFiltersWrapper).addClass(
                "hidden-sm-down"
              ),
                i()(t().themeSelectors.contentWrapper).removeClass(
                  "hidden-sm-down"
                ),
                i()(t().themeSelectors.footer).removeClass("hidden-sm-down");
            }
          );
        const n = function (e) {
          if (void 0 !== e.target.dataset.searchUrl)
            return e.target.dataset.searchUrl;
          if (void 0 === i()(e.target).parent()[0].dataset.searchUrl)
            throw new Error("Can not parse search URL");
          return i()(e.target).parent()[0].dataset.searchUrl;
        };
        i()("body").on(
          "change",
          `${t().themeSelectors.listing.searchFilters} input[data-search-url]`,
          (e) => {
            t().emit("updateFacets", n(e));
          }
        ),
          i()("body").on(
            "click",
            t().themeSelectors.listing.searchFiltersClearAll,
            (e) => {
              t().emit("updateFacets", n(e));
            }
          ),
          i()("body").on(
            "click",
            t().themeSelectors.listing.searchLink,
            (e) => {
              e.preventDefault(),
                t().emit(
                  "updateFacets",
                  i()(e.target).closest("a").get(0).href
                );
            }
          ),
          window.addEventListener("popstate", (e) => {
            e.state &&
              e.state.current_url &&
              (window.location.href = e.state.current_url);
          }),
          i()("body").on(
            "change",
            `${t().themeSelectors.listing.searchFilters} select`,
            (e) => {
              const n = i()(e.target).closest("form");
              t().emit("updateFacets", `?${n.serialize()}`);
            }
          ),
          t().on("updateProductList", (e) => {
            !(function (e) {
              i()(t().themeSelectors.listing.searchFilters).replaceWith(
                e.rendered_facets
              ),
                i()(t().themeSelectors.listing.activeSearchFilters).replaceWith(
                  e.rendered_active_filters
                ),
                i()(t().themeSelectors.listing.listTop).replaceWith(
                  e.rendered_products_top
                );
              const n = i()(e.rendered_products),
                r = i()(t().themeSelectors.listing.product);
              r.length > 0
                ? r.removeClass().addClass(r.first().attr("class"))
                : r.removeClass().addClass(n.first().attr("class")),
                i()(t().themeSelectors.listing.list).replaceWith(n),
                i()(t().themeSelectors.listing.listBottom).replaceWith(
                  e.rendered_products_bottom
                ),
                e.rendered_products_header &&
                  i()(t().themeSelectors.listing.listHeader).replaceWith(
                    e.rendered_products_header
                  ),
                new l().init();
            })(e),
              window.scrollTo(0, 0);
          });
      });
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      class c {
        init() {
          const e = i()(".js-modal-arrows"),
            t = i()(".js-modal-product-images");
          i()("body")
            .on("click", ".js-modal-thumb", (e) => {
              i()(".js-modal-thumb").hasClass("selected") &&
                i()(".js-modal-thumb").removeClass("selected"),
                i()(e.currentTarget).addClass("selected"),
                i()(prestashop.themeSelectors.product.modalProductCover).attr(
                  "src",
                  i()(e.target).data("image-large-src")
                ),
                i()(prestashop.themeSelectors.product.modalProductCover).attr(
                  "title",
                  i()(e.target).attr("title")
                ),
                i()(prestashop.themeSelectors.product.modalProductCover).attr(
                  "alt",
                  i()(e.target).attr("alt")
                ),
                a(
                  i()(prestashop.themeSelectors.product.modalProductCover),
                  i()(e.target).data("image-large-sources")
                );
            })
            .on("click", "aside#thumbnails", (e) => {
              "thumbnails" === e.target.id &&
                i()("#product-modal").modal("hide");
            }),
            i()(".js-modal-product-images li").length <= 5
              ? e.css("opacity", ".2")
              : e.on("click", (e) => {
                  i()(e.target).hasClass("arrow-up") && t.position().top < 0
                    ? (this.move("up"),
                      i()(".js-modal-arrow-down").css("opacity", "1"))
                    : i()(e.target).hasClass("arrow-down") &&
                      t.position().top + t.height() >
                        i()(".js-modal-mask").height() &&
                      (this.move("down"),
                      i()(".js-modal-arrow-up").css("opacity", "1"));
                });
        }
        move(e) {
          const t = i()(".js-modal-product-images"),
            n = i()(".js-modal-product-images li img").height() + 10,
            r = t.position().top;
          t.velocity({ translateY: "up" === e ? r + n : r - n }, () => {
            t.position().top >= 0
              ? i()(".js-modal-arrow-up").css("opacity", ".2")
              : t.position().top + t.height() <=
                  i()(".js-modal-mask").height() &&
                i()(".js-modal-arrow-down").css("opacity", ".2");
          });
        }
      }
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      i()(document).ready(() => {
        function e() {
          const e = i()(t().themeSelectors.product.cover),
            n = i()(t().themeSelectors.product.modalProductCover);
          let r = i()(t().themeSelectors.product.selected);
          const o = (r, i) => {
            const o = i.find(t().themeSelectors.product.thumb);
            r.removeClass("selected"),
              o.addClass("selected"),
              n.prop("src", o.data("image-large-src")),
              e.prop("src", o.data("image-medium-src")),
              e.attr("title", o.attr("title")),
              n.attr("title", o.attr("title")),
              e.attr("alt", o.attr("alt")),
              n.attr("alt", o.attr("alt")),
              a(e, o.data("image-medium-sources")),
              a(n, o.data("image-large-sources"));
          };
          i()(t().themeSelectors.product.thumb).on("click", (e) => {
            (r = i()(t().themeSelectors.product.selected)),
              o(
                r,
                i()(e.target).closest(t().themeSelectors.product.thumbContainer)
              );
          }),
            e.swipe({
              swipe: (e, n) => {
                r = i()(t().themeSelectors.product.selected);
                const s = r.closest(t().themeSelectors.product.thumbContainer);
                "right" === n
                  ? s.prev().length > 0
                    ? o(r, s.prev())
                    : s.next().length > 0 && o(r, s.next())
                  : "left" === n &&
                    (s.next().length > 0
                      ? o(r, s.next())
                      : s.prev().length > 0 && o(r, s.prev()));
              },
              allowPageScroll: "vertical",
            });
        }
        function n() {
          i()("#main .js-qv-product-images li").length > 2
            ? (i()("#main .js-qv-mask").addClass("scroll"),
              i()(".scroll-box-arrows").addClass("scroll"),
              i()("#main .js-qv-mask").scrollbox({
                direction: "h",
                distance: 113,
                autoPlay: !1,
              }),
              i()(".scroll-box-arrows .left").click(() => {
                i()("#main .js-qv-mask").trigger("backward");
              }),
              i()(".scroll-box-arrows .right").click(() => {
                i()("#main .js-qv-mask").trigger("forward");
              }))
            : (i()("#main .js-qv-mask").removeClass("scroll"),
              i()(".scroll-box-arrows").removeClass("scroll"));
        }
        function r() {
          i()(t().themeSelectors.fileInput).on("change", (e) => {
            const t = i()(e.currentTarget)[0],
              n = t ? t.files[0] : null;
            t && n && i()(t).prev().text(n.name);
          });
        }
        !(function () {
          const e = i()(t().selectors.quantityWanted);
          e.TouchSpin({
            verticalbuttons: !0,
            verticalupclass: "material-icons touchspin-up",
            verticaldownclass: "material-icons touchspin-down",
            buttondown_class: "btn btn-touchspin js-touchspin",
            buttonup_class: "btn btn-touchspin js-touchspin",
            min: parseInt(e.attr("min"), 10),
            max: 1e6,
          }),
            i()(t().themeSelectors.touchspin).off("touchstart.touchspin"),
            e.on("focusout", () => {
              ("" === e.val() || e.val() < e.attr("min")) &&
                (e.val(e.attr("min")), e.trigger("change"));
            }),
            i()("body").on(
              "change keyup",
              t().selectors.quantityWanted,
              (n) => {
                "" !== e.val() &&
                  (i()(n.currentTarget).trigger("touchspin.stopspin"),
                  t().emit("updateProduct", {
                    eventType: "updatedProductQuantity",
                    event: n,
                  }));
              }
            );
        })(),
          r(),
          e(),
          n(),
          (function () {
            const e = i()(t().themeSelectors.product.tabs);
            e.on("show.bs.tab", (e) => {
              const n = i()(e.target);
              n.addClass(t().themeSelectors.product.activeNavClass),
                i()(n.attr("href")).addClass(
                  t().themeSelectors.product.activeTabClass
                );
            }),
              e.on("hide.bs.tab", (e) => {
                const n = i()(e.target);
                n.removeClass(t().themeSelectors.product.activeNavClass),
                  i()(n.attr("href")).removeClass(
                    t().themeSelectors.product.activeTabClass
                  );
              });
          })(),
          t().on("updatedProduct", (o) => {
            if ((r(), e(), o && o.product_minimal_quantity)) {
              const e = parseInt(o.product_minimal_quantity, 10),
                n = t().selectors.quantityWanted;
              i()(n).trigger("touchspin.updatesettings", { min: e });
            }
            n(),
              i()(i()(t().themeSelectors.product.activeTabs).attr("href"))
                .addClass("active")
                .removeClass("fade"),
              i()(t().themeSelectors.product.imagesModal).replaceWith(
                o.product_images_modal
              );
            new c().init();
          });
      }),
        (t().cart = t().cart || {}),
        (t().cart.active_inputs = null);
      const u = 'input[name="product-quantity-spin"]';
      let f = !1,
        d = !1,
        p = "";
      const h = () => {
          const e = i()(t().themeSelectors.checkout.btn);
          if (
            ((i()(t().themeSelectors.notifications.dangerAlert).length ||
              ("" !== p && !f)) &&
              e.addClass("disabled"),
            "" !== p)
          ) {
            const n = `\n        <article class="alert alert-danger" role="alert" data-alert="danger">\n          <ul>\n            <li>${p}</li>\n          </ul>\n        </article>\n      `;
            i()(t().themeSelectors.notifications.container).html(n),
              (p = ""),
              (d = !1),
              f && e.removeClass("disabled");
          } else
            !f &&
              d &&
              ((f = !1),
              (d = !1),
              i()(t().themeSelectors.notifications.container).html(""),
              e.removeClass("disabled"));
        },
        m = (e) => {
          const { hasError: t, errors: n } = e;
          f = null != t && t;
          const r = null != n ? n : "";
          (p = r instanceof Array ? r.join(" ") : r), (d = !0);
        };
      function g() {
        i().each(i()(u), (e, t) => {
          i()(t).TouchSpin({
            verticalbuttons: !0,
            verticalupclass: "material-icons touchspin-up",
            verticaldownclass: "material-icons touchspin-down",
            buttondown_class:
              "btn btn-touchspin js-touchspin js-increase-product-quantity",
            buttonup_class:
              "btn btn-touchspin js-touchspin js-decrease-product-quantity",
            min: parseInt(i()(t).attr("min"), 10),
            max: 1e6,
          });
        }),
          i()(t().themeSelectors.touchspin).off("touchstart.touchspin"),
          h();
      }
      const v = (e) => !window.shouldPreventModal || (e.preventDefault(), !1);
      i()(document).ready(() => {
        const e = t().themeSelectors.cart.productLineQty,
          n = [];
        t().on("updateCart", () => {
          i()(t().themeSelectors.cart.quickview).modal("hide");
        }),
          t().on("updatedCart", () => {
            (window.shouldPreventModal = !1),
              i()(t().themeSelectors.product.customizationModal).on(
                "show.bs.modal",
                (e) => {
                  v(e);
                }
              ),
              g();
          }),
          g();
        const r = i()("body");
        function o(e) {
          const t = e.split("-");
          let n,
            r,
            i = "";
          for (n = 0; n < t.length; n += 1)
            (r = t[n]),
              0 !== n && (r = r.substring(0, 1).toUpperCase() + r.substring(1)),
              (i += r);
          return i;
        }
        function s(n, r) {
          if (
            !(function (e) {
              return "on.startupspin" === e || "on.startdownspin" === e;
            })(r)
          )
            return { url: n.attr("href"), type: o(n.data("link-action")) };
          const i = (function (n) {
            const r = n.parents(t().themeSelectors.cart.touchspin).find(e);
            return r.is(":focus") ? null : r;
          })(n);
          if (!i) return !1;
          let s = {};
          return (
            (s = (function (e) {
              return "on.startupspin" === e;
            })(r)
              ? { url: i.data("up-url"), type: "increaseProductQuantity" }
              : { url: i.data("down-url"), type: "decreaseProductQuantity" }),
            s
          );
        }
        const a = () => {
          let e;
          for (; n.length > 0; ) (e = n.pop()), e.abort();
        };
        i()(t().themeSelectors.product.customizationModal).on(
          "show.bs.modal",
          (e) => {
            v(e);
          }
        );
        function l(e) {
          const r = i()(e.currentTarget),
            o = r.data("update-url"),
            s = r.attr("value"),
            l = r.val();
          if (l != parseInt(l, 10) || l < 0 || isNaN(l))
            return (window.shouldPreventModal = !1), void r.val(s);
          const c = l - s;
          var u, f;
          0 !== c &&
            ("0" === l
              ? r
                  .closest(".product-line-actions")
                  .find('[data-link-action="delete-from-cart"]')
                  .click()
              : (r.attr("value", l),
                (function (e, r, o) {
                  a(),
                    (window.shouldPreventModal = !0),
                    i()
                      .ajax({
                        url: e,
                        method: "POST",
                        data: r,
                        dataType: "json",
                        beforeSend(e) {
                          n.push(e);
                        },
                      })
                      .then((e) => {
                        m(e), o.val(e.quantity);
                        const n = o && o.dataset ? o.dataset : e;
                        t().emit("updateCart", { reason: n, resp: e });
                      })
                      .fail((e) => {
                        t().emit("handleError", {
                          eventType: "updateProductQuantityInCart",
                          resp: e,
                        });
                      });
                })(
                  o,
                  ((u = c),
                  {
                    ajax: "1",
                    qty: Math.abs(u),
                    action: "update",
                    op: ((f = u), f > 0 ? "up" : "down"),
                  }),
                  r
                )));
        }
        r.on("click", t().themeSelectors.cart.actions, (e) => {
          a(), (window.shouldPreventModal = !0), e.preventDefault();
          const r = i()(e.currentTarget),
            { dataset: o } = e.currentTarget,
            l = s(r, e.namespace);
          l &&
            i()
              .ajax({
                url: l.url,
                method: "POST",
                data: { ajax: "1", action: "update" },
                dataType: "json",
                beforeSend(e) {
                  n.push(e);
                },
              })
              .then((e) => {
                const n =
                  ((s = r),
                  i()(
                    s.parents(t().themeSelectors.cart.touchspin).find("input")
                  ));
                var s;
                m(e),
                  n.val(e.quantity),
                  t().emit("updateCart", { reason: o, resp: e });
              })
              .fail((e) => {
                t().emit("handleError", {
                  eventType: "updateProductInCart",
                  resp: e,
                  cartAction: l.type,
                });
              });
        }),
          r.on(
            "touchspin.on.stopspin",
            u,
            /**
             * Copyright since 2007 PrestaShop SA and Contributors
             * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
             *
             * NOTICE OF LICENSE
             *
             * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
             * that is bundled with this package in the file LICENSE.md.
             * It is also available through the world-wide-web at this URL:
             * https://opensource.org/licenses/AFL-3.0
             * If you did not receive a copy of the license and are unable to
             * obtain it through the world-wide-web, please send an email
             * to license@prestashop.com so we can send you a copy immediately.
             *
             * DISCLAIMER
             *
             * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
             * versions in the future. If you wish to customize PrestaShop for your
             * needs please refer to https://devdocs.prestashop.com/ for more information.
             *
             * @author    PrestaShop SA and Contributors <contact@prestashop.com>
             * @copyright Since 2007 PrestaShop SA and Contributors
             * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
             */
            (function (e, t = 300) {
              let n;
              return (...r) => {
                clearTimeout(n),
                  (n = setTimeout(() => {
                    e.apply(this, r);
                  }, t));
              };
            })(l)
          ),
          r.on("focusout keyup", e, (e) =>
            "keyup" === e.type
              ? (13 === e.keyCode && ((d = !0), l(e)), !1)
              : (d || l(e), !1)
          );
        r.on("hidden.bs.collapse", t().themeSelectors.cart.promoCode, () => {
          i()(t().themeSelectors.cart.displayPromo).show(400);
        }),
          r.on("click", t().themeSelectors.cart.promoCodeButton, (e) => {
            e.preventDefault(),
              i()(t().themeSelectors.cart.promoCode).collapse("toggle");
          }),
          r.on("click", t().themeSelectors.cart.displayPromo, (e) => {
            i()(e.currentTarget).hide(400);
          }),
          r.on("click", t().themeSelectors.cart.discountCode, (e) => {
            e.stopPropagation();
            const n = i()(e.currentTarget);
            return (
              i()(t().themeSelectors.cart.discountName).val(n.text()),
              i()(t().themeSelectors.cart.promoCode).collapse("show"),
              i()(t().themeSelectors.cart.displayPromo).hide(400),
              !1
            );
          });
      });
      var y = n(151),
        b = n.n(y);
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      class w {
        constructor(e) {
          this.el = e;
        }
        init() {
          this.el.on("show.bs.dropdown", (e, t) => {
            t
              ? i()(`#${t}`)
                  .find(".dropdown-menu")
                  .first()
                  .stop(!0, !0)
                  .slideDown()
              : i()(e.target)
                  .find(".dropdown-menu")
                  .first()
                  .stop(!0, !0)
                  .slideDown();
          }),
            this.el.on("hide.bs.dropdown", (e, t) => {
              t
                ? i()(`#${t}`)
                    .find(".dropdown-menu")
                    .first()
                    .stop(!0, !0)
                    .slideUp()
                : i()(e.target)
                    .find(".dropdown-menu")
                    .first()
                    .stop(!0, !0)
                    .slideUp();
            }),
            this.el.find("select.link").each((e, t) => {
              i()(t).on("change", function () {
                window.location = i()(this).val();
              });
            });
        }
      }
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      class x {
        init() {
          this.parentFocus(), this.togglePasswordVisibility();
        }
        parentFocus() {
          i()(".js-child-focus").on("focus", function () {
            i()(this).closest(".js-parent-focus").addClass("focus");
          }),
            i()(".js-child-focus").on("focusout", function () {
              i()(this).closest(".js-parent-focus").removeClass("focus");
            });
        }
        togglePasswordVisibility() {
          i()('button[data-action="show-password"]').on("click", function () {
            const e = i()(this)
              .closest(".input-group")
              .children("input.js-visible-password");
            "password" === e.attr("type")
              ? (e.attr("type", "text"),
                i()(this).text(i()(this).data("textHide")))
              : (e.attr("type", "password"),
                i()(this).text(i()(this).data("textShow")));
          });
        }
      }
      var S = n(895);
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      const { passwordPolicy: _ } = prestashop.themeSelectors,
        C = (e, t, n) => {
          return (
            (r = void 0),
            (i = null),
            (o = function* () {
              const { prestashop: r } = window,
                i = e.value,
                o = t.querySelector(_.requirementScoreIcon),
                s = yield r.checkPasswordScore(i),
                a = ((e) => {
                  switch (e) {
                    case 0:
                    case 1:
                      return { color: "bg-danger" };
                    case 2:
                      return { color: "bg-warning" };
                    case 3:
                    case 4:
                      return { color: "bg-success" };
                    default:
                      throw new Error("Invalid password strength indicator.");
                  }
                })(s.score),
                l = i.length,
                c = [];
              $(e).popover("dispose"),
                (t.style.display = "" === i ? "none" : "block"),
                "" !== s.feedback.warning &&
                  s.feedback.warning in n &&
                  c.push(n[s.feedback.warning]),
                s.feedback.suggestions.forEach((e) => {
                  e in n && c.push(n[e]);
                }),
                $(e)
                  .popover({
                    html: !0,
                    placement: "top",
                    content: c.join("<br/>"),
                  })
                  .popover("show");
              const u =
                  l >= parseInt(e.dataset.minlength, 10) &&
                  l <= parseInt(e.dataset.maxlength, 10),
                f = parseInt(e.dataset.minscore, 10) <= s.score;
              t
                .querySelector(_.requirementLengthIcon)
                .classList.toggle("text-success", u),
                o.classList.toggle("text-success", f),
                e.classList.remove("border-success", "border-danger"),
                e.classList.add(f && u ? "border-success" : "border-danger"),
                e.classList.add("form-control", "border");
              const d = 20 * s.score + 20,
                p = t.querySelector(_.progressBar);
              p &&
                ((p.style.width = `${d}%`),
                p.classList.remove("bg-success", "bg-danger", "bg-warning"),
                p.classList.add(a.color));
            }),
            new Promise((e, t) => {
              var n = (e) => {
                  try {
                    a(o.next(e));
                  } catch (e) {
                    t(e);
                  }
                },
                s = (e) => {
                  try {
                    a(o.throw(e));
                  } catch (e) {
                    t(e);
                  }
                },
                a = (t) =>
                  t.done ? e(t.value) : Promise.resolve(t.value).then(n, s);
              a((o = o.apply(r, i)).next());
            })
          );
          var r, i, o;
        };
      var T = (e) => {
        document.querySelectorAll(e).forEach((e) => {
          const t = null == e ? void 0 : e.querySelector(_.inputColumn),
            n = null == e ? void 0 : e.querySelector("input"),
            r = document.createElement("div"),
            i = document.querySelector(_.template);
          let o;
          if (
            i &&
            e &&
            t &&
            n &&
            ((r.innerHTML = i.innerHTML),
            t.append(r),
            (o = e.querySelector(_.container)),
            o)
          ) {
            const e = document.querySelector(_.hint);
            if (e) {
              const t = JSON.parse(e.innerHTML),
                r = o.querySelector(_.requirementLength),
                i = o.querySelector(_.requirementScore),
                s = null == r ? void 0 : r.querySelector("span"),
                a = null == i ? void 0 : i.querySelector("span");
              s &&
                r &&
                r.dataset.translation &&
                (s.innerText = (0, S.sprintf)(
                  r.dataset.translation,
                  n.dataset.minlength,
                  n.dataset.maxlength
                )),
                a &&
                  i &&
                  i.dataset.translation &&
                  (a.innerText = (0, S.sprintf)(
                    i.dataset.translation,
                    t[n.dataset.minscore]
                  )),
                n.addEventListener("keyup", () => C(n, o, t)),
                n.addEventListener("blur", () => {
                  $(n).popover("dispose");
                });
            }
          }
          return e
            ? { element: e }
            : {
                error: new Error("The password policy elements are undefined."),
              };
        });
      };
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      class E extends w {
        init() {
          let e;
          const n = this;
          this.el.find("li").on("mouseenter mouseleave", (t) => {
            if (this.el.parent().hasClass("mobile")) return;
            const n = i()(t.currentTarget).attr("class");
            if (e !== n) {
              const n = Array.prototype.slice
                .call(t.currentTarget.classList)
                .map((e) => "string" == typeof e && `.${e}`);
              (e = n.join("")),
                e &&
                  0 === i()(t.target).data("depth") &&
                  i()(`${e} .js-sub-menu`).css({
                    top: i()(`${e}`).height() + i()(`${e}`).position().top,
                  });
            }
          }),
            i()("#menu-icon").on("click", () => {
              i()("#mobile_top_menu_wrapper").toggle(), n.toggleMobileMenu();
            }),
            this.el.on("click", (e) => {
              this.el.parent().hasClass("mobile") || e.stopPropagation();
            }),
            t().on("responsive update", () => {
              i()(".js-sub-menu").removeAttr("style"), n.toggleMobileMenu();
            }),
            super.init();
        }
        toggleMobileMenu() {
          i()("#header").toggleClass("is-open"),
            i()("#mobile_top_menu_wrapper").is(":visible")
              ? i()("#notifications, #wrapper, #footer").hide()
              : i()("#notifications, #wrapper, #footer").show();
        }
      }
      n(411), n(861);
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      (t().blockcart = t().blockcart || {}),
        (t().blockcart.showModal = (e) => {
          function n() {
            return i()("#blockcart-modal");
          }
          let r = n();
          r.length && r.remove(),
            i()("body").append(e),
            (r = n()),
            r.modal("show").on("hidden.bs.modal", (e) => {
              t().emit("updateProduct", {
                reason: e.currentTarget.dataset,
                event: e,
              });
            });
        });
      /**
       * Copyright since 2007 PrestaShop SA and Contributors
       * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
       *
       * NOTICE OF LICENSE
       *
       * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
       * that is bundled with this package in the file LICENSE.md.
       * It is also available through the world-wide-web at this URL:
       * https://opensource.org/licenses/AFL-3.0
       * If you did not receive a copy of the license and are unable to
       * obtain it through the world-wide-web, please send an email
       * to license@prestashop.com so we can send you a copy immediately.
       *
       * DISCLAIMER
       *
       * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
       * versions in the future. If you wish to customize PrestaShop for your
       * needs please refer to https://devdocs.prestashop.com/ for more information.
       *
       * @author    PrestaShop SA and Contributors <contact@prestashop.com>
       * @copyright Since 2007 PrestaShop SA and Contributors
       * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
       */
      for (const e in b().prototype) t()[e] = b().prototype[e];
      i()(document).ready(() => {
        const e = i()(".js-dropdown"),
          t = new x(),
          n = i()('.js-top-menu ul[data-depth="0"]'),
          r = new w(e),
          o = new E(n),
          s = new l(),
          a = new c();
        r.init(),
          t.init(),
          o.init(),
          s.init(),
          a.init(),
          T(".field-password-policy"),
          i()('.carousel[data-touch="true"]').swipe({
            swipe(e, t) {
              "left" === t && i()(this).carousel("next"),
                "right" === t && i()(this).carousel("prev");
            },
            allowPageScroll: "vertical",
          });
      });
    })();
})();
