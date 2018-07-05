<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{ Config::get('app.name') }} @yield('title') </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- METAS -->
      <meta name="description" content="Soy carlos anselmi este es mi portafolio web, soy diseñador y programador web"/>
      <meta name="author" content="Carlos Anselmi | carlos@anselmi.com.ve">
      <meta name="keywords" content="carlos, anselmi, carlos anselmi, portafolio, developer, design, desarrollador, diseñador, web, website, freelancer"/>
      <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="MobileOptimized" content="width">
      <meta name="HandheldFriendly" content="true">
      <meta name="robots" content="index,follow"/>
      <meta property="og:site_name" content="anselmi.com.ve">
      <meta property="og:title" content="@yield('meta:title')">
      <meta property="og:url" content="https://www.anselmi.com.ve">
      <meta property="og:description" content="@yield('meta:description')">
      <meta property="og:type" content="@yield('meta:description', 'article')">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CDN-LIBBRERIAS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    @yield('styles')

    <style>
      body.color{
        background-color: #333;
        color: #fff;
      }
      .side:before,.side:after{ background-color: #fff !important; }
      .side__object:before,.side__object:after{ background-color: #fff !important; }
      body.color a{ color: #fff; }
      body.color a:hover,
      body.color a:active{ color: #fff; }
    </style>
  </head>

  <body class="color">

    <div class="container-fluid" id="app">
      <div class="row row-eq-height">
        <div class="col col-side">
          @include('layouts.sections.sidebar')
        </div>
        <div class="content col h-100">
          <!-- navbar -->
            @include('layouts.sections.navbar')
          <!-- content -->
          <div class="container-fluid">
            @yield('content')
          </div>
          <!-- footer -->
            @include('layouts.sections.footer')
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

  </body>
</html>
