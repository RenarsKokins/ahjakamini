<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $fireplace->details[0]->title }} | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main conent -->
        <div class="container-fluid img-landing">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{ $fireplace->details[0]->title }}</h1>
            </div>
        </div>

        <div class="container py-5 px-md-5 px-1">
            <div class="d-flex flex-md-row flex-column py-5">
                <div class="main-img container-fluid px-lg-5 px-1">
                    <img class="gallery-image" src="{{url('/')}}/{{$fireplace->image[0]->path}}" data-fancybox="carousel" alt="fireplace">
                </div>
                <div class="container-fluid py-md-0 py-5">
                    <h2 class="py-2"><strong>{{$fireplace->details[0]->title}}</strong></h2>
                    <h3 class="py-2">{{__('messages.product_about')}}</h3>
                    <table class="table table-light">
                        <caption>{{__('messages.product_about_price')}}</caption>
                        <tbody>
                            <tr>
                                <td>
                                    {{__('messages.product_description')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->description }}
                                </td>
                            </tr>
                            @if ($fireplace->details[0]->finish)
                            <tr>
                                <td>
                                    {{__('messages.product_finish')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->finish }}
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td>
                                    {{__('messages.product_width')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->width }}{{' mm'}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{__('messages.product_height')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->height }}{{' mm'}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{__('messages.product_depth')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->depth }}{{' mm'}}
                                </td>
                            </tr>
                            @if ($fireplace->details[0]->internal_dimensions)
                            <tr>
                                <td>
                                    {{__('messages.product_internal')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->internal_dimensions }}{{' mm'}}
                                </td>
                            </tr>
                            @endif
                            @if ($fireplace->details[0]->mass)
                            <tr>
                                <td>
                                    {{__('messages.product_mass')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->mass }} {{' kg'}}
                                </td>
                            </tr>
                            @endif
                            @if ($fireplace->details[0]->heating)
                            <tr>
                                <td>
                                    {{__('messages.product_heating')}}
                                </td>
                                <td>
                                    {{ $fireplace->details[0]->heating }}
                                </td>
                            </tr>
                            @endif
                            <tr class="red-text">
                                <td>
                                    {{__('messages.products_price')}}
                                </td>
                                <td>
                                    {{ $fireplace->price}}{{ '€*' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn px-4 ahja-button" href="#contact-form" role="button">{{__('messages.product_get_info')}}{{$fireplace->details[0]->title}}</a>
                </div>
            </div>
        </div>

        <!-- Image carousel -->
        <div class="container-fluid pb-5">
            <h1 class="text-center py-3">{{__('messages.product_gallery')}}</h1>
            <x-img_carousel :images="$images" :autoplay="true"/>
        </div>
        
        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
