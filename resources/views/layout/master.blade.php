<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Some description for the page"/>
    <meta name="format-detection" content="telephone=no">
    <title>PLA - Payer loyer Automatiquement | {{ $title }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')  }}">


    <link href="{{ asset('vendor/chartist/css/chartist.min.css')  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css')  }}" rel="stylesheet" type="text/css"/>


    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')  }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('css/style.cs')  }}s" rel="stylesheet" type="text/css"/>


</head>

<body>

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>

<div id="main-wrapper">

    @include('layout.header')

    @include('layout.menu')

    @yield('content')

    @include('layout.footer')

</div>

@include('layout.script')
</body>
</html>
