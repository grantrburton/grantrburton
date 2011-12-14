$(document).ready(function() {
    // Add Tooltips
    $("a[title]").tooltip({
        effect: 'slide',
        slideOffset: 10,
        opacity: 0.95
    }).dynamic({
        bottom: {
            direction: 'down',
            bounce: true
        }
    })
})

// Google Analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7650804-6']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.setAttribute('async', 'true');
    document.documentElement.firstChild.appendChild(ga);
})();
