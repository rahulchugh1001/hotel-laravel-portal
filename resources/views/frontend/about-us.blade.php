<x-header />


<div class="breadcrumb-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-text">
<h2>About Us</h2>
<div class="bt-option">
<a href="{{url('/')}}">Home</a>
<span>About Us</span>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="aboutus-page-section spad">
<div class="container">
<div class="about-page-text">
<div class="row">
<div class="col-lg-6">
<div class="ap-title">
<h2>{{$about->title}}</h2>
<p>{{$about->description}}</p>
</div>
</div>
<div class="col-lg-5 offset-lg-1">
<ul class="ap-services">
    @foreach($service as $ser)
<li><i class="icon_check"></i>{{$ser->name}}</li>
@endforeach
</ul>
</div>
</div>
</div>
<!-- <div class="about-page-services">
<div class="row"> -->
<!-- <div class="col-md-4">
<div class="ap-service-item set-bg" data-setbg="{{asset('frontend/img/about/about-p1.jpg')}}">
<div class="api-text">
<h3>Restaurants Services</h3>
</div>
</div>
</div> -->
<!-- <div class="col-md-4">
<div class="ap-service-item set-bg" data-setbg="{{asset('frontend/img/about/about-p2.jpg')}}">
<div class="api-text">
<h3>Travel & Camping</h3>
</div>
</div>
</div> -->
<!-- <div class="col-md-4"> -->
<!-- <div class="ap-service-item set-bg" data-setbg="{{asset('frontend/img/about/about-p3.jpg')}}"> -->
<!-- <div class="api-text">
<h3>Event & Party</h3>
</div> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div>
</div> -->
</div>
</section>

<!-- youtube video portion -->

<!-- <section class="video-section set-bg" data-setbg="{{asset('frontend/img/video-bg.jpg')}}">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="video-text">
<h2>Discover Our Hotel & Services.</h2>
<p>It S Hurricane Season But We Are Visiting Hilton Head Island</p>
<a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup">
    <img src="{{asset('frontend/img/play.png')}}" alt=""></a>
</div>
</div>
</div>
</div>
</section>
 -->

<section class="gallery-section spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<span>Our Gallery</span>
<h2>Discover Our Work</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<a href="{{route('roomslist')}}"><div class="gallery-item set-bg" data-setbg="{{asset('frontend/img/hotel1.jpg')}}">
<div class="gi-text">
<h3>Room Luxury</h3>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="gallery-item set-bg" data-setbg="{{asset('frontend/img/hotel2.jpg')}}">
<div class="gi-text">
<h3>Room Luxury</h3>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="gallery-item set-bg" data-setbg="{{asset('frontend/img/hotel3.jpg')}}">
<div class="gi-text">
<h3>Room Luxury</h3>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="gallery-item large-item set-bg" data-setbg="{{asset('frontend/img/hotel4.jpg')}}">
<div class="gi-text">
<h3>Room Luxury</h3></a>
</div>
</div>
</div>
</div>
</div>
</section>

<x-footer />