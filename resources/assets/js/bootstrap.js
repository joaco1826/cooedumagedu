window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    require('foundation-sites');
    require('slick-carousel');
    require('sweetalert/dist/sweetalert.min');
} catch (e) {}


