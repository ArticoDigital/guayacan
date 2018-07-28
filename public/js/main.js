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
/******/ 	__webpack_require__.p = "/assets/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(1);

var _ZoomMap = __webpack_require__(8);

var _ZoomMap2 = _interopRequireDefault(_ZoomMap);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

if (document.querySelector('#svg-id')) (0, _ZoomMap2.default)('#svg-id');

var choachi = document.querySelector('#Choachi');

console.log(choachi);
choachi.addEventListener('click', function () {
    console.log('raro');
});

/***/ }),

/***/ 1:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 8:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

exports.default = function (idMap) {

    var MapAmerica = svgPanZoom(idMap, {
        zoomEnabled: true,
        controlIconsEnabled: false,
        fit: 1,
        center: true, minZoom: 1,
        maxZoom: 20,
        dblClickZoomEnabled: true,
        mouseWheelZoomEnabled: false,
        preventMouseEventsDefault: false,
        beforePan: beforePan,
        customEventsHandler: {
            init: function init(options) {},
            destroy: function destroy() {
                this.hammer.destroy();
            }
        }
    });
    MapAmerica.zoom(3);

    document.querySelector('#zoomInMap').addEventListener('click', function () {
        MapAmerica.zoomIn();
    });
    document.querySelector('#zoomOutMap').addEventListener('click', function () {
        MapAmerica.zoomOut();
    });
    document.querySelector('#zoomResetMap').addEventListener('click', function () {

        MapAmerica.zoom(3);
        MapAmerica.center();
    });

    function beforePan(oldPan, newPan) {

        var gutterWidth = 500,
            gutterHeight = 500,
            sizes = this.getSizes(),
            leftLimit = -((sizes.viewBox.x + sizes.viewBox.width) * sizes.realZoom) + gutterWidth,
            rightLimit = sizes.width - gutterWidth - sizes.viewBox.x * sizes.realZoom,
            topLimit = -((sizes.viewBox.y + sizes.viewBox.height) * sizes.realZoom) + gutterHeight,
            bottomLimit = sizes.height - gutterHeight - sizes.viewBox.y * sizes.realZoom;
        var customPan = {};
        customPan.x = Math.max(leftLimit, Math.min(rightLimit, newPan.x));
        customPan.y = Math.max(topLimit, Math.min(bottomLimit, newPan.y));
        return customPan;
    }
};

;

/***/ })

/******/ });
//# sourceMappingURL=main.js.map