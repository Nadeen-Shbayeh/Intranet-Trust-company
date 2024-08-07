
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <meta name="csrf-token" content="{{ csrf_token() }}">


  



   
</head>

<x-app-layout>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

@import url(../fonts/stylesheet.css);

html {
  line-height: 1.15;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

body {
  margin: 0;
}

/**
 * Render the `main` element consistently in IE.
 */

main {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  /* 1 */
  height: 0;
  /* 1 */
  overflow: visible;
  /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none;
  /* 1 */
  text-decoration: underline;
  /* 2 */
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  line-height: 1.15;
  /* 1 */
  margin: 0;
  /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input {
  /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select {
  /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  /* 1 */
  color: inherit;
  /* 2 */
  display: table;
  /* 1 */
  max-width: 100%;
  /* 1 */
  padding: 0;
  /* 3 */
  white-space: normal;
  /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type="checkbox"],
[type="radio"] {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  /* 1 */
  padding: 0;
  /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}

/* Grayscale: */

/* Colors: */

/* Background colors: */

/* Fonts Start */

/* Fonts End */

/*!
 * Bootstrap Grid v4.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

@-ms-viewport {
  width: device-width;
}

html {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -ms-overflow-style: scrollbar;
}

*,
*::before,
*::after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  padding-top: 5px;
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto,
.col-xxl-1,
.col-xxl-2,
.col-xxl-3,
.col-xxl-4,
.col-xxl-5,
.col-xxl-6,
.col-xxl-7,
.col-xxl-8,
.col-xxl-9,
.col-xxl-10,
.col-xxl-11,
.col-xxl-12,
.col-xxl,
.col-xxl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 10px;
  padding-left: 10px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.33333%;
  flex: 0 0 8.33333%;
  max-width: 8.33333%;
}

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.66667%;
  flex: 0 0 16.66667%;
  max-width: 16.66667%;
}

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.33333%;
  flex: 0 0 33.33333%;
  max-width: 33.33333%;
}

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.66667%;
  flex: 0 0 41.66667%;
  max-width: 41.66667%;
}

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.33333%;
  flex: 0 0 58.33333%;
  max-width: 58.33333%;
}

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.66667%;
  flex: 0 0 66.66667%;
  max-width: 66.66667%;
}

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.33333%;
  flex: 0 0 83.33333%;
  max-width: 83.33333%;
}

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.66667%;
  flex: 0 0 91.66667%;
  max-width: 91.66667%;
}

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

/*# sourceMappingURL=custom-grid.css.map */

* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-tap-highlight-color: transparent;
  -webkit-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
}

html,
body {
  font-family: 'Inter', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
ul,
a,
button {
  margin: 0;
  padding: 0;
  line-height: 1;
}

a {
  color: inherit;
  text-decoration: none;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}

a:hover {
  color: inherit;
  text-decoration: none;
}

ul,
ol {
  list-style-type: none;
}

img {
  max-width: 100%;
}

:focus {
  outline-width: 0;
}

.me-11 {
  margin-right: 11px;
}

.me-10 {
  margin-right: 10px;
}

.ms-20 {
  margin-left: 20px;
}

.mb-20 {
  margin-bottom: 20px;
}

.p-relative {
  position: relative;
}

.resize-none {
  resize: none;
}

.white-block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  background-color: #FFFFFF;
  border-radius: 10px;
  padding: 20px;
  margin-bottom: 20px;
  overflow-x: hidden;
   overflow-y: auto;
   height: 300px;
  
}
html {
  scroll-behavior: smooth;
}

.white-block__title {
  font-weight: 500;
  font-size: 16px;
  line-height: 1.5;
  color: #171717;
  margin-bottom: 20px;
}

.white-block .select {
  width: 100%;
  background-color: #eff0f6;
}

.white-block.checkboxes label {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-bottom: 15px;
}

.white-block.checkboxes label:last-child {
  margin-bottom: 0;
}

.white-block.checkboxes input {
  margin-right: 12px;
  width: 16px;
  height: 16px;
}

.white-block.checkboxes span {
  font-size: 14px;
  line-height: 1.71;
}

/* content of sr-only is available only for screen-readers */

.sr-only {
  position: absolute;
  white-space: nowrap;
  width: 1px;
  height: 1px;
  overflow: hidden;
  border: 0;
  padding: 0;
  clip: rect(0 0 0 0);
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  margin: -1px;
}

/* Skip link */

.skip-link {
  background-color: #eee;
  clip: auto !important;
  -webkit-clip-path: none;
  clip-path: none;
  color: #444;
  display: block;
  font-size: 1em;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000;
}

.skip-link.sr-only {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  width: 1px;
  word-wrap: normal !important;
}

.skip-link.sr-only:focus {
  background-color: #fff;
  clip: auto !important;
  -webkit-clip-path: none;
  clip-path: none;
  color: #767676;
  display: block;
  font-size: 1em;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000;
}

::-webkit-scrollbar {
  width: 6px;
}

/* Track */

::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  border-radius: 10px;
}

/* Handle */

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.4);
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
}

::-webkit-scrollbar-thumb:window-inactive {
  background: rgba(253, 253, 253, 0.4);
}

body {
  background-color: #F0F2FA;
}

