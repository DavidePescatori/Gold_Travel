<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
    <title>GoldTravel</title>



</head>

<body>

<x-navbar />
 <div class="container-fluid">
    <div class="row">
        <div id="divTitle" class="d-flex justify-content-center align-items-center">
            <h1 id="title" class="text-center color-Gold">Gold<span class="color-seagalBlue">Travel</span></h1>
        </div>
        

    </div>
 </div>

<div class="min-vh-100">
    
</div>



<x-footer />


   @livewireScripts
</body>
</html>