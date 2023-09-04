var $devicewidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var $deviceheight = (window.innerHeight > 0) ? window.innerHeight : screen.height;

var $bodyel = jQuery("body");
var $htmlel = jQuery("html");

var $navbarel = jQuery(".navbar");
var $topbarel = jQuery(".ct-topBar");

var $slider = $('.ct-js-slick');

var $onePage = $(".ct-js-onepage");
var $onePagePosition = $onePage.position();
var $onePageWidth   = $onePage.width();

var isTransparent = false,
    navbar = $("nav.navbar");


if(navbar.hasClass('ct-navbar--transparent')){
    isTransparent = true;
}


/* ========================== */
/* ==== HELPER FUNCTIONS ==== */

function validatedata($attr, $defaultValue) {
    "use strict";
    if ($attr !== undefined) {
        return $attr
    }
    return $defaultValue;
}

function parseBoolean(str, $defaultValue) {
    "use strict";
    if (str == 'true') {
        return true;
    } else if (str == "false") {
        return false;
    }
    return $defaultValue;
}