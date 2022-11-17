/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/manage-forms.js ***!
  \**************************************/
var types_of_fields = document.querySelector('#types-of-fields');
var offcanvas_body_section = document.querySelector('#offcanvas-body-section');
types_of_fields.addEventListener('change', function () {
  var type_of_field = types_of_fields.value;
  fetch("/admin/forms/manage-forms/sections/text", {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'url': "/admin/forms/manage-forms/sections/text",
      "X-CSRF-Token": document.querySelector('input[name=_token]').value
    }
  }).then(function (response) {
    return response.json();
  }).then(function (premise) {
    var new_field = document.createElement('div');
    new_field.innerHTML = premise;
    offcanvas_body_section.appendChild(new_field);
  });
});
/******/ })()
;