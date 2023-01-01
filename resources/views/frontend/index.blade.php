<x-header />

<section class="hero-section">
	<div class="hero-slider owl-carousel">
<div class="hs-item set-bg" data-setbg="frontend/img/hero/hero-1.jpg"></div>
<div class="hs-item set-bg" data-setbg="frontend/img/hero/hero-2.jpg"></div>
<div class="hs-item set-bg" data-setbg="frontend/img/hero/hero-3.jpg"></div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="hero-text">
<h1>SPResidence A Luxury Hotel</h1>
<p>Here are the best hotel booking sites, including recommendations for international
travel and for finding low-priced hotel rooms.</p>
<a href="#" class="primary-btn">Discover Now</a>
</div>
</div>
<div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
<div class="booking-form">
<h3>Booking Your Hotel</h3>
<form method="post">
	@csrf
<div class="check-date">
<label for="date-in">Name:</label>
<input type="text" placeholder="Your Name" required class="form-control" name="name" >
</div>
<div class="check-date">
<label for="date-out">Phone:</label>
<input type="number" placeholder="Your Mobile Number" class="form-control" name="phone" >
</div>
<div class="check-date">
<label for="date-in">Check In:</label>
<input type="text" class="date-input" placeholder="Check In" id="date-in" name="check_in">
<i class="icon_calendar"></i>
</div>
<div class="check-date">
<label for="date-out">Check Out:</label>
<input type="text" class="date-input" placeholder="Check Out" id="date-out" name="check_out">
<i class="icon_calendar"></i>
</div>

<button type="submit">Submit Details</button>
</form>
</div>
</div>
</div>
</div>

</section>


<section class="aboutus-section spad">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="about-text">
<div class="section-title">
<span>About Us</span>
<h2>Intercontinental LA <br />Westlake Hotel</h2>
</div>
<p class="f-para">SPResidence.com is a leading online accommodation site. We’re passionate about
travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41
languages.</p>
<p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
apartment, guest house, or tree house, we’ve got you covered.</p>
<a href="#" class="primary-btn about-btn">Read More</a>
</div>
</div>
<div class="col-lg-6">
<div class="about-pic">
<div class="row">
<div class="col-sm-6">
<img src="frontend/img/about/about-1.jpg" alt="">
</div>
<div class="col-sm-6">
<img src="frontend/img/about/about-2.jpg" alt="">
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="services-section spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<span>What We Do </span>
<h2>Discover Our Services</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="service-item">
<i class="flaticon-036-parking"></i>

<h4>Travel Plan</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="service-item">
<i style="font-size: 60px;" class="fa-solid fa-utensils"></i>
<h4>Catering Service</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="service-item">
<i class="flaticon-026-bed"></i>
<h4>Babysitting</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="service-item">
<i class="flaticon-024-towel"></i>
<h4>Laundry</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="service-item">
<i class="flaticon-044-clock-1"></i>
<h4>Hire Driver</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="service-item">
<i class="flaticon-012-cocktail"></i>
<h4>Bar & Drink</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna.</p>
</div>
</div>
</div>
</div>
</section>


<section class="hp-room-section">
<div class="container-fluid">
<div class="hp-room-items">
<div class="row">
@foreach($room as $data)
<div class="col-lg-3 col-md-6">
<div class="hp-room-item set-bg" data-setbg="{{url('/')}}/{{$data->background_image}}">
<div class="hr-text">
<h3>{{$data->name}}</h3>
<h2>₹{{number_format($data->price)}}<span>/Pernight</span></h2>
<table>
<tbody>
<tr>
<td class="r-o">Size:</td>
<td>{{$data->size}}</td>
</tr>
<tr>
<td class="r-o">Capacity:</td>
<td>{{$data->capacity}}</td>
</tr>
<tr>
<td class="r-o">Bed:</td>
<td>{{$data->bed}}</td>
</tr>
<tr>
<td class="r-o">Services:</td>
<td>@for($i = 0; $i <= 1; $i++)
    @if($i),@endif  {{App\Models\Service::getServiceDetail(json_decode($data->service)[$i])}} 
    @endfor </td>
</tr>
</tbody>
</table>
<a href="{{route('roomsdetail',$data->slug)}}" class="primary-btn">More Details</a>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</section>


<section class="testimonial-section spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<span>Testimonials</span>
<h2>What Customers Say?</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8 offset-lg-2">
<div class="testimonial-slider owl-carousel">
<div class="ts-item">
<p>After a construction project took longer than expected, my husband, my daughter and I
needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
city, neighborhood and the types of housing options available and absolutely love our
vacation at SPResidence Hotel.</p>
<div class="ti-author">
<div class="rating">
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star-half_alt"></i>
</div>
<h5> - Alexander Vasquez</h5>
</div>
<img src="frontend/img/testimonial-logo.png" alt="">
</div>
<div class="ts-item">
<p>After a construction project took longer than expected, my husband, my daughter and I
needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
city, neighborhood and the types of housing options available and absolutely love our
vacation at SPResidence Hotel.</p>
<div class="ti-author">
<div class="rating">
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star-half_alt"></i>
</div>
<h5> - Alexander Vasquez</h5>
</div>
<img src="frontend/img/testimonial-logo.png" alt="">
</div>
</div>
</div>
</div>
</div>
</section>


<section class="blog-section spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<span>Hotel News</span>
<h2>Our Blog & Event</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="blog-item set-bg" data-setbg="frontend/img/blog/blog-1.jpg">
<div class="bi-text">
<span class="b-tag">Travel Trip</span>
<h4><a href="#">Tremblant In Canada</a></h4>
<div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="blog-item set-bg" data-setbg="frontend/img/blog/blog-2.jpg">
<div class="bi-text">
<span class="b-tag">Camping</span>
<h4><a href="#">Choosing A Static Caravan</a></h4>
<div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="blog-item set-bg" data-setbg="frontend/img/blog/blog-3.jpg">
<div class="bi-text">
<span class="b-tag">Event</span>
<h4><a href="#">Copper Canyon</a></h4>
<div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="blog-item small-size set-bg" data-setbg="frontend/img/blog/blog-wide.jpg">
<div class="bi-text">
<span class="b-tag">Event</span>
<h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
<div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="blog-item small-size set-bg" data-setbg="frontend/img/blog/blog-10.jpg">
<div class="bi-text">
<span class="b-tag">Travel</span>
<h4><a href="#">Traveling To Barcelona</a></h4>
<div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
</div>
</div>
</div>
</div>
</div>
</section>

<x-footer />
