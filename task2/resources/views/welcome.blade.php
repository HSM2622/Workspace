<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TheWeighter</title>

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>

    <body class="antialiased">
        <div id='header'>
            @include('header')
        </div>
        <div class="flex w-full h-[88vh] items-center border-b-1 flex-col">
        <div class="flex w-full h-[35%] justify-center items-center bg-banner text-[30px] text-black">일상에서 찾아가는 건강</div>
        <img src="{{URL::asset('/images/banner.png')}}" class="flex h-[50vh]"></img>
        <div class="flex w-full h-[65%] justify-center items-center mt-20">
            <!-- <div class="flex w-1/5 h-[60%] justify-center items-center text-[50px] bg-blue-200">MAIN 1</div>
            <div class="flex w-1/5 h-[60%] justify-center items-center text-[50px] bg-red-200">MAIN 2</div>
            <div class="flex w-1/5 h-[60%] justify-center items-center text-[50px] bg-yellow-200">MAIN 3</div>
            <div class="flex w-1/5 h-[60%] justify-center items-center text-[50px] bg-pink-200">MAIN 4</div> -->
        </div>
        </div>
        <div id='footer'>
            @include('footer')
        </div>
    </body>

</html>