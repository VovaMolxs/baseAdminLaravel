@php
$configData = Helper::appClasses();
$isFront = true;
@endphp

@section('layoutContent')

@extends('backend/layouts/commonMaster' )

@include('backend/layouts/sections/navbar/navbar-front')

<!-- Sections:Start -->
@yield('content')
<!-- / Sections:End -->

@include('backend/layouts/sections/footer/footer-front')
@endsection
