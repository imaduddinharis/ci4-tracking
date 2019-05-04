<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Leaflet JS - <?=$title?></title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="/icon/icofont/css/icofont.css">
    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="/css/datatables.css">
    <link rel="stylesheet" type="text/css" href="/css/buttons.dataTables.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="/css/select2.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Style Bulog.css -->
    <link rel="stylesheet" type="text/css" href="/css/style-bulog.css">
    <link rel="stylesheet" type="text/css" href="/css/style-bulog-print.css" media="print">
    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <link rel="stylesheet" href="/css/leaflet-routing-machine.css">
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
<script src="/js/leaflet-routing-machine.js"></script>
<script src="/js/l.control.geosearch.js"></script>
<script src="/js/l.geosearch.provider.google.js"></script>
  <style>
#mapid{
	width: 100%;
	height: 400px;
}
div#mapsLokasi{
	width: 100%;
	height: 400px;
}
div#search {
  background-color: white;
  position: absolute;
  bottom: 40px;
  left: 40px;
  width: auto;
  height: auto;
  padding: 10px;
  z-index:999;
}
div#search input {
  width: 200px;
}
div#results {
  font-style: sans-serif;
  color: black;
  font-size: 75%;
}

div#mapsLokasiAsal{
	width: 100%;
	height: 400px;
}
div#searchasal {
  background-color: white;
  position: absolute;
  bottom: 40px;
  left: 40px;
  width: auto;
  height: auto;
  padding: 10px;
  z-index:999;
}
div#searchasal input {
  width: 200px;
}
div#resultsasal {
  font-style: sans-serif;
  color: black;
  font-size: 75%;
}

div#mapsLokasiTujuan{
	width: 100%;
	height: 400px;
}
div#searchtujuan {
  background-color: white;
  position: absolute;
  bottom: 40px;
  left: 40px;
  width: auto;
  height: auto;
  padding: 10px;
  z-index:999;
}
div#searchtujuan input {
  width: 200px;
}
div#resultstujuan {
  font-style: sans-serif;
  color: black;
  font-size: 75%;
}

</style>
 </head>
  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
      <div class="ball-scale">
        <img src="/images/logo-track.png"/>
      </div>
    </div>

    <div class="loading-wrap">
      <div class="loading-box">
        <img src="/images/logo-track.png"/>
        <span>Mohon tunggu...</span>
        <div class="progress" style="height: 10px;">
          <div id="progress-bar" class="progress-bar" role="progressbar"></div>
        </div>
      </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
  <div class="navbar-wrapper">
    <div class="navbar-logo">
      <a class="mobile-menu" id="mobile-collapse" href="#!">
        <i class="ti-menu"></i>
      </a>
      <a class="mobile-search morphsearch-search" href="#">
        <i class="ti-search"></i>
      </a>
      <a href="">
        <img class="img-fluid" src="/images/logo-track.png" alt="Track Logo Logo" width="60" />
      </a>
      <h4>LeafletJS</h4>
      <a class="mobile-options">
        <i class="ti-more"></i>
      </a>
    </div>
    <div class="navbar-container container-fluid">
      <ul class="nav-left">
        <li>
          <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
        </li>
      </ul>
      <ul class="nav-right">
        
        <li class="user-profile header-notification">
          <a href="#!">
            <span style="text-transform: capitalize;"><?=$uname?></span>
            <i class="ti-angle-down"></i>
          </a>
          <ul class="show-notification profile-notification">
            <li>
              <a href="#" onclick="window.location.href='/auth/logout'">
                <i class="ti-layout-sidebar-left"></i> Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <nav class="pcoded-navbar">
      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
      <div class="pcoded-inner-navbar main-menu">
        <div class="card-block pb-0">

          <div class="card no-shadow mb-0 bg-transparent">
            <div class="main-menu-header pt-3 pb-3 bg-transparent">
              <div class="user-details ml-0">
                <span></span>
                <span id="more-details"><?= $uname ?><i class="ti-angle-down"></i></span>
              </div>
            </div>
            <div class="main-menu-content">
              <ul>
                <li class="more-details">
                  <a href="#" onclick="window.location.href='/auth/logout'"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>
              </ul>
            </div>
          </div>

        </div>
        <?php 
        ?>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Dashboard</div>
          <ul class="pcoded-item pcoded-left-item">
            <li class="navmenu">
              <a href="/">
                <span class="pcoded-micon">
                  <i class="ti-dashboard"></i>
                </span>
                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Dashboard</span>
                <span class="pcoded-mcaret"></span>
              </a>
            </li>
          </ul>        
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Data</div>
          <ul class="pcoded-item pcoded-left-item">
            <li class="navmenu">
              <a href="/barang">
                <span class="pcoded-micon">
                  <i class="ti-package"></i>
                </span>
                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Data Barang</span>
                <span class="pcoded-mcaret"></span>
              </a>
            </li>
            <li class="navmenu">
              <a href="/lokasi">
                <span class="pcoded-micon">
                  <i class="ti-map"></i>
                  <b>D</b>
                </span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Data Lokasi</span>
                <span class="pcoded-mcaret"></span>
              </a>
            </li>
          </ul>
        
        <br>
        <br>
        <br>
        <br>
      </div>
    </nav>
