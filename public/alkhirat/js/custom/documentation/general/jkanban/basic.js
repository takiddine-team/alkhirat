/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/documentation/general/jkanban/basic.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/jkanban/basic.js ***!
  \********************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTJKanbanDemoBasic = function () {\n  // Private functions\n  var exampleBasic = function exampleBasic() {\n    var kanban = new jKanban({\n      element: '#kt_docs_jkanban_basic',\n      gutter: '0',\n      widthBoard: '250px',\n      boards: [{\n        'id': '_inprocess',\n        'title': 'In Process',\n        'item': [{\n          'title': '<span class=\"fw-bold\">You can drag me too</span>'\n        }, {\n          'title': '<span class=\"fw-bold\">Buy Milk</span>'\n        }]\n      }, {\n        'id': '_working',\n        'title': 'Working',\n        'item': [{\n          'title': '<span class=\"fw-bold\">Do Something!</span>'\n        }, {\n          'title': '<span class=\"fw-bold\">Run?</span>'\n        }]\n      }, {\n        'id': '_done',\n        'title': 'Done',\n        'item': [{\n          'title': '<span class=\"fw-bold\">All right</span>'\n        }, {\n          'title': '<span class=\"fw-bold\">Ok!</span>'\n        }]\n      }]\n    });\n  };\n\n  return {\n    // Public Functions\n    init: function init() {\n      exampleBasic();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTJKanbanDemoBasic.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qa2FuYmFuL2Jhc2ljLmpzLmpzIiwibWFwcGluZ3MiOiJDQUVBOztBQUNBLElBQUlBLGtCQUFrQixHQUFHLFlBQVc7QUFDaEM7QUFDQSxNQUFJQyxZQUFZLEdBQUcsU0FBZkEsWUFBZSxHQUFXO0FBQzFCLFFBQUlDLE1BQU0sR0FBRyxJQUFJQyxPQUFKLENBQVk7QUFDckJDLE1BQUFBLE9BQU8sRUFBRSx3QkFEWTtBQUVyQkMsTUFBQUEsTUFBTSxFQUFFLEdBRmE7QUFHckJDLE1BQUFBLFVBQVUsRUFBRSxPQUhTO0FBSXJCQyxNQUFBQSxNQUFNLEVBQUUsQ0FBQztBQUNELGNBQU0sWUFETDtBQUVELGlCQUFTLFlBRlI7QUFHRCxnQkFBUSxDQUFDO0FBQ0QsbUJBQVM7QUFEUixTQUFELEVBR0o7QUFDSSxtQkFBUztBQURiLFNBSEk7QUFIUCxPQUFELEVBVUQ7QUFDQyxjQUFNLFVBRFA7QUFFQyxpQkFBUyxTQUZWO0FBR0MsZ0JBQVEsQ0FBQztBQUNELG1CQUFTO0FBRFIsU0FBRCxFQUdKO0FBQ0ksbUJBQVM7QUFEYixTQUhJO0FBSFQsT0FWQyxFQW9CRDtBQUNDLGNBQU0sT0FEUDtBQUVDLGlCQUFTLE1BRlY7QUFHQyxnQkFBUSxDQUFDO0FBQ0QsbUJBQVM7QUFEUixTQUFELEVBR0o7QUFDSSxtQkFBUztBQURiLFNBSEk7QUFIVCxPQXBCQztBQUphLEtBQVosQ0FBYjtBQXFDSCxHQXRDRDs7QUF3Q0EsU0FBTztBQUNIO0FBQ0FDLElBQUFBLElBQUksRUFBRSxnQkFBVztBQUNiUCxNQUFBQSxZQUFZO0FBQ2Y7QUFKRSxHQUFQO0FBTUgsQ0FoRHdCLEVBQXpCLEMsQ0FrREE7OztBQUNBUSxNQUFNLENBQUNDLGtCQUFQLENBQTBCLFlBQVc7QUFDakNWLEVBQUFBLGtCQUFrQixDQUFDUSxJQUFuQjtBQUNILENBRkQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qa2FuYmFuL2Jhc2ljLmpzPzY1OWEiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVEpLYW5iYW5EZW1vQmFzaWMgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgZXhhbXBsZUJhc2ljID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIGthbmJhbiA9IG5ldyBqS2FuYmFuKHtcclxuICAgICAgICAgICAgZWxlbWVudDogJyNrdF9kb2NzX2prYW5iYW5fYmFzaWMnLFxyXG4gICAgICAgICAgICBndXR0ZXI6ICcwJyxcclxuICAgICAgICAgICAgd2lkdGhCb2FyZDogJzI1MHB4JyxcclxuICAgICAgICAgICAgYm9hcmRzOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICdpZCc6ICdfaW5wcm9jZXNzJyxcclxuICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnSW4gUHJvY2VzcycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJzxzcGFuIGNsYXNzPVwiZnctYm9sZFwiPllvdSBjYW4gZHJhZyBtZSB0b288L3NwYW4+J1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnPHNwYW4gY2xhc3M9XCJmdy1ib2xkXCI+QnV5IE1pbGs8L3NwYW4+J1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSwge1xyXG4gICAgICAgICAgICAgICAgICAgICdpZCc6ICdfd29ya2luZycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJ1dvcmtpbmcnLFxyXG4gICAgICAgICAgICAgICAgICAgICdpdGVtJzogW3tcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICc8c3BhbiBjbGFzcz1cImZ3LWJvbGRcIj5EbyBTb21ldGhpbmchPC9zcGFuPidcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJzxzcGFuIGNsYXNzPVwiZnctYm9sZFwiPlJ1bj88L3NwYW4+J1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSwge1xyXG4gICAgICAgICAgICAgICAgICAgICdpZCc6ICdfZG9uZScsXHJcbiAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJ0RvbmUnLFxyXG4gICAgICAgICAgICAgICAgICAgICdpdGVtJzogW3tcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICc8c3BhbiBjbGFzcz1cImZ3LWJvbGRcIj5BbGwgcmlnaHQ8L3NwYW4+J1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnPHNwYW4gY2xhc3M9XCJmdy1ib2xkXCI+T2shPC9zcGFuPidcclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIF1cclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgXVxyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBleGFtcGxlQmFzaWMoKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RKS2FuYmFuRGVtb0Jhc2ljLmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEpLYW5iYW5EZW1vQmFzaWMiLCJleGFtcGxlQmFzaWMiLCJrYW5iYW4iLCJqS2FuYmFuIiwiZWxlbWVudCIsImd1dHRlciIsIndpZHRoQm9hcmQiLCJib2FyZHMiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/jkanban/basic.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/jkanban/basic.js"]();
/******/ 	
/******/ })()
;