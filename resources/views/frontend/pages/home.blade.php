@extends('layout.frontend_app')
@section('title')
    Home
@endsection
@section('content')
    <!-- SECTION -->
    @include('frontend.elements.shop_section')
    <!-- /SECTION -->

    <!-- SECTION -->
    @include('frontend.elements.newProduct_section')
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    @include('frontend.elements.hotDeal_section')
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    @include('frontend.elements.topSelling_section')
    <!-- /SECTION -->

    <!-- SECTION -->
    @include('frontend.elements.productWidget_section')
    <!-- /SECTION -->

@endsection
