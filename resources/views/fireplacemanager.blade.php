<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manage fireplaces | Ahja Latvia</title>

        <x-headlinks/>
    </head>
    <body>
        <!-- Navbar -->
        <x-navbar/>

        <!-- Main content -->
        <div class="container-fluid img-ahja img-products">
            <div class="container py-5 flex-row">
                <h1 class="py-4">Fireplace manager</h1>
            </div>
        </div>

        <div class="container py-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="create-fireplace-tab" data-bs-toggle="tab" data-bs-target="#create-fireplace" type="button" role="tab" aria-controls="create-fireplace" aria-selected="true">Create fireplace</button>
                    <button class="nav-link" id="update-fireplace-tab" data-bs-toggle="tab" data-bs-target="#update-fireplace" type="button" role="tab" aria-controls="update-fireplace" aria-selected="false">Update fireplace</button>
                    <button class="nav-link" id="delete-fireplace-tab" data-bs-toggle="tab" data-bs-target="#delete-fireplace" type="button" role="tab" aria-controls="delete-fireplace" aria-selected="false">Delete fireplace</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="create-fireplace" role="tabpanel" aria-labelledby="create-fireplace">
                    <!-- Create form -->
                    @if ($errors->any())
                        <div class="alert alert-danger mt-2">
                            {{ $errors }}
                        </div>
                    @endif
                    <form enctype="multipart/form-data" class="py-5" action="{{route('fireplacemanager.create')}}" method="post" name="create-form" id="create-form">
                        @csrf
                        <div class="mb-3">
                            <label for="title-box" class="form-label">Fireplace title LV, EN, RU</label>
                            <div id="title-box" class="d-flex">
                                <input value="{{ old('title-lv') }}" type="text" class="form-control mr-1" id="title-lv" name="title-lv">
                                <input value="{{ old('title-en') }}" type="text" class="form-control mx-1" id="title-en" name="title-en">
                                <input value="{{ old('title-ru') }}" type="text" class="form-control ml-1" id="title-ru" name="title-ru">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description-lv" class="form-label">Fireplace description LV</label>
                            <textarea placeholder="Description for the fireplace..." class="form-control" id="description-lv" name="description-lv">{{ old('description-lv') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description-en" class="form-label">Fireplace description EN</label>
                            <textarea placeholder="Description for the fireplace..." class="form-control" id="description-en" name="description-en">{{ old('description-en') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description-ru" class="form-label">Fireplace description RU</label>
                            <textarea placeholder="Description for the fireplace..." class="form-control" id="description-ru" name="description-ru">{{ old('description-ru') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Fireplace price</label>
                            <input value="{{ old('price') }}" type="number" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="finish-box" class="form-label">Fireplace finish LV, EN, RU</label>
                            <div id="finish-box" class="d-flex">
                                <input value="{{ old('finish-lv') }}" type="text" class="form-control mr-1" id="finish-lv" name="finish-lv">
                                <input value="{{ old('finish-en') }}" type="text" class="form-control mx-1" id="finish-en" name="finish-en">
                                <input value="{{ old('finish-ru') }}" type="text" class="form-control ml-1" id="finish-ru" name="finish-ru">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="size-box" class="form-label">Fireplace width, height, length</label>
                            <div class="d-flex" id="size-box">
                                <input value="{{ old('width') }}" type="number" class="form-control mr-1" id="width" name="width">
                                <input value="{{ old('height') }}" type="number" class="form-control mx-1" id="height" name="height">
                                <input value="{{ old('length') }}" type="number" class="form-control ml-1" id="length" name="length">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inner-size" class="form-label">Fireplace inner width, height, length</label>
                            <input value="{{ old('inner-size') }}" type="text" class="form-control" id="inner-size" name="inner-size">
                        </div>
                        <div class="mb-3">
                            <label for="mass" class="form-label">Fireplace mass</label>
                            <input value="{{ old('mass') }}" type="number" class="form-control" id="mass" name="mass">
                        </div>
                        <div class="mb-3">
                            <label for="heating" class="form-label">Fireplace heating</label>
                            <input value="{{ old('heating') }}" type="text" class="form-control" id="heating" name="heating">
                        </div>
                        <div class="mb-3">
                            <label for="main-img" class="form-label">Fireplace main image</label>
                            <input type="file" class="form-control" id="main-img" name="main-img" accept="image/png,image/jpg,image/jpeg,image/webp">
                        </div>
                        <div class="mb-3">
                            <label for="other-img" class="form-label">Fireplace other images</label>
                            <input type="file" class="form-control" id="other-img" name="other-img[]" multiple accept="image/png,image/jpg,image/jpeg,image/webp">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="show-in-gallery" name="show-in-gallery">
                            <label class="form-check-label" for="show-in-gallery">Show in gallery</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Create!</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="update-fireplace" role="tabpanel" aria-labelledby="update-fireplace">
                    <!-- Update form -->
                    
                </div>
                <div class="tab-pane fade" id="delete-fireplace" role="tabpanel" aria-labelledby="delete-fireplace">
                    <!-- Delete form -->
                </div>
            </div>
        </div>

        <!-- Footer -->
        <x-footer/>
    </body>
</html>
