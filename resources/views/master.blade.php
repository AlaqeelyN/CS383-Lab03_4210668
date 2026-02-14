<!DOCTYPE html>
<html>
    <head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Lab 03 - Q02&&03</title>

    </head>
	<body>
	@php
		$home_active = '';
		$products_active = '';
		$pricing_active = '';
		$contact_active = '';
		if($active == 'home')
			$home_active = 'active';
		else if($active == 'products')
			$products_active = 'active';
		else if($active == 'pricing')
			$pricing_active = 'active';
		else if($active == 'contact')
			$contact_active = 'active';
	@endphp	
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <div class="container-fluid">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link {{ $home_active }}" href="{{ url('/') }}">Home</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link {{ $products_active }}" href="{{ url('/products') }}">Products</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link {{ $pricing_active }}" href="{{ url('/pricing') }}">Pricing</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link {{ $contact_active }}" href="{{ url('/contact') }}">Contact</a>
		  </li>
		</ul>
	  </div>
	</nav>
  <div class="p-5 bg-light text-black">
	@yield('header')
  
  </div>



	<div class="container mt-5">
	  <div class="row">
		<div class="col-sm-3">
		  <ul class="nav nav-pills flex-column">
			<li class="nav-item">
			  <a class="nav-link active" href="/">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="/products">Products</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="/pricing">Pricing</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="/contact">Contact</a>
			</li>
		  </ul>
		  <hr class="d-sm-none">
		</div>
		<div class="col-sm-6">
			@yield('content')
		</div>
    @hasSection('list')
      <div class="col-sm-3">
        @yield('list')
      </div>
    @endif
	  </div>
	</div>
	

	<<div class="container-fluid p-5 bg-dark text-white">
<ul class="list-group">
<div class="container">

<div class="row">
  <div class="col-4">
  <h2>About Us</h2>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur, odio autem minus fugit id fugiat rem corporis quod modi in quam veniam, cum reiciendis mollitia. Consequuntur autem excepturi fugit doloremque!</p>
</div>
<div class="col-4">

<h2>Follow Us, Everywhere!</h2>

  <ul>
    <li>Facebook</li>
    <li>Instagram</li>
    <li>YouTube</li>
    <li>Twitter</li>
	<li>Snapchat</li>
    <li>TikTok</li>
    <li>Reddit</li>
	<li>Threads</li>
	<li>LinkedIn</li>
	<li>Telegram</li>
	<li>BlueSky</li>
	<li>Twitch</li>
    <li>BlackBoard</li>
  </ul>

</div>

<div class="col-4">
  <h2>Contact Us</h2>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email: &nbsp</label><a>IT@info.com</a>
  </div>
  <label for="comment">Address: &nbsp</label><a>Information Technology Department at NULL</a><br>
Unknown, Unknown, Saudi Arabia <br>
XXXX, KSA<br>
			
			</div>
		</div>
	</div>



	</body></html>
