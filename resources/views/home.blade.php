@extends('layouts.app')

@section('content')
	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Overlay -->
		<div class="overlay"></div>

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active" >
          <img class="first-slide" src="/img/carousel1.jpg" alt="First slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item ">
          <img class="second-slide" src="/img/carousel2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="/img/carousel3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

	<!-- Card -->
	<div class="container container mt-4 mb-5">
	    <h3 class="display-4 text-center"> Technologies </h3>
	    <hr class="bg-dark mb-4 w-25">
	    <div class="row">
	        <div class="col-md-4">
	            <div class="card">
	                <img class="card-img-top" src="https://dummyimage.com/350x250/c7c7c7/000.png" alt="Card image cap">
	                <div class="card-block p-3">
	                    <h4 class="card-title">HTML</h4>
	                    <p class="card-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                    <a href="#" class="btn btn-primary rounded-0 mb-2">Read More</a>
	                </div>
	            </div>
	        </div>
	        <div class="col-md-4">
	            <div class="card">
	                <img class="card-img-top" src="https://dummyimage.com/350x250/c7c7c7/000.png" alt="Card image cap">
	                <div class="card-block p-3">
	                    <h4 class="card-title">CSS</h4>
	                    <p class="card-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                    <a href="#" class="btn btn-primary rounded-0 mb-2">Read More</a>
	                </div>
	            </div>
	        </div>
	        <div class="col-md-4">
	            <div class="card">
	                <img class="card-img-top" src="https://dummyimage.com/350x250/c7c7c7/000.png" alt="Card image cap">
	                <div class="card-block p-3">
	                    <h4 class="card-title">BOOTSTRAP</h4>
	                    <p class="card-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                    <a href="#" class="btn btn-primary rounded-0 mb-2">Read More</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Card -->

	<div class="container mb-5">
	    <div class="row">
	        <div class="col-md-8">
	            <h3 class="display-4">Products</h3>
	            <hr class="bg-dark w-25 ml-0">
	            <p class="lead">
	                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	            </p>
	            <p>
	                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	            </p>
	            <ul class="list-unstyled pl-4">
	                <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
	                <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
	                <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
	            </ul>
	            <a href="#" class="btn btn-outline-primary rounded-0"> Read More</a>
	        </div>
	        <div class="col-md-4 mt-5">
	            <img class="card-img-top" src="https://dummyimage.com/300x300/c7c7c7/000.png" alt="Card image cap">
	        </div>
	    </div>
	</div>

	<div class="container pb-4">
	    <h3 class="display-4 text-center">Clients</h3>
	    <hr class="bg-dark w-25">
	    <div id="carouselLogo" class="carousel slide pt-3" data-ride="carousel">
	        <div class="carousel-inner" role="listbox">
	            <div class="carousel-item active">
	                <ul class="list-inline row  mx-auto">
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                </ul>
	            </div>
	            <div class="carousel-item">
	                <ul class="list-inline row  mx-auto">
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                </ul>
	            </div>
	            <div class="carousel-item">
	                <ul class="list-inline row  mx-auto">
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                    <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</div>

@endsection








