<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TheWeighter</title>

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
      <div class="flex w-full h-[5vh] justify-between items-center bg-button text-white">
        <div class="flex w-[90%] items-center justify-center">©Copyright - Weighter™</div>
        <div class="flex w-[10%] h-full flex-row items-center justify-center">
          <button class="flex w-8 h-8 justify-center items-center bg-menuitem m-2"></button>
          <button class="flex w-8 h-8 justify-center items-center bg-menuitem m-2"></button>
          <button class="flex w-8 h-8 justify-center items-center bg-menuitem m-2"></button>
        </div>
      </div>
    </body>
</html>