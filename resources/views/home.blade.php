<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('messages.home')}} | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main conent -->
        <div class="container-fluid img-landing">
            <div class="container py-5 flex-row">
                <h1 class="py-4">{{__('messages.home_title')}}</h1>
                <div class="py-4">
                    <div class="py-2 px-4">
                        <a class="btn btn-lg px-4 ahja-ghost-button" href="#why-us" role="button">{{__('messages.why_us_title')}}</a>
                    </div>
                    <div class="py-2 px-4">
                        <a class="btn btn-lg px-4 ahja-button" href="#contact-form" role="button">{{__('messages.contact_form_button')}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="why-us">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="container-fluid p-5">
                    <div class="position-relative">
                        <img class="img-features" src="/img/features.webp" alt="fireplace">
                        <div class="position-absolute d-inline-block" style="left: 35%; top: 20%"><i class="fa-solid fa-magnifying-glass magnifying-glass p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('messages.feature_1')}}"></i></div>
                        <div class="position-absolute d-inline-block" style="left: 35%; top: 35%"><i class="fa-solid fa-magnifying-glass magnifying-glass p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('messages.feature_4')}}"></i></div>
                        <div class="position-absolute d-inline-block" style="left: 56%; top: 71%"><i class="fa-solid fa-magnifying-glass magnifying-glass p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('messages.feature_5')}}"></i></div>
                        <div class="position-absolute d-inline-block" style="left: 64%; top: 19%"><i class="fa-solid fa-magnifying-glass magnifying-glass p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('messages.feature_2')}}"></i></div>
                        <div class="position-absolute d-inline-block" style="left: 64%; top: 45%"><i class="fa-solid fa-magnifying-glass magnifying-glass p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('messages.feature_3')}}"></i></div>
                    </div>
                </div>
                <div class="container-fluid py-3 d-flex align-items-center">
                    <div class="container-fluid">
                        <h1>{{__('messages.why_us_title')}}</h1>
                        <p>{{__('messages.why_us_main_1')}}</p>
                        <p>{{__('messages.why_us_main_2')}}</p>
                        <p>{{__('messages.why_us_main_3')}}</p>
                        <a class="btn btn-lg px-4 ahja-button" href="{{Route::has('about') ? route('about') : '#'}}" role="button">{{__('messages.read_more')}}</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feedback -->
        <x-feedback/>

        <!-- Image carousel -->
        <x-img_carousel :images="$images"/>

        <!-- Get a quote -->
        <x-quote/>

        <!-- Footer -->
        <x-footer/>
        <script>
            $(document).ready(function(){
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                });
            });
        </script>
    </body>
</html>
