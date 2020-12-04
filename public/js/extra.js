/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/extra.js":
/*!*******************************!*\
  !*** ./resources/js/extra.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// tootip
$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function () {
  var price = 100000;
  $('.paystack-1000').click(function () {
    $(this).addClass('btn-success');
    $('.d-none-amount').hide();
    $('.paystack-5000, .paystack-10000, .paystack-50000, .paystack-100000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
    $('input.amount').attr('value', 100000);
  });
  $('.paystack-5000').click(function () {
    $(this).addClass('btn-success');
    $('.d-none-amount').hide();
    $('.paystack-1000, .paystack-10000, .paystack-50000, .paystack-100000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
    $('input.amount').attr('value', 500000);
  });
  $('.paystack-10000').click(function () {
    $(this).addClass('btn-success');
    $('.d-none-amount').hide();
    $('.paystack-1000, .paystack-5000, .paystack-50000, .paystack-100000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
    $('input.amount').attr('value', 1000000);
  });
  $('.paystack-50000').click(function () {
    $(this).addClass('btn-success');
    $('.d-none-amount').hide();
    $('.paystack-1000, .paystack-5000, .paystack-10000, .paystack-100000, .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
    $('input.amount').attr('value', 5000000);
  });
  $('.paystack-100000').click(function () {
    $(this).addClass('btn-success');
    $('.d-none-amount').hide();
    $('.paystack-1000, .paystack-5000, .paystack-10000, .paystack-50000,  .paystack-other').addClass('btn-outline-success').removeClass('btn-success');
    $('input.amount').attr('value', 10000000);
  });
  $('.paystack-other').click(function () {
    $(this).addClass('btn-success');
    $('.d-none-amount').show();
    $('.paystack-1000, .paystack-5000, .paystack-10000, .paystack-50000,  .paystack-100000').addClass('btn-outline-success').removeClass('btn-success');
    $('input.amount').attr('type', 'number');
    $amount = $('input.amount').attr() * 100;
    $('input.amount').attr('value', $amount);
  });
}); // hover

var $dropdown = $(".dropdown");
var $dropdownToggle = $(".dropdown-toggle");
var $dropdownMenu = $(".dropdown-menu");
var showClass = "show";
$(window).on("load resize", function () {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(function () {
      var $this = $(this);
      $this.addClass(showClass);
      $this.find($dropdownToggle).attr("aria-expanded", "true");
      $this.find($dropdownMenu).addClass(showClass);
    }, function () {
      var $this = $(this);
      $this.removeClass(showClass);
      $this.find($dropdownToggle).attr("aria-expanded", "false");
      $this.find($dropdownMenu).removeClass(showClass);
    });
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks; // Get all elements with class="tabcontent" and hide them

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  } // Get all elements with class="tablinks" and remove the class "active"


  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  } // Show the current tab, and add an "active" class to the button that opened the tab


  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} // Get the element with id="defaultOpen" and click on it


document.getElementById("defaultOpen").click(); // radio

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/extra.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\github\Al-Ansar-foundation\resources\js\extra.js */"./resources/js/extra.js");


/***/ })

/******/ });