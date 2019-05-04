<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/icon/themify-icons/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="/icon/icofont/css/icofont.css">
        <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
        <link rel="stylesheet" href="/css/leaflet-routing-machine.css">
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script src="/js/leaflet-routing-machine.js"></script>
        <script src="/js/l.control.geosearch.js"></script>
        <script src="/js/l.geosearch.provider.google.js"></script>
        <style>
            .container
            {
                padding-top:100px;
                padding-bottom:100px;
            }
            .titlediv
            {
                height:50px;
                overflow:hidden;

            }
            .title
            {
                display: inline-block;
            }
            .img-logo
            {
                height:50px;
                transform: translateY(-10px);
            }
            form
            {
                margin-top:50px;
            }
            #mapid{
                width: 100%;
                height: 400px;
            }
        </style>
    </head>
    <body>