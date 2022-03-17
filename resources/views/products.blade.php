<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('messages.products')}} | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main conent -->
        <div class="container-fluid img-landing">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{__('messages.products_title')}}</h1>
            </div>
        </div>
        <div class="container py-5">
            <h2 class="mx-auto text-center"><strong>{{__('messages.products_modular')}}</strong></h2>
        </div>
        <div class="container">
            <div class="d-flex flex-wrap">
                @foreach ($fireplaces as $fireplace)
                    <div class="card">
                        <img src="{{url('/')}}/{{$fireplace->image[0]->path}}" class="card-img-top" alt="fireplace">
                        <div class="card-body">
                            <h5 class="card-title">{{$fireplace->details[0]->title}}</h5>
                            <p class="card-text fw-light">{{$fireplace->details[0]->description}}</p>
                            <p class="card-text fw-light">{{__('messages.products_price')}} {{$fireplace->price}}€</p>
                            <a class="btn btn px-4 ahja-button" href="#" role="button">{{__('messages.read_more')}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
