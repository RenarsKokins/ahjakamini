<div class="container-fluid red-background">
    <ul class="list-group list-group-horizontal list-unstyled justify-content-end p-1">
		<li>
			<a href="https://www.facebook.com/profile.php?id=100067985113608" title="Follow on Facebook" style="font-size:24px"><i class="fa fa-facebook text-white px-3"></i></a>
		</li>
		<li>
			<a href="https://www.instagram.com/ahjalatvia/" title="Follow on Instagram" style="font-size:24px"><i class="fa fa-instagram text-white px-3"></i></a>
		</li>
		<li>
			<a href="https://www.facebook.com/profile.php?id=100067985113608" title="Follow on Pinterest" style="font-size:24px"><i class="fa fa-pinterest text-white px-3"></i></a>
		</li>
	</ul>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid flex-row">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarScroll">
			<ul class="navbar-nav me-auto my-md-4 my-lg-0 navbar-nav-scroll m-auto" style="--bs-scroll-height: 100px;">
				<li class="nav-item">
					<a class="nav-link" href="/">{{__('messages.home')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{Route::has('home') ? route('home') : '#'}}">{{__('messages.about_us')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{Route::has('about') ? route('about') : '#'}}">{{__('messages.products')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{Route::has('products') ? route('products') : '#'}}">{{__('messages.price')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{Route::has('gallery') ? route('gallery') : '#'}}">{{__('messages.gallery')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{Route::has('contact') ? route('contact') : '#'}}">{{__('messages.contact')}}</a>
				</li>
			</ul>
		</div>


		<!-- Small logo -->
		<a class="navbar-brand logo-small" href="/">Ahja Latvia</a>


		<!-- Locale -->
		<div class="dropdown">
			<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
				EN
			</a>
			vajag divus dropdown lists ar valstīm, šo vajag uzstādīt kā none, līdz brīdim, kad parādās sandwitch
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="logo-fixed px-4">
	<img src="img/logo.webp" alt="Ahja Latvia" width="160">
</div>