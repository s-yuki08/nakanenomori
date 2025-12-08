"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  (function () {
    // ========================
    // 1回のみローディング表示
    // ========================

    // 安全な localStorage チェック（Safariプライベートモード対応）
    function safeStorage(kind) {
      try {
        var s = window[kind];
        var k = "__test__";
        s.setItem(k, "1");
        s.removeItem(k);
        return s;
      } catch (e) {
        return null;
      }
    }
    var store = safeStorage("localStorage");
    var KEY = "loadingShown"; // ← 保存するキー名
    var $win = $(window);
    var $loading = $(".js-loading");

    // ======== 2回目以降はスキップ ========
    try {
      // ?reset-loading=1 を付けた時はリセットできるように
      var sp = new URLSearchParams(location.search);
      if (sp.get("reset-loading") === "1" && store) store.removeItem(KEY);

      // すでにローディング済みならスキップ
      if (store && store.getItem(KEY)) {
        $loading.remove(); // ローディング要素を即削除
        return; // 以降の処理をスキップ
      }
    } catch (e) {}

    // ======== 初回のみ実行 ========
    $win.on("load", function () {
      var HOLD = 800; // ロゴを見せる時間
      var FADE = 900; // フェード時間（CSSに合わせる）
      var ended = false;

      // フェード終了で削除
      $loading.one("transitionend webkitTransitionEnd oTransitionEnd", function (e) {
        if (e.target !== this || ended) return;
        ended = true;
        $loading.remove();
        try {
          if (store) store.setItem(KEY, "1");
        } catch (e) {}
      });

      // 保険（transitionendが来ないとき）
      setTimeout(function () {
        if (ended) return;
        ended = true;
        $loading.remove();
        try {
          if (store) store.setItem(KEY, "1");
        } catch (e) {}
      }, HOLD + FADE + 200);

      // 実際のフェードアウト開始
      setTimeout(function () {
        $loading.addClass("is-hide");
      }, HOLD);
    });
  })();
  var pageTop = $(".js-page-top");
  pageTop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
  pageTop.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 500);
    return false;
  });

  //  ヘッダークラス名付与
  var header = $(".p-header");
  var headerHeight = $(".p-header").height();
  var height = $(".js-header-height").height();
  console.log("ヘッダー高さ " + headerHeight);
  console.log("mv高さ " + height);
  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      header.addClass("is-color");
    } else {
      header.removeClass("is-color");
    }
  });

  //ドロワーメニュー
  $(function () {
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      $(".js-drawer").fadeToggle();
    });

    // ドロワーナビのaタグをクリックで閉じる
    $(".js-drawer a[href]").on("click", function () {
      $(".js-hamburger").removeClass("is-open");
      $(".js-drawer").fadeOut();
    });

    // resizeイベント
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $(".js-hamburger").removeClass("is-open");
        $(".js-drawer").fadeOut();
      }
    });
  });
  var mv_swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    speed: 2000,
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    }
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    var time = 400;
    var header = $("header").innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $("html,body").animate({
      scrollTop: targetY
    }, time, "swing");
    return false;
  });
  $(function () {
    var $items = $(".p-recruit-info__item");
    var $titles = $(".js-job-title");
    var $bodies = $(".p-recruit-info__item-body");

    // ===== 初期状態 =====
    $items.removeClass("is-open"); // 全て閉じる
    $titles.removeClass("is-open");
    $bodies.hide();

    // 最初のアイテムだけ開く
    $items.eq(0).addClass("is-open");
    $titles.eq(0).addClass("is-open");
    $bodies.eq(0).show();

    // ===== クリック時 =====
    $titles.on("click", function () {
      var $this = $(this);
      var $item = $this.closest(".p-recruit-info__item");
      var $body = $item.find(".p-recruit-info__item-body");

      // 開閉トグル
      $body.stop().slideToggle(300);
      $this.toggleClass("is-open");
      $item.toggleClass("is-open");
    });
  });
  $(function () {
    var $wrap = $(".p-accordion-sp");
    var $btn = $wrap.find(".p-accordion-sp__trigger");
    var $panel = $wrap.find(".p-accordion-sp__panel");
    function open() {
      $wrap.addClass("is-open");
      $btn.attr("aria-expanded", "true");
      if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        $panel.height("auto");
        return;
      }
      $panel.stop(true, true);
      var h = $panel.get(0).scrollHeight;
      $panel.height(0).animate({
        height: h
      }, 550, "swing", function () {
        $panel.height("auto");
      });
    }
    function close() {
      $btn.attr("aria-expanded", "false");
      if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        $wrap.removeClass("is-open");
        $panel.height(0);
        return;
      }
      $panel.stop(true, true);
      $panel.height($panel.outerHeight()).animate({
        height: 0
      }, 450, "swing", function () {
        $wrap.removeClass("is-open");
        $panel.height("");
      });
    }
    function toggle() {
      $btn.attr("aria-expanded") === "true" ? close() : open();
    }
    $btn.on("click", toggle);
    $(window).on("resize", function () {
      if ($btn.attr("aria-expanded") === "true") {
        $panel.height("auto");
      }
    });
  });
  $(".js-accordion").on("click", function () {
    var parent = $(this).closest(".p-recruit__item");
    parent.toggleClass("is-open").find(".p-recruit__body").stop().slideToggle(250);
    parent.siblings(".p-recruit__item").removeClass("is-open").find(".p-recruit__body").slideUp(200);
  });
  function setupTabs(sectionSelector, btnSelector, panelSelector) {
    var section = document.querySelector(sectionSelector);
    if (!section) return;
    var btns = section.querySelectorAll(btnSelector);
    var panels = section.querySelectorAll(panelSelector);
    section.addEventListener("click", function (e) {
      var btn = e.target.closest(btnSelector);
      if (!btn) return;
      var sel = btn.getAttribute("data-target");
      var panel = sel ? section.querySelector(sel) : null;
      if (!panel) return;

      // すべて非アクティブ
      btns.forEach(function (b) {
        b.classList.remove("is-active");
        b.setAttribute("aria-selected", "false");
      });
      panels.forEach(function (p) {
        p.classList.remove("is-active");
        p.setAttribute("aria-hidden", "true");
        p.style.display = "none"; // ★インラインも確実に非表示
      });

      // 対象だけアクティブ
      btn.classList.add("is-active");
      btn.setAttribute("aria-selected", "true");
      panel.classList.add("is-active");
      panel.setAttribute("aria-hidden", "false");
      panel.style.display = ""; // ★インラインdisplayを解除（CSSに従う）
    });

    // 初期補正
    var firstBtn = section.querySelector(btnSelector);
    var firstPanel = section.querySelector(panelSelector);
    if (firstBtn && firstPanel) {
      firstBtn.classList.add("is-active");
      firstBtn.setAttribute("aria-selected", "true");
      firstPanel.classList.add("is-active");
      firstPanel.setAttribute("aria-hidden", "false");
      firstPanel.style.display = "";
    }
  }
  setupTabs("#nursing", ".p-nursing__btn", ".p-nursing__profile");
  setupTabs("#office-staff", ".p-office-staff__btn", ".p-office-staff__profile");
});
document.addEventListener("DOMContentLoaded", function () {
  var buttons = document.querySelectorAll(".p-doctorIntro__btn");
  var contents = document.querySelectorAll(".p-doctorIntro__content");
  if (!buttons.length || !contents.length) return;
  buttons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var targetId = btn.dataset.target;

      // すべてのボタン状態をリセット
      buttons.forEach(function (b) {
        b.classList.remove("is-active");
        b.setAttribute("aria-selected", "false");
      });
      btn.classList.add("is-active");
      btn.setAttribute("aria-selected", "true");

      // すべての内容を非表示に
      contents.forEach(function (content) {
        content.style.display = content.id === targetId ? "block" : "none";
      });
    });
  });
});

