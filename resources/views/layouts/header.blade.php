<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{url('frontend/img/favicon.png')}}">
    <!-- Site Title -->
    <title>Opti-web-serve</title>
    <link rel="stylesheet" href="{{url('frontend/css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/plugins/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/plugins/animate.css')}}">
    {{-- <link rel="stylesheet" href="{{url('frontend/css/style.css')}}"> --}}

    <link rel="stylesheet" href="{{url('frontend/css/plugins/slick.css')}}">
<style>

    /*--------------------------------------------------------------
## Basic Color
----------------------------------------------------------------*/
/*--------------------------------------------------------------
>> TABLE OF CONTENTS:
----------------------------------------------------------------
1. Typography
2. Preloader
3. Spacing
4. General
5. Slider
6. Video Popup
7. Header
8. Footer
9. Isotope
10. Sidebar
11. Hero
12. Iconbox
13. Card
14. Posts
15. Team
16. Imagebox
17. CTA
18. Timeline
19. Testimonial
20. Portfolio
21. FunFact
22. Pricing
--------------------------------------------------------------*/
/*--------------------------------------------------------------
1. Typography
----------------------------------------------------------------*/
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap");
body,
html {
  color: rgba(254, 254, 254, 0.7);
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 1.6em;
  overflow-x: hidden;
  background-color: #181818;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  clear: both;
  color: #FEFEFE;
  padding: 0;
  margin: 0 0 20px 0;
  font-weight: 600;
  line-height: 1.3em;
  font-family: "Poppins", sans-serif;
}

.cs-primary_font {
  font-family: "Poppins", sans-serif;
}

.cs-secondary_font {
  font-family: "Open Sans", sans-serif;
}

h1 {
  font-size: 56px;
}

h2 {
  font-size: 42px;
}

h3 {
  font-size: 30px;
}

h4 {
  font-size: 24px;
}

h5 {
  font-size: 18px;
}

h6 {
  font-size: 16px;
}

p {
  margin-bottom: 15px;
}

ul {
  margin: 0 0 25px 0;
  padding-left: 20px;
  list-style: square outside none;
}

ol {
  padding-left: 20px;
  margin-bottom: 25px;
}

dfn,
cite,
em,
i {
  font-style: italic;
}

blockquote {
  margin: 0 15px;
  font-style: italic;
  font-size: 20px;
  line-height: 1.6em;
  margin: 0;
}

address {
  margin: 0 0 15px;
}

img {
  border: 0;
  max-width: 100%;
  height: auto;
}