.page-flex {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.page-center {
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  text-align: center;
  padding: 30px 15px;
}

.main-wrapper {
  position: relative;
  width: 100%;
}

.footer {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
}

.layer {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 2;
}

.layer.active {
  display: block;
}

@font-face {
  font-family: "demo";
  font-display: swap;
  src: url("../fonts/demo.woff") format("woff"), url("../fonts/demo.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-Black";
  font-display: swap;
  src: url("../fonts/Inter-Black.woff") format("woff"), url("../fonts/Inter-Black.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-ExtraBold";
  font-display: swap;
  src: url("../fonts/Inter-ExtraBold.woff") format("woff"), url("../fonts/Inter-ExtraBold.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-Bold";
  font-display: swap;
  src: url("../fonts/Inter-Bold.woff") format("woff"), url("../fonts/Inter-Bold.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-Light";
  font-display: swap;
  src: url("../fonts/Inter-Light.woff") format("woff"), url("../fonts/Inter-Light.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-ExtraLight";
  font-display: swap;
  src: url("../fonts/Inter-ExtraLight.woff") format("woff"), url("../fonts/Inter-ExtraLight.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-Regular";
  font-display: swap;
  src: url("../fonts/Inter-Regular.woff") format("woff"), url("../fonts/Inter-Regular.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-Medium";
  font-display: swap;
  src: url("../fonts/Inter-Medium.woff") format("woff"), url("../fonts/Inter-Medium.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-SemiBold";
  font-display: swap;
  src: url("../fonts/Inter-SemiBold.woff") format("woff"), url("../fonts/Inter-SemiBold.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "stylesheet";
  font-display: swap;
  src: url("../fonts/stylesheet.woff") format("woff"), url("../fonts/stylesheet.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Inter-Thin";
  font-display: swap;
  src: url("../fonts/Inter-Thin.woff") format("woff"), url("../fonts/Inter-Thin.woff2") format("woff2");
  font-weight: 400;
  font-style: normal;
}

/* Basic config for all custom icons: */

.icon {
  display: inline-block;
  background-repeat: no-repeat;
  background-position: center center;
}

.logo {
  background-image: url(../img/svg/Logo.svg);
  width: 49px;
  height: 49px;
}

.menu-toggle {
  background-image: url(../img/svg/Bulk/Menu-toggle-white.svg);
  width: 24px;
  height: 24px;
}

.menu-toggle--gray {
  background-image: url(../img/svg/Bulk/Menu-toggle-gray.svg);
  width: 24px;
  height: 24px;
}

.home {
  background-image: url(../img/svg/Bulk/Home-white.svg);
  width: 24px;
  height: 24px;
}

.document {
  background-image: url(../img/svg/Bulk/Document-white.svg);
  width: 24px;
  height: 24px;
}

.folder {
  background-image: url(../img/svg/Bulk/Folder-white.svg);
  width: 24px;
  height: 24px;
}

.arrow-down {
  background-image: url(../img/svg/Bulk/Arrow-DownCircle.svg);
  width: 24px;
  height: 24px;
}

.image {
  background-image: url(../img/svg/Bulk/Image-white.svg);
  width: 24px;
  height: 24px;
}

.paper {
  width: 24px;
  height: 24px;
  background-image: url(../img/svg/Bulk/Paper-white.svg);
}

.message {
  background-image: url(../img/svg/Bulk/Message-white.svg);
  width: 24px;
  height: 24px;
}

.edit {
  background-image: url(../img/svg/Bulk/Edit-white.svg);
  width: 24px;
  height: 24px;
}

.category {
  background-image: url(../img/svg/Bulk/Category-white.svg);
  width: 24px;
  height: 24px;
}

.user-3 {
  background-image: url(../img/svg/Bulk/3-User-white.svg);
  width: 24px;
  height: 24px;
}

.setting {
  background-image: url(../img/svg/Bulk/Setting-white.svg);
  width: 24px;
  height: 24px;
}

.settings-line {
  background-image: url(../img/svg/Bulk/Settings-line.svg);
  width: 24px;
  height: 24px;
}

.avatar {
  background-image: url(../img/avatar/Avatar.svg);
  width: 56px;
  height: 56px;
}

.avatar-2 {
  background-image: url(../img/avatar/avatar-2.svg);
  width: 40px;
  height: 40px;
}

.notification {
  background-image: url(../img/svg/Bulk/Notification-gray.svg);
  width: 24px;
  height: 24px;
}

.arrows-up-down {
  background-image: url(../img/svg/Bulk/Arrows-up-down.svg);
  width: 10px;
  height: 17px;
  margin-left: 10px;
}

.move {
  background-image: url(../img/svg/move.svg);
  width: 24px;
  height: 24px;
}

.radio {
  background-image: url(../img/svg/radio.svg);
  width: 24px;
  height: 24px;
}

.thumbnail {
  background-image: url(../img/svg/thumbnail.svg);
  width: 60px;
  height: 60px;
}

.time-circle {
  background-image: url(../img/svg/Bulk/TimeCircle.svg);
  width: 24px;
  height: 24px;
}

.google-drive {
  background-image: url(../img/svg/GoogleDrive.svg);
  width: 24px;
  height: 24px;
}

.dropbox {
  background-image: url(../img/svg/dropbox.svg);
  width: 24px;
  height: 24px;
}

.star {
  background-image: url(../img/svg/Bulk/Star.svg);
  width: 24px;
  height: 24px;
}

.delete {
  background-image: url(../img/svg/Bulk/Delete.svg);
  width: 24px;
  height: 24px;
}

.search-wrapper svg {
  stroke: #D6D7E3;
  position: absolute;
  left: 11px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 24px;
  height: 24px;
  z-index: 1;
}

.lang-switcher svg {
  stroke: #B9B9B9;
}

.theme-switcher svg {
  width: 24px;
  height: 24px;
}

.theme-switcher circle {
  fill: #D6D7E3;
  stroke: #D6D7E3;
}

.theme-switcher line {
  stroke: #D6D7E3;
}

.users .primary-white-btn svg {
  margin-right: 5px;
}

.folder-list svg {
  color: #ffb648;
  fill: #ffb648;
}

.files-item__img svg {
  color: #fff;
  width: 27px;
  height: 27px;
}

.library-table-name span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 20px;
  height: 20px;
  padding: 2px 3px;
  margin-right: 5px;
  border-radius: 3px;
  color: #fff;
}

.library-table-name span.info {
  background-color: #5887ff;
}

.library-table-name span.danger {
  background-color: #f26464;
}

.library-table-name span.warning {
  background-color: #ffb648;
}

.library-table-name span.success {
  background-color: #4bde97;
}

.library-table-name span.purple {
  background-color: #5f2eea;
}

.dropzone-start svg {
  width: 60px;
  height: 60px;
  color: #d6d7e3;
  stroke-width: 1px;
}

h1,
h2,
h3 {
  letter-spacing: 1px;
  color: #171717;
}

.h-1 {
  font-size: 64px;
  line-height: 1.03;
}

.h-2 {
  font-size: 48px;
  line-height: 1.04;
}

.h-3 {
  font-size: 32px;
  line-height: 1.06;
}

.main-title {
  font-weight: bold;
  font-size: 24px;
  line-height: 1.42;
  color: #171717;
  margin-bottom: 20px;
}

/* Buttons */

button {
  cursor: pointer;
  -webkit-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
  border: 2px solid transparent;
}

button:focus {
  outline: none;
  border: 2px solid #AFBCFF !important;
}

button.disabled {
  cursor: default;
  color: #d6d7e3;
}

button.disabled:hover {
  color: #d6d7e3;
}

button.disabled:focus {
  border-color: transparent !important;
  outline: none;
}

.main-btns-wrapper button,
.main-btns-wrapper select {
  min-height: 48px;
  line-height: 1.5;
}

.transparent-btn {
  background-color: transparent;
  border: 2px solid transparent !important;
}

.transparent-btn:focus {
  outline: none;
  border: 2px solid #AFBCFF !important;
}

.primary-default-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  border-radius: 4px;
  padding: 10px 20px;
  background-color: #2f49d1;
  color: #fff;
}

.primary-default-btn:hover {
  background-color: #4661F0;
  color: #fff;
}

.primary-white-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  border-radius: 4px;
  padding: 10px 20px;
  background-color: #fff;
  color: #2f49d1;
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
}

.primary-white-btn:hover {
  color: #4661F0;
}

.secondary-default-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  border-radius: 4px;
  padding: 10px 20px;
  border: 2px solid #2f49d1;
  color: #2f49d1;
  background-color: transparent;
}

.secondary-default-btn:hover {
  background-color: rgba(47, 73, 209, 0.1);
}

.flat-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 10px 20px;
  background-color: rgba(47, 73, 209, 0.1);
  border-radius: 4px;
  font-size: 16px;
  line-height: 1.5;
  color: #2f49d1;
}

.sidebar-toggle {
  opacity: 0.6;
  -webkit-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
}

.sidebar-toggle:hover {
  opacity: 1;
}

.sidebar-toggle.rotated {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.category__btn {
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  border-radius: 50%;
  right: 0;
  top: 13px;
  z-index: 1;
}

.gray-circle-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  background-color: #eff0f6;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border-width: 0;
}

.ligt-circle-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border-width: 0;
  background-color: #F5EFFF;
}

.lang-switcher {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.nav-user-btn {
  background-color: transparent;
}

.extentions-btn {
  border: 1px solid #EEEEEE !important;
  border-radius: 4px;
  background-color: transparent;
  padding: 5px 20px;
  color: #f26464;
}

.extentions-btn.disabled {
  color: #d6d7e3;
}

.filter-btn svg {
  margin-right: 6px;
}

.sort-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.tag-btn {
  font-weight: 600;
  font-size: 12px;
  line-height: 1.67;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #d6d7e3;
  padding: 2px 8px;
  background-color: #FFFFFF;
  border: 1px solid #EEEEEE;
  border-radius: 4px;
}

.tag-btn svg {
  margin-left: 8px;
  width: 16px;
  height: 16px;
}

.folder-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  background-color: #eff0f6;
  border-radius: 5px;
}

.folder-btn svg {
  width: 16px;
  height: 16px;
  color: #B9B9B9;
}

.upgrade-btn {
  padding: 10px 17px;
  background: rgba(0, 97, 247, 0.1);
  border-radius: 4px;
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 1.5;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
  color: #5f2eea;
}

.upgrade-btn:hover {
  color: #5f2eea;
  background: rgba(0, 97, 247, 0.15);
}

.upgrade-btn svg {
  margin-left: 10px;
}

.media-table-btn {
  padding: 10px 20px;
  background-color: transparent;
  border: 2px solid #EEEEEE;
  border-radius: 4px;
  font-size: 16px;
  line-height: 1.5;
  color: #b9b9b9;
}

.view-sort-btn {
  width: 44px;
  height: 44px;
  border-radius: 8px;
  background-color: #eff0f6;
  color: #d6d7e3;
}

.view-sort-btn:hover {
  color: #fff;
  background-color: #E0E3F1;
}

.badge-pending,
.badge-active,
.badge-trashed,
.badge-success,
.badge-disabled {
  padding: 1px;
  width: 85px;
  font-weight: 500;
  font-size: 12px;
  line-height: 1.67;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  border-radius: 100px;
  text-align: center;
}

.badge-active {
  color: #5887ff;
  background-color: rgba(88, 135, 255, 0.1);
}

.badge-pending {
  color: #ffb648;
  background-color: rgba(255, 172, 50, 0.1);
}

.badge-disabled {
  color: white;
  background-color: #ffb648;
}

.badge-trashed {
  color: #f26464;
  background-color: rgba(245, 91, 93, 0.1);
}

.badge-success {
  color: #4bde97;
  background-color: rgba(75, 222, 151, 0.1);
}

input {
  border-radius: 6px;
  background-color: #eff0f6;
  border-width: 0;
  min-height: 40px;
  border: solid transparent 2px !important;
}

input[type="checkbox"],
input[type="radio"] {
  min-height: auto;
}

input[type="radio"] {
  width: 24px;
  height: 24px;
  margin-right: 19px;
}

input[type="radio"]:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}

input::-webkit-input-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

input::-moz-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

input:-ms-input-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

input::-ms-input-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

input::placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

input:focus {
  outline: none;
  border: rgba(134, 182, 254, 0.5) solid !important;
  -webkit-box-shadow: 0 0 0 2px rgba(134, 182, 254, 0.5);
  box-shadow: 0 0 0 2px rgba(134, 182, 254, 0.5);
}

input:enabled:read-write:-webkit-any(:focus, :hover)::-webkit-calendar-picker-indicator {
  display: none !important;
}

.check {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

label {
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  cursor: pointer;
}

.new-page-content input {
  padding: 5px 16px;
}


.table-wrapper {
  overflow-x: auto;
  overflow-y: hidden;
  margin-bottom: 20px;
}

.table-wrapper table {
  min-width: 850px;
}

.table-wrapper table.posts-table {
  min-width: 944px;
}

.table-wrapper table.library-table {
  min-width: 483px;
}

.sidebar {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  background-color: #0061f7 !important;
  width: 253px;
  padding: 20px 15px 37px 20px;
  -webkit-transition: 0.5s all;
  -o-transition: 0.5s all;
  transition: 0.5s all;
 
  /* sidebar head */
  /* sidebar body */
  /* sidebar footer */
}


.logo {
  margin-right: 9px;
}

.logo-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.logo-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  color: #fff;
}

.logo-title {
  font-size: 21px;
  font-weight: 700;
  line-height: 1.4;
  letter-spacing: 0.86px;
}

.logo-subtitle {
  font-size: 12px;
  font-weight: 500;
  line-height: 2.42;
  letter-spacing: 0.86px;
}

.msg-counter {
  position: absolute;
  border-radius: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 20px;
  height: 20px;
  background-color: #f26464;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-weight: 500;
  font-size: 12px !important;
  line-height: 1.25;
  letter-spacing: 0.75px;
  color: #FFFFFF;
}

.system-menu__title {
  display: inline-block;
  margin-top: 13px;
  margin-bottom: 2px;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 12px;
  line-height: 1.25;
  letter-spacing: 0.75px;
  color: rgba(255, 255, 255, 0.5);
}

.cat-sub-menu {
  padding-left: 34px;
  height: 0;
}

.cat-sub-menu.visible {
  height: auto;
}

.cat-sub-menu.visible a {
  opacity: 0.6;
  visibility: visible;
}

.cat-sub-menu.visible a:hover {
  opacity: 1;
}

.cat-sub-menu a {
  opacity: 0;
  visibility: hidden;
}

.category__btn .icon {
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.category__btn.rotated .icon {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.main-nav {
  padding-top: 20px;
  padding-bottom: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.main-nav a:focus {
  outline: none;
}

.main-nav--bg {
  -webkit-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
  background-color: #fff;
}

.main-nav-end {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.main-nav-end > * {
  margin-right: 15px;
}

.main-nav-end > *:last-child {
  margin-right: 0;
}

.main-nav .notification {
  position: relative;
}

.main-nav .notification::after {
  display: none;
  content: '';
  position: absolute;
  right: 0;
  top: 0;
  border-radius: 50%;
  height: 9px;
  width: 9px;
  border: 1px solid #fff;
  background-color: #f26464;
}

.main-nav .notification.active::after {
  display: initial;
}

.main-nav .notification-wrapper {
  position: relative;
}

.main-nav .notification-dropdown {
  right: 0;
  width: 236px;
  padding: 10px;
}

.main-nav .notification-dropdown-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 167px;
}

.main-nav .notification-dropdown__title {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.22;
  color: #171717;
  margin-bottom: 5px;
}

.main-nav .notification-dropdown__subtitle {
  font-size: 10px;
  line-height: 1.2;
  color: #767676;
}

.main-nav .notification-dropdown-icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

.main-nav .notification-dropdown-icon.info {
  background-color: rgba(88, 135, 255, 0.1);
  color: #5887ff;
}

.main-nav .notification-dropdown-icon.danger {
  background-color: rgba(242, 100, 100, 0.1);
  color: #f26464;
}

.main-nav .notification-dropdown a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-bottom: 10px;
  padding-top: 15px;
}

.main-nav .notification-dropdown a.link-to-page {
  padding-top: 17px;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  font-weight: 500;
  font-size: 12px;
  line-height: 15px;
  color: #5887ff;
}

.main-nav .nav-user-wrapper {
  position: relative;
}


.sort-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 20px 36px 20px 20px;
  background-color: #FFFFFF;
  -webkit-box-shadow: 0px 1px 0px #DADBE4;
  box-shadow: 0px 1px 0px #DADBE4;
  border-radius: 10px 10px 0 0;
}

.sort-bar .search-wrapper {
  position: relative;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
}

.sort-bar .search-wrapper input {
  padding: 5px 42px 5px 16px;
}

.sort-bar .search-wrapper svg {
  left: auto;
  right: 16px;
}

.sort-bar .select {
  min-width: 185px;
  margin-right: 20px;
}

.sort-bar .select.small {
  min-width: 142px;
}

.sort-bar .select-wrapper:last-child .select {
  margin-right: 0;
}

.sort-bar .filter-btn {
  min-width: 106px;
}

.sort-bar-end {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.categories-sort-bar .sort-bar-end {
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
}

.stat-cards {
  margin-right: -10px;
  margin-left: -10px;
}

.stat-cards > div {
  padding-left: 10px;
  padding-right: 10px;
}

.stat-cards-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 24px 19px;
  background-color: #FFFFFF;
  -webkit-box-shadow: 0px 15px 50px rgba(160, 163, 189, 0.1);
  box-shadow: 0px 15px 50px rgba(160, 163, 189, 0.1);
  border-radius: 10px;
  height: 100%;
}

.stat-cards-icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-right: 9px;
}

.stat-cards-icon.primary {
  background-color: rgba(47, 73, 209, 0.1);
  color: #2f49d1;
}

.stat-cards-icon.warning {
  background-color: rgba(255, 182, 72, 0.1);
  color: #ffb648;
}

.stat-cards-icon.purple {
  background-color: rgba(95, 46, 234, 0.1);
  color: #5f2eea;
}

.stat-cards-icon.success {
  background-color: rgba(75, 222, 151, 0.1);
  color: #4bde97;
}

.stat-cards-info__num {
  font-weight: 600;
  font-size: 18px;
  line-height: 1.22;
  color: #171717;
  margin-bottom: 4px;
}

.stat-cards-info__title {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.22;
  color: #b9b9b9;
  margin-bottom: 6px;
}

.stat-cards-info__progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  font-size: 14px;
  line-height: 1.22;
  color: #b9b9b9;
}

.stat-cards-info__profit {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  font-size: 14px;
  line-height: 1.22;
  margin-right: 10px;
}

.stat-cards-info__profit.success {
  color: #4bde97;
}

.stat-cards-info__profit.danger {
  color: #f26464;
}

.stat-cards-info__profit.warning {
  color: #ffb648;
}

.stat-cards-info__profit svg {
  width: 16px;
  height: 16px;
  margin-right: 5px;
}

.customers-wrapper {
  height: 256px;
  background-color: #5f2eea;
  -webkit-box-shadow: 0px 15px 50px rgba(160, 163, 189, 0.1);
  box-shadow: 0px 15px 50px rgba(160, 163, 189, 0.1);
  border-radius: 10px;
  position: relative;
  overflow: hidden;
  margin-bottom: 20px;
}

.customers-wrapper img {
  position: absolute;
  max-width: none;
  bottom: 0;
  left: -10px;
}

.customers__title {
  font-weight: 600;
  font-size: 16px;
  line-height: 1.4;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  letter-spacing: -0.5px;
  color: #FFFFFF;
  margin-bottom: 4px;
}

.customers__date {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.4;
  letter-spacing: -0.5px;
  color: #fff;
  opacity: 0.5;
}

.top-cat-title {
  margin-bottom: 10px;
}

.top-cat-title h3 {
  font-style: normal;
  font-weight: 600;
  font-size: 16px;
  line-height: 1.2;
  letter-spacing: -0.4px;
  color: #171717;
  margin-bottom: 4px;
}

.top-cat-title p {
  font-weight: 500;
  font-size: 12px;
  line-height: 1.2;
  letter-spacing: -0.4px;
  color: #b9b9b9;
}

.top-cat-list a {
  display: block;
  padding-top: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid #EEEEEE;
}

.top-cat-list__title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  font-weight: 600;
  font-size: 12px;
  line-height: 1.2;
  letter-spacing: -0.4px;
  color: #171717;
  margin-bottom: 4px;
}

.top-cat-list__subtitle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  font-size: 12px;
  line-height: 1.2;
  letter-spacing: -0.4px;
  color: #b9b9b9;
}

.top-cat-list__subtitle span {
  font-weight: 500;
  font-size: 10px;
  line-height: 1.2;
  letter-spacing: -0.4px;
  padding: 2px 4px;
  border-radius: 3px;
}

.top-cat-list__subtitle .purple {
  color: #5f2eea;
  background-color: rgba(116, 51, 255, 0.1);
}

.top-cat-list__subtitle .blue {
  color: #0061f7;
  background-color: rgba(116, 51, 255, 0.1);
}

.top-cat-list__subtitle .danger {
  color: #f26464;
  background-color: rgba(245, 91, 93, 0.1);
}

.top-cat-list__subtitle .success {
  color: #4bde97;
  background-color: rgba(75, 222, 151, 0.1);
}

.top-cat-list__subtitle .warning {
  color: #ffb648;
  background-color: rgba(255, 172, 50, 0.1);
}

.top-cat-list__subtitle .primary {
  color: #2f49d1;
  background-color: rgba(47, 73, 209, 0.1);
}

.chart {
  width: 100%;
  height: 370px;
  margin-bottom: 20px;
  -webkit-box-shadow: 0px 15px 50px 0px rgba(160, 163, 189, 0.1);
  box-shadow: 0px 15px 50px 0px rgba(160, 163, 189, 0.1);
}

.chart #myChart {
  max-height: 100% !important;
  max-width: 100% !important;
  background-color: #fff;
  -webkit-box-shadow: 0px 15px 50px rgba(160, 163, 189, 0.1);
  box-shadow: 0px 15px 50px rgba(160, 163, 189, 0.1);
  border-radius: 10px;
  padding: 20px;
}



