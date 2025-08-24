<style>
.mw-accessibility {
  /*
   |--------------------------------
   | Monochrome
   |--------------------------------
  */
  --white: #ffffff;
  --black: #000000;
  /*
  |--------------------------------
  | Primary colors
  |--------------------------------
  */
  --primary-1: #CAEDE7;
  --primary-2: #96DBCF;
  --primary-3: #62C9B7;
  --primary-4: #2EB7A0;
  --primary-5: #228978;
  --primary-6: #175B50;
  --primary-7: #0B2D28;
  --primary: var(--primary-4);
  /*
  |--------------------------------
  | Secondary colors
  |--------------------------------
   */
  --secondary-1: #FDCEC0;
  --secondary-2: #FCB099;
  --secondary-3: #FB9272;
  --secondary-4: #FA744B;
  --secondary-5: #C45B3B;
  --secondary-6: #8E422B;
  --secondary-7: #58291A;
  --secondary: var(--secondary-4);
}
/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Burger - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
.mw-accessibility-menu .accessibility-burger {
  display: table;
  position: relative;
  min-width: 20px;
  height: 20px;
  cursor: pointer;
  background-color: transparent;
  border: none;
}
.mw-accessibility-menu .accessibility-burger .accessibility-burger-lines {
  display: block;
  position: absolute;
  top: 2px;
  left: 0;
  overflow: hidden;
  width: 20px;
  height: 16px;
}
.mw-accessibility-menu .accessibility-burger .burger-line {
  display: block;
  position: absolute;
  top: 7px;
  height: 2px;
  border-radius: 0;
  background-color: var(--color-primary);
}
.mw-accessibility-menu .accessibility-burger .burger-slashes {
  display: inline-block;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  width: 20px;
  height: 20px;
}
.mw-accessibility-menu .accessibility-burger .burger-slash {
  opacity: 0;
  display: block;
  position: absolute;
  top: 9px;
  left: -3px;
  width: 26px;
  height: 2px;
  border-radius: 0;
  background-color: var(--color-primary);
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 500ms;
}
.mw-accessibility-menu .accessibility-burger .burger-text {
  display: block;
  position: relative;
  overflow: hidden;
  margin-left: 26px;
  color: var(--color-primary);
  text-transform: uppercase;
  font-size: 12px;
  line-height: 20px;
}
.mw-accessibility-menu .accessibility-burger .burger-text .text-open {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms;
  -webkit-transform: translateX(0%);
  transform: translateX(0%);
}
.mw-accessibility-menu .accessibility-burger .burger-text .text-close {
  display: block;
  opacity: 0;
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
.mw-accessibility-menu .accessibility-burger.burger-hover:hover .burger-line {
  background-color: var(--color-secondary);
}
.mw-accessibility-menu .accessibility-burger.burger-hover:hover .burger-slash {
  background-color: var(--color-secondary);
}
.mw-accessibility-menu .accessibility-burger.burger-hover:hover .burger-text {
  color: var(--color-secondary);
}
.mw-accessibility-menu .accessibility-burger.open .burger-text .text-open {
  opacity: 0;
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}
.mw-accessibility-menu .accessibility-burger.open .burger-text .text-close {
  opacity: 1;
  -webkit-transform: translateX(0%);
  transform: translateX(0%);
}
.mw-accessibility-menu .accessibility-burger .burger-line {
  width: 20px;
}
.mw-accessibility-menu .accessibility-burger .burger-line:nth-of-type(1) {
  -webkit-transform: translate(0px, -7px);
  transform: translate(0px, -7px);
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms 0ms;
}
.mw-accessibility-menu .accessibility-burger .burger-line:nth-of-type(2) {
  -webkit-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms 100ms;
}
.mw-accessibility-menu .accessibility-burger .burger-line:nth-of-type(3) {
  -webkit-transform: translate(0px, 7px);
  transform: translate(0px, 7px);
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms 200ms;
}
.mw-accessibility-menu .accessibility-burger .burger-line:nth-of-type(4) {
  opacity: 0;
  -webkit-transform: translate(-20px, -7px);
  transform: translate(-20px, -7px);
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms 50ms;
}
.mw-accessibility-menu .accessibility-burger .burger-line:nth-of-type(5) {
  opacity: 0;
  -webkit-transform: translate(-20px, 0px);
  transform: translate(-20px, 0px);
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms 150ms;
}
.mw-accessibility-menu .accessibility-burger .burger-line:nth-of-type(6) {
  opacity: 0;
  -webkit-transform: translate(-20px, 7px);
  transform: translate(-20px, 7px);
  transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms 250ms;
}
.mw-accessibility-menu .accessibility-burger .burger-slash:nth-of-type(1) {
  -webkit-transform: rotate(45deg) translate(-40px, 0);
  transform: rotate(45deg) translate(-40px, 0);
}
.mw-accessibility-menu .accessibility-burger .burger-slash:nth-of-type(2) {
  -webkit-transform: rotate(-45deg) translate(40px, 0);
  transform: rotate(-45deg) translate(40px, 0);
}
.mw-accessibility-menu .accessibility-burger .burger-slash:nth-of-type(3) {
  -webkit-transform: rotate(45deg) translate(-40px, 0);
  transform: rotate(45deg) translate(-40px, 0);
}
.mw-accessibility-menu .accessibility-burger .burger-slash:nth-of-type(4) {
  -webkit-transform: rotate(-45deg) translate(40px, 0);
  transform: rotate(-45deg) translate(40px, 0);
}
.mw-accessibility-menu .burger-hover:not(.open):hover .burger-line:nth-of-type(1) {
  opacity: 0;
  -webkit-transform: translate(20px, -7px);
  transform: translate(20px, -7px);
}
.mw-accessibility-menu .burger-hover:not(.open):hover .burger-line:nth-of-type(2) {
  opacity: 0;
  -webkit-transform: translate(20px, 0);
  transform: translate(20px, 0);
}
.mw-accessibility-menu .burger-hover:not(.open):hover .burger-line:nth-of-type(3) {
  opacity: 0;
  -webkit-transform: translate(20px, 7px);
  transform: translate(20px, 7px);
}
.mw-accessibility-menu .burger-hover:not(.open):hover .burger-line:nth-of-type(4) {
  opacity: 1;
  -webkit-transform: translate(0px, -7px);
  transform: translate(0px, -7px);
}
.mw-accessibility-menu .burger-hover:not(.open):hover .burger-line:nth-of-type(5) {
  opacity: 1;
  -webkit-transform: translate(0px, 0);
  transform: translate(0px, 0);
}
.mw-accessibility-menu .burger-hover:not(.open):hover .burger-line:nth-of-type(6) {
  opacity: 1;
  -webkit-transform: translate(0px, 7px);
  transform: translate(0px, 7px);
}
.mw-accessibility-menu .open .burger-line:nth-of-type(1) {
  -webkit-transform: translate(20px, -7px);
  transform: translate(20px, -7px);
}
.mw-accessibility-menu .open .burger-line:nth-of-type(2) {
  -webkit-transform: translate(20px, 0);
  transform: translate(20px, 0);
}
.mw-accessibility-menu .open .burger-line:nth-of-type(3) {
  -webkit-transform: translate(20px, 7px);
  transform: translate(20px, 7px);
}
.mw-accessibility-menu .open .burger-line:nth-of-type(4) {
  opacity: 0;
  -webkit-transform: translate(20px, -7px);
  transform: translate(20px, -7px);
}
.mw-accessibility-menu .open .burger-line:nth-of-type(5) {
  opacity: 0;
  -webkit-transform: translate(20px, 0);
  transform: translate(20px, 0);
}
.mw-accessibility-menu .open .burger-line:nth-of-type(6) {
  opacity: 0;
  -webkit-transform: translate(20px, 7px);
  transform: translate(20px, 7px);
}
.mw-accessibility-menu .open .burger-slash:nth-of-type(1) {
  -webkit-transform: translate(0, 0) rotate(45deg);
  transform: translate(0, 0) rotate(45deg);
  opacity: 1;
}
.mw-accessibility-menu .open .burger-slash:nth-of-type(2) {
  -webkit-transform: translate(0, 0) rotate(-45deg);
  transform: translate(0, 0) rotate(-45deg);
  opacity: 1;
}
.mw-accessibility-menu .open.burger-hover:hover .burger-slash:nth-of-type(1) {
  -webkit-transform: translate(45px, 45px) rotate(45deg);
  transform: translate(45px, 45px) rotate(45deg);
  opacity: 0;
}
.mw-accessibility-menu .open.burger-hover:hover .burger-slash:nth-of-type(2) {
  -webkit-transform: translate(-45px, 45px) rotate(-45deg);
  transform: translate(-45px, 45px) rotate(-45deg);
  opacity: 0;
}
.mw-accessibility-menu .open.burger-hover:hover .burger-slash:nth-of-type(3) {
  -webkit-transform: translate(0, 0) rotate(45deg);
  transform: translate(0, 0) rotate(45deg);
  opacity: 1;
}
.mw-accessibility-menu .open.burger-hover:hover .burger-slash:nth-of-type(4) {
  -webkit-transform: translate(0, 0) rotate(-45deg);
  transform: translate(0, 0) rotate(-45deg);
  opacity: 1;
}

/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Burger - End
 |
 |
 |-----------------------------------------------------------------------------------------
*/
/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Menu - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
body.mw-accessibility-active .accessibility-menu-wrap {
  display: block;
}

.mw-accessibility-menu {
  font-family: "Tahoma", "Calibri", "Helvetica", "Arial", "Verdana", "Times New Roman" !important;
  position: fixed;
  right: 0;
  bottom: 0;
  display: none;
  min-height: 450px;
  width: calc(100% - 30px);
  opacity: 0;
  transition: cubic-bezier(0.82, 0.01, 0.21, 1) 800ms;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  padding: 20px;
  background-color: var(--primary-6);
  box-sizing: border-box;
  z-index: 9999;
  border-radius: 30px;
  margin: 15px;
}
@media screen and (min-width: 560px) {
  .mw-accessibility-menu {
    width: 500px;
  }
}
.mw-accessibility-menu h1,
.mw-accessibility-menu h2,
.mw-accessibility-menu h3,
.mw-accessibility-menu h4,
.mw-accessibility-menu h5,
.mw-accessibility-menu h6 {
  margin: 0 0 30px 0;
}
.mw-accessibility-menu.active {
  opacity: 1;
}
.mw-accessibility-menu .accessibility-menu-wrap {
  background-color: var(--white);
  height: 100%;
  padding: 20px;
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
  display: none;
  border-radius: 20px;
}
.mw-accessibility-menu .accessibility-menu-header {
  margin: 0 0 30px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.mw-accessibility-menu .accessibility-menu-logo {
  display: flex;
  align-items: center;
}
.mw-accessibility-menu .accessibility-menu-logo > * {
  margin: 0;
}
.mw-accessibility-menu .accessibility-menu-logo > *:not(:last-child) {
  margin: 0 15px 0 0;
}
.mw-accessibility-menu .accessibility-menu-logo h2 {
  color: var(--black);
  font-size: 18px;
}
@media screen and (min-width: 560px) {
  .mw-accessibility-menu .accessibility-menu-logo h2 {
    font-size: unset;
  }
}
.mw-accessibility-menu .accessibility-burger .burger-slash {
  background-color: var(--black);
}
.mw-accessibility-menu .accessibility-burger:hover .burger-slash {
  background-color: var(--primary);
}
.mw-accessibility-menu .accessibility-burger .burger-text {
  color: var(--black);
}
.mw-accessibility-menu .accessibility-burger:hover .burger-text {
  color: var(--primary);
}
.mw-accessibility-menu .accessibility-menu-body {
  display: grid;
  -webkit-column-gap: 15px;
     -moz-column-gap: 15px;
          column-gap: 15px;
  row-gap: 15px;
}
@media screen and (min-width: 560px) {
  .mw-accessibility-menu .accessibility-menu-body {
    grid-template-columns: repeat(12, 1fr);
  }
}
.mw-accessibility-menu .mw-accessbility-button {
  cursor: pointer;
  position: absolute;
  left: 0;
  -webkit-transform: translate(-100%, 0);
          transform: translate(-100%, 0);
  top: 30%;
  font-size: 0;
  background: var(--primary-6);
  padding: 4px 8px;
  color: var(--white);
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 35px;
  height: 35px;
}
.mw-accessibility-menu .accessibility-credit {
  display: block;
  text-align: right;
  margin: 60px 0 0 0;
}
.mw-accessibility-menu .accessibility-credit a {
  color: var(--primary);
}
.mw-accessibility-menu .accessibility-credit a:hover {
  color: var(--primary-6);
}

.mw-accessibility-menu .accessibility-menu-item-style-1 {
  border: 1px solid var(--black);
  border-radius: 8px;
  padding: 10px 20px;
  min-height: 60px;
  cursor: pointer;
  text-align: left;
  background-color: var(--white);
  display: flex;
  align-items: center;
  justify-content: space-between;
  transition: linear 300ms;
  font-size: 16px;
  color: var(--black);
}
.mw-accessibility-menu .accessibility-menu-item-style-1.active {
  background-color: var(--black);
  color: var(--white);
}
.mw-accessibility-menu .accessibility-menu-item-style-1:hover {
  background-color: var(--black);
  color: var(--white);
}
.mw-accessibility-menu .accessibility-menu-item-style-1 svg {
  height: 15px;
}

.mw-accessibility-menu .accessibility-menu-item-style-2 {
  border: 1px solid var(--black);
  border-radius: 8px;
  padding: 10px 20px;
  min-height: 60px;
  text-align: left;
  background-color: var(--white);
  font-size: 16px;
  color: var(--black);
}
.mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-header {
  margin: 0 0 25px 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
.mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-header svg {
  height: 15px;
  margin: 0 0 0 10px;
}
.mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body {
  display: flex;
}
.mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body button {
  transition: linear 300ms;
  width: 25px;
  height: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid var(--black);
  border-radius: 50%;
  cursor: pointer;
  background-color: var(--white);
}
.mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body button:hover {
  background-color: var(--black);
  color: var(--white);
}
.mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body button svg {
  height: 15px;
}
.mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body .accessibility-menu-item-display {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-grow: 1;
}

/*!
|-----------------------------------------------------------------------------------------
|
|
| Accessibility Menu - End
|
|
|-----------------------------------------------------------------------------------------
*/
/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Button - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
.mw-accessbility-button {
  position: fixed;
  z-index: 30;
  width: 60px;
  height: 60px;
  bottom: 80px;
  right: 15px;
  color: var(--primary-6);
  background-color: transparent;
  border: none;
  padding: 0;
  cursor: pointer;
}
.mw-accessbility-button:hover {
  color: var(--primary);
}
.mw-accessbility-button.active {
  display: none;
}
.mw-accessbility-button > svg {
  width: 100%;
}

/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Button - End
 |
 |
 |-----------------------------------------------------------------------------------------
*/
/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Skip To Content Button - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
.accessibilitySkipToContentButton {
  position: fixed;
  top: 10px;
  left: 10px;
  overflow: hidden;
  max-width: 200px;
  max-height: 0;
  width: 100%;
  z-index: -100;
  padding: 0;
  width: 100%;
  cursor: pointer;
  border-radius: 5px;
  background-color: black;
  color: white;
  font-weight: bold;
  text-align: left;
  display: flex;
  align-items: center;
  justify-content: space-between;
  transition: none;
}
.accessibilitySkipToContentButton:hover {
  background-color: darkblue;
  box-sizing: border-box;
  border: 1px dashed black;
}
.accessibilitySkipToContentButton.active {
  z-index: 9999999;
  padding: 10px 20px;
  max-height: unset;
}

/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Skip To Content Button - End
 |
 |
 |-----------------------------------------------------------------------------------------
*/
/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Offsite Click Warning Handler - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
.MWAccesssibility_offsiteClickWarning {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 99999;
  background-color: rgba(0, 0, 0, 0.8);
}
.MWAccesssibility_offsiteClickWarning .MWAccesssibility_offsiteClickWarning_wrap {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  max-width: 375px;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  text-align: center;
}
.MWAccesssibility_offsiteClickWarning .MWAccesssibility_offsiteClickWarning_title {
  font-weight: bold;
  margin-bottom: 20px;
}
.MWAccesssibility_offsiteClickWarning .MWAccesssibility_offsiteClickWarning_message {
  font-size: 16px;
  margin-bottom: 20px;
  text-align: left;
  font-family: Arial, Helvetica, sans-serif;
}
.MWAccesssibility_offsiteClickWarning .MWAccesssibility_offsiteClickWarning_message strong {
  font-weight: bold;
}
.MWAccesssibility_offsiteClickWarning .MWAccesssibility_offsiteClickWarning_buttons {
  display: flex;
  justify-content: flex-end;
}
.MWAccesssibility_offsiteClickWarning .MWAccesssibility_offsiteClickWarning_button {
  font-family: Arial, Helvetica, sans-serif;
  display: inline-block;
  padding: 10px 20px;
  border-radius: 5px;
  background-color: #000;
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  margin: 0 10px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}
.MWAccesssibility_offsiteClickWarning .MWAccesssibility_offsiteClickWarning_button:hover {
  background-color: #fff;
  color: #000;
}

/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Offsite Click Warning Handler - End
 |
 |
 |-----------------------------------------------------------------------------------------
*/
/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Utilities - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
*:focus-visible {
  outline: var(--mw-accessibility-focus-outline-width) var(--mw-accessibility-focus-outline-style) var(--mw-accessibility-focus-outline-color) !important;
  transition: none !important;
}

/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Utilities - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
/*!
 |-----------------------------------------------------------------------------------------
 |
 |
 | Accessibility Tab Navigation - Start
 |
 |
 |-----------------------------------------------------------------------------------------
*/
.mw-accessibility-menu-active > *:not(a):not(button) {
  display: block !important;
  opacity: 1 !important;
  visibility: visible !important;
  pointer-events: auto !important;
}

/*!
|-----------------------------------------------------------------------------------------
|
|
| Accessibility Tab Navigation - End
|
|
|-----------------------------------------------------------------------------------------
*/
.mw-accessibility-option-greyscale {
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}

.mw-accessibility-option-highlight-links a[href] {
  background: #FF1493 !important;
  color: #fff !important;
}

.mw-accessibility-option-accessible-font * {
  font-family: "Tahoma", "Calibri", "Helxvetica", "Arial", "Verdana", "Times New Roman" !important;
}
.mw-accessibility-option-accessible-font * * {
  font-family: "Tahoma", "Calibri", "Helvetica", "Arial", "Verdana", "Times New Roman" !important;
}
</style>


		<div class="accessibility"></div>



<script>
  $(function(){
    $(".accessibility").mwUIAccessibility({
      $header: $("header"),
      $main: $("main"),
      $footer: $("footer"),
      focusOutline: ["3px", "dotted", "#66FF00"],
      mobileMenu: false,
      mobileMenuBtn: false,
      headerSearchBar: false,
      headerSearchBarBtn: false,
      headerSearchBarCloseBtn: false,
      navigations: false,
      skipToContent: true,
      offsiteWarning: [false, "/images/logo.png"],
      formLabeling: true,
      snsLabeling: true,
      fontSize: true,
      greyscale: true,
      highlightLinks: true,
      accessibleFont: true,
      textOnly: true,
      reset: true
    });
  });
</script>



<script>(function (factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }

}(function ($) {
    'use strict';
    var MwUIAccessibility = window.MwUIAccessibility || {};
    var SETTINGS = {
        "id-menu": "mw-accessibility",
        "id-button": "mw-accessibility-button",
        "menu-items": [{
                title: "Font Size",
                html: `
                <div class="accessibility-menu-item accessibility-menu-item-style-2 is-font-size" style="grid-column: span 6;">
                    <div class="accessibility-menu-item-wrap">
                        <div class="accessibility-menu-item-header"><span class="accessibility-menu-item-title"></span> <span aria-hidden="true">↕</span></div>
                        <div class="accessibility-menu-item-body">
                            <button class="accessibility-menu-item-btn _minus" aria-label="Decrease Font"><span aria-hidden="true">−</span></button>
                            <span class="accessibility-menu-item-display">0%</span>
                            <button class="accessibility-menu-item-btn _plus" aria-label="Increase Font"><span aria-hidden="true">+</span></button>
                        </div>
                    </div>
                </div>`,
                onload: function () {
                    var $element = $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-font-size`);
                    var RESIZE_SELECTORS = ['p', 'a', 'span', 'input', 'textarea', 'select', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.resizable'];
                    var FONT_SIZE_SETTING_DELTA = 0.1;

                    $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-font-size .accessibility-menu-item-btn`).click(function () {
                        var FONT_SIZE_CURRENT_SETTING = $element.data("current-setting") ? $element.data("current-setting") : 0;
                        var FONT_SIZE_NEW_SETTING;

                        var query = document.querySelectorAll(RESIZE_SELECTORS.join(", "));

                        // update font size
                        if ($(this).closest(".accessibility-menu-item-btn").hasClass("_plus")) {
                            // increase font size
                            for (var i = 0; i < query.length; i++) {
                                var $el = query[i];

                                if ($el.closest(`#${SETTINGS["id-menu"]}`)) continue;

                                var fontSize = parseFloat(window.getComputedStyle($el).fontSize);
                                var newFontSize = fontSize * (1 + FONT_SIZE_SETTING_DELTA);
                                $el.style.fontSize = `${newFontSize}px`;
                            }

                            FONT_SIZE_NEW_SETTING = FONT_SIZE_CURRENT_SETTING + FONT_SIZE_SETTING_DELTA;
                        } else {
                            // decrease font size
                            for (var $el of document.querySelectorAll(RESIZE_SELECTORS.join(", "))) {
                                if ($el.closest(`#${SETTINGS["id-menu"]}`)) continue;

                                var currentFontSize = parseFloat(window.getComputedStyle($el).fontSize);
                                var newFontSize = currentFontSize * (1 - FONT_SIZE_SETTING_DELTA);
                                $el.style.fontSize = `${newFontSize}px`;
                            }

                            FONT_SIZE_NEW_SETTING = FONT_SIZE_CURRENT_SETTING - FONT_SIZE_SETTING_DELTA;
                        }

                        // update data
                        $element.data("current-setting", FONT_SIZE_NEW_SETTING);

                        // update display
                        $element.find(".accessibility-menu-item-display").text(`${Math.round(FONT_SIZE_NEW_SETTING * 100)}%`);
                    })
                }
            },
            {
                title: "Greyscale",
                html: `
                <button class="accessibility-menu-item accessibility-menu-item-style-1 is-greyscale" style="grid-column: span 6;">
                    <span class="accessibility-menu-item-title"></span> <span aria-hidden="true">⚪</span>
                </button>`,
                onload: function (_this) {
                    $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-greyscale`).click(function () {
                        $(this).closest(".accessibility-menu-item").toggleClass("active");
                        $(document.body).toggleClass("mw-accessibility-option-greyscale");
                    })
                }
            },
            {
                title: "Highlight Links",
                html: `
                <button class="accessibility-menu-item accessibility-menu-item-style-1 is-highlight-links" style="grid-column: span 6;">
                    <span class="accessibility-menu-item-title"></span> <span aria-hidden="true">🔗</span>
                </button>`,
                onload: function () {
                    $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-highlight-links`).click(function () {
                        $(this).closest(".accessibility-menu-item").toggleClass("active");
                        $(document.body).toggleClass("mw-accessibility-option-highlight-links");
                    })
                }
            },
            {
                title: "Accessible Font",
                html: `
                <button class="accessibility-menu-item accessibility-menu-item-style-1 is-accessible-font" style="grid-column: span 6;">
                    <span class="accessibility-menu-item-title"></span> <span aria-hidden="true">🅰</span>
                </button>`,
                onload: function () {
                    $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-accessible-font`).click(function () {
                        $(this).closest(".accessibility-menu-item").toggleClass("active");
                        $(document.body).toggleClass("mw-accessibility-option-accessible-font");
                    })
                }
            },
            {
                title: "Text Only",
                html: `
                <button class="accessibility-menu-item accessibility-menu-item-style-1 is-text-only" style="grid-column: span 6;">
                    <span class="accessibility-menu-item-title"></span> <span aria-hidden="true">📄</span>
                </button>`,
                onload: function () {
                    var SELECTORS = ["script", "footer", "style", "link", "img", "video", "audio", "svg", "code", "figure", "button"];

                    $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-text-only`).click(function () {
                        $(this).closest(".accessibility-menu-item").toggleClass("active");
                        $(document.body).toggleClass("mw-accessibility-option-text-only");

                        if (!$(document.body).hasClass("mw-accessibility-option-text-only")) {
                            // deactivate text only
                            location.reload();
                        } else {
                            // activate text only
                            var query = document.querySelectorAll(SELECTORS.join(", "));
                            document.body.removeAttribute("class");
                            document.body.removeAttribute("style");

                            for (var i = 0; i < query.length; i++) {
                                var $el = query[i];

                                if ($el.tagName.toLowerCase() === "link" && $el.href.includes("accessibility.css")) continue;
                                if ($el.tagName.toLowerCase() === "script" && $el.src.includes("accessibility.js")) continue;
                                if ($el.closest(`#${SETTINGS["id-menu"]}`)) continue;
                                if ($el.tagName.toLowerCase() === "button" && $el.closest("form")) continue;
                                if ($el.closest(`#${SETTINGS["id-button"]}`)) continue;
                                $el.remove();
                            }

                            for (const $el of document.querySelectorAll("*[style]")) {
                                if ($el.closest(`#${SETTINGS["id-menu"]}`)) continue;
                                if ($el.closest(`#${SETTINGS["id-button"]}`)) continue;
                                $el.removeAttribute('style');
                            }

                            $(`#${SETTINGS["id-menu"]}`).addClass("active");
                            $(document.body).addClass("mw-accessibility-option-text-only");
                            $(document.body).addClass("mw-accessibility-active");
                        }
                    })
                }
            },
            {
                title: "Reset",
                html: `
                <button class="accessibility-menu-item accessibility-menu-item-style-1 is-reset" style="grid-column: span 6;">
                    <span class="accessibility-menu-item-title"></span> <span aria-hidden="true">↻</span>
                </button>`,
                onload: function () {
                    $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-reset`).click(function () {
                        $(this).closest(".accessibility-menu-item").toggleClass("active");
                        location.reload();
                    });
                }
            }
        ]
    }

    MwUIAccessibility = (function () {
        function MwUIAccessibility(element, settings) {
            var _this = this,
                dataSettings;

            _this.$mwUIAccessibility = $(element);

            _this.defaults = {
                $header: null,
                $main: null,
                $footer: null,
                focusOutline: ["3px", "solid", "#66FF00"],
                mobileMenu: false,
                mobileMenuBtn: false,
                headerSearchBar: false,
                headerSearchBarBtn: false,
                headerSearchBarCloseBtn: false,
                navigations: false,
                skipToContent: false,
                offsiteWarning: [false, "/images/logo.svg"],
                formLabeling: false,
                snsLabeling: false,
                fontSize: true,
                greyscale: true,
                highlightLinks: true,
                accessibleFont: true,
                textOnly: true,
                reset: true
            };

            _this.initials = {
                $main: null,
                $header: null,
                $footer: null
            };

            $.extend(_this, _this.initials);
            dataSettings = $(element).data('morweb_accessibility') || {};
            _this.options = $.extend({}, _this.defaults, settings, dataSettings);
            _this.init();
        }

        return MwUIAccessibility;
    }());

    MwUIAccessibility.prototype.handleSNSLabeling = function () {
        if (!this.options['snsLabeling']) return;

        if (typeof this.options['snsLabeling'] !== "boolean") return;
        if (this.options['snsLabeling'] !== true) return;

        var query = document.querySelectorAll(".mwPageBlock.Gensoclinks a > i");

        for (var i = 0; i < query.length; i++) {
            var $el = query[i];
            var title = $el.parentElement.getAttribute("title");

            if ($el.classList.contains("fa-twitter")) {
              $el.parentElement.setAttribute("aria-label", "Company X Twitter");
              $el.parentElement.setAttribute("title", "Company X Twitter");
            } else if ($el.classList.contains("fa-x-twitter")) {
              $el.parentElement.setAttribute("aria-label", "Company X Twitter");
              $el.parentElement.setAttribute("title", "Company X Twitter");
            } else if ($el.classList.contains("fa-facebook")) {
              $el.parentElement.setAttribute("aria-label", "Company Facebook");
              $el.parentElement.setAttribute("title", "Company Facebook");
            } else if ($el.classList.contains("fa-instagram")) {
              $el.parentElement.setAttribute("aria-label", "Company Instagram");
              $el.parentElement.setAttribute("title", "Company Instagram");
            } else if ($el.classList.contains("fa-yahoo")) {
              $el.parentElement.setAttribute("aria-label", "Company Yahoo");
              $el.parentElement.setAttribute("title", "Company Yahoo");
            } else if ($el.classList.contains("fa-linkedin")) {
              $el.parentElement.setAttribute("aria-label", "Company LinkedIn");
              $el.parentElement.setAttribute("title", "Company LinkedIn");
            } else if ($el.classList.contains("fa-youtube")) {
              $el.parentElement.setAttribute("aria-label", "Company Youtube");
              $el.parentElement.setAttribute("title", "Company Youtube");
            } else if ($el.classList.contains("fa-tiktok")) {
                $el.parentElement.setAttribute("aria-label", "Company Tiktok");
                $el.parentElement.setAttribute("title", "Company Tiktok");
            }
        }
    }

    MwUIAccessibility.prototype.handleVideos = function () {
        var NON_MEDIA_SELECTORS = ['a', `input`, `textarea`, 'button', 'select'];
        var currentMedia;

        if (!this.options['mediaController']) return;
        if (typeof this.options['mediaController'] !== "boolean") return;
        if (this.options['mediaController'] !== true) return;

        function _handleSpacebar() {
            function resume () {
                if (!currentMedia) {
                    return;
                }

                currentMedia.play();
            }

            function stopAll (medias) {
                var mediaHarnessed = false;

                for (var i = 0; i < medias.length; i++) {
                    var media = medias[i];

                    // store last video player so it can be un paused after pressing another space
                    if (media.duration > 0 && !media.paused && !mediaHarnessed) {
                        currentMedia = media;
                        mediaHarnessed = true;
                    }

                    media.pause();
                }
            }

            function anyPlaying (medias) {
                for (var i = 0; i < medias.length; i++) {
                    var media = medias[i];;
                    if (media.duration > 0 && !media.paused) {
                        return true;
                    }
                }

                return false;
            }

            // check all videos or audios that are playing
            var query = document.querySelectorAll("video, audio");

            // if no media exists, then skip
            if (query.length === 0) {
                return;
            }

            // if any of the media is playing, then pause
            // if none of the media is playing, then resume
            if (anyPlaying(query)) {
                stopAll(query);
            } else {
                resume();
            }
        }

        $(document.body).on("keyup", (e) => {
            if (e.code == "Space" && !NON_MEDIA_SELECTORS.includes(e.target.tagName.toLowerCase())) {
                _handleSpacebar();
            }
        });
    }

    MwUIAccessibility.prototype.handleForms = function () {
        var SELECTORS = ["input", "select", "textarea"];
        var _this = this;

        if (!_this.options['formLabeling']) return;
        if (typeof _this.options['formLabeling'] !== "boolean") return;
        if (_this.options['formLabeling'] !== true) return;


        function _labelInputs($el) {
            if ($el.getAttribute("type") && $el.getAttribute("type").toLowerCase() === "submit") return;
            if ($el.getAttribute("type") && $el.getAttribute("type").toLowerCase() === "hidden") return;
            if (!$el.getAttribute("name")) return;
            if (!$el.closest("form")) return;

            for (var $label of $el.closest("form").querySelectorAll("label")) {
                if ($el.getAttribute("id") !== null && $label.getAttribute("for") === $el.getAttribute("id")) return;
            }

            var input_id = $el.id ? $el.id : `${$el.closest("form").id}-${$el.getAttribute("name")}`;
            var $label = document.createElement("label");
            $label.textContent = $el.getAttribute("title");
            $label.setAttribute("for", input_id);
            $label.classList.add("_sr-only");
            $el.setAttribute("id", input_id);

            $el.parentNode.insertBefore($label, $el);

            if ($el.getAttribute("title")) {
                $label.setAttribute("aria-hidden", "true");
            }
        }

        async function _labelSelect($el) {
            if (!$el.closest("form")) return;
            if (!$el.getAttribute("name")) return;

            for (var $label of $el.closest("form").querySelectorAll("label")) {
                if ($el.getAttribute("id") !== null && $label.getAttribute("for") === $el.getAttribute("id")) return;
            }

            var select_id = $el.id ? $el.id : `${$el.closest("form").id}-${$el.getAttribute("name")}`;

            var $label = document.createElement("label");
            $label.textContent = $el.getAttribute("title");
            $label.setAttribute("for", select_id);
            $label.classList.add("_sr-only");
            $el.setAttribute("id", select_id);

            $el.parentNode.insertBefore($label, $el);

            if ($el.getAttribute("title")) {
                $label.setAttribute("aria-hidden", "true");
            }

            // sleep until .mwInput.select is available
            var shouldExit = false;
            new Promise(function (resolve) {
                setTimeout(function () {
                    shouldExit = true;
                    resolve();
                }, 3000)
            });
            while (!$el.closest(".mwInput.select")) {
                // set shouldExit to true if the select is not found after 2 seconds
                if (shouldExit) return console.warn("No more .mwInput.select found after 3 seconds. Exiting.");
                await new Promise((resolve) => setTimeout(resolve, 100));
                console.log("waiting for .mwInput.select...");
            }

            $el.closest(".mwInput.select").querySelector(".value").setAttribute("aria-hidden", "true");
        }

        function _labelRadio($el) {
            var label = $el.getAttribute("cap");
            $el.setAttribute("aria-label", label);
        }

        function _labelCheckbox($el) {
            var label = $el.getAttribute("cap");
            $el.setAttribute("aria-label", label);
        }
        var query = document.querySelectorAll(".mwPageBlock.SimplePayment, .mwPageBlock.Contact, .mwPageBlock.eShop");
        for (var i = 0; i < query.length; i++) {
            var $form = query[i];
            var $formQuery = $form.querySelectorAll(SELECTORS.join(", "));
            for (var j = 0; j < $formQuery.length; j++) {
                var $el = $formQuery[j];

                $el.setAttribute("tabindex", 0);
                if ($el.tagName.toLowerCase() === "input" && $el.getAttribute("type") === "checkbox") {
                    _labelCheckbox($el);
                } else if ($el.tagName.toLowerCase() === "input" && $el.getAttribute("type") === "radio") {
                    _labelRadio($el);
                } else if ($el.tagName.toLowerCase() === "select") {
                    _labelSelect($el);
                } else {
                    _labelInputs($el);
                }
            }
        }
    }

    MwUIAccessibility.prototype.handleOffsiteWarning = function () {
        var _this = this;
        var $popupContainer;

        if (!_this.options['offsiteWarning']) return;
        if (!_this.options.$main || $(_this.options.$main).length === 0) return console.warn("[Warning, Accessibility]: Main area doesn't exist! Offsite warning will not be implemented. Please check and make sure $main key is properly defined.")
        if (!Array.isArray(_this.options['offsiteWarning']) || _this.options['offsiteWarning'].length < 2) return console.error("[Error, Accessibility]: Offsite Warning values are improperly defined. Please check and make sure offsiteWarning value is of the form [BOOLEAN, LOGO_IMAGE_PATH] (example. [true, '/images/logo.svg'])");

        var activate = _this.options['offsiteWarning'][0];
        var logoSrc = _this.options['offsiteWarning'][1];

        if (!activate) return;

        $popupContainer = $(_this.options.$main);

        function _generateOffsiteWarningPopup($el) {
            function _closePopup($popup) {
                if ($el.length === 0) return;
                $(document.body).removeClass("_popupActive")
                window.dispatchEvent(new CustomEvent('MW_ACCESSIBILITY_DIALOG_CLOSE'));
                $($popup).remove();
                setTimeout(function () {
                    $($el).first().focus();
                }, 100);
            }

            var text;
            var url = $el.attr('href').toLowerCase();
            var hostType = window.location.hostname ? "server" : "localfile";
            var $popup = document.createElement("div");

            switch (hostType) {
                case "server":
                    if (url.includes("tel:")) {
                        text = "You are leaving this site to contact us by phone. Do you wish to proceed?";
                    } else if (url.includes("mailto:")) {
                        text = "You are leaving this site to email a member of our staff. Do you wish to proceed?";
                    } else if (url.includes(".pdf")) {
                        text = "You are clicking on a .pdf link provided by this website. Do you wish to proceed?";
                    } else {
                        // if url starts without http, then it's an onsite link. No need to show warning
                        if (!url.includes("http")) {
                            window.location.href = url;
                            return;
                        }

                        text = "This link will take you to a third-party site outside of this site. Do you wish to proceed?";
                    }

                    break;
                default:
                    window.location.href = url;
                    return;
            }

            $popup.setAttribute("role", "dialog");
            $popup.setAttribute("aria-modal", "true");
            $popup.classList.add("MWAccesssibility_offsiteClickWarning");
            $popup.innerHTML = `
            <div class="MWAccesssibility_offsiteClickWarning_wrap">
                <div class="MWAccesssibility_offsiteClickWarning_content">
                <img src="${logoSrc}" alt="Logo" style="max-width: 100px; width: 100%; display: block; margin: 0 0 15px 0;"/>
                <p class="MWAccesssibility_offsiteClickWarning_message"><strong>Notice:</strong> <span class="text">${text}</span><br/><smal>This is a popup in compliance with accessibility</small></p>
                <div class="MWAccesssibility_offsiteClickWarning_buttons">
                    <button class="MWAccesssibility_offsiteClickWarning_button MWAccesssibility_offsiteClickWarning_button--cancel">Go Back</button>
                    <button class="MWAccesssibility_offsiteClickWarning_button MWAccesssibility_offsiteClickWarning_button--proceed">Proceed</button>
                </div>
                </div>
            </div>`;

            $($popupContainer).prepend($popup);
            $(document.body).addClass("_popupActive");

            window.dispatchEvent(new CustomEvent('MW_ACCESSIBILITY_DIALOG_OPEN', {
                detail: $popup
            }));

            $("button", $popup).first().focus();

            $($popup).on("keydown", function (e) {
                if (e.key === "Escape") _closePopup($popup);
            });

            // close popup if esc key is pressed
            $(".MWAccesssibility_offsiteClickWarning_button--cancel", $popup).on("click", function () {
                _closePopup($popup);
            });

            $(".MWAccesssibility_offsiteClickWarning_button--proceed", $popup).on("click", function () {
                window.open(url);
                window.dispatchEvent(new CustomEvent('MW_ACCESSIBILITY_DIALOG_CLOSE'));
                $popup.remove();
            });
        }

        $("a", _this.options.$main).on("click", function (e) {
            e.preventDefault();
            _generateOffsiteWarningPopup($(this));
        });
    }

    MwUIAccessibility.prototype.handleHeaderSearchBar = function () {
        var _this = this;
        var $btn, $searchBar, $closeBtn;
        var SELECTORS = ["button", "input", "*[tabindex='0']"];

        if (!_this.options['headerSearchBar']) return;

        if (!_this.options.$header || $(_this.options.$header).length === 0) return console.warn("[Warning, Accessibility]: Header doesn't exist! Header Search Bar will not be implemented. Please check and make sure $header key is properly defined.");

        if (_this.options['headerSearchBar'] instanceof jQuery) {
            $searchBar = $(_this.options['headerSearchBar']);
        } else if (typeof _this.options['headerSearchBar'] === "boolean" && _this.options['headerSearchBar'] === true) {
            $searchBar = $('.header-search', _this.options.$header);
        }

        if ($searchBar.length === 0) return console.error("[Error, Accessibility]: Header Search Bar Dialog doesn't exist! Header Search Bar Dialog will not be implemented. Please check and make sure jQuery selector for headerSearchBar key is correct.");

        if (_this.options['headerSearchBarBtn'] instanceof jQuery) {
            $btn = $(_this.options['headerSearchBarBtn']);
        } else if (typeof _this.options['headerSearchBarBtn'] === "boolean" && _this.options['headerSearchBarBtn'] === true) {
            $btn = $('.header-utility-bar-search-btn', _this.options.$header);
        }

        if ($btn.length === 0) return console.error("[Error, Accessibility]: Header Search Bar Button doesn't exist! Header Search Bar will not be implemented. Please check and make sure jQuery selector for headerSearchBarBtn key is correct.");

        if (_this.options['headerSearchBarCloseBtn'] instanceof jQuery) {
            $closeBtn = $(_this.options['headerSearchBarCloseBtn']);
        } else if (typeof _this.options['headerSearchBarCloseBtn'] === "boolean" && _this.options['headerSearchBarCloseBtn'] === true) {
            $closeBtn = $('.search-dialog-close-btn', _this.options.$header);
        }

        if ($closeBtn.length === 0) console.warn("[Warning, Accessibility]: Header Search Bar Close Button doesn't exist! The search bar dialog may not function correctly. Please check and make sure jQuery selector for headerSearchBarCloseBtn key is correct. If this is intentional, please ignore message.");

        function _closeSearchBar() {
            $btn.attr("aria-label", "Open Search");
            $btn.attr("aria-expanded", "false");
            $btn.removeClass("active");
            $searchBar.removeClass("active");
            $searchBar.attr("aria-hidden", "true");
            $("input", $searchBar).attr("tabindex", "-1");
            $(window).off("keyup", _keyUpHandler);
            $btn.off("click", _closeSearchBar);

            setTimeout(function () {
                $btn.focus();
            }, 100);
        }

        function _keyUpHandler(e) {
            if (e.key.toLowerCase() === "tab") {
                var query = $(SELECTORS.join(", "), $searchBar);
                if ($(e.target).closest($searchBar).length > 0) return;
                $(query).first().focus();
            } else if (e.key.toLowerCase() === "escape") _closeSearchBar();
        }

        // add class
        $btn.addClass("MWAccessibility--headerSearchBarBtn");
        $btn.addClass("MWAccessibility");
        $searchBar.addClass("MWAccessibility--headerSearchBar");

        // set attributes
        $btn.attr("aria-haspopup", "true");
        $btn.attr("aria-label", "Open Search");
        $btn.attr("aria-expanded", "false");
        $searchBar.attr("role", "group");
        $searchBar.attr("aria-hidden", "true");
        $(SELECTORS.join(", "), $searchBar).attr("tabindex", "-1");

        // set attributes for close button
        $closeBtn.attr("aria-label", "Close Search");
        $closeBtn.attr("tabindex", "-1");
        $closeBtn.attr("role", "button");

        // open search bar
        $btn.on("click", function (_) {
            $btn.attr("aria-label", "Close Search");
            $btn.attr("aria-expanded", "true");
            $btn.addClass("active");
            $searchBar.attr("aria-hidden", "false");
            $searchBar.addClass("active");
            $closeBtn.attr("tabindex", "0");
            $(SELECTORS.join(", "), $searchBar).attr("tabindex", "0");
            $("input", $searchBar).focus();
            $(window).on("keyup", _keyUpHandler);
            $btn.on("click", _closeSearchBar);
        });

        $($closeBtn).on("click", _closeSearchBar);
    }

    MwUIAccessibility.prototype.handleMobileMenu = function () {
        var _this = this;
        var $btn, $menu;
        var SELECTORS = ["button", "a"];

        // mobile menu
        if (!_this.options['mobileMenu']) return;

        if (!_this.options.$header || $(_this.options.$header).length === 0) return console.warn("[Warning, Accessibility]: Header doesn't exist! Mobile Menu will not be implemented. Please check and make sure $header key is properly defined.");

        if (_this.options['mobileMenu'] instanceof jQuery) {
            $menu = $(_this.options['mobileMenu']);
        } else if (typeof _this.options['mobileMenu'] === "boolean" && _this.options['mobileMenu'] === true) {
            $menu = $('.mobile-menu', _this.options.$header);
        }

        if ($menu.length === 0) return console.error("[Error, Accessibility]: Mobile Menu doesn't exist! Mobile Menu will not be implemented. Please check and make sure jQuery selector for mobileMenu key is correct.");

        if (_this.options['mobileMenuBtn'] instanceof jQuery) {
            $btn = $(_this.options['mobileMenuBtn']);
        } else if (typeof _this.options['mobileMenuBtn'] === "boolean" && _this.options['mobileMenuBtn'] === true) {
            $btn = $('.header-main-right .burger', _this.options.$header);
        }

        if ($btn.length === 0) return console.error("[Error, Accessibility]: Mobile Menu Button doesn't exist! Mobile Menu will not be implemented. Please check and make sure jQuery selector for mobileMenuBtn key is correct.");

        function _closeMenu() {
            $btn.attr("aria-label", "Open Menu");
            $btn.attr("aria-expanded", "false");
            $("a, button",$menu).attr("tabindex", "-1");
            $(".burger", $menu).removeAttr("autofocus");
            $btn.focus();

            $(window).off("keyup", _keyUpHandler);
            $(".burger", $menu).off("click", _closeMenu);
        }

        function _keyUpHandler(e) {
            if (e.key.toLowerCase() === "tab") {
                var query = $(SELECTORS.join(", "), $menu);
                if ($(e.target).closest($menu).length > 0) return;
                $(query).first().focus();
            } else if (e.key.toLowerCase() === "escape") _closeMenu();
        }

        // add tabindex = 0 to all .Menu .blockContents li.has-children > a
        $("li.has-children > a", $menu).attr('href', '#');
        $("li.has-children > a", $menu).attr('role', 'button');

        // add class
        $btn.addClass("MWAccessibility--headerMobileMenuBtn");
        $btn.addClass("MWAccessibility");
        $menu.addClass("MWAccessibility--mobileMenu");

        // set attributes
        $btn.attr("aria-haspopup", "true");
        $btn.attr("aria-label", "Open Menu");
        $btn.attr("aria-expanded", "false");
        $menu.attr("role", "group");
        $menu.attr("aria-hidden", "true");
        $("a, button",$menu).attr("tabindex", "-1");

        // open mobile menu
        $btn.on("click", function (e) {
            $btn.attr("aria-label", "Close Menu");
            $btn.attr("aria-expanded", "true");
            $menu.attr("aria-hidden", "false");
            $("a, button",$menu).attr("tabindex", "");
            $(".burger", $menu).attr("autofocus", "true");
            $(".burger", $menu).focus();
            $(window).on("keyup", _keyUpHandler);
            $(".burger", $menu).on("click", _closeMenu);
        });

        $(".burger", $menu).on("click", _closeMenu)
    }

    MwUIAccessibility.prototype.handleNavigations = function () {
        var _this = this;
        var $query;

        if (!_this.options['navigations']) return;

        if (!_this.options.$header || $(_this.options.$header).length === 0) return console.warn("[Warning, Accessibility]: Header doesn't exist! Navigations will not be implemented. Please check and make sure $header key is properly defined.");

        if (_this.options['navigations'] instanceof jQuery) {
            $query = $(_this.options['navigations']);
        } else if (typeof _this.options['navigations'] === "boolean" && _this.options['navigations'] === true) {
            $query = $('.Menu', _this.options.$header);
        }

        //--------------------------------
        // Make Focusable
        //--------------------------------
        //
        $("li.has-children > a", $query).attr('tabindex', '0');

        //--------------------------------
        // Make Nav
        //--------------------------------
        //
        $(":scope > .blockContents > ul", $query).each(function (index) {
            if ($(this).closest("nav")) return;
            $(this).wrap(`<nav aria-label="Menu #${index+1}"></nav>`);
        });

        //--------------------------------
        // Make Expandable
        //--------------------------------
        //
        $("li.has-children", $query).each(function (index) {
            var $this = $(this);
            var $thisA = $this.children('a');
            var $childUl = $this.children('ul');
            var ID = 'header' + '-' + index + '-' + $thisA.text().toLowerCase().replace(/[^a-zA-Z]/g, '');

            $thisA.attr('aria-expanded', 'false').attr('aria-controls', ID);
            $childUl.attr('id', ID);
        });

        //--------------------------------
        // Selectors
        //--------------------------------
        //
        var $li = $('li.has-children', $query);

        if ($li.length === 0) return;

        var $link = $li.find('a');
        var $directLink = $li.children('a');

        function active($li, $a) {
            $li.addClass('mw-accessibility-menu-active');
            $a.attr('aria-expanded', 'true');
        }

        function inactive($li, $a) {
            $li.removeClass('mw-accessibility-menu-active');
            $a.attr('aria-expanded', 'false');
        }

        $directLink.on('click', function (e) {
            e.preventDefault();
        });

        $directLink.on('mouseenter', function () {
            var $thisLink = $(this);
            var $parentLi = $thisLink.closest('li');
            active($parentLi, $thisLink);
        });

        $li.on('mouseleave', function () {
            var $thisLi = $(this);
            var $childLink = $thisLi.children('a');
            inactive($thisLi, $childLink);
        });

        $directLink.on('keydown', function (e) {
            var $thisLink = $(this);
            var $parentLi = $thisLink.closest('li');

            switch (e.key) {
                case 'Enter':
                case ' ':
                    e.preventDefault();
                    if ($parentLi.hasClass('mw-accessibility-menu-active')) {
                        inactive($parentLi, $thisLink);
                    } else {
                        active($parentLi, $thisLink);
                    }
            }
        });

        $link.on('keydown', function (e) {
            var $thisLink = $(this);
            var $parentLi = $thisLink.closest('li.active');
            var $parentLink = $parentLi.children('a');

            if ($parentLi.length && e.key === 'Escape') {
                e.preventDefault();
                $parentLink.focus();
                inactive($parentLi, $thisLink);
            }
        });

        $li.on('focusout', function (e) {
            var $thisLi = $(this);
            var $childLink = $thisLi.find('a[aria-expanded]');

            setTimeout(function () {
                if (!$thisLi.has(document.activeElement).length > 0) {
                    inactive($thisLi, $childLink);
                }
            });
        });
    }

    MwUIAccessibility.prototype.handleFocusOutline = function () {
        var _this = this;

        if (!_this.options['focusOutline']) return;

        if (Array.isArray(_this.options['focusOutline']) && _this.options['focusOutline'].length !== 3) return;

        $(document.body).get(0).style.setProperty('--mw-accessibility-focus-outline-width', _this.options['focusOutline'][0]);
        $(document.body).get(0).style.setProperty('--mw-accessibility-focus-outline-style', _this.options['focusOutline'][1]);
        $(document.body).get(0).style.setProperty('--mw-accessibility-focus-outline-color', _this.options['focusOutline'][2]);
    }

    MwUIAccessibility.prototype.handlePopup = function () {
        var SELECTORS = ["button", "a", "input", "textarea", "select"];

        function _keyUpHandler(e, $dialog) {
            if (e.key.toLowerCase() === "tab") {
                var query = $(SELECTORS.join(", "), $dialog);
                if ($(e.target).closest($dialog).length > 0) return;
                $(query).first().focus();
            }
        }

        $(window).on("MW_ACCESSIBILITY_DIALOG_OPEN", e => {
            var $dialog = e.originalEvent.detail;
            window.addEventListener("keyup", function (e) {
                _keyUpHandler(e, $dialog);
            });
        });

        $(window).on("MW_ACCESSIBILITY_DIALOG_CLOSE", e => {
            window.removeEventListener("keyup", _keyUpHandler);
        });
    }

    MwUIAccessibility.prototype.loadSkipToContentButtons = function () {
        var _this = this;

        if (!_this.options['skipToContent']) return;
        if (!(typeof _this.options['skipToContent'] === "boolean" && _this.options['skipToContent'] === true)) return;

        if (!_this.options.$header || $(_this.options.$header).length === 0) return console.warn("[Warning, Accessibility]: Header doesn't exist! Skip to Content will not be implemented. Please check and make sure $header key is properly defined.");


        function _loadButtons() {
            var nav = document.createElement("nav");
            nav.classList.add("accessibilitySkipToContentNav");
            nav.classList.add("MWAccessibility");
            nav.setAttribute("aria-label", "Accessibility Skip Content Navigation");
            nav.innerHTML = `<ul></ul>`;

            // if _this.options.$header exists, add "<li><button class="accessibilitySkipToContentButton" data-for="skip-to-header">Skip to Header</button></li>" to nav
            if (_this.options.$header instanceof jQuery && _this.options.$header.length > 0) {
                // create element <li><button class="accessibilitySkipToContentButton" data-for="skip-to-header">Skip to Header</button></li>
                var li = document.createElement("li");
                var button = document.createElement("button");
                button.classList.add("accessibilitySkipToContentButton");
                button.setAttribute("data-for", "skip-to-header");
                button.textContent = "Skip to Header";
                li.appendChild(button);

                $("ul", nav).append(li);
            }

            // if _this.options.$main exists, add "<li><button class="accessibilitySkipToContentButton" data-for="skip-to-content">Skip to Content</button></li>" to nav
            if (_this.options.$main instanceof jQuery && _this.options.$main.length > 0) {
                // create element <li><button class="accessibilitySkipToContentButton" data-for="skip-to-content">Skip to Content</button></li>
                var li = document.createElement("li");
                var button = document.createElement("button");
                button.classList.add("accessibilitySkipToContentButton");
                button.setAttribute("data-for", "skip-to-content");
                button.textContent = "Skip to Content";
                li.appendChild(button);

                $("ul", nav).append(li);
            }

            // if _this.options.$footer exists, add "<li><button class="accessibilitySkipToContentButton" data-for="skip-to-footer">Skip to Footer</button></li>" to nav
            if (_this.options.$footer instanceof jQuery && _this.options.$footer.length > 0) {
                // create element <li><button class="accessibilitySkipToContentButton" data-for="skip-to-footer">Skip to Footer</button></li>
                var li = document.createElement("li");
                var button = document.createElement("button");
                button.classList.add("accessibilitySkipToContentButton");
                button.setAttribute("data-for", "skip-to-footer");
                button.textContent = "Skip to Footer";
                li.appendChild(button);

                $("ul", nav).append(li);
            }

            $(_this.options.$header).prepend(nav);
        }

        function _handleFocus($el) {
            $($el).addClass("active");
        }

        function _handleBlur($el) {
            $($el).removeClass("active");
        }

        function _handleClick($el) {
            var dataFor = $($el).attr("data-for");
            var $targetElement;

            switch (dataFor) {
                case "skip-to-header":
                    $targetElement = $(_this.options.$header);
                    break;
                case "skip-to-content":
                    $targetElement = $(_this.options.$main);
                    break;
                case "skip-to-footer":
                    $targetElement = $(_this.options.$footer);
                    break;
            }

            $targetElement.first().focus();
            $(".accessibilitySkipToContentButton", _this.options.$header).removeClass("active");
        }

        _loadButtons();

        // listen to the buttons. On click, check the data-for attribute and trigger appropriate function
        $(".accessibilitySkipToContentButton", _this.options.$header).on("focus", function (e) {
            _handleFocus($(e.target).closest("button"));
        })

        $(".accessibilitySkipToContentButton", _this.options.$header).on("blur", function (e) {
            _handleBlur($(e.target).closest("button"));
        })

        $(".accessibilitySkipToContentButton", _this.options.$header).on("click", function (e) {
            e.stopPropagation();
            _handleClick($(e.target).closest("button"));
        })
    }

    MwUIAccessibility.prototype.loadMenuItems = function () {
        var _this = this;
        // menu items
        var $menuBody = document.body.querySelector(`#${SETTINGS["id-menu"]} .accessibility-menu-body`);
        for (var i = 0; i < SETTINGS["menu-items"].length; i++) {
            // set element
            var item = SETTINGS["menu-items"][i];
            var key = item['title'].split(" ").join("");
            key = key[0].toLowerCase() + key.slice(1);

            if (!_this.options[key]) continue;

            $menuBody.insertAdjacentHTML("beforeend", item["html"]);

            // set text
            var $el = $menuBody.lastChild;
            $el.querySelector(".accessibility-menu-item-title").innerHTML = item["title"];

            // trigger onload
            item.onload(_this);
        }
    }

    MwUIAccessibility.prototype.loadBase = function () {
        var _this = this;

        function handleOpen($button, $menu) {
            document.body.classList.add("mw-accessibility-active");
            $button.setAttribute("aria-expanded", "true");
            $button.classList.add("active");

            $($menu).show(function() {
                $menu.classList.add("active");
                $menu.querySelectorAll("button, a")[0].focus();
                window.dispatchEvent(new CustomEvent('MW_ACCESSIBILITY_DIALOG_OPEN', {
                    detail: $menu
                }));
            })
        }

        function handleClose($button, $menu) {
            document.body.classList.remove("mw-accessibility-active");
            $button.setAttribute("aria-expanded", "false");
            $button.classList.remove("active");
            $menu.classList.remove("active");

            window.dispatchEvent(new CustomEvent('MW_ACCESSIBILITY_DIALOG_CLOSE'));

            // after 800 milliseconds, hide the menu using jquery
            setTimeout(function () {
                $($menu).hide();
            }, 800);

            setTimeout(function () {
                $button.focus();
            }, 100);
        }

        // container
        _this.$mwUIAccessibility.addClass("mw-accessibility");

        // button
        var $button = document.createElement("button");
        $button.id = SETTINGS["id-button"];
        $button.classList.add("mw-accessbility-button");
        $button.setAttribute("aria-label", "Accessibility Menu");
        $button.setAttribute("aria-expanded", "false");
        $button.setAttribute("aria-controls", SETTINGS["id-menu"]);
        $button.innerHTML = '<span aria-hidden="true">♿</span>';

        // menu
        var $menu = document.createElement("div");
        $menu.id = SETTINGS["id-menu"];
        $menu.classList.add("mw-accessibility-menu");
        $menu.innerHTML = `
          <div class="accessibility-menu-wrap">
            <div class="accessibility-menu-header">
              <div class="accessibility-menu-logo">
                <span aria-hidden="true">♿</span>
                <h2>Accessibility Menu</h2>
              </div>
              <div class="accessibility-menu-close">
                <button class="accessibility-burger open" aria-label="Close mobile menu">
                  <span class="burger-slashes">
                    <span class="burger-slash"></span>
                    <span class="burger-slash"></span>
                    <span class="burger-slash"></span>
                    <span class="burger-slash"></span>
                  </span>
                  <span class="burger-text">
                    <span class="text-open">Menu</span>
                    <span class="text-close">Close</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="accessibility-menu-body">

            </div>
            <span class="accessibility-credit"><small>Made with ❤️ By <a href="https://morweb.org/">Morweb.org</a></small></span>
        </div>`;

        // append all
        _this.$mwUIAccessibility.prepend($button);
        _this.$mwUIAccessibility.prepend($menu);

        // events
        $($button).click(function () {
            handleOpen($button, $menu);
        })

        $(".accessibility-burger", $menu).click(function () {
            handleClose($button, $menu);
        })

        $(window).on("keydown", function (e) {
            if (e.key === "Escape") handleClose($button, $menu);
        })
    }

    MwUIAccessibility.prototype.loadHeaderMainFooter = function () {
        var _this = this;

        if ((_this.options.$main !== null) && !(_this.options.$main instanceof jQuery)) {
            return console.error("[Error, Accessibility]: Main Area is not a valid jQuery object. Please check and make sure selector is correct.");
        }

        if ((_this.options.$header !== null) && !(_this.options.$header instanceof jQuery)) {
            return console.error("[Error, Accessibility]: Header Area is not a valid jQuery object. Please check and make sure selector is correct.");
        }

        if ((_this.options.$footer !== null) && !(_this.options.$footer instanceof jQuery)) {
            return console.error("[Error, Accessibility]: Footer Area is not a valid jQuery object. Please check and make sure selector is correct.");
        }

        if (_this.options.$main instanceof jQuery) $(_this.options.$main).addClass("mw-accessibility-main").attr("tabindex", "0");
        if (_this.options.$header instanceof jQuery) $(_this.options.$header).addClass("mw-accessibility-header").attr("tabindex", "0");
        if (_this.options.$footer instanceof jQuery) $(_this.options.$footer).addClass("mw-accessibility-footer").attr("tabindex", "0");
    }

    MwUIAccessibility.prototype.init = function () {
        var _this = this;

        if (!$(_this.$mwUIAccessibility).hasClass('accessibility-initialized')) {
            $(_this.$mwUIAccessibility).addClass('accessibility-initialized');

            _this.loadHeaderMainFooter();
            _this.loadBase();
            _this.loadMenuItems();
            _this.loadSkipToContentButtons();
            _this.handlePopup();
            _this.handleFocusOutline();
            _this.handleNavigations();
            _this.handleMobileMenu();
            _this.handleHeaderSearchBar();
            _this.handleOffsiteWarning();
            _this.handleSNSLabeling();
            _this.handleForms();
            _this.handleVideos();
        }
    };

    $.fn.mwUIAccessibility = function () {
        var _this = this,
            opt = arguments[0],
            args = Array.prototype.slice.call(arguments, 1),
            l = _this.length,
            i,
            ret;

        for (i = 0; i < l; i++) {
            if (typeof opt == 'object' || typeof opt == 'undefined')
                _this[i].mwUIAccessibility = new MwUIAccessibility(_this[i], opt);
            else
                ret = _this[i].mwUIAccessibility[opt].apply(_this[i].mwUIAccessibility, args);
            if (typeof ret != 'undefined') return ret;
        }
        return _this;
    };
}));</script>


