jQuery(document).ready(function($) {
    // Check if consent has already been granted
    if (localStorage.getItem("consentGranted") === "true") {
        $('#consent-banner').hide();
        var gtmId = $('#consent-banner').data('gtm-id');
        if (gtmId) {
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', gtmId);
        }
    } else {
        // Show the consent banner if consent has not been granted
        $('#consent-banner').show();
    }

    $('#acceptButton').click(function() {
        localStorage.setItem("consentGranted", "true");
        $('#consent-banner').hide();

        var gtmId = $('#consent-banner').data('gtm-id');
        if (gtmId) {
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', gtmId);
        }
    });
});
