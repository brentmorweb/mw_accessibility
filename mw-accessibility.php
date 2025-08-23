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
                        <div class="accessibility-menu-item-header"><span class="accessibility-menu-item-title"></span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M288 32.01H32c-17.67 0-32 14.31-32 32v64c0 17.69 14.33 32 32 32s32-14.31 32-32v-32h64v320H96c-17.67 0-32 14.31-32 32s14.33 32 32 32h128c17.67 0 32-14.31 32-32s-14.33-32-32-32H192v-320h64v32c0 17.69 14.33 32 32 32s32-14.31 32-32v-64C320 46.33 305.7 32.01 288 32.01zM521.4 361.4L512 370.8V141.3l9.375 9.375C527.6 156.9 535.8 160 544 160s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25l-64-64c-12.5-12.5-32.75-12.5-45.25 0l-64 64c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0L448 141.3v229.5l-9.375-9.375c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25l64 64C463.6 476.9 471.8 480 480 480s16.38-3.118 22.62-9.368l64-64c12.5-12.5 12.5-32.75 0-45.25S533.9 348.9 521.4 361.4z"></path></svg></div>
                        <div class="accessibility-menu-item-body">
                            <button class="accessibility-menu-item-btn _minus" aria-label="Decrease Font"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M400 288h-352c-17.69 0-32-14.32-32-32.01s14.31-31.99 32-31.99h352c17.69 0 32 14.3 32 31.99S417.7 288 400 288z"></path></svg></button>
                            <span class="accessibility-menu-item-display">0%</span>
                            <button class="accessibility-menu-item-btn _plus" aria-label="Increase Font"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg></button>
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
                    <span class="accessibility-menu-item-title"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg>
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
                    <span class="accessibility-menu-item-title"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z"></path></svg>
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
                    <span class="accessibility-menu-item-title"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M416 416h-25.81L253.1 52.76c-4.688-12.47-16.57-20.76-29.91-20.76s-25.34 8.289-30.02 20.76L57.81 416H32c-17.67 0-32 14.31-32 32s14.33 32 32 32h96c17.67 0 32-14.31 32-32s-14.33-32-32-32H126.2l17.1-48h159.6l17.1 48H320c-17.67 0-32 14.31-32 32s14.33 32 32 32h96c17.67 0 32-14.31 32-32S433.7 416 416 416zM168.2 304L224 155.1l55.82 148.9H168.2z"></path></svg>
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
                    <span class="accessibility-menu-item-title"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272 416h-160C103.2 416 96 408.8 96 400C96 391.2 103.2 384 112 384h160c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 352h-160C103.2 352 96 344.8 96 336C96 327.2 103.2 320 112 320h160c8.836 0 16 7.162 16 16C288 344.8 280.8 352 272 352zM288 272C288 280.8 280.8 288 272 288h-160C103.2 288 96 280.8 96 272C96 263.2 103.2 256 112 256h160C280.8 256 288 263.2 288 272z"></path></svg>
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
                    <span class="accessibility-menu-item-title"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M496 48V192c0 17.69-14.31 32-32 32H320c-17.69 0-32-14.31-32-32s14.31-32 32-32h63.39c-29.97-39.7-77.25-63.78-127.6-63.78C167.7 96.22 96 167.9 96 256s71.69 159.8 159.8 159.8c34.88 0 68.03-11.03 95.88-31.94c14.22-10.53 34.22-7.75 44.81 6.375c10.59 14.16 7.75 34.22-6.375 44.81c-39.03 29.28-85.36 44.86-134.2 44.86C132.5 479.9 32 379.4 32 256s100.5-223.9 223.9-223.9c69.15 0 134 32.47 176.1 86.12V48c0-17.69 14.31-32 32-32S496 30.31 496 48z"></path></svg>
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
        $button.innerHTML = `<svg viewBox="0 0 91 88" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon-our-impact-schools" transform="translate(0.000000, 0.837293)" fill="currentColor" fill-rule="nonzero"><path d="M43.5997105,87.0702085 C23.8997105,86.9702085 11.4997105,77.4702085 3.89971055,58.4702085 C-3.30028945,40.4702085 -0.300289455,19.5702085 10.9997105,9.07020851 C12.4997105,7.77020851 14.0997105,6.57020851 15.7997105,5.57020851 C44.7997105,-11.3297915 89.1997105,12.5702085 90.3997105,45.7702085 C90.5997105,49.6702085 90.3997105,54.6702085 88.1997105,57.2702085 C75.8997105,72.1702085 64.0997105,88.4702085 43.5997105,87.0702085" id="Path_15583"></path></g><g id="Group" transform="translate(19.000000, 18.000000)" fill="#FFFFFF" fill-rule="nonzero"><path d="M26,4.19354839 C38.0515242,4.19354839 47.8064516,13.9465887 47.8064516,26 C47.8064516,38.0515242 38.0534113,47.8064516 26,47.8064516 C13.9484758,47.8064516 4.19354839,38.0534113 4.19354839,26 C4.19354839,13.9484758 13.9465887,4.19354839 26,4.19354839 M26,0 C11.6405565,0 0,11.6405565 0,26 C0,40.3594435 11.6405565,52 26,52 C40.3594435,52 52,40.3594435 52,26 C52,11.6405565 40.3594435,0 26,0 Z M26,5.87096774 C14.8830081,5.87096774 5.87096774,14.8830081 5.87096774,26 C5.87096774,37.1169919 14.8830081,46.1290323 26,46.1290323 C37.1169919,46.1290323 46.1290323,37.1169919 46.1290323,26 C46.1290323,14.8830081 37.1169919,5.87096774 26,5.87096774 Z M26,10.483871 C28.0844032,10.483871 29.7741935,12.1736613 29.7741935,14.2580645 C29.7741935,16.3424677 28.0844032,18.0322581 26,18.0322581 C23.9155968,18.0322581 22.2258065,16.3424677 22.2258065,14.2580645 C22.2258065,12.1736613 23.9155968,10.483871 26,10.483871 Z M38.3438145,20.7604758 C35.3336855,21.4711774 32.5241129,22.0969597 29.7323629,22.4176613 C29.8215806,33.0087823 31.0225081,35.3182742 32.3572097,38.7327661 C32.7364113,39.7035726 32.256879,40.797879 31.2860726,41.1770806 C30.3151613,41.5562823 29.2208548,41.07675 28.8416532,40.1059435 C27.9290323,37.7672016 27.050379,35.8457177 26.5078387,31.8709677 L25.492371,31.8709677 C24.9506694,35.8392177 24.0734839,37.7637419 23.1584516,40.1059435 C22.7794597,41.0762258 21.6854677,41.5564919 20.7141371,41.1770806 C19.7433306,40.797879 19.2637984,39.7034677 19.643,38.7327661 C20.9758145,35.3212097 22.1785242,33.0147581 22.2678468,22.4176613 C19.4760968,22.0970645 16.6665242,21.4712823 13.6562903,20.7604758 C12.7546774,20.5475484 12.1963065,19.6441532 12.4092339,18.7424355 C12.6221613,17.8407177 13.5254516,17.2824516 14.4272742,17.495379 C24.5637097,19.8887419 27.4569435,19.8839194 37.5730403,17.495379 C38.4745484,17.2825565 39.3781532,17.8407177 39.5910806,18.7424355 C39.8037984,19.6441532 39.2454274,20.5476532 38.3438145,20.7604758 L38.3438145,20.7604758 Z" id="Shape"></path></g></g></svg>`;

        // menu
        var $menu = document.createElement("div");
        $menu.id = SETTINGS["id-menu"];
        $menu.classList.add("mw-accessibility-menu");
        $menu.innerHTML = `
          <div class="accessibility-menu-wrap">
            <div class="accessibility-menu-header">
              <div class="accessibility-menu-logo">
                <svg width='30px' height='30px' viewBox='0 0 30 30' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'><g id='universal-access-solid' transform='translate(15.000000, 15.000000) scale(-1, 1) translate(-15.000000, -15.000000) ' fill='#000000' fill-rule='nonzero'><path d='M15,0 C6.71484375,0 0,6.71484375 0,15 C0,23.2851562 6.71484375,30 15,30 C23.2851562,30 30,23.2851562 30,15 C30,6.71484375 23.2851562,0 15,0 Z M15,4.6875 C16.2943359,4.6875 17.34375,5.73691406 17.34375,7.03125 C17.34375,8.32558594 16.2949219,9.375 15,9.375 C13.7050781,9.375 12.65625,8.32617188 12.65625,7.03125 C12.65625,5.73632812 13.7050781,4.6875 15,4.6875 Z M21.9492188,12.6035156 L18.4746094,13.59375 C18.2578125,13.6582031 18.0351562,13.6875 17.8125,13.734375 L17.8125,17.3859375 L19.6078125,22.5035156 C19.8650977,23.2359375 19.4796094,24.0380859 18.7470703,24.2958984 C18.5917969,24.3515625 18.4335938,24.375 18.28125,24.375 C17.7008203,24.375 17.1568359,24.0124219 16.9546875,23.4339844 L15.4400391,19.2943359 C15.2899219,18.8840625 14.7099609,18.8840625 14.559375,19.2943359 L13.0447266,23.4339844 C12.84375,24.0117188 12.2988281,24.375 11.71875,24.375 C11.5640039,24.375 11.4075,24.3493652 11.2527539,24.29625 C10.520332,24.0380859 10.1347852,23.2362891 10.3920117,22.5038672 L12.1875,17.3847656 L12.1875,13.734375 C11.9648438,13.6875 11.7421875,13.6582031 11.5253906,13.59375 L8.05078125,12.6035156 C7.30664062,12.3867188 6.87304687,11.6132813 7.08398438,10.8632813 C7.29492188,10.1132813 8.08007812,9.6796875 8.82421875,9.89648438 L12.2958984,10.8890625 C14.0636719,11.3943164 15.9375,11.3943164 17.7046875,10.8890625 L21.1763672,9.89648438 C21.9205078,9.67494141 22.7009766,10.1143945 22.9148438,10.8615234 C23.1269531,11.6132813 22.6933594,12.3867188 21.9492188,12.6035156 Z' id='Shape'></path></g></g></svg>
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


