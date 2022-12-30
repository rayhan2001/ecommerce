<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('adminAsset')}}/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{asset('adminAsset')}}/./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <link href="{{asset('adminAsset')}}/./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Tagsinput -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
    <!-- summernote -->
    <link href="{{asset('adminAsset')}}/./plugins/summernote/dist/summernote.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('adminAsset')}}/css/style.css" rel="stylesheet">

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">


    <!--**********************************
        Header start
    ***********************************-->
@include('admin.elements.header')
<!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
@include('admin.elements.sideNav')
<!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        @yield('content')
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
@include('admin.elements.footer')
<!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('adminAsset')}}/plugins/common/common.min.js"></script>
<script src="{{asset('adminAsset')}}/js/custom.min.js"></script>
<script src="{{asset('adminAsset')}}/js/settings.js"></script>
<script src="{{asset('adminAsset')}}/js/gleek.js"></script>
<script src="{{asset('adminAsset')}}/js/styleSwitcher.js"></script>

<!-- Chartjs -->
<script src="{{asset('adminAsset')}}/./plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="{{asset('adminAsset')}}/./plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="{{asset('adminAsset')}}/./plugins/d3v3/index.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/topojson/topojson.min.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="{{asset('adminAsset')}}/./plugins/raphael/raphael.min.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="{{asset('adminAsset')}}/./plugins/moment/moment.min.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="{{asset('adminAsset')}}/./plugins/chartist/js/chartist.min.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>





<script src="{{asset('adminAsset')}}/./js/dashboard/dashboard-1.js"></script>

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}


<!-- Tagsinput -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script src="{{asset('adminAsset')}}/./plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

<!-- summernote -->
<script src="{{asset('adminAsset')}}/./plugins/summernote/dist/summernote.min.js"></script>
<script src="{{asset('adminAsset')}}/./plugins/summernote/dist/summernote-init.js"></script>
</body>

</html>
