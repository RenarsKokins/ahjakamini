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
        <div class="container-fluid img-ahja img-products">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{__('messages.products_title')}}</h1>
            </div>
        </div>
        <div class="container py-5">
            <h2 class="mx-auto text-center"><strong>{{__('messages.products_modular')}}</strong></h2>
        </div>

        @foreach ($fireplaces as $fireplace)
        <div class="container">
            <div class="row">
                @foreach ($fireplace as $element)
                <div class="col-sm-4 px-2 px-md-4 py-3">
                    <div class="card border-0 shadow-lg">
                        <img src="{{url('/')}}/{{$element->image[0]->path}}" class="card-img-top" alt="fireplace">
                        <div class="card-body">
                            <h5 class="card-title">{{$element->details[0]->title}}</h5>
                            <p class="card-text fw-light">{{$element->details[0]->description}}</p>
                            <p class="card-text">{{__('messages.products_price')}} {{$element->price}}€</p>
                            <a class="btn btn px-4 ahja-button" href="{{url('/products/' . $element->id)}}" role="button">{{__('messages.read_more')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
