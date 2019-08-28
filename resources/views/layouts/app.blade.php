<!DOCTYPE html>
<html lang="ru">
<head>
    <title>РозаМаркет</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">
</head>
<body>
<div class="main-wrapper">
    @include('layouts.header')
    <div class="middle">
        <div class="sidebar">
            @include('sidebar.categories')
            @include('sidebar.news')
        </div>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">
                    <h3>Roseraie Thérèse Meyer Estavayer-Le-Lac / Schweiz </h3>
                    <p>Розарий Thérèse Meyer в городе Эставейе-ле-Лак / Швейцария на берегу Нёвшательского озера. <br>
                        Съемки июнь 2019 года. Фотограф <b>Оксана Ткачева (Xenia Tkacheva)</b></p>
                </div>
                <div class="slider"><img src="/img/slider.png" alt="Image" class="image-main"></div>
            </div>
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
</div>
<script src="js/main.js"></script>
</body>
</html>
