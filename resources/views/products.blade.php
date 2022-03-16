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
            <div class="row">
                <div class="col px-1">
                    <div class="card">
                        <img src="{{url('/')}}/img/products/anneli.jpg" class="card-img-top" alt="fireplace">
                        <div class="card-body">
                            <h5 class="card-title">Example title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn btn px-4 ahja-button" href="#" role="button">{{__('messages.read_more')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col px-1">
                    
                </div>
                <div class="col px-1">
                    
                </div>
            </div>
        </div>

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
