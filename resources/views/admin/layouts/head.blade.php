<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="icon" href="{{ asset('admin/images/visa.png') }}" type="image/ico" />

    <title>Men Albayt!| | @yield('title') </title>

    <!-- Bootstrap -->
    {!! Html::style(asset('admin/css/bootstrap.min.css')) !!}
    <!-- Font Awesome -->
    {!! Html::style(asset('admin/css/font-awesome.min.css')) !!}
    <!-- Font Toaster -->
    {!! Html::style(asset('admin/css/toastr.min.css')) !!}
    @yield('header')
    <!-- Custom Theme Style -->
    {!! Html::style(asset('admin/css/style.css')) !!}
    <!-- Custom RTL Theme Style -->
    {{--  {!! Html::style(asset('admin/css/style-rtl.css')) !!}  --}}

    
  </head>
