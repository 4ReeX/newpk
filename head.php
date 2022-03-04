<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon-precomposed" href="images/new-logo.png"> 
    <link  rel="apple-touch-startup-image"  href="images/startup-logo.png">

    <title>Заголовок страницы</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v12s11">
    <link rel="stylesheet" href="assets/css/media.css?v12s11" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">   
    <script type="text/javascript" src="assets/js/jquery.touchSwipe.min.js"></script> 
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

</head>
<script>
    function changeTheme(){ 
        $('body').toggleClass('theme-dark');   
        $( "span.lightMode" ).toggle();    
    };
</script>
<body  onload="openTabs1();" class="bodyOffers">
<?php  include 'sidebar.php';?>
<div id="right-panel" class="right-panel">
<?php include 'header.php';?>