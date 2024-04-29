'use strict'
$(document).ready(function () {
  var navbar  =  document.getElementById("navbarshop");

  if (window.innerWidth <= 600) {
    navbar.style.display = "none";
  } else {
    navbar.style.display = "block";
  }
});