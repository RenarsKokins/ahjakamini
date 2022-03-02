<div class="container-fluid p-0">
    <div class="carousel">
        @foreach ($images as $image)
            <a href="{{url('/')}}/{{$image->path}}">
                <img src="{{url('/')}}/{{$image->path}}" alt="fireplace-photos" data-fancybox="carousel">
            </a>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.carousel').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            variableWidth: true,
            lazyLoad: 'ondemand',
            arrows: false,
            centerMode: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            speed: 1500,
        });
    });
</script>