.main-content {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  margin-top: 20px;
  margin-bottom: 20px;
  min-height: 65vh;
}

.main-title-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-bottom: 34px;
}

.main-title-wrapper h2 {
  margin-bottom: 0;
}

.main-title-wrapper .primary-default-btn svg {
  margin-right: 9px;
}

.main-btns-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.main-btns-wrapper button {
  margin-right: 10px;
}

.main-btns-wrapper button:last-child {
  margin-right: 0;
}

.footer {
  margin-top: 50px;
  text-align: center;
 
  bottom: 0;
  position: fixed;
  color: #b9b9b9;
  font-size: 12px;
}


.footer a:hover {
  color: #2f49d1;
  border-color: #2f49d1;
}

.form {
  -webkit-box-shadow: 0px 5px 10px rgba(160, 163, 189, 0.1);
  box-shadow: 0px 5px 10px rgba(160, 163, 189, 0.1);
  border-radius: 10px;
  padding: 40px 40px 56px;
  background-color: #FFFFFF;
  text-align: left;
}

.form-label {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #171717;
  cursor: pointer;
  margin-bottom: 5px;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
}

.form-label-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
}

.form-input {
  border-radius: 8px;
  border-width: 0;
  margin-bottom: 15px;
  padding: 5px 16px;
  height: 44px;
  background: #eff0f6;
}

