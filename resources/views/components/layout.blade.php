<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
    <title>GoldTravel</title>
    
    
    
</head>

<body>
    
    <x-navbar />
    
    <x-header header="{{$header}}"/>
    
    
    
    <div class="custom-bg-body">
        {{$slot}}
    </div>
    
    
    
    <x-footer />
    
    
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>