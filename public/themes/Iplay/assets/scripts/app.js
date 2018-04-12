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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/scripts/app.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__home_js__ = __webpack_require__("./resources/assets/scripts/home.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__home_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__home_js__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__navigation_js__ = __webpack_require__("./resources/assets/scripts/navigation.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__navigation_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__navigation_js__);



/***/ }),

/***/ "./resources/assets/scripts/home.js":
/***/ (function(module, exports) {


var buttons = document.querySelectorAll('.home_header_button');
console.log(buttons);

buttons.forEach(function (element) {
  element.addEventListener('click', function () {
    removeButtonClass(buttons);
    checkElementClass(element);
    element.classList.add('home_header_button_active');
  });
});

function removeButtonClass(wrapper) {
  wrapper.forEach(function (element) {
    element.classList.remove('home_header_button_active');
  });
}

function checkElementClass(element) {
  if (!element.classList.contains('second_button')) {
    document.querySelector('.slide').classList.add('notActive');
  } else {
    document.querySelector('.slide').classList.remove('notActive');
  }
  if (!element.classList.contains('third_button')) {
    document.querySelector('.about_wrapper').classList.add('notActive');
  } else {
    document.querySelector('.about_wrapper').classList.remove('notActive');
  }
}

/***/ }),

/***/ "./resources/assets/scripts/navigation.js":
/***/ (function(module, exports) {

var NavMobile = document.querySelector(".mobileMenu");
NavMobile.addEventListener("click", function () {

  NavMobile.classList.toggle("active");
});

/***/ }),

/***/ "./resources/assets/styles/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/scripts/app.js");
module.exports = __webpack_require__("./resources/assets/styles/app.scss");


/***/ })

/******/ });