(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./resources/js/settings.js":
/*!**********************************!*\
  !*** ./resources/js/settings.js ***!
  \**********************************/
/*! exports provided: githubSwitch, stackOverflowSwitch, facebookSwitch */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "githubSwitch", function() { return githubSwitch; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "stackOverflowSwitch", function() { return stackOverflowSwitch; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "facebookSwitch", function() { return facebookSwitch; });
var _token = $('meta[name="csrf-token"]').attr('content');

function githubSwitch() {
  $('#githubSwitch').on('change', function () {
    $.post({
      url: "/settings/editLinks",
      data: {
        for: $('#personGithub').val(),
        active: $('#githubSwitch').is(':checked'),
        _token: _token
      },
      success: function success(results) {}
    });
  });
}
function stackOverflowSwitch() {
  $('#stackOverflowSwitch').on('change', function () {
    $.post({
      url: "/settings/editLinks",
      data: {
        for: $('#personStack').val(),
        active: $('#stackOverflowSwitch').is(':checked'),
        _token: _token
      },
      success: function success(results) {}
    });
  });
}
function facebookSwitch() {
  $('#facebookSwitch').on('change', function () {
    $.post({
      url: "/settings/editLinks",
      data: {
        for: $('#personFacebook').val(),
        active: $('#facebookSwitch').is(':checked'),
        _token: _token
      },
      success: function success(results) {}
    });
  });
}

/***/ })

}]);