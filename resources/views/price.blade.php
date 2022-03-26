<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('messages.price')}} | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main conent -->
        <div class="container-fluid img-ahja img-price">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{__('messages.price')}}</h1>
            </div>
        </div>

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
