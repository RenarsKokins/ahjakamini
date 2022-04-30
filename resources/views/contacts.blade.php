<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('messages.contact')}} | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main conent -->
        <div class="container-fluid img-ahja img-contacts">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{__('messages.contact')}}</h1>
            </div>
        </div>

        <div class="container-fluid bg-light p-0">
            <div class="container row justify-content-center py-5 mx-auto">
                <div class="col d-flex flex-column">
                    <div class="bg-white shadow-lg rounded-3 my-5 px-2 py-3">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-mobile-screen-button contact-icon"></i>
                        </div>
                        <div class="pt-4 text-center">
                            <h3>{{__('messages.contact_us_phone')}}</h3>
                            <p class="pt-4">(+371) 26 177 676</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-column">
                    <div class="bg-white shadow-lg rounded-3 my-5 px-2 py-3">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-envelope contact-icon"></i>
                        </div>
                        <div class="pt-4 text-center">
                            <h3>{{__('messages.contact_us_email')}}</h3>
                            <p class="pt-4">ahjalatvia@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-column">
                    <div class="bg-white shadow-lg rounded-3 my-5 px-2 py-3">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-location-dot contact-icon"></i>
                        </div>
                        <div class="pt-4 text-center">
                            <h3>{{__('messages.contact_us_address')}}</h3>
                            <p class="pt-4">Jelgava, Latvia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