.form-input::-webkit-input-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

.form-input::-moz-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

.form-input:-ms-input-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

.form-input::-ms-input-placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

.form-input::placeholder {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  color: #d6d7e3;
}

.form-checkbox {
  margin-right: 12px;
}

.form-checkbox-label {
  font-family: Inter;
  font-size: 14px;
  line-height: 1.71;
  color: #767676;
}

.form-checkbox-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  cursor: pointer;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  margin-bottom: 20px;
}

.form-btn {
  width: 100%;
}

.forget-link {
  font-weight: 500;
  font-size: 14px;
  line-height: 2.43;
  border-bottom: dashed 1px transparent;
}

.forget-link:hover {
  color: #2f49d1;
  border-color: #2f49d1;
}

.sign-up__title {
  font-size: 32px;
  line-height: 1.06;
  text-align: center;
  letter-spacing: 1px;
  color: #171717;
  margin-bottom: 20px;
}

.sign-up__subtitle {
  max-width: 424px;
  font-weight: 500;
  font-size: 14px;
  line-height: 1.2;
  text-align: center;
  color: #767676;
  margin-bottom: 20px;
}

.categories-table-img {
  margin-right: 26px;
}

.categories-table-img img {
  width: 71px;
  height: 47px;
  border-radius: 6px;
}

.darkmode {
  background-color: #11111d;
  /* Navigation */
  /* Sidebar */
  /* Dropdown */
  /* Main Title */
  /* Dashboard */
  /* Chart */
  /* Sort bar */
  /* Table */
  /* Form */
  /* Sign up */
  /* New page  */
  /* White block */
  /* Pagination */
  /* Badges */
  /* Buttons */
  /* Footer */
}

