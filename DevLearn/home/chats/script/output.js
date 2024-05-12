"use strict";

var title = document.querySelectorAll(".chat-list-header");
var totalHeight = 0;
var _loop = function _loop(_i) {
  var totalHeight = 0;
  title[_i].addEventListener("click", function () {
    var result = this.nextElementSibling;
    var activeSibling = this.nextElementSibling.classList.contains('active');
    this.classList.toggle('active');
    result.classList.toggle("active");
    if (!activeSibling) {
      for (_i = 0; _i < result.children.length; _i++) {
        totalHeight = totalHeight + result.children[_i].scrollHeight + 40;
      }
    } else {
      totalHeight = 0;
    }
    result.style.maxHeight = totalHeight + "px";
  });
  i = _i;
};
for (var i = 0; i < title.length; i++) {
  _loop(i);
}
var themeColors = document.querySelectorAll('.theme-color');
themeColors.forEach(function (themeColor) {
  themeColor.addEventListener('click', function (e) {
    themeColors.forEach(function (c) {
      return c.classList.remove('active');
    });
    var theme = themeColor.getAttribute('data-color');
    document.body.setAttribute('data-theme', theme);
    themeColor.classList.add('active');
  });
});
