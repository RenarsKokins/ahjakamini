<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home | Ahja Latvia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
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
                        <a class="ahja-button btn btn-lg px-4" href="#" role="button">{{__('messages.quote_button')}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5" id="why-us">
            <div class="d-flex flex-row">
                <div class="container-fluid img-features px-4">

                </div>
                <div class="container-fluid px-4">
                    <h1>{{__('messages.why_us_title')}}</h1>
                    <p>{{__('messages.why_us_main_1')}}</p>
                    <p>{{__('messages.why_us_main_2')}}</p>
                    <p>{{__('messages.why_us_main_3')}}</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
