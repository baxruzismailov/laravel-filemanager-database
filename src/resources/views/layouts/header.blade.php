<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{--    <link href="{{ asset('vendor/file-manager-bi/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('vendor/file-manager-bi/plugins/fontawesemo5/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/file-manager-bi/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/file-manager-bi/css/responsive.css') }}" rel="stylesheet">
    @yield('CSS')

    <title>File Manager</title>
</head>
<body>

