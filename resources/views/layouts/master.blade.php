<?php
include './../bootstrap.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The place on the internet for people to
        find adventure and connect with their communities." />
    <meta name="keywords" content="Social Network, Social Media, Make Friends,
        Newsfeed, Profile Page, Make Friends, Like Minds" />
    <meta name="robots" content="index, follow" />
    @yield('title')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/css/herohead.css">
	<link rel="stylesheet" href="/assets/css/idangerous.swiper.css">
    <link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/stylesheet.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel|Montserrat" rel="stylesheet">

</head>
<body>
@include('layouts.partials.navbar')
	<div id="space-for-nav"></div>
    @yield('content')
    @include('layouts.partials.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="/assets/js/jquery-2.1.4.min.js"></script>
	<script src="/assets/js/jquery-ui.min.js"></script>
	<script src="/assets/js/jquery.viewportchecker.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.appear.min.js"></script>
    <script src="/assets/js/jquery.incremental-counter.js"></script>
	<script src="/assets/js/jquery.mixitup.js"></script>
	<script src="/assets/js/idangerous.swiper.min.js"></script>
	<script src="/assets/js/filters.js"></script>
	<script src="/assets/js/global.js"></script>
    <script src="/assets/js/script.js"></script>

    <script src="/assets/js/herohead.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-106000460-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
