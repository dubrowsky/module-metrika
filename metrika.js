(function($) {
    $(function () {

        function getCounter() {
            for (var i in window) {
                if (/^yaCounter\d+/.test(i)) {
                    return window[i];
                }
            }
        }

        Floxim.onPushState(function(url, state) {
            var c = getCounter();
            if (!c) {
                return;
            }
            setTimeout(function() {
                c.hit(document.location.href, {
                    title: document.title
                })
            }, 20);
        });
    });
})(window.jQuery)