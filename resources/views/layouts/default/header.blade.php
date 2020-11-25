<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>{{ $title }}</title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="Clean, Cleaning, Maid, Laundry, Car Cleaning, Gardening, Janitorial, Move In Out, Window Cleaning" />
		<meta name="description" content="Responsive Cleaning Company Maid Gardening Template" />
		<!--slider revolution-->
		<link rel="shortcut icon" href="{{ asset('') }}/favicon.ico">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/rs-plugin/css/settings.css">
	<!--style-->
		<link href='//fonts.googleapis.com/css?family=Raleway:300,400,500&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ asset('') }}/style/custom.css">

{{--		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/bootstrap.css">--}}


{{--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/reset.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/superfish.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/style.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/animations.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/responsive.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/style/odometer-theme-default.css">
		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/fonts/features/style.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/fonts/template/style.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('') }}/fonts/social/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('style/lightslider.css') }}">


		<style>
            * {
                cursor: url({{ asset('cursor.cur') }}), auto;
            }
		    .transparent-header-container .header-container.sticky.move#cm-sticky-clone {
               padding: 5px 0px 15px 0px !important;
            }
            .logo img, .logo-clone img{
                height:70px;
            }

            @media screen and (max-width:1190px){
             .logo img, .logo-clone img {
                height: 40px;
            }
            }

            .sf-menu li a {
                font-weight: bold;
            }


            .event__search__floater {
                position: fixed;
                top: 50px;
                /*   left:0; */
                right: 50px;
                transition: all ease-in-out 0.2s;
                transform: translate(-50%, -50%);
            }

            .search__anchor{
                position: relative;
                width:auto;
                height: auto;
                /*   TODO: Center anchor */
            }
            .search__submit {
                opacity:0;
                width: 0px;
            }
            .search__bar {
                position: absolute;
                top:5px;
                left:0;
                right:0;
                bottom:0;
                outline:none;
                border:none;
                background: #fff;
                width: 50px;
                height:50px;
                border-radius: 25px;
                opacity: 0;
                z-index:5;
                transition: all 0.2;
                font-size: 1em;
            }
            .search__bar:hover{
                cursor: pointer;
            }
            .search__bar:focus {
                width: 180px;
                left:auto;
                opacity: 1;
                cursor: text;
                transition: all 0.2;
                padding-left: 25px;
                padding-right: 70px;
            }
            .search__toggler {
                position: absolute;
                width: 40px;
                height: 40px;
                background: #0072AE;
                opacity: 1;
                top: 0px;
                left: 10px;
                border-radius: 50%;
                transition: all 0.2s;
            }
            .search__toggler:hover{
                cursor: pointer;
            }
            .search__toggler::before {
                content: "";
                position: absolute;
                margin: auto;
                top: 15px;
                right: 5px;
                bottom: 0px;
                left: 20px;
                width: 12px;
                height: 2px;
                background: #fff;
                transform: rotate(45deg);
                transition: all 0.2s;
            }
            .search__toggler::after {
                content: "";
                position: absolute;
                margin: auto;
                top:-5px;
                right:0;
                bottom:0;
                left: -5px;
                width:15px;
                height: 15px;
                border-radius: 50%;
                border: 2px solid #fff;
                transition: all 0.2s;
            }
            .search__bar:focus ~ .search__toggler {
                right: 400px;
                background: #151515;
                z-index: 6;
                transition: all 0.2;
            }
            .search__bar:focus ~ .search__toggler::before{
                top: 0;
                left: 0;
                width: 25px;
            }
            .search__bar:focus ~ .search__toggler::after {
                top: 0;
                left: 0;
                width: 25px;
                height: 2px;
                border: none;
                background: white;
                border-radius: 0%;
                transform: rotate(-45deg);
            }

            .features-list li a:hover {
                color: #0072AE;
            }

		</style>

	</head>

	<body class="<?php echo (isset($_COOKIE['cm_layout']) && $_COOKIE['cm_layout']=="boxed" ? (isset($_COOKIE['cm_layout_style']) && $_COOKIE['cm_layout_style']!="" ? $_COOKIE['cm_layout_style'] . ' ' . $_COOKIE['cm_image_overlay'] : 'image-1 overlay') : ''); echo (isset($_COOKIE['cm_header_top_bar']) && $_COOKIE['cm_header_top_bar']=="yes" ? ' with-topbar' : ''); ?>">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v8.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="485552178238634"
         theme_color="#0072ae">
    </div>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v8.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="485552178238634"
         theme_color="#0072ae">
    </div>


			<div class="header-container">
			<!--<div class="header-container sticky">-->
				<div class="header clearfix">

					<div class="logo">
						<h1>
						<a href="{{ url('') }}" title="DCS">
							<img src="{{ asset('') }}final.png" srcset="{{ asset('') }}final.png" alt="logo">
						</a>
						</h1>

					</div>
					<a href="#" class="mobile-menu-switch">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</a>
					<div class="menu-container clearfix<?php echo (empty($_COOKIE["cm_header_type"]) || $_COOKIE["cm_header_type"]!="type_2" ? ' second-menu' : ''); ?>">
						<?php
						if(empty($_COOKIE["cm_header_type"])){

							if(File::exists(resource_path('views/layouts/default/menu_1.blade.php'))){
								File::requireOnce(resource_path('views/layouts/default/menu_1.blade.php'));
							}

							//require_once('menu_2.php');

						}else
							if(File::exists(resource_path('views/layouts/default/menu_1.blade.php'))){
								File::requireOnce(resource_path('views/layouts/default/menu_1.blade.php'));
							}
							//require_once('menu.php');
						?>
					</div>



				</div>

{{--                <div class="event__search__floater">--}}
{{--                    <div class="search__anchor">--}}
{{--                        <form id="event-search-form" action="/search" method="GET">--}}
{{--                            <input name="query" type="text" class="search__bar" placeholder="Search...">--}}
{{--                            <input class="search__submit" type="submit">--}}
{{--                            <div class="search__toggler"></div>--}}
{{--                        </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
			</div>
