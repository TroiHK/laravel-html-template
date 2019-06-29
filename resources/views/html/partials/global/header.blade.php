<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('metaTitle') - HTML template</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,500,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="@yield('bodyClass')">
<header id="header" class="header">
    <div class="block-header">
        <div class="container">
            <a href="#" class="logo" title="Portail Gate">
                <img src="{{ asset('images/logo.png') }}" class="img" alt="Portail Gate Logo">
                <img src="{{ asset('images/logo-white.png') }}" class="img-sticky" alt="Portail Gate Logo">
            </a>

            <a href="#" class="btn-collapse" title="">
                <span class="left"></span>
                <span class="right"></span>
                <span class="sr-only">Menu</span>
            </a>
        </div>
    </div>
    <div class="block-banner">
        <div class="container">
            <div class="content">
                <h1 class="title-1">Bienvenue au GATE</h1>
                <h2 class="title-2">Guichet Accueil des Talents Étrangers</h2>
                <div class="detail">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex dolor, ornare et tellus id, vestibulum semper ligula. Ut vel est lorem. Duis purus erat, facilisis sit amet velit sed, efficitur venenatis felis. Vivamus risus tortor.
                </div>
                <div class="group-btn">
                    <a href="#" class="btn-arrow">Découvrir le GATE <i class="i-arrow-right"></i></a>
                    <a href="#" class="btn-arrow">Partenaires et RDV <i class="i-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="feature" style="background-image: url('{{ asset('images/banner.png') }}')">
            <div id="info" class="info">
                <a href="#" class="btn-close" title="Close" data-close="#info"><i class="i-close"></i></a>
                <span class="icon">
                    <i class="i-alert"></i>
                </span>
                <p class="title">Flash Info</p>
                <p class="des">Exceptionnellement le GATE sera fermée ce jour. Les RDV sont annulés et vous serez recontacté ultérieurement pour un nouveau RDV. Merci de votre compréhension.</p>
            </div>
        </div>
    </div>
    <div id="search" class="block-search">
        <form action="#" class="form-default form-search" method="get">
            <div class="input-wrap">
                <input id="input-s" type="text" placeholder="Recherche" class="input-field">
                <label class="input-label" for="input-s">
                    <button class="btn-submit" type="submit">Recherche</button>
                    <span class="input-label-content">Recherche</span>
                </label>
                {{ abc }}
            </div>
        </form>
    </div>
</header>