.darkmode .main-nav--bg {
  background-color: #161624;
}

.darkmode .search-wrapper input {
  color: #d6d7e3;
  background-color: #222235;
}

.darkmode .search-wrapper input::-webkit-input-placeholder {
  background-color: #222235;
}

.darkmode .search-wrapper input::-moz-placeholder {
  background-color: #222235;
}

.darkmode .search-wrapper input:-ms-input-placeholder {
  background-color: #222235;
}

.darkmode .search-wrapper input::-ms-input-placeholder {
  background-color: #222235;
}

.darkmode .search-wrapper input::placeholder {
  background-color: #222235;
}

.darkmode .gray-circle-btn {
  background-color: #222235;
}

.darkmode .sun-icon {
  display: none;
}

.darkmode .moon-icon {
  display: initial;
  fill: #fff;
}

.darkmode .sidebar {
  background-color: #161624 !important;
}

.darkmode .dropdown {
  background-color: #11111d;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.darkmode .dropdown::before {
  border-color: transparent transparent #11111d;
}

.darkmode .dropdown a {
  border-bottom-color: #2C2C42;
  color: #D6D7E3;
}

.darkmode .dropdown-btn {
  color: #b9b9b9;
}

.darkmode .notification-dropdown__title {
  color: #D6D7E3;
}

.darkmode .main-title {
  color: #EFF0F6;
}

.darkmode .stat-cards-item {
  background-color: #222235;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.darkmode .stat-cards-info__num {
  color: #EFF0F6;
}

.darkmode .chart {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.darkmode #myChart {
  background-color: #222235;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.darkmode .sort-bar {
  background-color: #161624;
}

.darkmode .sort-btn {
  color: #d6d7e3;
}

.darkmode .form {
  background-color: #161624;
}

.darkmode .form-label {
  color: #D6D7E3;
}

.darkmode .form-input {
  background-color: #222235;
  color: #D6D7E3;
}

.darkmode .sign-up__title {
  color: #EFF0F6;
}

.darkmode .sign-up__subtitle {
  color: #D6D7E3;
}

.darkmode .new-page-content input {
  background-color: #363648;
  color: #d6d7e3;
}

.darkmode .new-page-content .ql-toolbar {
  background-color: #363648;
  color: #d6d7e3;
}

.darkmode .white-block {
  background-color: #222235;
  color: #D6D7E3;
}

.darkmode .white-block__title {
  color: #D6D7E3;
}

.darkmode .white-block .radio {
  background-color: #37374B;
}

.darkmode .main-content {
  background-color: #161624;
}

.darkmode .top-cat-list a {
  border-color: #37374F;
}

.darkmode .top-cat-title h3 {
  color: #EFF0F6;
}

.darkmode .top-cat-list__title {
  color: #EFF0F6;
}

.darkmode .pagination a {
  opacity: .5;
  color: #FFFFFF;
}

.darkmode .pagination a.active {
  opacity: 1;
}

.darkmode .badge-disabled {
  background-color: rgba(255, 182, 72, 0.1);
  color: #ffb648;
}

.darkmode .primary-white-btn {
  border: 1px solid #222235 !important;
  background-color: #161624;
}

.darkmode .footer {
  border-top-color: #222235;
}

.darkmode .menu-toggle--gray {
  background-image: url(../img/svg/Bulk/Menu-toggle-white.svg);
}

.moon-icon {
  display: none;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }

  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }

  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }

  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }

  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }

  
  .col-xxl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-xxl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-xxl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-xxl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-xxl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-xxl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-xxl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-xxl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-xxl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-xxl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-xxl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-xxl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-xxl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-xxl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }

  .customers-wrapper {
    height: auto;
  }

  .customers-wrapper img {
    display: none;
  }
}

@media (max-width: 1300px) {
  .upgrade-btn {
    padding: 10px 7px;
  }

  .upgrade-btn svg {
    margin-left: 5px;
  }

  .sort-bar .search-wrapper input {
    width: 174px;
  }

  .categories-sort-bar .search-wrapper input {
    width: 271px;
  }

  .chart {
    height: auto;
    max-height: 370px;
  }
}

@media (max-width: 1199.98px) {
  .sidebar {
    position: fixed;
    z-index: 2;
    overflow-y: auto;
    left: -1000px;
  }

  .sidebar.hidden {
    left: 0;
  }

  .main-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
  }

  .sort-bar {
    padding: 20px;
  }

  .sort-bar .select {
    margin-right: 10px;
  }
}

@media (max-width: 991.98px) {
  .sort-bar-start {
    width: 100%;
    margin-bottom: 10px;
  }

  .sort-bar .search-wrapper {
    width: 100%;
  }

  .sort-bar .search-wrapper input {
    width: 100%;
  }

  .sort-bar .select {
    margin-right: 0;
    min-width: auto;
    width: 100%;
  }

  .sort-bar-end {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    width: 100%;
  }

  .sort-bar-end .select-wrapper {
    width: 24%;
  }

  .customers-wrapper {
    height: auto;
  }

  .customers-wrapper img {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .main-nav {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
    -ms-flex-direction: column-reverse;
    flex-direction: column-reverse;
  }

  .main-nav-start {
    width: 100%;
  }

  .main-nav-start input {
    width: 100%;
  }

  .main-nav-end {
    margin-bottom: 20px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    width: 100%;
  }

  .sort-bar {
    padding-bottom: 10px;
  }

  .sort-bar-end .select-wrapper {
    width: 48%;
    margin-bottom: 10px;
  }
}

@media (max-width: 575.98px) {
  .footer {
    position: relative;
  }

  .main-btns-wrapper {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .main-btns-wrapper button,
  .main-btns-wrapper select {
    width: 48%;
    margin-right: 0;
    margin-bottom: 15px;
    font-size: 14px;
  }

  .sort-bar {
    padding: 10px 10px 5px;
  }

 
  .footer--flex {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
  }
}

@media (max-width: 480.98px) {
  .main-title {
    font-size: 20px;
  }

  .primary-default-btn {
    padding: 8px 15px;
  }

  .sort-bar-end .select-wrapper {
    width: 49%;
  }

  .footer-start p {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}
body {
  font-family: "Lato", sans-serif;
}




/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}






.wrapper.row>* {
  padding: 0;
  text-align: center;
}

/* ----- end ----- */

.col-md-2 {
  background-color: tomato;
}

.col-md-2 div {
  position: sticky;
  top: 0;
  
  margin-right: 1;

}

.col-md-8 {
  background-color: gray;
  width: 130px;
  margin-left: 10px;
 


}


:root {
    --calendar-bg-color: #202020;
    --calendar-font-color: #FFF;
    --weekdays-border-bottom-color: #404040;
    --calendar-date-hover-color: #505050;
    --calendar-current-date-color: #1b1f21;
    --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
    --calendar-today-innerborder-color: transparent;
    --calendar-nextprev-bg-color: transparent;
    --next-prev-arrow-color : #FFF;
    --calendar-border-radius: 16px;
    --calendar-prevnext-date-color: #484848
}



.calendar {
    font-family: 'IBM Plex Sans', sans-serif;
    position: relative;
    max-width: 1000px; /*change as per your design need */
    min-width: 300px;
    background: var(--calendar-bg-color);
    color: var(--calendar-font-color);
    
    box-sizing: border-box;
    overflow: hidden;
    font-weight: normal;
    border-radius: var(--calendar-border-radius);
}

.calendar-inner {
    padding: 5px 5px;
   
}

.calendar .calendar-inner .calendar-body {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
}

.calendar .calendar-inner .calendar-body div {
    padding: 2px;
    min-height: 10px;
    line-height: 15px;
    border: 1px solid transparent;
    margin: 8px 2px 0px;
    font-size: 16px;
}

.calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
    border: 1px solid transparent;
    border-bottom: 1px solid var(--weekdays-border-bottom-color);
}

.calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
    border: 1px solid transparent;
    border-bottom: 1px solid var(--weekdays-border-bottom-color);
}

