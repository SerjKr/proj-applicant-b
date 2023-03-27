<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 9 JQuery with vite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="antialiased">

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-100 text-gray-600 dark:text-gray-400 dark:bg-gray-900 py-6 sm:py-12">
    <div class="relative bg-white dark:bg-gray-800 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-xl sm:rounded-lg sm:px-10">
        <div class="mx-auto">
            <div class="flex items-center justify-center space-x-6">
                <h3 class="font-bold">Поиск ближайших чисел Фебоначи</h3>
            </div>
            <div class="">
                <div class="pt-8 text-base leading-7">
                    {{--<form id="contactForm">--}}
                    <label for="my_number">
                        <input id="my_number" type="number" value="" class="p-2 border">
                    </label>
                    <button id="button_run" class="border p-2 bg-blue-500 text-white">RUN</button>
                    <div id="errors" class="text-red-500"></div>
                </div>
                <div class="pt-8 text-base leading-7">
                    Результат:
                    <div id="result">-</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ mix('public/js/app.js') }}" defer></script>

</body>
</html>
