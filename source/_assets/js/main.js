import Alpine from 'alpinejs'
import '@fortawesome/fontawesome-free/js/fontawesome'
import '@fortawesome/fontawesome-free/js/solid'
import '@fortawesome/fontawesome-free/js/brands'

window.Alpine = Alpine

Alpine.start();

// Google Analytics
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');


ga('create', 'UA-137971-1', 'auto');
ga('send', 'pageview');

// Matomo
let _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function () {
    let u = "//analytics.lbreda.com/";
    _paq.push([
        'setTrackerUrl', u + 'matomo.php'
    ]);
    _paq.push(['setSiteId', '1']);
    let d = document,
        g = d.createElement('script'),
        s = d.getElementsByTagName('script')[0];
    g.type = 'text/javascript';
    g.async = true;
    g.src = u + 'matomo.js';
    s
        .parentNode
        .insertBefore(g, s);
})();