<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('messages.about_us')}} | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main conent -->
        <div class="container-fluid img-ahja img-about">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{__('messages.about_us')}}</h1>
            </div>
        </div>

        <div class="container d-flex flex-row py-5">
            <div class="container px-5 text-center">
                <h1>{{__('messages.about_us_who_are_we')}}</h1>
                <p>{{__('messages.about_us_main_1')}}</p>
                <p>{{__('messages.about_us_main_2')}}</p>
                <p><strong>{{__('messages.about_us_slogan')}}</strong></p>
            </div>
            <div class="container px-5">
                <img class="img-features" src="/img/about.jpg" alt="our team">
            </div>
        </div>

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
