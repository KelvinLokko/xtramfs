<html lang="en" dir="ltr"><!-- Mirrored from templates.iqonic.design/vito/html/main/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 14:23:02 GMT --><head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Vito - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">

      <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <link rel="stylesheet" href="css/swiper-bundle.min.css">
   <style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
  padding: 4px 8px;
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse;
}

.apexcharts-tooltip-box>div {
  margin: 4px 0;
}

.apexcharts-tooltip-box span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}</style><style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style></head>
   <body class="">
      <!-- loader Start -->
      <div id="loading" style="display: none;">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <div class="iq-light-logo">
                  <img src="images/logo.gif" class="img-fluid" alt="">
               </div>
               <div class="iq-dark-logo">
                  <img src="images/logo-dark.gif" class="img-fluid" alt="">
               </div>
               <span>Vito</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                     <li>
                        <a href="index.html" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard 1</span></a>
                     </li>
                     <li class="active">
                        <a href="dashboard-1.html" class="iq-waves-effect"><i class="ri-home-3-line"></i><span>Dashboard 2</span></a>
                     </li>
                     <li aria-expanded="true">
                        <a href="dashboard-2.html" class="iq-waves-effect"><i class="ri-home-8-line"></i><span>Dashboard 3</span></a>
                     </li>
                     <li>
                        <a href="dashboard-3.html" class="iq-waves-effect"><i class="ri-home-7-line"></i><span>Dashboard 4</span></a>
                     </li>
                     <li>
                        <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Menu Design</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="horizontal-menu.html"><i class="ri-git-commit-line"></i>Horizontal menu</a></li>
                           <li><a href="horizontal-top-menu.html"><i class="ri-text-spacing"></i>Horizontal Top Menu</a></li>
                           <li><a href="two-sidebar.html"><i class="ri-indent-decrease"></i>Two Sidebar</a></li>
                           <li><a href="vertical-top-menu.html"><i class="ri-line-height"></i>Vertical block menu</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                     <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="app/index.html"><i class="ri-inbox-line"></i>Inbox</a></li>
                           <li><a href="app/email-compose.html"><i class="ri-edit-line"></i>Email Compose</a></li>
                        </ul>
                     </li>
                     <li><a href="todo.html" class="iq-waves-effect" aria-expanded="false"><i class="ri-chat-check-line"></i><span>Todo</span></a></li>
                     <li>
                        <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="profile.html"><i class="ri-profile-line"></i>User Profile</a></li>
                           <li><a href="profile-edit.html"><i class="ri-file-edit-line"></i>User Edit</a></li>
                           <li><a href="add-user.html"><i class="ri-user-add-line"></i>User Add</a></li>
                           <li><a href="user-list.html"><i class="ri-file-list-line"></i>User List</a></li>
                        </ul>
                     </li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Calendar</span></a></li>
                     <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-line"></i><span>Chat</span></a></li>
                     <li>
                        <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>E-commerce</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="e-commerce-product-list.html"><i class="ri-file-list-line"></i>Product Listing</a></li>
                           <li><a href="e-commerce-product-detail.html"><i class="ri-pages-line"></i>Product Details</a></li>
                           <li><a href="e-commerce-checkout.html"><i class="ri-shopping-cart-2-line"></i>Checkout</a></li>
                           <li><a href="e-commerce-wishlist.html"><i class="ri-heart-line"></i>Wishlist</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                           <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                           <li><a href="ui-alerts.html"><i class="ri-alert-line"></i>Alerts</a></li>
                           <li><a href="ui-badges.html"><i class="ri-building-3-line"></i>Badges</a></li>
                           <li><a href="ui-breadcrumb.html"><i class="ri-menu-2-line"></i>Breadcrumb</a></li>
                           <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-line"></i>Buttons</a></li>
                           <li><a href="ui-cards.html"><i class="ri-bank-card-line"></i>Cards</a></li>
                           <li><a href="ui-carousel.html"><i class="ri-slideshow-line"></i>Carousel</a></li>
                           <li><a href="ui-embed-video.html"><i class="ri-slideshow-2-line"></i>Video</a></li>
                           <li><a href="ui-grid.html"><i class="ri-grid-line"></i>Grid</a></li>
                           <li><a href="ui-images.html"><i class="ri-image-line"></i>Images</a></li>
                           <li><a href="ui-list-group.html"><i class="ri-file-list-3-line"></i>list Group</a></li>
                           <li><a href="ui-media-object.html"><i class="ri-camera-line"></i>Media</a></li>
                           <li><a href="ui-modal.html"><i class="ri-stop-mini-line"></i>Modal</a></li>
                           <li><a href="ui-notifications.html"><i class="ri-notification-line"></i>Notifications</a></li>
                           <li><a href="ui-pagination.html"><i class="ri-pages-line"></i>Pagination</a></li>
                           <li><a href="ui-popovers.html"><i class="ri-folder-shield-2-line"></i>Popovers</a></li>
                           <li><a href="ui-progressbars.html"><i class="ri-battery-low-line"></i>Progressbars</a></li>
                           <li><a href="ui-tabs.html"><i class="ri-database-line"></i>Tabs</a></li>
                           <li><a href="ui-tooltips.html"><i class="ri-record-mail-line"></i>Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html"><i class="ri-tablet-line"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="ri-device-line"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="ri-toggle-line"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="ri-checkbox-line"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="wizard-form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                           <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                           <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                           <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                           <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>
                           <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                           <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                           <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                           <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                           <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html"><i class="ri-login-box-line"></i>Login</a></li>
                           <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                           <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#map-page" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-user-line"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="map-page" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-map.html"><i class="ri-google-line"></i>Google Map</a></li>
                           <li><a href="#"><i class="ri-map-pin-range-line"></i>Vector Map</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                           <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                           <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                           <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                           <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                           <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                           <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-line"></i>Pricing 1</a></li>
                           <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                           <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                           <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                              <ul>
                                 <li>
                                    <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                       <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                                       <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                                       <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 260px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 386.98px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <div class="iq-light-logo">
                  <img src="images/logo.gif" class="img-fluid" alt="">
               </div>
               <div class="iq-dark-logo">
                  <img src="images/logo-dark.gif" class="img-fluid" alt="">
               </div>
                     <span>vito</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="navbar-left">
                  <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                     <li class="nav-item">
                         <a href="index.html" class="nav-link font-weight-bold search-box-toggle"><i class="ri-home-4-line"></i></a>
                     </li>
                     <li><a href="chat.html" class="nav-link"><i class="ri-message-line"></i></a></li>
                     <li><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-file-list-line"></i></a></li>
                     <li><a href="profile.html" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
                     <li><a href="todo.html" class="nav-link router-link-exact-active router-link-active"><i class="ri-chat-check-line"></i></a></li>
                     <li><a href="app/index.html" class="nav-link"><i class="ri-inbox-line"></i></a></li>
                  </ul>
                  <div class="iq-search-bar d-none d-md-block">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <div class="searchbox-datalink">
                          <h6 class="pl-3 pt-3 pb-3">Pages</h6>
                           <ul class="m-0 pl-3 pr-3 pb-3">
                              <li class="iq-bg-primary-hover rounded"><a href="index.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="dashboard-1.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="chat.html" class="nav-link"><i class="ri-message-line pr-2"></i>Chat</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="calendar.html" class="nav-link"><i class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="profile.html" class="nav-link"><i class="ri-profile-line pr-2"></i>Profile</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="todo.html" class="nav-link"><i class="ri-chat-check-line pr-2"></i>Todo</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="app/index.html" class="nav-link"><i class="ri-mail-line pr-2"></i>Email</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-message-line pr-2"></i>Product Listing</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-detail.html" class="nav-link"><i class="ri-file-list-line pr-2"></i>Product Details</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="pages-faq.html" class="nav-link"><i class="ri-compasses-line pr-2"></i>Faq</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="form-wizard.html" class="nav-link"><i class="ri-clockwise-line pr-2"></i>Form-wizard</a></li>
                           </ul>
                        </div>
                     </form>
                  </div>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
               <i class="ri-menu-3-line"></i>
               </button>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                     <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                  </div>
               </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect language-title" href="#"><img src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;"> English <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2">French</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2">Spanish</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2">Italian</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2">German</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2">Japanese</a>

                           </div>
                        </li>
                        
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <div id="lottie-beil"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 192" width="192" height="192" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_2"><rect width="192" height="192" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_2)"><g transform="matrix(5.833330154418945,0,0,5.833330154418945,26.000038146972656,30.528366088867188)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,12,21.639999389648438)"></g><g opacity="1" transform="matrix(0.8666720390319824,-0.4988783597946167,0.4988783597946167,0.8666720390319824,12,8.654000282287598)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d=" M6,-0.6539999842643738 C6,-5.052999973297119 1.2649999856948853,-8.345999717712402 -3.38700008392334,-5.715000152587891 C-5.052000045776367,-4.77400016784668 -6.0329999923706055,-2.9560000896453857 -6.002999782562256,-1.0440000295639038 C-5.888999938964844,6.271999835968018 -9,8.345999717712402 -9,8.345999717712402 C-9,8.345999717712402 9,8.345999717712402 9,8.345999717712402 C9,8.345999717712402 6,6.3460001945495605 6,-0.6539999842643738z"></path></g><g opacity="1" transform="matrix(0.9184415340423584,-0.3955567181110382,0.3955567181110382,0.9184415340423584,14.00037670135498,22.140199661254883)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d=" M1.7300000190734863,-0.6399999856948853 C1.1749999523162842,0.3149999976158142 -0.04800000041723251,0.6399999856948853 -1.003999948501587,0.08699999749660492 C-1.3049999475479126,-0.08799999952316284 -1.555999994277954,-0.33799999952316284 -1.7300000190734863,-0.6399999856948853"></path></g></g></g></svg></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>

                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Nik</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Two customer is left</h6>
                                             <small class="float-right font-size-12">2 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Mail from Fenny</h6>
                                             <small class="float-right font-size-12">3 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                             <div id="lottie-mail"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 192" width="192" height="192" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_7"><rect width="192" height="192" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_7)"><g transform="matrix(6.8782429695129395,0.11090099066495895,-0.11090099066495895,6.8782429695129395,14.791893005371094,27.993736267089844)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,12,12.399999618530273)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d=" M8.20199966430664,-6.318999767303467 C8.682999610900879,-6.021999835968018 9,-5.51800012588501 9,-4.949999809265137 C9,-4.949999809265137 9,4.949999809265137 9,4.949999809265137 C9,5.857999801635742 8.190999984741211,6.599999904632568 7.199999809265137,6.599999904632568 C7.199999809265137,6.599999904632568 -7.199999809265137,6.599999904632568 -7.199999809265137,6.599999904632568 C-8.1899995803833,6.599999904632568 -9,5.857999801635742 -9,4.949999809265137 C-9,4.949999809265137 -9,-4.949999809265137 -9,-4.949999809265137 C-9,-5.4730000495910645 -8.730999946594238,-5.940999984741211 -8.314000129699707,-6.24399995803833"></path></g><g opacity="1" transform="matrix(1,0,0,1,12,9.75)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d=" M7.98799991607666,-3.881999969482422 C7.98799991607666,-3.881999969482422 0,-10.239999771118164 0,-10.239999771118164 C0,-10.239999771118164 -7.98799991607666,-3.8450000286102295 -7.98799991607666,-3.8450000286102295"></path></g></g><g transform="matrix(6.8782429695129395,0.11090099066495895,-0.11090099066495895,6.8782429695129395,15.120492935180664,7.613500118255615)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,12,15.399999618530273)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d=" M-7.199999809265137,-6.599999904632568 C-7.199999809265137,-6.599999904632568 7.199999809265137,-6.599999904632568 7.199999809265137,-6.599999904632568 C8.190999984741211,-6.599999904632568 9,-5.85699987411499 9,-4.949999809265137 C9,-4.949999809265137 9,4.949999809265137 9,4.949999809265137 C9,5.857999801635742 8.190999984741211,6.599999904632568 7.199999809265137,6.599999904632568 C7.199999809265137,6.599999904632568 -7.199999809265137,6.599999904632568 -7.199999809265137,6.599999904632568 C-8.1899995803833,6.599999904632568 -9,5.857999801635742 -9,4.949999809265137 C-9,4.949999809265137 -9,-4.949999809265137 -9,-4.949999809265137 C-9,-5.85699987411499 -8.1899995803833,-6.599999904632568 -7.199999809265137,-6.599999904632568z"></path></g><g opacity="1" transform="matrix(1,0,0,1,12,7.5)"><path fill="rgb(255,255,255)" fill-opacity="1" d=" M7.0132951736450195,2.8773601055145264 C7.0132951736450195,2.8773601055145264 7.04710054397583,-3.32043719291687 7.04710054397583,-3.32043719291687 C7.04710054397583,-3.32043719291687 -6.95289945602417,-3.32043719291687 -6.95289945602417,-3.32043719291687 C-6.95289945602417,-3.32043719291687 -6.9867048263549805,2.8773601055145264 -6.9867048263549805,2.8773601055145264"></path><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d=" M7.0132951736450195,2.8773601055145264 C7.0132951736450195,2.8773601055145264 7.04710054397583,-3.32043719291687 7.04710054397583,-3.32043719291687 C7.04710054397583,-3.32043719291687 -6.95289945602417,-3.32043719291687 -6.95289945602417,-3.32043719291687 C-6.95289945602417,-3.32043719291687 -6.9867048263549805,2.8773601055145264 -6.9867048263549805,2.8773601055145264"></path></g><g opacity="1" transform="matrix(1,0,0,1,12,12.75)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d=" M8,-3.1500000953674316 C8,-3.1500000953674316 0,3.1500000953674316 0,3.1500000953674316 C0,3.1500000953674316 -8,-3.1500000953674316 -8,-3.1500000953674316"></path></g></g></g></svg></div>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Nik Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                      <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                           <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height text-white">Nik jone</h6>
                              <span class="font-size-12 text-white">Available</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary dark-btn-primary" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
               

            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               
               <div class="row">
                   <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Frequent Post List</h4>
                           </div>
                        </div>


                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Package No.</th>
                                       <th scope="col">Date</th>
                                       <th scope="col">Delivery</th>
                                       <th scope="col">Status</th>
                                       <th scope="col">Location</th>
                                       <th scope="col">Progress</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#0879985</td>
                                       <td>26/12/2019</td>
                                       <td>30/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-success">Moving</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-success" data-percent="90" style="transition: width 2s ease 0s; width: 90%;"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879984</td>
                                       <td>23/12/2019</td>
                                       <td>27/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-warning text-white">Pending</div>
                                       </td>
                                       <td>Athens 2745 Greece</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-warning" data-percent="70" style="transition: width 2s ease 0s; width: 70%;"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879983</td>
                                       <td>18/12/2019</td>
                                       <td>21/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-danger">Canceled</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-danger" data-percent="48" style="transition: width 2s ease 0s; width: 48%;"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879982</td>
                                       <td>14/12/2019</td>
                                       <td>20/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-info">Working</div>
                                       </td>
                                       <td>Delhi 0014 India</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-info" data-percent="90" style="transition: width 2s ease 0s; width: 90%;"></span>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>

                        
                     </div>
                  </div>
                  
               </div>
               <div class="row">
                 <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright <span id="copyright"> 
