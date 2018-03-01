<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('meta_description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit')">
    <meta name="keywords" content="@yield('meta_keywords', 'Lorem ipsum, dolor, sit amet, elit')">

    <title>@yield('meta_title', 'Title - ' . env('APP_NAME'))</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('headers')
</head>
<body class="">
    @include('layouts.header')

    @include('layouts.main')

    @include('layouts.footer')

    @yield('footers')
</body>
</html>
