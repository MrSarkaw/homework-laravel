<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>homework</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


       
    </head>
    <body class="flex items-center justify-center h-screen bg-gray-900">
        <div class="space-y-5">       
            <div class="flex items-center justify-center w-40 h-40 duration-150 bg-gray-400 rounded-full hover:h-60 hover:w-60 hover:text-2xl">
                <a href="{{ route('profile') }}">Profile</a>
            </div>
            <div class="flex items-center justify-center w-40 h-40 duration-150 bg-gray-400 rounded-full hover:h-60 hover:w-60 hover:text-2xl">
                <a href="">Biography</a>
            </div>
        </div>
    </body>
</html>
