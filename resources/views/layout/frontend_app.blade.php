<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontEndAsset')}}/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('frontEndAsset')}}/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontEndAsset')}}/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('frontEndAsset')}}/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    @include('frontend.elements.top_header')
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    @include('frontend.elements.main_header')
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
@include('frontend.elements.nav')
<!-- /NAVIGATION -->

@yield('content')

<!-- NEWSLETTER -->
@include('frontend.elements.newsletter_section')
<!-- /NEWSLETTER -->

<!-- FOOTER -->
@include('frontend.elements.footer')
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset('frontEndAsset')}}/js/jquery.min.js"></script>
<script src="{{asset('frontEndAsset')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontEndAsset')}}/js/slick.min.js"></script>
<script src="{{asset('frontEndAsset')}}/js/nouislider.min.js"></script>
<script src="{{asset('frontEndAsset')}}/js/jquery.zoom.min.js"></script>
<script src="{{asset('frontEndAsset')}}/js/main.js"></script>

</body>
</html>
