<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('messages.gallery')}} | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main conent -->
        <div class="container-fluid img-ahja img-gallery">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{__('messages.gallery')}}</h1>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col px-1">
                    @foreach ($images_sorted[0] as $image)
                        <div class="gallery-background my-2">
                            <img class="gallery-image" src="{{url('/')}}/{{$image->path}}" alt="fireplace-photos" data-fancybox="gallery">
                        </div>
                    @endforeach
                </div>
                <div class="col px-1">
                    @foreach ($images_sorted[1] as $image)
                        <div class="gallery-background my-2">
                            <img class="gallery-image" src="{{url('/')}}/{{$image->path}}" alt="fireplace-photos" data-fancybox="gallery">
                        </div>
                    @endforeach
                </div>
                <div class="col px-1">
                    @foreach ($images_sorted[2] as $image)
                        <div class="gallery-background my-2">
                            <img class="gallery-image" src="{{url('/')}}/{{$image->path}}" alt="fireplace-photos" data-fancybox="gallery">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