.calendar .calendar-inner .calendar-body div>a {
    color: var(--calendar-font-color);
    text-decoration: none;
    display: flex;
    justify-content: center;
}

.calendar .calendar-inner .calendar-body div:hover {
    border: 1px solid var(--calendar-date-hover-color);
    border-radius: 4px;
}

.calendar .calendar-inner .calendar-body div.empty-dates:hover {
    border: 1px solid transparent;
}

.calendar .calendar-inner .calendar-controls {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.calendar .calendar-inner .calendar-today-date {
    display: grid;
    text-align: center;
    cursor: pointer;
    margin: 3px 0px;
    background: var(--calendar-current-date-color);
   
    border-radius: 10px;
    width: 80%;
    margin: auto;
}

.calendar .calendar-inner .calendar-controls .calendar-year-month {
    display: flex;
    min-width: 100px;
    justify-content: space-evenly;
    align-items: center;
}

.calendar .calendar-inner .calendar-controls .calendar-next {
    text-align: right;
}

.calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
.calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
    font-weight: 500;
    font-size: 20px;
}

.calendar .calendar-inner .calendar-body .calendar-today {
    background: var(--calendar-today-color);
    border-radius: 4px;
}

.calendar .calendar-inner .calendar-body .calendar-today:hover {
    border: 1px solid transparent;
}

.calendar .calendar-inner .calendar-body .calendar-today a {
    outline: 2px solid var(--calendar-today-innerborder-color);
}

.calendar .calendar-inner .calendar-controls .calendar-next a,
.calendar .calendar-inner .calendar-controls .calendar-prev a {
    color: var(--calendar-font-color);
    font-family: arial, consolas, sans-serif;
    font-size: 10px;
    text-decoration: none;
    padding: 4px 12px;
    display: inline-block;
    background: var(--calendar-nextprev-bg-color);
   
}

.calendar .calendar-inner .calendar-controls .calendar-next a svg,
.calendar .calendar-inner .calendar-controls .calendar-prev a svg {
    height: 20px;
    width: 20px;
}

.calendar .calendar-inner .calendar-controls .calendar-next a svg path,
.calendar .calendar-inner .calendar-controls .calendar-prev a svg path{
    fill: var(--next-prev-arrow-color);
}

.calendar .calendar-inner .calendar-body .prev-dates,
.calendar .calendar-inner .calendar-body .next-dates {
    color: var(--calendar-prevnext-date-color);
}

