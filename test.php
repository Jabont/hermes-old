<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A Little Hermes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: #000000;" justify-content-between">
      <div onclick="window.location.href='index.php'">
      <span class="typcn typcn-social-instagram-circular"style="color: #FFCF40;"></span>
	  <a class="navbar-brand" style="color: #FFCF40; font-family: Roboto;">AIRMES</a><h7 style="color: #FFFFFF; font-family: Roboto;">By IT KMITL</h7>
      </div>
	  <form class="form-inline">
        <span class="typcn typcn-zoom "style="color: #FFCF40;"></span>
	    <input class="form-control mr-sm-2" style="color: #FFCF40; font-family: Roboto;" type="search" placeholder="Search Wing!" aria-label="Search">
        <div class="profile">
            <img src="https://via.placeholder.com/30">
        </div>
	  </form>
	</nav>

</body>
</html>
<style type="text/css">
@charset 'UTF-8';
/* @FONT-FACE loads font into browser */
body{
    background: #1A1A1A;
}
img{
    border-radius: 50%;
}
@font-face {
  font-family: 'typicons';
  src: url('font/typicons.eot');
  src: url('font/typicons.eot?#iefix') format('embedded-opentype'),
       url('font/typicons.woff') format('woff'),
       url('font/typicons.ttf') format('truetype'),
       url('font/typicons.svg#typicons') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* :before psuedo-selector inserts and styles icon */
.typcn:before {
  font-family: 'typicons';
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  height: 1em;
  font-size: 25px;
  text-align: center;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
</style>
<style type="text/css">
/* Code for individual icons */
.typcn-adjust-brightness:before { content: '\e000'; } /* '' */
.typcn-adjust-contrast:before { content: '\e001'; } /* '' */
.typcn-anchor-outline:before { content: '\e002'; } /* '' */
.typcn-anchor:before { content: '\e003'; } /* '' */
.typcn-archive:before { content: '\e004'; } /* '' */
.typcn-arrow-back-outline:before { content: '\e005'; } /* '' */
.typcn-arrow-back:before { content: '\e006'; } /* '' */
.typcn-arrow-down-outline:before { content: '\e007'; } /* '' */
.typcn-arrow-down-thick:before { content: '\e008'; } /* '' */
.typcn-arrow-down:before { content: '\e009'; } /* '' */
.typcn-arrow-forward-outline:before { content: '\e00a'; } /* '' */
.typcn-arrow-forward:before { content: '\e00b'; } /* '' */
.typcn-arrow-left-outline:before { content: '\e00c'; } /* '' */
.typcn-arrow-left-thick:before { content: '\e00d'; } /* '' */
.typcn-arrow-left:before { content: '\e00e'; } /* '' */
.typcn-arrow-loop-outline:before { content: '\e00f'; } /* '' */
.typcn-arrow-loop:before { content: '\e010'; } /* '' */
.typcn-arrow-maximise-outline:before { content: '\e011'; } /* '' */
.typcn-arrow-maximise:before { content: '\e012'; } /* '' */
.typcn-arrow-minimise-outline:before { content: '\e013'; } /* '' */
.typcn-arrow-minimise:before { content: '\e014'; } /* '' */
.typcn-arrow-move-outline:before { content: '\e015'; } /* '' */
.typcn-arrow-move:before { content: '\e016'; } /* '' */
.typcn-arrow-repeat-outline:before { content: '\e017'; } /* '' */
.typcn-arrow-repeat:before { content: '\e018'; } /* '' */
.typcn-arrow-right-outline:before { content: '\e019'; } /* '' */
.typcn-arrow-right-thick:before { content: '\e01a'; } /* '' */
.typcn-arrow-right:before { content: '\e01b'; } /* '' */
.typcn-arrow-shuffle:before { content: '\e01c'; } /* '' */
.typcn-arrow-sorted-down:before { content: '\e01d'; } /* '' */
.typcn-arrow-sorted-up:before { content: '\e01e'; } /* '' */
.typcn-arrow-sync-outline:before { content: '\e01f'; } /* '' */
.typcn-arrow-sync:before { content: '\e020'; } /* '' */
.typcn-arrow-unsorted:before { content: '\e021'; } /* '' */
.typcn-arrow-up-outline:before { content: '\e022'; } /* '' */
.typcn-arrow-up-thick:before { content: '\e023'; } /* '' */
.typcn-arrow-up:before { content: '\e024'; } /* '' */
.typcn-at:before { content: '\e025'; } /* '' */
.typcn-attachment-outline:before { content: '\e026'; } /* '' */
.typcn-attachment:before { content: '\e027'; } /* '' */
.typcn-backspace-outline:before { content: '\e028'; } /* '' */
.typcn-backspace:before { content: '\e029'; } /* '' */
.typcn-battery-charge:before { content: '\e02a'; } /* '' */
.typcn-battery-full:before { content: '\e02b'; } /* '' */
.typcn-battery-high:before { content: '\e02c'; } /* '' */
.typcn-battery-low:before { content: '\e02d'; } /* '' */
.typcn-battery-mid:before { content: '\e02e'; } /* '' */
.typcn-beaker:before { content: '\e02f'; } /* '' */
.typcn-beer:before { content: '\e030'; } /* '' */
.typcn-bell:before { content: '\e031'; } /* '' */
.typcn-book:before { content: '\e032'; } /* '' */
.typcn-bookmark:before { content: '\e033'; } /* '' */
.typcn-briefcase:before { content: '\e034'; } /* '' */
.typcn-brush:before { content: '\e035'; } /* '' */
.typcn-business-card:before { content: '\e036'; } /* '' */
.typcn-calculator:before { content: '\e037'; } /* '' */
.typcn-calendar-outline:before { content: '\e038'; } /* '' */
.typcn-calendar:before { content: '\e039'; } /* '' */
.typcn-camera-outline:before { content: '\e03a'; } /* '' */
.typcn-camera:before { content: '\e03b'; } /* '' */
.typcn-cancel-outline:before { content: '\e03c'; } /* '' */
.typcn-cancel:before { content: '\e03d'; } /* '' */
.typcn-chart-area-outline:before { content: '\e03e'; } /* '' */
.typcn-chart-area:before { content: '\e03f'; } /* '' */
.typcn-chart-bar-outline:before { content: '\e040'; } /* '' */
.typcn-chart-bar:before { content: '\e041'; } /* '' */
.typcn-chart-line-outline:before { content: '\e042'; } /* '' */
.typcn-chart-line:before { content: '\e043'; } /* '' */
.typcn-chart-pie-outline:before { content: '\e044'; } /* '' */
.typcn-chart-pie:before { content: '\e045'; } /* '' */
.typcn-chevron-left-outline:before { content: '\e046'; } /* '' */
.typcn-chevron-left:before { content: '\e047'; } /* '' */
.typcn-chevron-right-outline:before { content: '\e048'; } /* '' */
.typcn-chevron-right:before { content: '\e049'; } /* '' */
.typcn-clipboard:before { content: '\e04a'; } /* '' */
.typcn-cloud-storage:before { content: '\e04b'; } /* '' */
.typcn-cloud-storage-outline:before { content: '\e054'; } /* '' */
.typcn-code-outline:before { content: '\e04c'; } /* '' */
.typcn-code:before { content: '\e04d'; } /* '' */
.typcn-coffee:before { content: '\e04e'; } /* '' */
.typcn-cog-outline:before { content: '\e04f'; } /* '' */
.typcn-cog:before { content: '\e050'; } /* '' */
.typcn-compass:before { content: '\e051'; } /* '' */
.typcn-contacts:before { content: '\e052'; } /* '' */
.typcn-credit-card:before { content: '\e053'; } /* '' */
.typcn-css3:before { content: '\e055'; } /* '' */
.typcn-database:before { content: '\e056'; } /* '' */
.typcn-delete-outline:before { content: '\e057'; } /* '' */
.typcn-delete:before { content: '\e058'; } /* '' */
.typcn-device-desktop:before { content: '\e059'; } /* '' */
.typcn-device-laptop:before { content: '\e05a'; } /* '' */
.typcn-device-phone:before { content: '\e05b'; } /* '' */
.typcn-device-tablet:before { content: '\e05c'; } /* '' */
.typcn-directions:before { content: '\e05d'; } /* '' */
.typcn-divide-outline:before { content: '\e05e'; } /* '' */
.typcn-divide:before { content: '\e05f'; } /* '' */
.typcn-document-add:before { content: '\e060'; } /* '' */
.typcn-document-delete:before { content: '\e061'; } /* '' */
.typcn-document-text:before { content: '\e062'; } /* '' */
.typcn-document:before { content: '\e063'; } /* '' */
.typcn-download-outline:before { content: '\e064'; } /* '' */
.typcn-download:before { content: '\e065'; } /* '' */
.typcn-dropbox:before { content: '\e066'; } /* '' */
.typcn-edit:before { content: '\e067'; } /* '' */
.typcn-eject-outline:before { content: '\e068'; } /* '' */
.typcn-eject:before { content: '\e069'; } /* '' */
.typcn-equals-outline:before { content: '\e06a'; } /* '' */
.typcn-equals:before { content: '\e06b'; } /* '' */
.typcn-export-outline:before { content: '\e06c'; } /* '' */
.typcn-export:before { content: '\e06d'; } /* '' */
.typcn-eye-outline:before { content: '\e06e'; } /* '' */
.typcn-eye:before { content: '\e06f'; } /* '' */
.typcn-feather:before { content: '\e070'; } /* '' */
.typcn-film:before { content: '\e071'; } /* '' */
.typcn-filter:before { content: '\e072'; } /* '' */
.typcn-flag-outline:before { content: '\e073'; } /* '' */
.typcn-flag:before { content: '\e074'; } /* '' */
.typcn-flash-outline:before { content: '\e075'; } /* '' */
.typcn-flash:before { content: '\e076'; } /* '' */
.typcn-flow-children:before { content: '\e077'; } /* '' */
.typcn-flow-merge:before { content: '\e078'; } /* '' */
.typcn-flow-parallel:before { content: '\e079'; } /* '' */
.typcn-flow-switch:before { content: '\e07a'; } /* '' */
.typcn-folder-add:before { content: '\e07b'; } /* '' */
.typcn-folder-delete:before { content: '\e07c'; } /* '' */
.typcn-folder-open:before { content: '\e07d'; } /* '' */
.typcn-folder:before { content: '\e07e'; } /* '' */
.typcn-gift:before { content: '\e07f'; } /* '' */
.typcn-globe-outline:before { content: '\e080'; } /* '' */
.typcn-globe:before { content: '\e081'; } /* '' */
.typcn-group-outline:before { content: '\e082'; } /* '' */
.typcn-group:before { content: '\e083'; } /* '' */
.typcn-headphones:before { content: '\e084'; } /* '' */
.typcn-heart-full-outline:before { content: '\e085'; } /* '' */
.typcn-heart-half-outline:before { content: '\e086'; } /* '' */
.typcn-heart-outline:before { content: '\e087'; } /* '' */
.typcn-heart:before { content: '\e088'; } /* '' */
.typcn-home-outline:before { content: '\e089'; } /* '' */
.typcn-home:before { content: '\e08a'; } /* '' */
.typcn-html5:before { content: '\e08b'; } /* '' */
.typcn-image-outline:before { content: '\e08c'; } /* '' */
.typcn-image:before { content: '\e08d'; } /* '' */
.typcn-infinity-outline:before { content: '\e08e'; } /* '' */
.typcn-infinity:before { content: '\e08f'; } /* '' */
.typcn-info-large-outline:before { content: '\e090'; } /* '' */
.typcn-info-large:before { content: '\e091'; } /* '' */
.typcn-info-outline:before { content: '\e092'; } /* '' */
.typcn-info:before { content: '\e093'; } /* '' */
.typcn-input-checked-outline:before { content: '\e094'; } /* '' */
.typcn-input-checked:before { content: '\e095'; } /* '' */
.typcn-key-outline:before { content: '\e096'; } /* '' */
.typcn-key:before { content: '\e097'; } /* '' */
.typcn-keyboard:before { content: '\e098'; } /* '' */
.typcn-leaf:before { content: '\e099'; } /* '' */
.typcn-lightbulb:before { content: '\e09a'; } /* '' */
.typcn-link-outline:before { content: '\e09b'; } /* '' */
.typcn-link:before { content: '\e09c'; } /* '' */
.typcn-location-arrow-outline:before { content: '\e09d'; } /* '' */
.typcn-location-arrow:before { content: '\e09e'; } /* '' */
.typcn-location-outline:before { content: '\e09f'; } /* '' */
.typcn-location:before { content: '\e0a0'; } /* '' */
.typcn-lock-closed-outline:before { content: '\e0a1'; } /* '' */
.typcn-lock-closed:before { content: '\e0a2'; } /* '' */
.typcn-lock-open-outline:before { content: '\e0a3'; } /* '' */
.typcn-lock-open:before { content: '\e0a4'; } /* '' */
.typcn-mail:before { content: '\e0a5'; } /* '' */
.typcn-map:before { content: '\e0a6'; } /* '' */
.typcn-media-eject-outline:before { content: '\e0a7'; } /* '' */
.typcn-media-eject:before { content: '\e0a8'; } /* '' */
.typcn-media-fast-forward-outline:before { content: '\e0a9'; } /* '' */
.typcn-media-fast-forward:before { content: '\e0aa'; } /* '' */
.typcn-media-pause-outline:before { content: '\e0ab'; } /* '' */
.typcn-media-pause:before { content: '\e0ac'; } /* '' */
.typcn-media-play-outline:before { content: '\e0ad'; } /* '' */
.typcn-media-play-reverse-outline:before { content: '\e0ae'; } /* '' */
.typcn-media-play-reverse:before { content: '\e0af'; } /* '' */
.typcn-media-play:before { content: '\e0b0'; } /* '' */
.typcn-media-record-outline:before { content: '\e0b1'; } /* '' */
.typcn-media-record:before { content: '\e0b2'; } /* '' */
.typcn-media-rewind-outline:before { content: '\e0b3'; } /* '' */
.typcn-media-rewind:before { content: '\e0b4'; } /* '' */
.typcn-media-stop-outline:before { content: '\e0b5'; } /* '' */
.typcn-media-stop:before { content: '\e0b6'; } /* '' */
.typcn-message-typing:before { content: '\e0b7'; } /* '' */
.typcn-message:before { content: '\e0b8'; } /* '' */
.typcn-messages:before { content: '\e0b9'; } /* '' */
.typcn-microphone-outline:before { content: '\e0ba'; } /* '' */
.typcn-microphone:before { content: '\e0bb'; } /* '' */
.typcn-minus-outline:before { content: '\e0bc'; } /* '' */
.typcn-minus:before { content: '\e0bd'; } /* '' */
.typcn-mortar-board:before { content: '\e0be'; } /* '' */
.typcn-news:before { content: '\e0bf'; } /* '' */
.typcn-notes-outline:before { content: '\e0c0'; } /* '' */
.typcn-notes:before { content: '\e0c1'; } /* '' */
.typcn-pen:before { content: '\e0c2'; } /* '' */
.typcn-pencil:before { content: '\e0c3'; } /* '' */
.typcn-phone-outline:before { content: '\e0c4'; } /* '' */
.typcn-phone:before { content: '\e0c5'; } /* '' */
.typcn-pi-outline:before { content: '\e0c6'; } /* '' */
.typcn-pi:before { content: '\e0c7'; } /* '' */
.typcn-pin-outline:before { content: '\e0c8'; } /* '' */
.typcn-pin:before { content: '\e0c9'; } /* '' */
.typcn-pipette:before { content: '\e0ca'; } /* '' */
.typcn-plane-outline:before { content: '\e0cb'; } /* '' */
.typcn-plane:before { content: '\e0cc'; } /* '' */
.typcn-plug:before { content: '\e0cd'; } /* '' */
.typcn-plus-outline:before { content: '\e0ce'; } /* '' */
.typcn-plus:before { content: '\e0cf'; } /* '' */
.typcn-point-of-interest-outline:before { content: '\e0d0'; } /* '' */
.typcn-point-of-interest:before { content: '\e0d1'; } /* '' */
.typcn-power-outline:before { content: '\e0d2'; } /* '' */
.typcn-power:before { content: '\e0d3'; } /* '' */
.typcn-printer:before { content: '\e0d4'; } /* '' */
.typcn-puzzle-outline:before { content: '\e0d5'; } /* '' */
.typcn-puzzle:before { content: '\e0d6'; } /* '' */
.typcn-radar-outline:before { content: '\e0d7'; } /* '' */
.typcn-radar:before { content: '\e0d8'; } /* '' */
.typcn-refresh-outline:before { content: '\e0d9'; } /* '' */
.typcn-refresh:before { content: '\e0da'; } /* '' */
.typcn-rss-outline:before { content: '\e0db'; } /* '' */
.typcn-rss:before { content: '\e0dc'; } /* '' */
.typcn-scissors-outline:before { content: '\e0dd'; } /* '' */
.typcn-scissors:before { content: '\e0de'; } /* '' */
.typcn-shopping-bag:before { content: '\e0df'; } /* '' */
.typcn-shopping-cart:before { content: '\e0e0'; } /* '' */
.typcn-social-at-circular:before { content: '\e0e1'; } /* '' */
.typcn-social-dribbble-circular:before { content: '\e0e2'; } /* '' */
.typcn-social-dribbble:before { content: '\e0e3'; } /* '' */
.typcn-social-facebook-circular:before { content: '\e0e4'; } /* '' */
.typcn-social-facebook:before { content: '\e0e5'; } /* '' */
.typcn-social-flickr-circular:before { content: '\e0e6'; } /* '' */
.typcn-social-flickr:before { content: '\e0e7'; } /* '' */
.typcn-social-github-circular:before { content: '\e0e8'; } /* '' */
.typcn-social-github:before { content: '\e0e9'; } /* '' */
.typcn-social-google-plus-circular:before { content: '\e0ea'; } /* '' */
.typcn-social-google-plus:before { content: '\e0eb'; } /* '' */
.typcn-social-instagram-circular:before { content: '\e0ec'; } /* '' */
.typcn-social-instagram:before { content: '\e0ed'; } /* '' */
.typcn-social-last-fm-circular:before { content: '\e0ee'; } /* '' */
.typcn-social-last-fm:before { content: '\e0ef'; } /* '' */
.typcn-social-linkedin-circular:before { content: '\e0f0'; } /* '' */
.typcn-social-linkedin:before { content: '\e0f1'; } /* '' */
.typcn-social-pinterest-circular:before { content: '\e0f2'; } /* '' */
.typcn-social-pinterest:before { content: '\e0f3'; } /* '' */
.typcn-social-skype-outline:before { content: '\e0f4'; } /* '' */
.typcn-social-skype:before { content: '\e0f5'; } /* '' */
.typcn-social-tumbler-circular:before { content: '\e0f6'; } /* '' */
.typcn-social-tumbler:before { content: '\e0f7'; } /* '' */
.typcn-social-twitter-circular:before { content: '\e0f8'; } /* '' */
.typcn-social-twitter:before { content: '\e0f9'; } /* '' */
.typcn-social-vimeo-circular:before { content: '\e0fa'; } /* '' */
.typcn-social-vimeo:before { content: '\e0fb'; } /* '' */
.typcn-social-youtube-circular:before { content: '\e0fc'; } /* '' */
.typcn-social-youtube:before { content: '\e0fd'; } /* '' */
.typcn-sort-alphabetically-outline:before { content: '\e0fe'; } /* '' */
.typcn-sort-alphabetically:before { content: '\e0ff'; } /* '' */
.typcn-sort-numerically-outline:before { content: '\e100'; } /* '' */
.typcn-sort-numerically:before { content: '\e101'; } /* '' */
.typcn-spanner-outline:before { content: '\e102'; } /* '' */
.typcn-spanner:before { content: '\e103'; } /* '' */
.typcn-spiral:before { content: '\e104'; } /* '' */
.typcn-star-full-outline:before { content: '\e105'; } /* '' */
.typcn-star-half-outline:before { content: '\e106'; } /* '' */
.typcn-star-half:before { content: '\e107'; } /* '' */
.typcn-star-outline:before { content: '\e108'; } /* '' */
.typcn-star:before { content: '\e109'; } /* '' */
.typcn-starburst-outline:before { content: '\e10a'; } /* '' */
.typcn-starburst:before { content: '\e10b'; } /* '' */
.typcn-stopwatch:before { content: '\e10c'; } /* '' */
.typcn-support:before { content: '\e10d'; } /* '' */
.typcn-tabs-outline:before { content: '\e10e'; } /* '' */
.typcn-tag:before { content: '\e10f'; } /* '' */
.typcn-tags:before { content: '\e110'; } /* '' */
.typcn-th-large-outline:before { content: '\e111'; } /* '' */
.typcn-th-large:before { content: '\e112'; } /* '' */
.typcn-th-list-outline:before { content: '\e113'; } /* '' */
.typcn-th-list:before { content: '\e114'; } /* '' */
.typcn-th-menu-outline:before { content: '\e115'; } /* '' */
.typcn-th-menu:before { content: '\e116'; } /* '' */
.typcn-th-small-outline:before { content: '\e117'; } /* '' */
.typcn-th-small:before { content: '\e118'; } /* '' */
.typcn-thermometer:before { content: '\e119'; } /* '' */
.typcn-thumbs-down:before { content: '\e11a'; } /* '' */
.typcn-thumbs-ok:before { content: '\e11b'; } /* '' */
.typcn-thumbs-up:before { content: '\e11c'; } /* '' */
.typcn-tick-outline:before { content: '\e11d'; } /* '' */
.typcn-tick:before { content: '\e11e'; } /* '' */
.typcn-ticket:before { content: '\e11f'; } /* '' */
.typcn-time:before { content: '\e120'; } /* '' */
.typcn-times-outline:before { content: '\e121'; } /* '' */
.typcn-times:before { content: '\e122'; } /* '' */
.typcn-trash:before { content: '\e123'; } /* '' */
.typcn-tree:before { content: '\e124'; } /* '' */
.typcn-upload-outline:before { content: '\e125'; } /* '' */
.typcn-upload:before { content: '\e126'; } /* '' */
.typcn-user-add-outline:before { content: '\e127'; } /* '' */
.typcn-user-add:before { content: '\e128'; } /* '' */
.typcn-user-delete-outline:before { content: '\e129'; } /* '' */
.typcn-user-delete:before { content: '\e12a'; } /* '' */
.typcn-user-outline:before { content: '\e12b'; } /* '' */
.typcn-user:before { content: '\e12c'; } /* '' */
.typcn-vendor-android:before { content: '\e12d'; } /* '' */
.typcn-vendor-apple:before { content: '\e12e'; } /* '' */
.typcn-vendor-microsoft:before { content: '\e12f'; } /* '' */
.typcn-video-outline:before { content: '\e130'; } /* '' */
.typcn-video:before { content: '\e131'; } /* '' */
.typcn-volume-down:before { content: '\e132'; } /* '' */
.typcn-volume-mute:before { content: '\e133'; } /* '' */
.typcn-volume-up:before { content: '\e134'; } /* '' */
.typcn-volume:before { content: '\e135'; } /* '' */
.typcn-warning-outline:before { content: '\e136'; } /* '' */
.typcn-warning:before { content: '\e137'; } /* '' */
.typcn-watch:before { content: '\e138'; } /* '' */
.typcn-waves-outline:before { content: '\e139'; } /* '' */
.typcn-waves:before { content: '\e13a'; } /* '' */
.typcn-weather-cloudy:before { content: '\e13b'; } /* '' */
.typcn-weather-downpour:before { content: '\e13c'; } /* '' */
.typcn-weather-night:before { content: '\e13d'; } /* '' */
.typcn-weather-partly-sunny:before { content: '\e13e'; } /* '' */
.typcn-weather-shower:before { content: '\e13f'; } /* '' */
.typcn-weather-snow:before { content: '\e140'; } /* '' */
.typcn-weather-stormy:before { content: '\e141'; } /* '' */
.typcn-weather-sunny:before { content: '\e142'; } /* '' */
.typcn-weather-windy-cloudy:before { content: '\e143'; } /* '' */
.typcn-weather-windy:before { content: '\e144'; } /* '' */
.typcn-wi-fi-outline:before { content: '\e145'; } /* '' */
.typcn-wi-fi:before { content: '\e146'; } /* '' */
.typcn-wine:before { content: '\e147'; } /* '' */
.typcn-world-outline:before { content: '\e148'; } /* '' */
.typcn-world:before { content: '\e149'; } /* '' */
.typcn-zoom-in-outline:before { content: '\e14a'; } /* '' */
.typcn-zoom-in:before { content: '\e14b'; } /* '' */
.typcn-zoom-out-outline:before { content: '\e14c'; } /* '' */
.typcn-zoom-out:before { content: '\e14d'; } /* '' */
.typcn-zoom-outline:before { content: '\e14e'; } /* '' */
.typcn-zoom:before { content: '\e14f'; } /* '' */</style>