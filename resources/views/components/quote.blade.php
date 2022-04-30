<div id="contact-form" class="container-fluid bg-light p-0 py-4">
    <div class="container">
        <div class="row p-4 gx-md-5">
            <div class="col-md-5 py-4 d-md-inline d-none">
                <div class="position-relative">
                    <img class="img-features" src="/img/quote.webp" alt="fireplace">
                </div>
            </div>
            <div class="col-md-7 py-4 d-flex flex-column justify-content-center">
                <form id="contact_form">
                    @csrf
                    <h1 class="text-center">{{__('messages.contact_title')}}</h1>
                    <div class="row my-4">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">{{__('messages.name')}}</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">{{__('messages.email')}}</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">{{__('messages.number')}}</label>
                                <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phoneNumber">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">{{__('messages.subject')}}</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea id="message" name="message" class="form-control" placeholder="{{__('messages.aditional')}}" rows="6" required></textarea>
                    </div>
                    <div id="success" class="alert alert-success d-none" role="alert">{{__('messages.success')}}</div>
                    <div id="fail" class="alert alert-danger d-none" role="alert">{{__('messages.fail')}}</div>
                    <div class="d-flex">
                        <button type="submit" class="btn ahja-button ms-auto">{{__('messages.send')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#contact_form").submit(function(event) {
        event.preventDefault();
        var form = $(this);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var post = $.post("{{route('form.submit')}}", form.serialize());

        post.fail(function(data) {
            $("#fail").removeClass("d-none");
            console.log("Failed", data);
        });
        post.done(function(data) {
            $("#fail").addClass("d-none");
            $("#success").removeClass("d-none");
            console.log("Succeeded", data);
        });
    });
</script>