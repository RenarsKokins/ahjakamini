<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('messages.home')}} | Ahja Latvia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
        <link href="css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
        <script src="js/additional.js"></script>
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
                        <a class="ahja-ghost-button btn btn-lg px-4" href="#why-us" role="button">{{__('messages.why_us_title')}}</a>
                    </div>
                    <div class="py-2 px-4">
                        <a class="ahja-button btn btn-lg px-4" href="#contact-form" role="button">{{__('messages.contact_form_button')}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="why-us">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="container-fluid p-5">
                    <div class="position-relative">
                        <img class="img-features" src="/img/features.jpg" alt="fireplace">
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
                        <a class="ahja-button btn btn-lg px-4" href="{{Route::has('about') ? route('about') : '#'}}" role="button">{{__('messages.read_more')}}</a>
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

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