a {
  color: inherit;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

button {
  color: inherit;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

a:hover {
  text-decoration: none;
  color: #2DA8A8;
}

table {
  width: 100%;
  margin-bottom: 25px;
}
table th {
  font-weight: 600;
  color: rgba(254, 254, 254, 0.7);
}
table td,
table th {
  border-top: 1px solid #4D4D4D;
  padding: 11px 10px;
}

dl {
  margin-bottom: 25px;
}
dl dt {
  font-weight: 600;
}

b,
strong {
  font-weight: bold;
}

pre {
  color: rgba(254, 254, 254, 0.7);
  border: 1px solid #4D4D4D;
  font-size: 18px;
  padding: 25px;
  border-radius: 5px;
}

kbd {
  font-size: 100%;
  background-color: rgba(254, 254, 254, 0.7);
  border-radius: 5px;
}

@media screen and (max-width: 991px) {
  body,
  html {
    font-size: 16px;
    line-height: 1.6em;
  }
  h2 {
    font-size: 36px;
    margin-bottom: 10px;
  }
}
input, textarea {
  color: #FEFEFE;
}

/*--------------------------------------------------------------
  2. Preloader
----------------------------------------------------------------*/
.cs-preloader {
  position: fixed;
  z-index: 99999;
  top: 0;
  width: 100%;
  height: 100vh;
  background-color: #181818;
}

.cs-preloader_bg {
  text-align: center;
  height: 100%;
  width: 100%;
}

.cs-preloader_in {
  width: 80px;
  height: 80px;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 28px;
  border: 3px solid rgba(255, 255, 255, 0.8);
  border-radius: 50%;
}

.cs-preloader_in:after {
  content: "";
  border-width: 3px;
  border-style: solid;
  border-color: transparent;
  border-top-color: #2DA8A8;
  border-radius: 50%;
  position: absolute;
  width: calc(100% + 6px);
  height: calc(100% + 6px);
  left: 77.5%;
  top: 77.5%;
  -webkit-animation: spin 1s ease-in-out infinite;
          animation: spin 1s ease-in-out infinite;
  margin-left: -60px;
  margin-top: -60px;
}

.cs-preloader_in::before {
  content: "";
  height: 8px;
  width: 8px;
  border-radius: 50%;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #2DA8A8;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
/*--------------------------------------------------------------
  3. Spacing
----------------------------------------------------------------*/
@media screen and (min-width: 992px) {
  .cs-height_0 {
    height: 0px;
  }
  .cs-height_5 {
    height: 5px;
  }
  .cs-height_10 {
    height: 10px;
  }
  .cs-height_15 {
    height: 15px;
  }
  .cs-height_20 {
    height: 20px;
  }
  .cs-height_25 {
    height: 25px;
  }
  .cs-height_30 {
    height: 30px;
  }
  .cs-height_35 {
    height: 35px;
  }
  .cs-height_40 {
    height: 40px;
  }
  .cs-height_45 {
    height: 45px;
  }
  .cs-height_50 {
    height: 50px;
  }
  .cs-height_55 {
    height: 55px;
  }
  .cs-height_60 {
    height: 60px;
  }
  .cs-height_65 {
    height: 65px;
  }
  .cs-height_70 {
    height: 70px;
  }
  .cs-height_75 {
    height: 75px;
  }
  .cs-height_80 {
    height: 80px;
  }
  .cs-height_85 {
    height: 85px;
  }
  .cs-height_90 {
    height: 90px;
  }
  .cs-height_95 {
    height: 95px;
  }
  .cs-height_100 {
    height: 100px;
  }
  .cs-height_105 {
    height: 105px;
  }
  .cs-height_110 {
    height: 110px;
  }
  .cs-height_115 {
    height: 115px;
  }
  .cs-height_120 {
    height: 120px;
  }
  .cs-height_125 {
    height: 125px;
  }
  .cs-height_130 {
    height: 130px;
  }
  .cs-height_135 {
    height: 135px;
  }
  .cs-height_140 {
    height: 140px;
  }
  .cs-height_145 {
    height: 145px;
  }
  .cs-height_150 {
    height: 150px;
  }
  .cs-height_155 {
    height: 155px;
  }
  .cs-height_160 {
    height: 160px;
  }
  .cs-height_165 {
    height: 165px;
  }
  .cs-height_170 {
    height: 170px;
  }
  .cs-height_175 {
    height: 175px;
  }
  .cs-height_180 {
    height: 180px;
  }
  .cs-height_185 {
    height: 185px;
  }
  .cs-height_190 {
    height: 190px;
  }
  .cs-height_195 {
    height: 195px;
  }
  .cs-height_200 {
    height: 200px;
  }
  .cs-height_205 {
    height: 205px;
  }
  .cs-height_210 {
    height: 210px;
  }
}
@media screen and (max-width: 991px) {
  .cs-height_lg_0 {
    height: 0px;
  }
  .cs-height_lg_5 {
    height: 5px;
  }
  .cs-height_lg_10 {
    height: 10px;
  }
  .cs-height_lg_15 {
    height: 15px;
  }
  .cs-height_lg_20 {
    height: 20px;
  }
  .cs-height_lg_25 {
    height: 25px;
  }
  .cs-height_lg_30 {
    height: 30px;
  }
  .cs-height_lg_35 {
    height: 35px;
  }
  .cs-height_lg_40 {
    height: 40px;
  }
  .cs-height_lg_45 {
    height: 45px;
  }
  .cs-height_lg_50 {
    height: 50px;
  }
  .cs-height_lg_55 {
    height: 55px;
  }
  .cs-height_lg_60 {
    height: 60px;
  }
  .cs-height_lg_65 {
    height: 65px;
  }
  .cs-height_lg_70 {
    height: 70px;
  }
  .cs-height_lg_75 {
    height: 75px;
  }
  .cs-height_lg_80 {
    height: 80px;
  }
  .cs-height_lg_85 {
    height: 85px;
  }
  .cs-height_lg_90 {
    height: 90px;
  }
  .cs-height_lg_95 {
    height: 95px;
  }
  .cs-height_lg_100 {
    height: 100px;
  }
  .cs-height_lg_105 {
    height: 105px;
  }
  .cs-height_lg_110 {
    height: 110px;
  }
  .cs-height_lg_115 {
    height: 115px;
  }
  .cs-height_lg_120 {
    height: 120px;
  }
  .cs-height_lg_125 {
    height: 125px;
  }
  .cs-height_lg_130 {
    height: 130px;
  }
  .cs-height_lg_135 {
    height: 135px;
  }
  .cs-height_lg_140 {
    height: 140px;
  }
  .cs-height_lg_145 {
    height: 145px;
  }
  .cs-height_lg_150 {
    height: 150px;
  }
  .cs-height_lg_155 {
    height: 155px;
  }
  .cs-height_lg_160 {
    height: 160px;
  }
  .cs-height_lg_165 {
    height: 165px;
  }
  .cs-height_lg_170 {
    height: 170px;
  }
  .cs-height_lg_175 {
    height: 175px;
  }
  .cs-height_lg_180 {
    height: 180px;
  }
  .cs-height_lg_185 {
    height: 185px;
  }
  .cs-height_lg_190 {
    height: 190px;
  }
  .cs-height_lg_195 {
    height: 195px;
  }
  .cs-height_lg_200 {
    height: 200px;
  }
  .cs-height_lg_205 {
    height: 205px;
  }
  .cs-height_lg_210 {
    height: 210px;
  }
}
/*--------------------------------------------------------------
  4. General
----------------------------------------------------------------*/
.cs-row_gap_20 {
  margin-left: -10px;
  margin-right: -10px;
}
.cs-row_gap_20 > div {
  padding-left: 10px;
  padding-right: 10px;
}

.cs-light {
  font-weight: 300;
}

.cs-normal {
  font-weight: 400;
}

.cs-medium {
  font-weight: 500;
}

.cs-semi_bold {
  font-weight: 600;
}

.cs-bold {
  font-weight: 700;
}

.cs-extra_bold {
  font-weight: 800;
}

.cs-black {
  font-weight: 900;
}

.cs-radius_3 {
  border-radius: 3px;
}

.cs-radius_5 {
  border-radius: 5px !important;
}

.cs-radius_7 {
  border-radius: 7px;
}

.cs-radius_10 {
  border-radius: 10px;
}

.cs-radius_15 {
  border-radius: 15px;
}

.cs-line_height_1 {
  line-height: 1.2em;
}

.cs-line_height_2 {
  line-height: 1.25em;
}

.cs-line_height_3 {
  line-height: 1.3em;
}

.cs-line_height_4 {
  line-height: 1.4em;
}

.cs-line_height_5 {
  line-height: 1.5em;
}

.cs-line_height_6 {
  line-height: 1.6em;
}

.cs-line_height_7 {
  line-height: 1.7em;
}

.cs-font_14 {
  font-size: 14px;
}

.cs-font_16 {
  font-size: 16px;
}

.cs-font_18 {
  font-size: 18px;
}

.cs-font_20 {
  font-size: 20px;
}

.cs-font_22 {
  font-size: 22px;
}

.cs-font_28 {
  font-size: 28px;
}

.cs-font_30 {
  font-size: 28px;
}

.cs-font_38 {
  font-size: 38px;
}

.cs-font_42 {
  font-size: 42px;
}

.cs-font_50 {
  font-size: 30px;
}

.cs-mp0 {
  list-style: none;
  margin: 0;
  padding: 0;
}

.cs-m0 {
  margin: 0;
}

hr {
  margin: 0;
  padding: 0;
  border: none;
  border-top: 1px solid #f2f1ff;
}

.cs-bg {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.cs-vertical_middle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 100%;
}

.cs-vertical_middle_in {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 100%;
}

.cs-center {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.cs-white_color,
.cs-white_color_hover:hover {
  color: #fff;
}

.cs-primary_color {
  color: #FEFEFE;
}

.cs-ternary_color {
  color: #999696;
}

.cs-accent_color,
.cs-accent_color_hover:hover {
  color: #2DA8A8;
}

.cs-white_bg {
  background-color: #fff;
}

.cs-gray_bg {
  background-color: #181818;
}

.cs-accent_bg_1,
.cs-accent_bg_1_hover:hover {
  background-color: rgba(255, 74, 23, 0.01);
}

.cs-accent_bg_2,
.cs-accent_bg_2_hover:hover {
  background-color: rgba(255, 74, 23, 0.02);
}

.cs-accent_bg_3,
.cs-accent_bg_3_hover:hover {
  background-color: rgba(255, 74, 23, 0.03);
}

.cs-accent_bg_4,
.cs-accent_bg_4_hover:hover {
  background-color: rgba(255, 74, 23, 0.04);
}

.cs-accent_bg_5,
.cs-accent_bg_5_hover:hover {
  background-color: rgba(255, 74, 23, 0.05);
}

.cs-accent_bg_6,
.cs-accent_bg_6_hover:hover {
  background-color: rgba(255, 74, 23, 0.06);
}

.cs-accent_bg_7,
.cs-accent_bg_7_hover:hover {
  background-color: rgba(255, 74, 23, 0.07);
}

.cs-accent_bg_8,
.cs-accent_bg_8_hover:hover {
  background-color: rgba(255, 74, 23, 0.08);
}

.cs-accent_bg_9,
.cs-accent_bg_9_hover:hover {
  background-color: rgba(255, 74, 23, 0.09);
}

.cs-accent_bg_10,
.cs-accent_bg_10_hover:hover {
  background-color: rgba(255, 74, 23, 0.1);
}

.cs-accent_bg_15,
.cs-accent_bg_15_hover:hover {
  background-color: rgba(255, 74, 23, 0.15);
}

.cs-accent_bg_20,
.cs-accent_bg_20_hover:hover {
  background-color: rgba(255, 74, 23, 0.2);
}

.cs-accent_bg_25,
.cs-accent_bg_25_hover:hover {
  background-color: rgba(255, 74, 23, 0.25);
}

.cs-accent_bg_30,
.cs-accent_bg_30_hover:hover {
  background-color: rgba(255, 74, 23, 0.3);
}

.cs-accent_bg_35,
.cs-accent_bg_35_hover:hover {
  background-color: rgba(255, 74, 23, 0.35);
}

.cs-accent_bg_40,
.cs-accent_bg_40_hover:hover {
  background-color: rgba(255, 74, 23, 0.4);
}

.cs-accent_bg_50,
.cs-accent_bg_50_hover:hover {
  background-color: rgba(255, 74, 23, 0.5);
}

.cs-accent_bg_60,
.cs-accent_bg_60_hover:hover {
  background-color: rgba(255, 74, 23, 0.6);
}

.cs-accent_bg_70,
.cs-accent_bg_70_hover:hover {
  background-color: rgba(255, 74, 23, 0.7);
}

.cs-accent_bg_80,
.cs-accent_bg_80_hover:hover {
  background-color: rgba(255, 74, 23, 0.8);
}

.cs-accent_bg_90,
.cs-accent_bg_90_hover:hover {
  background-color: rgba(255, 74, 23, 0.9);
}

.cs-accent_bg,
.cs-accent_bg_hover:hover {
  background-color: #2DA8A8;
}

.cs-primary_bg,
.cs-primary_bg_hover:hover {
  background-color: #FEFEFE;
}

.cs-gradient_bg_1 {
  background: linear-gradient(267.18deg, #161616 0%, #080808 100%);
}

.cs-text_btn {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-weight: 600;
  color: #fff;
}
.cs-text_btn svg {
  margin-left: 15px;
}
.cs-text_btn span {
  display: inline-block;
  position: relative;
}
.cs-text_btn span::before {
  content: "";
  position: absolute;
  height: 2px;
  width: 100%;
  bottom: 0;
  left: 0;
  background-color: currentColor;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
          transform-origin: 0 50%;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  -webkit-transition-timing-function: ease-out;
          transition-timing-function: ease-out;
}
.cs-text_btn:hover span::before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
          transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}
.cs-text_btn.cs-type1 svg {
  margin-left: 0px;
  margin-right: 15px;
}
.cs-text_btn.cs-type1 span::before {
  left: initial;
  right: -100%;
  -webkit-transform: scaleX(0) rotateY(180deg);
          transform: scaleX(0) rotateY(180deg);
}
.cs-text_btn.cs-type1:hover span::before {
  -webkit-transform: scaleX(1) rotateY(180deg);
          transform: scaleX(1) rotateY(180deg);
}
.cs-text_btn.cs-type2 svg {
  margin-left: 0;
  margin-right: 15px;
}

.cs-btn.cs-style1 {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 13px 26px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  border: transparent;
  color: #FEFEFE;
  position: relative;
  line-height: 1.5em;
  font-weight: 600;
  border-radius: 15px;
  background-color: #2DA8A8;
  color: #fff;
  cursor: pointer;
}
.cs-btn.cs-style1:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(22, 22, 22, 0.4);
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
          transform-origin: 0 50%;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  -webkit-transition-timing-function: ease-out;
          transition-timing-function: ease-out;
  border-radius: inherit;
}
.cs-btn.cs-style1 svg {
  margin-left: 14px;
}
.cs-btn.cs-style1 > * {
  position: relative;
  z-index: 1;
}
.cs-btn.cs-style1:hover:before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
          transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}
.cs-btn.cs-style1.cs-type1 {
  border: 2px solid #fff;
  background-color: transparent;
  border-radius: 5px;
  -webkit-transition: all 0.6s ease-out;
  transition: all 0.6s ease-out;
}
.cs-btn.cs-style1.cs-type1::before {
  background-color: #fff;
  border-radius: 0px;
}
.cs-btn.cs-style1.cs-type1:hover {
  color: #000;
}

.cs-page_navigation > div {
  position: relative;
}
.cs-page_navigation > div:not(:last-child) {
  margin-right: 21px;
  padding-right: 21px;
}
.cs-page_navigation > div:not(:last-child)::after {
  content: "";
  height: 22px;
  width: 2px;
  background-color: #fff;
  display: inline-block;
  position: absolute;
  right: -1px;
  top: 3px;
}

.cs-pagination_box {
  margin: -7px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.cs-pagination_box .cs-pagination_item {
  margin: 7px;
}

.cs-pagination_item {
  height: 40px;
  width: 40px;
  border-radius: 5px;
  background-color: #000;
}
.cs-pagination_item.active {
  background-color: #2DA8A8;
  color: #fff;
  pointer-events: none;
}

.cs-form_field {
  display: block;
  width: 100%;
  padding: 10px 20px;
  border-radius: 15px;
  outline: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  border: 2px solid #999696;
  background-color: transparent;
  color: #fff;
}
.cs-form_field:focus {
  border-color: #2DA8A8;
}

label {
  margin-bottom: 12px;
}

.cs-right_full_width {
  width: calc(50vw - 12px);
  padding-right: 24px;
}

.cs-rating {
  width: 136px;
  height: 24px;
  position: relative;
}
.cs-rating > * {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}
.cs-rating .cs-rating_bg {
  opacity: 0.2;
}
.cs-rating .cs-rating_percentage {
  width: 50%;
}
.cs-rating.cs-size_sm {
  width: 83px;
  height: 15px;
  position: relative;
  font-size: 12px;
}
.cs-rating.cs-size_sm i:not(:last-child) {
  margin-right: 4px;
}
.cs-rating.cs-size_sm .cs-rating_bg,
.cs-rating.cs-size_sm .cs-rating_percentage {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
}
.cs-rating.cs-size_sm .cs-rating_bg {
  opacity: 1;
}

.cs-input_rating {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 12px;
}
.cs-input_rating i {
  cursor: pointer;
}
.cs-input_rating i:not(:last-child) {
  margin-right: 4px;
}

.cs-post_meta.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.cs-post_meta.cs-style1 > * {
  position: relative;
  display: inline-block;
}
.cs-post_meta.cs-style1 > *:not(:last-child) {
  margin-right: 12px;
  padding-right: 12px;
}
.cs-post_meta.cs-style1 > *:not(:last-child)::before {
  content: "";
  height: 20px;
  width: 2px;
  border-radius: 2px;
  background-color: #fff;
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -10px;
}

/* Start Accordion */
.cs-accordian_title {
  font-size: 22px;
  margin-bottom: 0;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.cs-accordian_body {
  line-height: 1.8em;
  padding-top: 15px;
}
.cs-accordian_body p {
  margin: 0;
}

.cs-accordian_head {
  padding: 2px 20px 2px 0;
  position: relative;
  cursor: pointer;
}
.cs-accordian_head:hover .cs-accordian_title {
  color: #2DA8A8;
}

.cs-accordian {
  border-bottom: 2px solid #2DA8A8;
  padding-bottom: 25px;
}
.cs-accordian:not(:last-child) {
  margin-bottom: 25px;
}

.cs-accordian_toggle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  top: 50%;
  margin-top: -3px;
  right: 0;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.cs-accordian.active .cs-accordian_toggle {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.cs-accordian.active .cs-accordian_head {
  pointer-events: none;
}

/* End Accordion */
#cs-result {
  line-height: 2.8em;
}

.cs-parallax > *:not([class*=cs-shape_]) {
  position: relative;
  z-index: 5;
}

.cs-fullscreen_swiper_wrap {
  position: relative;
  height: 100vh;
}

.cs-fullscreen_swiper_slider {
  width: 100%;
  height: 100%;
}

.cs-cursor_lg,
.cs-cursor_sm {
  position: fixed;
  border-radius: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  mix-blend-mode: difference;
  z-index: 9999;
}

.cs-cursor_lg {
  width: 40px;
  height: 40px;
  border: 1px solid #2DA8A8;
  left: 0;
  top: 0;
  pointer-events: none;
  -webkit-transition: 0.15s;
  transition: 0.15s;
}

.cs-cursor_sm {
  width: 8px;
  height: 8px;
  background-color: #2DA8A8;
  left: 0;
  top: 0;
  pointer-events: none;
  -webkit-transition: 0.2s;
  transition: 0.2s;
}

/* Odometer */
.odometer.odometer-auto-theme,
.odometer.odometer-auto-theme .odometer-digit,
.odometer.odometer-theme-default,
.odometer.odometer-theme-default .odometer-digit {
  display: inline-block;
  vertical-align: middle;
  position: relative;
}

.odometer.odometer-auto-theme .odometer-digit .odometer-digit-spacer,
.odometer.odometer-theme-default .odometer-digit .odometer-digit-spacer {
  display: inline-block;
  vertical-align: middle;
  visibility: hidden;
}

.odometer.odometer-auto-theme .odometer-digit .odometer-digit-inner,
.odometer.odometer-theme-default .odometer-digit .odometer-digit-inner {
  text-align: left;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
}

.odometer.odometer-auto-theme .odometer-digit .odometer-ribbon,
.odometer.odometer-theme-default .odometer-digit .odometer-ribbon {
  display: block;
}

.odometer.odometer-auto-theme .odometer-digit .odometer-ribbon-inner,
.odometer.odometer-theme-default .odometer-digit .odometer-ribbon-inner {
  display: block;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.odometer.odometer-auto-theme .odometer-digit .odometer-value,
.odometer.odometer-theme-default .odometer-digit .odometer-value {
  display: block;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
}

.odometer.odometer-auto-theme .odometer-digit .odometer-value.odometer-last-value,
.odometer.odometer-theme-default .odometer-digit .odometer-value.odometer-last-value {
  position: absolute;
}

.odometer.odometer-auto-theme.odometer-animating-up .odometer-ribbon-inner,
.odometer.odometer-theme-default.odometer-animating-up .odometer-ribbon-inner {
  -webkit-transition: -webkit-transform 2s;
  transition: -webkit-transform 2s;
  transition: transform 2s;
  transition: transform 2s, -webkit-transform 2s;
}

.odometer.odometer-auto-theme.odometer-animating-down .odometer-ribbon-inner,
.odometer.odometer-auto-theme.odometer-animating-up.odometer-animating .odometer-ribbon-inner,
.odometer.odometer-theme-default.odometer-animating-down .odometer-ribbon-inner,
.odometer.odometer-theme-default.odometer-animating-up.odometer-animating .odometer-ribbon-inner {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}

.odometer.odometer-auto-theme.odometer-animating-down.odometer-animating .odometer-ribbon-inner,
.odometer.odometer-theme-default.odometer-animating-down.odometer-animating .odometer-ribbon-inner {
  -webkit-transition: -webkit-transform 2s;
  transition: -webkit-transform 2s;
  transition: transform 2s;
  transition: transform 2s, -webkit-transform 2s;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}

.odometer.odometer-auto-theme,
.odometer.odometer-theme-default {
  line-height: inherit;
}

.odometer.odometer-auto-theme .odometer-value,
.odometer.odometer-theme-default .odometer-value {
  text-align: center;
}

@media screen and (max-width: 1399px) {
  .cs-right_space_150 {
    padding-right: 50px;
  }
}
@media screen and (max-width: 1199px) {
  .cs-right_space_40,
  .cs-right_space_150 {
    padding-right: 0;
  }
}
@media screen and (max-width: 991px) {
  .cs-left_space_30 {
    padding-left: 0px;
  }
  .cs-font_14_sm {
    font-size: 14px;
  }
  .cs-font_16_sm {
    font-size: 16px;
  }
  .cs-font_18_sm {
    font-size: 18px;
  }
  .cs-font_20_sm {
    font-size: 20px;
  }
  .cs-font_22_sm {
    font-size: 22px;
  }
  .cs-font_24_sm {
    font-size: 24px;
  }
  .cs-font_26_sm {
    font-size: 26px;
  }
  .cs-font_28_sm {
    font-size: 28px;
  }
  .cs-font_42_sm {
    font-size: 42px;
  }
  .cs-font_36_sm {
    font-size: 36px;
  }
  .cs-btn_group > *:not(:last-child) {
    margin-right: 10px;
  }
  .flex-column-reverse-lg {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }
  .cs-seciton_heading.cs-style1 .cs-section_title::before {
    top: 1px;
  }
}
.cs-partner_logo_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: 0 -20px;
}

.cs-partner_logo {
  padding: 20px;
}

.cs-moving_text_wrap {
  font-family: helvetica;
  overflow-x: hidden;
  font-size: 50px;
  line-height: 1.2em;
  color: transparent;
  -webkit-text-stroke: 0.8px #2DA8A8;
}

.cs-moving_text_in {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  white-space: nowrap;
  min-width: 100%;
}

.cs-moving_text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0 6px;
  -webkit-animation: slide-left 20s linear infinite;
          animation: slide-left 20s linear infinite;
}
.cs-moving_text > * {
  margin: 0 20px;
}

.cs-moving_text_wrap.cs-type1 {
  color: #2DA8A8;
}
.cs-moving_text_wrap.cs-type1 .cs-moving_text {
  padding: 0;
  -webkit-animation: slide-left 40s linear infinite;
          animation: slide-left 40s linear infinite;
}
.cs-moving_text_wrap.cs-type1 .cs-moving_text a:hover {
  color: transparent;
  -webkit-text-stroke: 2px #2DA8A8;
}
.cs-moving_text_wrap.cs-type1:hover .cs-moving_text {
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
}

.cs-reverse_animation {
  animation-direction: reverse !important;
}

@-webkit-keyframes slide-left {
  from {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  to {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}

@keyframes slide-left {
  from {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  to {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
.cs-video_block_1_wrap {
  position: relative;
}
.cs-video_block_1_wrap::before {
  content: "";
  position: absolute;
  height: 50%;
  width: 100%;
  left: 0%;
  top: 0%;
  background-color: #000;
}

.cs-video_block.cs-style1 {
  display: block;
  height: 725px;
  position: relative;
  z-index: 10;
  overflow: hidden;
  border-radius: 20px;
}
.cs-video_block.cs-style1::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  opacity: 0;
  background-color: rgba(22, 22, 22, 0.4);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-video_block.cs-style1:hover::before {
  opacity: 1;
}
.cs-video_block.cs-style1.cs-size1 {
  height: 580px;
}

.cs-player_btn {
  position: absolute;
  z-index: 10;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  padding: 18px 20px 18px 28px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.cs-player_btn:before,
.cs-player_btn:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 100%;
  height: 100%;
  background: #fff;
  border-radius: 50%;
}

.cs-player_btn:before {
  z-index: 0;
  -webkit-animation: pulse-border 1500ms ease-out infinite;
          animation: pulse-border 1500ms ease-out infinite;
}

.cs-player_btn:after {
  z-index: 1;
  -webkit-transition: all 200ms;
  transition: all 200ms;
}

.cs-player_btn span {
  display: block;
  position: relative;
  z-index: 3;
  width: 0;
  height: 0;
  border-left: 24px solid currentColor;
  border-top: 16px solid transparent;
  border-bottom: 16px solid transparent;
}

@-webkit-keyframes pulse-border {
  0% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
    opacity: 0;
  }
}

@keyframes pulse-border {
  0% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
    opacity: 0;
  }
}
.cs-fixed_bg {
  background-attachment: fixed;
}

.cs-parallax [class*=cs-to_],
.cs-parallax_bg [class*=cs-to_] {
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}

.cs-section_heading.cs-style1 .cs-section_subtitle {
  color: #999696;
  font-size: 18px;
  margin-bottom: 20px;
}
.cs-section_heading.cs-style1 .cs-section_title {
  font-size: 50px;
  margin-bottom: 0;
}
.cs-section_heading.cs-style1 .cs-separator {
  height: 2px;
  width: 50px;
  border-radius: 2px;
}

.cs-hover_layer,
.cs-hover_layer1,
.cs-hover_layer3 {
  position: relative;
  -webkit-transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
  -webkit-transform: perspective(600px) translate3d(0, 0, 0);
          transform: perspective(600px) translate3d(0, 0, 0);
}

@-webkit-keyframes particalAnimation {
  0%, 100% {
    -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
  }
  20% {
    -webkit-transform: translate(80px, -10px);
            transform: translate(80px, -10px);
  }
  40% {
    -webkit-transform: translate(140px, 70px);
            transform: translate(140px, 70px);
  }
  60% {
    -webkit-transform: translate(90px, 130px);
            transform: translate(90px, 130px);
  }
  80% {
    -webkit-transform: translate(-40px, 80px);
            transform: translate(-40px, 80px);
  }
  100% {
    -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
  }
}

@keyframes particalAnimation {
  0%, 100% {
    -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
  }
  20% {
    -webkit-transform: translate(80px, -10px);
            transform: translate(80px, -10px);
  }
  40% {
    -webkit-transform: translate(140px, 70px);
            transform: translate(140px, 70px);
  }
  60% {
    -webkit-transform: translate(90px, 130px);
            transform: translate(90px, 130px);
  }
  80% {
    -webkit-transform: translate(-40px, 80px);
            transform: translate(-40px, 80px);
  }
  100% {
    -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
  }
}
@-webkit-keyframes animo-x {
  50% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateX(44px);
            transform: translateX(44px);
  }
}
@keyframes animo-x {
  50% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateX(44px);
            transform: translateX(44px);
  }
}
@-webkit-keyframes light-mode {
  50% {
    opacity: 0.5;
  }
}
@keyframes light-mode {
  50% {
    opacity: 0.5;
  }
}
@-webkit-keyframes animo-y {
  50% {
    -webkit-animation-timing-function: cubic-bezier(0.55, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.55, 0, 0.2, 1);
    -webkit-transform: translateY(30px);
            transform: translateY(30px);
  }
}
@keyframes animo-y {
  50% {
    -webkit-animation-timing-function: cubic-bezier(0.55, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.55, 0, 0.2, 1);
    -webkit-transform: translateY(30px);
            transform: translateY(30px);
  }
}
@-webkit-keyframes rotate-anim {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes rotate-anim {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@-webkit-keyframes semi-rotate-anim {
  50% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateY(25px) rotate(-53deg);
            transform: translateY(25px) rotate(-53deg);
  }
}
@keyframes semi-rotate-anim {
  50% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateY(25px) rotate(-53deg);
            transform: translateY(25px) rotate(-53deg);
  }
}
@-webkit-keyframes up-down-anim {
  40% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateY(40px) rotate(-1deg);
            transform: translateY(40px) rotate(-1deg);
  }
}
@keyframes up-down-anim {
  40% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateY(40px) rotate(-1deg);
            transform: translateY(40px) rotate(-1deg);
  }
}
@-webkit-keyframes swing-anim {
  65% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateY(-48px) rotate(-75deg);
            transform: translateY(-48px) rotate(-75deg);
  }
}
@keyframes swing-anim {
  65% {
    -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    -webkit-transform: translateY(-48px) rotate(-75deg);
            transform: translateY(-48px) rotate(-75deg);
  }
}
.cs-shape_1 {
  width: 0px;
  height: 0px;
  border-top: 9px solid transparent;
  border-bottom: 9px solid transparent;
  border-left: 14px solid #2DA8A8;
}

.cs-shape_wrap_1 {
  position: relative;
}
.cs-shape_wrap_1 .cs-shape_1 {
  position: absolute;
}
.cs-shape_wrap_1 .cs-shape_1:nth-child(1) {
  top: 25%;
  left: 10%;
  -webkit-animation: semi-rotate-anim 12s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: semi-rotate-anim 12s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
.cs-shape_wrap_1 .cs-shape_1:nth-child(2) {
  top: 30%;
  left: 72%;
  -webkit-transform: rotate(-15deg);
          transform: rotate(-15deg);
  -webkit-animation: semi-rotate-anim 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: semi-rotate-anim 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
.cs-shape_wrap_1 .cs-shape_1:nth-child(3) {
  top: 68%;
  left: 35%;
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
  -webkit-animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
.cs-shape_wrap_1.cs-position_1 .cs-shape_1:nth-child(1) {
  top: 15%;
  left: 15%;
}
.cs-shape_wrap_1.cs-position_1 .cs-shape_1:nth-child(2) {
  top: 35%;
  left: 85%;
}
.cs-shape_wrap_1.cs-position_1 .cs-shape_1:nth-child(3) {
  top: 85%;
  left: 35%;
}

.cs-shape_2 {
  position: absolute;
  height: 320px;
  width: 320px;
}
.cs-shape_2 div {
  background-color: #000;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  height: 100%;
  width: 100%;
}

.cs-shape_wrap_2 {
  position: relative;
}
.cs-shape_wrap_2 .cs-shape_2 {
  right: -10%;
  top: 12%;
  -webkit-animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}

.cs-shape_wrap_3 {
  position: relative;
}
.cs-shape_wrap_3 .cs-shape_3 {
  position: absolute;
  right: 20px;
  top: -2%;
}

.cs-shape_wrap_4 {
  position: relative;
}
.cs-shape_wrap_4 .cs-shape_4 {
  position: absolute;
  background-color: #000;
  border-radius: 50%;
}
.cs-shape_wrap_4 .cs-shape_4:nth-child(1) {
  left: 5%;
  top: 52%;
  height: 100px;
  width: 100px;
}
.cs-shape_wrap_4 .cs-shape_4:nth-child(2) {
  left: 10%;
  top: 58%;
  height: 286px;
  width: 286px;
}

.cs-shape_wrap_5 {
  position: relative;
}
.cs-shape_wrap_5 .cs-section_heading {
  position: relative;
  z-index: 2;
}
.cs-shape_wrap_5 .cs-shape_1 {
  position: absolute;
}
.cs-shape_wrap_5 .cs-shape_1:nth-child(1) {
  top: 25%;
  left: 58%;
  -webkit-animation: semi-rotate-anim 12s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: semi-rotate-anim 12s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
.cs-shape_wrap_5 .cs-shape_1:nth-child(2) {
  top: 40%;
  left: 85%;
  -webkit-transform: rotate(-15deg);
          transform: rotate(-15deg);
  -webkit-animation: semi-rotate-anim 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: semi-rotate-anim 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
.cs-shape_wrap_5 .cs-shape_1:nth-child(3) {
  top: 85%;
  left: 72%;
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
  -webkit-animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}

.cs-shape_wrap_6 {
  position: relative;
  overflow: hidden;
}
.cs-shape_wrap_6 > .container {
  position: relative;
  z-index: 3;
}
.cs-shape_wrap_6 .cs-shape_2 > div {
  background-color: #181818;
}
.cs-shape_wrap_6 .cs-shape_2:nth-child(1) {
  left: -240px;
  top: 30px;
  -webkit-animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
.cs-shape_wrap_6 .cs-shape_2:nth-child(2) {
  bottom: 30px;
  right: -200px;
  -webkit-animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
          animation: animo-x 9s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}

.cs-contact_info.cs-style1 svg {
  position: absolute;
  left: 0;
  top: 4px;
  width: 20px;
  max-height: 20px;
}
.cs-contact_info.cs-style1 li {
  position: relative;
  padding-left: 35px;
}
.cs-contact_info.cs-style1 li:not(:last-child) {
  margin-bottom: 22px;
}

.cs-page_heading.cs-style1 {
  height: 650px;
  padding: 120px 0 50px;
  position: relative;
}
.cs-page_heading.cs-style1::after {
  content: "";
  position: absolute;
  right: -30px;
  top: -30px;
  height: 151px;
  width: 151px;
  background: #2DA8A8;
  opacity: 0.8;
  -webkit-filter: blur(125px);
          filter: blur(125px);
}
.cs-page_heading.cs-style1 > * {
  position: relative;
  z-index: 2;
}
.cs-page_heading.cs-style1 .cs-page_heading_in {
  display: inline-block;
}
.cs-page_heading.cs-style1 .breadcrumb {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  margin-bottom: 0;
  color: #999696;
}
.cs-page_heading.cs-style1 .breadcrumb-item.active {
  color: #fff;
}
.cs-page_heading.cs-style1 .cs-page_title {
  margin-bottom: 18px;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 14px;
}

.breadcrumb-item + .breadcrumb-item::before {
  content: "";
  height: 17px;
  width: 1px;
  background-color: #fff;
  padding: 0;
  position: relative;
  top: 5px;
  margin-right: 14px;
}

.cs-image_layer.cs-style1 {
  padding-right: 60px;
  padding-bottom: 60px;
}
.cs-image_layer.cs-style1 img {
  position: relative;
  z-index: 2;
}
.cs-image_layer.cs-style1 .cs-image_layer_in {
  position: relative;
  border-radius: 15px;
}
.cs-image_layer.cs-style1 .cs-image_layer_in::after {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  right: -60px;
  bottom: -60px;
  background-color: #2DA8A8;
  border-radius: inherit;
}
.cs-image_layer.cs-style1.cs-size_md {
  padding-right: 20px;
  padding-bottom: 20px;
}
.cs-image_layer.cs-style1.cs-size_md .cs-image_layer_in::after {
  right: -20px;
  bottom: -20px;
}

.cs-tab {
  display: none;
}
.cs-tab.active {
  display: block;
}

.cs-tabs.cs-style1 .cs-tabs_heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cs-tab_links.cs-style1 {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 5px;
  background-color: #000;
  border-radius: 10px;
}
.cs-tab_links.cs-style1 a {
  padding: 7px 20px;
  font-weight: 500;
  color: #fff;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
}
.cs-tab_links.cs-style1 li.active a {
  background-color: #2DA8A8;
  border-radius: 10px;
}

.cs-google_map {
  height: 600px;
}
.cs-google_map iframe {
  height: 100%;
  display: block;
  border: none;
  width: 100%;
  -webkit-filter: grayscale(100%) invert(90%) contrast(120%);
          filter: grayscale(100%) invert(90%) contrast(120%);
}
.cs-google_map.cs-type1 {
  height: 100%;
  min-height: 300px;
  width: 50vw;
}

.cs-list.cs-style1 li:not(:last-child) {
  margin-bottom: 20px;
}

.cs-shine_hover_1 {
  position: relative;
  overflow: hidden;
}
.cs-shine_hover_1::before {
  content: "";
  position: absolute;
  top: 0;
  left: -80%;
  z-index: 2;
  width: 50%;
  height: 100%;
  background: -webkit-gradient(linear, left top, right top, from(transparent), to(rgba(255, 255, 255, 0.15)));
  background: linear-gradient(to right, transparent 0%, rgba(255, 255, 255, 0.15) 100%);
  -webkit-transform: skewX(-25deg);
          transform: skewX(-25deg);
  z-index: 1;
}
.cs-shine_hover_1:hover::before {
  -webkit-animation: shine 1.3s;
          animation: shine 1.3s;
}

@-webkit-keyframes shine {
  100% {
    left: 125%;
  }
}

@keyframes shine {
  100% {
    left: 125%;
  }
}
.cs-rotate_img {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  overflow: hidden;
  border-radius: 7px;
}

.cs-rotate_img_in {
  -webkit-transform: rotate(-45deg) scale(1.4);
          transform: rotate(-45deg) scale(1.4);
}

.cs-half_screen {
  width: 56vw;
}

.lg-backdrop {
  background-color: #181818;
}

.lg-toolbar .lg-icon,
#lg-counter,
.lg-actions .lg-next,
.lg-actions .lg-prev {
  color: #fff;
}

.lg-toolbar .lg-icon:hover,
.lg-actions .lg-next:hover,
.lg-actions .lg-prev:hover {
  color: rgba(255, 255, 255, 0.7);
}

.cs-scrollup {
  position: fixed;
  bottom: -60px;
  right: 40px;
  color: #fff;
  padding: 5px;
  height: 50px;
  width: 50px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  z-index: 10;
  background-color: #000000;
  color: #2DA8A8;
  -webkit-box-shadow: 0px 1px 5px 1px rgba(22, 22, 22, 0.2);
          box-shadow: 0px 1px 5px 1px rgba(22, 22, 22, 0.2);
  border-radius: 50%;
}
.cs-scrollup:hover {
  background-color: #2DA8A8;
  color: #fff;
}

.cs-scrollup.cs-scrollup_show {
  bottom: 50px;
}

.cs-case_study {
  position: relative;
  padding: 150px 120px;
}
.cs-case_study .cs-case_study_bg {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
.cs-case_study .cs-case_study_bg .cs-accent_bg {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.cs-case_study .cs-case_study_bg .cs-bg {
  -webkit-box-flex: 2;
      -ms-flex: 2;
          flex: 2;
}
.cs-case_study .cs-case_study_title {
  background: rgba(24, 24, 24, 0.9);
  border-radius: 15px;
  margin: 0;
  position: relative;
  z-index: 10;
  font-weight: 700;
  font-size: 120px;
  line-height: 1.25em;
  color: #fefefe;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 40px 150px;
}
.cs-case_study .cs-case_study_title a {
  color: inherit;
}
.cs-case_study .cs-case_study_title a span {
  display: inline;
  position: relative;
}
.cs-case_study .cs-case_study_title a span::before {
  content: "";
  position: absolute;
  height: 7px;
  width: 0%;
  background-color: #2DA8A8;
  left: 0;
  bottom: 20px;
  z-index: -1;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.cs-case_study .cs-case_study_title a:hover span::before {
  width: 100%;
}
.cs-case_study.text-end .cs-case_study_title a span::before {
  left: initial;
  right: 0;
}

.cs-faq_nav {
  height: 100%;
  background-color: #000;
  padding: 45px 35px;
}
.cs-faq_nav .cs-faq_nav_title {
  font-size: 30px;
}

.swiper-slide {
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  overflow: hidden;
}
.swiper-slide .cs-entity_img {
  display: none;
}

.cs-parallax_slider {
  -webkit-transition: opacity 0.6s ease, -webkit-transform 0.3s ease;
  transition: opacity 0.6s ease, -webkit-transform 0.3s ease;
  transition: opacity 0.6s ease, transform 0.3s ease;
  transition: opacity 0.6s ease, transform 0.3s ease, -webkit-transform 0.3s ease;
}
.cs-parallax_slider.loading {
  opacity: 0;
  visibility: hidden;
}

.form-check-input[type=checkbox] {
  border-radius: 0.25em;
}

.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}

.form-check-input {
  margin-top: 6px;
  background-color: transparent;
  border-color: #fff;
}

.form-check-input:checked {
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}

.form-check-input:focus {
  border-color: #2DA8A8;
  -webkit-box-shadow: initial;
          box-shadow: initial;
}

@media screen and (max-width: 1540px) {
  .cs-case_study .cs-case_study_title {
    font-size: 100px;
    padding: 40px 120px;
  }
  .cs-case_study .cs-case_study_title a span::before {
    bottom: 15px;
  }
}
@media screen and (max-width: 1550px) {
  .cs-shape_wrap_2 .cs-shape_2 {
    right: -15%;
    top: 8%;
  }
  .cs-video_block.cs-style1 {
    height: 650px;
  }
}
@media screen and (max-width: 1400px) {
  .cs-case_study .cs-case_study_title {
    font-size: 80px;
    padding: 40px 100px;
  }
  .cs-case_study .cs-case_study_title a span::before {
    bottom: 12px;
    height: 5px;
  }
}
@media screen and (max-width: 1380px) {
  .cs-section_heading.cs-style1 .cs-section_title {
    font-size: 30px;
  }
  .cs-font_50 {
    font-size: 30px;
  }
  .cs-moving_text_wrap {
    font-size: 100px;
  }
  .cs-shape_wrap_4 .cs-shape_4:nth-child(2) {
    height: 200px;
    width: 200px;
  }
  .cs-page_heading.cs-style1 {
    height: 550px;
  }
}
@media screen and (max-width: 1199px) {
  .cs-moving_text_wrap {
    font-size: 80px;
  }
  .cs-page_heading.cs-style1 {
    height: 450px;
  }
  .cs-half_screen {
    width: 100%;
  }
  .cs-video_block.cs-style1.cs-size1 {
    height: 450px;
  }
  .cs-case_study .cs-case_study_title {
    font-size: 60px;
  }
  .cs-case_study .cs-case_study_title a span::before {
    bottom: 8px;
    height: 5px;
  }
  .cs-portfolio_1_heading .cs-tabs_heading {
    display: block;
  }
  .cs-portfolio_1_heading .cs-section_heading + .cs-isotop_filter {
    margin-top: 20px;
  }
}
@media screen and (max-width: 991px) {
  .cs-section_heading.cs-style1 .cs-section_title {
    font-size: 36px;
  }
  .cs-section_heading.cs-style1 .cs-section_subtitle {
    font-size: 16px;
    margin-bottom: 15px;
  }
  .cs-shape_wrap_4 .cs-shape_4:nth-child(1),
  .cs-shape_wrap_4 .cs-shape_4:nth-child(2),
  .cs-shape_wrap_2 .cs-shape_2,
  .cs-shape_wrap_3 .cs-shape_3,
  .cs-shape_wrap_6 .cs-shape_2 {
    display: none;
  }
  .cs-font_50 {
    font-size: 20px;
  }
  .cs-font_38 {
    font-size: 32px;
  }
  .cs-video_block.cs-style1,
  .cs-video_block.cs-style1.cs-size1 {
    height: 400px;
  }
  .cs-video_block.cs-style1 .cs-player_btn,
  .cs-video_block.cs-style1.cs-size1 .cs-player_btn {
    -webkit-transform: translate(-50%, -50%) scale(0.8);
            transform: translate(-50%, -50%) scale(0.8);
  }
  .cs-page_heading.cs-style1 {
    padding: 100px 0 50px;
    height: 400px;
  }
  .cs-page_heading.cs-style1 .cs-page_title {
    margin-bottom: 15px;
  }
  .cs-list.cs-style1 li:not(:last-child) {
    margin-bottom: 10px;
  }
  .cs-accordian_title {
    font-size: 18px;
  }
  .cs-accordian:not(:last-child) {
    margin-bottom: 15px;
  }
  .cs-accordian {
    padding-bottom: 15px;
    border-width: 1px;
  }
  .cs-google_map {
    height: 400px;
  }
  .cs-btn.cs-style1 {
    padding: 10px 20px;
  }
  .cs-faq_nav {
    padding: 30px 30px;
  }
  .cs-faq_nav .cs-faq_nav_title {
    font-size: 26px;
  }
  .cs-google_map.cs-type1 {
    width: 100%;
    height: 400px;
    border-radius: 15px;
    overflow: hidden;
  }
  .cs-scrollup {
    right: 15px;
  }
  .cs-scrollup.cs-scrollup_show {
    bottom: 50px;
  }
  .cs-column_reverse_lg {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }
  .cs-case_study {
    position: relative;
    padding: 80px 70px;
  }
  .cs-case_study .cs-case_study_title {
    font-size: 56px;
    padding: 25px 45px;
  }
  .cs-case_study .cs-case_study_title a span::before {
    bottom: 8px;
    height: 4px;
  }
  #cs-result {
    line-height: 2.2em;
  }
}
@media screen and (max-width: 767px) {
  .cs-tabs.cs-style1 .cs-tabs_heading {
    display: block;
  }
  .cs-tabs.cs-style1 .cs-section_heading + .cs-tab_links {
    margin-top: 50px;
  }
  .cs-case_study {
    padding: 80px 12px;
  }
  .cs-case_study .cs-case_study_title {
    font-size: 40px;
    padding: 25px 25px;
  }
  .cs-case_study .cs-case_study_title a span::before {
    bottom: 5px;
    height: 3px;
  }
  .cs-cursor_lg,
  .cs-cursor_sm {
    display: none !important;
  }
}
@media screen and (max-width: 575px) {
  .cs-partner_logo {
    padding: 5px;
  }
  .cs-image_layer.cs-style1 {
    padding-right: 40px;
    padding-bottom: 40px;
  }
  .cs-image_layer.cs-style1 .cs-image_layer_in::after {
    right: -30px;
    bottom: -30px;
  }
  .cs-video_block.cs-style1,
  .cs-video_block.cs-style1.cs-size1 {
    height: 380px;
  }
  .cs-video_block.cs-style1 .cs-player_btn,
  .cs-video_block.cs-style1.cs-size1 .cs-player_btn {
    -webkit-transform: translate(-50%, -50%) scale(0.7);
            transform: translate(-50%, -50%) scale(0.7);
  }
  .cs-moving_text_wrap {
    font-size: 56px;
  }
  .cs-partner_logo_wrap {
    margin: 0 -10px;
  }
  .cs-partner_logo {
    padding: 10px;
  }
  .cs-case_study .cs-case_study_title {
    font-size: 30px;
  }
  .cs-case_study .cs-case_study_title a span::before {
    bottom: 4px;
    height: 2px;
  }
  .cs-page_heading.cs-style1 .breadcrumb {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
/* --------------------------------------------------------------
  5. Slider
----------------------------------------------------------------*/
.cs-slider_heading.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.cs-slider {
  position: relative;
}

.cs-slider.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.cs-slider.cs-style1 .cs-slider_left {
  width: 44%;
  padding-right: 12%;
}
.cs-slider.cs-style1 .cs-slider_right {
  width: 56%;
}

.cs-slider.cs-style3 .cs-portfolio.cs-style1 {
  padding: 50px 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-slider.cs-style3 .cs-portfolio.cs-style1 .cs-portfolio_info_bg {
  left: -20px;
  top: 20px;
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-slider.cs-style3 .cs-portfolio.cs-style1 .cs-portfolio_title {
  opacity: 0;
  left: 20px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.cs-slider.cs-style3 .cs-portfolio.cs-style1 .cs-portfolio_subtitle {
  opacity: 0;
  left: 20px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.cs-slider.cs-style3 .slick-active .cs-portfolio.cs-style1 {
  padding: 0;
}
.cs-slider.cs-style3 .slick-active .cs-portfolio.cs-style1 .cs-portfolio_info_bg {
  left: 0px;
  top: 0px;
  opacity: 1;
  -webkit-transition-delay: 0.4s;
          transition-delay: 0.4s;
}
.cs-slider.cs-style3 .slick-active .cs-portfolio.cs-style1 .cs-portfolio_title {
  left: 0px;
  opacity: 1;
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
}
.cs-slider.cs-style3 .slick-active .cs-portfolio.cs-style1 .cs-portfolio_subtitle {
  left: 0px;
  opacity: 1;
  -webkit-transition-delay: 0.6s;
          transition-delay: 0.6s;
}

.slick-slide > div {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.cs-remove_overflow .slick-list {
  overflow: visible;
}
.cs-remove_overflow .slick-slide {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s linear;
  transition: all 0.3s linear;
}
.cs-remove_overflow .slick-slide.slick-active {
  opacity: 1;
  visibility: visible;
}

.cs-pagination.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 70px;
}
.cs-pagination.cs-style1 ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inherit !important;
}
.cs-pagination.cs-style1 li {
  height: 16px;
  width: 16px;
  background-color: #2DA8A8;
  border: 1px solid #2DA8A8;
  border-radius: 50%;
  margin: 0 8px;
  cursor: pointer;
  position: relative;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-pagination.cs-style1 li::before {
  content: "";
  position: absolute;
  height: 5px;
  width: 5px;
  border-radius: 50%;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #2DA8A8;
}
.cs-pagination.cs-style1 li.slick-active {
  background-color: transparent;
}
.cs-pagination.cs-style1 button {
  display: none;
}

.cs-swiper_pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: absolute;
  bottom: 52px;
  right: initial;
  top: initial;
  z-index: 2;
}
.cs-swiper_pagination .swiper-pagination-bullet {
  height: 16px;
  width: 16px;
  background-color: #2DA8A8;
  border: 1px solid #2DA8A8;
  border-radius: 50%;
  margin: 0 8px !important;
  cursor: pointer;
  position: relative;
  opacity: 1;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-swiper_pagination .swiper-pagination-bullet::before {
  content: "";
  position: absolute;
  height: 5px;
  width: 5px;
  border-radius: 50%;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #2DA8A8;
}
.cs-swiper_pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background-color: transparent;
}
.cs-swiper_pagination.cs-square_shape .swiper-pagination-bullet {
  height: 15px;
  width: 15px;
  border-radius: 3px;
}
.cs-swiper_pagination.cs-square_shape .swiper-pagination-bullet::before {
  border-radius: 1px;
}

.swiper-horizontal > .swiper-pagination-bullets.cs-swiper_pagination,
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination {
  right: initial;
  top: initial;
  -webkit-transform: initial;
          transform: initial;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  bottom: 52px;
  width: initial;
}

.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination {
  right: initial;
  top: initial;
}

.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers {
  left: 115px;
  bottom: initial;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  top: 50%;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet {
  display: block;
  height: initial;
  width: initial;
  border: none;
  background-color: transparent;
  margin: 15px 0 !important;
  font-size: 21px;
  font-weight: 600;
  color: #fff;
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet::before {
  display: none;
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet.swiper-pagination-bullet-active {
  color: #2DA8A8;
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(1)::after {
  content: "01";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(2)::after {
  content: "02";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(3)::after {
  content: "03";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(4)::after {
  content: "04";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(5)::after {
  content: "05";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(6)::after {
  content: "06";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(7)::after {
  content: "07";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(8)::after {
  content: "08";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(9)::after {
  content: "09";
}
.swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet:nth-child(10)::after {
  content: "10";
}

.cs-slider_arrows.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: -8px;
}
.cs-slider_arrows.cs-style1 .slick-arrow {
  width: 60px;
  height: 35px;
  border: 2px solid currentColor;
  border-radius: 5px;
  margin: 8px;
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-slider_arrows.cs-style1 .slick-arrow:hover {
  color: #fff;
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}

.cs-slider_arrows.cs-style2 .slick-arrow {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  height: 50px;
  width: 50px;
  background-color: rgba(153, 150, 150, 0.5);
  border-radius: 50%;
  z-index: 5;
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-slider_arrows.cs-style2 .slick-arrow:hover {
  background-color: #999696;
}
.cs-slider_arrows.cs-style2 .slick-arrow.cs-left_arrow {
  left: 40px;
}
.cs-slider_arrows.cs-style2 .slick-arrow.cs-right_arrow {
  right: 40px;
}

.slick-dotted {
  cursor: url(../img/drag.png) 16 9, ew-resize !important;
}

.cs-gap-24 .slick-slide {
  padding-left: 12px;
  padding-right: 12px;
}
.cs-gap-24 .slick-list {
  margin-left: -12px;
  margin-right: -12px;
}

.cs-gap-12 .slick-slide {
  padding-left: 6px;
  padding-right: 6px;
}
.cs-gap-12 .slick-list {
  margin-left: -6px;
  margin-right: -6px;
}

.cs-slider_controll {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 320px;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.cs-slider_controll .cs-controll_seperator {
  height: 1px;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  background-color: rgba(254, 254, 254, 0.5);
  margin: 0 20px;
}
.cs-slider_controll.cs-type1 {
  margin-left: -205px;
}

.slider-nav.cs-style1 {
  width: 405px;
}
.slider-nav.cs-style1 .slick-list {
  padding: 50px 0 !important;
}
.slider-nav.cs-style1 .slick-dots,
.slider-nav.cs-style1 .slick-arrow {
  display: none !important;
}

.slider-nav_item {
  width: 135px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  opacity: 0.5;
  padding: 20px;
}

.slick-center .slider-nav_item {
  -webkit-transform: scale(1.8);
          transform: scale(1.8);
  opacity: 1;
  position: relative;
  z-index: 2;
}

.slider-for .slick-arrow {
  width: 60px;
  height: 35px;
  border: 2px solid #fff;
  border-radius: 5px;
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  overflow: hidden;
  background-color: transparent;
  outline: none;
  color: transparent;
  background-repeat: no-repeat;
  background-position: center;
  position: absolute;
  bottom: 6px;
  z-index: 2;
}
.slider-for .slick-arrow:hover {
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}
.slider-for .slick-prev {
  background-image: url(../img/prev_arrow.svg);
  right: 76px;
}
.slider-for .slick-next {
  background-image: url(../img/next_arrow.svg);
  right: 0;
}

.cs-testimonial_slider {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.cs-testimonial_slider .cs-testimonial_slider_left {
  width: 35%;
}
.cs-testimonial_slider .cs-testimonial_slider_right {
  width: 65%;
}

@media screen and (max-width: 1199px) {
  .cs-gap-50 .slick-slide {
    padding-left: 15px;
    padding-right: 15px;
  }
  .cs-gap-50 .slick-list {
    margin-left: -15px;
    margin-right: -15px;
  }
  .cs-slider.cs-style1 {
    display: block;
  }
  .cs-slider.cs-style1 .cs-slider_left {
    width: 100%;
    padding-right: 0;
    padding-bottom: 90px;
  }
  .cs-slider.cs-style1 .cs-slider_right {
    width: 100%;
  }
  .cs-testimonial_slider .cs-testimonial_slider_left {
    width: 45%;
  }
  .cs-testimonial_slider .cs-testimonial_slider_right {
    width: 55%;
  }
  .cs-slider.cs-style3 .slick-list {
    padding: 0 15% !important;
  }
  .swiper-horizontal > .swiper-pagination-bullets.cs-swiper_pagination,
  .swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination {
    bottom: 30px;
  }
  .swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers {
    left: 15px;
  }
  .swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers .swiper-pagination-bullet {
    font-size: 16px;
    margin: 7px 0 !important;
  }
}
@media screen and (min-width: 992px) {
  .cs-hidden_desktop {
    display: none !important;
  }
}
@media screen and (max-width: 991px) {
  .cs-hidden_mobile {
    display: none !important;
  }
  .cs-pagination.cs-style1 {
    margin-top: 35px;
  }
  .cs-slider_nav {
    position: initial;
    width: 100%;
    -webkit-transform: initial;
            transform: initial;
    padding-bottom: 80px;
  }
  .cs-gap-40 .slick-slide,
  .cs-gap-50 .slick-slide {
    padding-left: 15px;
    padding-right: 15px;
  }
  .cs-gap-40 .slick-list,
  .cs-gap-50 .slick-list {
    margin-left: -15px;
    margin-right: -15px;
  }
  .cs-slider.cs-style1 .cs-slider_left {
    padding-bottom: 45px;
  }
  .cs-slider_heading.cs-style1 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
  .cs-slider_heading.cs-style1 .cs-section_heading + .cs-slider_arrows {
    margin-top: 15px;
  }
  .cs-testimonial_slider {
    display: block;
  }
  .cs-testimonial_slider .cs-testimonial_slider_left,
  .cs-testimonial_slider .cs-testimonial_slider_right {
    width: 100%;
  }
  .cs-testimonial_slider .cs-testimonial_slider_left {
    margin-bottom: 30px;
  }
  .slider-nav.cs-style1 {
    margin: auto;
  }
  .slider-nav.cs-style1 .slick-list {
    padding: 40px 0 !important;
  }
}
@media screen and (max-width: 767px) {
  .cs-slider.cs-style3 .slick-list {
    padding: 0 15% !important;
  }
}
@media screen and (max-width: 575px) {
  .cs-hide_mobile {
    display: none;
  }
  .cs-slider.cs-style3 .slick-list {
    padding: 0 15px !important;
  }
  .swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers {
    display: none;
  }
}
@media screen and (max-width: 420px) {
  .slider-nav.cs-style1 {
    width: 300px;
  }
  .slider-nav_item {
    width: 100px;
  }
  .cs-testimonial_slider .cs-testimonial.cs-style1 {
    padding-bottom: 70px;
  }
  .slider-for .slick-next {
    right: initial;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    margin-left: 38px;
  }
  .slider-for .slick-prev {
    right: initial;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    margin-left: -38px;
  }
}
/*--------------------------------------------------------------
6. Video Popup
----------------------------------------------------------------*/
.cs-pd_video .cs-video_open,
.cs-sample_img .cs-video_open {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  color: #fff;
  font-size: 68px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  line-height: 48px;
}

.cs-pd_video .cs-video_open:hover,
.cs-sample_img .cs-video_open:hover {
  color: rgba(255, 255, 255, 0.7);
}

.cs-video_popup {
  position: fixed;
  z-index: 1000;
  top: 0;
  width: 100%;
  height: 100%;
  left: -100%;
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}

.cs-video_popup.active {
  left: 0;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
  left: 0;
}

.cs-video_popup_overlay {
  position: absolute;
  left: 0;
  right: 0;
  background: #000;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  opacity: 0;
}

.cs-video_popup.active .cs-video_popup_overlay {
  opacity: 0.8;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.cs-video_popup_content {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  font-size: 0;
  text-align: center;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  -webkit-transform: translateY(100px);
          transform: translateY(100px);
  opacity: 0;
  visibility: hidden;
  padding: 15px;
}

.cs-video_popup.active .cs-video_popup_content {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  visibility: visible;
}

.cs-video_popup_content:after {
  content: "";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.cs-video_popup_container {
  display: inline-block;
  position: relative;
  text-align: left;
  background: #fff;
  max-width: 1380px;
  width: 100%;
  vertical-align: middle;
}

.cs-video_popup_container .embed-responsive {
  width: 100%;
}

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
  height: 100%;
}

.embed-responsive-16by9::before {
  display: block;
  content: "";
  padding-top: 56.25%;
}

.embed-responsive iframe,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.cs-video_popup_close {
  position: absolute;
  top: 0;
  right: 0;
  width: 40px;
  height: 40px;
  background: #d90d0d;
  cursor: pointer;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.cs-video_popup iframe {
  width: 100%;
  height: 100%;
  position: absolute;
}

.cs-video_popup_close:before {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 20px;
  height: 1px;
  background: #fff;
  margin-left: -10px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.cs-video_popup_close:after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 20px;
  height: 1px;
  background: #fff;
  margin-left: -10px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.cs-video_popup_close:hover:before,
.cs-video_popup_close:hover:after {
  background: #000;
}

.cs-video_popup_layer {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
}

.cs-video_popup_align {
  overflow: hidden;
}

/*End Video Popup*/
/*--------------------------------------------------------------
7. Header
----------------------------------------------------------------*/
.cs-site_header {
  position: relative;
  z-index: 101;
}
.cs-site_header .cs-btn.cs-style6 {
  font-size: 16px;
}

.cs-toolbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 10px 40px;
}

.cs-site-branding {
  display: inline-block;
  max-width: 180px;
}

.cs-site_header {
  position: absolute;
  width: 100%;
  left: 0;
  top: 10px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.cs-site_header.cs-style1 .cs-main_header_in,
.cs-site_header.cs-style1 .cs-top_header_in {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  height: 90px;
  position: relative;
}
.cs-site_header.cs-style1 .cs-main_header_right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 100%;
}

.cs-site_header.cs-style1.cs-sticky-active {
  background-color: #fff;
  -webkit-box-shadow: 0 10px 10px -10px rgba(33, 43, 53, 0.1);
          box-shadow: 0 10px 10px -10px rgba(33, 43, 53, 0.1);
}
.cs-site_header.cs-style1 .cs-icon_btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 45px;
  height: 45px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
  border: 2px solid currentColor;
  border-radius: 50%;
  color: #fff;
}
.cs-site_header.cs-style1 .cs-icon_btn .cs-icon_btn_in {
  width: 18px;
  height: 16px;
  line-height: 0;
  cursor: pointer;
  position: relative;
  text-align: left;
  overflow: hidden;
}
.cs-site_header.cs-style1 .cs-icon_btn .cs-icon_btn_in span {
  display: inline-block;
  position: absolute;
  height: 2px;
  width: 100%;
  border-radius: 0;
  background-color: currentColor;
  color: inherit;
  vertical-align: top;
  -webkit-transition: 0s ease-in-out;
  transition: 0s ease-in-out;
  border-radius: 3px;
}
.cs-site_header.cs-style1 .cs-icon_btn .cs-icon_btn_in span:nth-child(1) {
  -webkit-transform: translate(0, -7px);
          transform: translate(0, -7px);
  width: calc(100% - 4px);
}
.cs-site_header.cs-style1 .cs-icon_btn .cs-icon_btn_in span:nth-child(2) {
  -webkit-transform: translate(0, 0);
          transform: translate(0, 0);
  width: calc(100% - 4px);
}
.cs-site_header.cs-style1 .cs-icon_btn .cs-icon_btn_in span:nth-child(3) {
  -webkit-transform: translate(0, 7px);
          transform: translate(0, 7px);
}
.cs-site_header.cs-style1 .cs-icon_btn .cs-icon_btn_in span:nth-child(4) {
  -webkit-transform: translate(0, 14px);
          transform: translate(0, 14px);
}
.cs-site_header.cs-style1 .cs-icon_btn:hover .cs-icon_btn_in span {
  -webkit-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
}
.cs-site_header.cs-style1 .cs-icon_btn:hover .cs-icon_btn_in span:nth-child(1) {
  -webkit-transform: translate(0, 0);
          transform: translate(0, 0);
}
.cs-site_header.cs-style1 .cs-icon_btn:hover .cs-icon_btn_in span:nth-child(2) {
  -webkit-transform: translate(0, 7px);
          transform: translate(0, 7px);
  width: 100%;
}
.cs-site_header.cs-style1 .cs-icon_btn:hover .cs-icon_btn_in span:nth-child(3) {
  -webkit-transform: translate(0, 14px);
          transform: translate(0, 14px);
}
.cs-site_header.cs-style1 .cs-icon_btn:hover .cs-icon_btn_in span:nth-child(4) {
  -webkit-transform: translate(0, 21px);
          transform: translate(0, 21px);
}
.cs-site_header.cs-style1 .cs-action_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-site_header.cs-style1 .cs-action_box .cs-action_value {
  margin-left: 15px;
}
.cs-site_header.cs-style1 .cs-action_box > *:not(:last-child) {
  margin-right: 35px;
}
.cs-site_header.cs-style1 .cs-btn {
  padding: 13px 15px;
}

.cs-site_header_full_width .container {
  max-width: 100%;
  padding: 0 115px;
}

.cs-site_header_style1 {
  border-bottom: 1px solid #1a188d;
}
.cs-site_header_style1 .cs-main_header_right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-site_header_style1 .cs-nav + .cs-header_toolbox.cs-center {
  margin-left: 35px;
}
.cs-site_header_style1 .cs-nav .cs-nav_list > li.current-menu-item > a:before {
  bottom: -4px;
  background-color: #fff;
}

.cs-side_header {
  position: fixed;
  top: 0;
  right: 0px;
  width: 100%;
  z-index: 1000;
  height: 100vh;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-side_header .cs-side_header_overlay {
  background-color: rgba(22, 22, 22, 0.5);
  height: inherit;
  width: inherit;
  left: inherit;
  top: inherit;
  position: inherit;
  cursor: -webkit-zoom-out;
  cursor: zoom-out;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  opacity: 0;
}
.cs-side_header .cs-side_header_in {
  width: 500px;
  height: 100vh;
  background-color: #181818;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  margin-left: auto;
  overflow: auto;
  padding: 90px 50px 50px 50px;
  position: relative;
  z-index: 2;
  right: -500px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-side_header .cs-side_header_heading {
  font-size: 22px;
  line-height: 1.4em;
  margin: 0;
}
.cs-side_header .cs-side_header_title {
  font-size: 18px;
  margin-bottom: 25px;
}
.cs-side_header .cs-side_header_box {
  padding: 35px 0;
}
.cs-side_header .cs-close {
  opacity: 0;
}
.cs-side_header.active {
  opacity: 1;
  visibility: visible;
}
.cs-side_header.active .cs-side_header_overlay,
.cs-side_header.active .cs-close {
  opacity: 1;
}
.cs-side_header.active .cs-side_header_in {
  right: 0;
}
.cs-side_header .cs-side_header_shape {
  height: 257px;
  width: 257px;
  overflow: hidden;
  position: fixed;
  pointer-events: none;
  z-index: -1;
  bottom: 0;
  right: 0;
}
.cs-side_header .cs-side_header_shape::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  right: -90px;
  bottom: -80px;
  overflow: hidden;
  background-color: #000;
  border-radius: 50%;
}

.cs-close {
  position: fixed;
  right: 30px;
  top: 30px;
  height: 25px;
  width: 25px;
  border-radius: 50%;
  border: 2px solid currentColor;
  background-color: transparent;
  color: #fff;
  cursor: pointer;
  z-index: 2;
  z-index: 100;
}
.cs-close::before, .cs-close::after {
  content: "";
  position: absolute;
  width: 50%;
  height: 2px;
  background-color: currentColor;
  left: 50%;
  top: 50%;
  margin-left: -25%;
  margin-top: -1px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.cs-close::before {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.cs-close:hover {
  color: #2DA8A8;
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}

.cs-header_badge {
  position: absolute;
  right: 5px;
  top: 0;
  font-size: 12px;
  background-color: #2DA8A8;
  color: #fff;
  display: inline-block;
  line-height: 1.6em;
  padding: 0px 7px;
  border-radius: 3px;
}

@media screen and (max-width: 1199px) {
  .cs-main_header .container {
    max-width: 100%;
  }
  .cs-site_header.cs-style1 .cs-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
}
.cs-nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.cs-sticky_header {
  position: fixed !important;
  width: 100%;
  z-index: 999;
}

.cs-gescout_sticky {
  position: fixed !important;
  top: -110px;
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  background-color: #000;
}

.cs-gescout_show {
  top: 0 !important;
  opacity: 1;
}

.cs-site_branding {
  display: inline-block;
}
.cs-site_branding img {
  max-height: 45px;
}

@media screen and (min-width: 1200px) {
  .cs-main_header {
    position: relative;
  }
  .cs-main_header .container-fluid {
    padding-right: 40px;
    padding-left: 40px;
  }
  .cs-main_header_center,
  .cs-top_header_center {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
  }
  .cs-site_header.cs-style1 .cs-main_header_center {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    height: 100%;
    width: 100%;
    max-width: calc(100% - 300px);
  }
  .cs-site_header.cs-style1 .cs-main_header_left {
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .cs-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    height: 100%;
    font-size: 15px;
    line-height: 1.6em;
    color: #fff;
  }
  .cs-nav .cs-nav_list {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    height: inherit;
  }
  .cs-nav .cs-nav_list > li {
    margin-right: 50px;
    height: inherit;
  }
  .cs-nav .cs-nav_list > li:last-child {
    margin-right: 0;
  }
  .cs-nav .cs-nav_list > li > a {
    padding: 10px 0;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    position: relative;
    height: inherit;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .cs-nav .cs-nav_list > li > ul {
    left: 0;
    top: calc(100% + 15px);
  }
  .cs-nav .cs-nav_list > li:hover > ul {
    top: 100%;
    opacity: 1;
    visibility: visible;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }
  .cs-nav .cs-nav_list > li.menu-item-has-children > a {
    position: relative;
  }
  .cs-nav .cs-nav_list > li.menu-item-has-children > a::after {
    content: "";
    display: inline-block;
    height: 8px;
    width: 8px;
    border: 2px solid #fff;
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    border-left: 0;
    border-top: 0;
    margin-left: 6px;
    position: relative;
    top: -2px;
    border-radius: 0px 0px 2px 0px;
  }
  .cs-nav .cs-nav_list li:not(.cs-mega_menu) {
    position: relative;
  }
  .cs-nav .cs-nav_list ul {
    width: 260px;
    background-color: #181818;
    position: absolute;
    -webkit-box-shadow: 0px 1px 2px 0px rgba(2, 0, 181, 0.1);
            box-shadow: 0px 1px 2px 0px rgba(2, 0, 181, 0.1);
    border-top: 2px solid #2DA8A8;
    padding: 10px 0;
    z-index: 100;
    opacity: 0;
    visibility: hidden;
    display: block !important;
    border-radius: 0px 0px 5px 5px;
    -webkit-transition: all 0.1s ease;
    transition: all 0.1s ease;
  }
  .cs-nav .cs-nav_list ul li:hover ul {
    top: 0px;
  }
  .cs-nav .cs-nav_list ul li:hover > ul {
    opacity: 1;
    visibility: visible;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }
  .cs-nav .cs-nav_list ul a {
    display: block;
    line-height: inherit;
    padding: 10px 20px;
  }
  .cs-nav .cs-nav_list ul ul {
    top: 15px;
    left: 100%;
  }
  .cs-munu_toggle,
  .cs-munu_dropdown_toggle {
    display: none;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper {
    width: 1296px !important;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    position: absolute;
    padding: 5px 15px 10px;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper a {
    padding: 5px 10px;
    font-size: 90%;
    text-align: center;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper a img {
    border-radius: 5px;
    border: 1px solid rgba(181, 181, 181, 0.1);
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper a:hover img {
    border-color: rgba(255, 74, 23, 0.6);
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper > li {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    padding: 10px 0;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper > li > a:hover {
    background-color: transparent;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper > li ul {
    position: initial;
    border: none;
    padding: 0;
    width: 100%;
    -webkit-box-shadow: none;
            box-shadow: none;
    background-color: transparent;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper > li ul > li:not(:last-child) {
    margin-bottom: 20px;
  }
  .cs-nav .cs-nav_list .cs-mega_menu:hover .cs-mega_wrapper li ul {
    opacity: 1;
    visibility: visible;
  }
  .cs-nav .cs-nav_list > li ul:not(.cs-mega_wrapper) .menu-item-has-children > a {
    position: relative;
  }
}
@media screen and (max-width: 1400px) {
  .cs-nav .cs-nav_list .cs-mega_wrapper {
    width: 1116px !important;
  }
  .cs-site-branding {
    max-width: 190px;
  }
  .cs-site_header_full_width .container {
    max-width: 100%;
  }
}
@media screen and (max-width: 1199px) {
  .cs-nav .cs-nav_list .cs-mega_wrapper {
    width: 100% !important;
  }
  .cs-site_header_full_width .container {
    padding: 0 15px;
  }
  .cs-munu_dropdown_toggle {
    position: absolute;
    height: 30px;
    width: 30px;
    right: 20px;
    top: 5px;
  }
  .cs-munu_dropdown_toggle:before, .cs-munu_dropdown_toggle:after {
    content: "";
    display: block;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    height: 2px;
    width: 10px;
    background-color: rgba(254, 254, 254, 0.7);
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }
  .cs-munu_dropdown_toggle:before {
    -webkit-transform: translate(-50%, -50%) rotate(90deg);
            transform: translate(-50%, -50%) rotate(90deg);
  }
  .cs-munu_dropdown_toggle.active:before {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
            transform: translate(-50%, -50%) rotate(0deg);
  }
  .cs-nav .cs-nav_list {
    position: absolute;
    width: 100vw;
    left: -15px;
    background-color: #181818;
    padding: 10px 0;
    display: none;
    top: 100%;
    border-top: 1px solid rgba(77, 77, 77, 0.3215686275);
    border-bottom: 1px solid rgba(77, 77, 77, 0.3215686275);
    overflow: auto;
    max-height: calc(100vh - 80px);
    line-height: 1.6em;
  }
  .cs-nav .cs-nav_list ul {
    padding-left: 15px;
    display: none;
  }
  .cs-nav .cs-nav_list a {
    display: block;
    padding: 8px 20px;
  }
  .cs-nav .menu-item-has-children {
    position: relative;
  }
  /*Mobile Menu Button*/
  .cs-munu_toggle {
    display: inline-block;
    width: 30px;
    height: 27px;
    cursor: pointer;
    position: absolute;
    top: 27px;
    right: 30px;
  }
  .cs-munu_toggle span,
  .cs-munu_toggle span:before,
  .cs-munu_toggle span:after {
    width: 100%;
    height: 2px;
    background-color: currentColor;
    display: block;
  }
  .cs-munu_toggle span {
    margin: 0 auto;
    position: relative;
    top: 12px;
    -webkit-transition-duration: 0s;
            transition-duration: 0s;
    -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
  }
  .cs-munu_toggle span:before {
    content: "";
    position: absolute;
    margin-top: -9px;
    -webkit-transition-property: margin, -webkit-transform;
    transition-property: margin, -webkit-transform;
    transition-property: margin, transform;
    transition-property: margin, transform, -webkit-transform;
    -webkit-transition-duration: 0.2s;
            transition-duration: 0.2s;
    -webkit-transition-delay: 0.2s, 0s;
            transition-delay: 0.2s, 0s;
  }
  .cs-munu_toggle span:after {
    content: "";
    position: absolute;
    margin-top: 9px;
    -webkit-transition-property: margin, -webkit-transform;
    transition-property: margin, -webkit-transform;
    transition-property: margin, transform;
    transition-property: margin, transform, -webkit-transform;
    -webkit-transition-duration: 0.2s;
            transition-duration: 0.2s;
    -webkit-transition-delay: 0.2s, 0s;
            transition-delay: 0.2s, 0s;
  }
  .cs-site_header.cs-style1 .cs-munu_toggle {
    top: 50%;
    right: 0px;
    margin-top: -13px;
  }
  .cs-toggle_active span {
    background-color: rgba(0, 0, 0, 0);
    -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
  }
  .cs-toggle_active span:before {
    margin-top: 0;
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transition-delay: 0s, 0.2s;
            transition-delay: 0s, 0.2s;
  }
  .cs-toggle_active span:after {
    margin-top: 0;
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transition-delay: 0s, 0.2s;
            transition-delay: 0s, 0.2s;
  }
  .cs-header_toolbox {
    margin-right: 50px;
  }
  .cs-nav .cs-nav_list a {
    position: relative;
  }
  .cs-site_header.cs-style1 .cs-main_header_in {
    height: 80px;
  }
  .cs-hamburger span {
    height: 3px;
  }
  .cs-site_header .current-menu-item > a:before {
    display: none;
  }
  .cs-site_header.cs-style1 .cs-main_header_center .cs-site_branding {
    position: absolute;
    left: 0px;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .cs-site_header.cs-style1 {
    top: 0;
  }
  .cs-toolbox {
    margin-right: 45px;
  }
  .cs-site_header.cs-style1 .cs-icon_btn {
    width: 38px;
    height: 38px;
  }
  .cs-toolbox,
  .cs-side_header {
    display: none;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper ul {
    display: block;
  }
  .cs-nav .cs-nav_list .cs-mega_wrapper ul .cs-nav_list_img {
    display: none;
  }
}
@media screen and (max-width: 991px) {
  .cs-site_header .container {
    max-width: 100%;
  }
  .cs-site_header.cs-style1 .cs-action_box > *:not(:last-child) {
    margin-right: 25px;
  }
  .cs-site_header.cs-style1 .cs-btn {
    padding: 8px;
  }
}
@media screen and (max-width: 575px) {
  .cs-site-branding {
    max-width: 150px;
  }
  .cs-hamburger_wrap .cs-hamburger {
    margin-right: 0;
  }
  .cs-site_branding img {
    max-height: 32px;
  }
  .cs-site_header.cs-style1 .cs-btn span {
    display: none;
  }
  .cs-site_header.cs-style1 .cs-btn svg {
    margin-right: 0;
    width: 20px;
    height: 20px;
  }
}
/*--------------------------------------------------------------
  8. Footer
----------------------------------------------------------------*/
.cs-fooer_main {
  padding: 0px 0 35px;
}

.cs-footer_dark_bg_1 {
  background-color: #151515;
}

.cs-footer_item {
  margin-bottom: 40px;
}
.cs-footer_item .cs-newsletter.cs-style1 {
  margin-top: 6px;
}

.cs-widget_title {
  font-size: 18px;
  margin-bottom: 35px;
}

.cs-menu_widget {
  padding: 0;
  margin: 0;
  list-style: none;
}
.cs-menu_widget li:not(:last-child) {
  margin-bottom: 20px;
}

.cs-text_widget p {
  margin: 0;
}
.cs-text_widget img + p {
  margin-top: 30px;
}

.cs-social_btns.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: -7px;
}
.cs-social_btns.cs-style1 a {
  height: 36px;
  width: 36px;
  border-radius: 50%;
  border: 2px solid #fff;
  margin: 7px;
}
.cs-social_btns.cs-style1 a:hover {
  border-color: #2DA8A8;
  -webkit-transform: scale(1.08);
          transform: scale(1.08);
}
.cs-social_btns.cs-style1 a:hover svg {
  fill: #2DA8A8;
}

.cs-newsletter.cs-style1 .cs-newsletter_form {
  position: relative;
}
.cs-newsletter.cs-style1 .cs-newsletter_input {
  height: 50px;
  width: 100%;
  border-radius: 10px;
  background-color: #000;
  border: none;
  padding: 5px 90px 5px 15px;
  outline: none;
  color: #fff;
}
.cs-newsletter.cs-style1 .cs-newsletter_btn {
  padding: 7px 25px;
  border-radius: 10px;
  color: #fff;
  background-color: #2DA8A8;
  position: absolute;
  top: 5px;
  right: 5px;
  font-weight: 600;
  border: none;
  overflow: hidden;
}
.cs-newsletter.cs-style1 .cs-newsletter_btn:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(22, 22, 22, 0.4);
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
          transform-origin: 0 50%;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  -webkit-transition-timing-function: ease-out;
          transition-timing-function: ease-out;
  border-radius: inherit;
}
.cs-newsletter.cs-style1 .cs-newsletter_btn span {
  position: relative;
  z-index: 1;
}
.cs-newsletter.cs-style1 .cs-newsletter_btn:hover:before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
          transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}
.cs-newsletter.cs-style1 .cs-newsletter_text {
  margin-top: 25px;
}

.cs-footer_links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.cs-footer_links li:not(:last-child)::after {
  content: "|";
  margin: 0 10px;
  position: relative;
  top: -1px;
}

.cs-bottom_footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 20px 0;
  border-top: 1px solid #4D4D4D;
}
.cs-bottom_footer > * {
  padding: 4px 0;
}

.cs-text_widget + .cs-social_btns.cs-style1 {
  margin-top: 25px;
}

@media screen and (max-width: 1199px) {
  .cs-newsletter.cs-style1 .cs-newsletter_btn {
    padding: 7px 15px;
  }
  .cs-newsletter.cs-style1 .cs-newsletter_input {
    padding: 5px 80px 5px 15px;
  }
}
@media screen and (max-width: 991px) {
  .cs-widget_title {
    margin-bottom: 20px;
  }
  .cs-text_widget img + p {
    margin-top: 20px;
  }
  .cs-menu_widget li:not(:last-child) {
    margin-bottom: 10px;
  }
  .cs-text_widget + .cs-social_btns.cs-style1,
  .cs-newsletter.cs-style1 .cs-newsletter_text {
    margin-top: 15px;
  }
  .cs-fooer_main {
    padding: 60px 0 15px;
  }
}
@media screen and (max-width: 767px) {
  .cs-bottom_footer {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    text-align: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
/*--------------------------------------------------------------
9. Isotope
----------------------------------------------------------------*/
.cs-isotop {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.cs-isotop.cs-has_gutter_24 {
  margin-left: -12px;
  margin-right: -12px;
  margin-bottom: -24px;
}
.cs-isotop.cs-has_gutter_24 .cs-isotop_item {
  padding: 0 12px;
  margin-bottom: 24px;
}

.cs-isotop.cs-has_gutter_80 {
  margin-left: -40px;
  margin-right: -40px;
  margin-bottom: -80px;
}
.cs-isotop.cs-has_gutter_80 .cs-isotop_item {
  padding: 0 40px;
  margin-bottom: 80px;
}

.cs-isotop.cs-has_gutter_40 {
  margin-left: -20px;
  margin-right: -20px;
  margin-bottom: -30px;
}
.cs-isotop.cs-has_gutter_40 .cs-isotop_item {
  padding: 0 20px;
  margin-bottom: 30px;
}

.cs-isotop.cs-has_gutter_100 {
  margin-left: -50px;
  margin-right: -50px;
  margin-bottom: -40px;
}
.cs-isotop.cs-has_gutter_100 .cs-isotop_item {
  padding: 0 50px;
  margin-bottom: 40px;
}

.cs-isotop_col_6 .cs-grid_sizer,
.cs-isotop_col_6 .cs-isotop_item {
  width: 16.666667%;
}

.cs-isotop_col_5 .cs-grid_sizer,
.cs-isotop_col_5 .cs-isotop_item {
  width: 20%;
}

.cs-isotop_col_4 .cs-grid_sizer,
.cs-isotop_col_4 .cs-isotop_item {
  width: 25%;
}

.cs-isotop_col_3 .cs-grid_sizer,
.cs-isotop_col_3 .cs-isotop_item {
  width: 33.333333%;
}

.cs-isotop_col_2 .cs-grid_sizer,
.cs-isotop_col_2 .cs-isotop_item {
  width: 50%;
}

.cs-isotop_col_1 .cs-grid_sizer,
.cs-isotop_col_1 .cs-isotop_item {
  width: 100%;
}

.cs-grid_sizer {
  width: 33.333333%;
}

.cs-isotop_col_5 .cs-w20,
.cs-isotop_col_4 .cs-w20,
.cs-isotop_col_3 .cs-w20,
.cs-isotop_col_2 .cs-w20,
.cs-isotop_col_1 .cs-w20 {
  width: 20%;
}

.cs-isotop_col_5 .cs-w25,
.cs-isotop_col_4 .cs-w25,
.cs-isotop_col_3 .cs-w25,
.cs-isotop_col_2 .cs-w25,
.cs-isotop_col_1 .cs-w25 {
  width: 25%;
}

.cs-isotop_col_5 .cs-w33,
.cs-isotop_col_4 .cs-w33,
.cs-isotop_col_3 .cs-w33,
.cs-isotop_col_2 .cs-w33,
.cs-isotop_col_1 .cs-w33 {
  width: 33.333333%;
}

.cs-isotop_col_5 .cs-w50,
.cs-isotop_col_4 .cs-w50,
.cs-isotop_col_3 .cs-w50,
.cs-isotop_col_2 .cs-w50,
.cs-isotop_col_1 .cs-w50 {
  width: 50%;
}

.cs-isotop_col_5 .cs-w66,
.cs-isotop_col_4 .cs-w66,
.cs-isotop_col_3 .cs-w66,
.cs-isotop_col_2 .cs-w66,
.cs-isotop_col_1 .cs-w66 {
  width: 66.666666%;
}

.cs-isotop_col_5 .cs-w100,
.cs-isotop_col_4 .cs-w100,
.cs-isotop_col_3 .cs-w100,
.cs-isotop_col_2 .cs-w100,
.cs-isotop_col_1 .cs-w100 {
  width: 100%;
}

.cs-isotop_filter.cs-style1 li {
  margin-top: 10px;
}
.cs-isotop_filter.cs-style1 li:not(:last-child) {
  margin-right: 28px;
}
.cs-isotop_filter.cs-style1 a {
  display: inline-block;
  position: relative;
  padding-bottom: 10px;
}
.cs-isotop_filter.cs-style1 a::before {
  content: "";
  height: 9px;
  width: 9px;
  position: absolute;
  left: 50%;
  margin-left: -5px;
  border-radius: 50%;
  background-color: #2DA8A8;
  bottom: -5px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  -webkit-transform: scale(0);
          transform: scale(0);
}
.cs-isotop_filter.cs-style1 ul {
  border-bottom: 1px solid #999696;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}
.cs-isotop_filter.cs-style1 .active a {
  color: #2DA8A8;
}
.cs-isotop_filter.cs-style1 .active a::before {
  -webkit-transform: scale(1);
          transform: scale(1);
}

@media screen and (max-width: 1199px) {
  .cs-isotop.cs-has_gutter_100 .cs-isotop_item {
    padding: 0 15px;
    margin-bottom: 30px;
  }
  .cs-isotop.cs-has_gutter_100 {
    margin-left: -15px;
    margin-right: -15px;
    margin-bottom: -30px;
  }
  .cs-isotop.cs-has_gutter_80 {
    margin-left: -12px;
    margin-right: -12px;
    margin-bottom: -25px;
  }
  .cs-isotop.cs-has_gutter_80 .cs-isotop_item {
    padding: 0 12px;
    margin-bottom: 25px;
  }
  .cs-isotop_col_4 .cs-grid_sizer,
  .cs-isotop_col_4 .cs-isotop_item {
    width: 33.333333%;
  }
}
@media screen and (max-width: 991px) {
  .cs-isotop_col_4 .cs-grid_sizer,
  .cs-isotop_col_4 .cs-isotop_item {
    width: 50%;
  }
  .cs-isotop_col_4 .cs-w50 {
    width: 100%;
  }
  .cs-isotop_col_3 .cs-grid_sizer,
  .cs-isotop_col_3 .cs-isotop_item {
    width: 50%;
  }
  .cs-isotop_col_2 .cs-grid_sizer,
  .cs-isotop_col_2 .cs-isotop_item {
    width: 100%;
  }
}
@media screen and (max-width: 767px) {
  .cs-isotop_col_5 .cs-w50,
  .cs-isotop_col_4 .cs-w50,
  .cs-isotop_col_3 .cs-w50,
  .cs-isotop_col_2 .cs-w50,
  .cs-isotop_col_1 .cs-w50,
  .cs-isotop_col_5 .cs-w66,
  .cs-isotop_col_4 .cs-w66,
  .cs-isotop_col_3 .cs-w66,
  .cs-isotop_col_2 .cs-w66,
  .cs-isotop_col_1 .cs-w66 {
    width: 100%;
  }
  .cs-isotop_col_5 .cs-grid_sizer,
  .cs-isotop_col_5 .cs-isotop_item {
    width: 100%;
  }
  .cs-isotop_col_4 .cs-grid_sizer,
  .cs-isotop_col_4 .cs-isotop_item {
    width: 100%;
  }
  .cs-isotop_col_3 .cs-grid_sizer,
  .cs-isotop_col_3 .cs-isotop_item {
    width: 100%;
  }
  .cs-isotop_col_2 .cs-grid_sizer,
  .cs-isotop_col_2 .cs-isotop_item {
    width: 100%;
  }
}
@media screen and (max-width: 575px) {
  .cs-isotop_filter.cs-style1 ul {
    border: none;
  }
  .cs-isotop_filter.cs-style1 li {
    margin-bottom: 8px;
  }
  .cs-isotop_filter.cs-style1 li:not(:last-child) {
    margin-right: 20px;
  }
  .cs-isotop_filter.cs-style1 a {
    padding-bottom: 3px;
  }
}
/*--------------------------------------------------------------
  10. Sidebar
----------------------------------------------------------------*/
.cs-sidebar_item:not(:last-child) {
  margin-bottom: 70px;
}

.cs-sidebar_widget_title {
  font-size: 30px;
  margin-bottom: 30px;
}

.tagcloud {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: -5px;
}

.tag-cloud-link {
  font-size: 14px;
  line-height: 1.6em;
  border: 2px solid #fff;
  padding: 3px 15px;
  display: inline-block;
  margin: 5px;
  border-radius: 2px;
}
.tag-cloud-link:hover {
  color: #fff;
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}

.widget_archive ul,
.widget_categories ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.widget_archive ul li,
.widget_categories ul li {
  padding-left: 26px;
  position: relative;
}
.widget_archive ul li::before,
.widget_categories ul li::before {
  content: "";
  width: 14px;
  height: 12px;
  background: url("../img/icons/double_arrow_icon.svg");
  background-position: center;
  position: absolute;
  left: 0;
  top: 8px;
}
.widget_archive ul li:not(:last-child),
.widget_categories ul li:not(:last-child) {
  margin-bottom: 20px;
}

.cs-recent_posts {
  list-style: none;
  margin: 0;
  padding: 0;
}
.cs-recent_posts li:not(:last-child) {
  margin-bottom: 20px;
}

.cs-recent_post {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.cs-recent_post_thumb {
  height: 60px;
  width: 60px;
  border-radius: 5px;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  overflow: hidden;
  margin-right: 18px;
}
.cs-recent_post_thumb:hover .cs-recent_post_thumb_in {
  -webkit-transform: scale(1.06);
          transform: scale(1.06);
}

.cs-recent_post_thumb_in {
  height: 100%;
  width: 100%;
  border-radius: inherit;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.cs-recent_post_title {
  font-size: 18px;
  margin-bottom: 5px;
}

.cs-sidebar_search {
  position: relative;
}

.cs-sidebar_search input {
  display: block;
  width: 100%;
  background-color: transparent;
  outline: none;
  border: none;
  border-bottom: 2px solid #fff;
  padding: 0px 40px 6px 10px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-sidebar_search input:focus {
  border-color: #2DA8A8;
}

.cs-sidebar_search_btn {
  position: absolute;
  background-color: transparent;
  border: none;
  outline: none;
  bottom: 0px;
  right: 0;
  padding: 10px 10px;
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-sidebar_search_btn:hover {
  color: #2DA8A8;
}

.cs-author_card img {
  height: 130px;
  width: 130px;
  margin-bottom: 22px;
}
.cs-author_card h3 {
  font-size: 30px;
  margin-bottom: 14px;
}
.cs-author_card p {
  margin-bottom: 0;
}

@media screen and (max-width: 991px) {
  .cs-sidebar_widget_title {
    font-size: 26px;
    margin-bottom: 20px;
  }
  .widget_archive ul li:not(:last-child), .widget_categories ul li:not(:last-child) {
    margin-bottom: 12px;
  }
  .cs-sidebar_item:not(:last-child) {
    margin-bottom: 40px;
  }
}
/*--------------------------------------------------------------
  11. Hero
----------------------------------------------------------------*/
.cs-hero.cs-style1 .cs-hero_social_wrap,
.cs-hero.cs-style2 .cs-hero_social_wrap,
.cs-hero.cs-style3 .cs-hero_social_wrap,
.cs-swiper_parallax_slider_wrap .cs-hero_social_wrap,
.cs-fullscreen_swiper_wrap .cs-hero_social_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  top: 50%;
  -webkit-writing-mode: vertical-lr;
      -ms-writing-mode: tb-lr;
          writing-mode: vertical-lr;
  -webkit-transform: rotate(180deg) translateY(85%);
          transform: rotate(180deg) translateY(85%);
  right: 45px;
}
.cs-hero.cs-style1 .cs-hero_social_wrap.cs-left_side,
.cs-hero.cs-style2 .cs-hero_social_wrap.cs-left_side,
.cs-hero.cs-style3 .cs-hero_social_wrap.cs-left_side,
.cs-swiper_parallax_slider_wrap .cs-hero_social_wrap.cs-left_side,
.cs-fullscreen_swiper_wrap .cs-hero_social_wrap.cs-left_side {
  right: initial;
  left: 45px;
}
.cs-hero.cs-style1 .cs-hero_social_title,
.cs-hero.cs-style2 .cs-hero_social_title,
.cs-hero.cs-style3 .cs-hero_social_title,
.cs-swiper_parallax_slider_wrap .cs-hero_social_title,
.cs-fullscreen_swiper_wrap .cs-hero_social_title {
  position: relative;
  padding-bottom: 35px;
  white-space: nowrap;
}
.cs-hero.cs-style1 .cs-hero_social_title::after,
.cs-hero.cs-style2 .cs-hero_social_title::after,
.cs-hero.cs-style3 .cs-hero_social_title::after,
.cs-swiper_parallax_slider_wrap .cs-hero_social_title::after,
.cs-fullscreen_swiper_wrap .cs-hero_social_title::after {
  content: "";
  height: 15px;
  width: 2px;
  background-color: #999696;
  display: inline-block;
  border-radius: 3px;
  margin-top: 15px;
  margin-bottom: 15px;
  position: absolute;
  bottom: -5px;
  left: 11px;
}
.cs-hero.cs-style1 .cs-hero_social_links,
.cs-hero.cs-style2 .cs-hero_social_links,
.cs-hero.cs-style3 .cs-hero_social_links,
.cs-swiper_parallax_slider_wrap .cs-hero_social_links,
.cs-fullscreen_swiper_wrap .cs-hero_social_links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.cs-hero.cs-style1 .cs-hero_social_links li,
.cs-hero.cs-style2 .cs-hero_social_links li,
.cs-hero.cs-style3 .cs-hero_social_links li,
.cs-swiper_parallax_slider_wrap .cs-hero_social_links li,
.cs-fullscreen_swiper_wrap .cs-hero_social_links li {
  position: relative;
  padding-bottom: 32px;
  white-space: nowrap;
}
.cs-hero.cs-style1 .cs-hero_social_links li:last-child,
.cs-hero.cs-style2 .cs-hero_social_links li:last-child,
.cs-hero.cs-style3 .cs-hero_social_links li:last-child,
.cs-swiper_parallax_slider_wrap .cs-hero_social_links li:last-child,
.cs-fullscreen_swiper_wrap .cs-hero_social_links li:last-child {
  padding-bottom: 0;
}
.cs-hero.cs-style1 .cs-hero_social_links li:not(:last-child)::after,
.cs-hero.cs-style2 .cs-hero_social_links li:not(:last-child)::after,
.cs-hero.cs-style3 .cs-hero_social_links li:not(:last-child)::after,
.cs-swiper_parallax_slider_wrap .cs-hero_social_links li:not(:last-child)::after,
.cs-fullscreen_swiper_wrap .cs-hero_social_links li:not(:last-child)::after {
  content: "";
  height: 2px;
  width: 15px;
  background-color: #999696;
  display: inline-block;
  position: absolute;
  bottom: 16px;
  border-radius: 3px;
  right: 5px;
}

.cs-swiper_parallax_slider_wrap .cs-hero_social_wrap,
.cs-fullscreen_swiper_wrap .cs-hero_social_wrap {
  z-index: 10;
  -webkit-transform: rotate(180deg) translateY(50%);
          transform: rotate(180deg) translateY(50%);
}

.cs-hero.cs-style1 {
  position: relative;
  padding: 250px 0 170px;
  height: calc(100vh + 180px);
  min-height: 1000px;
}
.cs-hero.cs-style1 .cs-hero_title {
  font-size: 70px !important;
  font-weight: 700;
  margin-bottom: 60px;
  line-height: 1.25em;
  color: #bde2e2;
}
#cs-hero_title_spin:after {
  content:"WEB-DESIGN";
  animation: cs-hero_title_spin 10s linear infinite;
}
@keyframes cs-hero_title_spin {
  0% { content:"SEARCH ENGIN OPTIMIZATION"; color: #095a5a;}
  12% { content:"LINK BUILDING"; color: #0b8383;}
  24% { content:"INBOUND MARKETING"; color: #47d8d8;}
  36% { content:"ON-PAGE SEO"; color: #0d8686;}
  48% { content:"OFF-PAGE SEO"; color: #1eb1b1;}
  60% { content:"DIGITAL MARKETING"; color: #27bdbd;}
  72% { content:"COPYWRITING"; color: #26d7d7;}
  84% { content:"BLOGGING"; color: #3bffff;}
}
.cs-hero.cs-style1 .cs-hero_subtitle {
  font-size: 18px;
  line-height: 1.9em;
  color: #FEFEFE;
}
.cs-hero.cs-style1 .cs-hero_info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-hero.cs-style1 .cs-hero_info > .cs-hero_info_1 {
  width: 30%;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
}
.cs-hero.cs-style1 .cs-hero_info > .cs-hero_info_2 {
  width: 70%;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
}
.cs-hero.cs-style1 .cs-hero_text {
  position: relative;
  z-index: 3;
}
.cs-hero.cs-style1 .cs-slider.cs-style1 {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}
.cs-hero.cs-style1 .cs-slider.cs-style1 * {
  height: 100%;
  width: 100%;
}
.cs-hero.cs-style1.cs-type2 {
  min-height: 650px;
  height: 860px;
  padding: 30px 115px 50px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 110px;
}
.cs-hero.cs-style1.cs-type2 .cs-hero_bg {
  position: absolute;
  height: 100%;
  top: 0;
  left: 115px;
  right: 115px;
  border-radius: 15px;
  overflow: hidden;
}
.cs-hero.cs-style1.cs-type2 .cs-hero_title {
  margin-bottom: 40px;
}
.cs-hero.cs-style1.cs-type2 .cs-hero_social_wrap {
  -webkit-transform: rotate(180deg) translateY(50%);
          transform: rotate(180deg) translateY(50%);
}

.cs-down_btn {
  position: absolute;
  height: 35px;
  width: 20px;
  border-radius: 10px;
  border: 2px solid #fff;
  bottom: 20%;
  left: 50%;
  margin-left: -10px;
}
.cs-down_btn::before {
  content: "";
  height: 5px;
  width: 5px;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #fff;
  -webkit-animation: UpAndDown 3s infinite;
          animation: UpAndDown 3s infinite;
}

.cs-hero.cs-style2 {
  height: 1150px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  padding-top: 80px;
}
.cs-hero.cs-style2 .cs-hero_tab_item h2 {
  font-size: 120px;
  position: relative;
  display: inline-block;
  margin-bottom: 0;
  z-index: 2;
}
.cs-hero.cs-style2 .cs-hero_tab_item h2 a {
  color: inherit;
}
.cs-hero.cs-style2 .cs-hero_tab_item h2::before {
  content: "";
  position: absolute;
  height: 5px;
  width: 0%;
  left: 0;
  top: 50%;
  background-color: #2DA8A8;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-hero.cs-style2 .cs-hero_tab_item .cs-hero_tab_img {
  position: absolute;
  right: 0;
  top: 0;
  height: 100%;
  width: 50%;
  -webkit-clip-path: inset(0 100% 0 0);
          clip-path: inset(0 100% 0 0);
  pointer-events: none;
  -webkit-animation: inactiveImageAnimation 1s forwards ease;
          animation: inactiveImageAnimation 1s forwards ease;
}
.cs-hero.cs-style2 .cs-hero_tab_item:not(:last-child) {
  margin-bottom: 45px;
}
.cs-hero.cs-style2 .cs-hero_tab_item.active h2::before {
  width: 100%;
}
.cs-hero.cs-style2 .cs-hero_tab_item.active .cs-hero_tab_img {
  -webkit-animation: activeImageAnimation 1s forwards ease;
          animation: activeImageAnimation 1s forwards ease;
}
.cs-hero.cs-style2 .cs-hero_social_wrap {
  -webkit-transform: rotate(180deg) translateY(50%);
          transform: rotate(180deg) translateY(50%);
}

.cs-hero.cs-style3 {
  background-color: #000;
  padding: 240px 0 150px;
  position: relative;
  overflow: hidden;
}
.cs-hero.cs-style3 .cs-hero_title {
  font-size: 100px;
  font-weight: 700;
  margin-bottom: 60px;
  line-height: 1.6em;
  color: #fff;
}
.cs-hero.cs-style3 .cs-hero_subtitle {
  font-size: 18px;
  line-height: 1.9em;
  color: #FEFEFE;
  max-width: 650px;
  margin-left: auto;
  margin-bottom: 95px;
}
.cs-hero.cs-style3 .cs-hero_text {
  position: relative;
  z-index: 5;
}
.cs-hero.cs-style3.cs-shape_wrap_1 .cs-shape_1:nth-child(2) {
  top: 16%;
}
.cs-hero.cs-style3.cs-shape_wrap_1 .cs-shape_1:nth-child(3) {
  top: 82%;
  left: 47%;
}
.cs-hero.cs-style3 .cs-circle_1 {
  height: 745px;
  width: 745px;
  border-radius: 50%;
  border: 3px solid rgba(153, 150, 150, 0.2);
  position: absolute;
  top: -30%;
  left: -12%;
}
.cs-hero.cs-style3 .cs-circle_2 {
  height: 626px;
  width: 626px;
  border-radius: 50%;
  background: radial-gradient(50% 50% at 50% 50%, rgba(255, 74, 23, 0.8) 0%, rgba(255, 74, 23, 0) 100%);
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  top: 10%;
  -webkit-animation: 9s cubic-bezier(0.4, 0, 0.2, 1) 0s infinite normal none running light-mode;
          animation: 9s cubic-bezier(0.4, 0, 0.2, 1) 0s infinite normal none running light-mode;
}
.cs-hero.cs-style3 .cs-hero_highlite {
  position: absolute;
  height: 300px;
  width: 300px;
  font-size: 120px;
  font-weight: 700;
  line-height: 1.2em;
  left: 68%;
  bottom: 7%;
}
.cs-hero.cs-style3 .cs-hero_highlite .cs-round_img {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  height: 100%;
  width: 100%;
}
.cs-hero.cs-style3 .cs-hero_highlite .cs-round_img img {
  -webkit-animation: rotate-anim 30s infinite;
          animation: rotate-anim 30s infinite;
}
.cs-hero.cs-style3.cs-type1 .cs-hero_subtitle {
  margin-left: 0;
}
@media (max-width: 1199px) {
  .cs-hero.cs-style3.cs-type1 .cs-hero_highlite {
    display: none;
  }
  .cs-hero.cs-style3.cs-type1 .cs-hero_subtitle {
    margin-left: auto;
    margin-right: auto;
  }
}

.cs-hero.cs-style4,
.cs-hero.cs-style5 {
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 80px 115px;
}
.cs-hero.cs-style4 .cs-swiper_parallax_bg,
.cs-hero.cs-style5 .cs-swiper_parallax_bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
}

.cs-hero.cs-style4 .cs-hero_text {
  position: relative;
  z-index: 10;
  -webkit-clip-path: inset(0 100% 0 0);
          clip-path: inset(0 100% 0 0);
  -webkit-transition: all 0.7s ease;
  transition: all 0.7s ease;
}
.cs-hero.cs-style4 .cs-hero_title {
  margin: 0 0 10px 0;
  font-weight: 700;
  font-size: 100px;
  position: relative;
}
.cs-hero.cs-style4 .cs-hero_title span {
  display: inline-block;
  position: relative;
}
.cs-hero.cs-style4 .cs-hero_title span::before {
  content: "";
  position: absolute;
  height: 7px;
  width: 100%;
  bottom: 8px;
  left: 0;
  background-color: #2DA8A8;
  z-index: -1;
}
.cs-hero.cs-style4 .cs-hero_title:last-child {
  margin-bottom: 0;
}
.cs-hero.cs-style4 .cs-hero_link {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  z-index: 12;
}

.cs-hero.cs-style5 .cs-hero_title {
  margin: 0 0 60px 0;
  font-weight: 700;
  font-size: 100px;
  position: relative;
}
.cs-hero.cs-style5 .cs-hero_text {
  position: relative;
  z-index: 2;
  padding-top: 25px;
  padding-left: 180px;
  top: 100px;
  opacity: 0;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
}

.swiper-slide-active .cs-hero.cs-style4 .cs-hero_text {
  -webkit-clip-path: inset(0 0% 0 0);
          clip-path: inset(0 0% 0 0);
  -webkit-transition-delay: 0.8s;
          transition-delay: 0.8s;
}
.swiper-slide-active .cs-hero.cs-style5 .cs-hero_text {
  top: 0;
  opacity: 1;
  -webkit-transition-delay: 0.45s;
          transition-delay: 0.45s;
}

.cs-swiper_button_prev,
.cs-swiper_button_next {
  position: absolute;
  z-index: 11;
  font-weight: 600;
  color: #fff;
  bottom: 48px;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-swiper_button_prev:hover,
.cs-swiper_button_next:hover {
  color: #2DA8A8;
}

.cs-swiper_button_prev {
  left: 115px;
}
.cs-swiper_button_prev svg {
  margin-right: 13px;
}

.cs-swiper_button_next {
  right: 115px;
}
.cs-swiper_button_next svg {
  margin-left: 13px;
}

@-webkit-keyframes UpAndDown {
  0%, 100% {
    top: 30%;
  }
  50% {
    top: 70%;
    opacity: 0.5;
    -webkit-transform: translate(-50%, -50%) scale(0.8);
            transform: translate(-50%, -50%) scale(0.8);
  }
}

@keyframes UpAndDown {
  0%, 100% {
    top: 30%;
  }
  50% {
    top: 70%;
    opacity: 0.5;
    -webkit-transform: translate(-50%, -50%) scale(0.8);
            transform: translate(-50%, -50%) scale(0.8);
  }
}
@-webkit-keyframes inactiveImageAnimation {
  0% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
  100% {
    -webkit-clip-path: inset(0 0 0 100%);
            clip-path: inset(0 0 0 100%);
  }
}
@keyframes inactiveImageAnimation {
  0% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
  100% {
    -webkit-clip-path: inset(0 0 0 100%);
            clip-path: inset(0 0 0 100%);
  }
}
@-webkit-keyframes activeImageAnimation {
  0% {
    -webkit-clip-path: inset(0 100% 0 0);
            clip-path: inset(0 100% 0 0);
  }
  100% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
}
@keyframes activeImageAnimation {
  0% {
    -webkit-clip-path: inset(0 100% 0 0);
            clip-path: inset(0 100% 0 0);
  }
  100% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
}
@media screen and (max-width: 1920px) {
  .cs-hero.cs-style2 {
    height: 1080px;
  }
}
@media screen and (max-width: 1540px) {
  .cs-hero.cs-style1 {
    padding-top: 220px;
    min-height: 960px;
  }
  .cs-hero.cs-style2 {
    height: 864px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item h2 {
    font-size: 100px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item:not(:last-child) {
    margin-bottom: 15px;
  }
  .cs-hero.cs-style3 .cs-hero_title {
    font-size: 90px;
    line-height: 1.4em;
  }
  .cs-hero.cs-style1.cs-type2 {
    height: 680px;
  }
  .cs-hero.cs-style1.cs-type2 .cs-hero_title {
    font-size: 100px;
  }
}
@media screen and (max-width: 1400px) {
  .cs-hero.cs-style2 {
    height: 900px;
  }
  .cs-hero.cs-style1 {
    padding-top: 200px;
    min-height: 880px;
  }
  .cs-hero.cs-style1 .cs-hero_title {
    font-size: 100px;
  }
  .cs-hero.cs-style3 .cs-hero_title {
    font-size: 80px;
    line-height: 1.3em;
    margin-bottom: 40px;
  }
  .cs-hero.cs-style2 {
    height: 768px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item h2 {
    font-size: 80px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item:not(:last-child) {
    margin-bottom: 15px;
  }
  .cs-hero.cs-style1.cs-type2 .cs-hero_title {
    font-size: 80px;
  }
  .cs-hero.cs-style1.cs-type2 {
    height: 600px;
    min-height: 500px;
  }
  .cs-hero.cs-style1.cs-type2 .cs-hero_title {
    font-size: 70px;
  }
  .cs-hero.cs-style4 .cs-hero_title,
  .cs-hero.cs-style5 .cs-hero_title {
    font-size: 80px;
  }
}
@media screen and (max-width: 1280px) {
  .cs-hero.cs-style2 {
    height: 800px;
  }
}
@media screen and (max-width: 1199px) {
  .cs-hero.cs-style1 {
    min-height: 850px;
  }
  .cs-hero.cs-style1 .cs-hero_title {
    font-size: 80px;
  }
  .cs-hero.cs-style1 .cs-hero_subtitle {
    font-size: 16px;
  }
  .cs-hero.cs-style3 .cs-hero_title {
    font-size: 60px;
  }
  .cs-hero.cs-style3 .cs-hero_subtitle {
    font-size: 16px;
    margin-left: auto;
    margin-right: auto;
  }
  .cs-hero.cs-style1 .cs-hero_social_wrap,
  .cs-hero.cs-style2 .cs-hero_social_wrap,
  .cs-hero.cs-style3 .cs-hero_social_wrap,
  .cs-swiper_parallax_slider_wrap .cs-hero_social_wrap,
  .cs-fullscreen_swiper_wrap .cs-hero_social_wrap {
    display: none;
  }
  .cs-hero.cs-style2 {
    height: 850px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item h2 {
    font-size: 80px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item:not(:last-child) {
    margin-bottom: 15px;
  }
  .cs-hero.cs-style3 .cs-hero_title {
    font-size: 50px;
    margin-bottom: 30px;
  }
  .cs-hero.cs-style3 .text-end,
  .cs-hero.cs-style3 .cs-hero_text {
    text-align: center !important;
  }
  .cs-hero.cs-style3 .cs-hero_subtitle {
    font-size: 16px;
    margin-bottom: 40px;
  }
  .cs-hero.cs-style1.cs-type2 {
    padding-left: 15px;
    padding-right: 15px;
  }
  .cs-hero.cs-style1.cs-type2 .cs-hero_bg {
    left: 12px;
    right: 12px;
  }
  .cs-hero.cs-style4 {
    padding: 80px 15px;
  }
  .cs-hero.cs-style4 .cs-hero_title {
    font-size: 60px;
  }
  .cs-hero.cs-style4 .cs-hero_title span::before {
    height: 5px;
    bottom: 5px;
  }
  .cs-hero.cs-style5 {
    padding: 80px 15px 80px 150px;
  }
  .cs-hero.cs-style5 .cs-hero_title {
    font-size: 60px;
    margin: 0 0 45px 0;
  }
  .cs-hero.cs-style5 .cs-btn.cs-style1.cs-type1 {
    padding: 10px 26px;
  }
  .cs-swiper_button_prev,
  .cs-swiper_button_next {
    bottom: 25px;
  }
  .cs-hero.cs-style1.cs-type2 {
    margin-top: 80px;
  }
  .cs-swiper_button_prev {
    left: 15px;
  }
  .cs-swiper_button_next {
    right: 15px;
  }
  .cs-hero.cs-style5 .cs-hero_text {
    padding-top: 0px;
    padding-left: 0px;
  }
}
@media screen and (max-width: 991px) {
  .cs-hero.cs-style1 {
    padding-top: 60px;
    padding-bottom: 260px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    min-height: 680px;
  }
  .cs-hero.cs-style1 .cs-hero_info {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
  .cs-hero.cs-style1 .cs-hero_title {
    font-size: 56px;
    margin-bottom: 20px;
  }
  .cs-hero.cs-style1 .cs-hero_subtitle {
    margin-bottom: 24px;
    max-width: 500px;
  }
  .cs-hero.cs-style1 .cs-hero_info > div {
    width: 100%;
  }
  .cs-hero.cs-style1 .cs-down_btn {
    bottom: 220px;
  }
  .cs-hero.cs-style1.cs-type1 .cs-hero_subtitle {
    margin-left: auto;
    margin-right: auto;
  }
  .cs-hero.cs-style2 {
    height: 700px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item h2 {
    font-size: 56px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item:not(:last-child) {
    margin-bottom: 15px;
  }
  .cs-hero.cs-style3 {
    padding: 160px 0 120px;
  }
  .cs-hero.cs-style1.cs-type2 .cs-hero_title {
    font-size: 50px;
  }
  .cs-hero.cs-style5 {
    padding: 80px 15px 80px 100px;
  }
}
@media screen and (max-width: 575px) {
  .cs-hero.cs-style1 .cs-hero_title {
    font-size: 42px;
  }
  .cs-hero.cs-style1 .cs-hero_title br {
    display: none;
  }
  .cs-hero.cs-style2 {
    height: initial;
    min-height: 100vh;
    padding: 150px 0 90px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item h2 {
    font-size: 42px;
  }
  .cs-hero.cs-style2 .cs-hero_tab_item .cs-hero_tab_img {
    width: 100%;
    opacity: 0.8;
  }
  .cs-hero.cs-style3 .cs-hero_title {
    font-size: 38px;
    margin-bottom: 25px;
  }
  .cs-hero.cs-style3 .cs-hero_subtitle {
    margin-bottom: 35px;
  }
  .cs-hero.cs-style1.cs-type2 .cs-hero_title {
    font-size: 40px;
  }
  .cs-hero.cs-style1.cs-type2 {
    height: 500px;
    padding-bottom: 40px;
  }
  .cs-hero.cs-style4 {
    padding: 80px 15px;
  }
  .cs-hero.cs-style4 .cs-hero_title {
    font-size: 38px;
  }
  .cs-hero.cs-style4 .cs-hero_title span::before {
    height: 3px;
    bottom: 4px;
  }
  .cs-hero.cs-style5 {
    padding: 80px 15px;
  }
  .cs-hero.cs-style5 .cs-hero_title {
    font-size: 40px;
    margin: 0 0 35px 0;
  }
  .cs-hero.cs-style5 .cs-btn.cs-style1.cs-type1 {
    padding: 9px 26px;
  }
  .cs-swiper_button_prev {
    left: 15px;
  }
  .cs-swiper_button_next {
    right: 15px;
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1490px) {
  .cs-hero.cs-style1:not(.cs-type2) .cs-hero_social_wrap.cs-left_side,
  .cs-hero.cs-style2 .cs-hero_social_wrap.cs-left_side,
  .cs-hero.cs-style3 .cs-hero_social_wrap.cs-left_side {
    left: 20px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1300px) {
  .cs-hero.cs-style1:not(.cs-type2) .cs-hero_social_wrap.cs-left_side,
  .cs-hero.cs-style2 .cs-hero_social_wrap.cs-left_side,
  .cs-hero.cs-style3 .cs-hero_social_wrap.cs-left_side {
    left: 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1150px) {
  .cs-hero.cs-style1 {
    height: initial;
    min-height: initial;
    padding-top: 200px;
    padding-bottom: 350px;
  }
  .cs-hero.cs-style1 .cs-down_btn {
    bottom: 220px;
  }
}
/*--------------------------------------------------------------
  12. Iconbox
----------------------------------------------------------------*/
.cs-iconbox.cs-style1 {
  padding: 40px;
}
.cs-iconbox.cs-style1 .cs-iconbox_icon {
  padding: 4px 10px;
  display: inline-block;
  background: -webkit-gradient(linear, left top, right top, from(rgba(255, 74, 23, 0.3)), color-stop(95.61%, transparent));
  background: linear-gradient(90deg, rgba(255, 74, 23, 0.3) 0%, transparent 95.61%);
}
.cs-iconbox.cs-style1.cs-type1 .cs-iconbox_icon {
  padding: 0;
  background: transparent;
}

.cs-iconbox.cs-style2 {
  max-width: 350px;
  margin: auto;
}
.cs-iconbox.cs-style2 .cs-iconbox_icon {
  margin-bottom: 25px;
}
.cs-iconbox.cs-style2 .cs-iconbox_title {
  font-size: 30px;
  margin-bottom: 20px;
}
.cs-iconbox.cs-style2 .cs-iconbox_subtitle {
  line-height: 1.75em;
}

.cs-iconbox_3_list {
  position: relative;
  padding-left: 550px;
  min-height: 640px;
}
.cs-iconbox_3_list > *:not(:last-child) {
  border-bottom: 1px solid #4d4d4d;
}
.cs-iconbox_3_list .cs-image_layer {
  position: absolute;
  left: 0;
  top: 25px;
  pointer-events: none;
  max-width: 416px;
  height: 600px;
}
.cs-iconbox_3_list .cs-image_layer .cs-image_layer_in {
  height: 100%;
  width: 100%;
}
.cs-iconbox_3_list .cs-image_layer img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  position: relative;
  -webkit-clip-path: inset(0 100% 0 0);
          clip-path: inset(0 100% 0 0);
  -webkit-animation: inactiveImageAnimation1 0.6s forwards ease;
          animation: inactiveImageAnimation1 0.6s forwards ease;
}
.cs-iconbox_3_list .cs-hover_tab.active .cs-image_layer img {
  -webkit-animation: activeImageAnimation1 0.6s forwards ease;
          animation: activeImageAnimation1 0.6s forwards ease;
}
.cs-iconbox_3_list .cs-hover_tab.active .cs-iconbox_icon {
  color: #fff;
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}
.cs-iconbox_3_list.cs-style1 {
  padding-left: 0;
  min-height: initial;
}
.cs-iconbox_3_list.cs-style1 .cs-iconbox.cs-style3 .cs-iconbox_in {
  max-width: 560px;
}
@media (max-width: 1199px) {
  .cs-iconbox_3_list.cs-style1 {
    padding: 0;
  }
}

.cs-iconbox.cs-style3 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-bottom: 25px;
  padding-top: 25px;
  color: rgba(254, 254, 254, 0.7);
}
.cs-iconbox.cs-style3 .cs-iconbox_in {
  margin-right: 30px;
  max-width: 480px;
}
.cs-iconbox.cs-style3 .cs-iconbox_icon {
  color: #999696;
  border: 2px solid #999696;
  height: 80px;
  width: 80px;
  border-radius: 50%;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-iconbox.cs-style3 .cs-iconbox_icon:hover {
  color: #fff;
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}
.cs-iconbox.cs-style3 .cs-iconbox_title {
  font-size: 30px;
  margin-bottom: 15px;
}
.cs-iconbox.cs-style3 .cs-iconbox_subtitle {
  line-height: 1.75em;
}
.cs-iconbox.cs-style3:hover .cs-iconbox_icon {
  color: #fff;
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}

@-webkit-keyframes inactiveImageAnimation1 {
  0% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
  100% {
    -webkit-clip-path: inset(0 100% 0 0);
            clip-path: inset(0 100% 0 0);
  }
}

@keyframes inactiveImageAnimation1 {
  0% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
  100% {
    -webkit-clip-path: inset(0 100% 0 0);
            clip-path: inset(0 100% 0 0);
  }
}
@-webkit-keyframes activeImageAnimation1 {
  0% {
    -webkit-clip-path: inset(0 0 0 100%);
            clip-path: inset(0 0 0 100%);
  }
  100% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
}
@keyframes activeImageAnimation1 {
  0% {
    -webkit-clip-path: inset(0 0 0 100%);
            clip-path: inset(0 0 0 100%);
  }
  100% {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
}
@media screen and (max-width: 1199px) {
  .cs-iconbox_3_list {
    padding-left: 460px;
  }
}
@media screen and (max-width: 991px) {
  .cs-iconbox.cs-style2 {
    max-width: 100%;
  }
  .cs-iconbox.cs-style2 .cs-iconbox_title {
    font-size: 26px;
    margin-bottom: 10px;
    margin-bottom: 20px;
  }
  .cs-iconbox.cs-style3 .cs-iconbox_title {
    font-size: 26px;
    margin-bottom: 10px;
  }
  .cs-iconbox_3_list {
    padding-left: 0;
    padding-top: 650px;
  }
  .cs-iconbox_3_list .cs-image_layer {
    max-width: 100%;
    width: 100%;
  }
}
@media screen and (max-width: 575px) {
  .cs-iconbox.cs-style1 {
    padding: 30px;
  }
  .cs-iconbox.cs-style3 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
  .cs-iconbox.cs-style3 .cs-iconbox_icon {
    position: initial;
    -webkit-transform: initial;
            transform: initial;
    margin-bottom: 20px;
    height: 60px;
    width: 60px;
  }
  .cs-iconbox.cs-style3 .cs-iconbox_icon svg {
    max-height: 22px;
  }
}
/*--------------------------------------------------------------
  13. Card
----------------------------------------------------------------*/
.cs-card.cs-style1 {
  position: relative;
  border-radius: 15px;
  display: block;
}
.cs-card.cs-style1:hover {
  -webkit-filter: drop-shadow(0px 0px 30px rgba(255, 74, 23, 0.5));
          filter: drop-shadow(0px 0px 30px rgba(255, 74, 23, 0.5));
}
.cs-card.cs-style1 img {
  width: 100%;
  border-radius: inherit;
}
.cs-card.cs-style1 .cs-card_overlay {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: inherit;
  background: #000000;
  opacity: 0.5;
}
.cs-card.cs-style1 .cs-card_info {
  position: absolute;
  padding: 45px 25px 0;
  top: 0;
  left: 0;
}
.cs-card.cs-style1 .cs-card_info span {
  display: block;
  height: 12px;
  width: 12px;
  border-radius: 50%;
  margin-bottom: 10px;
}
.cs-card.cs-style1 .cs-card_title {
  font-size: 22px;
  margin: 0;
  line-height: 1.5em;
}

@media screen and (max-width: 1400px) {
  .cs-card.cs-style1 .cs-card_title {
    font-size: 20px;
  }
  .cs-card.cs-style1 .cs-card_info {
    padding: 40px 18px 0;
  }
}
@media screen and (max-width: 1199px) {
  .cs-card.cs-style1 .cs-card_title {
    font-size: 24px;
  }
  .cs-card.cs-style1 .cs-card_info {
    padding: 40px 30px;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    width: 100%;
  }
}
/*--------------------------------------------------------------
  14. Posts
----------------------------------------------------------------*/
.cs-post_wrap {
  width: 54vw;
}

.cs-post.cs-style1 {
  width: 100%;
  border-radius: 15px;
  overflow: hidden;
  position: relative;
}
.cs-post.cs-style1 .cs-post_thumb {
  position: relative;
  display: block;
}
.cs-post.cs-style1 .cs-post_thumb img {
  width: 100%;
}
.cs-post.cs-style1 .cs-post_overlay {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background: -webkit-gradient(linear, left bottom, left top, from(#000000), to(rgba(77, 77, 77, 0)));
  background: linear-gradient(360deg, #000000 0%, rgba(77, 77, 77, 0) 100%);
}
.cs-post.cs-style1 .cs-posted_by {
  font-size: 14px;
  line-height: 1.6em;
  margin-bottom: 10px;
}
.cs-post.cs-style1 .cs-post_title {
  font-size: 22px;
  margin-bottom: 0;
  line-height: 1.45em;
}
.cs-post.cs-style1 .cs-post_info {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 35px 25px;
}

.cs-slider .cs-post.cs-style1 {
  max-width: 420px;
}

.cs-post.cs-style2 .cs-post_thumb {
  display: block;
  overflow: hidden;
  position: relative;
  margin-bottom: 45px;
}
.cs-post.cs-style2 .cs-post_thumb::after {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  z-index: 2;
  background-color: rgba(22, 22, 22, 0.5);
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-post.cs-style2 .cs-post_thumb img {
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
.cs-post.cs-style2 a.cs-post_thumb:hover::after {
  opacity: 1;
}
.cs-post.cs-style2 a.cs-post_thumb:hover img {
  -webkit-transform: scale(1.07);
          transform: scale(1.07);
}
.cs-post.cs-style2 .cs-post_meta {
  font-size: 18px;
  margin-bottom: 15px;
}
.cs-post.cs-style2 .cs-post_title {
  font-size: 38px;
  margin-bottom: 30px;
}
.cs-post.cs-style2 .cs-post_sub_title {
  margin-bottom: 35px;
  line-height: 1.75em;
}
.cs-post.cs-style2 p {
  margin-bottom: 45px;
  line-height: 1.75em;
}
.cs-post.cs-style2 h3 {
  font-size: 30px;
  margin-bottom: 25px;
}
.cs-post.cs-style2 blockquote {
  font-size: 18px;
  line-height: 1.9em;
  border-left: 5px solid #2DA8A8;
  background-color: #000;
  padding: 40px 35px;
  font-weight: 600;
  color: #FEFEFE;
  margin-bottom: 45px;
}
.cs-post.cs-style2 blockquote small {
  display: block;
  position: relative;
  color: rgba(254, 254, 254, 0.7);
  font-size: 16px;
  line-height: 1.9em;
  font-style: initial;
  font-weight: 400;
  margin-top: 15px;
  padding-left: 35px;
}
.cs-post.cs-style2 blockquote small::before {
  content: "";
  height: 2px;
  width: 20px;
  border-radius: 2px;
  position: absolute;
  left: 0;
  top: 50%;
  background-color: #FEFEFE;
}

.cs-post_3_list li:not(:last-child) {
  border-bottom: 2px solid #E4E4E4;
  padding-bottom: 35px;
  margin-bottom: 26px;
}

.cs-post.cs-style3 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.cs-post.cs-style3 .cs-post_title {
  font-size: 30px;
  margin-bottom: 20px;
}
.cs-post.cs-style3 .cs-post_meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-top: 30px;
}
.cs-post.cs-style3 .cs-post_avatar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-post.cs-style3 .cs-post_avatar_img {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  max-width: 50px;
  border-radius: 5px;
  margin-right: 18px;
}
.cs-post.cs-style3 .cs-post_avatar_img img {
  width: 100%;
  border-radius: inherit;
}
.cs-post.cs-style3 .cs-post_avatar_info h4 {
  font-size: 16px;
  margin-bottom: 0;
}
.cs-post.cs-style3 .cs-post_avatar_info p {
  margin: 0;
  font-size: 14px;
  line-height: 1.6em;
}
.cs-post.cs-style3 .cs-text_btn {
  color: #2DA8A8;
}
.cs-post.cs-style3 .cs-posted_by {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 105px;
  margin-top: 4px;
}
.cs-post.cs-style3 .cs-posted_by > span:first-child {
  color: #FEFEFE;
  font-size: 30px;
  font-weight: 600;
  margin-right: 12px;
}
.cs-post.cs-style3 .cs-posted_by > span:last-child {
  font-size: 14px;
  line-height: 18px;
}

@media screen and (max-width: 1550px) {
  .cs-slider .cs-post.cs-style1 {
    max-width: 360px;
  }
  .cs-shape_wrap_4 .cs-shape_4:nth-child(1) {
    left: -3%;
  }
}
@media screen and (max-width: 1550px) {
  .cs-slider .cs-post.cs-style1 {
    max-width: 360px;
  }
  .cs-shape_wrap_4 .cs-shape_4:nth-child(1) {
    left: -3%;
  }
}
@media screen and (max-width: 1550px) {
  .cs-post.cs-style1 .cs-post_title {
    font-size: 20px;
  }
}
@media screen and (max-width: 1199px) {
  .cs-post_wrap {
    width: 100%;
  }
}
@media screen and (max-width: 991px) {
  .cs-post.cs-style2 .cs-post_title {
    font-size: 30px;
    margin-bottom: 15px;
  }
  .cs-post.cs-style2 .cs-post_meta {
    font-size: 16px;
    margin-bottom: 10px;
  }
  .cs-post.cs-style2 .cs-post_sub_title {
    margin-bottom: 20px;
  }
  .cs-post.cs-style2 .cs-post_thumb {
    margin-bottom: 25px;
  }
  .cs-post.cs-style2 blockquote {
    font-size: 16px;
    border-width: 3px;
    padding: 30px 25px;
  }
  .cs-post.cs-style3 .cs-post_title {
    font-size: 24px;
    margin-bottom: 20px;
  }
}
@media screen and (max-width: 575px) {
  .cs-slider .cs-post.cs-style1 {
    max-width: 320px;
  }
  .cs-post.cs-style3 {
    display: block;
  }
  .cs-post.cs-style3 .cs-posted_by {
    margin-top: 0;
    margin-bottom: 10px;
  }
  .cs-post.cs-style3 .cs-post_meta {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
    margin-top: 20px;
  }
  .cs-post.cs-style3 .cs-post_avatar {
    margin-top: 25px;
  }
}
@media screen and (max-width: 350px) {
  .cs-slider .cs-post.cs-style1 {
    max-width: 300px;
  }
}
/*--------------------------------------------------------------
  15. Team
----------------------------------------------------------------*/
.cs-team.cs-style1 {
  overflow: hidden;
  position: relative;
}
.cs-team.cs-style1 .cs-member_thumb {
  border-radius: 15px;
  position: relative;
  overflow: inherit;
  overflow: hidden;
}
.cs-team.cs-style1 .cs-member_thumb img {
  width: 100%;
  position: relative;
  z-index: 1;
  border-radius: inherit;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
}
.cs-team.cs-style1 .cs-member_overlay {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  border-radius: inherit;
  background: -webkit-gradient(linear, left bottom, left top, from(#000000), to(rgba(77, 77, 77, 0)));
  background: linear-gradient(360deg, #000000 0%, rgba(77, 77, 77, 0) 100%);
}
.cs-team.cs-style1 .cs-member_social svg {
  height: 20px;
  width: 20px;
}
.cs-team.cs-style1 .cs-member_name {
  font-size: 22px;
  margin-bottom: 6px;
}
.cs-team.cs-style1 .cs-member_info {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  z-index: 3;
  padding: 30px 25px;
}
.cs-team.cs-style1 .cs-member_social {
  position: absolute;
  z-index: 2;
  left: 13px;
  top: 50px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}
.cs-team.cs-style1 .cs-member_social a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 12px;
  -webkit-transform: scale(0) rotate(45deg);
          transform: scale(0) rotate(45deg);
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-team.cs-style1:hover .cs-member_social a {
  -webkit-transform: scale(1) rotate(0deg);
          transform: scale(1) rotate(0deg);
  opacity: 1;
}
.cs-team.cs-style1:hover .cs-member_thumb img {
  -webkit-transform: scale(1.06) translateY(8px);
          transform: scale(1.06) translateY(8px);
}

@media screen and (max-width: 1380px) {
  .cs-team.cs-style1 .cs-member_name {
    font-size: 20px;
  }
}
/*--------------------------------------------------------------
  16. Imagebox
----------------------------------------------------------------*/
.cs-image_box.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  height: 300px;
  border: 1px solid rgba(255, 74, 23, 0.1);
  padding: 20px 15px 5px;
  position: relative;
  margin-top: 5px;
}
.cs-image_box.cs-style1::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  left: -5px;
  top: -5px;
  background-color: rgba(255, 74, 23, 0.1);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-image_box.cs-style1 img {
  max-height: 100%;
}
.cs-image_box.cs-style1:hover {
  border-color: rgba(255, 74, 23, 0.2);
}
.cs-image_box.cs-style1:hover::before {
  background-color: rgba(255, 74, 23, 0.2);
  left: 0;
  top: 0;
}

.cs-image_box.cs-style2 {
  display: block;
  background: linear-gradient(108.18deg, #EA4C89 -2.02%, #4D44C6 100%);
  padding: 1px;
  border-radius: 10px;
}
.cs-image_box.cs-style2 img {
  max-height: 100%;
}
.cs-image_box.cs-style2 .cs-image_box_in {
  border-radius: inherit;
  padding: 10px;
}
.cs-image_box.cs-style2 .cs-image_box_img {
  background: #E94875;
  border-radius: inherit;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 290px;
}

@media screen and (max-width: 575px) {
  .cs-image_box.cs-style1 {
    height: 200px;
    padding: 20px 10px 5px;
  }
  .cs-image_box.cs-style2 .cs-image_box_img {
    height: 190px;
  }
}
/*--------------------------------------------------------------
  17. CTA
----------------------------------------------------------------*/
.cs-cta.cs-style1 {
  padding: 90px 30px;
  border-radius: 15px;
}
.cs-cta.cs-style1 .cs-cta_in {
  position: relative;
  z-index: 2;
}
.cs-cta.cs-style1 .cs-cta_title {
  font-weight: 600;
  font-size: 50px;
}

@media screen and (max-width: 1300px) {
  .cs-cta.cs-style1 .cs-cta_title {
    font-size: 42px;
  }
}
@media screen and (max-width: 991px) {
  .cs-cta.cs-style1 {
    padding: 70px 30px;
    border-radius: 15px;
  }
  .cs-cta.cs-style1 .cs-cta_title {
    font-size: 36px;
  }
  .cs-cta.cs-style1 .cs-cta_title br {
    display: none;
  }
}
@media screen and (max-width: 767px) {
  .cs-cta.cs-style1 br {
    display: none;
  }
}
@media screen and (max-width: 575px) {
  .cs-cta.cs-style1 {
    padding: 70px 20px;
  }
  .cs-cta.cs-style1 .cs-cta_title {
    font-size: 28px;
  }
}
/*--------------------------------------------------------------
  18. Timeline
----------------------------------------------------------------*/
.cs-time_line.cs-style1 h3 {
  font-size: 30px;
  margin-bottom: 15px;
}
.cs-time_line.cs-style1 h2 {
  font-size: 22px;
  margin-bottom: 10px;
}
.cs-time_line.cs-style1 p {
  margin-bottom: 7px;
}
.cs-time_line.cs-style1 p:last-child {
  margin-bottom: 0;
}

@media screen and (max-width: 1380px) {
  .cs-time_line.cs-style1 h3 {
    font-size: 26px;
  }
  .cs-time_line.cs-style1 h2 {
    font-size: 20px;
  }
}
/*--------------------------------------------------------------
  19. Testimonial
----------------------------------------------------------------*/
.cs-testimonial.cs-style1 {
  position: relative;
  padding-left: 70px;
  padding-top: 70px;
}
.cs-testimonial.cs-style1 .cs-testimonial_quote {
  position: absolute;
  top: 0;
  left: 0;
}
.cs-testimonial.cs-style1 .cs-testimonial_text {
  font-size: 22px;
  line-height: 1.5em;
  font-weight: 600;
  color: #FEFEFE;
}
.cs-testimonial.cs-style1 .cs-rating {
  margin-top: 24px;
}
.cs-testimonial.cs-style1 .cs-testimonial_avatar_name {
  font-size: 22px;
  margin-bottom: 0;
  margin-top: 70px;
}
.cs-testimonial.cs-style1 .cs-testimonial_avatar_designation {
  margin-top: 10px;
}
.cs-testimonial.cs-style1 .cs-testimonial_avatar_designation::before {
  content: "";
  height: 2px;
  width: 20px;
  background-color: #D9D9D9;
  display: inline-block;
  position: relative;
  top: -4px;
  border-radius: 3px;
  margin-right: 10px;
}

@media screen and (max-width: 1380px) {
  .cs-testimonial.cs-style1 .cs-testimonial_text,
  .cs-testimonial.cs-style1 .cs-testimonial_avatar_name {
    font-size: 20px;
  }
}
@media screen and (max-width: 991px) {
  .cs-testimonial.cs-style1 {
    padding-left: 20px;
    padding-top: 60px;
  }
  .cs-testimonial.cs-style1 .cs-testimonial_avatar_name {
    margin-top: 30px;
  }
}
/*--------------------------------------------------------------
  20. Portfolio
----------------------------------------------------------------*/
.cs-portfolio_1_heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.cs-portfolio_1_heading .cs-isotop_filter {
  margin-bottom: 15px;
}

.cs-portfolio.cs-style1 {
  border-radius: 15px;
  overflow: hidden;
  position: relative;
  height: 500px;
  display: block;
  position: relative;
}
.cs-portfolio.cs-style1 .cs-portfolio_hover {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  opacity: 0;
  background-color: rgba(22, 22, 22, 0.4);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  z-index: 2;
}
.cs-portfolio.cs-style1 .cs-plus {
  position: absolute;
  height: 60px;
  width: 60px;
  left: 50%;
  z-index: 1;
  top: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%) scale(0.4);
          transform: translate(-50%, -50%) scale(0.4);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-portfolio.cs-style1 .cs-plus::before, .cs-portfolio.cs-style1 .cs-plus::after {
  content: "";
  position: absolute;
  height: 4px;
  width: 100%;
  background-color: #fff;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.cs-portfolio.cs-style1 .cs-plus::before {
  -webkit-transform: translate(-50%, -50%) rotate(90deg);
          transform: translate(-50%, -50%) rotate(90deg);
}
.cs-portfolio.cs-style1:hover .cs-portfolio_hover {
  opacity: 1;
}
.cs-portfolio.cs-style1:hover .cs-plus {
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
}
.cs-portfolio.cs-style1 .cs-portfolio_bg {
  height: 100%;
  width: 100%;
  border-radius: inherit;
}
.cs-portfolio.cs-style1 .cs-portfolio_info {
  height: 300px;
  width: 300px;
  border-radius: 50%;
  padding: 105px 20px 80px 65px;
  bottom: -60px;
  left: -40px;
  position: absolute;
  z-index: 2;
}
.cs-portfolio.cs-style1 .cs-portfolio_info_bg {
  position: absolute;
  height: 100%;
  width: 100%;
  border-radius: inherit;
  left: 0;
  top: 0;
}
.cs-portfolio.cs-style1 .cs-portfolio_title {
  font-size: 22px;
  margin-bottom: 5px;
  position: relative;
  z-index: 2;
}
.cs-portfolio.cs-style1 .cs-portfolio_subtitle {
  display: inline-block;
  position: relative;
  z-index: 2;
  padding-right: 30px;
  color: rgba(254, 254, 254, 0.7);
}
.cs-portfolio.cs-style1 .cs-portfolio_subtitle::after {
  content: "";
  height: 1px;
  width: 20px;
  background-color: currentColor;
  border-radius: 3px;
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: 2px;
}
.cs-portfolio.cs-style1.cs-type1 {
  height: 465px;
}
.cs-portfolio.cs-style1.cs-type1 .cs-portfolio_info_bg {
  left: -50px;
  top: 50px;
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-portfolio.cs-style1.cs-type1:hover .cs-portfolio_info_bg {
  left: 0px;
  top: 0px;
  opacity: 1;
}
.cs-portfolio.cs-style1.cs-type1 img, .cs-portfolio.cs-style1.cs-type2 img {
  width: 100%;
}
.cs-portfolio.cs-style1.cs-type1 .cs-portfolio_title,
.cs-portfolio.cs-style1.cs-type1 .cs-portfolio_subtitle, .cs-portfolio.cs-style1.cs-type2 .cs-portfolio_title,
.cs-portfolio.cs-style1.cs-type2 .cs-portfolio_subtitle {
  top: 15px;
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs-portfolio.cs-style1.cs-type1:hover .cs-portfolio_title, .cs-portfolio.cs-style1.cs-type2:hover .cs-portfolio_title {
  top: 0px;
  opacity: 1;
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}
.cs-portfolio.cs-style1.cs-type1:hover .cs-portfolio_subtitle, .cs-portfolio.cs-style1.cs-type2:hover .cs-portfolio_subtitle {
  top: 0px;
  opacity: 1;
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}
.cs-portfolio.cs-style1.cs-type2 {
  border-radius: 5px;
}
.cs-portfolio.cs-style1.cs-type2 .cs-portfolio_hover {
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 74, 23, 0.7)), to(rgba(0, 0, 0, 0.8)));
  background: linear-gradient(180deg, rgba(255, 74, 23, 0.7) 0%, rgba(0, 0, 0, 0.8) 100%);
}
.cs-portfolio.cs-style1.cs-type2 .cs-portfolio_info_bg {
  display: none;
}
.cs-portfolio.cs-style1.cs-type2 .cs-portfolio_info {
  height: 100%;
  width: 100%;
  border-radius: 0%;
  padding: 30px 20px 30px 25px;
  bottom: 0;
  left: 0;
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
.cs-portfolio.cs-style1.cs-lightbox_item:hover {
  cursor: -webkit-zoom-in;
  cursor: zoom-in;
}
.cs-portfolio.cs-style1.cs-size1 {
  height: 299px;
}
.cs-portfolio.cs-style1.cs-size2 {
  height: 622px;
}
.cs-portfolio.cs-style1.cs-size3 {
  height: 600px;
}

.cs-portfolio.cs-style2 {
  position: relative;
  max-width: 1920px;
  margin: auto;
}
.cs-portfolio.cs-style2 .cs-gradient_shape {
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  position: absolute;
  height: 600px;
  width: 600px;
  border-radius: 50%;
  background: radial-gradient(50% 50% at 50% 50%, rgba(41, 0, 208, 0.2) 0%, rgba(24, 24, 24, 0.2) 100%);
  -webkit-filter: blur(50px);
          filter: blur(50px);
}
.cs-portfolio.cs-style2 .cs-portfolio_img.active .cs-shine_hover_1::before {
  -webkit-animation: shine 1.3s;
          animation: shine 1.3s;
}
.cs-portfolio.cs-style2 .cs-section_heading.cs-style1 {
  position: relative;
  z-index: 2;
}
.cs-portfolio.cs-style2 .cs-portfolio_img_title {
  margin: 0;
  position: absolute;
  z-index: 2;
  top: 50%;
  -webkit-writing-mode: vertical-lr;
      -ms-writing-mode: tb-lr;
          writing-mode: vertical-lr;
  -webkit-transform: rotate(180deg) translateY(50%);
          transform: rotate(180deg) translateY(50%);
  left: calc((100vw - 1300px) / 2 / 2);
  margin: 0 0 0 -30px;
  white-space: nowrap;
  letter-spacing: 0.05em;
  color: transparent;
  -webkit-text-stroke: 2px #2DA8A8;
  font-size: 50px;
}
.cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img_title {
  left: initial;
  right: calc((100vw - 1300px) / 2 / 2);
  margin: 0 -30px 0 0;
}
.cs-portfolio.cs-style2.cs-type1 .cs-gradient_shape {
  right: initial;
  left: 0;
}

@media screen and (max-width: 1540px) {
  .cs-portfolio.cs-style1 {
    height: 450px;
  }
  .cs-portfolio.cs-style1.cs-size3 {
    height: 500px;
  }
}
@media screen and (max-width: 1400px) {
  .cs-portfolio.cs-style2 .cs-portfolio_img_title {
    left: calc((100vw - 1120px) / 2 / 2);
    font-size: 40px;
    margin: 0 0 0 -27px;
  }
  .cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img_title {
    left: initial;
    right: calc((100vw - 1120px) / 2 / 2);
    margin: 0 -27px 0 0;
  }
}
@media screen and (max-width: 1380px) {
  .cs-portfolio.cs-style1 .cs-portfolio_title {
    font-size: 20px;
  }
}
@media screen and (max-width: 1199px) {
  .cs-portfolio.cs-style2 .cs-portfolio_img_title {
    left: calc((100vw - 940px) / 2 / 2);
  }
  .cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img_title {
    left: initial;
    right: calc((100vw - 940px) / 2 / 2);
  }
}
@media screen and (max-width: 1080px) {
  .cs-portfolio.cs-style2 .cs-portfolio_img {
    padding-left: 60px;
  }
  .cs-portfolio.cs-style2 .cs-portfolio_img_title {
    margin-left: 0;
  }
  .cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img {
    padding-right: 60px;
  }
  .cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img_title {
    margin-right: 0;
  }
}
@media screen and (max-width: 991px) {
  .cs-portfolio.cs-style1 {
    height: 380px;
  }
  .cs-portfolio.cs-style2 .cs-portfolio_img,
  .cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img {
    position: relative;
    padding-left: 70px;
    padding-right: 0;
  }
  .cs-portfolio.cs-style2 .cs-portfolio_img_title,
  .cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img_title {
    left: 30px;
    right: initial;
    margin: 0 0 0 -27px;
  }
  .cs-portfolio.cs-style2 .cs-section_heading.cs-style1,
  .cs-portfolio.cs-style2.cs-type1 .cs-section_heading.cs-style1 {
    padding-left: 70px;
  }
}
@media screen and (max-width: 575px) {
  .cs-portfolio.cs-style1 {
    height: 380px;
  }
  .cs-portfolio.cs-style2 .cs-portfolio_img_title, .cs-portfolio.cs-style2.cs-type1 .cs-portfolio_img_title {
    margin: 0px 0 0 -20px;
    font-size: 32px;
  }
}
/*--------------------------------------------------------------
  21. FunFact
----------------------------------------------------------------*/
.cs-funfact_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: linear-gradient(267.18deg, #161616 0%, #080808 100%);
  border-radius: 15px;
  padding: 60px 80px;
  position: relative;
  z-index: 1;
}
.cs-funfact_wrap .cs-funfact_shape {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: inherit;
  background-position: right bottom;
  background-repeat: no-repeat;
}
.cs-funfact_wrap .cs-funfact_left {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 40%;
  position: relative;
  z-index: 2;
}
.cs-funfact_wrap .cs-funfact_right {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding-left: 80px;
  position: relative;
  z-index: 2;
}
.cs-funfact_wrap.cs-type1 {
  margin-top: -130px;
}

.cs-funfact_heading h2 {
  font-size: 50px;
  margin-bottom: 20px;
}
.cs-funfact_heading p {
  margin-bottom: 0;
  line-height: 1.75em;
}

.cs-funfacts {
  display: grid;
  grid-gap: 36px 40px;
  grid-template-columns: repeat(2, 1fr);
}

.cs-funfact.cs-style1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-funfact.cs-style1 .cs-funfact_number {
  margin: 0 13px 0 0;
  font-size: 50px;
  line-height: 1.3em;
}
.cs-funfact.cs-style1 .cs-funfact_text span {
  font-size: 20px;
  font-weight: 700;
  display: block;
  margin-top: -4px;
  margin-bottom: -1px;
}
.cs-funfact.cs-style1 .cs-funfact_text p {
  margin: 0;
}

.cs-funfact.cs-style2 .cs-funfact_number {
  margin: 0 13px 0 0;
  font-size: 50px;
  line-height: 1.3em;
}
.cs-funfact.cs-style2 .cs-funfact_title {
  font-size: 22px;
  color: #999696;
  margin: 0;
}

.cs-funfact_wrap_2 {
  background: linear-gradient(267.18deg, #161616 0%, #080808 100%);
  -webkit-box-shadow: 0px 0px 25px rgba(123, 123, 123, 0.1);
          box-shadow: 0px 0px 25px rgba(123, 123, 123, 0.1);
  border-radius: 15px;
  padding: 90px 90px 100px;
  position: relative;
  z-index: 1;
}
.cs-funfact_wrap_2.cs-no_shadow {
  -webkit-box-shadow: initial;
          box-shadow: initial;
}
.cs-funfact_wrap_2 .cs-funfact_shape {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: inherit;
  background-position: right bottom;
  background-repeat: no-repeat;
}
.cs-funfact_wrap_2 .cs-funfact_shape + * {
  position: relative;
  z-index: 2;
}
.cs-funfact_wrap_2 .cs-funfacts {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: -12px;
}
.cs-funfact_wrap_2 .cs-funfacts > * {
  padding: 12px;
}
.cs-funfact_wrap_2.cs-type1 {
  margin-top: -145px;
}
.cs-funfact_wrap_2.cs-type2 {
  background: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
  padding-top: 0;
  padding-bottom: 0;
}

@media screen and (max-width: 1399px) {
  .cs-funfact_wrap,
  .cs-funfact_wrap_2 {
    padding: 60px 50px;
  }
  .cs-funfact_wrap_2.cs-type1 {
    margin-top: -102px;
  }
  .cs-funfact_wrap .cs-funfact_left {
    width: 38%;
  }
  .cs-funfact_wrap .cs-funfact_right {
    padding-left: 50px;
    width: 62%;
  }
}
@media screen and (max-width: 1380px) {
  .cs-funfact_heading h2 {
    font-size: 42px;
    margin-bottom: 10px;
  }
  .cs-funfact.cs-style1 .cs-funfact_number {
    font-size: 42px;
  }
  .cs-funfact.cs-style1 .cs-funfact_text span {
    font-size: 18px;
    margin-top: -8px;
    margin-bottom: -5px;
  }
  .cs-funfact.cs-style2 .cs-funfact_number {
    font-size: 42px;
  }
  .cs-funfact.cs-style2 .cs-funfact_title {
    font-size: 20px;
  }
}
@media screen and (max-width: 1199px) {
  .cs-funfact_wrap {
    display: block;
  }
  .cs-funfact_wrap .cs-funfact_right {
    padding-left: 0;
    width: 100%;
  }
  .cs-funfact_wrap .cs-funfact_left {
    width: 100%;
    margin-bottom: 50px;
  }
  .cs-funfact_wrap_2 .cs-funfacts {
    display: grid;
    grid-gap: 10px 25px;
  }
}
@media screen and (max-width: 991px) {
  .cs-funfact_wrap .cs-funfact_left {
    margin-bottom: 30px;
  }
}
@media screen and (max-width: 767px) {
  .cs-funfacts {
    grid-gap: 15px 15px;
    grid-template-columns: repeat(1, 1fr);
  }
}
@media screen and (max-width: 575px) {
  .cs-funfacts {
    grid-gap: 15px 15px;
    grid-template-columns: repeat(1, 1fr);
  }
  .cs-funfact_wrap,
  .cs-funfact_wrap_2 {
    padding: 40px 30px;
  }
}
/*--------------------------------------------------------------
  22. Pricing
----------------------------------------------------------------*/
.cs-pricing_table.cs-style1 {
  position: relative;
  background: linear-gradient(267.18deg, #161616 0%, #080808 100%);
  border-radius: 15px;
  overflow: hidden;
  padding: 0 45px;
}
.cs-pricing_table.cs-style1::before {
  content: "";
  position: absolute;
  right: -55px;
  top: -55px;
  height: 135px;
  width: 135px;
  background: #2DA8A8;
  -webkit-filter: blur(125px);
          filter: blur(125px);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  opacity: 0;
}
.cs-pricing_table.cs-style1 .cs-pricing_title {
  font-size: 30px;
  padding: 30px 0 30px;
  border-bottom: 1px solid #302E2E;
  margin: 0;
}
.cs-pricing_table.cs-style1 .cs-price {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  padding-top: 20px;
  margin-bottom: 5px;
}
.cs-pricing_table.cs-style1 .cs-price h3 {
  margin: 0;
  font-size: 38px;
}
.cs-pricing_table.cs-style1 .cs-price span {
  position: relative;
  bottom: 6px;
}
.cs-pricing_table.cs-style1 .cs-pricing_info {
  border-bottom: 1px solid #302E2E;
  padding-bottom: 23px;
}
.cs-pricing_table.cs-style1 .cs-pricing_feature {
  padding: 35px 0 25px;
  border-bottom: 1px solid #302E2E;
}
.cs-pricing_table.cs-style1 .cs-pricing_feature li {
  position: relative;
  padding-left: 35px;
}
.cs-pricing_table.cs-style1 .cs-pricing_feature li:not(:last-child) {
  margin-bottom: 16px;
}
.cs-pricing_table.cs-style1 .cs-pricing_feature .cs-feature_icon {
  position: absolute;
  left: 0;
  top: -1px;
}
.cs-pricing_table.cs-style1 .cs-pricing_btn_wrap {
  padding: 28px 0;
}
.cs-pricing_table.cs-style1:hover::before {
  opacity: 1;
}

@media screen and (max-width: 991px) {
  .cs-pricing_table.cs-style1 {
    padding: 0 30px;
  }
  .cs-pricing_table.cs-style1 .cs-pricing_title {
    font-size: 26px;
  }
}
.cs-shop_sidebar {
  background-color: #000;
  padding: 40px 25px;
}

.cs-shop_sidebar_widget:not(:last-child) {
  margin-bottom: 40px;
}

.cs-shop_filter_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-bottom: 30px;
  gap: 10px;
}
.cs-shop_filter_wrap select {
  background-color: transparent;
  border: transparent;
  color: inherit;
  outline: none;
  cursor: pointer;
}
@media (max-width: 575px) {
  .cs-shop_filter_wrap {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }
}

.cs-shop_sidebar_widget_title {
  font-size: 18px;
  margin-bottom: 16px;
}

.cs-shop_sidebar_tag_list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 0px -5px -5px -5px;
  list-style: none;
  padding: 0;
}
.cs-shop_sidebar_tag_list a {
  font-size: 14px;
  line-height: 1.6em;
  border: 1px solid #fff;
  padding: 3px 12px;
  display: inline-block;
  margin: 5px;
  border-radius: 2px;
}
.cs-shop_sidebar_tag_list a:hover {
  color: #fff;
  background-color: #2DA8A8;
  border-color: #2DA8A8;
}

.cs-shop_search {
  position: relative;
}
.cs-shop_search .cs-shop_search_input {
  border: 1px solid #999696;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  color: #fff;
  background-color: transparent;
  border-radius: 2px;
  display: block;
  width: 100%;
  padding: 5px 10px 5px 40px;
  height: 46px;
  outline: none;
}
.cs-shop_search .cs-shop_search_input:focus {
  border-color: #fff;
}
.cs-shop_search .cs-shop_search_input::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.cs-shop_search .cs-shop_search_input::-moz-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.cs-shop_search .cs-shop_search_input:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.cs-shop_search .cs-shop_search_input::-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.cs-shop_search .cs-shop_search_input::placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.cs-shop_search .cs-shop_search_input:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.cs-shop_search .cs-shop_search_input::-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.cs-shop_search .cs-shop_search_btn {
  position: absolute;
  top: 0;
  border: none;
  background: transparent;
  height: 46px;
  width: 40px;
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.cs-shop_sidebar_category_list {
  list-style: none;
  padding: 0;
  margin: 0;
}
.cs-shop_sidebar_category_list li:not(:last-child) {
  margin-bottom: 12px;
}

.cs-product_card.cs_style_1 .cs-product_thumb {
  display: block;
  border-radius: 5px;
  overflow: hidden;
  margin-bottom: 25px;
  position: relative;
}
.cs-product_card.cs_style_1 .cs-product_thumb img {
  width: 100%;
  border-radius: inherit;
}
.cs-product_card.cs_style_1 .cs-card_btns {
  height: 100%;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-product_card.cs_style_1 .cs-card_btns a {
  height: 50px;
  width: 50px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 6px;
  background-color: #2DA8A8;
  color: #fff;
  border-radius: 50%;
  -webkit-transform: scale(0);
          transform: scale(0);
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.cs-product_card.cs_style_1 .cs-card_btns a:hover {
  background-color: #fff;
  color: #2DA8A8;
}
.cs-product_card.cs_style_1 .cs-product_title {
  font-size: 18px;
  margin-bottom: 7px;
}
.cs-product_card.cs_style_1:hover .cs-card_btns {
  background-color: rgba(0, 0, 0, 0.4);
}
.cs-product_card.cs_style_1:hover .cs-card_btns a {
  -webkit-transform: scale(1);
          transform: scale(1);
  opacity: 1;
}
.cs-product_card.cs_style_1 .cs-product_price {
  margin-bottom: 0;
}

.cs-single_product_nav .slick-list {
  margin-left: -10px;
  margin-right: -10px;
}
.cs-single_product_nav .slick-slide {
  padding: 0 10px;
}

.cs-single_product_thumb_mini img {
  width: 100%;
  border-radius: 5px;
  border: 1px solid transparent;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.cs-single_product_nav {
  margin-top: 20px;
}
.cs-single_product_nav .slick-current img {
  border-color: #2DA8A8;
}
.cs-single_product_nav .slick-slide:not(.slick-current) {
  cursor: pointer;
}

.cs-single_product_thumb_item {
  border-radius: 10px;
  overflow: hidden;
}
.cs-single_product_thumb_item img {
  width: 100%;
}

.cs-quantity {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  position: relative;
  width: 112px;
  height: 50px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.cs-quantity_input {
  height: 100%;
  width: 100%;
  border: 1px solid #999696;
  background-color: transparent;
  border-radius: 5px;
  padding: 5px 30px 5px 20px;
  outline: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-quantity_input:focus {
  border-color: #fff;
}

.cs-quantity_button {
  padding: 0;
  border: none;
  background-color: transparent;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 2px 9px;
  cursor: pointer;
  font-size: 14px;
  position: absolute;
  right: 1px;
}
.cs-quantity_button.cs-increment {
  top: 7px;
}
.cs-quantity_button.cs-decrement {
  bottom: 7px;
}
.cs-quantity_button:hover {
  color: #2DA8A8;
}

.cs-quantity_buttons {
  position: absolute;
  top: 1px;
  right: 1px;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: calc(100% - 2px);
  width: 34px;
  background-color: #181818;
  border-radius: 5px;
}

.cs-quantity_and_btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 20px;
}

.cs-product_btn {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 12px 45px;
  background-color: #2DA8A8;
  color: #fff;
  border-radius: 5px;
  outline: none;
  border: none;
  white-space: nowrap;
}
.cs-product_btn:hover {
  opacity: 0.8;
  color: #fff;
}
.cs-product_btn.cs-color1 {
  background-color: #000;
}
.cs-product_btn.cs-color1:hover {
  background-color: #2DA8A8;
}
@media (max-width: 380px) {
  .cs-product_btn {
    padding-left: 20px;
    padding-right: 20px;
  }
}

.cs-single_product_info {
  list-style: none;
  padding: 0;
  margin: 0;
}
.cs-single_product_info b {
  font-weight: 600;
  color: #fff;
}

.cs-single-product-details {
  line-height: 1.8em;
  padding-left: 50px;
}
@media (max-width: 991px) {
  .cs-single-product-details {
    padding-left: 0;
    padding-top: 40px;
  }
}
.cs-single-product-details h2 {
  font-size: 30px;
  margin-bottom: 8px;
}
.cs-single-product-details .cs-single_product_price {
  font-size: 21px;
  line-height: 1.5em;
}
.cs-single-product-details .cs-single-product-details-text p {
  margin-bottom: 18px;
}
.cs-single-product-details .cs-single-product-details-text p:last-child {
  margin-bottom: 0;
}
.cs-single-product-details .cs-single_product-price_review {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cs-product_tab {
  padding: 0;
  margin: 0;
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  color: #fff;
  gap: 10px 52px;
}
@media (max-width: 575px) {
  .cs-product_tab {
    gap: 10px 30px;
  }
}
.cs-product_tab li a {
  display: inline-block;
  position: relative;
  padding-bottom: 5px;
}
.cs-product_tab li a::before {
  content: "";
  position: absolute;
  height: 1px;
  width: 0;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  background-color: #fff;
  bottom: 0;
}
.cs-product_tab li.active a::before {
  width: 100%;
}

.cs-product_meta_info {
  border-top: 1px solid #4d4d4d;
  padding-top: 40px;
}

.cs-input_rating_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-input_rating_wrap p {
  margin: 0 14px 0 0;
}

.cs-client_review {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.cs-client_review .cs-review_media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.cs-client_review .cs-review_media_right {
  padding-top: 6px;
}
.cs-client_review .cs-review_media_thumb {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 15px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs-client_review .cs-review_media_thumb img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.cs-client_review .cs-review_text {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 100%;
  line-height: 1.8em;
  margin-top: 30px;
}
.cs-client_review .cs-review_posted_by {
  margin-left: 65px;
  padding-top: 22px;
}

.cs-client_review_list {
  list-style: none;
  margin: 0;
  padding: 0;
}
.cs-client_review_list li:not(:last-child) {
  margin-bottom: 30px;
  padding-bottom: 30px;
  border-bottom: 1px solid #4D4D4D;
}

.cs-cart_table_media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 20px;
}
@media (max-width: 991px) {
  .cs-cart_table_media {
    gap: 10px;
  }
}
.cs-cart_table_media img {
  width: 85px;
  border-radius: 5px;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
}
@media (max-width: 991px) {
  .cs-cart_table_media img {
    width: 50px;
  }
}
.cs-cart_table_media h3 {
  font-weight: 400;
  font-size: 16px;
  margin: 0;
}

.cs-cart-table-close {
  background-color: transparent;
  border: none;
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.cs-cart-table-close:hover {
  color: red;
}

.cs-cart_table.cs-size1 {
  min-width: 900px;
}
.cs-cart_table th {
  background-color: #000;
  color: #fff;
  border: none;
  font-weight: 600;
  font-size: 18px;
  line-height: 1.6em;
  padding: 20px;
}
@media (max-width: 991px) {
  .cs-cart_table th {
    padding: 10px;
  }
}
.cs-cart_table td {
  border-top: none;
  border-bottom: 1px solid #4D4D4D;
  padding: 20px;
}
@media (max-width: 991px) {
  .cs-cart_table td {
    padding: 10px;
  }
}
@media (max-width: 991px) {
  .cs-cart_table .cs-quantity {
    width: 90px;
  }
  .cs-cart_table .cs-quantity_input {
    padding: 5px 35px 5px 10px;
  }
}

.cs-cart-offer {
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
  gap: 20px;
}
.cs-cart-offer .cs-shop-input {
  min-width: 160px;
  border-color: #2DA8A8;
}
.cs-cart-offer .cs-cart-offer-col {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 10px;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
@media (max-width: 450px) {
  .cs-cart-offer > *,
  .cs-cart-offer .cs-coupon-doce-form {
    width: 100%;
  }
  .cs-cart-offer .cs-product_btn {
    width: 100%;
  }
}

.cs-coupon-doce-form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 10px;
}
.cs-coupon-doce-form input {
  background-color: transparent;
  padding: 9px 15px;
  border: 1px solid #2DA8A8;
  border-radius: 5px;
  height: 50px;
  width: 186px;
  outline: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs-coupon-doce-form input::-webkit-input-placeholder {
  color: #fff;
}
.cs-coupon-doce-form input::-moz-placeholder {
  color: #fff;
}
.cs-coupon-doce-form input:-ms-input-placeholder {
  color: #fff;
}
.cs-coupon-doce-form input::-ms-input-placeholder {
  color: #fff;
}
.cs-coupon-doce-form input::placeholder {
  color: #fff;
}
.cs-coupon-doce-form input:-ms-input-placeholder {
  color: #fff;
}
.cs-coupon-doce-form input::-ms-input-placeholder {
  color: #fff;
}
.cs-coupon-doce-form input:focus {
  border-color: #fff;
}
@media (max-width: 450px) {
  .cs-coupon-doce-form {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .cs-coupon-doce-form input,
  .cs-coupon-doce-form button {
    width: 100%;
  }
}

.cs-shop-card {
  border: 5px solid #4D4D4D;
  border-radius: 2px;
  padding: 23px 30px 30px;
}
.cs-shop-card table {
  border-bottom: 1px solid #4D4D4D;
  margin: 0;
}
.cs-shop-card h2 {
  font-size: 30px;
  margin-bottom: 21px;
}
.cs-shop-card td {
  padding: 20px 10px;
}
.cs-shop-card td:first-child {
  padding-left: 0;
}
.cs-shop-card td:last-child {
  padding-right: 0;
}
.cs-shop-card .form-check {
  margin-bottom: 6px;
}

.cs-checkout-alert a {
  color: #2DA8A8;
}
.cs-checkout-alert a:hover {
  text-decoration: underline;
}

.cs-shop-side-spacing {
  padding-left: 25px;
}
@media (max-width: 1199px) {
  .cs-shop-side-spacing {
    padding-left: 0;
  }
}

.cs-checkout-title {
  font-size: 30px;
  margin-bottom: 0px;
}

.cs-shop-input {
  display: block;
  width: 100%;
  background: transparent;
  border: 1px solid #4D4D4D;
  padding: 11px 15px;
  border-radius: 5px;
  outline: none;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  margin-bottom: 20px;
  color: #fff;
  min-height: 50px;
}
.cs-shop-input:focus {
  border-color: #fff;
}

.cs-shop-label {
  display: block;
  font-weight: 600;
  color: #fff;
  margin-bottom: 14px;
}

.cs-payment_text {
  font-size: 14px;
  line-height: 1.6em;
}
.cs-payment_text a {
  color: #2DA8A8;
}

.cs-order-summery {
  background-color: #000;
  list-style: none;
  padding: 25px 30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 0;
}
.cs-order-summery p {
  font-size: 14px;
  line-height: 1.6em;
  margin-bottom: 5px;
}
.cs-order-summery h3 {
  margin: 0;
  font-weight: 600;
  font-size: 16px;
}
.cs-order-summery li:not(:last-child) {
  border-right: 1px solid #4D4D4D;
  padding-right: 55px;
  margin-right: 55px;
}
@media (max-width: 991px) {
  .cs-order-summery li:not(:last-child) {
    border-right: 0;
    padding-right: 0;
    margin-right: 0;
  }
}
@media (max-width: 991px) {
  .cs-order-summery li {
    width: 100%;
  }
  .cs-order-summery li:not(:last-child) {
    border-bottom: 1px solid #4D4D4D;
    padding-bottom: 15px;
    margin-bottom: 15px;
  }
}

.cs-header_cart {
  display: inline-block;
  color: #fff;
  position: relative;
}
.cs-header_cart:hover {
  color: #2DA8A8;
}

.cs-header_cart_label {
  position: absolute;
  background-color: #2DA8A8;
  font-weight: 600;
  font-size: 12px;
  line-height: 17px;
  padding: 0 2px;
  min-width: 17px;
  text-align: center;
  border-radius: 1.6em;
  left: 11px;
  bottom: -9px;
  color: #fff;
}

.st-amount-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.st-amount-wrap #amount {
  border: none;
  padding: 0;
  color: rgba(254, 254, 254, 0.7);
  width: 100%;
  background-color: transparent;
  outline: none;
}
.st-amount-wrap .st-filter-btn {
  border: 1px solid #4D4D4D;
  background: transparent;
  color: #FEFEFE;
  font-weight: 500;
  padding: 2px 22px;
  outline: none;
  border-radius: 5px;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  cursor: pointer;
  line-height: 1.5em;
}
.st-amount-wrap .st-filter-btn:hover {
  background-color: #2DA8A8;
  border-color: #2DA8A8;
  color: #fff;
}

.ui-widget.ui-widget-content {
  border: 0;
  margin-bottom: 15px;
  background-color: #4D4D4D;
  margin-top: 5px;
}

.ui-widget-header {
  background: #2DA8A8;
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
.ui-button,
html .ui-button.ui-state-disabled:hover,
html .ui-button.ui-state-disabled:active {
  border: 1px solid #2DA8A8;
  background: #2DA8A8;
}

.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
  border: 1px solid #2DA8A8;
  background: #2DA8A8;
  outline: none;
}

.ui-slider-horizontal {
  height: 6px;
  border-radius: 3px;
}

.ui-slider .ui-slider-handle {
  top: -5px;
  height: 16px;
  border-radius: 3px;
  width: 10px;
}
.ui-slider .ui-slider-handle:focus {
  outline: none;
}

.ui-slider-horizontal .ui-slider-range {
  border-radius: 0;
}

.rtl {
  text-align: right;
  direction: rtl;
}
.rtl .cs-slide,
.rtl .slick-slide {
  direction: rtl;
}
.rtl .text-end {
  text-align: left !important;
}
.rtl .cs-funfact.cs-style1 .cs-funfact_number {
  margin-left: 14px;
  margin-right: 0;
}
.rtl .cs-funfact_wrap .cs-funfact_right {
  padding-left: 0;
  padding-right: 80px;
}
.rtl .cs-nav .cs-nav_list > li.menu-item-has-children > a::after {
  margin-left: 0px;
  margin-right: 6px;
}
.rtl .cs-text_btn span::before {
  left: initial;
  right: -100%;
  -webkit-transform: scaleX(0) rotate(180deg);
          transform: scaleX(0) rotate(180deg);
}
.rtl .cs-text_btn svg {
  margin-left: 0;
  margin-right: 15px;
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
.rtl .cs-text_btn.cs-type1 svg {
  margin-left: 15px;
  margin-right: 0px;
}
.rtl .cs-text_btn.cs-type2 svg {
  margin-left: 15px;
  margin-right: 0px;
}
.rtl .cs-text_btn:hover span::before {
  -webkit-transform: scaleX(1) rotate(180deg);
          transform: scaleX(1) rotate(180deg);
}
.rtl .cs-hero_social_wrap,
.rtl .cs-toolbox,
.rtl .cs-slider_container,
.rtl .cs-testimonial_slider,
.rtl .cs-moving_text_wrap,
.rtl .cs-swiper_button_next,
.rtl .cs-swiper_button_prev {
  direction: ltr;
}
.rtl .cs-hero.cs-style1 .cs-hero_social_wrap,
.rtl .cs-hero.cs-style2 .cs-hero_social_wrap,
.rtl .cs-hero.cs-style3 .cs-hero_social_wrap,
.rtl .cs-swiper_parallax_slider_wrap .cs-hero_social_wrap,
.rtl .cs-fullscreen_swiper_wrap .cs-hero_social_wrap {
  right: initial;
  left: 45px;
}
.rtl .cs-hero.cs-style1 .cs-hero_social_wrap.cs-left_side,
.rtl .cs-hero.cs-style2 .cs-hero_social_wrap.cs-left_side,
.rtl .cs-hero.cs-style3 .cs-hero_social_wrap.cs-left_side,
.rtl .cs-swiper_parallax_slider_wrap .cs-hero_social_wrap.cs-left_side,
.rtl .cs-fullscreen_swiper_wrap .cs-hero_social_wrap.cs-left_side {
  left: initial;
  right: 45px;
}
.rtl .cs-contact_info.cs-style1 li {
  padding-left: 0;
  padding-right: 35px;
}
.rtl .cs-contact_info.cs-style1 svg {
  left: initial;
  right: 0;
}
.rtl .cs-side_header .cs-side_header_in {
  right: 100%;
}
.rtl .cs-side_header.active .cs-side_header_in {
  right: calc(100% - 500px);
}
.rtl .cs-side_header .cs-side_header_shape {
  right: initial;
  left: 0;
}
.rtl .cs-side_header .cs-side_header_shape::before {
  right: initial;
  left: -90px;
}
.rtl .cs-newsletter.cs-style1 .cs-newsletter_btn {
  right: initial;
  left: 5px;
}
.rtl .cs-newsletter.cs-style1 .cs-newsletter_input {
  padding: 5px 15px 5px 100px;
}
.rtl .cs-slider.cs-style1 .cs-slider_left {
  padding-right: initial;
  padding-left: 12%;
}
.rtl .slick-arrow {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.rtl .cs-testimonial.cs-style1 .cs-testimonial_quote {
  left: initial;
  right: 0;
}
.rtl .cs-testimonial.cs-style1 .cs-testimonial_avatar_designation::before {
  margin-right: 0;
  margin-left: 10px;
}
.rtl .cs-rating > * {
  left: initial;
  right: 0;
}
.rtl .cs-shape_wrap_3 .cs-shape_3 {
  right: initial;
  left: 20px;
}
@media (min-width: 1200px) {
  .rtl .cs-nav .cs-nav_list > li {
    margin-right: initial;
    margin-left: 50px;
  }
  .rtl .cs-nav .cs-nav_list > li:last-child {
    margin-left: 0px;
  }
}
.rtl .slider-for .slick-prev {
  right: initial;
  left: 76px;
}
.rtl .slider-for .slick-next {
  right: initial;
  left: 0;
}
.rtl .cs-close {
  right: initial;
  left: 30px;
}
.rtl .cs-shape_wrap_4 .cs-shape_4:nth-child(1) {
  left: initial;
  right: 5%;
}
.rtl .cs-shape_wrap_4 .cs-shape_4:nth-child(2) {
  left: initial;
  right: 25%;
}
.rtl .cs-hero.cs-style2 .cs-hero_tab_item .cs-hero_tab_img {
  right: initial;
  left: 0;
}
.rtl .breadcrumb-item + .breadcrumb-item {
  padding-left: 0;
  padding-right: 14px;
}
.rtl .breadcrumb-item + .breadcrumb-item::before {
  display: none;
}
.rtl .breadcrumb-item + .breadcrumb-item::after {
  content: "";
  height: 17px;
  width: 1px;
  background-color: #fff;
  padding: 0;
  position: relative;
  top: 5px;
  margin-left: 14px;
  float: right;
}
.rtl .cs-accordian_head {
  padding-left: 20px;
  padding-right: 0;
}
.rtl .cs-accordian_toggle {
  right: initial;
  left: 0;
}
.rtl .cs-btn.cs-style1 svg {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
  margin-left: 0px;
  margin-right: 14px;
}
.rtl .cs-isotop_filter.cs-style1 li:not(:last-child) {
  margin-right: 0;
  margin-left: 28px;
}
.rtl .cs-post.cs-style3 .cs-posted_by > span:first-child {
  margin-right: 0;
  margin-left: 12px;
}
.rtl .cs-post.cs-style3 .cs-post_avatar_img {
  margin-right: 0;
  margin-left: 18px;
}
.rtl .cs-hero.cs-style3 .cs-hero_subtitle {
  margin-right: auto;
  margin-left: initial;
}
.rtl .cs-hero.cs-style5 .cs-hero_text {
  padding-left: 0;
  padding-right: 180px;
}
.rtl .swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers {
  left: initial;
  right: 115px;
}
@media (max-width: 1199px) {
  .rtl .swiper-vertical > .swiper-pagination-bullets.cs-swiper_pagination.cs-slide_numbers {
    left: initial;
    right: 15px;
  }
}
.rtl .cs-site_header.cs-style1 .cs-munu_toggle {
  right: initial;
  left: 0;
}
.rtl .cs-munu_dropdown_toggle {
  right: initial;
  left: 20px;
}
.rtl .cs-sidebar_search input {
  padding-left: 40px;
  padding-right: 10px;
}
.rtl .cs-sidebar_search_btn {
  right: initial;
  left: 0;
}
.rtl .widget_archive ul li,
.rtl .widget_categories ul li {
  padding-left: 0;
  padding-right: 26px;
}
.rtl .widget_archive ul li::before,
.rtl .widget_categories ul li::before {
  left: initial;
  right: 0;
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.rtl .cs-recent_post_thumb {
  margin-right: 0;
  margin-left: 18px;
}
.rtl .cs-post_meta.cs-style1 > *:not(:last-child)::before {
  right: initial;
  left: 0;
}
.rtl .cs-post_meta.cs-style1 > *:not(:last-child) {
  margin-right: 0;
  padding-right: 0;
  margin-left: 12px;
  padding-left: 12px;
}
.rtl .cs-pagination_item svg {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.rtl .cs-post.cs-style2 blockquote small {
  padding-left: 0;
  padding-right: 35px;
}
.rtl .cs-post.cs-style2 blockquote small::before {
  left: initial;
  right: 0;
}
.rtl .cs-post.cs-style2 blockquote {
  border-left: 0;
  border-right: 5px solid #2DA8A8;
}
.rtl .cs-page_navigation > div:not(:last-child) {
  margin-right: 0;
  padding-right: 0;
  margin-left: 21px;
  padding-left: 21px;
}
.rtl .cs-page_navigation > div:not(:last-child)::after {
  right: initial;
  left: -1px;
}
.rtl .offset-xl-1,
.rtl .offset-lg-1 {
  margin-left: 0;
  margin-right: 8.33333333%;
}
.rtl .offset-xl-2,
.rtl .offset-lg-2 {
  margin-left: 0;
  margin-right: 16.66666667%;
}
.rtl .offset-xl-3,
.rtl .offset-lg-3 {
  margin-left: 0;
  margin-right: 25%;
}
.rtl .offset-xl-4,
.rtl .offset-lg-4 {
  margin-left: 0;
  margin-right: 33.33333333%;
}
.rtl .offset-xl-5,
.rtl .offset-lg-5 {
  margin-left: 0;
  margin-right: 41.66666667%;
}
.rtl .offset-xl-6,
.rtl .offset-lg-6 {
  margin-left: 0;
  margin-right: 58.33333333%;
}
.rtl .offset-xl-7,
.rtl .offset-lg-7 {
  margin-left: 0;
  margin-right: 58.33333333%;
}
.rtl .offset-xl-8,
.rtl .offset-lg-8 {
  margin-left: 0;
  margin-right: 66.66666667%;
}
.rtl .offset-xl-9,
.rtl .offset-lg-9 {
  margin-left: 0;
  margin-right: 75%;
}
.rtl .offset-xl-10,
.rtl .offset-lg-10 {
  margin-left: 0;
  margin-right: 83.33333333%;
}
.rtl .offset-xl-11,
.rtl .offset-lg-11 {
  margin-left: 0;
  margin-right: 91.66666667%;
}
@media (max-width: 1199px) {
  .rtl .offset-xl-1,
  .rtl .offset-xl-2,
  .rtl .offset-xl-3,
  .rtl .offset-xl-4,
  .rtl .offset-xl-5,
  .rtl .offset-xl-6,
  .rtl .offset-xl-7,
  .rtl .offset-xl-8,
  .rtl .offset-xl-9,
  .rtl .offset-xl-10,
  .rtl .offset-xl-11 {
    margin-right: 0;
  }
}
@media (max-width: 991px) {
  .rtl .offset-lg-1,
  .rtl .offset-lg-2,
  .rtl .offset-lg-3,
  .rtl .offset-lg-4,
  .rtl .offset-lg-5,
  .rtl .offset-lg-6,
  .rtl .offset-lg-7,
  .rtl .offset-lg-8,
  .rtl .offset-lg-9,
  .rtl .offset-lg-10,
  .rtl .offset-lg-11 {
    margin-right: 0;
  }
}
.rtl .cs-header_badge {
  right: initial;
  left: 5px;
}
.rtl .cs-hero.cs-style3 .cs-hero_highlite {
  left: initial;
  right: 68%;
}
.rtl .cs-hero.cs-style3.cs-type1 .cs-hero_subtitle {
  margin-right: 0;
}
@media (max-width: 1199px) {
  .rtl .cs-hero.cs-style3.cs-type1 .cs-hero_subtitle {
    margin-right: auto;
    margin-left: auto;
  }
}/* # sourceMappingURL=style.css.map */



.hidden{
  opacity: 0;
  filter: blur(5px);
  transform: translateX(-100%);
  transition: all 1s;

}
.show{
  opacity: 1;
  filter: blur(0);
  transform: translateX(0);

}

@media(prefers-reduced-emotion) {
  .hidden{
      transition: none;
  }
}



.footer-top-line{
    background-color:gray;
    height: 0.5px;
    margin: 60px 0px;
}




.hiddenn{
  opacity: 0;
  filter: blur(5px);
  transform: rotate(0.5turn);
  transition: all 1s;

}
.showw{
  opacity: 1;
  filter: blur(0);
  transform: rotate(0);

}

@media(prefers-reduced-emotion) {
  .hiddenn{
      transition: none;
  }
}



</style>

</head>
  <body>
    <div class="cs-preloader cs-center">
      <div class="cs-preloader_in"></div>
    </div>
    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
      <div class="cs-main_header">
        <div class="container">
          <div class="cs-main_header_in">
            <div class="cs-main_header_left">
              <a class="cs-site_branding" style="border: 1px solid #2da8a8; color:#2da8a8; font-weight: bold; font-size: 20px" href="index.html">
              Opti-Web-Serve
                <!-- <img src="{{url('frontend/imgs/logo.png')}}" alt="Logo"> -->
              </a>
            </div>
            <div class="cs-main_header_center">
              <div class="cs-nav cs-primary_font cs-medium">
                <ul class="cs-nav_list">
                  <li class="cs-mega_menu">
                    <a href="{{url('/')}}">Home</a>
</li>
                  <li class="menu-item-has-children">
                    <a href="{{url('/service')}}">SERVICES</a>
                    <ul>
                      <li>
                        <a href="{{url('/seo')}}">SEARCH ENGINE OPTIMIZATION</a>
                      </li>
                      <li>
                          <a href="{{url('/linkBuilding')}}">LINK BUILDING</a>
                      </li>
                      <li>
                        <a href="{{url('/blogging')}}">BLOGGING</a>
                      </li>
                      <li>
                        <a href="{{url('/inbound')}}">INBOUND MARKETING</a>
                      </li>
                      <li>
                        <a href="{{url('/outReach')}}">OUTREACH SPECIALIST</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="{{url('/aboutus')}}">ABOUT US</a>
                  </li>

                  <li>
                    <a href="{{url('/contact')}}">Contact</a>
                  </li>

                </ul>
              </div>
            </div>
            <div class="cs-main_header_right">
              <div class="cs-toolbox">
                <span class="cs-icon_btn">
                  <span class="cs-icon_btn_in">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="cs-side_header">
      <button class="cs-close"></button>
      <div class="cs-side_header_overlay"></div>
      <div class="cs-side_header_in">
        <div class="cs-side_header_shape"></div>
        {{-- <a class="cs-site_branding" href="index.html"> --}}
          {{-- <img src="{{url('frontend/imgs/logo.png')}}" alt="Logo"> --}}
          <a class="cs-site_branding" style="border: 1px solid #2da8a8; color:#2da8a8; font-weight: bold; font-size: 20px" href="index.html">
            Opti-Web-Serve

            </a>
        {{-- </a> --}}
        <div class="cs-side_header_box">
          <h2 class="cs-side_header_heading"> If you are interested in working with us, please contact us... </h2>
        </div>
        <div class="cs-side_header_box">
          <h3 class="cs-side_header_title cs-primary_color">Contact Us</h3>
          <ul class="cs-contact_info cs-style1 cs-mp0">
            <li>
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z" fill="#2da8a8" />
              </svg>
              <span>+92 303 0638240</span>
            </li>
            <li>
              <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z" fill="#2da8a8" />
              </svg>
              <span>sheharyarseo@gmail.com</span>
            </li>
            <li>
              <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#2da8a8" />
              </svg>
              <span>Office # 12, 1st floor Kohenoor plaza, Faisalabad, Pakistan
              </span>
            </li>
          </ul>
        </div>
        <div class="cs-side_header_box">
          <h3 class="cs-side_header_title cs-primary_color">Subscribe</h3>
          <div class="cs-newsletter cs-style1">
            <form action="#" class="cs-newsletter_form">
              <input type="email" class="cs-newsletter_input" placeholder="example@gmail.com">
              <button class="cs-newsletter_btn">
                <span>Send</span>
              </button>
            </form>
            <!-- <div class="cs-newsletter_text"> At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit. </div> -->
          </div>
        </div>
        <div class="cs-side_header_box">
          <div class="cs-social_btns cs-style1">
            <a href="#" class="cs-center">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.04799 13.7497H1.45647V5.4043H4.04799V13.7497ZM2.75084 4.2659C1.92215 4.2659 1.25 3.57952 1.25 2.75084C1.25 2.35279 1.40812 1.97105 1.68958 1.68958C1.97105 1.40812 2.35279 1.25 2.75084 1.25C3.14888 1.25 3.53063 1.40812 3.81209 1.68958C4.09355 1.97105 4.25167 2.35279 4.25167 2.75084C4.25167 3.57952 3.57924 4.2659 2.75084 4.2659ZM13.7472 13.7497H11.1613V9.68722C11.1613 8.71903 11.1417 7.4774 9.81389 7.4774C8.46652 7.4774 8.26004 8.5293 8.26004 9.61747V13.7497H5.67132V5.4043H8.15681V6.54269H8.19308C8.53906 5.887 9.38421 5.19503 10.6451 5.19503C13.2679 5.19503 13.75 6.92215 13.75 9.16546V13.7497H13.7472Z" fill="white"></path>
              </svg>
            </a>
            <a href="#" class="cs-center">
              <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.4651 2.95396C11.4731 3.065 11.4731 3.17606 11.4731 3.2871C11.4731 6.67383 8.89535 10.5761 4.18402 10.5761C2.73255 10.5761 1.38421 10.1557 0.25 9.42608C0.456226 9.44986 0.654494 9.4578 0.868655 9.4578C2.06629 9.4578 3.16879 9.0533 4.04918 8.36326C2.92291 8.33946 1.97906 7.60183 1.65386 6.5866C1.81251 6.61038 1.97112 6.62624 2.1377 6.62624C2.36771 6.62624 2.59774 6.59451 2.81188 6.53901C1.63802 6.30105 0.757595 5.26996 0.757595 4.02472V3.99301C1.09864 4.18336 1.49524 4.30233 1.91558 4.31818C1.22554 3.85814 0.773464 3.07294 0.773464 2.1846C0.773464 1.70872 0.900344 1.27249 1.12244 0.891774C2.38355 2.44635 4.27919 3.46156 6.40481 3.57262C6.36516 3.38226 6.34136 3.184 6.34136 2.9857C6.34136 1.57388 7.4835 0.423828 8.90323 0.423828C9.64086 0.423828 10.3071 0.733156 10.7751 1.23284C11.354 1.1218 11.9093 0.907643 12.401 0.614185C12.2106 1.20906 11.8061 1.70875 11.2748 2.02598C11.7903 1.97049 12.29 1.82769 12.75 1.62942C12.4011 2.13702 11.9648 2.5891 11.4651 2.95396V2.95396Z" fill="white"></path>
              </svg>
            </a>
            <a href="#" class="cs-center">
              <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.4888 1.48066C12.345 0.939353 11.9215 0.513038 11.3837 0.368362C10.4089 0.105469 6.5 0.105469 6.5 0.105469C6.5 0.105469 2.59116 0.105469 1.61633 0.368362C1.07853 0.513061 0.65496 0.939353 0.5112 1.48066C0.25 2.4618 0.25 4.50887 0.25 4.50887C0.25 4.50887 0.25 6.55595 0.5112 7.53709C0.65496 8.0784 1.07853 8.48695 1.61633 8.63163C2.59116 8.89452 6.5 8.89452 6.5 8.89452C6.5 8.89452 10.4088 8.89452 11.3837 8.63163C11.9215 8.48695 12.345 8.0784 12.4888 7.53709C12.75 6.55595 12.75 4.50887 12.75 4.50887C12.75 4.50887 12.75 2.4618 12.4888 1.48066V1.48066ZM5.22158 6.36746V2.65029L8.48861 4.50892L5.22158 6.36746V6.36746Z" fill="white"></path>
              </svg>
            </a>
            <a href="#" class="cs-center">
              <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.87612 8.149C2.87612 8.87165 2.28571 9.46205 1.56306 9.46205C0.840402 9.46205 0.25 8.87165 0.25 8.149C0.25 7.42634 0.840402 6.83594 1.56306 6.83594H2.87612V8.149ZM3.53795 8.149C3.53795 7.42634 4.12835 6.83594 4.851 6.83594C5.57366 6.83594 6.16406 7.42634 6.16406 8.149V11.4369C6.16406 12.1596 5.57366 12.75 4.851 12.75C4.12835 12.75 3.53795 12.1596 3.53795 11.4369V8.149ZM4.851 2.87612C4.12835 2.87612 3.53795 2.28571 3.53795 1.56306C3.53795 0.840402 4.12835 0.25 4.851 0.25C5.57366 0.25 6.16406 0.840402 6.16406 1.56306V2.87612H4.851V2.87612ZM4.851 3.53795C5.57366 3.53795 6.16406 4.12835 6.16406 4.851C6.16406 5.57366 5.57366 6.16406 4.851 6.16406H1.56306C0.840402 6.16406 0.25 5.57366 0.25 4.851C0.25 4.12835 0.840402 3.53795 1.56306 3.53795H4.851V3.53795ZM10.1239 4.851C10.1239 4.12835 10.7143 3.53795 11.4369 3.53795C12.1596 3.53795 12.75 4.12835 12.75 4.851C12.75 5.57366 12.1596 6.16406 11.4369 6.16406H10.1239V4.851V4.851ZM9.46205 4.851C9.46205 5.57366 8.87165 6.16406 8.149 6.16406C7.42634 6.16406 6.83594 5.57366 6.83594 4.851V1.56306C6.83594 0.840402 7.42634 0.25 8.149 0.25C8.87165 0.25 9.46205 0.840402 9.46205 1.56306V4.851V4.851ZM8.149 10.1239C8.87165 10.1239 9.46205 10.7143 9.46205 11.4369C9.46205 12.1596 8.87165 12.75 8.149 12.75C7.42634 12.75 6.83594 12.1596 6.83594 11.4369V10.1239H8.149ZM8.149 9.46205C7.42634 9.46205 6.83594 8.87165 6.83594 8.149C6.83594 7.42634 7.42634 6.83594 8.149 6.83594H11.4369C12.1596 6.83594 12.75 7.42634 12.75 8.149C12.75 8.87165 12.1596 9.46205 11.4369 9.46205H8.149Z" fill="white"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Section -->
