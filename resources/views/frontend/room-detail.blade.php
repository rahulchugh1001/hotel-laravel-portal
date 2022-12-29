<x-header />


<div class="breadcrumb-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-text">
<h2>Our Rooms</h2>
<div class="bt-option">
<a href="{{route('index')}}">Home</a>
<a href="{{route('roomslist')}}">Rooms</a>
<span>Rooms</span>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="room-details-section spad">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="room-details-item">
  @if(File::exists($room->image))
    <img src="{{url('/')}}/{{$room->image}}" alt="">
   @else
   No Image Found
   @endif
<div class="rd-text">
<div class="rd-title">
<h3>{{$room->name}}</h3>
<div class="rdt-right">
<!-- <div class="rating">
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star"></i>
<i class="icon_star-half_alt"></i>
</div>
<a href="#">Booking Now</a> -->
</div>
</div>
<h2>₹{{number_format($room->price)}}<span>/Pernight</span></h2>
<table>
<tbody>
<tr>
<td class="r-o">Size:</td>
<td>{{$room->size}}</td>
</tr>
<tr>
<td class="r-o">Capacity:</td>
<td>{{$room->capacity}}</td>
</tr>
<tr>
<td class="r-o">Bed:</td>
<td>{{$room->bed}}</td>
</tr>
<tr>
<td class="r-o">Services:</td>
<td> 

@foreach(json_decode($room->service) as $index => $ser)
 @if($index),@endif  {{App\Models\Service::getServiceDetail($ser)}} 
@endforeach
  
</td>
</tr>
</tbody>
</table>
<p class="f-para">{!! $room->description !!}</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="room-booking">
<h3>Your Reservation</h3>
<form method="POST">
@csrf
<div class="check-date">
<label for="date-in">Name:</label>
<input type="text" class="form-control" required placeholder="Full Name" name="name">
</div>

<div class="check-date">
<label for="date-out">Email:</label>
<input type="email" class="form-control" required placeholder="Email" name="email">
</div>

<div class="check-date">
    <label for="date-out">Phone:</label>
    <input type="number" class="form-control" required placeholder="Phone" name="phone">
</div>
<div class="check-date">
<label for="date-in">Check In:</label>
<input type="text" class="date-input" id="date-in" name="check_in" placeholder="Check In">
<i class="icon_calendar"></i>
</div>
<div class="check-date">
<label for="date-out">Check Out:</label>
<input type="text" class="date-input" id="date-out" name="check_out" placeholder="Check Out">
<i class="icon_calendar"></i>
</div>
<div class="check-date">
<label for="guest">Guests:</label>
<input type="number" class="form-control" placeholder="Guests" name="guest">
</div>
<div class="select-option">
<label for="room">Room:</label>
<select id="room" name="rooms" class="room">
<option value="1">1 Room</option>
<option value="2">2 Rooms</option>
<option value="3">3 Rooms</option>
<option value="4">4 Rooms</option>
<option value="5+">5+ Rooms</option>

</select>
</div>

<button type="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>
</section>


<x-footer />