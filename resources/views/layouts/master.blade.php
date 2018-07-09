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
  </head>

  <body>

    <div class="container-fluid" id="app">
      <div class="row row-eq-height">
        <div class="col col-side">
          @include('layouts.sections.sidebar')
        </div>
        <div class="col p-0" style="width: calc(100% - 50px);">
          <!-- navbar -->
            @include('layouts.sections.navbar')
          <!-- content -->
            @yield('content')
          <!-- footer -->
            @include('layouts.sections.footer')
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moveTo/1.7.3/moveTo.min.js"></script>
    <script src="http://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    @yield('scripts')
  <script>
    $(document).ready(function(){
      $(".ninja-btn").click( function() {
        $(this).toggleClass("active");
      });
    });

    function scrollToTop() {
      verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
      element = $('body');
      offset = element.offset();
      offsetTop = offset.top;
      $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }

    function initSvg(){

      svg_1 = new Vivus('svg_1', {type: 'sync', duration: 50, forceRender: true});
      svg_2 = new Vivus('svg_2', {type: 'sync', duration: 50, forceRender: true});

      $('.svg-1').on('click',function(){
        svg_1.reset().play();
      });

      $('.svg-2').on('click',function(){
        svg_2.reset().play();
      });
    }

    window.onload = function(){ initSvg(); }
  </script>
  </body>
</html>