// アクセシビリティ配慮：動きを軽減設定のユーザーには即値反映
var prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

// 監視対象
var envSection = document.querySelector(".p-environment");
if (envSection) {
  if (prefersReduced) {
    // 動画面をスキップして最終値だけ入れる等の処理を入れてもOK
    startEnvironmentAnimations();
  } else {
    // IntersectionObserver で可視領域に入ったら実行
    var io = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && entry.intersectionRatio > 0) {
          startEnvironmentAnimations();
          observer.unobserve(entry.target); // 一度で解除
        }
      });
    }, {
      root: null,
      // viewport
      rootMargin: "0px 0px -20% 0px",
      // 下方向ちょい早めに発火したい時に調整
      threshold: 0.2 // 20%見えたら発火
    });
    io.observe(envSection);
  }
}

// === イージング & 数値アニメ（既存） ===
function easeOutCubic(t) {
  return 1 - Math.pow(1 - t, 3);
}
function animateNumber(el, start, end, duration) {
  var decimals = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 0;
  var delay = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 0;
  setTimeout(function () {
    var t0 = performance.now();
    function frame(t) {
      var p = Math.min((t - t0) / duration, 1);
      var v = start + (end - start) * easeOutCubic(p);
      el.textContent = v.toFixed(decimals);
      if (p < 1) requestAnimationFrame(frame);
    }
    requestAnimationFrame(frame);
  }, delay);
}

// === ここに“環境セクション用”アニメ開始関数を作る ===
var ENV_ANIMATED = false; // 二重実行ガード
function startEnvironmentAnimations() {
  if (ENV_ANIMATED) return;
  ENV_ANIMATED = true;

  // スタッフ構成比
  setTimeout(function () {
    var circlePink = document.getElementById("circlePink");
    var circleBlue = document.getElementById("circleBlue");
    var circumference = 2 * Math.PI * 59;
    circlePink.style.strokeDashoffset = (circumference * 0.5).toFixed(2); // 50%
    circleBlue.style.strokeDashoffset = "0"; // 50%
    animateNumber(document.getElementById("ratioPink"), 0, 5, 1000, 0, 100);
    animateNumber(document.getElementById("ratioBlue"), 0, 5, 1000, 0, 100);
    animateNumber(document.getElementById("totalStaff"), 0, 40, 1000, 0, 100);
  }, 300);

  // 平均年齢
  setTimeout(function () {
    animateNumber(document.getElementById("avgAge"), 0, 37.0, 1200, 1, 0);
  }, 400);

  // 残業時間
  setTimeout(function () {
    animateNumber(document.getElementById("overtimeHour"), 0, 2, 1000, 0, 0);
    animateNumber(document.getElementById("overtimeMin"), 0, 10, 1000, 0, 0);
  }, 500);

  // 有給取得率
  setTimeout(function () {
    var donut = document.getElementById("donutProgress");
    var circumference = 2 * Math.PI * 59;
    var percentage = 81.5;
    donut.style.strokeDashoffset = (circumference - percentage / 100 * circumference).toFixed(2);
    animateNumber(document.getElementById("vacationRate"), 0, percentage, 1200, 1, 0);
  }, 600);
}
!function () {
  var viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    var value = window.innerWidth > 375 ? "width=device-width,initial-scale=1" : "width=375";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  window.addEventListener("resize", switchViewport, false);
  switchViewport();
}();