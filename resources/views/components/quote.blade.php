<div id="contact-form" class="container-fluid bg-light p-0 py-4">
    <div class="container">
        <div class="row p-4 gx-md-5">
            <div class="col-md-6 py-4 order-2 order-md-1">
                <div class="position-relative">
                    <img class="img-features" src="/img/features.jpg" alt="fireplace">
                </div>
            </div>
            <div class="col-md-6 py-4 order-1 order-md-2 d-flex flex-column justify-content-center">
                <form>
                    <h2 class="text-center">{{__('messages.contact_title')}}</h2>
                    <div class="row my-4">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">{{__('messages.name')}}</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">{{__('messages.email')}}</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">{{__('messages.number')}}</label>
                                <input type="tel" class="form-control" id="phone" aria-describedby="phoneNumber">
                            </div>
                            <div class="mb-3">
                                <label for="which" class="form-label">{{__('messages.subject')}}</label>
                                <input type="text" class="form-control" id="which">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="{{__('messages.aditional')}}" rows="6"></textarea>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn ahja-button ms-auto">{{__('messages.send')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>