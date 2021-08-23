<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!--  FONTAWESEMO 5 CSS -->
    <link href="{{ asset('vendor/file-manager-bi/plugins/fontawesemo5/css/all.css') }}" rel="stylesheet">

    <!--  PHOTOSWIPE CSS -->
    <link rel='stylesheet prefetch' href='{{ asset('vendor/file-manager-bi/plugins/photoswipe/css/photoswipe.min.css') }}'>
    <link rel='stylesheet prefetch' href='{{ asset('vendor/file-manager-bi/plugins/photoswipe/css/default-skin.css') }}'>
    <link rel="stylesheet" href="{{ asset('vendor/file-manager-bi/plugins/photoswipe/css/custom.css') }}">

    <!--  MAIN CSS  -->
    <link href="{{ asset('vendor/file-manager-bi/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/file-manager-bi/css/responsive.css') }}" rel="stylesheet">

    @yield('CSS')

    <title>File Manager</title>
</head>
<body>