.calendar .calendar-inner .calendar-body .prev-dates:hover,
.calendar .calendar-inner .calendar-body .next-dates:hover {
  border: 1px solid transparent;
  pointer-events: none;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');





.ticker {
    display: flex;
   
    width: 100%;
    height: 70px;
    margin: 0 auto;
    margin-bottom: 20px;
    
    
}
.news {
    width: 100%;
    background: #e88929  ;
    padding: 0 1%;
    
   
}
.title {
    width: 20%;
    text-align: center;
    background: #c86016;
    position: relative;
}

.title h5 {
    font-size: 18px;
    margin: 12% 0;
   
}
.news marquee {
    font-size: 18px;
    margin-top: 25px;

    
    
}


.news .item-news {
  
  list-style-type: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

.news .item-news li {
  display: inline-block;
  font-size: 18px;
  padding: 1px 30px;
}
.cards{
    display: flex;
    
    
}
.slider-wrapper .cards{
  display: inline-flex;
}

.slider-wrapper .cards .card{
  width: 250px;
  height: 255px;

}
.slider-wrapper .cards .card img{
  width: 400px;
  height: 200px;

 
}

.posts .cards .card img{
  width: 400px;
  height: 200px;
  

 
}
.details{

  
  text-align: center;
  padding: 1em;
  
  


}
.details h3{
  font-size:  bold 20px;
}

.details p{
  font-size: 12px;
  
}


.col-lg-8 .white-block {

   height: 330px;
  
}
.col-lg-4 .white-block {
 
 height: 330px;


}


 	  .card:hover{
 	  	display: block;
 	  	transition: all ease 0.3s;
 	  	transform: scale(1.1) translateY(-5px);
 	  }

      
  
.slider-container {
   
  width: 100%;
  height: 200%;
    align-items: center;
    justify-content: center;
    
    margin-bottom: 5px;
  
}

.slider .slides .slide img {
  width: 100%;
    
    height: 100%;
   
}

.slider {
    width: 100%;
    
    height: 400px;
 
    text-align: center;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
}
.slides {
    display: flex;
    overflow-x: scroll;
    position: relative;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
}
.slide:nth-of-type(even) {
    background-color: rgb(250, 246, 212);
}

.slide {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
    width: 100%;
    height: 400px;
    margin-right: 0px;
    box-sizing: border-box;
    background: white;
    transform-origin: center center;
    transform: scale(1);
    scroll-snap-align: center;
}

.slide__text {
    font-size: 40px;
    font-weight: bold;
    font-family: sans-serif;
}

.slide a {
    background: none;
    border: none;
}

a.slide__prev,
.slider::before {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    left: 5%;
}

a.slide__next,
.slider::after {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    right: 5%;
}

.slider::before,
.slider::after,
.slide__prev,
.slide__next {
    position: absolute;
    top: 48%;
    width: 35px;
    height: 35px;
    border: solid black;
    border-width: 0 4px 4px 0;
    padding: 3px;
    box-sizing: border-box;
}

.slider::before,
.slider::after {
  content: '';
  z-index: 1;
  background: none;
  pointer-events: none;
}

.slider__nav {
    box-sizing: border-box;
    position: absolute;
    bottom: 5%;
    left: 50%;
    width: 200px;
    margin-left: -100px;
    text-align: center;
}

.slider__navlink {
    display: inline-block;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background-color: black;
    margin: 0 10px 0 10px;
}










.read-article{
  position: absolute;
  top: 10px;
  left: 10px;
  z-index: 999;
  color: #000;
  background: white;
  padding: 10px 20px;
  border-radius: 10px;
  font-family: arial;
  text-decoration: none;
  box-shadow: rgb(50 50 93 / 25%) 0 0 100px -20px, rgb(0 0 0 / 30%) 0 0 60px -15px;
}
.read-article:hover{
    background: #d5d5d5;
    box-shadow: rgb(50 50 93 / 25%) 0 0 100px -20px, rgb(0 0 0 / 30%) 0 0 60px 0px;
}
iframe[sandbox] .read-article{
  display: none;
}

    .white-block .posts{
      height: 1040px;
    
      
    }
    .posts{
 	  	background-color: #fff;
 	  	margin: auto;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      background-color: #FFFFFF;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      overflow-x: hidden;
      overflow-y: auto;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
 	  }
    .cards{
      display: grid;
      grid-template-columns: auto auto auto auto;
      grid-gap: 20px;
      margin-bottom: 0;
    }

    
    .grid-container {
      display: grid;
      grid-template-columns:  auto auto;
      grid-gap: 1px;
 
      padding: 0.1em;
    }
    .grid-container .cardd{
      display: grid;
      grid-template-columns: auto auto auto auto;
      grid-gap: 1px;
 
      padding: 0.1em;
    }

    .grid-container > div {
      background-color: #fff;
      text-align: center;
      padding: 1px 0;
      font-size: 30px;
     
    }

   .item{
    display: flex;
    border-style: solid;
    
      
      
    }
    .item img{
      width: 100px;
      height: 70px;
      
    }
    .item p{
      width: 300px;
      font-size: 12px;
      margin-right: 5px;
      margin-top: 10px;
      text-align: right;
      

    }

    

  .simple-pagination ul {
  padding: 0;
  list-style: none;
  text-align:center;
  margin-left: 10px;
  }


  .simple-pagination li {
  display: inline-block;
  margin: 2px;
  }
  .simple-pagination li a, .simple-pagination li span { 
    display: block;
    width: 40px;
  
    line-height: 40px;
    height: 40px;
    background-color:#fff;
    text-align: center;
  
    text-decoration: none;
    color: #252525; border-radius: 4px;
    margin: 5px;
    box-shadow: inset 0 5px 10px rgba(0,0,0,.1), 0 2px 5px rgba(0,0,0,.5); 
    transition: all 1s ease;
  }



    .simple-pagination li a:hover {
    background: #000; 
    color: #fff;
    }

    

.simple-pagination .current {
color: #fff;
background-color: #000;
border-color:
rgb(255,255,255);
border: 1px solid;
cursor: pointer;
}
.simple-pagination .prev.current, .simple-pagination .next.current {
background:#222;
border: none;
}



.newss {
  background-color: white;
  color: RED;
 
  padding: 5px;
  display: inline-block;
 
  
}

.cardd {
  max-width: 960px;
  border-radius: var(--border-radius-primary);
  box-shadow: 24px 24px 80px rgba(0,0,0,0.1);
  padding: 20px 20px 28px 20px;
  box-sizing: border-box;
  margin: 20px;
  grid-auto-flow: column
  grid-column-gap: 10px;
  flex-direction: column;
  
 
}

.card__image {
  width: 100%;
  max-height:200px;
  border-radius: var(--border-radius-primary);
 
 
}

.card__content {
 

   text-align: center;
   padding: 20px 20px 28px 20px;
   

    
  
}


.card__title {
  font-family: var(--font-family-primary);
  font-size: 12px;
  
  color: var(--color-text);
  
  
  
}



.lnews{
  display: grid
  grid-auto-flow: column
  grid-column-gap: 10px
 
}

</style>
</head>
<body>


 

   

  <div class="main-wrapper">
    
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">


 

      <div class="container">
   
      <div id="ticker" class="ticker">
        <div class="title"><h5>Breaking News</h5></div>
        <div class="news">
       
          
          <marquee  direction="right" scrollamount="4">
       
            
            @foreach ($lastnews as $rs)
            
            <div class="newss">
            
            <p>
              {{$rs->description}}
         
            </p>
         
            </div> 
            @endforeach 
             
             
      
          </p>
          </marquee>
   
      </div>
      </div> 

      
<script>
function myFunction() {
  var x = document.getElementById("ticker");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


          

      <script type="text/javascript">

        //setTimeout(()=>{
      //    const sometext=document.getElementById('ticker');
        //  sometext.style.display='none';
       // },5000)

      </script>

        <div class="row">
          <div class="col-lg-9">
          <div class="calendar"></div>
          
          </div>
          
          <div class="col-lg-3">
           
          
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Today Birthdays </h3>
              
              </div>
              <ul class="top-cat-list">
              @foreach ($usersbd as $rs)
              
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                    {{ $rs }} <span>  Birthday <i class="fa fa-birthday-cake" style="color: #ff9900;margin-left:2.5px;"></i></span>
                    </div>
                  </a>
                </li>
                  
                @endforeach 


      
              </ul>
            </article>
          </div>
          <div class="col-lg-3">
           
           <article class="white-block">
             <div class="top-cat-title">
               <h3>Active users</h3>
               <p>{{$count2}} online user  of {{$count}} Users</p>
             </div>
             <ul class="top-cat-list">
              @foreach( $online_users as $rs)
               <li>
                 <a href="{{ url('chatify/'. $rs->id ) }}">
                   <div class="top-cat-list__title">
                     {{$rs->name}} <span>online <i class="fa fa-circle" style="color: #00f010;"></i></span>
                   </div>
                 
                 </a>
               </li>
               @endforeach
               @foreach( $offline_users as $rs)
               <li>
                 <a href="{{ url('chatify/'. $rs->id ) }}">
                   <div class="top-cat-list__title">
                     {{$rs->name}} <span>offline <i class="fa fa-circle" style="color: #f00000;"></i></span>
                   </div>
                 
                 </a>
               </li>
               @endforeach
             </ul>
           </article>
           
          
         </div>
         

      
   
   <div class="slider-container">
  <div class="slider">
    <div class="slides">
      <div id="slides__1" class="slide">
      <img src="{{ url('storage/img/'. $img1) }}" alt="">
        <a class="slide__prev" href="#slides__4" title="Next"></a>
        <a class="slide__next" href="#slides__2" title="Next"></a>
      </div>
      <div id="slides__2" class="slide">
      <img src="{{ url('storage/img/'. $img2) }}" alt="">
        <a class="slide__prev" href="#slides__1" title="Prev"></a>
        <a class="slide__next" href="#slides__3" title="Next"></a>
      </div>
      <div id="slides__3" class="slide">
      <img src="{{ url('storage/img/'. $img3) }}" alt="">
        <a class="slide__prev" href="#slides__2" title="Prev"></a>
        <a class="slide__next" href="#slides__4" title="Next"></a>
      </div>
      <div id="slides__4" class="slide">
      <img src="{{ url('storage/img/'. $img4) }}" alt="">
        <a class="slide__prev" href="#slides__3" title="Prev"></a>
        <a class="slide__next" href="#slides__1" title="Prev"></a>
      </div>
    </div>
    <div class="slider__nav">
        <a class="slider__navlink" href="#slides__1"></a>
        <a class="slider__navlink" href="#slides__2"></a>
        <a class="slider__navlink" href="#slides__3"></a>
        <a class="slider__navlink" href="#slides__4"></a>
    
  </div>
</div>



<div class="grid-container">
@foreach( $death as $rs)
<div class="cardd">

  <img src="{{ url('storage/img/death.jpg')}}" class="card__image" alt="brown couch" />
  <div class="card__content">
    
    <span class="card__title">{{$rs->description}} ل {{$rs->name}} بوفاة {{$rs->relation}}<span>
  </div>
  </div>
@endforeach


  </div>
          </div> 

         <div class="col-lg-8">

                    <article class="white-block">
                    <div class="grid-container">
                        @foreach($news as $rs)
                        
                        <a  href="{{ url('/show-news/' . $rs->id) }}" > 
                          <div class="item" >
            
                    
                            <p style="font-size:17px;"class="text-sm font-bold">{{ $rs->title}}</p>

                            
                            <img src="{{ url('storage/img/'. $rs->imgfile) }}" alt="">
                          
                    
                          </div>
                        </a>
                        
                          @endforeach

                      
                       
                    
                    </div>
                 
                    </article>
             
                </div>
                <div class="col-lg-4">
                
                    <article class="white-block">
                        
                     
                           
                                
                                    <div class="absolute inset-0 bg-gray bg-opacity-10"></div>
                                    <div class="relative z-10 container mx-auto  text-white">
                                    <h2 class="text-xl font-bold mb-1">أسعار العملات</h2>
                                    <p style="background-color:#7c8ea1;" class="text-sm mb-3 rounded-lg">الجمعة 08 ديسمبر 2023  9:36 صباحًا</p>
                                    <div class="">
                                <div style="background-color:#7c8ea1;" class="bg-gray rounded-lg p-1 mb-1">
                                    <h3 class="text-sm font-bold mb-2">دولار / شيكل</h3>
                                    <div class="flex justify-between items-center">
                                    <p class="text-sm font-bold">بيع 3.7</p>
                                    <p class="text-sm font-bold">شراء 3.68</p>
                                    </div>
                                </div>
                                <div style="background-color:#7c8ea1;" class="bg-gray rounded-lg p-1 mb-1">
                                    <h3 class="text-sm font-bold mb-2">دينار / شيكل</h3>
                                    <div class="flex justify-between items-center">
                                    <p class="text-sm font-bold">بيع 5.22</p>
                                    <p class="text-sm font-bold">شراء 5.2</p>
                                    </div>
                                </div>
                                <div style="background-color:#7c8ea1;" class="bg-gray rounded-lg p-1 mb-1">
                                    <h3 class="text-sm font-bold mb-2">يورو / شيكل</h3>
                                    <div class="flex justify-between items-center">
                                    <p class="text-sm font-bold">بيع 3.99</p>
                                    <p class="text-sm font-bold">شراء 3.95</p>
                                    </div>
                                </div>

                                        
                                </div>
                            </div>

                        </div>
                    </article>
                
                
                </div>
                
                
                      <div class="posts">
             
                        <div class="cards">
                          @foreach($posts as $post) 
                              <a  href="{{ url('/show-post/' . $post->id) }}" > <div class="card">
                              
                              <img src="{{ asset('storage/img/'. $post->imgfile) }}" alt="">

                              
                                <div class="details">
                                    <h3 class="text-lg">{{$post->title}}</h3>
                                 

                                  

                          
                                </div>
                             
                                

                            </div>     </a>
                            @endforeach
                            
                        <div class="d-flex">{{ $posts->links() }}</div>
                     
                      </div>
                      
                
                
                    </div>
                

               
            </div>

      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer fixed">
      
       
      <p>2023 © Copy right  - <a href="https://www.trustpalestine.com/en" target="_blank"
          rel="noopener noreferrer">WWW.trustpalestine.com</a></p>


</footer>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>
<script>
  var items = $('.posts .card'); 
var numItems = items.length;
var perPage = 3;
items.slice(perPage).hide();
$('#pagination-container').pagination({
    items: numItems, itemsOnPage: perPage, prevText: "<",
    nextText: ">",
    onPageClick: function (pageNumber) {
    var showFrom = perPage* (pageNumber - 1); var showTo showFrom + perPage;
    items.hide().slice(showFrom, showTo).show()
    }
});
</script>

<script>




  //check the console for date click event
  //Fixed day highlight
  //Added previous month and next month view

  function CalendarControl() {
    const calendar = new Date();
    const calendarControl = {
      localDate: new Date(),
      prevMonthLastDate: null,
      calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      calMonthName: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ],
      daysInMonth: function (month, year) {
        return new Date(year, month, 0).getDate();
      },
      firstDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
      },
      lastDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
      },
      firstDayNumber: function () {
        return calendarControl.firstDay().getDay() + 1;
      },
      lastDayNumber: function () {
        return calendarControl.lastDay().getDay() + 1;
      },
      getPreviousMonthLastDate: function () {
        let lastDate = new Date(
          calendar.getFullYear(),
          calendar.getMonth(),
          0
        ).getDate();
        return lastDate;
      },
      navigateToPreviousMonth: function () {
        calendar.setMonth(calendar.getMonth() - 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToNextMonth: function () {
        calendar.setMonth(calendar.getMonth() + 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToCurrentMonth: function () {
        let currentMonth = calendarControl.localDate.getMonth();
        let currentYear = calendarControl.localDate.getFullYear();
        calendar.setMonth(currentMonth);
        calendar.setYear(currentYear);
        calendarControl.attachEventsOnNextPrev();
      },
      displayYear: function () {
        let yearLabel = document.querySelector(".calendar .calendar-year-label");
        yearLabel.innerHTML = calendar.getFullYear();
      },
      displayMonth: function () {
        let monthLabel = document.querySelector(
          ".calendar .calendar-month-label"
        );
        monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
      },
      selectDate: function (e) {
        console.log(
          `${e.target.textContent} ${
            calendarControl.calMonthName[calendar.getMonth()]
          } ${calendar.getFullYear()}`
        );
      },
      plotSelectors: function () {
        document.querySelector(
          ".calendar"
        ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
          <div class="calendar-today-date">Today: 
            ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
            ${calendarControl.localDate.getDate()}, 
            ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
            ${calendarControl.localDate.getFullYear()}
          </div>
          <div class="calendar-body"></div></div>`;
      },
      plotDayNames: function () {
        for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
        }
      },
      plotDates: function () {
        document.querySelector(".calendar .calendar-body").innerHTML = "";
        calendarControl.plotDayNames();
        calendarControl.displayMonth();
        calendarControl.displayYear();
        let count = 1;
        let prevDateCount = 0;
  
        calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
        let prevMonthDatesArray = [];
        let calendarDays = calendarControl.daysInMonth(
          calendar.getMonth() + 1,
          calendar.getFullYear()
        );
        // dates of current month
        for (let i = 1; i < calendarDays; i++) {
          if (i < calendarControl.firstDayNumber()) {
            prevDateCount += 1;
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="prev-dates"></div>`;
            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
          } else {
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
          }
        }
        //remaining dates after month dates
        for (let j = 0; j < prevDateCount + 1; j++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
        }
        calendarControl.highlightToday();
        calendarControl.plotPrevMonthDates(prevMonthDatesArray);
        calendarControl.plotNextMonthDates();
      },
      attachEvents: function () {
        let prevBtn = document.querySelector(".calendar .calendar-prev a");
        let nextBtn = document.querySelector(".calendar .calendar-next a");
        let todayDate = document.querySelector(".calendar .calendar-today-date");
        let dateNumber = document.querySelectorAll(".calendar .dateNumber");
        prevBtn.addEventListener(
          "click",
          calendarControl.navigateToPreviousMonth
        );
        nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
        todayDate.addEventListener(
          "click",
          calendarControl.navigateToCurrentMonth
        );
        for (var i = 0; i < dateNumber.length; i++) {
            dateNumber[i].addEventListener(
              "click",
              calendarControl.selectDate,
              false
            );
        }
      },
      highlightToday: function () {
        let currentMonth = calendarControl.localDate.getMonth() + 1;
        let changedMonth = calendar.getMonth() + 1;
        let currentYear = calendarControl.localDate.getFullYear();
        let changedYear = calendar.getFullYear();
        if (
          currentYear === changedYear &&
          currentMonth === changedMonth &&
          document.querySelectorAll(".number-item")
        ) {
          document
            .querySelectorAll(".number-item")
            [calendar.getDate() - 1].classList.add("calendar-today");
        }
      },
      plotPrevMonthDates: function(dates){
        dates.reverse();
        for(let i=0;i<dates.length;i++) {
            if(document.querySelectorAll(".prev-dates")) {
                document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
            }
        }
      },
      plotNextMonthDates: function(){
       let childElemCount = document.querySelector('.calendar-body').childElementCount;
       //7 lines
       if(childElemCount > 42 ) {
           let diff = 49 - childElemCount;
           calendarControl.loopThroughNextDays(diff);
       }

       //6 lines
       if(childElemCount > 35 && childElemCount <= 42 ) {
        let diff = 42 - childElemCount;
        calendarControl.loopThroughNextDays(42 - childElemCount);
       }

      },
      loopThroughNextDays: function(count) {
        if(count > 0) {
            for(let i=1;i<=count;i++) {
                document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
            }
        }
      },
      attachEventsOnNextPrev: function () {
        calendarControl.plotDates();
        calendarControl.attachEvents();
      },
      init: function () {
        calendarControl.plotSelectors();
        calendarControl.plotDates();
        calendarControl.attachEvents();
      }
    };
    calendarControl.init();
  }
  
  const calendarControl = new CalendarControl();




  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}



</script>
 
   
</body>
</html> 


</x-app-layout>

