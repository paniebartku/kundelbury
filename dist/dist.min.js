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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/medor_scripts.js":
/*!*****************************!*\
  !*** ./js/medor_scripts.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n$(function () {\n    var header = $(\".navbar\");\n\n    $(window).scroll(function () {\n        var scroll = $(window).scrollTop();\n        if (scroll >= 50) {\n            header.addClass(\"scrolled\");\n            header.removeClass(\"scrolledAgain\");\n        } else {\n            header.removeClass(\"scrolled\");\n            header.addClass(\"scrolledAgain\");\n        }\n    });\n});\n\n$(function () {\n    $(\".dogs-gallery li img\").click(function () {\n        $('.dogs-gallery__photo--main').attr('src', $(this).attr('src').replace());\n    });\n});\n\n(function ($) {\n\n    $.fn.visible = function (partial) {\n\n        var $t = $(this),\n            $w = $(window),\n            viewTop = $w.scrollTop(),\n            viewBottom = viewTop + $w.height(),\n            _top = $t.offset().top,\n            _bottom = _top + $t.height(),\n            compareTop = partial === true ? _bottom : _top,\n            compareBottom = partial === true ? _top : _bottom;\n\n        return compareBottom <= viewBottom && compareTop >= viewTop;\n    };\n})(jQuery);\n\n$(window).scroll(function (event) {\n\n    $(\".news-col\").each(function (i, el) {\n        var el = $(el);\n        if (el.visible(true)) {\n            el.addClass(\"animated fadeIn dogo\");\n        }\n    });\n});\n\n//   $(\".for-adoption__dogs-loop \").each(function(i, el) {\n//     var el = $(el);\n//     if (el.visible(true)) {\n//       el.addClass(\"animated fadeIn dogo\");\n//     } \n//   });\n\n//# sourceURL=webpack:///./js/medor_scripts.js?");

/***/ }),

/***/ "./scss/medor_scripts.scss":
/*!*********************************!*\
  !*** ./scss/medor_scripts.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./scss/medor_scripts.scss?");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./js/medor_scripts.js ./scss/medor_scripts.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./js/medor_scripts.js */\"./js/medor_scripts.js\");\nmodule.exports = __webpack_require__(/*! ./scss/medor_scripts.scss */\"./scss/medor_scripts.scss\");\n\n\n//# sourceURL=webpack:///multi_./js/medor_scripts.js_./scss/medor_scripts.scss?");

/***/ })

/******/ });