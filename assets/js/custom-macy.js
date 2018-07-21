(function($){
    "use strict";
    $(document).ready(function () {
        var masonry = new Macy({
            container: '.author-post-content',
            trueOrder: false,
            waitForImages: false,
            useOwnImageLoader: false,
            debug: true,
            mobileFirst: true,
            columns: 1,
            margin: 30,
            breakAt: {
                1200: 3,
                992: 2,
                768: 2,
                480: 2
            }
        });

    });
}(jQuery));