<script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>2024
</span> <a href="#">Vito</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <nav class="iq-float-menu">
         <input type="checkbox" href="#" class="iq-float-menu-open" name="menu-open" id="menu-open">
         <label class="iq-float-menu-open-button" for="menu-open">
            <span class="lines line-1"></span>
            <span class="lines line-2"></span>
            <span class="lines line-3"></span>
         </label>
         <button class="iq-float-menu-item bg-info" data-toggle="tooltip" data-placement="top" title="" data-mode="rtl" data-active="true" data-original-title="Direction Mode"><i class="ri-text-direction-r"></i></button>
         <button class="iq-float-menu-item bg-danger" data-toggle="tooltip" data-placement="top" title="" id="dark-mode" data-active="true" data-original-title="Color Mode"><i class="ri-sun-line"></i></button>
         <button class="iq-float-menu-item bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comming Soon"><i class="ri-palette-line"></i></button> 
      </nav>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <!-- Rtl and Darkmode -->
      <script src="js/rtl.js"></script>
      <script src="js/customizer.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="js/kelly.js"></script>
      <!-- Flatpicker Js -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
      <!-- swiper -->
      <script src="js/swiper.min.js"></script>
      <script src="js/slider.js"> </script>
   



<div hidden=""><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><desc>JavaScript chart by amCharts</desc><defs><clipPath id="id-119"><path></path></clipPath><filter id="filter-id-124" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs></svg></div></div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body><!-- Mirrored from templates.iqonic.design/vito/html/main/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 14:23:05 GMT --></html>