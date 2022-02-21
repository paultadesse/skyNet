<!doctype html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Skynet</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="flex flex-col h-screen justify-between bg-gray-900">
            <div>
                <nav-bar></nav-bar>
            </div>
            <div>
                {{-- banner that's located on the left of the screen -middle- --}}
                <register-banner></register-banner>
                {{-- router view  --}}
                <router-view class="mb-auto bg-gray-900 h-full"></router-view>
            </div>
            <div class=" bg-gray-900 ">
                <footer-bar></footer-bar>
            </div>
        </div>
    </div>
</body>
</html>

<!-- custom scroll bar design using the skynet theme -->
<style>
/* Works on Firefox */
* {
  scrollbar-width: thin;
  scrollbar-color: blue GreenLizard;
}

/* Works on Chrome, Edge, and Safari */
*::-webkit-scrollbar {
  width: 7px;
}

*::-webkit-scrollbar-track {
  background: #222;
}

*::-webkit-scrollbar-thumb {
  background-color: #B5F44A;
  border-radius: 5px;
  border: 1px solid black;
}
</style>
